<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 18:40:48
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\Index\book.html" */ ?>
<?php /*%%SmartyHeaderCode:11951588097b0cf91a5-82206153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c5457bb0bc883983b31b12434686d081b7b5052' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\Index\\book.html',
      1 => 1484822339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11951588097b0cf91a5-82206153',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588097b0e5c92',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588097b0e5c92')) {function content_588097b0e5c92($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="<?php echo @CSS_AURL;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo @CSS_AURL;?>
admin.css">
    <script src="<?php echo @JS_AURL;?>
jquery.js"></script>
    <script src="<?php echo @JS_AURL;?>
pintuer.js"></script>
</head>
<body>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>姓名</th>       
        <th>电话</th>
        <th>邮箱</th>
        <th>其他</th>
        <th width="25%">内容</th>
         <th width="120">留言时间</th>
        <th>操作</th>       
      </tr>      
        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            1</td>
          <td>神夜</td>
          <td>13420925611</td>
          <td>564379992@qq.com</td>  
           <td>深圳市民治街道</td>         
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
          <td>2016-07-01</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            1</td>
          <td>神夜</td>
          <td>13420925611</td>
          <td>564379992@qq.com</td>  
           <td>深圳市民治街道</td>         
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
          <td>2016-07-01</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
          <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            1</td>
          <td>神夜</td>
          <td>13420925611</td>
          <td>564379992@qq.com</td>  
           <td>深圳市民治街道</td>         
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
          <td>2016-07-01</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
          <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            1</td>
          <td>神夜</td>
          <td>13420925611</td>
          <td>564379992@qq.com</td>  
           <td>深圳市民治街道</td>         
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
          <td>2016-07-01</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
          <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            1</td>
          <td>神夜</td>
          <td>13420925611</td>
          <td>564379992@qq.com</td>  
           <td>深圳市民治街道</td>         
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
          <td>2016-07-01</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
		
	}
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; 		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

</script>
</body></html><?php }} ?>