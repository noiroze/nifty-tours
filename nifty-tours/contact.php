<?php
/**
 * Created by PhpStorm.
 * User: Erica
 * Date: 5/7/17
 * Time: 12:07 PM
 */
include_once('includes/header.php');
?>


    <main id="contact-main">
        <div class="container-fluid">
            <div class="row">
                <section id="griddemo" class="section group">
                    <h1>Many Ways to Contact Us</h1>
                    <p><em>And we respond fast!</em></p>
                    <!--                 <hr>-->
                    <p>Our expert staff can answer questions about</p>
                    <ul>
                        <li>Tour Packages and Prices</li>
                        <li>Airplane schedules</li>
                        <li>Car rentals</li>
                        <li>Hotel availability</li>
                        <li>Language issues</li>
                        <li>and much more</li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2> Contact Us</h2>
                            <form action="thankyou.php" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="h4">Name:</label>
                                        <input type="text" id="u_name" class="form-control" name="u_name" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="h4">Email:</label>
                                        <input type="email" id="u_email" class="form-control" name="u_email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="h4">Date: Around what date do you want to take a
                                                    trip?</label>
                                        <input type="date" id="u_date" class="form-control" name="u_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="tours" class="h4">Which tours interest you?</label>
                                        <p><em>Hold down Ctrl (Windows) or Cmd (Mac) to select multiple
                                                        tours</em>
                                        </p>
                                        <select name="tours" size="4" multiple id="tours" class="form-control">
                                                    <option value="Paris">Paris, France</option>
                                                    <option value="Rome">Rome, Italy</option>
                                                    <option value="Greece">Athens, Greece</option>
                                                    <option value="Agra">Taj Mahal</option>
                                                    <option value="Kyoto">Kyoto, Japan</option>
                                                    <option value="All">All of the above!</option>
                                                    <option value="Other">Other (describe below)</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label class="h4">Subject:</label>
                                    <input type="text" id="subj" class="form-control" name="subj" required>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="h4">Message:</label>
                                    <textarea id="message" class="form-control" rows="5" name="message" required></textarea>
                                </div>
                                <button type="submit" id="form-submit" class="btn btn-lg pull-right" value="Submit">Submit
                                        </button>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
            <div id="social">
                <div class="col-md-4">
                    <div id="converter">
                        <div id='gcw_mainFvBWtfS1F' class='gcw_mainFvBWtfS1F'></div>
                        <a id='gcw_siteFvBWtfS1F' href='https://freecurrencyrates.com/en/'></a>
                        <script>
                            function reloadFvBWtfS1F() {
                                var sc = document.getElementById('scFvBWtfS1F');
                                if (sc) sc.parentNode.removeChild(sc);
                                sc = document.createElement('script');
                                sc.type = 'text/javascript';
                                sc.charset = 'UTF-8';
                                sc.async = true;
                                sc.id = 'scFvBWtfS1F';
                                sc.src =
                                    'https://freecurrencyrates.com/en/widget-vertical?iso=USDCNYMXNEURGBPXUL&df=2&p=FvBWtfS1F&v=fits&source=fcr&width=275&width_title=0&firstrowvalue=1&thm=C8C8C8,7F99B2,C8C8C8,330099,FFFFFF,C8C8C8,3333CC,FFFFFF,FFFFFF&title=Currency%20Converter&tzo=420';
                                var div = document.getElementById('gcw_mainFvBWtfS1F');
                                div.parentNode.insertBefore(sc, div);
                            }
                            reloadFvBWtfS1F();

                        </script>

                    </div>
                </div>
                <div class="col-md-4">
                    <div id="fb">
                        <div id="fb-root">
                            <div class="fb-page" data-href="https://www.facebook.com/cas222cascade" data-tabs="timeline" data-width="275" data-height="150" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/cas222cascade" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade">CAS 222</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="twitter">
                        <a class="twitter-timeline" href="https://twitter.com/pcccas222">Tweets by pcccas222</a>
                    </div>
                </div>

            </div>
        </div>


        <script src="assets/scripts/slideshowHandler.js" type="text/javascript"></script>
    </main>

    <?php

include_once('includes/footer.php');


?>
