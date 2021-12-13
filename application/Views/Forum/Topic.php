<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $args["topicInfo"]["title"]; ?></title>
	</head>
	<body>
		<?php

		echo "<div>";
		echo "<h2>".$args["topicInfo"]["title"]."</h2>";
		echo "</div>";

		echo "<div>";
		echo $args["topicInfo"]["contentHTML"];
		echo "</div>";

		echo "<div> Автор: ";
		echo $args["autherName"]["login"];
		echo "</div>";

		echo "<img src='../vendor/avatar/".$args["autherImg"]["avatar"]."'>"

		?>
		<hr/>
		<?php


		foreach($args["comment"] as $value)
		{
			echo "<img src='../vendor/avatar/".$args["autherImg"]["avatar"]."'>";

			echo "<div> Автор: ";
			echo $value["autherid"];
			echo "</div>";

			echo "<div> Текст (перейти на html разметку): ";
			echo $value["content"];
			echo "</div>";

			echo "<hr/>";
		}

		?>
	</body>

	<style type="text/css"> 
		<?php echo file_get_contents("../vendor/css/#name#.css"); ?>
	</style>
</html>