<?php 
class contactusmodel{
    public function __construct()
    {  $this->connect = mysqli_connect("localhost", "root", "", "helperland1");
      if(!$this->connect){
      echo"Database Not Connected" ;
                }
    }
    public function Contactusinsert($array)
    {
      echo $name=$array['name'];
      $phone= $array['phone'];
      $email= $array['email'];
      $message= $array['message'];
      if(true)
      {
      $sql=mysqli_query($this->connect ,"INSERT INTO `contactus` (`ContactUsId`, `Name`, `Email`, `SubjectType`, `Subject`, `PhoneNumber`, `Message`, `UploadFileName`, `CreatedOn`, `CreatedBy`, `Status`, `Priority`, `AssignedToUser`, `IsDeleted`)
      VALUES (NULL,'{$name}','{$email}', '', NULL, '{$phone}', '{$message}' , NULL, NULL, NULL, NULL, NULL, NULL, '0') " ); 
      echo $name=$array['name'];
      // echo 'Your query has been submitted successfully. Our helpdesk team will contact you soon! <span class="close">&times;</span>';
      }
    }
}
?>