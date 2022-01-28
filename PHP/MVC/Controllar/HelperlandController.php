<?php 
class HelperlandController{
    function __construct()
    {
    include('Model/model.php');
        $this->model = new contactusmodel();
        session_start();
    }
    public function HomePage(){
        include('View/homepage.php');
    }
    public function Contactus(){
        include('View/contactus.php');
    }
    public function Prices(){
        include('View/Prices.php');
    }
    public function About(){
        include('View/aboutus.php');
    }
    public function FAQ(){
        include('View/faq.php');
    }
    public function ContactUsForm()
    {
    //     if (true) {
    //         $base_url = "http://localhost/Helperland/MVC/index.php?function=Contactus";
    //             $lname= $_SESSION['lname'];
    //             $fname=$_SESSION['fname'];
    //             $name= $fname." ".$lname;
    //             $phone= $_SESSION['phone'];
    //             $email= $_SESSION['email'];
    //             $message= $_SESSION['message'];
    //             $subject= $_SESSION['subject'];
    //         $array = [
    //             'subject' => $subject,
    //             'email' => $email,
    //             'phone' => $phone,
    //             'message' => $message,
    //             'name' => $name,
    //         ];
    //         $result = $this->model->Contactusinsert($array);
    //         // $_SESSION['firstname'] = $results[0];
    //         // $_SESSION['status_msg'] = $result[0];
    //         // $_SESSION['status_txt'] = $result[1]; 
    //         // $_SESSION['status'] = $result[2];
    //         // header('Location:' . $base_url);
    //     }
    }
}
?>