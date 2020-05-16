# ChucNangDangNhap
Bước 1: Tạo tệp index.php, sử dụng mã HTML để tạo form đăng nhập như hình.



Mã HTML có thể là như sau:

<!DOCTYPE HTML>
<html>
    <style type="text/css">
    .login {
          height:180px; width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
    }
    .login input {
          padding:5px; margin:5px
    }
    </style>  
    <body>
        <form>
          <div class="login">
             <h2>Login</h2>
             <input type="text" name="username" size="30"  placeholder="username" />
             <input type="password" name="password" size="30" placeholder="password" />
             <input type="submit" value="Sign in"/>
          </div>
       </form>
    </body>
</html>
Bước 2: Trong thẻ form xác định phương thức gửi dữ liệu là POST.

 method = "post"
Bước 3: Xử lý đăng nhập

Kiểm tra nếu $_SERVER["REQUEST_METHOD"] là POST thì lấy thông tin username và password nhập vào từ form và lưu vào các biến $username, $password.

Kiểm tra nếu $username và $password có giá trị là "admin" và "admin" thì hiển thị thông báo "Welcome $username to website".
Còn lại hiển thị lỗi "Login Error".
Đoạn mã xử lý đăng nhập:

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"]; 
   $password = $_POST["password"];
	
   if ($username === "admin" && $password === "admin") {	 
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
   } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
   }
}
?>
Trong đoạn mã trên:

$_POST["username"] và $_POST["password"] được dùng để lấy giá trị từ form do người dùng nhập vào. Các tên username và password là trùng với thuộc tính name của các thẻ input.

Bước 4: Chạy chương trình

- Đăng nhập với username và password là admin/admin và quan sát kết quả.

- Đăng nhập với username và password bất kỳ và quan sát kết quả.

- Thay POST bằng GET chạy lại chương trình và so sánh kết quả.

Lưu ý: Nếu quan sát trên URL, sẽ có sự khác nhau:

URL với POST: http://localhost/index.php
URL với GET: http://localhost/index_GET.php?username=admin&password=admin
Vậy khi phương thức HTTP GET được sử dụng với form, các tham số sẽ được hiển thị trên URL khi form được truyền đi. Khi đó các tham số này sẽ được lưu vào mảng $_GET. Biến $_GET là mảng chứa các cặp khóa/giá trị cho dữ liệu được truyền theo yêu cầu HTTP. Biến $_GET là biến toàn cục, do đó nó có thể được truy cập ở bất cứ đâu trong mã PHP.

Tương tự với phương thức HTTP POST, tuy nhiên với GET thì giá trị của các tham số sẽ được hiển thị trên URL truyền đi, còn POST thì không.
