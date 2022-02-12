<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Service</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net//boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/CSS/navbar.css">
    <link rel="stylesheet" href="assets/CSS/book-service.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">

</head>

<body>
    <?php include 'header.php'
    ?>
    <main>
        <div class="book-service-banner-img"></div>
        <div class="popup" id="warningpopup">
            <div class="popupcontent" id="popupcontent">
                <div class="popup-head">Confirm Service Time <span class="warningclose">&times;</span></div>
                <div class="popup-body">Booking time is less than recommended, we may not be able to finish the job.Please confirm if you wish to proceed with your booking?</div>
                <div class="warningpopup-footer continue-btn">Yes</div>
            </div>
        </div>
        <div class="name"><strong>Set up your cleaning service</strong></div>
        <div class="star-line star-price" style="">
            <div class="line1"></div>
            <img src="./images/separator.png" alt="" class="star-img">
            <div class="line2"></div>
        </div>
        <div class="full-section">
            <div class="left-section">

                <div class="service-nav">
                    <div>
                        <div class="setup" onclick="setup()">
                            <div class="setup-img-white"></div>
                            <div class=""></div>
                            <div class="setup-text">Setup Service</div>
                        </div>
                        <div class="tri-1 triangle-1"></div>
                    </div>
                    <div>
                        <button id="tab-2" disabled onclick="tab2()">
                            <div class="schdule">
                                <div class="schdule-img"></div>
                                <div class=""></div>
                                <div class="schdule-text">Schedule & Plan</div>
                            </div>
                        </button>
                        <div class="tri-2"></div>
                    </div>
                    <div>
                        <button id="tab-3" disabled onclick="tab3()">
                            <div class="details">
                                <div class="details-img"></div>
                                <div class=""></div>
                                <div class="details-text">Your Details</div>
                            </div>
                        </button>
                        <div class="tri-3"></div>
                    </div>
                    <div>
                        <button id="tab-4" disabled>
                            <div class="payment">
                                <div class="payment-img"></div>
                                <div class=""></div>
                                <div class="payment-text">Make Payment</div>
                            </div>
                        </button>
                        <div class="tri-4"></div>
                    </div>


                </div>
                <div class="setup-service">
                    <div style="font-weight: 700; font-size: 18px;">Please enter your zip code:</div>
                    <div style="display: flex; margin-top: 10px;">
                        <input placeholder="Postal code" style="height: 46px;" class="code" type="text">
                        <button class="availability-btn" id="checkcode">Check Availability</button>

                    </div>
                    <div class="error"></div>
                    <div class="error-msg">We are not providing service in this area. We’ll notify you if any helper would start working near your area</div>
                </div>
                <div class="schdule-plan">
                    <div class="room-bath">
                        <p>Select number of rooms and bath</p>
                        <select name="" class="room" onchange="room()" id="room">
                            <option value="">1 bed</option>
                            <option value="">2 bed</option>
                            <option value="">3 bed</option>
                            <option value="">4 bed</option>
                            <option value="">5 bed</option>
                        </select>
                        <select name="" class="bath" onchange="room()" id="bath">
                            <option value="">1 bath</option>
                            <option value="">2 bath</option>
                            <option value="">3 bath</option>
                            <option value="">4 bath</option>
                            <option value="">5 bath</option>
                        </select>
                    </div>
                    <div class="hr-line"></div>
                    <div class="room-bath time-date-hrs">
                        <div style="">
                            <p>When do you need the cleaner?</p>
                            <div class="time-date">
                                <div class="date">
                                    <div class="date-img"><img src="./images/calendar-book-service.png" alt=""></div>
                                    <div class="tomorrow-date"></div>
                                </div>
                                <select name="" class="bath" onchange="cleantime()" id="cleantime">
                                    <option value="8" selected>8:00</option>
                                    <option value="8.5">8:30</option>
                                    <option value="9">9:00</option>
                                    <option value="9.5">9:30</option>
                                    <option value="10">10:00</option>
                                    <option value="10.5">10:30</option>
                                    <option value="11">11:00</option>
                                    <option value="11.5">11:30</option>
                                    <option value="12">12:00</option>
                                    <option value="12.5">12:30</option>
                                    <option value="13">13:00</option>
                                    <option value="13.5">13:30</option>
                                    <option value="14">14:00</option>
                                    <option value="14.5">14:30</option>
                                    <option value="15">15:00</option>
                                    <option value="15.5">15:30</option>
                                    <option value="16">16:00</option>
                                    <option value="16.5">16:30</option>
                                    <option value="17">17:00</option>
                                    <option value="17.5">17:30</option>
                                    <option value="18">18:00</option>
                                </select>
                            </div>
                        </div>
                        <div style="margin-left: auto;margin-right: auto;">
                            <p>How long do you need your cleaner to stay?</p>
                            <select name="" onchange="hours()" id="hours">
                                <option value="3" selected>3.0 Hrs</option>
                                <option value="3.5">3.50 Hrs</option>
                                <option value="4">4.0 Hrs</option>
                                <option value="4.5">4.50 Hrs</option>
                                <option value="5">5.0 Hrs</option>
                                <option value="5.5">5.50 Hrs</option>
                                <option value="6">6.0 Hrs</option>
                                <option value="6.5">6.50 Hrs</option>
                                <option value="7">7.0 Hrs</option>
                                <option value="7.5">7.50 Hrs</option>
                                <option value="8">8.0 Hrs</option>
                                <option value="8.5">8.50 Hrs</option>
                                <option value="9">9.0 Hrs</option>
                                <option value="9.5">9.50 Hrs</option>
                                <option value="10">10.0 Hrs</option>
                                <option value="10.5">10.50 Hrs</option>
                                <option value="11">11.0 Hrs</option>
                                <option value="11.5">11.50 Hrs</option>
                                <option value="12">12.0 Hrs</option>
                            </select>
                        </div>
                    </div>
                    <div class="servicetime-error">Could not completed the service request, because service booking request is must be completed within 21:00 time</div>
                    <div class="hr-line"></div>
                    <div class="service">
                        <div class="service-name">
                            <strong>Extra services</strong>
                        </div>
                        <div class="price-menu">
                            <div class="one">
                                <div class="one-img">
                                    <div class="green-one" onclick="greenimgone()"></div>
                                    <div class="img-one img-1" onclick="imgone()"></div>
                                    <!-- <img class="img-one" src="./images/1.png" alt=""> -->

                                </div>
                                <div class="menu-name">
                                    Inside cabinets
                                </div>
                            </div>
                            <div class="two">
                                <div class="two-img">
                                    <div class="green-two" onclick="greenimgtwo()"></div>
                                    <div class="img-two img-2" onclick="imgtwo()"></div>
                                    <!-- <img class="img-two" src="./images/2.png" alt=""> -->


                                </div>
                                <div class="menu-name">
                                    Inside fridge
                                </div>
                            </div>
                            <div class="three">
                                <div class="three-img">
                                    <div class="green-three" onclick="greenimgthree()"></div>
                                    <div class="img-three img-3" onclick="imgthree()"></div>
                                    <!-- <img class="img-three" src="./images/3.png" alt=""> -->

                                </div>
                                <div class="menu-name">
                                    Inside oven
                                </div>

                            </div>
                            <div class="four">
                                <div class="four-img">
                                    <div class="green-four" onclick="greenimgfour()"></div>
                                    <div class="img-four img-4" onclick="imgfour()"></div>
                                    <!-- <img class="img-four" src="./images/4.png" alt=""> -->

                                </div>
                                <div class="menu-name">
                                    Laundry <br> wash & dry
                                </div>

                            </div>
                            <div class="five">
                                <div class="five-img">
                                    <div class="green-five" onclick="greenimgfive()"></div>
                                    <div class="img-five img-5" onclick="imgfive()"></div>
                                    <!-- <img class="img-five" src="./images/5.png" alt=""> -->
                                </div>
                                <div class="menu-name">
                                    Interior <br> windows
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="hr-line"></div>
                    <div class="comments">
                        <p>Comments</p>
                        <div class="text-area">
                            <textarea name="" id="" cols="0" rows="0"></textarea>
                        </div>
                        <div class="pets">
                            <input type="checkbox">I have pets at home

                        </div>
                    </div>
                    <div class="hr-line"></div>
                    <div style="width: fit-content;margin-left: auto;">
                        <button id="Secondsubmit" class="sec-2btn">Continue</button>
                    </div>
                </div>
                <div class="your-details">
                    <p style="font-weight: 700; font-size: 18px;">Enter your contact details, so we can serve you in better way!</p>
                    <div class="address">

                    </div>

                    <div class="add-address">
                        + Add New Address
                    </div>
                    <div class="addressform">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Street name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Street name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">House number</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="House number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Postal code</label>
                                    <input type="text" class="form-control" placeholder="Postal code" id="inputCity">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">City</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Bonn</option>
                                        <option>...</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputZip">Phone number</label>
                                    <input type="text" class="form-control" placeholder="Phone number" id="Phone">
                                </div>
                            </div>
                            <button class="save btn btn-primary">Save</button>
                            <button class="cancel btn btn-primary">Cancel</button>
                        </form>
                    </div>
                    <div class="sec-3-error"></div>
                    <div class="hr-line"></div>
                    <div class="continue-btn sec-3btn">Continue</div>

                </div>
                <div class="payment-method">
                    <div style="font-weight: 700; font-size: 18px;">Pay securely with Helperland payment gateway!</div>
                    <div style="font-weight: 400; font-size: 18px;">Promo code (optional)</div>
                    <div style="display: flex; margin-top: 10px;">
                        <input placeholder="Promo code (optional)" type="text">
                        <div class="apply-btn">Apply</div>
                    </div>
                    <div class="hr-line"></div>
                    <div class="card-details">
                        <div style="display: flex; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                            </svg>
                            <input type="text" placeholder="Card Number"></label>
                        </div>
                        <div>MM/YY CVC</div>
                    </div>
                    <div class="hr-line"></div>
                    <div class="terms">
                        <div><input type="checkbox"></div>
                        <label for="checkbox">I accepted <a href="#" style="color: #1D7A8C;">terms and conditions</a>,
                            the <a href="#" style="color: #1D7A8C;">cancellation policy</a>and the <a href="#" style="color: #1D7A8C;">privacy policy</a>.
                            I confirm that Helperland starts to execute the contract before the expiry of the withdrawal period and I lose my right of withdrawal as a consumer with full performance of the contract.
                        </label>
                    </div>
                    <div class="hr-line"></div>
                    <div class="sec-4-error"></div>
                    <div class="sec-4btn">Complete Booking</div>
                </div>
            </div>
            <div class="right-section">
                <div class="defaultinvoice">
                    <div class="invoice-head">
                        Payment Summary
                    </div>

                    <div class="invoice-body">
                        <p style="font-weight: 700; font-size: 18px;">Duration</p>
                        <div class="">
                            <span>Basic</span>
                        </div>

                        <div class="invoice-hr-line"></div>
                        <div style="display: flex; justify-content: space-between; font-weight: 700;">
                            <p>Total Service Time</p>
                            <span style="display: flex;">
                                <p class="">3Hrs</p>
                                <span></span>
                            </span>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div style="display: flex; justify-content: space-between;">
                            <p>Per cleaning</p>
                            <p>0,00€</p>
                        </div>

                        <div class="invoice-hr-line"></div>
                        <div class="payment-amount" style="display: flex; justify-content: space-between;color: #1D7A8C;">
                            <p style="font-size: 20px; padding-top: 20px;">Total Payment</p>
                            <p style="font-weight: 700; font-size: 42px;">0,00€ </p>
                        </div>

                    </div>
                    <div class="invoice-footer">
                        <div class="smile-img"><img src="./images/smiley.png" alt=""></div>
                        <div style="margin-left: 8px;">See what is always included</div>
                    </div>

                </div>
                <div class="invoice">
                    <div class="invoice-head">
                        Payment Summary
                    </div>

                    <div class="invoice-body">
                        <div class="date-time-details">
                            <div class="invoice-date">
                            </div>
                            <div class="bed-bath">
                            </div>
                        </div>
                        <p style="font-weight: 700; font-size: 18px;">Duration</p>
                        <div class="basic-time">
                            <span>Basic</span><span>3 Hrs</span>
                        </div>
                        <div class="extra-service" id="extra-service">
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div style="display: flex; justify-content: space-between; font-weight: 700;">
                            <p>Total Service Time</p>
                            <span style="display: flex;">
                                <p class="total-time">0</p>
                                <span></span>
                            </span>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div style="display: flex; justify-content: space-between;">
                            <p>Per cleaning</p>
                            <p class="percleaning">$87</p>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <p>Discount</p>
                            <p>- $27</p>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="payment-amount" style="display: flex; justify-content: space-between;color: #1D7A8C;">
                            <p style="font-size: 20px; padding-top: 20px;">Total Payment</p>
                            <p style="font-weight: 700; font-size: 42px;">$<span class="total-amount">60</span> </p>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <p>Effective Price</p>
                            <p class="effectiveprice" style="font-weight: 700; font-size: 20px;">$50.4</p>
                        </div>
                        <div>*You will save 20% according to §35a EStG.</div>

                    </div>
                    <div class="invoice-footer">
                        <div class="smile-img"><img src="./images/smiley.png" alt=""></div>
                        <div style="margin-left: 8px;">See what is always included</div>
                    </div>

                </div>
                <div class="question-faq">
                    <div class="question-head">Questions?</div>
                    <div class="question-body">
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <div class="questions">
                            <div><img src="./images/keyboard-right-arrow-button-copy.png" style="" alt=""></div>
                            <div>Which Helperland professional will come to my place?</div>
                        </div>
                        <div class="invoice-hr-line"></div>
                        <p><a href="index.php?function=FAQ" target="_blank">For more help</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="spinner">
            <div class="d-flex justify-content-center">
                <div class="spinner-border text-dark" role="status">
                    <!-- <img src="assets/images/logo-small.png" alt="">  -->
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php' ?>
    <script>
        $(".sec-4btn").click(function() {
            var addid = parseFloat(document.querySelector("input[type='radio']:checked").value);
            var today = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yy = today.getFullYear();
            // 
            var ServiceStartDate = dd + "/" + mm + "/" + yy;
            var ServiceStartTime = document.querySelector("#cleantime").options[document.querySelector("#cleantime").selectedIndex].innerHTML;
            var ZipCode = document.querySelector(".code").value;
            var Bed = parseFloat(document.getElementById("room").options[document.getElementById("room").selectedIndex].innerHTML);
            var Bath = parseFloat(document.getElementById("bath").options[document.getElementById("bath").selectedIndex].innerHTML);
            if (document.querySelector(".extra-service").childElementCount > 0) {
                for (i = 0; i < document.querySelector(".extra-service").childElementCount; i++) {
                    var ExtraService = ExtraService + " " + document.querySelector(".extra-service").children[i].className;
                }
            } else {
                var ExtraService = "";
            }

            var ServiceHours = parseFloat(document.querySelector(".basic-time").children[1].innerHTML);
            var ExtraHours = parseFloat(document.querySelector(".total-time").innerHTML) - parseFloat(document.querySelector(".basic-time").children[1].innerHTML);
            var TotalHours = parseFloat(document.querySelector(".total-time").innerHTML);
            var SubTotal = document.querySelector(".percleaning").innerHTML.replace("$", "");
            console.log(SubTotal, Discount, TotalCost, effectiveprice);
            var Discount = 27;
            var TotalCost = document.querySelector(".total-amount").innerHTML;
            var effectiveprice = document.querySelector(".effectiveprice").innerHTML.replace("$", "");
            var Comments = document.querySelector(".text-area").children[0].innerHTML;
            var HasPets = "no";
            if (document.querySelector(".pets").children[0].checked) {
                var HasPets = "Yes";
            };
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yy = today.getFullYear();
            // 
            var CreatedDate = dd + "/" + mm + "/" + yy;
            $.ajax({
                url: "https://localhost/Helperland/MVC/index.php?function=ServiceRequestSubmit",
                type: "POST",
                data: {
                    "addid": addid,
                    "ServiceStartDate": ServiceStartDate,
                    "ServiceStartTime": ServiceStartTime,
                    "ZipCode": ZipCode,
                    "Bed": Bed,
                    "Bath": Bath,
                    "ExtraService": ExtraService,
                    "ServiceHours": ServiceHours,
                    "ExtraHours": ExtraHours,
                    "TotalHours": TotalHours,
                    "SubTotal": SubTotal,
                    "Discount": Discount,
                    "TotalCost": TotalCost,
                    "effectiveprice": effectiveprice,
                    "Comments": Comments,
                    "HasPets": HasPets,
                    "CreatedDate": CreatedDate,



                },
                success: function(data) {
                    data = data.trim();
                    console.log(data);
                    if (data == "success") {
                        Swal.fire(
                            'Service Request Completed',
                            'success'
                        )
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }
                }
            })
        })
    </script>
    <script>
        function classToggle() {
            const navs = document.querySelectorAll('.Navbar__Items');
            navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
        }

        document.querySelector('.Navbar__Link-toggle')
            .addEventListener('click', classToggle);
    </script>
    <!-- <script>var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });</script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/JS/book-service.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.querySelector(".code").addEventListener("input", function() {

            var Split = document.querySelector('.code').value.split('');
            var format = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
            if (Split.length == 0) {
                document.querySelector(".error").innerHTML = "Please Enter PostalCode";
                document.querySelector("#checkcode").style.display = "none";
            } else {
                document.querySelector(".error").innerHTML = "";
                document.querySelector("#checkcode").style.display = "block";
                if (Split[0] == " " || Split[0].match(format) != null || ($.isNumeric($(".code").val()) == false)) {
                    document.querySelector("#checkcode").style.display = "none";
                    document.querySelector(".error").innerHTML = "White Spaces,Symbols and Characters are not Allowed in Postalcode";
                } else {

                    for (i = 0; i < $(".code").val().length; i++) {
                        if ($(".code").val()[i] == " ") {
                            document.querySelector("#checkcode").style.display = "none";
                            $(".error").html("White Spaces not Allowed");

                        } else {
                            // $('#checkcode').removeAttr('disabled');
                            $(".error").html("");
                            document.querySelector("#checkcode").style.display = "block";
                        }
                    }
                    // document.querySelector(".error").innerHTML = "";
                    document.querySelector("#checkcode").style.display = "block";
                }
            }

        });
        var checkcode = document.getElementById("checkcode");

        checkcode.onclick = (e) => {
            e.preventDefault();
            var code = document.querySelector(".code").value
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://localhost/Helperland/MVC/index.php?function=Checkcode&parameter=" + code, true);

            xhr.onload = () => {
                // let data = xhr.response;
                // console.log(xhr.response);


                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var data = xhr.response;
                        data = data.trim();
                        // console.log(data);
                        if (data === "success") {
                            schdule();
                            secondstep();
                            invoice();
                            showaddress(e);
                            document.querySelector("#tab-2").removeAttribute("disabled");
                            document.querySelector("#inputCity").value = document.querySelector(".code").value;
                            document.querySelector("#inputCity").disabled = true;
                            document.querySelector(".error-msg").style.display = "none";
                        } else {
                            document.querySelector(".error-msg").style.display = "block";
                        }


                    }
                }
            }
            xhr.send();
        }
    </script>
    <script>
        $(".sec-2btn").click(function() {
            details();
            thirdstep();
            document.querySelector("#tab-3").removeAttribute("disabled");
        });
        $(".add-address").click(function(e) {
            e.preventDefault();
            $(".add-address").hide();
            $(".addressform").show();

        });

        $(".cancel").click(function(e) {
            e.preventDefault();
            $(".addressform").hide();
            $(".add-address").show();
        });
        $(".save").click(function(e) {
            // store address
            e.preventDefault();
            streetname = document.getElementById("inputEmail4").value;
            house = document.getElementById("inputPassword4").value;
            postal = document.getElementById("inputCity").value;
            city = document.getElementById("inputState").options[document.getElementById("inputState").selectedIndex].innerHTML;
            phone = document.getElementById("Phone").value;
            $.ajax({
                url: "https://localhost/Helperland/MVC/index.php?function=AddressSubmit",
                type: "POST",
                data: {
                    "streetname": streetname,
                    "house": house,
                    "postal": postal,
                    "city": city,
                    "phone": phone,
                },
                success: function() {
                    $(".add-address").show();
                    $(".addressform").hide();
                }
            })
            // show address
            showaddress(e);
        })

        function showaddress(e) {
            e.preventDefault(); {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "https://localhost/Helperland/MVC/index.php?function=GetAddress", true);

                xhr.onload = () => {
                    // let data = xhr.response;
                    // console.log(xhr.response);


                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            var data = xhr.response;
                            // data = data.trim();
                            data = data.toString();

                            // console.log(data);
                            if (data == "fail") {
                                console.log("error");
                            } else {
                                document.querySelector(".address").innerHTML = data;
                                $(".add-address").show();
                                $(".addressform").hide();
                            }


                        }
                    }
                }
                xhr.send();
            }
        }
    </script>
    <script>
        $(".save").click(function(e) {
            e.preventDefault();

        });
        // setInterval(add,1000);
        // add();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <script>
        document.querySelector(".sec-4btn").addEventListener("click", function() {
            if (document.querySelector(".terms").children[0].children[0].checked) {} else {
                document.querySelector(".sec-4-error").innerHTML = "Please accept Terms And condition";
            }
        })
    </script>

</body>

</html>