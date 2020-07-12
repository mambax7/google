<?php
$modversion['name'] = _MI_GOOGLE_NAME;
$modversion['version'] = 1.10;
$modversion['description'] = _MI_GOOGLE_DESC;
$modversion['author'] = "Krakite - http://www.xoops-modules.com";
$modversion['credits'] = "Modules google pour exoops adapté par krakite";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = "no";
$modversion['image'] = "images/logo.gif";
$modversion['dirname'] = "google";

// Menu
$modversion['hasMain'] = 1;

// Blocks
$modversion['blocks'][1]['file'] = "google.php";
$modversion['blocks'][1]['name'] = _MI_GOOGLE_BNAME;
$modversion['blocks'][1]['description'] = _MI_GOOGLE_BDESC;
$modversion['blocks'][1]['show_func'] = "b_google_show";
?>