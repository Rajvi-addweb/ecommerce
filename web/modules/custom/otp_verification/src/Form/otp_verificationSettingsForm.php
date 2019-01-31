<?php

namespace Drupal\otp_verification\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

class otp_verificationSettingsForm extends ConfigFormBase {

  public function getFormId() {
    return 'otp_verification_admin_settings';
  }
  
  protected function getEditableConfigNames() {
    return [
      'otp_verification.settings',
    ];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $config = $this->config('otp_verification.settings');

    $form['user_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('User Name'),
      '#default_value' => $config->get('user_name'),
    ]; 
    $form['password'] = [
      '#type' => 'password',
      '#title' => $this->t('Password'),
      '#default_value' => $config->get('password'),
    ];
    $form['api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Api key'),
      '#default_value' => $config->get('api_key'),
    ];

    return parent::buildForm($form, $form_state);
  }  
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $values = $form_state->getValues();
    $username = $values['user_name'];
    $password = $values['password'];
    $apikey = $values['api_key'];
    
    $this->config('otp_verification.settings')
      ->set('user_name', $username)
      ->set('password', $password)
      ->set('api_key', $apikey)
      ->save();

    parent::submitForm($form, $form_state);
  }

}