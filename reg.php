<? session_start(); ?>
<html lang="ru">
    <head>
        <title>Jobwork</title>
		<link rel="stylesheet" type='text/css' href="style.css">
		<meta charset="utf-8">
    </head>
	<body>
	<?php
	 $host='localhost';
	 $user='cl25931_jobwork';
	 $pass='KcE42Gnm';
	 $base='cl25931_jobwork';
	 
	 $conn=mysqli_connect($host, $user, $pass, $base);
     ?>
        <div class="page">
	<header>
	   <div class='logo'>
			   <img src='img/logo.svg' alt='logo' width='220%'>
	   </div>
	   <div class='name'>
             <center><h1>Регистрация и Вход</h1></center>
	   </div>
	   <div class='vhod222'>
	        <div class='' align='right'>
						   <form action='reg.php'>
							  <input type='submit' value='Регистрация и Вход' style="font-family: LetoTextSansDefect;font-size: 18px;margin-top: 15px;margin-right: 15px;">
						   </form>
						</div>
				<?
				if ($_SESSION['login'] !='')
				{
				?>
				<form action='index.php' method='post'>
					<input type='submit' name='out' value='Выход' style="font-family: LetoTextSansDefect;font-size: 18px;margin-top: 15px;margin-right: 15px; margin-left: 300px;">
				</form>
				<?
				}
				?>
	   </div>

	</header>
	 <div>
                <input type="checkbox" id="side-checkbox" />
<div class="side-panel">
    <label class="side-button-2" for="side-checkbox">+</label>    
    <div class="side-title">Меню</div>
    <section>
            <?
            $query="SELECT * FROM category";
            $result=mysqli_query($conn, $query);

            while($row=mysqli_fetch_array($result))
            {
            ?>
        
                    <br><form action="index.php" method='post'>
                        <input class="floating-button" type='submit' name='category' value='<? echo $row[1]; ?>'>
                    </form>
            <?
            }
            ?>
            </section>
</div>
<div class="side-button-1-wr">
    <label class="side-button-1" for="side-checkbox">
        <div class="side-b side-open">Меню</div>
        <div class="side-b side-close">Закрыть</div>
    </label>
    <a href="onas.php" class="button_1650618840167" target="_self">О нас</a>
            <a href="kontakti.php" class="button_1650618840167" target="_self">Контакты</a>
    <a href="korzina.php" class="button_1650618840167" target="_self">Корзина</a>
            <a href="LK.php" class="button_1650618840167" target="_self">Лич.кабинет</a>
</div>
            </div>
		   <main>
	       <section class='section2'>
			    <center>
				       <?
					   if ($_POST['reg']=='Зарегистрироваться')
					   {
						   $login=$_POST['login'];
						   $mail=$_POST['mail'];
						   $pass1=$_POST['pass1'];
						   $pass2=$_POST['pass2'];
						   
						   if ($pass1 == $pass2)
						   {
							    $query="INSERT INTO `reg`(`login`, `mail`, `pass`, `img`, `adres`, `tel`, `status`)
							                      VALUES ('$login', '$mail', '$pass1', '1.jpg','','0','0')";
							    $result=mysqli_query($conn,$query);
							    echo "<br><br>Регистрация прошла успешно, <a href='reg.php'>Авторизуйтесь</a><br><br>";
						   }
						   else
						   {
							   echo "<br><br>Пароли не совподают, попробуйте еще раз <a href='reg.php'>Зарегистрироваться</a><br><br>";
						   }
					   }
					   else
					   {
					   ?>
						 <table style="font-family: LetoTextSansDefect;font-size: 20;width: 400px;height: 250px;" class="ramkilog">
						    <form action='reg.php' method='post'>
							    <tr>
								    <td>Введите логин</td>
									<td><input type='text' name='login'></td>
								</tr>
								<tr>
								    <td>Введите почту</td>
									<td><input type='text' name='mail'></td>
								</tr>
								<tr>
								    <td>Введите пароль</td>
									<td><input type='password' name='pass1'></td>
								</tr>
								<tr>
								    <td>Повторите пароль</td>
									<td><input type='password' name='pass2'></td>
								</tr>
								<tr>
								    <td></td>
									<td><input type='submit' name='reg' value='Зарегистрироваться' style="font-family: LetoTextSansDefect;width: 200px;height: 30px;font-size: 20px;"></td>
								</tr>
							</form>
						 </table>
						 <?
					     }
					     ?>
						      <br>
					<?
					if ($_POST['auto']=='Войти')
					{
						$login=$_POST['login'];
						$pass1=$_POST['pass1'];
						
						$query="SELECT * FROM `reg` WHERE `login` = '$login' AND `pass`='$pass1' ";
						$result=mysqli_query($conn,$query);
						$num=mysqli_num_rows($result);
						$row=mysqli_fetch_array($result);
						
						if ($num == 1)
						{
							echo "<br><br>Вы авторизовались, пройдите в <a href='LK.php'>Личный кабинет</a><br><br>";
							$_SESSION['login']=$login;
							$_SESSION['pass1']=$pass1;
							$_SESSION['status']=$row[7];
							if ($row[7] == 1) echo "<br><br>добро пожаловать в <a href='admin.php'>Панель администратора</a><br><br>";
							
						}
						else
						{
							echo "<br><br>Данные не верны попробуйте еще раз <a href='reg.php'>Авторизоваться</a><br><br>";
						}
					}
					else
					{
					?>
						 <table style="font-family: LetoTextSansDefect;font-size: 20;width: 400px;height: 250px;" class="ramkilog">
						    <form action='reg.php' method='post'>
							    <tr>
								    <td>Введте логин</td>
									<td><input type='text' name='login'></td>
								</tr>
								<tr>
								    <td>Введите пароль</td>
									<td><input type='password' name='pass1'></td>
								</tr>
								<tr>
								    <td></td>
									<td><input type='submit' name='auto' value='Войти' style="font-family: LetoTextSansDefect;width: 100px;height: 30px;font-size: 20px;"></td>
								</tr>
							</form>
						 </table>
					<?
				    }
					?>
				</center>
			</section>
		    </main>
	 </body>
    </div>
</html>