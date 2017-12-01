<?php
    //session_start();
    //session_destroy();
   // session_start();
?>	
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>			
			<h1></h1>
			<div id="centered_content" style="width: 80%;margin-left: auto ;margin-right: auto ; " >
				<center>
					<!--<video id = "myVideo" type="video" controls> -->
					<video id = "myVideo" type="video" autoplay> 
					<source src="video/expe_Validation_Nina_RLRI_sujet4_resized_40Mo.mp4" type="video/mp4">			  
				
					Your browser does not support the video tag.
					</video>
					<script>
						$.ajax({
					    url:"start_video.php", //the page containing php script
					    type: "POST", //request type
					    success:function(result){
					    //alert(result);
					    }
					  });
					</script>

				</center>
				<center>
					
					<button type="button">CLICK ME</button>

					<script>
					$(document).ready(function() {
					$("button").click(function(){
					  $.ajax({
					    url:"click.php", //the page containing php script
					    type: "POST", //request type
					    success:function(result){
					    //alert(result);
					    }
					  });
					});
					})
					</script>
				</center>
				<form class="pure-form pure-form-aligned" name="subj_cmt" method="POST" action="comments.php"> 
					<center>
						<div class="pure-controls"> <button type="submit" class="btn" id="validate_bt" value="Save" name="save" >OK</button> </div>
					</center>	
				</form>
			</div>

