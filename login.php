<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

    <style>
        body{
            background-color:#7a7ceb;
            margin-top:10%;
        }
        .contain{
            margin:6% auto;
            width: 40%;
            background-color:rgba(192,192,192,0.5);
            padding: 5%;
            border-radius: 20px;
        }
        .contain form input{
            margin-bottom:5%;
            border-radius:20px;
        }
        .contain form button{
            border-radius:20px;
            width:30%;
        }

       
    </style>
<body>
    

    <div class="contain text-center">
        <h3 class="mb-5">Selamat Datanggggg!</h3>
        <h6>Harus Login Dulu Ya!</h6> <br>
        <form method="POST" action="proseslogin.php">
            <input type="text" class="form-control" name="username" id="username" required="" autofocus="" placeholder="Nama User">
            <input type="password" class="form-control" name="password" id="password" required="" placeholder="Password">
            <button type="submit" class="btn bg-light">login</button>
        </form>
        
    </div>

        <?php if(isset($_GET['pesan'])){?>
        
            <div class="error">
                <label> OPSSSS..... <?php echo $_GET['pesan'] ?></label>
            </div>

        <?php } ?> 
        

</body>
</html>