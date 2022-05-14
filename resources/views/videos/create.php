 <div id="container" style=" padding: 50px;">
<h2><?=$title ;?></h2> 
 <?php echo validation_errors(); ?>
 <?php
   $attributes = array('name' => 'video_upload', 'id' => 'video_upload');
    echo form_open_multipart('videos/create',$this->uri->uri_string(),$attributes); ?>

 <div class="form-group">
    <label >TITLE</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>ADD YOUTUBE VIDEO LINK BELOW </label>
    <textarea id="editcor1" class="form-control" name="body" placeholder="Add Description"></textarea>
  </div>
  <div class="form-group">
    <label>GOOSAA VIDEO</label>
    <select  class="day"  name="category_id" class="form-control">
      <?php foreach($vcategories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>UPLOAD COVER IMAGE FOR VIDEO </label>
    
                <p><input name="video_name" id="video_name" readonly="readonly" type="file" /></p>
                
                <?php
        //  echo form_close();
                ?>
  </div>
  <p><button class="btn btn-default" name="video_upload" value="Upload Video" type="submit" >SUBMIT</button></p>
  <!--button type="submit" class="btn btn-default">Submit</button-->
</form>
</div>