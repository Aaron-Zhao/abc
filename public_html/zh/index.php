<?php
require('../../includes/zh/template.php');

class page extends template
{
    protected $title = "亞洲聖經教會 - 主頁";

    protected function head()
    {
?>
<style type="text/css" >
div.left
{

}

div.right
{

}

table.content td
{
    margin: 0px;
    padding: 0px;
    border: 0px;
}

</style>
<?php
    }

    protected function body()
    {
?>
<table width="100%" class="content">
    <tr>
        <td width="400px" valign="top">
            <div class="left">
                <h1>歡迎來到亞洲聖經教會</h1>

                <p>
                    我們是一間無宗派的教會，
                    位於安克拉治的東南部。
                    崇拜所用的是英語，有普通話翻譯。
                    我們邀請您來一起敬拜，分享耶穌基督的救恩。
                </p>
            </div>
        </td>
        <td width="150px" />
        <td width="200px" valign="top">
            <div class="right">
                <h2>主日崇拜</h2>

                <p>
                    Anchorage Grace Church<br />
                    12407 Pintail Street<br />
                    Anchorage, AK 99516-2802<br />
                </p>

                <p>
                    下午一時正
                </p>

                <p>
                    Rob Riopelle 牧師
                </p>

                <p>
                    英語，普通話翻譯
                </p>
            </div>
        </td>
    </tr>
</table>
<?php
    }
}

$page = new page();
$page->createPage();
?>