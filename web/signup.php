<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'php/header.php';?>
  </head>
  <body>
	<div class="container-fluid">
    <form id="signupForm">
      <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="true">
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="true">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required="true">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="address" name="address" placeholder="Address 1" required="true">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="address2" name="address2" placeholder="Address 2">
      </div>

      <div class="checkbox">
        <label>
          <input type="checkbox" name="agree"> I agree to Terms &amp conditions
        </label>
      </div>
      <button type="submit" class="btn btn-default" id="submit_signup">Submit</button>
    </form>

  </div><!-- /container-fluid -->
  <?php include 'php/footer.php';?>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
  <script src="js/signup.js"></script>
</body>
</html>
