<?php
header("Content-type:text/html;charset=utf-8");

	date_default_timezone_set("PRC");

	// header
	// 1. 创建一个php文件, 管理数据库的打开和关闭, 表的创建
	
	// 创建一个数据库: sql62
	// 创建一个表: message_board
	
	$link = mysql_connect("qdm227519527.my3w.com", "qdm227519527", "llzz11rr");
	
//	mysql_query("create database if not exists `sql62` character set 'utf8' collate 'utf8_general_ci'");
	
	mysql_select_db("qdm227519527_db");
	
	$result = mysql_query("create table if not exists message_board (id int(100) primary key auto_increment, content text, time varchar(100), ding int(11), cai int(11)) default charset=utf8");
	
	mysql_query("set names utf8");
	
	// 定义一个常量
	
	if ($result) {
		echo "成功";
	} else {
		echo "失败";
	}
	// 测git


	// add content for test
	
	?>
	






