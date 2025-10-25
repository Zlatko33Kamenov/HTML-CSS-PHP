<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        p{
            margin-left: 450px;
        }
        .par{
            text-align: justify;
            font-size: 12px;
            float: right;
            margin-left: 450px;
        }
        h1{
            text-align: center;
            
        }
        body{
            background-image:url('marble.jpg')
        }
        .Register{
            width: 1500px;
            height: 750px;;
            background-color: white;
            margin-left: 50px;
            margin-top: 70px;
            border-radius: 15px;
            align-items: center;
           
        
            font-family:Cambria;
        }
        .submit,.submit1,.submitlast{
            height: 20%;
            padding: 8px;
            font-family:Cambria;
            width: 100%;
            
            
            
            border-collapse: collapse;
            color: gray;
            border: 1px solid black;
            background-color:black;
            color: white;
            
        }
        .submit1{
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            color: white;
            background-color: black;
        }
        .submitlast{
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            color: white;
            background-color: black;
        }
        .submit{
            background: white;
            color: black;
        }
        
        div.buttons{
           
            float: left;
            width: 200px;
            height: 200px;
            z-index: 1;
            margin-left: 50px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        img{
            position:absolute;
            top: 119px;
            left: 136px;
            width: 200px;
        }
        
        
        .link{
            text-align: left;
        }
        
        
    </style>
</head>
<body>
    <?php
    error_reporting(E_ALL & E_WARNING);
    $conn=mysqli_connect("localhost","root","","example");
    $profile_page_id = $_GET["id"];

    $sqlSelect="SELECT * FROM `users` WHERE `id`='$profile_page_id'";
    $result=$conn->query($sqlSelect);
    $row=$result->fetch_assoc();
    $name=$row["name"];
    $lastname=$row["lastname"];
    $email=$row["e-mail"];
    $image=$row["Image"];
    if($image =="")
    {
        $image = "default.png";
    }
    ?>
    <div class="Register">
        <br>
        
        <p><?php echo "$name $lastname";?></p>
        <h1>Описание</h1><br>
        <p><?php echo "My e-mail is:$email";?><</p>
        <p class="par">efbsifebiubfuiebwibfuiwbefubweuifbwuebfuiwbefuwbefubweifubweibwefubnweufbnwefweubfuwbfuewbnfiubnweiufbwiuebfujwbefubewufbwufuewbfuwebfuwbfuwbenufbewufbwufbewubf
        efbsifebiubfuiebwibfuiwbefubweuifbwuebfuiwbefuwbefubweifubweibwefubnweufbnwefweubfuwbfuewbnfiubnweiufbwiuebfujwbefubewufbwufuewbfuwebfuwbfuwbenufbewufbwufbewubf
        efbsifebiubfuiebwibfuiwbefubweuifbwuebfuiwbefuwbefubweifubweibwefubnweufbnwefweubfuwbfuewbnfiubnweiufbwiuebfujwbefubewufbwufuewbfuwebfuwbfuwbenufbewufbwufbewubf
        efbsifebiubfuiebwibfuiwbefubweuifbwuebfuiwbefuwbefubweifubweibwefubnweufbnwefweubfuwbfuewbnfiubnweiufbwiuebfujwbefubewufbwufuewbfuwebfuwbfuwbenufbewufbwufbewubf
        efbsifebiubfuiebwibfuiwbefubweuifbwuebfuiwbefuwbefubweifubweibwefubnweufbnwefweubfuwbfuewbnfiubnweiufbwiuebfujwbefubewufbwufuewbfuwebfuwbfuwbenufbewufbwufbewubf</p><br>

        <img src="<?php echo $image;?>" alt=""><br>
        <div class="buttons">
            <a href="" class="" ><button class="submit1" >Снимки</button></a>
            <a href="" class="" ><button class="submit" >профил</button></a>
            <a href="index.php" class="" ><button class="submitlast" >Изход</button></a>
            
            
        </div>
        
    </div>
      
</body>
</html>