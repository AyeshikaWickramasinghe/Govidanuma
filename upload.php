
<?php
if($_FILES["file"]["name"] != '')
{
	$test = explode(".",$_FILES["file"]["name"]);
	$extension = end($test);
	$name = rand(100,999) . '.' . $extension;
	$location = './upload/'.$name;
	move_uploaded_files($_FILES["file"]["tmp_name"], $location);
	echo '<img src="'.$location.'" height="256" width="256" class "img_thumbnail"/>;
}
?>