<?php

define('CURSCRIPT', 'game');
require './include/common.inc.php';
require GAME_ROOT.'./include/game.func.php';
require_once GAME_ROOT.'./include/game/titles.func.php';

if(!$cuser||!$cpass) { gexit($_ERROR['no_login'],__file__,__line__); } 
if(isset($mode) && $mode == 'quit') {

	gsetcookie('user','');
	gsetcookie('pass','');
	header("Location: index.php");
	exit();

}
$result = $db->query("SELECT * FROM {$tablepre}players WHERE name = '$cuser' AND type = 0");
if(!$db->num_rows($result)) { header("Location: valid.php");exit(); }

$pdata = $db->fetch_array($result);
if($pdata['pass'] != $cpass) {
	$tr = $db->query("SELECT `password` FROM {$tablepre}users WHERE username='$cuser'");
	$tp = $db->fetch_array($tr);
	$password = $tp['password'];
	if($password == $cpass) {
		$db->query("UPDATE {$tablepre}players SET pass='$password' WHERE name='$cuser'");
	} else {
		gexit($_ERROR['wrong_pw'],__file__,__line__);
	}
}



if($gamestate == 0) {
	header("Location: end.php");exit();
}

$pdata['clbpara'] = get_clbpara($pdata['clbpara']);
extract($pdata);
init_playerdata();
init_profile();

$log = '';
//读取聊天信息
$chatdata = getchat(0,$teamID);
//读取表情信息
$emdata = get_emdata();
//读取玩家互动信息
$result = $db->query("SELECT lid,time,log FROM {$tablepre}log WHERE toid = '$pid' AND prcsd = 0 ORDER BY time,lid");
$llist = '';
while($logtemp = $db->fetch_array($result)){
	$log .= date("H:i:s",$logtemp['time']).'，'.$logtemp['log'].'<br />';
	$llist .= $logtemp['lid'].',';
}
if(!empty($llist)){
	$llist = '('.substr($llist,0,-1).')';
	$db->query("UPDATE {$tablepre}log SET prcsd=1 WHERE toid = '$pid' AND lid IN $llist");
}
if($hp > 0){//判断冷却时间是否过去
	//显示枪声信息
	if(($now <= $noisetime+$noiselimit)&&$noisemode&&($noiseid!=$pid)&&($noiseid2!=$pid)) {
		if(($now-$noisetime) < 60) {
			$noisesec = $now - $noisetime;
			$log .= "<span class=\"yellow b\">{$noisesec}秒前，{$plsinfo[$noisepls]}传来了{$noiseinfo[$noisemode]}。</span><br>";
		} else {
			$noisemin = floor(($now-$noisetime)/60);
			$log .= "<span class=\"yellow b\">{$noisemin}分钟前，{$plsinfo[$noisepls]}传来了{$noiseinfo[$noisemode]}。</span><br>";
		}
	}
	if($coldtimeon){
		$cdover = $cdsec*1000 + $cdmsec + $cdtime;
		$nowmtime = floor(getmicrotime()*1000);
		$rmcdtime = $nowmtime >= $cdover ? 0 : $cdover - $nowmtime;
	}
}
//var_dump($itm3);
if($hp <= 0){
	$dtime = date("Y年m月d日H时i分s秒",$endtime);
	$kname='';
	if($bid) {
		$result = $db->query("SELECT name FROM {$tablepre}players WHERE pid='$bid'");
		if($db->num_rows($result)) { $kname = $db->result($result,0); }
	}
	$mode = 'death';
} elseif($state ==1 || $state == 2 || $state == 3){
	$mode = 'rest';
} elseif($itms0){
	$mode = 'itemmain';
} else {
	$mode = 'command';
}
$command = 'enter';
$cmd = $main = '';
if((strpos($action,'corpse')===0 || strpos($action,'pacorpse')===0) && $gamestate<40){
	$cid = strpos($action,'corpse')===0 ? str_replace('corpse','',$action) : str_replace('pacorpse','',$action);
	if($cid){
		$result = $db->query("SELECT * FROM {$tablepre}players WHERE pid='$cid' AND hp=0");
		if($db->num_rows($result)>0){
			$edata = $db->fetch_array($result);
			include_once GAME_ROOT.'./include/game/battle.func.php';
			findcorpse($edata);
			extract($edata,EXTR_PREFIX_ALL,'w');
			init_battle(1);
			$main = 'battle';
		}
	}	
}
elseif(strpos($action,'chase')!==false || strpos($action,'dfight')!==false){
	if(strpos($action,'chase')===0) $enemyid = str_replace('chase','',$action);
	if(strpos($action,'pchase')===0) $enemyid = str_replace('pchase','',$action);
	if(strpos($action,'dfight')===0) $enemyid = str_replace('dfight','',$action);
	$result = $db->query("SELECT * FROM {$tablepre}players WHERE pid='$enemyid' AND hp>0 AND pls='$pls'");
	if($db->num_rows($result)>0){
		$edata = $db->fetch_array($result);
		include_once GAME_ROOT.'./include/game/revbattle.func.php';
		findenemy_rev($edata);
		$main = 'battle_rev';
	}
}
elseif((strpos($action,'neut')===0)){
	$nid = str_replace('neut','',$action);
	if($nid){
		$result = $db->query("SELECT * FROM {$tablepre}players WHERE pid='$nid' AND hp>0");
		if($db->num_rows($result)>0){
			$edata = $db->fetch_array($result);
			include_once GAME_ROOT.'./include/game/revbattle.func.php';
			findneut($edata,1);
			extract($edata,EXTR_PREFIX_ALL,'w');
			init_battle(1);
			$main = 'battle';
		}
	}	
}
if($hp > 0 && $coldtimeon && $showcoldtimer && $rmcdtime){$log .= "行动冷却时间：<span id=\"timer\" class=\"yellow\">0.0</span>秒<script type=\"text/javascript\">demiSecTimerStarter($rmcdtime);</script><br>";}
//如果身上存在时效性技能，检查技能是否超时
if($hp > 0 && !empty($clbpara['lasttimes']))
{
	$flag = check_skilllasttimes();
	if($flag)
	{
		$pdata = current_player_save();
		$pdata['clbpara'] = get_clbpara($pdata['clbpara']);
		extract($pdata);
		init_playerdata();
		init_profile();
	}
}
if($hp > 0 && in_array('inf_dizzy',$clbpara['skill']))
{
	$dizzy_times = (($clbpara['starttimes']['inf_dizzy'] + $clbpara['lasttimes']['inf_dizzy']) - $now)*1000;
	$log .= '<span class="yellow">你现在处于眩晕状态，什么都做不了！</span><br>眩晕状态持续时间还剩：<span id="timer" class="yellow">'.$dizzy_times.'.0</span>秒<br><script type="text/javascript">demiSecTimerStarter('.$dizzy_times.');</script>';
}
if ($club==0)
{
	include_once GAME_ROOT.'./include/game/clubslct.func.php';
	getclub($name,$c1,$c2,$c3);
	$clubavl[0]=0; $clubavl[1]=$c1; $clubavl[2]=$c2; $clubavl[3]=$c3;
}
if(isset($clbpara['dialogue']))
{
	include_once config('dialogue',$gamecfg);
	$dialogue_id = $clbpara['dialogue'];
}
	
include template('game');

?>
