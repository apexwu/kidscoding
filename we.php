
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>we</title>

    <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
<style>body,input,button,select,textarea{
    font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
	.productdemo img {  
        display:none;  
}  
.ml5 {
  position: relative;
  font-weight: 300;
  font-size: 4.5em;
  color: #402d2d;
}

.ml5 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
  line-height: 1em;
}

.ml5 .line {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 3px;
  width: 100%;
  background-color: #402d2d;
  transform-origin: 0.5 0;
}

.ml5 .ampersand {
  font-family: Baskerville, "EB Garamond", serif;
  font-style: italic;
  font-weight: 400;
  width: 1em;
  margin-right: -0.1em;
  margin-left: -0.1em;
}

.ml5 .letters {
  display: inline-block;
  opacity: 0;
}
	</style>
  <body class="bg-light">
 <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <?php include("nav.php");  ?>
    <div class="container">
      <div class="py-5 text-center">
     

<h1 class="ml5">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters letters-left"><h3>網頁補充</h3></span>
    <span class="letters ampersand"><h4>&amp;</h4></span>
    <span class="letters letters-right"><h3>doc說明</h3></span>
    <span class="line line2"></span>
  </span>
</h1>


        
       <div class="col-lg-10 mx-auto"> <div class="productdemo">
      <img src="w/001.jpg" id="img1" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/002.jpg" id="img2" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/003.jpg" id="img3" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/004.jpg" id="img4" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/005.jpg" id="img5" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/006.jpg" id="img6" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/007.jpg" id="img7" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/008.jpg" id="img8" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/009.jpg" id="img9" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/010.jpg" id="img10" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/011.jpg" id="img11" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/012.jpg" id="img12" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/013.jpg" id="img13" class="img-fluid" alt="Responsive image"><br><hr>
	  <img src="w/014.jpg" id="img14" class="img-fluid" alt="Responsive image"><br><hr>

      </div></div>
      </div>
	  

     
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script
  src="https://code.jquery.com/jquery-1.7.2.js"
  integrity="sha256-FxfqH96M63WENBok78hchTCDxmChGFlo+/lFIPcZPeI="
  crossorigin="anonymous"></script>
	 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
     
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
	
	<script>
      $(window).load(function(){  
        $('.productdemo img').first().fadeIn(1000, function(){  
                $(this).next().fadeIn(1000, arguments.callee);  
        });  
}); 
</script>
	
	<script>
 
	 
	 $('.ml11 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: function(e, i, l) {
      var offset = -0.625 + 0.625*2*i;
      return offset + "em";
    }
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 8000
  });
	 
    </script>
  </body>
</html>
