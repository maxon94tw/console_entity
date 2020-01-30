<?php

/**
 * @file
 * Contains console_entity.page.inc.
 *
 * Page callback for Console entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Console entity templates.
 *
 * Default template: console_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_console_entity(array &$variables) {
  // Fetch ConsoleEntity Entity Object.
  $console_entity = $variables['elements']['#console_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
