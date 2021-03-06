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
				
    	<li >
		<a href="#" title="资讯管理" data-toggle="collapse-next" class="has-submenu">
         	<em class="fa fa-plus-square"></em>
         	<span class="item-text">资讯管理</span>
      	</a>
 		<ul class="nav side-sub-menu collapse in">
			<li class="<?php if((CONTROLLER_NAME) == "Category"): ?>current<?php endif; ?>">
				<a class="item" href="<?php echo U('Category/index');?>">分类管理</a>				
			</li>
 			<li <?php if((ACTION_NAME) == "mydocument"): ?>class="current"<?php endif; ?>><a class="item" href="<?php echo U('article/mydocument');?>">全部资讯</a></li>
 			<?php if(($show_draftbox) == "1"): ?><li <?php if((ACTION_NAME) == "draftbox"): ?>class="current"<?php endif; ?>><a class="item" href="<?php echo U('article/draftbox');?>">草稿箱</a></li><?php endif; ?>
			<li <?php if((ACTION_NAME) == "draftbox"): ?>class="examine"<?php endif; ?>><a class="item" href="<?php echo U('article/examine');?>">待审核</a></li>
			<?php if(($show_recycle) == "1"): ?><li>
				<a class="accordion-toggle" href="<?php echo U('article/recycle');?>">
					<span class="item-text">回收站</span>
				</a>
			</li><?php endif; ?>
 		</ul>
 	</li>

    <!-- 分类导航 -->
   	<li>
		<a class="has-submenu" data-toggle="collapse-next" href="#">
			<em class="fa fa-plus-square"></em>
			<span class="item-text">分类列表</span>
			<span class="arrow"></span>
		</a>
        <ul  class="nav side-sub-menu  collapse in">

        	<!-- 分类列表 -->
        	<!-- 一级子菜单 -->
	        <?php if(is_array($nodes)): $i = 0; $__LIST__ = $nodes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i; if(!empty($sub_menu)): ?><li class="">
				<a class="item" href="<?php echo (U($sub_menu["url"])); ?>"><?php echo ($sub_menu["title"]); ?></a>
				<!-- 一级子菜单 -->
				<?php if(isset($sub_menu['_child'])): ?><ul class="subitem">
                	<?php if(is_array($sub_menu['_child'])): foreach($sub_menu['_child'] as $key=>$two_menu): ?><li class="hover"> 
                    	<a class="item" href="<?php echo U('/Article/index','cate_id='.$two_menu['id']);?>"><?php echo ($two_menu["title"]); ?></a>
                    	<!-- 二级子菜单 -->
                    	<?php if(isset($two_menu['_child'])): ?><ul class="subitem">
                        	<?php if(is_array($two_menu['_child'])): foreach($two_menu['_child'] as $key=>$three_menu): ?><li>
                            	<a class="item" href="<?php echo U('/Article/index','cate_id='.$three_menu['id']);?>"><?php echo ($three_menu["title"]); ?></a>
                            	<!-- 三级子菜单 -->
                            	<?php if(isset($three_menu['_child'])): ?><ul class="subitem">
                                	<?php if(is_array($three_menu['_child'])): foreach($three_menu['_child'] as $key=>$four_menu): ?><li>
                                    	<a class="item" href="<?php echo U('/Article/index','cate_id='.$four_menu['id']);?>"><?php echo ($four_menu["title"]); ?></a>
                                    </li><?php endforeach; endif; ?>
                                </ul><?php endif; ?>
                            </li><?php endforeach; endif; ?>
                        </ul><?php endif; ?>                      
                    </li><?php endforeach; endif; ?>
                </ul>
                <!-- end 二级子菜单 --><?php endif; ?>
            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    		<!-- end 一级子菜单 -->
        </ul>
    </li>
    <!-- 回收站 -->
	<li >
		<a href="#" title="关于网站" data-toggle="collapse-next" class="has-submenu">
         	<em class="fa fa-plus-square"></em>
         	<span class="item-text">关于网站</span>
      	</a>
 		<ul class="nav side-sub-menu collapse in">
			
			<li >
				<a class="item" href="<?php echo U('Site/index');?>">关于我们</a>				
			</li>
			<li >
				<a class="item" href="<?php echo U('Site/index?type=help');?>">网站帮助</a>				
			</li>
 		</ul>
 	</li>

<script>
    $(function(){
        $(".side-sub-menu li").hover(function(){
            $(this).addClass("hover");
        },function(){
            $(this).removeClass("hover");
        });
    })
</script>




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
			
<h3 class="col-md-7"><?php if(ACTION_NAME == 'help' ): ?>网站帮助<?php else: ?> 关于我们<?php endif; ?></h3>

<div class="row">
    <div class="col-lg-12">
		<div class="panel panel-default">
    	    <div class="panel-heading ">文档列表
				<div class="btn-group ml-lg">
       				[<a class="mr-sm ml-sm <?php if(($type) == "about"): ?>text-danger<?php endif; ?>" href="<?php echo U('index?type=about');?>">关于</a>
					
					<a class="ml-sm mr-sm <?php if(($type) == "help"): ?>text-danger<?php endif; ?>" href="<?php echo U('index?type=help');?>">帮助</a>	
						
       				]
       			</div>
       			<div class="btn-group pull-right">
	       			<a class="btn btn-labeled btn-success" href="<?php echo U('add?type='.$type);?>">新增</a>
	       			<a class="btn btn-labeled btn-success ajax-post "  href="<?php echo U('setStatus',array('status'=>1));?>" target-form="ids">启用</a>
	       			<a class="btn btn-labeled btn-danger ajax-post "  href="<?php echo U('setStatus',array('status'=>0));?>" target-form="ids">禁用</a>                
	                <a class="btn btn-labeled btn-danger ajax-post" href="<?php echo U('del');?>" target-form="ids">删除</a>
	         	</div>      			
       		</div>
    		<div class="table-responsive home_content">
        		<table class="table table-striped table-bordered table-hover">           
            		<thead>
                		<tr>
                			<th style="width: 5%" class="check-all">
                          		<div data-toggle="tooltip" data-title="全选" class="checkbox c-checkbox">
                             		<label>
                                		<input type="checkbox">
                                		<span class="fa fa-check"></span>
                             		</label>
                          		</div>
                       		</th> 
                        	<th>ID</th>
        					<th>标示</th>
        					<th>标题</th>
							<th>内容</th>
        					<th style="width: 5%">状态</th>
                     		<th>添加时间</th>
                     		<th class="text-center">操作</th>
                      	</tr>
                    </thead>
                    <tbody>
                    	<?php if(!empty($list)): if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><tr>
                        	<td>
                          		<div class="checkbox c-checkbox">
                             		<label>
                                	<input type="checkbox" class="ids" value="<?php echo ($data["id"]); ?>" name="ids[]">
                                	<span class="fa fa-check"></span>
                             		</label>
                          		</div>
                       		</td>
                        	<td><?php echo ($data["id"]); ?></td>
        					<td><?php echo ($data["name"]); ?></td>
        					<td><?php echo ($data["title"]); ?></td>
        					<td><?php echo (msubstr($data["content"],0,30)); ?></td>                       	                       	
        					<td><?php echo (get_status_title($data["status"])); ?></td>
                        	<td><?php echo (time_format($data["create_time"],'Y-m-d')); ?></td>
                    		<td class="text-center">
	                            <a class="btn btn-labeled btn-sm" href="<?php echo U('mod?type='.$data['appname'].'&id='.$data['id']);?>"><em class="fa fa-edit"></em></a>
	                            <a class="btn btn-labeled btn-sm btn-danger btn-del" url="<?php echo U('del?ids='.$data['id']);?>"><em class="fa fa-times"></em></a>
                         	</td>
                      	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
        				<?php else: ?>
        				<td colspan="11" class="text-center">暂时还没有内容! </td><?php endif; ?>
                    </tbody>
                </table>
    		</div>
  
    		<!-- 结束 表格 -->
    		<div class="panel-footer">
    			<div class="row">
					<ul class="pagination">
					<?php echo ($_page); ?>
					</ul>
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
highlight_subnav("<?php echo U('Article/index');?>",<?php if(($type) == "about"): ?>"<?php echo U('Site/index');?>"<?php else: ?>"<?php echo U('Site/index?type=help');?>"<?php endif; ?>);

$(function(){
	//搜索功能
	$("#search").click(function(){
		var url = $(this).attr('url');
		var status = $("#sch-sort-txt").attr("data");
        var query  = $('.search-form').find('input').serialize();
        query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
        query = query.replace(/^&/g,'');
		if(status != ''){
			query += 'status=' + status + "&" + query;
        }
        if( url.indexOf('?')>0 ){
            url += '&' + query;
        }else{
            url += '?' + query;
        }
		window.location.href = url;
	});

})
</script>

</body>

</html>