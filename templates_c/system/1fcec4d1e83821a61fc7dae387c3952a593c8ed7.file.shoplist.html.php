<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:57:59
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/shoplist.html" */ ?>
<?php /*%%SmartyHeaderCode:51622996157beb31778d473-81416663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fcec4d1e83821a61fc7dae387c3952a593c8ed7' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/shoplist.html',
      1 => 1453778450,
      2 => 'file',
    ),
    '3fbc4ede513af2ddd9912a12a8a8611f8354d73a' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/wxsite.html',
      1 => 1452504956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51622996157beb31778d473-81416663',
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
  'unifunc' => 'content_57beb31784d5e8_48782026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb31784d5e8_48782026')) {function content_57beb31784d5e8_48782026($_smarty_tpl) {?><!DOCTYPE html>
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
/public/wxsite/css/public.css">   
 <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/shoplist.css">   

 <style>
 .clkitm { min-height: 80px;}
 #cuisien{padding-left:0px;padding-right:0px;margin-left:0px; margin-right:0px;}
 #cuisien li{padding-left:0px;padding-right:0px;margin-left:0px; margin-right:0px;}
 </style>

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
/public/wxsite/js/template.min.js"></script>     
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
$(function(){ 
	shopdata();	
	 
	if( typeid != '' ){
		$('.kwselected span').html( $(".typeid_"+typeid).attr('catename') );
		
  
			 $(".typeid_"+typeid).addClass('xz').siblings().removeClass('xz');
		   $('#toolbar').find('.se').removeClass('se');
		   $('#toolbar').find('.sh').removeClass('sh');
		   $('#supplierlist').html('');
		
		   $('#toolbar').find('li').eq(0).html('<a>'+ $(".typeid_"+typeid).text()+'<b class=""></b></a>');
		   catid = $(".typeid_"+typeid).attr('id');//alert(this).
		   can_show = true; 
		   page = 1;
		   
		   $(".kouweidiv").hide();
		   
		 
	}
	

	 
 		$('#toolbar .sele>li').bind("click", function() {   
	    $('#toolbar .sele>b').removeClass('se');
     $(this).addClass('se').siblings().removeClass('se');
     $(this).find('b').addClass('se');
      $('#toolbar .sub').addClass('sh');
       var cc = $('#toolbar .sele').find('li').index(this); 
       $('#toolbar .lizd').eq(cc).show().siblings().hide();//('sh'); 
   
      });

 	$('#sorts li').bind("click",function(){
	  $(this).addClass('xz').siblings().removeClass('xz');
	    $('#toolbar').find('.se').removeClass('se');
      $('#toolbar').find('.sh').removeClass('sh'); 
	    $('#toolbar').find('li').eq(2).html('<a>'+$(this).text()+'<b class=""></b></a>');
	    order = $(this).attr('value');
	   $('#supplierlist').html('');
      page = 1;
   	  can_show = true; 
	    shopdata(); 
  });
  $('.lizd li').bind("hover",function(){
	   $(this).addClass('tapclass').siblings().removeClass('tapclass');
  });
  $('#cuisien li').bind('click',function(){

		$('.kwselected span').html( $(this).attr('catename') );
		
  
	   $(this).addClass('xz').siblings().removeClass('xz');
	   $('#toolbar').find('.se').removeClass('se');
	   $('#toolbar').find('.sh').removeClass('sh');
	   $('#supplierlist').html('');
	
	   $('#toolbar').find('li').eq(0).html('<a>'+$(this).text()+'<b class=""></b></a>');
	   catid = $(this).attr('id');//alert(this).
	   can_show = true; 
	   page = 1;
	   
	   $(".kouweidiv").hide();
	   myScroll.refresh();
	   shopdata(); 
   });
   $('#cuisienpx li').bind('click',function(){

		$('.kwselectedpx span').html( $(this).attr('catename') );
		
  
	   $(this).addClass('xz').siblings().removeClass('xz');
	   $('#toolbar').find('.se').removeClass('se');
	   $('#toolbar').find('.sh').removeClass('sh');
	   $('#supplierlist').html('');
	
	   $('#toolbar').find('li').eq(0).html('<a>'+$(this).text()+'<b class=""></b></a>');
	   order = $(this).attr('orderid');//alert(this).
	   can_show = true; 
	   page = 1;
	   
	   $(".kouweidivpx").hide();
	   myScroll.refresh();
	   shopdata(); 
   });
   $('#cuisienqsj li').bind('click',function(){

		$('.kwselectedqsj span').html( $(this).attr('catename') );
		
  
	   $(this).addClass('xz').siblings().removeClass('xz');
	   $('#toolbar').find('.se').removeClass('se');
	   $('#toolbar').find('.sh').removeClass('sh');
	   $('#supplierlist').html('');
	
	   $('#toolbar').find('li').eq(0).html('<a>'+$(this).text()+'<b class=""></b></a>');
	   qsjid = $(this).attr('qsjid');//alert(this).
	   can_show = true; 
	   page = 1;
	   
	   $(".kouweidivqsj").hide();
	   myScroll.refresh();
	   shopdata(); 
   }); 
});
  function shopdata(){  
			  
			var tempurl = siteurl+'/index.php?ctrl=wxsite&action=shoplistdata&areaid=<?php echo $_smarty_tpl->tpl_vars['areaid']->value;?>
&search_input='+search_input+'&order='+order+'&catid='+catid+'&qsjid='+qsjid+'&random=@random@&page=@page@';
   	 	     tempurl = tempurl.replace('@random@', 1+Math.round(Math.random()*1000)).replace('@page@',page);
	         $.getScript(tempurl); 
  
  }
 function showmoreshop(datas){
  
	var spdatas = eval(datas); 
    if(spdatas.length > 0){
		$("#pullUp").show();
		
		for(i=0;i<spdatas.length;i++){
			 if(spdatas.length < 10){
				$('.pullUpLabel').text('更多商家,敬请期待中...'); 
			 }
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
				
<?php if ($_smarty_tpl->tpl_vars['mobilemodule']->value==2){?>
				 backdata =' <ul class="nearbyre"  data-supplierid="'+spdatas[i].id+'"  > ';
				  if(spdatas[i].shoptype == 1  ){   
					backdata +=' <a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=mk&id='+spdatas[i].id+'">';
				  }else{
					<?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value=='dingtai'){?>
				 		backdata += '<a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=yd&id='+spdatas[i].id+'">';
					<?php }else{ ?>
				 		backdata += '<a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=wm&id='+spdatas[i].id+'">';
					<?php }?>
				  }
				 backdata +='  	<li class="nearbyreLimg"><img class="scrollLoading"  src="'+spdatas[i].shoplogo+'"></li> ';
				 backdata +='  	<li class="nearbyreRco"> ';
				 backdata +='  	 <ul class="nearbyrecommend"> ';
				 backdata +='  	  <li><h3>'+spdatas[i].shopname+'</h3></li> ';
				 if(spdatas[i].opentype ==3){
					backdata +='  		<li class="nerestate" style="margin-top: 8px;"><i class="nerejs"></i></li> ';
				 }
				  if(spdatas[i].opentype != 2 && spdatas[i].opentype != 3   ){
					backdata +='  		<li class="nerestate" style="margin-top: 8px;"><i class="nerexx"></i></li> ';
				 }
				 backdata +='  	  <li> ';
				 backdata +='  	   <ul class="neresavo"> ';
				 backdata +='  		<li> ';
				 for(j=1;j<=spdatas[i].point;j++){
					backdata += '<i class="fa fa-star"></i>';
				}
				for(q=1;q<=5-spdatas[i].point;q++){
					backdata += '<i class="fa fa-star" style="color:#C7C7C7;"></i>';
				}
				 
				 backdata +='  	 </li> ';
				 backdata +='  		<li>月售'+spdatas[i].ordercount+'单</li> ';
				 <?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value!='dingtai'){?>
				 if(spdatas[i].sendtype ==  0){
				 backdata +='  		<li style=" float:right;"><i class="nermyf"></i></li> ';
				 }
				 <?php }?>
				 backdata +='  	   </ul> ';
				 backdata +='  	  </li> ';
				 backdata +='  	  <li> ';
				 <?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value!='dingtai'){?>
					 backdata +='  	   <ul class="nereprice"> ';
					 backdata +='  		<li><span>起送价<b>￥'+spdatas[i].limitcost+'</b></span>|</li> ';
					 backdata +='  		<li><span>配送费<b>￥'+spdatas[i].pscost+'</b></span>';
 					 if(spdatas[i].attrdet.input != ''){ backdata +='|';}
					  backdata +='  		</li> ';
					 if(spdatas[i].attrdet.input != ''){
						backdata +='  		<li><span>'+spdatas[i].attrdet.input+'送达</span></li> ';
					 }
					 backdata +='  	   </ul> ';
				<?php }else{ ?>
					 backdata +='  	   <ul class="nereprice"> ';
					 backdata +='  		<li><span>地址 : '+spdatas[i].address+'</span></li> '; 
					 backdata +='  		<li><span>营业时间 : '+spdatas[i].starttime+'</span></li> '; 
					 backdata +='  	   </ul> ';
				 <?php }?>
				 backdata +='  	  </li> ';
				 if(spdatas[i].cxlist.length > 0){
					 for(var c=0;c<spdatas[i].cxlist.length;c++){
				 backdata +='  	  <li class="neredisc"><i class="nereyh" style=" margin-top: 5px;background:url('+spdatas[i].cxlist[c].imgurl+') no-repeat left center ;background-size: 100%;"></i><span>'+spdatas[i].cxlist[c].name+'</span></li> ';
					 }
				}
				 backdata +='  	 </ul> ';
				 backdata +='  	</li> ';
				 backdata +='   </a>';
				 backdata +='  </ul>  ';
<?php }else{ ?>

		
				if(spdatas[i].shoptype == 1  ){   
					backdata +=' <a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=mk&id='+spdatas[i].id+'">';
				  }else{
					<?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value=='dingtai'){?>
				 		backdata += '<a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=yd&id='+spdatas[i].id+'">';
					<?php }else{ ?>
				 		backdata += '<a href="'+siteurl+'/index.php?ctrl=wxsite&action=shopshow&typelx=wm&id='+spdatas[i].id+'">';
					<?php }?>
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
				


<?php }?>			
	
	
			$('#supplierlist').append(backdata); 
			
		}
			  setTimeout(function () { 
		 
		 myScroll.refresh();
		// 数据加载完成后，调用界面更新方法 Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 200);
				page = Number(page+1);  
       
               
	}else{
			setTimeout(function () { 
		 
		 myScroll.refresh();
		// 数据加载完成后，调用界面更新方法 Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 200);
				can_show ==  false; 
      		      if(page == 1){ 
      		      	 error($('#supplierlist'),'很遗憾,附近商家正在覆盖中...'); 
					$("#pullUp").hide();
      		      }else{ 
      		        $('.pullUpLabel').text('更多商家,敬请期待中...'); 
      		      }
      		   
		
		}
		
		
	 
    	
 }
  
</script>
 

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
		setTimeout(function () { 
			shopdata(); 
			// 数据加载完成后，调用界面更新方法 Remember to refresh when contents are loaded (ie: on ajax completion)
		}, 300);	// <-- Simulate network congestion, remove setTimeout from production!
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
			if (pullDownEl.className.match('loading')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
			} else if (pullUpEl.className.match('loading')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
			}
		},
		onScrollMove: function () { 
			if (this.y > 1 && !pullDownEl.className.match('flip')) {
				
				pullDownEl.className = 'flip';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = '松手开始更新...';
				this.minScrollY = 0;
			} else if (this.y < 1 && pullDownEl.className.match('flip')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
				this.minScrollY = -pullDownOffset;
			} else if (this.y < (this.maxScrollY - 50) && !pullUpEl.className.match('flip')) {
				pullUpEl.className = 'flip';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '松手开始更新...';
				this.maxScrollY = this.maxScrollY;
			} else if (this.y > (this.maxScrollY + 1) && pullUpEl.className.match('flip')) {
		
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
				this.maxScrollY = pullUpOffset;
			}
		},
		onScrollEnd: function () {
			if (pullUpEl.className.match('flip')) {
				if (this.y < (this.maxScrollY + 50)){
					 
					pullUpEl.className = 'loading';
					pullUpEl.querySelector('.pullUpLabel').innerHTML = '加载中...';				
				 	pullUpAction();	
				}
			}
		
			 
		}
	});
	pulldowncate = new iScroll('wrappercate', {
		hScrollbar:false, 
		vScrollbar:false,
		useTransition: true,
		topOffset: pullDownOffset
		
	});
	
	setTimeout(function () { document.getElementById('wrappercate').style.left = '0'; }, 200);
	setTimeout(function () { document.getElementById('wrapper').style.left = '0'; }, 200);
}

//初始化绑定iScroll控件 
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
document.addEventListener('DOMContentLoaded', loaded, false); 



</script>


 

 
</head>
<body> 
<style>
.page-app{ background:#f0f0f0;}
body{background:#f0f0f0;}
</style>
<div id="loading" style="display: block;"><div class="loadingbox"><section class="ffffbox"><div class="loadingpice"></div></section></div></div> 
<!-- <div id="hallist">  -->
	

<div class="toptitCon">
 <div class="toptitBox">
  <div class="toptitL"><a href="#"><i></i></a></div>
  <div class="toptitC"><h3><?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value=='waimai'){?>外卖<?php }?><?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value=='market'){?>超市<?php }?><?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value=='dingtai'){?>订台<?php }?>商家列表</h3></div>
  <div class="toptitR"><a href="#"><i class="search"></i></a></div>
 </div>
</div>


	
	 

 <div class="caipinglist float_top" id="ucsss" style="position:fixed;z-index:1000; height:41px;">  

	<section>
		<div class="kouweixz">
			<div class="kwselected kouweiwx"><i class="sort01"></i><span>全部分类</span>&nbsp;<i class="fa fa-angle-down"></i></div>
			
		</div>
		<div class="kouweixzpx">
			<div class="kwselectedpx kouweiwxpx"><i class="sort02"></i><span>默认排序</span>&nbsp;<i class="fa fa-angle-down"></i></div>
			
		</div>
		<div class="kouweixzqsj" style="width:31%; border-right:0px;">
			<div class="kwselectedqsj kouweiwxqsj"><i class="sort03"></i><span>起送价</span>&nbsp;<i class="fa fa-angle-down"></i></div>
			
		</div>
	</section>


    </div>
	<!-- 全部分类 -->
	<div class="kouweidiv" id="wrappercate">
					<section>
							<ul id="cuisien" class="lizd" > 
									<li catename="全部分类" id="0" class="xz"><a>全部</a></li>  
									<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['caipin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
									 <li class="typeid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" catename="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><a><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a></li>
									 <?php } ?>
						 </ul> 
					</section>
	</div>
	
	
	<!-- 全部排序 -->
	<div class="kouweidivpx">
					<section>
							<ul id="cuisienpx" class="lizd" > 
									<li catename="默认" orderid="0" class=""><a>默认</a></li>  
									<li catename="距离" orderid="1" class=""><a>距离</a></li>  
									<li catename="起送价" orderid="2" class=""><a>起送价</a></li>  
									<li catename="推荐" orderid="3" class=""><a>推荐</a></li>  
									
						 </ul> 
					</section>
	</div>
	
		<!-- 起送价 -->
	<div class="kouweidivqsj">
					<section>
							<ul id="cuisienqsj" class="lizd" > 
									<li catename="不限" qsjid="0" class=""><a>不限起送价</a></li>  
									<li catename="低于5元" qsjid="1" class=""><a>低于5元</a></li>  
									<li catename="5元到10元" qsjid="2" class=""><a>5元到10元</a></li>  
									<li catename="10元以上" qsjid="3" class=""><a>10元以上</a></li> 									
						 </ul> 
					</section>
	</div>
	<script>
		$(".kouweixz").click(function(){
			$(".kouweidiv").toggle();
			$(".kouweidivpx").hide();
			$(".kouweidivqsj").hide();
			$(".kwselected").addClass('kouweiok').siblings().removeClass('kouweiok');
			
			
		});
		$(".kouweixzpx").click(function(){
			$(".kouweidivpx").toggle();
			$(".kouweidivqsj").hide();
			$(".kouweidiv").hide();			
			$(".kwselectedpx").addClass('kouweiok').siblings().removeClass('kouweiok');
			
			
		});
			$(".kouweixzqsj").click(function(){
			$(".kouweidivqsj").toggle();
			$(".kouweidivpx").hide();
			$(".kouweidiv").hide();
			$(".kwselectedqsj").addClass('kouweiok').siblings().removeClass('kouweiok');
			
			
		});
	</script>
	

 <div id="wrapper" style="top:35px;margin-top:40px;bottom:50px;  ">
	<div id="scroller">
		
		
 
		<div id="pullDown" style="display:none;">
			<span class="pullDownIcon"></span><span class="pullDownLabel">下拉刷新...</span>
		</div>
 
		 <div class="nearbyreCon">
		 
		 <?php if ($_smarty_tpl->tpl_vars['mobilemodule']->value==2){?> 
		 
		 <div class=" nearbyreBox "  id="supplierlist" >
		  
		 </div>
		 
		 <?php }else{ ?>
			
 <div class="homscrbusinBox">
  <ul   id="supplierlist">
   
 
  </ul>
 </div>
		 
		 <?php }?>
		 
		 </div>
		 
	 <center>
	<div id="pullUp" style="border-top:0px; ">
			<div style="width:35%; float:left;text-align:right;"><span class="pullUpIcon" style="  margin-left:60%;"></span></div>
			<div style="width:65%; float:left;text-align:left;"><span class="pullUpLabel">上拉加载更多...</span></div>
		</div>
   </center>
   
   

		
		
		 
   
   
</div>
</div>
 
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