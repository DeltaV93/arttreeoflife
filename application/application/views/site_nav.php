<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>

<div id="nav" class="slideIn container-fluid wrap navbar-fixed-top">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">TLHD</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
        <li <?= ($this->uri->uri_string() == '') ? ' id=activeColor class="active"' : '' ?>><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
        <li <?= ($this->uri->uri_string() == 'Site/artist') ? 'activeColor class="active"' : '' ?>><a href="<?php echo base_url(); ?>Site/artist">Artist</a></li>
        <li <?= ($this->uri->uri_string() == 'Site/process') ? 'activeColor class="active"' : '' ?>><a href="<?php echo base_url(); ?>Site/process">process</a></li>
        <li <?= ($this->uri->uri_string() == 'Site/video') ? 'activeColor class="active"' : '' ?>><a href="<?php echo base_url(); ?>Site/video">Video</a></li>
        <li <?= ($this->uri->uri_string() == 'Site/photo') ? 'activeColor class="active"' : '' ?>><a href="<?php echo base_url(); ?>Site/photo">Photos</a></li>
      </ul> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>

<script>
$(document).ready(function() {
  $('.navbar-fixed-top').removeClass('slideIn');
  });
</script>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
  <script src="../public/scripts/colorbox/jquery.colorbox-min.js"></script>