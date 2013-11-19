<?php
// BD.class.php for BD in /Users/alexandrearnaud/ETNA/arnaud_a/include/data_parser
//
// Made by Alexandre ARNAUD
// Login   <arnaud_a@etna-alternance.net>
//
// Started on  Mon Nov 18 14:17:03 2013 Alexandre ARNAUD
// Last update Tue Nov 19 15:32:24 2013 Alexandre ARNAUD
//
require_once ('BdParser.class.php');

class BD{
  private $bdParser;
  private $file;
  private $tables;

  function __construct($file){
    $this->file = $file;
    $this->bdParser = new BdParser();
  }

  function persist(){
    file_put_contents('data', serialize($this->tables));
  }

  function createTable($name, $fields){
    if(($this->tables = $this->bdParser->load($this->file)) !== FALSE){
      $table = new CreateTable();
      $tablesNames = $this->bdParser->getTablesName($this->tables);
      if (!$table->setName($name, $tablesNames))
	return FALSE;
      if (!$table->setFields($fields))
	return FALSE;
      $this->tables[] = $table->getTable();
    }
    else
	return FALSE;
  }
}
?>