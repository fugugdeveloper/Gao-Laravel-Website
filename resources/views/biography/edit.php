
<div id="container" style=" padding: 50px;">
 <h2><?=$title ;?></h2>
 <?php echo validation_errors(); ?>
 <?php echo form_open_multipart('posts/update'); ?>
  <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

 <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" ><?php echo $post['body']; ?> </textarea>
  </div>
  <div class="form-group">
	  <label >Category</label>
	  <select class="day" name="category_id" class="form-control">
		  <?php foreach($categories as $category): ?>
		  	<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach; ?>
	  </select>
  </div>
  <div class="form-group">
	  <label >Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form></div>