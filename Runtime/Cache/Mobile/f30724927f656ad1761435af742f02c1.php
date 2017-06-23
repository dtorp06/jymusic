<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="ar_con">
	<a href="{:U('Artist/'.$v['id'])}>">
		<img  src="<?php echo ((isset($v['cover_url']) && ($v['cover_url'] !== ""))?($v['cover_url']):"/Public/static/images/artist_cover.png"); ?>">
	</a>
	<a class="ar_info" href="<?php echo U('Artist/'.$v['id']);?>"><?php echo ($v['name']); ?></a>		
</div><?php endforeach; endif; else: echo "" ;endif; ?>