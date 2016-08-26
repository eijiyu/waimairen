<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:57:45
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/order.html" */ ?>
<?php /*%%SmartyHeaderCode:161609510157beb3099335f1-31657037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16170c94b04563c74a8faffd1d7827f620b9cb6d' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/order.html',
      1 => 1452508320,
      2 => 'file',
    ),
    '3fbc4ede513af2ddd9912a12a8a8611f8354d73a' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/wxsite.html',
      1 => 1452504956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161609510157beb3099335f1-31657037',
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
  'unifunc' => 'content_57beb3099b3432_26154065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb3099b3432_26154065')) {function content_57beb3099b3432_26154065($_smarty_tpl) {?><!DOCTYPE html>
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
/public/wxsite/css/order.css">

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
   var page =1; 
 	 var can_show = true;//控制是否翻页  
 	 $(function(){
 	 	 can_show=false; 
 	       getorder();
 	 }); 
	 
	  function getorder(){  
			  
			var tempurl = siteurl+'/index.php?ctrl=wxsite&action=userorder&random=@random@&page=@page@';
   	 	     tempurl = tempurl.replace('@random@', 1+Math.round(Math.random()*1000)).replace('@page@',page);
	         $.getScript(tempurl); 
  
  }
  function showmoreorder(datas){
  
	var spdatas = eval(datas); 
     if(spdatas.length > 0){
			$("#pullUp").show();
			for(i=0;i<spdatas.length;i++){
				var orderid = spdatas[i].id;
				var ordershowurl = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/ordershow/orderid/'+orderid+'"),$_smarty_tpl);?>
';
				
				var backdata = '  ';
				backdata += ' 	<div class="editordercon" style="position:relative;"> 	';
				backdata += ' 	 <div class="editordertit">  ';
				backdata += ' 	  <ul> ';
				backdata += ' 	   <li><i></i>'+spdatas[i].shopname+'</li> ';
				backdata += ' 	   <li class="editordright"><span class="editorfoncol">'+spdatas[i].orderwuliustatus+'</span></li> ';
				backdata += ' 	  </ul> ';
				backdata += ' 	 </div> ';
				backdata += ' 	 <a href="'+ordershowurl+'"> ';
				backdata += ' 	 <div class="editorderbox" > ';
				backdata += ' 	  <ul> ';
				if(spdatas[i].shoplogo == ''){
					backdata += ' 	   <li><img src="<?php echo $_smarty_tpl->tpl_vars['shoplogo']->value;?>
"></li> ';
				}else{
					backdata += ' 	   <li><img src="'+spdatas[i].shoplogo+'"></li> ';
				}
				backdata += ' 	   <li> ';
				backdata += ' 		<ul> ';
				backdata += ' 		 <li><span>￥'+spdatas[i].allcost+'</span></li> ';
				backdata += ' 		 <li>'+spdatas[i].addtime+'</li> ';
				if( spdatas[i].pstype == 0 ){
					backdata += ' 		 <li>由<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
提供优质服务</li> ';					
				}else{
					backdata += ' 		 <li>由商家提供优质服务</li> ';
				}
				backdata += ' 		</ul> ';
				backdata += ' 	   </li> ';
 				backdata += ' 	  </ul> ';
				backdata += ' 	 </div> ';
				backdata += ' 	 </a> ';
		if( spdatas[i].status < 4 && spdatas[i].status > 0 ){	
				backdata += ' 	 <div class="editorderbut"> ';
				backdata += ' 	  <div><div   class="editordinp1"    ></div></div>';
				backdata += ' 	  <ul> ';
				if( spdatas[i].status == 2 ){
					backdata += ' 	   <li><div   class="editordinp1"  onclick="acceptorder('+spdatas[i].id+');" >确认收货</div></li> ';
				}
				if( spdatas[i].status == 3 && spdatas[i].is_acceptorder == 1 &&  spdatas[i].is_ping == 0   ){
					backdata += ' 	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/commentorder/orderid/'+spdatas[i].id+'"),$_smarty_tpl);?>
"> ';
					backdata += ' 	   <li><div   class="editordinp1"   >评价订单</div></li> ';
					backdata += ' 	  </a> ';
				}				
	 		
				if( spdatas[i].is_goshop == 0 ){
						if( spdatas[i].shoptype == 1 ){
							backdata += ' 	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/mk/id/'+spdatas[i].shopid+'"),$_smarty_tpl);?>
"> ';
						}else{
								backdata += ' 	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/wm/id/'+spdatas[i].shopid+'"),$_smarty_tpl);?>
"> ';
						}
				}else{
								backdata += ' 	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/yd/id/'+spdatas[i].shopid+'"),$_smarty_tpl);?>
"> ';
				 }
						backdata += ' 	   <li><div   class="editordinp2"   >在来一单</div></li> ';
						backdata += ' 	  </a> ';
	
				backdata += ' 	  </ul> ';
				backdata += ' 	 </div> ';
				
		}else{
		
			
			backdata += ' 	<div   class="shanchuedit"  onclick="delorder('+spdatas[i].id+');"  >删除</div> ';
		
		
		}	 
				backdata += ' 	</div>';

			
			
				$('#orderlist').append(backdata); 
			}
			
			 
			
			myScroll.refresh();
				page = Number(page+1);  
	         
	}else{
			
				can_show ==  false; 
      		      if(page == 1){ 
      		      	 error($('#orderlist'),'无数据...');
					$("#pullUp").hide();					 
      		 
      		      }else{ 
      		        $('.pullUpLabel').text('加载完毕...'); 
      		      }
      		   
		
	}
		
		
	
  } 

  function acceptorder(orderid){  
 
 	if(confirm('确认收货？')){
   	     $('#loading').show(); 
   		   var url = siteurl+'/index.php?ctrl=order&action=acceptorder&orderid='+orderid+'&datatype=json&random=@random@';   
 	        $.ajax({ 
           dataType: "json",  
           url: url.replace('@random@', 1+Math.round(Math.random()*1000)),  
           success: function(content) {    
           	 if(content.error == false) 
          	{  
           		$('#loading').hide();
				window.location.reload();
				
          	}else{ 
          			Tmsg(content.msg);
          		  $('#loading').hide();
          	}  
          	 
	         }, 
           error: function(content) {  
             	Tmsg('提交数据失败');
        	    $('#loading').hide();
	         }
       
         });  
     }
     return false; 
   } 
   
   
 function delorder(orderid){  
 
 	if(confirm('确认删除？')){
   	     $('#loading').show(); 
   		   var url = siteurl+'/index.php?ctrl=order&action=userdelorder&orderid='+orderid+'&datatype=json&random=@random@';   
 	        $.ajax({ 
           dataType: "json",  
           url: url.replace('@random@', 1+Math.round(Math.random()*1000)),  
           success: function(content) {    
           	 if(content.error == false) 
          	{  
           		$('#loading').hide();
				window.location.reload();
				
          	}else{ 
          			Tmsg(content.msg);
          		  $('#loading').hide();
          	}  
          	 
	         }, 
           error: function(content) {  
             	Tmsg('提交数据失败');
        	    $('#loading').hide();
	         }
       
         });  
     }
     return false; 
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

<style>
.shanchuedit{ 
    background-color: #ff6e6e;
    color: #fff;
	width: 72px;
    height: 30px;
    border-radius: 3px;
    font-size: 14px;
	    line-height: 30px;
		    position: absolute;
    top: 80px;
    right: 5px;
	    text-align: center;
}
.editorderbut ul li .editordinp1 {
    background-color: #ff6e6e;
    color: #fff;
	width: 72px;
    height: 30px;
    border-radius: 3px;
    font-size: 14px;
	    line-height: 30px;
	    text-align: center;
}
.editorderbut ul li .editordinp2 {
    border: 1px solid #bfbfbf;
    background-color: transparent;
    color: #000000;
	width: 72px;
    height: 30px;
    border-radius: 3px;
    font-size: 14px;
	 line-height: 30px;
	    text-align: center;
}
</style>
<script> 
 

	var myScroll, pullDownEl, pullDownOffset,pulldowncate,
	pullUpEl, pullUpOffset,
	generatedCount = 0;

function pullDownAction () {   //上拉刷新
	 
}

function pullUpAction () {    //下拉刷新
	setTimeout(function () {	// <-- Simulate network congestion, remove setTimeout from production!
	  
        getorder();   
   
		myScroll.refresh();		// Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 200);	// <-- Simulate network congestion, remove setTimeout from production!
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
			} else if (this.y < (this.maxScrollY + 50) && !pullUpEl.className.match('flip')) {
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
			if (this.y < (this.maxScrollY + 50)){
					 
					pullUpEl.className = 'loading';
					pullUpEl.querySelector('.pullUpLabel').innerHTML = '加载中...';				
				 	pullUpAction();	
			}
		
			 
		}
	});
	
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
  <div class="toptitL"><i></i></div>
  <div class="toptitC"><h3>订单列表</h3></div>
 </div>
</div>

	
	 
<style>
p{padding:0px; margin:0px;}
</style>
 <div id="wrapper" style="top:40px; ">
	<div id="scroller">
	<div id="pullDown" style="display:none;">
			<span class="pullDownIcon"></span><span class="pullDownLabel">下拉刷新...</span>
		</div>
 
		
   <div id="orderlist">
 
 
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