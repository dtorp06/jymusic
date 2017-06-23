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
			
<h3 class="col-md-7">文档列表(<?php echo ($_total); ?>)</h3>
<div class="col-md-5">
	<div class="input-group m-b search-form">
    	<div class="input-group-btn">
        	<span class="btn btn-default dropdown-toggle" id="sch-sort-txt" data-toggle="dropdown" data="<?php echo ($status); ?>"><?php if(get_status_title($status) == ''): ?>所有<?php else: ?>{:get_status_title($status)}<?php endif; ?>
            	<i class="fa fa-chevron-down"></i>
        	</span>
        	<ul class="dropdown-menu" id="sub-sch-menu">
            	<li><a href="javascript:void(0);" value="">所有</a></li>
            	<li><a href="javascript:void(0);" value="1">正常</a></li>
            	<li><a href="javascript:void(0);" value="0">禁用</a></li>
            	<li><a href="javascript:void(0);" value="2">待审核</a></li>
        	</ul>
        </div>
    	<input type="text" class="form-control" name="title" class="search-input" value="<?php echo I('title');?>">
   		<span class="input-group-btn">
       		<button class="btn btn-default" id="search" url="<?php echo U('article/mydocument','pid='.I('pid',0).'&cate_id='.$cate_id,false);?>" type="button"><span class="fa-search fa"></span></button>
    	</span>
    	<span class="input-group-btn search-dropdown" >
    		<button class="btn btn-default " type="button">高级<i class="fa fa-chevron-down"></i></button>
        </span>
        <div class="search-dropdown-con" style="display:none">
			<div class="row">
				<label>创建时间：</label>
                <input type="text" id="time-start" name="time-start" class="input-2x" value="" placeholder="起始时间" /> -
            	<div class="input-append date" id="datetimepicker"  style="display:inline-block">
            		<input type="text" id="time-end" name="time-end" class="input-2x" value="" placeholder="结束时间" />
            		<span class="add-on"><i class="icon-th"></i></span>
            	</div>
        	</div>
        	<div class="row" style="display:inline-block; margin-top:10px;" >
        		<label>创 建 者：</label>
                <input type="text" name="nickname" class="text input-2x" value="" placeholder="请输入用户名">
        	</div>
    	</div>
	</div>
</div>
<div class="row">
    <div class="col-lg-12">
    	<div class="panel panel-default">
       		<div class="panel-heading ">
				[
				<?php if(!empty($rightNav)): if(is_array($rightNav)): $i = 0; $__LIST__ = $rightNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a class="mr-sm ml-sm" href="<?php echo U('article/index','cate_id='.$nav['id']);?>"><?php echo ($nav["title"]); ?></a>
					<?php if(count($rightNav) > $i): ?><i class="fa fa-angle-double-right"></i><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				<?php if(isset($article)): ?>：<a class="mr-sm ml-sm" href="<?php echo U('article/index','cate_id='.$cate_id.'&pid='.$article['id']);?>"><?php echo ($article["title"]); ?></a><?php endif; ?>
				<?php else: ?>
				<?php if(empty($position)): ?>全部<?php else: ?><a class="mr-sm ml-sm" href="<?php echo U('article/index');?>">全部</a><?php endif; ?>
					<?php if(is_array(C("DOCUMENT_POSITION"))): foreach(C("DOCUMENT_POSITION") as $key=>$vo): if(($position) != $key): ?><a class="mr-sm ml-sm"  href="<?php echo U('article/index',array('position'=>$key));?>"><?php echo ($vo); ?></a><?php else: echo ($vo); endif; ?>&nbsp;<?php endforeach; endif; endif; ?>
				]
				<?php if(($allow) == "0"): ?>（该分类不允许发布内容）<?php endif; ?>
				<?php if(count($model) > 1): ?>[ 模型：<?php if(empty($model_id)): ?><strong>全部</strong><?php else: ?><a href="<?php echo U('article/index',array('pid'=>$pid,'cate_id'=>$cate_id));?>">全部</a><?php endif; ?>
					<?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($model_id) != $vo): ?><a href="<?php echo U('article/index',array('pid'=>$pid,'cate_id'=>$cate_id,'model_id'=>$vo));?>"><?php echo (get_document_model($vo,'title')); ?></a><?php else: ?><strong><?php echo (get_document_model($vo,'title')); ?></strong><?php endif; ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
				]<?php endif; ?>     			
       			<div class="btn-group pull-right">
               		<div class="btn-group">
        				<?php if(($allow) > "0"): ?><button class="btn btn-labeled btn-success document_add dropdown-toggle" data-toggle="dropdown"  <?php if(count($model) == 1): ?>url="<?php echo U('article/add',array('cate_id'=>$cate_id,'pid'=>I('pid',0),'model_id'=>$model[0]));?>"<?php endif; ?>>新 增
        						<?php if(count($model) > 1): ?><i class="fa fa-angle-down"></i><?php endif; ?>
        					</button>
        					<?php if(count($model) > 1): ?><ul class="dropdown-menu" role="menu">
        						<?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('article/add',array('cate_id'=>$cate_id,'model_id'=>$vo,'pid'=>I('pid',0)));?>"><?php echo (get_document_model($vo,'title')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        					</ul><?php endif; ?>
        				<?php else: ?>
        					<button class="btn btn-labeled btn-success disabled" >新 增
        						<?php if(count($model) > 1): ?><i class="btn-arrowdown"></i><?php endif; ?>
        					</button><?php endif; ?>
        			</div>
                    <button class="btn btn-labeled btn-success ajax-post" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>1));?>">启 用</button>
        			<button class="btn btn-labeled btn-danger ajax-post" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>0));?>">禁 用</button>
        			<button class="btn btn-labeled btn-success ajax-post" target-form="ids" url="<?php echo U("Article/move");?>">移 动</button>
        			<button class="btn btn-labeled btn-success ajax-post" target-form="ids" url="<?php echo U("Article/copy");?>">复 制</button>
        			<button class="btn btn-labeled btn-success ajax-post" target-form="ids" hide-data="true" url="<?php echo U("Article/paste");?>">粘 贴</button>
        			<input type="hidden" class="hide-data" name="cate_id" value="<?php echo ($cate_id); ?>"/>
        			<input type="hidden" class="hide-data" name="pid" value="<?php echo ($pid); ?>"/>
        			<button class="btn btn-labeled btn-danger ajax-post confirm" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>-1));?>">删 除</button>
        			<!-- <button class="btn document_add" url="<?php echo U('article/batchOperate',array('cate_id'=>$cate_id,'pid'=>I('pid',0)));?>">导入</button> -->
        			<button class="btn btn-labeled btn-success list_sort" url="<?php echo U('sort',array('cate_id'=>$cate_id,'pid'=>I('pid',0)),'');?>">排序</button>
	         	</div>      			
       		</div>
    		<div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <!-- 表头 -->
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
                            <?php if(is_array($list_grids)): $i = 0; $__LIST__ = $list_grids;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?><th><?php echo ($field["title"]); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                    </thead>
        
                    <!-- 列表 -->
                    <tbody>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            	<td>
                          			<div class="checkbox c-checkbox">
                             			<label>
                                		<input type="checkbox" class="ids" value="<?php echo ($data['id']); ?>" name="ids[]">
                                		<span class="fa fa-check"></span>
                             			</label>
                          			</div>
                       			</td>
                                <?php if(is_array($list_grids)): $i = 0; $__LIST__ = $list_grids;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grid): $mod = ($i % 2 );++$i;?><td><?php echo get_list_field($data,$grid,$model_list);?></td><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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
   	
<link href="/Public/static/datetimepicker/css/datetimepicker.css" rel="stylesheet" type="text/css">
<?php if(C('COLOR_STYLE')=='blue_color') echo '<link href="/Public/static/datetimepicker/css/datetimepicker_blue.css" rel="stylesheet" type="text/css">'; ?>
<link href="/Public/static/datetimepicker/css/dropdown.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/static/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/Public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript">
$('#head-menu').find('a[href="<?php echo U('Article/index');?>"]').closest('li').addClass('current');
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

	/* 状态搜索子菜单 */
	$("#sub-sch-menu li").find("a").each(function(){
		$(this).click(function(){
			var text = $(this).text();
			$("#sch-sort-txt").text(text).attr("data",$(this).attr("value"));
			$("#sub-sch-menu").addClass("hidden");
		})
	});

	//只有一个模型时，点击新增
	$('.document_add').click(function(){
		var url = $(this).attr('url');
		if(url != undefined && url != ''){
			window.location.href = url;
		}
	});

	//点击排序
	$('.list_sort').click(function(){
		var url = $(this).attr('url');
		var ids = $('.ids:checked');
		var param = '';
		if(ids.length > 0){
			var str = new Array();
			ids.each(function(){
				str.push($(this).val());
			});
			param = str.join(',');
		}

		if(url != undefined && url != ''){
			window.location.href = url + '/ids/' + param;
		}
	});

    //回车自动提交
    $('.search-form').find('input').keyup(function(event){
        if(event.keyCode===13){
            $("#search").click();
        }
    });

    $('#time-start').datetimepicker({
        format: 'yyyy-mm-dd',
        language:"zh-CN",
	    minView:2,
	    autoclose:true
    });

    $('#time-end').datetimepicker({
        format: 'yyyy-mm-dd',
        language:"zh-CN",
	    minView:2,
	    autoclose:true
    });
})
</script>

</body>

</html>