<?php
abstract class SharedTemplate {
    protected $title;
    protected abstract function head();
    protected abstract function body();

    protected abstract function setCookies();
    protected abstract function menu();

    protected function getBasename()
    {
        $name = basename($_SERVER['REQUEST_URI']);
        if(strlen($name) == 2)
            return "";
        else
            return $name;
    }

    public function createPage()
    {
        $this->setCookies();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="ABC: Asian Bible Church of Anchorage, AK" />
        <meta name="Keywords" content="Asian Bible Church Chinese Anchorage Alaska AK Christian 亞洲聖經教會 阿拉斯加 安克拉治" />
        <meta name="google-site-verification" content="pMMSS9tcIKxkaT97d3R7rekBP1exfOpPLuaWhbLbAwA" />
        <title><?php echo $this->title ?></title>
        <link rel="stylesheet" type="text/css" href="../shared/abc.css" />
        <?php $this->head(); ?>
    </head>

    <body>
        <div class="body" style="position: relative;">
            <?php $this->menu(); ?>
            
            <div class="content">
                <?php $this->body(); ?>
            </div>
        </div>
    </body>
</html>
<?php
    }
    //put your code here
}
?>
