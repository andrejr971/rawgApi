<?php
  function path() {
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $path = in_array('pages', $url);

    return !$path ? '.' : '../../';
  }

  $url = path();

  include_once($url.'/services/api.php');

  if (isset($_POST['search'])) {
    $search = str_replace(' ', '%20', $_POST['search']);
    
    $response = api("games?search={$search}");

    $data = $response->results;    
  }