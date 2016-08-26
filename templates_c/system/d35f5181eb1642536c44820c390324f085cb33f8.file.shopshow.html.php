<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:14:21
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/shopshow.html" */ ?>
<?php /*%%SmartyHeaderCode:52937264557beb6ed6b4474-21609561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd35f5181eb1642536c44820c390324f085cb33f8' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/shopshow.html',
      1 => 1452933256,
      2 => 'file',
    ),
    '3fbc4ede513af2ddd9912a12a8a8611f8354d73a' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/wxsite.html',
      1 => 1452504956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52937264557beb6ed6b4474-21609561',
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
  'unifunc' => 'content_57beb6ed7b2a89_35613814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb6ed7b2a89_35613814')) {function content_57beb6ed7b2a89_35613814($_smarty_tpl) {?><!DOCTYPE html>
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
    <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/wxshop.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/cart.js"></script> 
   <script>
   	 var shopid = <?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
;
   	 var is_goshop = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopdet']->value['is_goshop'])===null||$tmp==='' ? 0 : $tmp);?>
;
   	 var checknext = false;
   	 var shoplimitcost = '<?php echo $_smarty_tpl->tpl_vars['shopdet']->value['limitcost'];?>
';
   	 var zuocart = '<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=wxsite&action=gowei&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';
   	 
   	  $(function(){ 
	if( is_goshop == 0 ){
		if( shoplimitcost == 0 ){
			$("#addShopping").show();
		}else{
			$("#showlimit").show();
		}
  
  }else{
      
  $("#addShopping").show();
  $("#showlimit").hide();
  }
	  
  		/*初始化样式*/
  		   url = siteurl+'/index.php?ctrl=wxsite&action=cart&shopid='+shopid+'&datatype=json&random=@random@';
        url = url.replace('@random@', 1+Math.round(Math.random()*1000));
      	var bk = ajaxback(url,''); 
      	 initshop(bk);
      	 
 
         <?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value=='dingtai'){?> 
              ShowChangezuo();
         <?php }?>
  	});
  	function myyanchi(){
  		
  		  checknext = false;
  	}
  	function sortitemclick(doid,obj){  
  	  // var scroptop= $('#listto_'+doid).offset().top-40;// checktype == '1'?Number($("#sort_sh_"+doid).offset().top)-81:Number($("#sort_sh_"+doid).offset().top)-162;
  	 // alert(doid);
  	  //right_list
  	   
  	  var defaultheight = 0;
  	  var listobj = $('.right_list_box');
  	  for(var i=0;i<$(listobj).length;i++){
  	   
  	    if($(listobj).eq(i).attr('data') == doid){
  	     
  	       break;
  	    }else{ 
  	       defaultheight = Number(defaultheight)+Number($(listobj).eq(i).height());
  	     }
  	  }
  	  $(obj).addClass('on').siblings().removeClass('on'); 
  	  scroll2.scrollTo(0,Number(defaultheight)*-1,200,false); 
 
    }
  	function initshop(datas){ 
 
  		 $('.onselect').removeClass('onselect');
	         	 $('.righ_l_b_btn_moren').show();
	         	 $('.righ_l_b_btn_hover').hide();
	         	 $('.cartshuliang').hide();
	         	 $('.right_l_btn_nub').val(0);
	         	 $('.cartshuliang').text(0);
	         	 $('#total_count').text(0);
	         	 $('#total_money').text(0);
	      if(datas.flag == false){    
	         if($('#total_money').html() != undefined){ 
	         	
	         	    $('.qipao').text(0);
	         	 $.each(datas.content.list, function(i,val){   
	         	 	
	         	 	 if($('#gidli_'+val.id).html() != undefined){  
	         	 	 	  var typeid = $('#gidli_'+val.id).attr('typeid');
  	                 $('#gidli_'+val.id).addClass('onselect');
					  
					               if($('#cp_'+val.typeid).html() != undefined){
									   if($('#cp_'+val.typeid).find('.qipao').eq(0).html() != undefined){  
										     var othershu = Number($('#cp_'+val.typeid).find('.qipao').eq(0).text())+Number(val.count);
										    $('#cp_'+val.typeid).find('.qipao').eq(0).text(othershu);
										  
									   }else{ 
										  $('#cp_'+val.typeid).append('<div class="qipao" style="position: absolute; margin-top: 5px; right: 5px; width: 16px; height: 16px; line-height: 13px; text-align: center; color: rgb(255, 255, 255); background-image: url(/upload/images/qipao.png); background-size: 16px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;  display: inline-block;">'+val.count+'</div>');
										}
								  }
    
					 
					 
					 
	                 
	                 $('#gshu_'+val.id).val(val.count); 
	                $('#gidli_'+val.id).find('.righ_l_b_btn_moren').eq(0).hide();
	                $('#gidli_'+val.id).find('.righ_l_b_btn_hover').eq(0).show();
					//alert('#gshu_'+val.id);
	                 $('#gshu_'+val.id).show();
	         	 	 } 
	          	}); 
	          	$('#total_count').text(datas.content.sumcount);
				checkcartifempty();
				var shijicost = datas.content.sum;
	          	$('#total_money').text(shijicost.toFixed(2));
				
	          	if(Number(datas.content.sum) >= Number(shoplimitcost)){
	          		 $('#showlimit input').val('');
					 $("#addShopping").show();
					 $("#showlimit").hide();
					
	          	}else{
	          	        var checkcost = Number(shoplimitcost)-Number(datas.content.sum);
						checkcost = checkcost.toFixed(2);
						<?php if ($_smarty_tpl->tpl_vars['shopdet']->value['is_goshop']==1){?>
	          	        $('#showlimit input').val('还差'+checkcost+'元');
						<?php }else{ ?>
	          	        $('#showlimit input').val('还差'+checkcost+'元');
						<?php }?>
						 $("#addShopping").hide();
						$("#showlimit").show();
	          	         
	          	}
        	 }else{
					
        	 }
        }
	 
    }
	
	
//加购物车动画
function cartimg(obj,gid){
 	if( $(obj).offset() ==  undefined ){
				freshcart();
	}else{
 	 
	     $("#addload").show(); 
        var pos =$(obj).offset();
       var topval = pos.top;
       $("#addload").css("top", topval + "px"); 
       $("#addload").css("left", pos.left + "px");
        $("#addload").css({'width':'15px','height':'15px'}); 
       var target_ob = $('#total_count').offset();
       var target_top = Number(target_ob.top);
       var target_left = Number(target_ob.left);
       $("#addload").animate({top:target_top,left:target_left, 'width':'0px','height':'0px'});  
       $('#total_count').text(Number($('#total_count').text())+1);
	   
	   checkcartifempty();
	   
	          if($('#cp_'+$('#gidli_'+gid).attr('typeid')).find('.qipao').eq(0).html() != undefined){
				  var othershu = Number($('#cp_'+$('#gidli_'+gid).attr('typeid')).find('.qipao').eq(0).text())+1;
				 
				  $('#cp_'+$('#gidli_'+gid).attr('typeid')).find('.qipao').eq(0).text(othershu);
			   }else{ 
				   $('#cp_'+$('#gidli_'+gid).attr('typeid')).append('<div class="qipao" style="position: absolute; margin-top: 5px; right: 5px; width: 16px; height: 16px; line-height: 13px; text-align: center; color: rgb(255, 255, 255); background-image: url(/upload/images/qipao.png); background-size: 16px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;  display: inline-block;">1</div>');
			   }
			   
	   
	 //  	var shijicost = datas.content.sum;
	   //       	$('#total_money').text(shijicost.toFixed(2));
	   
	   var sjcost111 = Number($('#total_money').text())+Number($(obj).attr('data-price'));
	   
	    	$('#total_money').text( sjcost111.toFixed(2) ); 
	    	
	    	if(Number($('#total_money').text()) >= Number(shoplimitcost)){
	          		  $('#showlimit input').val('');
					 $("#addShopping").show();
					 $("#showlimit").hide();
	          	}else{
	          	        var checkcost = Number(shoplimitcost)-Number($('#total_money').text());
						checkcost = checkcost.toFixed(2);	          	        
						<?php if ($_smarty_tpl->tpl_vars['shopdet']->value['is_goshop']==1){?>
	          	        $('#showlimit input').val('还差'+checkcost+'元');
						<?php }else{ ?>
	          	        $('#showlimit input').val('还差'+checkcost+'元');
						<?php }?>
						 $("#addShopping").hide();
						$("#showlimit").show();
	          	        
	          	}
	    	
	    	
	    	$('#gidli_'+gid).find('.righ_l_b_btn_moren').hide();
	    	$('#gidli_'+gid).find('.righ_l_b_btn_hover').show();
	  //    var typeid = $(obj).attr('typeid');
	  //    $('#typelist'+typeid).show();
	 //     $('#typelist'+typeid).text(Number($('#typelist'+typeid).text())+1);
	      $('#gidli_'+gid).addClass('onselect');
	      $('#gshu_'+gid).val(Number($('#gshu_'+gid).val())+1); 
		  $('#gshu_'+gid).show();
		  $('#total_count').show();
 	}  
	    	//if($(valse).is(':checked') == true)
} 

function removeonedish(gid,tshopid,num){ 

	   $('#loading').show();
	   url = siteurl+'/index.php?ctrl=site&action=downcart&goods_id='+gid+'&shopid='+tshopid+'&num=1&datatype=json&random=@random@';
	  	 url = url.replace('@random@', 1+Math.round(Math.random()*1000));
    	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       if($('#total_money').html() != undefined){
 
			checkcartifempty();
			  
			 var sjcost222 = $('#total_money').text()-Number(   $('#gidli_'+gid).attr('data-price')   );
	         notypenum = Number(sjcost222.toFixed(2)); 
	          $('#total_money').text(notypenum);
	         if(notypenum < 0){
	         	$('#total_money').text(0);
	         }
			 
			 notypenum = Number($('#total_count').text())-1;
	         $('#total_count').text(notypenum);
	         if(notypenum < 1){
	         	  $('#total_count').text(0);
	         }
			 
	         	if(Number($('#total_money').text()) >= Number(shoplimitcost)){
	          		 $('#showlimit input').val('');
					 $("#addShopping").show();
					 $("#showlimit").hide();
	          	}else{
	          	        var checkcost = Number(shoplimitcost)-Number($('#total_money').text());
						checkcost = checkcost.toFixed(2);
	          	         <?php if ($_smarty_tpl->tpl_vars['shopdet']->value['is_goshop']==1){?>
	          	        $('#showlimit input').val('还差'+checkcost+'元');
						<?php }else{ ?>
	          	        $('#showlimit input').val('还差'+checkcost+'元');
						<?php }?>
						 $("#addShopping").hide();
						$("#showlimit").show();
	          	        
	          	}
	         notypenumcount = Number($('#gshu_'+gid).val()) -1;
	          $('#gshu_'+gid).text(notypenumcount);
	         if(notypenumcount < 1){
				$('#cp_'+$('#gidli_'+gid).attr('typeid')).find('.qipao').eq(0).remove();
	         	$('#gshu_'+gid).val(0);
	         	$('#gidli_'+gid).removeClass('onselect');
	         	$('#gidli_'+gid).find('.righ_l_b_btn_hover').hide(); 
	         	$('#gidli_'+gid).find('.righ_l_b_btn_moren').show();
				$('#gshu_'+gid).hide();
			 
	         }else{
				 $('#gshu_'+gid).val(Number($('#gshu_'+gid).val())-1); 
			 } 
	   	   }else{ 
	   	    	  freshcart();
				  
	   	   }
	    }else{
	    	Tmsg(bk.content);
	    }
	  $('#loading').hide();
}
function checkcartifempty(){    //检查购物车是否为空

	
	         	if( $('#total_count').html() == 0 ){
					$(".ordeilpaymenshop").hide();
					$(".emptycartBg").show();
					$(".ordeilpaymen").hide();
					$(".emptyordeilpaymen").show();
				}else{
					$(".ordeilpaymenshop").show();
					$(".emptycartBg").hide();
					$(".ordeilpaymen").show();
					$(".emptyordeilpaymen").hide();
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
var baoshifu = false;
var scroll1, scroll2,scroll3,scroll4,scroll5;
function loaded() { 
	scroll1 = new iScroll('standard',{hScrollbar:false, vScrollbar:false,bounce:false});  //	hScrollbar:false, 		vScrollbar:false,		useTransition: true,//
	scroll2 = new iScroll('transition', {hScroll:false,hScrollbar:false, vScrollbar:false,onScrollEnd:function(e){
	 
     },bounce:false});
 scroll3 = new iScroll('getpinglun',{hScrollbar:false, vScrollbar:false,bounce:false}); 
 scroll4 = new iScroll('getdetailinfo',{hScrollbar:false, vScrollbar:false,bounce:false}); 
 scroll5 = new iScroll('showorderdet',{hScrollbar:false, vScrollbar:false,bounce:false}); 
	if( baoshifu == false ){
		baoshifu = true;
		getcatefoods();	
	}
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
	
 <div class="toptitCon">
 <div class="toptitBox">
  <div class="toptitL"><i></i></div>
  <div class="toptitC"><h3 style="font-weight:bold; font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</h3></div>
 
  <div <?php if (!empty($_smarty_tpl->tpl_vars['collect']->value)){?>style="display:none;"<?php }?>  onclick="myFavorite(<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
,this); "    class="toptitR"><i class="ordiscoll"></i></div>
  <div <?php if (empty($_smarty_tpl->tpl_vars['collect']->value)){?>style="display:none;"<?php }?>  onclick="delFav(<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
,this);"   class="toptitR"><i class="ordiscoll1"></i></div>
   
 </div>
</div>
 

<!--链接-->
<div class="ordislink">
 <ul>
  <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/".((string)$_smarty_tpl->tpl_vars['typelx']->value)."/id/".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])),$_smarty_tpl);?>
');"  class="ordislinkaA">点菜</li>
  <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/getshopcomment/typelx/".((string)$_smarty_tpl->tpl_vars['typelx']->value)."/shopid/".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])),$_smarty_tpl);?>
');"  >评价</li>
  <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/getdetailinfo/typelx/".((string)$_smarty_tpl->tpl_vars['typelx']->value)."/shopid/".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])),$_smarty_tpl);?>
');" ">商家</li>
 </ul>
</div>


	
	 
 
	<?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info'])){?>	
 <!--提示-->
<div class="ordisprompt" style="position:absolute; top:83px; z-index:99;">
 <ul>
  <li><i></i></li> 
  <li id="gonggaoshow" style="margin-left:0px; float:left; width:90%;">
  <div id="marqueenotice" style="display:none;"><marquee align="top" behavior="scroll" scrollamount="4" width="100%"    direction="left" onmouseover="this.stop();" onmouseout="this.start();"  ><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info']);?>
</marquee>
  </div>
  <div id="notice"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info']);?>
</div>
  </li>
 </ul>
</div>
<?php }?>
<!--点菜-->
 
<script>
$(function(){
	var gonggaoshow = Number( $("#notice").text().length )*16;
	var screenwidth = document.body.clientWidth-20;
	if( gonggaoshow >= screenwidth ){
  
		$("#marqueenotice").show();
		$("#notice").hide();
	}else{
	 
		$("#marqueenotice").hide();
		$("#notice").show();
	}
});
</script>

<div  id="standard" style="width:20%;  position:absolute; <?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info'])){?>top:117px;<?php }else{ ?>top:83px;<?php }?> z-index:9;bottom:70px; " >

 <div class="ordisordLeft"   style="width:100%;">
  <ul>
  <!-- ordisordaA  -->
   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodstype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
		<li cateid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['mykey']->value==0){?>class="ordisordaA"<?php }?> ><a><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a></li>   
   <?php } ?>  
  
  </ul>
 </div>
 
</div> 


<div id="transition"  style="width:80%;  position:absolute; <?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info'])){?>top:117px;<?php }else{ ?>top:83px;<?php }?>  bottom:70px; z-index:9;  left:20%; "  >

 <div class="ordisordRight" id="catefoods"  style="width:100%; background:#fff;" >
	 <!-- 点击分类ajax获取分类下的所有商品 -->
 </div>
 
</div>
 
<!-- 获取评论内容 -->
<div id="getpinglun" style="display:none;width:100%; position:absolute;z-index:99; top:83px; bottom:70px;">
	<div class="huoqucomment">
		
	</div>
</div>

 <!-- 获取商家详情 -->
<div id="getdetailinfo" style="width:100%;display:none; position:absolute;z-index:99; top:83px; bottom:70px;">
	<div class="getdetailinfo">
	 
	</div>
</div>
 
 
		 <div style="height:10px;"></div>
	 
 <script>
 var click_button = false;
function doubleclick(){
	click_button = false;
}
function lockclick(){
	 if(click_button == false){
			click_button = true;
			setTimeout("doubleclick()", 400); 
			return true;
	 }else{
		 return false;
	 }
}

 var is_open = false; 
 $(function(){  
 	  $('.return').bind("click", function() {    
	    history.back();
   }); 
   
   $('.toptitBox .toptitL').bind("click", function() {    
	    history.back();
   });
 });
 
 
 
 
 $(document).ready(function(){ 

	 $(".ordisordLeft li").bind('click',function(){
	
		  if(lockclick()){  
		  
			$(".ordisordLeft li").removeClass('ordisordaA');
			$(this).addClass('ordisordaA');
			getcatefoods();
		  }
	 });
	 
	 $("#getcomment").bind('click',function(){
		$(".ordislink li").removeClass('ordislinkaA');
		$(this).addClass('ordislinkaA');
		$(".ordisprompt").hide();
		$("#standard").hide();
		$("#transition").hide();
		
		$("#getdetailinfo").hide();
		$(".getdetailinfo").html('');
		
		$("#getpinglun").show();
			var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/getshopcomment"),$_smarty_tpl);?>
'; 
					$.post(url, {'shopid':<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
},function (data, textStatus){ 
							$('.huoqucomment').html(data); 
						 
							scroll3.refresh();
							 
							
						}, 'html');
		
		
	 });
	 
	 
	 $("#getshopmenu").bind('click',function(){
		$(".ordislink li").removeClass('ordislinkaA');
		$(this).addClass('ordislinkaA');
		$(".huoqucomment").html('');
		$("#getpinglun").hide();
		$(".ordisprompt").show();
		$("#standard").show();
		$("#transition").show();
		$("#getdetailinfo").hide();
		$(".getdetailinfo").html('');
		scroll1.refresh();
		scroll2.refresh();
		
	 });
	 
	  $("#getshopinfo").bind('click',function(){
		$(".ordislink li").removeClass('ordislinkaA');
		$(this).addClass('ordislinkaA');
		$(".huoqucomment").html('');
		$("#getpinglun").hide();
		$(".ordisprompt").hide();
		$("#standard").hide();
		$("#transition").hide();
		
		$("#getdetailinfo").show();
		 var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/getdetailinfo"),$_smarty_tpl);?>
'; 
					$.post(url, {'shopid':<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
},function (data, textStatus){ 
							$('.getdetailinfo').html(data); 
						 
							scroll4.refresh();
							 
							
						}, 'html');
		
	 });
	 
	 
	 
	 
	  /* 点击展示购物车详情  */
	$(".ordeilpaymenshop").bind('click',function(){
  		 $('#zhezhao').toggle(); 
		 $("#showorderdet").toggle();
		
		 freshowdetcart();
		 
	 	
	}); 
	
	$("#zhezhao").bind('click',function(){
		$(this).toggle();
		$("#showorderdet").toggle();
	});
	
	
	
	 
	 
 })
  
function getcatefoods(){

		var curcateid = $(".ordisordLeft li.ordisordaA").attr('cateid');
	 
			$("#catefoods").html('');
			var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/catefoods"),$_smarty_tpl);?>
'; 
					$.post(url, {'curcateid':curcateid,'shoptype':<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'];?>
,'shopid':<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
,'type':1},function (data, textStatus){ 
							$('#catefoods').html(data); 
							  freshcart();
					 	scroll2.refresh();
							
							
							
							$('.righ_l_b_btn_moren').unbind();
							
							 $('.righ_l_b_btn_moren').bind("click", function() {   
		 
								 if(lockclick()){ 
										 if($(this).attr('have_det') == 1){
										 addproduct($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
										 }else{
									   addonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
									   }
								  }
										
								
							  }); 
							   $('.right_l_btn_left').bind("click", function() {   
									if($(this).attr('have_det') == 1){
										removeoneproduct($(this).attr('data-id'),$(this).attr('data-shopid'),1);
									   }else{
										removeonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1);
										}
							  }); 
							   $('.right_l_btn_right').bind("click", function() {   
									if(lockclick()){
										 if($(this).attr('have_det') == 1){
											addproduct($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
										 }else{
											addonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
									   }
									  }
									 
							  }); 
							
							
							
							
							
							
							
							
							
							
							
						}, 'html');
						
}	
 
//添加店铺收藏
function myFavorite(shopid,obj)
{ 
  var url = siteurl+'/index.php?ctrl=shop&action=addcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
     		$(obj).hide(); 
     		$(obj).next().show(); 
     	//	$('#CancelFavShop').show();
   }else{ 
   	Tmsg(backinfo.content); 
  }
}  
//删除店铺收藏
function delFav(shopid,obj)
{ 
	var url = siteurl+'/index.php?ctrl=shop&action=delcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
      $(obj).hide(); 
	  $(obj).prev().show(); 
     // $('#CancelFavShop').hide();
   }else{ 
   	 Tmsg(backinfo.content); 
  }  
}
 
 
 
	  /* 点击展示购物车详情  */
	$(".ordeilpaymenshop").bind('click',function(){
  		 $('#zhezhao').toggle(); 
		 $("#showorderdet").toggle();
		
		 freshowdetcart();
		 
	 	
	}); 
	
	$("#zhezhao").bind('click',function(){
		$(this).toggle();
		$("#showorderdet").toggle();
	});
	
 
 function freshowdetcart(){
			 url = siteurl+'/index.php?ctrl=wxsite&action=cart&shopid='+shopid+'&datatype=json&random=@random@';
			url = url.replace('@random@', 1+Math.round(Math.random()*1000));
			var bk = ajaxback(url,''); 
			if($('#showorderdet .showorderList').html() == undefined){
 			}else{
			 showcartdet(bk);
			 
			}
		//	Tmsg($('#showorderdet').find('.box_inline').length);
			
			
		 
		 
	}
function showcartdet(datas){ 
 
 	 $('#showorderdet .showorderList').html(''); 
 	  if(datas.flag == false){    
    	   //	$('.listcontent').remove();
    	var temp_htmls = '';
           $('#showorderdet .showorderList').append(temp_htmls);
    	 	  $.each(datas.content.list, function(i,val){    
    	 	 	  var htmls = template.render('cartlist', {list:val});
    	 	 	  $('#showorderdet .showorderList').append(htmls);
    	    }); 
 		 
    	  
           $('.addbtn').bind("click", function() {   
      	    	if(checknext ==  false){ 
      	    		checknext = true;
					var checkhavedet = $(this).attr('have_det');
					 
					if(checkhavedet == 1){					 
						  uponeproduct($(this).attr('product_id'),$(this).attr('data-shopid'),1);
						 freshowdetcart();
					}else{
					 
						addonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
					 	freshowdetcart();
						
				   }
				  
      	     	   setTimeout("myyanchi()", 500 );
           	  }
      	 	
          }); 
           $('.downdbtn').bind("click", function() {   
           	  if(checknext ==  false){ 
           	  		checknext = true;
					var checkhavedet = $(this).attr('have_det');
					if(checkhavedet == 1){
						 removeoneproduct($(this).attr('product_id'),$(this).attr('data-shopid'),1);
						 freshowdetcart();
					 
					}else{
						
						removeonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
						freshowdetcart();
						 freshcart();
						 
				   }
				  
      	     	   setTimeout("myyanchi()", 500 );
           	  }
      	 	
          });
		   $('.showorderList').css('height',$('#showorderdet').find('.box_inline').length*49);
		   scroll5.refresh();
		 
     	  
    }else{
  		 
          $('#cartlist').hide();
      
          
       
    }
} 
 /* 点击展示购物车详情   end*/
		
  </script>
  
 <div id="zhezhao" style=""></div>
 
 
 <!--底部-->

 
<script id="cartlist" type="text/html">   
 
 <div class="box_inline goodsli" style="padding:5px 5px 5px 8px;border-top: 1px solid #cccccc; "    id="gidli_<^%=list.id%^> "  >
		<div class="liwd30 detcart"  style="width:50%; text-align:left;">
		<^%=list.name%^>
		<^%if(list.have_det==1){%^><font style="color:#ccc;font-size:10px;">【<^%=list.gg.attrname%^>】</font><^%}%^>
			</div>
		<div class="liwd30 detcart" style="width:20%; text-align:left;">
			￥<^%=list.cost%^>
			</div>
			<div class="liwd30 detcart" style="width:30%; text-align:center;">
			<div style="width:90px; height:38px; line-height:38px;">
			<span class="addbtn" have_det="<^%=list.have_det%^>"  <^%if(list.have_det==1){%^> product_id="<^%=list.gg.id%^>" <^%}%^>  data-id="<^%=list.id%^>" data-shopid="<^%=list.shopid%^>"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/showcart-jiab.png" /></span>
			<span class="shuliang gdhd"><^%=list.count%^></span>
			<span class="downdbtn " have_det="<^%=list.have_det%^>"  <^%if(list.have_det==1){%^> product_id="<^%=list.gg.id%^>" <^%}%^>     data-id="<^%=list.id%^>" data-shopid="<^%=list.shopid%^>"><img style="width:21px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/showcart-jian.png" /></span>
			</div>
			</div>
	</div>
 
 </script>
<div id="showorderdet" >
	<div class="showorderList">

 
	</div>
</div>



<!--支付-->
<div class="ordeilpaymenCon" style="position:absolute; bottom:0px; z-index:99999999999;">

 <div class="ordeilpaymenshop"><i id="total_count">0</i></div>
 
 
 <div class="emptycartBg"></div>
 
 
 <div class="ordeilpaymenBox">
 
 
 
  <div class="ordeilpaymen">
   <ul>
    <li><b>合计：￥<span id="total_money" ></span></b></li>
	<?php if ($_smarty_tpl->tpl_vars['psinfo']->value['pscost']>0){?>
    <li><span>另需配送费<?php echo $_smarty_tpl->tpl_vars['psinfo']->value['pscost'];?>
元</span></li>	 
	<?php }?>
   </ul>
  </div>
  
  
  
 <div class="emptyordeilpaymen">
   <ul>
    <li><b>购物车是空的</b></li> 
   </ul>
  </div>

  <div  id="addShopping" class="ordeilpaybut" <?php if ($_smarty_tpl->tpl_vars['shopshowtype']->value=='dingtai'){?>   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/goweishop/id/".((string)$_smarty_tpl->tpl_vars['id']->value)),$_smarty_tpl);?>
');"    <?php }else{ ?> onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopcart/id/".((string)$_smarty_tpl->tpl_vars['id']->value)),$_smarty_tpl);?>
');" <?php }?>  ><input type="button" value="去支付"></div>
  <div  id="showlimit" class="limitordeilpaybut"    ><input type="button" value="还差<?php echo $_smarty_tpl->tpl_vars['shopdet']->value['limitcost'];?>
元"></div>
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