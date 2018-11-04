<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Bootstrap-图片</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">  
<style>
    h1{
     color: #0F0305;
     font-weight:900;  
     text-shadow:1px 1px 0px #AD55C9;   
    }
	p{
	 color: #6A031A;
	 size: 12px;
	}
</style>
</head>
<body>
<div class="container">
	<div class="header">
		<h1>图片1</h1><br />
		<p>.img-rounded：添加 border-radius:20px 来获得图片圆角。</p><br>
		<img src="j/001.jpg" class="img-rounded" style=" border-radius:20px;">
	</div>
	<div class="one">
		<h1>图片2</h1><br />
		<p>.img-circle：添加 border-radius:500px 来让整个图片变成圆形。</p><br>
		<img src="j/002.jpg" width="600" height="600" class="img-circle" style="border-radius:500px;">
	</div>
	<div class="two">
		<h1>图片3</h1><br />
		<p>.img-thumbnail：添加一些内边距（padding）和一个灰色的边框。</p><br>
		<img src="j/003.jpg" class="img-thumbnail" style="padding:8px 10px 8px 10px; ">
	</div>
	<div class="foot">
		<h1>图片4</h1><br />
		<p>.img-responsive让图片支持响应式设计。 图片将很好地扩展到父元素。
		   .img-responsive 类将 max-width: 100%;和 height: auto; 样式应用在图片上：</p><br>
		<img src="j/004.jpg" class="img-responsive">
	</div>
</div>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
