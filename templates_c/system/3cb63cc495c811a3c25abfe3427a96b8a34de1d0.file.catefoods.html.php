<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:14:25
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/catefoods.html" */ ?>
<?php /*%%SmartyHeaderCode:149521687257beb6f1cf50a0-04836965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb63cc495c811a3c25abfe3427a96b8a34de1d0' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/catefoods.html',
      1 => 1452824634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149521687257beb6f1cf50a0-04836965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cateinfo' => 0,
    'shopinfo' => 0,
    'catefoodslist' => 0,
    'items' => 0,
    'shoplogo' => 0,
    'opentype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb6f1e0f061_53797759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb6f1e0f061_53797759')) {function content_57beb6f1e0f061_53797759($_smarty_tpl) {?> <div class="ordisordtit"><h3><?php echo $_smarty_tpl->tpl_vars['cateinfo']->value['name'];?>
</h3></div>
 <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['goodlistmodule']==0){?>
 
 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catefoodslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
 
	  <div class="ordisordBox goodsli"   goodname="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
"   id="gidli_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
"  style=" position:relative; ">
	  
		   <div class="ordisord">
			<ul class="ordisordet">
			 <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"  ><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
"></li>
			 <div   style="padding-left:67px; padding-right:0px; margin-top:-73px;" >
			 <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"	style=" width: 100%;">
			  <ul class="ordisordC" >
			   <li   style="    width: 100%;height:24px;text-overflow: ellipsis;  overflow: hidden;  white-space: nowrap;  outline: 0!important;"><h3   style="    width: 100%;height:24px;text-overflow: ellipsis;  overflow: hidden;  white-space: nowrap;  outline: 0!important;"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</h3></li>
			   <li><span>月销<?php echo $_smarty_tpl->tpl_vars['items']->value['sellcount'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['goodattr'])){?><?php echo $_smarty_tpl->tpl_vars['items']->value['goodattr'];?>
<?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'])){?><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?><?php }?></span></li>
			   <li><b>￥<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
</b><?php if (!empty($_smarty_tpl->tpl_vars['items']->value['goodattr'])){?>/<?php echo $_smarty_tpl->tpl_vars['items']->value['goodattr'];?>
<?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'])){?>/<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?><?php }?>
			   <?php if ($_smarty_tpl->tpl_vars['items']->value['is_cx']==1){?><del><?php echo $_smarty_tpl->tpl_vars['items']->value['cost']/($_smarty_tpl->tpl_vars['items']->value['zhekou']/10);?>
元</del><?php }?></li>
			  <?php if ($_smarty_tpl->tpl_vars['items']->value['is_cx']==1){?> <li><a><?php echo $_smarty_tpl->tpl_vars['items']->value['zhekou'];?>
折</a></li><?php }?>
			  </ul>
			 </li>
			 </div>
			 <li style="position:absolute;top:0px; right:5px;">
			  <ul class="ordisordR">  
			  <?php if ($_smarty_tpl->tpl_vars['opentype']->value!=2&&$_smarty_tpl->tpl_vars['opentype']->value!=3){?>
			  <span class="shopdayangstatus">休息中</span>
			  <?php }else{ ?>
				 
				 <?php if ($_smarty_tpl->tpl_vars['items']->value['count']>0){?> 
					 <?php if ($_smarty_tpl->tpl_vars['items']->value['have_det']==1){?>  
						<li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"   class="moreguige">可选规格</li>
					 <?php }else{ ?>
							<div class="righ_l_b_btn" >  
							<div class="righ_l_b_btn_moren"    data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopid'];?>
" id="gid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['items']->value['have_det'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
">
							<li><i class="ordenabotR"></i></li>
							</div>
							<div class="righ_l_b_btn_hover" style="display:none;">
							<span class="right_l_btn_left"   data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['items']->value['have_det'];?>
">
								<li><i class="ordenabotL"></i></li>
							</span>
							 <li><input class="right_l_btn_nub" readonly id="gshu_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" type="text" value="0"></li>
							<span class="right_l_btn_right"   id="gid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['items']->value['have_det'];?>
">
								 <li><i class="ordenabotR"></i></li>
							</span></div>
						  </div>
					 <?php }?> 
				  <?php }else{ ?>
				  <li style="color:#cccccc;"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"   class="moreguige">售完</li>
				  
				  <?php }?>
				   
				   
			  <?php }?>
			 
			  </ul>
			 </li>
			</ul>
		<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['descgoods'])){?>	<p><?php echo $_smarty_tpl->tpl_vars['items']->value['descgoods'];?>
</p> <?php }?>
		   </div>
	 
	  </div> 

		  
<?php } ?>  
	  
	  <?php }else{ ?>
	
	
	 <div class="ordishotCon" style="width:100%; padding:0px;">
 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catefoodslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
   <div class="ordishotBox goodsli"   goodname="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
"   id="gidli_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
"  style="width:49.5%; padding:0px;  ">
   <div style="padding:5px;">
    <ul class="ordishott"  >
     <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');" ><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
"></li>
     <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');" ><h3><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</h3></li>
     <li>
      <ul class="ordishotyx">
       <li><span>月销<?php echo $_smarty_tpl->tpl_vars['items']->value['sellcount'];?>
单</span></li>
       <li><i></i></li>
      </ul>
     </li>
     <li>&nbsp;</li>
     <li style="  font-size: 12px;"><b style="font-size:13px;">￥<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
</b>/份</li>
     <li>
      <ul class="ordisordR" style="    margin-right: -4px;">  
				  <?php if ($_smarty_tpl->tpl_vars['opentype']->value!=2&&$_smarty_tpl->tpl_vars['opentype']->value!=3){?>
				  <span class="shopdayangstatus">休息中</span>
				  <?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['items']->value['count']>0){?>	 
					 <?php if ($_smarty_tpl->tpl_vars['items']->value['have_det']==1){?>  
						<li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"  style="    font-size: 12px;   padding: 0px 2px;"    class="moreguige">可选规格</li>
					 <?php }else{ ?>
						<div class="righ_l_b_btn" >  
							<div class="righ_l_b_btn_moren"    data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopid'];?>
" id="gid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['items']->value['have_det'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
">
							<li><i class="ordenabotR"></i></li>
							</div>
							<div class="righ_l_b_btn_hover" style="display:none;">
							<span class="right_l_btn_left"   data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['items']->value['have_det'];?>
">
								<li><i class="ordenabotL"></i></li>
							</span>
							 <li><input class="right_l_btn_nub" readonly id="gshu_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" type="text" value="1"></li>
							<span class="right_l_btn_right"   id="gid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopid'];?>
" have_det="<?php echo $_smarty_tpl->tpl_vars['items']->value['have_det'];?>
">
								 <li><i class="ordenabotR"></i></li>
							</span></div>
						  </div>
					 <?php }?> 
				  <?php }else{ ?>
					  <li style="color:#cccccc;"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"   class="moreguige">售完</li>
					  
					  <?php }?>
				      	   
				  <?php }?>
				 
				  </ul>
     </li>
    </ul>
   </div>
   </div>
   	<?php } ?>
  </div>
  	

	
	
	<?php }?>	  
<?php }} ?>