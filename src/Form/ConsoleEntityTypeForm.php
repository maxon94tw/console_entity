<?php

namespace Drupal\console_entity\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ConsoleEntityTypeForm.
 */
class ConsoleEntityTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $console_entity_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $console_entity_type->label(),
      '#description' => $this->t("Label for the Console entity type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $console_entity_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\console_entity\Entity\ConsoleEntityType::load',
      ],
      '#disabled' => !$console_entity_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $console_entity_type = $this->entity;
    $status = $console_entity_type->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Console entity type.', [
          '%label' => $console_entity_type->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Console entity type.', [
          '%label' => $console_entity_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($console_entity_type->toUrl('collection'));
  }

}
