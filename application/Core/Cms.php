<?php 

	# Getting raw links to styles
	function getRaw($path, $file)
	{
		return file_get_contents("https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/".$path."/".$file);
	}

	# Search for files that are responsible for the design of pages
	function searchPHP()
	{
		$phpFileList = [];
		foreach (scandir("application/Views") as $key => $value) 
		{
			if(!stristr($value, '.'))
			{
				$newfiles = scandir("application/Views/".$value);
				foreach($newfiles as $newKey => $newValue)
				{
					if($newValue == "." || $newValue == "..")
						continue;

					array_push($phpFileList, $newValue);
				}
			}
		}
		return $phpFileList;
	}
	
	# Search for files that are responsible for page styles
	function searchCSS()
	{
		$cssFileList = [];
		foreach (scandir("vendor/css") as $key => $value) 
		{
			if(!($value == '.' || $value == '..'))
			{
				array_push($cssFileList, $value);
			}
		}
		return $cssFileList;
	}

?>