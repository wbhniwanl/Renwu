<?php
//第一种方法
/*$arr =array(123,0,5,-1,4,15);
function insertSort(&$arr){
//先默认第一个下标为0的数是排好的数
for($i=1;$i<count($arr);$i++){
//确定插入比较的数
$insertVal=$arr[$i];
//确定与前面比较的数比较
$insertIndex=$i-1;

//表示没有找到位置
while($insertIndex>=0 && $insertVal<$arr[$insertIndex]){
//把数后移
$arr[$insertIndex+1]=$arr[$insertIndex];
$insertIndex--;
}
//插入(给$insertval找到位置了)
$arr[$insertIndex+1] = $insertVal;
}
}
insertSort($arr);
print_r($arr);*/

//第二中方法
/*
$arr =array(123,0,5,-1,4,15);
$count = count($arr);
 for ($i = 1; $i < $count; $i++) { 
	$one =$arr[$i];
	for($j=$i-1;$j>=0;$j--) {
		if($one<$arr[$j]) {
			$arr[$j+1]=$arr[$j];
			$arr[$j]=$one;	
		} else {   break;
		}
		
	}
}	
print_r($arr);
	*/
	
	//第三中方法
$arr =array(123,0,5,-1,4,15);
function inser($arr){
$count = count($arr);
 for ($i = 1; $i < $count; $i++) {
 	$one1= $arr[$i];
	 for($j=$i-1;$j>=0;$j--){
 	if($one1<$arr[$j]){
 		$arr[$j+1]=$arr[$j];
		$arr[$j]=$one1;
	}else {break;
		}
 	}
} return $arr; 
} 

var_dump(inser($arr));

?>