<?php
require('../../includes/shared/SharedTemplate.php');

abstract class template extends SharedTemplate
{
    protected $title;

    protected function menu()
    {
?>
        <a href="index.php">
            <img width="100%" height="100px" src="../shared/images/ABC_Banner_zh.jpg" alt="亞洲聖經教會" />
        </a>
        <table class="menu">
            <tr>
                <td>
                    <a href="index.php">主頁</a>
                </td>
                <td>
                    <a href="Activities.php">活動</a>
                </td>
                <td>
                    <a href="Resources.php">資源</a>
                </td>
                <td>
                    <a href="Contact.php">聯絡我們</a>
                </td>
                <td>
                    <a href="../en/<?php echo $this->getBasename(); ?>">English</a>
                </td>
            </tr>
        </table>
<?php
    }

    protected function templateHead()
    {
?>
        <meta name="description" content="亞洲聖經教會，安克拉治，阿拉斯加" />
<?php
        $this->head();
    }

    protected function setCookies()
    {
        setcookie('lang', 'zh', time() + 63072000, '/');
    }
}
?>
