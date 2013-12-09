<?php
/**
 * @file
 * cambridge_person_profile.features.inc
 */

/**
 * Implements hook_views_api().
 */
function cambridge_person_profile_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function cambridge_person_profile_node_info() {
  $items = array(
    'cambridge_person_profile' => array(
      'name' => t('Person Profile'),
      'base' => 'node_content',
      'description' => t('A content type to add a person\'s profile to a website containing information such as name and contact details. '),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  return $items;
}
