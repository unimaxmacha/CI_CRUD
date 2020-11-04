<!DOCTYPE html>
<html>
<head>
	<title>Upload Form</title>
</head>
<body>
	<h3>YOu file was successfully uploaded!</h3>

	<ul>
		<?php foreach ($upload_data as $item => $value): ?>
			<li><?php echo $item; ?>:<?php echo $value; ?></li>
		<?php endforeach; ?>
	</ul>

	<p><?php echo anchor('upload', 'upload another file!'); ?></p>

</body>
</html>