<?php
  function path() {
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $path = in_array('pages', $url);
  
    return !$path ? '.' : '../../';
  }
