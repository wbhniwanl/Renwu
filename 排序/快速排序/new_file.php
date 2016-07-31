<?php
	$arr =array(1,3,9,2,4,8,10);
	function kuaisu($arr){
		$count= count($arr);
		if($count<=1){
			return $arr;
		}
		$one = $arr[0];
		$left = $right = [];
		for($i=1;$i<$count;$i++){
			if($one< $arr[$i]){
					$right[]= $arr[$i];	
			}
			else {$left[]= $arr[$i];
			
			}	
		}
	
		$left  = kuaisu($left);   //得到左边
		$right = kuaisu($right);  //得到右边
		return array_merge($left,array($one),$right);
	}
	
	var_dump(kuaisu($arr))
	
	
	
	
	?>