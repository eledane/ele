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

    $form['first_screen'] = [
      '#type' => 'details',
      '#title' => t('Home Description on first screen'),
      '#open'  => TRUE,
    ];

    $form['first_screen']['home_first_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Branding'),
      '#default_value' => $config->get('home_first_title'),
    );

    $form['first_screen']['home_first_desc'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('Branding description'),
        '#default_value' => $config->get('home_first_desc'),
     ); 

    $form['first_screen']['home_second_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Photography'),
      '#default_value' => $config->get('home_second_title'),
    );

    $form['first_screen']['home_second_desc'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('Photography description'),
        '#default_value' => $config->get('home_second_desc'),
     ); 

    $form['first_screen']['home_third_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Web design'),
      '#default_value' => $config->get('home_third_title'),
    );

    $form['first_screen']['home_third_desc'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('Web design description'),
        '#default_value' => $config->get('home_third_desc'),
     ); 


    $form['second_screen'] = [
      '#type' => 'details',
      '#title' => t('Home description on second screen'),
      '#open'  => FALSE,
    ];

    $form['second_screen']['home_second_what'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('what'),
      '#default_value' => $config->get('home_second_what'),
    );

    $form['second_screen']['home_second_what_desc'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('What description'),
        '#default_value' => $config->get('home_second_what_desc'),
     ); 

    $form['second_screen']['home_second_who'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('who'),
      '#default_value' => $config->get('home_second_who'),
    );
    $form['second_screen']['home_second_who_desc'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('Who description'),
        '#default_value' => $config->get('home_second_who_desc'),
     ); 

    $form['second_screen']['home_second_how'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('how'),
      '#default_value' => $config->get('home_second_how'),
    );
    $form['second_screen']['home_second_how_desc'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('How description'),
        '#default_value' => $config->get('home_second_how_desc'),
     ); 


    $form['third_screen'] = [
      '#type' => 'details',
      '#title' => t('Hoem description on third screen'),
      '#open'  => FALSE,
    ];

    $form['third_screen']['home_third_small_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Small title on picture'),
      '#default_value' => $config->get('home_third_small_title'),
    );

    $form['third_screen']['home_third_strong_title'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Strong title on picture'),
        '#default_value' => $config->get('home_third_strong_title'),
     ); 

    $form['home_work_section'] = [
      '#type' => 'details',
      '#title' => t('Home work section'),
      '#open'  => FALSE,
    ];

    $form['home_work_section']['home_work_section_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Work section title'),
      '#default_value' => $config->get('home_work_section_title'),
    );

    $form['home_work_section']['home_work_section_desc'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Work section description'),
        '#default_value' => $config->get('home_work_section_desc'),
     ); 

    $form['home_contact_section'] = [
      '#type' => 'details',
      '#title' => t('Home contact section'),
      '#open'  => FALSE,
    ];

    $form['home_contact_section']['home_contact_section_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Home contact section title'),
      '#default_value' => $config->get('home_contact_section_title'),
    );

    $form['home_contact_section']['home_contact_section_desc'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Home contact section description'),
        '#default_value' => $config->get('home_contact_section_desc'),
     ); 

    $form['site_footer'] = [
      '#type' => 'details',
      '#title' => t('Elements on footer'),
      '#open'  => FALSE,
    ];

    $form['site_footer']['site_footer_email'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Email'),
      '#default_value' => $config->get('site_footer_email'),
    );

    $form['site_footer']['site_footer_phone'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Phome'),
      '#default_value' => $config->get('site_footer_phone'),
    );

    $form['site_footer']['site_footer_address'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Address'),
      '#default_value' => $config->get('site_footer_address'),
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
      ->set('home_second_title', $values['home_second_title'])
      ->set('home_second_desc', $values['home_second_desc'])
      ->set('home_third_title', $values['home_third_title'])
      ->set('home_third_desc', $values['home_third_desc'])
      ->set('home_second_what', $values['home_second_what'])
      ->set('home_second_what_desc', $values['home_second_what_desc'])
      ->set('home_second_who', $values['home_second_who'])
      ->set('home_second_who_desc', $values['home_second_who_desc'])
      ->set('home_second_how', $values['home_second_how'])
      ->set('home_second_how_desc', $values['home_second_how_desc'])
      ->set('home_third_small_title', $values['home_third_small_title'])
      ->set('home_third_strong_title', $values['home_third_strong_title'])
      ->set('home_work_section_title', $values['home_work_section_title'])
      ->set('home_work_section_desc', $values['home_work_section_desc'])
      ->set('home_contact_section_title', $values['home_contact_section_title'])
      ->set('home_contact_section_desc', $values['home_contact_section_desc'])
      ->set('site_footer_email', $values['site_footer_email'])
      ->set('site_footer_phone', $values['site_footer_phone'])
      ->set('site_footer_address', $values['site_footer_address'])
   ->save();
  }

}
