<?php

namespace Drupal\entries;

use Drupal\Core\Session\AccountInterface;

/**
 * Class EntriesCustomService
 * @package Drupal\entries\EntriesCustomService
 */
class EntriesCustomService {

  protected $currentUser;

  /**
   * EntriesCustomService constructor.
   * @param AccountInterface $currentUser
   */
  public function __construct(AccountInterface $currentUser) {
    $this->currentUser = $currentUser;
  }


  /**
   * @return \Drupal\Component\Render\MarkupInterface|string
   */
  public function getData() {
    return $this->currentUser->getDisplayName();
  }

}