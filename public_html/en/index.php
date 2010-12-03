<?php
require('../../includes/en/template.php');

class page extends template
{
    protected $title = "Asian Bible Church - Home";

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
        <td width="400px" valign="top">
            <div class="left">
                <h1>Welcome to Asian Bible Church</h1>

                <p>
                We are a non-denominational church located in south east Anchorage.
                Our worship services are held in English with Mandarin Chinese translation
                at the chapel in Grace Christian School.
                We welcome you to join us to worship and fellowship together so we may spread the salvation of Jesus Christ.
                </p>
            </div>
        </td>
        <td width="150px" />
        <td width="200px" valign="top">
            <div class="right">
                <h2>Worship Service</h2>

                <p>
                    Anchorage Grace Church<br />
                    12407 Pintail Street<br />
                    Anchorage, AK 99516-2802<br />
                </p>

                <p>
                    Time: 1 PM
                </p>

                <p>
                    Rev. Rob Riopelle
                </p>

                <p>
                    English with Mandarin Chinese translation
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