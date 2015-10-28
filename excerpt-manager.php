<?php
//Plugin Name: Excerpt Manager
//Author: Ethan Clevenger
//Author URI: http://ethanclevenger91.github.io
//Version: 1.0.0
//Description: Provides `get_better_excerpt($length, $more)` so you have true control over your excerpts, on the fly.

class ExcerptManager {
	private static $self = false;
  private static $length = false;
  private static $more = false;

	function __construct() {
	}

  public static function excerpt_length($length) {
    return self::getLength();
  }

  public static function excerpt_more($more) {
    return self::getMore();
  }

  public static function setLength($length) {
    self::$length = $length;
  }

  public static function getLength() {
    return self::$length;
  }

  public static function setMore($more) {
    self::$more = $more;
  }

  public static function getMore() {
    return self::$more;
  }

	//Keep this method at the bottom of the class
	public static function getInstance() {
		if(!self::$self) {
			self::$self = new self();
		}
		return self::$self;
	}
}

ExcerptManager::getInstance();

function get_better_excerpt($length = false, $more = false) {
  if($length !== false) {
    ExcerptManager::setLength($length);
    add_filter('excerpt_length', 'ExcerptManager::excerpt_length');
  }
  if($more !== false) {
    ExcerptManager::setMore($more);
    add_filter('excerpt_more', 'ExcerptManager::excerpt_more');
  }
  ob_start();
  the_excerpt();
  $excerpt = ob_get_clean();
  if($length !== false) {
    ExcerptManager::setLength(false);
    remove_filter('excerpt_length', 'ExcerptManager::excerpt_length');
  }
  if($more !== false) {
    ExcerptManager::setMore(false);
    remove_filter('excerpt_more', 'ExcerptManager::excerpt_more');
  }
  return $excerpt;
}
