<div id="container" style=" padding: 50px;">
<h2><?php echo $audio['title']; ?></h2>

<small class="post-date">Posted on:  <?php $format = "Y-m-d h:i A"; echo date($format);?></small><br>
<div class="post-body">
	<div class="col-md-3">
    <div class="embed-responsive embed-responsive-16by9">
            <audio width="300" height="300" controls="controls">
			<source	 type="audio/mp4" src="<?php echo base_url('upload/sound_2.mp3'); ?>" >

			</audio>
		
     
    </div>
    	<!--source	src="<?php //echo site_url()?>'upload/'.$audio['audio']->picture?>" type="audio/mp4"-->

</div>
	<?php echo $audio['body']; ?>
</div>
<?php if($this->session->userdata('user_id') == $audio['user_id']): ?>
     <hr>
 </br></br></br></br>
         <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>audios/edit/<?php echo $audio['slug']; ?>">Edit</a>
         <?php echo form_open('/audios/delete/'.$audio['id']); ?>
          <input type="submit" value="Delete" class="btn btn-danger">
          </form> 
<?php endif; ?>
<hr>
</br></br></br>
</div>
<!--h3>Comments</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>

		<div class="well">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>
<hr>

<h3>Add Comment</h3-->
<!--?php $data = array( 'onsubmit' => "return checkforblank()"); ?-->
<!--?php echo validation_errors(); ?>
<?php echo form_open('vcomments/create/'.$audio['id']); ?>

	<div class="form-group">
		<label>Name</label>
		<input type="text" id="txtInput" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" id="txtInput" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Comment</label>
		<textarea name="body" id="txtInput" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $audio['slug']; ?>">
	<button class="btn btn-primary" id="btnInput"  type="submit" >add comment</button>
</form-->
<!--script>
$(function () {
    $('#btnInput').prop('disabled', true);
    $('#txtInput').keyup(function () {
        if ($(this).val() != '') {
            $('#btnInput').prop('disabled', false);
         }
    }); 
})

</script-->

