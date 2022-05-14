<div id="container" style=" padding: 50px;">
<h2><?=$title?></h2>
<?php foreach ($audios as $audio) : ?>
  <h3 ><?php echo $audio['title']; ?></h3>
<div class="row">
<h4><strong  style="color:   #633517 ; font-size: 12px;"class="post-date">Posted on:  <?php $format = "Y-m-d h:i A"; echo date($format);?>in <strong><?php echo $audio['name'] ;?></strong></strong></br></strong><br></h4>
<div class="post-body">
  <div class="col-md-3 ">
    <div class="embed-responsxive embed-responsive-16by9">
         <?php
$video_type="audio/mp3";
$video_path="./upload/";
$video_name=$audio['audio'];
         echo '<audio width="320" height="240" controls>
                          <source src="' . $video_path . '/' . $video_name . '" type="' . $video_type . '">
                          Your browser does not support the video tag.
                          </audio>';
                          ?>
     
    </div>

</div >
 <br/><br/><br/>
<div>
  <?php echo word_limiter($audio['body'],80); ?>
</div>
</div>

<div>

<p><a class = "btn btn-default" href="<?php echo site_url('/audios/'.$audio['slug']); ?> ">See More</a></p>
</div>
</div>
<?php endforeach ;?>
<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>
</div>
