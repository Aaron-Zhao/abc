<?php
if(isset($_COOKIE['lang']))
{
    if($_COOKIE['lang'] == 'en')
        header("Location: en/");
    else
        header("Location: zh/");
}
else
    header("Location: en/");
?>