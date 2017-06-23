<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JYmusic安装程序</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="/Public/static/bootstrap-3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="/Public/static/JYmusic/css/jy.css" rel="stylesheet">
        <link href="/Public/Install/css/install.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
        <script src="/Public/static/jquery-1.10.2.min.js"></script>
		<script type="text/javascript">
		(function(){
			window.JY = {
				"ROOT"   : "", //当前网站地址
				"APP"    : "/install.php?s=", //当前项目地址
				"PUBLIC" : "/Public", //项目公共目录地址
				"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
				"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
				"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
			}
		})();
		</script>
        <script src="/Public/static/JYmusic/js/jy.js"></script>
    </head>

    <body>
    	<div class="container">
    		<div class="page-header">
        		<h3><a href="http://jyuu.cn/"><img src="/Public/static/logo.png"></a><span>在线安装</span></h3>
      		</div>
      		
	      	<div class="row">
	        	<div class="col-md-4 left-info">
	        		
<h4>安装进度</h4>
	<hr>
	<div class="progress">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		安装数据库
		</div>
	</div>
		
	<div class="bs-example">
	    <ol style="margin-bottom: 5px;" class="breadcrumb">
	      	<li> <a href="javascript:;">协议</a></li>
	      	<li><a href="javascript:;">检测</a></li>
	      	<li class="active">配置</li>
	      	<li><a href="javascript:;"><?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?></a></li>
	      	<li><a href="javascript:;">完成</a></li>
	    </ol>
	</div>

				  	<hr>
				  	
    <a class="btn btn-success btn-large" href="<?php echo U('Install/step1');?>">上一步</a>
    <button id="submit" type="button" class="btn btn-primary btn-large">下一步</button>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <?php
 defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_HOST_M', '127.0.0.1'); defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_PORT', '3306'); ?>
    <form action="/install.php?s=/install/step2.html"  method="post" id="iform" target="_self" class="form-horizontal">
        <div class="create-database">
            <h3>数据库连接信息</h3>

            <input type="hidden" name="db[]" value="mysql" >
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">服务器</label>
                <div class="col-sm-4">
                	<input type="text" name="db[]" class="form-control" value="<?php if(defined("SAE_MYSQL_HOST_M")): echo (SAE_MYSQL_HOST_M); else: ?>127.0.0.1<?php endif; ?>">          	
                </div>
                <div class="col-sm-10 col-sm-offset-2">
					<span class="help-block">数据库服务器IP，一般为127.0.0.1,如果无法连接请尝试localhost</span>
				</div>
            </div>
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">数据库名</label>
                <div class="col-sm-4">
                	<input type="text" name="db[]" class="form-control" value="<?php if(defined("SAE_MYSQL_DB")): echo (SAE_MYSQL_DB); endif; ?>">
            	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">数据库用户名</label>
                <div class="col-sm-4">
                	<input type="text" name="db[]" class="form-control" value="<?php if(defined("SAE_MYSQL_USER")): echo (SAE_MYSQL_USER); endif; ?>">
            	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">数据库密码</label>
                <div class="col-sm-4">
                	<input type="password" name="db[]" class="form-control" value="<?php if(defined("SAE_MYSQL_PASS")): echo (SAE_MYSQL_PASS); endif; ?>">
            	</div>
            </div>

            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">数据库端口</label>
                <div class="col-sm-3">
                	<input type="text" name="db[]" class="form-control" value="<?php if(defined("SAE_MYSQL_PORT")): ?>{$Think.const.SAE_MYSQL_PORT}<?php else: ?>3306<?php endif; ?>">                	
                </div>
                <span>数据库服务连接端口，一般为3306</span>
            </div>

            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">数据表前缀</label>
                <div class="col-sm-3">
                	<input type="text" name="db[]" class="form-control" value="jy_">               	
                </div>
                <span>同一个数据库运行多个系统时请修改为不同的前缀</span>
            </div>
        </div>

        <div class="create-database">
            <h3>创始人帐号信息</h3>
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-4">
                	<input type="text" name="admin[]" class="form-control" value="admin">
               	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-4">
                	<input type="password" name="admin[]" class="form-control" value="">
               	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">确认密码</label>
                <div class="col-sm-4">
                	<input type="password" name="admin[]" class="form-control" value="">
                </div>
            </div>
            <div class="form-group form-group-sm">
            	<label for="formGroupInputSmall" class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-4">
                	<input type="text" name="admin[]" class="form-control" value="admin@admin.com">
                </div>
                <span>请填写正确的邮箱便于收取提醒邮件</span>
            </div>
        </div>
    </form>
	<script type="text/javascript">
	$(function(){
		$('#submit').click(function(e){
			e.preventDefault();
			var form	= $('#iform');
			$.post(form.attr('action'),form.serialize(),function(data){
				if (data.status){
					JY.tipMsg('配置正确，即将跳转到下一步');
					setTimeout(function(){
						window.location.href=data.url;
					}, 1500);
				}else{
					JY.tipMsg(data.info);
				}
			
			})		
		});
				
	})
	</script>

			      </div>
	        	</div>
	      	</div>
	      	
	      	<hr>
	      	<footer>
        		<p>&copy; Company JYmusic 2014-2016</p>
     	 	</footer>
    	</div>
    	
    </body>
</html>