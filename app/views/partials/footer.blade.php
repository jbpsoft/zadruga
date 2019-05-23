<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="footer">
		<div style="display: inline-flex;">
			<div class="deoFutera">
				<a href="/home">{{ Langauge::lang(1, Session::get('jezik')) }} </a>
				<hr>
				<h4>
					<a href="http://maps.google.com/?q=Добричка 2, 18000 Ниш" target="_blank"><i class="material-icons">near_me</i> {{ Langauge::lang(12, Session::get('jezik')) }}</a>
				</h4>
				<h4>
					<a href="mailto:ilicanita@zsjuznesrbije.rs"><i class="material-icons">local_post_office</i> anita.ilic@zsjuznesrbije.rs</a>
				</h4>
				<img src="images/Grb.png" style="position: relative; top:-80px; height: 135px; margin-left: 16px; ">
			</div>
			<div class="deoFutera">
				<a href="https://www.zssrbije.org" target="_blank">{{ Langauge::lang(19, Session::get('jezik')) }} </a>
				<hr>
				<span style="font-size: 14pt;">
					<a href="http://maps.google.com/?q=Скерлићева 24, 11 000 Београд" target="_blank"><i class="material-icons">near_me</i> {{ Langauge::lang(18, Session::get('jezik')) }}</a>
				</span style="font-size: 15pt;">
			</div>	
		</div>
		<a href="/home" ><img src="images/logo1.png" data-toggle="tooltip" data-placement="top" title="{{ Langauge::lang(1, Session::get('jezik')) }}" style="position: absolute; right: 13px; bottom:30px;  height: 180px;"></a>
		<br>
		<div style="margin-top: 35px; color: #fff;">
			<center>
				<a href="/home">{{ Langauge::lang(1, Session::get('jezik')) }} </a> &copy; 2019
			</center>
		</div>
	</div>
</body>
</html>