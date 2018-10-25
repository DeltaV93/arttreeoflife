<style >

.container {
    margin: 100px;
}

</style>
		<div class="container">

		    <a id="popoverData" class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="bottom" data-original-title="Title" data-trigger="hover">Popover with data-trigger</a>

		    <a id="popoverOption" class="btn" href="#" data-content="Popup with option trigger" rel="popover" data-placement="bottom" data-original-title="Title">Popup with option trigger</a>
		    
		    
		</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<script>
// $(document).ready(function(){
	$('#popoverData').popover();
	$('#popoverOption').popover({ trigger: "hover" });
// });
</script>