<?php
  function path() {
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $path = in_array('pages', $url);

    return !$path ? '.' : '../../';
  }

  $url = path();

  $id = $_GET['id'] ?? '-';

  if ($id === '-') {
    header("Location: {$url}pages/errors/404");
  }

  include_once($url.'/services/api.php');

  $response = api("games/{$id}");

  if (empty($response)) {
    header("Location: {$url}pages/errors/404");
  }

  $screenshots = api("games/{$id}/screenshots");

  $data = $response;
