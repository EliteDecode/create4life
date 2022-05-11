<?php
  include('./includes/header.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./includes/stylingIndex.php') ?>

    <style>
    address {

        margin-top: 20%;
    }

    .form {

        width: 75%;
        margin: 10% 12.5%;
        padding: 5% 6%;
        position: relative;
        border-radius: 10px;
    }

    .form h3 {
        text-transform: capitalize;
        font-size: 17px;
        margin-bottom: 5%;
    }

    .form form label {
        font-size: 13px;
        font-weight: bold;
    }

    .form-group input {
        padding: 5.3% 4%;
        border-radius: 100px;
        outline: none;
        font-size: 14px;
        border: 2px solid #17a2b8;
    }

    .form-group textarea {
        border-radius: 10px;
        border: 2px solid #17a2b8;
        font-size: 14px;
    }
    </style>

</head>

<?php include('./includes/nav.php') ?>


<!--banner section-->
<section class="section_banner bg_c">

    <div class="container text-center">
        <div class="section_banner_details text-center">

            <h4>CONTACT US <span style='opacity:.4'>/</span> Creating <span class='meadow'>Life.</span></h4>
            <h5>Powered by <span class='meadow'> TIM MEADOWS</span></h5>
        </div>

    </div>


</section>
<!--end-->

<!--- map -->
<div style="margin-top:8%;" class="row no-margin">
    <div class="container">
        <iframe style="width:100%"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"
            height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>


<!--end-->


<!--form-->

<div class="contact_forms ">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                <div class="form shadow">
                    <div id="msg"></div>
                    <h3>Send us a message</h3>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="name" class="form-control" id="name" placeholder='Enter your full name...'>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder='Enter your email...'>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class='form-control'
                                placeholder='Whats your message?...'></textarea>
                        </div>

                    </form>
                    <button class="contact1-fom-btn btn btn-info text-center"
                        style=" display:flex; flex-direction:row; justify-content:space-between; align-items:center;"
                        onclick="messageus()">
                        <h6 style='margin-top:3%;'>Send Message</h6> <span id='spin' class="spinner-border text-light"
                            style="display: none;"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                <address>
                    <h6>125 Ekehuan Road</h6>
                    <h6>Benin City</h6>
                    <h6>Edo state,</h6>
                    <h6>
                        West Africa,</h6>
                    <h6>Africa.</h6>
                    <i>P.o.box 231231</i>

                </address>
            </div>

        </div>
    </div>
</div>







<?php 
      include('./includes/footer.php')
    ?>




<script>
function messageus() {

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;


    console.log(name);

    document.getElementById('spin').style.display = 'block';


    var vars = "name=" + name + "&email=" + email + "&message=" + message;

    var message = new XMLHttpRequest();

    var method = "POST";
    var url = "./ajax/message.php";
    var sync = true;

    message.open(method, url, sync);

    message.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    message.onreadystatechange = function() {
        if (message.readyState == 4 && message.status == 200) {
            var data = message.responseText;
            if (data) {
                console.log(data);
                document.getElementById('msg').innerHTML = data;
                document.getElementById('spin').style.display = 'none';

            }


        }
    }

    message.send(vars);

}
</script>
</body>

</html>