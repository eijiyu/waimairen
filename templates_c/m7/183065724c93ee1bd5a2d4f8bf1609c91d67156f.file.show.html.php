<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:11:21
         compiled from "/data/wwwroot/waimairen/templates/m7/plate/show.html" */ ?>
<?php /*%%SmartyHeaderCode:131109334157beb639581806-36611085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '183065724c93ee1bd5a2d4f8bf1609c91d67156f' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/plate/show.html',
      1 => 1450234990,
      2 => 'file',
    ),
    '028ecad86fe60107edff5e66fd88b13a2e0fd787' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/site.html',
      1 => 1452412480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131109334157beb639581806-36611085',
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
  'unifunc' => 'content_57beb63979c821_62816902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb63979c821_62816902')) {function content_57beb63979c821_62816902($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> <?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
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
/public/css/platshow.css">


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
 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/plateshop.js" type="text/javascript" language="javascript"></script>
<script>
	var shopid = '<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
';
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


 

  
<div class="hc_content">

	<div class="basicinfo">
    <div class="b-img ">
             <img width="198" height="150" style="width:198px; height:150px;" src="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopinfo']->value['shoplogo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
">
   </div>
<div class="b-info "  >
<h2><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</h2>
<dl>
<dt>	<?php  $_smarty_tpl->tpl_vars['itat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itat']->key => $_smarty_tpl->tpl_vars['itat']->value){
$_smarty_tpl->tpl_vars['itat']->_loop = true;
?>
									  <?php if ($_smarty_tpl->tpl_vars['itat']->value['id']=='51'){?> 
									   
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
									            <?php echo $_smarty_tpl->tpl_vars['itdd']->value['name'];?>
,
									            <?php }?>
									          <?php } ?> 
									      <?php } ?> 
									  <?php }?>     
									<?php } ?> 
									
									<span class="rate">
<span class="">

<div class="hc_xinxin_div" > <span class="Star_g " original-title="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point']*20;?>
" style="margin:0px 0px 0px 0px;"> <span class="Star_y" style="width:<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point']*20;?>
%;"></span> </span> </div>

</span>
</span>
<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point'];?>
.0分
									</dt>
									
									<dd class="rate-con">
</dd>

<dd class="rate-con">
<span class="rate">
<span class="rate-inner" style="width:0px"></span>
</span>
</dd>
</dl>
<dl style="margin-top:15px;">
<dt><i class="icon icon-time"></i>营业时间:&nbsp;</dt>
<dd>
<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['starttime'];?>

 
	<?php if ($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==3){?> 				                  
	<strong class="doing">接受预订</strong>
	<?php }elseif($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==2){?>
	<strong class="doing">[营业中]</strong>
	<?php }else{ ?>
	<strong class="doing">已打烊</strong>
	<?php }?>

</dd>
</dl>
<dl>
<dt><i class="icon icon-address"></i>商户地址:&nbsp;</dt>
<dd>
<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['address'];?>

</dd>
</dl>


</div>



</div>
<div style="clear:both;"></div>
 


	 
	<div class="shopshow_content">
		 <div class="goods_div">
		 	  <div class="goodsh1"> 菜单<div class="changelisttype"><span class="wordli">&nbsp;&nbsp;</span><span class="imglion">&nbsp;&nbsp;</span></div></div>
		 	  <div class="goodsnav">
		 	  	   <a href="#" class="on">所有</a>
		 	  	   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodstype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>  
			           <a href="javascript:;" onclick="scollto('#typeid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a>
			       <?php } ?>  
		 	  </div>
		 	  <div class="goodslistimgtype" id="goodslist">
		 	  	 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodstype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
		 	 
		 	  	  	   <div class="goodstypetitle" id="typeid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</div>
		 	  	  	   <div class="goodstypelist">
		 	  	  	   	  <ul>
		 	  	  	   	  		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
							
		 	  	  	   	  	 <li class="<?php if ($_smarty_tpl->tpl_vars['mykey']->value%3==1){?>middle<?php }?> goodsli">
		 	  	  	   	  	 	  <div class="goodsimg"><img style="width:280px; height:180px;"  class="lazy"  src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/shop/grey.gif" data-original="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
"></div>
		 	  	  	   	  	    <div class="goodsname"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</div>
		 	  	  	   	  	    <div class="goodscost"><?php echo $_smarty_tpl->tpl_vars['value']->value['cost'];?>
元<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['goodattr'])){?>/<?php echo $_smarty_tpl->tpl_vars['value']->value['goodattr'];?>
<?php }else{ ?>/<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?></div>
		 	  	  	   	  	    <div class="goodsbiaotian">&nbsp;
		 	  	  	   	  	    	  <?php $_smarty_tpl->tpl_vars['goodssignlist'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['value']->value['signid']), null, 0);?>  
                                                            	      <?php  $_smarty_tpl->tpl_vars['goodssi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodssi']->_loop = false;
 $_smarty_tpl->tpl_vars['mytestid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodssignlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodssi']->key => $_smarty_tpl->tpl_vars['goodssi']->value){
$_smarty_tpl->tpl_vars['goodssi']->_loop = true;
 $_smarty_tpl->tpl_vars['mytestid']->value = $_smarty_tpl->tpl_vars['goodssi']->key;
?>
                                                            	         <?php if ($_smarty_tpl->tpl_vars['mytestid']->value<5&&!empty($_smarty_tpl->tpl_vars['goodssi']->value)&&isset($_smarty_tpl->tpl_vars['goodsattr']->value[$_smarty_tpl->tpl_vars['goodssi']->value])){?> 
                                                            	           <img src="<?php echo $_smarty_tpl->tpl_vars['goodsattr']->value[$_smarty_tpl->tpl_vars['goodssi']->value];?>
"/>
                                                            	            <?php }?> 
                              <?php } ?> 
                              
		 	  	  	   	  	    </div>
		 	  	  	   	  	    <div class="goodsscore">
                                                          <span class="Star_g " original-title="<?php echo $_smarty_tpl->tpl_vars['value']->value['point'];?>
分">
                                                            	<?php if ($_smarty_tpl->tpl_vars['value']->value['point']!=0){?> 
                                                            	<?php $_smarty_tpl->tpl_vars['long'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['point']*20, null, 0);?>
                                                            	<?php }else{ ?> 
                                                            	<?php $_smarty_tpl->tpl_vars['long'] = new Smarty_variable("100", null, 0);?>
                                                            	<?php }?> 
                                                                <span class="Star_y" style="width:<?php echo $_smarty_tpl->tpl_vars['long']->value;?>
%;"></span>
                                                </span>
                                                           
                           </div>
                          <div class="goodstj">
                    &nbsp;&nbsp;&nbsp;  售<font class="fontbold"><?php echo $_smarty_tpl->tpl_vars['value']->value['sellcount'];?>
</font><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['goodattr'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['goodattr'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?>,<font class="fontbold"><?php echo $_smarty_tpl->tpl_vars['value']->value['point'];?>
</font>点评
                          </div>
		 	  	  	   	  	    <div class="goodsbtn"><?php if ($_smarty_tpl->tpl_vars['value']->value['count']<1){?><a href="javascript:void(0);"  class="sellout"  >已售完</a><?php }else{ ?><a href="javascript:void(0);"   class="onsell" have_det="<?php echo $_smarty_tpl->tpl_vars['value']->value['have_det'];?>
" shopid="<?php echo $_smarty_tpl->tpl_vars['value']->value['shopid'];?>
" goodsid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" >来一<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['goodattr'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['goodattr'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?></a><?php }?></div>
		 	  	  	   	  	 </li>
							 

		 	  	  	   	  	 	<?php } ?>
		 	  	  	   	  	 	 
		 	  	  	   	  	</ul>
		 	  	  	   </div>
		 	  	  	   <div style="clear:both;"></div> 
		 	  	  
		 	  	  <?php } ?>  
		 	  	  
		 	  </div>
		 </div> 
		<div class="goods_div" style="display:none;" >
		    <div class="pingjialist" id="det_commm">
		    </div>
	   </div>
		 <div class="goods_div" style="display:none;"  >
			     <div class="Message">
                                <form action="" id="mform" name="mform" method="POST">
                                <input type="hidden" name="msid" id="msid" value="40">
						                      	<ul>
                                	<li>
                                    	<div class="MInput">
                                        	<div class="MITop"><textarea id="MContent" name="mcon" onclick="InFocus(this);" onblur="outF(this);" style="color:rgb(92, 91, 91);" data="您的留言对其他会员都是很重要的参考">您的留言对其他会员都是很重要的参考</textarea></div>
                                            <div class="MIBottom"><a href="javascript:;" onclick="AddMessage()" id="msgbtn">提交留言</a> <span class="ImpNum">最多200个字符</span></div>
                                        </div>
                                    </li>
                                </ul>
                                </form>
                            </div>
            <div id="showaskid">
            	
            </div>
            <div style="clear:both;"></div>
	   </div>
	   <div class="goods_div" style="display:none;">
	   	  <div class="showshop_instr">
	   		<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['shopinfo']->value['intr_info']);?>
&nbsp;
	   	 </div>
	   </div>
		 <!--  购物车-->
   	 <div class="shopshow_cart">
   	 	    <div class="cart_title"><i></i>我的菜篮子</div>
   	 	    <div class="cartgoodslist">
   	 	    	 <ul>
   	 	    	 	<li style="display:none;">
   	 	    	 	  <div class="cart_one"><div class="cart_goodsname">商品名称范德萨减肥的了撒娇范德萨</div><i></i></div>
   	 	    	 	  <div class="cart_tow">
   	 	    	 	      <span class="cp_pre">-</span>
   	 	    	 	      <input type="text" readonly="readonly" class="cinput" value="4">
   	 	    	 	      <span class="cp_next">+</span>
   	 	    	 	      <span class="cp_much">￥255</span>
   	 	    	 	  </div>	
   	 	    	 	</li>
   	 	    	 	 
   	 	    	</ul>
   	 	    </div>
   	 	    <div class="cart_bottom">
   	 	    	  <div class="cart_tj">
   	 	    	  	 <div class="cart_sum"><label>商品总价</label><span>100.00元</span></div>
   	 	    	  	
   	 	    	  	</div>
   	 	    	   <input type="button" class="next bg" value="下一步" onclick="outdiv_cart()">
   	 	    </div>
	   </div>
	  <!--购物车-->
	  <div style="clear:both;"></div> 
	</div>
	
	
	
	
	 <div style="clear:both;"></div>
	
	
	
	
</div> 


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
<script>
	var locationfalse = false;
	var allowedguestbuy = 1;
	var personcount = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopinfo']->value['personcount'])===null||$tmp==='' ? '0' : $tmp);?>
;
	
	var cartouthtml = '';
	cartouthtml +='<form id="dosubmit"><div class="position_top"><span class="title">点单预订</span><i class="close" onclick="close_pop(\'goosshow\')"></i></div>';
	cartouthtml +='<div class="goodsshow" ></div>';
  cartouthtml +='<div class="position_middel">';
	cartouthtml +='<div class="line_class"><label>消费时间:</label><select name="minit"  id="minit"  style="width:180px;">';

  
							    <?php  $_smarty_tpl->tpl_vars['itk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pstimelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itk']->key => $_smarty_tpl->tpl_vars['itk']->value){
$_smarty_tpl->tpl_vars['itk']->_loop = true;
?>
									cartouthtml +='	<option value="<?php echo $_smarty_tpl->tpl_vars['itk']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['itk']->value['d'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['itk']->value['i'])){?><?php echo $_smarty_tpl->tpl_vars['itk']->value['i'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['itk']->value['s'];?>
-<?php echo $_smarty_tpl->tpl_vars['itk']->value['e'];?>
<?php }?></option>'; 
								 <?php } ?>  
  var tempcontent = '';
  for(var i=1;i<=personcount;i++){
  	tempcontent += '<option value="'+i+'">'+i+'人</option>';
  }
	cartouthtml+='</select></div>';
	cartouthtml +='<div class="line_class"><label>消费人数:</label><select name="personcount">'+tempcontent+'</select> </div>';
	cartouthtml +='<div class="line_class"><label>联系人:</label><input type="text" name="contactname" value="" placeholder="联系人姓名"> </div>';
	cartouthtml +='<div class="line_class"><label>联系电话:</label><input type="text" name="phone" id="phone" value="" ><span class="hc_order_lists_span" id="uphone" ></span> </div>';
  cartouthtml +='<div class="line_class" id="paytypeshow"><label>支付方式:</label><?php if (!(($_smarty_tpl->tpl_vars['open_acout']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==0)&&($_smarty_tpl->tpl_vars['is_daopay']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0))){?><?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==1&&$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==1){?><input type="radio" name="paytype" value="0" checked><span style="display:block;float:left;width:60px;">货到付款</span><?php }?><?php if ($_smarty_tpl->tpl_vars['open_acout']->value==1&&$_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==1){?><input type="radio" name="paytype" value="1"  <?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0){?>  checked  <?php }?> ><span style="display:block;float:left;width:60px;">在线支付</span><?php }?><?php }else{ ?><span style="display:block;float:left;width:60px;">未开启</span><?php }?><span class="hc_order_lists_span" ></span> </div>';
	cartouthtml +='<div class="mutile_class"><label>备注</label><textarea name="content" placeholder="备注"></textarea></div>';
	cartouthtml +='<div class="line_class">  <input type="hidden" name="shopid" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
"><input type="hidden" name="subtype" value=""><input type="button" class="next bg" value="确认预订" id="cfbtn" onclick="onGo()"></div>';
	cartouthtml +='</div> </form>';
  		 var starttime = '<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['starttime'];?>
'; 
	 var is_orderbefore=<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['is_orderbefore'];?>
;
	 var nowdate = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
';
	 var nowtime = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
';
	 	var submithtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/plate/makeorder/datatype/json/random/@random@"),$_smarty_tpl);?>
';
	  var orderhtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/@orderid@"),$_smarty_tpl);?>
';
	  <?php $_smarty_tpl->tpl_vars['yanchitime'] = new Smarty_variable(time()+$_smarty_tpl->tpl_vars['shopinfo']->value['maketime']*60, null, 0);?>
	  var maketime = '<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yanchitime']->value,"%Y-%m-%d %H:%M:%S");?>
';
	   	var submithtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/plate/makeorder/datatype/json/random/@random@"),$_smarty_tpl);?>
';
	  var orderhtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/@orderid@"),$_smarty_tpl);?>
';
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