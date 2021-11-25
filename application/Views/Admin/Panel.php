<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
		<title>Панель администратора</title>
	</head>
	<body>

		<div class="menu">
			<a href="../"><img src="../vendor/image/logowhite.png"></a>
			<input class="create-btn" type="submit" name="createPageBtn" value="Сохранить всё"/>
		</div>

		<div class="blocks">
			<div class="content">
				<div class="routes box">
					<p>Routes</p>
					 <textarea id="routes"> <?php echo file_get_contents("application/Config/Routes.php"); ?></textarea>
				</div>
				<div class="routes box">
					<p>DateBase</p>
					<textarea id="datebase"><?php echo file_get_contents("application/Config/db.php"); ?></textarea>
				</div>
				<div class="routes box">
					<p>Session</p>
					<textarea id="datebase"><?php echo file_get_contents("application/Lib/session.php"); ?></textarea>
				</div>
			</div>

			<div class="editor-file">
				<div class="selectfile box">
					<div class="left-select-box">
						<div class="select">
							<select class="newselect" size="10">
								<?php foreach (searchPHP() as $key => $value) { echo "<option>".$value."</option>"; } ?>
							</select>
						</div>
						<div class="select">
							<select size="10">
								<?php foreach (searchCSS() as $key => $value) { echo "<option>".$value."</option>"; } ?>
							</select>
						</div>
					</div>
					<div class="editorfile">
						<textarea id="editorfile"></textarea>
					</div>
				</div>

				<div class="routes">
					<form action="panel" method="POST">
						<p class="text">Add new page</p>
						<p><input class="text-field__input text" type="text" name="folder" required placeholder="folder"></p>
						<p><input class="text-field__input text" type="text" name="controller" required placeholder="controller"></p>
						<p><input class="text-field__input text" type="text" name="action" required placeholder="action"></p>
						<input class="create-btn" type="submit" name="createPageBtn" value="Создать"/>
					</form>
				</div>
			</div>
		</div>

		<style type="text/css"> 
			<?php echo file_get_contents("cms_vendor/css/panel.css"); ?>
		</style>
	</body>
</html>