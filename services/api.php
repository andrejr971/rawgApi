<?php
  $baseURL = "https://api.rawg.io/api";
  
  $api = fn(String $route = 'games'): object => json_decode(file_get_contents("{$baseURL}/{$route}"));