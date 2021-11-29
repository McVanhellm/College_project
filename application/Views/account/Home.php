<?php 
	echo $_SESSION["avatar"];

	if(!(session::getDate()["isAuth"]))
		return header("Location: login");

?>
<!DOCTYPE html>
<<<<<<< HEAD
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
       Лого
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

        <div class="test"> <!-- Сами 12 тестов -->
            <div class="text">
            <a> Тема 1 - Основные положения молекулярно-кинетической теории </a> </div><!-- Название теста -->
            <button> Начать </button> <!-- Кнопка -->
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 2 - Масса и размеры молекул. Количество вещества </a> </div>
            <button id="ab"> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 3 - Макро- и микропараметры. Идеальный газ. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 4 - Тепловое равновесие. Температура. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 5 - Уравнение состояния идеального газа. Изотермический, изобарный и изохорный процессы. Испарение и конденсация. Насыщенный пар. Влажность воздуха. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 6 - Термодинамическая система. Внутренняя энергия.
                Внутренняя энергия идеального одноатомного газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 7 - Работа в термодинамике. Количество теплоты. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 8 - Первый закон термодинамики. Применение первого закона
                термодинамики к изопроцессам изменения состояния идеального газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 9 - Тепловые двигатели. Принцип действия тепловых двигателей и их КПД.
                Экологические проблемы использования тепловых двигателей. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 10 - Электрический заряд. Закон сохранения электрического заряда. Взаимодействие точечных зарядов. Закон Кулона. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 11 - Электростатическое поле. Напряжённость электростатического поля. Принцип суперпозиции. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 12 - Линии напряжённости электростатического поля. Работа силы однородного электростатического поля. Потенциал. </a> </div>
            <button> Начать </button>
        </div>
    </div>
    <div class="content" id="level_two"> <!-- Центральный блок с тестами внутри -->

        <div class="test"> <!-- Сами 12 тестов -->
            <div class="text">
            <a> Тема 13 - Основные положения молекулярно-кинетической теории </a> </div><!-- Название теста -->
            <button> Начать </button> <!-- Кнопка -->
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 14 - Масса и размеры молекул. Количество вещества </a> </div>
            <button id="ab"> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 15 - Макро- и микропараметры. Идеальный газ. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 16 - Тепловое равновесие. Температура. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 17 - Уравнение состояния идеального газа. Изотермический, изобарный и изохорный процессы. Испарение и конденсация. Насыщенный пар. Влажность воздуха. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 18 - Термодинамическая система. Внутренняя энергия.
                Внутренняя энергия идеального одноатомного газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 19 - Работа в термодинамике. Количество теплоты. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 20 - Первый закон термодинамики. Применение первого закона
                термодинамики к изопроцессам изменения состояния идеального газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 21 - Тепловые двигатели. Принцип действия тепловых двигателей и их КПД.
                Экологические проблемы использования тепловых двигателей. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 22 - Электрический заряд. Закон сохранения электрического заряда. Взаимодействие точечных зарядов. Закон Кулона. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 23 - Электростатическое поле. Напряжённость электростатического поля. Принцип суперпозиции. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 24 - Линии напряжённости электростатического поля. Работа силы однородного электростатического поля. Потенциал. </a> </div>
            <button> Начать </button>
        </div>
    </div>
    <div class="content" id="level_three"> <!-- Центральный блок с тестами внутри -->

        <div class="test"> <!-- Сами 12 тестов -->
            <div class="text">
            <a> Тема 25 - Основные положения молекулярно-кинетической теории </a> </div><!-- Название теста -->
            <button> Начать </button> <!-- Кнопка -->
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 26 - Масса и размеры молекул. Количество вещества </a> </div>
            <button id="ab"> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 27 - Макро- и микропараметры. Идеальный газ. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 28 - Тепловое равновесие. Температура. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 29 - Уравнение состояния идеального газа. Изотермический, изобарный и изохорный процессы. Испарение и конденсация. Насыщенный пар. Влажность воздуха. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 30 - Термодинамическая система. Внутренняя энергия.
                Внутренняя энергия идеального одноатомного газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 31 - Работа в термодинамике. Количество теплоты. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 32 - Первый закон термодинамики. Применение первого закона
                термодинамики к изопроцессам изменения состояния идеального газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 33 - Тепловые двигатели. Принцип действия тепловых двигателей и их КПД.
                Экологические проблемы использования тепловых двигателей. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 34 - Электрический заряд. Закон сохранения электрического заряда. Взаимодействие точечных зарядов. Закон Кулона. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 35 - Электростатическое поле. Напряжённость электростатического поля. Принцип суперпозиции. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 36 - Линии напряжённости электростатического поля. Работа силы однородного электростатического поля. Потенциал. </a> </div>
            <button> Начать </button>
        </div>
    </div>
    <div class="content" id="level_four"> <!-- Центральный блок с тестами внутри -->

        <div class="test"> <!-- Сами 12 тестов -->
            <div class="text">
            <a> Тема 37 - Основные положения молекулярно-кинетической теории </a> </div><!-- Название теста -->
            <button> Начать </button> <!-- Кнопка -->
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 38 - Масса и размеры молекул. Количество вещества </a> </div>
            <button id="ab"> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 39 - Макро- и микропараметры. Идеальный газ. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 40 - Тепловое равновесие. Температура. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 41 - Уравнение состояния идеального газа. Изотермический, изобарный и изохорный процессы. Испарение и конденсация. Насыщенный пар. Влажность воздуха. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 42 - Термодинамическая система. Внутренняя энергия.
                Внутренняя энергия идеального одноатомного газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 43 - Работа в термодинамике. Количество теплоты. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 44 - Первый закон термодинамики. Применение первого закона
                термодинамики к изопроцессам изменения состояния идеального газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 45 - Тепловые двигатели. Принцип действия тепловых двигателей и их КПД.
                Экологические проблемы использования тепловых двигателей. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 46 - Электрический заряд. Закон сохранения электрического заряда. Взаимодействие точечных зарядов. Закон Кулона. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 47 - Электростатическое поле. Напряжённость электростатического поля. Принцип суперпозиции. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 48 - Линии напряжённости электростатического поля. Работа силы однородного электростатического поля. Потенциал. </a> </div>
            <button> Начать </button>
        </div>
    </div>
    <div class="content" id="level_five"> <!-- Центральный блок с тестами внутри -->

        <div class="test"> <!-- Сами 12 тестов -->
            <div class="text">
            <a> Тема 49 - Основные положения молекулярно-кинетической теории </a> </div><!-- Название теста -->
            <button> Начать </button> <!-- Кнопка -->
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 50 - Масса и размеры молекул. Количество вещества </a> </div>
            <button id="ab"> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 51 - Макро- и микропараметры. Идеальный газ. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 52 - Тепловое равновесие. Температура. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 53 - Уравнение состояния идеального газа. Изотермический, изобарный и изохорный процессы. Испарение и конденсация. Насыщенный пар. Влажность воздуха. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 54 - Термодинамическая система. Внутренняя энергия.
                Внутренняя энергия идеального одноатомного газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 55 - Работа в термодинамике. Количество теплоты. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 56 - Первый закон термодинамики. Применение первого закона
                термодинамики к изопроцессам изменения состояния идеального газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 57 - Тепловые двигатели. Принцип действия тепловых двигателей и их КПД.
                Экологические проблемы использования тепловых двигателей. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 58 - Электрический заряд. Закон сохранения электрического заряда. Взаимодействие точечных зарядов. Закон Кулона. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 59 - Электростатическое поле. Напряжённость электростатического поля. Принцип суперпозиции. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 60 - Линии напряжённости электростатического поля. Работа силы однородного электростатического поля. Потенциал. </a> </div>
            <button> Начать </button>
        </div>
    </div>

    <div class="content" id="level_six"> <!-- Центральный блок с тестами внутри -->

        <div class="test"> <!-- Сами 12 тестов -->
            <div class="text">
            <a> Тема 49 - Основные положения молекулярно-кинетической теории </a> </div><!-- Название теста -->
            <button> Начать </button> <!-- Кнопка -->
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 50 - Масса и размеры молекул. Количество вещества </a> </div>
            <button id="ab"> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 51 - Макро- и микропараметры. Идеальный газ. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 52 - Тепловое равновесие. Температура. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 53 - Уравнение состояния идеального газа. Изотермический, изобарный и изохорный процессы. Испарение и конденсация. Насыщенный пар. Влажность воздуха. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 54 - Термодинамическая система. Внутренняя энергия.
                Внутренняя энергия идеального одноатомного газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 55 - Работа в термодинамике. Количество теплоты. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 56 - Первый закон термодинамики. Применение первого закона
                термодинамики к изопроцессам изменения состояния идеального газа. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 57 - Тепловые двигатели. Принцип действия тепловых двигателей и их КПД.
                Экологические проблемы использования тепловых двигателей. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 58 - Электрический заряд. Закон сохранения электрического заряда. Взаимодействие точечных зарядов. Закон Кулона. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 59 - Электростатическое поле. Напряжённость электростатического поля. Принцип суперпозиции. </a> </div>
            <button> Начать </button>
        </div>

        <div class="test">
            <div class="text">
            <a> Тема 60 - Линии напряжённости электростатического поля. Работа силы однородного электростатического поля. Потенциал. </a> </div>
            <button> Начать </button>
        </div>
    </div>
     
    <div id="rightMenu">
        <div id="userArea">
          <div id="userInfo"> <?php echo session::getDate()["login"]; ?> <img src="vendor/avatar/<?php echo $_SESSION["avatar"];?>"> </div> 
        </div>
    </div>
    
		<style type="text/css"> 
			<?php echo file_get_contents("vendor/css/HomeTest.css"); ?>
		</style>
		<script>
			<?php echo file_get_contents("vendor/js/HomeTest.js"); ?>
		</script>
</body>
=======
<html>
	<head>
		<meta charset="utf-8">
		<title>Личный кабинет</title>
	</head>
	<body>
		<svg  xmlns="http://www.w3.org/2000/svg" >
		    <circle cx="19px" cy="300px" r="300px" fill="#6393DC" />
		</svg>
		<svg  xmlns="http://www.w3.org/2000/svg">
		    <circle cx="200px" cy="420px" r="300px" fill="#699BE5" />
		</svg>

		<div class="parent">
		    <div class="block">
		        <img text-align="center" src="../vendor/image/logo.png" alt=""/>
					<form action="register" method="POST">
						<p><input class="text-field__input" type="text" name="login" id="" required placeholder="Логин"></p>
						<p><input class="text-field__input" type="password" name="password" id="" required placeholder="Пароль"></p>
						<p><input class="text-field__input" type="email" name="email" id="" required placeholder="Почта"></p>
						<?php if($args != null)
							echo "<div class='warning'><p>".$args["Message"]."</p></div>";
						?>
						<input class="btn" type="submit" name="registerbtn" value="Регистрация"/>
						<div class='registration'> Привет:
	                              <a href="../account/login"> <?php 
	                                    $requst = session::getDate();
	                                    echo $requst["login"];
	                               ?> </a>
						<br>
						<a href="../account/login">У меня уже есть аккаунта</a>
					</div>
					</form>
				</div>
			</div>
	</body>

	<style type="text/css"> 
		<?php echo file_get_contents("vendor/css/home.css"); ?>
	</style>
>>>>>>> b9f8432bf30086df27fd3fd47f5fc1f3df72c6ed
</html>