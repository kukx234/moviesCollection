<?php

  const DB_HOST = '127.0.0.1';
  const DB_NAME = 'movie_collection';
  const DB_CHARSET = 'utf8mb4';
  const DB_USER = 'root';
  const DB_PASSWORD ='';

  try {
      $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET,DB_USER,DB_PASSWORD);
  } catch (PDOException $e) {
      echo $e->getMessage();
  }
?>
