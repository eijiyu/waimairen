<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:20:48
         compiled from "/data/wwwroot/waimairen/templates/m7/site/showcart.html" */ ?>
<?php /*%%SmartyHeaderCode:75825010857beb870a48026-93947983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69efe1389179cfdd164e71f194f8adb3bb301d94' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/site/showcart.html',
      1 => 1452596978,
      2 => 'file',
    ),
    '028ecad86fe60107edff5e66fd88b13a2e0fd787' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/site.html',
      1 => 1452412480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75825010857beb870a48026-93947983',
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
  'unifunc' => 'content_57beb870c7add6_30926157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb870c7add6_30926157')) {function content_57beb870c7add6_30926157($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> <?php echo $_smarty_tpl->tpl_vars['mapname']->value;?>
-附近商家列表-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
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
/public/css/nmmiain.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/nmcomm.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/nmage.css"> 



<div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:#ffffff;"<?php }?>></div> 
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
/public/js/cart.js" type="text/javascript" language="javascript"></script> 
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


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


<div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:#ffffff;"<?php }?>></div> 


<style>
input{margin:0px;important!}
.input-control input{margin-bottom:0px;}
</style>
<div id="content" class="clearfix" style="min-height: 322px;">
<div class="main">

<section class="breadcrumb">
<a href="/">首页</a>
<i>&gt;</i>
<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/index/id/".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</a>
<i>&gt;</i>
<span>确认订单</span>
</section>
<div class="main-l">
<div class="empty clearfix"></div>


<section id="cartshow_c" class="cart-section fl">

</section>




<section class="delivery fl">
<div class="delivery-title">
<h2>配送信息</h2>
</div>
<ul class="delivery-ul">

 <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?> 	
 <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"address",'fileds'=>"*",'limit'=>"5",'where'=>"userid='".((string)$_smarty_tpl->tpl_vars['member']->value['uid'])."'"),$_smarty_tpl);?>

	
<li class="addr-list-li">	 
			<div data-node="loading" style="text-align: center; height: 90px; padding: 70px 0px; display: none;">
			<img src="http://webmap3.map.bdimg.com/static/waimai/images/loading_50c5e3e.gif">
			</div>
			 <?php if (!empty($_smarty_tpl->tpl_vars['list']->value['list'])){?>	
			<div class="list-title" data-node="listTitle" style="">
			<span>收货人信息：</span>
			<span class="add-new" data-node="addNew">新增送餐地址</span>
			</div>			
			<ul class="curAddrPanel" data-node="addrPanel" style="height: auto;">
			 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>	
				<li  class="addr-item <?php if ($_smarty_tpl->tpl_vars['items']->value['default']==1){?> select <?php }?> " >   
				<div class="addr-title">        
					<div class="addr-user"   <?php if ($_smarty_tpl->tpl_vars['items']->value['default']!=1){?> onclick="changeAddr(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" <?php }?>  >           
						<span class="name"><?php echo $_smarty_tpl->tpl_vars['items']->value['contactname'];?>
</span>          
						<span class="sex"><?php if ($_smarty_tpl->tpl_vars['items']->value['sex']==1){?>先生<?php }?><?php if ($_smarty_tpl->tpl_vars['items']->value['sex']==2){?>女士<?php }?></span>        
					</div>        
					<div class="addr-action">            
						<a class="addr-edit" addid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">编辑</a>            
						<a class="addr-remove" onclick="delAddrs(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);">删除</a>       
					</div>    
				</div>    
				<div class="addr-con"   <?php if ($_smarty_tpl->tpl_vars['items']->value['default']!=1){?> onclick="changeAddr(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" <?php }?>  >        
					<p class="phone"><?php echo $_smarty_tpl->tpl_vars['items']->value['phone'];?>
</p>        
					<p class="addr-desc"><?php echo $_smarty_tpl->tpl_vars['items']->value['address'];?>
</p>    
				</div>    
				<?php if ($_smarty_tpl->tpl_vars['items']->value['default']==1){?> <span class="select-ico"></span> <?php }?>
			</li>
				<?php } ?>
			</ul>

			<?php }else{ ?>
						
			<ul class="curAddrPanel" data-node="addrPanel" style="height: auto;">
		<div class="addr-detail" id="new-address-section">   
			<form id="addform">       
				<table class="addr-table" border="0">           
					<tbody>
						<tr>                
							<td valign="top">
								<span class="l-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
							</td>                
							<td>        
            
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['addinfo']->value['id'];?>
" id="address_id" name="address_id">                   
								<div class="form-group">                        
									<div class="input-control">                            
										<input type="text" name="contactname" id="yonghuming"  placeholder="您的姓名" value="<?php echo $_smarty_tpl->tpl_vars['addinfo']->value['contactname'];?>
" class="placeholder-con yonghuming"> <span class="star">*</span>                       
									</div>                        
									<div class="error-msg v-hide yhm">请填写您的姓名，不能超过8个字符</div>                   
								</div>                   
								<div class="form-group">                       
									<div class="input-control"  id="xingbie">                           
										<div class="s-gender <?php if ($_smarty_tpl->tpl_vars['addinfo']->value['sex']==1){?> selected  <?php }?> " data-gender="1">                                <i></i><span>先生</span>                            </div>  
										<div class="s-gender  <?php if ($_smarty_tpl->tpl_vars['addinfo']->value['sex']==2){?> selected  <?php }?> "  data-gender="2">                                <i></i><span>女士</span>                            </div>                        
									</div>                       
									<div class="error-msg v-hide">请选择您的性别</div>                    </div>                
							</td>            
					    </tr>           
						<tr>                
						<td valign="top"><span class="l-label">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</span></td>                
						<td>                    
						<div class="form-group">                        
						<div class="input-control">                           
						<input type="text" name="phone" id="shoujihao"  placeholder="11位手机号" value="<?php echo $_smarty_tpl->tpl_vars['addinfo']->value['phone'];?>
" class="placeholder-con shoujihao">                            <span class="star">*</span>                       
						</div>                        
						<div class="error-msg v-hide sjh">请填写正确的手机号</div>                 
						</div>               
						</td>           
						</tr>   
						<tr>               
							<td valign="top"><span class="l-label">详细地址</span></td>               
							<td>                    
								<div class="form-group">                        
									<div class="input-control">                                                       
										<input type="text" name="add_new" id="newaddress"  placeholder="请输入门牌号等详细信息" value="<?php if (empty($_smarty_tpl->tpl_vars['addinfo']->value['address'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['areainfo']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['addinfo']->value['address'];?>
<?php }?>" class="placeholder-con newaddress">    <span class="star">*</span>                            
									</div>                       
									<div class="error-msg v-hide ndd">请输入门牌号等详细信息</div>                   
								</div>                
							</td>            
						</tr>      
				</tbody>
			</table>       
<div class="form-group form-submit">   <input type="button" class="saveBtn"  onclick="newAddr();"  value="保存送餐信息">                    </div>  
			</form>
			</div>
			</ul>
			
	
		 <div style="clear:both;"></div>
						
						
			<?php }?>


			<div class="list-bottom">
			<span class="expland" data-node="expPanel" style="display: none;"><span class="inner">显示所有地址</span></span>
			</div>
	</li>
	

 <?php }else{ ?>
 
<li class="addr-list-li">
<div data-node="loading" style="text-align: center; height: 90px; padding: 70px 0px; display: none;">
<img src="http://webmap3.map.bdimg.com/static/waimai/images/loading_50c5e3e.gif">
</div>
<div class="list-title" data-node="listTitle" style="display: none;">
<span>收货人信息：</span>
<span class="add-new" data-node="addNew">新增送餐地址</span>
</div>

<ul class="curAddrPanel" data-node="addrPanel" style="height: auto;">
<div class="addr-detail" id="new-address-section">   
 <form>        
 <table class="addr-table" border="0">            
 <tbody>
 <tr>                
 <td valign="top">
 <span class="l-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
 </td>                
 <td>                    
 <input type="hidden" value="" name="adrr_id">                    
 <div class="form-group">                        
 <div class="input-control">                            
 <input type="text" name="user_name"  placeholder="您的姓名" value="" class="placeholder-con yonghuming">  
 <span class="star">*</span>                        
 </div>                        
 <div class="error-msg v-hide yhm">请填写您的姓名，不能超过8个字符</div>                    
 </div>                    
 <div class="form-group">                        
 <div class="input-control">                                                        
 <input type="hidden" name="gender" value="1">                          
 <div class="s-gender  selected " data-gender="1">                               
 <i></i><span>先生</span>                           
 </div>                            
 <div class="s-gender " data-gender="2">                                
 <i></i><span>女士</span>                            
 </div>                       
 </div>                       
 <div class="error-msg v-hide">请选择您的性别</div>                    
 </div>                
 </td>            
 </tr>            
 <tr>               
 <td valign="top"><span class="l-label">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</span></td>                
 <td>                    
 <div class="form-group">                        
 <div class="input-control">                           
 <input type="text" name="user_phone"  placeholder="11位手机号" value="" class="placeholder-con shoujihao">  
 <span class="star">*</span>                       
 </div>                       
 <div class="error-msg v-hide sjh">请填写正确的手机号</div>                    
 </div>                
 </td>           
 </tr>           
 <tr>                
 <td valign="top"><span class="l-label">详细地址</span></td>               
 <td>                   
 <div class="form-group">                       
 <div class="input-control">                                                       
 <input type="text" name="detail_address" placeholder="请输入门牌号等详细信息" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['areainfo']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="placeholder-con newaddress">  <span class="star">*</span>                   
 </div>                        <div class="error-msg v-hide ndd">请输入门牌号等详细信息</div>                 
 </div>              
 </td>           
 </tr>        
 </tbody>
 </table>        
  
 </form>
 </div>
  </ul>

 
<div class="list-bottom">
<span class="expland" data-node="expPanel" style="display: none;"><span class="inner">显示所有地址</span></span>
</div>
</li>



<?php }?>

<li class="">
<div class="delivery-lable">
<span class="lable">支付方式：</span>
</div>
<div class="delivery-input" data-node="payMethod">
<table class="pay-list">
<tbody>

<?php if (!(($_smarty_tpl->tpl_vars['open_acout']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==0)&&($_smarty_tpl->tpl_vars['is_daopay']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0))){?>
	<?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==1&&$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==1){?>
	<tr data-value="0" class="pay-box select">
	<td class="radio-con">
	<div class="s-radio">
	<i></i>
	</div>
	</td>
	<td class="text">
	<span class="pay-name">货到付款</span>
	<span class="pay-desc"></span>
	</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['open_acout']->value==1&&$_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==1){?>
	<tr data-value="1" class="pay-box <?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0){?>  select  <?php }?>">
	<td class="radio-con">
	<div class="s-radio">
	<i></i>
	</div>
	</td>
	<td class="text">
	<span class="pay-name">支付宝等其他在线支付方式</span>
	<span class="pay-desc"></span>
	</td>
	</tr>
	<?php }?>
<?php }else{ ?>
	<tr  class="pay-box <?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0){?>  select  <?php }?>">
	<td class="radio-con">
	<div class="s-radio">
	<i></i>
	</div>
	</td>
	<td class="text">
	<span class="pay-name">未开启任何支付方式</span>
	<span class="pay-desc"></span>
	</td>
	</tr>

	
<?php }?>

</tbody></table>
</div>
</li>

<li>
<div class="delivery-lable">
<span class="lable">送达时间：</span>
</div>


	<select name="timeid" id="timeid"  style=" display:; width: 222px;border-radius:0px;margin:0px; height:38px!important; border: 1px solid #e4e4e4;background: #ffffff;"  >
								   	 <?php  $_smarty_tpl->tpl_vars['itk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pstimelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itk']->key => $_smarty_tpl->tpl_vars['itk']->value){
$_smarty_tpl->tpl_vars['itk']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['itk']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['itk']->value['d'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['itk']->value['i'])){?><?php echo $_smarty_tpl->tpl_vars['itk']->value['i'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['itk']->value['s'];?>
-<?php echo $_smarty_tpl->tpl_vars['itk']->value['e'];?>
<?php }?></option>
								 <?php } ?> 
								  </select> 
							 
						 


</li>
<li id="testdrop">
<div class="delivery-lable">
<span class="lable">备注信息：</span>
</div>
<div style="position:relative;" class="beizhuinfo">
<div class="delivery-input">
<input class="input mark" maxlength="200" name="remark" id="remark" data-node="markInput" value="" placeholder="请填写备注">
<textarea data-node="markInput_list" style="display:none">                  
                </textarea>
</div>
<ul class="mod-dropdown markStyle" style="z-index: 1000; display: none; position: absolute; top: 40px; left: 75px;">

<?php if (isset($_smarty_tpl->tpl_vars['orderbz']->value)&&!empty($_smarty_tpl->tpl_vars['orderbz']->value)){?>
						<?php $_smarty_tpl->tpl_vars['orderbz'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['orderbz']->value), null, 0);?>
						 <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderbz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
						  <?php if (!empty($_smarty_tpl->tpl_vars['itv']->value)){?>
				
					
					<li class="mod-dropdown-item" data-value="<?php echo $_smarty_tpl->tpl_vars['itv']->value;?>
" ><a class="s-item" href="javascript: void(0)"><?php echo $_smarty_tpl->tpl_vars['itv']->value;?>
</a></li>
					
					
					 <?php }?>
						<?php } ?> 					
						<?php }?>		
	
</ul>
</div>
</li>
<li>
<div class="delivery-lable">
<span class="lable"></span>
</div>
<div class="delivery-input hide <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?> 	 <?php if (empty($_smarty_tpl->tpl_vars['list']->value['list'])){?> delivery-btn-no <?php }else{ ?> delivery-btn	<?php }?> <?php }else{ ?>  delivery-btn  <?php }?>" style="display: block;"> 	<!-- -no -->
<span id="showtj"  <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?> 	 <?php if (!empty($_smarty_tpl->tpl_vars['list']->value['list'])){?> onclick="orderSubmit();"  <?php }?> <?php }else{ ?>  onclick="orderSubmit();"  <?php }?> ><h2>确认下单</h2></span>
<span id="showtj2" style="display:none;"><h2>提交中，请稍等</h2></span>
<a id="continue-to-book"  style="display: none;">继续点餐</a>
</div>
</li>
</ul>
<?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?>
<?php if (empty($_smarty_tpl->tpl_vars['list']->value['list'])){?>
<p id="commit_warning" class="commit-warning hide" style="display: block;">(提示：您需要先保存送餐地址，再提交订单)</p>
<?php }?>
<?php }else{ ?>

<?php }?>
</section>
<div class="empty clearfix"></div>
</div>
</div>
<!--[if IE]>
<style type="text/css">
/*widget.cart*/
.cart .cart-panel .item-list .item .item-count .item-count, 
.cart .cart-panel .collect .item .item-count .item-count {
    line-height: 20px;
}
.cart .cart-panel .item-list .item .item-count .item-minus, 
.cart .cart-panel .collect .item .item-count .item-minus, 
.cart .cart-panel .item-list .item .item-count .item-plus, 
.cart .cart-panel .collect .item .item-count .item-plus {
    line-height: 18px;
}

.delivery{
	_display:inline;

}
.delivery .delivery-ul li .input{
	 *height: 24px;
}
.delivery .delivery-ul li .send_time_mock_arrow{
	*vertical-align: text-top;
}
.delivery .delivery-ul li .mod-dropdown {
	*height: 200px;
}
</style>
<script type="text/javascript">
</script>
<![endif]-->
<!--[if IE 6]>
<style type="text/css">
.cart {
    display:inline;
}
</style>
<![endif]-->


</div>
 
 <!-- 修改编辑删除地址 -->
 <div class="mod-dialog-frame" id="mod-dialog-frame" style="overflow: auto; position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; z-index: 1000; display: none; background-color: rgba(0, 0, 0, 0.54902);">
	
	
	
</div>
 
 
 
 
 
 
 

 
<script type="text/javascript"> 

var juanlist = [];
 
	var cartshopid = '<?php echo $_smarty_tpl->tpl_vars['shopid']->value;?>
';
	var shopid = '<?php echo $_smarty_tpl->tpl_vars['shopid']->value;?>
'; 
	 var starttime = '<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['starttime'];?>
'; 
	 var is_orderbefore=<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['is_orderbefore'];?>
;
	 var nowdate = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
';
	 var nowtime = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
';
	   <?php $_smarty_tpl->tpl_vars['yanchitime'] = new Smarty_variable(time()+$_smarty_tpl->tpl_vars['shopinfo']->value['maketime']*60, null, 0);?>
	  var maketime = '<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yanchitime']->value,"%Y-%m-%d %H:%M:%S");?>
';
	 	var submithtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/makeorder/datatype/json/random/@random@"),$_smarty_tpl);?>
';
	  var orderhtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/@orderid@"),$_smarty_tpl);?>
';
	  var memberid = <?php echo $_smarty_tpl->tpl_vars['member']->value['uid'];?>
;
	  var xiangxidizhi = '<?php echo $_smarty_tpl->tpl_vars['areainfo']->value;?>
';
var allowedguestbuy = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['allowedguestbuy']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
$(function(){ 	
	//maketimenenu();
	
});

$(".pay-box").click(function(){
	$(this).addClass('select').siblings().removeClass('select');
});
$(".escBtn").click(function(){
	$(".mod-dialog-frame").hide();
});

$(".s-gender").click(function(){

	$(this).addClass('selected').siblings().removeClass('selected');
});
$("#remark").focus(function(){
	$(".mod-dropdown").show();
});

 $(document).click(function(e){ 
 e = window.event || e; // 兼容IE7
 obj = $(e.srcElement || e.target);
    if ($(obj).is("#testdrop,#testdrop *,.remark")) {
   } else {
     $('.mod-dropdown').hide();//// alert('你的点击不在目标区域');
 } 
});

$(".mod-dropdown li a").click(function(){
	var value = $('#remark').val()+$(this).text() + ',';
	$('#remark').val(value);
});
function changeAddr(uid)
	{
		 
		var info = {'tijiao':'do','default':'1','addressid':uid,'what':'default'};
	 	var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/area/editaddress/random/@random@/datatype/json"),$_smarty_tpl);?>
';
		 myajax(url,info);
	}
function newAddr()
	{
		if( $('.yonghuming').val() == '' || $('.shoujihao').val() == '' || $('.newaddress').val() == '' ){
			if( $('.yonghuming').val() == ''  ){
				$('.yonghuming').addClass('caution-line');
				$('.yhm').removeClass('v-hide');
			}else{
				$('.yonghuming').removeClass('caution-line');
				$('.yhm').addClass('v-hide');
				if( $('.shoujihao').val() == ''  ){
					$('.shoujihao').addClass('caution-line');
					$('.sjh').removeClass('v-hide');
				}else{
					$('.shoujihao').removeClass('caution-line');
					$('.sjh').addClass('v-hide');
					alert($('.newaddress').val());
					if( $('.newaddress').val() == '' ||  $('.newaddress').val() == '文化路创新大厦' ){
						$('.newaddress').addClass('caution-line');
						$('.ndd').removeClass('v-hide');
					}else{
						$('.newaddress').removeClass('caution-line');
						$('.ndd').addClass('v-hide');
					}
				}
			}
			
			
		}else{
			var info = {'addressid':$("#address_id").val(),'contactname':$("#yonghuming").val(),'sex':$("#xingbie .selected").attr('data-gender'),'phone':$("#shoujihao").val(),'add_new':$("#newaddress").val(),'laiyuan':1};
			var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/area/saveaddress/random/@random@/datatype/json"),$_smarty_tpl);?>
';
			myajax(url,info);
		}
	}
		$(".addr-edit,.add-new").click(function(){
					
					var addid = $(this).attr('addid');
				
					$("#mod-dialog-frame").show();
					
					var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/xiugaiaddress"),$_smarty_tpl);?>
'; 
					$.post(url, {'addid':addid},function (data, textStatus){ 
							$('#mod-dialog-frame').html(data); 
						}, 'html');
					
			});

function delAddrs(uid){
		if(confirm('确定操作吗？')){
		var info = {'tijiao':'del','addressid':uid};
		var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/area/deladdress/random/@random@/datatype/json"),$_smarty_tpl);?>
';
		myajax(url,info);
		
	 }
	}	

 

  
 

function addSend_time(obj)
{
	$('#send_time').val($(obj).val());
}
function setaddress(address,contactname,phone,areainfo) 
{
	 $("input[name='addrestemp']").val(areainfo+address);
   $("input[name='phone']").val(phone);
   $("input[name='recieve_name']").val(contactname); 
}

 
$('.beizhubox span').click(function(){
	var value = $('#remark').val()+$(this).text() + ',';
	$('#remark').val(value);
})



//刷新购物车
function freshcart(){ 

if($('#ShopCart').html() != undefined){
	    url = siteurl+'/index.php?ctrl=site&action=smallcat&shopid='+shopid+'&random=@random@';
	    url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
	    $.get(url, function(result){ 
	   
        $("#cartlist").html(result);
         freachperson();
         jifenduihuan();  
       //  $('.new_cart_show').bind("hover", function() {   
      //   	  $(this).addClass('hoveron').siblings().removeClass('hoveron');
      //   });
    //    $('#CMoney').text(allcost);
     //   $('#waimaibtn').text(allcost);
      });
   }else{ 
   	//调用  自动刷新购物车  
   	 
      url = siteurl+'/index.php?ctrl=site&action=smallcat2&shopid='+shopid+'&random=@random@';
	    url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
	    $.get(url, function(result){  
        $("#cartshow_c").html(result);  
         if(Number($('#jifendkou').attr('data')) > 0){
  	        $('#jifendkou').show();
         } 
          jifenduihuan();  
      }); 
     
     
   }  
}



function  orderSubmit(){

	//  url = siteurl+'/index.php?ctrl=shop&action=order&random=@random@';
	 $('#showtj').hide();
	 $('#showtj2').show();
	  url = submithtml.replace('@random@', 1+Math.round(Math.random()*1000));
	
 <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?> 	
	var contactname = $(".curAddrPanel li.select .name").text();
	var phone = $(".curAddrPanel li.select .phone").text();
	var address = $(".curAddrPanel li.select .addr-desc").text();	
<?php }else{ ?>
	var contactname = $("input[name='user_name']").val();
	var phone = $("input[name='user_phone']").val();
	var address = $("input[name='detail_address']").val();
<?php }?>

	  
	var ordercheckphone = <?php echo $_smarty_tpl->tpl_vars['ordercheckphone']->value;?>
;

	if( ordercheckphone == 1 ){
		if($('#cat_zhe').is(":hidden") == true){
			 $('#cat_zhe').show();
			 $('#goosshow').show();
			 $('#phonefont').text(phone);
			 return ;
		}

	} 

	 


	
	var remark = $("#remark").val();
	var paytype = $(".pay-list tr.select").attr('data-value');

   $.ajax({         //script定义
             url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
            dataType: "json",
            async:true,
            data:{'phonecode':$('#phonecode').val(),shopid:shopid,'remark':remark,'username':contactname,'mobile':phone,'addressdet':address,'areaid1':$("#areaid1").find("option:selected").val(),'areaid2':$("#areaid2").find("option:selected").val(),'areaid3':$("#areaid3").find("option:selected").val(),'senddate':'','minit':$("#timeid").find("option:selected").val(),'paytype':paytype,'dikou':$("select[name='jfdk']").find("option:selected").val(),'juanid':$("input[name='buyjuan']:checked").val()},
            success:function(content) { 
			
			
            //	$('#loading').toggle();
             if(content.error == true){ 
                $('#showtj2').hide();
	              $('#showtj').show();
	              alert(content.msg);
             }else{
             
	             window.location.href= orderhtml.replace('@orderid@', content.msg);
             }
            },
            error:function(){
            	 $('#showtj2').hide();
	              $('#showtj').show();
            	//$('#loading').toggle();
            	alert('数据提交失败');
            }
   });     
}
</script>
 

<div id="cat_zhe" class="cart_zhe" style="display:none;"></div>
<div id="goosshow" class="cart_position" style="display:none;">
	 <form id="dosubmit">
		 <div class="position_top"><span class="title">验证手机</span><i class="close" onclick="close_pop('goosshow')"></i></div>
		 <div class="goodsshow" style="padding:20px;">为了保证您的用餐请验证您的手机号</div>
		 <div class="position_middel"> 
		  <div class="line_class"><label>联系电话:</label><font id="phonefont">0</font></div>
		  <div class="line_class"><label>获取验证码:</label><input type="button" value="发送手机验证码" id="dosendbtn" time="0" style="line-height:15px;"></div>
		  <div class="line_class"><label>验证码:</label><input type="text" name="phonecode" id="phonecode" value=""></div> 
		  <div class="line_class">  <input type="hidden" name="shopid" value="13"><input type="hidden" name="subtype" value="1"><input type="button" class="next bg" value="确认提交" id="cfbtn" onclick="orderSubmit()"></div>
		 </div> 
		</form>
</div>
<style>
.cart_position  .position_middel input{ border:1px solid;}
	.cart_position{width: 400px;height: 400px;position: fixed;z-index: 1050;background-color: #fff;left: 50%;top: 50%;margin-left: -200px;margin-top:-200px;border:4px solid #da3838;border-radius: 5px;}
.cart_position .position_top{height:40px;line-height:40px;text-align:center;font-weight:bold;color:#fff;}
.cart_position .position_top .title{padding-left:20px;padding-right:20px;background-color:#da3838;line-height:30px;height:30px;padding-top:10px;padding-bottom:11px;}
.cart_position .position_top  i{width: 21px;height: 21px;position:absolute;margin-right: 5px;margin-top: 5px;background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/plate/icon.png) no-repeat;background-position: -362px -92px;cursor: pointer;right:0px;}
.cart_position  .position_middel .line_class{height:30px;line-height:30px;padding-left:20px;clear:both;margin-top:10px;}
.cart_position  .position_middel .line_class label{width:80px;float:left;line-height:30px;height:30px;}
.cart_position  .position_middel .line_class select{width:100px;padding:0px;height:30px;line-height:30px;float:left;}
.cart_position  .position_middel .line_class input{float:left;border:1px solid;}
.cart_position  .position_middel .line_class .next{width: 120px;margin-top: 10px;height: 30px;line-height: 30px;font-size: 16px;color: #fff;border: none;margin-left: 10px;cursor: pointer;}
.cart_position  .position_middel .line_class .bg{background: #da3838;cursor: pointer;}
.cart_position  .position_middel .line_class .bg:hover{background: #e51914}
.cart_position  .position_middel .line_class .diabled{background-color:#ccc;}
.cart_position  .position_middel .line_class .diabled:hover{background-color:#ccc;}
.cart_position  .position_middel .mutile_class{clear:both;float:left;margin-top:10px;padding-left:20px;height:80px;} 
.cart_position  .position_middel .mutile_class label{width:80px;float:left;}
.cart_position  .position_middel .mutile_class textarea{height:70px;float:left;width:280px;}
</style>
<script>
	function close_pop(divid){
	  $('#'+divid).hide();//phone
	  $('#cat_zhe').hide();
	  $('#showtj2').hide();
	              $('#showtj').show();
	}
	$(function(){    
   	     $('#dosendbtn').bind("click", function() {  
   	     	   $('#dosendbtn').attr('disabled',true); 
   	     	   $('#dosendbtn').attr('value','发送中..');
   	 	       var tempurl = siteurl+'/index.php?ctrl=site&action=phonecode&random=@random@&phone=@phone@';
			    <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?> 	
					tempurl = tempurl.replace('@random@', 1+Math.round(Math.random()*1000)).replace('@phone@',$(".curAddrPanel li.select .phone").text() );
				<?php }else{ ?>
					tempurl = tempurl.replace('@random@', 1+Math.round(Math.random()*1000)).replace('@phone@',$("input[name='user_phone']").val() );
				<?php }?>
	            $.getScript(tempurl);      
         }); 
  }); 
function showsend(phone,time){  
     $('#dosendbtn').attr('time',time);
     setTimeout("btntime()",1000);  
} 
function showmessage(msg){
	 alert(msg);
	  $('#dosendbtn').attr('disabled',false);
		 $('#dosendbtn').attr('value','发送手机验证码');
}
function  btntime(){
	//dosendbtn
	var nowtime = Number($('#dosendbtn').attr('time'));
	if(nowtime > 0){
	   $('#dosendbtn').attr('disabled',true);
	   var c = Number(nowtime)-1;
	    $('#dosendbtn').attr('time',c);
	    var  mx = 60-(60 - Number(c));
	     $('#dosendbtn').attr('value','验证码还有'+mx+'秒失效');
	      setTimeout("btntime()",1000);
	}else{
		 $('#dosendbtn').attr('disabled',false);
		 $('#dosendbtn').attr('value','发送手机验证码');
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