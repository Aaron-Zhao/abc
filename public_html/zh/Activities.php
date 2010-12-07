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
        </table>
<?php
    }
}

$page = new page();
$page->createPage();
?>