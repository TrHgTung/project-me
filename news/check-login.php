<?php
    include("../../connection.php");

    function check_login($con){ // this func will check user's session, if logged in ? show login btn : no login btn
        if( isset($_SESSION['user_id']) ){
                $id = $_SESSION['user_id'];
                $query = "select * from users where user_id = '$id' limit 1";      
                $result = mysqli_query($con,$query);
    
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    return $user_data;
                }
            } 
            // header("Location: ../../login.php"); // rm this shit
            // die; // and rm this also
        }

        session_start();

          $user_data = check_login($con);

          if(!isset($_SESSION['user_id'])){
            echo '<form class="d-flex" action="../../login.php">
              <button class="btn btn-light">Đăng nhập</button>
            </form>';
          }
          else{
            echo '<form class="d-flex" action="../../logout.php">
              <button class="btn btn-light">Đăng xuất</button>
            </form>';
          }