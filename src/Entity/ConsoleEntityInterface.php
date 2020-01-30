<?php

namespace Drupal\console_entity\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Console entity entities.
 *
 * @ingroup console_entity
 */
interface ConsoleEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Console entity name.
   *
   * @return string
   *   Name of the Console entity.
   */
  public function getName();

  /**
   * Sets the Console entity name.
   *
   * @param string $name
   *   The Console entity name.
   *
   * @return \Drupal\console_entity\Entity\ConsoleEntityInterface
   *   The called Console entity entity.
   */
  public function setName($name);

  /**
   * Gets the Console entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Console entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Console entity creation timestamp.
   *
   * @param int $timestamp
   *   The Console entity creation timestamp.
   *
   * @return \Drupal\console_entity\Entity\ConsoleEntityInterface
   *   The called Console entity entity.
   */
  public function setCreatedTime($timestamp);

}
