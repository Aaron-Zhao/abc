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
                                <p>時間：晚上6:30至8:30</p>
								<p>&nbsp &nbsp &nbsp &nbsp 零食 6:30-7:00pm</p>
								<p>&nbsp &nbsp &nbsp &nbsp 圣歌 7:00-7:30pm</p>
								<p>&nbsp &nbsp &nbsp &nbsp 查經 7:30-8:30pm</p>
								<p>地點：12741 Rivulet Circle</p>
								<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp (靠近 New Seward and Huffman)</p>
								<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 詢問方向請撥 929-6030</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>2013感恩節</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>十一月二十七號 晚上六點半至九点</p>
                                <p>地點：教會</p>
                                <p>請各帶一菜</p>
                                <p><a href="../shared/images/thanksgiving_2013.jpg"><img src="../shared/images/thanksgiving_2013.jpg" style="width: 400px; border-style: solid; border-width: 1px;" alt="thanksgiving_2013" /></a></p>
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