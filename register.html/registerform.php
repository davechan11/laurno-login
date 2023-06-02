<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="register-box">
      <h2>Register</h2>
      <form>
        <div class="user-box">
          <input type="text" name="fullname" required="">
          <label>Full Name</label>
        </div>
        <div class="user-box">
          <input type="email" name="email" required="">
          <label>Email</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="">
          <label>Password</label>
        </div>
        <div class="user-box">
          <input type="password" name="confirm_password" required="">
          <label>Confirm Password</label>
        </div>
        <button type="submit">Register</button>
      </form>
    </div>
  </body>
</html>
