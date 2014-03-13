<?php

/**
 * @file
 * Contains \Drupal\salutation\Controller\SalutationController.
 */

namespace Drupal\salutation\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for block example routes.
 */
class SalutationController extends ControllerBase {
  /**
   * A simple controller method to explain what the block example is about.
   */
  public function salutationPage() {
    $build = array(
      '#markup' => t('My first custom page!'),
    );

    return $build;
  }

  /**
   * Admin page.
   *
   * Todo: add form on this page.
   */
  public function salutationAdminPage() {
    $build = array(
      '#markup' => t('My first custom admin page!'),
    );

    return $build;
  }

}
