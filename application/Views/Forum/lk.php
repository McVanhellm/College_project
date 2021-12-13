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
            <a href=""><img src="../vendor/image/logo.png"></a>
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
              <div id="userInfo" > <?php echo $_SESSION['login']; echo '<img src="../vendor/avatar/'.$_SESSION["avatar"].'">'?> </div> 
            </div>
        </div>
    </header>
    <content>
    	<?php 

	    	// for($i=0; $i < 20; $i++)
	    	// {
	    	// 	echo "<div class='topic'>";
	    	// 	echo "<div>"
	    	// 	echo "</div>";
	    	// }

    	?>

    	<div class='topic'>
    		<div class="topic-title">
    			<div class="text">Помогите решить пример пазязя</div>
    			<div class="marks mark-warning unselectable">Ошибка</div>
    		</div>
    		<div class="auther">
    			xoheveras    ответов 2
    		</div>
    	</div>
    </content>
    <style type="text/css"> 
        <?php echo file_get_contents("vendor/css/Main.css"); ?>
    </style>
</body>
</html>