<?php
/* Smarty version 3.1.29, created on 2020-11-10 05:33:36
  from "D:\UniServerZ\www\mini_shop - re\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa2630115ed2_38059287',
  'file_dependency' => 
  array (
    '6caa96630e4d9b969dba2f98bf1a10e174ab812c' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop - re\\templates\\index.html',
      1 => 1604941704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:goods_form.html' => 1,
    'file:goods_display.html' => 1,
    'file:user_form.html' => 1,
    'file:display_user.html' => 1,
    'file:bill_check_out.html' => 1,
    'file:display_bill.html' => 1,
    'file:list_bill.html' => 1,
    'file:news_list.html' => 1,
    'file:news_form.html' => 1,
    'file:ingredients.html' => 1,
    'file:goods_list.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_5faa2630115ed2_38059287 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  <?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="bootstrap/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<?php echo '<script'; ?>
>
  $("#myInput").on("keyup", function () {
      /* 取得使用者輸入的值 */
      var txt = $(this).val();
      /* 先隱藏所有橫列的資料 */
      $("#main").hide();
      /* 僅顯示表格內容中有包含使用者輸入值的橫列 */
      $("#main :contains('" + txt + "')").parent().show();
  });
<?php echo '</script'; ?>
>

<body>
  <div class="container">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <ul class="nav navbar-nav"  style="font-weight:bold;font-size: 20px;font-family:DFKai-sb;">
          <li class="active"><a href="index.php" style="font-size: 28px;margin-right: 36px;">有家甜點</a></li>
          <li><a href="index_news.php?op=news_list">最新消息</a></li>
          <li><a href="index.php?op=ingredients">食材來源</a></li>
        </ul>
        
      </div>
    </nav>

    <div id="shop_head" class="w3-container w3-center w3-animate-opacity">
      <a href="index.php">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" class="w3-container w3-center w3-animate-opacity">
            <div class="item active">
              <img src="images/ntitle.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive" style="height:400px; width:100%;">
            </div>

            <div class="item">
              <img src="images/T5.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive" style="height:400px; width:100%;">
            </div>

            <div class="item">
              <img src="images/T7.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive" style="height:400px; width:100%;">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </a>
    </div>



    <div id="shop_main" class="row">
      <div class="col-md-9 col-sm-8" class="main">
        <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "goods_display") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_display.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "check_out") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:bill_check_out.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_bill") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "list_bill") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:list_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "news_list") {?>       <!--news-->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:news_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "news_form") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:news_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "ingredients") {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:ingredients.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php }?>
      </div>
      <div class="col-md-3 col-sm-4">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
    </div>

    <div id="shop_foot" class="bc">
      <h3>聯絡我們</h3>
      <div>&#128338; 週一至週五 13:00-20:00 &nbsp; &nbsp; &nbsp; 每周六，日公休</div>
      <div>&#127980; 地址：XX市XX區XX路XX巷XX號</div>
      <div>&#x260E; 電話：(06)2345678</div>
      <hr>
      <div>版權所有 copyright © 2020. All Rights Reserved. </div>
    </div>
  </div>
</body>

</html><?php }
}
