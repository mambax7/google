<?php
// ------------------------------------------------------------------------- //
//            		      Google 1.1				     //
//               E-Xoops France - http://www.e-xoopsfr.com  	             //
// ------------------------------------------------------------------------- //	
include("../../mainfile.php");

global $db, $xoopsConfig, $src;
if ( $xoopsConfig['startpage'] == "Google") {
	$xoopsOption['show_rblock'] =1;
	include(XOOPS_ROOT_PATH."/header.php");
} else {
	$xoopsOption['show_rblock'] =0;
	include(XOOPS_ROOT_PATH."/header.php");
}

include_once(XOOPS_ROOT_PATH."/modules/google/include/param.php");

$goptions = $_GET['goptions'];
if ( isset($_GET['q']) ) {
     if ($_GET['goptions']=='web') {		
	$src .= "search?q=".rawurlencode(trim($_GET['q']));
     }
     if ($_GET['goptions']=='images') {		
	$src .= "images?q=".rawurlencode(trim($_GET['q']));
     } 
     if ($_GET['goptions']=='newsgroups') {		
	$src .= "groups?q=".rawurlencode(trim($_GET['q']));
     }  
     if ($_GET['goptions']=='directory') {		
	$src .= "search?q=".rawurlencode(trim($_GET['q']))."&cat=gwd%2FTop";
     }       
     if ($_GET['goptions']=='news') {		
	$src .= "news?q=".rawurlencode(trim($_GET['q']));
     }                
}

OpenTable();
?>
<div align='left'>
<iframe name="Google" style="border=0 " width=100% height=1450 src="<?= $src ?>" target='_blank'>
</iframe>
</div>
<?php
CloseTable();
include(XOOPS_ROOT_PATH."/footer.php");
?>
