#!/usr/bin/env php
<?php
// test.php for test in /Users/alexandrearnaud/ETNA/arnaud_a/include/data_parser
// 
// Made by Alexandre ARNAUD
// Login   <arnaud_a@etna-alternance.net>
// 
// Started on  Mon Nov 18 11:40:54 2013 Alexandre ARNAUD
// Last update Mon Nov 18 17:47:15 2013 Alexandre ARNAUD
//
error_reporting(E_ALL);
require_once ('CreateTable.class.php');
require_once ('BD.class.php');

$bd = new BD('data');
$name = 'Test';
$fields =
  array(
	array('name' => 'test', 'type' => 'integer', 
	      'primarykey' => false,
	      'null' => true),
	array('name' => 'test', 'type' => 'integer', 
	      'primarykey' => false,
	      'null' => true)
	);
$bd->createTable($name, $fields);
$bd->persist();
?>