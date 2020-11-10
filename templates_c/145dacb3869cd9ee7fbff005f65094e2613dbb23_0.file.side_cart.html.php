<?php
/* Smarty version 3.1.29, created on 2020-11-05 13:24:05
  from "D:\UniServerZ\www\mini_shop - re\templates\side_cart.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa3fcf54e59d2_06114134',
  'file_dependency' => 
  array (
    '145dacb3869cd9ee7fbff005f65094e2613dbb23' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop - re\\templates\\side_cart.html',
      1 => 1604141113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa3fcf54e59d2_06114134 ($_smarty_tpl) {
?>
<form action="bill.php" method="post" class="form-horizontal" role="form">
  <div class="panel panel-info">
    <div class="panel-heading">我的購物車</div>
    <table class="table">
      <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_goods_0_saved_item = isset($_smarty_tpl->tpl_vars['goods']) ? $_smarty_tpl->tpl_vars['goods'] : false;
$__foreach_goods_0_saved_key = isset($_smarty_tpl->tpl_vars['goods_sn']) ? $_smarty_tpl->tpl_vars['goods_sn'] : false;
$_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['goods_sn'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['goods']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['goods_sn']->value => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
$__foreach_goods_0_saved_local_item = $_smarty_tpl->tpl_vars['goods'];
?>
        <tr>
          <td><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></td>
          <td>
            <input type="text" name="goods_amount[<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_amount'];?>
" class="form-control" style="width:40px;">
          </td>
        </tr>
      <?php
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_local_item;
}
if ($__foreach_goods_0_saved_item) {
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_item;
}
if ($__foreach_goods_0_saved_key) {
$_smarty_tpl->tpl_vars['goods_sn'] = $__foreach_goods_0_saved_key;
}
?>
      <tr>
        <td colspan=2>
          <input type="hidden" name="op" value="check_out">
          <button type="submit" class="btn btn-block btn-success">結帳</button>
        </td>
      </tr>
    </table>
  </div>
</form>

<?php }
}
