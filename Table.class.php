<?php
// Table.class.php for Table in /Users/alexandrearnaud/ETNA/arnaud_a/include/data_parser
// 
// Made by Alexandre ARNAUD
// Login   <arnaud_a@etna-alternance.net>
// 
// Started on  Mon Nov 18 11:26:01 2013 Alexandre ARNAUD
// Last update Mon Nov 18 17:44:34 2013 Alexandre ARNAUD
//
require_once ('Descriptor.class.php');

class Table{
  public $name;
  public $descriptor;
  public $data;

  function __construct(){
    $this->descriptor = new Descriptor();
  }
}
?>