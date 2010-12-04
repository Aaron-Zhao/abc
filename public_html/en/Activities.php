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
            <tr>
                <td>
                    <table>
                        <tr>
                            <td colspan="3" >
                                <h2>Christmas Eve Singspiration</h2>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding-left: 20px; width: 200px;" >
                                <p>Date: December 24th, 2010</p>
                                <p>Time: 6:45 PM - 8:00 PM</p>
                                <p>Location: Rob &amp; Lucy's home</p>
                                <p>12741 Rivulet Cir.</p>
                                <p>(907) 929-6030</p>
                                <p>Please R.S.V.P.</p>
                            </td>
                            <td width="50px" />
                            <td align="center">
                                <a href="../shared/images/christmas_poster.jpg">
                                    <img alt="poster" src="../shared/images/christmas_poster_thumb.jpg" width="200px" height="259px" style="border: 1px solid #BDBDBD" />
                                </a>

                                <p>Click on the image for the fullsize image</p>
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