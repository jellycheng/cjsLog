<?php
/**
 * Created by PhpStorm.
 * User: jelly
 * Date: 2016/8/1
 * Time: 11:43
 */
require __DIR__ . '/vendor/autoload.php';

$channel = 'dev';
$log = new \CjsLog\Writer(
            new \Monolog\Logger($channel)
);
#设置日志保存文件
$logFile = sprintf("/data/logs/app/%s.%s",  'jelly', 'log');
#$log->useFiles($logFile, 'debug');

#设置一天一个日志文件，最大保留N天文件
$log->useDailyFiles($logFile, 5, 'debug');

#写info级别日志
$log->info("hello test");

#写debug级别日志
$log->debug("hello test");

#写warning级别日志
$log->warning("hello test");
