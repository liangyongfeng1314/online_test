<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/dataone_style.css"/>
</head>
<?php
header("Content-type: text/html; charset=utf-8"); 
//$data=require './data/1.php';
?>
<?php

//考试题库二
$data=[
	//题库标题
	'title' => 'PHP基础语法考试题（三）',
	//答题时限（秒数）
	'timeout' => 1800,
	//题库
	'data' => [
		//判断题
		'binary' => [
			'name' => '判断题', //题型名称
			'score' => 20,     //题型分数
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
			'score' => 30,
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
		开始考试
	</div>
<div class="content">
    <form action="total2.php" method="post">
     <div class="title_one">
     	<div class="title_two">
    		php基础语法考试题(三)
        </div>
        <div class="title_three">
                <ul class="ul1">
                	<li class="li1"><a href="#fill">填空题</a></li>
                    <li class="li1"><a href="#multiple">多选题</a></li>
                    <li class="li1"><a href="#single">单选题</a></li>
        			<li class="li1"><a href="#binary">判断题</a></li>
        		</ul>
        </div>
    </div>
    <!--判断题-->
<div class="binary">
	<div class="binary_title">
    	<a name="binary"></a>(一)判断题 <span class="span1">(每题5分，共10题，总分50分)</span>
    </div>
    <div class="binary_test">
        <br />
        <?php foreach($data['data']['binary']['data'] as $k=>$v):?>
        	<ul class="ul2">
        		<li class="li2"><?=$k,'. ',toHTML($v['question'])?></li>
            
            	<li class="li2 li3">
            		<input type="radio" value="yes" name="binary[<?=$k?>]"/>对<br />
                 </li>
                 <li class="li2 li3">
             		<input type="radio" value="no" name="binary[<?=$k?>]"/>错
             	</li>
           
            </ul>
		<?php endforeach;?>
    </div>
</div>
<!--单选题-->
<a name="single">
<div class="single">
	<div class="single_title">
    	</a>(二)单选题 <span class="span1">共5题,每题6分。</span>
    </div>
    <div class="single_test">
    	<?php foreach($data['data']['single']['data'] as $k=>$v) {?>
        <ul class="ul2">
    		<li class="li2"><?=$k,'. '.$v['question']?></li>
            <li class="li2 li3"><input  type="radio" value="A" name="single[<?=$k?>]"/>A.<?=toHTML($v['option'][0])?></li>
            <li class="li2 li3"><input  type="radio" value="B" name="single[<?=$k?>]"/>B.<?=toHTML($v['option'][1])?></li>
            <li class="li2 li3"><input  type="radio" value="C" name="single[<?=$k?>]"/>C.<?=toHTML($v['option'][2])?></li>
           <li class="li2 li3"> <input  type="radio" value="D" name="single[<?=$k?>]"/>D.<?=toHTML($v['option'][3])?></li>
        </ul>
        <?php }?>
    </div>
</div>
<!--多选题-->
<a name="multiple"></a>
<div class="multiple">
    <div class="multiple_title">
    	(三)多选题,<span class="span1">共5，每题6分。</span>
        <br />
    </div>
    <div class="multiple_test">
    	<?php foreach($data['data']['multiple']['data'] as $k=>$v):?>
        <ul class="ul2">
    		<li class="li2"><?=$k,'. ',$v['question']?></li>
			
           <li class="li2 li3"> <input type="checkbox" value="A" name="multiple[<?=$k?>][]"/>A.<?=$v['option'][0]?><br /></li>
           <li class="li2 li3"><input type="checkbox" value="B" name="multiple[<?=$k?>][]"/>B.<?=$v['option'][1]?><br /></li>
           <li class="li2 li3"> <input type="checkbox" value="C" name="multiple[<?=$k?>][]"/>C.<?=$v['option'][2]?><br /></li>
           <li class="li2 li3"><input type="checkbox" value="D" name="multiple[<?=$k?>][]"/>D.<?=$v['option'][3]?></li>
        </ul>
		<?php endforeach;?>
    </div>
</div>
<!--填空题-->
<a name="fill"></a>
<div class="fill"> 
  	<div class="fill_title">
    		(四)填空题 <span class="span1">(共2，每题10分)</span>
    </div>
    <div>
        <br />
    	<?php foreach($data['data']['fill']['data'] as $k=>$v):?>
        <ul class="ul2">
    		<?=$k,'. ',$v['question']?>
			<br />
				请输入答案: <input type="text" name="fill[<?=$k?>]"/>
            <br />
       </ul>
		<?php endforeach;?>
   </div>
</div>
	<!--按钮-->
	<div class="button">
    	<input type="submit" value="交卷" class="button1"/>	
	</div>
    </form>
</div>
<div class="foot">
    	PHP在线考试系统　本项目仅供学习使用
</div>
</body>
</html>