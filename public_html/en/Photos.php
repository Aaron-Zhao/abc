<?php
require('../../includes/en/template.php');

class page extends template
{
    protected $title = "Asian Bible Church -  Photos";

    protected function head()
    {
?>
<?php
    }

    protected function body()
    {
?>
        <h1>Photos</h1>
		<table>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <h2>Thanksgiving 2013</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><a href="../shared/photos/t1.jpg"><img src="../shared/photos/t1.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a> 
								&nbsp 
								<a href="../shared/photos/t3.jpg"><img src="../shared/photos/t3.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a>
								&nbsp 
								<a href="../shared/photos/t4.jpg"><img src="../shared/photos/t4.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a>
								&nbsp 
								<a href="../shared/photos/t7.jpg"><img src="../shared/photos/t7.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a>
								
								
								<a href="../shared/photos/t2.jpg"><img src="../shared/photos/t2.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a>
								&nbsp 
								<a href="../shared/photos/t6.jpg"><img src="../shared/photos/t6.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a>
								&nbsp 
								<a href="../shared/photos/t8.jpg"><img src="../shared/photos/t8.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a>
								&nbsp 
								<a href="../shared/photos/t5.jpg"><img src="../shared/photos/t5.jpg" style="width: 67px; height: 100px; border-style: solid; border-width: 0px;" alt="thanksgiving_2013" /></a>
								&nbsp 	
								</p>								
                            </td>
                        </tr>
						<tr>
                            <td>
                                <h2>Birthday Party 2014</h2>
                            </td>
                        </tr>
						<tr>
							<td>
								<p>
								<a href="../shared/photos/birthday.jpg"><img src="../shared/photos/birthday.jpg" style="width: 150px; height: 100px; border-style: solid; border-width: 0px;" alt="birthday_2014" /></a>
								&nbsp 
								
								</p>
							</td>
						</tr>
                    </table>
                </td>
            </tr>
        </table>
<?php
    }
}

$page = new page();
$page->createPage();
?>