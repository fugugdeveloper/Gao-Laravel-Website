<div id="container" style=" padding: 50px;">
<h2><?php echo $video['title']; ?></h2>

<small class="post-date">Posted on: <?php echo $video['created_at']; ?></small><br>
<div class="post-body">
	<div class="col-md-3">
    <div class="embed-responsive-item">
   
                           <li  class = "list-group-item list-group-item-action"  role="presentation"><a  style="color:#0D9EDF; text-decoration: none;" class="venobox" data-auto play ="true" data-vbtype ="video" href="<?php echo $video['body']; ?>" data-gall="myGallery"><img  class="post-thumb" src="<?php echo site_url(); ?>upload/<?php echo $video['video']; ?>"> </a></li>
		
     
    </div>
    	<!--source	src="<?php //echo site_url()?>'upload/'.$video['video']->picture?>" type="video/mp4"-->

</div>
	<!--?php echo $video['body']; ?-->
</div>
<?php if($this->session->userdata('user_id') == $video['user_id']): ?>
     <hr>
         <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>videos/edit/<?php echo $video['slug']; ?>">Edit</a>
         <?php echo form_open('/videos/delete/'.$video['id']); ?>
          <input type="submit" value="Delete" class="btn btn-danger">
          </form> 
<?php endif; ?>
<hr>
</br></br></br></br>
<h3>Comments</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>

		<div class="well">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
</br>	<p style="color: #000000; font-size: 18px;">No comments To Display</p></br>
<?php endif; ?>
<hr>

<h3>Add Comment</h3></br>
<!--?php $data = array( 'onsubmit' => "return checkforblank()"); ?-->
<?php echo validation_errors(); ?>
<?php echo form_open('vcomments/create/'.$video['id']); ?>

	<div class="form-group">
		<label style=" font-size: 18px;">Name</label>
		<input type="text" id="txtInput" name="name" class="form-control">
	</div>
	<!--div class="form-group">
		<label>Email</label>
		<input type="email" id="txtInput" name="email" class="form-control">
	</div-->
	<div class="form-group">
		<label style=" font-size: 18px; ">Comment</label>
		<textarea name="body" id="txtInput" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $video['slug']; ?>">
	<button class="btn btn-primary" id="btnInput"  type="submit" >Add Comment</button>
</form>
</div>
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

