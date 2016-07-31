<?php
/*    第一种方法使用mail函数发送邮件但是必须用一台不需要验证的SMTP服务器
 * 搭建方法：用windows自带的IIS就可以，或者从网上下载其他的SMTP服务器软件。
	$to="1015113845@qq.com";
	$subject = "Test";
	$message = "my name is hello world";
	mail($to, $subject, $message);
    ini_set('SMTP', 'smtp.163.com');
	ini_set('smtp_port', '25');
	ini_set('sendmail_from', '8825698107@163.com');
	*/
	//第二种方法 引用smtp.php发送邮件类库
require("smtp.php");
##########################################
$smtpserver = "smtp.163.com";//SMTP服务器
$smtpserverport =25;//SMTP服务器端口
$smtpusermail = "8825698107@163.com";//SMTP服务器的用户邮箱
$smtpemailto = "1015113845@qq.com";//发送给谁
$smtpuser = '8825698107@163.com';//SMTP服务器的用户帐号
$smtppass = "wbhniwanlyou";//SMTP服务器的用户密码
$mailsubject = "order";//邮件主题
$mailbody .= "<meta http-equiv='Content-Type' content='text/html; charset=gb2312'>";
$mailbody .= "<b>Name:</b> ".$_POST["first_name"]." ".$_POST["last_name"]."<BR>\n";//邮件内容
$mailbody .= "<b>Email:</b> ".$_POST["email"]."<BR>\n";
$mailbody .= "<b>I'd like to:</b> ".$_POST["select"]."<BR>\n";
$mailbody .= "<b>Comments or Questions:</b> <BR>\n".$_POST["body"]."<BR>\n";
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
##########################################
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证.
$smtp->debug = true;//是否显示发送的调试信息true/false
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);

echo $mailbody;

/*echo "<script language='javascript'>"; 

echo 'window.top.location="contactus_ok.html"'; 

echo "</script>"; 
*/
?>

	
	
	