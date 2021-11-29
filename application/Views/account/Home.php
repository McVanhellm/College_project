<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styleTest.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тесты | PhysLab |</title>
</head>
<body>
    <div id="leftMenu"> <!-- Левая полоса страницы -->
       <img id="logo" src="../vendor/image/logo.png">
    </div>
    <div id="level_list"> <!-- Блок с уровнями -->
        <div id="subList"> <!-- Блок внутри для настройки -->
            <div id="dotted_line"></div>
          <div class="levels" id="first_level">  <!-- Сам кружок(блок с радиусом 50%) -->
          <div class="levels_number">1</div> <!-- Блок с цифрой внутри -->
          </div>

          <div class="levels" id="second_level"> 
          <div class="levels_number">2</div>    
          </div>
          
          <div class="levels" id="third_level"> 
            <div class="levels_number">3</div>    
          </div>
          
          <div class="levels" id="fourth_level"> 
            <div class="levels_number">4</div>    
          </div>
          
          <div class="levels" id="fifth_level"> 
            <div class="levels_number">5</div>    
          </div>
          
          <div class="levels" id="sixth_level"> 
            <div class="levels_number">6</div>    
          </div>
      
        </div>
    </div>
    <div class="content" id="level_one"> <!-- Центральный блок с тестами внутри -->
        <?php
           foreach($args["TestInfo"] as $value)
           {
                if($value["type"] == 0 && $value["level"] == 1)
                {
                    echo '<div class="test">';
                    echo '<div class="text">';
                    echo '<a>'.$value["title"].'</a>';
                    echo '</div>';
                    echo '<button>Начать</button>';
                    echo '</div>';
                }
           }
        ?>
    </div>
    <div class="content" id="level_two"> <!-- Центральный блок с тестами внутри -->
        <?php
           foreach($args["TestInfo"] as $value)
           {
                if($value["type"] == 0 && $value["level"] == 2)
                {
                    echo '<div class="test">';
                    echo '<div class="text">';
                    echo '<a>'.$value["title"].'</a>';
                    echo '</div>';
                    echo '<button>Начать</button>';
                    echo '</div>';
                }
           }
        ?>
    </div>
    <div class="content" id="level_three"> <!-- Центральный блок с тестами внутри -->
        <?php
           foreach($args["TestInfo"] as $value)
           {
                if($value["type"] == 0 && $value["level"] == 3)
                {
                    echo '<div class="test">';
                    echo '<div class="text">';
                    echo '<a>'.$value["title"].'</a>';
                    echo '</div>';
                    echo '<button>Начать</button>';
                    echo '</div>';
                }
           }
        ?>
    </div>
    <div class="content" id="level_four"> <!-- Центральный блок с тестами внутри -->
        <?php
           foreach($args["TestInfo"] as $value)
           {
                if($value["type"] == 0 && $value["level"] == 4)
                {
                    echo '<div class="test">';
                    echo '<div class="text">';
                    echo '<a>'.$value["title"].'</a>';
                    echo '</div>';
                    echo '<button>Начать</button>';
                    echo '</div>';
                }
           }
        ?>
    </div>
    <div class="content" id="level_five"> <!-- Центральный блок с тестами внутри -->
        <?php
           foreach($args["TestInfo"] as $value)
           {
                if($value["type"] == 0 && $value["level"] == 5)
                {
                    echo '<div class="test">';
                    echo '<div class="text">';
                    echo '<a>'.$value["title"].'</a>';
                    echo '</div>';
                    echo '<button>Начать</button>';
                    echo '</div>';
                }
           }
        ?>
    </div>
    <div class="content" id="level_six"> <!-- Центральный блок с тестами внутри -->
        <?php
           foreach($args["TestInfo"] as $value)
           {
                if($value["type"] == 0 && $value["level"] == 6)
                {
                    echo '<div class="test">';
                    echo '<div class="text">';
                    echo '<a>'.$value["title"].'</a>';
                    echo '</div>';
                    echo '<button>Начать</button>';
                    echo '</div>';
                }
           }
        ?>
    </div>
    <div id="rightMenu">
        <div id="userArea">
          <div id="userInfo"> <?php echo $_SESSION['login']; echo '<img src="../vendor/avatar/'.$_SESSION["avatar"].'">'?>
          </div>
        </div>
    </div>
	<style type="text/css"> 
		<?php echo file_get_contents("vendor/css/HomeTest.css"); ?>
	</style>
	<script>
		<?php echo file_get_contents("vendor/js/HomeTest.js"); ?>
	</script>
</body>
</html>