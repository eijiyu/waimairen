<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:20:44
         compiled from "/data/wwwroot/waimairen/templates/m7/site/smallcat.html" */ ?>
<?php /*%%SmartyHeaderCode:139537398657beb86c3b9de4-89394783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ee8041df5969933363704436f0199dcbe10d0f' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/site/smallcat.html',
      1 => 1453289174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139537398657beb86c3b9de4-89394783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carinfo' => 0,
    'itv' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'goodscount' => 0,
    'surecost' => 0,
    'shopopeninfo' => 0,
    'shopinfo' => 0,
    'allowedguestbuy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb86c499f62_62587523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb86c499f62_62587523')) {function content_57beb86c499f62_62587523($_smarty_tpl) {?> 
  
		<style>
		.newgwcUl{ font-size:14px;padding:0px 12px; width:268px;}
		.newgwcUl li{height:45px; line-height:45px; color:#333333;border-bottom:1px dashed #c7c7c7; width:268px;}
		.foodname{ float:left; width:106px;height:45px; overflow:hidden;}
		.foodshuliang{ margin-left:5px;float:left;width:76px;}
		.foodcost{margin-left:3px;color:#f17530;width:57px;float:left;}
		.foodshanchu{width:13px;float:left;margin-left: 5px;}
		.foodshanchu img{margin-top:18px; width:8px;}
		</style>

		
		
		
		  <div id="mycars_box" style="     margin-left: -25px; margin-bottom: 40px;">
		  
		  		
		<div style="background:#fafafa; height:40px; line-height:40px; font-size:14px; <?php if ($_smarty_tpl->tpl_vars['carinfo']->value['count']==0){?>  display:none;  <?php }?> ">
		<span >&nbsp;&nbsp;&nbsp;购物车</span>
		<span  class="delwaimai" onclick="delshopcart()">清空全部</span>
		</div>
		
		  
		  <div id="mycar_main"  <?php if ($_smarty_tpl->tpl_vars['carinfo']->value['count']==0){?> style="    padding: 0px 10px 10px 10px;" <?php }?> >

		
		<ul  <?php if ($_smarty_tpl->tpl_vars['carinfo']->value['count']==0){?> style="display:none;" <?php }?> >
		
		<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carinfo']->value['goodslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
<li id="car_box_<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
">
	<div class="pro_name"><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?><font style="font-size:10px; color:#ccc;">【<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['attrname'];?>
】</font><?php }?></div>
	<div class="pro_num">
		<span onclick="<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>removeoneproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }else{ ?>removeonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }?>" >
			<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/wmr_pccart_jian.png" />
		</span>
		<span class="nunloading" id="pronum_box<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
">
			<input type="text" class="pro_num_input"   name="Nums_<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"  readonly id="Nums_<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['count'];?>
"value="1"  >
		</span>
		<span class="pro_num_add" style="margin-left:6px;" onclick="<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>uponeproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1,this);<?php }else{ ?>addonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1,this);<?php }?>"  >
		<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/wmr_pccart_jia.png" />
		</span>
	</div>
		
			 <?php $_smarty_tpl->tpl_vars['goodscount'] = new Smarty_variable($_smarty_tpl->tpl_vars['goodscount']->value+$_smarty_tpl->tpl_vars['itv']->value['count'], null, 0);?> 	 
	<div class="pro_mony" style="width:auto;">￥<?php echo $_smarty_tpl->tpl_vars['itv']->value['cost'];?>
</div>
</li>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['carinfo']->value['pscost']>0){?>
<li>
	<div style="width:200px;" class="pro_name">配送费(不计入起送价)</div>
  	 
	<div class="pro_mony" style="width:auto;">￥<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['pscost'];?>
</div>
</li>
<?php }?>
</ul>
		
 
 
<div style="clear:both;"></div>
<div id="mycars"  data-btn="false"  <?php if ($_smarty_tpl->tpl_vars['carinfo']->value['count']==0){?> style="margin-left:-10px;" <?php }?> >
	<div class="mycars_num">
		<span id="total_count" data-num="0"><?php echo $_smarty_tpl->tpl_vars['goodscount']->value;?>
</span>份&nbsp;
		￥<span id="rellycost" data-num="0"><?php echo $_smarty_tpl->tpl_vars['surecost']->value;?>
</span>
		 </div>
			<?php if ($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==2||$_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==3){?>
			
				<?php if ($_smarty_tpl->tpl_vars['carinfo']->value['limitcost']<=$_smarty_tpl->tpl_vars['shopinfo']->value['limitcost']){?>
				<div class="mycaars_btn">
					<?php if ($_smarty_tpl->tpl_vars['allowedguestbuy']->value==1){?>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/showcart/shopid/".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])),$_smarty_tpl);?>
">去结账</a>
					<?php }else{ ?>
					<a  style="background:#e9e8e8;color:#333;" href="javascript:void(0);">请先登陆</a>
					<?php }?>
					</div>
				<?php }else{ ?>	
				<div class="mycaars_btn">
					<a  style="background:#e9e8e8;color:#333;" href="javascript:void(0);">差<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['limitcost']-$_smarty_tpl->tpl_vars['shopinfo']->value['limitcost'];?>
元送</a>
					</div>
				
				<?php }?>
			<?php }else{ ?>

				<div class="mycaars_btn">
					<a  style="background:#e9e8e8;color:#333;" href="javascript:void(0);">休息中</a>
					</div>
	
		
			<?php }?>
</div>
		
<div style="clear:both;"></div>

</div>
<div style="clear:both;"></div>
<?php if ($_smarty_tpl->tpl_vars['carinfo']->value['count']==0){?>
   <div id="mycars_box11" style=" "><div id="mycar_main"  <?php if ($_smarty_tpl->tpl_vars['carinfo']->value['count']==0){?> style="    padding: 0px 10px 10px 10px;" <?php }?>>
购物车为空</div>
  <?php }?>
 <style>
 .i-empty {
 
 background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/icon.png) no-repeat scroll 0 0 transparent;
background-position: -190px -820px;
margin: 15px auto;
}
.i-empty, .i-comment {
width: 210px;
height: 120px;
text-indent: -9999em;
margin: 0 auto;
}

 
 </style>

<input type="hidden" name="bagcost" value="<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['bagcost'];?>
">
<input type="hidden" name="pscost" value="<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['pscost'];?>
">
<input type="hidden" name="surecost" value="<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['cx']['surecost'];?>
">
  <input type="hidden" name="allcost" value="<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['cx']['surecost']+$_smarty_tpl->tpl_vars['carinfo']->value['bagcost'];?>
">                  	
    		<script>
				
	$(function(){
	 <?php if ($_smarty_tpl->tpl_vars['carinfo']->value['count']==0){?>
		$("#rellycost").html( Number($('input[name="surecost"]').val()) );
	 <?php }else{ ?>
 		$("#rellycost").html( Number($('input[name="surecost"]').val())+Number($('input[name="pscost"]').val()) );
	<?php }?>	
	});
			</script>
 </div><?php }} ?>