<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:48:52
         compiled from "/data/wwwroot/waimairen/templates/m7/shopcenter/goodslist.html" */ ?>
<?php /*%%SmartyHeaderCode:67840156457beb0f4b4e863-57538932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfae96aca6e922e210965f44a841a3330f333f5e' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/shopcenter/goodslist.html',
      1 => 1452859540,
      2 => 'file',
    ),
    'd8d4942e74791dde2e15beeb704ef2cfb8072ead' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/shopcenter.html',
      1 => 1449557852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67840156457beb0f4b4e863-57538932',
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
  'unifunc' => 'content_57beb0f4c73707_66304512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb0f4c73707_66304512')) {function content_57beb0f4c73707_66304512($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
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
  	var mynomenu='basemenu';
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
       
       
       
       
       
           
 
 
	<img id="goodmodule1" class="showmoduleimg" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/goodmodule1.png" />
	<img id="goodmodule2"  class="showmoduleimg" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/goodmodule2.png" />
 
 
  <!---content right start---> 
        <div class="conWaiSet fr">
        	
            <div class="shopSetTop">
            	<span>菜单设置</span>
            </div>
            
            <div class="orderset">
			
			
			      <div class="cl"></div>
				<div class="shgiftset">
                    	<div class="shgift_left">
                        	<span>商品模板</span>
                        </div>
                        <div class="shgift_right">
                           <div  style="float:left;" ><input type="radio" name="goodlistmodule" value="0" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['goodlistmodule']==0){?> checked <?php }?> >1*1</div>
						   <img id="defaultgoodmoduleimg" style="float:left;cursor:pointer; width:30px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/iconfont-tupian.png" />
                           <div  style="float:left;" ><input type="radio" name="goodlistmodule" value="1" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['goodlistmodule']==1){?> checked <?php }?> >1*2</div>
						    <img  id="newgoodmoduleimg"  style="float:left;cursor:pointer; width:30px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/iconfont-tupian.png" />
                        </div> 
						 <div class="shgift_but">
                           <span>保存</span>
                        </div>
                        <div class="cl"></div>
                    </div>
				  <style>
				  .showmoduleimg{display:none;width:375px; height:667px; position:absolute; z-index:99999;top:50%; left:50%; margin-left:-187px; margin-top:-333px;}
				  .shgiftset{ position:absolute; top:25px; left:20px; color:#ffffff; height: 38px; line-height: 38px; }
				  .shgiftset .shgift_left{ float:left; height: 38px;  padding:0px 10px;  line-height: 38px;    text-align: center;  margin-right:10px;  background: #EC7501;}
				  .shgiftset .shgift_right{ float:left;margin-right:20px; }
				  .shgiftset .shgift_end{ float:left;margin-right:20px; }
				  .shgiftset .shgift_but{ float:left; height: 38px; cursor:pointer;  padding:0px 20px;  line-height: 38px;    text-align: center;  margin-right:10px;  background: #27a9e3;}
				  </style>
			<script>
				$(".shgift_but").click(function(){
					var goodlistmodule = $("input[name=goodlistmodule]:checked").val();
 				 
				   var backinfo = ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/savegoodsmoduletype/datatype/json"),$_smarty_tpl);?>
',{'moduletype':goodlistmodule,'shopid':<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
});
					if(backinfo.flag == true)
					{
					//	hideop();
						diaerror(backinfo.content); 
					}else{
					//	hideop();
						 artsucces('保存成功');
						location.reload();  
					}
		
					
				});
				$("#defaultgoodmoduleimg").hover(function(){
					 $("#goodmodule1").show();
 				},function(){
					 $("#goodmodule1").hide();
				});
				$("#newgoodmoduleimg").hover(function(){
					$("#goodmodule2").show();
 				},function(){
					$("#goodmodule2").hide();
 				});
			</script>
			

            	<div class="addFenlei">
                <span class="fl">
                	<input type="text" id="shoptypename" name="shoptypename" value=""  /></span>
                    <div class="addButton curbtn fl"  id="add_FoodType"></div>
                </div>
                
                  <div class="cl"></div>
            </div>
             <div class="cl"></div>
                       
                <form action="" method="post">
                 <div class="caidanSet">
        			
                    <div class="caidanTitle" style="line-height:42px; height:auto;">
                	<ul>
                		<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
                    	<li  data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  dataname="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" dataorder="<?php echo $_smarty_tpl->tpl_vars['items']->value['orderid'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</li> 
                     <?php } ?>
                    </ul>
                    <div class="editGtype" id="editGtype">
                         <div class="delGDtype curbtn" ></div>
                         <div class="editGDtype curbtn"></div>
                    
                    </div>
                </div>
                  <div class="cl"></div>
                       
                	<div class="div_orderList">
                    	
                        <div class="div_orderList_show">
                    
                        <div class="orderList_show_goodli">
                            <div class="ord_goodname">
                                <span>食品名称</span>
                            </div>
                            <div class="ord_price">
                                 <span>价格（元）</span>
                            </div>
                            <div class="ord_dbf">
                                 <span>打包费（元）</span>
                            </div>
                            <div class="ord_day_num" style="width:80px;">
                                 <span>每日数量</span>
                            </div>
							<div class="ord_day_order" style="width:79px;">
                                 <span>排序</span>
                            </div>
                             <div class="order_caozuo">
                                 <span>操作</span>
                            </div>
                        </div>
                        
                        <div class="cl"></div>
                        <style>
						.ord_day_order{height: 67px;
float: left;
line-height: 67px;
font-size: 14px;
color: #aaaaaa;
font-family: "宋体";
font-weight: 700;
text-align: center;
border-right: 1px solid #45423e;
border-left: 1px solid #4c4a48;
}

.cd_order{height: 50px;
float: left;
line-height: 50px;
font-size: 14px;
color: #c3c3c3;
font-family: "宋体";
text-align: center;
border-right: 1px solid #4c4a48;}
						</style>
                      <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
		 <div id="subaddtype_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">  
                      <?php  $_smarty_tpl->tpl_vars['ite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ite']->key => $_smarty_tpl->tpl_vars['ite']->value){
$_smarty_tpl->tpl_vars['ite']->_loop = true;
?>  
							<div class="order_list	listgoodsdet goodsdiv_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
  goodstr_<?php echo $_smarty_tpl->tpl_vars['ite']->value['parentid'];?>
"   data="<?php echo $_smarty_tpl->tpl_vars['ite']->value['id'];?>
" id="goodstr_<?php echo $_smarty_tpl->tpl_vars['ite']->value['id'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['ite']->value['have_det'];?>
" >
								 <div class="order_goodlist">
									<div class="cd_name">
										<p class="name"><?php echo $_smarty_tpl->tpl_vars['ite']->value['name'];?>
</p>
									</div>
									<div class="cd_price">
										<p class="cost"><?php echo $_smarty_tpl->tpl_vars['ite']->value['cost'];?>
</p>  
									</div>
									<div class="cd_dbf">
										 <p class="bagcost"><?php echo $_smarty_tpl->tpl_vars['ite']->value['bagcost'];?>
</p>  
									</div>
									<div class="cd_dayNum"style="width:80px;">
										 <p class="count"><?php echo $_smarty_tpl->tpl_vars['ite']->value['count'];?>
</p>   
									</div>
									  <div class="cd_order"style="width:79px;">
										 <p class="good_order"><?php echo $_smarty_tpl->tpl_vars['ite']->value['good_order'];?>
</p>   
									</div>
									 <div class="cd_caozuo">
									 
										 <span style=" background:#27a9e3; padding:8px; color:#fff;" class="curbtn" onclick="editgoods('<?php echo $_smarty_tpl->tpl_vars['ite']->value['id'];?>
');">编辑</span>
										  <span style=" background:#ec7501; padding:8px; color:#fff;" class="curbtn" onclick="delgoods('<?php echo $_smarty_tpl->tpl_vars['ite']->value['id'];?>
');">删除</span>
									</div>
							   </div> 
							</div>
                       <?php } ?>
		</div>
                      <?php } ?>
                      
                      <div class="order_list"  id="additem" style="display:none;">
                      	    <input type="hidden" name="adgoodstypeid" value="">
                       		 <div class="order_goodlist">
                                <div class="cd_name">
                                    <input style="width:50%;" type="text" value="" name="adgoodname" placeholder="商品名称"/>
                                </div>
                                <div class="cd_price">
                                   <input  style="width:50%;" type="text" value="" name="adgoodcost" placeholder="商品单价"/>
                                </div>
                                <div class="cd_dbf">
                                    <input  style="width:50%;" type="text" value="" name="adgoodbagcost" placeholder="打包费"/>  
                                </div>
                                <div class="cd_dayNum" style="width:80px;">
                                    <input  style="width:50%;" type="text" value="" name="adgoodcount" placeholder="商品数量"/>   
                                </div>
								  <div class="cd_order" style="width:79px;">
                                    <input  style="width:50%;" type="text" value="" name="adgoodpaixu" placeholder="商品排序"/>   
                                </div>
                                 <div class="cd_caozuo">
                                     <span style=" background:#27a9e3; padding:8px; color:#fff;" class="curbtn" id="saveaddgoods">保存</span>
                                     
                                </div>
                           </div> 
                      </div>
                      <div class="order_list" style="background:#303337;">
                       		 <div class="order_goodlist">
                              <div class="cd_name" style=" border:none;">
                                  <span style=" background:#27a9e3; padding:10px; color:#fff;" class="curbtn" id="addgoods">添加菜品</span>
                              </div>
							  
							     <div class="cd_name" style=" border:none;">
                                  <span style=" background:#F60; padding:10px; color:#fff;" class="curbtn" onclick="alltoshopgoods();" >从商品库中快速添加商品</span>
                              </div>
                            
                           </div>
                    
                      </div>
                      
                        <div class="cl"></div>
                        
                        
                     </div>
                    	
                        
                        
                        
                    </div>
                    
       			 </div>
                 
                 
              </form>  
                
                
        </div>
        <div class="cl"></div>
        
        
       
        
        
        <!---content right end---> 
 
 
 
 
 
 
  <script>
   	
 // 商品库
 
 function alltoshopgoods(){
	var fenleiid =  $('.caidanTitle li.cur').attr('data');
	 dialogs = art.dialog.open(siteurl+'/index.php?ctrl=shopcenter&action=alltoshopgoods&fenleiid='+fenleiid,{height:'500px',width:'700px'},false);
	 dialogs.title('从商品库中快速添加商品到所属分类下'); 
}
 
 function deltogoods(goodsid,fenleiid){

	$(' .goodstr_'+goodsid).remove(); 
  }
function addtogoods(goodsinfo,fenleiid){
		
	var html = '<div class="order_list	listgoodsdet goodsdiv_'+goodsinfo.id+'  goodstr_'+goodsinfo.id+'  " data="'+goodsinfo.id+'" id="goodstr_'+goodsinfo.id+'" >';
      html += '<div class="order_goodlist">';
      html += ' <div class="cd_name">';
      html += '<p class="name">'+goodsinfo.name+'</p>';
      html += '</div>';
      html += '<div class="cd_price">';
      html += '<p class="cost">'+goodsinfo.cost+'</p>';
      html += '</div>';
	     html += '<div class="cd_dbf">';
      html += '<p class="bagcost">0</p>';
      html += '</div>';
	   html += '<div class="cd_dayNum"style="width:80px;">';
      html += '<p class="count">100</p>';
      html += '</div>';
	     html += '<div class="cd_order"style="width:79px;">';
      html += '<p class="good_order">0</p>';
      html += '</div>';
	       html += '<div class="cd_caozuo">';
      html += '<span style=" background:#27a9e3; padding:8px; color:#fff;" class="curbtn" onclick="editgoods('+goodsinfo.id+');">编辑</span>';
      html += '<span style=" background:#ec7501; padding:8px; color:#fff;" class="curbtn" onclick="delgoods('+goodsinfo.id+');">删除</span>';
      html += '</div>';
      html += '</div>';
      html += '</div>';
	   $('#subaddtype_'+fenleiid).append(html); 
}
 
 
 
 
 
   </script>     
        
 
 
 
 
 
 
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
<script>
$(function(){
//删除分类
var checkisexti =  $('.caidanTitle').find('li').length;
if(checkisexti == 0){
 
  $('.caidanSet').hide();
}
$('.delGDtype').live('click',function(){
	if(confirm('确定删除商品操作吗？删除后将同时删除该分类下的所有商品')){ 
		var allobj = $(".caidanSet").find('li');
		var typeid = 0;
		for(var i=0;i< $(allobj).length;i++){ 
		   if($(allobj).eq(i).hasClass("cur") ==  true){
		      typeid = $(allobj).eq(i).attr('data');
		    }	
		}
		 
    myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/delgoodstype/datatype/json"),$_smarty_tpl);?>
',{'addressid':typeid});
  }
});	
//编辑分类
$('.editGDtype').live('click',function(){
	var allobj = $(".caidanSet").find('li');
		var typeid = 0;
		var typename = '';
		var typeorder = '';
		for(var i=0;i< $(allobj).length;i++){ 
		   if($(allobj).eq(i).hasClass("cur") ==  true){
		      typeid = $(allobj).eq(i).attr('data');
		      typename = $(allobj).eq(i).attr('dataname');
		      typeorder = $(allobj).eq(i).attr('dataorder');
		    }
		}
	var	htmls = '<form method="post" id="doshwoform" action="#" style="text-align:center;"><table>';
	htmls += '<tbody><tr>';
	htmls += '<td height="50px">分类名称:</td>';
	htmls += '<td> <input type="text" name="newtypename" value="'+typename+'" style="width:100px;"></td></tr>';
	htmls +='<tr><td height="50px">排序ID:</td><td style="text-align:left;"> <input type="text" name="newtypeorderid" value="'+typeorder+'" style="width:50px;"></td></tr>'
	htmls += '</tbody></table> ';
  htmls += '<input type="hidden" value="'+typeid+'" name="newtypeid"> ';
	htmls += '<input type="button" value="确认提交" class="button" id="updategoodstype" ></form>';
  art.dialog({
    id: 'testID3',
    title:'保存店铺分类',
    content: htmls
  });
	
	
});
//保持编辑分类
$('#updategoodstype').live('click',function(){
 
	  showop('保存商品分类信息');
	   myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/editgoodstype/datatype/json"),$_smarty_tpl);?>
',{'what':'allinfo','name':$('input[name="newtypename"]').val(),'orderid':$('input[name="newtypeorderid"]').val(),'addressid':$('input[name="newtypeid"]').val()}); 
});
	
//添加商品分类
$("#add_FoodType").live("click", function() {   
	if($('#shoptypename').val() == ''||$('#shoptypename').val() ==null){
		diaerror('分类不能空'); 
	}else{
		var mm = $('#shoptypename').val();
		$('#shoptypename').val('')
	   myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/savegoodstype/datatype/json"),$_smarty_tpl);?>
',{'name':mm,'orderid':$(".caidanSet").find('li').length}); 
  }
});


//导航条切换	
$(".caidanSet ul li").click(function(){
						$(this).addClass('cur').siblings().removeClass('cur');
					   var tempid = $(this).attr('data');
					   $('.listgoodsdet').hide();
					  $('.goodsdiv_'+tempid).show();
					  $('input[name="adgoodstypeid"]').val(tempid);
					  $('#additem').hide();
					  //获取坐标
				//
				var fleft = $('.caidanSet').offset().left;
				var zleft = $(this).offset().left;
				var resulte = Number(zleft) -Number(fleft);
				$('#editGtype').css('margin-left',resulte);
			 
					  
						
});	
$(".caidanSet").find("li").eq(0).trigger("click");//设置默认第一个
					
//快捷编辑商品					
$(".listgoodsdet p").live("click", function() {  
	var is_save = $(this).hasClass('now_edit');
	var typename = $(this).attr('class');
	var doc = $(this).text();
	 if(is_save){
	 	 
	 }else{
	 	$(this).addClass('now_edit');
	 	var goodsid = $(this).parent().parent().parent().attr('data');
		var havedet = $(this).parent().parent().parent().attr('have_det');
	 	 
		 if(typename == 'cost' || typename=='count'){
		     if(havedet == 1){
			     alert('多规格,请到编辑里编辑子商品');
				 return false;
			 }
		 }
	 	 $(this).html('<input style="width:45%;" type="text" value="'+doc+'" id="'+typename+goodsid+'" \/> <span class="curbtn" onclick="savegoodtxt(\''+goodsid+'\',\''+typename+'\');">保存<\/span>');
	 } 
});

//显示添加商品
$('#addgoods').live('click',function(){
	$('#additem').show();
});
//提交添加商品
$('#saveaddgoods').live('click',function(){
	var typeid =   $('input[name="adgoodstypeid"]').val(); 
	var data1 = $('input[name="adgoodname"]').val(); 
	var data2 = $('input[name="adgoodcost"]').val(); 
	var data3 = $('input[name="adgoodbagcost"]').val(); 
	var data4 = $('input[name="adgoodcount"]').val(); 
	var data5 = $('input[name="adgoodpaixu"]').val(); 
	if(typeid == ''){
	 alert('请选择商品类型');
	 return false;
	}
	if(data1 == ''){
	  alert('请录入商品名称');
	  return false;
	} 
		if(confirm('确定操作吗？')){ 
			 showop('保存商品信息');  
	    var backinfo = ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/addgoods/datatype/json"),$_smarty_tpl);?>
',{'name':data1,'typeid':typeid,'cost':data2,'bagcost':data3,'count':data4,'good_order':data5});
	    if(backinfo.flag == true)
	    {
		      hideop();
		     diaerror(backinfo.content); 
	     }else{
	  	    hideop(); 
	  	    var htmldata = '<div class="order_list	listgoodsdet goodsdiv_'+backinfo.content.typeid+'" data="'+backinfo.content.id+'" id="goodstr_'+backinfo.content.id+'" have_det="'+backinfo.content.have_det+'">';
              htmldata += ' <div class="order_goodlist">';
              htmldata += '       <div class="cd_name">';
              htmldata += '          <p class="name">'+backinfo.content.name+'</p>';
              htmldata += '       </div>';
              htmldata += '      <div class="cd_price">';
              htmldata += '          <p class="cost">'+backinfo.content.cost+'</p>  ';
              htmldata += '     </div>';
              htmldata += '     <div class="cd_dbf">';
              htmldata += '          <p class="bagcost">'+backinfo.content.bagcost+'</p>  ';
              htmldata += '      </div>';
              htmldata += '      <div class="cd_dayNum" style="width:80px;">';
              htmldata += '           <p class="count">'+backinfo.content.count+'</p>   ';
              htmldata += '      </div>';
			    htmldata += '      <div class="cd_order" style="width:79px;">';
              htmldata += '           <p class="good_order">'+backinfo.content.good_order+'</p>   ';
              htmldata += '      </div>';
              htmldata += '       <div class="cd_caozuo">';
              htmldata += '          <span style=" background:#27a9e3; padding:8px; color:#fff;" class="curbtn" onclick="editgoods(\''+backinfo.content.id+'\');">编辑</span>';
              htmldata += '            <span style=" background:#ec7501; padding:8px; color:#fff;" class="curbtn" onclick="delgoods(\''+backinfo.content.id+'\');">删除</span>';
              htmldata += '      </div>';
              htmldata += '  </div> ';
              htmldata += '</div>'; 
          $('#additem').before(htmldata); 
          $('input[name="adgoodname"]').val(''); 
	           $('input[name="adgoodcost"]').val(''); 
	             $('input[name="adgoodbagcost"]').val(''); 
	           $('input[name="adgoodcount"]').val('');
	            $('#additem').hide();
	  	    artsucces('保存成功');
		     
	     } 
		}
	 
});
//删除商品



 		
});

function savegoodtxt(goodsid,typename){ 
  	var values = $('#'+typename+goodsid).val();
	   showop('保存商品信息');
	  var backinfo = ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/updategoods/datatype/json"),$_smarty_tpl);?>
',{'controlname':typename,'goodsid':goodsid,'values':values});
	  if(backinfo.flag == true)
	  {
		  hideop();
		  diaerror(backinfo.content); 
	  }else{
	  	 hideop();
	  	 $('#goodstr_'+goodsid).find('.'+typename).text(values);
	  	 $('#goodstr_'+goodsid).find('.'+typename).removeClass('now_edit');
	  	 artsucces('保存成功');  
	 } 
}

function delgoods(gid){
   if(confirm('确定删除该商品操作吗？')){ 
	var backinfo = ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/delgoods/datatype/json"),$_smarty_tpl);?>
',{'id':gid});
	    if(backinfo.flag == true)
	    {
		    hideop();
		  diaerror(backinfo.content); 
	     }else{
	  	    hideop();
	  	    $('#goodstr_'+gid).remove();
	  	    artsucces('删除成功'); 
	     }  
	}
}
var dialogs ;
function editgoods(gid){
		 dialogs = art.dialog.open(siteurl+'/index.php?ctrl=shopcenter&action=goodsone&gid='+gid,{height:'760px',width:'1029px'},false);
	 	 dialogs.title('编辑商品'); 
}
function refreshgoods(info){
	 dialogs.close();
	 $('#goodstr_'+info.id).remove();
	 
	var htmldata = '<div class="order_list	listgoodsdet goodsdiv_'+info.typeid+'" data="'+info.id+'" id="goodstr_'+info.id+'" have_det="'+info.have_det+'">';
              htmldata += ' <div class="order_goodlist">';
              htmldata += '       <div class="cd_name">';
              htmldata += '          <p class="name">'+info.name+'</p>';
              htmldata += '       </div>';
              htmldata += '      <div class="cd_price">';
              htmldata += '          <p class="cost">'+info.cost+'</p>  ';
              htmldata += '     </div>';
              htmldata += '     <div class="cd_dbf">';
              htmldata += '          <p class="bagcost">'+info.bagcost+'</p>  ';
              htmldata += '      </div>';
              htmldata += '      <div class="cd_dayNum" style="width:80px;">';
              htmldata += '           <p class="count">'+info.count+'</p>   ';
              htmldata += '      </div>';
			      htmldata += '      <div class="cd_order" style="width:79px;">';
              htmldata += '           <p class="good_order">'+info.good_order+'</p>   ';
              htmldata += '      </div>';
              htmldata += '       <div class="cd_caozuo">';
              htmldata += '          <span style=" background:#27a9e3; padding:8px; color:#fff;" class="curbtn" onclick="editgoods(\''+info.id+'\');">编辑</span>';
              htmldata += '            <span style=" background:#ec7501; padding:8px; color:#fff;" class="curbtn" onclick="delgoods(\''+info.id+'\');">删除</span>';
              htmldata += '      </div>';
              htmldata += '  </div> ';
              htmldata += '</div>'; 
          $('#additem').before(htmldata); 
	var allobj = $(".caidanSet").find('li');
		var typeid = 0;
		for(var i=0;i< $(allobj).length;i++){ 
		   if($(allobj).eq(i).hasClass("cur") ==  true){
		      typeid = $(allobj).eq(i).attr('data');
		    }
		}
		if(typeid != info.typeid){
			$('#goodstr_'+info.id).hide();
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