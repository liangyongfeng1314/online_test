<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/dataone_style.css"/>
</head>
<?php
//考试题库四
$data = [
	//题库标题
	'title' => 'PHP基础语法考试题（二）',
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
		开始考试
	</div>
<div class="content">
    <form action="total4.php" method="post">
     <div class="title_one">
     	<div class="title_two">
    		php基础语法考试题(二)
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
    	(三)多选题 <span class="span1">(共5，每题6分。)</span>
        <br />
    </div>
    <div class="multiple_test">
    	<?php foreach($data['data']['multiple']['data'] as $k=>$v):?>
        <ul class="ul2">
    		<li class="li2"><?=$k,'. ',$v['question']?></li>
			
           <li class="li2 li3"> <input type="checkbox" value="A" name="multiple[<?=$k?>][]"/>A.<?=toHTML($v['option'][0])?><br /></li>
           <li class="li2 li3"><input type="checkbox" value="B" name="multiple[<?=$k?>][]"/>B.<?=toHTML($v['option'][1])?><br /></li>
           <li class="li2 li3"> <input type="checkbox" value="C" name="multiple[<?=$k?>][]"/>C.<?=toHTML($v['option'][2])?><br /></li>
           <li class="li2 li3"><input type="checkbox" value="D" name="multiple[<?=$k?>][]"/>D.<?=toHTML($v['option'][3])?></li>
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