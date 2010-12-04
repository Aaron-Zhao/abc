<?php
require('../../includes/en/template.php');

class page extends template
{
    protected $title = "Asian Bible Church - Contact Us";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>Contact Us</h1>

        <h2>Asian Bible Church</h2>

        <p>
            12407 Pintail Street<br />
            Anchorage, AK 99516-2802<br />
        </p>

        <p>(907) 929-6030</p>

        <p>pastor-rob@abc-ak.org</p>
<?php
    }
}

$page = new page();
$page->createPage();
?>