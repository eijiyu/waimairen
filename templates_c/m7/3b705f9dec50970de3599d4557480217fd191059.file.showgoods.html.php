<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:20:41
         compiled from "/data/wwwroot/waimairen/templates/m7/shop/showgoods.html" */ ?>
<?php /*%%SmartyHeaderCode:159282694957beb869b41905-42899432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b705f9dec50970de3599d4557480217fd191059' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/shop/showgoods.html',
      1 => 1453338564,
      2 => 'file',
    ),
    '028ecad86fe60107edff5e66fd88b13a2e0fd787' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/site.html',
      1 => 1452412480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159282694957beb869b41905-42899432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'metadata' => 0,
    'siteurl' => 0,
    'sitebk' => 0,
    'is_static' => 0,
    'controlname' => 0,
    'sitelogo' => 0,
    'footlink' => 0,
    'items' => 0,
    'member' => 0,
    'mapname' => 0,
    'list' => 0,
    'list2' => 0,
    'itv' => 0,
    'litel' => 0,
    'toplink' => 0,
    'beian' => 0,
    'footerdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb869de9381_69940903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb869de9381_69940903')) {function content_57beb869de9381_69940903($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> <?php echo $_smarty_tpl->tpl_vars['foodshow']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<?php echo stripslashes($_smarty_tpl->tpl_vars['metadata']->value);?>

	  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-16x16.png" type="image/png" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-16x16.png" type="image/png" sizes="16x16" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-32x32.png" type="image/png" sizes="32x32" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-48x48.png" type="image/png" sizes="48x48" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-64x64.png" type="image/png" sizes="64x64" />
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/common.css"> 


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtop/ntopcommon.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtop/ntopjquery-ui-1.10.4.custom.min.css"> 
<!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtop/ntopstyles.css">  -->

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/market.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/qqxs.css">  
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/css/wmr_shop.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newmarket.css">  

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/shop.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/outdiv.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/css/wmr_goodshow.css">



<div class="mmbg" style="background:#f8f6f5"></div>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.lazyload.min.js" type="text/javascript" language="javascript"></script> 
 
  
 <script>
 	$(function() { 
$("img").lazyload({ 
effect : "fadeIn" 
}); 
}); 
</script> 
 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/bootstrap.min.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/hanwoshop.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/cart.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/outdiv.js" type="text/javascript" language="javascript"></script>
 
<script>
	var shopid = "<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
"; 
</script> 
<script type="text/javascript">

    var topIsFixed = false;

    $(document).ready(function () {
	
	
		 $(".backmenu").click(function(){
			history.back();
		 }); 

        $(window).scroll(function () {

            if ($(document).scrollTop() > 190) {

                if (!topIsFixed) {

                    $("#header-menu").removeAttr("style");

                    $("#top").addClass("top-fixed");

                    $("#header-menu").animate({ top: '0px' }, 200);

                    topIsFixed = true;

                }



            } else {

                $("#header-menu").removeAttr("style");

                if (topIsFixed) {

                    $("#top").removeClass("top-fixed");

                    topIsFixed = false;

                }

            }

        });

    });


	    

</script> 

 


 <script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var controllername= '<?php echo $_smarty_tpl->tpl_vars['controlname']->value;?>
';
</script>

<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a'); 
    </script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/ie6.js" type="text/javascript"></script>
<![endif]--> 
</head> 
<body>

<!--谁去拿外卖 -->

       <div id="modal-shuiqunawaimai" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1">
      <div class="modal-header"> <a href="#" class="close" aria-hidden="true">×</a>
        <h3>谁去拿外卖</h3>
      </div>
      <div class="modal-body">
        <div class="who-get-dishes-wrapper">
          <h2 class="wgd-badge"></h2>
          <a id="trigger" class="wgd-btn"></a> <span class="wgd-rules">随机到最小数字的人去拿外卖</span> <span id="lastResult" class="wgd-bg-text">↓ Start</span>
          <ul id="result" class="wgd-result-list">
          </ul>
        </div>
      </div>
    </div>

<script type="text/javascript">
  
  var eleme = eleme || {};


</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/whoqunawaimai.js"></script> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/whonawaimai.css"> 
<!--谁去拿外卖  end-->


   <div class="hearder01">
     <div class="box01">
	   <div class="left"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"><img style="width:152px; height:42px; margin:12px 0px 0px 20px;" src="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
" /></a> </div>
	   <div class="left"> <img style="margin:22px 0px 0px 20px;;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/comTopText.png" /></a> </div>
	  
	   
	   <div class="right" style="width:auto; float:left; margin-left:30px; font-size:16px;">
  		<ul>
		
		 
		  <?php if (!empty($_smarty_tpl->tpl_vars['footlink']->value)){?>
	 	     	<?php $_smarty_tpl->tpl_vars['footlink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['footlink']->value), null, 0);?>
       <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['footlink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			          <li><span class="sep"></span><a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a> </li>
					
		  <?php } ?>
		  <?php }?>
		   </ul>
	   </div>
	   
	   
	    
	   <div class="right" style="width:auto;margin-left:30px; font-size:16px;">
  		<ul>
			
       <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?> 
          <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
" class="brown"><?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
</a></li> 
          <li><span class="sep"></span><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
" class=" brown">退出</a></li>
          
		    <?php }else{ ?>
       
	      <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/login"),$_smarty_tpl);?>
" class="brown">登录</a></li> 
          <li><span class="sep"></span><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/regester"),$_smarty_tpl);?>
" class=" brown">注册</a></li>
         
         <?php }?>

		
  		</ul>
	   
	 </div>
   </div>
   </div>

<div style="clear:both;"></div>


<div class="mmbg" style="background:#f8f6f5"></div>


 
 <div class="aswm-show-body" >

	<div class="aswm-show-list"  style="background:#fff;">

    	<div class="aswm-show-class" style="padding:20px 40px; border:none;">

        	<div class="backmenu">
				<span>< 返回菜单</span>
 			</div> 

        </div>
  <div class="cer"></div>
          <div class="showgoodsdetinfo " >
				<div class="goodoneinfo">
					<div class="goodimg">
						<img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foodshow']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" />
					</div>
					
					<div class="gooddetxx">
						<p class="goodname"><?php echo $_smarty_tpl->tpl_vars['foodshow']->value['name'];?>
</p>
 					</div>
					
					
					
					<div style="width:556px; float:left;">
					<div class="ordeilnameCon goodsli"   goodname="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['name'];?>
"   id="gidli_<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['typeid'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['cost'];?>
" >
<div >
 <div class="ordeilnameBox">
  <ul class="ordeilnamet">
    <li><span>已售<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['sellcount'];?>
份</span><span><?php echo $_smarty_tpl->tpl_vars['pointcount']->value;?>
人评价</span>
	 <?php if ($_smarty_tpl->tpl_vars['foodshow']->value['is_cx']==1){?>
	<span style="color:red;">限时<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['zhekou'];?>
折</span>
	<?php }?>
	</li>
 
<?php if ($_smarty_tpl->tpl_vars['foodshow']->value['have_det']==0){?> 
  <li><b>￥<i><?php echo $_smarty_tpl->tpl_vars['foodshow']->value['cost'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['foodshow']->value['goodattr'])){?>/<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['goodattr'];?>
<?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'])){?>/<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?><?php }?></i></b>
   <?php if ($_smarty_tpl->tpl_vars['foodshow']->value['is_cx']==1){?><del style=" color: #999999;text-decoration: line-through;"><?php echo $_smarty_tpl->tpl_vars['foodshow']->value['cost']/($_smarty_tpl->tpl_vars['foodshow']->value['zhekou']/10);?>
元</del><?php }?>
   </li>  
 <?php }?>
  </ul>
  
  
   <?php if ($_smarty_tpl->tpl_vars['foodshow']->value['have_det']!=1){?>  
  <ul class="ordeilnameb">
 
   
     <?php if ($_smarty_tpl->tpl_vars['opentype']->value!=2&&$_smarty_tpl->tpl_vars['opentype']->value!=3){?>
			  <span class="shopdayangstatus">休息中</span>
			  <?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['foodshow']->value['count']>0){?>	  
			   <div class="righ_l_b_btn" >  
        	   	  	  	<div class="righ_l_b_btn_moren"    data-id="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['shopid'];?>
" id="gid_<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['have_det'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['typeid'];?>
">
						<li><i class="ordenabotR"></i></li>
						</div>
        	   	  	  	<div class="righ_l_b_btn_hover" style="display:none;">
						<span class="right_l_btn_left"   data-id="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['have_det'];?>
">
							<li><i class="ordenabotL"></i></li>
						</span>
						 <li><input style="border:none;" class="right_l_btn_nub" readonly id="gshu_<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['carnum']->value;?>
"></li>
 						<span class="right_l_btn_right"   id="gid_<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['typeid'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['have_det'];?>
">
							 <li><i class="ordenabotR"></i></li>
						</span></div>
        	          </div>
			 <?php }else{ ?>
					  <li style="color:#cccccc;"   class="moreguige">售完</li>
					  
					  <?php }?>	  
			   
				 <?php }?> 
				   
			 
   
   
  </ul>  
  <?php }?> 
 
 </div>
 <style>
 .moreattset{width: 94.4444%;
    margin: 6px auto 0px;font-size: 18px;
  
    position: relative;}
.moreattset .attrson li { float:left;color:#cccccc;border:1px solid #b5b5b5; border-radius:5px; font-size:14px; margin-bottom:8px; padding:0px 6px; margin-right:8px; cursor:pointer; }
.attrname{width:100%;font-size:14px; color:#000000; margin-bottom:8px;}
.productinfobox{ border-bottom:1px dotted #e5e5e5;}
.curattr{ border:1px solid #ff6e6e!important; color:#000000!important;  cursor:pointer;}
 </style>
 
 </div>

<?php if ($_smarty_tpl->tpl_vars['foodshow']->value['have_det']==1&&count($_smarty_tpl->tpl_vars['productinfo']->value)>0){?>  
<div class="productinfobox">
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
		<div class="moreattset box_inline">
			<div class="liwd30 attrname" >
				<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>

			</div>
			<div class="cer"></div>
			<div  class="liwd30 attrson" id="productggli_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" style="width:80%; text-align:left;">
			
					<ul>
				<?php  $_smarty_tpl->tpl_vars['itk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itk']->key => $_smarty_tpl->tpl_vars['itk']->value){
$_smarty_tpl->tpl_vars['itk']->_loop = true;
?>
				
	 <li  class="product_li_det   <?php if (in_array($_smarty_tpl->tpl_vars['itk']->value['id'],$_smarty_tpl->tpl_vars['attrids']->value)){?>curattr<?php }?> " mainid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  childid="<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itk']->value['name'];?>
</li>
		
				<?php } ?>	
				</ul>
				
			</div>
		 <div class="cer"></div>
		</div>
	<?php } ?> 
</div>

<input type="hidden" name="selectproductid" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['nowselect']->value['id'])===null||$tmp==='' ? '0' : $tmp);?>
">
		   <input type="hidden" name="product_shopid" value="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['shopid'];?>
">
		   <input type="hidden" name="product_goodsid" value="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
">


 	<div class="moreattset box_inline" style="padding-bottom:10px;">
		<div class="liwd30"  id="product_s_cost" style="color:#ff0000; float:left; margin-right:20px;">
			<?php if (empty($_smarty_tpl->tpl_vars['nowselect']->value)){?>请选择规格<?php }else{ ?>￥<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['nowselect']->value['cost'])===null||$tmp==='' ? '0' : $tmp);?>
</span><?php }?>
		</div>
		<div class="liwd30"  id="product_s_oldcost" style="display:none;text-decoration:line-through;color:#cccccc;">
			￥<?php echo (($tmp = @$_smarty_tpl->tpl_vars['nowselect']->value['cost'])===null||$tmp==='' ? '0' : $tmp);?>

		</div>
		<div class="liwd30 cart_pro_all" style="width:80%; text-align:right;">
				 <ul class="ordisordR" style="position: absolute;right: 10px;top: 8px;"> 
			<?php if ($_smarty_tpl->tpl_vars['foodshow']->value['count']>0){?>			 
					   <div class="righ_l_b_btn" >  
        	   	  	  	<div class="righ_l_b_btn_moren"    data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['shopid'];?>
" id="gid_<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['have_det'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['typeid'];?>
">
						<li><i class="ordenabotR"></i></li>
						</div>
        	   	  	  	<div class="righ_l_b_btn_hover" style="display:none;">
						<span class="right_l_btn_left"   data-id="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['have_det'];?>
">
							<li><i class="ordenabotL"></i></li>
						</span>
						 <li><input class="right_l_btn_nub" readonly id="gshu_<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['nowselect']->value['count'];?>
"></li>
 						<span class="right_l_btn_right"   id="gid_<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['typeid'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['have_det'];?>
">
							 <li><i class="ordenabotR"></i></li>
						</span></div>
        	          </div>
			 <?php }else{ ?>
					  <li style="color:#cccccc;"   class="moreguige">售完</li>
					  
					  <?php }?>
				      		   
				 </ul>
		</div>
		 
	</div>
 <?php }else{ ?>
<!--   	<div class="moreattset box_inline">
		<div class="liwd30"></div>
		<div class="liwd30" style="width:80%; text-align:left;">
		无具体规格
		</div>
		<div class="liwd30"></div>
	</div> -->
 <?php }?>
 
</div>
					
					</div>
					
					
					
					
					
					
					
				</div>
				  <div class="cer"></div>
				<div class="gooddetail">
					<div> <span>商品详情</span> </div> 
					<div style="margin-top:10px;">
						<?php echo (($tmp = @htmlspecialchars_decode($_smarty_tpl->tpl_vars['foodshow']->value['instro']))===null||$tmp==='' ? '暂无详情说明' : $tmp);?>

					</div>
				</div>
				<div class="gooddetail" style="margin-top:0px; border:none;padding-bottom:0px;">
					<div> <span>商品评价</span> </div>  
				</div>
				
				<?php if (!empty($_smarty_tpl->tpl_vars['commentlist']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
				<div class="goodcommentlist">
			 	
					<div style="position:absolute; right:10px; top:18px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M");?>
</div>
					<div>
						<span><?php if (!empty($_smarty_tpl->tpl_vars['items']->value['phone'])){?><?php echo $_smarty_tpl->tpl_vars['items']->value['phone'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
<?php }?></span>
						 <span style="margin-left:25px;">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value['point']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> 
						<img  style="margin-top:-4px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/xinxin01.png" width="13" height="13">
						 <?php endfor; endif; ?> 
						 </span>
						 <span  style="margin-left:8px;"><?php echo $_smarty_tpl->tpl_vars['items']->value['point'];?>
分</span> 
					</div>
					<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['content'])){?>
					<div style=" margin-top:5px;">
					 <span style="color:#666666; font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</span>
					</div>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['replycontent'])){?>
					<div style="background:#f7f7f7;padding:4px 0px;margin-top:4px;color:#666666;"> 
						<div style="text-align:right; margin-top:5px;">
							<span>商家回复：<?php echo $_smarty_tpl->tpl_vars['items']->value['replycontent'];?>
</span>
						</div>
						<div style="text-align:right; margin-top:5px;">
							<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['replytime'],"%Y-%m-%d %H:%M");?>
</span>
						</div>
					</div>
					<?php }?>
 				</div>
				 <?php } ?> 
				 <div class="show_page"> <ul>
				 <?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>
</ul>
				 </div>
			<?php }else{ ?>	
				 <div class="goodcommentlist">
  					<div>
						<span>暂无评价</span> 
					</div>
				  
 				</div>
			
			<?php }?>
				<div style="height:40px;  margin:0 auto; margin-top:40px;   background:#fff;"></div>

         </div>
 		 
		 
		 

    </div>

	<div class="aswm-show-ad">

    <div class="aswm-shop-gg" style="top: 227px; position: absolute;">

    	<h2>本店公告/买家必读</h2>

        <div class="aswm-shop-gginfo">
<?php echo (($tmp = @htmlspecialchars_decode($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info']))===null||$tmp==='' ? '暂无公告' : $tmp);?>
	

        </div>

        <div class="aswm-shop-ggicon">

			
        	<ul>
			
				<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ruledata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
			
				<li><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</li>
		
				<?php } ?>
			

			  <?php  $_smarty_tpl->tpl_vars['itat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itat']->key => $_smarty_tpl->tpl_vars['itat']->value){
$_smarty_tpl->tpl_vars['itat']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['itat']->value['type']=='img'){?> 
          <?php  $_smarty_tpl->tpl_vars['itdd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itdd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itat']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itdd']->key => $_smarty_tpl->tpl_vars['itdd']->value){
$_smarty_tpl->tpl_vars['itdd']->_loop = true;
?>
          <?php  $_smarty_tpl->tpl_vars['itaa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itaa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shopattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itaa']->key => $_smarty_tpl->tpl_vars['itaa']->value){
$_smarty_tpl->tpl_vars['itaa']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['itdd']->value['id']==$_smarty_tpl->tpl_vars['itaa']->value['attrid']){?>
		<li style="background:url(<?php echo $_smarty_tpl->tpl_vars['itaa']->value['value'];?>
) left center no-repeat; background-size:20px;" class="aswm-ico"><?php echo $_smarty_tpl->tpl_vars['itdd']->value['instro'];?>
</li>
          <?php }?>
          <?php } ?> 
          <?php } ?> 
          <?php }?>     
          <?php } ?>
			
			
		

            </ul>

        </div>

        <div class="gotop" onclick="gotop(0)" style="display: none;">返回顶部</div>
		
 
    </div>
<!-- 购物车 -->

	<div id="cartlist" style="bottom: 100px;    z-index: 99999999999999;    position: fixed;">
			
			
 
		
	</div>	
	
    </div>

    <div class="cer"></div>

</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/js/nwaimai.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/js/parabola.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/js/layer.js"></script>
 <script>
$(function(){ 
 if( $('.right_l_btn_nub').val() > 0 ){
	$(".righ_l_b_btn_moren").hide();
	$(".righ_l_b_btn_hover").show();
 }
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
});
   
</script>
<script type="text/javascript">
 

(function($){
    $.fn.capacityFixed = function(options) {
        var opts = $.extend({},$.fn.capacityFixed.deflunt,options);
        var FixedFun = function(element) {
            var top = opts.top;
            var right = ($(window).width()-opts.pageWidth)/2+opts.right;
            element.css({
                "right":right,
                "top":top
            });
            $(window).resize(function(){
                var right = ($(window).width()-opts.pageWidth)/2+opts.right;
                element.css({
                    "right":right
                });
            });
            $(window).scroll(function() {
                var scrolls = $(this).scrollTop();
                if (scrolls > top) {

                    if (window.XMLHttpRequest) {
						$(".gotop").show();
                        element.css({
                            position: "fixed",
                            top: 0							
                        });
                    } else {
                        element.css({
                            top: scrolls
                        });
                    }
                }else {
					$(".gotop").hide();
                    element.css({
                        position: "absolute",
                        top: top
                    });
                }
            });
            element.find(".close-ico").click(function(event){
                element.remove();
                event.preventDefault();
            })
        };
        return $(this).each(function() {
            FixedFun($(this));
        });
    };
    $.fn.capacityFixed.deflunt={
        top:87	};
})(jQuery);
</script>
<script  type="text/javascript"> 
$(".aswm-shop-gg").capacityFixed();
</script> 

 
 
 
 
  
	
	<div style="clear:both;"></div>
  
  
  <div id="product_one" class="cart_products_list" style="width:260px;display:none;"> 
    <div class="cart_products_title" onclick="closeproductdiv();">
	     <span  >X</span>
	</div> 
	 <div   class="productloding">
	      数据加载中....
	</div>
	<div    class="cart_products_content_area">
	 
	
	      
	</div> 
</div>
<script type="text/javascript"> 
 var locationfalse  = false;
 var juanlist  = [];
 $(".MealsList li:nth-child(even)").addClass('odd');//css({'border-left':'3px solid #f60','background-color':'#fffae7'});
 	 
 	var nowdate = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
';
	var starttime = '<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['starttime'];?>
';
	var nowtime = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
';
 var shopid = <?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
;   
 var locationfalse  = false;
 var submithtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/makeorder/datatype/json/random/@random@"),$_smarty_tpl);?>
';
	  var orderhtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/@orderid@"),$_smarty_tpl);?>
';
 var allowedguestbuy = '<?php echo $_smarty_tpl->tpl_vars['allowedguestbuy']->value;?>
';
  	
 
  function artopen(){ 
    art.dialog({
       id: 'testID3',
       lock: true,
       background: '#666', // 背景色
       opacity: 0.87,	// 透明度
       title:'定位提示',
       content: $('#temdiv_id').html()
    });  
  }
	function closetout(){ 
	  art.dialog({id: 'testID3'}).close();
	}
	
	     
//添加店铺收藏
function myFavorite2()
{ 
  var url = siteurl+'/index.php?ctrl=shop&action=addcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
     		$('#AddFavShop').hide(); 
     		$('#CancelFavShop').show();
   }else{ 
   	diaerror(backinfo.content); 
  }  
}  
//删除店铺收藏
function delFav()
{ 
	var url = siteurl+'/index.php?ctrl=shop&action=delcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
      $('#AddFavShop').show(); 
      $('#CancelFavShop').hide();
   }else{ 
   	 diaerror(backinfo.content); 
  }  
}
	
	
	
</script>



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
   	   var page =1; 
 	 var can_show = true;//控制是否翻页 
   	  $(function(){ 
		can_show=false; 
		
 	 
		<?php if ($_smarty_tpl->tpl_vars['foodshow']->value['have_det']==1){?>
			detfreshproduct();
		<?php }?>
 						$('.righ_l_b_btn_moren').click(function(){
						 
								 if(lockclick()){  
										 if($(this).attr('have_det') == 1){
										     detproducttocart($(this).attr('data-id'),$(this).attr('data-shopid'),1);
 											 }else{
										 
										   addonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
										   }
								  }
					 		
								
							  }); 
							   $('.right_l_btn_left').click(function(){
									if(lockclick()){							   
										if($(this).attr('have_det') == 1){
											detdeloneproduct($(this).attr('data-id'),$(this).attr('data-shopid'),1);
										   }else{
											removeonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1);
											}
										}
							  }); 
							   $('.right_l_btn_right').click(function(){  
									if(lockclick()){
										 if($(this).attr('have_det') == 1){
											 detproducttocart($(this).attr('data-id'),$(this).attr('data-shopid'),1);
										 }else{ 
											addonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
									   }
									  }
									 
							  });  
  		/*初始化样式*/
  		   url = siteurl+'/index.php?ctrl=wxsite&action=cart&shopid='+shopid+'&datatype=json&random=@random@';
        url = url.replace('@random@', 1+Math.round(Math.random()*1000));
      	var bk = ajaxback(url,''); 
      	 initshop(bk);
  
  	});
  	function myyanchi(){
  		
  		  checknext = false;
  	}
  	function sortitemclick(doid,obj){  
  	 
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
		// 
 	         
 	         	 $('.cartshuliang').hide();
	         	 $('.cartshuliang').text(0);
	         	 $('#total_count').text(0);
	         	 $('#total_money').text(0);
	      if(datas.flag == false){    
	         if($('#total_money').html() != undefined){ 
				
				<?php if ($_smarty_tpl->tpl_vars['carnum']->value>0){?>
				
					$(".righ_l_b_btn_moren").hide();
					$(".righ_l_b_btn_hover").show();
				
				<?php }?>
	         	
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
		 
		 
       
		 	$('#gidli_'+gid).find('.righ_l_b_btn_moren').hide();
	   	$('#gidli_'+gid).find('.righ_l_b_btn_hover').show();
	 
	      $('#gidli_'+gid).addClass('onselect');
	      $('#gshu_'+gid).val(Number($('#gshu_'+gid).val())+1); 
		  $('#gshu_'+gid).show();
		  $('#total_count').show();
	    
           freshcart();
         
         
} 
 
//加购物车动画
function cartimg1111(obj,gid){
 
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
	 
	      $('#gidli_'+gid).addClass('onselect');
	      $('#gshu_'+gid).val(Number($('#gshu_'+gid).val())+1); 
		  $('#gshu_'+gid).show();
		  $('#total_count').show();
	    	//if($(valse).is(':checked') == true)
} 

function removeonedish(gid,tshopid,num){ 

	   $('#loading').show();
	   url = siteurl+'/index.php?ctrl=site&action=downcart&goods_id='+gid+'&shopid='+tshopid+'&num=1&datatype=json&random=@random@';
	  	 url = url.replace('@random@', 1+Math.round(Math.random()*1000));
    	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       if($('#rellycost').html() != undefined){
 
 	  
	         notypenum = Number($('#total_count').text())-1;
	         $('#total_count').text(notypenum);
	         if(notypenum < 1){
	         	  $('#total_count').text(0);
	         }
			 
 		 
	         notypenum = Number($('#gshu_'+gid).val()) -1;
	 
	          $('#gshu_'+gid).val(notypenum);
	         if(notypenum < 1){
				$('#cp_'+$('#gidli_'+gid).attr('typeid')).find('.qipao').eq(0).remove();
	         	$('#gshu_'+gid).val(0);
	         	$('#gidli_'+gid).removeClass('onselect');
	         	$('#gidli_'+gid).find('.righ_l_b_btn_hover').hide(); 
	         	$('#gidli_'+gid).find('.righ_l_b_btn_moren').show();
  
	         } 
			 
			  freshcart();
			 
	   	   }else{ 
	   	    	  freshcart();
	   	   }
	    }else{
	    	diaerror(bk.content);
	    }
	  $('#loading').hide();
}
 
  
   	  </script>
 
 <script>
 var foodid = '<?php echo $_smarty_tpl->tpl_vars['foodshow']->value['id'];?>
';
 var click_button = false;
function doubleclick(){
	click_button = false;
}
function lockclick(){
	 if(click_button == false){
			click_button = true;
			setTimeout("doubleclick()", 300); 
			return true;
	 }else{
		 return false;
	 }
}

 var is_open = false; 
 $(function(){  
 
 if(lockclick()){
	detbindclcikattr();
}
 	  $('.return').bind("click", function() {    
	    history.back();
   }); 
   
   $('.toptitBox .toptitL').bind("click", function() {    
	    history.back();
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
	
   
   
 });
 

function detbindclcikattr(){
 
	$('.attrson li').bind("click", function() { 
 
	if(lockclick()){  
	
	   if($(this).hasClass('disable') == true){
			diaerror('商品无库存或者库存不足');
	   }else{
			var obj = $('.productinfobox .attrson');
			var tarray= new Array();
			var liarray = new Array();
			$.each(obj, function(i, newobj){   
				 if($(newobj).find('.curattr').eq(0).html() != undefined){ 
					 tarray.push($(newobj).find('.curattr').eq(0).attr('childid'));
				 }else{
					 liarray.push($(newobj).attr('data'));
				 }
			});
		 
			if(tarray.length == $(obj).length){//已全则还需要 重置查询条件
				$('.productinfobox .curattr').removeClass('curattr');
			}
		
		
		
			$(this).addClass('curattr').siblings().removeClass('curattr');
			
				detfreshproduct();
			
	   }
     }    	
    });
} 
 
 
function detproducttocart(gid,tshopid,num){
 
//	if($('#producttocart').hasClass('disable') == true){
		
//	}else{
		detuponeproduct($('input[name="selectproductid"]').val(),$('input[name="product_shopid"]').val(),1);
// 	}
}
function detdeloneproduct(gid,tshopid,num){
	detremoveoneproduct($('input[name="selectproductid"]').val(),$('input[name="product_shopid"]').val(),1);
}
function detfreshproduct(){
 	var obj = $('.productinfobox .attrson');
	var tarray= new Array();
	var liarray = new Array();
	$.each(obj, function(i, newobj){   
		 if($(newobj).find('.curattr').eq(0).html() != undefined){
			 
			 tarray.push($(newobj).find('.curattr').eq(0).attr('childid'));
		 }else{
			 
			 liarray.push($(newobj).attr('data'));
		 }
	});
	// alert(tarray.join(','));
	 
	 
	var shopid = $('input[name="product_shopid"]').val();
	var goodsid = $('input[name="product_goodsid"]').val();
	
	var ggdetids = tarray.join(',');
 
	if(tarray.length == $(obj).length){ 
		var url= siteurl+'/index.php?ctrl=site&action=doselectproduct&goods_id='+goodsid+'&shopid='+shopid+'&ggdetids='+ggdetids+'&type=1&datatype=json&random=@random@';
        url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
    	var bk = ajaxback(url,'');
		 
	    if(bk.flag == false){ //需获取出当前商品的productid 并获取相关库存 已在购物中的数量
		     var productinfo = bk.content;
             //alert(productinfo.id);		
            // uponeproduct(productinfo.id,shopid,1);	
             if(productinfo.stock < 1){
				//  $('#producttocart').addClass('disable');
				  diaerror('商品库存不足');
			 }else{
				 
				 $('input[name="selectproductid"]').val(productinfo.id);
			//	 $('#producttocart').removeClass('disable');
				 $('#product_s_cost').text("￥"+productinfo.cost);
				 if(productinfo.is_cx == 1){
					 $('#product_s_oldcost').show();
					 $('#product_s_oldcost').text("￥"+productinfo.oldcost);
				 }
				 if(productinfo.goodcartnum  > 0 ){
					$(".righ_l_b_btn_moren").hide();
					$(".righ_l_b_btn_hover").show();
			 		$("#gshu_"+foodid).val(productinfo.goodcartnum);
				 }else{
					$(".righ_l_b_btn_moren").show();
					$(".righ_l_b_btn_hover").hide();
			 		$("#gshu_"+foodid).val(0);
				 }
			 }
	    }else{
		
			$('input[name="selectproductid"]').val('');
//			$('#producttocart').addClass('disable');
			 
	    
		diaerror(bk.content);
			
	    } 
	}else{
	 
		//构造未选择完刷新提交数据
					$(".righ_l_b_btn_moren").show();
					$(".righ_l_b_btn_hover").hide();
					$("#gshu_"+foodid).val(0);
		$('input[name="selectproductid"]').val('');
		var url= siteurl+'/index.php?ctrl=site&action=doselectproduct&goods_id='+goodsid+'&shopid='+shopid+'&ggdetids='+ggdetids+'&datatype=json&random=@random@';
        url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
    	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
		     var tempids = bk.content;
		     var checkarray = tempids.split(','); 
			 for(var i=0;i<liarray.length;i++){
				 var tempobj = $('#productggli_'+liarray[i]);
				 var liboj = $(tempobj).find('li');
				  $.each(liboj, function(j, newobj){  
                      if($.inArray( $(newobj).attr('pid'), checkarray ) >=0){ 
					      $(newobj).removeClass('disable');
					  }else{
						  $(newobj).addClass('disable');
					  }    				  
				  });
			 }
			 
			 
			  // if($.inArray( $(this).attr('data'), temparray ) >=0){ 
		// }else{
		     // temparray.push($(this).attr('data'));
		// } 	
			 
	    }else{
			//diaerror(0);
	    //	diaerror(bk.content);
	    } 
    }		
	
}


function detuponeproduct(gid,tshopid,num){  
	var url= siteurl+'/index.php?ctrl=site&action=addcart&goods_id='+gid+'&shopid='+tshopid+'&num=1&gdtype=2&datatype=json&random=@random@';
      url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
    	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
		detfreshproduct();
	       freshcart();
	    }else{
	    	diaerror(bk.content);
	    }
	
}
function detremoveoneproduct(gid,tshopid,num){ 
	
	 url = siteurl+'/index.php?ctrl=site&action=downcart&goods_id='+gid+'&shopid='+tshopid+'&num=1&gdtype=2&datatype=json&random=@random@';
	  	 url = url.replace('@random@', 1+Math.round(Math.random()*1000));
	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       freshcart();
		    detfreshproduct();
	 
	    }else{
	    	diaerror(bk.content);
	    }
	  
}
 

 function freshowdetcart(){
			 url = siteurl+'/index.php?ctrl=wxsite&action=cart&shopid='+shopid+'&datatype=json&random=@random@';
			url = url.replace('@random@', 1+Math.round(Math.random()*1000));
			var bk = ajaxback(url,''); 
			if($('#showorderdet .showorderList').html() == undefined){
 			}else{
			 showcartdet(bk);
			 
			}
		//	diaerror($('#showorderdet').find('.box_inline').length);
			
			
		 
		 
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
		   pulldowncate.refresh();
		 
     	  
    }else{
  		 
          $('#cartlist').hide();
      
          
       
    }
}  
  </script>
   

 
 
<style>

.footer01 .dianhua{  width:250px; height:83px; float:left; font-family:微软雅黑;}
.footer01 .dianhua ul{}
.footer01 .dianhua li{ float:left; display:inline; width:154px; padding-left:80px; color:#FFFFFF}
.footer01 .dianhua li b{ color:#6CCB3B}
.footer01 .dianhua li b#font24{ font-size:20px; color:#ffffff;}
.footer01 .dianhua li.li1{ background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/index_r62_c6.png) left center no-repeat; height:74px; width:170px}
.footer01 .dianhua li.li2{ background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/iconfont-mark.png) left center no-repeat; height:74px;background-size: 50px 50px;}
.footer01 .dianhua li b#font24 a {
color: #fff;
}
</style>



<div class="footer01" style="height:245px;">
<div style="background:#f38383; height:20px;"></div>
		  <div style="background:#f38383; width:100%; margin:0 auto;height:170px;">
				  <div class="box02">

					
					   <div style="float:left; width:490px">
					   
						 <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"newstype",'where'=>"displaytype=1 and parent_id=0",'fileds'=>"*",'limit'=>3,'orderby'=>"orderid asc"),$_smarty_tpl);?>
 
								 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>   
					   
						<dl>
						   <dt ><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</dt>
								<?php if ($_smarty_tpl->tpl_vars['items']->value['type']==2){?>
									  <?php echo smarty_function_load_data(array('assign'=>"list2",'table'=>"newstype",'fileds'=>"*",'where'=>"parent_id=".((string)$_smarty_tpl->tpl_vars['items']->value['id']),'limit'=>4),$_smarty_tpl);?>
 
									   <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list2']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>  
						   
						   <dd><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/newstype/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</a></dd>
						   
							<?php } ?> 
							
							
							
									  
									  
								  <?php }else{ ?>
									  <?php echo smarty_function_load_data(array('assign'=>"list2",'table'=>"news",'fileds'=>"id,title,typeid",'where'=>"typeid=".((string)$_smarty_tpl->tpl_vars['items']->value['id']),'limit'=>4),$_smarty_tpl);?>
 
									  <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list2']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>    
									   <dd><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/news/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['itv']->value['title'];?>
</a></dd>
									  
										<?php } ?> 
								 <?php }?>
						  
						</dl>
						 <?php } ?>   
						</div>
						
						
						   <div class="dianhua" style="width:320px;">
						 <ul>
						   <li class="li1" style="background:none; margin-left:20px; width:135px; padding-left:0px;">
						   
						   <img style="width:135px; height:153px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/wmr_ewm.png" />
						  
											 </li>
						   <li class="li2" style="background:none; margin-left:20px;  width:135px;padding-left:0px;">
						   
						      <img style="width:135px; height:153px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/wmr_android.png" />
						  
						   </li>
						 </ul>
					   </div>
						
						
						   <div class="dianhua" style="float:right;">
						 <ul>
						   <li class="li1"><strong>客服电话</strong><br /><b id="font24"><?php echo $_smarty_tpl->tpl_vars['litel']->value;?>
</b><br />周一至周日&nbsp;09:30-21:30
						   
						  
											 </li>
						   <li class="li2"><strong>欢迎留言 </strong><br /><b id="font24"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/ask/index"),$_smarty_tpl);?>
" >反馈留言</a></b><br />您的意见对我们至关重要</li>
						 </ul>
					   </div>
						
						
				</div> 
		</div>
				 <div class="footer02" style="height:50px; margin-top:5px;">
			  <p>
			  
			  <P class="" >
			     <?php if (!empty($_smarty_tpl->tpl_vars['toplink']->value)){?>
	 	     	<?php $_smarty_tpl->tpl_vars['toplink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['toplink']->value), null, 0);?>
       <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toplink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['items']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['items']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
 $_smarty_tpl->tpl_vars['items']->iteration++;
 $_smarty_tpl->tpl_vars['items']->last = $_smarty_tpl->tpl_vars['items']->iteration === $_smarty_tpl->tpl_vars['items']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listname']['last'] = $_smarty_tpl->tpl_vars['items']->last;
?> 
			        
					   <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
" class=""  data="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><span style="line-height:16px;"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</span>
					    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['listname']['last']){?><span> &nbsp;&nbsp;|&nbsp;&nbsp; </span><?php }?>
						</a> 
		  <?php } ?>
		  <?php }?>
         	
			  
			  </P>
			  <P class="">Copyright©2009-2014 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
  | <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
   <?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
 </P>
			   
			  </div> 

 
</div>



</body>
</html><?php }} ?>