<?php
/**
 * @file
 * Contains \Drupal\rating\Plugin\Block\XaiBlock.
 */
namespace Drupal\rating\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class RatingBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'This block list the rating.',
    );
  }
}