<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="./assignment3.css">
</head>

<body>
	<?php
		include ('ParentClass.php');
		include ('ChildClass.php');

		$Cat1 = new ChildClass("Spotty", 7, "F", "Bengal", "Meow", "s are domestic cats which have been bred to look like leopards");
		$Cat2 = new ChildClass("Tigger", 1, "M", "Tiger", "ROAR", "s can weigh up to 700lbs (males) or 350lbs (females)");
		$Cat3 = new ChildClass("Cloud", 5, "M", "Persian", "Purr", "s are very popular show cats and are well known for their flat faces");
		$Cat4 = new ChildClass("Rat", 3, "F", "Sphynx", "Hiss", " cats have no fur and can actually get sunburnt");
	?>

	<div class="header">
		<h1> Cats </h1>
	</div>
	<p> <strong> Here's some cool facts about these cats: </strong></p>
	<div class="grid">
		<div class="col1">
			<b>BENGAL</b>
			<center> <img src="./imgs/bengal.jpg" alt="bengal" style="width:245px;height:175px;">
				<?php echo $Cat1;?>
				<br>
				<?php $Cat1->setAge("8");
				$Cat1->setChar("bengals live to be around 16 years old");?> </center>
			</div>
			<div class="col2">
				<b>TIGER</b>
				<center> <img src="./imgs/eltigre.jpg" alt="rawr" style="width:245px;height:175px;">
					<?php echo $Cat2; ?>
					<br>
					<?php $Cat2->setName("Killer");
					$Cat2->setAge("5");
					$Cat2->setChar("tigers kill by tackling their prey, biting their throats, and then strangling them to death")?></center>
			</div>
			<div class="col3">
				<b>PERSIAN</b>
				<center> <img src="./imgs/persian.jpeg" alt="persian" style="width:245px;height:175px;">
					<?php echo $Cat3; ?>
					<br>
					<?php $Cat3->setChar("there is a pokemon named after this type of cat");?></center>
			</div>
			<div class="col4">
				<b>SPHYNX</b>
					<center> <img src="./imgs/sphynx.jpeg" alt="sphynx" style="width:245px;height:175px;">
						<?php echo $Cat4; ?>
						<br>
						<?php $Cat4->setName("Fluffy");
						$Cat4->setChar("some sphynx have no whiskers and the pattern on the skin indicates what color the fur would have been");?></center>
			</div>
			<div class="clear"></div>
		</div>

		<div class="footer">
			<center> <img src="./imgs/nyan.gif" alt="nyan" style="width:1200px;height:350px;"> </center>
		</div>

</body>
</html>
