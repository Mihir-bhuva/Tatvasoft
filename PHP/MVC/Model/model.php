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
    $subject = $array['subject'];
    // return $subject;
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {
      $sql = mysqli_query($this->connect, "INSERT INTO `contactus` (`ContactUsId`, `Name`, `Email`, `SubjectType`, `Subject`, `PhoneNumber`, `Message`, `UploadFileName`, `CreatedOn`, `CreatedBy`, `Status`, `Priority`, `AssignedToUser`, `IsDeleted`)
      VALUES (NULL,'{$name}','{$email}', '','{$subject}', '{$phone}', '{$message}' , NULL, NULL, NULL, NULL, NULL, NULL, '0') ");
      $_SESSION['success'] = 'Your query has been submitted successfully. Our helpdesk team will contact you soon!';
    } else {
      return 'All field required';
    }
  }
  public function Register($array)
  {
    $fname = $array['fname'];
    $lname = $array['lname'];
    $phone = $array['phone'];
    $email = $array['email'];
    $key = bin2hex(random_bytes(10));
    $password = $array['password'];
    $usertypeid = '0';
    $sql1 = mysqli_query($this->connect, "SELECT * FROM `user` WHERE Email='{$email}'");
    if (mysqli_num_rows($sql1) == 0) {
      $sql = mysqli_query($this->connect, "INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Mobile`, `UserTypeId`, `RoleId`, `Gender`, `DateOfBirth`, `WebSite`, `UserProfilePicture`, `IsRegisteredUser`, `PaymentGatewayUserRef`, `ZipCode`, `WorksWithPets`, `LanguageId`, `NationalityId`, `ResetKey`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `IsApproved`, `IsActive`, `IsDeleted`, `Status`, `IsOnline`, `BankTokenId`, `TaxNo`) 
      VALUES                                                   (NULL, '{$fname}','{$lname}',   '{$email}', '{$password}', '{$phone}', '{$usertypeid}', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '{$key}', '', '', '', '0', '0', '0', NULL, '0', NULL, NULL)");
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

    $sql = mysqli_query($this->connect, "SELECT * FROM `user` WHERE Email='{$email}' AND Password='{$password}'");
    $row = mysqli_fetch_array($sql);
    if (mysqli_num_rows($sql) > 0) {
      return $row;
    } else {
      return 'fail';
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
  public function Updatepassword($array)
  {
    $id = $array['id'];
    $currentpassword = $array['currentpassword'];
    $password = $array['password'];
    $sql = mysqli_query($this->connect, "SELECT `Password` FROM user WHERE UserId ={$id}");
    $row = mysqli_fetch_assoc($sql);
    if ($row['Password'] == $currentpassword) {  
      $sql1 = mysqli_query($this->connect, "UPDATE `user` SET Password ='{$password}' WHERE UserId ={$id}");
      // $sql->affected_rows;
      if (mysqli_affected_rows($this->connect)) {    
        return 'success';
      }
    } else{
      return 'fail';
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
    $streetname = $array['streetname'];
    $house = "House Number:  " . $array['house'];
    // $address=$streetname.$house;
    $postal = $array['postal'];
    $city = $array['city'];
    $phone = $array['phone'];
    $id = $array['id'];
    $sql = mysqli_query($this->connect, "INSERT INTO `useraddress` (`AddressId`, `UserId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `IsDefault`, `IsDeleted`, `Mobile`, `Email`, `Type`) 
    VALUES (NULL, {$id}, '{$streetname}', '$house', '{$city}', ' ', '{$postal}', '0', '0', '{$phone}', NULL, NULL)");
    if ($sql) {
      return 'success';
    } else {
      return 'fail';
    }
  }
  public function DisplayAddress($id)
  {
    $sql = mysqli_query($this->connect, "SELECT * FROM `useraddress` Where UserId = {$id} AND IsDeleted=0");
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
    $userid = $array['userid'];
    $sql = mysqli_query($this->connect, "INSERT INTO `servicerequest` (`ServiceRequestId`, `UserId`, `ServiceId`, `AddressId`, `ServiceStartDate`, `ServiceStartTime`, `ZipCode`, `Bed`, `Bath`, `ServiceFrequency`, `ServiceHourlyRate`, `ExtraService`, `ServiceHours`, `ExtraHours`, `TotalHours`, `SubTotal`, `Discount`, `TotalCost`, `EffectivePrice`, `Comments`, `PaymentTransactionRefNo`, `PaymentDue`, `JobStatus`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`) 
        VALUES (NULL, '{$userid}', '', '{$addid}', '{$ServiceStartDate}', '{$ServiceStartTime}', '{$ZipCode}', '{$Bed}', '{$Bath}', NULL, NULL, '{$ExtraService}', '{$ServiceHours}', '{$ExtraHours}', '{$TotalHours}', '{$SubTotal}', '{$Discount}', '{$TotalCost}', '{$effectiveprice}', '{$Comments}', NULL, '0', NULL, NULL, NULL, '{$HasPets}', 'Pending', CURRENT_TIMESTAMP, 'current_timestamp(3).000000', NULL, NULL, '0.00', NULL, NULL, NULL);");
    // 
    // if (mysqli_affected_rows($this->connect)) {
    //   // return "success";

    // }
  }
  public function Serviceprovider()
  {
    $serviceemail = mysqli_query($this->connect, "SELECT Email FROM `user` WHERE UserTypeId = 0 AND IsApproved = 1");
    if (mysqli_num_rows($serviceemail) > 0) {
      $row =  mysqli_fetch_all($serviceemail,  MYSQLI_ASSOC);
      return $row;
    }
  }
  public function FavServiceprovider($array)
  {
    $row = array();
    foreach ($array as $value) {
      $serviceemail = mysqli_query($this->connect, "SELECT USER.Email FROM `user` JOIN `favoriteandblocked`ON favoriteandblocked.TargetUserId=user.UserId WHERE TargetUserId={$value}");
      if (mysqli_num_rows($serviceemail) > 0) {
        array_push($row, mysqli_fetch_assoc($serviceemail));
      }
    }
    return $row;
  }
  public function Favprovider($value)
  {
    $userid = $value;
    $sql = mysqli_query($this->connect, "SELECT user.FirstName,user.LastName,user.UserId FROM `user`JOIN `favoriteandblocked` ON favoriteandblocked.TargetUserId=user.UserId WHERE favoriteandblocked.UserId={$userid}");
    $row = mysqli_fetch_all($sql,  MYSQLI_ASSOC);
    return $row;
  }
  public function CustomerDashboardData($userid)
  {
    $sql = mysqli_query($this->connect, "SELECT user.Email,user.FirstName,user.LastName,servicerequest.ServiceRequestId,servicerequest.ServiceStartDate,servicerequest.ServiceStartTime,servicerequest.TotalCost,servicerequest.TotalHours,servicerequest.ServiceProviderId FROM `servicerequest`LEFT JOIN `user` ON servicerequest.ServiceProviderId=user.UserId WHERE servicerequest.UserId={$userid} AND servicerequest.Status= 'Pending'");
    if (mysqli_num_rows($sql) > 0) {
      $row = mysqli_fetch_all($sql, MYSQLI_ASSOC);
      foreach ($row as $key => $val) {
        if ($val['ServiceProviderId'] != null) {
          $sql1 = mysqli_query($this->connect, "SELECT AVG(rating.Ratings) as 'rating' from `rating` where rating.Ratingto = {$val['ServiceProviderId']}");
          $row1 = mysqli_fetch_assoc($sql1);
          $row[$key]['rating'] = $row1['rating'];
        }
      }
      return $row;
    }
  }
  public function ServiceHistoryData($userid)
  {
    $sql = mysqli_query($this->connect, "SELECT user.Email,user.FirstName,user.LastName,servicerequest.Status,servicerequest.ServiceRequestId,servicerequest.ServiceStartDate,servicerequest.ServiceStartTime,servicerequest.TotalCost,servicerequest.TotalHours,servicerequest.ServiceProviderId FROM `servicerequest`LEFT JOIN `user` ON servicerequest.ServiceProviderId=user.UserId WHERE servicerequest.UserId={$userid} AND(servicerequest.Status='Completed' OR servicerequest.Status='Cancelled') ");
    if (mysqli_num_rows($sql) > 0) {
      $row = mysqli_fetch_all($sql, MYSQLI_ASSOC);
      foreach ($row as $key => $val) {
        if ($val['ServiceProviderId'] != null) {
          $sql1 = mysqli_query($this->connect, "SELECT AVG(rating.Ratings) as 'rating' from `rating` where rating.Ratingto = {$val['ServiceProviderId']}");
          $row1 = mysqli_fetch_assoc($sql1);
          $row[$key]['rating'] = $row1['rating'];
        }
      }
      return $row;
    }
  }
  public function CustomerDashboardDataAll($userid)
  {
    $sql = mysqli_query($this->connect, "SELECT user.FirstName,user.LastName,useraddress.AddressLine1,useraddress.AddressLine2,useraddress.Mobile,useraddress.Email,servicerequest.ServiceProviderId,servicerequest.ServiceRequestId,servicerequest.ServiceStartDate,servicerequest.ServiceStartTime,servicerequest.TotalHours,servicerequest.ExtraService,servicerequest.TotalCost,servicerequest.Comments,servicerequest.HasPets FROM `servicerequest`JOIN useraddress ON servicerequest.AddressId=useraddress.AddressId LEFT JOIN `user` ON servicerequest.ServiceProviderId=user.UserId WHERE servicerequest.ServiceRequestId={$userid}");
    if (mysqli_num_rows($sql) > 0) {
      $row = mysqli_fetch_all($sql, MYSQLI_ASSOC);
      foreach ($row as $key => $val) {
        if ($val['ServiceProviderId'] != null) {
          $sql1 = mysqli_query($this->connect, "SELECT AVG(rating.Ratings) as 'rating' from `rating` where rating.Ratingto = {$val['ServiceProviderId']}");
          $row1 = mysqli_fetch_assoc($sql1);
          $row[$key]['rating'] = $row1['rating'];
        }
      }
      // echo "<pre>";
      // print_r($row);
      // die;
      return $row;
    }
  }
  public function CustomerDashboardDataTimeUpdate($array)
  {
    $sql1 = mysqli_query($this->connect, "SELECT Email FROM `user` WHERE `UserTypeId`=1");
    $row = mysqli_fetch_all($sql1, MYSQLI_ASSOC);
    $time = $array['time'];
    $id = $array['id'];
    $sql = mysqli_query($this->connect, "UPDATE `servicerequest` SET `ServiceStartTime` = '{$time}' WHERE `ServiceRequestId` = {$id}");
    if (mysqli_affected_rows($this->connect)) {
      return $row;
    }
  }
  public function CustomerDashboardDataTimeDelete($id)
  {
    $sql1 = mysqli_query($this->connect, "SELECT Email FROM `user` WHERE `UserTypeId`=1");
    $row = mysqli_fetch_all($sql1, MYSQLI_ASSOC);
    $sql = mysqli_query($this->connect, "UPDATE `servicerequest` SET `Status`='Cancelled' WHERE `ServiceRequestId`={$id}");
    if (mysqli_affected_rows($this->connect)) {
      return $row;
    }
  }
  public function Servicehistoryrating($arr)
  {
    //  return $array;
    $Comments = $arr['comment'];

    $sql = mysqli_query($this->connect, "SELECT servicerequest.UserId,servicerequest.ServiceProviderId  FROM `servicerequest` WHERE `ServiceRequestId`={$arr['id']}");
    $row = mysqli_fetch_assoc($sql);
    $sql1 = mysqli_query($this->connect, "INSERT INTO `rating`(`RatingId`, `ServiceRequestId`, `RatingFrom`, `RatingTo`, `Ratings`, `Comments`, `RatingDate`, `IsApproved`, `VisibleOnHomeScreen`, `OnTimeArrival`, `Friendly`, `QualityOfService`) 
    VALUES (NULL,{$arr['id']},{$row['UserId']},{$row['ServiceProviderId']},{$arr['rating']},'{$Comments}',CURRENT_TIMESTAMP,1,0,'{$arr['rating1']}','{$arr['rating2']}','{$arr['rating3']}')");
    if (mysqli_affected_rows($this->connect)) {
      return 'success';
    }
  }
  public function customersettingmydetailsdata($id)
  {
 
    $sql = mysqli_query($this->connect, "SELECT user.FirstName,user.LastName,user.Mobile,user.Email,user.DateOfBirth FROM `user` WHERE user.UserId=$id");
    $row = mysqli_fetch_assoc($sql);
    if (mysqli_num_rows($sql) > 0) {
      return $row;
    }
  }

  public function customersettingmydetails($arr)
  {
    // return $arr;
    $fname = $arr['fname'];
    $lname = $arr['lname'];
    $phone = $arr['phone'];
    $dob = $arr['dob'];
    $id = $arr['id'];
    $sql = mysqli_query($this->connect, "UPDATE `user` SET FirstName='{$fname}',LastName='{$lname}' ,Mobile='{$phone}',DateOfBirth='{$dob}'  WHERE UserId={$id}");
    if ($sql) {
      return 'success';
    }
  }
  public function Deleteaddress($id)
  {
    $sql = mysqli_query($this->connect, "UPDATE `useraddress` SET `IsDeleted` = '1' WHERE `useraddress`.`AddressId` = {$id}");
    if (mysqli_affected_rows($this->connect)) {
      return 'success';
    }
  }
  public function DefaultAddress($id)
  {
    $sql1 = mysqli_query($this->connect, "UPDATE `useraddress` SET `IsDefault` = '0'");
    $sql = mysqli_query($this->connect, "UPDATE `useraddress` SET `IsDefault` = '1' WHERE `useraddress`.`AddressId` = {$id}");
    if (mysqli_affected_rows($this->connect)) {
      return 'success';
    }
  }
  public function EditAddress($id)
  {
    $sql = mysqli_query($this->connect, "SELECT * FROM `useraddress` WHERE `AddressId`={$id}");
    $row = mysqli_fetch_assoc($sql);
    if (mysqli_num_rows($sql) > 0) {
      return $row;
    }
  }
  public function updateaddress($array)
  {
    $id = $array['id'];
    $street = $array['street'];
    $house = $array['house'];
    $PostalCode = $array['PostalCode'];
    $City = $array['City'];
    $Mobile = $array['Mobile'];
    $sql = mysqli_query($this->connect, "UPDATE useraddress SET AddressLine1='{$street}',AddressLine2='{$house}',City='{$City}',PostalCode='{$PostalCode}',Mobile='{$Mobile}' WHERE AddressId={$id}");
    if (mysqli_affected_rows($this->connect)) {
      return "success";
    }
  }
}
