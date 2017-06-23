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
			<div class="panel-heading">邮件配置</div>		
			<div class="panel-body">
				<form class="form-horizontal" id="email-form" action="<?php echo U('mod');?>"  method="post">						
							<div class="form-group">											
								<label class="col-sm-2 control-label">邮件发送方式</label>							
								<div class="col-sm-4">
									<select id="form_email_sendtype" class="form-control" name="email_sendtype">
				      		      		<option <?php if(($config['email_sendtype']) != "mail"): ?>selected="selected"<?php endif; ?> value="smtp">远程smtp</option>
				      		      		<option value="mail" <?php if(($config['email_sendtype']) == "mail"): ?>selected="selected"<?php endif; ?> value="smtp">本地mail</option>
				      		      	</select>
								</div>							
							</div>							
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">SMTP地址</label>	
								<div class="col-sm-4">
									<input type="text" class="form-control" value="<?php echo ((isset($config['email_host']) && ($config['email_host'] !== ""))?($config['email_host']):'smtp.admin.com'); ?>" name="email_host">
									<span class="help-block">发送邮箱的smtp地址。如: smtp.gmail.com或smtp.qq.com</span>
								</div>
								
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">是否启用SSL连接</label>	
								<div class="col-sm-6">            	
      	        					<label><input type="radio" <?php if(($config['email_ssl']) != "1"): ?>checked="checked"<?php endif; ?>  value="0" name="email_ssl">否 </label>            		
      	        					<label><input type="radio" <?php if(($config['email_ssl']) == "1"): ?>checked="checked"<?php endif; ?> value="1" name="email_ssl">是 </label>            		
 									<span class="help-block">此选项需要服务器环境支持SSL（如果使用Gmail或QQ邮箱，请选择是）</span>
              					</div>											
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">端口</label>	
								<div class="col-sm-8">
									<input type="text" class="form-control" style="width:60px;" value="<?php echo ((isset($config['email_port']) && ($config['email_port'] !== ""))?($config['email_port']):'25'); ?>" name="email_port">
									<p class="help-block">smtp的端口默认为25。具体请参看各STMP服务商的设置说明 （如果使用Gmail或QQ邮箱，请将端口设为465）</p>
								</div>
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">服务器用户名</label>	
								<div class="col-sm-4">
									<input type="text" class="form-control" value="<?php echo ((isset($config['email_account']) && ($config['email_account'] !== ""))?($config['email_account']):'admin@admin.com'); ?>" name="email_account">
									<p class="help-block">邮箱地址请输入完整地址email@email.com格式</p>
								</div>									
							</div> 
	                		<div class="form-group">											
								<label class="col-sm-2 control-label">邮箱密码</label>							
								<div class="col-sm-3">
									<input type="password" class="form-control"  value="<?php echo ((isset($config['email_password']) && ($config['email_password'] !== ""))?($config['email_password']):'admin'); ?>" name="email_password">
								</div>							
							</div>							
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">发送者名称</label>	
								<div class="col-sm-3">
									<input type="text" class="form-control" value="<?php echo ((isset($config['email_sender_name']) && ($config['email_sender_name'] !== ""))?($config['email_sender_name']):'JYmusic音乐程序'); ?>" name="email_sender_name">
								</div>
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">发送者邮箱</label>	
								<div class="col-sm-3">
									<input type="text" class="form-control" value="<?php echo ((isset($config['email_sender_email']) && ($config['email_sender_email'] !== ""))?($config['email_sender_email']):'admin@admin.com'); ?>" name="email_sender_email">
									<p class="help-block">邮件中显示的发送者邮箱</p>
								</div>										
							</div>
							
							<div class="form-group">											
								<label class="col-sm-2 control-label">测试邮邮箱</label>	
								<div class="col-sm-3">
									<input type="text" class="form-control" value="" name="sendto_email">
									<p class="help-block"><a href="javascript:;" id="send-email">点击测试发送</a></p>
								</div>
							</div>
									
							<div class="form-group">      		
			            		<div class="col-sm-4 col-sm-offset-2">
			                		<button class="btn btn-default" type="button" onclick="javascript:history.back(-1);return false;">取消</button>
			                		<button class="btn btn-primary ajax-post" target-form="form-horizontal" type="submit">保存</button>
			            		</div>
		        			</div>
				</form>	
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
	highlight_subnav("<?php echo U('Email/index');?>");
	$('#send-email').click(function () {
		var self = $(this),
		query = $('#email-form').serialize();
		
		self.text('正在发送...');
		$.post('<?php echo U('test');?>',query).success(function(data){
			if(data.status){
				topAlert(data.info,'success');
			}else{
				topAlert(data.info);				
			}
			self.text('点击测试发送');
		});
	})
</script>

</body>

</html>