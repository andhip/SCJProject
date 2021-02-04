<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 

    <title>Login Administrator</title>
</head>

<style>
    body {
        background-color: rgb(250, 250, 250);
        font-family: 'Nunito', sans-serif;
        text-align:center;

    }

    div{
        margin-top: 6.5%; 
        text-align: center; 
        letter-spacing: 0.25px;
       
    }

    div, h3 {
        display:inline-block;
        color: #081629;
        font-size:20px;

    }
    p {
        font-family: 'Nunito', sans-serif;
        color: red;  
        font-size: 16px; 
        font-weight: 400; 
        margin-top: 2rem; 
    }
    .submit {
        align-items:center !important;
        margin-top: 2rem;
        color: black;
        padding: 6px 48px;
        font-family: 'Nunito', sans-serif;
        text-align: center;
        text-decoration: none;
        border-radius: 8px;
        border: none !important;
        display: inline-block;
        font-size: 13px;
        font-weight: 600;
        color:white;
        letter-spacing: 0.5px;
        transition-duration: 0.2s;
        background-color: #2eafec;
        cursor: pointer;

    }

    .submit:hover{
        background-color: #1483dd;

    }

    form{
        display:inline-block;
        border-radius: 30px; 
        padding: 78px 36px 63px;
        background-color: #081629;
        box-shadow:  3px 50px 60px #30373e96;

    }

    table.c-idu{
        justify-content:center;

    } 

    table,td{
        display: block;
        text-align:center !important;
        justify-content:center !important;

    }

    input{
        border-radius: 4px;
        border: 1px solid #2E343C;
        padding:  2px 18px 5px;
        
    }

    table, tr, td {
        margin-left: auto;
        justify-content:center !important;
        align-items:center !important;
        color: #868686;
        font-weight: 400;
        font-size:14px;

    }

</style>

<body>
    
    <?php $alert=""; ?>
    <div mtehod="post" action="logadmin.php">
    <h2 style="font-family: 'Nunito', sans-serif; ">Login Admin</h2>
    <form style="margin-top : 20px; margin-right: 50px; margin-left: 40px; " method="post" action="logadmin.php">
    <table>
        <tr><td style="float:left;">Id User: </td><td><input type="text" name="iduser"></td></tr>
        <tr><td style="float:left;">Password: </td><td><input type="password" name="password"></td></tr>
    </table>
    <input class="submit" type="submit"name="login" value="Submit">
    </form>

    <?php
    include("config.php");

    if(isset($_POST['login'])){
        
        $iduser = mysqli_real_escape_string ($conn, $_POST['iduser']);
        $password =  mysqli_real_escape_string ($conn, $_POST['password']);

        $hasil = mysqli_query($conn, "SELECT * FROM user WHERE iduser='".$iduser."' AND password='".$password."'");
        while($user_data = mysqli_fetch_array($hasil)) {
            $status=$user_data['status'];
        }
        if(empty($status)){
            $alert="Maaf Id atau password yang Anda masukan tidak benar! <br> silahkan ulangi kembali.";
        }
        
        else  ($status=="admin") {header("Location:homeadmin.php")};

    }
    ?>

    <p >  <?php echo "$alert"; ?></p>


    </div>

</body>
</html>