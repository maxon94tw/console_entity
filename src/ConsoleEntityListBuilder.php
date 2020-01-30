<?php

namespace Drupal\console_entity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Console entity entities.
 *
 * @ingroup console_entity
 */
class ConsoleEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Console entity ID');
    $header['name'] = $this->t('Name');
    $header['prefered_brand'] = $this->t('Prefered brand');
    $header['products_owned_count'] = $this->t('Products count');
    $header['registered'] = $this->t('Date registered');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\console_entity\Entity\ConsoleEntity $entity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.console_entity.edit_form',
      ['console_entity' => $entity->id()]
    );
    $row['prefered_brand'] = $entity->prefered_brand->value;
    $row['products_owned_count'] = $entity->products_owned_count->value;
    $row['registered'] = gmdate("M d Y", $entity->created->value);
    return $row + parent::buildRow($entity);
  }

}
