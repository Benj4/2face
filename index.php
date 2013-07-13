<?php
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

require_once("configuration.php");
require_once("class/core.php");

$config = new Configuration();
$core = new Core();
date_default_timezone_set($config->timezone);

$qs_action = $_GET["action"];
$qs_section = !empty($_GET["section"]) ? $_GET["section"] : $config->section;
$qs_module = $_GET["module"];
$qs_module_response = $_GET["response"];

if (empty($qs_action)) {

//    $tplSite->assign("__META_AUTHOR__", $config->author);
//    $tplSite->assign("__SITE_INDEX__", $config->index);

    $defaultGet = array();
    $defaultGet['section'] = $qs_section;
    $defaultGet['item'] = isset($_GET['item'])? $_GET['item'] : NULL;
    $defaultGet['option'] = isset($_GET['option'])? $_GET['option'] : NULL;
    $defaultGet['page'] = isset($_GET['page'])? $_GET['page'] : NULL;
    
    if (!file_exists("sections/" . $qs_section . "/index.php")) {
        header("Location: {$config->site404}");
    }else{
        require_once("sections/" . $qs_section . "/index.php");
    }

        
} else {

    if (!file_exists("actions/" . $qs_action . ".php")) {
        header("Location: {$config->site404}");
    } else {
        require_once("actions/" . $qs_action . ".php");
    }
}
?>