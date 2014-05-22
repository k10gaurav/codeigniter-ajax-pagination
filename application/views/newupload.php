<?php
if(isset($_POST['file_upload']))
{
	foreach($_POST['file_upload'] as $upload)
	{
		echo $_POST['file_upload'];
	}
}
?>
<form action="" method="post">
	<input id="file_upload" name="file_upload" type="file" multiple="true">
	<input type="submit">
</form>