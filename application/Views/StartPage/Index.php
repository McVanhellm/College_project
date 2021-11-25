<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

	</head>
	<style>
		<?php echo file_get_contents("vendor/css/CSSsector.css"); ?>
		<?php echo file_get_contents("vendor/css/Style.css"); ?>
	</style>
	<body>
  		<div class="intro" id="intro">
    	<!--Код на анимации-->
	    <div class="slider">
	      <div class="nav">
	          <div class="prev">
	              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>            
	          </div>    
	          <div class="next">
	              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>                
	          </div>
	      </div>
	      <div class="item is-active" style="background-image: url(bg-photo.jpg)">
	          <div class="content">
	              <div class="item-title">Физика</div>
	              <div class="item-text">Добро пожаловать на платформу интароктивной физики в помощь к обучению</div>
	          </div>
	          <div class="imgs">
	              <div class="grid">
	                  <div class="img img-1">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	                  <div class="img img-2">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	                  <div class="img img-3">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	                  <div class="img img-4">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	              </div>
	          </div>
	      </div>

      	<!-- Еще слайды -->
      
	      <div class="item" style="background-image: url(bg-photo.jpg)">
	          <div class="content">
	              <div class="item-title">Лабораторные работы</div>
	              <div class="item-text">Курс лабораторных работ и проверок законов физики</div>
	          </div>
	          <div class="imgs">
	              <div class="grid">
	                  <div class="img img-1">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	                  <div class="img img-2">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	                  <div class="img img-3">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	                  <div class="img img-4">
	                      <img src="vendor/image/y4.gif"/>
	                  </div>
	              </div>
	          </div>
	      </div>  
	      <div class="item" style="background-image: url(bg-photo.jpg)">
	        <div class="content">
	            <div class="item-title">Тесты и задачи</div>
	            <div class="item-text">Проиди тесты и решай задачи для лучшего усвоения материала</div>
	        </div>
	        <div class="imgs">
	            <div class="grid">
	                <div class="img img-1">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	                <div class="img img-2">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	                <div class="img img-3">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	                <div class="img img-4">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	            </div>
	        </div>
	    </div>   
	    <div class="item" style="background-image: url(bg-photo.jpg)">
	        <div class="content">
	            <div class="item-title">Оценка знаний</div>
	            <div class="item-text">Чем больше решаешь, тем больше понимаешь</div>
	        </div>
	        <div class="imgs">
	            <div class="grid">
	                <div class="img img-1">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	                <div class="img img-2">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	                <div class="img img-3">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	                <div class="img img-4">
	                    <img src="vendor/image/y4.gif"/>
	                </div>
	            </div>
	        </div>
    	</div> 
    </div>
	<div class="header" id="header">
	<div id="mainlogo" class="sing_word"><img src="vendor/image/pushka.png" alt=""></div>
	<input type="Search" id="search">
	<ul>
		<li><a class="navLink" href="account/home">Личный кабинет</a></li>
		<li><a class="navLink" href="ContactHead.html">Разработчики</a></li>
		<li><a class="navLink" href="Contact.html">Форум</a></li>
	</ul>
	</div>
	<div class="content">
 		<div class="smh"> </div> 
	</div>
	<script type="text/javascript">
		<?php echo file_get_contents("vendor/js/anime.min.js"); ?>
		<?php echo file_get_contents("vendor/js/JSsector.js"); ?>
		<?php echo file_get_contents("vendor/js/three.min.js"); ?>
		<?php echo file_get_contents("vendor/js/vanta.net.min.js"); ?>
		<?php echo file_get_contents("vendor/js/JSanimation.js"); ?>
	</script>
</body>
</html>