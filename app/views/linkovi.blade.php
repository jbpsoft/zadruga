<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@include('partials/header')
<div class="wrapp">
	<h2>{{ Langauge::lang(2, Session::get('jezik')) }}</h2>
	<hr>
	<div style="padding: 30px; margin-top: -25px;">
		<h4><a href="https://www.srbija.gov.rs" target="_blank">{{ Langauge::lang(20, Session::get('jezik')) }}</a></h4>
		<h4><a href="http://www.minpolj.gov.rs" target="_blank">{{ Langauge::lang(21, Session::get('jezik')) }}</a></h4>
		<h4><a href="https://www.mfin.gov.rs" target="_blank">{{ Langauge::lang(22, Session::get('jezik')) }}</a></h4>
		<h4><a href="https://apr.gov.rs/%d0%bf%d0%be%d1%87%d0%b5%d1%82%d0%bd%d0%b0.3.html" target="_blank">{{ Langauge::lang(23, Session::get('jezik')) }}</a></h4>
		<h4><a href="http://www.stat.gov.rs" target="_blank">{{ Langauge::lang(24, Session::get('jezik')) }}</a></h4>
		<h4><a href="https://pks.rs" target="_blank">{{ Langauge::lang(25, Session::get('jezik')) }}</a></h4>
		<h4><a href="https://www.ica.coop/en" target="_blank">{{ Langauge::lang(26, Session::get('jezik')) }}</a></h4>
		<h4><a href="http://www.zadruznisavezrs.net" target="_blank">{{ Langauge::lang(28, Session::get('jezik')) }}</a></h4>
		<h4><a href="https://zsbih.wordpress.com/" target="_blank">{{ Langauge::lang(29, Session::get('jezik')) }}</a></h4>
		<h4><a href="http://www.zadruzna-zveza.si" target="_blank">{{ Langauge::lang(27, Session::get('jezik')) }}</a></h4>
		<h4><a href="http://zadruge.coop/hr" target="_blank">{{ Langauge::lang(30, Session::get('jezik')) }}</a></h4>
		<h4><a href="http://www.ruralinfoserbia.rs" target="_blank">{{ Langauge::lang(31, Session::get('jezik')) }}</a></h4>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="material-icons">arrow_upward</i></button>
</div>

@include('partials/footer')
</body>
</html>