<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/dataone_style.css"/>
</head>
<?php
//考试题库三
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
		开始考试
	</div>
<div class="content">
    <form action="total3.php" method="post">
     <div class="title_one">
     	<div class="title_two">
    		php基础语法考试题(一)
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