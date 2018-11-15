<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 

</head>


<body class="login-page" style="background: url(img/hinhnen.jpg) center center / cover no-repeat">
    <div class="login-box">
        <div class="card" style="background:20px;">
            <div class="body">
                <form action="{{Route('login')}}" method="post" id="sign_in" >
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" style="background: black; color: white;" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>