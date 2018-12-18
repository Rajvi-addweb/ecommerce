<?php

namespace Drupal\ecomme\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

class ecommeSettingsForm extends ConfigFormBase {

  public function getFormId() {
    return 'ecomme_admin_settings';
  }
  
  protected function getEditableConfigNames() {
    return [
      'ecomme.settings',
    ];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $vid = 'category';
    $terms =\Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid);
    foreach ($terms as $terms_key => $terms_value) {
      $category_name[] = $terms_value->name;
    }
    $config = $this->config('ecomme.settings');

    $num_names = $config->get('get_counts');
  
    // We have to ensure that there is at least one name field.
    if ($num_names === NULL) {
      $name_field = $config->set('num_names', 1);
      $num_names = 1;
    }

    $form['#tree'] = TRUE;
    $form['featured_listing'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Ecommerce Home Page Category Product Listing Settings Form'),
      '#prefix' => '<div id="featured-listing-wrapper">',
      '#suffix' => '</div>',
    ];

    $option_listing = array('1' => 'Product Listing', '2' => 'Category Listing');

    for ($i = 0; $i < $num_names; $i++) {
      $form['featured_listing']['category'][$i] = [
        '#type' => 'select',
        '#title' => $this->t('Category'),
        '#options' => $category_name,
        '#default_value' => $config->get('category'),
      ];
     
      $form['featured_listing']['listing_type'][$i] = array(
        '#type' => 'select',
        '#title' => $this->t('Listing Type'),
        '#default_value' => $config->get('listing_type'),
        '#options' => $option_listing,
      );

    }
    $form['featured_listing']['actions'] = [
      '#type' => 'actions',
    ];
    $form['featured_listing']['actions']['add_name'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add one more'),
      '#submit' => ['::addOne',],
      '#ajax' => [
        'callback' => '::addmoreCallback',
        'wrapper' => 'featured-listing-wrapper',
      ],
    ];

    // If there is more than one name, add the remove button.
    if ($num_names > 1) {
      $form['featured_listing']['actions']['remove_name'] = [
        '#type' => 'submit',
        '#value' => $this->t('Remove one'),
        '#submit' => ['::removeCallback',],
        '#ajax' => [
          'callback' => '::addmoreCallback',
          'wrapper' => 'featured-listing-wrapper',
        ],
      ];
    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * Callback for both ajax-enabled buttons.
   *
   * Selects and returns the fieldset with the names in it.
   */
  public function addmoreCallback(array &$form, FormStateInterface $form_state) {
    return $form['featured_listing'];
  }

  /**
   * Submit handler for the "add-one-more" button.
   *
   * Increments the max counter and causes a rebuild.
   */
  public function addOne(array &$form, FormStateInterface $form_state) {
    $name_field = $form_state->get('num_names');
    $add_button = $name_field + 1;
    $form_state->set('num_names', $add_button);

    // Since our buildForm() method relies on the value of 'num_names' to
    // generate 'name' form elements, we have to tell the form to rebuild. If we
    // don't do this, the form builder will not call buildForm().
    $form_state->setRebuild();
  }

  /**
   * Submit handler for the "remove one" button.
   *
   * Decrements the max counter and causes a form rebuild.
   */
  public function removeCallback(array &$form, FormStateInterface $form_state) {
    $name_field = $form_state->get('num_names');
    if ($name_field > 1) {
      $remove_button = $name_field - 1;
      $form_state->set('num_names', $remove_button);
    }

    // Since our buildForm() method relies on the value of 'num_names' to
    // generate 'name' form elements, we have to tell the form to rebuild. If we
    // don't do this, the form builder will not call buildForm().
    $form_state->setRebuild();
  }
  

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $formValues = $form_state->getValues();
    $category = $formValues['featured_listing']['category'];
    $listing = $formValues['featured_listing']['listing_type'];


    // print('<pre style="color:red;">');
    // print_r($formValues);
    // print('</pre>');
    // exit;

      // Retrieve the configuration
    $config = $this->configFactory->getEditable('ecomme.Settings');
      // Set the submitted configuration setting
    $config->set('category', $formValues['featured_listing']['category']);
      // You can set multiple configurations at once by making
      // multiple calls to set()
    $config->set('listing_type', $formValues['featured_listing']['listing_type']);
    $config->set('get_counts', count($formValues['featured_listing']['listing_type']));
    $config->save();
   /* dump($config);
    exit();
*/
    parent::submitForm($form, $form_state);
  }

}