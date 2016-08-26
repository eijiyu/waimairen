<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:20:49
         compiled from "/data/wwwroot/waimairen/templates/m7/site/smallcat2.html" */ ?>
<?php /*%%SmartyHeaderCode:194968435857beb8710a13c4-98364754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd65cd58e7011744772c0538b9c6d435a1d6d2dd3' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/site/smallcat2.html',
      1 => 1450229504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194968435857beb8710a13c4-98364754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shopinfo' => 0,
    'cartinfo' => 0,
    'itv' => 0,
    'member' => 0,
    'juanlist' => 0,
    'items' => 0,
    'itemm' => 0,
    'jisuancost' => 0,
    'shopxinxi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb8711401b8_05215469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb8711401b8_05215469')) {function content_57beb8711401b8_05215469($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
?> 
       
	   
      
		 
<div class="cart">
<div class="title">
<h2><span id="cart_shopName"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</span></h2>
</div>
<div class="cart-panel">
<table>
<thead class="cart-head">
<tr>
<td class="item-name">菜品</td>
<td class="item-price">单价</td>
<td class="item-count">份数</td>
<td class="item-price-all">金额</td>
<td class="item-delete"></td>
</tr>
</thead>
<tbody class="item-list">
 <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartinfo']->value['goodslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?> 
	<tr class="item" data-stockid="" id="cartItem_15385629132388989090">
		<td class="item-name"><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['itv']->value['stock']<$_smarty_tpl->tpl_vars['itv']->value['count']){?><font color=red>库存不足</font><?php }?>
		     <?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?><font style="font-size:10px;color:#ccc;"><?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['attrname'];?>
</font><?php }?>
		
		</td>
		<td class="item-price">¥<?php echo $_smarty_tpl->tpl_vars['itv']->value['cost'];?>
</td>
		<td class="item-count">
			<input type="hidden" value="15385629132388989090">
			<span class="item-minus"  onclick="<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>removeoneproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }else{ ?>removeonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }?>"  value="-" type="button"></span>
			<input class="item-count" type="input"  id="cart_count<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['count'];?>
">
			<span class="item-plus"  onclick="<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>uponeproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1,this);<?php }else{ ?>uponedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }?>" value="+" type="button"></span>
		</td>
		<td class="item-price-all">¥<?php echo $_smarty_tpl->tpl_vars['itv']->value['cost']*$_smarty_tpl->tpl_vars['itv']->value['count'];?>
</td><td class="item-delete"><span class="item-delete-icon">×</span></td>
	</tr>
<?php } ?>
</tbody>
</table> 
	      <?php $_smarty_tpl->tpl_vars['jisuancost'] = new Smarty_variable($_smarty_tpl->tpl_vars['cartinfo']->value['cx']['surecost']+$_smarty_tpl->tpl_vars['cartinfo']->value['bagcost']+$_smarty_tpl->tpl_vars['cartinfo']->value['areacost']+$_smarty_tpl->tpl_vars['cartinfo']->value['pscost'], null, 0);?>
<table class="collect">
<tbody>
<tr class="item" data-node="boxPrice" style="display: ;">
<td class="item-name">餐盒费</td>
<td class="item-price"></td>
<td class="item-count"></td>
<td class="item-price-all">¥<span id="packFee"><?php echo $_smarty_tpl->tpl_vars['cartinfo']->value['bagcost'];?>
</span></td>
<td class="item-delete"></td>
</tr>
<tr class="item" data-node="sendPrice" style="">
<td class="item-name" colspan="3">配送费（不计入起送价）</td>
<td class="item-price-all">¥<span id="sendFee"><?php echo $_smarty_tpl->tpl_vars['cartinfo']->value['pscost'];?>
</span></td>
<td class="item-delete"></td>
</tr>
<tr class="item" data-node="discountNode" style="display:none"></tr><tr class="item" data-node="premiumTr">    <td class="item-name" colspan="2">                    立减优惠            <em class="jian-min-icon premium-icon"><img src="http://waimai.baidu.com/static/forpc/jian_s.png"></em>            </td>    <td class="item-count">            </td>    <td class="item-price-all">                     - ¥<span><?php echo $_smarty_tpl->tpl_vars['cartinfo']->value['cx']['downcost'];?>
</span>             </td>    <td></td></tr>
<tr class="item item-coupon" id="item-coupon" >


<td class="item-name" colspan="5">    <p>        <span class="checkbox " name="use_coupon" style="display: none;"></span><label>使用优惠券</label>    </p>        
 <?php if ($_smarty_tpl->tpl_vars['member']->value['uid']>0){?>
 <p class="conflict-text"  id="yhxx" >
 <?php if (empty($_smarty_tpl->tpl_vars['juanlist']->value)){?>
  <li>暂无优惠券<li>
 <?php }else{ ?>
  	<?php  $_smarty_tpl->tpl_vars['itemm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['juanlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemm']->key => $_smarty_tpl->tpl_vars['itemm']->value){
$_smarty_tpl->tpl_vars['itemm']->_loop = true;
?> 
	<li class="conflict-text"   ><input type="radio" name="buyjuan" <?php if ($_smarty_tpl->tpl_vars['items']->value['sum']<$_smarty_tpl->tpl_vars['itemm']->value['limitcost']){?> disabled <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['itemm']->value['id'];?>
" data="<?php echo $_smarty_tpl->tpl_vars['itemm']->value['cost'];?>
" data2="<?php echo $_smarty_tpl->tpl_vars['itemm']->value['limitcost'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemm']->value['name'];?>
(说明：优惠<?php echo $_smarty_tpl->tpl_vars['itemm']->value['cost'];?>
元),注意：订单最低金额<?php echo $_smarty_tpl->tpl_vars['itemm']->value['limitcost'];?>
元,截止时间:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['itemm']->value['endtime'],"%Y-%m-%d");?>
<li>  
        				   	<?php } ?> 
	<?php }?>
 </p>  
<?php }else{ ?>
 <p class="conflict-text">假如你有优惠劵,请先登录在使用优惠劵<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/login"),$_smarty_tpl);?>
">(点击登录)</a></p> 
<?php }?>
 <div class="coupon-area" style="display:none;">        <input type="hidden" name="coupon_id" value="">        <ul class="coupon-list coupon-other">                            <li class="coupon-item item-other">                    <div class="item-verify">                        <input type="text" name="coupon_password" placeholder="请输入代金券密码" data-node="coupon-input">                        <button data-node="coupon-check" name="verify_btn">验证</button>                    </div>                </li>                    </ul>    </div></td></tr>
</tbody>
</table>
<div class="bottom-div">
<div class="warning-tips" style="display: none;">
<a class="delivery-tip" href="#">
您的主食点了吗？</a>
</div>
<div class="order-msg">
总价：<span class="order-total">¥<span id="total_money"><?php echo $_smarty_tpl->tpl_vars['jisuancost']->value;?>
</span></span>
<p data-node="discountMsg">本单已优惠 ¥ <span class="bdyhcost"><?php echo $_smarty_tpl->tpl_vars['cartinfo']->value['cx']['downcost'];?>
</span></p>
</div>
<div class="clearfix"></div>
<div id="activityTip" class="activity-tip" style="display:none">
<p>提示：绑定手机号才可享受立减、代金券等优惠哦！</p>
<p><a href="javascript:void(0)" class="verify-link">立即绑定</a></p>
</div>
<div class=""></div>
</div>
</div>

</div>
<div class="cart-bottom"></div>

   
 

			
     
	   
  

	  
   <?php if (count($_smarty_tpl->tpl_vars['cartinfo']->value['goodslist'])==0){?>
     
    <div class="cart">
<div class="title">
<h2><span id="cart_shopName"><?php echo $_smarty_tpl->tpl_vars['shopxinxi']->value['shopname'];?>
</span></h2>
</div>

<div class="cart-empty hide" style="display: block;">
<table>
<tbody><tr>
<td width="90"><span class="logo"></span></td>
<td class="msg">
<p>您的购物车为空，</p>
<p>先到<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/index/id/".((string)$_smarty_tpl->tpl_vars['shopxinxi']->value['id'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['shopxinxi']->value['shopname'];?>
</a>选择美食吧</p>
</td>
</tr>
</tbody></table>
</div>
</div>

   <?php }?> 

   
   
   <script>
   
   $(".conflict-text input").click(function(){	
	var yhcost = $(".conflict-text input[type='radio']:checked").attr('data');
	var zongcost = <?php echo $_smarty_tpl->tpl_vars['jisuancost']->value;?>
;
	
	var yhgdcost = Number(zongcost)-Number(yhcost);
	$(".bdyhcost").text(yhcost);
	$("#total_money").text(yhgdcost);
});

   
   </script><?php }} ?>