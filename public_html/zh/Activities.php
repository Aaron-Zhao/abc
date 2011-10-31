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
                                <p>地點：教會</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>祝福的感恩節</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>十一月二十三號晚上六時半至九時</p>
                                <p>地點：教會</p>
                                <p>請各帶一菜</p>
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