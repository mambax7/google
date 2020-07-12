<?php
// ------------------------------------------------------------------------- //
//            		      Google 1.0				     //
//               E-Xoops France - http://www.e-xoopsfr.com  	             //
// ------------------------------------------------------------------------- //	

global $xoopsConfig, $xoopsTheme;
//french google
if ($xoopsConfig['language'] == 'french'){
$src = 'http://www.google.fr/';
}

//english google
if ($xoopsConfig['language'] == 'english'){
$src = 'http://www.google.co.uk/';
}

//deutsch google
if ($xoopsConfig['language'] == 'deutsch'){
$src = 'http://www.google.de/';
}
?>