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
<?php
    }
}

$page = new page();
$page->createPage();
?>