<?php
$username = $_POST["email"];
$password = $_POST["password"];

$result = validate_credentials($username, $password);

if($result){
  //include "test.php";
  ?>
  
<main class="container"> 
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>login success dude</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
    <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
  </div>
 </main> 
   <?php   
}
else{

?>





<main class="form-signin w-100 m-auto">
  <form method="POST" action="login.php">
    <img class="mb-4" src="https://yt3.googleusercontent.com/4rq6cLfJQXS1tRI6ZQL9w9De_IZHSyu8wDZ7p443HY3tN9da2cOsIaC8AU0NCtkk2_4aL8Exxw=s900-c-k-c0x00ffffff-no-rj" alt="" height="50">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
<?php
}
?>