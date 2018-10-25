<div class="container">
    <div style="margin-top: 13%;" class=" artistHeader page-header">
      <h1>Meet the artist</h1>
    </div>
</div>

<div class="panel panel-default profile">
  <div class="panel-body">

 <?php  


 for( $i = 0 ; $i < $query->num_rows() ; $i++ ){
$row = $query->row_array($i);




 
 // for()
// echo '<div class="col-md-4">';
// echo '<div class="thumbnail">';
//    PROFILE IMG 
// echo '<img class="img-responsive" src="'.$row['profile_img'].'" alt="" class="img-rounded"></img>';

// echo '<div class="caption">';
//  NAME 
// echo '<h3 class="artistName">'.$row['first_name'].''.$row['last_name'].'</h3>';

// echo '<p><a class="button btn btn-primary " id="hello" role="button" data-toggle="modal" data-target="#myModal" data-artist="jones">Words</a>';
// echo '</div>';

// echo '</div>';
// echo "</div>";
// echo "</div>";
// Modal
// Modal content

// echo '<div id="myModal" class="modal fade" role="dialog">';
// echo '<div class="modal-dialog modal-lg">'; 

// echo '<div class="modal-content">';
// echo '<div class="modal-header">';
// echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
// GET NAME FROM DB
// echo '<h4 class="modal-title">'.$row['name'].'  </h4>';
// echo '</div>';
// echo '<div class="modal-body">';
// echo '<div class=" artistInfo containter-fluid">';
// LOAD PHP FILE
// echo '</div>';
// echo '</div>';
// echo '<div class="modal-footer">';
// echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';
 }
 

echo "<div class="col-md-4">";
echo "<div class="thumbnail">";
echo "<img class='img-responsive' src=".$row['profile_img']."class="'img-rounded'"></img>";

echo "<div class='caption'>";
echo "<h3 class="artistName">".$row['first_name'].''.$row['last_name']."</h3>";
echo '<p><a class="button btn btn-primary " id="hello" role="button" data-toggle="modal" data-target="#myModal" data-artist="jones">Words</a>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

//Modal
//<! Modal content-->
echo '<div id="myModal" class="modal fade" role="dialog">'
echo '<div class="modal-dialog modal-lg">'


echo '<div class="modal-content">'
echo '<div class="modal-header">'
echo '<button type="button" class="close" data-dismiss="modal">&times;</button>'
//        <!-- GET NAME FROM DB -->
echo '<h4 class="modal-title">'.$row['first_name'].''.$row['last_name'].'</h4>'
echo '</div>';
echo '<div class="modal-body">'
echo '<div class=" artistInfo containter-fluid">'
//<!-- LOAD PHP FILE -->
echo '</div>';
echo '</div>';
echo '<div class="modal-footer">'
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div> -->
?>
 <script>
$(document).ready(function(){

 
    $(".button").one("click", function(){
        $.ajax({
          type: "POST",
          url: "/Artists/"+$(this).attr("data-artist"),
          data: ({LASTNAME: $(this).attr("data-artist") })
          success: function(result){
            $(".artistInfo").append(result);
        }});
    });
  });



             
</script>
