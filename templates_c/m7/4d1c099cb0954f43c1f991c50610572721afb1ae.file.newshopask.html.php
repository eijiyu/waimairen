<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:11:21
         compiled from "/data/wwwroot/waimairen/templates/m7/ask/newshopask.html" */ ?>
<?php /*%%SmartyHeaderCode:209828745957beb639c9e096-76557560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d1c099cb0954f43c1f991c50610572721afb1ae' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/ask/newshopask.html',
      1 => 1432278420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209828745957beb639c9e096-76557560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'items' => 0,
    'sitename' => 0,
    'pagecontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb639d39c30_55844785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb639d39c30_55844785')) {function content_57beb639d39c30_55844785($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
?><ul id="Msgul" scrollpagination="enabled"> 
 
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
 
 <li id="Msg_1647">
         <div class="MTop"><a href="#" class="MTName"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['username'])===null||$tmp==='' ? "游客" : $tmp);?>
</a>  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</div>
         <div class="MMid"><?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</div>
         <div class="MBottom">
            <?php if (!empty($_smarty_tpl->tpl_vars['items']->value['replycontent'])){?>
                        <div id="MR_65" class="MsgReply">
                        	<a href="#" class="MsgCustomerService">
                              (<b style="color:Red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['replyname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['sitename']->value : $tmp);?>
客服</b>)</a>发表于: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['replytime'],"%Y-%m-%d %H:%M:%S");?>

                            <br>
                            <?php echo $_smarty_tpl->tpl_vars['items']->value['replycontent'];?>
<span class="MsgReplyIcon"></span>
                        </div>
            <?php }?>     
        </div>
 </li>
 <?php } ?> 

  </ul>
  <div class="ajaxpage">
  	<?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>

  </div>
 <?php }} ?>