<?php
$link = $_GET['link'];
$homepage = file_get_contents($link);
$homepage = str_replace('/go', '/rgo', $homepage);

?>
<center>
<?php
if (empty($_GET['link'])) {
?>
<form method="GET" action="" target="hidden-form">
	<div class="form-group">
	<input type="text" name="link" class="form-control form-control-sm transparent-input" placeholder="Link" autocomplete="on" autofocus>
	</div>
	<center>
		<button type="submit" id="btn-main">Input Link</button>
	</center>
	<br>
</form>

<?php
}else{
?>
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-md-offset-3">
<div class="skip-container">
<div class="text-center">
<h4>Your link is almost ready.</h4>
<span id="countdown" class="countdown">
<span id="timer" class="timer">0</span>
<br>Seconds
</span>
<span class="desc"><a href="http://ouo.io/">Join now</a> and earn on every link you shorten. Up to <a href="/rates">$15 / 10000</a> views.</span>
<?php echo substr($homepage, 1905, 180); ?>
<button type="submit" id="btn-main" class="btn btn-main disabled">Get Link</button>
<noscript><button type="submit" class="btn btn-main">Get Link</button></noscript>
</form>
</center>
<?php
}
?>
