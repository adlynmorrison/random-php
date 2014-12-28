<!DOCTYPE html>
<head>
<title>Everyday People</title>
<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
</head>
<style>
body{
	width:50%;
	height: 100%;
	margin: 0 auto;
}
h1, h3{
	color:orange;
	font-family: 'Muli', sans-serif;
}

h1{
	font-size: 2em;
}

</style>
<body>
	<section role="main">
		<h1>Randomizing Data in an Array - Everyday People by Sly & The Family Stone</h1>
		<h3>Different on each refresh</h3>
		<?php
		$content = "Sometimes I'm right but I can be wrong My own beliefs are in my song The butcher, the banker, the drummer and then Makes no difference what group I'm in 'Cause I am everyday people, yeah, yeah I am no better and neither are you We are the same whatever we do You love me, you hate me, you know me and then You can't figure out the bag I'm in 'Cause I am everyday people There is a yellow one that won't accept the black one That won't accept the red one, that won't accept the white one Different strokes for different folks And so on and so on and Scooby dooby doo-bee Oh, sha sha";
			$paragraph = explode(" ", $content);
			shuffle($paragraph);
			
			foreach ($paragraph as $value) {
				echo $value." ";
			}
		?>
	</section>
</body>
</html>