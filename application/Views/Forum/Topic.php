<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <title><?php echo $args["topicInfo"]["title"]; ?></title>
</head>
<body>
    <header>
        <div class="logo-box unselectable">
            <a href="index"><img src="../vendor/image/logo.png"></a>
        </div>
        <div class="level-information"> </div>
        <div class="account-icon">
            <div id="userArea">
              <div id="userInfo" > <?php echo $_SESSION['login']; echo '<img src="../vendor/avatar/'.$_SESSION["avatar"].'">'?> </div> 
            </div>
        </div>
    </header>

    <div class="content">
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
			echo getFData("SELECT login FROM users WHERE id=".$value["autherid"])["login"];
			echo "</div>";

			echo "<div> Текст (перейти на html разметку): ";
			echo $value["content"];
			echo "</div>";

			echo "<hr/>";
		}

		?>
    </div>

    <style type="text/css"> 
        <?php echo file_get_contents("vendor/css/Main.css"); ?>
    </style>
</body>
</html>