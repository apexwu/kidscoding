<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>New</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./style.css">
  </head>  <style>
	body,input,button,select,textarea{
    font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
</style>
  
 <?php

function mobile_check(){
$mobile_browser = false;
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$accept = $_SERVER['HTTP_ACCEPT'];
if(preg_match('/(acs|alav|alca|amoi|audi|aste|avan|benq|bird|blac|blaz|brew|cell|cldc|cmd-)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(dang|doco|erics|hipt|inno|ipaq|java|jigs|kddi|keji|leno|lg-c|lg-d|lg-g|lge-)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(maui|maxo|midp|mits|mmef|mobi|mot-|moto|mwbp|nec-|newt|noki|opwv)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(palm|pana|pant|pdxg|phil|play|pluc|port|prox|qtek|qwap|sage|sams|sany)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(sch-|sec-|send|seri|sgh-|shar|sie-|siem|smal|smar|sony|sph-|symb|t-mo)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(teli|tim-|tosh|tsm-|upg1|upsi|vk-v|voda|w3cs|wap-|wapa|wapi)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(wapp|wapr|webc|winw|winw|xda|xda-)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(up.browser|up.link|windowssce|iemobile|mini|mmp)/i',$user_agent)){
$mobile_browser = true;
}elseif(preg_match('/(symbian|midp|wap|phone|pocket|mobile|pda|psp)/i',$user_agent)){
$mobile_browser = true;
}
if((strpos($accept,'text/vnd.wap.wml')>0)||(strpos($accept,'application/vnd.wap.xhtml+xml')>0)){
$mobile_browser = true;
}
return $mobile_browser;

}



if(mobile_check()){

echo "<script>location.href = 'anew.php'</script>";

}else{


}
?>
  
  <body>
    <div class='opening'>
        <div class='star'>
            <div class='star__top'></div>
            <div class='star__bottom'></div>
        </div>
        <div class='square'>
        </div>
        <div class='circle'>
        </div>
        <div class='text-block'>
            <div class='text-block__title'>服務條款</div>
            <div class='text-block__desc'>請同意以下條款並繼續!</div>
        </div>
    </div>

    <div class='screenQ1'>
      <div class='text-block'>
          <div class='text-block__title'>服務條款</div>
          <div class='text-block__desc'>請同意以下條款並繼續!</div>
      </div>
      <div class='q-section'>
        <div class='q-section__wrapper'>
          <div class="q-section__number">
              Q1
          </div>
          <div class='q-section__title'>
              <h5>若購買本公司產品後，經授權得使用本公司產品，但並不具所有權，不得盜取本公司教材或未授權公布，違者依法論處!</h5>
          </div>
          <div class='q-section__desc'>
            如果了解，再點選!
          </div>
          <ul class='q-section__options'>
              <li data-value="1">是的，我了解並且會遵守!</li>
            
          </ul>

        </div>
      </div>
      <div class="animate-section">
          <div class='animate-section__square'></div>
          <div class='animate-section__triangle'></div>
          <div class='animate-section__circle'></div>
      </div>
    </div>

    <div class='screenQ2'>
        <div class='q-section'>
          <div class='q-section__wrapper'>
            <div class='q-section__number'>
                Q2
            </div>
            <div class='q-section__title'>
                <h5>填寫會員申請後，管理員將會進行審核，需要一些時間，新增後請耐心等待1~2天，感謝您!</h5>
            </div>
            <div class='q-section__desc'>
                如能了解，即可點擊按鈕開始加入會員囉!
            </div>
            <ul class='q-section__options'>
                <input type="button" class="btn btn-info" onclick="javascript:location.href='/phpmember/member_join.php'" value="前往加入!"></input>
			</ul>
          </div>
        </div>
        <div class='animate-section'>
            <div class='animate-section__square'></div>
            <div class='animate-section__triangle'></div>
            <div class='animate-section__circle'></div>
        </div>
    </div>

    <div class='calculating hide'>
        <div class='text-block'>
            <div class='text-block__title'>You are...</div>
            <div class='text-block__desc'>Keep scrolling to show the result</div>
        </div>
		
  
        <div class='trigger1' style='position:relative;top: 100vh'>  
            
        </div>

        <div class='trigger2' style='position:relative;top: 200vh'>  
            
        </div>

        <div class='trigger3' style='position:relative;top: 300vh'>  
            
        </div>

        <div class='trigger4' style='position:relative;top: 400vh'>  
            
        </div>
    </div>

    <div class='screenResult hide'>
        <div class='screenResult__text invisible'>Your personality is</div>
        <div class='screenResult__ans invisible'>TRIANGLE</div>
        <div class='tri triangle1'></div>
        <div class='tri triangle2'></div>
        <div class='tri triangle3'></div>
        <div class='tri triangle4'></div>
        <div class='tri triangle5'></div>
        <div class='tri triangle6'></div>
        <div class='tri triangle7'></div>
        <div class='triangle-blue'></div>
        <div class='triangle-white'></div>
        <div class='triangle-black'></div>
        <div class='screenResult__result invisible'>
            <div class='screenResult__per'>
                AGGRESSIVE
            </div>
            <div class='screenResult__per'>
                INDEPENDENT
            </div>
            <div class='screenResult__per'>
                SELF-MOTIVATED
            </div>
            <div class='screenResult__desc'>
                The triangle type people are natural-born leaders, full of passion and motivation,  trying to fix their mistakes as they go.
            </div>
            <div class='screenResult__btn' onclick="location.reload()">
                TRY AGAIN
            </div>
        </div>
    </div>
	<?php include("no12.php");  ?>
	</body>



    <script src='./script.js'></script>
  </body>
</html>