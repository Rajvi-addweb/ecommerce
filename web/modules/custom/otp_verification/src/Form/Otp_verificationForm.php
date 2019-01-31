<?php
/**
 * @file
 * Contains \Drupal\otp_verification\Form\Otp_verificationForm.
 */
namespace Drupal\otp_verification\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;


class Otp_verificationForm extends FormBase {

  public function getFormId() {
    return 'otp_verification_form';
  }
  
  public function buildForm(array $form, FormStateInterface $form_state) {

    $current_path = \Drupal::service('path.current')->getPath();
    $path_args = explode('/', $current_path);
    if (count($path_args) < 5) {
      $form['Enter_OTP'] = array(
        '#type' => 'item',
        '#markup' => 'Invalid Access Key',
      );
    }
    else {

      $query = \Drupal::database()->select('otp_verification', 'ov');
      $query->fields('ov', ['otp_number', 'otp_verify']);
      $query->condition('ov.otp_key', $path_args[4]);
      $result = $query->execute()->fetchAll();
      
      $otp_verification_code = $result[0]->otp_number;
      $is_verified = $result[0]->otp_verify;

      if (!$result) {
        $form['Enter_OTP'] = array(
          '#type' => 'item',
          '#markup' => 'Invalid Access Key',
        );
      }
      else {
        if ($is_verified) {
          drupal_set_message(t('OTP already verified, please login'), 'status');
          $response = new RedirectResponse('/user/login');
          $response->send();
          exit;
        }

        $form['Enter_OTP'] = array(
          '#type' => 'textfield',
          '#title' => t('Enter OTP'),

        );

        $form['access_key'] = array(
          '#type' => 'hidden',
          '#default_value' => $path_args[4],
        );

         $form['submit'] = array(
          '#type' => 'submit',
          '#value' => t('Submit'),
        );

        $form['resendbutton'] = array(
          '#type' => 'submit',
          '#value' => t('Resend otp'),
          '#submit' => array('::resendbutton'),
          '#limit_validation_errors' => array(),
        );
      }

    }

    return $form;
  }
  
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
    $triggerdElement = $form_state->getTriggeringElement();
    $idofTriggeredElement = $triggerdElement['#id'];

    if ($idofTriggeredElement == 'edit-submit') {
      $user_id = $_SESSION["user_id"];
      $access_key = $form_state->getValue('access_key');
      $query = \Drupal::database()->select('otp_verification', 'nfd');
      $query->fields('nfd', ['otp_number']);
      $query->condition('nfd.otp_key', $access_key);
      $result = $query->execute()->fetchAll();
      $otp_verification_code = $result[0]->otp_number;
      $otp = $form_state->getValue('Enter_OTP');
      if ($otp == $otp_verification_code) {
        $query = \Drupal::database()->update('otp_verification');
        $query->fields(['otp_verify' => 1]);
        $query->condition('otp_number', $otp_verification_code);
        $query->execute();

        drupal_set_message('Otp is right.');
      } 
      else {
        drupal_set_message(t('Please enter valid password'), 'error');
        $response = new RedirectResponse('/user/registation/verify/' . $access_key);
        $response->send();
      }

    }

  }

  public function resendbutton(array &$form, FormStateInterface $form_state) {

    $access_key = $form_state->getCompleteform()['access_key']['#value'];
    $query = \Drupal::database()->select('otp_verification', 'osv');
      $query->fields('osv', ['uid']);
      $query->condition('osv.otp_key', $access_key);
      $result = $query->execute()->fetchAll();
      $uid = $result[0]->uid;
    
    if (!empty($uid)) {
      $account = \Drupal\user\Entity\User::load($uid);
      $mobile_number = '';
      if ($account->hasField('field_mo')) {
        $mobile_number = $account->get('field_mo')->getString();
      }
      $api_key = \Drupal::config('otp_verification.settings')->get('api_key');
      $six_digit_random_number = mt_rand(100000, 999999);

      $query = \Drupal::database()->update('otp_verification');
        $query->fields (['otp_number' => $six_digit_random_number]);
        $query->condition ('uid', $uid);
        $query->execute();

      $fields = array(
          "sender_id" => "FSTSMS",
          "message" => $six_digit_random_number,
          "language" => "english",
          "route" => "p",
          "numbers" => $mobile_number,
      );

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($fields),
        CURLOPT_HTTPHEADER => array(
          "authorization: H2jOAgK1PUGUdzYhl8PmLFZyUZzNWGiDkjygbJnSbZwZbYs77ER9CpGFH8n6",
          "accept: */*",
          "cache-control: no-cache",
          "content-type: application/json"
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
      }

  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $url = Url::fromRoute('<front>');
    $form_state->setRedirectUrl($url);

  }

}
