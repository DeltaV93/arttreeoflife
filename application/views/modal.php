

 <?php  


 for( $i = 0 ; $i < $artist->num_rows() ; $i++ ){
$row = $artist->row_array($i);
// else ($this->db->flush_cache());




 
 // for()
// echo '<div class="containter">';
// echo '<div class="row">';
echo '<div class="modal-header">';
echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
// GET NAME FROM DB
echo '<h4 class="modal-title">'.$row['first_name'].' '.$row['last_name'].'</h4>';
echo '</div>';
//    PROFILE IMG SAME AS OUTSIDE// echo '<h4 class="modal-title">'.$row['first_name'].' '.$row['last_name'].'</h4>';
echo '<img id="insideProImg" class="pull-left img-responsive col-md-8" src=" '.$row['profile_img'].' ">';

// echo '<div class="row">';
//    SIDE IMG 
echo '<a href="'.$row['workLink_img1'].'">';
echo '<img id="partsIm "class=" col-sm-4 pull-left img-thumbnail" src="'.$row['work_img1'].'"></img>';
echo '</a>';
//    SIDE IMG 
echo '<a href="'.$row['workLink_img2'].'">';
echo '<img id="partsImg2" class="col-sm-4 pull-left img-thumbnail" src="'.$row['work_img2'].'"></img>';
echo '</a>';
// echo '</div>';
// echo '</div>';
//    TEXT
echo '<div class="container-fluid>"';
echo '<p style="clear:both">'.$row['text'].'</p> ';
// echo '</div>'; 
// echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
}

?>
