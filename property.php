<?php

class Config {

  private static $config = [];

  public static function set($name, $value) {
    self::$config[$name] = $value;
  }

  public static function get($name) {
    return self::$config[$name];
  }

  public static function exist($name) {
    if(isset(self::$config[$name]))
      return true;
    else return false;
  }

  public static function remove($name) {
    if(self::exist($name))
      unset(self::$config[$name]);

  }

}

Config::set('title', 'Tytul strony');
Config::set('newsOnPage', 5);

echo 'Tytul strony ' . Config::get('title');
echo 'Newsow na stronie ' . Config::get('newsOnPage');

Config::remove('title');

if (Config::exist('title'))
  echo 'Title istnieje';
else
  echo 'Title nie istnieje';
