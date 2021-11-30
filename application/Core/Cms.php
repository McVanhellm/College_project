<?php 

	# Getting raw url in github repository 
	#	$path -> sub folder in cms_vendor
	#	$file -> finded file
	function getRaw($path, $file)
	{
		return file_get_contents("https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/".$path."/".$file);
	}

	# Searching PHP(View folder) file in project
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
	
	# Searching type(css,js) file in project 
	#	$type -> find file type in folders
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

	# Searching and open file in folders	
	#	$filename -> find file in folders
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