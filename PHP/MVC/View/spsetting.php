<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstarpform -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/CSS/navbar.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">
    <link rel="stylesheet" href="assets/CSS/servicehistory.css">


</head>

<body>
    <?php include 'header.php' ?>
    <main>
        <div class="heading">Welcome, <strong><?php echo $_SESSION['FirstName'] . "  " . $_SESSION['LastName'] ?></strong></div>
        <div style="display:flex">
        <table class="table-1 table table-hover">
                <thead></thead>
                <tbody>
                    <tr>
                        <td style="height: 20px;">Dashboard</td>
                    </tr>
                    <tr class="newrequest">
                        <td style="height: 20px;">New Service Requests</td>
                    </tr>
                    <tr class="upcomingservice">
                        <td style="height: 20px;">Upcoming Services</td>
                    </tr>
                    <tr class="serviceschdule">
                        <td style="height: 20px;">Service Schedule</td>
                    </tr>
                    <tr class="servicehistory">
                        <td style="height: 20px;"> Service History</td>
                    </tr>
                    <tr class="myratings">
                        <td style="height: 20px;">My Ratings</td>
                    </tr>
                    <tr class="blockcus">
                        <td>Block Customer</td>
                    </tr>
                </tbody>
            </table>
            <div class="setting">
                <div class="profilenav">
                    <div class="mydetails">My Details</div>
                    <div class="changepassword">Change Password</div>
                </div>
                <div class="form">
                    <div class="status">
                        <label for="">
                            <h2>Account Status: <span>Active</span></h2>
                        </label>
                    </div>
                    <div class="row">
                        <div class="avtardetails">
                            <div class="basicdetails">
                                <label for="">
                                    <h3>Basic details</h3>
                                </label>
                                <hr>
                            </div>
                            <div class="profile">
                                <img class="profilepic" src="assets/images/avatar-car.png" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <label for="First Name">First Name</label>
                            <input type="text" id="FirstName" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col">
                            <label for="Last Name">Last Name</label>
                            <input type="text" id="LastName" class="form-control" placeholder="Last name" required>
                        </div>
                        <div class="col">
                            <label for="email">E-mail address</label>
                            <input type="email" id="email" class="form-control" disabled placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="Mobile number">Mobile number</label>
                            <input type="text" id="Mobilenumber" class="form-control" placeholder="Mobile number" required>
                        </div>
                        <div class="col">
                            <label for="Last Name" style="white-space: nowrap;">Date of Birth</label>
                            <div style="display: flex;">
                                <div class="col-3">
                                    <select class="custom-select input-sm" id="inlineFormCustomSelectday">
                                        <option value=01>1</option>
                                        <option value=02>2</option>
                                        <option value=03>3</option>
                                        <option value=04>4</option>
                                        <option value=05>5</option>
                                        <option value=06>6</option>
                                        <option value=07>7</option>
                                        <option value=08>8</option>
                                        <option value=09>9</option>
                                        <option value=10>10</option>
                                        <option value=11>11</option>
                                        <option value=12>12</option>
                                        <option value=13>13</option>
                                        <option value=14>14</option>
                                        <option value=15>15</option>
                                        <option value=16>16</option>
                                        <option value=17>17</option>
                                        <option value=18>18</option>
                                        <option value=19>19</option>
                                        <option value=20>20</option>
                                        <option value=21>21</option>
                                        <option value=22>22</option>
                                        <option value=23>23</option>
                                        <option value=24>24</option>
                                        <option value=25>25</option>
                                        <option value=26>26</option>
                                        <option value=27>27</option>
                                        <option value=28>28</option>
                                        <option value=29>29</option>
                                        <option value=30>30</option>
                                        <option value=31>31</option>
                                    </select>
                                </div>
                                <div class="col-5">
                                    <select class="custom-select" id="inlineFormCustomSelectmonth">
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="custom-select" id="inlineFormCustomSelectyear">
                                        <option value=1913>1913</option>
                                        <option value=1914>1914</option>
                                        <option value=1915>1915</option>
                                        <option value=1916>1916</option>
                                        <option value=1917>1917</option>
                                        <option value=1918>1918</option>
                                        <option value=1919>1919</option>
                                        <option value=1920>1920</option>
                                        <option value=1921>1921</option>
                                        <option value=1922>1922</option>
                                        <option value=1923>1923</option>
                                        <option value=1924>1924</option>
                                        <option value=1925>1925</option>
                                        <option value=1926>1926</option>
                                        <option value=1927>1927</option>
                                        <option value=1928>1928</option>
                                        <option value=1929>1929</option>
                                        <option value=1930>1930</option>
                                        <option value=1931>1931</option>
                                        <option value=1932>1932</option>
                                        <option value=1933>1933</option>
                                        <option value=1934>1934</option>
                                        <option value=1935>1935</option>
                                        <option value=1936>1936</option>
                                        <option value=1937>1937</option>
                                        <option value=1938>1938</option>
                                        <option value=1939>1939</option>
                                        <option value=1940>1940</option>
                                        <option value=1941>1941</option>
                                        <option value=1942>1942</option>
                                        <option value=1943>1943</option>
                                        <option value=1944>1944</option>
                                        <option value=1945>1945</option>
                                        <option value=1946>1946</option>
                                        <option value=1947>1947</option>
                                        <option value=1948>1948</option>
                                        <option value=1949>1949</option>
                                        <option value=1950>1950</option>
                                        <option value=1951>1951</option>
                                        <option value=1952>1952</option>
                                        <option value=1953>1953</option>
                                        <option value=1954>1954</option>
                                        <option value=1955>1955</option>
                                        <option value=1956>1956</option>
                                        <option value=1957>1957</option>
                                        <option value=1958>1958</option>
                                        <option value=1959>1959</option>
                                        <option value=1960>1960</option>
                                        <option value=1961>1961</option>
                                        <option value=1962>1962</option>
                                        <option value=1963>1963</option>
                                        <option value=1964>1964</option>
                                        <option value=1965>1965</option>
                                        <option value=1966>1966</option>
                                        <option value=1967>1967</option>
                                        <option value=1968>1968</option>
                                        <option value=1969>1969</option>
                                        <option value=1970>1970</option>
                                        <option value=1971>1971</option>
                                        <option value=1972>1972</option>
                                        <option value=1973>1973</option>
                                        <option value=1974>1974</option>
                                        <option value=1975>1975</option>
                                        <option value=1976>1976</option>
                                        <option value=1977>1977</option>
                                        <option value=1978>1978</option>
                                        <option value=1979>1979</option>
                                        <option value=1980>1980</option>
                                        <option value=1981>1981</option>
                                        <option value=1982>1982</option>
                                        <option value=1983>1983</option>
                                        <option value=1984>1984</option>
                                        <option value=1985>1985</option>
                                        <option value=1986>1986</option>
                                        <option value=1987>1987</option>
                                        <option value=1988>1988</option>
                                        <option value=1989>1989</option>
                                        <option value=1990>1990</option>
                                        <option value=1991>1991</option>
                                        <option value=1992>1992</option>
                                        <option value=1993>1993</option>
                                        <option value=1994>1994</option>
                                        <option value=1995>1995</option>
                                        <option value=1996>1996</option>
                                        <option value=1997>1997</option>
                                        <option value=1998>1998</option>
                                        <option value=1999>1999</option>
                                        <option value=2000>2000</option>
                                        <option value=2001>2001</option>
                                        <option value=2002>2002</option>
                                        <option value=2003>2003</option>
                                        <option value=2004>2004</option>
                                        <option value=2005>2005</option>
                                        <option value=2006>2006</option>
                                        <option value=2007>2007</option>
                                        <option value=2008>2008</option>
                                        <option value=2009>2009</option>
                                        <option value=2010>2010</option>
                                        <option value=2011>2011</option>
                                        <option value=2012>2012</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="Last Name" style="white-space: nowrap;">Nationality</label>
                            <select class="form-control ng-pristine ng-valid ng-touched" formcontrolname="NationalityId">
                                <!---->
                                <option value="176625">German</option>
                                <option value="176626">Afghan</option>
                                <option value="176627">Egyptian</option>
                                <option value="176628">Albanian</option>
                                <option value="176629">Algerian</option>
                                <option value="176630">American</option>
                                <option value="176631">andorranisch</option>
                                <option value="176632">angolan</option>
                                <option value="176633">Antiguan</option>
                                <option value="176634">äquatorialguineisch</option>
                                <option value="176635">Argentinean</option>
                                <option value="176636">Armenian</option>
                                <option value="176637">Azerbaijani</option>
                                <option value="176638">Ethiopian</option>
                                <option value="176639">Australian</option>
                                <option value="176640">bahamaisch</option>
                                <option value="176641">bahrainisch</option>
                                <option value="176642">bangladesh</option>
                                <option value="176643">Belgian</option>
                                <option value="176644">belizean</option>
                                <option value="176645">Beninese</option>
                                <option value="176646">Dzongkha</option>
                                <option value="176647">Bolivian</option>
                                <option value="176648">Bosnian herzegowinisch</option>
                                <option value="176649">botsuanisch</option>
                                <option value="176650">Brazilian</option>
                                <option value="176651">British</option>
                                <option value="176652">bruneiisch</option>
                                <option value="176653">Bulgarian</option>
                                <option value="176654">burkinisch</option>
                                <option value="176655">burundisch</option>
                                <option value="176656">cabo-verdisch</option>
                                <option value="176657">Chilean</option>
                                <option value="176658">Chinese</option>
                                <option value="176659">Costa Rican</option>
                                <option value="176660">Danish</option>
                                <option value="176661">the north Mariana Islands</option>
                                <option value="176662">the Ver. Arab. Emirates</option>
                                <option value="176664">dominicanisch</option>
                                <option value="176665">Dominican</option>
                                <option value="176666">dschibutisch</option>
                                <option value="176667">Ecuadorian</option>
                                <option value="176668">Eritrean</option>
                                <option value="176669">Estonian</option>
                                <option value="176670">Fijian</option>
                                <option value="176671">Finnish</option>
                                <option value="176672">French</option>
                                <option value="176673">gabonese</option>
                                <option value="176674">gambian</option>
                                <option value="176675">Georgian</option>
                                <option value="176676">Ghanaian</option>
                                <option value="176677">grenadian</option>
                                <option value="176678">Greek</option>
                                <option value="176679">Guatemalan</option>
                                <option value="176680">Guinea-bissauisch</option>
                                <option value="176681">guineisch</option>
                                <option value="176682">guyanese</option>
                                <option value="176683">Haitian</option>
                                <option value="176684">Honduran</option>
                                <option value="176685">Indian</option>
                                <option value="176686">Indonesian</option>
                                <option value="176687">Iraqi</option>
                                <option value="176688">Iranian</option>
                                <option value="176689">Irish</option>
                                <option value="176690">Icelandic</option>
                                <option value="176691">Israeli</option>
                                <option value="176692">Italian</option>
                                <option value="176693">Ivorian</option>
                                <option value="176694">Jamaican</option>
                                <option value="176695">Japanese</option>
                                <option value="176696">Yemeni</option>
                                <option value="176697">Jordanian</option>
                                <option value="176698">Cambodian</option>
                                <option value="176699">cameroonian</option>
                                <option value="176700">Canadian</option>
                                <option value="176701">Kazakh</option>
                                <option value="176702">Qatari</option>
                                <option value="176703">Kenyan</option>
                                <option value="176704">Kyrgyz</option>
                                <option value="176705">Kiribati</option>
                                <option value="176706">Colombian</option>
                                <option value="176707">comorian</option>
                                <option value="176708">Congolese</option>
                                <option value="176709">Korean</option>
                                <option value="176710">Croatian</option>
                                <option value="176711">Cuban</option>
                                <option value="176712">kuwaitisch</option>
                                <option value="176713">Laotian</option>
                                <option value="176714">lesothisch</option>
                                <option value="176715">Latvian</option>
                                <option value="176716">Lebanese</option>
                                <option value="176717">Liberian</option>
                                <option value="176718">libyan</option>
                                <option value="176719">liechtensteinisch</option>
                                <option value="176720">Lithuanian</option>
                                <option value="176721">lucianisch</option>
                                <option value="176722">Luxembourgish</option>
                                <option value="176723">Madagascan</option>
                                <option value="176724">Macedonian / Macedonian</option>
                                <option value="176725">malawian</option>
                                <option value="176726">Malaysian</option>
                                <option value="176727">maldivian</option>
                                <option value="176728">malisch</option>
                                <option value="176729">Maltese</option>
                                <option value="176730">Moroccan</option>
                                <option value="176731">Marshallese</option>
                                <option value="176732">mauritanian</option>
                                <option value="176733">Mauritian</option>
                                <option value="176734">Mexican</option>
                                <option value="176735">micronesian</option>
                                <option value="176736">Moldavian</option>
                                <option value="176737">Monegasque</option>
                                <option value="176738">Mongolian</option>
                                <option value="176739">montenegrin</option>
                                <option value="176740">Mozambican</option>
                                <option value="176741">Myanmarian</option>
                                <option value="176742">Namibian</option>
                                <option value="176743">Nauruan</option>
                                <option value="176744">Nepalese</option>
                                <option value="176745">New Zealand</option>
                                <option value="176746">Nicaraguan</option>
                                <option value="176747">Dutch</option>
                                <option value="176748">Nigerian</option>
                                <option value="176749">nigrisch</option>
                                <option value="176750">Norwegian</option>
                                <option value="176751">Omani</option>
                                <option value="176752">Austrian</option>
                                <option value="176754">Pakistani</option>
                                <option value="176755">Palauan</option>
                                <option value="176756">Panamanian</option>
                                <option value="176757">Papua-neuguineisch</option>
                                <option value="176758">Paraguayan</option>
                                <option value="176759">Peruvian</option>
                                <option value="176760">Filipino</option>
                                <option value="176761">Polish</option>
                                <option value="176762">Portuguese</option>
                                <option value="176763">Rwandan</option>
                                <option value="176764">Romanian</option>
                                <option value="176765">Russian</option>
                                <option value="176766">salomonisch</option>
                                <option value="176767">Salvadorian</option>
                                <option value="176768">Zambian</option>
                                <option value="176769">Samoan</option>
                                <option value="176770">sanmarinesisch</option>
                                <option value="176771">santomeisch</option>
                                <option value="176772">Saudi-arabian</option>
                                <option value="176773">Swedish</option>
                                <option value="176774">Swiss</option>
                                <option value="176775">Senegalese</option>
                                <option value="176776">Serbian</option>
                                <option value="176777">seychellisch</option>
                                <option value="176778">sierraleonisch</option>
                                <option value="176779">Zimbabwean</option>
                                <option value="176780">Singaporean</option>
                                <option value="176781">Slovak</option>
                                <option value="176782">Slovenian</option>
                                <option value="176783">somali</option>
                                <option value="176784">Spanish</option>
                                <option value="176785">Sri Lankan</option>
                                <option value="176786">South African</option>
                                <option value="176787">Sudanese</option>
                                <option value="176788">südsudanesisch</option>
                                <option value="176789">surinamese</option>
                                <option value="176790">swasiländisch</option>
                                <option value="176791">Syrian</option>
                                <option value="176792">Tajik</option>
                                <option value="176793">Taiwanese</option>
                                <option value="176794">Tanzanian</option>
                                <option value="176795">Thai</option>
                                <option value="176796">togolese</option>
                                <option value="176797">tongan</option>
                                <option value="176798">Chadian</option>
                                <option value="176799">Czech</option>
                                <option value="176800">Tunisian</option>
                                <option value="176801">Turkish</option>
                                <option value="176802">Turkmen</option>
                                <option value="176803">Tuvaluan</option>
                                <option value="176804">Ugandan</option>
                                <option value="176805">Ukrainian</option>
                                <option value="176806">Hungarian</option>
                                <option value="176807">Uruguayan</option>
                                <option value="176808">Uzbek</option>
                                <option value="176809">vanuatuisch</option>
                                <option value="176810">Venezuelan</option>
                                <option value="176811">Vietnamese</option>
                                <option value="176812">vince table</option>
                                <option value="176813">from Niue</option>
                                <option value="176814">from St. Kitts and Nevis</option>
                                <option value="176815">from Timor-Leste</option>
                                <option value="176816">from Trinidad and Tobago</option>
                                <option value="176817">belarusian</option>
                                <option value="176818">zentralafrikanisch</option>
                                <option value="176819">zyprisch</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Gender</label>
                            <div class="form-chek">
                                <input value="Male" class="form-checkinput" style="margin-top: 24px;" type="radio" name="flexRadioDefault" id="flexRadoDefault1">
                                <label style="margin-left: 15px;" class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                                <input value="Female" class="form-checkinput" style="margin-top: 24px;" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label style="margin-left: 15px;" class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                                <input value="Other" class="form-checkinput" style="margin-top: 24px;" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                <label style="margin-left: 15px;" class="form-check-label" for="flexRadioDefault3">
                                    Rather not to say
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row imgrow">
                        <label for="">Select Avatar</label>
                        <div class="col avtar">
                            <div class="img1"><img src="assets/images/avatar-car.png" alt=""></div>
                            <div class="img2"><img src="assets/images/avatar-female.png" alt=""></div>
                            <div class="img3"><img src="assets/images/avatar-hat.png" alt=""></div>
                            <div class="img4"><img src="assets/images/avatar-iron.png" alt=""></div>
                            <div class="img5"><img src="assets/images/avatar-male.png" alt=""></div>
                            <div class="img6"><img src="assets/images/avatar-ship.png" alt=""></div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="">
                            <h3>My address</h3>
                        </label>
                        <hr>
                        <div class="col">
                            <label for="First Name">Street Name</label>
                            <input type="text" id="StreetName" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col">
                            <label for="Last Name">House Number</label>
                            <input type="text" id="HouseNumber" class="form-control" placeholder="Last name" required>
                        </div>
                        <div class="col">
                            <label for="email">Postal Code</label>
                            <input type="num" id="PostalCode" class="form-control" placeholder="Postal Code" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email">City</label><br>
                            <select class="custom-select " id="inlineFormCustomSelectCity">
                                <option value="">Bonn</option>
                                <option value="">Troisdorf</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <button class="save">Save</button>
                        </div>
                    </div>
                </div>
                <div class="updatepassword" style="display: none;">
                    <label for="conformpassword">Current Password</label>
                    <input type="password" placeholder="Current Password" class="currentpassword form-control" name="currentpassword" autocomplete="off" pattern="^\S+$" required><br>
                    <label for="password">New Password</label>
                    <input type="password" placeholder="New Password" class="password form-control" name="password" pattern="^\S+$" required><br>
                    <label for="conformpassword">Conform Password</label>
                    <input type="password" placeholder="Confirm Password" class="conformpassword form-control" pattern="^\S+$" name="conformpassword" required>
                    <div>
                        <div class="error"> </div>
                    </div>
                    <button name="submit" value="" class="submitbutton savepassword">Save</button>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" style="display: none;" class="btn btn-primary launch" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
        </button>
        <button type="button" style="display: none;" class="btn btn-primary launch1" data-toggle="modal" data-target="#exampleModalCenter1">
            Launch demo modal
        </button>
        <button type="button" style="display: none;" class="btn btn-primary launch2" data-toggle="modal" data-target="#exampleModalCenter2">
            Launch demo modal
        </button>
        <!-- Delete Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title defaultaddresstitle" id="exampleModalCenterTitle">Delete Address</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body defaultaddress">
                        Are you sure you want to delete this address?
                    </div>
                    <div class="modal-footer">
                        <button type="button" value="" onclick="deleteadd(event)" class="btn btn-primary delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- editaddressmodel -->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Address</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="addressform">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Street name</label>
                                        <input type="text" class="form-control" id="Streetname" required placeholder="Street name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">House number</label>
                                        <input type="text" class="form-control" id="Housenumber" required placeholder="House number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Postal code</label>
                                        <input type="text" class="form-control" required placeholder="Postal code" id="inputCity">
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
                                        <input type="text" class="form-control" placeholder="Phone number" required id="Phone">
                                    </div>
                                </div>
                                <!-- <button type="submit" class="save btn btn-primary">Edit</button> -->

                            </form>
                            <div class="addresserror"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" value="" onclick="editadd(event)" class="btn save btn-primary edit">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- addadress -->
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Address</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="addressform">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Street name</label>
                                        <input type="text" class="form-control" id="Streetname2" required placeholder="Street name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">House number</label>
                                        <input type="text" class="form-control" id="Housenumber2" required placeholder="House number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Postal code</label>
                                        <input type="text" class="form-control" required placeholder="Postal code" id="inputCity2">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">City</label>
                                        <select id="inputState2" class="form-control">
                                            <option selected>Bonn</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputZip">Phone number</label>
                                        <input type="text" class="form-control" placeholder="Phone number" required id="Phone2">
                                    </div>
                                </div>
                                <!-- <button type="submit" class="save btn btn-primary">Edit</button> -->

                            </form>
                            <div class="addresserror2"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" value="" onclick="addaddress()" class="btn btn-primary addadress">Add</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include 'footer.php';
    include 'spsettingajax.php' ?>
    <script>
        // 
    $(document).ready(function () {
     
    });
        $(".img1,.img2,.img3,.img4,.img5,.img6").click(function(event) {
            $(".profilepic").attr('src', event.target.src)
            $(".img1,.img2,.img3,.img4,.img5,.img6").css("border", "none")
            $(this).css("border", "3px solid rgb(29, 122, 140)")
        })
        $(".newrequest").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=customerdashboard"
        });
        $(".upcomingservice").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=UpcomingService"
        });
        $(".serviceschdule").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=serviceschdule"
        });
        $(".servicehistory").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=servicehistory"
        });
        $(".myratings").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=SPMyRatings"
        });
        $(".blockcus").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=Blockcustomer"
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>