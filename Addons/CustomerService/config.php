<?php
return array(
	'trigger'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'触发方式',//表单的文字
		'type'=>'radio',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>array(		 //select 和radion、checkbox的子选项
			'2'=>'关键字无匹配时触发',		 //值=>文字
			'1'=>'始终触发',		 //值=>文字
			'0'=>'关闭',
		),
		'value'=>'0',			 //表单的默认值
	),
);
					