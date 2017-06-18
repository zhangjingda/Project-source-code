<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="<?php echo C('STATIC_RES');?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="__PUBLIC__/css/order.css">
<style type="text/css">
 
.left-side ul li:first-of-type {
   background-color: #fff;
   border-left: 3px solid #ccc ;
}

a:hover{
  color:#000 !important;
}
a{
  color:#000 !important;
}

.brand-f{

}
.time-f{
  margin-left: 20px;
}
#mysubmit1{
  height: 26px;
  border:none;
  outline: none;
  margin-left: 20px;
  padding: 2px 10px;
  background-color: #000;
  color: #fff;
}

</style>
<script type='text/javascript' src="<?php echo C('STATIC_RES');?>/js/jquery-2.1.1.min.js"></script>
</head>
<body >


 <!-- 头部相关内容 -->
 <header>
   <img src="<?php echo C('STATIC_RES');?>/images/logo.png"/>
   <h1>烈日后台管理系统</h1>
 </header>

 <nav>
<ul>
	<li id="nav_a_box">
<!-- href="javascript:voie(0)" style="color:#f00" -->
    <a href="__APP__/Admin/adminHome">用户管理</a>
    <a href="__APP__/Product/product">商品管理</a>
    <a href="__APP__/Broadcast/broadcast">轮播管理</a>
    <a href="__APP__/Menu/menu">菜单管理</a>
    <a href="__APP__/MyList/mylist">列表管理</a>
    <a href="__APP__/Order/order"><span style="color:#f00">订单管理</span></a>
	</li>
</ul>
</nav>	

<div class="left-side">
 <ul>
  <a href="__APP__/Order/order">
  <li class="left-side-i">
  未处理订单</li></a>
  <a href="__APP__/Order/hasOrder"><li class="left-side-i">已处理订单</li></a>
  <a href="__APP__/Order/count">
  <li class="left-side-i"  style="border-left: 3px solid #f00;background-color: #ccc">销售统计</li></a>
 </ul>
</div>

 <!-- 头部相关内容结束 -->

<div class="content-wrapper">


<form method="get" action="__APP__/Order/count" id="mysubmit">

     <span class="brand-f">选择品牌名称:</span>
     <select id="proname" name="brand" >

       <option value="<?php echo ($brand); ?>"><?php echo ($brand); ?></option>
       <option value="苹果">苹果</option>
       <option value="华为">华为</option>
       <option value="OPPO">OPPO</option>
       <option value="VIVO">VIVO</option>
       <option value="小米">小米</option>
       <option value="魅族">魅族</option>
       <option value="三星">三星</option>
       <option value="乐视">乐视</option>
       <option value=""></option>
     </select><span class="time-f">选择时间:</span>
     从<input type="month" value="2016-01" name="fromtime" id="fromtime">
     到<input type="month"  name="totime" id="totime">
     <input  type="submit" value="查询" id="mysubmit1">

   </form>


   <table class="table table-hover">
  <caption>销售情况统计(<?php echo (substr($fromtime,0,10)); ?>到<?php echo (substr($totime,0,10)); ?>)</caption>
  <thead>
    <tr>
      <th>商品名称</th>
      <th>商品单价</th>
      <th>商品数量</th>
      <th>销售总额</th>
    </tr>
  </thead>
  <tbody>
  <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($result["proname"]); ?></td>
      <td><?php echo ($result["price"]); ?></td>
      <td class="mynum"><?php echo ($result["num"]); ?></td>
      <td class="mymoney"><?php echo ($result['price']*$result['num']); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>

<div>
  <table class="table">
  <caption>基本分析</caption>
  <thead>
    <tr>
      <th>总销量</th>
      <th>销售总额</th>
      <th>销售均价</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id="allnum"></td>
      <td id="allmoney"></td>
      <td id="permoney"></td>
    </tr>
  </tbody>
</table>
</div>

</div>


<div style="height: 60px;clear:both;"></div>
<script>
  $("#mysubmit").submit(function(e){
      var fromtime = $("#fromtime").val().trim()+"-01 00:00:00";
      var totime = $("#totime").val().trim();  
  })

window.onload =function(){

   var len = $(".mynum").length;
   var allnum = 0;
   for(var i=0;i<len;i++){
        allnum+=parseInt($(".mynum").eq(i).text().trim());
   }
   $("#allnum").text(allnum);

   len = $(".mymoney").length;
   var allmoney =0;
   for(var i=0;i<len;i++){
        allmoney+=parseInt($(".mymoney").eq(i).text().trim());
   }
   $("#allmoney").text(allmoney);
   
   if(allnum==0)allnum = 1;
   var temp = Math.ceil(allmoney/allnum)
   $("#permoney").html(temp);
   
}
</script>
<script>

</script>
<script>

//处理左侧列表导航的代码
$(".left-side ul").click(function(e){
	if(e.target.nodeName == "LI"){
		 $(this).find("li").css({'borderLeft' : "3px solid #ccc",'backgroundColor': "#fff"})
		 $(e.target).css({'borderLeft' : "3px solid #f00",'backgroundColor': "#ccc"})
		 if(e.target == $(".left-side ul").children(":eq(1)")[0]){
			      $("#content").css("display","none");
            $("#content2").css("display","block");
            $("footer").css("marginTop","400px");
	   }else if(e.target == $(".left-side ul").children(":eq(0)")[0]){
            $("#content").css("display","block");
            $("#content2").css("display","none");
            $("footer").css("marginTop","80px");
        }
    }
})



</script>

</body>
</html>