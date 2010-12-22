<?php
require('../../includes/zh/template.php');

class page extends template
{
    protected $title = "亞洲聖經教會 - 資源";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>資源</h1>

        <p><a href="../shared/resources/statement.doc">信仰聲明</a></p>
        <p><a href="../shared/resources/Good_Friday.mp3">受難日講道</a></p>
        <p><a href="../shared/resources/Father.ram">父親節講道 （中英）</a></p>
<?php
    }
}

$page = new page();
$page->createPage();
?>