<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="Visit the world best CSGO site today.">
	<meta name="keywords" content="csgo,news,login,cms,php,css,html">
	<meta name="author" content="Jonas Nielsen">
 	<meta charset="UTF-8">
	<title>Counter strike: Global Offensive</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<div class="container-fluid "> 
	
		
	
		
			<div class="col-md-12 " >
				
				<ul class="nav navbar-nav topnav " id="myTopnav" >
					<li class="toprow-li"><a href="#" style="color:	#556B2F;">Hjem</a></li>
					<li class="toprow-li"><a href="#" style="color:#556B2F;">Forum </a></li>
					<li class="toprow-li"><a href="#" style="color:	#556B2F;">Links</a></li>
					<li class="toprow-li"><a href="#" style="color:	#556B2F;">Streams</a></li>
					<li class="toprow-li"><a href="#" style="color:	#556B2F;">Top rating</a></li>
					<li class="toprow-li " ><a href="#" style="color:	#556B2F; "> Kontakt</a></li>
					<li class="top-row-li " ><a href="#" style="color:	#556B2F;" class="login">Log på</a></li>
					<li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
				</ul>
			
		
		</div>


	</div>
	<div class="container-fluid"><img style="width:100%; "src="img/csgo-banner.jpg"></div>





	<div class="container" id="Margin">
		<div class="col-md-12">
<form action="insert.php" method="post" class="form-horizontal">
<div class="form-group" id="show">
	<label for="heading">Tilføj en overskrift</label>
	<input type="text" class="form-control" id="heading" name="heading" placeholder="Tilføj en overskrift her...">
	<label for="imgAlt">Tilføj en alt tekst til dit billede</label>
	<input type="text" class="form-control" id="heading" name="imgAlt" placeholder="Tilføj en alt tekst til dit billede...">
	<label for="articletext">Tilføj artikel text</label>
	<textarea rows="4" cols="50" id="articletext" placeholder="Tilføj indhold..." name="articletext"></textarea>
	<label for="myFile">Tilføj billede </label>
	<input type="file" name="myFile" id="myFile" class="inputfile" data-multiple-caption="{count} files selected" multiple />
	
	<button type="submit" class="btn btn-default" style="float:right;">Tilføj artikel</button>
</div>

		</form>
	</div>

	<aside class="panel panel-primary" id ="form">

		<div class="form-group" id="formbox">
			<label for="username" >Username </label>
				<input type="text" class="form-control" id="username" placeholder="Skriv dit username her">
				<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Skriv dit password her">
				<div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" id="checkbox">
      Husk mig
    </label><br>
    <button type="submit" class="btn btn-default" id="button">Log på</button>
  </div>
  




				</div>



</div>

		
	</aside>
	



	<div class="row">
		<main class="col-md-12">
<?php include "fetchDb.php"; 


?>


		



		
		</main>
	</div>
	
	
	
<footer class="container-fluid">
	<div class="col-md-12">
		<p >Copyright &copy</p>

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


</script>
<script>
function myFunction2() {
    var x = document.getElementById("myFile");
    x.disabled = true;
}

</script>
<script>



</script>
<script>
	$(document).ready(function(){
	$("#show").hide();
});
	

	$(document).ready(function(){
		$("#button").click(function(){
			$("#show").show();
		});
	});

	$(document).ready(function(){
		$(".login").click(function(){
			$("aside").toggle();
		});
	});


</script>

	
</body>
</html>