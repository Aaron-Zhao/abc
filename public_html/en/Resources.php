<?php
require('../../includes/en/template.php');

class page extends template
{
    protected $title = "Asian Bible Church -  Resources";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>Resources</h1>

        <p><a href="../shared/resources/statement.doc">Statement of Faith</a></p>
        <p><a href="../shared/resources/Good_Friday.mp3">Good Friday Sermon</a></p>
        <p><a href="../shared/resources/Father.ram">Father's Day Sermon (English and Chinese)</a></p>
		<p><a href="http://wildwoodak.org/Church_in_the_Wildwood/Events/Entries/2012/11/2_Sound_Words__Anchorage_area_Bible_conference_2.html">Pastor Rob presented on Arianism in the 6th message of this conference (the heresy of modern Jehovah Witnesses)</a></p>
		<p><a href="http://www.biblebb.com/">Bible Bulletin Board</a></p>
		<p><a href="http://www.gospelgems.com/store/pc/home.asp">Gospel GEMs</a></p>
		<p><a href="http://wildwoodak.org/Church_in_the_Wildwood/Events/Entries/2013/10/6_Sound_Words_2013.html">Sound Words 2013: The Recovered Gospel is online</a></p>
		<p><a href="../shared/resources/Dear_Lucy_Rob.ppt">Thank you note</a></p>
	
<?php
    }
}

$page = new page();
$page->createPage();
?>