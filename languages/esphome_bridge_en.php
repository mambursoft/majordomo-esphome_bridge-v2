<?php
$dictionary=array(
'ESPHOME_BRIDGE_ENDPOINT'=>'API endpoint',
'ESPHOME_BRIDGE_METHOD'=>'HTTP method',
'ESPHOME_BRIDGE_TOKEN'=>'Access token',
'ESPHOME_BRIDGE_REGION'=>'Region / route',
'ESPHOME_BRIDGE_TRACKING'=>'Tracking number',
'ESPHOME_BRIDGE_PAYLOAD'=>'POST payload template',
'ESPHOME_BRIDGE_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'ESPHOME_BRIDGE_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}