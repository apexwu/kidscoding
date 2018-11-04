<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CODEFUTURE-苗栗專屬的兒童程式教室</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  </head>
      <?php
		require_once("conMysql.php");
        $sql = "SELECT * FROM `boss` where `id`=1"; /*從eatwhat隨機抓取一個*/
        $result = mysqli_query($conn,$sql);
		while($row =$result->fetch_assoc()){//印出資料
        $newnews=$row['newnews'];
        }
	    ?>
  <style>
	body,input,button,select,textarea{
    font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
	

</style>
    <body id="page-top">
 <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
	<?php include("nav.php");  ?>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">麥塊兒童程式設計</h1>
        <h3 class="mb-5">
          <p>透過遊戲培養孩子們程式邏輯思維，改變未來</p>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">開始使用</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Codefuture兒童程式教室-最新消息</h2><h5>(由管理員發布)</h5>
			<h3><span style="color:orange;"><?php echo $newnews?></span></h3>
            <p class="lead mb-5"></p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">我們提供...</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0"><a href="phpmember/"><p  class="text-warning">加入會員</p></a></h3>
          <h2 class="mb-5">我們提供..</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>RWD</strong>
            </h4>
            <p class="text-faded mb-0">符合各種平台的響應式網頁</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-pencil"></i>
            </span>
            <h4>
              <strong>Low-income For free</strong>
            </h4>
            <p class="text-faded mb-0">中低收入戶免費!</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-like"></i>
            </span>
            <h4>
              <strong>最優良的教學品質</strong>
            </h4>
            <p class="text-faded mb-0">基於微軟跨國團隊原生教材改良
              <i class="fa fa-heart"></i>
              台北師資，苗栗價格!</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-mustache"></i>
            </span>
            <h4>
              <strong>即時回復</strong>
            </h4>
            <p class="text-faded mb-0">任何問題均會轉送至臉書並即時由工程師回復</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">動手做自己的APP</h2>
		<h1 class="mx-auto mb-5">啟蒙孩子的創作者精神</h1>
        <a class="btn btn-primary btn-xl" href="/phpmember/member_join.php">快速註冊</a>
		<p></p>
		<a class="btn btn-primary btn-xl" href="allchoice.php">課程搜尋</a>
      </div>
    </section>
	  <!-- classinfo -->
    <section class="classinfo">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">遊戲也能學程式? </h2>
		<h1 class="mx-auto mb-5">透過遊戲和團隊實作，讓孩子不知不覺學會寫程式</h1>
		<p class="mx-auto mb-5">讓孩子學習Scratch編程，在讓孩子將所學帶入自己的遊戲中，自己的遊戲自己做!!用自己學來的程式讓遊戲內容更豐富，並透過專案研討和朋友們分享討論。成就感和遊戲性將使孩子更專注於學習，對於未來科技時代提前做好準備!!</p>

      </div>
    </section>
	
	<!-- picture -->
	 <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h5><虛擬世界IOT 編程控制機器人 ></h5>
		
           		
 <div class="col-lg-10 mx-auto">	
<iframe  width="100%" height="500px"  src="https://www.youtube.com/embed/WMMaR4xkuZk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

<hr>
<br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	   <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="j/001.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="j/002.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="j/003.jpg" alt="Third slide">
    </div>
	  <div class="carousel-item">
      <img class="d-block w-100" src="j/004.jpg" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
          </div>
        </div>
      </div>
    </section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<hr>
    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">System</h3>
          <h2 class="mb-5">we use</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="okk.php">
              <span class="caption">
                <span class="caption-content">
                  <h3>現在加入!</h3>
                  <p class="mb-0">不再猶豫，科技是不會衰退的未來</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="fastOK.php">
              <span class="caption">
                <span class="caption-content">
                  <h3>麥塊及scratch課程說明</h3>
                  <p class="mb-0">馬上點擊以了解第一手課程資訊</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="allchoice.php">
              <span class="caption">
                <span class="caption-content">
                  <h3>北中南開課資訊</h3>
                  <p class="mb-0">完整顯示課堂資訊，給您最便利的選擇</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="tell.php">
              <span class="caption">
                <span class="caption-content">
                  <h3 class="ml9">問題回復</h3>
                  <p class="mb-0">您寶貴的意見都會是我們往前的動力</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->

<script>
    console.log('%c拜託別看啦 O_o"', 'color: #f00; font-size: 50px;');
   
</script>
        <div class="content-section-heading text-center">
        
  
		  
		  
		  
        </div>
	
	


	
		<hr>
		
		
    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="60%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226.79764616469998!2d120.8182748531337!3d24.56287365967596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469ac09023d6ed9%3A0xf664374a2a1ec49c!2zMzYw6IuX5qCX57ij6IuX5qCX5biC5b-g5a2d6LevMTE56JmfMw!5e0!3m2!1szh-TW!2stw!4v1541319272481"></iframe>
      <br/>
      <small>
        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226.79764616469998!2d120.8182748531337!3d24.56287365967596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469ac09023d6ed9%3A0xf664374a2a1ec49c!2zMzYw6IuX5qCX57ij6IuX5qCX5biC5b-g5a2d6LevMTE56JmfMw!5e0!3m2!1szh-TW!2stw!4v1541319272481"></a>
      </small>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/BabeABC/">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          
        </ul>
			<a href="tell.php">任何問題，請聯繫我們!</a>
			<hr>
        <p class="text-muted small mb-0">Copyright &copy; NUU-CSIE LAB405 </p>
		<br>
	
      </div>
    </footer>
	
	
	
	<div class="ml9">

</div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
 <script>
$(".carousel").carousel({
interval: 1000
})
</script>
  </body>

</html>
