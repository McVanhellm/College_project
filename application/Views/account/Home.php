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
            <a href="../"><img src="../vendor/image/logo.png"></a>
        </div>
        <div class="level-information">
            <div class="text">
                <div class="name-level">
                    <div id="them-title" class="title unselectable">Термодинамика</div>
                    <div id="them-level" class="sub-level unselectable">1 рубеж</div>
                </div>
                <div class="free-spaces"></div>
                <div class="quotes">
                    <div class="text">“Каждый человек может быть <br> умным человеком, ауф” P.s Тесла</div>
                    <div class="icon unselectable">
                        <img src="../vendor/image/tesla.png">
                    </div>
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
        <div class="level-tree">
               <div id="level_list"> <!-- Блок с уровнями -->
        <div id="subList"> <!-- Блок внутри для настройки -->
            <div id="dotted_line"></div>
          <div class="levels unselectable" id="first_level">  <!-- Сам кружок(блок с радиусом 50%) -->
          <div class="levels_number">1</div> <!-- Блок с цифрой внутри -->
          </div>

          <div class="levels levels-margin" id="second_level"> 
          <div class="levels_number">2</div>    
          </div>
          
          <div class="levels levels-margin" id="third_level"> 
            <div class="levels_number">3</div>    
          </div>
          
          <div class="levels levels-margin" id="fourth_level"> 
            <div class="levels_number">4</div>    
          </div>
          
          <div class="levels levels-margin" id="fifth_level"> 
            <div class="levels_number">5</div>    
          </div>
          
          <div class="levels levels-margin" id="sixth_level"> 
            <div class="levels_number">6</div>    
          </div>
      
        </div>
    </div>
        </div>
        <div class="Task-list">
            <?php
                $themsId = ["level_one","level_two","level_three","level_four","level_five","level_six"];
                $levelCount = 1;

                foreach($themsId as $thems)
                {
                    echo '<div id="'.$thems.'">';
                        foreach($args["TestInfo"] as $value)
                        {
                            if($value["type"] == 0 && $value["level"] == $levelCount)
                            {
                                echo '<div class="task">';
                                echo '<div class="task-text">';
                                echo '<a>'.$value["title"].'</a>';
                                echo '</div>';
                                echo '<button>Начать</button>';
                                echo '</div>';
                            }
                        }
                        $levelCount++;
                    echo '</div>';
                }
            ?>
        </div>
        <div class="alter-box">
            <?php $HomeAcivement = Achievement::getAchievement($args["Achivment"]); ?>
            <div class="Achievement">
                <div class="title">Достижения</div>
                <div class="icon unselectable"><?php echo '<img src="../vendor/image/'.$HomeAcivement['Ainfo']['img'].'">' ?></div>
                <div id="progressbar">
                  <?php 
                        $progressValue = (int)$HomeAcivement['value']/(int)$HomeAcivement['Ainfo']['value'];
                        $progressValue = Abs(round($progressValue * ($progressValue - 100)));
                        echo '<div style="width:'.$progressValue.'%; height: 10px;"></div>';
                    ?>
                </div>
                <div class="sub-text">Пройдите еще <?php echo $HomeAcivement['remainder'] ?> уроков до<br>получения награды “<?php echo $HomeAcivement['Ainfo']['name']?>”</div>
            </div>
            <div class="auther-course">
                <div class="title">Авторы курса</div>
                <div class="users">
                    <div id="userArea">
                        <a href="../forum?uid=McVanhellm"><div id="userInfo"><img src="../vendor/avatar/McVanhellm.png">McVanhellm</div> </a>
                    </div>
                </div>
            </div>
        </div>
    </content>
    <footer>
    </footer>
    <style type="text/css"> 
        <?php echo file_get_contents("vendor/css/HomeTest.css"); ?>
    </style>
    <script>
        <?php echo file_get_contents("vendor/js/HomeTest.js"); ?>
    </script>
</body>
</html>