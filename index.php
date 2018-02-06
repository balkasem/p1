<!doctype html>
<html>
<head>
	<link href='../main.css' rel='stylesheet' > 
	<title>Osama Balkasem</title>
	<meta charset='utf-8'>
</head>
	<div id="container" >
			<h1> Osama Balkasem </h1>
			<br/>
				<img alt='Osama Balkasem' src='../me.jpg'>
			<br/>
				<h2> About me </h2>
				<p> 
					I'm Osama Balkasem, I work professionally as a software engineer in Pets Supplies Plus, Livonia Michigan. Currently taking courses in Harvard Extesnion School to pursue a degree in Software Engineering. 
					In my free time I enjoy reading, playing soccor and tennis. Also, I do vocal performance for traditional Syrian music.
				</p>
			<br/>
				<h2> Random Quote </h2>
				<?php
					$quotes = [
						0 => '“Be yourself; everyone else is already taken.” ― Oscar Wilde',
						1 => '“Be the change that you wish to see in the world.” ― Mahatma Gandhi',
						2 => '“In three words I can sum up everything Ive learned about life: it goes on.” ― Robert Frost'
					];
					echo "<p>" . $quotes[rand(0, 2)] . "</p>"  . "<br/>" ;
				?>
	</div>
</html>