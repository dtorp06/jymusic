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
	<div class="tour_title tc0" >根据网友点播系统自动生成歌曲排行榜</div>
	<div class="renqi_1">
		<ul id="top10">
			<li class="<?php if(ACTION_NAME == 'index'): ?>yesselected<?php else: ?>noselected<?php endif; ?>"><a href="<?php echo U('index');?>">总人气</a></li>
			<li class="<?php if(ACTION_NAME == 'hot'): ?>yesselected<?php else: ?>noselected<?php endif; ?>"><a href="<?php echo U('hot');?>">总推荐</a></li>
			<li class="<?php if(ACTION_NAME == 'down'): ?>yesselected<?php else: ?>noselected<?php endif; ?>"><a href="<?php echo U('down');?>">总下载</a></li>
			<li class="<?php if(ACTION_NAME == 'fav'): ?>yesselected<?php else: ?>noselected<?php endif; ?>"><a href="<?php echo U('fav');?>">总收藏</a></li>
		</ul>
	</div>

</div>	

		
<div class="tour_div ">
	<ul class="song_con">
		<?php $where=array();$where["status"]=1;$_result = M("Songs")->alias("__MUSIC")->where($where)->limit("15")->order($order." desc")->select();if($_result):$i=0;foreach($_result as $key=>$v): $v['url']=U('/music/'.$v['id']); $v['down_url']=U('/down/'.$v['id']); $v['user_url']=U('/user/'.$v['up_uid']); $v['artist_url']=U('/artist/'.$v['artist_id']); $v['album_url']=U('/album/'.$v['album_id']); $v['genre_url']=!empty($v['genre_id']) ? U('/genre/'.$v['genre_id']) : U('/Genre'); $v['cover_url']= !empty($v['cover_url'])? $v['cover_url'] : "/Public/static/images/cover.png";++$i;$mod = ($i % 2 );?><li>
			<span class="numb"></span>
			<a class="sname text-ellipsis" title="<?php echo ($v['name']); ?>" href="<?php echo ($v['url']); ?>"><?php echo ($v['name']); ?></a>
			<a class="gname text-ellipsis" title="<?php echo ($v['name']); ?>" href="<?php echo ($v['artist_url']); ?>"><?php echo ($v['artist_name']); ?></a>
			<a class="play" title="播放小<?php echo ($v['name']); ?>" href="<?php echo ($v['url']); ?>"></a>		
		</li><?php endforeach; endif;?>	
		<div id="more" class="more clearfix" style="margin-top:20px;" url="<?php echo U('getlist');?>" limit="15" order="<?php echo ($order); ?>">点击查看更多</div>			
	</ul>				
</div>

	</div>
	<div id="footer"><a href="<?php echo U('/');?>">Powered byJYmusic© 2016</a></div>
</div>
<script type="text/javascript" src="/Template/default/static/Mobile/js/common.js"></script>
</body>
</html>