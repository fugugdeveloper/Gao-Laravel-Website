
<div id="container" style=" padding: 50px;">
	<h2><?=$title?></h2><br/>
<?php foreach ($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3><br/>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>images/posts/<?php echo $post['post_image']; ?>">

		</div>
		<div class="col-md-9">
	<strong style="color: 	#633517 ;" class="post-date">Posted on: <?php $format = "Y-m-d h:i A"; echo date($format);?> in <strong style="font-size: 12px;"><?php echo $post['name'] ;?></strong></strong style="color: ;"></br>
	<br/>
	<div class="rounded" style="background-color: #f2f2f2;  padding: 50px; ">
	<strong><p class =" black"><?php echo word_limiter($post['body'],150); ?></p></strong>
	</div>
	<br/>
	<p><a class = "btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?> ">Read More</a></p>
</div>
</div>
<?php endforeach ;?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>
</div>