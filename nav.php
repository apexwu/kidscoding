
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="">EAT WHAT</a>
        </li>
		<li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="index.php">首頁</a>
        </li>

	    <?php 
		session_start();
		require_once("conMysql.php");
		if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
		?>
		<li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="phpmember">登入會員</a>
        </li>
		
		<?php } else {?>
		<li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="phpmember">會員中心</a>
        </li>
		<?php } ?>
		
		
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="fastOK.php">隨機選餐</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="allchoice.php">完整搜尋</a>
        </li>
		
		
	      <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="gps.php">地圖搜尋</a>
        </li>	
		
		
		
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="okk.php">新增商家</a>
        </li>
		  <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="we.php">補充&說明</a>
        </li>
		
		
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="tell.php">聯絡我們</a>
        </li>
      </ul>
    </nav>
<script>
document.oncontextmenu = function () { return false; };
        document.onkeydown = function () {
            if (window.event && window.event.keyCode == 123) {
                event.keyCode = 0;
                event.returnValue = false;
                return false;
            }
       };
</script>
<?php

define('DEBUG', false);

error_reporting(E_ALL);
ini_set('display_errors', DEBUG ? 'On' : 'Off');

?>
