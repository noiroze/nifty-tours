<?php
include_once('includes/header.php');
?>


    <main>
        <div class="container-fluid">

                            <?php
                            require 'includes/connection.php';
                            $conn = Connect();
                            $name = $conn->real_escape_string($_REQUEST['u_name']);
                            $email = $conn->real_escape_string($_REQUEST['u_email']);
                            $date = $conn->real_escape_string($_REQUEST['u_date']);
                            $tours = $conn->real_escape_string($_REQUEST['tours']);
                            $subj = $conn->real_escape_string($_REQUEST['subj']);
                            $message = $conn->real_escape_string($_REQUEST['message']);
                            $query = "INSERT into tb_cform (u_name,u_email,u_date,tours,subj,message)
                        VALUES('" . $name . "','" . $email . "','" . $date . "','" . $tours . "','" . $subj . "','" . $message . "')";
                            $success = $conn->query($query);

                            if (!$success) {

                                die("That didn't work...  \nQUERY:\n$query");
                                //    die("Couldn't enter data: ".$conn->error);

                            }

                            echo "<h1>Thank you for your message.</h1><br>";
                            echo "<p>If you would like to return to the home page click <a href='index.php' class='emphasized'>here.</a></p>";

                            $conn->close();

                            ?>

        </div>

        <script src="assets/scripts/slideshowHandler.js" type="text/javascript"></script>
    </main>


<?php
include_once('includes/footer.php');
?>