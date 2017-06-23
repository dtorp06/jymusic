<?php if (!defined('THINK_PATH')) exit();?>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tm_div al_ls">
	<div class="tm_pro">
		<a href="<?php echo U('Album/'.$v['id']);?>']}>"><img class="tm_img"  src="<?php echo ((isset($v['cover_url']) && ($v['cover_url'] !== ""))?($v['cover_url']):"/Public/static/images/album_cover.png"); ?>"></a>
		<div class="tm_title">
			<div class="tm_title_bg"></div>
			<div class="tm_title_con">
				<div class="tm_title_con_1"><a href="<?php echo U('Album/'.$v['id']);?>"><?php echo ($v['name']); ?></a></div>
			</div>
		</div>
	</div>

	<div class="tm_price">
		<a href="<?php echo U('Artist/'.$v['artist_id']);?>"><?php echo ($v['artist_name']); ?></a>
	</div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>