<?php
$dictionary=array(
'ESPHOME_BRIDGE_ENDPOINT'=>'Адреса API',
'ESPHOME_BRIDGE_METHOD'=>'HTTP-метод',
'ESPHOME_BRIDGE_TOKEN'=>'Токен доступу',
'ESPHOME_BRIDGE_REGION'=>'Регіон / маршрут',
'ESPHOME_BRIDGE_TRACKING'=>'Номер відправлення',
'ESPHOME_BRIDGE_PAYLOAD'=>'Шаблон POST-запиту',
'ESPHOME_BRIDGE_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'ESPHOME_BRIDGE_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}