<?php
if(!defined('IN_GAME')) exit('Access Denied');

# 对话框相关配置文件：
# 用法：在行动中加入 $clbpara['dialogue'] = '单组对白名'; 行动后便会自动跳出对话框。默认情况下，对话框可以直接点击外侧窗口关闭（即跳过）；
# 如果想要生成不能跳过（比如存在选择肢）的对话框，加入 $clbpara['noskip_dialogue'] = 1；

# 单组对白：
$dialogues = Array
(
	//仅作演示用
	'thiphase' => Array
	(
		0 => '在你唱出那单一的旋律的霎那，<br>整个虚拟世界起了翻天覆地的变化……',
		1 => '世界响应着这旋律，产生了异变……<br>因为破灭之歌的作用，全部锁定被打破了！',
		2 => '在下一个瞬间——像是受到电磁干扰般，<br>你的战术界面突然变得花白一片。',
		3 => '<span class="grey">“……防火墙……已……<br>……请到……山丘上……来……”</span>',
		4 => '什么？',
		5 => '没等你反应过来，那位不速之客便已切断了通讯。<br>你呆望着恢复如常的界面，试图厘清这段语焉不详的讯息究竟有何含义……',
	),
	// Time for this to be used!
	'club21entry' => Array
	(
		0 => '你将这个蛋状物捧在手心，<br>你发现它上面并没有什么开关或缝隙。',
		1 => '正在你觉得是不是买到了个玩笑的时候。<br>蛋突然破成了四瓣！<br>随后从蛋中冒出来大量灰黑色，青蓝色，深紫色的像丝带一样的东西，<br>向着你的心口直刺而来！',
		2 => '你猝不及防，被这些丝带一样的东西击中，顿时，大量的数据塞满了你的大脑！<br>你头像炸开一样，不禁蹲躺了下去……',
		3 => '<span class="grey">🎶Ρжжηψψρип ρип, ρжжηψψρжжρип ρип<br>
		ρψψρип ρип, ρип ρип ρжжηψψρжж ρδ<br>
		ρжжηψψρип ρип, ρжжηψψρжжρип ρип<br>
		ρψψρип ρип, ρип ρип ρжжηψψρжж ρδ🎶<br></span>
		<span class="glitch1">“开开心心感叹号，<br>
		搞搞弄弄真快活！<br>
		此地犹如三重彩，<br>
		不愧吾等折腾多！”<br></span>
		<span class="grey">🎶Ρжжηψψρип ρип, ρжжηψψρжжρип ρип<br>
		ρψψρип ρип, ρип ρип ρжжηψψρжж ρδ<br>
		ρжжηψψρип ρип, ρжжηψψρжжρип ρип<br>
		ρψψρип ρип, ρип ρип ρжжηψψρжж ρδ🎶<br></span>',
		4 => '你似乎看到了，听到了，感觉到了一个模糊的场景，<br>但你不知道这是什么。',
		5 => '大量类似的场景掠过你的脑海，而你已经无力吸收。<br>你浑身疼痛，不禁口吐鲜血，无助地等待着一切结束。',
	),
	//TESTING ONLY - DELETE THIS WHEN DEPLOYING
	'testingDialog' => Array
	(
		0 => '这是测试对话第一页',
		1 => '这是测试对话第二页',
		2 => '现在给出选择支',
	),
);

# 单组对白中哪一页对话会显示头像：
$dialogue_icon = Array
(
	'thiphase' => Array
	(
		//第三页时会显示头像
		3 => 'img/n_0.gif',
	),
);

# 单组对白结束时关闭对话框候显示的log
$dialogue_log = Array
(
	'thiphase' => "<span class='lime'>※ 权限重载完成，控制模块已解锁。</span><br>……这又是什么时候的事？<br><br>",
	'club21entry' => "<span class='yellow'>虽然打开了蛋，但你被其中的<span class='glitchb'>数据风暴</span>狂暴吸入，受到了大量的伤害！</span><br>你屁滚尿流地重新站了起来。<br><br>",
	'testingDialog' => "<span class='yellow'>测试已结束！</span><br><br>",
);

# 单组对白结束时提供选择肢：
$dialogue_branch = Array
(
	'testingDialog' => Array(
		//0 => '选项A',
		//1 => '选项B',
		//2 => '选项C',
		3 => '选项A',
		4 => '选项B',
		5 => '选项C',
	),
);

# 单组对白结束提供特殊结束按钮（非必须、仅在结束对白会触发特殊事件时调用）：
$dialogue_ending = Array
(

);


?>
