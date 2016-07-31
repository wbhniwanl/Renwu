<?php 
	function bianli($dir){
		$files = array();//与数组的形式显示
		if(is_dir($dir)){//判断文件夹是否存在
			if($open=opendir($dir)){//打开文件夹句柄
				while(($file= readdir($open))!==false){//遍历文件夹里的文件
				if($file!="."&&$file!=".."){//判断是不是文件  .表示当前文件夹  ..表示上级文件夹
					if(is_dir($dir."/".$file)){//当前路径是否是一个文件夹						
						$files[$file]= bianli ($dir."/".$file);		//递归调用遍历文件夹所有文件内容	
					}
					else{
						$files[]=$dir."/".$file;	
					}			
				}	
			}
				closedir($open);
			     return $files;
			}
			
		}	
	}
	echo "<pre>";
	print_r(bianli("G:/Hbuider/HBuilder/tools"));
	/*
	function bianli1($dir1){
		$binali = array();
		if(is_dir($dir1)){
			if($open1= opendir($dir1)){
				while(($file1=readdir($open1))!==false){
					if($file1="."&&$file1=".."){
						if(is_dir($dir1."/".$file1)){
							$binali[$file1]= bianli1($dir1."/".$file1);
							
							
						}
						else{
							$binali[]= $dir1."/"$file1;
							
						}
						
					}
					
					
				}
					closedir($open1);
					return $bianli1
				}
				
			}
			
			
			
		}
		
		
		
	}
	*/
	
	
	
	
	
	
	
	?>