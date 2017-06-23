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
			
<h3 class="col-md-12">网站设置</h3>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="nav nav-pills">
			   		<?php if(is_array(C("CONFIG_GROUP_LIST"))): $i = 0; $__LIST__ = C("CONFIG_GROUP_LIST");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('group?id='.$key);?>"><?php echo ($group); ?>配置</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					<li class="active"><a href="<?php echo U('view');?>">视图配置</a></li>				
				</ul>
			</div>
		
			<div class="panel-body">										
				<ul class="nav nav-tabs">
                   <li class="active"><a data-toggle="tab" href="#theme">主题设置</a> </li>
                   <li class=""><a data-toggle="tab" href="#Home">Home模块设置</a></li>
                   <li class=""><a data-toggle="tab" href="#User">User模块设置</a></li>
                   <li class=""><a data-toggle="tab" href="#Article">Article模块设置</a></li>
                </ul>
               	<div class="tab-content mt-lg">
                   	<div class="tab-pane fade active in" id="theme">
						<div class="row">
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3">
			                  	<!-- START panel-->
			                  	<div class="panel panel-default">
			                     	<div class="panel-heading">
			                     		<em class="fa fa-credit-card text-info"></em> 
			                     		<a href="<?php echo ($vo['author']['url']); ?>"><?php echo ($vo['theme_title']); ?> </a>
			              				<?php if(($current_theme) == $vo['theme_name']): ?><a href="#" class="pull-right  hover" data-original-title="默认主题"data-placement="left" data-toggle="tooltip"><em class="fa fa-check-square-o  pull-right text-green"></em></a>
			                     		<?php else: ?>
			                     		<a href="#" class="pull-right  hover" data-original-title="删除主题"data-placement="left" data-toggle="tooltip"><em class="fa fa-times-circle text-pink"></em></a><?php endif; ?>				                     		 
			                     	</div>
			                    	<div class="panel-body">
			                    		<div class="col-masonry">
						                  <img class="img-thumbnail img-responsive" width="100%"  src="<?php echo ($vo['cover']); ?>">
						               </div>
			                     	</div>
			                     	<div class="panel-footer clearfix">
				                    	<div class="btn-group pull-left previous">
					                        <button data-toggle="dropdown" data-play="rotateInUpRight" class="btn btn-default btn-sm dropdown-toggle">作者 <b class="caret"></b>
					                        </button>
					                        <ul class="dropdown-menu">
					                           <li><a href="<?php echo ($vo['author']['url']); ?>" target="_blank">作者：<?php echo ($vo['author']['name']); ?></a></li>
					                           <li><a href="#">Q Q：<?php echo ($vo['author']['qq']); ?></a></li>
					                           <li><a href="#">邮箱：<?php echo ($vo['author']['email']); ?></a></li>
					                        </ul>
					                    </div>
										
					                    <?php if(($current_theme) == $vo['theme_name']): ?><div class="pull-right pagination p0">
					                		<li class="previous disabled">
					                        <a class="btn btn-default btn-sm btn-success"  href="javascript:;">
					                           <small>启用</small>
					                        </a>
					                    	</li>
					                    </div>
					                    <?php else: ?> 
					                    <div class="pull-right">
					                        <a class="btn btn-default btn-sm btn-success using-theme" href="<?php echo U('view',array('theme'=>$vo['dir']));?>">
					                           <small>启用</small>
					                        </a>
					                    </div><?php endif; ?>

				                    </div>
			                  	</div>
			               	</div><?php endforeach; endif; else: echo "" ;endif; ?>
			            </div>
              		</div>
                	<div class="tab-pane fade" id="Home">
                		<form class="form-horizontal home-form" action="<?php echo U('homemodule');?>"  method="post">
							<div class="form-group">											
								<label class="col-sm-2 control-label">URL访问模式</label>							
								<div class="col-sm-2">
									<select style="width:auto" class="form-control" name="URL_MODEL">
										<option value="0" <?php if(($home_conf['URL_MODEL']) == "0"): ?>selected<?php endif; ?> >普通模式</option>
										<option value="1" <?php if(($home_conf['URL_MODEL']) == "1"): ?>selected<?php endif; ?> >PATHINFO 模式</option>
										<option value="2" <?php if(($home_conf['URL_MODEL']) == "2"): ?>selected<?php endif; ?> >REWRITE  模式</option>
										<option value="3" <?php if(($home_conf['URL_MODEL']) == "3"): ?>selected<?php endif; ?> >兼容模式</option>		
									</select>
								</div>
								<span class="help-inline">REWRITE 重写模式，确保对应服务器规则文件</span>					
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">静态缓存</label>							
								<div class="col-sm-2">
									<select style="width:auto" class="form-control" name="HTML_CACHE_ON">
										<option value="0">关闭</option>
										<option value="1" <?php if(($home_conf['HTML_CACHE_ON']) == "1"): ?>selected<?php endif; ?> >开启</option>	
									</select>
								</div>
								<span class="help-inline">此功能配合规则可以达到静态网页功能，需要更多储存空间</span>					
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">缓存有效期</label>							
								<div class="col-sm-2">
									<input type="text" class="form-control" name="HTML_CACHE_TIME" value="<?php echo ($home_conf['HTML_CACHE_TIME']); ?>">
								</div>
								<span class="help-inline">更新缓存间隔时间，单位-秒</span>						
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">缓存文件后缀</label>							
								<div class="col-sm-1">
									<input type="text" class="form-control" name="HTML_FILE_SUFFIX" value="<?php echo ($home_conf['HTML_FILE_SUFFIX']); ?>">
								</div>
								
								<span class="help-inline">缓存文件的文件后缀.html或者.shtml</span>							
							</div>							
							<hr>
							<div class="form-group">      		
			            		<div class="col-sm-4 col-sm-offset-2">
			                		<button class="btn btn-default" type="button" onclick="javascript:history.back(-1);return false;">取消</button>
			                		<button class="btn btn-primary ajax-post" target-form="home-form" type="submit">保存</button>
			            		</div>
		        			</div>					
							
						</form>	
                	</div>
                	<div class="tab-pane fade" id="User">
                		<form class="form-horizontal user-form" action="<?php echo U('usermodule');?>"  method="post">
							<div class="form-group">											
								<label class="col-sm-2 control-label">URL访问模式</label>							
								<div class="col-sm-2">
									<select style="width:auto" class="form-control" name="URL_MODEL">
										<option value="0" <?php if(($user_conf['URL_MODEL']) == "0"): ?>selected<?php endif; ?> >普通模式</option>
										<option value="1" <?php if(($user_conf['URL_MODEL']) == "1"): ?>selected<?php endif; ?> >PATHINFO 模式</option>
										<option value="2" <?php if(($user_conf['URL_MODEL']) == "2"): ?>selected<?php endif; ?> >REWRITE 模式</option>
										<option value="3" <?php if(($user_conf['URL_MODEL']) == "3"): ?>selected<?php endif; ?> >兼容模式</option>		
									</select>
								</div>
								<span class="help-inline">REWRITE 重写模式，确保对应服务器规则文件</span>				
							</div>
							
							<hr>
							<div class="form-group">      		
			            		<div class="col-sm-4 col-sm-offset-2">
			                		<button class="btn btn-default" type="button" onclick="javascript:history.back(-1);return false;">取消</button>
			                		<button class="btn btn-primary ajax-post" target-form="user-form" type="submit">保存</button>
			            		</div>
		        			</div>					
						</form>	
                	</div>

                	<div class="tab-pane fade " id="Article">
						<form class="form-horizontal article-form" action="<?php echo U('articlemodule');?>"  method="post">
							<div class="form-group">											
								<label class="col-sm-2 control-label">URL访问模式</label>							
								<div class="col-sm-2">
									<select style="width:auto" class="form-control" name="URL_MODEL">
										<option value="0" <?php if(($article_conf['URL_MODEL']) == "0"): ?>selected<?php endif; ?> >普通模式</option>
										<option value="1" <?php if(($article_conf['URL_MODEL']) == "1"): ?>selected<?php endif; ?>>PATHINFO 模式</option>
										<option value="2" <?php if(($article_conf['URL_MODEL']) == "2"): ?>selected<?php endif; ?> >REWRITE 模式</option>
										<option value="3" <?php if(($article_conf['URL_MODEL']) == "3"): ?>selected<?php endif; ?> >兼容模式</option>		
									</select>
								</div>
								<span class="help-inline">REWRITE 重写模式，确保对应服务器规则文件</span>				
							</div>
							<div class="form-group">											
								<label class="col-sm-2 control-label">静态缓存</label>							
								<div class="col-sm-2">
									<select style="width:auto" class="form-control" name="HTML_CACHE_ON">
										<option value="0">关闭</option>
										<option value="1" <?php if(($article_conf['HTML_CACHE_ON']) == "1"): ?>selected<?php endif; ?> >开启</option>	
									</select>
								</div>
								<span class="help-inline">此功能配合规则可以达到静态网页功能，需要更多储存空间</span>					
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">缓存有效期</label>							
								<div class="col-sm-2">
									<input type="text" class="form-control" name="HTML_CACHE_TIME" value="<?php echo ($article_conf['HTML_CACHE_TIME']); ?>">
								</div>
								<span class="help-inline">更新缓存间隔时间，单位-秒</span>						
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">缓存文件后缀</label>							
								<div class="col-sm-1">
									<input type="text" class="form-control" name="HTML_FILE_SUFFIX" value="<?php echo ($article_conf['HTML_FILE_SUFFIX']); ?>">
								</div>
								
								<span class="help-inline">缓存文件的文件后缀.html或者.shtml</span>							
							</div>	
							<hr>
							<div class="form-group">      		
			            		<div class="col-sm-4 col-sm-offset-2">
			                		<button class="btn btn-default" type="button" onclick="javascript:history.back(-1);return false;">取消</button>
			                		<button class="btn btn-primary ajax-post" target-form="article-form" type="submit">保存</button>
			            		</div>
		        			</div>					
						</form>	

                	</div>	                
        		</div>			
				
			</div>		
		</div>
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
   	
<script type="text/javascript">
//导航高亮
highlight_subnav("<?php echo U('Config/group');?>");
$('.using-theme').click(function () {
	var url = $(this).attr('href');
	$.post(url, function(data){
   		if (data.status == 1){
            topAlert(data.info + ' 页面即将自动跳转~','success');
            setTimeout(function(){
                if (data.url) {
                    location.href=data.url;
                }else{
                    location.reload();
                }
            },1500);
   		}else{
   			topAlert(data.info);
   		}   		
	});
	return false;
});
</script>

</body>

</html>