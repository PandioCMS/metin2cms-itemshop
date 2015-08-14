<?php

function get_config($category, $item) {
  global $config;

  if (array_key_exists($category, $config)) {
    $config_item_template = sprintf('%s.%s', $category, $item);
    if (in_array($config_item_template, $config[$category])) {
      return $config[$category][$config_item_template];
    }
    unset($config_item_template);
  }
}

function get_version() {
  define('SHOP_VERSION', '1.0');
  return SHOP_VERSION;
}

function set_config($category, $item) {
  $config_item_template = sprintf('%s.%s', $category, $item);
  $config[$category][$config_item_template];
  unset($config_item_template);
}

function redirect($page, $ext = 'php') {
  if (!headers_sent()) {
    return header(sprintf('Location: %s/%s.%s', get_config('core', 'websiteUrl'), $page, $ext));
  }
}

function sanitize($var) {
	return filter_var($var, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
