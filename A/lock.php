
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login | Triple T Company</title>
  <link rel="shortcut icon" href="Assets/img/logo/logo.svg" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container justify-content-center">
    <div class="row">
      <div class="col-md-8 mt-5 mx-auto p-3 border rounded text-center">
        <h1 class="text-center text-danger">THÔNG BÁO</h1>
        <p>Tài khoản <span class="text-danger ">bị khóa</span> vui lòng liên hệ với admin</p>
        <p>Nhấn <a href="index.php?controller=trangchu&action=logout">vào đây </a>để đăng nhập bằng tài khoản khác hoặc trang web sẽ tự động chuyển hướng sau <span id="counter" class="text-info">3</span> giây nữa.</p>
        <a  class="btn btn-outline-success px-5 text-center" href="index.php?controller=trangchu&action=logout">Quay lại</a>
      </div>
    </div>
  </div>

</body>
<script>
    let duration = 3;
    let countDown = 3;
    let id = setInterval(() => {
      countDown--;
      if (countDown >= 0) {
        $('#counter').html(countDown);
      }
      if (countDown == -1) {
        clearInterval(id);
        window.location.href = 'index.php?controller=trangchu&action=logout';
      }

    }, 1000);
  </script>
</html>