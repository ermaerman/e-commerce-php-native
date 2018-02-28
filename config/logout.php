<?php

session_start();
$out=session_destroy();
if($out)
{
	echo "<br><br><br><br><strong><center><i>You're have been logged out!";

}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = '1;url=../index.php?content=home'>
