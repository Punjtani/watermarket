<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
    /* @media (max-width: 678px) {
                .input{
                  margin-left: 10%;
                }
    } */
    /* @media (min-width: 544px) {
  h1 {font-size:1.5rem;} /*1rem = 16px*/
} */
@media (min-width: 950px) and (max-width:1100px) {
  h1 {font-size:2.75rem}
}
@media (min-width: 500px) and (max-width:950px) {
  h1 {font-size:2.0rem}
}
@media (min-width: 200px) and (max-width:500px) {
  h1 {font-size:1.5rem}
}
@media (min-width: 1250px) and (max-width:1800px) {
  .login-box{margin-left:80%;width:333px}
}
@media (min-width: 1050px) and (max-width:1250px) {
  .login-box{margin-left:40%;width:283px}
}
@media (min-width: 950px) and (max-width:1050px) {
  .login-box{margin-left:20%;width:270px}
}
@media (min-width: 850px) and (max-width:950px) {
  .login-box{margin-left:10%; width:260px}
 }
 @media (min-width: 750px) and (max-width:850px) {
  .login-box{margin-left:3%; width:250px}
 }
 @media (min-width: 650px) and (max-width:750px) {
  .login-box{margin-left:3%; width:240px}
 }
 @media (min-width: 550px) and (max-width:650px) {
  .login-box{margin-left:2%; width:234px}
 }
 @media (min-width: 440px) and (max-width:550px) {
  .login-box{margin-left:0%; width:200px}
 }
 @media (min-width: 400px) and (max-width:450px) {
  .login-box{margin-left:-23px; width:190px}
 }
 @media (min-width: 240px) and (max-width:400px) {
  .login-box{margin-left:-23px; width:160px}
 }
 /*
@media (min-width: 50px) and (max-width:850px) {
  .login-box{margin-left:-45px}
} */
</style>
<body class="hold-transition login-page" style="
background: linear-gradient(90deg, white 53%,  #34b7eb 50%);">

    <div class="row" style="margin-top:35px"
    style="margin-top:35px">
        <div class="col-7" >
             <h1 style="margin-left:25%">Password</h1>
        </div>
        <div class="col-5" >
           <h1 style="color:white;margin-left:2%">Confirmation</h1>  <br>
            <div class="login-box">
                        <form action="../../index3.html" method="post"  style="margin-top:40%;">

                            <div class="input-group mb-3" style="width:100%">
                              <input type="email" class="form-control " placeholder="Old Password" style="border-radius:40px;">
                              </div>
                              <div class="input-group mb-3">
                              <input type="password" class="form-control" placeholder="New Password" style="border-radius:40px">
                             </div>
                             <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password" style="border-radius:40px">
                               </div>
                              <div class="row">
                              <div class="col-6">
                              </div>
                               <div class="input-group">
                                <button type="button" class="btn btn-default btn-lg"
                                style="border-radius:40px;width:58%;margin-left:25%;margin-top:20px" >
                                 <a href="/project">submit</a>
                              </button>
                            </div>
                              <!-- /.col -->
                            </div>

                          </form>

                </div>
              </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\xammp1\htdocs\projects\newlaravel8\resources\views\forgetpassword.blade.php ENDPATH**/ ?>