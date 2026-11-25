<?php
$dictionary=array(
'ESPHOME_BRIDGE_ENDPOINT'=>'Адрес API',
'ESPHOME_BRIDGE_METHOD'=>'HTTP-метод',
'ESPHOME_BRIDGE_TOKEN'=>'Токен доступа',
'ESPHOME_BRIDGE_REGION'=>'Регион / маршрут',
'ESPHOME_BRIDGE_TRACKING'=>'Номер отправления',
'ESPHOME_BRIDGE_PAYLOAD'=>'Шаблон POST-запроса',
'ESPHOME_BRIDGE_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'ESPHOME_BRIDGE_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}