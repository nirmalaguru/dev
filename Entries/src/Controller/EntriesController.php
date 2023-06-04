<?php
/**
 * @file
 * @author Nirmala
 * Contains \Drupal\entries\Controller\EntriesController.
 * Please place this file under your entries(module_root_folder)/src/Controller/
 */
namespace Drupal\entries\Controller;
/**
 * Provides route responses for the Example module.
 */
class EntriesController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function myPage() {
    $element = array(
      '#markup' => 'yesss ya ya yey yey',
    );
    return $element;
  }
}



?>