<?php exit("Permission Denied"); ?>
2015-10-14 04:02:59
array (
  'action' => 'collection.index',
  'db' => 'superchat_db_dev',
  'collection' => 'Playlist',
  'field' => 
  array (
    0 => '_id',
  ),
  'order' => 
  array (
    0 => 'desc',
  ),
  'format' => 'array',
  'pagesize' => '10',
  'criteria' => 'array (
)',
  'command' => 'findAll',
)
================
2015-10-14 04:03:25
array (
  'db' => 'superchat_db_dev',
  'collection' => 'Playlist',
  'action' => 'collection.index',
  'format' => 'array',
  'criteria' => 'array (
\'IsChannel\' => new MongoInt32(1),
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
