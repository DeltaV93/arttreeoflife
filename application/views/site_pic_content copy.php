<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container-fluid">
    <div id="topImg" class="row topImg">
        <div class=" img-resonsive ">
            <a href="../public/img/mural_dheader">
              <img src="../public/img/mural_dheader.jpg" class="fullDrawing">
            </a>
        </div>
    </div>
</div>

<div class="galleryContainer container list-inline">
  <div class="row ">


<?php 
  // echo "<div class='galleryContainer container list-inline'>";
    // echo "<div class='row'>";


 
        $files = glob("public/img/thumbnail/*.*");
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

<!-- 


    <div class=" img-responsive col-md-3 ">
      <div class="">
        <a href="../public/img/murald5.jpg" class="">
          <img class="lazy" data-original="../public/img/thumbnail/murald5.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_d8.jpg" class="">
          <img src="../public/img/thumbnail/mural_d8.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p3.jpg" class="">
          <img src="../public/img/thumbnail/mural_p3.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p4.jpg" class="">
          <img src="../public/img/thumbnail/mural_p4.jpg" alt="...">
        </a>
      </div>
    </div>
  
  
    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p6.jpg" class="">
          <img src="../public/img/thumbnail/mural_p6.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p7.jpg" class="">
          <img src="../public/img/thumbnail/mural_p7.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p8.jpg" class="">
          <img src="../public/img/thumbnail/mural_p8.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p9.jpg" class="">
          <img src="../public/img/thumbnail/mural_p9.jpg" alt="...">
        </a>
      </div>
    </div>



    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p10.jpg" class="">
          <img src="../public/img/thumbnail/mural_p10.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p12.jpg" class="">
          <img src="../public/img/thumbnail/mural_p12.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p14.jpg" class="">
          <img src="../public/img/thumbnail/mural_p14.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/public/img/mural_p15.jpg" class="">
          <img src="../public/img/thumbnail/mural_p15.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/wall_1.jpg" class="">
          <img src="../public/img/thumbnail/wall_1.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/wall_2.jpg" class="">
          <img src="../public/img/thumbnail/wall_2.jpg" alt="...">
        </a>
      </div>
    </div>

    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/wall_3.jpg" class="">
          <img src="../public/img/thumbnail/wall_3.jpg" alt="...">
        </a>
      </div>
    </div>


    <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p18.jpg" class="">
          <img src="../public/img/thumbnail/mural_p18.jpg" alt="...">
        </a>
      </div>
    </div>

     <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p19.jpg" class="">
          <img src="../public/img/thumbnail/mural_p19.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p21.jpg" class="">
          <img src="../public/img/thumbnail/mural_p21.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p22.jpg" class="">
          <img src="../public/img/thumbnail/mural_p22.jpg" alt="...">
        </a>
      </div>
    </div>

        <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p23.jpg" class="">
          <img src="../public/img/thumbnail/mural_p23.jpg" alt="...">
        </a>
      </div>
    </div>

          <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p24.jpg" class="">
          <img src="../public/img/thumbnail/mural_p24.jpg" alt="...">
        </a>
      </div>
    </div>

          <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p25.jpg" class="">
          <img src="../public/img/thumbnail/mural_p25.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p26.jpg" class="">
          <img src="../public/img/thumbnail/mural_p26.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p27.jpg" class="">
          <img src="../public/img/thumbnail/mural_p27.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p28.jpg" class="">
          <img src="../public/img/thumbnail/mural_p28.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p29.jpg" class="">
          <img src="../public/img/mural_p29.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p30.jpg" class="">
          <img src="../public/img/mural_p21.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p31.jpg" class="">
          <img src="../public/img/mural_p31.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p33.jpg" class="">
          <img src="../public/img/mural_p33.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p34.jpg" class="">
          <img src="../public/img/mural_p34.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p35.jpg" class="">
          <img src="../public/img/mural_p35.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p36.jpg" class="">
          <img src="../public/img/mural_p36.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p38.jpg" class="">
          <img src="../public/img/mural_p38.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p39.jpg" class="">
          <img src="../public/img/thumbnail/mural_p39.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p40.jpg" class="">
          <img src="../public/img/thumbnail/mural_p40.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p41.jpg" class="">
          <img src="../public/img/thumbnail/mural_p41.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p42.jpg" class="">
          <img src="../public/img/thumbnail/mural_p42.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p44.jpg" class="">
          <img src="../public/img/thumbnail/mural_p44.jpg" alt="...">
        </a>
      </div>
    </div>


         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p45.jpg" class="">
          <img src="../public/img/thumbnail/mural_p45.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p46.jpg" class="">
          <img src="../public/img/thumbnail/mural_p46.jpg" alt="...">
        </a>
      </div>
    </div>


           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p47.jpg" class="">
          <img src="../public/img/thumbnail/mural_p47.jpg" alt="...">
        </a>
      </div>
    </div>

         <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p48.jpg" class="">
          <img src="../public/img/thumbnail/mural_p48.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p49.jpg" class="">
          <img src="../public/img/thumbnail/mural_p49.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p50.jpg" class="">
          <img src="../public/img/thumbnail/mural_p50.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p51.jpg" class="">
          <img src="../public/img/thumbnail/mural_p51.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p52.jpg" class="">
          <img src="../public/img/thumbnail/mural_p52.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p53.jpg" class="">
          <img src="../public/img/thumbnail/mural_p53.jpg" alt="...">
        </a>
      </div>
    </div>


           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p54.jpg" class="">
          <img src="../public/img/thumbnail/mural_p54.jpg" alt="...">
        </a>
      </div>
    </div>
    

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p55.jpg" class="">
          <img src="../public/img/thumbnail/mural_p55.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p56.jpg" class="">
          <img src="../public/img/thumbnail/mural_p56.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p57.jpg" class="">
          <img src="../public/img/thumbnail/mural_p57.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p58.jpg" class="">
          <img src="../public/img/thumbnail/mural_p58.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p59.jpg" class="">
          <img src="../public/img/thumbnail/mural_p59.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p60.jpg" class="">
          <img src="../public/img/thumbnail/mural_p60.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p61.jpg" class="">
          <img src="../public/img/thumbnail/mural_p61.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p62.jpg" class="">
          <img src="../public/img/thumbnail/mural_p62.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p63.jpg" class="">
          <img src="../public/img/thumbnail/mural_p63.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p64.jpg" class="">
          <img src="../public/img/thumbnail/mural_p64.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p65.jpg" class="">
          <img src="../public/img/thumbnail/mural_p65.jpg" alt="...">
        </a>
      </div>
    </div>

           <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p66.jpg" class="">
          <img src="../public/img/thumbnail/mural_p66.jpg" alt="...">
        </a>
      </div>
    </div>

               <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p67.jpg" class="">
          <img src="../public/img/thumbnail/mural_p67.jpg" alt="...">
        </a>
      </div>
    </div>


               <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p68.jpg" class="">
          <img src="../public/img/thumbnail/mural_p68.jpg" alt="...">
        </a>
      </div>
    </div>


               <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p69.jpg" class="">
          <img src="../public/img/thumbnail/mural_p69.jpg" alt="...">
        </a>
      </div>
    </div>


               <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p70.jpg" class="">
          <img src="../public/img/thumbnail/mural_p70.jpg" alt="...">
        </a>
      </div>
    </div>


               <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p71.jpg" class="">
          <img src="../public/img/thumbnail/mural_p71.jpg" alt="...">
        </a>
      </div>
    </div>

               <div class="img-responsive col-md-3">
      <div class="">
        <a href="../public/img/mural_p72.jpg" class="">
          <img src="../public/img/thumbnail/mural_p72.jpg" alt="...">
        </a>
      </div>
    </div>
 -->
  </div>
</div>



<script>
jQuery(document).ready(function ($) {
  $(function() {
      $("img.lazy").lazyload();
        container: $(".galleryContainer")
        // threshold : 200
        // effect : "fadeIn"
    });
});
</script>

    <script src="../public/scripts/jquery.lazyload.js"></script>
    <script src="../public/scripts/jquery.scrollstop.js"></script>

