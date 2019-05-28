<?php
mb_internal_encoding('utf-8');
include_once  'functions.php';
include_once   'header.php';
include   'config.php';


$errors=[];

switch(getenv('REQUEST_METHOD'))
{
	case 'GET':
		if(isset($_GET['success']))
		{
			include 'templates/answer.php';
			exist;
		}
		include 'templates/request.php' ;
		break;
	
	
	case 'POST' :
		if(!empty($_POST))
		{
			$name = trim(array_get($_POST,'name', ''));
			$lastname = trim(array_get($_POST,'lastname', ''));
			$age= trim(array_get($_POST,'age', ''));
			$city= trim(array_get($_POST,'city', ''));
			$phone= trim(array_get($_POST,'phone', ''));
			$email= trim(array_get($_POST,'email', ''));
			$tema= array_get($_POST,'tema', '');
		
			
			$filename =date('Ymd_His') . '-' . rand(100,999) . '.json';
			//проверки имени
			if(!$name)
			{
				$errors['name'] = 'Не указано имя!';
			}
			
			//проверки фамилии
			if(!$lastname)
			{
				$errors['lastname'] = 'Не указана фамилия!' ;
			}
			
			
			//проверки телефона
			if(!$phone)
			{
				$errors['phone'] = 'Не указан телефон!' ;
			}
			else if(strlen($phone)<11)
			{
				$errors['phone'] = 'Неверно указан телефон!' ;
			}
			else if(!(ctype_digit($phone)))	//проверяет, являются ли все символы в строке phone цифровыми.
			{
				$errors['phone'] = 'Неверно указан телефон,вводите только цифры!' ;
			}
			
			/*if(!(substr($phone,0)=='8'))	//проверяет, чтобы телефон начинался на 8
			{
				$errors['phone'] = 'Неверно указан телефон !' ;
			}*/
			
			//проверки e-mail
			if(!$email)
			{
				$errors['email'] = 'Не указан e-mail!' ;
				
			}
			else if(!strpos($email, '@'))
			{
				$errors['email'] ='Неправильный e-mail! ';
			}
			
			if($errors)
			{
					include 'templates/request.php';
					echo '<div class="errors">'.'ФОРМА НЕ ОТПРАВЛЕНА. ИСРАВТЕ ОШИБКИ! </div>';
				
			}
			else
			{
				//массив заполненных данных
				
				$contents=json_encode([
					'name' =>$name,
					'lastname'=>$lastname,
					'age' =>$age,
					'city' => $city,
					'phone' => $phone,
					'email' => $email,
					'tema' => $tema,
					]);

				
				save_file($config['data_dir'] . $filename, $contents);
				file_put_contents('data/' . $filename, $contents);
				echo 'Ваша форма отправлена';
				exit;
				
			}
		}
}

if (!file_exists('data'))
{
	mkdir('data',0777,true);
}
$filename=date('Ymd_His') . '-' . rand(100,99) . '.json';
	
	
if(isset($_GET['succes']))
{
	echo 'Ваша форма отправлена';
	exit;
}

?>