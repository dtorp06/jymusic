<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($meta_title); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta name="keywords" content="<?php echo ($meta_keywords); ?>" />
	<meta name="description" content="<?php echo ($meta_description); ?>" />
	<meta name="author" content="JYmusic">
	<link type="text/css" rel="stylesheet" href="/Template/default/static/Mobile/css/mobile.css?v=0721"/>
	<link type="text/css" rel="stylesheet" href="/Template/default/static/Mobile/css/style.css?v=0721"/>
	<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
	(function(){
		window.JY = {
			"ROOT"   : "", //当前网站地址
			"APP"    : "/index.php?s=", //当前项目地址
			"PUBLIC" : "/Public", //项目公共目录地址
			"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
			"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
			"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
		}
	})();
	</script>
</head>
<body>
<div id="frame">
	<div id="top">
		<?php if(CONTROLLER_NAME != 'Index'): ?><a href="javascript:window.history.back();" id="goback">
			<img align="top" src="/Template/default/static/Mobile/images/goback.png">
		</a><?php endif; ?>
		<a id="title" href="<?php echo U('/');?>"><img align="top" src="/Template/default/static/images/logo.png"></a>
		<span id="list">		
		   <a href="javascript:;" id="nav-btn"><img align="top" src="/Template/default/static/Mobile/images/p0.png"></a>
		</span>
	</div>
	<div class="disNav" id="disNav" style="display: none;">
		<div class="arrow"><i></i></div>
		<ul class="navList">
			<li><a href="<?php echo U('/');?>" title="JYmusic">首页</a></li>
			<li><a href="<?php echo U('/Ranks');?>" title="排行榜">排行榜</a></li>
			<li><a href="<?php echo U('/Album');?>" title="专辑">专辑</a></li>
			<li><a href="<?php echo U('/Artist');?>" title="歌手大全">歌手大全</a></li>
			<?php $where=array();$where["status"]=1;$_result = M("Genre")->where($where)->limit(8)->order("add_time desc")->cache(true,86400)->select();if($_result):$i=0;foreach($_result as $key=>$v):$v['url']=U('/genre/'.$v['id']);++$i;$mod = ($i % 2 );?><li><a href="<?php echo ($v['url']); ?>" title="<?php echo ($v['name']); ?>"><?php echo ($v['name']); ?></a></li><?php endforeach; endif;?>
		</ul>
    </div>
	
	<div id="content">
		
		
<div class="tm_div  clearfix">
	<h2><?php echo ($data['name']); ?> </h2>
	<div class="pgs">歌手：<a target="_blank" href="<?php echo ($data['artist_url']); ?>"><?php echo ($data['artist_name']); ?> </a></div>
</div>
<div class="tour_div ">
	<div id="song-play" class="mt10 clearfix">
		<span class="img_border">
			<a target="_blank" title="<?php echo ($data['name']); ?>" href="javascript:;">
				<img class="br100" alt="<?php echo ($data['name']); ?>" src="<?php echo get_song_cover($data);?>">
			</a>
		</span>
		<div class="playerBtn">
			<?php $p = M("Songs")->field("id,name")->order("id DESC")->where(array("status"=>1,"id"=> array("lt", $data["id"])))->find();if(empty($p)): $p = M("Songs")->field("id,name")->order("id DESC")->find();?>  <?php endif; $p['url']=U('/Music/'.$p['id']); ?>  <a class="jp-previous" href="<?php echo ($p['url']); ?>"></a>
			<a class="jp-play" href="javascript:;" style="display: none;"></a>
			<a class="jp-pause" href="javascript:;" style="display: block;"></a>

			<?php $n = M("Songs")->field("id,name")->order("id")->where(array("status"=>1,"id"=> array("gt", $data["id"])))->find();if(empty($n)): $n = M("Songs")->field("id,name")->order("id ASC")->find();?> <?php endif; ?> <?php $n['url']=U('/Music/'.$n['id']); ?>  <a class="jp-next" href="<?php echo ($n['url']); ?>"></a>
		</div>
		
		<span class="jp-current-time">00:00</span>
		<div class="jp-progress">
			<div class="jp-seek-bar">						
				<div class="jp-play-bar" style="width: 2%;">
					<a class="bar" href="javascript:;"></a>
				</div>
			</div>
		</div>
		<span class="jp-duration">00:00</span>
	</div>	
</div>
<div class="tm_div  clearfix">
	<div class="tour_title tc0" >热门歌曲</div>
</div>
<div class="tour_div ">
	<ul class="song_con">
		<?php $where=array();$where["status"]=1;$_result = M("Songs")->alias("__MUSIC")->where($where)->cache(true,86400)->limit("10")->order("listens desc")->select();if($_result):$i=0;foreach($_result as $key=>$v): $v['url']=U('/music/'.$v['id']); $v['down_url']=U('/down/'.$v['id']); $v['user_url']=U('/user/'.$v['up_uid']); $v['artist_url']=U('/artist/'.$v['artist_id']); $v['album_url']=U('/album/'.$v['album_id']); $v['genre_url']=!empty($v['genre_id']) ? U('/genre/'.$v['genre_id']) : U('/Genre'); $v['cover_url']= !empty($v['cover_url'])? $v['cover_url'] : "/Public/static/images/cover.png";++$i;$mod = ($i % 2 );?><li>
			<span class="numb"></span>
			<a class="sname text-ellipsis" title="<?php echo ($v['name']); ?>" href="<?php echo ($v['url']); ?>"><?php echo ($v['name']); ?></a>
			<a class="gname text-ellipsis" title="<?php echo ($v['name']); ?>" href="<?php echo ($v['artist_url']); ?>"><?php echo ($v['artist_name']); ?></a>
			<a class="play" title="播放小<?php echo ($v['name']); ?>" href="<?php echo ($v['url']); ?>"></a>		
		</li><?php endforeach; endif;?>	
	</ul>				
</div>
<div id="jy-player" style="height:0px"></div>
<script type="text/javascript" src="/Template/default/static/Mobile/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/Template/default/static/Mobile/js/player.js"></script>
<script type="text/javascript">setplayer(<?php echo ($data['id']); ?>)</script>

	</div>
	<div id="footer"><a href="<?php echo U('/');?>">Powered byJYmusic© 2016</a></div>
</div>
<script type="text/javascript" src="/Template/default/static/Mobile/js/common.js"></script>
</body>
</html>