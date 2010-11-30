<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="ABC: Asian Bible Church of Anchorage, AK" />
        <meta name="Keywords" content="Asian Bible Church Chinese Anchorage Alaska AK Christian" />
        <title><?php echo $title ?></title>

        <link rel="stylesheet" type="text/css" href="abc.css" />
    </head>

    <body>
        <div class="body" style="position: relative;">
            <img width="100%" height="100px" src="images/logo.jpg" alt="Logo" />
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
                        <a href="Contact.php">Contact</a>
                    </td>
                    <td>
                        <a href="">中文</a>
                    </td>
                </tr>
            </table>

            <?php echo $content ?>
        </div>
    </body>
</html>
