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
<?php
    }
}

$page = new page();
$page->createPage();
?>