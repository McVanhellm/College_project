<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <title>Тесты</title>
</head>
<body>
    <header>
        <div class="logo-box unselectable">
            <a href=""><img src="vendor/image/logo.png"></a>
        </div>
        <div class="level-information">
            <div class="text">
                <div class="name-level">
                    <div id="them-title" class="title unselectable">Главная страница</div>
                    <div id="them-level" class="sub-level unselectable">Форум physlab</div>
                </div>
            </div>
        </div>
        <div class="account-icon">
            <div id="userArea">
              <div id="userInfo" > <?php echo $_SESSION['login']; echo '<img src="vendor/avatar/'.$_SESSION["avatar"].'">'?> </div> 
            </div>
        </div>
    </header>

    <div class="forum-section">
        <div class="label">Физика</div>
        <hr/>
        <div class="section">
            <div class="section-info">
                <div class="label">Помощь начинающим</div>
                <div class="sub-text">раздел где вы можете попросить помощь у<br>более опытных юзеров</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=0 order by id desc LIMIT 1");
                    $date = getDateTime($lasttopic['datecreate']);

                    echo "<div class='label'>".$lasttopic['title']."</div>";
                    echo "<div class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." ".$date."</div>";
                ?>
            </div>
        </div>

    </div>

<!-- 	<?php 
		foreach($args["topics"] as $value)
		{
			echo "<a href='forum/topic?id=".$value["id"]."'>";
			echo "<div class='topic'> <div class='topic-title'>";
			echo "<div class='text'>".$value["title"]."</div>";
			echo getMark($value["mark"]);
			echo "</div> <div class='auther'>".getFData("SELECT login FROM users WHERE id=".$value["autherid"])["login"]."</div></div></a>";
		}
	?> -->
    <style type="text/css"> 
        <?php echo file_get_contents("vendor/css/Main.css"); ?>
    </style>
</body>
</html>