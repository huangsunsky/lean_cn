<?php

$final = trim( htmlspecialchars( $article['post_summary']));

$article['post_summary'] = trim( preg_replace( '/(<input(.+)<\/script>)/is' , '' , $article['post_summary']) );

$meta = json_decode( $article['post_meta'] , true);

?>

<div class="row">

<div class="span9">
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $article['id'];?>">
	<div class="control-group">
		<label><strong>标题</strong></label>
		<div class="controls">
			<input class="span6" name="post_title" value="<?php echo $article['post_title'];?>" type="text" />
		</div>
	</div>

	<div class="control-group">
		<label><strong>大纲/预览</strong></label>
		<div class="controls">
			<textarea class="shorttext" name="post_summary"><?php echo $article['post_summary'];?></textarea>
		</div>
	</div>

	<div class="control-group">
		<label><strong>转载自 (url链接)</strong></label>
		<div class="controls">
			<input class="span6" name="post_from" value="<?php echo $article['post_from'];?>" type="text" />
		</div>
	</div>
 	

	<div class="control-group">
		<label><strong>作者</strong></label>
		<div class="controls">
			<input class="span6" name="post_author" value="<?php echo $article['post_author'];?>" type="text" />
		</div>
	</div>

	<div class="control-group">
		<label><strong>正文</strong></label>
		<div class="controls">
			<textarea class="longtext" name="post_content"><?php echo $article['post_content'];?></textarea>
		</div>
	</div>

	<div class="control-group">
		<label><strong>文字配图 (图片链接)</strong></label>
		<div class="controls">
			<input class="span6" type="text" name="post_banner" value="<?php echo $article['post_banner'];?>"></textarea>
		</div>
	</div>

	<div class="control-group">
		<label><strong>TitleLink</strong></label>
		<div class="controls">
			<input class="span6" name="post_titlelink" value="<?php echo $article['post_titlelink'];?>" type="text"  />
		</div>
	</div>

	<div class="control-group">
		<label><strong>Meta Keywords</strong></label>
		<div class="controls">
			<input class="span6" name="keywords" value="<?php echo $meta['keywords'];?>" type="text" />
		</div>
	</div>

	<div class="control-group">
		<label><strong>Meta Description</strong></label>
		<div class="controls">
			<input class="span6" name="description" value="<?php echo $meta['description'];?>" type="text" />
		</div>
	</div>

	<div class="control-group">
		<label><strong>类别</strong></label>
		<div class="controls">
			<select name="category">
				<?php foreach ($categories as $c) { ?>
				<option <?php if( $article['post_status'] == $c['id']){?>selected="selected"<?php }?> value="<?php echo $c['id'];?>"><?php echo $c['category_title'];?></option>
				<?php }?>
			</select>
		</div>
	</div>

	<div class="control-group">
		<label><strong>状态</strong></label>
		<div class="controls">
			<select name="post_status">
				<option <?php if( $article['post_status'] == 1){?>selected="selected"<?php }?> value="1">发布</option>
				<option <?php if( $article['post_status'] == 2){?>selected="selected"<?php }?> value="2">关闭</option>
			</select>
		</div>

	</div>

	<button class="btn btn-primary" type="submit" name="create_news" value="1">更新新闻</button>

</form>
</div>

<div class="span3">
	 <?php $this->load->module('webkit/photo_uploads/uploads');?>
</div>

</div>