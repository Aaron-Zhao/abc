<?php
require('../../includes/en/template.php');

class page extends template
{
    protected $title = "Asian Bible Church - Activities";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>Activities</h1>

        <table>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <h2>Weekly Bible Study</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Every Wednesday Night</p>
                                <p>Time: 7:00 PM - 9:00 PM</p>
                                <p>Location: Rob &amp; Lucy's home</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
<?php
    }
}

$page = new page();
$page->createPage();
?>