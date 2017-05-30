<?php
namespace Drupal\ele_form\Form;

use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configures forms module settings.
 */
class EleSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ele_form_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'ele_form.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, Request $request = NULL) {
    $config = $this->config('ele_form.settings');

    $form['home_first_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Branding'),
      '#default_value' => $config->get('home_first_title'),
    );

    $form['home_first_desc'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('Branding description'),
        '#default_value' => $config->get('home_first_desc'),
     ); 

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('ele_form.settings')
      ->set('home_first_title', $values['home_first_title'])
      ->set('home_first_desc', $values['home_first_desc'])
      ->save();
  }

}
