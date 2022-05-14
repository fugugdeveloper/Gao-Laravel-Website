<div id="container" style=" padding: 50px;">
<h2><?=$title?></h2><br/>
<?php foreach ($videos as $video) : ?>
	<br/><h3 ><?php echo $video['title']; ?></h3><br/>
<div class="ro-lg-4 ro-sm-6 mb-5">
<strong style="color:   #633517 ; font-size: 12px;" class="post-date">Posted on: <?php $format = "Y-m-d h:i A"; echo date($format);?> in <strong><?php echo $video['name'] ;?></strong></strong></br></strong><br>
<div class="post-body">

<!--?php
$video_type="mp4";
 echo '"' .  './upload/' . $video['video']. '" type="' . $video_type . '"';?-->

	<div class="col-md-3 ">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <!-- these the video viewer from befor -->
        <!--?php
$video_type="video/mp4";
$video_path="./upload/";
$video_name=$video['video'];
         echo base_url( '<video width="320" height="240" controls>
                          <source src="' . $video_path . '/' . $video_name . '" type="' . $video_type . '">
                          Your browser does not support the video tag.
                          </video>');
                          ?-->
 <li  class = "list-group-item list-group-item-action"  role="presentation"><a  style="color:#0D9EDF; text-decoration: none;" class="venobox" data-auto play ="true" data-vbtype ="video" href="<?php echo $video['body']; ?>" data-gall="myGallery"><img  class="card-img-top rounded-0" src="<?php echo site_url(); ?>upload/<?php echo $video['video']; ?>"> </a></li>
 
  <!--img class="post-thumb" src="<?php echo site_url(); ?>images/posts/<?php echo $post['post_image']; ?>"-->

 
        <!--video  width="300" height="300" controls data-setup='{}'>
		 <source src="<?php echo base_url().'./upload/'.$video['video']; ?>" 
    type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>
</video-->

     <!--h3><?php echo $video['video']; ?></h3-->
     <!--?php echo base_url().'upload/'.$video['video']; ?-->
    </div>
  	

</div>
	<!--?php echo word_limiter($video['body'],80); ?-->
</div>
<div>

<br/><p><a class = "btn btn-default" href="<?php echo site_url('/videos/'.$video['slug']); ?> ">See More</a></p>
</div>
</div>
<?php endforeach ;?>
<div class="pagination-links">
        <?php echo $this->pagination->create_links(); ?>
</div>
</div>
