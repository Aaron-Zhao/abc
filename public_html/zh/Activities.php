<?php
require('../../includes/zh/template.php');

class page extends template
{
    protected $title = "亞洲聖經教會 - 活動";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>活動</h1>

        <table>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <h2>星期三晚查經</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>日期：每星期三</p>
                                <p>時間：晚上七時至九時</p>
                                <p>地點：牧師家</p>
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
                                <h2>聖誕節前夜歡唱</h2>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding-left: 20px; width: 200px;" >
                                <p>日期：二零一零年十二月二十四日</p>
                                <p>時間：晚上六時四十五分至八時</p>
                                <p>地點：牧師家</p>
                                <p>12741 Rivulet Cir.</p>
                                <p>(907) 929-6030</p>
                                <p>敬請賜覆</p>
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