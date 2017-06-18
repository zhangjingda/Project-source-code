<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>烈日电子商务有限公司</title>
<link rel="stylesheet" href="<?php echo C('STATIC_RES');?>/css/common.min.css">
<link rel="stylesheet" href="<?php echo C('STATIC_RES');?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="__PUBLIC__/css/index.css">
<link rel="stylesheet" href="__PUBLIC__/css/proCategory.css">
<script type='text/javascript' src="<?php echo C('STATIC_RES');?>/js/jquery-2.1.1.min.js"></script>
<!-- <script type='text/javascript' src="<?php echo C('STATIC_RES');?>/js/jquery.easing.min.js"></script> -->

</head>
<body>

<!-- 这是首部共用部分的开始部分 -->
<header>
   <div class="navSection">
      <div>
          <ul class="nav_lef">
              <li><a href="__APP__/Index/index">首页</a><span>|</span></li>
              <?php  if(session("username")){ echo '<li>
                    <a href="__APP__/Form/handleLogin" style="padding: 0" id="abc">欢迎'.session("username").'</a>|</li>'; } else{ echo '<li><a href="__APP__/Form/handleLogin" style="padding: 0" id="abc">立即登录</a>|</li>'; } ?>

              
              <li><a href="__APP__/Form/handleEnroll" style="padding: 0">立即注册</a></li>
          </ul>
           <ul class="nav_rig">
           <li><a href="">商品导航</a><span></span></li>
              <li><a href="__APP__/ShopCart/shopcart/?key=4">我的足迹</a><span>|</span></li>
              <li><a href="__APP__/ShopCart/shopcart/?key=3">我的收藏</a>|</li>
              <li><a href="__APP__/ShopCart/shopcart/?key=2">已购商品</a>|</li>
              <li><a href="__APP__/ShopCart/shopcart/?key=1">购物车</a>|</li>
          </ul>

      </div>
   </div>
</header>
<!-- 搜索相关内容 -->
<div class="sear">
       <div class="logo">

          <a href="__APP__/Index/index"><img src="<?php echo C('STATIC_RES');?>/images/logo.png"></a>

       </div>
  <div class="search">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="search">
                    <span class="input-group-btn">
              <button class="btn btn-default" type="button" id="searchbtn">
              <span class="glyphicon glyphicon-search" style="padding: 0 20px;">
              </span></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

$("#searchbtn").click(function(e){
    if($("#search").val().trim()!=""){
         var ss = $("#search").val().trim();
         location.href="/webshop/index.php/Search/search/?key="+ss;
    }
})


 // $(function(){

 //      var query = window.location.search.substr(1);
 //      var query = query.split("=");
    
 //      switch(query[1]){

 //        case '1': 
 //        $(".shopcart-title-i").eq(0).trigger("click");

 //        break;
 //        case '2':
 //        $(".shopcart-title-i").eq(1).trigger("click");

 //        break;
 //        case '3':

 //        $(".shopcart-title-i").eq(2).trigger("click");


 //        break;
 //        case '4':
 //        $(".shopcart-title-i").eq(3).trigger("click");


 //        break;
 //        default: 
 //        $(".shopcart-title-i").eq(0).trigger("click");


 //      }
 // }) 

</script>
<div class="product_link">
<a href="/webshop/index.php/Index/showProduct/?phoneid=5g5fdg25a4">苹果7</a>
<a href="/webshop/index.php/Index/showProduct/?phoneid=5443g5gg55">华为p10</a>
<a href="/webshop/index.php/Index/showProduct/?phoneid=ags5g21441">荣耀8</a>
<a href="/webshop/index.php/Index/showProduct/phoneid/1g32f4aa35">小米6</a>
</div>

</div>
<!-- 导航相关内容 -->
<nav>
   <div>
      <ul>

        <li><a href="__APP__/Index/proCategory/?brand=苹果">苹果</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=华为">华为</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=OPPO">OPPO</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=VIVO">VIVO</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=三星">三星</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=小米">小米</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=魅族">魅族</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=乐视">乐视</a></li>
        <li><a href="__APP__/Index/proCategory/?brand=努比亚">努比亚</a></li>

      </ul>
   </div>
</nav>
<!-- 这是首部共用部分的结束部分 -->




<script>
  


</script>


<div class="content_lef">
  <div class="cont_lef">

    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><div class="showpro">
          <div class="img_top">
          <a href="http://localhost/webshop/index.php/Index/showProduct/?phoneid=<?php echo ($result["phoneid"]); ?>">
          <img width='180px' height="200px" 
          src='/webshop/Admin/Tpl/Public/upload/<?php echo ($result["imgsrc1"]); ?>'></a>
          </div>
          <div class="price">￥<?php echo ($result["price"]); ?>
          <a href="javascript:void(0)">
           <span class="glyphicon glyphicon-heart heart" 
           style='float:right;margin-right: 10px;margin-top:5px;font-size: 16px;'></span></a>
           </div> 

          <div><?php echo ($result["proname"]); ?>&nbsp;&nbsp;<?php echo ($result["color"]); ?>
          &nbsp;<?php echo ($result["neicun"]); ?>+<?php echo ($result["cunchu"]); ?><br><br></div>
          <div class="title"><?php echo ($result["provtitle"]); ?></div>
           <div class="comment">
           
           </div>
          <div class="buy"><div class="btn btn-danger btn-block btn-xs">加入购物车</div></div>  
          <input type="hidden" value="<?php echo ($result["phoneid"]); ?>" class="phoneidData">
     </div><?php endforeach; endif; else: echo "" ;endif; ?>

   

  </div>



</div>

<div class="content_rig">

     

     <?php if(is_array($recommend)): $i = 0; $__LIST__ = array_slice($recommend,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recommend): $mod = ($i % 2 );++$i;?><div class="rig_item">
        <div class="item">
        <a href="/webshop/index.php/Index/showProduct/phoneid/<?php echo ($recommend["phoneid"]); ?>">
           <img src="/webshop/Admin/Tpl/Public/upload/<?php echo ($recommend["imgsrc1"]); ?>" width="190px" height="170px">
        </a>
       <div></div>
       <span style="margin-left: 30px;"><?php echo ($recommend["proname"]); ?></span>
       <span style="margin-left: 10px;"><?php echo ($recommend["color"]); ?></span>
        </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

</div>


<span id="test"></span>
<footer>
	欢迎访问烈日电子商务网站<br/>
	<a href="">联系我们</a><a href="">改善建议</a><br/>
	Copyright © 2017-2020  烈日lieri.com 版权所有
</footer>

<script>
 $(".buy").click(function(e){
       var index = $(".buy").index($(this));
       $.post("__APP__/ShopCart/saveUserShopCart",
        {
          phoneid: $(".phoneidData").eq(index).val()
        },
        function(data){
           alert(data);
       })
   })

   $(".heart").click(function(e){

       var index = $(".heart").index($(this));
       var that = $(this);
       $.get("__APP__/ShopCart/storeProduct",
        {
          phoneid: $(".phoneidData").eq(index).val()
        },
        function(data){
          that.css("color","#f00");
          $(".heart").eq(index).unbind("click");
          alert(data);
       })

   })
</script>
</body>
</html>