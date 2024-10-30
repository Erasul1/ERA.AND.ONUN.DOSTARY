<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="script.css">

</head>
<body>
    <div class="pon">
<header>
   
    <div class="logo">
        <a href="#">logo</a>
    </div>
    <div class="menu">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Menu</a>
        <a href="#" onclick="modalOpen()">REGISTER</a>
       
    </div>
    

     <div class="modal">
        <div class="modal-main">
             <h1>Sign In</h1>
             <form action="register.php" method="POST">
                 <input type="text" name="email" required  placeholder="Почта или телефон">
                 <input type="text" name="full_name" required placeholder="Полное имя">
    <input type="text" name="nickname" required placeholder="Имя">
    <input type="password" name="password" required placeholder="Пароль">
    <input type="password" name="password2" required placeholder="пароль еше раз">
     
    <button type="submit" onclick="modalOpen()">Зарегистрироваться"</button>


          
          
                 <p>Dont have an account?</p>
                 <a href="">Sign Up</a>
             </form>
        </div>
        <a class="x" href="" onclick="modalClose()">X</a>
     </div>
 
     <script src="1111.js"></script>
 









     

    
</header>
    </div>

    <div class="modal-main">
            <h1>Sign In</h1>
            <form action="api/register.php" method="POST">
                <input type="text" name="email"required placeholder="Почта или телефон">
                <input type="text" name="name"required placeholder="Полное имя">
                <input type="text" name="nikcname"required placeholder="Nickname">
                <input type="password" name="password"required placeholder="Введите пароль">
                <input type="password" name="password2"required placeholder="Подтвердить парол">

  <?php 
                    if(isset($_GET["error"]) && $_GET["error"] == 1){
                ?>
                    <h6 class="text-danger">Толық енгіз!</h6>
                <?php
                    }
                    else if(isset($_GET["error"]) && $_GET["error"] == 2){
                ?>
                    <h6 class="text-danger">Пароль кате!</h6>
                <?php
                    } else if(isset($_GET["error"]) && $_GET["error"] == 3){
                ?>
                    <h6 class="text-danger">Тіркелген аккаунт!</h6>
                <?php
                    } else {
                ?>
                    <h6 class="text-danger">Белгісіз кате!</h6>
                <?php
                    }
                ?>


                <button type="submit">Sign In</button>
                <p>Dont have an account?</p>
                <a href="">Sign Up</a>
            </form>
       </div>
<section class="ortasy">
    <div class="text">
    <h1>САРА</h1>
    <h1>ТОМПСОН</h1>
    <p>Эмоции через образы</p>
    <a>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy <br> tempor invidunt ut labore et dolore magna aliquyam<br> erat, sed diam voluptua</a>

    <div class="box">
        <div class="social-icons">
            <a href="#" class="social-icon">FB</a>
            <a href="#" class="social-icon">IG</a>
            <a href="#" class="social-icon">TW</a>
        </div>
        <p>Sample text. Click to select the Text Element.</p>
    </div>

    </div>

</section>

    <section class="container">
        <div>
            <div class="foto1">
        <img src="2149253143.jpg" alt="Описание изображения">
</div>
        </div>
        <div class="foto">
            <p>Sample text. Click to select the Text Element.</p>
            <img src="147893.jpg" alt="Описание изображения" class="image">
        </div>
    </section>
    <div class="textt">
        <h1>ЗАПЕЧАТЛЕНИЕ ВЕЧНЫХ МОМЕНТОВ
        </h1>
        <p>Sample text. Click to select the Text Element.</p>
    </div>



   
     
 
</body>
</html>