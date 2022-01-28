<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <?php include_once 'head.php' ?>
    <link rel="stylesheet" href="assets/CSS/FAQ.css">
</head>

<body>
    <?php include_once 'header.php' ?>
    <div class="faq-image"></div>
    <main>
        <div class="name">FAQS</div>
        <div class="faqs">
            <div class="faqs-head">
                <p>Whether you are Customer or Service provider,<br> We have tried our best to solve all your queries
                    and
                    questions.</p>
            </div>
            <div class="faqs-menu">
                <div class="customer color"onclick="customer()">FOR CUSTOMER</div>
                <div class="service"onclick="service()">FOR SERVICE PROVIDER</div>
            </div>

            <div class="points">
                <div class="customersec">
                    <div style=" margin-top: 48px;" onclick="cuspoints()">
                        <img src="./images/right-arrow.png" style="display: block;" class="vector-smart-object" alt="">
                        <div style="padding-left: 30px; ">
                            <div style="margin-top: -23px;"> What's included in a cleaning?
                      
                            </div>
                            <br>
                            <div class="hide" style="">
                      Bedroom, Living Room & Common Areas,Bathrooms,Kitchen,Extras 
                            </div>

                        </div>
                    </div>
                </div>
                <div class="serviceprosec" >
                        <div style=" margin-top: 48px;" onclick="prepoints()">
                        <img src="./images/right-arrow.png" style="display: block;" class="vector-smart" alt="">
                        <div style="padding-left: 30px; ">
                            <div style="margin-top: -23px;">  How much do service providers earn?
                      
                            </div>
                            <br>
                            <div class="hide" style="">
                               
                      The self-employed service providers working with Helperland set their own payouts, this means that they decide how much they earn per hour.
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once 'footer.php' ?>
    <script src="faq.js"></script>
    <script>
        function customer(){
            document.querySelector(".customersec").style.display="block";
            document.querySelector(".serviceprosec").style.display="none";
            document.querySelector(".customer").classList.add("color");
            document.querySelector(".service").classList.remove("color");
            document.querySelector(".customer").style.color="#fff";
        }
        function service(){
            document.querySelector(".customersec").style.display="none";
            document.querySelector(".serviceprosec").style.display="block"; 
            document.querySelector(".service").classList.add("color");
            document.querySelector(".customer").classList.remove("color");
            document.querySelector(".customer").style.color="#646464";
        }
        function cuspoints() {
            document.querySelector(".vector-smart-object").nextElementSibling.children[2].classList.toggle("hide");
            document.querySelector(".vector-smart-object").classList.toggle("rotate");
        }
        function prepoints() {
            document.querySelector(".vector-smart").nextElementSibling.children[2].classList.toggle("hide");
            document.querySelector(".vector-smart").classList.toggle("rotate");
        }
    </script>
</body>

</html>