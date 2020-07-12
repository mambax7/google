<?php
// ------------------------------------------------------------------------- //
//            		      Google 1.1				     //
//               E-Xoops France - http://www.e-xoopsfr.com  	             //
// ------------------------------------------------------------------------- //	
function b_google_show() {
global $xoopsConfig, $xoopsTheme, $src;
include_once(XOOPS_ROOT_PATH."/modules/google/include/param.php");

$block = array();
$block['title'] = _MB_GOOGLE_TITLE;
$block['content'] ="<div style='text-align: center;'>

<a href='".$src."' target='_blank'>
<img src='". XOOPS_URL ."/modules/google/images/logoblock.gif' border='0' alt='Google' align='center' width='80' height='32'></A>
<form method='get' action='". XOOPS_URL ."/modules/google/index.php'>
"._MB_GOOGLE_SEARCH."<br />
<input type='text' name='q' size='21' maxlength='255' value=''><br />
"._MB_GOOGLE_IN."
<br />
<select name='goptions'>
 <option value='web' selected>"._MB_GOOGLE_WEB."</option>
 <option value='images'>"._MB_GOOGLE_IMAGES."</option>
 <option value='newsgroups'>"._MB_GOOGLE_NEWSGROUP."</option>
 <option value='directory'>"._MB_GOOGLE_DIRECTORY."</option> 
 <option value='news'>"._MB_GOOGLE_NEWS."</option> 
</select>
<p>

<input type='submit' name='bt1' VALUE='"._MB_GOOGLE_SUBMIT."'>
</FORM>
</div>
";
        return $block;
}
?>
