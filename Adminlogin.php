<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-color:black;
            width: 400px;
            height: 400px;
            border-radius: 5px;
            margin-top: 100px;
            box-shadow: 12px 12px yellow  ;
         }
         #login{
             color:yellow;
             padding-top: 20px;
             
         }
         .table{
             width: 300px;
             height: 180px;
            color: white;
            padding: 30px;
            font-size: 25px;
            padding: 10px;
            border: white;
                     }
                     #button{
                         width: 300px;
                         height:50px ;
                         background: yellow ;
                         border-radius: 13px;
                         font-size: 33px;
                          }
                          #td input
                          {
                         width: 300px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px;

                          }
                        #td select
                        {
                         width: 305px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px; 
                        }
                        
    </style>
</head> 
<body bgcolor="	#383838">
    
   <center><div class="box"><h1 id="login"> Admin Login </h1><hr>
   <form method="post">
    <table class="table" id="td">
      <td><select name="user"><option value="Admin">Admin</select></td></tr>
<tr><td><input type="text" name="email" placeholder="Email"></td></tr>
<tr><td><input type="password" name="pswd" placeholder="Password"></td></tr>
</table>
 <input type="submit" name="login" value="Login" id="button">
 </form>
    <hr>
    <label style="color: white; margin-right: 120px; font-size: 17px;">
        <input type="checkbox" checked="checked" name="remember"> Remember me  </label> 
        <label style="color: white; font-size: 17px;">Forget Password?
      </label>
    Forget Password?
   

</div></center> </body>
</html>

<?php

require 'conn.php';
if(isset($_POST['login'])){
    $uname = $_POST['email'];
    $pswd = $_POST['pswd'];
    echo $uname, $pswd;
    $sql = "select * from admin where username='$uname' and password='$pswd'";
    $q = mysqli_query($conn, $sql);
    if($r=mysqli_fetch_assoc($q)){
        $db_uname = $r['username'];
        $db_pass = $r['password'];
        session_start();
        $_SESSION['name'] = $db_uname;
    if($uname==$db_uname and $pswd==$db_pass){
        echo "<script>
        alert('Login Successfully!')
        window.location.href='AdminHome.php'
        </script>";
    }
}else{
    echo "<script>
    alert('Password or Username are incorrect!');
    window.location.href='Adminlogin.php'
    </script>";
}
}

?>