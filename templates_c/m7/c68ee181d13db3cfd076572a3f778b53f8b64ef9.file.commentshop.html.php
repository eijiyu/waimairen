<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:11:21
         compiled from "/data/wwwroot/waimairen/templates/m7/order/commentshop.html" */ ?>
<?php /*%%SmartyHeaderCode:207023264057beb639cb3846-31168399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68ee181d13db3cfd076572a3f778b53f8b64ef9' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/order/commentshop.html',
      1 => 1453280288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207023264057beb639cb3846-31168399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'items' => 0,
    'userlogo' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'pagecontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb639d66543_83387434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb639d66543_83387434')) {function content_57beb639d66543_83387434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
?>
 <?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
  <ul id="Comcon" style="padding:19px;" scrollpagination="enabled">
  <style>
  .comcomleft{float:left;width:64px; height:76px; }
  .comcomleft p{width:64px; text-align:center;}
  .comcomzuo {width:52px; height:52px; padding:6px; border:1px #e9e9e9 solid;}
  .comcomright{position:relative;float:right; border:1px solid #e9e9e9; padding:15px 10px; width:763px; height:auto; }
  .comcomrightimg{position:absolute;left:-10px; top:20px;}
  
  .pingjiaUL{width:870px; hieght:auto;}
  .pingjiaUL{ margin-bottom:16px;}
  </style>
  
  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>  
  <li>
  <div  class="pingjiaUL" >
	<div class="comcomleft">
		<div class="comcomzuo">
		
		<img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['logo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userlogo']->value : $tmp);?>
" width="52" height="52">
		
		</div>
		<p><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</p>
	</div>
		<div class="comcomright">
			<div class="comcomrightimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/lefticonBG.png" /></div>
			<div style="margin-left:15px; height:25px; border-bottom:1px dashed  #e8e8e8;">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value['point']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> 
												    <div class="star_div" style="float:left;width:15px;"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/xinxin01.png" width="13" height="13"></div>
												    <?php endfor; endif; ?> 
			</div>
			<div style="margin:8px 15px;;">
				<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['content'])===null||$tmp==='' ? "我的最爱！" : $tmp);?>
</span>
			</div>
			<div style="margin:8px 50px;color:#aaaaaa;">
				<span> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span>
			</div>
			
			<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['replycontent'])){?>
			<div style="background:#f7f7f7;padding:4px 0px;margin-top:4px;color:#666666;"> 
				<div style="margin:8px 15px; text-align:right;">
					<span>商家回复：<?php echo $_smarty_tpl->tpl_vars['items']->value['replycontent'];?>
</span>
				</div>
				<div style="margin:8px 50px;color:#aaaaaa;text-align:right;">
					<span> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['replytime'],"%Y-%m-%d %H:%M:%S");?>
</span>
				</div>
			</div>
			<?php }?>
			
		</div>
</div>
  </li>
    <div style="clear:both;"></div>
  <?php } ?>

<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>   




<li id="Com_203" style="display:none;">
       <div class="COBLeft"><a href="#"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['logo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userlogo']->value : $tmp);?>
" width="50" height="50"></a></div>
        <div class="COBRight">
          <div class="COTitle"><a href="#"><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</a>  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
 </div>
           <div class="COLevel"><span class="Level8"></span>评分： <i><?php echo $_smarty_tpl->tpl_vars['items']->value['point'];?>
</i><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value['point']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> 
												    <div class="star_div" style="float:left;width:15px;"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/xinxin01.png" width="13" height="13"></div>
												    <?php endfor; endif; ?> </div>
           <div class="COLevel"><span class="Level8"></span>菜品：<em><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</em></div>
           <div class="COInfo"><?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</div>
         </div><div style="clear:both;"></div>
</li>
<?php } ?>		
 </ul>		
  <div class="ajaxpage" style="float: right;
width: auto;
margin-right: 50px;">
  	<?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>

  </div>
  <?php }else{ ?>
  <div style="padding: 20px;  font-size: 14px;  line-height: 200%;">
    暂无评价
  </div>

   
  <?php }?><?php }} ?>