<?php
ini_set('display_errors',true);
abstract class template {
    protected $title;
    protected abstract function head();
    protected abstract function body();

    public function createPage()
    {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="ABC: Asian Bible Church of Anchorage, AK" />
        <meta name="Keywords" content="Asian Bible Church Chinese Anchorage Alaska AK Christian 亞洲聖經教會 阿拉斯加 安克拉治" />
        <title><?php echo $this->title ?></title>
        <link rel="stylesheet" type="text/css" href="../shared/abc.css" />
        <?php $this->head(); ?>
    </head>

    <body>
        <div class="body" style="position: relative;">
            <a href="index.php">
                <img width="100%" height="100px" src="../shared/images/ABC_Banner_zh.jpg" alt="Logo" />
            </a>
            <table class="menu">
                <tr>
                    <td>
                        <a href="index.php">主頁</a>
                    </td>
                    <td>
                        <a href="Activities.php">活動</a>
                    </td>
                    <td>
                        <a href="Resources.php">資源</a>
                    </td>
                    <td>
                        <a href="Contact.php">聯絡我們</a>
                    </td>
                    <td>
                        <a href="../en/index.php">English</a>
                    </td>
                </tr>
            </table>

            <div class="content">
                <?php $this->body(); ?>
            </div>
        </div>
    </body>
</html>
<?php
    }
    //put your code here
}
?>
