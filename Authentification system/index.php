<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url('marble.jpg')
        }
        form{
            width: 30%;
            height: 350px;;
            background-color: white;
            margin-left: 547px;
            margin-top: 185px;
            border-radius: 15px;
            align-items: center;
            text-align: center;
            font-family:Cambria;
        }
        input[type=text],.submit{
            width: 30%;
            padding: 8px;
            font-family:Cambria;
            display: inline-block;
            border: 1px solid grey;
            border-radius: 15px;
            box-sizing: border-box;
            color: gray;
            margin-bottom: 13px;
            width: 400px;
            
        }
        input[type=password]{
            width: 30%;
            padding: 8px;
            font-family:Cambria;
            display: inline-block;
            border: 1px solid grey;
            border-radius: 15px;
            box-sizing: border-box;
            color: gray;
            margin-bottom: 13px;
            width: 400px;
        }
        .submit{
            background-color: #000;
            color: white;

        }
        .link{
            text-align: left;
        }
        
        
    </style>
</head>
<body>
    <form  method="post"class="Register">
        <br>
        <h1>Log-in</h1>
        <input type="text" id="E-Mail" name="e-mail" placeholder="Е-Мейл"  ><br>
        <input type="password" id="Pass" name="password" placeholder="Парола"><br>
        <input class="submit" type="submit" name="submit" value="Изпращане" ><br>
        <a href="register.php" class="link" >Регистрирай се</a><br>
        <a href="" class="link" id="val" ></a>
        <?php
            if(isset($_POST["submit"]))
            {
                $conn=mysqli_connect("localhost","root","","example");
                $email=$_POST["e-mail"];
                $password=md5($_POST["password"]);
                
                $sqlSelect="SELECT * FROM `users` WHERE `e-mail`='$email' AND `password`='$password'";
                $result =$conn->query($sqlSelect);
                $rows= mysqli_num_rows($result);
                if($rows>0)
                {
                    $row=$result->fetch_assoc();
                    $id=$row["id"];
                    setcookie("users",$id,time()+86400*30);
                    echo"
                        <script>
                                window.location.assign('profile.php?id=$id');
                        </script>
                    ";
                }


        }
        ?>
      </form>
       <!--<script>
       var email = document.getElementById("E-Mail");
       var Valid = document.getElementById("val");
       function ValidateEmail() {

        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (!email.value.match(validRegex)) {
        
          Valid.innerHTML="Въведете верен ЕМайл";
        
          return true;
        
        }else{
            Valid.innerHTML="";
        }

}
       </script>
-->

    
</body>
</html>