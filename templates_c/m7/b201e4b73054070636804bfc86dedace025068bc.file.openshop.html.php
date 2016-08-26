<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:10:48
         compiled from "/data/wwwroot/waimairen/templates/m7/shop/openshop.html" */ ?>
<?php /*%%SmartyHeaderCode:68337727457beb61844b753-94923408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b201e4b73054070636804bfc86dedace025068bc' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/shop/openshop.html',
      1 => 1437553090,
      2 => 'file',
    ),
    '028ecad86fe60107edff5e66fd88b13a2e0fd787' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/site.html',
      1 => 1452412480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68337727457beb61844b753-94923408',
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
  'unifunc' => 'content_57beb6186106b1_56025029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb6186106b1_56025029')) {function content_57beb6186106b1_56025029($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> -<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
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
/public/css/shop.css">

<div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:url(<?php echo $_smarty_tpl->tpl_vars['sitebk']->value;?>
) repeat;"<?php }?>></div> 
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
 
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/adminpage/public/js/allj.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/datepicker/WdatePicker.js" type="text/javascript" language="javascript"></script>


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

   
   <div style="padding:16px 0px 0px; height:40px; width:1200px ;margin:0 auto; line-height:40px;">

	<p style="color:#272727; float:left; margin-right:0px; font-size:14px; font-weight:bold; font-family:微软雅黑;">当前位置： <!-- 共有 <span id="shopzongshu" style="color:#ef5252;">0</span> 家餐厅能配送到 --></p>
	<p style="color:#272727; float:left; font-size:14px; padding-left:20px; font-family:微软雅黑; font-weight:bold; background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/comtopguideBg.png) left center no-repeat;"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['mapname']->value)===null||$tmp==='' ? '' : $tmp);?>

		<a  href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/guide"),$_smarty_tpl);?>
"><span style=" margin-left:5px;width:71px; font-family:微软雅黑; height:30px; padding:5px 12px; background:#f57c7c; color:#ffffff;">切换地区</span></a>  </p>
	<p style="width:276px; height:40px; background:#ffffff; float:right;">
	
		<input style="width:214px; height:38px; font-family:微软雅黑; border:1px solid #F5F5F5; line-height:38px; padding:0px 10px ;  float:left;" type="text" value="" placeholder="搜索餐厅" id="search_input"  name="search_input" />
		<span><img id="comtopsearch"  style="cursor:pointer;width:40px; height:40px; float:left;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/comtopsearchBg.png" /></span>
		
	</p>
	</div>

  
	  <script type="text/javascript">
						$('#comtopsearch').click(function(){
						
							search();
						})
						
						function search()
						{
							var searchname = $('#search_input').val();
						
							if( searchname != '' ) 
							{
								var url = siteurl+'/index.php?ctrl=site&action=shoplist&shopsearch='+searchname; 
								location.href=url;
							}else{
							
								alert("搜索条件不能为空！");
								
							}
						}
					
					</script>
   
   

<div style="clear:both;"></div>


 
 

  
 <style>
 .selfruzhu{float:left; height:42px; line-height:42px; cursor:pointer; padding:0px 20px;margin:19px 0px 0px 70px;font-size:16px; color:#000;}
 .qyrz{float:left; height:42px; line-height:42px; cursor:pointer; padding:0px 20px; margin:19px 0px 0px 0px; font-size:16px; color:#000;}
 .curruzhu{ color:#ffffff; background:#ff6931; height:42px; line-height:42px;}
 .uploads,.fanuploads{ background:#f0f0f0; padding:4px 5px; border:1px solid #ccc; color:#000; cursor:pointer;}
 .lableinfo{width:120px; float:left; margin-top:5px;}
 .hc_login_div img{ width；140px; height:80px;}
 .qiyeruzhu{display:none;}
 </style>
<script>
$(function(){
	$(".selfruzhu").click(function(){
		$(".selfruzhu").addClass('curruzhu');
		$(".qyrz").removeClass('curruzhu');
		$(".qiyeruzhu").hide();
		$(".grruzhu").show();
		$("#ruzhutype").val('0');
	});
	$(".qyrz").click(function(){
		$(".selfruzhu").removeClass('curruzhu');
		$(".qyrz").addClass('curruzhu');
		$(".qiyeruzhu").show();
		$(".grruzhu").hide();
		$("#ruzhutype").val('1');
	});
});
</script>
<div id="content">
	<form id="regForm" method="post" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/saveopen/datatype/json"),$_smarty_tpl);?>
">
<div class="hc_content">
		<div class="hc_login" style="height:auto;">
			<div class="hc_login_head"><span class="hc_login_head_span">我要开店</span></div>
			<div class="hc_login_content" style="overflow:normal;">
				<div class="hc_login_content_left" style="height:auto; background:#ffffff; width:699px;">
					
					<?php echo smarty_function_load_data(array('assign'=>"shopinfo",'table'=>"shop",'type'=>"one",'where'=>"uid='".((string)$_smarty_tpl->tpl_vars['member']->value['uid'])."' ",'fileds'=>"*"),$_smarty_tpl);?>
  
					<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value)){?>
					<div style="height:60px;text-align:center; border-bottom:1px solid #ccc;">
						<div class="selfruzhu curruzhu">个人入驻</div>
						<div class="qyrz">企业入驻</div>
						<input type="hidden" name="ruzhutype" id="ruzhutype" value="0"  />
					</div>
					
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">*</span><span>店铺名称：</span></div>
						<input   class="hc_login_input" style="line-height: 38px; padding: 0 5px; margin: 0; border: 0; width: 252px; height: 38px; outline: none;" placeholder="店铺名称（填写中文名称）" type="text" name="shopname" value="">
						
					</div>
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">*</span>联系电话：</div>
						<input   class="hc_login_input" style="line-height: 38px; padding: 0 5px; margin: 0; border: 0; width: 252px; height: 38px; outline: none;" placeholder="负责人联系电话" type="text" name="maphone" value="">
					
					</div>		
					
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">*</span>联系地址：</div> 
						<input   class="hc_login_input" style="line-height: 38px; padding: 0 5px; margin: 0; border: 0; width: 252px; height: 38px; outline: none;" placeholder="店铺位置的详细信息" type="text" name="address" value="">
					
					</div>
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">*</span>店铺类型：</div>
					  <select name="shoptype" style="height:40px; border:1px solid #ccc;">
					  	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shoptype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
					  	<option value="<?php echo $_smarty_tpl->tpl_vars['mykey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value;?>
</option>
					  	<?php } ?>
					  </select>
						
					</div>	
					
					
					<div class="hc_login_div qiyeruzhu" >
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">*</span>企业执照：</div> 
							<img src="" width="140" height="80" id="qiyeimgshow" <?php if (empty($_smarty_tpl->tpl_vars['juaninfo']->value['shareimg'])){?> style="display:none;"<?php }?>>
						<input type="hidden" name="qiyeimgurl" id="qiyeimgurl" value="" class="skey" style="width:150px;" >
                      	<span id="qiyeuploads" class="uploads">上传企业执照图片</span>
					</div>
					
					
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo grruzhu"><span class="hc_login_div_span_span">*</span>个人身份证图：</div> 
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo qiyeruzhu"><span class="hc_login_div_span_span">*</span>法人身份证图：</div> 
							<img src="" width="140" height="80" id="zmimgshow" style="display:none;"  />
						<input type="hidden" name="zmimgurl" id="zmimgurl" value="" class="skey" style="width:150px;" >
                      	<span id="zmuploads" class="uploads">上传正面图片</span>
					</div>
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span" style="margin-right:81px;"></span></div> 
							<img src="" width="140" height="80" id="fanimgshow" <?php if (empty($_smarty_tpl->tpl_vars['juaninfo']->value['shareimg'])){?> style="display:none;"<?php }?>>
						<input type="hidden" name="fanimgurl" id="fanimgurl" value="" class="skey" style="width:150px;" >
                      	<span id="fanuploads" class="fanuploads">上传反面图片</span>
					</div>
					
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">*</span>食品流通证：</div> 
							<img src="" width="140" height="80" id="foodimgshow" <?php if (empty($_smarty_tpl->tpl_vars['juaninfo']->value['shareimg'])){?> style="display:none;"<?php }?>>
						<input type="hidden" name="foodimgurl" id="foodimgurl" value="" class="skey" style="width:150px;" >
                      	<span id="fooduploads" class="uploads">上传食品流通证图片</span>
					</div>
					
						
					<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">&nbsp;</span>健康证：</div> 
							<img src="" width="140" height="140" id="jkimgshow" <?php if (empty($_smarty_tpl->tpl_vars['juaninfo']->value['shareimg'])){?> style="display:none;"<?php }?>>
						<input type="hidden" name="jkimgurl" id="jkimgurl" value="" class="skey" style="width:150px;" >
                      	<span id="jkuploads" class="uploads">上传健康证图片</span>
					</div>
					
					<div class="hc_login_div qiyeruzhu">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">&nbsp;</span>商家授权书：</div> 
							<img src="" width="140" height="140" id="sqimgshow" <?php if (empty($_smarty_tpl->tpl_vars['juaninfo']->value['shareimg'])){?> style="display:none;"<?php }?>>
						<input type="hidden" name="sqimgurl" id="sqimgurl" value="" class="skey" style="width:150px;" >
                      	<span id="squploads" class="uploads">上传商家授权书图片</span>
					</div>
					
				<div class="hc_login_div">
						<div class="hc_login_div_span hc_login_zhuce_margin lableinfo"><span class="hc_login_div_span_span">&nbsp;</span>其它说明：</div>
						<input   class="hc_login_input" style="line-height: 38px; padding: 0 5px; margin: 0; border: 0; width: 252px; height: 38px; outline: none;" placeholder="其它说明" type="text" name="qtshuoming" value="">
					
					</div>	
					
					
					
					<div class="hc_login_div">
						<label class="checkbox" style="margin-left: 160px;">
					      <input name="reg[agree]" type="checkbox" checked="" disabled> 我接受<a target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/single/show/xieyi"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
开店协议</a>。
					    </label>
					    <p class="tip2"></p>											
					</div>
					<div class="hc_login_btn" style="margin-bottom:20px;">
						<input name="tijiao" type="hidden" value="do"> 
						<div id="te_reg_btn" class="login-button hc_login_btn_div hc_login_btn_margin_left1">提交申请</div>
						<div class="clear"></div>
					</div>
          <?php }else{ ?>
          <div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>申请店铺名称：</span>
						<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>

						<p class="tip2"></p>
					</div>
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>申请联系电话：</span>
						<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['maphone'];?>

					</div>		
					
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>申请联系地址：</span> 
							<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['address'];?>

					</div>
						
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>申请类型：</span> 
							<?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype']==0){?>外卖<?php }else{ ?>超市<?php }?>
					</div>
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>申请处理状态：</span> 
							<?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['is_pass']==0){?>处理中<?php }else{ ?>通过审核<?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['ruzhutype']==1){?>
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>企业执照：</span> 
						<?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['qiyeimg'])){?>		<img src="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['qiyeimg'];?>
" /><?php }else{ ?> 无	<?php }?>
					</div>
					<?php }?>
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>身份证正面：</span> 
						<?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['zmimg'])){?>		<img src="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['zmimg'];?>
" /><?php }else{ ?> 无	<?php }?>
					</div>	
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>身份证反面：</span> 
							<?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['fmimg'])){?>	<img src="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['fmimg'];?>
" /><?php }else{ ?> 无	<?php }?>
					</div>
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>食品流通证：</span> 
							<?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['foodtongimg'])){?>	<img src="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['foodtongimg'];?>
" /><?php }else{ ?> 无	<?php }?>
					</div>
							<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>健康证：</span> 
						<?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['jkzimg'])){?>		<img src="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['jkzimg'];?>
" /><?php }else{ ?> 无	<?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['ruzhutype']==1){?>
					<div class="hc_login_div">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>商家授权书：</span> 
						<?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['sqimg'])){?>	<img src="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['sqimg'];?>
" />  <?php }else{ ?> 无	<?php }?>
					</div>
					<?php }?>					
					<div class="hc_login_div" style="margin-bottom:30px;">
						<span class="hc_login_div_span hc_login_zhuce_margin"><span class="hc_login_div_span_span">*</span>其它说明：</span> 
							<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['qtshuoming'];?>

					</div>
				  <?php }?>

				</div>

				<div class="hc_login_content_right">
					<div style="margin-left:10px;margin-top:10px;width:450px;height:450px;overflow-x:visible;overflow-y:scroll;"> 
						<?php echo smarty_function_load_data(array('assign'=>"xieyi",'table'=>"single",'type'=>"one",'where'=>"code='xieyi'",'fileds'=>"*"),$_smarty_tpl);?>
  
			         <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['xieyi']->value['content']);?>
 
            </div>
					 
				</div>
				<div class="clear"></div>
			</div>

		</div>



	</div>

</form>

<script type="text/javascript">

$('.login-button').click(function(){ 
	subform('',$('#regForm'));
})
$(".hc_login_input").change(function(j){
		var v=$(this).val();
		var p=$(this).attr("name"); 
		switch(p){
		case "shopname":
			if(v == '' ||v == null){
			  alert('店铺名不能为空'); 
			}else{
				$.ajax({
				type: "POST",
				url: '<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/checkshopname/datatype/json"),$_smarty_tpl);?>
',
				dataType: "json",
				data: "uname=" + v,
				success: function(msg){     
					if(msg.error == true){ 
						$('[name="email"]').val('');
					  alert(msg.msg); 
					 }
					}
				});			
			}
		break;
		case "maphone":
		 	var patrn=/[u4e00-u9fa5]/;  
			if(v == '' ||v == null){
			  alert('用户名不能为空'); 
			}else{
				$.ajax({
				type: "POST",
				url: '<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/checkshopphone/datatype/json"),$_smarty_tpl);?>
',
				dataType: "json",
				data: "uname=" + v,
				success: function(msg){ 
					if(msg.error==true){ 
						$('[name="tname"]').val('');
					  alert(msg.msg); 
					 }
					}
				});	
			}
		break; 
		case "address":
			var patrn=/(.){6,50}/;  
			if(!patrn.exec(v)){
				 alert('联系地址大于6小于50');  
			 } 
		break;
		}
	});

</script>

	<script>
	
	$(function(){
		$("#zmuploads").click(function(){
			uploads();
		});
		$("#fanuploads").click(function(){
			fanuploads();
		});
		$("#fooduploads").click(function(){
			fooduploads();
		});
		$("#jkuploads").click(function(){
			jkuploads();
		});	
		$("#qiyeuploads").click(function(){
			qiyeuploads();
		});
		$("#squploads").click(function(){
			squploads();
		});
	});
	 function addimg()
	 {
	 	 var panduan = $("#parent_id  option:selected").val(); 
	 	 if(panduan == 0)
	 	 {
	 	 	showupload();
	 	 }else{
	 	 	hideupload();
	  	} 
	 }
	 function showupload()
	 {
	 	  $('#imgdo').show();
	 }
	 function hideupload()
	 {
	 	  $('#imgdo').hide();
	 }
	 var dialogs ;
 function uploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/other/adminupload/func/uploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传身份证正面图片'); 
 } 
 function uploadsucess(flag,msg,linkurl){

 	 if( linkurl == '' ){
 		alert(linkurl);
		dialogs.close();
	//	uploads();
 	 }else{ 
 		dialogs.close();
 	  $('#zmimgurl').val(linkurl);
 	  $('#zmimgshow').attr('src',linkurl);
 	  $('#zmimgshow').show(); 
   }
 } 
 
 
   function fanuploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/other/adminupload/func/fanuploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传身份证反面图片'); 
 }
  function fanuploadsucess(flag,msg,linkurl){
 	 if(linkurl == ''){
 		alert(linkurl);
		dialogs.close();
		//fanuploadsucess();
 	 }else{ 
 		dialogs.close();
 	  $('#fanimgurl').val(linkurl);
 	  $('#fanimgshow').attr('src',linkurl);
 	  $('#fanimgshow').show(); 
   }
 } 
 
 function fooduploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/other/adminupload/func/fooduploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传食品流通证图片'); 
 }
  function fooduploadsucess(flag,msg,linkurl){
 	 if(linkurl == ''){
 		alert(linkurl);
		dialogs.close();
	//	fooduploadsucess();
 	 }else{ 
 		dialogs.close();
 	  $('#foodimgurl').val(linkurl);
 	  $('#foodimgshow').attr('src',linkurl);
 	  $('#foodimgshow').show(); 
   }
 } 
 
 
 function jkuploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/other/adminupload/func/jkuploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传健康证图片'); 
 }
  function jkuploadsucess(flag,msg,linkurl){
 	 if(linkurl == ''){
 		alert(linkurl);
		dialogs.close();
		//jkuploads();
 	 }else{ 
 		dialogs.close();
 	  $('#jkimgurl').val(linkurl);
 	  $('#jkimgshow').attr('src',linkurl);
 	  $('#jkimgshow').show(); 
   }
 } 
 
 
 
 function qiyeuploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/other/adminupload/func/qiyeuploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传企业执照图片'); 
 }
  function qiyeuploadsucess(flag,msg,linkurl){
 	 if(linkurl == ''){
 		alert(linkurl);
		dialogs.close();
		qiyeuploadsucess();
 	 }else{ 
 		dialogs.close();
 	  $('#qiyeimgurl').val(linkurl);
 	  $('#qiyeimgshow').attr('src',linkurl);
 	  $('#qiyeimgshow').show(); 
   }
 } 
 
 
 
  function squploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/other/adminupload/func/squploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传商家授权书图片'); 
 }
  function squploadsucess(flag,msg,linkurl){
 	 if(flag == true){
 		alert(linkurl);
		dialogs.close();
		squploadsucess();
 	 }else{ 
 		dialogs.close();
 	  $('#sqimgurl').val(linkurl);
 	  $('#sqimgshow').attr('src',linkurl);
 	  $('#sqimgshow').show(); 
   }
 } 
 
</script>

</div>
 
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