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
                                <p>Location: Anchorage Grace Church</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Blessed Thanksgiving</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>November 23th 6:30 PM - 9:00 PM</p>
                                <p>Location: Anchorage Grace Church</p>
                                <p>Please bring a dish to share</p>
                                <p><a href="../shared/images/Thanksgiving_2011.jpg"><img src="../shared/images/Thanksgiving_2011.jpg" style="width: 400px; border-style: solid; border-width: 1px;" alt="Thanksgiving 2011" /></a></p>
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