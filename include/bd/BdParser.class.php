<?php
// BdParser.class.php for BdFileParser in /Users/alexandrearnaud/ETNA/arnaud_a/include/data_parser
// 
// Made by Alexandre ARNAUD
// Login   <arnaud_a@etna-alternance.net>
// 
// Started on  Mon Nov 18 15:23:01 2013 Alexandre ARNAUD
// Last update Tue Nov 19 15:54:22 2013 Alexandre ARNAUD
//
class BdParser{
  function __construct(){}

  function load($file){
    if ($fd = @fopen($file, 'a+')){
      if ($bd = @unserialize(file))
	$tables = $bd;
      else
	$tables = array();
      fclose($fd);
      return $tables;
    }
    else{
      echo "bdphp : Can't open bd file\n";
      return FALSE;
    }
  }

  function getTablesName($tables){
    $tablesName = array();
    foreach ($tables as $table){
      $tablesName[] = $table['name'];
    }
    return $tablesName;
  }
}
?>