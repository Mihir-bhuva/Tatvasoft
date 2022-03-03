<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td class="dashboard" style="height: 20px;">Dashboard</td>
                    </tr>
                    <tr>
                        <td class="servicehistory" style="height: 20px;">Service History</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Service Schedule</td>
                    </tr>
                    <tr>
                        <td class="favorite" style="height: 20px;">Favourite Pros</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Invoices</td>
                    </tr>
                    <tr>
                        <td>Notifications</td>
                    </tr>
                </tbody>
            </table>
            <div class="setting">
                <div class="profilenav">
                    <div class="mydetails">My Details</div>
                    <div class="myaddress">My Addresses</div>
                    <div class="changepassword">Change Password</div>
                </div>
                <div class="form">
                    <div class="row">
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
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <button class="save">Save</button>
                        </div>
                    </div>
                </div>
                <div class="address" style="display: none;">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Invoicing</th>
                                <th>Addresses</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
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

    </main>
    <?php include 'footer.php';
    include 'customersettingajax.php' ?>
    <script>
        $(".dashboard").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=customerdashboard"
        });
        $(".servicehistory").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=Servicehistory"
        });
        $(".favorite").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=favoritepros"
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