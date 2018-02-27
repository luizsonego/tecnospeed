<?php
require_once('class/funcao.class.php');
$index = new Site();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
	<style type="text/css">
		.imghead{
			background: url('https://luizsonego.github.io/images/image1.jpg') no-repeat fixed 0px 0/ 100% auto;
			width: 100%;
			height: 500px;
		}
	</style>
</head>
<body>
    <nav id="menu">
        <ul class="flex-container row">
          <li class="item"><img src="image/logo.png" ></li>
          <li class="item"></li>
			    <li class="item"><a href="#home">HOME</a></li>
          <li class="item"><a href="#item1">IMOVEIS</a></li>
          <li class="item"><a href="#item2">BOX</a></li>
        </ul>
    </nav>



<div id="container">
	

	<section class="" id="home">
		<div class="imagem">
			<div class="imghead"></div>
		</div>
	</section>

	<section class="" id="item1">
		<div class="full-height">
			<h1>Imóveis</h1>
			<div class="flex-container row-wrap center">
			<?php echo $index->imoveis(); ?>				
			</div>
		</div>
	</section>


	<section class="" id="item2">
		<div class="flex-container row">
			<?php echo $index->box(); ?>
		</div>
	</section>

	
	<section class="" id="item3">
	</section>

<footer>
	<p class="text-center">© 2018</p>
</footer>

</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script type="text/javascript">
jQuery(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 400) {
     $("#menu").addClass("menu");
    } else {
     $("#menu").removeClass("menu");
    }
  });
});
</script>
<script type="text/javascript">
  function numberToReal(numero) {
    var numero = numero.toFixed(2).split('.');
    numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}
</script>
</body>
</html>
