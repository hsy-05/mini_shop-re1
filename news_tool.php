<?php
/*  引入  */
require_once "header.php";
if (!$isAdmin) {
    header("location:index_news.php");
    exit;
}

/*  流程控制  */
$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$news_sn = isset($_REQUEST['news_sn']) ? my_filter($_REQUEST['news_sn'], "int") : 0;
switch ($op) {
    case 'news_form':
        news_form($news_sn);
        break;

    case 'update_news':
        update_news($news_sn);
        header("location:index_news.php?op=news_list");
        exit;
        break;

    case 'delete_news':
        delete_news($news_sn);
        header("location:index_news.php?op=news_list");
        exit;
        break;

    case 'insert_news':
        $news_sn = insert_news();
        header("location:index_news.php?op=news_list");
        exit;
        break;
}

/*  輸出  */
require_once "footer.php";

/*  本檔案使用函數  */

//商品編輯表單
function news_form($news_sn)
{
    global $mysqli, $smarty;
    if (empty($news_sn)) {
        $sql    = "EXPLAIN `news`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $news[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `news` WHERE `news_sn`='{$news_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $news        = $result->fetch_assoc();
        $news['pic'] = get_news_pic($news_sn, 'thumbs2');
    }
    $smarty->assign('news', $news);
}

//儲存商品
function insert_news()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $news_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `news` (`news_title`, `news_content`, `news_date`) VALUES ('{$news_title}', '{$news_content}', '{$news_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $news_sn = $mysqli->insert_id;
    save_news_pic($news_sn);
    return $news_sn;
}

//儲存圖片
function save_news_pic($news_sn = "")
{
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['news_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //大圖
        $pic->file_new_name_body = $news_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 600;
        $pic->image_y            = 400;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/news/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = $news_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 300;
        $pic->image_y            = 200;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/thumbs2/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}



//更新消息
function update_news($news_sn)
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $news_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `news` SET
    `news_title`='{$news_title}',
    `news_content`='{$news_content}',
    `news_date`='{$news_date}'
    WHERE `news_sn`='{$news_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    save_news_pic($news_sn);
}

//刪除消息
function delete_news($news_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `news` WHERE `news_sn`='{$news_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_news_pic($news_sn);
}

//刪除圖片
function delete_news_pic($news_sn = "")
{
    if (file_exists("uploads/news/{$news_sn}.png")) {
        unlink("uploads/news/{$news_sn}.png");
    }
    if (file_exists("uploads/thumbs2/{$news_sn}.png")) {
        unlink("uploads/thumbs2/{$news_sn}.png");
    }
}

//

