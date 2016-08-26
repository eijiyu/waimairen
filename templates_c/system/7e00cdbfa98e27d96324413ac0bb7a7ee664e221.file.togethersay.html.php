<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:57:52
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/togethersay.html" */ ?>
<?php /*%%SmartyHeaderCode:68483039557beb3107414c8-74499342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e00cdbfa98e27d96324413ac0bb7a7ee664e221' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/togethersay.html',
      1 => 1439363854,
      2 => 'file',
    ),
    '3fbc4ede513af2ddd9912a12a8a8611f8354d73a' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/wxsite.html',
      1 => 1452504956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68483039557beb3107414c8-74499342',
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
  'unifunc' => 'content_57beb31091d7e1_57290893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb31091d7e1_57290893')) {function content_57beb31091d7e1_57290893($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html>
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
/public/wxsite/css/shopshow.css">   
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/togetersay.css">   

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
/public/wxsite/js/wxshop.js"></script>  
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/jweixin-1.0.0.js"></script>  

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var taction = "<?php echo $_smarty_tpl->tpl_vars['Taction']->value;?>
"; 
</script>
<script> 

var wxmenuid = <?php echo $_smarty_tpl->tpl_vars['member']->value['uid'];?>
;

		var myScroll;
function loaded() {
	myScroll = new iScroll('wrapper', {
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		}
	});
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
	
 <!--头部-->
    <header style="position: fixed;display:block; " id=""><div class="return"></div>一起说
	<div   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/wxmsglist"),$_smarty_tpl);?>
');"  style="position: fixed;
  display: block;
  z-index: 3;
  top: 1px;
  right: 15px;"><p style="line-height: 12px;"><img style="width: 25px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/iconfont-xiaoxiweixuanzhong.png" /></p><p  style="line-height: 12px; font-size:12px;">消息</p></div>
	</header>

	
	 
<div id="wrapper" >
<div  class="page-app">

   
	<div class="wxsaycontentlist">
	
		<ul>
			<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['togethersaycomlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
			<li class="wxusersay_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
				<div class="wxusercontent">
					<div class="wxuserinfo">
						<span><img class="userlogo" src="<?php echo $_smarty_tpl->tpl_vars['userlogo']->value;?>
" /></span>
						<span style="margin-left:7px;display:block;">
							<p class="wxusername <?php if ($_smarty_tpl->tpl_vars['items']->value['sex']==1){?> wxnan <?php }elseif($_smarty_tpl->tpl_vars['items']->value['sex']==2){?> wxnv <?php }else{ ?><?php }?>"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</p>
							<p class="wxuserxx"><?php echo $_smarty_tpl->tpl_vars['items']->value['streetname'];?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%m-%d %H:%M");?>
</p>
						</span>
					</div>
					<div class="clear"></div>
					
					<div  onclick="caozuousercont(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="wxusercontdr"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/iconfont-chevron-down.png" /></div>
					<div <?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>onclick="wxuserdel(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"<?php }else{ ?>onclick="wxuserjubao(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"<?php }?> class="wxusercomfir wxusercomfir_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" style="display:none;">
						<span panduanattr="<?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>shanchu<?php }else{ ?>jubao<?php }?>"  class="jubaouser"><?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>删除<?php }else{ ?>举报<?php }?></span>
					</div>
					
					<div class="yiqisayusercont">
						<span style="color:#fe5052;">[ 置顶 ] </span><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['items']->value['usercontent']);?>

					</div>
				<?php if ($_smarty_tpl->tpl_vars['items']->value['wxuserimgarr'][0]!=''){?>	
				<div class="yiqisayuserimgs" style="height:205px; position:relative; overflow:hidden; margin-bottom:5px;" >
						
							<img  class="previewImage" dataattr="<?php echo $_smarty_tpl->tpl_vars['items']->value['userimg'];?>
"  sayid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['wxuserimgarr'][0];?>
" />		
						
						<div style="width:100%;background:#000; opacity:0.7;filter:alpha(opacity=70);  position:absolute; bottom:0px;right:0px; height:28px; line-height:28px; ">
							
						</div>
						<div style="position:absolute; color:#ffffff; right:15px; bottom:2px; font-size:14px; ">
							共<?php echo count($_smarty_tpl->tpl_vars['items']->value['wxuserimgarr']);?>
张
						</div>
						
						</div>
				<?php }?>	
					<div style="height:22px; ">						
						<div   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/commentwxuser/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"  class="zzshuliang  zongmsg"><?php echo $_smarty_tpl->tpl_vars['items']->value['pingjiazongshu'];?>
</div>
						<?php echo smarty_function_load_data(array('assign'=>"zanmuyou",'table'=>"wxpjzan",'type'=>"one",'where'=>"commentid=".((string)$_smarty_tpl->tpl_vars['items']->value['id'])." and uid=".((string)$_smarty_tpl->tpl_vars['member']->value['uid'])." ",'fileds'=>"*"),$_smarty_tpl);?>
  
						<div   zanidattr="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" pingjiaattr="<?php if ($_smarty_tpl->tpl_vars['zanmuyou']->value==''){?>0<?php }else{ ?>1<?php }?>" class="zongzanshuliang zongzanshuliang_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
 zzshuliang <?php if ($_smarty_tpl->tpl_vars['zanmuyou']->value==''){?> zongzanshu <?php }else{ ?> zongzanshucur <?php }?>"><?php echo $_smarty_tpl->tpl_vars['items']->value['zongzanshu'];?>
</div>
					</div>
					
				</div>
			</li>
			<?php } ?>
		
		
		<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['togethersaylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
			<li class="wxusersay_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
				<div class="wxusercontent">
					<div class="wxuserinfo">
						<span><img class="userlogo" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['logo'];?>
" /></span>
						<span style="margin-left:7px;display:block;">
							<p class="wxusername <?php if ($_smarty_tpl->tpl_vars['items']->value['sex']==1){?> wxnan <?php }elseif($_smarty_tpl->tpl_vars['items']->value['sex']==2){?> wxnv <?php }else{ ?><?php }?>"><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</p>
							<p class="wxuserxx"><?php echo $_smarty_tpl->tpl_vars['items']->value['streetname'];?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%m-%d %H:%M");?>
</p>
						</span>
					</div>
					<div class="clear"></div>
					
					<div  onclick="caozuousercont(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="wxusercontdr"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/iconfont-chevron-down.png" /></div>
					<div <?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>onclick="wxuserdel(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"<?php }else{ ?>onclick="wxuserjubao(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"<?php }?> class="wxusercomfir wxusercomfir_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" style="display:none;">
						<span panduanattr="<?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>shanchu<?php }else{ ?>jubao<?php }?>"  class="jubaouser"><?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>删除<?php }else{ ?>举报<?php }?></span>
					</div>
					
					<div class="yiqisayusercont">
						<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['items']->value['usercontent']);?>

					</div>
				<?php if ($_smarty_tpl->tpl_vars['items']->value['wxuserimgarr'][0]!=''){?>	
				<div class="yiqisayuserimgs" style="height:205px; position:relative; overflow:hidden; margin-bottom:5px;" >
						
							<img  class="previewImage" dataattr="<?php echo $_smarty_tpl->tpl_vars['items']->value['userimg'];?>
"  sayid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['wxuserimgarr'][0];?>
" />		
						
						<div style="width:100%;background:#000; opacity:0.7;filter:alpha(opacity=70);  position:absolute; bottom:0px;right:0px; height:28px; line-height:28px; ">
							
						</div>
						<div style="position:absolute; color:#ffffff; right:15px; bottom:2px; font-size:14px; ">
							共<?php echo count($_smarty_tpl->tpl_vars['items']->value['wxuserimgarr']);?>
张
						</div>
						
						</div>
				<?php }?>	
					<div style="height:22px; ">						
						<div   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/commentwxuser/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"  class="zzshuliang  zongmsg"><?php echo $_smarty_tpl->tpl_vars['items']->value['pingjiazongshu'];?>
</div>
						<?php echo smarty_function_load_data(array('assign'=>"zanmuyou",'table'=>"wxpjzan",'type'=>"one",'where'=>"commentid=".((string)$_smarty_tpl->tpl_vars['items']->value['id'])." and uid=".((string)$_smarty_tpl->tpl_vars['member']->value['uid'])." ",'fileds'=>"*"),$_smarty_tpl);?>
  
						<div   zanidattr="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" pingjiaattr="<?php if ($_smarty_tpl->tpl_vars['zanmuyou']->value==''){?>0<?php }else{ ?>1<?php }?>" class="zongzanshuliang zongzanshuliang_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
 zzshuliang <?php if ($_smarty_tpl->tpl_vars['zanmuyou']->value==''){?> zongzanshu <?php }else{ ?> zongzanshucur <?php }?>"><?php echo $_smarty_tpl->tpl_vars['items']->value['zongzanshu'];?>
</div>
					</div>
					
				</div>
			</li>
			<?php } ?>
		
		</ul>
	
	</div>
   
   
   
   
   
   
    

 </div>


  
  </div>
 <div  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/fabiaozhuti"),$_smarty_tpl);?>
');"  style="position:fixed; z-index:99; bottom:46px; margin-left:-25px; left:50%;">
	<img style="width:50px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/writecomment.png" />
 </div>

   <div id="cat_zhe" class="cart_zhe"  onclick="quxiaobtnpl();" ></div>
 <!-- 举报弹出层 -->
 <div class="corfimjubao" style="display:none;">
	<p class="jubaotext">确定要举报?</p>
	<p class="jubaoifqdqx">
		<span class="jubaospan" ><span onclick="quedingjubao();" jubaoid="" class="quedingjubao">确定</span></span>
		<span class="jubaospan" ><span  onclick="quxiaobtnpl();" class="quxiaojubao">取消</span></span>
	</p>
 </div>
<!-- 删除弹出层 -->
 <div class="corfimjubaodel" style="display:none;">
	<p class="jubaotextdel">确定要删除?</p>
	<p class="jubaoifqdqxdel">
		<span class="jubaospandel" ><span onclick="quedingshanchu();" shanchuid="" class="quedingjubaodel">确定</span></span>
		<span class="jubaospandel" ><span  onclick="quxiaobtndel();" class="quxiaojubaodel">取消</span></span>
	</p>
 </div>


   <style>
   .cart_zhe {
   display:none;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 666;
  width:100%;
  height:100%;
  background-color: #000;
  opacity: 0.4;
  filter: alpha(opacity=40);
}
   </style> 

   <script>
     wx.config({
      debug: false,
      appId: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['appId'];?>
',
      timestamp: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['timestamp'];?>
',
      nonceStr: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['nonceStr'];?>
',
      signature: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['signature'];?>
',
      jsApiList: [
        'checkJsApi',
        'previewImage'
      ]
  });
  
    // 5.2 图片预览
  //document.querySelector('.previewImage').onclick = function () {
$(".previewImage").click(function(){	
 var userimgs = $(this).attr('dataattr');
	//	 Tmsg(1);
		var stringarray = userimgs.split("@");	
		//Tmsg(stringarray);		
		 wx.previewImage({
		  current: $(this).attr('src'),
		  urls: stringarray
		});
	});

  //};
  
  
   </script>
  <script>
 var wxmemuid = <?php echo $_smarty_tpl->tpl_vars['member']->value['uid'];?>
;
   function quxiaobtnpl(){
		$(".corfimjubao").hide();
		$(".cart_zhe").hide();
		$(".wxusercomfir").hide();
   } 
   function quxiaobtndel(){
		$(".corfimjubaodel").hide();
		$(".cart_zhe").hide();
		$(".wxusercomfir").hide();
   } 

function caozuousercont(commentid){
		$(".wxusercomfir_"+commentid).toggle();
}
function wxuserjubao(commentid){
	// 举报弹出层
	$(".corfimjubao").show();
	$(".cart_zhe").show();
	$(".quedingjubao").attr('jubaoid',commentid);
}


//确定举报
function quedingjubao(){
	var jubaoid = $(".quedingjubao").attr('jubaoid');
	if( wxmemuid == '' ||  wxmenuid == 0 ){
		Tmsg("未登陆，请先登陆~");
		return false;
	}
	$.ajax({
	  	url:'<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/savejubaowxuser/datatype/json"),$_smarty_tpl);?>
',
	  	data:{uid:wxmemuid,jubaoid:jubaoid},
	  	dataType: 'json',
	  	success:function (data, status)
	  	{
		
	  		if(typeof(data.error) != 'undefined')
				{
					if(data.error == false)
					{
					$(".corfimjubao").hide();
					$(".cart_zhe").hide();
					
						Tmsg('举报成功');
							$('.closegb').live("click", function() {   
								 $('.popup').slideToggle('slow',function(){$('#mask').remove();$('.popup').remove();}); 
								
								 
							}); 
				
					 }else{
					 		if(data.msg == '你已经举报过啦~'){
								Tmsg(data.msg);
									$(".corfimjubao").hide();
								$(".cart_zhe").hide();
							}else{
								Tmsg(data.msg);
							}
							
					 		
					}
				}else{
					Tmsg(data.msg);
				} 

	  	},
		  error: function (data, status, e)
		  {
					Tmsg('提交连接失败');
		  }
	  }); 
}
//删除
function wxuserdel(commentid){
	// 举报弹出层
	$(".corfimjubaodel").show();
	$(".cart_zhe").show();
	$(".quedingjubaodel").attr('shanchuid',commentid);
} 
// 确定删除自己的评论
function quedingshanchu(){
	var shanchuid = $(".quedingjubaodel").attr('shanchuid');
	if( wxmemuid == '' ||  wxmenuid == 0 ){
		Tmsg("未登陆，请先登陆~");
		return false;
	}
	$.ajax({
	  	url:'<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/saveshanchuwxuser/datatype/json"),$_smarty_tpl);?>
',
	  	data:{uid:wxmemuid,shanchuid:shanchuid},
	  	dataType: 'json',
	  	success:function (data, status)
	  	{
		
	  		if(typeof(data.error) != 'undefined')
				{
					if(data.error == false)
					{
					$(".corfimjubaodel").hide();
					$(".cart_zhe").hide();
						$(".wxsaycontentlist .wxusersay_"+shanchuid).remove();
						Tmsg('删除成功');
											
					 }else{
					 		Tmsg(data.msg);
					 		
					}
				}else{
					Tmsg(data.msg);
				} 

	  	},
		  error: function (data, status, e)
		  {
					Tmsg('提交连接失败');
		  }
	  }); 
}

   
$(function(){
	$(".zongzanshuliang").click(function(){
		var pingjiavalue = $(this).attr('pingjiaattr');
		var zancommentid = $(this).attr('zanidattr');
	
		var zongzanshu = $(this).text();
	
		if(pingjiavalue == 0){
			zanyige(zancommentid);
		}
		if(pingjiavalue == 1){
			quxiaozanyige(zancommentid);
		}
	});
	
	var wxmemuid = <?php echo $_smarty_tpl->tpl_vars['member']->value['uid'];?>
;
//  赞一个
	function zanyige(zancommentid){
	
	if( wxmemuid == '' ||  wxmenuid == 0 ){
		Tmsg("未登陆，请先登陆~");
		return false;
	}
	
	$.ajax({
	  	url:'<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/saveuserzanjia/datatype/json"),$_smarty_tpl);?>
',
	  	data:{uid:wxmemuid,commentid:zancommentid},
	  	dataType: 'json',
	  	success:function (data, status)
	  	{
		
	  		if(typeof(data.error) != 'undefined')
				{
					if(data.error == false)
					{
					var zongzanshu = $(".zongzanshuliang_"+zancommentid).text();
					 $(".zongzanshuliang_"+zancommentid).removeClass('zongzanshu');
					 $(".zongzanshuliang_"+zancommentid).addClass('zongzanshucur');
					 $(".zongzanshuliang_"+zancommentid).attr('pingjiaattr','1');
					 var shijizzs = Number(zongzanshu)+1;
					
					 $(".zongzanshuliang_"+zancommentid).text(shijizzs);
					 
				
					 }else{
					 		Tmsg(data.msg);
					}
				}else{
					Tmsg(data.msg);
				} 

	  	},
		  error: function (data, status, e)
		  {
					Tmsg('提交连接失败');
		  }
	  }); 
	}
//取消赞一个 
	function quxiaozanyige(zancommentid){
		
	if( wxmemuid == '' ||  wxmenuid == 0 ){
		Tmsg("未登陆，请先登陆~");return false;
	}
	
	$.ajax({
	  	url:'<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/saveuserzanjian/datatype/json"),$_smarty_tpl);?>
',
	  	data:{uid:wxmemuid,commentid:zancommentid},
	  	dataType: 'json',
	  	success:function (data, status)
	  	{
		
	  		if(typeof(data.error) != 'undefined')
				{
					if(data.error == false)
					{
					var zongzanshu = $(".zongzanshuliang_"+zancommentid).text();
					 $(".zongzanshuliang_"+zancommentid).removeClass('zongzanshucur');
					 $(".zongzanshuliang_"+zancommentid).addClass('zongzanshu');					 
					  $(".zongzanshuliang_"+zancommentid).attr('pingjiaattr','0');
					   	 var shijizzs = Number(zongzanshu)-1;					
						$(".zongzanshuliang_"+zancommentid).text(shijizzs);
					
							
					 }else{
					 		Tmsg(data.msg);
					}
				}else{
					Tmsg(data.msg);
				} 

	  	},
		  error: function (data, status, e)
		  {
					Tmsg('提交连接失败');
		  }
	  }); 
	}
});	
 </script>
 
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