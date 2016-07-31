<?php

	 $arr =array(1,5,9,2,4,8,10);
	function xuanze($arr) {
		$count = count($arr);
		for($i=0;$i<$count-1;$i++){
			$min= $i;
		
		for($j=$i+1;$j<$count;$j++){
			if($arr[$min]>$arr[$j]){
				$min = $j;
			}
			
		} 
		if($i!=$min){
			$temp=0;
			$temp = $arr[$min];
			$arr[$i] = $temp ;
			 $arr[$min] = $arr[$i] ;
		}
		
		}return $arr;
		
	}
	var_dump(xuanze($arr));
	
	
	?>