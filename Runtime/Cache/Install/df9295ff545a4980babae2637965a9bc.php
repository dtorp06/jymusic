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
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
		<?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?>
		</div>
	</div>
		
	<div class="bs-example">
	    <ol style="margin-bottom: 5px;" class="breadcrumb">
	      	<li><a href="javascript:;">协议</a></li>
	      	<li><a href="javascript:;">检测</a></li>
	      	<li><a href="javascript:;">配置</a></li>
	      	<li class="active"><?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?></li>
	      	<li><a href="javascript:;">完成</a></li>
	    </ol>
	</div>

				  	<hr>
				  	
    <button class="btn btn-warning btn-large disabled">正在<?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?>，请稍后...</button>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <h3><?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?></h3>
    <div id="show-list" class="install-database">
    </div>
    <script type="text/javascript">
        var list   = document.getElementById('show-list');
        function showmsg(msg, classname){
            var li = document.createElement('p'); 
            li.innerHTML = msg;
            classname && li.setAttribute('class', classname);
            list.appendChild(li);
            document.scrollTop += 30;
        }
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