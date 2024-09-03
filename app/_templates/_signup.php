<?php

$signup = false;
if(isset($_POST["Username"]) and isset ($_POST["password"]) and isset($_POST["email"]) and isset($_POST["Phone"])){
$username = $_POST["Username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["Phone"];
$error = User::signup($username, $password ,$email ,$phone);
$signup = true;
}


?>
 <?php
  if ($signup){
     if(!$error){
?>
 <main class="container"> 
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>signup success</h1>
    <p class="lead">NOW YOU LOGIN <a href="/login.php ">HERE</a>.</p>
   
  </div>
 </main>
 
 <?php } else{ ?>
  
  <main class="container"> 
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>signup fail </h1>
    <p class="lead">something went wrong <?php print $error ?> </p>
   
  </div>
 </main>
 <?php } ?>

  <?php } else{ ?>

<main class="form-signup w-100 m-auto">
  <form method="POST" action="signup.php">
    <img class="mb-4" src="https://yt3.googleusercontent.com/4rq6cLfJQXS1tRI6ZQL9w9De_IZHSyu8wDZ7p443HY3tN9da2cOsIaC8AU0NCtkk2_4aL8Exxw=s900-c-k-c0x00ffffff-no-rj" alt="" height="50">
    <h1 class="h3 mb-3 fw-normal">SIGN UP HERE</h1>
    <div class="form-floating">
      <input name="Username"type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
  </div>
  <div class="form-floating">
      <input name="Phone"type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Phone</label>
  </div>
    <div class="form-floating">
      <input name="email"type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password"type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
  </form>
</main>
<?php } ?>