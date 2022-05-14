
<div id="container" style=" padding: 50px;">
	<h2><?=$title?></h2><br/>
<?php foreach ($students as $student) : ?>

	<div class="row">
		<div class="col-md-2">
			<img class="post-thumb img-circle" height="60px" src="<?php echo site_url(); ?>images/students/<?php echo $student['studImage']; ?>">
		</div>
		<div class="col-md-9">
	 <h4><strong ><?php echo $student['studFullName'] ;?></strong></h4>
	<br/>
	<div class="rounded" style="background-color: #f2f2f2;">
	<strong> <p class =" black"><span><strong>Message:</strong><?php echo word_limiter($student['studMessage'],150); ?></span></p></strong>
	</div>
	<br/>
	<p><a class = "btn btn-default" href="<?php echo site_url('/students/'.$student['slug']); ?> ">Read More</a></p>
</div>
</div>
<?php endforeach ;?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>
</div>