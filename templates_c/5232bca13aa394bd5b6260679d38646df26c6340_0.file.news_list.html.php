<?php
/* Smarty version 3.1.29, created on 2020-11-09 08:49:44
  from "D:\UniServerZ\www\mini_shop - re\templates\news_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa902a8c89ca9_74235462',
  'file_dependency' => 
  array (
    '5232bca13aa394bd5b6260679d38646df26c6340' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop - re\\templates\\news_list.html',
      1 => 1604911779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa902a8c89ca9_74235462 ($_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_news_0_saved_item = isset($_smarty_tpl->tpl_vars['news']) ? $_smarty_tpl->tpl_vars['news'] : false;
$_smarty_tpl->tpl_vars['news'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['news']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
$__foreach_news_0_saved_local_item = $_smarty_tpl->tpl_vars['news'];
?>
  <div class="col-md-6">
    <div class="thumbnail" style="height: 370px;">
      <div class="box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['news_title'];?>
">
      </div>
      <div class="caption" style="display: inline-block;">
        <div>
          <h3 style="font-weight: bold; "><?php echo $_smarty_tpl->tpl_vars['news']->value['news_title'];?>

            <div style="display: inline-block;">
              <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
              <a href="news_tool.php?op=news_form&news_sn=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_sn'];?>
" class="btn btn-warning">編輯商品</a>
              <a href="news_tool.php?op=delete_news&news_sn=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_sn'];?>
" class="btn btn-danger">刪除商品</a>
              <?php }?>
            </div>
          </h3>
          <div style="margin-left: 20px;"><?php echo $_smarty_tpl->tpl_vars['news']->value['news_content'];?>
</div>
        </div>
      </div>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved_local_item;
}
if ($__foreach_news_0_saved_item) {
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved_item;
}
?>
</div><?php }
}
