<?php
require('../../includes/en/template.php');

class page extends template
{
    protected $title = "Asian Bible Church -  Resources";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>Resources</h1>

        <p><a href="../shared/resources/statement.doc">Statement of Faith</a></p>
        <p><a href="../shared/resources/Good_Friday.mp3">Good Friday Sermon</a></p>
        <p><a href="../shared/resources/Father.ram">Father's Day Sermon (English and Chinese)</a></p>
<?php
    }
}

$page = new page();
$page->createPage();
?>