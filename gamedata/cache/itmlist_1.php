<?php if(!defined('IN_GAME')) exit('Access Denied'); 
$item_namelist = array (
  0 => '【最终机枪防线】',
  1 => '【最终火炮防线】',
  2 => '【最终结界防线】',
  3 => '【最终能量防线】',
  4 => '【最终数据防线】',
  5 => '煤气罐',
  6 => '曾经的荣光-煤气',
  7 => '增幅设备',
  8 => '脉冲防线',
  9 => '枪械电池',
  10 => '手枪子弹',
  11 => '精神制剂',
  12 => '手榴弹',
  13 => '电磁IED',
  14 => '电磁脉冲IED',
  15 => '精神界面',
  16 => '某种电子零件',
  17 => '.357 Magnum',
  18 => '.50 Magnum',
  19 => '★沙漠之鹰★',
  20 => '贝雷塔92F手枪',
  21 => '霰弹枪',
  22 => '★RPG-7★',
  23 => '★M-134 Minigun★',
  24 => '棒球',
  25 => '雷神喵喵球',
  26 => '★多鲁基★',
  27 => '罐子',
  28 => '轻质球棒',
  29 => '棒球手套',
  30 => '塑料瓶火箭',
  31 => '☆礼花弹☆',
  32 => '机枪子弹',
  33 => '手机',
  34 => '地雷',
  35 => '杀人激光束',
  36 => '「电子龙」-仮',
  37 => '卡片汽车 D ★2',
  38 => '水灵使-艾莉娅 ★3',
  39 => '火灵使-希塔 ★3',
  40 => '风灵使-薇茵 ★3',
  41 => '暗灵使-达克 ★3',
  42 => '地灵使-奥丝 ★3',
  43 => '光灵使-莱娜 ★3',
  44 => '盟军 次时代鸟人 ★3',
  45 => '游戏王十星素材',
  46 => '救世龙 ★1',
  47 => '空瓶',
  48 => '磨刀石',
  49 => '针线包',
  50 => '钢琴线',
  51 => '爆竹',
  52 => '鞭炮',
  53 => '睡衣',
  54 => '“大眼蛙”布偶',
  55 => '小型闹钟',
  56 => '水果刀',
  57 => '桔黄色的果酱',
  58 => '“狐不理”包子',
  59 => '鲷鱼烧',
  60 => '天使玩偶',
  61 => '草莓果酱',
  62 => '天候棒',
  63 => '伏特加',
  64 => '一杯八分满的啤酒',
  65 => '【宇航服】',
  66 => '索拉利斯之雨',
  67 => '辐射IED',
  68 => '天气控制器',
  69 => '生命探测器',
  70 => '电池',
  71 => '探测器电池',
  72 => '玩具手枪',
  73 => '飞刀',
  74 => '项圈',
  75 => '某种机械设备',
  76 => '饼干',
  77 => '指挥中心防御装置',
  78 => '向日葵',
  79 => '镰刀',
  80 => '艾丽的镰刀',
  81 => '地板砖块',
  82 => '梦幻馆防御装置',
  83 => '空白符卡',
  84 => '水',
  85 => '鲨鱼鳍',
  86 => '冰冻青蛙',
  87 => 'バカ⑨制冰块',
  88 => '怪蜀黍鬼作的半身像',
  89 => '藤枝御姐的瓷半身像',
  90 => '藤枝御姐的木制半身像',
  91 => '藤枝御姐的水晶半身像',
  92 => '神北 小毬的半身像',
  93 => '一之濑 琴美的半身像',
  94 => 'SSS团长的半身像',
  95 => '月宫 亚由的半身像',
  96 => '神尾 观铃的半身像',
  97 => '古河 渚的半身像',
  98 => '枣 铃的半身像',
  99 => '天泽 郁末的半身像',
  100 => '长森 瑞佳的半身像',
  101 => '御神签',
  102 => '落魂符',
  103 => '面具',
  104 => '巫女服',
  105 => '白色的羽毛',
  106 => '闪耀的羽毛',
  107 => '彩虹光芒的羽毛',
  108 => '翼人的羽毛',
  109 => '落穴',
  110 => '爆裂装甲',
  111 => '【奈落的落穴】',
  112 => '沉默磨刀石',
  113 => '黑磨刀石',
  114 => '幽灵',
  115 => '怨灵',
  116 => '肥料',
  117 => 'Vampire Killer',
  118 => '德古拉的斗篷',
  119 => '德古拉的牙',
  120 => '【纳吉尼的毒牙】',
  121 => '「被封印的艾克佐迪亚」',
  122 => '「被封印者的左腕」',
  123 => '「被封印者的右腕」',
  124 => '「被封印者的左足」',
  125 => '「被封印者的右足」',
  126 => '「栗子球」★1',
  127 => '梦魇马 ★2',
  128 => '「骷髅指挥」-仮',
  129 => '「僵尸之主」-仮',
  130 => '「死灵之颜」-仮',
  131 => '「吸血鬼领主」-仮',
  132 => '「奥西里斯之天空龙」-仮',
  133 => '「欧贝利斯克之巨神兵」-仮',
  134 => '「太阳神之翼神龙」-仮',
  135 => '僵尸带菌者 ★2',
  136 => '曾经的荣光-晦暗',
  137 => '曾经的荣光-巨盾',
  138 => '曾经的荣光-迷宫',
  139 => '长矛',
  140 => '巨大透镜',
  141 => '笔记本电脑',
  142 => '甲烷',
  143 => '氯化氢',
  144 => '一氧化二氢',
  145 => '岩石',
  146 => '铁管',
  147 => '棍棒',
  148 => '小棍棒',
  149 => '★好折凳★',
  150 => '☆三村式爆彈☆',
  151 => '钉',
  152 => '肩章',
  153 => '★P-90轻机枪★',
  154 => '★柯尔特38口径手枪★',
  155 => '★白朗宁9mm大口径手枪★',
  156 => '★P230乌齐9mm冲锋枪★',
  157 => '★柯尔特45口径自动手枪★',
  158 => '★标枪反坦克导弹★',
  159 => '★M-200狙击步枪★',
  160 => '电焊刀',
  161 => '高级军服',
  162 => '『扭曲力场』',
  163 => '麻婆豆腐',
  164 => '碗',
  165 => '锅',
  166 => '玻璃杯',
  167 => '杯子',
  168 => '电视机',
  169 => '饭桌',
  170 => '柜子',
  171 => '沙发',
  172 => '冰箱',
  173 => '咖啡酒',
  174 => '百利甜',
  175 => '恐龙玩偶',
  176 => '甜生姜',
  177 => '浓厚粘稠果汁',
  178 => '救生服',
  179 => '潜水服',
  180 => '钟摆',
  181 => '巨大钟摆',
  182 => '超距作用【智子】',
  183 => '强相互作用【水滴】',
  184 => '维度跌落【二向箔】',
  185 => '奇怪的按钮',
  186 => '驱云弹',
  187 => '压缩气罐',
  188 => '粉笔',
  189 => '一整盒粉笔',
  190 => '彩色粉笔',
  191 => '一整盒彩色粉笔',
  192 => '粉笔灰',
  193 => '黑板擦',
  194 => '灯油',
  195 => '装有未知试剂的烧瓶',
  196 => '拖把',
  197 => '疗伤药',
  198 => '人体模型',
  199 => '巨大三角板',
  200 => '巨大圆规',
  201 => '椅子',
  202 => '冰沙',
  203 => '木质球棒',
  204 => '铝球棒',
  205 => '【智代专用熊装】',
  206 => '光坂高校校服',
  207 => '《221的照片》',
  208 => '《广辞苑》',
  209 => '蓝白巫女服',
  210 => '蛇发饰',
  211 => '青蛙发卡',
  212 => '御柱',
  213 => '弹幕符札',
  214 => '御币',
  215 => '☆东方电气笛☆',
  216 => '☆守矢神签☆',
  217 => '蛇符【神代大蛇】',
  218 => '蛙符【操控群蛙】',
  219 => '开海【海水分开之日】',
  220 => '天流【天水奇迹】',
  221 => '神具【洩矢的铁轮】',
  222 => '奇迹【神之风】',
  223 => '【信仰之山】',
  224 => '祟符【诹访明神】',
  225 => '乱入【御社神的作祟】',
  226 => '【风神的神德】',
  227 => '毒药',
  228 => '独角虫角',
  229 => '铁甲蛹壳',
  230 => '蝴蝶鳞粉',
  231 => '精灵球',
  232 => '坂木老人的半身像',
  233 => '树叶',
  234 => '蘑菇',
  235 => '香菇',
  236 => '松茸',
  237 => '香蕉',
  238 => '苹果',
  239 => '烂苹果',
  240 => '捕兽器',
  241 => '《小黄的草帽》',
  242 => '《小黄的背心》',
  243 => '《小黄的钓鱼竿》',
  244 => '《小黄的行军靴》',
  245 => '学院都市防御装置',
  246 => '造雾设备',
  247 => '安全裤',
  248 => '硬币',
  249 => '轻油',
  250 => '信管',
  251 => '【幻想御手】',
  252 => '随身听',
  253 => '媚药',
  254 => '红石榴汁',
  255 => '高压线圈',
  256 => '菜刀',
  257 => '果汁',
  258 => '立顿茶包',
  259 => '炒冰',
  260 => '厨师帽',
  261 => '牛肉汤',
  262 => '长森牛奶',
  263 => '伤药',
  264 => '好伤药',
  265 => '针筒',
  266 => '护士帽',
  267 => '营养饮料',
  268 => '全恢复药剂',
  269 => '解毒剂',
  270 => '烧伤药剂',
  271 => '解冻药水',
  272 => '麻痹药剂',
  273 => '清醒药剂',
  274 => '白衣',
  275 => '装有H173的注射器',
  276 => '雾岛 圣的手术刀',
  277 => '团子玩偶',
  278 => '团子',
  279 => '仙贝面包',
  280 => '彩虹光芒的面包',
  281 => '海星面包',
  282 => '老式火枪',
  283 => '『60mm火神炮』',
  284 => '『120mm火神炮』',
  285 => '『环形激光』',
  286 => '『高性能子机』',
  287 => '『单发榴弹炮』',
  288 => '『黑洞激光』',
  289 => '『单向火箭炮』',
  290 => '『贯穿激光』',
  291 => '『连射激光』',
  292 => '『精神震荡弹』',
  293 => '『音波装备』',
  294 => '重装子弹',
  295 => '『热源制导导弹』',
  296 => '『心灵激光鞭』',
  297 => '『风魔激光刃』',
  298 => '『传说中的飞行员服』',
  299 => '『传说中的公主服』',
  300 => '『高性能环形激光』',
  301 => '『高性能黑洞激光』',
  302 => '『高性能双重激光』',
  303 => '『心灵圣水』',
  304 => '『风魔手中剑』',
  305 => '『传说中的银白裙』',
  306 => '『奥丁巨核装备』',
  307 => '『干扰用强袭装备』',
  308 => '『对舰用闪击装备』',
  309 => '『传说中的旋风激光』',
  310 => '『传说中的穿刺激光』',
  311 => '非法枪械部件',
  312 => '机枪防线',
  313 => '火炮防线',
  314 => '电脑防线',
  315 => '『天使队』制服',
  316 => '『天使队』制服G',
  317 => '高性能『天使队』制服',
  318 => '红色的发圈',
  319 => '带翅膀的书包',
  320 => '桔黄色的大衣',
  321 => '柠檬汁',
  322 => '杏仁豆腐',
  323 => '奇迹-白魔法',
  324 => '奇迹-幻想',
  325 => '奇迹-永恒',
  326 => '奇迹-希望',
  327 => '奇迹-友情',
  328 => '幻之盔',
  329 => '幻之甲',
  330 => '幻之手镯',
  331 => '幻之靴',
  332 => '幻之刃',
  333 => '幻之使魔',
  334 => '永恒之盔',
  335 => '永恒之甲',
  336 => '永恒之手镯',
  337 => '永恒之靴',
  338 => '永恒飞刃',
  339 => '永恒之桶',
  340 => '奇异甜食',
  341 => '攻击之源',
  342 => '防御之源',
  343 => '『王国之键』',
  344 => '『王国之键D』',
  345 => '『去往黎明』',
  346 => '『约定守护』',
  347 => '『地裂坚刃』',
  348 => '『大地尽头』',
  349 => '『寻星勇者』',
  350 => '『英雄之证』',
  351 => '『精灵之翼』',
  352 => '『午夜钟声』',
  353 => '冰封的『Oathkeeper』',
  354 => '冰封的『Oblivion』',
  355 => '冰封的『χ-blade』',
  356 => '冰封的『虚空装备』',
  357 => '冰封的『无名』',
  358 => '垃圾花束',
  359 => '打火机',
  360 => '铁链',
  361 => '铁棒',
  362 => '钉棍棒',
  363 => '☆电击器☆',
  364 => '电击鞭',
  365 => '焦臭的哑弹',
  366 => '微温的哑弹',
  367 => '开孔的哑弹',
  368 => '泥泞的哑弹',
  369 => '变形的哑弹',
  370 => '裂缝的哑弹',
  371 => '潮湿的哑弹',
  372 => '定时炸弹',
  373 => '☆遥控炸弹☆',
  374 => '★玩具直升机炸弹★',
  375 => '【心灵风暴】',
  376 => '★阔剑地雷★',
  377 => '★中子地雷★',
  378 => '天然水',
  379 => '西瓜',
  380 => '绳索',
  381 => '野生的雪貂',
  382 => '圣石之种',
  383 => '走失的猫咪',
  384 => '轮椅',
  385 => '杯装水',
  386 => '蒸馏水',
  387 => '原型武器P',
  388 => '原型武器K',
  389 => '原型武器G',
  390 => '原型武器C',
  391 => '原型武器D',
  392 => '原型武器F',
  393 => '实验装甲B',
  394 => '实验装甲H',
  395 => '实验装甲A',
  396 => '实验装甲F',
  397 => '实验饰品A',
  398 => '无铭补给B',
  399 => '普通的太鼓棍棒',
  400 => '玄人的太鼓棍棒',
  401 => '达人的太鼓棍棒',
  402 => '浮☆云',
  403 => 'SCP-294的饮料',
  404 => 'SCP-006',
  405 => 'SCP-294',
  406 => 'SCP-500',
  407 => '对魔物用卵石',
  408 => '二重战斗匕首',
  409 => '巨大太刀',
  410 => '巨大路灯柱',
  411 => '节操炸弹',
  412 => '『9mm鲁格枪』',
  413 => '黑魔法-权利',
  414 => '风祭学院校服',
  415 => '寂寞',
  416 => '节操',
  417 => '黑色雏菊',
  418 => '白色雏菊',
  419 => '黄色雏菊',
  420 => '粉红雏菊',
  421 => '对魔物用巨大卵石',
  422 => '断钢太刀',
  423 => 'ｃ－飞拳',
  424 => 'ｃ－火焰',
  425 => 'ｃ－光线',
  426 => '黑魔法-奇技',
  427 => '对魔物用陷阱群',
  428 => '超级篝酱加农炮',
  429 => '究级篝酱加农炮',
  430 => '特效药',
  431 => '面包',
  432 => '咖喱',
  433 => '咖喱面包',
  434 => '杂炊',
  435 => '运动饮料',
  436 => '清涼饮料',
  437 => '青草汁',
  438 => '蔬菜汁',
  439 => '牛奶',
  440 => '糯米丸子',
  441 => '饭团',
  442 => '便当',
  443 => '安康鱼',
  444 => '河豚鱼',
  445 => '三明治',
  446 => '友情巧克力',
  447 => '情人巧克力',
  448 => '甲醇',
  449 => '红豆面包',
  450 => '中药',
  451 => '强壮剂',
  452 => '健康食品',
  453 => '减肥食品',
  454 => '大天使的气息',
  455 => '大夭使的气息',
  456 => '南京挂花鸭',
  457 => '汽油',
  458 => '喷雾器罐',
  459 => '导火线',
  460 => '广域生命探测器',
  461 => '摧泪喷雾剂',
  462 => '★防御结界★',
  463 => '★全地图唯一的野生高伤阔剑地雷★',
  464 => '毒物说明书',
  465 => '去死去死团员证',
  466 => '好人证书',
  467 => '消音器',
  468 => '★M92F手枪★',
  469 => '★機槍 P230 9mm★',
  470 => '★P-90机关枪★',
  471 => '★PPK9mm手枪★',
  472 => '★英格拉姆M10轻机枪★',
  473 => '★棒球发射机★',
  474 => '鹿标本',
  475 => '字典',
  476 => '熊雕像',
  477 => '女王的皮鞭',
  478 => '铁锤',
  479 => '哑铃',
  480 => '钉槌',
  481 => '绷带',
  482 => '锁链钉槌',
  483 => '阎魔像',
  484 => '绿玉打狗棒',
  485 => '☆拳王之拳☆',
  486 => '☆红楼梦精装本☆',
  487 => '☆星云锁链☆',
  488 => '☆黄金神槌☆',
  489 => '☆暗阎魔像☆',
  490 => '★少林寺十八铜人★',
  491 => '★不朽王之槌★',
  492 => '■翠玉白菜雕像■',
  493 => '肯德基爷爷',
  494 => '麦当劳叔叔',
  495 => 'HB铅笔',
  496 => '2H铅笔',
  497 => '长刀',
  498 => '刀',
  499 => '笔刀',
  500 => '鹤嘴锄',
  501 => '两刃小刀',
  502 => '军用小刀',
  503 => '剑',
  504 => '战斗小刀',
  505 => '太刀',
  506 => '蜻蛉切',
  507 => '东洋刀',
  508 => '细剑',
  509 => '斧',
  510 => '脅差陽光',
  511 => '☆碧藍怒火☆',
  512 => '☆八念丁佛团子☆',
  513 => '☆平家宝刀小鸟☆',
  514 => '☆柴刀☆',
  515 => '☆白楼剑☆',
  516 => '☆名刀压刀☆',
  517 => '☆秘剑－燕返☆',
  518 => '☆名刀正宗☆',
  519 => '☆近景☆',
  520 => '☆楼观剑☆',
  521 => '☆草薙之剑☆',
  522 => '★瑞士刀－真打★',
  523 => '★传家宝刀★',
  524 => '★古典军刀★',
  525 => '★电浆剑★',
  526 => '★名剑－祖父★',
  527 => '★和道一文字★',
  528 => '★兽矛★',
  529 => '■隆基弩斯之枪■',
  530 => '☆神刀灭却☆',
  531 => '☆光刀无形☆',
  532 => '☆灵剑－荒鹰☆',
  533 => '☆神剑白羽鸟☆',
  534 => '扑克牌',
  535 => '十六张台湾麻将',
  536 => '高级麻将',
  537 => '飞盘',
  538 => '钻石',
  539 => '保龄球',
  540 => '☆投掷小刀☆',
  541 => '☆塔罗牌☆',
  542 => '☆回力镖☆',
  543 => '★正宗麻将全套★',
  544 => '★液晶电视★',
  545 => '■56寸电浆电视■',
  546 => '■噪音手榴弹■',
  547 => '好人卡13连击',
  548 => '情人玫瑰99朵套装',
  549 => '结婚请柬',
  550 => '新娘捧花',
  551 => '照明弹',
  552 => '炸弹',
  553 => '塑胶炸弹',
  554 => '铅笔炸弹',
  555 => '☆超级爆弹☆',
  556 => '☆C4炸药☆',
  557 => '☆塑胶炸弹☆',
  558 => '★次声波炸弹★',
  559 => '★太极印★',
  560 => '★太极符印★',
  561 => '■Astrolite G 液态炸弹■',
  562 => '■E.M.P.脉冲炸弹■',
  563 => '宅男装',
  564 => '萝莉装',
  565 => '女仆装',
  566 => '伪娘装',
  567 => '纸铠甲',
  568 => '塑料铠甲',
  569 => '女王装',
  570 => '兄贵装',
  571 => 'SM装',
  572 => '假面骑士装',
  573 => '德军军服',
  574 => '哥特萝莉装',
  575 => '☆龟甲缚☆',
  576 => '☆光学迷彩试验型☆',
  577 => '☆防弹背心☆',
  578 => '☆高级军服☆',
  579 => '☆AT力场☆',
  580 => '围巾',
  581 => '太阳镜',
  582 => '棒球帽',
  583 => '兔耳頭带',
  584 => 'DC军头盔',
  585 => '安全帽',
  586 => '电焊面具',
  587 => '☆钢盔☆',
  588 => '☆装甲兵头盔☆',
  589 => '卫生贴纸',
  590 => '结婚戒指',
  591 => '手镯',
  592 => '护腕',
  593 => '手套',
  594 => '☆防暴盾牌☆',
  595 => '☆金属拳套☆',
  596 => '★蔷薇水晶★',
  597 => '过街鞋',
  598 => '小五拖鞋',
  599 => '性感的高跟鞋',
  600 => '旱冰鞋',
  601 => '军靴',
  602 => '☆胶鞋☆',
  603 => '☆黑丝☆',
  604 => '海尔兄弟的内裤',
  605 => 'MIKU的原味内裤',
  606 => '早苗面包',
  607 => '小毬汁',
  608 => '电子马克笔',
  609 => '一个能打的都没有',
  610 => '会打飞机的枪',
  611 => '像围棋子一样的饼干',
  612 => '摸西摸-摸一级多',
  613 => 'SGL签名CD',
  614 => '德国BOY的键盘',
  615 => '葱娘の葱',
  616 => '容嬷嬷的针',
  617 => '杨叔的眼镜',
  618 => '新八的眼镜',
  619 => '蓝蓝路的大鞋',
  620 => '动感超人手表',
  621 => 'MIKU的内裤',
  622 => '不来一发么？',
  623 => 'MIKU的小葱',
  624 => '新华里的领带',
  625 => '新华里的西服',
  626 => '新华里的手表',
  627 => '新华里的皮鞋',
  628 => '新华里的投入',
  629 => '新华里的震撼',
  630 => '新华里的乱舞',
  631 => '新华里的手势',
  632 => '新华里的呐喊',
  633 => '新华里的眼神',
  634 => '新华里的增员',
  635 => '★超能力爆发★',
  636 => '■DeathNote■',
  637 => '移动PC',
  638 => '红色方块',
  639 => '绿色方块',
  640 => '蓝色方块',
  641 => '黄色方块',
  642 => '金色方块',
  643 => '银色方块',
  644 => '水晶方块',
  645 => '黑色方块',
  646 => '白色方块',
  647 => '变砖的PSP',
  648 => '■洞爷湖■',
  649 => '■电锯■',
  650 => '■魔剑－雷瓦丁■',
  651 => '安式回旋加速喷气安式回旋炮',
  652 => '吉太',
  653 => '妹汁',
  654 => '曾哥的签名CD',
  655 => '春哥的签名CD',
  656 => '亲热天堂',
  657 => '11区GV大全',
  658 => '最天使',
  659 => '霜火雪糕',
  660 => '魔王咖喱',
  661 => '院长红酒',
  662 => '美味菜包',
  663 => '水果月饼',
  664 => '电子寿司',
  665 => '地雷酥糖',
  666 => '埃克索特三明治',
  667 => '★Unlimited Blade Works★',
  668 => '★Unlimited Code Works★',
  669 => '《BR大逃杀》',
  670 => '《防身术图解》',
  671 => '《剑道社教材》',
  672 => '《枪械杂志》',
  673 => '《飞镖投掷法》',
  674 => '《化学课本》',
  675 => '《太极拳指南》',
  676 => '《ACFUN大逃杀攻略》',
  677 => '《北斗神拳》',
  678 => '《寒蝉鸣泣之时》',
  679 => '《魔法少女奈叶》',
  680 => '《网球王子》',
  681 => '《新机动战记高达W》',
  682 => '《东方永夜抄》',
  683 => '【腕力强化剂】',
  684 => '【皮肤强化剂】',
  685 => '【神经强化剂】',
  686 => '【超级战士药剂】',
  687 => '【肉体强化剂】',
  688 => '【线粒体强化剂】',
  689 => '【触手的萃取液】',
  690 => '【圣防护罩-反射之力】',
  691 => '【金蚕王】',
  692 => '【我已经天下无敌了！】',
  693 => '【残机碎片】',
  694 => '【S2机关】',
  695 => '提示纸条A',
  696 => '提示纸条B',
  697 => '提示纸条C',
  698 => '提示纸条D',
  699 => '提示纸条E',
  700 => '提示纸条F',
  701 => '提示纸条G',
  702 => '提示纸条H',
  703 => '提示纸条I',
  704 => '提示纸条J',
  705 => '提示纸条K',
  706 => '提示纸条L',
  707 => '提示纸条M',
  708 => '提示纸条N',
  709 => '提示纸条O',
  710 => '提示纸条P',
  711 => '提示纸条Q',
  712 => '提示纸条R',
  713 => '提示纸条S',
  714 => '提示纸条T',
  715 => '提示纸条U',
  716 => '《殴系指南》',
  717 => '《斩系指南》',
  718 => '《射系指南》',
  719 => '《投系指南》',
  720 => '《爆系指南》',
  721 => '《灵系指南》',
  722 => '★光学迷彩★',
  723 => '★AT力场★',
  724 => '弱点探测器',
  725 => '战斗力指示器',
  726 => '【北斗百裂拳】',
  727 => '【狂暴凶刃】',
  728 => '【盖特机炮】',
  729 => '幻符【杀人玩偶】',
  730 => '【泰迪熊炸弹】',
  731 => '【西方秋霜玉】',
  732 => '毒液枪',
  733 => '毒镖',
  734 => '毒气弹',
  735 => '防毒面具',
  736 => '防化服',
  737 => '防火服',
  738 => '隔音头盔',
  739 => '绝热工作服',
  740 => '电暖宝',
  741 => '制冰机',
  742 => '便携空调',
  743 => '法拉第笼',
  744 => '空气护盾',
  745 => '预言挂坠',
  746 => '陷阱透视镜',
  747 => '【波纹疾走】',
  748 => '【紫棠花色波纹疾走】',
  749 => '【妖精的波纹疾走】',
  750 => '【楼主头】',
  751 => '【哥哥鞋】',
  752 => '【主角光环】',
  753 => '瘴气发生器',
  754 => '龙卷风发生器',
  755 => '暴风雪发生器',
  756 => '冰雹发生器',
  757 => '弱爆了！',
  758 => '受王拳',
  759 => '【测试用具】',
  760 => '《哲♂学》',
  761 => '夜雀歌谱',
  762 => '雏人形',
  763 => '被遗忘的伞',
  764 => '☆博丽护符☆',
  765 => '☆山蘑菇粉☆',
  766 => '★全图不唯一的野生巨大香蕉★',
  767 => '天然气',
  768 => '☆黄金麦克风☆',
  769 => '残存的礼品盒',
  770 => '冴月麟的生日蛋糕-红',
  771 => '冴月麟的生日蛋糕-橙',
  772 => '冴月麟的生日蛋糕-黄',
  773 => '冴月麟的生日蛋糕-绿',
  774 => '冴月麟的生日蛋糕-青',
  775 => '冴月麟的生日蛋糕-蓝',
  776 => '冴月麟的生日蛋糕-紫',
  777 => '★闪光迎击神话★',
  778 => '月光碎片',
  779 => '☆残页的魔导书☆',
  780 => '鲜红的生血',
  781 => '《东方幻想乡》',
  782 => '★I-力场★',
  783 => '火把',
  784 => '密封的酒瓶',
  785 => '音乐录像',
  786 => '五线乐谱',
  787 => '葱娘肉包',
  788 => 'V家蔬菜汁',
  789 => '破旧录音机',
  790 => '神奇的八音盒',
  791 => '魂之结晶',
  792 => '歌手之魂',
  793 => '【Alicemagic】',
  794 => '【Crow Song】',
  795 => '→【神器任意门】←',
  796 => '补给',
  797 => '体力饮料',
  798 => '体力回复药',
  799 => '圆形罐头',
  800 => '疗伤粉',
  801 => '治疗针',
  802 => '超级治疗针',
  803 => '美味水',
  804 => '非常食',
  805 => '龙料理',
  806 => '药剂',
  807 => '溶剂SCP-294_PT_Poini_Kune',
  808 => '溶剂SCP-294_PT_Arnval',
  809 => '溶剂SCP-294_PT_Strarf',
  810 => '溶剂SCP-294_PT_ErulTron',
  811 => '钝器',
  812 => '桌球拍',
  813 => '超级重锤',
  814 => '『伊吹 风子的木制海星』',
  815 => '『延展御柱』',
  816 => '海胆链球',
  817 => '■石破LOVELOVE天惊拳■',
  818 => '锐器',
  819 => '美工刀',
  820 => '光束刀',
  821 => '『Keyblade』',
  822 => '『斩舰刀』',
  823 => '■高周波粒子刀■',
  824 => '枪械',
  825 => '『巴雷特M82A1』',
  826 => '冷冻光束枪',
  827 => '『特尔斯的龙旋风型』',
  828 => '『AK-47』',
  829 => '『军用火焰放射器』',
  830 => '■金属风暴■',
  831 => '投掷兵器',
  832 => '风景明信片',
  833 => '☆杀人扑克牌☆',
  834 => '『藤林杏的广辞苑』',
  835 => '★库洛牌★',
  836 => '■木之本樱小樱牌■',
  837 => '游戏王卡包',
  838 => '☆爆裂模式☆',
  839 => '☆四星认证☆',
  840 => '☆五星认证☆',
  841 => '☆六星认证☆',
  842 => '☆八星认证☆',
  843 => '☆十星认证☆',
  844 => '★神卡认证★',
  845 => '爆炸兵器',
  846 => '假炸弹',
  847 => '简易爆炸装置',
  848 => '『破坏之杖』',
  849 => '『真空内爆弹』',
  850 => '■液态泰伯伦炸弹■',
  851 => '最终战术『心火』',
  852 => '灵符材料',
  853 => '★时停怀表★',
  854 => '★瓶装幽灵★',
  855 => '《文文。新闻》',
  856 => '★制御棒★',
  857 => '《魔女的魔导书》',
  858 => '防具',
  859 => '死库水',
  860 => '『Poini Kune的死库水』',
  861 => '『Erul Tron的泳装』',
  862 => '数据……碎片',
  863 => '防弹背心',
  864 => '☆能量装甲☆',
  865 => '☆光学迷彩改进型☆',
  866 => '☆军用头盔☆',
  867 => '☆军用盾牌☆',
  868 => '☆军靴☆',
  869 => '『小毬的草帽挂件』',
  870 => '★诅咒铠甲★',
  871 => '★荆棘王冠★',
  872 => '★至尊魔戒★',
  873 => '★Strike Unit★',
  874 => '火焰防御场',
  875 => '冻气防御场',
  876 => '电磁护盾',
  877 => '妖精的羽翼',
  878 => '书籍',
  879 => '《小黄的收服特训》',
  880 => '《寻星流奥义书》',
  881 => '《小黄的常磐之力》',
  882 => '《蘑菇种植指南》',
  883 => '电子产品',
  884 => '探雷器',
  885 => '杂物',
  886 => '钢钉',
  887 => '贤者之磨刀石',
  888 => '礼品盒',
  889 => '凸眼鱼',
  890 => '『祝福宝石』',
  891 => '『灵魂宝石』',
  892 => '安雅人体冰雕',
  893 => '☆★☆大打击☆★☆',
  894 => '★荆棘式电子地雷★',
  895 => '☆混沌人肉探雷车★',
  896 => '埃克法物品',
  897 => '埃克法-巨环',
  898 => '埃克法-玄铁',
  899 => '埃克法-斧枪',
  900 => '埃克法-八面',
  901 => '埃克法-开海',
  902 => '埃克法-破云',
  903 => '埃克法-孤魂',
  904 => '埃克法-幻影',
  905 => '埃克法-救赎',
  906 => '埃克法-魔嗜',
  907 => '埃克法-融炼-磨刀石',
  908 => '埃克法-冰凌-钉',
  909 => '提示',
  910 => '银白盒子',
  911 => '残响兵器',
  912 => '→【单兵撤退按钮】←',
  913 => '前女主物品',
  914 => '绘图志',
  915 => '小毬血',
  916 => '真-红色的发圈',
  917 => '小空',
  918 => '真 - 幻想戏服',
  919 => '亲手制作的鲷鱼烧',
  920 => '培根蛋+？',
  921 => '秋生大叔的面包',
  922 => '天使之剑',
  923 => '恐龙扑克牌',
  924 => '秋生大叔的球棒',
  925 => '解锁钥匙',
  926 => '✦种火钥匙',
  927 => '✦钥匙碎片',
  928 => '✦NPC钥匙·一阶段',
  929 => '✦✦NPC钥匙·二阶段',
  930 => '✦种火定点移位装置✦',
  931 => '福袋',
  932 => 'SPECIAL TECH 「特选科技」',
  933 => 'FUTURE BASH 「打出未来」',
  934 => 'PAVE THE WAY 「斩开前路」',
  935 => 'SHOOT THE CORE 「射击核心」',
  936 => 'CATCH THEM ALL 「全部收集」',
  937 => 'SUDDEN BREAKER 「突然爆裂」',
  938 => 'BORN FROM WISH 「幻想啼音」',
  939 => '上级者向·测试',
  940 => '「元素大师」称号卡',
  941 => '松茸御饭',
  942 => '珍珠奶茶',
  943 => 'KEY系儿童套餐',
  944 => '☆法式长棍面包☆',
  945 => '特级恢复药',
  946 => '曾经的荣光-橙黄',
  947 => '更改菜谱后的不甜酱包',
  948 => '☆火焰瓶☆',
  949 => '灵魂的结晶',
  950 => '幻葬『夜雾幻影杀人鬼』',
  951 => '毒针',
  952 => 'D.毒针',
  953 => 'D.D.D',
  954 => '西瓜刀',
  955 => '纯白片翼',
  956 => '悲叹片翼',
  957 => '精灵片翼',
  958 => 'Azurewrath',
  959 => '沾满绿锈的铜刀',
  960 => '妖刀【飞叶】',
  961 => '影刀【秋岚】',
  962 => '『Oathkeeper』',
  963 => '『Oblivion』',
  964 => '『Two Become One』',
  965 => '『Last Remote』',
  966 => '『T-LINK念动冲拳』',
  967 => '『T-LINK天上天下念动连击拳』',
  968 => '【北斗有情破颜拳】',
  969 => '☆简易火箭飞拳☆',
  970 => '★火箭飞拳★',
  971 => '森之妖精的棍棒',
  972 => '冰棍棒',
  973 => '法式面包棍棒',
  974 => '绽花毒藤',
  975 => '太极',
  976 => '晨星链刃',
  977 => '阳炎之怒',
  978 => '风滚草',
  979 => '龙魂破',
  980 => '『红石电路』',
  981 => '『红石光束炮』',
  982 => '★发条式突击步枪★',
  983 => '『迷你鲨』',
  984 => '『巨兽鲨』',
  985 => '『加农鲨』',
  986 => '★简易火焰放射器★',
  987 => '【定向阔剑发射器】',
  988 => '【磁轨狙击步枪】',
  989 => '☆金色闪光☆',
  990 => '观铃的嘎哦嘎哦恐龙喷火分队',
  991 => '佐佑理学姐的塑料水枪',
  992 => '【质子撞击炮】',
  993 => '【重力冲击炮】',
  994 => '【最终鬼畜兵器】',
  995 => '【霜火协奏曲】',
  996 => '火药',
  997 => '★炸药★',
  998 => '水鸳鸯',
  999 => '★C4★',
  1000 => '☆自爆电池☆',
  1001 => '脉冲蓄电池',
  1002 => '辐射蓄电池',
  1003 => '深水炸弹『depth charge』',
  1004 => '莫洛托夫鸡尾酒',
  1005 => '奇怪的三色饮料',
  1006 => 'B-52轰炸机',
  1007 => '烈焰风暴',
  1008 => '【烈焰红唇】',
  1009 => '★血腥玛丽★Bloody Mary',
  1010 => '【燃烧的鸡尾酒】',
  1011 => '★公牛子弹★Bull Shot',
  1012 => '★血腥公牛★Bloody Bull',
  1013 => '寒冰炸弹',
  1014 => '★幽灵冲击★',
  1015 => '奥术飞弹',
  1016 => '★BIUBIUBIU★',
  1017 => '《深入游戏引擎》',
  1018 => '★Ultimate Mix★',
  1019 => '黑色夺魂曲',
  1020 => '天然呆四面的奖赏',
  1021 => '武器师安雅的奖赏',
  1022 => '电磁发射装置',
  1023 => '游戏解除钥匙',
  1024 => '★一发逆转神话★',
  1025 => '风祭河水',
  1026 => '仪水镜',
  1027 => '八咫镜',
  1028 => '《小黄的精灵球》',
  1029 => '《小黄的超级球》',
  1030 => '凤凰之羽',
  1031 => '露琪亚之羽',
  1032 => '《小黄的大师球》',
  1033 => '四季流转的咏叹调',
  1034 => '旁观轮回的覆唱诗',
  1035 => '天然属性也是很可怕的！',
  1036 => '【KEY系巴嘎弹】',
  1037 => '【KEY系超级巴嘎弹】',
  1038 => '【KEY系催泪弹】',
  1039 => '【KEY系未来弹】',
  1040 => '【KEY系生命弹】',
  1041 => '【春雨夏海，秋叶冬雪】',
  1042 => '生命之源',
  1043 => '红色的丝带',
  1044 => '【KEY系燃烧弹】',
  1045 => '舍身成就之羁绊',
  1046 => '微小日常之爱恋',
  1047 => '无尽散花之涅磐',
  1048 => '无法推卸的命运',
  1049 => '破灭未来的残光',
  1050 => '来自未来的奇迹',
  1051 => '【恋歌】',
  1052 => '篝酱的奇迹☆丝带～刃',
  1053 => '篝酱的奇迹☆胶带～刃',
  1054 => '越狱后的银色盒子',
  1055 => '群青多面体',
  1056 => '炙热的绶带',
  1057 => '坚强戒指',
  1058 => '活力之靴',
  1059 => '红宝石方块',
  1060 => '蓝宝石方块',
  1061 => '绿宝石方块',
  1062 => '黄色的宝石枪',
  1063 => '红色的宝石刀',
  1064 => '蓝色的宝石锤',
  1065 => '绿色的宝石镖',
  1066 => '金色的宝石炸弹',
  1067 => '银色的宝石符卡',
  1068 => '★恐惧的黑色安息日★',
  1069 => '★失落的银色镇魂歌★',
  1070 => '水晶宝石盾',
  1071 => '珍珠头盔',
  1072 => '钻石靴子',
  1073 => '深红色的项链',
  1074 => '蔚蓝色的项链',
  1075 => '★高压电击★',
  1076 => '★烈焰冲撞★',
  1077 => '★飞叶快刀★',
  1078 => '★急冻光线★',
  1079 => '★齿轮飞碟★',
  1080 => '★精神破坏★',
  1081 => '★灭亡之歌★',
  1082 => '梦符『梦想妙珠』',
  1083 => '星符『星尘狂欢』',
  1084 => '秘术『一子单传的弹幕』',
  1085 => '时符『Private Square』',
  1086 => '幽鬼剑『妖童饿鬼之断食』',
  1087 => '风符『风神一扇』',
  1088 => '『地狱的人造太阳』',
  1089 => '冰符『Icicle Fall』',
  1090 => '曾经的荣光-深蓝',
  1091 => '紫奥义『弹幕结界』',
  1092 => '『咲夜的世界』',
  1093 => '『收缩的世界』',
  1094 => '空观剑『六根清净斩』',
  1095 => '水符「Princess Undine」',
  1096 => '火符「Agni Shine」',
  1097 => '木符『Sylphy Horn』',
  1098 => '水符『Jerry Fish Princess』',
  1099 => '土&水符『Noachian Deluge』',
  1100 => '土符「Lazy Trilithon」',
  1101 => '火&土符『Lava Cromlech』',
  1102 => '金符「Metal Fatigue」',
  1103 => '金&水符『Mercury Poison』',
  1104 => '神枪『Spear The Gungnir』 ',
  1105 => '梦幻『幻月』 ',
  1106 => '《魔导师速成攻略》',
  1107 => '日符「Royal Flare」-劣',
  1108 => '月符「Silent Serena」-劣',
  1109 => '日符「Royal Flare」',
  1110 => '月符「Silent Serena」',
  1111 => '日&月符『Royal Diamond Ring』',
  1112 => '火&金符『St. Elmo Pillar』',
  1113 => '水&月符『Silent Deluge』',
  1114 => '火水木金土符『贤者之石』',
  1115 => '月月火水木金金符『年中无休』（笑）',
  1116 => '模式『EX』',
  1117 => '◆◆篝火',
  1118 => '◆◆埋火',
  1119 => '◆◆永火',
  1120 => '◆◆残火',
  1121 => '◆◆◆篝火',
  1122 => '◆◆◆埋火',
  1123 => '◆◆◆永火',
  1124 => '◆◆◆残火',
  1125 => '◆◆愈合数据',
  1126 => '◆◆◆愈合数据',
  1127 => '◆◆熟练数据',
  1128 => '◆◆◆熟练数据',
  1129 => '◆◆生命数据',
  1130 => '◆◆◆生命数据',
  1131 => '◆◆意念数据',
  1132 => '◆◆◆意念数据',
  1133 => '✦烈焰火',
  1134 => '✦愈合数据',
  1135 => '✦熟练数据',
  1136 => '✦生命数据',
  1137 => '✦意念数据',
  1138 => '✦烈篝火',
  1139 => '✦烈埋火',
  1140 => '✦烈永火',
  1141 => '✦烈残火',
  1142 => '✦✦烈篝火',
  1143 => '✦✦烈埋火',
  1144 => '✦✦烈永火',
  1145 => '✦✦烈残火',
  1146 => '✦✦✦烈篝火',
  1147 => '✦✦✦烈埋火',
  1148 => '✦✦✦烈永火',
  1149 => '✦✦✦烈残火',
  1150 => '★华焰火★',
  1151 => '★愈合数据★',
  1152 => '★熟练数据★',
  1153 => '★生命数据★',
  1154 => '★意念数据★',
  1155 => '★华篝火★',
  1156 => '★华埋火★',
  1157 => '★华永火★',
  1158 => '★华残火★',
  1159 => '☾真焰火☽',
  1160 => '☾愈合数据☽',
  1161 => '☾熟练数据☽',
  1162 => '☾生命数据☽',
  1163 => '☾意念数据☽',
  1164 => '☾真篝火☽',
  1165 => '☾真埋火☽',
  1166 => '☾真永火☽',
  1167 => '☾真残火☽',
  1168 => '☼焰火☼',
  1169 => '☼篝火☼',
  1170 => '☼埋火☼',
  1171 => '☼永火☼',
  1172 => '☼残火☼',
  1173 => '电掣召唤仪',
  1174 => '「被封印的黑暗大法师」',
  1175 => '『黑暗大法师』',
  1176 => '「隼骑士」',
  1177 => '「V-喷气虎」',
  1178 => '「W-弹射飞翼」',
  1179 => '「X-首领加农」',
  1180 => '「Y-龙头」',
  1181 => '「Z-金属履带」',
  1182 => '「VW-强击虎」',
  1183 => '「XYZ-神龙炮」',
  1184 => '「VWXYZ-神龙强击炮」',
  1185 => '「绝对防御将军」',
  1186 => '「人造人-念力震慑者」',
  1187 => '「恶魔召唤」',
  1188 => '「真紅眼黑龍」',
  1189 => '「真紅眼闇龍」',
  1190 => '「真紅眼黑龍鐵龍」',
  1191 => '「暗黑魔龙」',
  1192 => '「左轮手枪龙」',
  1193 => '「破龙剑士」',
  1194 => '「黑魔术师」',
  1195 => '「超魔导剑士-黑暗帕拉丁」',
  1196 => '「青眼白龙」',
  1197 => '「青眼究极龙」',
  1198 => '『奥西里斯之天空龙』',
  1199 => '『欧贝利斯克之巨神兵』',
  1200 => '『太阳神之翼神龙』',
  1201 => '◎光之创造神◎',
  1202 => '「电子龙」 ★5',
  1203 => '「电子终结龙」',
  1204 => '「骷髅指挥」 ★4',
  1205 => '「僵尸之主」 ★4',
  1206 => '「死灵之颜」 ★4',
  1207 => '「吸血鬼领主」 ★5',
  1208 => '凭依装着-艾莉娅 ★4',
  1209 => '凭依装着-希塔 ★4',
  1210 => '凭依装着-薇茵 ★4',
  1211 => '凭依装着-达克 ★4',
  1212 => '凭依装着-奥丝 ★4',
  1213 => '凭依装着-莱娜 ★4',
  1214 => '英♂豪冠军 断♂肛♂剑♂王',
  1215 => '始祖守护者 提拉斯 ☆5',
  1216 => '流星龙 ★10',
  1217 => '红莲魔龙 ★8',
  1218 => '真红魔龙/爆裂体 ★10',
  1219 => '星尘龙/爆裂体 ★10',
  1220 => '正义盟军 光明守望者 ★8',
  1221 => '「救世魔龙」 ★10',
  1222 => '『流天类星龙』 ★12',
  1223 => '『宝石光束炮-试作型』',
  1224 => '破灭之诗',
  1225 => 'Untainted Glory',
  1226 => 'FFF团集体出动',
  1227 => '『C.H.A.O.S』',
  1228 => '黑色发卡',
  1229 => '『G.A.M.E.O.V.E.R』',
  1230 => '提示纸条Y',
  1231 => '【E.S.C.A.P.E】',
  1232 => '星尘龙 ★8',
  1233 => '救世星龙 -仮',
  1234 => '救世魔龙 -仮',
  1235 => '红莲魔龙 ★8 -仮',
  1236 => '正义盟军 光明守望者 ★8 -仮',
  1237 => '阿尔法大日 ★9',
  1238 => '超念力枪手 ★9',
  1239 => '黑蔷薇龙 ★7',
  1240 => '机巧将军 无零 ★7',
  1241 => '流星龙 ★10 -仮',
  1242 => 'No91.雷闪龙 ☆4',
  1243 => 'No39.希望皇 霍普 ☆4',
  1244 => 'No9.天盖星 戴森球 ☆9',
  1245 => '星圣 欧米伽星云 ☆4',
  1246 => '机甲忍者 刃心 ☆4',
  1247 => '英豪冠军 草雉剑王',
  1248 => '始祖守护者 提拉斯 ☆5 -仮',
  1249 => 'NO7.幸运条纹人 ☆7',
  1250 => '超次元机器人 银河破坏王 ☆10',
  1251 => '脸',
  1252 => '☆限量版电击器☆',
  1253 => '☆限量版寻星者☆',
  1254 => '☆限量版环形激光☆',
  1255 => '☆限量版永恒飞刃☆',
  1256 => '☆限量版电磁脉冲IED☆',
  1257 => '☆限量版开海【海水分开之日】☆',
  1258 => '【德古拉的斗篷（笑）】',
  1259 => '冻气防御力场',
  1260 => '热源防御力场',
  1261 => '温度隔绝力场',
  1262 => '电磁屏障',
  1263 => '音波屏障',
  1264 => '■DarthNote■',
  1265 => '人才钉钉',
  1266 => '钉钉',
  1267 => '奇怪的液体',
  1268 => '最强-バカ⑨制冰块',
  1269 => '★黑白色的烂苹果★',
  1270 => '★小得奇怪的香蕉★',
  1271 => '【测试用具】量产改进型',
  1272 => '【霜火协奏曲-特别版】',
  1273 => '渡黄党都去死啊智黄才是王道！',
  1274 => '「恶魔召唤」-仮',
  1275 => '「Y-龙头」-仮',
  1276 => '「X-首领加农」-仮',
  1277 => '「W-弹射飞翼」-仮',
  1278 => '「Z-金属履带」-仮',
  1279 => '「人造人-念力震慑者」-仮',
  1280 => '「隼骑士」-仮',
  1281 => '「V-喷气虎」-仮',
  1282 => '「黑魔术师」-仮',
  1283 => '「真紅眼黑龍」-仮',
  1284 => '「破龙剑士」-仮',
  1285 => '「绝对防御将军」-仮',
  1286 => '「青眼白龙」-仮',
  1287 => '「左轮手枪龙」-仮',
  1288 => '曾经的荣光-斗篷',
  1289 => '曾经的荣光-经验',
  1290 => '曾经的荣光（笑）-瘴气',
  1291 => '曾经的荣光-霜火',
  1292 => '曾经的荣光-水月',
  1293 => '曾经的荣光-金水',
  1294 => '曾经的荣光-四面',
  1295 => '曾经的荣光-香蕉',
  1296 => '曾经的荣光-阔剑',
  1297 => '苹果酒',
  1298 => '鸡尾酒',
  1299 => '威士忌酒',
  1300 => '点心',
  1301 => '警用盾牌',
  1302 => '绝缘手套',
  1303 => '简易盾牌',
  1304 => '皮手套',
  1305 => '手表',
  1306 => '手链',
  1307 => '垫肩',
  1308 => '核电站工作服',
  1309 => '特种部队制服',
  1310 => '内裤',
  1311 => '浴衣',
  1312 => '工作装',
  1313 => '迷彩服',
  1314 => '飞行头盔',
  1315 => '太阳眼镜',
  1316 => '头巾',
  1317 => '口罩',
  1318 => '防灾头巾',
  1319 => '绝缘胶鞋',
  1320 => '运动鞋',
  1321 => '高跟鞋',
  1322 => '篮球鞋',
  1323 => '钉鞋',
  1324 => '耳塞',
  1325 => '薛定谔的棒球棍',
  1326 => '薛定谔的狂战斧',
  1327 => '薛定谔的喷火枪',
  1328 => '薛定谔的火箭筒',
  1329 => '薛定谔的超级球',
  1330 => '薛定谔的炸药包',
  1331 => '薛定谔的狂想曲',
  1332 => 'SCAR-H',
  1333 => 'SCAR-H Greande Launcher',
  1334 => 'G36C',
  1335 => 'G36C Shotgun',
  1336 => 'QBZ95 Burst Fire',
  1337 => 'QBZ95 Bayonet',
  1338 => 'QBZ95',
  1339 => '『巴雷特M95』',
  1340 => '篝酱的奇迹☆丝带～棍',
  1341 => '篝酱的奇迹☆丝带～炎',
  1342 => '篝酱的奇迹☆胶带～棍',
  1343 => '篝酱的奇迹☆胶带～炎',
  1344 => '游戏王两星素材',
  1345 => '游戏王三星素材',
  1346 => '游戏王一星素材',
  1347 => '游戏王四星素材',
  1348 => '游戏王五星素材',
  1349 => '游戏王五星素材 ',
  1350 => '游戏王九星素材 ',
  1351 => '游戏王十星素材 ',
  1352 => '灼眼头盔',
  1353 => '漂水盔甲',
  1354 => '疾风手套',
  1355 => '裂地跑鞋',
  1356 => '奇特数据',
  1357 => '勇气数据',
  1358 => '防卫数据',
  1359 => '高级球',
  1360 => '超级球',
  1361 => '豪华球',
  1362 => '快速球',
  1363 => '黑暗球',
  1364 => '计时球',
  1365 => '究极球',
  1366 => '晨辉爆弹',
  1367 => '日蚀机雷',
  1368 => '光子火箭',
  1369 => '离子播散器',
  1370 => '氢气地雷',
  1371 => '破阵地雷',
  1372 => '连环地雷',
  1373 => '地狱「炼狱气息」',
  1374 => '伞符「细雪的过客」',
  1375 => '水符「水色绒毯」',
  1376 => '秋符「落叶的疾风」',
  1377 => '鱼符「鱼的学校」',
  1378 => '御经「无限念佛」',
  1379 => '铳符「月之铳」',
  1380 => '国王密使',
  1381 => '最终证明',
  1382 => '雀跃之枪',
  1383 => '高兴之枪',
  1384 => '泡沫手指枪',
  1385 => '银色左轮',
  1386 => '试作枪刃',
  1387 => '死亡之吻',
  1388 => '染血匕首',
  1389 => '契约短剑',
  1390 => '失意背刺',
  1391 => '巨骨剑',
  1392 => '瓦明威',
  1393 => '微缩斧剑',
  1394 => '旋风锤',
  1395 => '影月锤',
  1396 => '爆裂锤',
  1397 => '英雄棍棒',
  1398 => '血怒棍棒',
  1399 => '象牙拳套',
  1400 => '风子谨制木海星',
  1401 => '【Poini Kune的死库水】',
  1402 => '【Madoka的死库水】',
  1403 => '【Erul Tron的泳装】',
  1404 => '【空羽亚乃亚的泳装】',
  1405 => '【Tita Nium的泳装】',
  1406 => '【Emon 5的沙滩短裤】',
  1407 => '大脸',
  1408 => '铁兽战线 徒花之费莉吉特 Ｌ2',
  1409 => '铁兽战线 凶鸟之施莱格 Ｌ3',
  1410 => '电子龙·凯旋 Ｌ2',
  1411 => '秘旋谍-双螺旋特工 Ｌ2',
  1412 => '海晶少女 妙晶心 Ｌ2',
  1413 => '海晶少女 奶嘴海葵 Ｌ2',
  1414 => '淘气仙星·霍莉安琪儿 Ｌ2',
  1415 => '真超级量子机神王 烈辉大炎磁 Ｌ3',
  1416 => '【阵列撕裂者】',
  1417 => '【震撼火箭弹】',
  1418 => '【彗星发射器】',
  1419 => '【猎头炸药】',
  1420 => '【灾难尖刺】',
  1421 => '【怨灵之瓶】',
  1422 => '【单人用娱乐火箭】',
  1423 => '【汉诺的崇高力量】',
  1424 => '魔法「紫云之兆」',
  1425 => '光符「净化之魔」',
  1426 => '「信仰之针」',
  1427 => '神签「犯规结界」',
  1428 => '月见酒「疯狂的九月」',
  1429 => '【火神炮】LV2',
  1430 => '【喷火器】LV2',
  1431 => '【环形激光】LV2',
  1432 => '【冲击激光】LV2',
  1433 => '【巨大麦克风】LVMAX',
  1434 => '【3WAY射击】LV2',
  1435 => '【D爆发】',
  1436 => '贝尔蒙特末裔圣水',
  1437 => '【紫色β大刀】',
  1438 => '【翡翠骑士】',
  1439 => '【念力刃】',
  1440 => '【花好月圆】',
  1441 => '【良辰美景】',
  1442 => '【克拉姆·索莱斯】',
  1443 => '万法破灭之符',
  1444 => '【正义之锤】',
  1445 => '【守护者之刺】',
  1446 => '【愚钝之斧】',
  1447 => '【巨大号角】',
  1448 => '【完美风暴】棍棒',
  1449 => '【黄金狂岚】',
  1450 => '阿耶尼的巨斧',
  1451 => '殴系速成书',
  1452 => '斩系速成书',
  1453 => '射系速成书',
  1454 => '投系速成书',
  1455 => '爆系速成书',
  1456 => '灵系速成书',
  1457 => '蝙蝠侠速成书',
  1458 => '超人药',
  1459 => '大圆脸',
  1460 => '闭锁世界的冥神 Ｌ5',
  1461 => '铁兽式强袭机动兵装改牛头伯劳2 Ｌ5',
  1462 => '防火龙·暗流体 Ｌ5',
  1463 => '前托枪管龙 Ｌ5',
  1464 => '电子界到临者＠火灵天星 Ｌ6',
  1465 => '「喧嚣叙事曲」',
  1466 => '「升天」',
  1467 => '「曳光」',
  1468 => '「人生重来箱」',
  1469 => '「菁英宅之怒」',
  1470 => '「信仰之山」',
  1471 => '「间断的噩梦」',
  1472 => '「运钝根的捕物帐」',
  1473 => '「活跃迎春曲」',
  1474 => '「飘落」',
  1475 => '「明动」',
  1476 => '「正午高阳」',
  1477 => '神灭兵器－天霆号扼宙斯 ☆12',
  1478 => '「碧海船歌」',
  1479 => '「翼展」',
  1480 => '「安谧」',
  1481 => '「午前许愿」',
  1482 => '神之圣剑',
  1483 => '「金霜协奏曲」',
  1484 => '「龙怒」',
  1485 => '「宁静」',
  1486 => '「清晨恩典」',
  1487 => '神之棍棒',
  1488 => '随机数之神的庇佑',
  1489 => '随机数之神的神力',
  1490 => '随机数之神的震撼',
  1491 => '随机数之神的恶戏',
  1492 => '随机数之神的摄理',
  1493 => '随机数之神的泪水',
  1494 => '随机数之神的圣剑',
  1495 => '随机数之神的棍棒',
  1496 => '燃素加农炮『爆炎』MK-II',
  1497 => '挑战者之印',
  1498 => '黑色碎片',
  1499 => '【我想要领略真正的红杀之力】',
  1500 => '大型闹钟',
  1501 => 'GS【伪Hand_Sonic】',
  1502 => '【逆转的女神】',
  1503 => '触手的力量',
  1504 => '雪兔【复制品】',
  1505 => 'GS【HandSonic Ver.4】',
  1506 => '水濑 名雪的半身像',
  1507 => '立华 奏的半身像',
  1508 => '混沌黑磨刀石',
  1509 => '艾莲娜的圣钉',
  1510 => '斗技【神砂风暴】',
  1511 => '简称为UCW的杏仁豆腐',
  1512 => '彩虹色的杏仁豆腐',
  1513 => '【生まれたての风】模样的杏仁豆腐',
  1514 => '【连续凤凰】模样的杏仁豆腐',
  1515 => '【全屏幕弹幕发射】',
  1516 => 'TDG压片猴',
  1517 => '『AZURE RONDO』',
  1518 => '琉璃血',
  1519 => '『性感玉米』',
  1520 => '『阿里嘎头哦～』',
  1521 => '『和谐你全家』',
  1522 => 'RV『罗德不列颠号』',
  1523 => '负人气的光环',
  1524 => '灭罪「正直者の死」',
  1525 => '神之装束',
  1526 => '天使队制服G-E.T',
  1527 => '阿婆主的点击量',
  1528 => '吉祥物',
  1529 => '神之远见',
  1530 => '通信装置',
  1531 => '神之操控',
  1532 => '传说的绒边手套',
  1533 => '神之步伐',
  1534 => '少女的高筒靴',
  1535 => '神之荣耀',
  1536 => '努力的富人气光环',
  1537 => '姬露瑞希的爱心便当',
  1538 => '我打败HANK了！',
  1539 => '我成功TDGSGL了！',
  1540 => '荼荼丸的茶',
  1541 => '罗德不列颠号机师钥匙',
  1542 => '点击量终于爆表了！',
  1543 => '负人品的结界',
  1544 => '幻象箭头',
  1545 => '幻象预言',
  1546 => '幻象路径',
  1547 => '七色玻璃珠',
  1548 => '银白口哨',
  1549 => '格林多管激光炮',
  1550 => '小型高威力试作性防身设备『绯蜂』',
  1551 => '双重军用匕首',
  1552 => '接待员制服',
  1553 => 'RF高校校服',
  1554 => '高密度金属护甲',
  1555 => '文化衫『东亚』',
  1556 => '化学强化风衣',
  1557 => '橙色信号缎带',
  1558 => '粉红双球发饰',
  1559 => '白色眼罩',
  1560 => '热源能量缎带',
  1561 => '粉红双球发饰『彩虹』',
  1562 => '绿色信号缎带',
  1563 => '奇怪的袋子',
  1564 => 'Mp3播放器',
  1565 => '生物能量缎带',
  1566 => '奇怪的塑料袋『錯節』',
  1567 => '化学强化手套',
  1568 => '蓝色信号缎带',
  1569 => '女式皮鞋',
  1570 => '女式运动鞋',
  1571 => '波动能量缎带',
  1572 => '高级学生跑鞋『凄舞』',
  1573 => '化学强化战靴',
  1574 => '星空之愿',
  1575 => '友情之愿',
  1576 => '平和之愿',
  1577 => '世灭之愿',
  1578 => 'CAVE社特典CD『胎慟』',
  1579 => '强袭之愿',
  1580 => '歌词卡片【海洋】',
  1581 => '歌词卡片【星空】',
  1582 => '『410Gauge重型左轮』',
  1583 => '大往生什么的『黄流』什么的才没看到呢！',
  1584 => '『Double SMG』',
  1585 => '东方产军用工兵铲',
  1586 => '未完成【你，飞起来吧。】',
  1587 => '认真收集的对魔物用巨大卵石',
  1588 => '歌词卡片【大地】',
  1589 => '元素枪刃『Glider』',
  1590 => '断罪之光刃',
  1591 => '破灭之天雷',
  1592 => '无尽之洪流',
  1593 => '黄金秋刀鱼',
  1594 => '限定型-MSM-04 アッガイ',
  1595 => '✦种火聚集装置✦',
  1596 => '喷气式红杀重铁剑',
  1597 => '『AZURE RONDO · AQUAMARINE』',
  1598 => '绯红记忆',
  1599 => '♪臻蓝之愿♪',
  1600 => '血色强袭',
  1601 => '♫钴蓝之灵♫',
  1602 => '狮虎丝带',
  1603 => '❀矢车菊的回忆❀',
  1604 => '落樱巨锤',
  1605 => '八八连流星浮游炮',
  1606 => '冰炎钥匙·炎',
  1607 => '冰炎钥匙·冰',
  1608 => '『看吧，你的死兆星正在天上闪耀！』',
  1609 => '《小黄的时间球》',
  1610 => '毒性凸眼鱼',
  1611 => '『一瞬千击』',
  1612 => '【矢量操作】',
  1613 => '锋利的电气毒性晓魂之歌-改[+4]',
  1614 => '【不屈的意志】',
  1615 => '『微型火箭加速噴射單輪車』',
  1616 => '《衷中參西錄》',
  1617 => '阔剑地雷吸附器',
  1618 => '■Darthnote■',
  1619 => '胡来的左手',
  1620 => '楼观剑',
  1621 => '【荆棘式电子地雷】',
  1622 => '大钉棍棒',
  1623 => '连击烧输尿管~☆',
  1624 => '本格的嘴炮',
  1625 => '水&火符「Phlogistic Rain」',
  1626 => '无毁的受王拳',
  1627 => 'L5爆发！',
  1628 => '一个半角符号',
  1629 => '「Falchion Rider」模样的杏仁豆腐',
  1630 => '混乱邪恶之塔',
  1631 => '魔王の剑',
  1632 => '把妹の手',
  1633 => '★挂机の萌力★',
  1634 => '节操炸弹G',
  1635 => 'COCO☆酱',
  1636 => '向日葵妖精',
  1637 => '纸条■■■■',
  1638 => '十二试炼',
  1639 => '英雄战甲B模样的杏仁豆腐',
  1640 => '英雄战甲H模样的杏仁豆腐',
  1641 => '英雄战甲A模样的杏仁豆腐',
  1642 => '英雄战甲F模样的杏仁豆腐',
  1643 => '英雄之力模样的杏仁豆腐',
  1644 => '白楼剑',
  1645 => 'YES♂SIR',
  1646 => '燕返262',
  1647 => '「饭纲权现降临」',
  1648 => '超⑨武神斩',
  1649 => '拳头',
  1650 => 'AKM-ExS',
  1651 => '画(ping)笔(ru)',
  1652 => '破解的PSP-3000',
  1653 => '超级☆无敌辰音LILY',
  1654 => '光翼型近接支援残酷戦闘機',
  1655 => '大纸扇',
  1656 => '超⑨制霸武神斩',
  1657 => '空军制服',
  1658 => 'Reality marble',
  1659 => '黑曲装备B',
  1660 => 'Microsoft Visual Studio 2010',
  1661 => '黑曲装备B-改',
  1662 => '飞行员头盔',
  1663 => 'Torah',
  1664 => '黑曲装备H',
  1665 => 'GoldWave',
  1666 => '黑曲装备H-改',
  1667 => '老式电子表',
  1668 => 'Fantasm',
  1669 => '黑曲装备A',
  1670 => 'Micorsoft AppLocale',
  1671 => '黑曲装备A-改',
  1672 => '空军马裤',
  1673 => 'Nevi’im',
  1674 => '黑曲装备F',
  1675 => 'MeGUI',
  1676 => '黑曲装备F-改',
  1677 => '耶律哥的喇叭',
  1678 => '《Dead Sea Scrolls》',
  1679 => '黑曲装备T',
  1680 => '黑曲装备T-改',
  1681 => '『寻星者』',
  1682 => 'EX火&金符『St. Elmo Pillar』',
  1683 => '肉○器“北京”型',
  1684 => '高级飞镖',
  1685 => '《董子语录》',
  1686 => 'Barrett M95',
  1687 => '圣光啊!你有看到那个敌人吗！',
  1688 => '火绳枪',
  1689 => '叉子',
  1690 => '退魔符',
  1691 => 'ACDTS Farming Helper',
  1692 => '键 希望弹',
  1693 => '205mm绯牡丹加农炮',
  1694 => '键 燃烧弹',
  1695 => '四面的○',
  1696 => '键 生命弹',
  1697 => '腿',
  1698 => '键 未来弹',
  1699 => '键 旅途弹',
  1700 => '键 审判弹',
  1701 => '■胶冻の巴雷特■',
  1702 => '■便携式火力平台■',
  1703 => '【工作用数位板】',
  1704 => '■胶冻的风衣■',
  1705 => '■Type3防弹插板■',
  1706 => '【学园针织罩衫】',
  1707 => '■胶冻的兜帽■',
  1708 => '■VFL 6-24×56光学瞄具■',
  1709 => '【鱼形发卡】',
  1710 => '■胶冻的手套■',
  1711 => '■热光学迷彩披风■',
  1712 => '【工作用数位笔】',
  1713 => '■胶冻的跑鞋■',
  1714 => '■IOP T4外骨骼■',
  1715 => '【学园制服鞋】',
  1716 => '■胶冻的吊坠■',
  1717 => '■遗留的武器库■',
  1718 => '【布艺猫咪挂件】',
  1719 => '[数据删除]',
  1720 => '临摹装置·枪',
  1721 => '强力猫爪！',
  1722 => '飞翔的愿望',
  1723 => '厚重的拳头',
  1724 => '数学教科书',
  1725 => '魔法毒针',
  1726 => '☾ΡΑΘΘЙΨΜЙΨΑП☾',
  1727 => '电子巫女装甲',
  1728 => '软扑扑的斗蓬！',
  1729 => '破碎布衣',
  1730 => '厚重熊装',
  1731 => '女生校服',
  1732 => '魔法力场',
  1733 => '时尚书包',
  1734 => '电子狐狸耳朵',
  1735 => '毛茸茸的耳朵！',
  1736 => '飞翼发卡',
  1737 => '厚重手套',
  1738 => '狐狸耳朵？',
  1739 => '电子巫女袖甲',
  1740 => '乐呼呼的老鼠！',
  1741 => '厚重熊装包',
  1742 => '电子狐狸尾巴',
  1743 => '冷冰冰的灵体！',
  1744 => '大铁球',
  1745 => '厚重靴子',
  1746 => '长筒袜',
  1747 => '临摹装置·刃',
  1748 => '临摹装置·块',
  1749 => '临摹装置·盾',
  1750 => '临摹装置·符',
  1751 => '超级猫罐头！',
  1752 => '超级蜂蜜',
  1753 => '临摹装置·弹',
  1754 => '临摹装置',
  1755 => '魔法蜂针',
  1756 => '嘴炮',
  1757 => '搬运之力',
  1758 => '销魂之歌',
  1759 => '神字幕',
  1760 => '✧覆唱之歌',
  1761 => '✧无畏之爱',
  1762 => '✧怜悯之痛',
  1763 => '✧执念之刺',
  1764 => '✧希望之风',
  1765 => '◆愈合数据',
  1766 => '◆熟练数据',
  1767 => '◆生命数据',
  1768 => '◆意念数据',
  1769 => '【科学的超电磁炮-改】',
  1770 => '【水素粒子水铁炮-改】',
  1771 => '魔炮【元祖二重魔炮】',
  1772 => '社员专用的ID卡',
  1773 => 'RV『Black Riper』',
  1774 => '『地球尽灭光』',
  1775 => '洁白羽翼',
  1776 => '挑战者之证',
  1777 => '悲叹之种',
  1778 => '矿泉水',
  1779 => '秋刀鱼罐头',
);
?>