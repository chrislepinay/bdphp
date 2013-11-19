<?php
// CreateTable.class.php for createTable in /Users/alexandrearnaud/ETNA/arnaud_a/include/data_parser
// 
// Made by Alexandre ARNAUD
// Login   <arnaud_a@etna-alternance.net>
// 
// Started on  Mon Nov 18 10:57:22 2013 Alexandre ARNAUD
// Last update Mon Nov 18 17:40:49 2013 Alexandre ARNAUD
//
require_once ('Table.class.php');
require_once ('Descriptor.class.php');

class CreateTable{
  public $table;

  function __construct(){
    $this->table = new Table();
  }
  function getTable(){
    return $this->table;
  }

  function setName($name, $nameList){
    if (in_array($name, $nameList))
      return FALSE;
    $this->table->name = $name;
    return TRUE;
  }

  function setFields($fields){
    foreach ($fields as $field){
      if ($field['primarykey']){
	$this->table->descriptor->setPrimaryKey($field['primarykey']);
      }else{
	$this->table->descriptor->addField($field);
      }
    }
    return TRUE;
  }
}
?>