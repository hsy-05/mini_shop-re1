<?php
/*  引入  */
require_once "header.php";

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$news_sn    = isset($_REQUEST['news_sn']) ? my_filter($_REQUEST['news_sn'], "int") : 0;
$news_title = isset($_REQUEST['news_title']) ? my_filter($_REQUEST['news_title'], "string") : '';

switch ($op) {
    case 'list_news':
        header("location:index_news.php");
        exit;
        break;

        default:
            list_news($news_sn);       
        break;
}

/*  輸出  */
require_once "footer.php";

/*  本檔案使用函數  */

//商品列表
function list_news()
{
    global $mysqli, $smarty;
    include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `news` ORDER BY `news_date` desc";
    $PageBar = getPageBar($sql, 4, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $i = 0;
    while ($news = $result->fetch_assoc()) {
        $all_news[$i]        = $news;
        $all_news[$i]['pic'] = get_news_pic($news['news_sn'], 'thumbs2');
        $i++;
    }

    $smarty->assign('all_news', $all_news);
    $smarty->assign('total', $total);
    $smarty->assign('bar', $bar);

 
}

// //觀看某一商品
// function display_news($news_sn = '')
// {
//     global $mysqli, $smarty;
//     $sql          = "SELECT * FROM `news` WHERE `news_sn`='{$news_sn}'";
//     $result       = $mysqli->query($sql) or die($mysqli->connect_error);
//     $news        = $result->fetch_assoc();
//     $news['pic'] = get_news_pic($news_sn);
//     $smarty->assign('news', $news);
// }
