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
        
        
    </style>
</head>
<body>
    <form class="Register" method="POST">
        <br>
        <h1>Регистрация</h1>
        <input type="text" id="E-Mail" name="e-mail" placeholder="Е-Мейл"><br>
        <input type="password" id="Pass" name="password" placeholder="Парола"><br>
        <input type="password" id="Passcomfirm" name="reTypePassword" placeholder="Повторете паролата"><br>
        <input type="text" id="fname" name="name" placeholder="Име"><br>
        <input type="text" id="lname" name="lastname" placeholder="Фамилия"><br>
        <input class="submit" type="submit" name="submit" value="Submit"><br>

        <?php
        if(isset($_POST["submit"]))
        {
            $conn=mysqli_connect("localhost","root","","example");

            $password=$_POST["password"];
            $reTypePassword=$_POST["reTypePassword"];
            $email=$_POST["e-mail"];
            $name=$_POST["name"];
            $lastname=$_POST["lastname"];
            if($password==$reTypePassword&& $rows==0)
            {
                $password=md5($password);
                $sql="INSERT INTO `users`(`id`,`e-mail`,`password`,`name`,`lastname`,`added_date`)
                VALUES (NULL,'$email','$password','$name','$lastname',current_timestamp())";
                $conn->query($sql);
                echo"
                    <script>
                        window.location.assign('index.php');
                    </script>
                ";
            }


        }
        ?>
      </form> 

    
</body>
</html>