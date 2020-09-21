<?php
  $baseURL = "https://api.rawg.io/api";
  
  function api(String $route = 'games'): object {
    global $baseURL;
    global $url;
    
    $response = @file_get_contents("{$baseURL}/{$route}");

    if(empty($response)) {
      header("Location: {$url}/pages/errors/404");
    }

    return json_decode($response);
  };