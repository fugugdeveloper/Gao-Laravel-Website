<div id="container" style=" padding: 50px;">
<h2><?php echo $students['studFullName']; ?></h2>

<strong style="color: 	#633517 ;" class="post-date">accounted on: <?php $format = "Y-m-d h:i A"; echo date($format);?></strong></br>
<div class="post-thumb" style="background-color: #f2f2f2;  padding: 2px;" >
	<strong> &nbsp &nbsp &nbsp Iddoo Jireenya: </strong> <?php echo $students['studAddress']; ?>
</div>
<div class="post-thumb" style="background-color: #f2f2f2;  padding: 2px;" >
	<strong> &nbsp &nbsp &nbsp Lakkoofsa Bilbila: </strong> <?php echo $students['studPhone']; ?>
</div>
<div class="post-thumb" style="background-color: #f2f2f2;  padding: 20px;" >
	<strong>Message: </strong><?php echo $students['studMessage']; ?>
</div>

</br>

     <hr>
         <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>students/edit/<?php echo $students['slug']; ?>">Edit</a>
         <?php echo form_open('/students/delete/'.$students['studID']); ?>
          <input type="submit" value="Delete" class="btn btn-danger">
          </form> 

<!-- end of div  of id container-->
<hr>
</div>