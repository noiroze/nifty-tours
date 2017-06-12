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
                            <h1>The Paris Tour</h1>
                            <p><em>Eiffel Tower, Louvre, Montmarte and more</em></p>
                            <hr>
                            <p>Top Paris Activities</p>
                            <ul>
                                <li>Spend a few hours losing yourself in the Metro</li>
                                <li>Go to Notre Dame during peak time</li>
                                <li>Attempt to break the speed record for the top 3 exhibits in the Louvre</li>
                                <li>End your day and your feet at the Eiffel Tower!</li>
                            </ul>
                            <h2>PARIS!</h2>
                            <p>City of Lovers, City of Lights, City of Blisters...</p>
                            <p>Something for everyone!</p>
                            <p><img src="assets/images/paris-mona-greg.jpg" alt="mona-greg"></p>
                            <p><a href="french.php" class="emphasized">Need a French-speaking guide or translator?</a></p>
                            <h2>DAY TRIPS</h2>
                            <p>Five day plan for a magical trip!</p>
                            <table>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">AM</th>
                                    <th scope="col">PM</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Eiffel Tower (inside and to the top)</td>
                                    <td>Pompidou Center</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Louvre Museum</td>
                                    <td>Dining and shopping on the<br/>
                                        Champs Elysees
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Notre Dame Cathedral</td>
                                    <td>Dining outside the Arc de Triomphe</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Montmartre</td>
                                    <td>Moulin Rouge</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Walk along the Seine River</td>
                                    <td>Eiffel Tower (outside at night)</td>
                                </tr>
                            </table>
                            <p>&nbsp;</p>
                            <p><a href="services.php" class="emphasized">More about Nifty services...</a></p>
                            <h2>A Louvre Moment</h2>
                            <p>Watch as a Nifty traveler experiences Paris. This can be your adventure, too!</p>

                            <video id="movie" width="360" height="240" preload controls>
                                <source src="assets/video/louvre-paris.mp4" type="video/mp4">
                                <source src="assets/video/louvre-paris.ogv" type="video/ogv">
                                <source src="assets/video/louvre-paris.webm" type="video/webm">
                            </video>
                    </section>
        </div>
        <script src="assets/scripts/slideshowHandler.js" type="text/javascript"></script>
    </main>

<?php

include_once('includes/footer.php');
//include_once('includes/connection.php');
//include_once('includes/thankyou.php');

?>