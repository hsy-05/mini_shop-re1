<?php
/* Smarty version 3.1.29, created on 2020-11-01 11:00:31
  from "D:\UniServerZ\www\mini_shop\templates\side_tools.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f9e954f5e4f80_45887167',
  'file_dependency' => 
  array (
    '47d449188456fe41d3f9a100e99ac0c91124aab4' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop\\templates\\side_tools.html',
      1 => 1604228426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9e954f5e4f80_45887167 ($_smarty_tpl) {
?>
<div class="alert alert-success">
  <?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>
您好！歡迎光臨 <?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>

</div>
<a href="index.php" class="btn btn-block ">回首頁</a>
<a href="user.php?op=user_display&user_sn=<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_sn'];?>
" class="btn btn-block ">我的帳號</a>
<?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
    <a href="bill.php" class="btn btn-block btn-block">我的訂單</a>
<?php }
if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
    <a href="tool.php?op=goods_form" class="btn btn-block ">發布商品</a>
<?php }?>
<a href="user.php?op=user_logout" class="btn btn-block ">登出</a><?php }
}
