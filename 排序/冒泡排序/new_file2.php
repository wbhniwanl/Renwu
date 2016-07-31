<?php 
		$arr =array(1,3,9,2,4,8,10);
		function maobao($arr){
			$count = count($arr);
			
			for($i=0;$i<$count-1;$i++){
			for($j=$i+1;$j<$count;$j++){
				if($arr[$i]>$arr[$j]){
					$temp=0;
					$temp=$arr[$j];
					$arr[$j]=$arr[$i];
					$arr[$i]=$temp;
				}
			
			}
			}
		return $arr;
		}
	var_dump(maobao($arr));
	
	
	
	?>