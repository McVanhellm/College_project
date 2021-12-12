<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>#name#</title>
	</head>
	<body>
		<div><h1>Forum PhysLab</h1></div>
		<div class="forum-thems">
			<?php 
				foreach($args["topics"] as $value)
				{
					echo "<div onclick='openTopic(".$value["id"].");' style='width: 807px; height: 72px; background: #FFFFFF; box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25); border-radius: 5px;' id=".$value["id"].">";
					echo "<div>".$value["title"]."</div>";
					echo "<div>".$value["contentHTML"]."</div>";
					echo "<div>".$value["autherid"]."</div>";
					echo "</div>";
				}
			?>
		</div>
	</body>

	<style type="text/css"> 
		<?php echo file_get_contents("../vendor/css/Fmain.css"); ?>
	</style>

	<script type="text/javascript">
		function openTopic(index)
		{
			alert(index);
			window.location.href = 'forum/topic?id='+index;
		}
	</script>
</html>