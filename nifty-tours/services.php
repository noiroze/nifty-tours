<?php
/**
 * Created by PhpStorm.
 * User: Erica
 * Date: 5/7/17
 * Time: 11:51 AM
 */
include_once('includes/header.php');
?>

    <main>
        <div class="container-fluid">
                    <section id="griddemo" class="section group">   
                            <h1>Services We Provide</h1>
                            <p><em>Guides, translators, Sherpas and more</em></p>
                            <hr>
                            <p>If you need it, we've got it</p>
                            <ul>

                                <li>Scuba instructors</li>
                                <li>Language translators</li>
                                <li>Tour guides</li>
                                <li>Mountain guides</li>
                                <li>Adventurers</li>
                            </ul>
                            <h2>Guides</h2>
                            <p>Experienced guides that go with you every step of the way, and stay by your side, even
                                when it may seem inappropriate...<br>
                                <br>
                                Travel the Nifty way!</p>
                            <p>&nbsp;</p>
                            <p><img src="assets/images/guides.png" alt="Travel Adventure">
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="nifty-best-tours.html" class="emphasized">Tours you'll never forget...</a></p>

                            <h2>Language and Other Services</h2>
                            <p>Nifty has you covered with Chinese, Spanish and French -- over half of the major world
                                languages! (Well, we're counting English, too.)</p>

                            <p class="centerit">Major world languages spoken by
                                native and second language speakers</p>
                            <p class="centerit"><img class="mapper" src="assets/images/language-chart.jpg" alt="Language Chart" usemap="#Map">
                                <map name="Map">
                                    <area shape="poly" class="mapper showcoords noborder iopacity50 icolor0099ff"
                                          coords="315,204,315,72,370,77,418,99,457,127,480,165,491,203,486,238,475,260"
                                          href="chinese.php" alt="Chinese language">
                                    <area shape="poly" class="mapper showcoords noborder iopacity50 icolorff0000"
                                          coords="316,206,214,314,189,300,170,283,158,267,150,250"
                                          href="spanish.php" alt="Spanish language">
                                    <area shape="poly" class="mapper showcoords noborder iopacity75 icolorffffff"
                                          coords="283,74,314,203,250,80,266,77" href="french.php"
                                          alt="French language">
                                </map>
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="translators.php" class="emphasized">What kind of  translator do you need?</a></p>

                            <p>We've done some crazy things over the years, and we're not proud of all of it, but we'd probably do it again if you ask us to.</p>

                            <p><a href="contact.php" class="emphasized">Call about our other  services...</a></p>    
                    </section>
        </div>

        <script src="assets/scripts/slideshowHandler.js" type="text/javascript"></script>
    </main>

<?php

include_once('includes/footer.php');
//include_once('includes/connection.php');
//include_once('includes/thankyou.php');

?>