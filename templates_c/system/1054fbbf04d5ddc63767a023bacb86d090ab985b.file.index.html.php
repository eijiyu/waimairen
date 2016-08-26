<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:57:35
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/index.html" */ ?>
<?php /*%%SmartyHeaderCode:26198105357beb2ff892b20-51488040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1054fbbf04d5ddc63767a023bacb86d090ab985b' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/index.html',
      1 => 1453379740,
      2 => 'file',
    ),
    '3fbc4ede513af2ddd9912a12a8a8611f8354d73a' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/wxsite.html',
      1 => 1452504956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26198105357beb2ff892b20-51488040',
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
  'unifunc' => 'content_57beb2ff972225_59804742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb2ff972225_59804742')) {function content_57beb2ff972225_59804742($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html>
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
/public/wxsite/css/weixinlunbo.css">   
 
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

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var taction = "<?php echo $_smarty_tpl->tpl_vars['Taction']->value;?>
"; 
</script>


<script>
		var myScroll, pullDownEl, pullDownOffset,pulldowncate,
	pullUpEl, pullUpOffset,
	generatedCount = 0;
	
	

function pullDownAction () {
	 
}

function pullUpAction () {
  if(is_loading == false){
       is_loading = true;
		setTimeout(function () { 
		shopdata();
	    
		 
		// 数据加载完成后，调用界面更新方法 Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 400);	// <-- Simulate network congestion, remove setTimeout from production!
	}
	 
}

function loaded() {
	pullDownEl = document.getElementById('pullDown');
	pullDownOffset = pullDownEl.offsetHeight;
	pullUpEl = document.getElementById('pullUp');	
	pullUpOffset = pullUpEl.offsetHeight;
	
	myScroll = new iScroll('wrapper', {
		scrollbarClass: 'myScrollbar', /* 重要样式 */
		useTransition: false, /* 此属性不知用意，本人从true改为false */
		topOffset: pullDownOffset,
		onRefresh: function () {
		if(is_loading == false){
			if (pullDownEl.className.match('loading')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
			} else if (pullUpEl.className.match('loading')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
			}
			}
		},
		onScrollMove: function () { 
		if(is_loading == false){
			if (this.y > 1 && !pullDownEl.className.match('flip')) {
				
				pullDownEl.className = 'flip';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = '松手开始更新...';
				this.minScrollY = 0;
			} else if (this.y < 1 && pullDownEl.className.match('flip')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
				this.minScrollY = -pullDownOffset;
			} else if (this.y < (this.maxScrollY + 50) && !pullUpEl.className.match('flip')) {
				pullUpEl.className = 'flip';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '松手开始更新...';
				this.maxScrollY = this.maxScrollY;
			} else if (this.y > (this.maxScrollY + 1) && pullUpEl.className.match('flip')) {
		
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
				this.maxScrollY = pullUpOffset;
			}
			}
		},
		onScrollEnd: function () {
		if(is_loading == false){
			if (this.y < (this.maxScrollY + 50)){
					 
					pullUpEl.className = 'loading';
					pullUpEl.querySelector('.pullUpLabel').innerHTML = '加载中...';				
				 	pullUpAction();	
			}
			}
		
			 
		}
	});
	
	setTimeout(function () { document.getElementById('wrapper').style.left = '0'; }, 200);
}

//初始化绑定iScroll控件 
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
document.addEventListener('DOMContentLoaded', loaded, false); 


</script>
 <script>
 
 	$(function(){ 
		 
 	      var bullets = document.getElementById('abdcd').getElementsByTagName('span');
 	      var slider =  Swipe(document.getElementById('slider'), {
           auto: 3000,
           continuous: true,
           callback: function(pos) { 
              var i = bullets.length;
              while (i--) {
                bullets[i].className = ' ';
              }
              bullets[pos].className = 'on'; 
           }
        });  
});  
</script>


 

 
</head>
<body> 
<style>
.page-app{ background:#f0f0f0;}
body{background:#f0f0f0;}
</style>
<div id="loading" style="display: block;"><div class="loadingbox"><section class="ffffbox"><div class="loadingpice"></div></section></div></div> 
<!-- <div id="hallist">  -->
	
<!--地址栏-->
<!-- <div class="topContainer">
 <div class="topBox">
  <div class="topL"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/choice"),$_smarty_tpl);?>
');"  ><a href="javascript:void(0);"><i class="marker"></i><span id="showareainfo"><?php if ($_smarty_tpl->tpl_vars['areaid']->value>0){?><?php echo $_smarty_tpl->tpl_vars['mapname']->value;?>
<?php }else{ ?>定位地址信息...<?php }?></span><i class="fa fa-angle-right"></i></a></div>
  <div class="topR"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/search"),$_smarty_tpl);?>
');"  ><a href="javascript:void(0);"><i class="search"></i></a></div>
 </div>
</div>
 -->
<div class="homescreenadd"   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/choice"),$_smarty_tpl);?>
');"  ><i class="homescreendw"></i><span  id="showareainfo"><?php if ($_smarty_tpl->tpl_vars['areaid']->value>0){?><?php echo $_smarty_tpl->tpl_vars['mapname']->value;?>
<?php }else{ ?>定位地址信息...<?php }?></span><i class="fa fa-angle-right"></i></div>
<div class="homscrsear"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/search"),$_smarty_tpl);?>
');"   ><input style="    background-position: 3% center;" readonly type="text" placeholder="请输入店铺名、商品名"></div>



	
	 
	 <div id="wrapper" style="top:73px;">
	 
<div id="scroller">

<!--展示-->
<div class="bannerCon" style="margin-top:0px;">
    <section id="slider" class="swipe" style="visibility: visible;">
  				<div class="swipe-wrap">
  				  <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"adv",'fileds'=>"*",'limit'=>"5",'where'=>"advtype='weixinlb' and  module='".((string)$_smarty_tpl->tpl_vars['sitetemp']->value)."' "),$_smarty_tpl);?>
 
  				  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  				   <div class="wrap" ><a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['linkurl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
" style="width:100%; height:114px;" alt=""></a></div>
  				  <?php } ?>
  				</div>
  			 <div class="bgboxgo">
  						<div class="botton-box mBxCm" id="abdcd">
						<?php if (count($_smarty_tpl->tpl_vars['list']->value['list'])>1){?>
  							 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  							    <span class="on"></span>
  							 <?php } ?>
						<?php }?>
  					 </div>
  				</div>
  			</section>
</div>


<!--分类部分-->
<div class="categoryContainer">
 <ul>
 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moretypelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  <li <?php if ($_smarty_tpl->tpl_vars['items']->value['activity']=='waimai'){?>  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/waimai/typeid/".((string)$_smarty_tpl->tpl_vars['items']->value['param'])),$_smarty_tpl);?>
');"  <?php }else{ ?>  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/marketlist/typeid/".((string)$_smarty_tpl->tpl_vars['items']->value['param'])),$_smarty_tpl);?>
');"  <?php }?> >
	<a><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
"  class="category_img"><span><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</span></a>
 </li>
 <?php } ?>
 
  <li onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/waimai"),$_smarty_tpl);?>
');"  ><a><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/tb8.png" class="category_img"><span>更多</span></a></li>
 </ul>
</div>
<!--展示-->

 
<!-- 专题页 -->
<div class="advertisement"> 
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ztylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
 <ul class="adver"   style="width:<?php echo $_smarty_tpl->tpl_vars['items']->value['imgwidth'];?>
; height:<?php echo $_smarty_tpl->tpl_vars['items']->value['imgheight'];?>
px; border:none;"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/specialpage/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"    >
  <li style="width:100%; height:<?php echo $_smarty_tpl->tpl_vars['items']->value['imgheight'];?>
px;">
  <a href="javascript:void(0);"><img  style="width:100%; height:<?php echo $_smarty_tpl->tpl_vars['items']->value['imgheight'];?>
px;" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['indeximg'];?>
"></a></li>
 </ul>
 <?php } ?>
 
</div>

<div class="homscrbusinCon">
 <div class="homscrbusintit"><h3>附近商家</h3></div>
 
		<div id="pullDown" style="display:none;">
			<span class="pullDownIcon"></span><span class="pullDownLabel">下拉刷新...</span>
		</div>
		
 <div class="homscrbusinBox">
  <ul   id="supplierlist">
   
 
  </ul>
 </div>
 	 <center>
	<div id="pullUp" style="border-top:0px; ">
			<div style="width:35%; float:left;text-align:right;"><span class="pullUpIcon" style="  margin-left:60%;"></span></div>
			<div style="width:65%; float:left;text-align:left;"><span class="pullUpLabel">上拉加载更多...</span></div>
		</div>
   </center>
   
 
</div>
 
<!---------------------------------------------------------------------------首页结束----------------------------------------------------------------------------------->
 
 

 </div>
</div>
<script>
var can_show = true;
var page = 1;
var catid = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['typeid']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
var order = 0;
var qsjid = 0;
var typeid = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['typeid']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
var myaddress = '<?php echo $_smarty_tpl->tpl_vars['myaddress']->value;?>
';
var search_input = '<?php echo $_smarty_tpl->tpl_vars['search_input']->value;?>
';
var shopshowtype  = '<?php echo $_smarty_tpl->tpl_vars['shopshowtype']->value;?>
';
var checknext = false;
var lat = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lat']->value)===null||$tmp==='' ? 0 : $tmp);?>
';
var lng = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lng']->value)===null||$tmp==='' ? 0 : $tmp);?>
';
var addressname = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['addressname']->value)===null||$tmp==='' ? '' : $tmp);?>
';
var is_loading = false;

$(function(){ 
  
 
  <?php if (!empty($_smarty_tpl->tpl_vars['lng']->value)&&!empty($_smarty_tpl->tpl_vars['lat']->value)&&!empty($_smarty_tpl->tpl_vars['addressname']->value)){?>
		$('#showareainfo').text(addressname);
		shopdata(); 
   <?php }else{ ?>   	
		getLocation(); 
   $('#loading').show();
   <?php }?>
  
});
function getLocation()
  {
  	
  if (navigator.geolocation)
    { 
       navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
   else{$('#showareainfo').text("浏览器不支持定位");shopdata();}
  }

function showPosition(position)
{ 

 $.getScript('http://api.map.baidu.com/geocoder/v2/?ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
&callback=renderReverse&location='+position.coords.latitude+','+position.coords.longitude+'&output=json&pois=0&coordtype=wgs84ll'); 
  // $.getScript('http://api.map.baidu.com/geocoder/v2/?ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
&callback=renderReverse&location=23.036989,114.3679&output=json&pois=0&coordtype=wgs84ll'); 
}
function renderReverse(datas){
 
	 if(datas.status == 0){  
	 
	    $('#showareainfo').text(datas.result.formatted_address); 
		 $.ajax({
           type: 'GET', 
           url: '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/saveloation/datatype/json"),$_smarty_tpl);?>
',
           async:false,
 		  //	data: {'lat':23.036989,'lng':114.3679},
		    data: {'lat':datas.result.location.lat,'lng':datas.result.location.lng,'addressname':datas.result.formatted_address},
           dataType: 'json',success: function(content) { 
          	//var info = JSON.parse(content);
             // $(allobj).eq(i).find('.juliid').eq(0).text(content.msg);  
             if(content.error == false){
                 
             	shopdata();
             }else{
             	  shopdata();// alert(content.msg);
             }
	    	  },
           error: function(content) { 
         
              	shopdata();//alert('提交数据失败');
	        }
       });
		
		
		
		
	 }else{
	   shopdata();
	   $('#showareainfo').text('定位失败');
	 }
 }
  function showError(error)
  {
  	$('#showareainfo').text("定位失败");
   switch(error.code) 
    {
    	
    case error.PERMISSION_DENIED:
      //x.innerHTML="User denied the request for Geolocation."
    //  $('#showareainfo').text("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
     // x.innerHTML="Location information is unavailable."
      //$('#showareainfo').text("Location information is unavailable.");
      break;
    case error.TIMEOUT:
    //  x.innerHTML="The request to get user location timed out."
    //$('#showareainfo').text("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
     // x.innerHTML="An unknown error occurred."
     //  $('#showareainfo').text("An unknown error occurred.");
      break;
    }
    
    shopdata();
  }
  function shopdata(){  
			  
			var tempurl = siteurl+'/index.php?ctrl=wxsite&action=indexshoplistdata&page=@page@';
   	 	     tempurl = tempurl.replace('@random@', 1+Math.round(Math.random()*1000)).replace('@page@',page);
	         $.getScript(tempurl); 
  
  }
 function showmoreshop(datas){
  
	var spdatas = eval(datas); 
    if(spdatas.length > 0){
			$("#pullUp").show();
		//var t4em = '';
		for(i=0;i<spdatas.length;i++){
		 	var tempdata = 'red';
				var tempdata2 = '营业中';
					if(spdatas[i].opentype != 2){
					tempdata = '#ccc';
					tempdata2 = '已打烊';
				} 
				if(spdatas[i].opentype ==3){
					tempdata = 'green';
					tempdata2 = '可预订';
				} 
				var backdata = '';
				
				
				
				if(spdatas[i].shoptype == 1  ){   
					backdata +=' <a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=mk&id='+spdatas[i].id+'">';
				  }else{
				 		backdata += '<a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=wm&id='+spdatas[i].id+'">';
				  }
				backdata +='  	 <li> ';
				backdata +='  		<div class="homscrbusinimg"><img src="'+spdatas[i].shoplogo+'"></div> ';
				backdata +='  		<div class="listbox"> ';
				backdata +='  		<div class="homscrbusinR"> ';
				backdata +='  		 <div class="homscrbusint">'+spdatas[i].shopname+'</div> ';
				backdata +='  		 <div class="homscrbusinsale"> ';
				for(j=1;j<=spdatas[i].point;j++){
					backdata += '<i class="fa fa-star"></i>';
				}
				for(q=1;q<=5-spdatas[i].point;q++){
					backdata += '<i class="fa fa-star" style="color:#C7C7C7;"></i>';
				}
				backdata +='  		<span>月售'+spdatas[i].ordercount+'单</span></div> ';
				backdata +='  		 <div class="homscrbusinpric" style="overflow:auto;"><span>起送价￥'+spdatas[i].limitcost+'</span><b>|</b><span>配送费￥'+spdatas[i].pscost+'</span> ';
				if(spdatas[i].attrdet.input != undefined && spdatas[i].attrdet.input != '' ){
					backdata +='  		<b>|</b><span>'+spdatas[i].attrdet.input+'</span>';
				}
				backdata +='  		</div> ';
				backdata +='  		 <div class="homscrbusinadd" >距'+spdatas[i].juli+' &nbsp;'+spdatas[i].address+'</div> ';
				backdata +='  		</div> ';
				backdata +='  		</div> ';
				backdata +='  	</li> ';
				backdata +='  	</a> ';
				
			//	t4em+=backdata;
			$('#supplierlist').append(backdata); 
			 
			
	}
	
	 setTimeout(function () { 
		 is_loading = false;
		 myScroll.refresh();
		// 数据加载完成后，调用界面更新方法 Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 1000);
	
				page = Number(page+1);  
        //       $(".mBxCr").hide(); 
              
		}else{
			 setTimeout(function () { 
		 is_loading = false;
		 
		// 数据加载完成后，调用界面更新方法 Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 1000);
				can_show =  false; 
      		      if(page == 1){ 
      		      	 error($('#supplierlist'),'很遗憾,附近商家正在覆盖中...');
					$("#pullUp").hide();					 
      		 
      		      }else{ 
      		        $('.pullUpLabel').text('更多商家,敬请期待中...'); 
      		      }
      		   myScroll.refresh();
			   
		
		}
		
		
	 
    	
 }
  
</script>
 
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