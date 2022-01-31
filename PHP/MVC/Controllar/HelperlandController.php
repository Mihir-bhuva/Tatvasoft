<?php 
class HelperlandController{
    function __construct()
    {
    include('Model/model.php');
        $this->model = new contactusmodel();
       
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
        {
            $url = "http://localhost/Helperland/MVC/index.php?function=Contactus";
                $lname= $_POST['lname'];
                $fname=$_POST['fname'];
                $name= $fname." ".$lname;
                $phone= $_POST['phone'];
                $email= $_POST['email'];
                $message= $_POST['message'];
                $subject= $_POST['subject'];

                {
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
}
?>