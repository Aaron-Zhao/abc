<?php
require('../../includes/zh/template.php');

class page extends template
{
    protected $title = "亞洲聖經教會 - 聯絡我們";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>聯絡我們</h1>

        <h2>亞洲聖經教會</h2>

        <p>
            12407 Pintail Street<br />
            Anchorage, AK 99516-2802<br />
        </p>

        <p>電話號碼：(907) 929-6030</p>

        <p>電郵：pastor-rob@abc-ak.org</p>
		<p>Facebook:</p>
		<p><a href="http://www.facebook.com/pages/Asian-Bible-Church/257176641044896?fref=ts" target="_blank " >Asian Bible Church</a></p>
<?php
    }
}

$page = new page();
$page->createPage();
?>