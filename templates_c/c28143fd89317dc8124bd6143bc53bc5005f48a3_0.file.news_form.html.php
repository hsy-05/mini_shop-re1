<?php
/* Smarty version 3.1.29, created on 2020-11-09 09:01:31
  from "D:\UniServerZ\www\mini_shop - re\templates\news_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa9056b39c586_98554627',
  'file_dependency' => 
  array (
    'c28143fd89317dc8124bd6143bc53bc5005f48a3' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop - re\\templates\\news_form.html',
      1 => 1604912485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa9056b39c586_98554627 ($_smarty_tpl) {
?>
<h1>編輯最新消息</h1>
<?php echo '<script'; ?>
 src="class/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<form action="news_tool.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-md-2 control-label">消息標題：</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="news_title" id="news_title" placeholder="請輸入商品名稱" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['news_title'];?>
">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">消息內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="news_content" id="news_content" placeholder="請輸入商品內容"><?php echo $_smarty_tpl->tpl_vars['news']->value['news_content'];?>
</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">商品圖片：</label>
        <div class="col-md-10">
            <input type="file" name="news_pic" id="news_pic">
            <?php if (isset($_smarty_tpl->tpl_vars['news']->value['pic'])) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['news_title'];?>
">
            <?php }?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <?php if (isset($_smarty_tpl->tpl_vars['news']->value['news_sn']) && $_smarty_tpl->tpl_vars['news']->value['news_sn'] > 0) {?>
                <input type="hidden" name="op" value="update_news">
                <input type="hidden" name="news_sn" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['news_sn'];?>
">
            <?php } else { ?>
                <input type="hidden" name="op" value="insert_news">
            <?php }?>
            <button type="submit" class="btn btn-primary" >儲存消息</button>
        </div>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace( 'news_content' );
<?php echo '</script'; ?>
>
<?php }
}
