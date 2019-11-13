<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/total1_style.css"/>
</head>
<?php
//考试题库一
$data = [
	//题库标题
	'title' => 'PHP基础语法考试题（一）',
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
					'question' => '在".php"后缀的文件中，所有的PHP代码都只能写在"<?php ?>"标记内。',
					'answer' => 'no'
				], 2=> [
					'question' => '标量类型包括布尔型、整型、字符串型和数组型。',
					'answer' => 'no'
				], 3=> [
					'question' => 'var_dump是PHP中用于打印变量或表达式的类型与值等相关信息的函数。',
					'answer' => 'yes'
				], 4=> [
					'question' => '如果if语句的代码块中只包含一条语句，那么if语句的大括号可以省略。',
					'answer' => 'yes'
				], 5=> [
					'question' => '当浮点型数据自动转换为整型数据时，其值将向下取整。',
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
					'question' => '下列选项中，不区分大小写的标识符是（ ）。',
					'option' => [
						'函数名','常量名','变量名','属性名'
					],
					'answer' => 'A'
				], 2=> [
					'question' => '下列选项中，不能作为常量名的是（ ）。',
					'option' => [
						'ROOT','__PI__','e','CLASS'
					],
					'answer' => 'D'
				], 3=> [
					'question' => '语句"echo 2+3;"的输出结果是（ ）。',
					'option' => [
						'2+3','5','程序报错','以上答案都不正确'
					],
					'answer' => 'B'
				], 4=> [
					'question' => '下列选项中，不属于赋值运算符的是（ ）。',
					'option' => [
						'=','+=','.=','=='
					],
					'answer' => 'D'
				], 5=> [
					'question' => '下面关于多维数组的说法正确的是（ ）。',
					'option' => [
						'所谓多维数组，就是指一个数组的元素又是一个数组','所谓多维数组，就是指数组的所有元素必须都是数组','PHP中的数组维数不能超过三维 ','以上说法都不正确'
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
					'question' => '下列选项中，哪些可以用于输出数组中所有的元素（ ）。',
					'option' => [
						'print_r()','print()','echo()','var_dump()'
					],
					'answer' => ['A','D']
				], 2=> [
					'question' => '下列选项中，可以作为PHP开始标记的是（ ）。',
					'option' => [
						'<?php','<%','<?','<<<eof'
					],
					'answer' => ['A','B','C']
				], 3=> [
					'question' => '下列选项中，关于文件包含语句写法正确的是（ ）。',
					'option' => [
						'include "./demo/test.php"','include ./demo/test.php','include("./demo/test.php")','include(./demo/test.php)'
					],
					'answer' => ['A','C']
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
					'question' => '在PHP中，标识符允许包含字母、数字和____。',
					'answer' => '下划线'
				], 2=> [
					'question' => 'substr()函数用于获取字符串中的子串，则substr("itcast",1,3) 的返回值是____。',
					'answer' => 'tca'
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