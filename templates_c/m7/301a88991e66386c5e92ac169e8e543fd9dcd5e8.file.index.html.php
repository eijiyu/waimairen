<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:02:28
         compiled from "/data/wwwroot/waimairen/templates/m7/plate/index.html" */ ?>
<?php /*%%SmartyHeaderCode:186995953057beb424ce4207-77303469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301a88991e66386c5e92ac169e8e543fd9dcd5e8' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/plate/index.html',
      1 => 1435385666,
      2 => 'file',
    ),
    '028ecad86fe60107edff5e66fd88b13a2e0fd787' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/site.html',
      1 => 1452412480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186995953057beb424ce4207-77303469',
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
  'unifunc' => 'content_57beb424e4b6f6_03462916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb424e4b6f6_03462916')) {function content_57beb424e4b6f6_03462916($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> 订台-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
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
/public/css/plate.css"> 
 <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newplate.css"> 
 <style>
 .palte_shopcontent_ti{
  height: 38px;
border: 1px solid #eaeaea;
background-color: #f9f9f9;

line-height:38px;
padding-left: 40px;
}
.buttonarea {
background-color: #f04d4d;
height: 30px;
line-height: 30px;
text-align:center;


}
.buttonarea span {
padding:0px;
text-align:center;
height: 30px;
line-height: 30px;
color: #fff;
cursor: pointer;
}
.buttonarea span:hover{
	background-color:none;
} 
.buttonarea:hover{
	background-color:#d23737;
}

.palte_nav{
	padding:0px;
	border:1px solid   #e8e7e7;
	background-color:#fff;
	margin:20px 0px 0px;
}
.plate_nav_class li::first-child {
border-top: 0;
}
.plate_nav_class{
  width:1170px; 
  clear:both;
  border-top: 1px solid #e8e7e7;
  font-size: 12px;
  padding: 15px 0;
margin: 0 15px;
height: 27px;
}
.plate_nav_class label{
border-right: 1px solid #eaeaea;
color: #333;
font-size: 14px;
width: 90px;
height: 27px;
margin-left:0px;
}
body{
font: 12px/1.5 'Hiragino Sans GB','Microsoft YaHei',simsun;
}
a{ text-decoration:none;}
a:hover {
text-decoration: none;
}
.plate_nav_class ul li a {
color: #333;
padding: 4px 8px;
}
.plate_nav_class ul li:hover a, .plate_nav_class ul li.hover a{
color: #38b!important;
background:none;
text-decoration: none;
}
 .plate_nav_class ul li.on a {
color: #fff;
background-color: #38b;
text-decoration: none;
}
.newplateIcon{
 margin-top:8px;margin-right:10px;float:left;background-image: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/newplateIcon.png);background-position: -5px -308px;
background-repeat: no-repeat;
overflow: hidden;
display: block;
width: 13px;
height: 13px;
}

.newplateZWIcon{
 margin-top:8px;margin-right:10px;float:left;background-image: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/newplateIcon.png);background-position: -5px -308px;
background-repeat: no-repeat;
overflow: hidden;
display: block;
width: 13px;
height: 13px;
}
.newplateWZIcon{
 margin-top:6px;margin-right:10px;float:left;background-image: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/newplateIcon.png);background-position: -5px -577px;
background-repeat: no-repeat;
overflow: hidden;
display: block;
width: 12px;
height: 17px;
}
.plate_nav_classdet {
background-color: #f7f7f7;
margin-right:15px;
margin-bottom:15px;
margin-top: 5px;
font-size: 12px;

}
.plate_nav_classdet {
clear: both;
margin-left: 167px;
width: auto;
}
.plate_nav_classdet a {
line-height: 20px;
height: 20px;
display: inline;
padding: 4px 8px;
margin: 5px 5px;
display: inline-block;
color: #333;
text-decoration: none !important;
}
.plate_nav_classdet a:hover{
color: #38b!important;
background:none;
text-decoration: none;
}
 .plate_nav_classdet a.active {
background-color: #38b;
color: #fff!important;
}
.buttonarea span{
background:none;
}
.buttonarea span:hover  {
color: #ffffff!important; 
}
 </style>


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
/public/js/jquery.cookie.js" type="text/javascript" language="javascript"></script>  


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
 	  <div class="palte_nav">
 	  	 	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attrinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
 	  	   <div class="plate_nav_class goodstype_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data="goodstype_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" style="border-top:none;">
 	  	   	   <label > <i class="newplateIcon"></i> <span style=" float:left;"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</span></label>
 	  	       <ul>   
 	  	       	 <li  style="text-align: center;width: 86px;" data="0" <?php if (!isset($_smarty_tpl->tpl_vars['goodstypedoid']->value[$_smarty_tpl->tpl_vars['items']->value['id']])){?> class="on"<?php }?>><a href="#"  >不限</a></li>
 	  	       	<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?> 
 	  	       	<li  data="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['goodstypedoid']->value[$_smarty_tpl->tpl_vars['items']->value['id']])){?> <?php if ($_smarty_tpl->tpl_vars['itv']->value['id']==$_smarty_tpl->tpl_vars['goodstypedoid']->value[$_smarty_tpl->tpl_vars['items']->value['id']]){?>class="on"<?php }?> <?php }?>><a href="#"  ><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</a></li>
 	  	       	 <?php } ?>
 	  	      </ul>
 	  	   </div> 
 	  	  <?php } ?>
 	      <div class="plate_nav_class" data="desk">
 	  	   	   <label> <i class="newplateZWIcon"></i>桌位大小</label>
 	  	       <ul> 
 	  	       	 <li  style="text-align: center;width: 86px;" data="0" <?php if ($_smarty_tpl->tpl_vars['desk']->value==0){?>class="on"<?php }?>><a href="#">不限</a></li>
 	  	       	 <li data="1" <?php if ($_smarty_tpl->tpl_vars['desk']->value==1){?>class="on"<?php }?>><a href="#">1-4人</a></li>
 	  	       	 <li data="2" <?php if ($_smarty_tpl->tpl_vars['desk']->value==2){?>class="on"<?php }?>><a href="#" >4-8人位</a></li>
 	  	       	 <li data="3" <?php if ($_smarty_tpl->tpl_vars['desk']->value==3){?>class="on"<?php }?>><a href="#">9-12人位</a></li>
 	  	       	 <li data="4" <?php if ($_smarty_tpl->tpl_vars['desk']->value==4){?>class="on"<?php }?>><a href="#">12人以上</a></li> 
 	  	       </ul> 
 	  	  </div>
 	  	    <div class="plate_nav_class" data="areaids">
 	  	   	   <label> <i class="newplateWZIcon"></i>位置</label> 
 	  	       <ul> 
 	  	       	 <li style="text-align: center;width: 86px;"  data="0" <?php if (empty($_smarty_tpl->tpl_vars['areaids']->value)){?> class="on"<?php }?>><a href="#">不限</a></li>
 	  	       	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arealist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
 	  	       	  <?php if ($_smarty_tpl->tpl_vars['items']->value['parent_id']==0){?>
 	  	       	     <li data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['areaids']->value==$_smarty_tpl->tpl_vars['items']->value['id']){?> class="on"<?php }?>><a href="#"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a></li>
 	  	       	   <?php }?> 	  	       	     
 	  	       	<?php } ?> 
 	  	       </ul> 
 	  	   </div> 
 	  	   
 	  	   <div class="plate_nav_classdet" <?php if (count($_smarty_tpl->tpl_vars['areadet']->value)>0){?> style="display:block;" <?php }else{ ?>style="display:none;"<?php }?>> 
 	  	   	    <?php if (count($_smarty_tpl->tpl_vars['areadet']->value)>0){?>
 	  	       	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areadet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
 	  	     
 	  	       	   <a href="#" data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['items']->value['id']==$_smarty_tpl->tpl_vars['areaid']->value){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a> 
 	  	       	  
 	  	       	<?php } ?> 
 	  	       	 <?php }?>
 	  	   </div>
 	  	  
 	  	   
 	  	   <div style="clear:both;"></div>
 	  </div>
 	
 
</div>






<div style="width:1200px; margin:0 auto;" class="tg-list Fix" >
            <div class="tg-tab-box tg-floor on" data-track-lock="1">
<ul class="tg-floor-list Fix tg-floor-list-freak">
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shoplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
<li class="tg-floor-item" >
    <div class="tg-floor-item-wrap" style="height:261px;">
        <a class="tg-floor-img" target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/plate/show/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
" >
            <img class="lazy"  src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/shop/grey.gif" data-original="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['shoplogo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
">
        </a>
        <a class="tg-floor-title" target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/plate/show/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
" >
            <h3><?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
</h3>
            <h4>    <?php echo $_smarty_tpl->tpl_vars['items']->value['address'];?>
 </h4>
        </a>
           <span class="tg-floor-price">
                 <a target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/plate/show/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
"><div class="buttonarea" style="margin-bottom:10px;"><span style="font-family: 'Hiragino Sans GB','Microsoft YaHei',simsun; ">订座/点菜</span></div></a>
           </span>
          
    </div>
</li>
	  <?php } ?>
</ul>
            </div>
      </div>






<script>
	 $('.palte_nav').find('.plate_nav_class').eq(0).addClass('noneborder');//.html());
//$('.palte_nav')..eq(0).css({'border-top','none'});
var arealist = <?php echo json_encode($_smarty_tpl->tpl_vars['arealist']->value);?>
; 
$(document).ready(function(){ 
	//areashow(26);
	//plate_nav_class
	$('.plate_nav_class li').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
		makelink();
  });
  $('.plate_nav_classdet a').click(function(){
		$(this).addClass('active').siblings().removeClass('active'); 
		 makelink();
  });
});
function makelink(){
  var findobj = $('.palte_nav').find('.plate_nav_class'); 
  var newstr = '';
  $.each(findobj, function(i, newobj) {
		 newstr +='&'+$(this).attr('data')+'=';
			var checkid = $(this).find('li.on').length;
			if(checkid > 0){
				newstr+=$(this).find('li.on').eq(0).attr('data');
			}else{
				newstr+=0;
			}		  	
		   
			/*var detobj = $(this).find('li');
			for(var i=0;i<detobj.length;i++){
			} */
					   	  
	});
	if($('.plate_nav_classdet').find('.active').attr('data') == undefined){
		 newstr +='&areaid=0';//+$('.plate_nav_classdet').find('.active').attr('data');
	}else{
	  newstr +='&areaid='+$('.plate_nav_classdet').find('.active').attr('data');
	}
	
	 //alert(newstr);
   window.location.href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=plate&action=index"+newstr;
}
function areashow(areaid){
	$.each(arealist, function(i, newobj) {
				//	alert(newobj.name);
					   	  
  });
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