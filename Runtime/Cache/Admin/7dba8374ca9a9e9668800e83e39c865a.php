<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="JYmusic 音乐管理系统">
   <meta name="keywords" content="JYmusic 音乐管理系统">
   <meta name="author" content="JYmusic 音乐管理系统">
   <title><?php echo ($meta_title); ?> - JYmusic 音乐管理系统 </title>
   <link type="image/x-ico; charset=binary" rel="shortcut icon" href="/Public/Admin/images/favicon.ico">  
   <!--[if lt IE 9]>
   <script src="/Public/static/ie/html5shiv.js"></script>
   <script src="/Public/static/ie/respond.min.js"></script>
   <![endif]-->
   <!--CSS-->
   <link rel="stylesheet" href="/Public/static/bootstrap-3.1.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="/Public/static/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="/Public/Admin/css/csspinner.min.css">
   
<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.1.1/tagsinput/bootstrap-tagsinput.css">

   <link rel="stylesheet" href="/Public/Admin/css/app.css?1.1">
   <script type="application/javascript" src="/Public/Admin/js/modernizr.js"></script>
   <script type="application/javascript" src="/Public/Admin/js/fastclick.js" ></script>
   <script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="/Public/static/bootstrap-3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
	<section class="wrapper">
	  <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
	     <div class="navbar-header">
	        <a href="#" class="navbar-brand">
	           <div class="brand-logo">JYmusic</div>
	           <div class="brand-logo-collapsed">JY</div>
	        </a>
	     </div>
	     <div class="nav-wrapper">
            <ul class="nav navbar-nav" id="head-menu">
				<?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="" >
	              <a href="<?php echo (U($menu["url"])); ?>"   class="has-submenu " data-original-title="<?php echo ($menu["title"]); ?>"  data-placement="right">
	                 <em class="fa fa-<?php echo ((isset($menu["style"]) && ($menu["style"] !== ""))?($menu["style"]):'th-list'); ?>"></em>
	                 <span class="item-text"><?php echo ($menu["title"]); ?></span>
	              </a>
	           	</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
	     	
	        <ul class="nav navbar-nav navbar-right">	        	
	           <li class="">
					<button  href="#" class="btn btn-pill-left btn-success btn-sm mt"  onclick="clearCache();"><i class="fa fa-trash-o"></i> 清除缓存</button>
				</li>
				<li class="">
					<a href="/" target="_blank" class="btn btn-pill-right btn-success btn-sm mt" style="padding: 4px 10px;"><i class="fa fa-mail-forward"></i> 网站首页</a>
				</li>
	           <li class="dropdown">
	              <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
	                 <em class="fa fa-user"></em>
	              </a>
	              <ul class="dropdown-menu">
					 <li><a href="<?php echo U('User/updateUsername');?>">修改用户名</a></li>
					 <li><a href="<?php echo U('User/updatePassword');?>">修改密码</a></li>
	                 <li><a href="<?php echo U('User/updateNickname');?>">修改昵称</a></li>
	                 <li><a href="<?php echo U('Public/logout');?>">退出</a></li>
	              </ul>
	           </li>
	           <li>
	              <a href="#" data-toggle="offsidebar">
	                 <em class="fa fa-align-right"></em>
	              </a>
	           </li>
	        </ul>
	     </div>
	  </nav>
	  <!-- 结束 顶部导航--->
	  <aside class="aside">
	     <!-- 开始 侧边栏 (left)-->
	     <nav class="sidebar">	     		     	
	        <ul class="nav">
	           <!-- 用户信息-->
	           <li>
	              <div data-toggle="collapse-next" class="item user-block has-submenu">
	                 <div class="user-block-picture">
	                    <img src="/Public/Admin/images/avatar.png" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
	                    <div class="user-block-status">
	                       <div class="point point-success point-lg"></div>
	                    </div>
	                 </div>	
				</li>
	           	<!-- 结束 用户信息-->
	           	<!-- 开始菜单-->
				
				<?php if(!empty($_extra_menu)): ?>
	           	<?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
	               <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i; if(!empty($sub_menu)): ?><li>
						<?php if(!empty($key)): ?><a href="#" title="<?php echo ($key); ?>" data-toggle="collapse-next" class="has-submenu">
                     			<em class="fa fa-plus-square"></em>
                     			<span class="item-text"><?php echo ($key); ?></span>
                  			</a><?php endif; ?>
						<ul class="nav collapse in side-sub-menu">
							<?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo (U($menu["url"])); ?>" title="<?php echo ($menu["title"]); ?>" data-toggle="" class="no-submenu">
                           			<span class="item-text"><?php echo ($menu["title"]); ?></span>
                        		</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				
	           <!-- 侧边栏页脚 -->
	           <li class="nav-footer">
	              <div class="nav-footer-divider"></div>
	              <div class="btn-group text-center">
					2015 © <em>JYmusic-音乐管理系统</em> by  <a href="http://www.jyuu.cn/" target="_blank">jyuu.cn</a>
	              </div>
	           </li>
	        </ul>
	     </nav>
	     <!-- 结束 侧边栏 （右）-->
	  </aside>

	  <aside class="offsidebar"></aside>
	  <!-- 开始 主体内容-->
	  <section>
	     <section class="main-content">
			
<h3>歌曲管理</h3>
<div class="panel panel-default">
	<div class="panel-heading">批量添加歌曲</div>
 	<div class="panel-body">
		<div class="alert alert-success text-center">水平线以上为公用参数，可无限添加，注意：中途可修改任意参数</div>
		<div class="clearfix form-horizontal  mb-sm" id="show-song">
			
		</div>	
        <form class="form-horizontal" id="all-form" enctype="multipart/form-data" action="<?php echo U();?>" name="songs"  method="post">	
			<div class="form-group">	
    			<label class="col-sm-2 control-label">所属艺术家</label>
    			<div class="col-sm-2">				
    				<div class="input-group">
    					<input type="text" class="hide" id="artist-id" name="artist_id" value="<?php echo ((isset($data["artist_id"]) && ($data["artist_id"] !== ""))?($data["artist_id"]):'0'); ?>">	
    					<input type="text" class="form-control" id="artist-name" name="artist_name"  value="<?php echo ((isset($data["artist_name"]) && ($data["artist_name"] !== ""))?($data["artist_name"]):''); ?>">	
						<a href="#" class="input-group-addon ajax-find" rel="artist">
                         	<span class="fa-search fa"></span>
                    	</a>
                    </div>
					<span class="help-block">可以填写，自动新增</span>
    			</div>	
    		    <label class="col-sm-1 control-label">所属专辑</label>			
    			<div class="col-sm-2">
   					<div class="input-group">
    					<input type="text"  class="hide" name="album_id" id="album-id" value="<?php echo ((isset($data["album_id"]) && ($data["album_id"] !== ""))?($data["album_id"]):'0'); ?>">
    					<input type="text" class="form-control"  name="album_name" id="album-name" value="<?php echo ((isset($data["album_name"]) && ($data["album_name"] !== ""))?($data["album_name"]):''); ?>">
						<a href="<?php echo U('Album/find');?>" class="input-group-addon ajax-find"  rel="album">
                         	<span class="fa-search fa"></span>
                    	</a>
                    </div>
					<span class="help-block">可以填写，自动新增</span>
    			</div>	
				<label class="col-sm-1 control-label">用户[ID]</label>
    			<div class="col-sm-1">
    				<div class="input-group">	
    					<input type="text" class="form-control"  name="up_uid"  value="<?php echo ((isset($data["up_uid"]) && ($data["up_uid"] !== ""))?($data["up_uid"]):'0'); ?>">								
				   </div> 		
    			</div>							    		
    		</div>
			
			<div class="form-group">	
				<label class="col-sm-2 control-label">所属服务器</label>
				<div class="col-sm-2">
					<select name="server_id" class="form-control">
					<option class="no-server" id="no-server" value="0">无服务器</option>
	        		<?php $_result=get_server();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><option id="server-<?php echo ($s['id']); ?>" data-listen="<?php echo ($s['listen_url']); ?>" data-down="<?php echo ($s['down_url']); ?>" value="<?php echo ($s["id"]); ?>">
							<?php echo ($s["name"]); ?>						
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>	
	
				<label class="col-sm-1 control-label">所属曲风</label>
				<div class="col-sm-2">
					<select name="genre_id" class="form-control">					
	        		<?php $_result=get_genre_tree();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$genre): $mod = ($i % 2 );++$i;?><option <?php if(!empty($data['genre_id'])): if($data['genre_id'] == $genre['id'] ): ?>selected='selected'<?php endif; endif; ?> value="<?php echo ($genre["id"]); ?>"><?php echo ($genre["title_show"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>	
				<label class="col-sm-1 control-label">所属标签</label>	
				<div class="col-sm-4">
					<div class="input-group inline">
						<input type="text" class="form-control" name="tags" id="tagsinput" value="<?php if(!empty($data['id'])): $_result=get_music_tag($data['id']);if(is_array($_result)): $k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; echo ($vo); ?>,<?php endforeach; endif; else: echo "" ;endif; endif; ?>">
                    </div>
                    <a href="javascript:;" class="btn btn-default inline find-tag">
                         <span class="fa-search fa"></span>
                    </a>
                    <div class="tag-box" style="display:none">
                    	<button class="close tag-close mr-xl" type="button">×</button>
                    	<div class="box-placeholder tag-content m0 p">
                  		</div>
                  	</div>		
				</div>
			</div>
			
			<div class="form-group">						
    			<label class="col-sm-2 control-label ">试听次数</label>
    			<div class="col-sm-2 controls">
    				<input type="text" class="form-control"  value="<?php echo ((isset($data["listens"]) && ($data["listens"] !== ""))?($data["listens"]):''); ?>" name="listens">
    			</div>	
		
    			<label class="col-sm-1 control-label ">下载次数</label>
    			<div class="col-sm-2">
    				<input type="text" class="form-control input-mini"  value="<?php echo ((isset($data["download"]) && ($data["download"] !== ""))?($data["download"]):'0'); ?>" name="download">    				
    			</div>
				
				<label class="col-sm-1 control-label ">下载积分</label>
    			<div class="col-sm-1">
    				<input type="text" class="form-control input-mini"  value="<?php echo ((isset($data["score"]) && ($data["score"] !== ""))?($data["score"]):'0'); ?>" name="score">    				
    			</div>			    							
    		</div>
			
			
			<hr>
			
			<div class="form-group">	
				<label class=" col-sm-2 control-label">歌曲名称</label>
				<div class="col-sm-3">
					<input  type="text"  name="name" value="" class="form-control">					
				</div>
				<span class="help-block">此项不能为空</span>
			</div>	
			<div class="form-group">	
				<label class="col-sm-2 control-label">试听地址</label>
				<div class="col-sm-5 music-dir">
					<div class="input-group">
						<input type="hidden" name="listen_file_id" id="listen_file_id" value="">						
						<input type="text" class="form-control" name="listen_url"  id="songs_url"  value="<?php if(empty($data['music_url'])): echo ((isset($data["listen_url"]) && ($data["listen_url"] !== ""))?($data["listen_url"]):""); else: ?> <?php echo ($data["music_url"]); endif; ?>">						
						<a href="#" class="input-group-addon up_music" id="up-music" rel_url="#songs_url" rel_fileid="#listen_file_id">                        	
							<span class="fa fa-cloud-upload"></span>
						</a>
						<div class="upload-progr"><div class="up-progress"><div class="upload-bar"></div></div></div>
					</div> 									
				</div>

				<span class="help-block">可填写外链地址</span>
			</div>		

			<div class="form-group">	
				<label class="col-sm-2 control-label">下载地址</label>
				<div class="col-sm-5 music-dir">
					<div class="input-group">
						<input type="hidden" name="down_file_id" id="down_file_id" value="">
						<input type="text"  class="form-control" name="down_url" id="music-down" value="<?php if(empty($data['music_down'])): echo ((isset($data["down_url"]) && ($data["down_url"] !== ""))?($data["down_url"]):""); else: ?> <?php echo ($data["music_down"]); endif; ?>">
						<a href="#" class="input-group-addon up_music" id="down-music"  rel_url="#music-down" rel_fileid="#down_file_id">
							<span class="fa fa-cloud-upload"></span>
						</a>
						<div class="upload-progr"><div class="up-progress"><div class="upload-bar"></div></div></div>
					</div> 
				</div>
				<span class="help-block">留空同试听地址</span>
			</div>
			<?php echo hook('upload',array('type'=>'song'));?>
    		<div class="form-group">
    			<input type="hidden" name="status" value="<?php echo ((isset($data["status"]) && ($data["status"] !== ""))?($data["status"]):''); ?>">       		
    			<input type="hidden" name="id" value="<?php echo ((isset($data["id"]) && ($data["id"] !== ""))?($data["id"]):''); ?>">
            	<div class="col-sm-4 col-sm-offset-2">
                	<button class="btn btn-primary addall-post" target-form="form-horizontal" type="submit">确认添加</button>
            	</div>
        	</div>
        </form>
	</div>
</div>

 

	     </section>
	     <!-- 结束 页面内容-->
	  </section>
	</section>
	
	   	<div id="myModal" tabindex="-1" role="dialog"  class="modal fade">
      	<div class="modal-dialog">
         	<div class="modal-content radius-clear">
            	<div class="modal-header bg-primary">
               		<button type="button" data-dismiss="modal" aria-hidden="false" class="close modal-close">×</button>
               		<h4 id="myModalLabel" class="modal-title">模态窗</h4>
            	</div>
         		<div class="modal-body">         		        			
	            	<ul class="nav nav-tabs up-show">
	                    <li class="active"><a data-toggle="tab" href="#locl">本地上传</a>
	                    </li>
	                    <!--li class=""><a data-toggle="tab" href="#long-down">远程下载</a>
	                    </li-->
	               	</ul>
	               	
	               	<div class="alert alert-info mt-lg modal-tip"></div>
            	
        			<div class="tab-content b0 p0 up-show">                       
                    	<div class="tab-pane fade active in" id="locl">							
							
							<div class="row">
	                           <div class="col-md-4" id="f-btn-up"></div>
	                           <div class="col-md-4 col-md-offset-4 text-right">服务器最大允许:<?php echo ini_get('upload_max_filesize');?></div>
	                        </div>
                		
                			<div id="fileQueue" class="row" >
                           	</div>
                		</div>
                		<div class="tab-pane fade" id="long-down">
                         
								<div class="form-group">
	                              <label class="col-lg-2 control-label">下载地址</label>
	                              <div class="col-lg-8">
	                                 <input type="text" name="url" id="down_url" class="form-control" >
	                              </div>
	                              <div class="col-lg-2">
	                                 <button  class="btn btn-primary ajax-down" target-form="file-down" >下载</button>
	                              </div>
	                           </div>                    
                       		<div  class="row clearfix" >
                       			<div class="col-md-12">
                       				<div class="clearfix bb">
                       					<span class="pull-left mv down-filename"></span>
                       					<span class="pull-right mv down-bt">等待操作...</span>
                       				</div>
                       			</div>                       			                      			
                				<div class="col-md-12">
					                 <div class="progress progress-striped mt down-progress" style="display:none;">
			                    		<div class="progress-bar down-bar progress-bar-info" aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" role="progressbar">
			                         		<span class="sr-on" style="width:20px;">0%</span>
			                         	</div>
			                    	</div>
                             	</div>
                           	</div>
                        </div>
					</div>
					<div id="show-cover" class="mt" style="display:none;">
                    	<img  class="img-responsive p-sm b block-center" alt="Image" src="">                      
                    </div>
            	</div>
            	<div class="modal-footer">
               		<button type="button" data-dismiss="modal" class="btn btn-default modal-close">关闭</button>
               		<!--button type="button" class="btn btn-primary">保存</button-->
            	</div>
         	</div>
      	</div>
   	</div>
	<!-- END 模态-->
    <script type="text/javascript">
	var JY = window.JY = {
		"ROOT"   : "",
		"APP"    : "/admin.php?s=", 
		"PUBLIC" : "/Public", 
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>",
		"MODEL"  : ["<?php echo C('URL_MODEL');?>","<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	};
    function clearCache() {$.get('<?php echo U('Index/clearCache');?>',function(data){topAlert(data.info,'success');});}
    </script>
    <script type="text/javascript" src="/Public/Admin/js/JYmusic.js"></script>
   	<script type="text/javascript" src="/Public/static/jquery.slimscroll.min.js"></script>
   	<script type="text/javascript" src="/Public/Admin/js/app.js?v=0.1"></script>
   	
<script type="text/javascript" src="/Public/static/bootstrap-3.1.1/tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/other.js?v=0.1"></script>
<script type="text/javascript">			
highlight_subnav("<?php echo U('Songs/index');?>");		
var findUrl		=	"<?php echo U('Ajax/findData');?>",
	savePath 	= 	"<?php echo trim(C('ADMIN_UPMUSIC_PATH'));?>",
	savePicPath	=	"<?php echo trim(C('ADMIN_UPPIC_PATH'));?>";

$(function () {		
	<?php if(!empty($data['server_id'])): ?>showServer(<?php echo ($data['server_id']); ?>);
	<?php else: ?>
	showServer(<?php echo C('DT_SERVER_ID');?>);<?php endif; ?>
		

	$('#tagsinput').tagsinput({maxTags: 5});
	$(document).on("click",'.add-tag', function(e){
		var tag = $(this).text();
		$('#tagsinput').tagsinput('add',tag);
		$(this).addClass('disabled').attr('autocomplete','off');
	});
	
	$('.find-tag').click(function () {	
		if($('.add-tag').length){
			$('.tag-box').slideDown('normal');
		}else{
			var box = $('.tag-content');
			box.html('<p class="csspinner ringed">正在获取数据.....</p>');
			$('.tag-box').slideDown('normal');
			$.get("<?php echo U('Tag/showTag');?>", function(data){			
				box.html(data);
				box.slimScroll({ height: '200px'});
			});	
		}		
	});	
	$('.tag-close').click(function () {	$('.tag-box').slideUp("slow");});
	
	$('#all-form').submit(function(e){
		e.preventDefault();
		var that = $(this);
		$.post(that.attr('action'),that.serialize(),function(data){
			if (data.status){
				var song = '<div class="form-group">'+
					'<label class="col-sm-2 control-label"><span class="text-success">添加成功</span></label>'+
					'<div class="col-sm-4">'+			
						'<input  type="text"  disabled="value" value="'+data.name+'" class="form-control">'+				
					'</div>'+
				'</div>';
				$('#show-song').append(song);
				$("input[name='name']").val("");
				$("input[name='cover_url']").val("");
				$("input[name='listen_url']").val("");
				$("input[name='down_url']").val("");				
			}else{
				topAlert(data.info);
			}
	
		})		
		
	})
})

function showServer($id){	
	var that = $('#server-'+$id)	
	if ( that.length > 0){		
		that[0].selected = true;
	}else{
		$('#no-server')[0].selected = true;
	}
}
</script>


</body>

</html>