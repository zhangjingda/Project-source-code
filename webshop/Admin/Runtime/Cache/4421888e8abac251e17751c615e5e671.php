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
  #pagebox{
     width: 823px;
     height: 30px;
     margin-left: 100px;
  }
  .page,.page1,.page2{
    height:30px;
    min-width:50px;
    line-height: 30px;
    text-align: center;
    border:none;
    outline: none;
    margin-left:5px;
    border-radius: 5px;
    transition: all .5s;
  }
  #content2 .page2{
     min-width: 20px;
     padding: 0;
     margin:0;

  }
  #content2 span{
     min-width: 20px;
     padding: 5px 0;
     margin:0;

  }
  .page:hover,.page1:hover{
    background-color: #f00;
    color:#fff;
    cursor: pointer;
  }

 .page:disabled{
  background-color: #f00;
  color:#fff;
  cursor: auto;
 }
 .page1:disabled{
  background-color: #ccc;
  opacity: 0.3;
  color:#000;
  cursor: auto;
 }
 .myPage{
    clear:both;
    margin:40px auto;
    width:1000px;
    text-align: center;
    margin-left: 300px;

 }


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
  <li class="left-side-i" style="border-left: 3px solid #f00;background-color: #ccc">
  未处理订单</li></a>
  <a href="__APP__/Order/hasOrder"><li class="left-side-i">已处理订单</li></a>
  <a href="__APP__/Order/count"><li class="left-side-i">销售统计</li></a>
 </ul>
</div>

 <!-- 头部相关内容结束 -->

<div class="content-wrapper">
 
    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$re): $mod = ($i % 2 );++$i;?><div class="cont">
        <input type="hidden" class="id1" value='<?php echo ($re["id"]); ?>'>
         <span class="tit">订单编号</span>
        <span class="tit">手机名称</span>
        <span class="tit">手机数量</span>
        <span class="tit">手机颜色</span>
        <span class="tit">手机内存</span>
        <span class="tit">手机存储</span>
        <span class="tit">用户名</span>
        <span class="tit">提交时间</span>
        <br><br>
        <span class="c1"><?php echo ($re["phoneid"]); ?></span>
        <span class="c1"><?php echo ($re["proname"]); ?></span>
        <span class="c1"><?php echo ($re["num"]); ?></span>
        <span class="c1"><?php echo ($re["color"]); ?></span>
        <span class="c1"><?php echo ($re["neicun"]); ?></span>
        <span class="c1"><?php echo ($re["cunchu"]); ?></span>
        <span class="c1"><?php echo ($re["username"]); ?></span>
        <span class="c1"><?php echo ($re["time"]); ?></span>
        <br><br>
        <span class="tit">送货地址</span><span><?php echo ($re["addr"]); ?></span><br>
        <span class="tit"><strong>用户留言:</strong></span><span><?php echo ($re["content"]); ?></span><br>
        <span class="tit">处理状态</span><span class="tip">未处理</span>

        <button class="mybtn">标记为处理状态</button>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>

   
</div>
<div class="myPage"><?php echo ($pagestr); ?></div>
<div style="height: 60px;clear:both;"></div>
<script>
$(".cont").delegate(".mybtn",'click',function(e){
     if(!confirm("确认已经处理了吗?"))return;
     var index = $(".mybtn").index($(this));
     var id = $(".cont .id1").eq(index).val().trim();
     var that = this;
     $.get("__APP__/Order/tip",{id:id},function(){     
            $(".cont").eq(index).remove();  
     })
})
</script>
<script>
    var page = "<?php echo ($page); ?>";
    var len = document.querySelectorAll(".page").length;
    for(var i=0;i<len;i++){
    (function(i){
            document.querySelectorAll(".page")[i].onclick = function(e){     
                var text = parseInt(e.target.textContent.trim());
                var ss = location.href.lastIndexOf("\\");
                ss = window.location.href.substr(ss);
                window.location.href = "__APP__/Order/order/page/"+text
            }
    })(i)
  }

    var len = document.querySelectorAll(".page1").length;
    for(var i=0;i<len;i++){
    (function(i){
            document.querySelectorAll(".page1")[i].onclick = function(e){
                var ss = page;
                if(ss=="")ss="1";
                ss = parseInt(ss.trim());
                if(i==0){
                    window.location.href = "__APP__/Order/order/page/"+(--ss) 
                }else if(i==1){
                    window.location.href = "__APP__/Order/order/page/"+(++ss)
                } 
            }
        })(i)
    }

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