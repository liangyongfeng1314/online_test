<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/total1_style.css"/>
</head>
<?php
//考试题库二
$data = [
	//题库标题
	'title' => 'PHP基础语法考试题（三）',
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
					'question' => 'php中布尔类型数据只有两个值：真和假。',
					'answer' => 'yes'
				], 2=> [
					'question' => 'php中连接两个字符串的符号是“+ ”。',
					'answer' => 'no'
				], 3=> [
					'question' => 'php可以使用“scanf”来打印输出结果。',
					'answer' => 'no'
				], 4=> [
					'question' => '每个语句结尾都要加“；”来表示语句结束。',
					'answer' => 'yes'
				], 5=> [
					'question' => 'php变量使用之前需要定义变量类型。',
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
					'question' => '下面哪个不是合法的SQL的归类函数（ ）。',
					'option' => [
						'AVG','MIN','MAX','CURRENT_DATE()'
					],
					'answer' => 'D'
				], 2=> [
					'question' => '在MYSQL中的mysql数据库中没有以下哪张表（ ）。',
					'option' => [
						'tables_priv','columns_priv','user','database'
					],
					'answer' => 'D'
				], 3=> [
					'question' => 'mysql_affected_rows()对哪个操作没有影响（ ）。',
					'option' => [
						'SELECT','DELETE','UPDATE','INSERT'
					],
					'answer' => 'A'
				], 4=> [
					'question' => 'mysql_data_seek(查询结果指针，资料记录位置)函数中，资料记录位置的值是从多少开始的?（ ）。',
					'option' => [
						'1','2','3','0'
					],
					'answer' => 'D'
				], 5=> [
					'question' => '关于mysql_pconect说法正确的是（ ）。',
					'option' => [
						'与数据库进行连接','与mysql_connect功能相同','与@mysql_connect功能相同','与数据库建立持久连接'
					],
					'answer' => 'D'
				]
			]
		],
		//多选题
		'multiple' => [
			'name' => '多选题',
			'score' => 30,
			'data' => [
				1 => [
					'question' => 'php中，单引号和双引号所包含的字符串有什么区别（ ）。',
					'option' => [
						'单引号速度快，双引号速度慢','双引号速度快，单引号速度慢','两者没有区别','双引号解析其中以$开头的变量，而单引号不解析'
					],
					'answer' => ['A','D']
				], 2=> [
					'question' => '对于SELECT * FROM tb这样的sql查询语句，如何才能减少从数据库返回的数据量（ ）。',
					'option' => [
						'转化为存储过程','用具体的字段名来替代"*"','加一个"where"语句','转变查询为视图'
					],
					'answer' => ['A','B','C']
				], 3=> [
					'question' => '$result = preg_replace("/\S*\[quote\][\n\r]*(.+?)[\n\r]*\[\/quote/]\S*/iS","//1",$str),该语句会匹配和替换出什么样的$str（ ）。',
					'option' => [
						'[quote][\quote]不区分大写','[quote][\quote]区分大写','如果$str = "[quote]\t\nabc\t\n[\quote].则$result = "\t\nabc\t\n','如果$str = "[quote]\t\nabc\t\n[\quote].则$result = "\abc'
					],
					'answer' => ['A','D']
				], 4=> [
					'question' => '下列选项中，其值可以自动转换为布尔类型值false的是（ ）。',
					'option' => [
						'整型值0','空字符串','array( array() )','浮点型值0.0',
					],
					'answer' => ['A','B','D']
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
					'question' => 'php的中文名是什么。',
					'answer' => '超文本预处理器'
				], 2=> [
					'question' => 'php可以和数据库联系吗(从"可以"或"不可以"选择)。',
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