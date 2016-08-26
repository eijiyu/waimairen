<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:50:41
         compiled from "/data/wwwroot/waimairen/templates/m7/order/printbyshop.html" */ ?>
<?php /*%%SmartyHeaderCode:153500118357beb1613c8427-00008891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea21cb3c987a70075f4d510051b9051f488cb49' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/order/printbyshop.html',
      1 => 1432278418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153500118357beb1613c8427-00008891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goodslist' => 0,
    'items' => 0,
    'bagcost' => 0,
    'sumcost' => 0,
    'phone' => 0,
    'address' => 0,
    'contactname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb161406c62_68288369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb161406c62_68288369')) {function content_57beb161406c62_68288369($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> -乐小二生活服务有限公司</title>
 
 </head> 
<body>
<table width="300" border="0" bordercolor="#333333">
  <tr>
    <td>商品名称</td>
    <td><div align="center">商品单价</div></td>
    <td><div align="center">商品数量</div></td>
    <td><div align="center">小计</div></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</td>
    <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
</div></td>
    <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['shuliang'];?>
</div></td>
    <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['xiaoij'];?>
</div></td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="4"> 打包费:<?php echo $_smarty_tpl->tpl_vars['bagcost']->value;?>
</td>
  </tr>
   <tr>
    <td colspan="4"> 总价:<?php echo $_smarty_tpl->tpl_vars['sumcost']->value;?>
</td>
  </tr>
  <?php if (!empty($_smarty_tpl->tpl_vars['phone']->value)){?>
  <tr>
     <td colspan="4"> 联系电话:<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
  </tr>
  <?php }?>
  <?php if (!empty($_smarty_tpl->tpl_vars['address']->value)){?>
  <tr>
     <td colspan="4"> 地址:<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td>
  </tr>
  <?php }?>
  <?php if (!empty($_smarty_tpl->tpl_vars['contactname']->value)){?>
  <tr>
     <td colspan="4"> 联系人:<?php echo $_smarty_tpl->tpl_vars['contactname']->value;?>
</td>
  </tr>
  <?php }?>
</table> 
</body>
</html><?php }} ?>