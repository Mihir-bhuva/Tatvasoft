<?php
class contactusmodel
{
  public function __construct()
  {
    $this->connect = mysqli_connect("localhost", "root", "", "helperland1");
    if (!$this->connect) {
      echo "Database Not Connected";
    }
  }
  public function Contactusinsert($array)
  {
    $name = $array['name'];
    $phone = $array['phone'];
    $email = $array['email'];
    $message = $array['message'];
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {
      $sql = mysqli_query($this->connect, "INSERT INTO `contactus` (`ContactUsId`, `Name`, `Email`, `SubjectType`, `Subject`, `PhoneNumber`, `Message`, `UploadFileName`, `CreatedOn`, `CreatedBy`, `Status`, `Priority`, `AssignedToUser`, `IsDeleted`)
      VALUES (NULL,'{$name}','{$email}', '', NULL, '{$phone}', '{$message}' , NULL, NULL, NULL, NULL, NULL, NULL, '0') ");
      return 'Your query has been submitted successfully. Our helpdesk team will contact you soon! <span class="close">&times;</span>';
    } else {
      return 'All field required';
    }
  }
  public function Register($array)
  {
    $name = $array['name'];
    $phone = $array['phone'];
    $email = $array['email'];
    $key = bin2hex(random_bytes(10));
    $password = $array['password'];
    $usertypeid = '0';
    $sql1 = mysqli_query($this->connect, "SELECT * FROM `user` WHERE Email='{$email}'");
    if (mysqli_num_rows($sql1) == 0) {
      $sql = mysqli_query($this->connect, "INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Mobile`, `UserTypeId`, `RoleId`, `Gender`, `DateOfBirth`, `WebSite`, `UserProfilePicture`, `IsRegisteredUser`, `PaymentGatewayUserRef`, `ZipCode`, `WorksWithPets`, `LanguageId`, `NationalityId`, `ResetKey`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `IsApproved`, `IsActive`, `IsDeleted`, `Status`, `IsOnline`, `BankTokenId`, `TaxNo`) 
      VALUES                                                   (NULL, '{$name}',          '',   '{$email}', '{$password}', '{$phone}', '{$usertypeid}', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '{$key}', '', '', '', '0', '0', '0', NULL, '0', NULL, NULL)");
      $_SESSION['signup'] = 'successfully sign up';
    } else {
      $_SESSION['signuperror'] = 'Email alreay exist';
    }
  }
  public function SPRegister($array)
  {

    $name = $array['name'];
    $phone = $array['phone'];
    $email = $array['email'];
    $password = $array['password'];
    $usertypeid = '1';
    $sql1 = mysqli_query($this->connect, "SELECT * FROM `user` WHERE Email='{$email}'");
    if (mysqli_num_rows($sql1) == 0) {
      $sql = mysqli_query($this->connect, "INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Mobile`, `UserTypeId`, `RoleId`, `Gender`, `DateOfBirth`, `WebSite`, `UserProfilePicture`, `IsRegisteredUser`, `PaymentGatewayUserRef`, `ZipCode`, `WorksWithPets`, `LanguageId`, `NationalityId`, `ResetKey`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `IsApproved`, `IsActive`, `IsDeleted`, `Status`, `IsOnline`, `BankTokenId`, `TaxNo`) 
      VALUES (NULL, '{$name}', '', '{$email}', {$password}, '{$phone}', '{$usertypeid}', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '', '', '', '0', '0', '0', NULL, '0', NULL, NULL)");
      $_SESSION['signup'] = 'successfully sign up';
    } else {
      $_SESSION['signuperror']  = 'Email alreay exist';
    }
  }
  public function Login($array)
  {
    $email = $array['email'];
    $password = $array['password'];
    $usertypeid = '0'; {
      $sql = mysqli_query($this->connect, "SELECT * FROM `user` WHERE Email='{$email}'AND Password='{$password}'");
      $row = mysqli_fetch_array($sql);
      return $row;
      if (mysqli_num_rows($sql) > 0) {
        return 'success';
      } else {
        $_SESSION['username'] = 'fail';
      }
      // if($sql>0){
      // return"user found";
      // }
      // else{
      // return'user not found';
      // }
    }
  }
  public function Emailexist($array)
  {
    $email = $array['email'];
    $sql1 = mysqli_query($this->connect, "SELECT ResetKey FROM `user` WHERE Email='{$email}'");
    $row = mysqli_fetch_array($sql1);
    return $row;
    if (mysqli_num_rows($sql1) > 0) {
      $_SESSION['mailsend']='Mail Sent';
      return 'success';
    } else {
      return 'Email Not exist';
    }
  }
  public function Update($array){
    $password=$array['password'];
    $key= $array['key'];
    $sql=mysqli_query($this->connect,"UPDATE `user` SET `Password`='{$password}' WHERE ResetKey='{$key}'");
    // $sql->affected_rows;
    if(mysqli_affected_rows($this->connect)){
      $_SESSION['update']='Password Update successfully';
    return 'success';
    }
    else{

    }
  }
}
