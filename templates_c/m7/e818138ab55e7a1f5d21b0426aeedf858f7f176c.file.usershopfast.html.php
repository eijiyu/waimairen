<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:49:13
         compiled from "/data/wwwroot/waimairen/templates/m7/shopcenter/usershopfast.html" */ ?>
<?php /*%%SmartyHeaderCode:45029301257beb109157544-46848712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e818138ab55e7a1f5d21b0426aeedf858f7f176c' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/shopcenter/usershopfast.html',
      1 => 1452414572,
      2 => 'file',
    ),
    'd8d4942e74791dde2e15beeb704ef2cfb8072ead' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/shopcenter.html',
      1 => 1449557852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45029301257beb109157544-46848712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'siteurl' => 0,
    'adminshopid' => 0,
    'shopinfo' => 0,
    'toplink' => 0,
    'items' => 0,
    'beian' => 0,
    'footerdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb1093585f4_24696939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb1093585f4_24696939')) {function content_57beb1093585f4_24696939($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 商家管理中心-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/commom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/shangjiaAdmin.css" />

<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>

 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
   <script>
  	var mynomenu='baseset';
  	</script>
 
<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"; 
</script>
<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
        $('#footer').css('display','none');
    </script>
<![endif]--> 
</head>
<body> 
<?php echo smarty_function_load_data(array('assign'=>"shopinfo",'table'=>"shop",'where'=>"`id`=".((string)$_smarty_tpl->tpl_vars['adminshopid']->value),'type'=>"one"),$_smarty_tpl);?>
 
<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: -1;background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/background.png);"></div>
<!---header start--->
	<div class="header">
    	<div class="top">
        	<div class="topLeft fl">
            	<ul class="fr">
                	<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
">店铺管理</a></li> 
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/fastfood"),$_smarty_tpl);?>
">快速下单</a></li>
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/draworderset"),$_smarty_tpl);?>
">退款订单管理</a></li>
 
                </ul>
                 <div class="cl"></div>
            </div>
            <div class="topRight fr">
            	
                    <span  style="color: #c7c7c7;font-size: 14px;padding: 5px;" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
');" class="curbtn">会员中心 </span>
                    <span class="username curbtn" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
');">退出<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/usernameBg.png" /></span>
                 
                
            </div>
            <div class="cl"></div>
            
            
            <div class="shangjiaTop">
            	<div class="sjgl">
                	
                </div>
            	
            </div>
        </div>
    	
    </div>
    <!---header end--->
    <script>
	$(function(){
		var clientWidth = document.body.clientWidth;
		/*alert(clientWidth);*/
		if( clientWidth<=1347 ){
			
			$(".content").css("width","1240px");
			$(".conleft").removeClass("content_left");
			
		}
	});
</script>
 <!------以上是公共的头部部分------->
 
  <!---content start--->
	<div class="content">
   	 	<!---content left start--->
		<div class="conleft content_left fl" style="height:730px;">
        	<div class="nav" style="height:732px;">
            	<ul>
                	<li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
');" data="baseset"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dpsz.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
">店铺设置</a></li>
                    <li onclick="openlink('<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/marketgoodslist"),$_smarty_tpl);?>
<?php }?>');" data="basemenu"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/cdgl.png" /></div><a href="<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/marketgoodslist"),$_smarty_tpl);?>
<?php }?>">菜单管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
');" data="baseorder"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddgl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoptotal"),$_smarty_tpl);?>
');" data="baseordertj"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddtj.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoptotal"),$_smarty_tpl);?>
">订单统计</a></li>
					
					<li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshophui"),$_smarty_tpl);?>
');" data="baseshorder">
					<div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddgl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshophui"),$_smarty_tpl);?>
">闪惠管理</a></li>
					
					
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshoparea"),$_smarty_tpl);?>
');" data="basearea"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/psqy.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshoparea"),$_smarty_tpl);?>
">配送区域</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/cxrule"),$_smarty_tpl);?>
');"  data="basecx"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/xxgz.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/cxrule"),$_smarty_tpl);?>
">促销规则</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopask"),$_smarty_tpl);?>
');" data="baseask"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/lygl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopask"),$_smarty_tpl);?>
">留言评价</a></li>
                    
                    
                </ul>
               
            </div>
        </div>	
       <!---content left end---> 
       
       
       
       
       
           
 
   <div class="conWaiSet fr">
        	
            <div class="shopSetTop">
            	<span>店铺设置</span>
            </div> 
            	  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/shopcenter/usereditmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
             <div class="cl"></div>  
                  
                <form id="loginForm" method="post" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/savefastfood"),$_smarty_tpl);?>
">
                 <div class="jutiSet">
        			   <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>是否支持预定：</span>
                        </div>
                        <div class="xuanze_right">
                        <input type="radio"<?php if ($_smarty_tpl->tpl_vars['shopfast']->value['is_orderbefore']==1){?> checked<?php }?> name="is_orderbefore" id="" value="1" />是 <input type="radio" name="is_orderbefore" id="" value="0" <?php if ($_smarty_tpl->tpl_vars['shopfast']->value['is_orderbefore']==0){?> checked<?php }?>/>否 <span id="befortime" <?php if ($_smarty_tpl->tpl_vars['shopfast']->value['is_orderbefore']==1){?>style="display:inline-block;" <?php }else{ ?>style="display:none;"<?php }?>>,可预定天数<input type="text"  name="befortime" value="<?php echo $_smarty_tpl->tpl_vars['shopfast']->value['befortime'];?>
" class="ttext" style="width:50px;">0表示只支持当天</span>
                        </div>
                        <div class="cl"></div>
                    </div>
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>消费方式：</span>
                        </div>
                        <div class="xuanze_right">
                           <input type="checkbox" name="is_waimai" value="1" <?php if ($_smarty_tpl->tpl_vars['shopfast']->value['is_waimai']==1){?>checked<?php }?>> 支持外送 
                           <input type="checkbox" name="is_goshop" value="1" <?php if ($_smarty_tpl->tpl_vars['shopfast']->value['is_goshop']==1){?>checked<?php }?>>支持到店消费
                        </div>
                        <div class="cl"></div>
                    </div>
					<?php  $_smarty_tpl->tpl_vars['iteml'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iteml']->_loop = false;
 $_smarty_tpl->tpl_vars['cdkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pstimelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iteml']->key => $_smarty_tpl->tpl_vars['iteml']->value){
$_smarty_tpl->tpl_vars['iteml']->_loop = true;
 $_smarty_tpl->tpl_vars['cdkey']->value = $_smarty_tpl->tpl_vars['iteml']->key;
?>
					<div class="serxuanze">
						<div class="xuanze_left">
                        	<span>配送时间：</span>
                        </div>
                        <div class="xuanze_right">
                           <?php echo $_smarty_tpl->tpl_vars['iteml']->value['s'];?>
-<?php echo $_smarty_tpl->tpl_vars['iteml']->value['e'];?>
  <?php echo $_smarty_tpl->tpl_vars['iteml']->value['i'];?>
 <a href="#" onclick="detimelist(<?php echo $_smarty_tpl->tpl_vars['cdkey']->value;?>
);">删除</a>
                        </div>
                        <div class="cl"></div>
                    </div>
				    <?php } ?>
					<div class="serxuanze">
					   <div class="xuanze_left">
                        	<span>&nbsp;</span>
                        </div>
                        <div class="xuanze_right">
                            <a href="#" onclick="outtimelist();">添加配送时间</a>
                        </div>
                        <div class="cl"></div>
                    </div>
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>桌位最大座位数：</span>
                        </div>
                        <div class="xuanze_right">
                           <input type="text" style=" background:#e0f5ff;width:55px; height:29px;" name="personcount" value="<?php echo $_smarty_tpl->tpl_vars['shopfast']->value['personcount'];?>
"> &nbsp;&nbsp;&nbsp;人
                         
                        </div>
                        <div class="cl"></div>
                    </div>
				 
					
					
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>起送价：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="text" style=" background:#e0f5ff;width:55px; height:29px;" name="limitcost" value="<?php echo $_smarty_tpl->tpl_vars['shopfast']->value['limitcost'];?>
" />&nbsp;&nbsp;&nbsp;元起
                        </div>
                        <div class="cl"></div>
                    </div>
                     <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>送达时间：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="text" style=" background:#e0f5ff;width:55px; height:29px;" name="arrivetime" value="<?php echo $_smarty_tpl->tpl_vars['shopfast']->value['arrivetime'];?>
" />&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>起送说明：</span>
                        </div>
                        <div class="dianpu_right">
                        	<input type="text" style="width:569px; "  value="<?php echo $_smarty_tpl->tpl_vars['shopfast']->value['limitstro'];?>
"  name="limitstro" />
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>制作时间：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="text" style=" background:#e0f5ff;width:55px; height:29px;"  name="maketime" value="<?php echo $_smarty_tpl->tpl_vars['shopfast']->value['maketime'];?>
"  />&nbsp;&nbsp;&nbsp;分钟
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>人均消费：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="text" style=" background:#e0f5ff;width:55px; height:29px;"  name="personcost" value="<?php echo $_smarty_tpl->tpl_vars['shopfast']->value['personcost'];?>
"  />&nbsp;&nbsp;&nbsp;元
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="serxuanze" id="pssset">
                    	<div class="xuanze_left">
                        	<span>配送方式：</span>
                        </div>
                        <div class="xuanze_right">
                        	<?php if ($_smarty_tpl->tpl_vars['shopfast']->value['sendtype']==0){?> 网站配送 <?php }else{ ?>店铺自行配送<?php }?> 
                        </div>
                        <div class="cl"></div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['locationtype']->value==1){?>
                    
                    
                     <?php if (empty($_smarty_tpl->tpl_vars['shopfast']->value['sendtype'])){?>
                     <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>定位最大半径：</span>
                        </div>
                        <div class="xuanze_right">
                        	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopfast']->value['pradius'])===null||$tmp==='' ? 1 : $tmp);?>
千米&nbsp;&nbsp;&nbsp; 配送费：
                        	<?php $_smarty_tpl->tpl_vars['temparray'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['shopfast']->value['pradiusvalue']), null, 0);?>
                        	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['temparray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                        	 <?php $_smarty_tpl->tpl_vars['tempvalue'] = new Smarty_variable($_smarty_tpl->tpl_vars['mykey']->value+1, null, 0);?> 
                        	 从<?php echo $_smarty_tpl->tpl_vars['mykey']->value;?>
至<?php echo $_smarty_tpl->tpl_vars['tempvalue']->value;?>
千米<?php echo $_smarty_tpl->tpl_vars['items']->value;?>
元,

                        	<?php } ?>
                        </div>
                        <div class="cl"></div>
                    </div>
                     <?php }else{ ?>
                    <div class="serxuanze" id="setmybangjing">
                    	<div class="xuanze_left">
                        	<span>定位最大半径：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="text" style=" background:#e0f5ff;width:55px; height:29px;"  name="pradius" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopfast']->value['pradius'])===null||$tmp==='' ? 1 : $tmp);?>
"  onchange="selectmybj();"/>&nbsp;&nbsp;&nbsp;千米 用户位置和商家距离小于最大定位半径则显示
                        </div>
                        <div class="cl"></div>
                    </div>
                    	 
                     
                     
                    
                    
                    <?php }?>
                    
                    
                    
                     
                    <?php }else{ ?>
                    <?php if (empty($_smarty_tpl->tpl_vars['shopfast']->value['sendtype'])){?>
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>配送费：</span>
                        </div>
                        <div class="xuanze_right">
                        	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopfast']->value['pscost'])===null||$tmp==='' ? '' : $tmp);?>
元
                        </div>
                        <div class="cl"></div>
                    </div>
                    <?php }else{ ?>
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>配送费：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="text" style=" background:#e0f5ff;width:55px; height:29px;"  name="pscost" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopfast']->value['pscost'])===null||$tmp==='' ? '' : $tmp);?>
"  />元
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    
                    <?php }?>
                    
                    
                    <?php }?>
                    
                     
                    
                     
                      <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attrlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                       <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
：</span>
                        </div>
                        <div class="xuanze_right"> 
                        	<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?> 
                        	      <?php if ($_smarty_tpl->tpl_vars['items']->value['type']=='input'){?>
                        	         <?php $_smarty_tpl->tpl_vars['shownow'] = new Smarty_variable(($_smarty_tpl->tpl_vars['items']->value['id']).('-0'), null, 0);?>   
                        	         <input type="input" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['myattr']->value[$_smarty_tpl->tpl_vars['shownow']->value])===null||$tmp==='' ? '' : $tmp);?>
" name="mydata<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" class="text" style=" background:#e0f5ff;width:200px; height:29px;margin-top:5px;">
                        	      <?php }elseif($_smarty_tpl->tpl_vars['items']->value['type']=='img'){?>
                        	        <?php $_smarty_tpl->tpl_vars['shownow'] = new Smarty_variable(($_smarty_tpl->tpl_vars['items']->value['id']).('-'), null, 0);?>   
                        	         <?php $_smarty_tpl->tpl_vars['shownow1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['shownow']->value).($_smarty_tpl->tpl_vars['itv']->value['id']), null, 0);?>  
                        	         <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" name="mydata<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
[]"  <?php if (isset($_smarty_tpl->tpl_vars['myattr']->value[$_smarty_tpl->tpl_vars['shownow1']->value])){?>checked<?php }?> ><img src="<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
" width=30px> 
                        	      <?php }elseif($_smarty_tpl->tpl_vars['items']->value['type']=='checkbox'){?>
                        	         <?php $_smarty_tpl->tpl_vars['shownow'] = new Smarty_variable(($_smarty_tpl->tpl_vars['items']->value['id']).('-'), null, 0);?>   
                        	         <?php $_smarty_tpl->tpl_vars['shownow1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['shownow']->value).($_smarty_tpl->tpl_vars['itv']->value['id']), null, 0);?>
                        	         <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" name="mydata<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
[]" <?php if (isset($_smarty_tpl->tpl_vars['myattr']->value[$_smarty_tpl->tpl_vars['shownow1']->value])){?>checked<?php }?> ><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
 
                        	      <?php }elseif($_smarty_tpl->tpl_vars['items']->value['type']=='radio'){?>
                        	           <?php $_smarty_tpl->tpl_vars['shownow'] = new Smarty_variable(($_smarty_tpl->tpl_vars['items']->value['id']).('-'), null, 0);?>   
                        	         <?php $_smarty_tpl->tpl_vars['shownow1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['shownow']->value).($_smarty_tpl->tpl_vars['itv']->value['id']), null, 0);?>  
                        	           <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" name="mydata<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['myattr']->value[$_smarty_tpl->tpl_vars['shownow1']->value])){?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
  
                        	      <?php }?>
                        	      
                        	<?php } ?> 
                        	 </div>
                        <div class="cl"></div>
                    </div>
                      <?php } ?>
                    
                    
                    
                    
                    
                  	 <div class="settijiao">
                    	
                       
                        	<input class="xuanze_right" type="submit" name=""  value="" />
                     
                        <div class="cl"></div>
                    </div>
                    
                    
       			 </div>
              </form>  
                
                
        </div>
        <div class="cl"></div>
        
        
</div>
 
 
 
 
 
 
 
 
 
 
<script type="text/javascript">
	         
 $(function(){ 
 	  
 	 if($('#setmybangjing').html() != undefined){
 	   selectmybj();
   } 	 
 });
 <?php $_smarty_tpl->tpl_vars['shopvalues'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['shopfast']->value['pradiusvalue']), null, 0);?>
 function selectmybj(){
 	//setmybangjing
 	var bangjing = $('input[name="pradius"]').val();
 	var htmls = '';
	var checkleng = Number(<?php echo count($_smarty_tpl->tpl_vars['shopvalues']->value);?>
);
	$('.doqianmi').remove();
	for(var i=0;i<bangjing;i++){
		var c = i+1; 
		if(i < checkleng){
			
		<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shopvalues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
		  if(i == <?php echo $_smarty_tpl->tpl_vars['mykey']->value;?>
){
	     	htmls += '<div class="serxuanze doqianmi"><div class="xuanze_left"> <span>'+i+'-'+c+'千米</span></div> <div class="xuanze_right">    <input type="text" name="radiusvalue'+i+'" value="<?php echo $_smarty_tpl->tpl_vars['items']->value;?>
" style=" background:#e0f5ff;width:55px; height:29px;"  >&nbsp;&nbsp;&nbsp;元</div> <div class="cl"></div> </div>';
	    }
		<?php } ?>
		
	  }else{
	  	htmls += '<div class="serxuanze doqianmi"><div class="xuanze_left"> <span>'+i+'-'+c+'千米</span></div> <div class="xuanze_right">   <input  type="text" style=" background:#e0f5ff;width:55px; height:29px;"  name="radiusvalue'+i+'" value=""    >&nbsp;&nbsp;&nbsp;元</div> <div class="cl"></div> </div>';
	  }
		
	}
	$('#setmybangjing').after(htmls); 
 }
    
	function openfast(){
	  if(confirm('确定开启外卖操作吗？')){
	  	$("input[name='openshopfast']").attr("checked",false);
	  	myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/startshop/datatype/json"),$_smarty_tpl);?>
',{opentype:'shopfast'});
	   }else{
	   	$("input[name='openshopfast']").attr("checked",false);
	  }
	}
	function closefast(){
		if(confirm('确定关闭外卖操作吗？\n 对应商品数据将会清空')){
	  	$("input[name='openshopfast']").attr("checked",true);
	  	myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/closeshop/datatype/json"),$_smarty_tpl);?>
',{opentype:'shopfast'})
	   }else{
	   	$("input[name='openshopfast']").attr("checked",true);
	  }
	}
	$("input[name='is_orderbefore']").click(function(){
		  var checkid =  $("input[name='is_orderbefore']:checked").val();
		 //befortime
		 if(checkid == 1){
		 	$('#befortime').show();
		 }else{
		 	 $('#befortime').hide();
		 	 $("input[name='befortime']").val('0');
		 }
		  
	}); 
	$('.hc_login_btn_div').click(function(){
		$('#loginForm').submit(); 
	}) 
	function outtimelist(){
	    var hourlist = '';
		for(var i=0;i<24;i++){
		     hourlist +='<option value="'+i+'">'+i+'点</option>';
		}
		var minilist = '';
		for(var i=0;i<60;i++){
		   minilist +='<option value="'+i+'">'+i+'分</option>';
		}
		var	htmls = '<form method="post" id="subyj" action="#" style="text-align:center;"><table>';
		htmls += '<tbody><tr>';
		htmls += '<td height="30px">从:</td>';
		htmls += '<td><select name="starthour">'+hourlist+'</select><select name="startminit">'+minilist+'</select></td></tr>';
		htmls += '<tr>';
		htmls += '<td height="30px">至:</td>';
		htmls += '<td><select name="endthour">'+hourlist+'</select><select name="endminit">'+minilist+'</select></td></tr>';
		htmls += '<tr>';
		htmls += '<td height="30px">说明</td>';
		htmls += '<td><input type="text" name="instr" value=""></td></tr>';
		htmls += '</tbody></table> ';
		htmls += '<input type="hidden" value="" name="shopid"> ';
		htmls += '<input type="button" value="确认提交" class="button" id="buttonsubyj" ></form>';
		art.dialog({
			id: 'testID1000',
			title:'新增配送时间段',
			content: htmls
		});
	}
	$('#buttonsubyj').live('click',function(){ 
		$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/savepostdate/datatype/json"),$_smarty_tpl);?>
', $('#subyj').serialize() ,function (data, textStatus){  
			if(data.error == false){
				diasucces('操作成功','');
			}else{
				if(data.error == true)
				{
					diaerror(data.msg); 
				}else{
					diaerror(data); 
				}
			} 
		}, 'json'); 
	});
	function detimelist(timeid){
		if(confirm('确定删除该配送时间段吗？')){ 
			myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/delpostdate/datatype/json"),$_smarty_tpl);?>
',{id:timeid});
		}else{
		 
		}
	}
</script> 
  
       
       
       
       
       
       
       
       </div>
    



<!------以下是公共的底部部分------->

    <div class="footer">
    	<div class="foot1">
        <center>
        	<div class="db">
        	   <?php if (!empty($_smarty_tpl->tpl_vars['toplink']->value)){?>
	 	      <?php $_smarty_tpl->tpl_vars['toplink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['toplink']->value), null, 0);?>
		  	  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toplink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			         <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a> | 
			    <?php } ?>
			<?php }?> 
         
            </div></center>
            <div class="cl"></div>
        </div>
        <div class="foot2">
        	<p>@2008-2012 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
</p>
        </div>
    </div>
 
 <script>
                	
				$(function(){
					 
			  	if("undefined" != typeof mynomenu){
					   var allobj = $('.nav').find('li');
					  $.each(allobj, function(i, newobj) {
					  	if($(this).attr('data') == mynomenu){
					  	   $(this).addClass('on');
					  	 }
					  	//alert($(this).attr('data'));
					   	  
					  });
				 	}
					$(".nav ul li").click(function(){
					    	$(this).addClass('on').siblings().removeClass('on');
						
					});	 
				});
				function openlink(newlinkes){
					window.location.href=newlinkes;
				}
</script> 
  
</body>
</html><?php }} ?>