<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="{{asset ('assets/css/login.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="wrapper">
          <div class="title"><span>Login Form</span></div>
          @if (session()->get("error"))
            <p style="color: red">{{ session()->get("error")}}</p>
          @endif
          <form action="{{route("auth.login")}}" method="POST">
            @csrf
            <div class="row">
              <i class="fas fa-user"></i>
              <input type="text" id="email" name="email" placeholder="Email or Phone" required>
            </div>
            <div class="row">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            {{-- <div class="pass"><a href="#">Forgot password?</a></div> --}}
            <div class="row button">
              <input type="submit" value="Login">
            </div>
          </form>
        </div>
      </div>
</body>
</html>