<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/total1_style.css"/>
</head>
<?php
//考试题库四
$data = [
	//题库标题
	'title' => 'PHP基础语法考试题（四）',
	//答题时限（秒数）
	'timeout' => 600,
	//题库
	'data' => [
		//判断题
		'binary' => [
			'name' => '判断题', //题型名称
			'score' => 20,     //题型分数
			'data' => [
				1 => [
					'question' => '在返回数组中的所有值，可以使用array_value( )函数。',
					'answer' => 'yes'
				], 2=> [
					'question' => '运算符“++”可以对常量和变量进行累加1。',
					'answer' => 'no'
				], 3=> [
					'question' => 'php语言中的数值型字符串可以和数字变量进行混合运算。',
					'answer' => 'yes'
				], 4=> [
					'question' => 'php中,双引号字符串支持变量解析以及转义字符。',
					'answer' => 'yes'
				], 5=> [
					'question' => 'php语言中的数值型字符串不可以和数字变量进行混合运算。',
					'answer' => 'no'
				]
			]
		],
		//单选题
		'single' => [
			'name' => '单选题',
			'score' => 30,
			'data' => [
				1 => [
					'question' => '在str_replace(1,2,3)函数中1 2 3 所代表的名称是（ ）。',
					'option' => [
						' "取代字符串＂，＂被取代字符串＂，＂来源字符串＂',
						' ＂被取代字符串＂，"取代字符串＂，＂来源字符串＂ ',
						'＂来源字符串＂，"取代字符串＂，＂被取代字符串＂',
						' ＂来源字符串＂，＂被取代字符串＂，"取代字符串＂'
					],
					'answer' => 'B'
				], 2=> [
					'question' => '浏览网页时,看到的内容是HTML的哪一部分?（ ）。',
					'option' => [
						'title ',' table ',' body','head'
					],
					'answer' => 'C'
				], 3=> [
					'question' => '运算符"%"的作用是（ ）。',
					'option' => [
						'无效','取整','取余','除'
					],
					'answer' => 'C'
				], 4=> [
					'question' => 'file（ ）函数返回的数据类型是（ ）。',
					'option' => [
						'数组','字符串','整型','根据文件来定'
					],
					'answer' => 'A'
				], 5=> [
					'question' => '计算字符串长度的函数是（ ）。',
					'option' => [
						'strlen( ) ',' len( ) ','stringlen( )',' lens( ) '
					],
					'answer' => 'A'
				]
			]
		],
		//多选题
		'multiple' => [
			'name' => '多选题',
			'score' => 30,
			'data' => [
				1 => [
					'question' => 'php中，不等运算符是（ ）。',
					'option' => [
						' ≠  ',' !=','<>','><'
					],
					'answer' => ['B','C']
				], 2=> [
					'question' => '函数的参数传递包括（ ）。',
					'option' => [
						'按值传递','按引用传递','按变量传递','按作用域传递'
					],
					'answer' => ['A','B']
				], 3=> [
					'question' => 'php中，赋值运算符有（）。',
					'option' => [
						'=','+=','==','='
					],
					'answer' => ['A','D','B']
				], 4=> [
					'question' => 'php中可以实现程序分支结构的关键字是（ ）。',
					'option' => [
						'while','for','if','switch',
					],
					'answer' => ['C','D']
				], 5=> [
					'question' => 'PHP表单的提交方法有（ ）。',
					'option' => [
						'post',' request','get','querystring'
					],
					'answer' => ['A','B','C']
				]
			]
		],
		//填空题
		'fill' => [
			'name' => '填空题',
			'score' => 20,
			'data' => [
				1 => [
					'question' => 'php的是一门什么语言。',
					'answer' => '脚本语言'
				], 2=> [
					'question' => 'php可以结合html一起用吗?(从"可以"或"不可以"选择)。',
					'answer' => '可以'
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
<div style="text-align:center; margin-bottom:20px; margin-top:10px;  color:#00FFFF; font-size:36px;">您的成绩是:<?=($sum+$sumb+$sumc+$sumd)?>分</div>
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