<?php

//upload.php

if(isset($_POST["image"]))
{
	$data = $_POST["image"];

	

	$image_array_1 = explode(";", $data);
    

	

	$image_array_2 = explode(",", $image_array_1[1]);

	

	$data = base64_decode($image_array_2[1]);

	$imageName = time() . '.png';
    $dir = "image/".$imageName;

	file_put_contents($dir, $data);

	echo '<img src="'.$dir.'" class="img-thumbnail" />';

}

?>