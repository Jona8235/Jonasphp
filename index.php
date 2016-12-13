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

<div class="form-group" id="show">
	<label for="heading">Tilføj en overskrift</label>
	<input type="text" class="form-control" id="heading">
	<label for="time">Tilføj et tidspunkt & dato</label>
	<input text="number" class="form-control" id="time">
	<label for="articletext">Tilføj artikel text</label>
	<textarea rows="4" cols="50" id="articletext"></textarea>
		<label for="myFile">Tilføj billede </label>
	<input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
	<button type="submit" class="btn btn-default">Upload</button>
	<button type="submit" class="btn btn-default" style="float:right;">Tilføj artikel</button>
</div>

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

		</form>
	</aside>
	



	<div class="row">
		<main class="col-md-12">
<?php include "fetchDb.php"; 


?>


		



		
		</main>
	</div>
	<article class="container">
		<img src="img/csgo.jpg" class="col-md-12 img-responsive " id="Padding">

		<h1 class="text-center">CTS</h1>
		<p class="text-center ">22/6 2006 <br> 19:00</p>
		<p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit obcaecati inventore recusandae magnam fugit illum totam ad, hic eos veniam ipsa, dolorum, accusantium optio assumenda odit voluptate quod explicabo? Dolorem?</p>

	</article>
	<article class="container">
		<img src="img/csgohalloween.png" class="col-md-12 img-responsive" id="Padding">
		<h1 class="text-center">Halloween</h1>
		<p class="text-center ">22/9 2008 <br> 6:00</p>
		<p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit obcaecati inventore recusandae magnam fugit illum totam ad, hic eos veniam ipsa, dolorum, accusantium optio assumenda odit voluptate quod explicabo? Dolorem?</p>

	</article>
	<article class="container">
		<img src="img/csgo2.jpg" class="col-md-12 img-responsive" id="Padding">
		<h1 class="text-center">Anti terrorist</h1>
		<p class="text-center ">23/8 2007 <br> 16:57
		<p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit obcaecati inventore recusandae magnam fugit illum totam ad, hic eos veniam ipsa, dolorum, accusantium optio assumenda odit voluptate quod explicabo? Dolorem?</p>

	</article>

	<article class="container">
		<img src="img/gaben.jpg" class="col-md-12 img-responsive" id="Padding"></img>
		<h1 class="text-center">Gaben</h1>
		<p class="text-center  ">12/3 2007 <br> 17:00</p>
		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit obcaecati inventore recusandae magnam fugit illum totam ad, hic eos veniam ipsa, dolorum, accusantium optio assumenda odit voluptate quod explicabo? Dolorem?</p>

	</article>
	
	
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