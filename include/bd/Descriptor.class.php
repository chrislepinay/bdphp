<?php
// Descriptor.class.php for descriptor in /Users/alexandrearnaud/ETNA/arnaud_a/include/data_parser
// 
// Made by Alexandre ARNAUD
// Login   <arnaud_a@etna-alternance.net>
// 
// Started on  Mon Nov 18 10:07:27 2013 Alexandre ARNAUD
// Last update Mon Nov 18 17:18:32 2013 Alexandre ARNAUD
//
class Descriptor{
  static $types = array('integer', 'bool', 'float', 'string');
  private $name;
  private $id;
  private $fields = array();

  function __construct(){}

  function setName($name){
    $this->name = $name;
  }

  function setPrimaryKey($name, $type){
    $this->id = array($val, $type);
  }

  function addField($field){
    if (!in_array($field['name'], $this->fields)){
      if (!in_array($field['type'], Descriptor::$types)){
	echo "Use invalid type";
	return FALSE;
      }
      else{
	$this->fields[] =
	  array('name' => $field['name'],
		'type' => $field['type'],
		'null' => $field['null']
		);
      }
    }
    else{
      echo "This field already exist";
      return FALSE;
    }
  }

  function getFieldList(){
    return $fieldList;
  }
}
?>