<?php global $meta_sep; ?>
<nav class="post-nav meta-font secondary_text">
	<ul class="clearfix">
		<li class="post-meta"><?php echo get_the_date(); ?><span class="post-meta-sep">/</span></li>
		<li class="post-meta post-author"><?php _e('Posted By :','be-themes'); ?> <?php echo get_the_author(); ?><span class="post-meta-sep">/</span></li>
		<li class="post-meta post-comments">
			<a href="<?php comments_link(); ?>"><?php comments_number('0','1','%');?> <?php _e(' comments','be-themes'); ?></a> <span class="post-meta-sep">/</span>
		</li>
		<li class="post-meta post-category"><?php _e('Under : ','be-themes'); ?><?php be_themes_category_list($id); ?> </li>
	</ul>
</nav>