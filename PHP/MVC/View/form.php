
<form action="" method="POST" class="form row">
<div class="row1">
  <input type="text" style="margin-right: 14px; margin-bottom: 15px;" name="fname" placeholder="First name">
  <input type="text" name="lname" placeholder="Last name">
</div>
<div class="row2">
  <input type="tel" id="phone" name="phone" style="margin-right: 14px; margin-bottom: 15px;" class="mobile"
    placeholder="Mobile number" pattern="^\d{10}$"/>
  <input type="email" name="email" placeholder="Email address">
</div>
<select name="subject" id="dropdownMenuButton">
  <option value="">Subject</option>
  <option value=""></option>
</select>
<div>
  <input type="text" name="message" class="form-msg" placeholder="Message">
</div>

<a href="../index.php/?action=dbcontact">
<input id="submit" type="submit" value="Submit"name="submit" > </a>
</form>

