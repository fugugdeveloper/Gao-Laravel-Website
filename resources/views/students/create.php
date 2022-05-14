

 <?php echo validation_errors(); ?>
 <?php echo form_open_multipart('students/create'); ?>
 <div id="container" style=" padding: 50px;">
<h2><?=$title?></h2>
 <div class="form-group">
    <label >Maqaa Guutuu</label>
    <input type="text" class="form-control" name="studFullName" placeholder="Maqaa Kee Guutuu Galchi">
  </div>
  <div class="form-group">
    <label >Iddoo Jireenya</label>
    <input type="text" class="form-control" name="studAddress" placeholder="Iddoo Jireenya Keeti Galchi">
  </div>
  <div class="form-group">
    <label >Lakkoofsa Bilbila</label>
    <input type="text" class="form-control" name="studPhone" placeholder="Lakkoofsa Bilbila Kee Galchi">
  </div>
  <div class="form-group">
    <label >Email Address</label>
    <input type="email" class="form-control" name="studEmail" placeholder="Email Address Kee Galchi">
  </div>
  <div class="form-group">
    <label >Jecha Darbi(Password)</label>
    <input type="password" class="form-control" name="studPassword" placeholder="Password Hareeya Galchi(Enter New Password)">
  </div>
  <div class="form-group">
    <label >Erga Dabarfachuu Barbaadu</label>
    <textarea id="editor1" class="form-control" name="studMessage" placeholder="Erga Dabarfachuu Barbaadu Asi Galchi. Yoo Erga Hin Qabanne Salammadhu!!"></textarea>
  </div>
  <div class="form-group">
	  <label  >Gosaa Ilmii Barachuu Barbaadu</label>
	  <select  class="day" name="category_id" class="form-control">
		  <?php foreach($categories as $category): ?>
		  	<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach; ?>
	  </select>
  </div>
  <div class="form-group">
	  <label  >Footoo Kee Ol Basi</label>
	  <input type="file" name="userfile" >
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>