<?php
/**
 * Created by PhpStorm.
 * User: Erica
 * Date: 5/7/17
 * Time: 12:11 PM
 */
?>

    <footer>
        <section class="group section">
            <div class="col span_4_of_4">
                <ul>
                    <li>Nifty Tours</li>
                    <li>12000 Southwest 49th Avenue</li>
                    <li>Portland, OR 97210</li>
                </ul>
            </div>
            <div class="col span_4_of_4">
                <p>(503) 555-1212 | tours@nifty.com</p>
            </div>
            <div class="col span_4_of_4">
                <a href="https://www.facebook.com/NiftyTours"><img src="assets/images/facebook-logo.png" width="18" height="25" alt="fb icon"></a>&nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/NiftyTours"><img src="assets/images/twitter-logo.png" width="34" height="25" alt="twitter icon"></a>

            </div>
            <div class="col span_4_of_4">
                <p>© Nifty Tours, LLC. 2017</p>
            </div>
        </section>

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/scripts/jquery.smartmenus.js"></script>
        <script type="text/javascript" src="assets/scripts/jquery.smartmenus.bootstrap.js"></script>
        <script type="text/javascript" async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script type="text/javascript" src="assets/scripts/responsiveslides.min.js"></script>

        <script>




            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));


            $(function() {
                $(".rslides").responsiveSlides();
            });



;

            $(window).on("scroll", function(){

                    // only for desktop / and tablet views
                    if( $(window).width() > 700 ){


                        var scrollValue = $(document).scrollTop();
                        console.log("scroll detected: "+scrollValue);

                        if( scrollValue === 0  ){
                            console.log("attempting animation 1");

                            $("#nav-logo").stop().animate({
                                width: '25%'
                            }, 600);

                        }
                        else if( scrollValue > 20  ){

                            if(  $("#nav-logo").height() > 100 ){
                                console.log("attempting animation 2");

                                $("#nav-logo").stop().animate({
                                    width: '8%'
                                }, 600);
                            }
                        }
                    }
            });


        </script>

    </footer>
    </body>

    </html>
