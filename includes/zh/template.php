<?php
require('../../includes/shared/SharedTemplate.php');

abstract class template extends SharedTemplate {
    protected $title;

    protected function menu()
    {
?>
<a href="index.php">
    <img width="100%" height="100px" src="../shared/images/ABC_Banner_zh.jpg" alt="Logo" />
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
            <a href="../en/<?php echo basename($_SERVER['REQUEST_URI']); ?>">English</a>
        </td>
    </tr>
</table>
<?php
    }

    protected function setCookies()
    {
        setcookie('lang', 'zh', time() + 63072000, '/');
    }
}
?>
