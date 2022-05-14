<div id="container" style=" padding: 50px;">
<h2><?=$title ;?></h2> 
 <?php echo validation_errors(); ?>
 <?php 
  $attributes = array('name' => 'audio_upload', 'id' => 'audio_upload');
    echo form_open_multipart('audios/create',$this->uri->uri_string(),$attributes); ?>

 <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label >Description</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Description"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select  class="day" name="category_id" class="form-control">
      <?php foreach($acategories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    
                <p><input name="audio_name" id="audio_name" readonly="readonly" type="file" /></p>
                
                <?php
        //  echo form_close();
                ?>
  </div>
  <p><button class="btn btn-default" name="audio_upload" value="Upload audio" type="submit" >Submit</button></p>
  <!--button type="submit" class="btn btn-default">Submit</button-->
</form>
</div>