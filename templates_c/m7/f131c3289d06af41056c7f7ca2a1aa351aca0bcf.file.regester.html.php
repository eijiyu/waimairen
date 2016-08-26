<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:52:22
         compiled from "/data/wwwroot/waimairen/templates/m7/member/regester.html" */ ?>
<?php /*%%SmartyHeaderCode:171864651257beb1c63fb8a3-33746615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f131c3289d06af41056c7f7ca2a1aa351aca0bcf' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/member/regester.html',
      1 => 1439348594,
      2 => 'file',
    ),
    '028ecad86fe60107edff5e66fd88b13a2e0fd787' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/site.html',
      1 => 1452412480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171864651257beb1c63fb8a3-33746615',
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
  'unifunc' => 'content_57beb1c65a4221_46971745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb1c65a4221_46971745')) {function content_57beb1c65a4221_46971745($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> 用户注册-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
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
/public/js/regestercode.js" type="text/javascript" language="javascript"></script> 

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


 

 

 <div class="reg_conten_15" style="margin:25px auto ;">
  <div class="cont3_15" style="background: url(../upload/images/rebkright.jpg) right 0 no-repeat;margin: 35px auto ;">
  <form id="regForm" method="post" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/saveregester/datatype/json"),$_smarty_tpl);?>
">
     <div class="left01">
	   <div style=" margin-bottom:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/regester_top.png" /></div>
	   <ul class="ul01">
	   
		 <li>
		  <dl>
		    <dt>邮箱</dt>
			<dd><input placeholder="邮箱/用于找回密码（必填）" type="text" name="email"  class="input1" value=""/></dd>
		  </dl>
		 </li>
         <li>
		  <dl>
		    <dt>账号</dt>
			<dd><input placeholder="账号" type="text" name="tname" class="input1" value=""/></dd>
		  </dl>
		 </li>
          <li>
		  <dl>
		    <dt>手机号码</dt>
			<dd><input placeholder="手机号码"  name="phone" type="text" id="phone"  class="input1" value="" /></dd>
		  </dl>
		 </li>
		 
      <li id="showgetcode" style="display:none;">
		  <dl >
		    
			<dd><div style="margin-left:81px;margin-top:5px;"><input type="button" value="获取验证码" onclick="clickyanzheng();" class="inputgetcheck" time="0" id="dosendbtn" style="height:30px;line-height:30px;"></div> </dd>
		  </dl>
		 </li>
       
     <li id="showinputcode" style="display:none;">
		  <dl >
		    <dt>验证码</dt>
			<dd> <input type="text" name="phoneyan" id="phoneyan" class="input1"></dd>
		  </dl>
		 </li>  
		 
		 
		 
		 
		 <li>
		  <dl>
		    <dt>密码</dt>
			<dd><input placeholder="密码" type="password" name="pwd"  class="input1" value=""/></dd>
		  </dl>
		 </li>
		 <li>
		  <dl>
		    <dt>重复密码</dt>
			<dd><input placeholder="重复密码" name="pwd2" type="password"  class="input1" value=""/></dd>
		  </dl>
		 </li>
          <?php if ($_smarty_tpl->tpl_vars['allowedcode']->value==1){?>
		 <li style="margin-bottom:20px" id="imgcode">
		  <dl>
		    <dt>验证码</dt>
			<dd><input  placeholder="验证码" name="Captcha"  class="input1 input2" value=""/><img src="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/getCaptcha"),$_smarty_tpl);?>
"   id="captchaimg" /><span class="span1"><a href="javascript:freshcode();">换一张</a></span></dd>
		  </dl>
		 </li>
         <?php }?>
		  <li style="margin-top:20px">
		  <dl>
		    <dt style="background:none">&nbsp;</dt>
            <input name="tijiao" type="hidden" value="do"> 
			<dd><input name="" type="button" class="input3 login-button" value=""/></dd>
            
		  </dl>
		 </li>
		 <li><span style="padding-left:81px"><label class="checkbox" style="margin-left: 16px;">
					      <input name="reg[agree]" type="checkbox" checked="" disabled> 我接受<a target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/single/show/xieyi"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
服务协议</a>	
					    </label></span></li>
	   </ul>
	 </div>
     
   </form>
   
   
   <script type="text/javascript">
var regestercode = '<?php echo $_smarty_tpl->tpl_vars['regestercode']->value;?>
';
$('.login-button').click(function(){ 

	subform('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
',$('#regForm'));
})
$(".input1").change(function(j){
	
		var v=$(this).val();
		var p=$(this).attr("name"); 
		switch(p){
		case "email":
			var patrn= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!patrn.exec(v)){ 
				 alert('邮箱格式错误'); 
			}else{ 
				$.ajax({
				type: "POST",
				url: "<?php echo FUNC_function(array('type'=>'url','link'=>"/member/checkemail/datatype/json"),$_smarty_tpl);?>
",
				dataType: "json",
				data: "uname=" + v,
				success: function(msg){     
					if(msg.error ==true){ 
						$('[name="email"]').val();
						alert('邮箱已经存在');
					 } 
					}
				});				
			}
		break;
		case "tname":
		 	var patrn=/[u4e00-u9fa5]/;  
			if(v == '' ||v == null){
			  alert('账号不能为空'); 
			}else{
					$.ajax({
				type: "POST",
				url: "<?php echo FUNC_function(array('type'=>'url','link'=>"/member/checkname/datatype/json"),$_smarty_tpl);?>
",
				dataType: "json",
				data: "uname=" + v,
				success: function(msg){ 
					if(msg.error==true){ 
						$('[name="tname"]').val('');
						alert(msg.msg);
					  //alert('此用户名已注册过'); 
					 }
					}
				});	
			}
		break;
		case "phone":
			var patrn= /(.){4,16}/;
			if(!patrn.exec(v)){ 
				 alert('手机格式错误'); 
			}
		break; 
		case "pwd":
			var patrn=/(.){4,16}/;  
			if(!patrn.exec(v)){
				 alert('密码是4-16位的字母、数字,区分大小写');  
			 } 
		break;
		}
	});

</script>
	 <div class="rihgt01" style="float: left;
text-align: center;

width: 300px;
padding-top: 150px;padding-left:0px;">
	   <h1>已有<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
账号</h1>
	   <div class="div1"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/login"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/reg_r9_c17.jpg" /></a></div>
      <!--
	   <h2>你可以使用以下账号登录</h2>
	   <h4 style="width:300px;"> 
	     <?php echo smarty_function_load_data(array('assign'=>"apiloginlist",'table'=>"otherlogin",'fileds'=>"*",'limit'=>"10"),$_smarty_tpl);?>
 
					    <?php if (count($_smarty_tpl->tpl_vars['apiloginlist']->value['list'])>0){?>
       <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apiloginlist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
						     <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/linktest/logintype/".((string)$_smarty_tpl->tpl_vars['items']->value['loginname'])),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['logourl'];?>
"></a> 
						<?php } ?>
						
						
						<?php }?></h4>   -->
	 </div> 
  </div>
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