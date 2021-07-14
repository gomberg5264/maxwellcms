<?php

class cms{
  var $host;
  var $username;
  var $password;
  var $table;
  
  private function buildDB(){
    $sql = <<<MySQL_QUERY
        CREATE TABLE IF NOT EXISTS testDB (
            title	VARCHAR(150),
            bodytext	TEXT,
            created	VARCHAR(100)

              
      )
   
