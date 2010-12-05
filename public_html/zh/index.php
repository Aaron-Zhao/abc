<?php

require('../../includes/zh/template.php');

class page extends template
{
    protected $title = "亞洲聖經教會 - 主頁";

    protected function head()
    {
?>
        <style type="text/css" >
            div.left
            {

            }

            div.right
            {

            }

            table.content td        
            {
                margin: 0px;
                padding: 0px;
                border: 0px;
            }

        </style>
<?php

    }

    protected function body()
    {
?>
        <table width="100%" class="content">
            <tr>
                <td width="410px" valign="top">
                    <div class="left">
                        <h1>歡迎來到亞洲聖經教會</h1>

                        <p>
                            我們是一間無宗派的教會，
                            位於安克拉治的東南部。
                            崇拜所用的是英語，有普通話翻譯。
                            我們邀請您來一起敬拜，分享耶穌基督的救恩。
                        </p>
                        
                        <br />
                        <br />

                        <h2 style="text-align: center;">信仰聲明</h2>
                        
                        <p><b>首先</b><br />
                           我們堅信聖經是神所啟示，絕對正確，有權威，神的話語。
                        </p>

                        <p><b>其二</b><br />
                            我們相信只有一位神，永遠以三位：即父，子，聖靈為一體存在。
                        </p>

                        <p><b>其三</b><br />
                            我們相信主耶穌基督的神性。他由處女所生，過著無罪的生活，行神一跡，
                            為罪人代死，贖罪，並灑寶血，他又肉身復活，升天並坐在父神的右手邊。他還
                            要以權柄和榮耀再返回來。
                        </p>

                        <p><b>其四</b><br />
                            我們相信人的救恩只有在聖靈的帶動下，承認自己有罪，並且迷失了，唯通過新生或
                            重生才能得到。
                        </p>

                        <p><b>其五</b><br />
                            我們相信聖靈充滿的生活;當信徒願意完全奉獻時，就會被聖靈充滿而有能力去作見證，讓靈魂得救。
                        </p>

                        <p><b>其六</b><br />
                            我們相信得救的和未得救的都會復活，信神的復活後得永生，不信神的復活後入永死。
                        </p>

                        <p><b>其七</b><br />
                            我們相信在主耶穌基督裡有靈裡的統一。
                        </p>
                    </div>
                </td>
                <td width="140px" />
                <td width="200px" valign="top">
                    <div class="right">
                        <h2>主日崇拜</h2>

                        <p>
                            Anchorage Grace Church<br />
                            12407 Pintail Street<br />
                            Anchorage, AK 99516-2802<br />
                        </p>

                        <p>
                            下午一時正
                        </p>

                        <p>
                            Rob Riopelle 牧師
                        </p>

                        <p>
                            英語，普通話翻譯
                        </p>
                    </div>
                </td>
            </tr>
        </table>
<?php

    }
}

$page = new page();
$page->createPage();
?>