<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
	<span class="numb"></span>
	<a class="sname text-ellipsis" title="<?php echo ($v['name']); ?>" href="<?php echo U('Music/'.$v['id']);?>"><?php echo ($v['name']); ?></a>
	<a class="gname text-ellipsis" title="<?php echo ($v['name']); ?>" href="<?php echo U('Music/'.$v['artist_id']);?>']}>"><?php echo ($v['artist_name']); ?></a>
	<a class="play" title="播放<?php echo ($v['name']); ?>" href="<?php echo U('Music/'.$v['id']);?>"></a>		
</li><?php endforeach; endif; else: echo "" ;endif; ?>