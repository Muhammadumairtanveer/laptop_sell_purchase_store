
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form by Colorlib</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="main">

<section class="signup">
<div class="container">
<div class="signup-content">
<div class="signup-form">
<h2 class="form-title">Sign up</h2>
<form action="{{ route('register')}}"  method="post" class="register-form" id="register-form">
    @csrf
    @method('post')
    <div class="form-group">
        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
        <input type="text" name="name" id="name" placeholder="Your Name" />
    </div>
    <div class="form-group">
        <label for="email"><i class="zmdi zmdi-email"></i></label>
        <input type="email" name="email" id="email" placeholder="Your Email" />
    </div>
    <div class="form-group">
        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
        <input type="password" name="password" id="pass" placeholder="Password" />
    </div>
    <div class="form-group">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
        <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" />
    </div>
    <div class="form-group">
        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
    </div>
    <div class="form-group form-button">
        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
    </div>
</form>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"783b1548e890d1f0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>