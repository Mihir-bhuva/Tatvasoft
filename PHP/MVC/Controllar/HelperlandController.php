<?php

use function PHPSTORM_META\type;

class HelperlandController
{
    function __construct()
    {
        session_start();
        include('Model/model.php');
        $this->model = new contactusmodel();
    }
    public function HomePage()
    {
        include('View/homepage.php');
    }
    public function Contactus()
    {
        include('View/contactus.php');
    }
    public function Prices()
    {
        include('View/Prices.php');
    }
    public function About()
    {
        include('View/aboutus.php');
    }
    public function FAQ()
    {
        include('View/faq.php');
    }
    public function Createaccount()
    {
        include('View/createaccount.php');
    }
    public function Newpassword()
    {
        include('View/forgetpassword.php');
    }
    public function BecomeHelper()
    {
        include('View/become a-pro.php');
    }
    public function BookService()
    {
        include('View/book-service.php');
    }
    public function UpcomingService()
    {
        include('View/spupcomingservice.php');
    }
    public function serviceschdule()
    {
        include('View/spschdule.php');
    }
    public function ServiceHistory()
    {
        if ($_SESSION['usertype'] == 1) {
            include('View/spservicehistory.php');
        } else {
            include('View/customerservicehistory.php');
        }
    }
    public function customerdashboard()
    {
        if ($_SESSION['usertype'] == 1) {
            include('View/spnewrequest.php');
        } else {
            include('View/customerdashboard.php');
        }
    }
    public function customersetting()
    {
        if ($_SESSION['usertype'] == 1) {
            include('View/spsetting.php');
        } else {
            include('View/customersetting.php');
        }
    }
    public function SPMyRatings()
    {
        include('View/spmyratings.php');
    }
    public function Blockcustomer()
    {
        include('View/spblockcus.php');
    }
    public function AdminServicerequest()
    {
        include('View/adminservicerequest.php');
    }
    public function AdminUsermanage()
    {
        include('View/adminusermanage.php');
    }
    public function ContactUsForm()
    { {
            $url = "http://localhost/Helperland/MVC/index.php?function=Contactus";
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $name = $fname . " " . $lname;
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $email = strtolower($email);
            $message = $_POST['message'];
            $subject = $_POST['subject']; {
                $array = [
                    'subject' => $subject,
                    'email' => $email,
                    'phone' => $phone,
                    'message' => $message,
                    'name' => $name,
                ];
                $result = $this->model->Contactusinsert($array);
                header('Location:' . $url);
                // echo $result
            }
        }
    }
    public function RegisterForm()
    { {
            $url = "http://localhost/Helperland/MVC/index.php?function=Createaccount";
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            // $name = $fname . " " . $lname;
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $email = strtolower($email);
            $password = $_POST['password']; {
                $array = [
                    'email' => $email,
                    'phone' => $phone,
                    'password' => $password,
                    'fname' => $fname,
                    'lname' => $lname,
                ];
                $result = $this->model->Register($array);
                header('Location:' . $url);
            }
        }
    }
    public function SPRegisterForm()
    { {
            $url = "http://localhost/Helperland/MVC/index.php?function=BecomeHelper";
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];

            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $email = strtolower($email);
            $password = $_POST['password']; {
                $array = [
                    'email' => $email,
                    'phone' => $phone,
                    'password' => $password,
                    'fname' => $fname,
                    'lname' => $lname,
                ];
                $result = $this->model->SPRegister($array);
                header('Location:' . $url);
            }
        }
    }
    public function HomepageLogin()
    {
        $url = "http://localhost/Helperland/MVC/index.php";
        $url1 = "http://localhost/Helperland/MVC/index.php?function=customerdashboard";
        $admin = "http://localhost/Helperland/MVC/index.php?function=AdminServicerequest";
        $email = $_POST['email'];
        $email = strtolower($email);
        $password = $_POST['password']; {
            $array = [
                'email' => $email,
                'password' => $password,
            ];
            $result = $this->model->Login($array);

            if ($result == 'fail') {
                print_r($result);
                $_SESSION['loginerror'] = "error";
                header('Location:' . $url);
            } else {
                if ($result[6] == 0) {
                    $_SESSION['userid'] = $result[0];
                    $_SESSION['FirstName'] = $result[1];
                    $_SESSION['LastName'] = $result[2];
                    $_SESSION['login'] = 'success';
                    $_SESSION['checklogin'] = "success";
                    $_SESSION['usertype'] = 0;
                    header('Location:' . $url1);
                    // echo $_SESSION['userid'];
                }
                if ($result[6] == 1) {
                    $_SESSION['userid'] = $result[0];
                    $_SESSION['FirstName'] = $result[1];
                    $_SESSION['LastName'] = $result[2];
                    $_SESSION['login'] = 'success';
                    $_SESSION['checklogin'] = "success";
                    $_SESSION['usertype'] = 1;
                    header('Location:' . $url1);
                }
                if ($result[6] == 2) {
                    $_SESSION['FirstName'] = $result[1];
                    $_SESSION['LastName'] = $result[2];
                    header('Location:' . $admin);
                }
            }
        }
    }
    public function Logout()
    {
        unset($_SESSION['login']);
        unset($_SESSION['usertype']);
        // unset($_SESSION['userid']);
        $url = "http://localhost/Helperland/MVC/index.php";
        header('Location:' . $url);
        $_SESSION['logout'] = "Logout";
    }
    public function Forgetpassword()
    {
        $email = $_POST['email']; {
            $array = [
                'email' => $email,
            ];
        }
        $result = $this->model->Emailexist($array);
        $resetkey = $result['ResetKey'];
        // print_r($resetkey);
        // echo $resetkey;
        if (true) {
            $_POST['email'] = $result['Email'];
            $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'>Hi, .Click Here to Reset Your Password</h6>
        <h5 style='font-size:17px; color:red;'>Please Click This and Reset Your Password </h5>
        <br>
        <a href='http://localhost/Helperland/MVC/index.php?controller=Helperland&function=Newpassword&parameter=$resetkey'> http://localhost/Helperland/MVC/index.php?controller=Helperland&function=Newpassword&parameter=.$resetkey.</a>
        </div>
         ";
            include 'View/activeaccount.php';

            echo '<script type="text/javascript"> window.location="http://localhost/Helperland/MVC/index.php?function=Homepage";</script>';
        } else {
            print_r($result);
            $this->HomePage();
        }
    }
    public function Changepassword()
    {
        $this->Newpassword();
        $password = $_POST['password'];
        $resetkey = $_GET['parameter']; {
            $array = [
                'password' => $password,
                'key' => $resetkey,
            ];
        }
        $result = $this->model->Update($array);
        echo '<script type="text/javascript"> window.location="http://localhost/Helperland/MVC/index.php?function=Homepage";</script>';
        // header('Location:' . $url);
    }
    public function Updatepassword()
    {
        // $this->Newpassword();
        if (isset($_POST)) {
            $id = $_POST['id'];
            $password = $_POST['password'];
            $currentpassword = $_POST['currentpassword'];
            $array = [
                'password' => $password,
                'currentpassword' => $currentpassword,
                'id' => $id,

            ];
            $result = $this->model->Updatepassword($array);
            echo $result;
        }
        // echo '<script type="text/javascript"> window.location="http://localhost/Helperland/MVC/index.php?function=Homepage";</script>';
        // header('Location:' . $url);
    }
    public function Checkcode($parameter)
    {
        // echo $parameter;
        $code = $parameter;
        $result = $this->model->checkcode($code);
        echo $result;
    }
    public function AddressSubmit()
    {
        if (isset($_POST)) {
            $array = [
                "streetname" => $_POST['streetname'],
                "house" => $_POST['house'],
                "postal" => $_POST['postal'],
                "city" => $_POST['city'],
                "phone" => $_POST['phone'],
                "id" => $_POST['id'],
            ];
            $result = $this->model->AddressAdd($array);
            echo $result;
        }
    }
    public function GetAddress()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $result = $this->model->DisplayAddress($id);
            // echo $result;
            foreach ($result as $value) {
                echo '<div class="address-list">
            <input type="radio" name="fav_language" value="' . $value['AddressId'] . '">
            <label>
                <div>
                    <div style="display: flex;">
                        <b>Address:</b>
                        <div style="margin-left: 5px;">' . $value['AddressLine1'] . '</div>
                        <div style="margin-left: 5px;">' . $value['AddressLine2'] . '</div>
                        <div style="margin-left: 5px;">' . $value['City'] . '</div>
                        <div style="margin-left: 5px;"> ' . $value['PostalCode'] . '</div>
                    </div>
                    <div style="display: flex;">
                        <b>Phone number:</b>
                        <div>' . $value['Mobile'] . '
                        </div>
                    </div>
                </div>
            </label>
        </div><br>';
            }
        }
    }
    public function ServiceRequestSubmit()
    {
        if (isset($_POST)) {
            // echo $_POST['userid'];
            $array = [
                "userid" => $_POST['userid'],
                "addid" => $_POST['addid'],
                "ServiceStartDate" => $_POST['ServiceStartDate'],
                "ServiceStartTime" => $_POST['ServiceStartTime'],
                "ZipCode" => $_POST['ZipCode'],
                "Bed" => $_POST['Bed'],
                "Bath" => $_POST['Bath'],
                "ExtraService" => $_POST['ExtraService'],
                "ServiceHours" => $_POST['ServiceHours'],
                "ExtraHours" => $_POST['ExtraHours'],
                "TotalHours" => $_POST['TotalHours'],
                "SubTotal" => $_POST['SubTotal'],
                "Discount" => $_POST['Discount'],
                "TotalCost" => $_POST['TotalCost'],
                "effectiveprice" => $_POST['effectiveprice'],
                "Comments" => $_POST['Comments'],
                "HasPets" => $_POST['HasPets'],
                "CreatedDate" => $_POST['CreatedDate'],
                "favprovider" => $_POST['favprovider'],
            ];
            $result = $this->model->ServiceRequest($array);
            if (sizeof($_POST['favprovider']) > 1) {
                $array = $_POST['favprovider'];
                $mail = $this->model->FavServiceprovider($array);

                foreach ($mail as $value) {
                    $_POST['email'] = $value['Email'];
                    $subject = "Helperland";
                    $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'></h6>
                                        <h5 style='font-size:17px; color:red;'>Fav Service Request</h5>
                                        <br>
                                        </div>
                                        ";
                    include 'View/activeaccount.php';
                    // print_r($value);
                }
                echo $_SESSION['sendmailsp'];
            } else {
                $mail = $this->model->Serviceprovider();
                foreach ($mail as $value) {
                    $_POST['email'] = $value['Email'];
                    $subject = "Helperland";

                    $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'></h6>
                                        <h5 style='font-size:17px; color:red;'>Service Request</h5>
                                        <br>
                                        </div>
                                        ";
                    include 'View/activeaccount.php';
                }
                echo $_SESSION['sendmailsp'];
            }
        }
    }
    public function Favprovider()
    {
        $value = $_POST['userid'];
        $result = $this->model->Favprovider($value);
        foreach ($result as $value) {
            echo '
            <div class="favlist">
                <div class="favimg"><img src="assets/images/avatar-hat.png" alt=""></div><br>
                <div class="favname">Name: ' . $value['FirstName'] . ' ' . $value['LastName'] . '</div>
                <button type="button" class="selectbtn"  value="' . $value['UserId'] . '">Select</button>
            </div>';
        }
    }
    public function CustomerDashboardData()
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];
        }
        $result = $this->model->CustomerDashboardData($userid);
        if ($result == null) {
            echo json_encode($result);
        } else {
            $data['data'] = $result;
            //     foreach($result as $value){

            //     $out['out']='<div class="cus-detail"><div><img src="./images/calendar2.png" alt=""></div><div class="cus-date">'.$value["ServiceStartDate"].'</div></div><div class="cus-detail"><div><img src="./images/layer-712.png" alt=""></div><div class="cus-time">'.$value['ServiceStartTime'].'</div></div>';
            //     array_push($data['data'],$out);
            // }
            echo json_encode($data);
        }
    }
    public function SPNewRequestData()
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];
            $result = $this->model->SPNewRequestData($userid);
            if ($result == null) {
                echo json_encode($result);
            } else {


                foreach ($result as $val) {
                    $var = -1;
                    if ($val['Status'] == "Accepted") {
                        foreach ($result as $time) {
                            $var++;
                            if ($val['ServiceStartTime'] == $time['ServiceStartTime']) {
                                $result[$var]['Conflict'] = 'Conflict';
                            }
                        }
                    }
                }
                $data['data'] = $result;
                // echo'<pre>';
                // print_r($data);
                // die;
                echo json_encode($data);
            }
        }
    }
    public function SPUpcomingserviceData()
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];
        
        $result = $this->model->SPUpcomingserviceData($userid);
        if ($result == null) {
            echo json_encode($result);
        } else {
        $data['data'] = $result;
        echo json_encode($data);}}
    }
    public function SPservicehistoryData()
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];
        
        $result = $this->model->SPservicehistoryData($userid);
        if ($result == null) {
            echo json_encode($result);
        } else {
        $data['data'] = $result;
        echo json_encode($data);}}
    }
    public function ServiceHistoryData()
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];

            $result = $this->model->ServiceHistoryData($userid);
            if ($result == null) {
                echo json_encode($result);
            } else {
                $data['data'] = $result;
                //     foreach($result as $value){

                //     $out['out']='<div class="cus-detail"><div><img src="./images/calendar2.png" alt=""></div><div class="cus-date">'.$value["ServiceStartDate"].'</div></div><div class="cus-detail"><div><img src="./images/layer-712.png" alt=""></div><div class="cus-time">'.$value['ServiceStartTime'].'</div></div>';
                //     array_push($data['data'],$out);
                // };

                echo json_encode($data);
            }
        }
    }
    public function CustomerDashboardDataAll()
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];
        }
        $result = $this->model->CustomerDashboardDataAll($userid);
        // print_r($result);
        if (sizeof($result[0]) == 16) {
            foreach ($result as $val) {
                $arr = [
                    $val['ServiceStartDate'],
                    $val['ServiceStartTime'],
                    $val['TotalHours'],
                    $val['ServiceRequestId'],
                    $val['ExtraService'],
                    $val['TotalCost'],
                    $val['AddressLine1'],
                    $val['AddressLine2'],
                    $val['Mobile'],
                    $val['Email'],
                    $val['Comments'],
                    $val['HasPets'],
                    $val['FirstName'],
                    $val['LastName'],
                    $val['Status'],
                    // $val['rating'],
                ];
            }
            echo json_encode($arr);
        } else {
            foreach ($result as $val) {
                $arr = [
                    $val['ServiceStartDate'],
                    $val['ServiceStartTime'],
                    $val['TotalHours'],
                    $val['ServiceRequestId'],
                    $val['ExtraService'],
                    $val['TotalCost'],
                    $val['AddressLine1'],
                    $val['AddressLine2'],
                    $val['Mobile'],
                    $val['Email'],
                    $val['Comments'],
                    $val['HasPets'],
                    $val['FirstName'],
                    $val['LastName'],
                    $val['rating'],
                    $val['Status'],
                ];
            }
            echo json_encode($arr);
        }
    }
    public function ServiceHistoryDataAll()
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];
        }
        $result = $this->model->CustomerDashboardDataAll($userid);
        // print_r($result);
        //     echo '<pre>';
        //    echo sizeof($result[0]);
        //     die;
        if (sizeof($result[0]) == 17) {
            foreach ($result as $val) {
                $arr = [
                    $val['ServiceStartDate'],
                    $val['ServiceStartTime'],
                    $val['TotalHours'],
                    $val['ServiceRequestId'],
                    $val['ExtraService'],
                    $val['TotalCost'],
                    $val['AddressLine1'],
                    $val['AddressLine2'],
                    $val['Mobile'],
                    $val['Email'],
                    $val['Comments'],
                    $val['HasPets'],
                    $val['FirstName'],
                    $val['LastName'],
                    $val['rating'],
                ];
            }
            echo json_encode($arr);
        } else {
            foreach ($result as $val) {
                $arr = [
                    $val['ServiceStartDate'],
                    $val['ServiceStartTime'],
                    $val['TotalHours'],
                    $val['ServiceRequestId'],
                    $val['ExtraService'],
                    $val['TotalCost'],
                    $val['AddressLine1'],
                    $val['AddressLine2'],
                    $val['Mobile'],
                    $val['Email'],
                    $val['Comments'],
                    $val['HasPets'],
                    $val['FirstName'],
                    $val['LastName'],
                    // $val['rating'],
                ];
            }
            echo json_encode($arr);
        }
        // echo ;

    }
    public function CustomerDashboardDataTimeUpdate()
    {
        if (isset($_POST)) {
            $array = [
                'time' => $_POST['time'],
                'id' => $_POST['id'],
            ];
            $result = $this->model->CustomerDashboardDataTimeUpdate($array);
            // print_r($result);
            if (count($result)) {
                foreach ($result as $value) {
                    $_POST['email'] = $value['Email'];
                    $subject = "Helperland";
                    $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'>ServiceId" . $array['id'] . "</h6>
                                <h5 style='font-size:17px; color:red;'>Reschdule Service Request</h5>
                                <h5 style='font-size:17px; color:red;'>Start Time:" . $array['time'] . "</h5>
                                <br>
                                </div>
                                ";
                    include 'View/activeaccount.php';
                    // print_r($value);
                    // $val=$value;
                }
                echo $_SESSION['sendmailsp'];
            }
            // echo $result;
        }
    }
    public function CustomerDashboardDataTimeDelete()
    {
        // $id=$_POST['id'];

        if (isset($_POST)) {
            $id = $_POST['id'];
            $arr = [
                'id' => $_POST['id'],
                'userid' => $_POST['userid']
            ];
            $result = $this->model->CustomerDashboardDataTimeDelete($arr);
            if (count($result)) {
                foreach ($result as $value) {
                    $_POST['email'] = $value['Email'];
                    $subject = "Helperland";
                    $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'>ServiceId" . $id . "</h6>
                                <h5 style='font-size:17px; color:red;'>Delete Service Request</h5>
                                <br>
                                </div>
                                ";
                    include 'View/activeaccount.php';
                }
                echo $_SESSION['sendmailsp'];
            }
        }
    }
    public function Servicehistoryrating()
    {
        if (isset($_POST)) {
            $arr = [
                "id" => $_POST['id'],
                "rating1" => $_POST['rating1'],
                "rating2" => $_POST['rating2'],
                "rating3" => $_POST['rating3'],
                "rating" => ($_POST['rating1'] + $_POST['rating2'] + $_POST['rating3']) / 3,
                "comment" => $_POST['comment'],
            ];
            $result = $this->model->Servicehistoryrating($arr);
            echo $result;
        }
    }
    public function Servicehistoryratingcheck()
    {
        if (isset($_POST)) {
            $arr = [
                "id" => $_POST['id'],
                "userid" => $_POST['userid'],
            ];
            $result = $this->model->Servicehistoryratingcheck($arr);
            echo $result;
        }
    }
    public function customersettingmydetailsdata()
    {
        if (isset($_POST)) {
            $result = $this->model->customersettingmydetailsdata($_POST['id']);
            if ($result) {
                $_SESSION['FirstName'] = $result['FirstName'];
                $_SESSION['LastName'] = $result['LastName'];
            }
            echo json_encode($result);
        }
    }
    public function customersettingmydetails()
    {

        if (isset($_POST)) {
            $arr = [
                "id" => $_POST['id'],
                "fname" => $_POST['fname'],
                "lname" => $_POST['lname'],
                "phone" => $_POST['phone'],
                "dob" => $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'],
            ];
            $result = $this->model->customersettingmydetails($arr);
            
            if ($result == "success") {
                $_SESSION['FirstName'] = $_POST['fname'];
                $_SESSION['LastName'] = $_POST['lname'];
            }echo $result;

            // echo json_encode($result);
        }
    }
    public function spsettingmydetails()
    {

        if (isset($_POST)) {
            $arr = [
                "id" => $_POST['id'],
                "fname" => $_POST['fname'],
                "lname" => $_POST['lname'],
                "phone" => $_POST['phone'],
                "dob" => $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'],
                "nationality" => $_POST['nationality'],
                "gender" => $_POST['gender'],
                "profilepic" => $_POST['profilepic'],
                "StreetName" => $_POST['StreetName'],
                "HouseNumber" => $_POST['HouseNumber'],
                "PostalCode" => $_POST['PostalCode'],
                "City" => $_POST['City'],
            ];
            $result = $this->model->spsettingmydetails($arr);
            echo $result;
            if ($result == "success") {
                $_SESSION['FirstName'] = $_POST['fname'];
                $_SESSION['LastName'] = $_POST['lname'];
            }

            // echo json_encode($result);
        }
    }
    public function Addressdata()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $result = $this->model->DisplayAddress($id);
            $data['data'] = $result;
            echo json_encode($data);
            // echo $result;
            //     foreach ($result as $value) {
            //         echo '<div class="address-list">
            //     <input type="radio" name="fav_language" value="' . $value['AddressId'] . '">
            //     <label>
            //         <div>
            //             <div style="display: flex;">
            //                 <b>Address:</b>
            //                 <div style="margin-left: 5px;">' . $value['AddressLine1'] . '</div>
            //                 <div style="margin-left: 5px;">' . $value['AddressLine2'] . '</div>
            //                 <div style="margin-left: 5px;">' . $value['City'] . '</div>
            //                 <div style="margin-left: 5px;"> ' . $value['PostalCode'] . '</div>
            //             </div>
            //             <div style="display: flex;">
            //                 <b>Phone number:</b>
            //                 <div>' . $value['Mobile'] . '
            //                 </div>
            //             </div>
            //         </div>
            //     </label>
            // </div><br>';
            //     }
        }
    }
    public function Deleteaddress()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $result = $this->model->DeleteAddress($id);
            echo $result;
            // $data['data'] = $result;
            // echo json_encode($data);
        }
    }
    public function DefaultAddress()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $result = $this->model->DefaultAddress($id);
            echo $result;
            // $data['data'] = $result;
            // echo json_encode($data);
        }
    }
    public function Editaddress()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $result = $this->model->EditAddress($id);
            echo json_encode($result);
            // print_r($result);
            // $data['data'] = $result;
            // echo json_encode($data);
        }
    }
    public function AcceptRequest()
    {
        if (isset($_POST)) {
            $arr = [
                "id" => $_POST['id'],
                "userid" => $_POST['userid']
            ];
            $result = $this->model->AcceptRequest($arr);
            if (count($result)) {
                foreach ($result as $value) {
                    $_POST['email'] = $value['Email'];
                    $subject = "Helperland";
                    $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'></h6>
                                    <h5 style='font-size:17px; color:red;'>Service Request" . $_POST['id'] . " Accepted By Someone</h5>
                                    <br>
                                    </div>
                                    ";
                    include 'View/activeaccount.php';
                }
                echo $_SESSION['sendmailsp'];
            } else {
                echo 'success';
            }
        }
    }
    public function updateaddress()
    {
        if (isset($_POST)) {
            $array = [
                "id" => $_POST['id'],
                "street" => $_POST['street'],
                "house" => $_POST['house'],
                "PostalCode" => $_POST['PostalCode'],
                "City" => $_POST['City'],
                "Mobile" => $_POST['Mobile'],
            ];
            $result = $this->model->updateaddress($array);
            print_r($result);
        }
    }
    public function Adminupdateaddress()
    {
        if (isset($_POST)) {
            $array = [
                "id" => $_POST['id'],
                "street" => $_POST['street'],
                "house" => $_POST['house'],
                "PostalCode" => $_POST['PostalCode'],
                "City" => $_POST['City'],

                "Date" => $_POST['Date'],
                "cleantime" => $_POST['cleantime'],
                "serviceid" => $_POST['serviceid'],
            ];
            $result = $this->model->Adminupdateaddress($array);
            print_r($result);
        }
    }
    public function AdminupdateStatus()
    {
        if (isset($_POST)) {
            if ($_POST['status'] == "Active") {
                $_POST['status'] = 1;
            } else if ($_POST['status'] == "Inactive") {
                $_POST['status'] = 0;
            }
            $array = [
                "id" => $_POST['id'],
                "status" => $_POST['status'],
            ];
            $result = $this->model->AdminupdateStatus($array);
            print_r($result);
        }
    }
    public function SPSchdule($id)
    {
        $result = $this->model->SPSchdule($id);

        //    echo '<pre>';
        //    echo $title;
        //    die;
        foreach ($result as $row) {
            $starttime = strtotime($row["ServiceStartTime"]) - strtotime('00:00:00');
            $totalhour = $row['TotalHours'];
            $totaltime = ($totalhour * 3600) + $starttime;
            $time = date("h:i", mktime(0, 0, $totaltime));
            $title = $row["ServiceStartTime"] . '-' . $time;
            $data[] = array(
                'id' => $row['ServiceRequestId'],
                'title' => $title,
                'start' => $row["ServiceStartDate"],
            );
        }

        echo json_encode($data);
    }
    public function SPSchduleCompleted($id)
    {
        $result = $this->model->SPSchduleCompleted($id);
        foreach ($result as $row) {
            $starttime = strtotime($row["ServiceStartTime"]) - strtotime('00:00:00');
            $totalhour = $row['TotalHours'];
            $totaltime = ($totalhour * 3600) + $starttime;
            $time = date("h:i", mktime(0, 0, $totaltime));
            $title = $row["ServiceStartTime"] . '-' . $time;
            $data[] = array(
                'id' => $row['ServiceRequestId'],
                'title' => $title,
                'start' => $row["ServiceStartDate"],
            );
        }

        echo json_encode($data);
    }
    public function cancelrequest()
    {
        if (isset($_POST)) {
            $arr = [
                'id' => $_POST['id'],
                'eventid' => $_POST['eventid'],
                'userid' => $_POST['userid']
            ];
            $result = $this->model->completerequest($arr);
            // echo $result;

            foreach ($result as $value) {
                $_POST['email'] = $value['Email'];
                $subject = "Helperland";
                $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'>ServiceId" . $_POST['id'] . "</h6>
                                <h5 style='font-size:17px; color:red;'>Service Request Available </h5>
                                <br>
                                </div>
                                ";
                include 'View/activeaccount.php';
            }
            echo $_SESSION['sendmailsp'];
        }
    }
    public function cancelrequest1()
    {
        if (isset($_POST)) {
            $arr = [
                'id' => $_POST['id'],
                'eventid' => $_POST['eventid'],
                'userid' => $_POST['userid']
            ];
            $result = $this->model->completerequest1($arr);
            echo $result;
        }
    }
    public function SPMyRating()
    {

        if (isset($_POST)) {
            $id = $_POST['userid'];
            $result = $this->model->SPMyRatings($id);
            $data['data'] = $result;
            echo json_encode($data);
        }
    }
    public function CustomerList()
    {

        if (isset($_POST)) {
            $id = $_POST['userid'];
            $result = $this->model->CustomerList($id);
            $json['data'] = $result;
            echo json_encode($json);
        }
    }
    public function CustomerBlock()
    {

        if (isset($_POST)) {
            $arr = [
                "userid" => $_POST['userid'],
                "targetid" => $_POST['targetid'],
            ];
            $result = $this->model->CustomerBlock($arr);
            echo $result;
        }
    }
    public function CustomerUnblock()
    {
        if (isset($_POST)) {
            $arr = [
                "userid" => $_POST['userid'],
                "targetid" => $_POST['targetid'],
            ];
            $result = $this->model->CustomerUnblock($arr);
            echo $result;
        }
    }
    public function AdminServiceRequestData()
    {
        if (isset($_POST)) {
            $spval = '';
            $value = '';
            $serviceid = $_POST['serviceid'];
            $customer = $_POST['customer'];
            $sp = $_POST['sp'];
            $role = $_POST['role'];
            $fromdate = $_POST['fromdate'];
            $todate = $_POST['todate'];
            if ($role == "New") {
                $status = "Pending";
            }
            if ($role == "Pending") {
                $status = "Accepted";
            }
            if ($role == "Completed") {
                $status = "Completed";
            }
            if ($role == "Cancelled") {
                $status = "Cancelled";
            }
            // serviceid
            if ($serviceid != '' && $customer == '' && $sp == '' && $role == '' && $fromdate == '' && $todate == '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 2
            if ($serviceid != '' && $customer != '' && $sp == '' && $role == '' && $fromdate == '' && $todate == '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND user.FirstName='$customer' OR user.LastName='$customer'";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer == '' && $sp != '' && $role == '' && $fromdate == '' && $todate == '') {
                $spval = "Where servicerequest.ServiceRequestId=$serviceid AND user.FirstName='$sp' OR user.LastName='$sp'";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer == '' && $sp == '' && $role != '' && $fromdate == '' && $todate == '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND servicerequest.Status='$status'";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer == '' && $sp == '' && $role == '' && $fromdate != '' && $todate == '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer == '' && $sp == '' && $role == '' && $fromdate == '' && $todate != '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 3
            if ($serviceid != '' && $customer != '' && $sp != '' && $role == '' && $fromdate == '' && $todate == '') {
                $spval = "Where servicerequest.ServiceRequestId=$serviceid AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer != '' && $sp == '' && $role != '' && $fromdate == '' && $todate == '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND servicerequest.Status='$status' AND (user.FirstName='$customer' OR user.LastName='$customer')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer != '' && $sp == '' && $role == '' && $fromdate != '' && $todate == '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND (user.FirstName='$customer' OR user.LastName='$customer') AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') ";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer != '' && $sp == '' && $role == '' && $fromdate == '' && $todate != '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND (user.FirstName='$customer' OR user.LastName='$customer') AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid != '' && $customer == '' && $sp == '' && $role == '' && $fromdate != '' && $todate != '') {

                $value = "Where servicerequest.ServiceRequestId=$serviceid 
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d'))";
                $result = $this->model->AdminServiceRequestData($value);
            }
            if ($serviceid != '' && $customer != '' && $sp == '' && $role == '' && $fromdate == '' && $todate != '') {
                $value = "Where servicerequest.ServiceRequestId=$serviceid AND (user.FirstName='$customer' OR user.LastName='$customer') AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') ";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 4
            if ($serviceid != '' && $customer != '' && $sp != '' && $role != '' && $fromdate == '' && $todate == '') {
                $spval = "Where servicerequest.ServiceRequestId=$serviceid AND servicerequest.Status='$status' AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer != '' && $sp != '' && $role == '' && $fromdate != '' && $todate == '') {
                $spval = "Where servicerequest.ServiceRequestId=$serviceid AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')  AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer != '' && $sp != '' && $role == '' && $fromdate == '' && $todate != '') {
                $spval = "Where servicerequest.ServiceRequestId=$serviceid AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')  AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer == '' && $sp == '' && $role != '' && $fromdate != '' && $todate != '') {

                $value = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d'))";
                $result = $this->model->AdminServiceRequestData($value);
            }
            if ($serviceid != '' && $customer == '' && $sp != '' && $role == '' && $fromdate != '' && $todate != '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer == '' && $sp != '' && $role != '' && $fromdate == '' && $todate != '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer == '' && $sp != '' && $role != '' && $fromdate != '' && $todate == '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // 5
            if ($serviceid != '' && $customer != '' && $sp != '' && $role != '' && $fromdate != '' && $todate == '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')  
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer != '' && $sp != '' && $role != '' && $fromdate == '' && $todate != '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')  
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer == '' && $sp != '' && $role != '' && $fromdate != '' && $todate != '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer != '' && $sp == '' && $role != '' && $fromdate != '' && $todate != '') {

                $value = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer')";
                $result = $this->model->AdminServiceRequestData($value);
            }
            if ($serviceid != '' && $customer != '' && $sp != '' && $role == '' && $fromdate != '' && $todate != '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer != '' && $sp != '' && $role != '' && $fromdate == '' && $todate != '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid != '' && $customer != '' && $sp != '' && $role != '' && $fromdate != '' && $todate == '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // all
            if ($serviceid != '' && $customer != '' && $sp != '' && $role != '' && $fromdate != '' && $todate != '') {

                $spval = "Where servicerequest.ServiceRequestId=$serviceid 
                AND servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // customer
            if ($serviceid == '' && $customer != '' && $sp == '' && $role == '' && $fromdate == '' && $todate == '') {
                $value = "Where user.FirstName='$customer' OR user.LastName='$customer'";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 2
            if ($serviceid == '' && $customer != '' && $sp != '' && $role == '' && $fromdate == '' && $todate == '') {
                $spval = "Where user.FirstName='$customer' OR user.LastName='$customer' AND user.FirstName='$sp' OR user.LastName='$sp'";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid == '' && $customer != '' && $sp == '' && $role != '' && $fromdate == '' && $todate == '') {
                $value = "Where user.FirstName='$customer' OR user.LastName='$customer' AND servicerequest.Status='$status'";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid == '' && $customer != '' && $sp == '' && $role == '' && $fromdate != '' && $todate == '') {
                $value = "Where user.FirstName='$customer' OR user.LastName='$customer' AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            if ($serviceid == '' && $customer != '' && $sp == '' && $role == '' && $fromdate == '' && $todate != '') {
                $value = "Where user.FirstName='$customer' OR user.LastName='$customer' AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 3
            if ($serviceid == '' && $customer != '' && $sp != '' && $role != '' && $fromdate == '' && $todate == '') {
                $spval = "Where servicerequest.Status='$status' AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid == '' && $customer != '' && $sp != '' && $role == '' && $fromdate != '' && $todate == '') {
                $spval = "Where str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')  AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid == '' && $customer != '' && $sp != '' && $role == '' && $fromdate == '' && $todate != '') {
                $spval = "Where str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')  AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // 4
            if ($serviceid == '' && $customer != '' && $sp != '' && $role != '' && $fromdate != '' && $todate == '') {

                $spval = "Where servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')  
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid == '' && $customer != '' && $sp != '' && $role != '' && $fromdate == '' && $todate != '') {

                $spval = "Where  servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')  
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // 5
            if ($serviceid == '' && $customer != '' && $sp != '' && $role != '' && $fromdate != '' && $todate != '') {

                $spval = "Where servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$customer' OR user.LastName='$customer' OR user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // sp
            if ($serviceid == '' && $customer == '' && $sp != '' && $role == '' && $fromdate == '' && $todate == '') {
                $spval = "Where  user.FirstName='$sp' OR user.LastName='$sp'";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 2
            if ($serviceid == '' && $customer == '' && $sp != '' && $role != '' && $fromdate == '' && $todate == '') {
                $spval = "Where servicerequest.Status='$status' AND (user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid == '' && $customer == '' && $sp != '' && $role == '' && $fromdate != '' && $todate == '') {
                $spval = "Where str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')  AND ( user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid == '' && $customer == '' && $sp != '' && $role == '' && $fromdate == '' && $todate != '') {
                $spval = "Where str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')  AND (user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // 3
            if ($serviceid == '' && $customer == '' && $sp != '' && $role != '' && $fromdate != '' && $todate == '') {

                $spval = "Where servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')  
                AND (user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid == '' && $customer == '' && $sp != '' && $role != '' && $fromdate == '' && $todate != '') {

                $spval = "Where  servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')  
                AND (user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // 4
            if ($serviceid == '' && $customer == '' && $sp != '' && $role != '' && $fromdate != '' && $todate != '') {

                $spval = "Where servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') 
                AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d') 
                AND (user.FirstName='$sp' OR user.LastName='$sp')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // role
            if ($serviceid == '' && $customer == '' && $sp == '' && $role != '' && $fromdate == '' && $todate == '') {
                $value = "Where servicerequest.Status='$status'";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 2
            if ($serviceid == '' && $customer == '' && $sp == '' && $role != '' && $fromdate != '' && $todate == '') {

                $spval = "Where servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            if ($serviceid == '' && $customer == '' && $sp == '' && $role != '' && $fromdate == '' && $todate != '') {

                $spval = "Where  servicerequest.Status='$status'
                AND 
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // 3
            if ($serviceid == '' && $customer == '' && $sp == '' && $role != '' && $fromdate != '' && $todate != '') {

                $spval = "Where  servicerequest.Status='$status'
                AND  str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') AND
                str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestSearchSpData($value, $spval);
            }
            // fromdate
            if ($serviceid == '' && $customer == '' && $sp == '' && $role == '' && $fromdate != '' && $todate == '') {
                $value = "Where str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // 2
            if ($serviceid == '' && $customer == '' && $sp == '' && $role == '' && $fromdate != '' && $todate != '') {
                $value = "Where str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')>=str_to_date('$fromdate','%Y-%m-%d') AND str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
            // Todate
            if ($serviceid == '' && $customer == '' && $sp == '' && $role == '' && $fromdate == '' && $todate != '') {
                $value = "Where str_to_date(servicerequest.ServiceStartDate,'%Y-%m-%d')<=str_to_date('$fromdate','%Y-%m-%d')";
                $result = $this->model->AdminServiceRequestData($value);
                // $result = $this->model->AdminUsermanagedata($value);
            }
        }
        if ($serviceid == '' && $customer == '' && $sp == '' && $role == '' && $fromdate == '' && $todate == '') {
            $value = "Where 1";
            $result = $this->model->AdminServiceRequestData($value);
        }
        // echo"<pre>";
        // print_r($result);
        // die;
        $data['data'] = $result;
        echo json_encode($data);
    }
    public function AdminUsermanagedata()
    {
        if (isset($_POST)) {

            $UserName = $_POST['UserName'];
            $userstatus = $_POST['status'];
            $PhoneNumber = $_POST['PhoneNumber'];
            $PostalCode = $_POST['PostalCode'];
            $Email = $_POST['Email'];
            $fromdate = $_POST['fromdate'];
            $todate = $_POST['todate'];
            if ($userstatus == "Admin") {
                $userstatus = 2;
            }
            if ($userstatus == "Customer") {
                $userstatus = 0;
            }
            if ($userstatus == "ServiceProvider") {
                $userstatus = 1;
            }
            // username
            if ($UserName != '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate == '') {
                $value = "Where  user.FirstName='$UserName' OR user.LastName='$UserName'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            // 2
            if ($UserName != '' && $userstatus != '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate == '') {
                $value = "Where user.UserTypeId='$userstatus' AND user.FirstName='$UserName' OR user.LastName='$UserName'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName != '' && $userstatus == '' && $PhoneNumber != '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate == '') {
                $value = "Where user.Mobile={$PhoneNumber} AND user.FirstName='$UserName' OR user.LastName='$UserName'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName != '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode != '' && $Email == '' && $fromdate == '' && $todate == '') {
                $value = "Where user.ZipCode ='$PostalCode' AND user.FirstName='$UserName' OR user.LastName='$UserName'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName != '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email != '' && $fromdate == '' && $todate == '') {
                $value = "Where  user.Email ='$Email' AND user.FirstName='$UserName' OR user.LastName='$UserName'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName != '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate != '') {

                $value = "Where str_to_date(user.CreatedDate)<=str_to_date($todate) AND user.FirstName='$UserName' OR user.LastName='$UserName'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName != '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate != '' && $todate == '') {
                $value = "Where str_to_date(user.CreatedDate)>=str_to_date($todate) AND user.FirstName='$UserName' OR user.LastName='$UserName'";
                $result = $this->model->AdminUsermanagedata($value);
            }

            if ($UserName == '' && $userstatus != '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate == '') {
                $value = "Where user.UserTypeId='$userstatus'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName == '' && $userstatus == '' && $PhoneNumber != '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate == '') {
                $value = "Where user.Mobile={$PhoneNumber}";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName == '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode != '' && $Email == '' && $fromdate == '' && $todate == '') {

                $value = "Where user.ZipCode ='$PostalCode'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName == '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email != '' && $fromdate == '' && $todate == '') {

                $value = "Where user.Email ='$Email'";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName == '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate != '' && $todate == '') {

                $value = "Where str_to_date(user.CreatedDate)>=str_to_date($fromdate)";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName == '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate != '') {

                $value = "Where str_to_date(user.CreatedDate)<=str_to_date($todate)";
                $result = $this->model->AdminUsermanagedata($value);
            }
            if ($UserName == '' && $userstatus == '' && $PhoneNumber == '' && $PostalCode == '' && $Email == '' && $fromdate == '' && $todate == '') {
                $value = "Where 1";
                $result = $this->model->AdminUsermanagedata($value);
            }
            // echo"<pre>";
            // print_r($result);
            // die;
            $data['data'] = $result;
            echo json_encode($data);
        }
    }
    public function EditandReschdule()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $result = $this->model->EditandReschdule($id);
            echo json_encode($result);
        }
    }
}
