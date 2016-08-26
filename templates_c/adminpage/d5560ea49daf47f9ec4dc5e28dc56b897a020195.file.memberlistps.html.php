<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:12:39
         compiled from "/data/wwwroot/waimairen/templates/adminpage/psuser/memberlistps.html" */ ?>
<?php /*%%SmartyHeaderCode:71876187657beb687e89fb2-12285887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5560ea49daf47f9ec4dc5e28dc56b897a020195' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/adminpage/psuser/memberlistps.html',
      1 => 1435751554,
      2 => 'file',
    ),
    '56d8eee2396ae13398839779d8ea28d8395e53f9' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/adminpage/public/admin.html',
      1 => 1432278422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71876187657beb687e89fb2-12285887',
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
  'unifunc' => 'content_57beb688002a95_05872069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb688002a95_05872069')) {function content_57beb688002a95_05872069($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
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
   	        	 	   <div class="showtop_t" id="positionname">商家会员列表</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	
   	        	 	
      <div style="width:auto;overflow-x:hidden;overflow-y:auto"> 
      	
      	
      	 <div class="search">
      		 
            
            <div class="search_content">
            	 
            	 <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/psuser/module/memberlistps"),$_smarty_tpl);?>
">
            	  
            	   <label>用户名：</label>
            	   <input type="text" name="username" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['username']->value)===null||$tmp==='' ? '' : $tmp);?>
"> 
            	   <label>邮箱：</label>
            	   <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? '' : $tmp);?>
">                 
                  <label>手机：</label>
            	   <input type="text" name="phone" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['phone']->value)===null||$tmp==='' ? '' : $tmp);?>
">    
            	  
            	    <input type="submit" value="提交查询" class="button">  
            	 </form>
            </div>
        
      	</div>
      	 
           <div class="tags"> 

          <div id="tagscontent">

            <div id="con_one_1">

              <div class="table_td"  >

              <form method="post" action="" onsubmit="return remind();"  id="delform">

                  <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

                    <thead>

                      <tr>

                        <th width="60px"><input type="checkbox" id="chkall" name="chkall" onclick="checkall()"></th>

                        <th align="center">用户名称</th>

                        <th align="center">登陆时间</th> 

                        <th align="center">创建时间</th> 
                        <th align="center">登陆IP</th>
                        <th align="center">余额</th>
                        <th align="center">积分</th>
                        <th align="center">所属区域管理</th>
                        <th align="center">操作</th>

                      </tr>

                    </thead> 

                     <tbody>
                      <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"member",'showpage'=>"true",'where'=>((string)$_smarty_tpl->tpl_vars['where']->value)),$_smarty_tpl);?>
 
                      <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?> 
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
                        <td align="center" ><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['uid'];?>
"></td> 
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</td> 
                        <td align="center"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['creattime'],"%Y-%m-%d %H:%M:%S");?>
 </td> 
                        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['logintime'],"%Y-%m-%d %H:%M:%S");?>
</td>  
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['loginip'];?>
</td> 
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
</td> 
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['score'];?>
</td> 
                        <td align="center"><a onclick="setadmin('<?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['admin_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['uid'];?>
');" href="#"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['adminlist']->value[$_smarty_tpl->tpl_vars['items']->value['admin_id']])===null||$tmp==='' ? '未设置区域管理' : $tmp);?>
</a></td>
                        <td align="center"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/member/module/addmember/id/".((string)$_smarty_tpl->tpl_vars['items']->value['uid'])),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/edit.jpg"></a> 
                        	<a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/member/module/delmember/id/".((string)$_smarty_tpl->tpl_vars['items']->value['uid'])."/datatype/json"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/del.jpg"></a></td> 
                      </tr> 
                       <?php } ?> 

                    </tbody> 

                  </table>

                <div class="blank20"></div> 
                </form>
                 <div class="page_newc">
                 	     <div class="select_page">
                 	      
                 	     	</div>
                       <div class="show_page"><ul><?php echo $_smarty_tpl->tpl_vars['list']->value['pagecontent'];?>
</ul></div>
                 </div>

                <div class="blank20"></div>

              </div>

            </div>

          </div>

        </div>
      </div>
        
        
        
        

        
 </div> 
 <script>
 	function setadmin(username,adminid,memberuid)
{
	 
  var	htmls = '<form method="post" id="subyj" action="#" style="text-align:center;"><table>';
	htmls += '<tbody><tr>';
	htmls += '<td height="50px">选择所属管理员:</td>';
	htmls += '<td> <select name="adminid"><option value="0">不设置所属管理员</option>';
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	if(adminid == <?php echo $_smarty_tpl->tpl_vars['items']->value['uid'];?>
){
		htmls += '<option value="<?php echo $_smarty_tpl->tpl_vars['items']->value['uid'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</option>';
	}else{
		htmls += '<option value="<?php echo $_smarty_tpl->tpl_vars['items']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</option>';
	} 
	<?php } ?>
	
	htmls += '</td></tr></tbody></table> ';
  htmls += '<input type="hidden" value="'+memberuid+'" name="uid"> ';
	htmls += '<input type="button" value="确认提交" class="button" onclick="parent.buttonsubyj();" id="buttonsubyj" ></form>';
  art.dialog({
    id: 'testID4',
    title:'设置'+username+'配送所属管理员',
    content: htmls
  });
} 

 // $('#buttonsubyj').bind('click',function(){ 
function buttonsubyj(){

			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/psuser/module/setpsyuan/datatype/json"),$_smarty_tpl);?>
', $('#subyj').serialize() ,function (data, textStatus){  
					if(data.error == false){
						diasucces(data.msg,'');
					}else{
						if(data.error == true)
						{
							diaerror(data.msg); 
						}else{
							diaerror(data); 
						}
					} 
			 }, 'json'); 
	 
	}
//});
 	
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