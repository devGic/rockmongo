<?php exit("Permission Denied"); ?>
2016-01-18 10:23:59
array (
  'db' => 'local',
  'collection' => 'test_collection',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
\'name\'=>"hello"
}',
  'newobj' => '{
	\'$set\': {
		//your attributes
	}
}',
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
2016-01-18 10:24:16
array (
  'db' => 'local',
  'collection' => 'test_collection',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
  \'name\'=>\'hello\'
}',
  'newobj' => '{
	\'$set\': {
		//your attributes
	}
}',
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
