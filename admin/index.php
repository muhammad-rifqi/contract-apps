<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kabupaten Musi Rawas Utara - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
		

</head>

<body class="bg-gradient-primarycustom">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
         

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <img src="img/securelogin.png" />
                  </div>

                  <div class="text-left">
                    <img src="img/musi.png" width="20"/>
                    <h2 class="h4 text-gray-900 mb-4">Selamat Datang</h2>
                  </div>
                  <div class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                    <button onclick="login()" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </div>
                  <hr>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script>
	
	function login(){
			var hr = new XMLHttpRequest();
			var url = "cek_login.php";
			var name = document.getElementById("username").value;
			var password = document.getElementById("password").value;
      if(name == "" || password == ""){
        swal({
                title: "Login Failed",
                text: "Username Or Password Cannot Empty",
                icon: "error",
              }).then(function() {
                return false;
              });
       
      }else{      
        var vars = "username="+name+"&password="+password;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function() {
          if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
              if(return_data == "success"){
                window.location="dashboard";
              }else{
              swal({
                title: "Login Failed",
                text: return_data,
                icon: "error",
              }).then(function() {
                window.location = "login";
              });
              }
          }
        }
        hr.send(vars); 
        }
      }
			
		</script>

</body>

</html>
