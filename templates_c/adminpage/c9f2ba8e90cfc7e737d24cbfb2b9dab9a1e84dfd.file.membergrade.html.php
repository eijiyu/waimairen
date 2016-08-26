<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 16:59:47
         compiled from "/data/wwwroot/waimairen/templates/adminpage/member/membergrade.html" */ ?>
<?php /*%%SmartyHeaderCode:174727021757beb38309db31-42117988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f2ba8e90cfc7e737d24cbfb2b9dab9a1e84dfd' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/adminpage/member/membergrade.html',
      1 => 1432278424,
      2 => 'file',
    ),
    '56d8eee2396ae13398839779d8ea28d8395e53f9' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/adminpage/public/admin.html',
      1 => 1432278422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174727021757beb38309db31-42117988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'admininfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb383118954_67252154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb383118954_67252154')) {function content_57beb383118954_67252154($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
?>﻿ <html xmlns="http://www.w3.org/1999/xhtml"><head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="Content-Language" content="zh-CN"> 
<meta content="all" name="robots"> 
<meta name="description" content=""> 
<meta content="" name="keywords"> 
<title>后台管理中心 </title>  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/admin1.css"> 
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/public.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>

<script>
	var menu = null;
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	if(screen.width > 1359){
		
		$('.newtop').css('width',screen.width);
		$('.newmain').css('width',screen.width);
		$('.newfoot').css('width',screen.width);
	}  
</script> 
</head> 
<body> 
<div id="cat_zhe" class="cart_zhe" style="display:none;"></div>
<div id="cat_tj" class="cart_out_cat" style="display:none;"> 数据提交中..</div>
<div class="newtop">
	  <div class="newadddiv">
	  <div class="newlogo">
	  	  <div class="imglogo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/logo.png"> </a></div>
	  </div>
	  <div class="newtopnav">
	  	 <ul>
	  	  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_module.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	  	 	<ul>
	  	
	  </div>
	</div>
</div> 
<div style="clear:both;"></div>
<div class="newmain">
	<!-- 提示导航-->
   <div class="top_nav">
	    <div class="nav2 datainfo">
	    	<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
  
	    </div>
	    <div class="nav2 positioninfo" id="positionname2">
	    	网站首页
	    </div>
	    <div class="nav2 orderinfo">
	    	您有今天有0 个订单待审核
	    </div>
   </div>
   <!-- 主内容区-->
   <div class="newmain_all">
   	 <!-- 主内左区-->
   	 <div class="left_content">
   	 	   <!-- 主内左区用户信息-->
   	 	   <div class="userinfo">
   	 	   	   <div class="user_area">
   	 	   	   	      <div class="user_name">
   	 	   	   	      	<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['username'];?>

   	 	   	   	      </div>
   	 	   	   	      <div class="content_url">
   	 	   	   	      	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/adminloginout"),$_smarty_tpl);?>
" class="out">退出</a> 
   	 	   	   	      	 <a onclick="modifypwd();" href="#">修改密码</a>
   	 	   	   	      </div>
   	 	   	  </div>
   	 	   	  <div class="now_name" id="nowactioninfo">
   	 	   	    	网站首页
   	 	   	    </div>
   	 	   </div>
   	 	   <!-- 主内左区导航条-->
   	 	    <div class="left_nav">
   	 	    	  <ul> 
   	 	    	  	
   	 	    	  	
   	 	    	  	 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   	 	    	 
   	 	    	     <li style="text-align:center;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" style="color:#0076cf;" target="_blank">返回网站首页</a></li>
   	 	    	  </ul>
   	 	    </div>
   	 	    <div class="left_navend">
   	 	    </div>
   	 	    <!-- 主内左区天气预报-->
   	 	    <div class="weather" id="weatherinfo" style="display:none;">
   	 	    	 <div class="todayweacher">
   	 	    	      <div class="weacher_left">
   	 	    	      	 <div id="wtoday_img"> </div>
   	 	    	      	 <div><span id="wcity" style="padding-right:5px;"></span><span id="wqihou"></span></div>
   	 	    	      </div>
   	 	    	      <div class="weacher_right" id="wwendu">
   	 	    	      	 
   	 	    	      </div>	 
   	 	    	 </div>
   	 	    	 <div style="clear:both;">
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_1" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_day"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_wendu"></div>
   	 	    	 	   	
   	 	    	 	   	</div>
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_tom" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_tday"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_twendu"></div>
   	 	    	 	   	</div>
   	 	    	 </div>
   	 	    </div>
   	 	     
   	  </div>
   	  
 
 
  
 
 
 <div class="right_content">
	<div class="show_content_m">
   	        	 <div class="show_content_m_ti">
   	        	 	   <div class="showtop_t" id="positionname">会员成长值</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	 
   	        	 	
      <div style="width:auto;overflow-x:hidden;overflow-y:auto"> 
          <div class="tags">

      	 
          <div id="tagscontent">

            <div id="con_one_1">

              <div class="table_td"> 
              <form method="post" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/member/module/savemembergrade/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/member/module/membergrade"),$_smarty_tpl);?>
',this);">

                  <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

                    <thead>

                      <tr>

                        <th align="center">等级ID</th>
                        <th align="center">等级名称</th>
                        <th align="center">起始值</th>
                        <th align="center">结束值</th>
                        <th align="center">排序</th>
                        
                      </tr>

                    </thead>

                    <tbody id="type">    
                    	  	  <?php if (!empty($_smarty_tpl->tpl_vars['membergrade']->value)){?>
	 	                   
                       <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['membergrade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>	

                                <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';"  <?php if ($_smarty_tpl->tpl_vars['myid']->value%2==0){?>	
                         onmouseout="this.bgColor='f4f4f4';" bgcolor="#f4f4f4"<?php }else{ ?>
                          onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"
                         <?php }?>>
                        <td align="center"><input type="hidden" name="id[]" value=""><?php echo $_smarty_tpl->tpl_vars['myid']->value;?>
</td>
                        <td align="left" style="padding-left:10px;">
                         <input type="text" name="gradename[]" id="gradename[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['gradename'])===null||$tmp==='' ? '' : $tmp);?>
"  class='skey' style='width:130px;'/>  
                        </td>
                        <td align="left" style="padding-left:10px;">
                        大于=    <input type="text" name="from[]" id="from[]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['from'];?>
"  class='skey' style='width:130px;'/>  
                        </td>
                        <td align="left" style="padding-left:10px;">
                        小于 <input type="text" name="to[]" id="to[]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['to'];?>
"  class='skey' style='width:130px;'/> 
                        </td>
                         
                        <td align="center"><a onclick="$(this).parent().parent().remove();" href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/del.jpg"></a></a></td>
                      </tr>
                    <?php } ?>  
                    <?php }?> 

                    </tbody>      



                  </table>

                <div class="blank20"></div> 

               <input type="submit" name="button" id="button" value="提交保存" class='button'> 

                 <input type="button" name="button" id="typebutton" value="添加一个分类" onclick="adddaohangxx();" class="button" />

              </form>
 <div class="blank20"></div>
              </div>

            </div>
            
            
            <div>说明：成长值根据完成订单的总金额累计  </div>
            
            

          </div>

        </div>
 

    </div>
    
    
    
    
    </div> 
 <script>
 	function adddaohangxx(){
  var html = '<tr class="s_out" onmouseover="this.bgColor=\'#F5F5F5\';" onmouseout="this.bgColor=\'ffffff\';" bgcolor="#ffffff">';
  html += '<input type="hidden" name="id[]" value="">';
  html += '<td align="center">&nbsp;&nbsp;</td>';
  html += '<td align="left" style="padding-left:10px;">';
  html += '<input type="text" name="gradename[]" id="gradename[]" class="skey" style=\'width:130px;\'/>';
  html += '</td><td align="left" style="padding-left:10px;">';
  html += '大于=<input type="text" name="from[]" id="from[]" class="skey" style=\'width:130px;\'/>';
  html += '</td><td align="left" style="padding-left:10px;">';
  html += '小于<input type="text" name="to[]" id="to[]" class="skey" style=\'width:50px;\'/>';
  html += '</td><td align="center"><a onclick="$(this).parent().parent().remove();" href="javascript:;">移除</a></td></tr>'; 
  $("#type").append(html);
}
 	
 </script>
 
   	        	 	
               <div class="show_content_m_t3">
   	        	 </div>
   	        	 
   	       </div>
   	       <!-- show_content_m结束-->


   	  </div>
   	  <!-- right_content 结束-->
   	  
   </div>
   <!-- newmain_all 结束-->
</div>	
	
<!--newmain 结束-->
















<div style="clear:both;"></div>
<div class="newfoot">
	
	  版权所有@郑州光合科技有限公司 waimairen.com
</div>	
<script>
$(function(){ 
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
});
   
</script>
</body>
</html>





<?php }} ?>