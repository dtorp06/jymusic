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
   
<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-fileinput/css/fileinput.css">	

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
			
<h3>曲风管理</h3>
<div class="panel panel-default">
	<div class="panel-heading"><?php echo isset($data['id'])?'编辑':'新增';?>曲风</div>
 	<div class="panel-body">
		<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo U();?>" name="songs"  method="post">													
			<div class="form-group">	
				<label class="col-sm-2 control-label">曲风名称</label>
				<div class="col-sm-2">
					<input  type="text" name="name" class="form-control" value="<?php echo ((isset($data["name"]) && ($data["name"] !== ""))?($data["name"]):''); ?>" >					
				</div>
				<span class="help-inline">此项不能为空</span>	
		    </div>
			<div class="form-group">	
				<label class="col-sm-2 control-label">封面地址</label>
				<div class="col-sm-4 mr-xs upimg-inner" style="position:relative;">	
					<input type="hidden" name="cover_id" 	id="img_file_id" value="">
					<input type="text" class="form-control" name="cover_url" id="cover"  value="<?php echo ((isset($data["cover_url"]) && ($data["cover_url"] !== ""))?($data["cover_url"]):""); ?>">			
					<div class="upload-progr">
						<div class="up-progress"><div class="upload-bar"></div></div>
					</div>
				</div>	
				<div class="pull-left mr-sm">
					<a href="javascript:;"  class="up_pic" id="up-img">选择图片</a>
				</div>	
				<?php if(!empty($data['cover_url'])): ?><div class="pull-left  mr-sm">		
					<a href="javascript:;" class="btn btn-success look_pic" >预览</a>		
				</div><?php endif; ?>	
				<span class="help-block">本地上传自动获取URL,可填写外链</span>
			</div>
    		<?php echo hook('upload',array('type'=>'img'));?> 
			<div class="form-group">
				<label class=" col-sm-2  control-label">上级曲风</label>
				<div class="col-sm-3">
	    			<select name="pid" class="form-control">
	        		<?php if(is_array($Genres)): $i = 0; $__LIST__ = $Genres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$genre): $mod = ($i % 2 );++$i;?><option <?php if(!empty($data)): if($data['pid'] == $genre['id'] ): ?>selected='selected'<?php endif; endif; ?> value="<?php echo ($genre["id"]); ?>"><?php echo ($genre["title_show"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	    			</select>	
				</div>
				<p class="help-block">所属的上级曲风</p>
			</div>		
    		<div class="form-group">	
    			<label class="col-sm-2 control-label">是否推荐</label>
    			<div class="col-sm-6 controls">
					<input class="hide" name="recommend" value="<?php echo ((isset($data['recommend'] ) && ($data['recommend'] !== ""))?($data['recommend'] ):'0'); ?>">
					<div class="switch-wrapper">
						<span class="switch-enable">是</span>
						<span class="switch-disable selected">否</span>
					</div>
					<?php if(isset($data)): if($data["recommend"] == 1): ?><script type="text/javascript">
							$('.switch-disable').removeClass('selected');
							$('.switch-enable').addClass('selected');
						</script><?php endif; endif; ?>
                </div>							
    		</div>   								 
									
    		<div class="form-group">
    			<input type="hidden" name="status" value="<?php echo ((isset($data["status"]) && ($data["status"] !== ""))?($data["status"]):''); ?>">
    			<input type="hidden" name="id" value="<?php echo ((isset($data["id"]) && ($data["id"] !== ""))?($data["id"]):''); ?>">      		
            	<div class="col-sm-4 col-sm-offset-2">
                	<button class="btn btn-default" type="button" onclick="javascript:history.back(-1);return false;">取消</button>
                	<button class="btn btn-primary ajax-post" target-form="form-horizontal" type="submit">保存</button>
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
   	
<script type="text/javascript" src="/Public/static/bootstrap-fileinput/js/fileinput.js"></script>
<script type="text/javascript"  src="/Public/Admin/js/other.js"></script>
<script type="text/javascript">
	//导航高亮
	highlight_subnav("<?php echo U('Songs/index');?>","<?php echo U('Genre/index');?>");
	var savePicPath	=	"<?php echo trim(C('ADMIN_UPPIC_PATH'));?>";
</script>

</body>

</html>