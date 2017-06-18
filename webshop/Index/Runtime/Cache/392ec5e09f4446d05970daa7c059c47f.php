<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>烈日电子商务有限公司</title>
  <link rel="stylesheet" href="<?php echo C('STATIC_RES');?>/css/common.min.css">
  <link rel="stylesheet" 
  href="<?php echo C('STATIC_RES');?>/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="__PUBLIC__/css/index.css">
    <style>
         .help-block{
        margin-bottom: -18px;
        color: #f00;
        min-height: 20px;
    }
     

    </style>
</head>
<body>

<div id="box">

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

<!-- 头部logo部分 -->
  <div class="header">
    <div class="setLogo" style="margin-top:30px">
        <a href="/webshop/index.php"><img src="<?php echo C('STATIC_RES');?>/images/logo.png"></a>
    </div>
    <div id="error"></div>
  </div>


<form method="post" action="__APP__/Form/checkCode" autocomplete="off" class="form-inline" id="issuccess" style="margin-left: 400px;">
                  
 <div class="form-group">
     <label  class="marginRight20" style="margin-right: 47px">密码</label>
     <input type="text" class="form-control" placeholder="请输入密码(8-16位)" id="pwd">
     <span  id="pwd1" style="color:#f00"></span>
 </div>
  <br><br>  
  
      <div class="form-group">
       <label  class="marginRight20">确认密码</label>
       <input type="text" class="form-control" placeholder="请重复输入一次密码(8-16位)" id="cerpwd">
       <span  id="cerpwd1" style="color:#f00"></span>
       </div>        
       
       <br><br>
        <div class="form-group">
         <input type="submit" value="完成" class="btn btn-danger btn-block" >
        </div>
                    
 </form>
 

<div style="height: 300px;"></div>
<footer>
  欢迎访问烈日电子商务网站<br/>
  <a href="">联系我们</a><a href="">改善建议</a><br/>
  Copyright © 2017-2020  烈日lieri.com 版权所有
</footer>


</div> 

<script type="text/javascript">
      function getEle(id){return document.getElementById(id)}
   
   window.onload = function(){
  
        var pwd = getEle("pwd");
        var cerpwd = getEle("cerpwd");
        var pwd1 = getEle("pwd1");
        var cerpwd1 = getEle("cerpwd1");

        pwd.addEventListener("blur" , pwdFunc , false);
        cerpwd.addEventListener("blur" , cerpwdFunc , false);

        function pwdFunc(){
             pwd1.innerHTML ="";
             if(this.value == ""){
                pwd1.innerHTML = "密码不能为空";
                return false;
             }else if(!/^[\w\d_]{6,16}$/.test(this.value)){
                 pwd1.innerHTML = "密码错误";
                 return false;
             }
             return true;
        }

        function cerpwdFunc(){
           cerpwd1.innerHTML = "";
           if(this.value == ""){
              cerpwd1.innerHTML = "不能为空";
              return false;
           }else if(this.value !== pwd.value){
                cerpwd1.innerHTML = "两次密码必须一致";
                cerpwd.value = "";
                return false;
           }
           return true;
        }


       getEle("issuccess").onsubmit = function(e){
           if(pwdFunc.call(pwd) && cerpwdFunc.call(cerpwd)){
               return true;
           }else return false;
       }



   }

</script>
</body>
</html>