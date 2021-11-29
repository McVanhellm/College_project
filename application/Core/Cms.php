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
	function searchStyleAndJs($type)
	{
		$cssFileList = [];
		foreach (scandir("vendor/".$type) as $key => $value) 
		{
			if(!($value == '.' || $value == '..'))
			{
				array_push($cssFileList, $value);
			}
		}
		return $cssFileList;
	}

	function openfile($fileName)
	{
		$url = [
			"1" => "application/Views",
			"2" => "vendor/css",
			"3" => "vendor/js",
		];

		foreach ($url as $key => $selectUrl) 
		{
			foreach (scandir($selectUrl) as $key => $value) 
			{
				if($value == '.' || $value == '..')
					continue;

				if(!strpos($value, '.'))
				{
					$newfiles = scandir($selectUrl."/".$value);
					foreach ($newfiles as $newKey => $newValue) 
					{
						if($newValue == '.' || $newValue == '..')
							continue;

						if($newValue == $fileName)
						{
							return file_get_contents($selectUrl."/".$value."/".$newValue);
						}
					}
				}
				else
				{
					if($value == $fileName)
					{
						return file_get_contents($selectUrl."/".$value);
					}
				}
			}
		}
	}

?>