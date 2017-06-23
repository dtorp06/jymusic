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
			
<h3 class="col-md-3">歌曲管理</h3>
<i>上传歌曲到<?php echo C('SONGS_IMPORT_PATH');?>！<a href="http://bbs.jyuu.cn/forum.php?mod=viewthread&tid=75&extra=" target="_blank">点击此处查看教程</a></i>
<form id="import-form" method="post" class="form-horizontal" action="<?php echo U('songs/fileImport');?>"> 
<div class="row">	
	<div class="col-lg-12">
		
		<div class="panel panel-default">
	        <div class="panel-heading">
	            设置参数
	            <a class="pull-right" title="" data-toggle="tooltip" data-perform="panel-collapse" href="javascript:void(0);" data-original-title="显示/隐藏">
				<em class="fa fa-minus"></em>
				</a>
	        </div>
	     	<div class="panel-body">     		
	     		<div class="col-lg-3">      
		    		<div class="form-group">	
		    			<label class="col-sm-4 control-label">所属艺术家</label>
		    			<div class="col-sm-8">
		    				<div class="input-group">
		    					<input type="text" class="hide" id="artist-id" name="artist_id" value="0">	
		    					<input type="text" class="form-control" id="artist-name" name="artist_name"  value="">	
								<a href="#" class="input-group-addon ajax-find" rel="artist">
		                         	<span class="fa-search fa"></span>
		                    	</a>
		                    </div>
		    			</div>	
		            </div>
		            					
					<div class="form-group">	
		    			<label class="col-sm-4 control-label">所属专辑</label>
		    			<div class="col-sm-8">
		   					<div class="input-group">
		    					<input type="text"  class="hide" name="album_id" id="album-id" value="0">
		    					<input type="text" class="form-control"  name="album_name" id="album-name" value="">
								<a href="#" class="input-group-addon ajax-find" rel="album">
		                         	<span class="fa-search fa"></span>
		                    	</a>
		                    </div>
		    			</div>	
		    		</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">所属曲风</label>
						<div class="col-sm-8">
							<select name="genre_id" class="form-control">					
							<?php $_result=get_genre_tree();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$genre): $mod = ($i % 2 );++$i;?><option <?php if(!empty($data['genre_id'])): if($data['genre_id'] == $genre['id'] ): ?>selected='selected'<?php endif; endif; ?> value="<?php echo ($genre["id"]); ?>"><?php echo ($genre["title_show"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>					     
	         	</div>
				
				<div class="col-lg-3">
					<div class="form-group">	
						<label class="col-sm-4 control-label">所属服务器</label>
						<div class="col-sm-8">
							<select name="server_id" class="form-control">
							<option class="no-server" id="no-server" value="0">无服务器</option>
							<?php $_result=get_server();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><option id="server-<?php echo ($s['id']); ?>" data-listen="<?php echo ($s['listen_url']); ?>" data-down="<?php echo ($s['down_url']); ?>" value="<?php echo ($s["id"]); ?>">
									<?php echo ($s["name"]); ?>						
								</option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>	
		    		</div>	
				
		    		<div class="form-group">		
		    			<label class="col-sm-4 control-label">所属用户</label>
		    			<div class="col-sm-8 controls">	
		    				<input type="text" class="form-control" placeholder="填写会员ID"  name="up_uid"  value="">	                   
		    			</div>
		    	    </div>
					<div class="form-group">
						<label class="col-sm-4 control-label">推荐位置</label>
						<div class="col-sm-8">
							<select class="form-control" name="position"  id="batch-c">
								<option value="0">不推荐</option>
								<?php $positions = C('MUSIC_POSITION') ?>
								<?php if(is_array($positions)): foreach($positions as $k=>$pos): ?><option  value="<?php echo ($k); ?>"><?php echo ($pos); ?></option><?php endforeach; endif; ?>								
							</select>
						</div>
					</div>										     
	         	</div>
	         	
	         	<div class="col-lg-6">
					<div class="form-group">											
						<label class="col-sm-2 control-label">下载规则</label>	
						<div class="col-sm-10">
							<div class="checkbox c-checkbox inline mr-sm">					
								<label class="inline mr-sm">	
									<input type="checkbox" name="down_rule[group][]" value="0" <?php if(empty($data['down_rule']) OR in_array('0', $data['down_rule']['group']) ): ?>checked="true"<?php endif; ?> >
									<span class="fa fa-check"></span>
									游客
								</label> 
							</div>
							<div class="checkbox c-checkbox inline mr-sm">	
								<label class="inline mr-sm">
									<input type="checkbox" name="down_rule[group][]" value="1" <?php if(empty($data['down_rule']) OR in_array('1', $data['down_rule']['group']) ): ?>checked="true"<?php endif; ?> >
									<span class="fa fa-check"></span>
									普通会员
								</label>
							</div>
							<div class="checkbox c-checkbox inline mr-sm">	
								<label class="inline mr-sm">
									<input type="checkbox" name="down_rule[group][]" value="2" <?php if(empty($data['down_rule']) OR in_array('2', $data['down_rule']['group']) ): ?>checked="true"<?php endif; ?> >
									<span class="fa fa-check"></span>
									VIP会员
								</label> 
							</div>
							<div class="checkbox c-checkbox inline mr-sm">	
								<label class="inline mr-sm">
									<input type="checkbox" name="down_rule[group][]" value="3" <?php if(empty($data['down_rule']) OR in_array('3', $data['down_rule']['group']) ): ?>checked="true"<?php endif; ?> >
									<span class="fa fa-check"></span>
									认证音乐人
								</label> 
							</div>
						</div>											
					</div>
					<div class="form-group">						
		    			<label class="col-sm-2 control-label ">所需金币</label>
		    			<div class="col-sm-3 controls">
		    				<input type="text" class="form-control"  value="0" name="coin">
		    			</div>						
		    			<label class="col-sm-2 control-label pr0">下载音质</label>
		    			<div class="col-sm-3 controls">
		    				<input type="text" class="form-control"  value="320k" name="down_bit">
		    			</div>
		    			<span class="help-block"></span>
		    		</div>
				
	              	<div class="form-group ">						
		    			<label class="col-sm-2 control-label ">试听次数</label>
		    			<div class="col-sm-3 controls">
		    				<input type="text" class="form-control" placeholder="整数/随机数：格式 1-200"   value="200-1000" name="listens">
		    			</div>
						
		    			<label class="col-sm-2 control-label pr0">下载次数</label>
		    			<div class="col-sm-3 controls">
		    				<input type="text" class="form-control" placeholder="整数/随机数：格式 1-200"   value="200-1000" name="download">
		    			</div>
		    		</div>    		
	   			</div>
	   		
	   		</div>  
	   </div>	   
	</div>
</div>

<div class="row">
    <div class="col-lg-12">
    	<div class="panel panel-default">
       		<div class="panel-heading ">批量导入歌曲
       			<a id="createGenreDir" class="btn btn-labeled btn-success " href="javascript:;">批量创建曲风目录</a>
       			<div class="btn-group pull-right">
       				<a class="btn btn-labeled" href="<?php echo U('songs/bulkImport',array('type'=>'refresh'));?>">刷新</a>
	       			<a id="import" class="btn btn-labeled btn-success " href="javascript:;">全部导入</a>
	         	</div>			
       		</div>
    		<div class="table-responsive">
    			   															   
			        <table class="table table-striped table-bordered table-hover"> 
			            <thead>
			            	<tr class="form-inline">
							</tr>
			                <tr>
			               		<th style="width: 5%" class="check-all">
                          		<div data-toggle="tooltip" data-title="全选" class="checkbox c-checkbox">
                             		<label>
                                		<input type="checkbox" checked="chedked" >
                                		<span class="fa fa-check"></span>
                             		</label>
                          		</div>
                       			</th> 
			                    <th>文件名称</th>
			                    <th>文件大小</th>
			                    <th>状态</th>
			                </tr>
			            </thead>
			            <tbody>			            
			            	<?php if(empty($info)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		                       		<td>
		                          		<div class="checkbox c-checkbox">
		                             		<label>
		                                	<input type="checkbox" class="ids" checked="chedked"  value="<?php echo ($i); ?>" name="tables[]">
		                                	<span class="fa fa-check"></span>
		                             		</label>
		                          		</div>
		                       		</td>		                       			                    	
			                        <td><?php echo (file_name_convert($vo['fileName'])); ?></td>
			                        <td><?php echo format_bytes(filesize($vo['path']));?></td>			                       
			                        <td class="info">未导入</td>
			                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			                <?php else: ?>
			            		<td colspan="6" class="text-center"><?php echo ($info); ?></td><?php endif; ?>
			            </tbody>
			        </table>
		       
    		</div> 		
    	</div>
	</div>
</div>
</form>

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
   	
<script type="text/javascript"  src="/Public/Admin/js/other.js"></script>
<script type="text/javascript">
	var findUrl="<?php echo U('Ajax/findData');?>";
	highlight_subnav("<?php echo U('Songs/bulkImport');?>");	
    (function($){
        var $form = $("#import-form"), $export = $("#import"), tables;
        $export.click(function(){
            $export.parent().children().addClass("disabled");
            $export.html("正在发送导入请求...");
            $.post(
                $form.attr("action"),
                $form.serialize(),
                function(data){
                    if(data.status){
                        tables = data.tables;
                        $export.html(data.info + "开始导入，请不要关闭本页面！");
                        backup(data.tab);
                        window.onbeforeunload = function(){ return "正在导入数据，请不要关闭！" }
                    } else {
                        topAlert(data.info,'alert-error');
                        $export.parent().children().removeClass("disabled");
                        $export.html("全部导入");
                    }
                },
                "json"
            );
            return false;
        });

        function backup(tab, status){
        	//alert(tab);
            status && showmsg(tab.id, "开始导入...");
            $.get($form.attr("action"), tab, function(data){
                if(data.status){
                    showmsg(tab.id, data.info);
                    if(!$.isPlainObject(data.tab)){
                        $export.parent().children().removeClass("disabled");
                        $export.remove();
                        window.onbeforeunload = function(){ return null }
                        return;
                    }
					if (data.url){
						setTimeout(function(){
							window.location.href=data.url;
						
						},1500)
					}
                    backup(data.tab, tab.id != data.tab.id);
                } else {
                    topAlert(data.info,'alert-error');
                    $export.parent().children().removeClass("disabled");
                    $export.html("立即导入");
                }
            }, "json");

        }

        function showmsg(id, msg){
            $form.find("input[value=" + tables[id] + "]").closest("tr").find(".info").html(msg);
        }
        
       	$('#createGenreDir').click(function(){
            $.post(
                "<?php echo U('Songs/createGenreDir');?>",
                function(data){
					topAlert(data.info,'success');
                },
                "json"
            );
        });
    })(jQuery);
</script>


</body>

</html>