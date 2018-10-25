

 <?php  


 for( $i = 0 ; $i < $artist->num_rows() ; $i++ ){
$row = $artist->row_array($i);




 
 // for()
// echo '<div class="containter-fluid">';
// echo '<div class="row">';
//    PROFILE IMG SAME AS OUTSIDE
echo '<img  class="pull-left img-responsive col-md-8" src=" '.$row['profile_img'].' ">';

echo '<div class="row">';
//    SIDE IMG 
echo '<a href="'.$row['workLink_img1'].'">';
echo '<img id="partsIm "class=" col-sm-4 pull-left img-thumbnail" src="'.$row['work_img1'].'"></img>';
echo '</a>';
//    SIDE IMG 
echo '<a href="'.$row['workLink_img2'].'">';
echo '<img id="partsIm" class="col-sm-4 pull-left img-thumbnail" src="'.$row['work_img2'].'"></img>';
echo '</a>';
// echo '</div>';
// echo '</div>';
//    TEXT
echo '<p style="clear:both">'.$row['text'].'</p> ';
echo '</div>'; }

?>
