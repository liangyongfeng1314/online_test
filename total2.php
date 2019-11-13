<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/total1_style.css"/>
</head>
<?php
header("Content-type: text/html; charset=utf-8"); 
//$data=require './data/1.php';
?>
<?php

//考试题库二
$data=[
	//题库标题
	'title' => 'PHP基础语法考试题（二）',
	//答题时限（秒数）
	'timeout' => 1800,
	//题库
	'data' => [
		//判断题
		'binary' => [
			'name' => '判断题', //题型名称
			'score' => 30,     //题型分数
			'data' => [
				1 => [
					'question' => '使用PHP写好的程序，在Linux和Windows平台上都可以运行。',
					'answer' => 'yes'
				], 2=> [
					'question' => 'PHP可以支持MySQL数据库，但不支持其它的数据库。',
					'answer' => 'no'
				], 3=> [
					'question' => 'PHP有很多流行的MVC框架，这些框架可以使PHP的开发更加快捷。',
					'answer' => 'yes'
				], 4=> [
					'question' => 'Zend Studio是PHP中常用的IDE（集成开发环境）。',
					'answer' => 'yes'
				], 5=> [
					'question' => '进行PHP程序开发时，可以借助软件和工具来提高效率。',
					'answer' => 'yes'
				]
			]
		],
		//单选题
		'single' => [
			'name' => '单选题',
			'score' => 30,
			'data' => [
				1 => [
					'question' => '下列选项中，不是URL地址中所包含的信息是（ ）。',
					'option' => [
						'主机名','端口号','网络协议','软件版本'
					],
					'answer' => 'D'
				], 2=> [
					'question' => 'PHP是一种（ ）的编程语言。',
					'option' => [
						'解释型','编译型','两者都是','两者都不是'
					],
					'answer' => 'A'
				], 3=> [
					'question' => 'PHP支持多种风格的标记，以下不是PHP标记的是（ ）。',
					'option' => [
						'<?php  ?>','<?     ?>','<!--    -->','<%    %>'
					],
					'answer' => 'C'
				], 4=> [
					'question' => '下列选项中，函数返回的关键字是（ ）。',
					'option' => [
						'back','go','return','break'
					],
					'answer' => 'C'
				], 5=> [
					'question' => 'PHP中存在多种变量，其中在函数内部定义的变量称之为（ ）。',
					'option' => [
						'可变变量','局部变量','全局变量','内部变量'
					],
					'answer' => 'B'
				]
			]
		],
		//多选题
		'multiple' => [
			'name' => '多选题',
			'score' => 20,
			'data' => [
				1 => [
					'question' => '下列选项中，关于数据类型的说法描述正确的是（ ）。',
					'option' => [
						'浮点数指的是数学中的小数，不能保存整数','在双引号内的变量会被解析，而单引号内的变量会被原样输出','布尔类型只有true和false两个值，且区分大小写','对于整数59可以使用十六进制数0x3b进行表示'
					],
					'answer' => ['B','D']
				], 2=> [
					'question' => '下列选项中，可以作为PHP的输出语句的是（ ）。',
					'option' => [
						'echo','var_dump','print_r','以上答案都不正确'
					],
					'answer' => ['A','B','C']
				], 3=> [
					'question' => '下面关于if语句的说法正确的是（ ）。',
					'option' => [
						'if语句也成为单分支语句','if语句的判断条件是布尔类型数据','if语句的判断条件是一个字符串类型数据','以上答案都不正确'
					],
					'answer' => ['A','B']
				], 4=> [
					'question' => '下列选项中，可以用来操作数组的运算符是（ ）。',
					'option' => [
						'联合 +','自增 ++','相等 ==','全等 ===',
					],
					'answer' => ['A','C','D']
				], 5=> [
					'question' => '若在当前运行的脚本中需要调用其他文件的函数，可以使用以下哪个语句（ ）。',
					'option' => [
						'import','namespace','include','require'
					],
					'answer' => ['C','D']
				]
			]
		],
		//填空题
		'fill' => [
			'name' => '填空题',
			'score' => 20,
			'data' => [
				1 => [
					'question' => 'Apache的httpd服务程序默认使用的是____端口。',
					'answer' => '80'
				], 2=> [
					'question' => '在PHP中，____函数能将数组转化为字符串。',
					'answer' => 'implode'
				]
			]
		]
	]
];
function toHTML($str){
	$str = htmlspecialchars($str,ENT_QUOTES);
	return str_replace('','$nbsp',$str);
	}
?>
<body>
<div class="container">
	<div  class="title">
		在线考试系统-考试结束
	</div>
<?php
/*判断题计分*/
	$sumb=0;
	for($b=1;$b<=5;$b++)
	{
	if(isset($_POST['binary'][$b]))
    {
		if($_POST['binary'][$b]===$data['data']['binary']['data'][$b]['answer']){
			$sumb=$sumb+6;
			$totalb['binary'][$b]=true;
			}else{	
				$totalb['binary'][$b]=false;
			}
	}else{	
				$totalb['binary'][$b]=false;
			}
	}
/*单选题计分*/
$sum=0;
	for($i=1;$i<=5;$i++)
	{
	if(isset($_POST['single'][$i]))
    {
		if($_POST['single'][$i]===$data['data']['single']['data'][$i]['answer']){
			$sum=$sum+6;
			$total['single'][$i]=true;
		}else{
			$total['single'][$i]=false;
			}
	}else{
		$total['single'][$i]=false;
		}
	}
	/*多选题*/
	$sumc=0;
	for($c=1;$c<=5;$c++)
	{
	if(isset($_POST['multiple'][$c]))
    {
		if($_POST['multiple'][$c]===$data['data']['multiple']['data'][$c]['answer']){
			$sumc=$sumc+4;
			$totalc['multiple'][$c]=true;
		}else{
			$totalc['multiple'][$c]=false;
			}
	}else{
		$totalc['multiple'][$c]=false;
		}
	}
/*填空题计分*/
	$sumd=0;
	for($i=1;$i<=2;$i++)
	{
		if(isset($_POST['fill'][$i])){
			if($_POST['fill'][$i]===$data['data']['fill']['data'][$i]['answer']){
					$sumd=$sumd+10;
					$totald['fill'][$i]=true;
			}else{
					$totald['fill'][$i]=false;
				}	
		}else{
			$totald['fill'][$i]=false;
			}
	}
//echo $sum;
?>
<div  style="text-align:center; margin-bottom:20px; margin-top:10px;  color:#00FFFF; font-size:36px;">您的成绩是:<?=($sum+$sumb+$sumc+$sumd)?>分</div>
<table cellpadding="1" cellspacing="0" bordercolor="#BBFFFF">
	<tr style="background:#AFEEEE;">
    	<th>题型</th>
        <th>题号</th>
        <th>答案</th>
        <th>分数</th>
    </tr>
     <tr>
    	<!--题型-->
    	<td align="center" rowspan="5"><?=$data['data']['binary']['name']?></td>
        <!--题号-->
        <td align="center">1</td>
        <!--答案-->
        <td align="center"><?=$totalb['binary'][1]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalb['binary'][1]?6:0;?></td>
    </tr>
    <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">2</td>
        <!--答案-->
        <td align="center"><?=$totalb['binary'][2]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalb['binary'][2]?6:0;?></td>
    </tr>
       <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">3</td>
        <!--答案-->
        <td align="center"><?=$totalb['binary'][3]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalb['binary'][3]?6:0;?></td>
    </tr>
       <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">4</td>
        <!--答案-->
        <td align="center"><?=$totalb['binary'][4]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalb['binary'][4]?6:0;?></td>
    </tr>
         <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">5</td>
        <!--答案-->
        <td align="center"><?=$totalb['binary'][5]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalb['binary'][5]?6:0;?></td>
    </tr>
    <tr>
    	<!--题型-->
    	<td align="center" rowspan="5"><?=$data['data']['single']['name']?></td>
        <!--题号-->
        <td align="center">1</td>
        <!--答案-->
        <td align="center"><?=$total['single'][1]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$total['single'][1]?6:0;?></td>
    </tr>
    <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">2</td>
        <!--答案-->
        <td align="center"><?=$total['single'][2]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$total['single'][2]?6:0;?></td>
    </tr>
    <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">3</td>
        <!--答案-->
        <td align="center"><?=$total['single'][3]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$total['single'][3]?6:0;?></td>
    </tr>
    <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">4</td>
        <!--答案-->
        <td align="center"><?=$total['single'][4]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$total['single'][4]?6:0;?></td>
    </tr>
    <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">5</td>
        <!--答案-->
        <td align="center"><?=$total['single'][5]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$total['single'][5]?6:0;?></td>
    </tr>
     <tr>
    	<!--题型-->
        <td align="center" rowspan="5"><?=$data['data']['multiple']['name']?></td>
        <!--题号-->
        <td align="center">1</td>
        <!--答案-->
        <td align="center"><?=$totalc['multiple'][1]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalc['multiple'][1]?4:0;?></td>
    </tr>
     <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">2</td>
        <!--答案-->
        <td align="center"><?=$totalc['multiple'][2]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalc['multiple'][2]?4:0;?></td>
    </tr>
     <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">3</td>
        <!--答案-->
        <td align="center"><?=$totalc['multiple'][3]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalc['multiple'][3]?4:0;?></td>
    </tr>
     <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">4</td>
        <!--答案-->
        <td align="center"><?=$totalc['multiple'][4]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalc['multiple'][4]?4:0;?></td>
    </tr>
     <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">5</td>
        <!--答案-->
        <td align="center"><?=$totalc['multiple'][5]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totalc['multiple'][5]?4:0;?></td>
    </tr>
         <tr>
    	<!--题型-->
        <td align="center" rowspan="2"><?=$data['data']['fill']['name']?></td>
        <!--题号-->
        <td align="center">1</td>
        <!--答案-->
        <td align="center"><?=$totald['fill'][1]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totald['fill'][1]?4:0;?></td>
    </tr>
        <tr>
    	<!--题型-->
        <!--题号-->
        <td align="center">2</td>
        <!--答案-->
        <td align="center"><?=$totald['fill'][2]?'对':'错';?></td>
        <!--分数-->
    	<td align="center"><?=$totald['fill'][2]?4:0;?></td>
    </tr>
</table>
	<div class="button">
        <buttom><a href="index.php" class="button1">返回首页</a></buttom>
	</div>
</body>
</html>