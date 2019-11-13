<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/dataone_style.css"/>
</head>
<?php
//考试题库一
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
		开始考试
	</div>
<div class="content">
    <form action="total1.php" method="post">
     <div class="title_one">
     	<div class="title_two">
    		php基础语法考试题(四)
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