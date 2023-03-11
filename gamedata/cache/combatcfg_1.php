<?php

//基础反击率
$counter_obbs =  Array('N' => 75, 'P' => 85, 'K' => 85, 'G' => 50, 'C' => 75, 'D' => 0, 'F'=> 95, 'J'=> 50);
//各种攻击方式的射程，射程大者可以反击射程小者，此外射程为0则代表不能反击任何系但也不能被任何系反击
$rangeinfo = Array('N' => 3, 'P' => 3, 'K' => 3, 'G' => 7, 'C' => 5, 'D' => 0, 'F'=> 1, 'J'=> 8); 
//各种攻击方式的基础命中率
$hitrate_obbs = Array('N' => 80, 'P' => 80, 'K' => 75, 'G' => 70, 'C' => 70, 'D' => 60, 'F' => 85, 'J'=> 10);
//$hitrate_obbs = Array('N' => 80, 'P' => 80, 'K' => 80, 'G' => 75, 'C' => 100, 'D' => 60, 'F' => 70);
//各种攻击方式的最高命中率
$hitrate_max_obbs = Array('N' => 90, 'P' => 90, 'K' => 85, 'G' => 95, 'C' => 96, 'D' => 70, 'F' => 96, 'J'=> 98);
//熟练度对命中的影响，每点熟练增加的命中，可以考虑区分武器
$hitrate_r =  Array('N' => 0.025, 'P' => 0.025, 'K' => 0.025, 'G' => 0.05, 'C' => 0.25, 'D' => 0.02, 'F'=> 0.1, 'J'=> 0.2);
//$hitrate_r =  Array('N' => 0.02, 'P' => 0.02, 'K' => 0.02, 'G' => 0.01, 'C' => 0, 'D' => 0.03, 'F'=> 0.05);
//各种攻击方式的伤害变动范围，越少越稳定。
$dmg_fluc = Array('N' => 15, 'P' => 15, 'K' => 40, 'G' => 20, 'C' => 5, 'D' => 25, 'F'=> 10, 'J'=> 10);
//熟练度对伤害的影响，每点熟练度增加的伤害
$skill_dmg = Array('N' => 0.6, 'P' => 0.6, 'K' => 0.65, 'G' => 0.6, 'C' => 0.4, 'D' => 0.75, 'F'=> 0.4, 'J'=>0.7);
//$skill_dmg = Array('N' => 0.5, 'P' => 0.5, 'K' => 0.5, 'G' => 0.6, 'C' => 0.3, 'D' => 0.4, 'F'=> 1.2);
//各攻击方式对应的防御属性
$def_kind = Array(
    'P' => 'P', 'N' => 'P',
    'K' => 'K',
    'G' => 'G', 'J' => 'G', 
    'C' => 'C',
    'D' => 'D',
    'F' => 'F',
);

//天气对攻击力的影响（单位：百分比加算）
$weather_attack_modifier = Array(10,10,0,-5,-10,-20,-15,0,0,7,20,-7,-20,-5,-10,-10,-10,10);
//天气对防御力的影响（单位：百分比加算）
$weather_defend_modifier = Array(10,30,0,0,-3,-15,-10,0,-20,-30,-50,-5,-20,-3,-20,5,-30,30);
//天气对发现率的影响
$weather_find_r = Array(10,20,0,-2,-3,-10,-7,5,-10,-20,0,-7,-5,-30,-5,-20,0,20);
//天气对躲避率的影响
$weather_hide_r = Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
//天气对先制率的影响
$weather_active_r = Array(10,20,0,-5,-10,-20,-15,0,-7,-10,-10,-5,0,-5,-20,-5,0,20);

//'通常','作战姿态','强袭姿态','探物姿态','偷袭姿态','治疗姿态','✧狂飙姿态✧','哨戒姿态'
//姿态对攻击力的影响始终生效（1：只在作出先制攻击时生效）
$pose_attack_active = 0;
//姿态对攻击力的影响（单位：百分比加算）
$pose_attack_modifier = Array(0,100,0,-25,25,-50,50,-777);
//姿态对防御力的影响始终生效（1：只在受到先制攻击伤害时生效）
$pose_defend_active = 0;
//姿态对防御力的影响（单位：百分比加算）
$pose_defend_modifier = Array(0,25,0,-25,-50,-50,-466,777);
//姿态对躲避率的影响
$pose_hide_modifier = Array(0,-25,0,-10,10,-25,-40,-40,0);
//姿态对先制率的影响（单位：百分比加算）（计算方式：进攻方姿态先制率-防守方姿态先制率）
$pose_active_modifier = Array(0,0,50,0,25,-25,5,-100);
//姿态对反击率的影响（单位：百分比加算）
$pose_counter_modifier = Array(0,0,0,0,0,-100,0,-100);

//'通常','','重视防御','重视反击','重视躲避'
//应战策略对攻击力的影响始终生效（1：只在作出反击时生效）
$tactic_attack_active = 0;
//应战策略对攻击力的加成（单位：百分比加算）
$tactic_attack_modifier = Array(0,20,-25,25,-50);
//应战策略对防御力的影响始终生效（1：只在受反击伤害时生效）
$tactic_defend_active = 0;
//应战策略对防御力的加成（单位：百分比加算）
$tactic_defend_modifier = Array(0,-20,50,-25,0);
//应战策略对躲避率的影响
$tactic_hide_modifier = Array(0,0,0,-15,15);
//应战策略对先制率的影响（单位：百分比加算）
$tactic_active_modifier = Array(0,0,0,0,0);
//应战策略对反击率的影响（单位：百分比加算）
$tactic_counter_modifier = Array(0,0,30,0,0);

//场景对攻击力的加成（单位：百分比加算） wtf
$pls_attack_modifier = Array(
    // 无月 端点 RF高 雪镇 索拉 指挥 梦幻 清水 白穗 墓地 麦斯 对天 夏镇 三体 光坂 守矢 常林 常高 秋镇 精灵 春镇 圣G  初始 幻想 永恒 妖精 冰封 花菱 FARG 风祭 格纳 和田 SCP  雏菊 英灵
        10,   0,   0,  -5,   0,   5,   5,  -5, -5,   5,    0, -15,  -5,   0, -10,  0,   0,   5,  -5, -15,  -5,  0,     0,   0,   0,   0,  10, -10,   5,  0,   0,   0,  -20,   0,  15
    //   0,   0,   0,   0,   0,   0,  10,   0,  0, -10,    0,   0,   0,   0, -10,  0,   0,   0,  10,   0,   0,  0
        );
//场景对防御力的加成（单位：百分比加算）
$pls_defend_modifier = Array(
    // 无月 端点 RF高 雪镇 索拉 指挥 梦幻 清水 白穗 墓地 麦斯 对天 夏镇 三体 光坂 守矢 常林 常高 秋镇 精灵 春镇 圣G  初始 幻想 永恒 妖精 冰封 花菱 FARG 风祭 格纳 和田 SCP  雏菊 英灵
        0,  -10,   0,  0, -10,  0,   0,   0,   0,    0,  -10,   5,   0, -10,  0,   0,   5,   0,   0,   0,   0,  0,  -10,  -10, -10,   0,   0,   0,  5,   5,   5,   0,   0,   -5,   0
    //   0,  -10,  10,  0,   0,  0,   0,   0,   0,    0,    0, -10,   10,  0,  0,   0,   0,   0,   0,   0,  10,  0
        ); 
//场景对遇敌率的修正
$pls_find_modifier = Array(
    // 无月 端点 RF高 雪镇 索拉 指挥 梦幻 清水 白穗 墓地 麦斯 对天 夏镇 三体 光坂 守矢 常林 常高 秋镇 精灵 春镇 圣G  初始 幻想 永恒 妖精 冰封 花菱 FARG 风祭 格纳 和田 SCP  雏菊 英灵
        20,  0,   0,   0,    0,    0,  0,  0,    0,    0,    0,   0,   0,    0,  0,   0,   0,   0,  0,   0,  0,   0,   0,   0,   0,   0,   0,  0,   0,   0,   0,    0,  10,   0,  20
    // 10,  0,   0,   10,  -10,  10,  0,  10,  -10,   0,   10,   0,   0,  -10,  0, -10, -10, -10,  0,  10,  0,  10
        );
//场景对隐蔽率的修正
$pls_hide_modifier = Array(
    // 无月 端点 RF高 雪镇 索拉 指挥 梦幻 清水 白穗 墓地 麦斯 对天 夏镇 三体 光坂 守矢 常林 常高 秋镇 精灵 春镇 圣G  初始 幻想 永恒 妖精 冰封 花菱 FARG 风祭 格纳 和田 SCP  雏菊 英灵
        0,  0,    5,   5,    0,   0,  0,   0,   0,   -10,   0,  0,   5,   0,  10,   0, -10,   5,  5,   0,  5,   5,   0,   0,   0,   0,   0,  15, -10,-  10,   0,   0, -10,   0,   0 
    // 10,  0,    0,  10,  -10,  10,  0,  10, -10,     0,  10,  0,   0, -10,   0, -10, -10, -10,  0,  10,  0,  10
        );
//各种攻击方式可能导致受伤的部位
$infatt = Array('N' => 'bhaf', 'P' => 'bhaf', 'K' =>'bhaf', 'G' =>'bhaf', 'C'=> 'bhaf', 'D' => 'bhaf', 'F'=> 'bhaf', 'J'=> 'bhaf');
//各种攻击方式可能导致受伤的部位
$infatt_rev = Array('N' => Array('b','h','a','f'), 'P' => Array('b','h','a','f'), 'K' => Array('b','h','a','f'), 'G' => Array('b','h','a','f'), 'C'=> Array('b','h','a','f'), 'D' => Array('b','h','a','f'), 'F'=> Array('b','h','a','f'), 'J'=> Array('b','h','a','f'),);
//各种攻击方式的致伤率
$infobbs = Array('N' => 5, 'P' => 15, 'K' => 55, 'G' => 20, 'C' => 10, 'D' => 45, 'F' => 30, 'J'=> 100);
//$infobbs = Array('N' => 5, 'P' => 15, 'K' => 30, 'G' => 30, 'C' => 15, 'D' => 40, 'F' => 30);
//各种攻击方式的武器损伤概率
$wepimprate = Array('N' => -1, 'P' => 12, 'K' => 30, 'G' => -1, 'C' => -1, 'D' => -1, 'F' => -1, 'J'=> -1);
//特殊效果发生的概率，这里指属性，跟武器系别无关
$specialrate = Array('N' => 40, 'n' => 30, 'y' => 30, 'B' => 95 ,'b' => 95);
//属性攻击登录
$ex_attack = Array('p', 'u', 'i', 'd', 'e','w','f','k');
//各属性攻击对应的防御属性
$ex_def_kind = Array(
    'p' => 'q',
    'u' => 'U', 'f' => 'U',
    'i' => 'I', 'k' => 'I',
    'e' => 'E',
    'w' => 'W',
    'd' => 'D',
);
//各种属性攻击的得意武器（ 伤害2倍）
$ex_good_wep = Array('p' => 'K','u' => 'G','i'=> 'C','d' => 'D', 'e' => 'P', 'w' => 'D');
//各种属性攻击的得意社团（致伤命中率+20）
$ex_good_club = Array('p' => 8,'e' => 7);
//各种属性攻击的克制属性
$ex_dmg_def = Array('p' => 'q', 'u' => 'U', 'i'=>'I','d' => 'D','e' => 'E','w'=>'W');
//各种属性攻击的基础伤害
$ex_base_dmg = Array('p' => 15, 'u' => 25, 'i'=> 10, 'd'=> 1,'e' => 15,'w' => 20,'f' => 5,'k' => 5);
//各种属性攻击的最大伤害值，游戏中，属性攻击伤害不会超过这个参数，0则不限制伤害
$ex_max_dmg = Array('p' => 90, 'u' => 120, 'i'=> 80, 'd'=> 0,'e' => 100,'w' => 100,'f' => 0,'k' => 0);
//各种属性攻击的伤害武器参数，越小伤害上升越快
$ex_wep_dmg = Array('p' => 10, 'u' => 5, 'i'=> 12, 'd'=> 2,'e' => 10,'w' => 12,'f' => 4,'k' => 5);
//各种属性攻击的伤害熟练参数，越小伤害上升越快
$ex_skill_dmg = Array('p' => 15, 'u' => 20, 'i'=> 20 ,'d'=> 500,'e' => 20,'w' => 15,'f' => 40,'k' => 30);
//各种属性攻击的伤害浮动范围
$ex_dmg_fluc = Array('p' => 15, 'u' => 30, 'i'=> 10,'d'=> 20,'e' => 5,'w' => 15,'f' => 30,'k' => 10);
//属性攻击导致的异常状态登录
$ex_inf = Array('p' => 'p', 'u' => 'u', 'i'=> 'i','e' => 'e','w' => 'w','f' => 'u','k' => 'i');
//已经进入异常状态对属性攻击伤害的影响
$ex_inf_punish = Array('p' => 2, 'u' => 1, 'i'=> 0.75,'d' => 1,'e' => 1,'w'=>1.5,'f' => 1.5,'k' => 1.5);
//各种属性攻击的初始致异常状态率
$ex_inf_r = Array('p' => 5, 'u' => 10, 'i'=> 5,'e' => 5,'w'=> 5,'f' => 25,'k' => 25);
//各种属性攻击的最高致异常状态率
$ex_max_inf_r = Array('p' => 60, 'u' => 40, 'i'=> 50,'e' => 50,'w'=> 40,'f' => 70,'k' => 80);
//熟练度对致异常状态率的影响
$ex_skill_inf_r = Array('p' => 0.1, 'u' => 0.05, 'i'=> 0.08,'e' => 0.08,'w' => 0.08, 'f' => 0.1, 'k' => 0.1);

//各种受伤状态对战斗攻击力的影响因子
$inf_att_p = Array('a'=> 0.75,'u'=> 0.6);
//各种受伤状态对战斗防御力的影响因子
$inf_def_p = Array('b'=> 0.75,'i'=> 0.9,'w'=>0.75);
//各种受伤状态对战斗命中率的影响因子
$inf_htr_p = Array('h' => 0.75,'i'=> 0.8,'e' => 0.9);
//各种受伤状态对战斗先攻率的影响因子
$inf_active_p = Array('i'=> 0.9,'e' => 0.2,'w'=> 0.8);
//各种受伤状态对战斗反击率的影响因子
$inf_counter_p = Array('i'=> 0.9,'e' => 0.2,'w'=> 0.8);

?>