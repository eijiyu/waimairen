<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:11:21
         compiled from "/data/wwwroot/waimairen/templates/m7/site/smallcatding.html" */ ?>
<?php /*%%SmartyHeaderCode:58023321157beb639ac8ea6-48170473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faa53b9bc30b9e7543dad4daf922cafd616501a2' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/site/smallcatding.html',
      1 => 1450235614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58023321157beb639ac8ea6-48170473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cartinfo' => 0,
    'itv' => 0,
    'cxdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb639b27b00_02462057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb639b27b00_02462057')) {function content_57beb639b27b00_02462057($_smarty_tpl) {?>   
    
    
       <div class="cart_title"><i></i>我的菜篮子</div>
   	 	    <div class="cartgoodslist">
   	 	    	 <ul>
   	 	    	 	 <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartinfo']->value['goodslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>  
   
   	 	    	  
   	 	    	 	<li>
   	 	    	 	  <div class="cart_one">
					  <div class="cart_goodsname">
						<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?><font style="font-size:10px;color:#ccc;"><?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['attrname'];?>
</font><?php }?>
					   <i onclick="removesupplierdish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
);"></i> 
   	 	    	 	  <div class="cart_tow">
   	 	    	 	      <span class="cp_pre" onclick="<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>removeoneproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }else{ ?>removeonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }?>">-</span>
   	 	    	 	      <input type="text" readonly="readonly" class="cinput" value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['count'];?>
">
   	 	    	 	      <span class="cp_next" onclick="<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>uponeproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1,this);<?php }else{ ?>uponedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }?>">+</span>
   	 	    	 	      <span class="cp_much">￥<?php echo $_smarty_tpl->tpl_vars['itv']->value['cost'];?>
</span>
   	 	    	 	  </div>	
   	 	    	 	</li>
   	 	    	 	<?php } ?> 
   	 	    	 	 
   	 	    	</ul>
   	 	    </div>
   	 	    <div class="cart_bottom">
   	 	    	  <div class="cart_tj">
   	 	    	  	 <div class="cart_sum"><label>商品总价</label><span><?php echo $_smarty_tpl->tpl_vars['cartinfo']->value['sum'];?>
元</span></div>
   	 	    	  	 <?php if (isset($_smarty_tpl->tpl_vars['cxdata']->value['gzdata'])){?>
   	 	    	  	 <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cxdata']->value['gzdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
   	 	    	  	  <div class="cart_cx"><em><?php echo $_smarty_tpl->tpl_vars['itv']->value;?>
</em></div>
   	 	    	  	 <?php } ?> 
   	 	    	  	 <?php }?>
   	 	    	  	
   	 	    	  	</div>
   	 	    	    <input type="button" class="next bg" value="仅订桌位" onclick="outdiv_position()"><input type="button" class="next bg" value="下单订位" onclick="outdiv_cart()">
   	 	    </div> 
<?php }} ?>