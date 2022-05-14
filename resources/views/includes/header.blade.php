<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Zakir Dawa Center</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9498823662267072"
     crossorigin="anonymous"></script>
  <style>

    .brand{
      margin-right: 59px;
    }
  </style>
<!-- old css and js-->
<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="/assets/css/styles2.css">
    <link rel="stylesheet" href="/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/assets/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/assets/css/style.css" media="screen">
    <link rel="stylesheet" href="/assets/css/style1.css">
     <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="stylesheet" href="/assets/css/Pretty-Header.css">
     <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
     <link rel="stylesheet" href="/assets/css/Pretty-Footer.css">
      <link rel="stylesheet" href="/assets/css/venobox.css">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">

  <!-- slick slider -->
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="/assets/css/css/style.css" rel="stylesheet">
  


</head>

<body>


<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:0939930818"><strong>CALL</strong> +251931790809
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li> 
            <li class="list-inline-item mx-1"><a class="d-inline-block p-2 text-color" href="https://youtube.com/channel/UCxRxSCUgVls-NJe3Xj3ctwQ"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
        <ul class="list-inline">
          <?php if($this->session->userdata('logged_in')) : ?>
               
               <li class="list-inline-item"><a  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/users/register">Register As an Administrator</a></li>
                      <li class="list-inline-item"><a  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/users/logout">Logout</a></li>
                    <?php endif; ?>
                  
                      <?php if(!$this->session->userdata('logged_in')) : ?>
                     <li class="list-inline-item"><a  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/donate">Deeggaruudhaaf(donate)</a></li>
                     <?php endif; ?>
                     <?php if($this->session->userdata('stud_is_loggedin')) : ?>
                    <li class="list-inline-item"><a  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/students/logout">Logout</a></li>
                    <?php endif; ?>
                     <?php if(!$this->session->userdata('stud_is_loggedin')&&!$this->session->userdata('logged_in')) : ?>
                      <li  class="list-inline-item"><a  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/users/login">Sheekha(Login)</a></li>
                      <?php endif; ?>
                      <?php if(!$this->session->userdata('stud_is_loggedin')&&!$this->session->userdata('logged_in')) : ?>
                      <li  class="list-inline-item"><a  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/students/login">Barattoota(Login)</a></li>
                      <?php endif; ?>
                       <?php if(!$this->session->userdata('stud_is_loggedin')&&!$this->session->userdata('logged_in')) : ?>
                      <li  class="list-inline-item"><a  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/students/create">Galmaahii (Register)</a></li>
                       <?php endif; ?>

            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0 ">
        <a class="navbar-brand navbar-link" href="/"><img src="/assets/img/logo.png" class="img-circle" style="padding:0px;margin-right:50px;margin-left:0px;height:100px;" ><span style="color:#ffab00">Zakir Dawa Center</span></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item ">
              <a class="nav-link text-capitalize" href="/">Fuula Jalqabaa</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link text-capitalize" href="/posts">Maxxansa adda adda</a>
            </li>  
            <?php if($this->session->userdata('stud_is_loggedin')) : ?>
             <li class="nav-item @@contact">
              <a class="nav-link text-capitalize  " href="/categories">Barnoota din-islaam</a>
            </li>
            <?php endif; ?>
            <li class="nav-item @@courses">
              <a class="nav-link text-capitalize" href="/bcategories">Gosa Kitaaba</a>
            </li>
             <li class="nav-item @@about">
              <a class="nav-link text-capitalize" href="/about">waa'ee keenya</a>
            </li>
                     </ul>

        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<section class="page-title-section overlay" data-background="assets/images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="/">Zakir Dawa Center</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        
      </div>
    </div>
  </div>
</section>
<!--left side bar-->
<div class="row content">


  <div class="col-sm-2 sidenav">

           <div class="well" style="color: #C19434;">
           <?php if(!$this->session->userdata('logged_in')) : ?>
            <ul class="nav sidebar-nav">
               <li  role="presentation"><h4 style="color:#040F3D;">VIDEOS AND AUDIOS FILE</h4></li>

                     <!--li role="presentation"><a href="/categories">islamic teachings</a></li>
                     
                     <li role="presentation"><a href="/bcategories">GOSAA KITABA</a></li>
                     <li role="presentation"><a href="/acategories">audio Category</a></li-->
                     <li class = "list-group-item list-group-item-action" role="presentation"><a style="color:#0D9EDF; text-decoration: none;" href="/videos">ISLAMIC VIDEO</a></lI>
                       <li class = "list-group-item list-group-item-action" role="presentation"><a style="color:#0D9EDF; text-decoration: none;" href="/vcategories">QUR'AANAA FI HADIISA VIDEO</a></li>
                     <li class = "list-group-item list-group-item-action" role="navigation" " ><a style="color:#0D9EDF; text-decoration: none;"href="/audios">QUR'AANAA FI HADIISA AUDIO</a></li>
                     
                     <li class = "list-group-item list-group-item-action" role="navigation"><a  style="color:#0D9EDF; text-decoration: none;"   href="/books"> KITAABA</a></li>
                   </ul>
                   <?php endif; ?>
       <?php if($this->session->userdata('logged_in')) : ?>
        <ul class="nav sidebar-nav links">
        <li  role="presentation"><h4 style="color:#040F3D;">ADMIN PLANE BELOW</h4></li>
           <li class = "list-group-item"><a  style="color:#0D9EDF; text-decoration: none;"href="/posts/create">ADD NEW POST</a></li>
                     <li class = "list-group-item list-group-item-action" role="presentation"><a style="color:#0D9EDF; text-decoration: none; font-family: Font Awesome 5 Free;" href="/videos/create">ADD NEW VIDEO</a></li> 
                     <li class = "list-group-item list-group-item-action" role="presentation" ><a  style="color:#0D9EDF; text-decoration: none;"href="/audios/create">ADD NEW QUR'AANAA FI HADIISA</a></li>
                     <li class = "list-group-item list-group-item-action" role="presentation" ><a style="color:#0D9EDF; text-decoration: none;" href="/books/create">ADD NEW KITABA</a></li>
                     <li class = "list-group-item list-group-item-action" role="presentation" ><a  style="color:#0D9EDF; text-decoration: none;" href="/categories/create">ADD NEW ISLAMIC TEACHINGS CATEGORY </a></li>
                    <li class = "list-group-item list-group-item-action" role="presentation" ><a  style="color:#0D9EDF; text-decoration: none;" href="/vcategories/create">CREATE VIDEO CATEGORY </a></li>
                     <li class = "list-group-item list-group-item-action" role="presentation" ><a  style="color:#0D9EDF; text-decoration: none;" href="/bcategories/create">ADD NEW KITABA CATEGORY</a></li>
                     <li class = "list-group-item list-group-item-action" role="presentation" ><a  style="color:#0D9EDF; text-decoration: none;" href="/acategories/create">ADD NEW  AUDIO CATEGORY</a></li>
                     <li class = "list-group-item list-group-item-action" role="presentation" ><a  style="color:#0D9EDF; text-decoration: none;" href="/students">NAMOOTA GALMAAHAN</a></li>
                     
                        
   </ul>
     <?php endif; ?>
       </div>
      </div>
<div class="col-sm-8 text-left"> 

<!-- Flash messages -->
     <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>




