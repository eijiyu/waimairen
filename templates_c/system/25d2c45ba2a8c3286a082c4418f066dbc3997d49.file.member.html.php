<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:57:42
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/member.html" */ ?>
<?php /*%%SmartyHeaderCode:150141142157beb3062167d1-77114725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d2c45ba2a8c3286a082c4418f066dbc3997d49' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/member.html',
      1 => 1452306646,
      2 => 'file',
    ),
    '3fbc4ede513af2ddd9912a12a8a8611f8354d73a' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/wxsite.html',
      1 => 1452504956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150141142157beb3062167d1-77114725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'Taction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb3062b50d2_05266877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb3062b50d2_05266877')) {function content_57beb3062b50d2_05266877($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="MobileOptimized" content="320">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta name="HandheldFriendly" content="true">
<meta name="author" content="johnye">
<meta name="shenma-site-verification" content="f28da5e2e3fb6e2afd372a3eedfda998">
<meta name="baidu-site-verification" content="eafwEzRbnz">
<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title> 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/public1.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/newweixin.css"> 
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/index.css">
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/newscrollbar.css">
 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/shopshow.css">   

	<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/jquery.js"></script> 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/public.js"></script>  
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/adminpage/public/js/allj.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/swipe.js"></script> 
    <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/iscroll.js"></script> 
    <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/newiscroll.js"></script> 
  
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/wxshop.js"></script>  

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var taction = "<?php echo $_smarty_tpl->tpl_vars['Taction']->value;?>
"; 
</script>
<script> 
		var myScroll;
function loaded() {
	myScroll = new iScroll('wrapper', {
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		}
	});
}
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false); 
document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
</script>

 

 
</head>
<body> 
<style>
.page-app{ background:#f0f0f0;}
body{background:#f0f0f0;}
</style>
<div id="loading" style="display: block;"><div class="loadingbox"><section class="ffffbox"><div class="loadingpice"></div></section></div></div> 
<!-- <div id="hallist">  -->
	
	
	 
<div id="wrapper" style="top:0px;">
<div id="scroller">


<!-------------------------登录------------------------->
<!--基本信息-->
<div class="signinCon">
 <div class="signint"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/myaccount"),$_smarty_tpl);?>
');"  >
  <ul>
   <li> <img style="border-radius:50%;" src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['logo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userlogo']->value : $tmp);?>
"></a></li>
   <li><h3><?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
</h3></li>
  </ul>
 </div>
 <div class="signinb">
  <ul>
   <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/memcard"),$_smarty_tpl);?>
');" ><a><i class="sigye"></i><span>余额 <?php echo $_smarty_tpl->tpl_vars['member']->value['cost'];?>
</span></a></li>
   <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/gift"),$_smarty_tpl);?>
');" ><a><i class="sigjf"></i><span>积分 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['score'])===null||$tmp==='' ? '0' : $tmp);?>
</span></a></li>
   <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/juan"),$_smarty_tpl);?>
');" ><a><i class="sigyh"></i><span>优惠券 <?php echo $_smarty_tpl->tpl_vars['juanshu']->value;?>
</span></a></li>
   <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/giftlist"),$_smarty_tpl);?>
');"   style="background-image:none;"><a><i class="siglp"></i><span>礼品</span></a></li>
  </ul>
 </div>
</div>
<!--链接-->
<div class="signinlink">
 <ul>
  <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/address"),$_smarty_tpl);?>
');" ><a><i class="signindz"></i><span>我的地址<i class="fa fa-angle-right"></i></span></a></li>
  <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/collect"),$_smarty_tpl);?>
');" ><a><i class="signinsc"></i><span>我的收藏<i class="fa fa-angle-right"></i></span></a></li>
  <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/juan"),$_smarty_tpl);?>
');"    ><a><i class="signinyh"></i><span>优惠券<i class="fa fa-angle-right"></i></span></a></li>
  <li   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/order"),$_smarty_tpl);?>
');" ><a><i class="signindd"></i><span>我的订单<i class="fa fa-angle-right"></i></span></a></li>
   	<?php if ($_smarty_tpl->tpl_vars['wxuserbangd']->value!=1){?>
  <li id="icon-bangdmem"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/bangdmem"),$_smarty_tpl);?>
');"  ><a><i class="signinbangdmem"></i><span>绑定账号<i class="fa fa-angle-right"></i></span></a></li>
  <?php }?>
    <li id="icon-exit" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/loginout"),$_smarty_tpl);?>
');"   ><a><i class="signinoutlogin"></i><span>退出<i class="fa fa-angle-right"></i></span></a></li>

  
 </ul>
</div>

 
 </div> 
  </div>
 
<script>
$(function(){

	function isWeiXin(){
	    var ua = window.navigator.userAgent.toLowerCase();
	    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
	        return true;
	    }else{
	        return false;
	    }
	}
	
 	var browser = {

			versions: function () {
			var u = navigator.userAgent, app = navigator.appVersion;

			return {
			trident: u.indexOf('Trident') > -1, //IE内核
			presto: u.indexOf('Presto') > -1, //opera内核
			webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
			gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
			mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
			ios: !!u.match(/(i[^;]+;(U;)? CPU.+Mac OS X)/), //ios终端
			android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
			iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
			iPad: u.indexOf('iPad') > -1, //是否iPad
			webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
			};
			} (),
			language: (navigator.browserLanguage || navigator.language).toLowerCase()
			}
			if (browser.versions.mobile ) {
			            

				            if(isWeiXin()){
								$("#icon-bangdmem").show();
								$("#icon-exit").hide();
					        }else{
							
							//	$("#icon-bangdmem").hide();
								$("#icon-exit").show();
								
							}
			         
			        }
				
})
</script>
 
 
 <!--底部-->

 
<!--底部-->
     <div class="bottom-bar-warp">
        <div class="bottom-bar" id="bottom-bar">
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/index"),$_smarty_tpl);?>
');"  ><i  class="icon icon_home"></i><div class="text" style="margin-top:-8px;">首页</div></div>
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/order"),$_smarty_tpl);?>
');" ><i class="icon icon_user"></i><div class="text" style="margin-top:-8px;">我的订单</div></div>
     
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/togethersay"),$_smarty_tpl);?>
');"  ><i class="icon icon_order"></i><div class="text" style="margin-top:-8px;">一起说</div></div>
            <div class="bbar-btn"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/member"),$_smarty_tpl);?>
');"><i class="icon icon_phone" style="margin-top: 8px;"></i></a><a class="text"  style="margin-top:-10px;">个人中心</div>
        </div>
    </div>




   
<!-- </div> -->

<script>
	$(function(){
		if( taction  == 'index' ){		
			$(".icon_home").next().css('color','#ff6e6e');
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#ff6e6e');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#ff6e6e');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#ff6e6e');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>
 <script>
 	$(function(){  		
 	   $('#loading').hide(); 
  });
  </script>
  
  
</body>
</html>
 <?php }} ?>