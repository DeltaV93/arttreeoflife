<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container-fluid">
    <div id="topImg" class="row topImg">
        <div class=" img-resonsive ">
            <a href="../public/img/mural_dheader">
              <img class="fullDrawing imgFadeOut" src="../public/img/background/mural_dheader.jpg">
              <!-- <img class="fullDrawing imgFadeIn"  src="../public/img/background/TALLPART1.jpeg"> -->
            </a>
        </div>
    </div>
</div>

<div class="galleryContainer container list-inline">
  <div class="row ">


<?php 
  // echo "<div class='galleryContainer container list-inline'>";
    // echo "<div class='row'>";


 
        $files = glob("public/img/thumbnail2/*.*");
        $lFiles = glob("public/img/*.*"); 

        for ($i=0; $i<count($files); $i++)
          // ($i=0; $i<count($lFiles); $i++)  
        {
        $image = $files[$i];
        $Limage = $lFiles[$i]; 
        // print $image ."<br />";
  echo "<div class='img-responsive col-md-3'>";
    echo '<div class="">';
      echo '<a href="../'.$Limage .'"> 
            <img class="lazy" data-original="../'.$image .'" alt="Mural Image"/></a>';
        echo '</div>';
      echo '</div>';
    
    // echo '</div>';
  // echo '</div>';
}
?>

  </div>
</div>

<script>
jQuery(document).ready(function ($) {
  
  $(function() {
      $("img.lazy").lazyload({
    container: $(".galleryContainer")});
  });
});
</script>


    <script src="../public/scripts/jquery.lazyload.js"></script>
    <script src="../public/scripts/jquery.scrollstop.js"></script>

