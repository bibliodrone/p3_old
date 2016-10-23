<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" type="text/css" href="p3-style.css"> -->
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<title>Project P3</title>
	<meta charset='utf-8'>
	<?php require 'logic.php'; ?>
	
</head>

<body>
	<h1>Developer's Best Friend</h1>
	<p>Providing Lorem Ipsum text-generation and Random User Name generation services since 2016.</p>

	<!-- User enters number of paragraphs wanted, number of Users wanted, from 0-9, for now -->
	<form method='POST' action = 'index.php'>
		Lorem Ipsum:
		<input type="text" name="numParas" maxlength="1">
		Users:
		<input type="text" name="numUsers" maxlength="1">

		<input type="submit" value="Submit"><br>
		<?php if(isset($error)): ?>
			<span class ='error'><?php echo $error;?></span>
		<?php endif ?>
	</form>

	<!-- Provide the requested output to the user... -->
	<h3>---Lorem Ipsum---</h3>
		<?php for ($n = 0; $n < $numParas; $n++) {
			echo"<p>Your Lorem Ipsum Here</p>";
		} ?>

	<p>END LOREM IPSUM</p>
	<p>... ... ... ... ...</p

	<h3>---Faux Users---</h3>
		<?php for ($n = 0; $n < $numUsers; $n++) {
			echo"<p>Your User Data Here</p>";
		} ?>

		<p>END FAUX USERS</p>

</body>
</html>
