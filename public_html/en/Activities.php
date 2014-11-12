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
                                <p>Time: 6:30-8:30pm</p>
								<p>&nbsp &nbsp &nbsp &nbsp Snacks 6:30-7:00pm</p>
								<p>&nbsp &nbsp &nbsp &nbsp Songs  7:00-7:30pm</p>
								<p>&nbsp &nbsp &nbsp &nbsp Study   7:30-8:30pm</p>
                                <p>Location: 12741 Rivulet Circle</p>
                                <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp (near New Seward and Huffman)</p>
								<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Please call for directions 929-6030</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Thanksgiving 2014</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>November 26th 6:30pm - 9:00pm</p>
                                <p>Location: Anchorage Grace Church</p>
								<p>12407 Pintail St. , telephone 929-6030</p>
                                <p>Please bring a dish to share</p>
                                <p><a href="../shared/images/thanksgiving_2014.png"><img src="../shared/images/thanksgiving_2014.png" style="width: 400px; border-style: solid; border-width: 1px;" alt="thanksgiving_2014" /></a></p>
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