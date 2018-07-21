<?php
/**
 * 快速格式化json
 */

$cmdGetJson = "pbpaste";
exec($cmdGetJson, $json);
$formatJson = json_encode(json_decode($json[0]), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
$cmdPutJson = "echo '$formatJson' | pbcopy";
exec($cmdPutJson, $result);
