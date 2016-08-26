<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:50:02
         compiled from "/data/wwwroot/waimairen/templates/m7/shopcenter/shopask.html" */ ?>
<?php /*%%SmartyHeaderCode:169293793757beb13aa6c494-33293802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68e1fd6d70e8f743a5c7eb0e2fbfd48d91ed342' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/shopcenter/shopask.html',
      1 => 1435397506,
      2 => 'file',
    ),
    'd8d4942e74791dde2e15beeb704ef2cfb8072ead' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/shopcenter.html',
      1 => 1449557852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169293793757beb13aa6c494-33293802',
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
  'unifunc' => 'content_57beb13abafd33_58535587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb13abafd33_58535587')) {function content_57beb13abafd33_58535587($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
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
  	  var mynomenu='baseask';
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
       
       
       
       
       
           
  <!---content right start--->
  <div class="conWaiSet fr">
    <div class="shopSetTop"> <span>留言/评价管理</span> </div>
    <div class="messageset">
      <div class="message_btn">
        <div class="liuyanGl messageCur fl" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopask"),$_smarty_tpl);?>
');"><span >留言管理</span></div>
        <div class="pingjiaGl fl" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/comment"),$_smarty_tpl);?>
');"> <span >评价管理</span> </div>
      </div>
     
      <div class="cl"></div>
    </div>
    <div class="cl"></div>
    <div class="caidanSet"> 
      
      <!---留言管理----->
    
        <div class="mes_box" style="display:block;" id="liuyan">        
            <table cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <th width="40%"> 留言内容 </th>
                  <th width="20%"> 留言者/时间 </th>
                  <th width="20%"> 留言者/时间 </th>
                  <th width="20%"> 回复 </th>
                </tr>
                
                
                
                <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"ask",'showpage'=>"true",'where'=>"shopid = ".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id']),'orderby'=>"id desc"),$_smarty_tpl);?>
 
			           <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
		            	<?php echo smarty_function_load_data(array('assign'=>"userinfo",'table'=>"member",'type'=>"one",'where'=>"uid='".((string)$_smarty_tpl->tpl_vars['items']->value['uid'])."'",'fileds'=>"username"),$_smarty_tpl);?>
  
                
                <tr id="fav_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
                  <td><?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</td>
                  <td><?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==0){?>游客<?php }else{ ?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['username'])===null||$tmp==='' ? '游客' : $tmp);?>
<?php }?><br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d");?>
</td>
                  <td id="showreplya_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"> <?php if (!empty($_smarty_tpl->tpl_vars['items']->value['replycontent'])){?><?php echo $_smarty_tpl->tpl_vars['items']->value['replycontent'];?>
<br><?php echo $_smarty_tpl->tpl_vars['items']->value['replyname'];?>
:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['replytime'],"%Y-%m-%d");?>

		                  	  <?php }else{ ?>未回复<?php }?>  </td>
                  <td id="reload<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
                  <?php if (empty($_smarty_tpl->tpl_vars['items']->value['replycontent'])){?> 	<span style=" background:#27a9e3; padding:8px; color:#fff;"><a href="#reload<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" class="button hui" onclick="replay(this);" data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">回复</a></span> <?php }?>
                  	<span style=" background:#ec7501; padding:8px; color:#fff;"> <a  onclick="javascript:;" data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" class="button delask">删除</a></span></td>
                </tr> 
                 <?php } ?>
                 <tr>
                	<td align="right" style=" padding-right:50px;" colspan="4"><div class="show_page"><ul><?php echo $_smarty_tpl->tpl_vars['list']->value['pagecontent'];?>
</ul></div></td>
                </tr>
              </tbody>
            </table>
         
        </div>
        
        
        
        
   
    </div>
  </div>
  <div class="cl"></div>
  
  <!---content right end---> 
 
       	
       	
       	
       	
       
       	
       	
       	
 <input type="hidden" name="pageshow" id="pageshow" value="1" data="1">  
<script type="text/javascript">
 
$(".delask").live("click", function() {  
	if(confirm('确定操作吗？')){ 
	    var backinfo = ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/delask/datatype/json"),$_smarty_tpl);?>
',{'id':$(this).attr('data')});
	  if(backinfo.flag == true)
	  { 
		  diaerror(backinfo.content); 
	  }else{
	  	 
	  	 $('#fav_'+$(this).attr('data')).remove();
	  	 artsucces('删除成功');  //delask
	 }  
	}
});
	 function replay(obj){
	 	var showcontent ='<div class="replayask" >';
        showcontent +='<table border=0 width="200">';
        showcontent +='<tbody>';
        showcontent +='<tr> ';
        showcontent +='<td style="border:none;text-align:left;"><textarea style="width:100%;height:100px;color:#ddd;" name="replycontent" id="replycontent" placeholder="回复内容">回复内容</textarea></td> </tr> '; 

        showcontent +='<tr>   <td style="border:none;"><a href="#reload'+$(obj).attr('data')+'" class="button fr saveImgInfo" style="margin-right:10px;" onclick="reply();">提交回复</a></td>';
        showcontent +='<input type="hidden" name="askid" id="askid" value="'+$(obj).attr('data')+'"> </tr>  </tbody> </table> </div> '; 
	 	art.dialog({
		id:'showchangdia',
		title:'回复客户咨询', 
    content:showcontent
  });  
}
 $('#replycontent').live("click", function() {   
 	 var checka = $(this).attr('placeholder');
 	 var checkb = $(this).val();
 	 if(checka == checkb){
 	    $(this).val('');
 	    $(this).css('color','#333');
 	 }
 });
 $('#replycontent').blur(function(){
 	     var checka = $(this).attr('placeholder');
 	    var checkb = $(this).val();
 	    if(checka == checkb){
 	      $(this).css('color','#ddd');
 	    }else{
 	       if(checkb == ''){
 	          $(this).val(checka);
 	           $(this).css('color','#ddd');
 	       }else{
 	       	$(this).css('color','#333');
 	      }
 	    }
 	    
  });

function reply(){ 
	var checka = $('#replycontent').val();
	var checkb = $('#replycontent').attr('placeholder');
	if(checka == checkb){
	   alert('请录入回复内容');
	   return false;
	}
  var backinfo = ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/backask/datatype/json"),$_smarty_tpl);?>
',{'askbackid':$('#askid').val(),'askback':$('#replycontent').val()});
	  if(backinfo.flag == true)
	  { 
		 alert(backinfo.content);
	  }else{
	   
	  	 $('#showreplya_'+$('#askid').val()).html($('#replycontent').val());
	  	 $('#fav_'+$('#askid').val()).find('.hui').remove();
	  	 closeart();
	  	// artsucces('回复成功');  
	 }  
}



function closeart()
{
	art.dialog({id: 'showchangdia'}).close(); 
}
  
  
</script>
<script>
$(function(){ 
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
});
   
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