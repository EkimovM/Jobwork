<? session_start(); 
if ($_POST['out']=='Выход') {$_SESSION['login']=''; $_SESSION['pass1']='';$_SESSION['status']='';}?>
<DOCTYPE HTML!>
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

<div class="side-button-1-wr">
    <label class="side-button-1" for="side-checkbox">
        <div class="side-b side-open"></div>
        <div class="side-b side-close"></div>
    </label>
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
							    echo "<br><br>Регистрация прошла успешно, <a href='index.php'>Авторизуйтесь</a><br><br>";
						   }
						   else
						   {
							   echo "<br><br>Пароли не совподают, попробуйте еще раз <a href='index.php'>Зарегистрироваться</a><br><br>";
						   }
					   }
					   else
					   {
					   ?>
</div>
<div onclick="show('none')" id="gray"></div>
<div id="window">
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
							    echo "<br><br>Регистрация прошла успешно, <a href='index.php'>Авторизуйтесь</a><br><br>";
						   }
						   else
						   {
							   echo "<br><br>Пароли не совподают, попробуйте еще раз <a href='index.php'>Зарегистрироваться</a><br><br>";
						   }
					   }
					   else
					   {
					   ?>
						 <table style="font-family: LetoTextSansDefect;font-size: 20;width: 350px;height: 250px;border-radius: 15px;" class="ramkilog">
						    <form action='index.php' method='post'>
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
							echo "<br><br>Данные не верны попробуйте еще раз <a href='index.php'>Авторизоваться</a><br><br>";
						}
					}
					else
					{
					?>
						 <table style="font-family: LetoTextSansDefect;font-size: 20;width: 350px;height: 250px;border-radius: 15px;" class="ramkilog">
						    <form action='index.php' method='post'>
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
</div>
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
							echo "<br><br>Данные не верны попробуйте еще раз <a href='index.php'>Авторизоваться</a><br><br>";
						}
					}
					else
					{
					?>
            <?
				    }
					?>

                <script src="/chatbot/fp2.js"></script>
                <script src="/chatbot/chatbot.js"></script>
            
 <script>
	function show(state)
	{
	document.getElementById('window').style.display = state;	
	document.getElementById('gray').style.display = state; 		
	}	
</script> 
         <div class="wrapper">
	<input type="radio" name="point" id="slide1" checked>
	<input type="radio" name="point" id="slide2">
	<input type="radio" name="point" id="slide3">
	<div class="slider">
		<div class="slides slide1"></div>
		<div class="slides slide2"></div>
		<div class="slides slide3"></div>
	</div>	
	<div class="controls">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
	</div>
</div>
            <div class="chatbot__btn">
  <div class="chatbot__tooltip d-none">Есть вопрос?</div>
</div>
            
		    <main>
			     <section class='section2'>
				    <?
				     $category=$_POST['category'];
				 
				     if ($category == 'Все товары')
				     {
				    	 $query="SELECT * FROM `tovar`";
				     }
				     else
				     {
					     $query="SELECT * FROM `tovar` WHERE `category` = '$category' ";
				     }
					 
					  $search_text=$_POST['search_text'];

                     if ($_POST['search'] == 'Поиск')
                     {
                          $query="SELECT * FROM `tovar` WHERE `name` LIKE '%$search_text%' OR `about1` LIKE '%$search_text%'
						  OR `about2` LIKE '%$search_text%' OR `about3` LIKE '%$search_text%' OR `about4` LIKE '%$search_text%'";
                     }
				 
				     $result=mysqli_query($conn,$query);
				 
				     while($row=mysqli_fetch_array($result))
				    {
			        ?>
				 <div class='tovar'>
				    <center>
					    <div class='img_tovar'>
						    <img src='img/<? echo $row[2]; ?>' alt='tovar' width=100% height=100%>
					    </div>
						<form action='korzina.php' method='post'>
						     <input type='hidden' name='id' value='<? echo $row[0]; ?>'>
						</form>
						<div class='name_tovar'>
<br><? echo $row[1]; ?>
						</div>
						<div class='about_tovar'>
							 <? echo $row[5]; ?>
							 <? echo $row[6]; ?>
							 <? echo $row[7]; ?>
						</div>
						<div class='price_tovar'>
						     <? echo $row[3]; ?>
						</div>
						<div class='buy'>
						     <form action='tovar.php' method='post'>
							    <input type='hidden' name='id' value='<? echo $row[0]; ?>'>
								
							 </form>
						</div>
					</center>
				 </div>
				 <?
				 }
				 ?>
		         </section>  
		    </main>
		 <footer>
        <section class="kon_f">
            <p>&emsp;&emsp;г. Якутск, пр. Ленина, 36</p>
            <p>&emsp;&emsp;тел. 8-(800)-555-35-35</p>
            <p>&emsp;&emsp;email: Jobwork@gmail.com</p>
            <p>&emsp;&emsp;&copy; 2022 Jobwork</p>
        </section>
    </footer>
            
            <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    @media (prefers-reduced-motion: no-preference) {
      :root {
        scroll-behavior: smooth;
      }
    }

    body {
      margin: 0;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    h1 {
      text-align: center;
      font-size: 20px;
    }
  </style>
            <script>
    // конфигурация чат-бота
    const configChatbot = {};
    // CSS-селектор кнопки, посредством которой будем вызывать окно диалога с чат-ботом
    configChatbot.btn = '.chatbot__btn';
    // ключ для хранения отпечатка браузера
    configChatbot.key = 'fingerprint';
    // реплики чат-бота
    configChatbot.replicas = '/chatbot/data.json';
    // корневой элемент
    configChatbot.root = SimpleChatbot.createTemplate();
    // URL chatbot.php
    configChatbot.url = '/chatbot/chatbot.php';
    // переменная для хранения экземпляра
    let chatbot = null;
    // добавление ключа для хранения отпечатка браузера в LocalStorage
    let fingerprint = localStorage.getItem(configChatbot.key);
    if (!fingerprint) {
      Fingerprint2.get(function (components) {
        fingerprint = Fingerprint2.x64hash128(components.map(function (pair) {
          return pair.value
        }).join(), 31)
        localStorage.setItem(configChatbot.key, fingerprint)
      });
    }
    // при клике по кнопке configChatbot.btn
    document.querySelector(configChatbot.btn).onclick = function (e) {
      this.classList.add('d-none');
      const $tooltip = this.querySelector('.chatbot__tooltip');
      if ($tooltip) {
        $tooltip.classList.add('d-none');
      }
      configChatbot.root.classList.toggle('chatbot_hidden');
      if (chatbot) {
        return;
      }

      // получение json-файла, содержащего сценарий диалога для чат-бота через AJAX
      const request = new XMLHttpRequest();
      request.open('GET', configChatbot.replicas, true);
      request.responseType = 'json';
      request.onload = function () {
        const status = request.status;
        if (status === 200) {
          const data = request.response;
          if (typeof data === 'string') {
            configChatbot.replicas = JSON.parse(data);
          } else {
            configChatbot.replicas = data;
          }
          // инициализация SimpleChatbot
          chatbot = new SimpleChatbot(configChatbot);
          chatbot.init();
        } else {
          console.log(status, request.response);
        }
      };
      request.send();
    };

    // подсказка для кнопки
    const $btn = document.querySelector(configChatbot.btn);
    $btn.addEventListener('mouseover', function (e) {
      const $tooltip = $btn.querySelector('.chatbot__tooltip');
      if (!$tooltip.classList.contains('chatbot__tooltip_show')) {
        $tooltip.classList.remove('d-none');
        setTimeout(function () {
          $tooltip.classList.add('chatbot__tooltip_show');
        }, 0);
      }
    });
    $btn.addEventListener('mouseout', function (e) {
      const $tooltip = $btn.querySelector('.chatbot__tooltip');
      if ($tooltip.classList.contains('chatbot__tooltip_show')) {
        $tooltip.classList.remove('chatbot__tooltip_show');
        setTimeout(function () {
          $tooltip.classList.add('d-none');
        }, 200);
      }
    });

    setTimeout(function () {
      const tooltip = document.querySelector('.chatbot__tooltip');
      tooltip.classList.add('chatbot__tooltip_show');
      setTimeout(function () {
        tooltip.classList.remove('chatbot__tooltip_show');
      }, 10000)
    }, 10000);
  </script>
	 </body>
    </div>
</html>