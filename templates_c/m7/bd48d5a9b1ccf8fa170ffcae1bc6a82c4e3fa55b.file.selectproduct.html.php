<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:13:33
         compiled from "/data/wwwroot/waimairen/templates/m7/site/selectproduct.html" */ ?>
<?php /*%%SmartyHeaderCode:170693725257beb6bdc1fa34-40405204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd48d5a9b1ccf8fa170ffcae1bc6a82c4e3fa55b' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/site/selectproduct.html',
      1 => 1450232596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170693725257beb6bdc1fa34-40405204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goodsinfo' => 0,
    'productinfo' => 0,
    'items' => 0,
    'itk' => 0,
    'attrids' => 0,
    'nowselect' => 0,
    'productlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb6bdc8a6b1_26944895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb6bdc8a6b1_26944895')) {function content_57beb6bdc8a6b1_26944895($_smarty_tpl) {?> <?php if ($_smarty_tpl->tpl_vars['goodsinfo']->value['have_det']==1&&count($_smarty_tpl->tpl_vars['productinfo']->value)>0){?>
 
 <div  class="cart_products_content">
           <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	       <div class="cart_pro_all ggglist" style="clear:both;">
		     <div class="cart_pro_label"  ><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</div>
		     <ul class="cart_pro_list productggli" id="productggli_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
			 <?php  $_smarty_tpl->tpl_vars['itk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itk']->key => $_smarty_tpl->tpl_vars['itk']->value){
$_smarty_tpl->tpl_vars['itk']->_loop = true;
?>
			    <li  class="product_li_det <?php if (in_array($_smarty_tpl->tpl_vars['itk']->value['id'],$_smarty_tpl->tpl_vars['attrids']->value)){?>checked<?php }?> " mainid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  childid="<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itk']->value['name'];?>
</li> 
			 <?php } ?> 
			 </ul> 
		   </div>
		   <?php } ?> 
		   <div class="cart_pro_all ggglist" style="clear:both;">
		     <div class="cart_pro_label">单价</div>
		     <div class="cart_pro_list" style="padding-top:5px;" id="product_s_cost"><?php if (empty($_smarty_tpl->tpl_vars['nowselect']->value)){?>请选择规格<?php }else{ ?>￥<?php echo (($tmp = @$_smarty_tpl->tpl_vars['nowselect']->value['cost'])===null||$tmp==='' ? '0' : $tmp);?>
元<?php }?></div>
		   </div>
		   <div class="cart_pro_all ggglist" style="clear:both;">
		     <div class="cart_pro_label">已选数量</div>
		     <div class="cart_pro_list" style="padding-top:5px;"> <font style="padding-left:5px;"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['nowselect']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
 </font> </div>
		   </div> 
		   <div style="clear:both;"></div>
		   <input type="hidden" name="selectproductid" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['nowselect']->value['id'])===null||$tmp==='' ? '0' : $tmp);?>
">
		   <input type="hidden" name="product_shopid" value="<?php echo $_smarty_tpl->tpl_vars['goodsinfo']->value['shopid'];?>
">
		   <input type="hidden" name="product_goodsid" value="<?php echo $_smarty_tpl->tpl_vars['goodsinfo']->value['id'];?>
">
	      <div class="cart_pro_bottom_div"><span class="cart_pro_sure_btn <?php if (empty($_smarty_tpl->tpl_vars['nowselect']->value)){?>disable<?php }?>" id="producttocart" onclick="producttocart();">添加到购物车</span></div>
 <script>
    var productlist = <?php echo json_encode($_smarty_tpl->tpl_vars['productlist']->value);?>
;
 </script>
 </div>
 
 <?php }else{ ?>
 无具体规格
 <?php }?><?php }} ?>