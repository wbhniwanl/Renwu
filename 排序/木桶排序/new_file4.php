<?php
	 $arr =array(1,5,9,2,4,8,10);
	function mutong($arr) {
    $min = min($arr);    $max = max($arr);  
	
	  $count = count($arr); 
	  //填充木桶
	     $buffer = array_fill($min, $max - $min + 1, 0);   
		 //开始标示木桶
		  for ($i = 0; $i < $count - 1; $i++) {
		  	        $buffer[$arr[$i]] ++;
    }    //根据统计桶内的次数输出桶内的数字
    for ($i = $min; $i < $max + 1; $i++) {
    	        for ($j = 0; $j < $buffer[$i]; $j++) {//这一行主要用来控制输出多个数字
    	     $result[] = $i;
        }
    }    return $result;
}
	var_dump(mutong($arr));
	
	
	
	
	