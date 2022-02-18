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
    $subject= $array['subject'];
    // return $subject;
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {
      $sql = mysqli_query($this->connect, "INSERT INTO `contactus` (`ContactUsId`, `Name`, `Email`, `SubjectType`, `Subject`, `PhoneNumber`, `Message`, `UploadFileName`, `CreatedOn`, `CreatedBy`, `Status`, `Priority`, `AssignedToUser`, `IsDeleted`)
      VALUES (NULL,'{$name}','{$email}', '','{$subject}', '{$phone}', '{$message}' , NULL, NULL, NULL, NULL, NULL, NULL, '0') ");
     $_SESSION['success']='Your query has been submitted successfully. Our helpdesk team will contact you soon!';
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
     {
      $sql = mysqli_query($this->connect, "SELECT * FROM `user` WHERE Email='{$email}'AND Password='{$password}'");
      $row = mysqli_fetch_array($sql);
      if (mysqli_num_rows($sql) > 0) {
        
        
      } else {
        $_SESSION['username'] = 'fail';
      }
      return $row;
    }
  }
  public function Emailexist($array)
  {
    $email = $array['email'];
    $sql1 = mysqli_query($this->connect, "SELECT ResetKey FROM `user` WHERE Email='{$email}'");
    $row = mysqli_fetch_array($sql1);
    return $row;
    if (mysqli_num_rows($sql1) > 0) {
      $_SESSION['mailsend'] = 'Mail Sent';
      return 'success';
    } else {
      return 'Email Not exist';
    }
  }
  public function Update($array)
  {
    $password = $array['password'];
    $key = $array['key'];
    $sql = mysqli_query($this->connect, "UPDATE `user` SET `Password`='{$password}' WHERE ResetKey='{$key}'");
    // $sql->affected_rows;
    if (mysqli_affected_rows($this->connect)) {
      $_SESSION['update'] = 'Password Update successfully';
      return 'success';
    } else {
    }
  }
  public function checkcode($code)
  {
    $value = $code;
    $sql1 = mysqli_query($this->connect, "SELECT * FROM `zipcode` WHERE ZipcodeValue = '{$value}' ");
    if (mysqli_num_rows($sql1) > 0) {
      return "success";
    } else {
      // return "fail";
    }
  }
  public function AddressAdd($array)
  {
    $streetname = $_POST['streetname'];
    $house = "House Number:  " . $_POST['house'];
    // $address=$streetname.$house;
    $postal = $_POST['postal'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $sql = mysqli_query($this->connect, "INSERT INTO `useraddress` (`AddressId`, `UserId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `IsDefault`, `IsDeleted`, `Mobile`, `Email`, `Type`) 
    VALUES (NULL, 1, '{$streetname}', '$house', '{$city}', ' ', '{$postal}', '0', '0', '{$phone}', NULL, NULL)");
    if ($sql) {
      return 'success';
    } else {
      return 'fail';
    }
  }
  public function DisplayAddress()
  {
    $sql = mysqli_query($this->connect, "SELECT * FROM `useraddress` Where UserId = 1");
    $row = mysqli_fetch_all($sql,  MYSQLI_ASSOC);
    // $row = mysqli_num_rows($sql);
    return $row;
  }
  public function ServiceRequest($array)
  {
    $addid = $array['addid'];
    $ServiceStartDate = $array['ServiceStartDate'];
    $ServiceStartTime = $array['ServiceStartTime'];
    $ZipCode = $array['ZipCode'];
    $Bed = $array['Bed'];
    $Bath = $array['Bath'];
    $ExtraService = $array['ExtraService'];
    $ServiceHours = $array['ServiceHours'];
    $ExtraHours = $array['ExtraHours'];
    $TotalHours = $array['TotalHours'];
    $SubTotal = $array['SubTotal'];
    $Discount = $array['Discount'];
    $TotalCost = $array['TotalCost'];
    $effectiveprice = $array['effectiveprice'];
    $Comments = $array['Comments'];
    $HasPets = $array['HasPets'];
    $userid=$array['userid'];
    $sql = mysqli_query($this->connect, "INSERT INTO `servicerequest` (`ServiceRequestId`, `UserId`, `ServiceId`, `AddressId`, `ServiceStartDate`, `ServiceStartTime`, `ZipCode`, `Bed`, `Bath`, `ServiceFrequency`, `ServiceHourlyRate`, `ExtraService`, `ServiceHours`, `ExtraHours`, `TotalHours`, `SubTotal`, `Discount`, `TotalCost`, `EffectivePrice`, `Comments`, `PaymentTransactionRefNo`, `PaymentDue`, `JobStatus`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`) 
        VALUES (NULL, '{$userid}', '', '{$addid}', '{$ServiceStartDate}', '{$ServiceStartTime}', '{$ZipCode}', '{$Bed}', '{$Bath}', NULL, NULL, '{$ExtraService}', '{$ServiceHours}', '{$ExtraHours}', '{$TotalHours}', '{$SubTotal}', '{$Discount}', '{$TotalCost}', '{$effectiveprice}', '{$Comments}', NULL, '0', NULL, NULL, NULL, '{$HasPets}', NULL, CURRENT_TIMESTAMP, 'current_timestamp(3).000000', NULL, NULL, '0.00', NULL, NULL, NULL);");
    // 
    // if (mysqli_affected_rows($this->connect)) {
    //   // return "success";
     
    // }
  }
  public function Serviceprovider(){
    $serviceemail = mysqli_query($this->connect, "SELECT Email FROM `user` WHERE UserTypeId = 0 AND IsApproved = 1");
    if (mysqli_num_rows($serviceemail) > 0) {
    $row =  mysqli_fetch_all($serviceemail,  MYSQLI_ASSOC);
    return $row;
    }
  }
  public function FavServiceprovider($array){
    $row=array();
    foreach($array as $value){
      $serviceemail = mysqli_query($this->connect, "SELECT USER.Email FROM `user` JOIN `favoriteandblocked`ON favoriteandblocked.TargetUserId=user.UserId WHERE TargetUserId={$value}");
      if (mysqli_num_rows($serviceemail) > 0) {
        array_push($row, mysqli_fetch_assoc($serviceemail));
      }
    }
    return $row;
  } 
  public function Favprovider($value){
    $userid=$value;
    $sql=mysqli_query($this->connect, "SELECT user.FirstName,user.LastName,user.UserId FROM `user`JOIN `favoriteandblocked` ON favoriteandblocked.TargetUserId=user.UserId WHERE favoriteandblocked.UserId={$userid}");
    $row = mysqli_fetch_all($sql,  MYSQLI_ASSOC);
    return $row;
  }
}
