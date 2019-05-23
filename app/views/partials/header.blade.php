<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	

	<img src="images/Ministarstvo.png" style="position: absolute; top: 0px; left: 0px; height: 140px;max-width: 100%">
	<a href="/home" ><img src="images/logo1.png" data-toggle="tooltip" data-placement="bottom" title="{{ Langauge::lang(1, Session::get('jezik')) }}" style="position: absolute; right: 10px; top:-25px;  height: 180px;"></a>
	<img src="images/Grb.png" style="position: absolute; top:0px; height: 135px; left: 25px; ">
  	<div class="naslov">{{ Langauge::lang(1, Session::get('jezik')) }}</div>

	<div class="container1">
		<div class="navbar1">
			<a href="/home">{{ Langauge::lang(3, Session::get('jezik')) }}</a>
			<div class="dropdown1">
				<button class="dropbtn1">{{ Langauge::lang(6, Session::get('jezik')) }} &nbsp; 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown1-content">
					<a href="/nadleznost">{{ Langauge::lang(9, Session::get('jezik')) }}</a>
					<a href="/oganizaciona-struktura">{{ Langauge::lang(10, Session::get('jezik')) }}</a>
					<a href="/sektori">{{ Langauge::lang(11, Session::get('jezik')) }}</a>
				</div>
			</div>
			<a href="#home">{{ Langauge::lang(4, Session::get('jezik')) }}</a>
			<a href="#home">{{ Langauge::lang(5, Session::get('jezik')) }}</a>
			<a href="#">{{ Langauge::lang(7, Session::get('jezik')) }}</a>
			<a href="/linkovi">{{ Langauge::lang(2, Session::get('jezik')) }}</a>
			<a href="#modalCenter" role="button" data-toggle="modal">{{ Langauge::lang(8, Session::get('jezik')) }}</a>
		</div>
		<div class="jezici">
			<form action="/home">
				<input type="submit" name="jezik"  class="btn btn-primary btn-sm" value="cir"></>
				<input type="submit" name="jezik"  class="btn btn-primary btn-sm" value="lat"></>
				<input type="submit" name="jezik"  class="btn btn-primary btn-sm" value="en"></>
			</form>
		</div>
	</div>
	
	 <div id="modalCenter"  class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="background-image: url('images/Ministarstvo.png');" >
                    	<img src="images/logo1.png" style="position: absolute; top: -22px;  height: 100px; right: 20px;">
                        <h2 class="modal-title" style="color: #fff;  margin-left: 15px; margin-top:4px;" >{{ Langauge::lang(8, Session::get('jezik')) }}</h2>
                    </div>
                    <div class="modal-body">
                    	<br>
                		<h4 style="float: left; margin-left: 20px;">{{ Langauge::lang(13, Session::get('jezik')) }}</h4><br>
                		<hr><h4 style="float: left; margin-left: 20px;">{{ Langauge::lang(14, Session::get('jezik')) }}</h4><br>
                		<hr>
                		<h4 style="float: left; margin-left: 20px;">{{ Langauge::lang(15, Session::get('jezik')) }}</h4><br>
                		<hr>
                		<h4 style="float: left; margin-left: 20px;">{{ Langauge::lang(16, Session::get('jezik')) }}</h4><br>
                		<hr>
                    </div>
                    <div class="modal-footer" style="background-color: #053582; border-top: 3px solid #cc1616;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ Langauge::lang(17, Session::get('jezik')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}


		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
</body>
</html>                                                               