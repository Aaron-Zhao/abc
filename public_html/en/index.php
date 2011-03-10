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
            p.special
            {
                color: red;
            }
}

        </style>
<?php

    }

    protected function body()
    {
?>
        <table width="100%" class="content">
            <tr>
                <td width="450px" valign="top">
                    <div class="left">
                        <h1>Welcome to Asian Bible Church</h1>

                        <p>
                            We are a non-denominational church located in south east Anchorage.
                            Our worship services are held in English with Mandarin Chinese translation
                            at the chapel in Grace Christian School.
                            We welcome you to join us to worship and fellowship together so we may spread the salvation of Jesus Christ.
                        </p>

                        <br />
                        <br />

                        <h2 style="text-align: center;">Statement of Faith</h2>

                        <p><b>First</b><br />
                            We believe the Bible to be the inspired, only infallible, authoritative Word of God.
                        </p>

                        <p><b>Second</b><br />
                            We believe that there is one God, eternally existent in three persons, Father, Son, and Holy Spirit.
                        </p>

                        <p><b>Third</b><br />
                            We believe in the deity of our Lord Jesus Christ, in His virgin birth,
                            in His sinless life, in His miracles, in His vicarious and atoning death
                            through His shed blood, in His bodily resurrection, in His ascension to
                            the right hand of the Father, and His personal return in power and glory.
                        </p>

                        <p><b>Fourth</b><br />
                            We believe that the salvation of man who is sinful and lost is only by
                            the New Birth or regeneration by the Holy Spirit.
                        </p>

                        <p><b>Fifth</b><br />
                            We believe in the Spirit-filled life; the believer fully consecrated is
                            indwelt by the Holy Spirit whereby one is able to witness with the
                            power to the saving souls.
                        </p>

                        <p><b>Sixth</b><br />
                            We believe in the resurrection of both the saved and the unsaved;
                            that they are saved unto the resurrection of life and they that
                            are lost unto the resurrection of damnation.
                        </p>

                        <p><b>Seventh</b><br />
                            We believe in the spiritual unity of all believers in our Lord Jesus Christ.
                        </p>
                    </div>
                </td>
                <td width="100px" />
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

                        <br />
                        <br />
                        
                        <iframe width="270" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=12407+Pintail+Street+Anchorage,+AK+99516-2802&amp;sll=61.196287,-149.900908&amp;sspn=0.020512,0.052314&amp;ie=UTF8&amp;hq=&amp;hnear=12407+Pintail+St,+Anchorage,+Alaska+99516&amp;ll=61.107142,-149.81795&amp;spn=0.010284,0.026157&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=12407+Pintail+Street+Anchorage,+AK+99516-2802&amp;sll=61.196287,-149.900908&amp;sspn=0.020512,0.052314&amp;ie=UTF8&amp;hq=&amp;hnear=12407+Pintail+St,+Anchorage,+Alaska+99516&amp;ll=61.107142,-149.81795&amp;spn=0.010284,0.026157&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
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