<?php exit("Permission Denied"); ?>
2014-08-06 03:25:31
array (
  'db' => 'afinos_db',
  'collection' => 'UserProfile',
  'action' => 'collection.index',
  'format' => 'array',
  'criteria' => 'array(
"UserName" => "kaka"	
)',
  'newobj' => 'array(
	\'$set\' => array (
		//your attributes
	)
)',
  'field' => 
  array (
    0 => '_id',
    1 => '',
    2 => '',
    3 => '',
  ),
  'order' => 
  array (
    0 => 'desc',
    1 => 'asc',
    2 => 'asc',
    3 => 'asc',
  ),
  'limit' => '0',
  'pagesize' => '10',
  'command' => 'findAll',
)
================
