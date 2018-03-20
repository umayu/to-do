<?php

  define ('db_name' , 'todolist');
  define ('db_username' , 'root');
  define ('db_password' , 'root');
  define ('pdo_dsn' , 'mysql:host=localhost;charset=utf8;dbname=todolist');


  function db_connect() {
    try {
      $pdo = new PDO(pdo_dsn , db_username , db_password);
      $pdo -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo 'Error : ' . $e -> getMessage();
      die();
    }
  }


?>