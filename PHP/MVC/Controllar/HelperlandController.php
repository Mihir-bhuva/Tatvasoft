<?php
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
    public function ContactUsForm()
    { {
            $url = "http://localhost/Helperland/MVC/index.php?function=Contactus";
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $name = $fname . " " . $lname;
            $phone = $_POST['phone'];
            $email = $_POST['email'];
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
                //         // $_POST['firstname'] = $results[0];
                //         // $_POST['status_msg'] = $result[0];
                //         // $_POST['status_txt'] = $result[1]; 
                //         // $_POST['status'] = $result[2];
                header('Location:' . $url);
            }
        }
    }
    public function RegisterForm()
    { {
            $url = "http://localhost/Helperland/MVC/index.php?function=Createaccount";
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $name = $fname . " " . $lname;
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password']; {
                $array = [
                    'email' => $email,
                    'phone' => $phone,
                    'password' => $password,
                    'name' => $name,
                ];
                $result = $this->model->Register($array);
                //         // $_POST['firstname'] = $results[0];
                //         // $_POST['status_msg'] = $result[0];
                //         // $_POST['status_txt'] = $result[1]; 
                //         // $_POST['status'] = $result[2];
                header('Location:' . $url);
            }
        }
    }
    public function SPRegisterForm()
    { {
            $url = "http://localhost/Helperland/MVC/index.php?function=BecomeHelper";
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $name = $fname . " " . $lname;
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password']; {
                $array = [
                    'email' => $email,
                    'phone' => $phone,
                    'password' => $password,
                    'name' => $name,
                ];
                $result = $this->model->SPRegister($array);
                //         // $_POST['firstname'] = $results[0];
                //         // $_POST['status_msg'] = $result[0];
                //         // $_POST['status_txt'] = $result[1]; 
                //         // $_POST['status'] = $result[2]
                header('Location:' . $url);
            }
        }
    }
    public function HomepageLogin()
    { {

            $url = "http://localhost/Helperland/MVC/index.php?function=Homepage";
            $email = $_POST['email'];
            $password = $_POST['password']; {
                $array = [
                    'email' => $email,
                    'password' => $password,
                ];
                $result = $this->model->Login($array);
                //         // $_POST['firstname'] = $results[0];
                //         // $_POST['status_msg'] = $result[0];
                //         // $_POST['status_txt'] = $result[1]; 
                //         // $_POST['status'] = $result[2];
                // 
                // print_r($result[6]);
                if ($result[6] == 0) {
                    $this->HomePage();
                    $_SESSION['username'] = "success";
                }
                if ($result[6] == 1) {
                    $this->BecomeHelper();
                }
                if ($result == 'success') {
                    //    $this->HomePage();
                    //   header('Location:' . $url);
                }
            }
        }
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
        echo $resetkey;
        if (true) {
            include 'View/activeaccount.php';
            $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'>Hi, .Click Here to Reset Your Password</h6>
        <h5 style='font-size:17px; color:red;'>Please Click This and Reset Your Password </h5>
        <br>
        <a href='http://localhost/Helperland/MVC/index.php?controller=Helperland&function=Newpassword&parameter=$resetkey'> http://localhost/Helperland/MVC/index.php?controller=Helperland&function=Newpassword&parameter=.$resetkey.</a>
        </div>
         ";

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
            ];
            $result = $this->model->AddressAdd($array);
            echo $result;
        }
    }
    public function GetAddress()
    {
        $result = $this->model->DisplayAddress();
        // echo $result[2];
        foreach ($result as $value) {
            // echo $result;

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
            </div></label></div><br>';
        }
    }
    public function ServiceRequestSubmit()
    {
        if (isset($_POST)) {
            $array = [
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

            ];
            $result = $this->model->ServiceRequest($array);
            foreach ($result as $value) {
                $_POST['email'] = $value['Email'];
                $subject = "Helperland";
                
                $_SESSION['mail'] = "<h6 style='font-size:16px; color:green;'></h6>
                                        <h5 style='font-size:17px; color:red;'>Service Request</h5>
                                        <br>
                                        </div>
                                        ";
                include 'View/activeaccount.php';
            }
            echo $_SESSION['sendmail'];
        }
    }
}
