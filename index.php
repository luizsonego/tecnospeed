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
			<li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#item1">ITEM 1</a></li>
            <li class="item"><a href="#item2">ITEM 2</a></li>
            <li class="item"><a href="#item3">ITEM 3</a></li>
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
  $(document).ready(function() {
    function filterPath(string) {
      return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
    }
    $('a[href*=#]').each(function() {
      if ( filterPath(location.pathname) == filterPath(this.pathname)
      && location.hostname == this.hostname
      && this.hash.replace(/#/,'') ) {
        var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
        var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
        if ($target) {
          var targetOffset = $target.offset().top;
          $(this).click(function() {
            $('html, body').animate({scrollTop: targetOffset}, 500);
            return false;
          });
        }
      }
    });
  });
</script>
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
</body>
</html>
