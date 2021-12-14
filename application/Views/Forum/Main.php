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
            <a href="index"><img src="vendor/image/logo.png"></a>
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
            <?php 
                if(isset($_SESSION["isAuth"]))
                    echo "<div id='userArea'><div id='userInfo'>".$_SESSION['login']."<img src='vendor/avatar/".$_SESSION["avatar"]."'></div></div>";
            ?>
        </div>
    </header>

    <div id="forum-section-id" class="forum-section">
        <div class="label">Физика</div>
        <hr/>
        <a href="forum?section=0">
        <div class="section">
            <div class="section-info">
                <div class="label">Помощь начинающим</div>
                <div class="sub-text">раздел где вы можете попросить помощь у<br>более опытных юзеров</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=0 order by id desc LIMIT 1");
                    $date = getDateTime($lasttopic['datecreate']);

                    if($lasttopic != null)
                    {
                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
        <a href="forum?section=1">
        <div class="section">
            <div class="section-info">
                <div class="label">Статьи связаные с физикой</div>
                <div class="sub-text">Тут находяться все статьи которые посвящены<br>физике.</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=1 order by id desc LIMIT 1");
                    if($lasttopic != null)
                    {
                        $date = getDateTime($lasttopic['datecreate']);

                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
        <!-- IT -->
        <div class="label">Программирование</div>
        <hr/>
        <a href="forum?section=2">
        <div class="section">
            <div class="section-info">
                <div class="label">Помощь начинающим</div>
                <div class="sub-text">раздел где вы можете попросить помощь у<br>более опытных юзеров</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=2 order by id desc LIMIT 1");
    
                    if($lasttopic != null)
                    {
                        $date = getDateTime($lasttopic['datecreate']);

                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
        <a href="forum?section=3">
        <div class="section">
            <div class="section-info">
                <div class="label">.NET</div>
                <div class="sub-text">Данный раздел посвящен разработке на .Net<br>winform, wpf, .core, xamarin и другое</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=3 order by id desc LIMIT 1");
                    if($lasttopic != null)
                    {
                        $date = getDateTime($lasttopic['datecreate']);

                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
        <a href="forum?section=4">
        <div class="section">
            <div class="section-info">
                <div class="label">Веб-Разработка</div>
                <div class="sub-text">Данный раздел посвящен веб-раработке  с<br>поиощью js,html,css и других</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=5 order by id desc LIMIT 1");

                    if($lasttopic != null)
                    {
                        $date = getDateTime($lasttopic['datecreate']);

                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
        <a href="forum?section=5">
        <div class="section">
            <div class="section-info">
                <div class="label">Java</div>
                <div class="sub-text">Данный раздел посвящен разработке на java</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=6 order by id desc LIMIT 1");
                    if($lasttopic != null)
                    {
                        $date = getDateTime($lasttopic['datecreate']);

                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
        <a href="forum?section=6">
        <div class="section">
            <div class="section-info">
                <div class="label">Python</div>
                <div class="sub-text">Раздел посвященный разработке на python<br>любые вопросы по python сюда</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=7 order by id desc LIMIT 1");

                    if($lasttopic != null)
                    {
                        $date = getDateTime($lasttopic['datecreate']);

                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
        <!-- Форум -->
        <div class="label">Платформа physlab</div>
        <hr/>
        <a href="forum?section=7">
        <div class="section">
            <div class="section-info">
                <div class="label">Предложения по улучшению</div>
                <div class="sub-text">раздел где вы можете попросить помощь у<br>более опытных юзеров</div>
            </div>
            <div class="last-section-topic">

                <?php 

                    $lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=8 order by id desc LIMIT 1");

                    if($lasttopic != null)
                    {
                        $date = getDateTime($lasttopic['datecreate']);

                        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".$lasttopic['title']."</div>";
                        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
                        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
                    }
                ?>
            </div>
        </div></a>
    </div>
    <div id="forum-topics">
        <?php 
            if(isset($_GET['section']))
            {
                echo "<div class='control'> <a class='backbtn' href='forum'> Назад</a> <div class='createtopic'><p align='right'>Создать тему</p></div></div>";

        		foreach($args["topics"] as $value)
        		{
                    if($value["section"] == $_GET['section'])
                    {
            			echo "<a href='forum/topic?id=".$value["id"]."'>";
            			echo "<div class='topic'> <div class='topic-title'>";
            			echo "<div class='text'>".$value["title"]."</div>";
            			echo getMark($value["mark"]);
            			echo "</div> <div class='auther'>".getFData("SELECT login FROM users WHERE id=".$value["autherid"])["login"]."</div></div></a>";
                    }
        		}
            }
    	?> 
    </div>
    <style type="text/css"> 
        <?php echo file_get_contents("vendor/css/Main.css"); ?>
    </style>
    <script type="text/javascript">

        isSelection = <?php if(isset($_GET['section'])) echo true; else return false; ?>;
        selectionID = <?php echo $_GET['section']; ?>;

        if(isSelection)
        {
            document.getElementById("forum-section-id").hidden = true;
            document.getElementById("forum-topics").hidden = false;

            switch(selectionID)
            {
                case 0: 
                    document.getElementById("them-title").innerHTML = "Помощь начинающим";
                    document.getElementById("them-level").innerHTML = "раздел где вы можете попросить помощь у<br>более опытных юзеров";
                break;
                case 1: 
                    document.getElementById("them-title").innerHTML = "Статьи связанные с физикой";
                    document.getElementById("them-level").innerHTML = "Тут находяться все статьи которые посвящены физике.";
                break;
                case 2: 
                    document.getElementById("them-title").innerHTML = "Помощь начинающим";
                    document.getElementById("them-level").innerHTML = "раздел где вы можете попросить помощь у<br>более опытных юзеров.";
                break;
                case 3: 
                    document.getElementById("them-title").innerHTML = ".NET";
                    document.getElementById("them-level").innerHTML = "Данный раздел посвящен разработке на .Net<br>winform, wpf, .core, xamarin и другое";
                break;
                case 4: 
                    document.getElementById("them-title").innerHTML = "Веб-Разработка";
                    document.getElementById("them-level").innerHTML = "Данный раздел посвящен веб-раработке с<br>поиощью js,html,css и других";
                break;
                case 5: 
                    document.getElementById("them-title").innerHTML = "Java";
                    document.getElementById("them-level").innerHTML = "Данный раздел посвящен разработке на java.";
                break;
                case 6: 
                    document.getElementById("them-title").innerHTML = "Python";
                    document.getElementById("them-level").innerHTML = "ТРаздел посвященный разработке на python<br>любые вопросы по python сюда";
                break;
                case 7: 
                    document.getElementById("them-title").innerHTML = "Предложения по улучшению";
                    document.getElementById("them-level").innerHTML = "Тут находяться все статьи которые посвящены физике.";
                break;
            }
        }
        else
        {
            document.getElementById("forum-section-id").hidden = false;
            document.getElementById("forum-topics").hidden = true;
        }

        function openSection(id)
        {
            window.location.href = 'forum?section='+id;
        }
    </script>
</body>
</html>