 <div id="container" style=" padding: 50px;">
 <h2><?=$title ;?></h2>
 <?php echo validation_errors(); ?>
 <?php echo form_open_multipart('videos/update'); ?>
  <input type="hidden" name="id" value="<?php echo $video['id']; ?>">

 <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $video['title']; ?>">
  </div>
  <div class="form-group">
    <label>THE OLD VIDEO</label>
    <textarea id="edditor1" class="form-control" name="body" placeColder="Add Description" ><?php echo $video['body']; ?> </textarea>
  </div>
  <div class="form-group">
	  <label>GOOSAA VIDEO</label>
	  <select class="day" name="category_id" class="form-control">
		  <?php foreach($vcategories as $category): ?>
		  	<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach; ?>
	  </select >
  </div>
  <div class="form-group">
	  <label>ADD NEW IMAGE COVER </label>
	  <input type="file" name="userfile" size="200000">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>