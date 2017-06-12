/**
 * Created by Erica on 5/30/17.
 */

(function ($) {

    $(".header-image").hide();

    var urlArray = window.location.href.split("/");
    var lastItem = urlArray[urlArray.length - 1];
    var filePath = "";

    // if we're in the home page
    if (lastItem.indexOf("index.php" || "nifty-tours/") > -1) {
        // alert("I know where you are: \nwelcome to the home page");
        $("#slideshow").show();
        //hide / show the div you need to
    }


    // if we're not on the home page
    else {
        //assets/images/best.png
        if (lastItem.indexOf("tours.php") > -1) {
            filePath = "assets/images/best.png";
        } else if (lastItem.indexOf("paris") > -1) {
            filePath = "assets/images/paris.png";
        } else if (lastItem.indexOf("services") > -1) {
            filePath = "assets/images/services.png";
        } else if (lastItem.indexOf("translators") > -1) {
            filePath = "assets/images/translators.png";
        } else if (lastItem.indexOf("french") > -1) {
            filePath = "assets/images/french.png";
        } else if (lastItem.indexOf("chinese") > -1) {
            filePath = "assets/images/chinese.png";
        } else if (lastItem.indexOf("spanish") > -1) {
            filePath = "assets/images/spanish.png";
        } else if (lastItem.indexOf("thankyou") > -1) {
            filePath = "assets/images/contact.png";
        }

        $("#static-image").show().css({
            "text-align": "center"
        });
        $(".display-image")
            .attr("src", filePath)
            .css({
                "height": "100%"
            });



    }
})(jQuery);
