<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>


<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<br>
<?php
	$image = array(
		'src' => 'application/uploads/'.$file_name,
		'class' => 'photo',
		'width' => '65',
		'height' => '60',
		'rel' => 'lightbox',
			);
			echo img($image); ?>
<br>
<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>
