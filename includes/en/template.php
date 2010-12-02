<?php
require('../../includes/shared/SharedTemplate.php');

abstract class template extends SharedTemplate {
    protected $title;

    protected function menu()
    {
?>
<a href="index.php">
    <img width="100%" height="100px" src="../shared/images/ABC_Banner_en.jpg" alt="Logo" />
</a>
<table class="menu">
    <tr>
        <td>
            <a href="index.php">Home</a>
        </td>
        <td>
            <a href="Activities.php">Activities</a>
        </td>
        <td>
            <a href="Resources.php">Resources</a>
        </td>
        <td>
            <a href="Contact.php">Contact Us</a>
        </td>
        <td>
            <a href="../zh/<?php echo basename($_SERVER['REQUEST_URI']); ?>">中文</a>
        </td>
    </tr>
</table>
<?php
    }

    protected function setCookies()
    {
        setcookie('lang', 'en', time() + 63072000, '/');
    }
}
?>
