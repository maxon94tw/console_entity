<?php

namespace Drupal\console_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Console entity type entity.
 *
 * @ConfigEntityType(
 *   id = "console_entity_type",
 *   label = @Translation("Console entity type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\console_entity\ConsoleEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\console_entity\Form\ConsoleEntityTypeForm",
 *       "edit" = "Drupal\console_entity\Form\ConsoleEntityTypeForm",
 *       "delete" = "Drupal\console_entity\Form\ConsoleEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\console_entity\ConsoleEntityTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "console_entity_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "console_entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/console_entity_type/{console_entity_type}",
 *     "add-form" = "/admin/structure/console_entity_type/add",
 *     "edit-form" = "/admin/structure/console_entity_type/{console_entity_type}/edit",
 *     "delete-form" = "/admin/structure/console_entity_type/{console_entity_type}/delete",
 *     "collection" = "/admin/structure/console_entity_type"
 *   }
 * )
 */
class ConsoleEntityType extends ConfigEntityBundleBase implements ConsoleEntityTypeInterface {

  /**
   * The Console entity type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Console entity type label.
   *
   * @var string
   */
  protected $label;

}
