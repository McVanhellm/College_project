<?php 

	class Achievement
	{

		static function getAchievement($args)
		{
			$achievement = [
				"1" => [
					"name" => "Атамнулся",
					"value" => 15,
					"img" => "atom.png",
				],
				"2" => [
					"name" => "Атамнулся 2",
					"value" => 15,
					"img" => "atom.png",
				],
			];

			if(count($args) < 1) 
				return null;
			else
			{
				$minSize = 9999;
				$minSizeId = 9999;

				$result = array();
				foreach($args as $arg)
				{
					if($arg['fineValue'] - $arg['value'] < $minSize)
					{
						$minSize = $arg['fineValue'] - $arg['value'];
						$minSizeId = $arg['id'];
						$result = [
							"remainder" => $minSize,
							"Ainfo" => $achievement[$arg['idachiv']],
							"value" => $arg['value'],
						];
					}
				}
				return $result;
			}
		}
	}

?>