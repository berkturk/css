<?php header("Content-type: text/css; charset: UTF-8"); ?><?php 
$dir = opendir("css");
while (($dosya = readdir($dir)) !== false)
{
	if(! is_dir($dosya)){
?>
	@import url('css/<?=$dosya?>');
<?php
	}
}
closedir($dir);
?>