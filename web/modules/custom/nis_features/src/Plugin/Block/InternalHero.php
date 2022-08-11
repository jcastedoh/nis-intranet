<?php

namespace Drupal\nis_features\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Hero Internal Block.
 *
 * @Block(
 *   id = "internal_hero_block",
 *   admin_label = @Translation("Hero Internal Page Block"),
 *   category = @Translation("Hero Internal Page Block"),
 * )
 */
class InternalHero extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $module_handler = \Drupal::service('module_handler');
    $module_path = $module_handler->getModule('nis_features')->getPath();

    $hero = [
      'title' => 'Test',
      'intro_text' => 'Hello World',
      'header_image' => $module_path . '/assets/images/default.png',
      'hero_class' => 'custom-hero',
      'bgxpos' => 'center',
      'bgypos' => 'center',
    ];

    return [
      '#theme' => 'internal_hero',
      '#hero' => $hero,
      '#cache' => [
        'max-age' => 0
      ]
    ];
  }
}
