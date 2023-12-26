<?php

session_start();

include("./connection.php");
include("./functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        //
        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];

                    header("Location: ./user.php");
                    die;
                }
            }
        }
        echo '<script type="text/javascript">
                window.onload = function(){
                    alert("Bạn nhập sai thông tin đăng nhập. Vui lòng nhập lại!");
                }
            </script>';
            
    }else{
        echo '<script type="text/javascript">
                window.onload = function(){
                    alert("Bạn nhập sai thông tin đăng nhập. Vui lòng nhập lại!");
                }
            </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">  
    <script src="https://kit.fontawesome.com/0591fa8989.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/login-style/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <title>ĐĂNG NHẬP</title>
</head>
<body>
    <header>
        <a href="./" class="logo">TRANG CHỦ</a>
        <ul>
            <li><a href="news/navigator.php" class="active">Bỏ qua Đăng nhập</a></li>
            
        </ul>
    </header>
           
    <section>
        <div class="container-images-bg">
            <img src="./images/stars.png" alt="" id="stars">
            <img src="images/moon.png" alt="" id="moon">
            <img src="images/mountains_behind.png" alt="" id="mountains_behind">
                    
            <img src="images/mountains_front.png" alt="" id="mountains_front">
                
            <!-- <img src="images/combo-pokemon.png" alt="" id="little-pkm"> -->
            <img src="images/combo-pokemon.png" alt="" id="little-starters-pkm">
        </div>
                <div class="container-all-contents mt-5 g-3 row">
                    <form action="" method="POST">
                            <div class="text-center mb-5 text-white">
                                <h2><strong>Đăng nhập</strong></h2>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mb-4 col-md-11">
                                    <input type="text" class="form-control" aria-describedby="passwordHelpInline" id="inputPassword6" name="user_name" placeholder="Tên Đăng nhập (VD: ash_ketchum123)" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mb-5 col-md-11">
                                    <input type="password" class="form-control" name="password"  placeholder="Mật khẩu (VD: Test@123)" required>
                                </div>
                            </div>
                            
                            <div class="text-center mb-5">
                                <input type="submit" value="Xác thực đăng nhập" id="btn" class="btn btn-primary btn-lg">
                            </div>
                            <div class="bg-dark w-100 h-50 bg-opacity-25 p-5">
                                <div class="mt-3 text-white">
                                    <div class="mt-3 ms-5 text-white">
                                        <p>Không có tài khoản? Hãy <a href="signup.php" class="btn btn-secondary btn-sm">đăng ký</a>
                                    </div>
                                </div>
                                <!-- <div class="mb-3 text-white ">
                                    <div class="ms-5 text-white">
                                        <p><u>Tuy nhiên:</u>&nbsp;&nbsp;Bạn vẫn có thể <a href="#" class="link-light">duyệt với vai trò là khách</a> mà không cần đăng nhập/đăng ký.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
        
<!--- downer here --->
        
           
    
    </section>
    <footer class="footer">
        <?php  
            include './components/footer.php';
        ?>
    </footer>
</body>
</html> 
