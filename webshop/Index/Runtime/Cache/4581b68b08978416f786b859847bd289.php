<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>烈日电子商务网站购物车</title>
<link rel="stylesheet" href="<?php echo C('STATIC_RES');?>/css/common.min.css">
<link rel="stylesheet" href="<?php echo C('STATIC_RES');?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="__PUBLIC__/css/index.css">
<link rel= "stylesheet" href="__PUBLIC__/css/shopcart.css">
<style type="text/css">
   #pagebox{
     width: 823px;
     height: 30px;
     margin-left: 100px;
     text-align: center;
     
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
    margin:40px auto;
 }
</style>
<script type='text/javascript' src="<?php echo C('STATIC_RES');?>/js/jquery-2.1.1.min.js"></script>
<script type='text/javascript' src="<?php echo C('STATIC_RES');?>/js/vue.min.js"></script>
</head>
<body>
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

 $(function(){

      var query = window.location.search.substr(1);
      var query = query.split("=");
    
      switch(query[1].substr(0,1)){

        case '1': 
        $(".shopcart-title-i").eq(0).trigger("click");

        break;
        case '2':
        $(".shopcart-title-i").eq(1).trigger("click");

        break;
        case '3':

        $(".shopcart-title-i").eq(2).trigger("click");


        break;
        case '4':
        $(".shopcart-title-i").eq(3).trigger("click");


        break;
        default: 
        $(".shopcart-title-i").eq(0).trigger("click");


      }
 }) 

 
  // hash();

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


<div id="shopcart-wrap">
<div class="shopcart-title">
  <div class="shopcart-title-i showborder">购物车</div>
  <div class="shopcart-title-i">已购商品</div>
  <div class="shopcart-title-i">我的收藏</div>
  <div class="shopcart-title-i">我的足迹</div>
</div>
<div class="shopcart-content">
   <div class="shopcart-content-c show">
       <?php if(is_array($item)): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="sc-box">
        <input type="hidden" value=<?php echo ($item["phoneid"]); ?> class="bianhao">
           <input type="checkbox" class="chec">
           <img src="/webshop/Admin/Tpl/Public/upload/<?php echo ($item["imgsrc1"]); ?>" width="100px" height="100px"/>
           <span class="f"><?php echo ($item["proname"]); ?><br>
                <br><?php echo ($item["color"]); ?>/<?php echo ($item["neicun"]); ?>+<?php echo ($item["cunchu"]); ?><br>
          </span>
          <span class="jian">-</span>
          <input type="text" value="1" class="num" readonly="readonly">
          <span class="jia">+</span>
          <span class="price">￥<?php echo ($item["price"]); ?></span>
          <input type="button" value="删除" class="del">
          <input type="button" value="收藏" class="store">
          <input type="hidden" value="<?php echo ($item["phoneid"]); ?>" class="phon">
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

      <div class="price-wrap">
        <span>全选 :</span><input type="checkbox" id="allcheck">  <span>反选 :</span><input type="checkbox" id="fancheck">
        <span id="allprice">￥0.00</span><span class="f">实付款:</span><br>
        <div class="btn btn-danger gopay">去付款</div>
      </div>

   </div>
   <div class="shopcart-content-c">


      <?php if(is_array($buydata)): $i = 0; $__LIST__ = $buydata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$buydata): $mod = ($i % 2 );++$i;?><div class="buy-wrapper">

      <img src="/webshop/Admin/Tpl/Public/upload/<?php echo ($buydata["imgsrc1"]); ?>" width="100px" height="100">
      <span><?php echo ($buydata["proname"]); ?>&nbsp;<?php echo ($buydata["color"]); ?><br/><?php echo ($buydata["neicun"]); ?>+<?php echo ($buydata["cunchu"]); ?></span>

      <button type="button" class="delbuy">删除</button>
      <button type="button" class="buyagain">再次购买</button>
      <button type="button" class="tocomment" id="tocomment">评论</button>
      <input type="hidden" value="<?php echo ($buydata["phoneid"]); ?>" class="buyphoneid">

      <input type="hidden" value="<?php echo ($buydata["id"]); ?>" class="buyid">
      <div>购买时间:&nbsp;<?php echo ($buydata["time"]); ?></div>
      <div style="margin-top: 10px;">评论:</div>
      <div class="mycomment"></div>

      </div><?php endforeach; endif; else: echo "" ;endif; ?>
      <div class="myPage"><?php echo ($pagestr); ?></div>
      <script>
      var page = "<?php echo ($page); ?>";
      var len = document.querySelectorAll(".page").length;
      for(var i=0;i<len;i++){
        (function(i){
                document.querySelectorAll(".page")[i].onclick = function(e){
                    var searchval = $("#search").val().trim() || "";
                    var text = parseInt(e.target.textContent.trim());
                    var ss = location.href.lastIndexOf("\\");
                    ss = window.location.href.substr(ss);
                    window.location.href =
                     "__APP__/ShopCart/shopcart/?key=2&page="+text;
                }
        })(i)
      }

        var len = document.querySelectorAll(".page1").length;
        for(var i=0;i<len;i++){
        (function(i){
                document.querySelectorAll(".page1")[i].onclick = function(e){
                    var searchval = $("#search").val().trim()||"";
                    var ss = page;
                    if(ss=="")ss="1";
                    ss = parseInt(ss.trim());
                    if(i==0){
                        window.location.href = "__APP__/ShopCart/shopcart/?key=2&page="+(--ss);     
                    }else if(i==1){
                        window.location.href = "__APP__/ShopCart/shopcart/?key=2&page="+(++ss);
                    } 
                }
        })(i)
      }

      </script>
   </div>

 <script>

    function comment(){

      var isSetStar = false;
      var that = this;
      var yscroll = 0;
      this.index = 0;

      var setCss = function(node,obj){
        for(var i in obj){
          node.style[i] = obj[i];
        }
  
      }
      
      this.createMask = function (){

           var node  = document.createElement("div");
           node.id = "c_mask";
           setCss(node,{
              position: "absolute",
              top: "0",
              left: "0",
              width: "100%",
              height: document.body.scrollHeight+1000+"px",
              backgroundColor: "#000",
              opacity: "0.8",
              zIndex: "10",
              display: "none"
            })
          document.body.appendChild(node);
      }


      this.createCommentBox = function(){

           var str = "<div id='comment_wrapper'>输入评论内容"+
           "<textarea cols='60' rows='6' style='padding:5px'>"+
           "</textarea>评分之后不可以修改&nbsp;<img src='__PUBLIC__/images/star1.png' width='20px'"+
           " height='20px'>"+
           "<img src='__PUBLIC__/images/star1.png' width='20px' heigh='20px'>"+
           "<img src='__PUBLIC__/images/star1.png' width='20px' heigh='20px'>"+
           "<img src='__PUBLIC__/images/star1.png' width='20px' heigh='20px'>"+
           "<img src='__PUBLIC__/images/star1.png' width='20px' heigh='20px'>"+
           "<button style='padding: 5px 15px;float:right;"+
           "margin-top:15px' id='submitcom'>评论</button>"+
           "<div style='color: #f00;position:absolute;top:5px;"+
           "right:10px;cursor:pointer' id='cancel'>X</div></div>";

           $("body").append(str);

           $("#comment_wrapper").css({
              position: "absolute",
              top: document.body.scrollHeight/5+"px",
              left: document.body.scrollWidth/4+"px",
              width: "500px",
              height: "260px",
              backgroundColor: "#fff",
              boxShadow: "0 0 5px #00f",
              zIndex: "15",
              padding: "30px",
              display: "none"
           })


      }

      this.showCommentBox = function(){
           $("#comment_wrapper").css({
               display: "block"
           })
      }

      this.hideCommentBox = function(){
             $("#comment_wrapper").css({
               display: "none"
           })
      }

      this.showMask = function(){
          $("#c_mask")[0].style.display = "block";
      }

      this.hideMask = function(){
          $("#c_mask")[0].style.display = "none";
      }
      
      this.addEvent  =function(node,event,fun){
        if(window.addEventListener)node.addEventListener(event,fun,false);
        else if(window.attachEvent)node.attachEvent("on"+event,fun);
      }

      this.clickCommentBtn = function(){
          var that  =  this;
          $(".tocomment").click(function(){
                that.index = $(".tocomment").index($(this));
                that.showMask();
                that.showCommentBox();
                var index  = $(".tocomment").index($(this));
                yscroll = document.body.scrollTop;
                window.scrollTo(0,0);
          })



      }

      var cancelBtn = function(){
          this.hideCommentBox();
          this.hideMask();
          $("textarea").val("");
          window.scrollTo(0,yscroll);
      }.bind(this);



      var submitcom = function(){

          if($("textarea").val()==""){
            alert("评论不能为空");
            return;
          }
          var temp = false;
          $('#comment_wrapper img').each(function(i,item){
               if(item.src.trim() == "http://localhost/webshop/Index/Tpl/Public/images/star.png"){
                    temp = true;
               }  
          })
          if(temp == false){
            alert("评分不能为空");
            return;
          }


          var phoneid = $(".buyphoneid").eq(that.index).val();
          var buyid = $(".buyid").eq(that.index).val();

          var img  = $(".buy-wrapper img").eq(that.index).attr("src");
          var arr = img.split("/");
          img  = arr[arr.length-1];
          var star = 0;
          var commentContent = $("textarea").val().trim();

          $('#comment_wrapper img').each(function(i,item){
               if(item.src.trim() == "http://localhost/webshop/Index/Tpl/Public/images/star.png"){
                    star++;
               }  
          })

          $.get("__APP__/ShopCart/saveComement" ,
            {phoneid:phoneid,star:star,comment:commentContent,img:img,buyid:buyid},
            function(data){
               alert(data)
               window.location.href = "/webshop/index.php/ShopCart/shopcart/?key=2";
               
          })
          
          that.hideCommentBox();
          that.hideMask();
          $("textarea").val("");
          $('#comment_wrapper img').each(function(i,item){
               item.src = "__PUBLIC__/images/star1.png";   
          })

          window.scrollTo(0,yscroll);
      }

      this.bind  = function(){

          var node1 = document.getElementById("cancel");
          this.addEvent(node1,"click",cancelBtn)

          var node2 = document.getElementById("submitcom");
          this.addEvent(node2,"click",submitcom);

          $("#comment_wrapper img").bind( "click", function(){  
               isSetStar = true;
               var index  = $('#comment_wrapper img').index($(this));
               $('#comment_wrapper img').attr("src" ,"__PUBLIC__/images/star1.png" )
               $('#comment_wrapper img').each(function(i,item){
                    if(i<=index){
                        item.src="__PUBLIC__/images/star.png";
                    }
               })
          })


      }

      this.init = function(){
          //创建遮罩
          this.createMask();
          //创建评论框
          this.createCommentBox();
          //绑定评论按钮和取消按钮
          this.bind();
          //点击评论按钮
          this.clickCommentBtn();
      }

    }
    var mycomment  = new comment();
    mycomment.init();

    // $(".buy-wrapper .mycomment strong").
    // 
    function hideCommentBtn(){
         
    }


    function getComment(){
        var temp = "";
        $(".buyid").each(function(i,item){
            if(i!=$(".buyid").length-1)
            temp+=$(item).val().trim()+"@";
            else temp+=$(item).val().trim();
        })

        $.post("__APP__/ShopCart/getComment",{buyid: temp} , function(data){
             for(var i in data){
                 if(typeof data[i] === "object"){
                      for(var j in data[i]){
                          var tt = parseInt(data[i]['star'].trim());
                          $(".buy-wrapper .mycomment")
                          .eq(i).html("<br/>"+data[i]['content']+"<br/><br/>"+data[i]['time'])
                          $(".tocomment").eq(i).hide();
                          
                      }
                     
                 }else{
                       
                 }
             }
        },"json")
    }
     getComment();
  

 </script>

   <div class="shopcart-content-c">
     <?php if(is_array($storedata)): $i = 0; $__LIST__ = $storedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$storedata): $mod = ($i % 2 );++$i;?><div class="store-wrapper">

      <img src="/webshop/Admin/Tpl/Public/upload/<?php echo ($storedata["imgsrc1"]); ?>" width="100px" height="100">
      <span><?php echo ($storedata["proname"]); ?>&nbsp;<?php echo ($storeydata["color"]); ?><br/><?php echo ($storedata["neicun"]); ?>+<?php echo ($storedata["cunchu"]); ?>
      </span>

      <button type="button" class="tobuy">购买</button>
      <button type="button" class="delstore">删除</button>
      <input type="hidden" value="<?php echo ($storedata["phoneid"]); ?>" class="storephoneid">
      <div>收藏时间:<?php echo ($storedata["time"]); ?></div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>

     
   </div>
   <div class="shopcart-content-c"></div>
</div>
</div>

<script>
   
   $(".tobuy").click(function(e){
      var index = $(".tobuy").index($(this));
      var phoneid  = $(".storephoneid").eq(index).val().trim();
      window.location.href = 
          "http://localhost/webshop/index.php/Index/showProduct/?phoneid="+phoneid
  })

  $(".delstore").click(function(e) {
      if(!confirm("确认删除吗?"))return ;
      var index = $(".delstore").index($(this)); 
      var phoneid  = $(".storephoneid").eq(index).val().trim(); 
      $.get("__APP__/ShopCart/delStore",{phoneid: phoneid},function(data){
          
          $(".shopcart-content-c").find(".store-wrapper").eq(index).remove();

      })
  });

</script>

<script>

  $(".buyagain").click(function(e){
      var index = $(".buyagain").index($(this));
      var phoneid  = $(".buyphoneid").eq(index).val().trim();
      window.location.href = 
          "http://localhost/webshop/index.php/Index/showProduct/?phoneid="+phoneid
  })

  $(".delbuy").click(function(e) {
      if(!confirm("确认删除吗?"))return ;
      var index = $(".delbuy").index($(this)); 
      var phoneid  = $(".buyphoneid").eq(index).val().trim(); 
      $.get("__APP__/ShopCart/delBuy",{phoneid: phoneid},function(data){
          
          $(".shopcart-content-c").find(".buy-wrapper").eq(index).remove();

      })
  });


 
 
</script>

<script type="text/javascript" charset="utf-8">


   //全部的金额
   var allnum = 0;
  //顶部选项卡切换 
  $(".shopcart-title-i").click(function(e){
      var index =$(".shopcart-title-i").index($(this));
      $(".shopcart-content-c").css("display","none").eq(index).css("display","block");
      if($('.shopcart-content-c').eq(0).hasClass("show")){
        $('.shopcart-content-c').eq(0).removeClass("show");
      }
      $('.shopcart-title-i').css("borderTop","2px solid transparent")
      .eq(index).css("borderTop","2px solid #F00");
  })


//数量减少
 $(".jian").click(function(e){

     var index  = $(".jian").index($(this));
     var ss = parseInt($(".num")[index].value.trim());
     if(ss>1)
     $(".num")[index].value =  ss-1;
     getAllMoney();

 })
 //数量增加
 $(".jia").click(function(e){

     var index  = $(".jia").index($(this));
     var ss = parseInt($(".num")[index].value.trim());
     $(".num")[index].value =  ss+1;
     getAllMoney();

 })

 //全选按钮的实现
 $("#allcheck").change(function(e){
     if($(this)[0].checked) $(".chec").each(function(i,item){item.checked= "checked";})
     else $(".chec").each(function(i,item){item.checked= "";})
     getAllMoney();
 })
 //反选按钮的实现
 $("#fancheck").change(function(e){
    $(".chec").each(function(i,item){
          var ss = item.checked;
          item.checked= !ss;
     })
    getAllMoney();
 })
//删除按钮的实现
  $(".del").click(function(e){
     var index = $(".del").index($(this));
     var text = $(".bianhao").eq(index).val();
     
     $.get("__APP__/ShopCart/delShopCart",{phoneid: text},function(data){
         $(".shopcart-content-c .sc-box").eq(index).remove();
          getAllMoney()
         if($(".shopcart-content-c .sc-box").size()==0){
            $("#allprice").html("￥0.00");
         }
     })
  
  })
//收藏按钮的实现
 $(".store").click(function(e){
    var index  = $(".store").index($(this));
    var text = $(".bianhao").eq(index).val();
      $.get("__APP__/ShopCart/storeProduct",{phoneid: text},function(data){
         alert(data);
     })
 })

 //去付款按钮的实现
 $(".gopay").click(function(){
     if($("#allprice").html().trim().substring(1)!=="0.00"){
        var arr =[];
        $(".chec").each(function(i,item){
             if(item.checked){
                 var obj ={
                   phoneid: $(".phon").eq(i).val(),
                   num:$(".num").eq(i).val() 
                 }
                 arr.push(obj);
             }
        })
        var ss ="/phoneid/";
        var ss1 ="/num/";
        for(var i=0;i<arr.length;i++){
            if(i!=arr.length-1){
              ss+=arr[i].phoneid+"_";
              ss1+=arr[i].num+"_";
            }
            else {
              ss+=arr[i].phoneid;
              ss1+=arr[i].num;
            }  
        }
      
         
        window.location.href = 
        "http://localhost/webshop/index.php/ShopCart/money"+ss+ss1;

     }else{
        alert("请先选择商品");
     }
 })
//勾选商品前面的选项是调用
 $(".chec").change(function(e){
     getAllMoney();
 })
 //总额的实时计算

function getAllMoney(){
   allnum=0;
   $(".chec").each(function(i,item){
        if(item.checked){
            var ss = $(".num").eq(i).val().trim();
            ss = parseInt(ss);
            var ff = $(".price").eq(i).text().trim().substr(1);
            ff= parseFloat(ff);
            allnum = allnum + ss*ff; 
            allnum = parseFloat(allnum);
        }
        if(allnum.toString().indexOf(".")>=0){
          var hh = allnum.toString().indexOf(".");
          var str = allnum.toString().substr(hh+1);
          if(str.length==1)$("#allprice").html("￥"+allnum+"0");
          else if(str.length==2)$("#allprice").html("￥"+allnum);
          else if(str.length>2){
             var str1 = str.substr(0,2);
             $("#allprice").html("￥"+parseInt(allnum)+"."+str1);
          }
        }
        else $("#allprice").html("￥"+allnum+".00");
    })
}










</script>



<div style="height: 1px ;width: 1px; clear: both;display: block;"></div>




<footer>
  欢迎访问烈日电子商务网站<br/>
  <a href="">联系我们</a><a href="">改善建议</a><br/>
  Copyright © 2017-2020  烈日lieri.com 版权所有
</footer>

</body>
</html>