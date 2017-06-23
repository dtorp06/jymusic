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
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		环境检测
		</div>
	</div>
		
	<div class="bs-example">
	    <ol style="margin-bottom: 5px;" class="breadcrumb">
	      	<li> <a href="javascript:;">协议</a></li>
	      	<li class="active">检测</li>
	      	<li><a href="javascript:;">配置</a></li>
	      	<li><a href="javascript:;"><?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?></a></li>
	      	<li><a href="javascript:;">完成</a></li>
	    </ol>
	</div>

				  	<hr>
				  	
  	<p>
    	<a role="button" href="<?php echo U('Index/index');?>" class="btn btn-success">上一步</a>
    	<a role="button" href="<?php echo U('Install/step2');?>" class="btn btn-primary">下一步</a>	        	
    </p>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <table class="table">
        <caption><h3>运行环境检查</h3></caption>
        <thead>
            <tr>
                <th>项目</th>
                <th>所需配置</th>
                <th>当前配置</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($env)): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?></td>
                    <td><?php echo ($item[1]); ?></td>
                    <td><i class="ico-<?php echo ($item[4]); ?>">&nbsp;</i><?php echo ($item[3]); ?></td>       
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
	<?php if(isset($dirfile)): ?><table class="table">
        <caption><h3>目录、文件权限检查</h3></caption>
        <thead>
            <tr>
                <th>目录/文件</th>
                <th>所需状态</th>
                <th>当前状态</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($dirfile)): $i = 0; $__LIST__ = $dirfile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[3]); ?></td>
                    <td><i class="ico-success">&nbsp;</i>可写</td>
                    <td><i class="ico-<?php echo ($item[2]); ?>">&nbsp;</i><?php echo ($item[1]); ?></td>   
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table><?php endif; ?>
    <table class="table">
        <caption><h3>函数依赖性检查</h3></caption>
        <thead>
            <tr>
                <th>函数名称</th>
                <th>检查结果</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($func)): $i = 0; $__LIST__ = $func;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?>()</td>
                    <td><i class="ico-<?php echo ($item[2]); ?>">&nbsp;</i><?php echo ($item[1]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

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