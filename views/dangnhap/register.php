<?php
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
 #success-alert {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 9999;
  padding: 50px;
  border-radius: 10px;
  background-color: #28a745;
  color: #fff;
  text-align: center;
  display: flex;
  align-items: center;
}


    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">
    <div id="success-alert" class="alert alert-success alert-dismissible fade show d-none" role="alert">
  <i class="fas fa-check-circle mr-2"></i> <!-- Sử dụng Font Awesome icon -->
  Tạo tài khoản thành công!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

        <div class="card o-hidden border-0 shadow-lg my-5">
            
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                
                <div class="row">
                    
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo tài khoản mới!</h1>
                            </div>
                            <form class="user" method="post" action="index.php?act=dangki">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nhập Họ Tên Của Bạn" name="ten">
                                    </div>
                                
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nhập Địa Chỉ Email" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Nhập Mật Khẩu" name="matkhau">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Nhập Lại Mật Khẩu">
                                    </div>
                                </div>
                                <input type="submit" name="them" class="btn btn-primary btn-user btn-block" value="Tạo tài khoản mới">
                                <hr>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Quên Mật Khẩu?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Bạn đã có tài khoản ?Đăng Nhập!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <script src="../admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <script src="../admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../admin/assets/js/sb-admin-2.min.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    if (window.location.search.includes('registered=success')) {
      document.getElementById("success-alert").classList.remove("d-none");
    }
  });
</script>


</body>

</html>