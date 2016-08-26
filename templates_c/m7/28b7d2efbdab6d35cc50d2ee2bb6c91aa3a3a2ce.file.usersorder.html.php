<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:02:31
         compiled from "/data/wwwroot/waimairen/templates/m7/order/usersorder.html" */ ?>
<?php /*%%SmartyHeaderCode:203218611457beb427b689e9-34409578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b7d2efbdab6d35cc50d2ee2bb6c91aa3a3a2ce' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/order/usersorder.html',
      1 => 1452850922,
      2 => 'file',
    ),
    '933878132077ae5831259a40258f675745bfacb3' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/member/member.html',
      1 => 1449476258,
      2 => 'file',
    ),
    '028ecad86fe60107edff5e66fd88b13a2e0fd787' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/site.html',
      1 => 1452412480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203218611457beb427b689e9-34409578',
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
  'unifunc' => 'content_57beb427d901b8_16453085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb427d901b8_16453085')) {function content_57beb427d901b8_16453085($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> 
  会员中心
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
/public/css/memberCenter.css">


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

   <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/order_wmr_det.css">   

 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/ajaxfileupload.js"> </script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/datepicker/WdatePicker.js"> </script>
 

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




 
 
 <div class="box950 pad_tb_20" id="main" >
	<div class="box150">
	  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/base.css"> 
     <div class="title">
     		<span class="colortip"></span><span class="title_name"><b><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member"),$_smarty_tpl);?>
">我的账户</a></b></span>
      </div>
     <div class="content"><!-- 左侧菜单 -->
     		<ul class="navLeft1">
       		 
     				<li class="light">
     					<a class="supervise" href="javascript:void(0)"><span class="square"></span><span>资料管理</span><span class="arrow_bottom" id="cate-a1"></span></a>
     				  <div class="navLeft2" id="a1" > 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='member/base'){?> class="navLeft1_cur"<?php }?> >基本资料</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/edituser"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='member/edituser'){?> class="navLeft1_cur"<?php }?> >修改资料</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/area/useraddress"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='area/useraddress'){?> class="navLeft1_cur"<?php }?> >配送资料</p></a>
     				  </div>
     				</li>	 
     				<li class="light">
     					<a class="supervise" href="javascript:void(0)"><span class="square"></span><span>订单管理</span><span class="arrow_bottom" id="cate-a2"></span></a>
     				  <div class="navLeft2" id="a2" > 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usersorder"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='order/usersorder'){?> class="navLeft1_cur"<?php }?> >餐厅订单</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usermorder"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='order/usermorder'){?> class="navLeft1_cur"<?php }?> >超市订单</p></a> 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usersptorder"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='order/usersptorder'){?> class="navLeft1_cur"<?php }?> >跑腿订单</p></a> 
						  <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/drawbacklog"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='member/drawbacklog'){?> class="navLeft1_cur"<?php }?> >退款记录</p></a> 
     				  </div>
     				</li>	 
     				<li class="light">
     					<a class="supervise" href="javascript:void(0)"><span class="square"></span><span>积分管理</span><span class="arrow_bottom" id="cate-a2"></span></a>
     				  <div class="navLeft2" id="a2" > 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/jifenlog"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='member/jifenlog'){?> class="navLeft1_cur"<?php }?> >我的积分</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/gift/usergift"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='gift/usergift'){?> class="navLeft1_cur"<?php }?> >积分礼品</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/card/myjuan"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='card/myjuan'){?> class="navLeft1_cur"<?php }?> >我的优惠卷</p></a>
     				  </div>
     				</li>	
     				<li class="light">
     					<a class="supervise" href="javascript:void(0)"><span class="square"></span><span>留言管理</span><span class="arrow_bottom" id="cate-a2"></span></a>
     				  <div class="navLeft2" id="a2" > 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/waitpiont"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='order/waitpiont'){?> class="navLeft1_cur"<?php }?> >待点评订单</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/overpiont"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='order/overpiont'){?> class="navLeft1_cur"<?php }?> >我的点评</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/ask/pmessage"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='ask/pmessage'){?> class="navLeft1_cur"<?php }?> >我的私信</p></a>
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/ask/myask"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='ask/myask'){?> class="navLeft1_cur"<?php }?> >我的留言</p></a> 
     				  </div>
     				</li>	
     				<li class="light">
     					<a class="supervise" href="javascript:void(0)"><span class="square"></span><span>收藏管理</span><span class="arrow_bottom" id="cate-a2"></span></a>
     				  <div class="navLeft2" id="a2" > 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/collect"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/collect'){?> class="navLeft1_cur"<?php }?> >我的收藏</p></a> 
     				  </div>
     				</li>	
     				<?php if ($_smarty_tpl->tpl_vars['open_acout']->value==1){?>
     				<li class="light">
     					<a class="supervise" href="javascript:void(0)"><span class="square"></span><span>充值管理</span><span class="arrow_bottom" id="cate-a2"></span></a>
     				  <div class="navLeft2" id="a2" > 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/paylog"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='member/paylog'){?> class="navLeft1_cur"<?php }?> >帐号资金记录</p></a> 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/payoncard"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='member/payoncard'){?> class="navLeft1_cur"<?php }?> >我要充值</p></a> 
     				   <!--    <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/onlinelog"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='member/onlinelog'){?> class="navLeft1_cur"<?php }?> >在线支付记录</p></a>   -->
     				  </div>
     				</li>	
     				<?php }?>
     					<li class="light">
     					<a class="supervise" href="javascript:void(0)"><span class="square"></span><span>店铺管理</span><span class="arrow_bottom" id="cate-a2"></span></a>
     					 <div class="navLeft2" id="a2" > 
     				<?php echo smarty_function_load_data(array('assign'=>"checkinfo",'table'=>"shop",'type'=>"one",'where'=>"uid='".((string)$_smarty_tpl->tpl_vars['member']->value['uid'])."' and is_pass='1' ",'fileds'=>"*"),$_smarty_tpl);?>

     				<?php if (!empty($_smarty_tpl->tpl_vars['checkinfo']->value)){?> 
     				      <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/mangeshop/id/".((string)$_smarty_tpl->tpl_vars['checkinfo']->value['id'])),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/openshop'){?> class="navLeft1_cur"<?php }?> target="_blank" >我的店铺</p></a> 
     				<?php }else{ ?> 
     				        <a class="gray_w" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/openshop"),$_smarty_tpl);?>
" id="cateId1"><p <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/openshop'){?> class="navLeft1_cur"<?php }?> >我要开店</p></a> 
     				<?php }?> 
     					  </div>
     				</li>	
     				
     			</ul>
     </div>
	</div>
 
	
	  
 	<div class="mc-right box790"><!--mc-right-->
					<div class="manageBox margin_bottom"><!--manageBox-->
						<div class="title"><!--title-->
							<p class="yleft"><span class="colortip"></span>
							<span class="title_name"><b>订单管理</b></span></p>
						</div><!--title end-->

        <div class="searchTab">
                            <div class="tabTitleWarp clearfix" id="jifen-title">
                               <ul>	<li class="c"><h3 <?php if ($_smarty_tpl->tpl_vars['actiondo']->value=='order'){?> class="addborder"<?php }?>><a  href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usersorder"),$_smarty_tpl);?>
">餐厅订单</a></h3></li>
										<li class="c"><h3 <?php if ($_smarty_tpl->tpl_vars['actiondo']->value=='ordermarket'){?> class="addborder"<?php }?>><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usermorder"),$_smarty_tpl);?>
" style="color:#fff;">超市订单</a></h3></li>
										<li class="c"><h3 <?php if ($_smarty_tpl->tpl_vars['actiondo']->value=='usersptorder'){?> class="addborder"<?php }?>><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usersptorder"),$_smarty_tpl);?>
" style="color:#fff;">跑腿订单</a></h3></li>
								 
									</ul>
                            </div>
                            <div class="clear"></div>
         </div>


        <div style="background-color:#fff;border:1px solid #ccc;margin-bottom:10px;">
        	
        	<div class="m3-order-list-search">
										 
										<select class="searchstatus" id="orderdatediff" onchange="getOrders();">
											<option value="0" >当月订单</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['orderdatediff']->value==1){?>selected<?php }?>>历史订单</option>
										</select>

											<input type="hidden" id="ordertype" value="0">
										从 	<input type="text" class="searchtime" id="stime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['stime']->value,"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});"> 至 
											<input type="text" id="etime" class="searchtime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['etime']->value,"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});"> 
										
										<select class="searchstatus" id="orderstatus" onchange="getOrders();">
											<option value="0">订单状态</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value==1){?>selected<?php }?>>处理中</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['status']->value==2){?>selected<?php }?>>已完成</option>
										</select>
										
										
										
										
										<input type="image" src="/upload/shop/search.jpg" class="searchs" onclick="getOrders();">
									 
									</div>
        	
        	
        </div>


						<div class="mr-middle content"><!--mr-middle-->
							<div class="user-order m3-user-order"><!-- m3-user-order -->
								 
								 
 
								<div class="order-list m3-order-list"><!-- m3-order-list -->
									

									<div class="m3-order-list-view" id="m3-order-list">
										<table class="di_table">	<tbody>
										<tr>
											<th class="m3-olist1">订单号</th>  
											<th class="m3-olist2">订单商家</th>  
											<th class="m3-olist3">下单时间</th>		
											<th class="m3-olist4">订单总额</th>		
											<th class="m3-olist5">订单状态</th>	
											<th class="m3-olist6">完成时间</th>
											<th class="m3-olist7">操作</th>	
										</tr>	
										<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
										<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
										<tr >		
											<td><a href="#orderview" onclick="getOrderDetail(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);">
											<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
<?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']==1){?><font color=red>预定</font><?php }?></a></td>		
											<td><a <?php if ($_smarty_tpl->tpl_vars['items']->value['shoptype']==1){?>href="<?php echo FUNC_function(array('type'=>'url','link'=>"/market"),$_smarty_tpl);?>
<?php }else{ ?>
											
											
												<?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?>
												href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/index/id/".((string)$_smarty_tpl->tpl_vars['items']->value['shopid'])),$_smarty_tpl);?>
"
												<?php }else{ ?>
												href="<?php echo FUNC_function(array('type'=>'url','link'=>"/plate/show/id/".((string)$_smarty_tpl->tpl_vars['items']->value['shopid'])),$_smarty_tpl);?>
"
											
												<?php }?>
											
											<?php }?>  target="_blank" class="apanel"><?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
</a></td>		
											<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M");?>
</td>		
											<td><p>￥<?php echo $_smarty_tpl->tpl_vars['items']->value['allcost'];?>
</p><p>
											<?php if ($_smarty_tpl->tpl_vars['items']->value['paytype']=='0'){?><?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']==1){?>到店支付<?php }else{ ?>餐到支付<?php }?><?php }else{ ?>在线支付<?php if ($_smarty_tpl->tpl_vars['items']->value['paystatus']==1){?>(已付)<font color=red><?php echo $_smarty_tpl->tpl_vars['backarray']->value[$_smarty_tpl->tpl_vars['items']->value['is_reback']];?>
</font><?php }else{ ?>(<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
">立即支付</a>)<?php }?><?php }?></p></td>	
											<td class="money">
										
											<?php echo $_smarty_tpl->tpl_vars['items']->value['wuliuinfo']['statustitle'];?>
,<br />
											<?php echo $_smarty_tpl->tpl_vars['items']->value['wuliuinfo']['ststusdesc'];?>
 
 </td>	
											<td><?php if ($_smarty_tpl->tpl_vars['items']->value['status']==3){?> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['suretime'],"%Y-%m-%d %H:%M");?>
<?php }else{ ?>---<?php }?></td>		
											<td><a href="#orderview" class="apanel" onclick="getOrderDetail(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);">查看</a></td>	
										</tr>
								
										<?php } ?>
										<?php }else{ ?>
										<tr>
											<td colspan="7" align="center">
												 暂无数据
											</td>
										</tr>
									  <?php }?>
										</tbody></table>
								   <div class="clear"></div>
								 	   <div class="show_page"> 
								 	   	  <ul>
								 	   	    <?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>

								 	     	</ul>
								 	   </div>
								 		<div class="clear">	</div>
								</div>
								</div>
								
								
								
								
								
								
								
								
								
							</div>
						</div>
						
						
						
		 <div style="background-color:#fff;border:1px solid #ccc;margin-top:10px;display:none;" id="tempordershow">
		 	<a name="orderview" id="orderview"></a>
								<div class="m3-order-detail" id="m3-order-detail">
									
									
								</div>
		 </div>
						
						
						
						
						
						
						
						
						
						
						
						
				</div>
			</div>
			
			
			
			
			
			
			
<script id="trgoodlist" type="text/html"> 
<section class="usercenter-detail">
			
	<div class="order-card order-process" style="display:block;">
  <div class="order-content">
    <div class="order-dishes">
      <table>
        <thead>
          <tr>
               <th colspan="3" style="text-align:left;"> <a 
			<^%if(order.shoptype==1){%^> 
			href="<?php echo FUNC_function(array('type'=>'url','link'=>"/market/shopshow/id/<^%=order.id%^>"),$_smarty_tpl);?>
"
			 <^%}%^>
			 <^%if(order.shoptype==0){%^> 
			href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/index/id/<^%=order.id%^>"),$_smarty_tpl);?>
"
			 <^%}%^>
			class="shop-name"><^%=order.shopname%^></a>
              <p class="pag"><span class=" "></span>订单号：<^%=order.dno%^></p>
              <p class="pag"><span class="ico sphone"></span>商家电话：<^%=order.shopphone%^></p>
              <p class="pag"><span class="ico kphone"></span>客服电话：<^%=order.litel%^></p></th>
          </tr>
        </thead>
        <tbody>
		
			<^%for(i = 0; i < orderdet.length; i ++) {%^>
          <tr data-node="dishes">
            <td style="text-align:left;" data-node="dish" data-origin="<^%=orderdet[i].goodsname%^>"><^%=orderdet[i].goodsname%^></td>
            <td><^%=orderdet[i].sum%^></td>
            <td class="text-right">￥<^%=(orderdet[i].goodscost)*(orderdet[i].goodscount)%^> </td>
          </tr>
         	  <^%}%^> 
			<^%if(order.is_goshop!=1){%^>  
			 <tr data-node="dishes">
            <td  style="text-align:left;">配送费 </td>
            <td></td>
            <td class="text-right">￥<^%=order.pscost%^></td>
			 
			</tr>
			 <tr data-node="dishes">
            <td  style="text-align:left;">打包费 </td>
            <td></td>
            <td class="text-right">￥<^%=order.bagcost%^></td>
			 
			</tr>
		  <^%}%^>	
         <tr data-node="dishes">
            <td  style="text-align:left;">积分抵扣 </td>
            <td></td>
            <td class="text-right"><^%=order.scoredown%^>个</td>
			 
			</tr>
			 <tr data-node="dishes">
            <td  style="text-align:left;">优惠金 </td>
            <td></td>
            <td class="text-right"><^%=order.yhjcost%^>(券)+<^%=order.cxcost%^>(促销)</td>
			 
			</tr>
			 
        </tbody>
      </table>
      <div class="order-price"> 总价：<span class="ft-red">￥<^%=order.allcost%^></span> </div>
      <div class="order-delivery">
        <div class="tp"> <span><^%=order.shopname%^></span> </div>
        <div class="receive-info"> <span>送餐地址：<^%=order.buyeraddress%^></span> <span>联系人：<^%=order.buyername%^></span> <span>电话：<^%=order.buyerphone%^></span> 
		<span>送达时间：<^%=order.posttime%^> </span> <span><^%=order.content%^></span> </div>
      </div>
    </div>
    <div class="order-info" data-node="order-info">
      <div class="delivery-info">
	  
	<div id="wuliustatus">
	  
	 	<^%for(j = 0; j < orderwuliustatus.length; j ++) {%^>	   
        <div class="delivery-snippet ">
          <div class="snippet-header nick-selected">
            <div class="round"></div>
            <div class="line-through "></div>
          </div>

          <div class="snippet-body ">
            <div class="status-msg"><^%=orderwuliustatus[j].statustitle%^></div>
            <div class="prompt"><^%=orderwuliustatus[j].ststusdesc%^></div>
            <div class="time"><^%=orderwuliustatus[j].addtime%^></div>
          </div>
        </div>
		 <^%}%^>	
	</div>  	 
	<^%if(order.paytype==1 && order.paystatus==0 ){%^>	
		<div class="delivery-snippet ">
          <div class="snippet-header nick-selected">
            <div class="round"></div>
            <div class="line-through " style="bottom: -20px;"></div>
          </div>

          <div class="snippet-body ">
            <div class="status-msg">待支付</div>
            <div class="prompt">请在15分钟内完成支付</div>
            <div class="time"><^%=orderwuliustatus[0].addtime%^></div>
          </div>
        </div>
        <div class="delivery-snippet ">
          <div class="snippet-header nick-selected">
            <div class="round"></div>
			<div class="line-through " style="bottom: -20px;"></div>
          </div>
		  <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/<^%=order.id%^>"),$_smarty_tpl);?>
" >
          <div class="snippet-body non-prompt">
            <div class="status-msg">请继续支付</div>
            <div class="prompt"> </div>
           </div>
		  </a>
        </div>
        
  <^%}%^>	

 <div class="">
 <div class="order-operator" data-node="order-operator">
			  <div class="operator-btns">
 <^%if(order.status >= 0 && order.status < 3 ){%^>
	 <^%if(order.is_reback == 0 ){%^>
		  <^%if(order.paytype == 0 ){%^>
			 
				 
						<a 
						<^%if(order.paytype == 0 ){%^> 
							onclick="unorder('<^%=order.id%^>');"
						<^% }else{%^> 
							<^%if(order.paystatus == 0 ){%^>  onclick="unorder('<^%=order.id%^>');" href="javascript:void(0);"  <^% }else{%^>  href="<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/drawbacklog/orderid/<^%=order.id%^>"),$_smarty_tpl);?>
"  <^%}%^>
						<^%}%^>
						href="javascript:void(0);" >  <button class="red-back" data-node="add-comment">取消订单</button></a>
				 
	 
		<^%}%^>
		
		  <^%if(order.paytype ==1 && order.paystatus ==0){%^>
			  
						<a  onclick="unorder('<^%=order.id%^>');"  href="javascript:void(0);" >  <button class="red-back" data-node="add-comment">取消订单</button></a>
				 
		 
		<^%}%^>
		  <^%if(order.paytype ==1 && order.paystatus ==1 && order.is_make ==0 && order.is_reback == 0  ){%^>
			  
						<a    href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/drawuserorder/orderid/<^%=order.id%^>"),$_smarty_tpl);?>
" >  <button class="red-back" data-node="add-comment">取消订单</button></a>
				 
		 
		<^%}%^>
	<^% }else{%^>
	
		<a    href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/drawuserorder/orderid/<^%=order.id%^>"),$_smarty_tpl);?>
" >  <button class="red-back" data-node="add-comment">查看退款详情</button></a>	

	<^%}%^>	
<^%}%^>
 <^%if(order.status ==4 || order.status ==5){%^>
		 
					<a   href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/index"),$_smarty_tpl);?>
" >  <button class="red-back" data-node="add-comment">逛逛别家</button></a>
		 
	 
<^%}%^>
 <^%if(order.status == 0 && order.paytype ==1 && order.paystatus == 0  ){%^>
 <a   href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/<^%=order.id%^>"),$_smarty_tpl);?>
" >  <button class="red-back" data-node="add-comment">继续支付</button></a>
<^%}%^>
 <^%if(order.status>= 0 && order.status  < 3 && order.is_make == 1 ){%^>

					<a   href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/index"),$_smarty_tpl);?>
" >  <button class="red-back" data-node="add-comment">逛逛别家</button></a>
			<^%}%^>
<^%if(order.status == 3 && order.is_acceptorder == 0  ){%^>
<a  onclick="acceptorder('<^%=order.id%^>');"  href="javascript:void(0);" >  <button class="red-back" data-node="add-comment">确认收货</button></a>
<^%}%^>
<^%if(order.status == 3 && order.is_acceptorder == 1 && order.is_ping == 0  ){%^>
	<a  onclick="pingorder('<^%=order.id%^>');"  href="javascript:void(0);" >  <button class="red-back" data-node="add-comment">评价订单</button></a>
<^%}%^>
<^%if(order.status == 3 && order.is_acceptorder == 1 && order.is_ping == 1  ){%^>
	  <^%if(order.shoptype == 1   ){%^>
		<a class="cui-btn active"    href="<?php echo FUNC_function(array('type'=>'url','link'=>"/market/shopshow/id/<^%=order.shopid%^>"),$_smarty_tpl);?>
 "> <button class="red-back" data-node="add-comment">在来一单</button> </a> 
	  <^% }else{%^>
		<a class="cui-btn active"    href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/index/id/<^%=order.shopid%^>"),$_smarty_tpl);?>
" > <button class="red-back" data-node="add-comment">在来一单</button> </a> 
	 <^%}%^>
<^%}%^>
	
</div>
 
 
 
      
		  </div>
			</div>
		
		
		
		
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
		
	</section>		
			





							<div class="clear"></div>
</script>
<script type="text/javascript">
	$(document).ready(function(){ 
		for(var i=0;i< $('.proleng').length;i++){
			var whatobj = $('.proleng').eq(i).find('.hover').length;
			whatobj = Number(whatobj)-1;
			var myobj =  $('.proleng').eq(i).find('.hover').eq(whatobj);
			//计算位置
			var cobj = $('.proleng').eq(i).find('.hover').eq(0);
				var menupos =$(myobj).offset();
        var leftend = menupos.left;
        var startpost = $(cobj).offset();
        var leftstart = startpost.left;
        var widths = Number(leftend)-Number(leftstart);
        $('.proleng').eq(i).find('.pro').eq(0).css('width',widths+'px'); 
		} 
	});
	function addAddr()
	{
		$('#newAddr_1').show();
	}
	function getOrderDetail(orderid)
	{  
	        var info = {'orderid':orderid};
	      	var backmes =   ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/order/userorderdet/datatype/json"),$_smarty_tpl);?>
',info); 
	      	if(backmes.flag == false)
	      	{
	      		// $backinfo['order'] = $orderinfo;
		        //$backinfo['orderdet'] = $orderdetinfo;
		         $('#tempordershow').show();
	      		 var htmls = template.render('trgoodlist', {order:backmes.content.order,orderdet:backmes.content.orderdet,orderwuliustatus:backmes.content.orderwuliustatus});
	      	   $('#m3-order-detail').html(htmls); 
			   
			   $("#wuliustatus .line-through:last").hide();
			   
	      	}else{
	      		diaerror(backmes.content); 
	      	}  
	}
	function getOrders(){
		//
		var mlinks = '<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usersorder/status/@status@/stime/@stime@/etime/@etime@/orderdatediff/@orderdatediff@"),$_smarty_tpl);?>
';
		mlinks = mlinks.replace('@orderdatediff@', $("#orderdatediff").find("option:selected").val());
		mlinks = mlinks.replace('@status@', $('#orderstatus').find("option:selected").val());
		mlinks = mlinks.replace('@stime@', $('#stime').val());
		mlinks = mlinks.replace('@etime@', $('#etime').val());
	 window.location.href=mlinks;
	}
	function unorder(orderid)
	{
		if(confirm('确定取消订单吗？')){
		   myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/order/userunorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		}
	}
	function delorder(orderid)
	{
		if(confirm('确定删除订单吗？')){
		   myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/order/userdelorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		}
	}
	function compelte(orderid)
	{
		window.location.href= siteurl+'/index.php?ctrl=membercenter&action=pingorder&orderid='+orderid;
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
          		$('#orderstatus').text('已关闭'); 
          		$('.cart_gojs').remove();
          		$('#loading').hide();
				window.location.reload();
				
          	}else{ 
          			alert(content.msg);
          		  $('#loading').hide();
          	}  
          	 
	         }, 
           error: function(content) {  
             	alert('提交数据失败');
        	    $('#loading').hide();
	         }
       
         });  
     }
     return false;
   }
   function pingorder(){
   		window.location.href=siteurl+'/index.php?ctrl=order&action=waitpiont';
  }
</script>
 


 <script>
$(function(){ 
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
});
   
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