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


    <label class="side-button-1" for="side-checkbox">
        <div class="side-b side-open">Меню</div>

    </label>
    
</div>
            </div>

		    <main>
		         <section class='section1'>
				 <?
				 if ($_SESSION['login'] =='admin') 
					{
						
				 $result=mysqli_query($conn,$query);
				 
				 while($row=mysqli_fetch_array($result))
				 {
			     ?>
					 <div>
					     <form action='index.php' method='post'>
						     <input type='submit' name='category' value='<? echo $row[1]; ?>'>
						 </form>
				     </div>
				 <?
				 }
				 ?>
		         </section>
			     <section class='section2'>
				    <form action='add.php' method='post'>
				       <input type='submit' name='add_pol' value='Добавить пользователя'>
					   <input type='submit' name='add_cat' value='Добавить категорию'>
					   <input type='submit' name='add_tov' value='Добавить вакансию'>
					</form>
					<table border="1" style="font-family: LetoTextSansDefect;font-size: 20px;">
					    <tr>
						     <td>Аватар</td>
						     <td>Логин</td>
							 <td>Почта</td>
							 <td>Пароль</td>
							 <td>Адрес</td>
							 <td>Телефон</td>
							 <td>Статус</td>
							 <td></td>
							 <td></td>
						</tr>
						<?
						$query="SELECT * FROM `reg`";
				        $result=mysqli_query($conn,$query);
				 
				        while($row=mysqli_fetch_array($result))
				        {
					    ?>
						<tr>
						     <td><img src='img/avatar/<? echo $row[4]; ?>' width=15% height=15%></td>
						     <td><? echo $row[1];?></td>
							 <td><? echo $row[2];?></td>
							 <td><? echo $row[3];?></td>
							 <td><? echo $row[5];?></td>
							 <td><? echo $row[6];?></td>
							 <td><? echo $row[7];?></td>
							 <td>
							    <form action='add.php' method='post'>
								     <input type='hidden' name='id' value='<? echo $row[0];?>'>
									 <input type='submit' name='red_pol' value='Редактировать'>
								</form>
							 </td>
							 <td>
							    <form action='add.php' method='post'>
								     <input type='hidden' name='id' value='<? echo $row[0];?>'>
									 <input type='submit' name='del_pol' value='Удалить'>
								</form>
							 </td>
						</tr>
						<?
						}
						?>
					</table>
					
					<table border="1"; style="font-family: LetoTextSansDefect;font-size: 20px;">
					    <tr>
						     <td>Наименование</td>
							 <td></td>
							 <td></td>
						</tr>
						<?
						$query="SELECT * FROM `category`";
				        $result=mysqli_query($conn,$query);
				 
				        while($row=mysqli_fetch_array($result))
				        {
					    ?>
						<tr>
						    <td><? echo $row[1];?></td>
							 <td>
							    <form action='add.php' method='post'>
								     <input type='hidden' name='id' value='<? echo $row[0];?>'>
									 <input type='submit' name='red_cat' value='Редактировать'>
								</form>
							 </td>
							 <td>
							    <form action='add.php' method='post'>
								     <input type='hidden' name='id' value='<? echo $row[0];?>'>
									 <input type='submit' name='del_cat' value='Удалить'>
								</form>
							 </td>
						</tr>
						<?
						}
						?>
					</table>
						<?
						$query="SELECT * FROM `tovar`";
				        $result=mysqli_query($conn,$query);
				 
				        while($row=mysqli_fetch_array($result))
				        {
					    ?>
						<tr>
						     <td><img src='img/<? echo $row[2];?>' width=150px height=150px>
						     <td><? echo $row[1];?></td>
							 <td><? echo $row[3];?></td>
							 <td><? echo $row[4];?></td>
							 <td><? echo $row[5];?></td>
							 <td><? echo $row[6];?></td>
							 <td><? echo $row[7];?></td>
							 <td><? echo $row[8];?></td>
							 <td>
							    <form action='add.php' method='post'>
								     <input type='hidden' name='id' value='<? echo $row[0];?>'>
									 <input type='submit' name='red_tov' value='Редактировать'>
								</form>
							 </td>
							 <td>
							    <form action='add.php' method='post'>
								     <input type='hidden' name='id' value='<? echo $row[0];?>'>
									 <input type='submit' name='del_tov' value='Удалить'>
								</form>
							 </td>
						</tr>
						<?
						}
						?>
					</table>
					<?
						}
						else
						   {
							   echo "<br><br>У вас нет доступа.<br><br>";
						   }
						?>
		         </section>
		    </main>
		 
		 </header>
	 </body>
</html>