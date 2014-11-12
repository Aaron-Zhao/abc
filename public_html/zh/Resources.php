<?php
require('../../includes/zh/template.php');

class page extends template
{
    protected $title = "亞洲聖經教會 - 資源";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>資源</h1>

        <p><a href="../shared/resources/statement.doc">信仰聲明</a></p>
        <p><a href="../shared/resources/Good_Friday.mp3">受難日講道</a></p>
        <p><a href="../shared/resources/Father.ram">父親節講道 （中英）</a></p>
		<p><a href="http://wildwoodak.org/Church_in_the_Wildwood/Events/Entries/2012/11/2_Sound_
Words__Anchorage_area_Bible_conference_2.html">牧師羅布本次會議（現代異端的耶和華見證人）</a></p>
		<p><a href="http://www.biblebb.com/">聖經公告板</a></p>
		<p><a href="http://www.gospelgems.com/store/pc/home.asp">福音寶石</a></p>
		<p><a href="http://wildwoodak.org/Church_in_the_Wildwood/Events/Entries/2013/10/6_Sound_Words_2013.html">2013的声音：恢复的福音</a></p>
		<p><a href="../shared/resources/Dear_Lucy_Rob.ppt">感谢信</a></p>
		
<?php
    }
}

$page = new page();
$page->createPage();
?>