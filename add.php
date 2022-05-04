<? session_start();
if ($_POST['out']=='Выход') {$_SESSION['login']=''; $_SESSION['pass1']='';$_SESSION['status']='1';}
if ($_SESSION['status'] == 0) {
	echo "<script>alert('Вы не администратор');
	location.href='https://cl25931.tmweb.ru/index.php';
	</script>";
}
?>
<html lang="ru">
    <head>
        <title>Jobwork</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type='text/css' href="style.css">
        <link media="screen" href="demo_002.css" type="text/css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="buttons.css">
		<link rel="stylesheet" href="demo.css">
		<link rel="stylesheet" href="font-awesome.css">
		<link rel="stylesheet" href="sky-mega-menu.css">
        <link rel="stylesheet" href="/chatbot/chatbot.css">
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
			   <img src='img/logo.svg' alt='logo' width='170%'>
	   </div>
	   <section class="bg-cyan">
		<div class="body">		
			<!-- mega menu -->
			<ul class="sky-mega-menu sky-mega-menu-anim-scale sky-mega-menu-response-to-icons">
				<!-- home -->
				<li>
					<a href="index.php"><i class="fa fa-single fa-home"></i></a>
				</li>
				<!--/ home -->
				
				<!-- about -->
				<li aria-haspopup="true">
					<a href="onas.php" style="font-family: LetoTextSansDefect;font-size:20px"><i class="fa fa-star"></i>О нас</a>
					<div class="grid-container3">
						<ul>
							<li aria-haspopup="true">
								<a href="#" style="font-family: LetoTextSansDefect"><i class="fa fa-group"></i>Наша команда</a>
								<div class="grid-container3">
									<ul>
										<li aria-haspopup="true">
											<a href="#"><i class="fa fa-male"></i>Екимов Максим</a>
											<div class="grid-container3">
												<ul>
													<li><a href="#"><i class="fa fa-leaf"></i>Разработчик</a></li>
													<li><a href="#"><i class="fa fa-tasks"></i>Ученик ЯКСЭ</a></li>
													<li><a href="#"><i class="fa fa-comments"></i>Участник МПИТ 2021</a></li>
												</ul>
											</div>
										</li>
										<li aria-haspopup="true">
											<a href="#"><i class="fa fa-male"></i>Наумченков Руслан</a>
											<div class="grid-container3">
												<ul>
													<li><a href="#"><i class="fa fa-leaf"></i>Дизайнер</a></li>
													<li><a href="#"><i class="fa fa-tasks"></i>Ученик ЯКСЭ</a></li>
													<li><a href="#"><i class="fa fa-comments"></i>Участник МПИТ 2021</a></li>
												</ul>
											</div>
										</li>
										<li aria-haspopup="true">
											<a href="#"><i class="fa fa-male"></i>Ларчук Владислав</a>
											<div class="grid-container3">
												<ul>
													<li><a href="#"><i class="fa fa-leaf"></i>Менеджер</a></li>
													<li><a href="#"><i class="fa fa-tasks"></i>Ученик ЯКСЭ</a></li>
													<li><a href="#"><i class="fa fa-comments"></i>Участник МПИТ 2021</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="kontakti.php" style="font-family: LetoTextSansDefect"><i class="fa fa-certificate"></i>Контакты </a></li>
						</ul>
					</div>
				</li>
				<!--/ about -->
				
				<!-- news -->
				<li aria-haspopup="true">
					<a href="#" style="font-family: LetoTextSansDefect;font-size:20px"><i class="fa fa-bullhorn"></i>Вакансии</a>
					<div class="grid-container3">
						<ul>
                            <section>
                            <?
                            $query="SELECT * FROM category";
                            $result=mysqli_query($conn, $query);

                            while($row=mysqli_fetch_array($result))
                            {
                            ?>
                                    <li>
                                    <form action="index.php" method='post'>
                                        <input class="button_1651595937435" type='submit' name='category' value='<? echo $row[1]; ?>'>
                                    </form>
                                </li>
                            <?
                            }
                            ?>
                            </section>
						</ul>
					</div>
				</li>
				<!--/ news -->
				
				<!-- portfolio -->
				<li aria-haspopup="true">
					<a href="#" style="font-family: LetoTextSansDefect;font-size:20px"><i class="fa fa-briefcase"></i>Кабинет</a>
					<div class="grid-container3">
						<ul>
							<li><a href="LK.php" style="font-family: LetoTextSansDefect"><i class="fa fa-lemon-o"></i>Лич.кабинет</a></li>
							<li><a href="admin.php" style="font-family: LetoTextSansDefect"><i class="fa fa-globe"></i>Админ панель</a></li>
							<li><a href="add.php" style="font-family: LetoTextSansDefect"><i class="fa fa-th-large"></i>Адд панель</a></li>
						</ul>
					</div>
				</li>
				<!--/ portfolio -->

                
				<!-- register form -->
                <center><button onclick="show('block')" class="regButton" style="border: 3px solid;padding: 5;margin-top: 10px;border-radius: 25px;font-family: LetoTextSansDefect;font-size: 15px;">Регистрация и вход</button>
                <li aria-haspopup="true">
					<a href="#" style="font-family: LetoTextSansDefect;font-size:20px"><i></i>Выйти из профиля</a>
					<div>
							<form action='index.php' method='post'>
					<input type='submit' name='out' value='Выход' class="button" style="font-family: LetoTextSansDefect;font-size:20px;margin-left: -15px">
				</form>
					</div>
				</li>
				
				
				<!-- login form -->
				
				<!--/ login form -->
			</ul>
			<!--/ mega menu -->
			<form method="post" action="index.php" style="float: right;margin-top: 15px;">
                        <input type="text" name="search_text" style="height: 30;width: 320;border-radius: 15px;">
                        <input type="submit" name="search" value="Поиск" style="font-size: 17;border-radius: 2px;font-family: LetoTextSansDefect;"> 
                    </form>
		</div>
		
	
</section>   
	   <div class='vhod222'>
	        <div class='' align='right'>
						</div>
				<?
				if ($_SESSION['login'] !='')
				{
				?>
				<?
				}
				?>
	   </div>

	</header>
	    <div>
                <input type="checkbox" id="side-checkbox" />
<div class="side-panel">  
</div>
<div class="side-button-1-wr">
    <label class="side-button-1" for="side-checkbox">
        <div class="side-b side-open">Меню</div>
        <div class="side-b side-close">Закрыть</div>
    </label>
</div>
            </div>

		<main>
		 
			     <section class='section2'>
				 
				 <form action='add.php' method='post'>
					
				</form>
				
				<?
					if ($_SESSION['login'] =='admin') 
					{
					
					if ($_POST['add_pol2']=='Добавить пользователя')
					{
						$login=$_POST['login'];
						$mail=$_POST['mail'];
						$pass1=$_POST['pass1'];
						$pass2=$_POST['pass2'];
						$img=$_POST['img'];
						$adres=$_POST['adres'];
						$tel=$_POST['tel'];
						$status=$_POST['status'];
						
						if ($pass1 == $pass2)
						{
							$query="INSERT INTO `reg` (`login`, `mail`, `pass`, `img`, `adres`, `tel`, `status`)
										        VALUES ('$login','$mail','$pass1','$img','$adres','$tel','$status')";
												
							$result=mysqli_query($conn,$query);
							echo "<br><br>Пользователь добавлен, <a href='admin.php'>Вернуться назад</a><br><br>";
						}
						else
						{
							echo "<br><br>Пароли не совпадают, попробуйте еще раз <a href='admin.php'>Вернуться назад</a><br><br>";
						}
					}
					else
					{
						if ($_POST['add_pol']=='Добавить пользователя')
						{
				?>
				<table border=2 style="font-family: LetoTextSansDefect;font-size: 20px;">
					<h2>Добавить пользователя</h2>
					<form action='add.php' method='post'>
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
							<td>Выбрать аватар</td>
							<td><input type='file' name='img'></td>
						</tr>
						<tr>
							<td>Введите адрес доставки</td>
							<td><input type='text' name='adres'></td>
						</tr>
						<tr>
							<td>Введите телефон</td>
							<td><input type='text' name='tel'></td>
						</tr>
						<tr>
							 <td>Статус пользователя</td>
                                <td>
                                <select name="status">
                                  <option value="0">Пользователь</option>
                                  <option value="1">Администратор</option>
                                </select>
                                </td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='add_pol2' value='Добавить пользователя'></td>
						</tr>
					</form>
				</table>
				<?
						}
					}
	
					//add_category
	
					if ($_POST['add_cat2']=='Добавить категорию')
					{
						$category=$_POST['cat'];
						
						$query="INSERT INTO `category`(`category`) VALUES ('$category')";
						$result=mysqli_query($conn,$query);
						echo "<br><br>Категория добавлена, <a href='admin.php'>Вернуться назад</a><br><br>";
					}
					else
					{
						if ($_POST['add_cat']=='Добавить категорию')
						{
				?>
				<table border=2 style="font-family: LetoTextSansDefect;font-size: 20px;">
					<h2>Добавить категорию</h2>
					<form action='add.php' method='post'>
						<tr>
							<td>Наименование категории</td>
							<td><input type='text' name='cat'></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='add_cat2' value='Добавить категорию'></td>
						</tr>
					</form>
				</table>
				<?
						}
					}
					
					//add_tov
					
					if ($_POST['add_tov2']=='Добавить вакансию')
					{
						$id=$_POST['id'];
						$name=$_POST['name'];
						$img=$_POST['img'];
						$price=$_POST['price'];
						$category=$_POST['category'];
						$about1=$_POST['about1'];
						$about2=$_POST['about2'];
						$about3=$_POST['about3'];
						$about4=$_POST['about4'];
		
						$query="INSERT INTO `tovar` (`id`, `name`, `img`, `price`, `category`, `about1`, `about2`, `about3`, `about4`)
										        VALUES ('$id', '$name', '$img', '$price', '$category', '$about1', '$about2', '$about3', '$about4')";
							$result=mysqli_query($conn,$query);
						echo "<br><br>Товар добавлен, <a href='admin.php'>Вернуться назад</a><br><br>";
					}
					else
					{
						if ($_POST['add_tov']=='Добавить вакансию')
						{
				?>
				<table border=2 style="font-family: LetoTextSansDefect;font-size: 20px;">
					<h2>Добавить вакансию</h2>
					<form action='add.php' method='post'>
						<tr>
							<td>Номер</td>
							<td><input type='text' name='id'></td>
						</tr>
						<tr>
							<td>Название</td>
							<td><input type='text' name='name'></td>
						</tr>
						<tr>
							<td>Фото</td>
							<td><input type='file' name='img'></td>
						</tr>
						<tr>
							<td>Категория вакансий</td>
							<td>
							    <select name='category'>
								     <?
									 $query1="SELECT * FROM `category` WHERE `id`<>1";
									 $result1=mysqli_query($conn,$query1);
									 while ($row2=mysqli_fetch_array($result1))
									 {
									 ?>
									 <option value='<? echo $row2[1]; ?>'><? echo $row2[1]; ?></option>
									 <?
									 }
									 ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Описание вакансии</td>
							<td><input type='text' name='about1'></td>
						</tr>
						<tr>
							<td>Описание вакансии</td>
							<td><input type='text' name='about2'></td>
						</tr>
						<tr>
							<td>Описание вакансии</td>
							<td><input type='text' name='about3'></td>
						</tr>
						<tr>
							<td>Описание вакансии</td>
							<td><input type='text' name='about4'></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='add_tov2' value='Добавить товар'></td>
						</tr>
					</form>
				</table>
				<?
						}
					}
					
					//red_user
					
						if ($_POST['red_pol2']=='Сохранить изменения')
						{
							$id=$_POST['id'];
							$login=$_POST['login'];
							$mail=$_POST['mail'];
							$pass1=$_POST['pass1'];
							$img=$_POST['img'];
							$adres=$_POST['adres'];
							$tel=$_POST['tel'];
							$status=$_POST['status'];
						
								$query="UPDATE `reg` SET `login`='$login',`mail`='$mail',`pass`='$pass1',`img`='$img',
															`adres`='$adres',`tel`='$tel',`status`='$status' WHERE `id`='$id' ";
								$result=mysqli_query($conn,$query);
								echo "<br><br>Изменения сохранены, <a href='admin.php'>Вернуться назад</a><br><br>";
						}
						else
						{
							if ($_POST['red_pol']=='Редактировать') 
							{
								$id=$_POST['id'];
								$query="SELECT * FROM `reg` WHERE `id`='$id'";
								$result=mysqli_query($conn,$query);

								while($row=mysqli_fetch_array($result))
								{		
				?>
				<table border=2 style="font-family: LetoTextSansDefect;font-size: 20px;">
					<h2>Редактировать пользователя</h2>
					<form action='add.php' method='post'>
						<tr>
							<td>Введите логин</td>
							<td><input type='text' name='login' value='<? echo $row[1]; ?>'></td>
						</tr>
						<tr>
							<td>Введите почту</td>
							<td><input type='text' name='mail' value='<? echo $row[2]; ?>'></td>
						</tr>
						<tr>
							<td>Введите пароль</td>
							<td><input type='password' name='pass1' value='<? echo $row[3]; ?>'></td>
						</tr>
						<tr>
							<td>Выбрать аватар</td>
							<td><input type='file' name='img'></td>
						</tr>
						<tr>
							<td>Введите адрес доставки</td>
							<td><input type='text' name='adres' value='<? echo $row[5]; ?>'></td>
						</tr>
						<tr>
							<td>Введите телефон</td>
							<td><input type='text' name='tel' value='<? echo $row[6]; ?>'></td>
						</tr>
						<tr>
							 <td>Статус пользователя</td>
                                <td>
                                <select name="status">
                                  <option value="0">Пользователь</option>
                                  <option value="1">Администратор</option>
                                </select>
                                </td>
						</tr>
						<tr>
							<td><input type='hidden' name='id' value='<? echo $row[0];?>'></td>
							<td><input type='submit' name='red_pol2' value='Сохранить изменения'></td>
						</tr>
					</form>
				</table>
				<?
								}
							}
						}
						
						//red_cat
					
						if ($_POST['red_cat2']=='Сохранить изменения')
						{
							$id=$_POST['id'];
							$category=$_POST['category'];
							
						
								$query="UPDATE `category` SET `category`='$category' WHERE `id`='$id' ";
								$result=mysqli_query($conn,$query);
								echo "<br><br>Изменения сохранены, <a href='admin.php'>Вернуться назад</a><br><br>";
							
						}
						else
						{
							if ($_POST['red_cat']=='Редактировать') 
							{
								$id=$_POST['id'];
								$query="SELECT * FROM `category` WHERE `id`='$id' ";
								$result=mysqli_query($conn,$query);

								while($row=mysqli_fetch_array($result))
								{		
				?>
				<table border=2 style="font-family: LetoTextSansDefect;font-size: 20px;">
					<h2>Редактировать категории</h2>
					<form action='add.php' method='post'>
						<tr>
							<td>Введите наименование</td>
							<td><input type='text' name='category' value='<? echo $row[1]; ?>'></td>
						</tr>
						<tr>
							<td><input type='hidden' name='id' value='<? echo $row[0];?>'></td>
							<td><input type='submit' name='red_cat2' value='Сохранить изменения'></td>
						</tr>
					</form>
				</table>
				<?
								}
							}
						}
					//red_tov
						
					if ($_POST['red_tov2']=='Сохранить изменения')
					{
						$id=$_POST['id'];
						$name=$_POST['name'];
						$img=$_POST['img'];
						$price=$_POST['price'];
						$category=$_POST['category'];
						$about1=$_POST['about1'];
						$about2=$_POST['about2'];
						$about3=$_POST['about3'];
						$about4=$_POST['about4'];
		
						$query="UPDATE `tovar` SET `name`='$name', `img`='$img', `price`='$price', `category`='$category',
												`about1`='$about1', `about2`='$about2', `about3`='$about3', `about4`='$about4' WHERE `id`='$id' ";
							$result=mysqli_query($conn,$query);
						echo "<br><br>Изменения сохранены, <a href='admin.php'>Вернуться назад</a><br><br>";
					}
					else
					{
						if ($_POST['red_tov']=='Редактировать') 
							{
								$id=$_POST['id'];
								$query="SELECT * FROM `tovar` WHERE `id`='$id'";
								$result=mysqli_query($conn,$query);

								while($row=mysqli_fetch_array($result))
								{		
				?>
				<table border=2 style="font-family: LetoTextSansDefect;font-size: 20px;">
					<h2>Редактировать товар</h2>
					<form action='add.php' method='post'>
						<tr>
							<td>Номер товара</td>
							<td><input type='text' name='id' value='<? echo $row[0]; ?>'></td>
						</tr>
						<tr>
							<td>Название товара</td>
							<td><input type='text' name='name' value='<? echo $row[1]; ?>'></td>
						</tr>
						<tr>
							<td>Фото товара</td>
							<td><input type='file' name='img'></td>
						</tr>
						<tr>
							<td>Цена товара</td>
							<td><input type='text' name='price' value='<? echo $row[3]; ?>'></td>
						</tr>
						<tr>
							<td>Категория товара</td>
							<td>
							    <select name='category'>
								     <?
									 $query1="SELECT * FROM `category` WHERE `id`<>1";
									 $result1=mysqli_query($conn,$query1);
									 while ($row2=mysqli_fetch_array($result1))
									 {
									 ?>
									 <option value='<? echo $row2[1]; ?>'><? echo $row2[1]; ?></option>
									 <?
									 }
									 ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Описание товара</td>
							<td><input type='text' name='about1' value='<? echo $row[5]; ?>'></td>
						</tr>
						<tr>
							<td>Описание товара</td>
							<td><input type='text' name='about2' value='<? echo $row[6]; ?>'></td>
						</tr>
						<tr>
							<td>Описание товара</td>
							<td><input type='text' name='about3' value='<? echo $row[7]; ?>'></td>
						</tr>
						<tr>
							<td>Описание товара</td>
							<td><input type='text' name='about4' value='<? echo $row[8]; ?>'></td>
						</tr>
						<tr>
							<td><input type='hidden' name='id' value='<? echo $row[0];?>'></td>
							<td><input type='submit' name='red_tov2' value='Сохранить изменения'></td>
						</tr>
					</form>
				</table>		
				<?
							}
						}
					}
						
						if ($_POST['del_pol']=='Удалить')
							{
								$id=$_POST['id'];
								$query="DELETE FROM `reg` WHERE `id`='$id'";
								$result=mysqli_query($conn, $query);
								echo "<br><br>Пользователь удален, <a href='admin.php'>Вернуться назад</a><br><br>";
							}
							
						
						if ($_POST['del_cat']=='Удалить')
							{
								$id=$_POST['id'];
								$query="DELETE FROM `category` WHERE `id`='$id'";
								$result=mysqli_query($conn, $query);
								echo "<br><br>Категория удалена, <a href='admin.php'>Вернуться назад</a><br><br>";
							}
							
						
						if ($_POST['del_tov']=='Удалить')
							{
								$id=$_POST['id'];
								$query="DELETE FROM `tovar` WHERE `id`='$id'";
								$result=mysqli_query($conn, $query);
								echo "<br><br>Товар удален, <a href='admin.php'>Вернуться назад</a><br><br>";
							}
				?>
				   <?
					}
					else
						{
							echo "<br><br>У вас нет доступа.<br><br>";
						}
					?>
						
		         </section>
		    </main>
	 </body>
    </div>
</html>