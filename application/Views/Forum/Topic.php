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
    <header class="header_">
        <div class="logo-box unselectable">
            <a href="../forum"><img src="../vendor/image/logo.png"></a>
        </div>
        <div class="level-information"> </div>
        <div class="account-icon">
            <?php 
                if(isset($_SESSION["isAuth"]))
                    echo "<div id='userArea'><div id='userInfo'>".$_SESSION['login']."<img src='../vendor/avatar/".$_SESSION["avatar"]."'></div></div>";
            ?>
        </div>
    </header>

    <div class="content_">
    	<?php

			echo "<div class='labelbox_'>";
			echo "<div class='label_'>".$args["topicInfo"]["title"]."</div>";
			echo getMark(getFData("SELECT mark FROM fthems WHERE id=".$_GET['id'])["mark"]);
			echo "</div>";

			echo "<div class='them-content_'> <div class='account-info_'>";
			echo "<img class='account-img_ unselectable' src='../vendor/avatar/".$args["autherImg"]["avatar"]."'>";
			echo "<div class='account-name_' align='center'>".$args["autherName"]["login"]."</div>";
			echo getRang($args["autherLvl"]["alevel"]);
			echo "<div class='them-content-text_'>".$args["topicInfo"]["contentHTML"]."</div></div>";

			if(isset($_SESSION["isAuth"]))
			{
				if($_SESSION['alevel'] > 1 || $_SESSION["login"] == $args["autherName"]["login"])
				{
					echo "<div align='right' class='them-edit'>
						Удалить Редактировать
					</div>";
				}
			}
		?>
		<hr/>
		<?php


			foreach($args["comment"] as $value)
			{
				echo "<div class='them-content_'> <div class='account-info_'>";
				echo "<img class='account-img_ unselectable' src='../vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$value["autherid"])["avatar"]."'>";
				echo "<div class='account-name_' align='center'>".getFData("SELECT login FROM users WHERE id=".$value["autherid"])["login"]."</div>";
				echo getRang($_SESSION['alevel'] > 1);
				echo "<div class='them-content-text_'>".$value["content"]."</div></div>";

				if(isset($_SESSION["isAuth"]))
				{
					if(getFData("SELECT alevel FROM users WHERE id=".$_SESSION['id'])["alevel"] > 1 || $_SESSION["login"] == getFData("SELECT login FROM users WHERE id=".$value["autherid"])["login"])
					{
						echo "<div align='right' class='them-edit'>
							Удалить Редактировать
						</div>";
					}
				}
				echo "<hr/>";
			}

		?>
    </div>

    <style type="text/css"> 
        <?php echo file_get_contents("vendor/css/Main.css"); ?>
    </style>
</body>
</html>