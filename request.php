<?php


?>



<form action='/' method="POST" >
	<!--со звкздочкой обязательные поля-->
	<label> Имя*</label>
	<br>
	<input type="text" name ="name" value="<?= e(array_get($_POST,'name'))?>">
	<span><?=array_get($errors, 'name')?></span>
	<br>
	
	
	<label> Фамилия: *</label>
	<br>
	<input type="text" name ="lastname" value="<?= e(array_get($_POST,'lastname')) ?>">
	<span><?=array_get($errors, 'lastname')?></span>
	<br>
	
	<label> Возраст: </label>
	<br>
	<input type="text" name ="age" value="<?=e(array_get($_POST,'age'))?>">
	<br>
	
	<label> E-mail:* </label>
	<br>
	<input type="text" name ="email" value="<?=e(array_get($_POST,'email'))?>">
	<span><?=array_get($errors, 'email')?></span>
	<br>
	
	<label> Город </label>
	<br>
	<select name="city">
		<option value="irk">Иркутск</option>
		<option value="ang">Ангарск</option>
		<option value="she">Шелехов</option>
		<option value="bra">Братск</option>
		<option value="msk">Москва</option>
		<option value="eka">Екатиренбург</option>
	</select> 
	<br>
	
	<br>
	<label> Телефон: </label>
	<br>
	<input type="text" name ="phone" value="<?=e(array_get($_POST,'phone'))?>">
	<span><?=array_get($errors, 'phone')?></span>
	<br>
	<br>
	<label> Тематика: </label>
	<br>
	<input type="radio" name="tema1" value="Бизнес " checked="checked" /> Бизнес <br />
	<input type="radio" name="tema2" value="Технологии" /> Технологии<br />
	<input type="radio" name="tema3" value="Реклама" /> Реклама и Маркетинг<br />
	<br>
	
	<label> Предпочитаемый метод оплаты участия: </label>
	<br>
	<input type="radio" name="money1" value="WebMoney" checked="checked" /> WebMoney <br />
	<input type="radio" name="money2" value="Яндекс" /> Яндекс.Деньги<br />
	<input type="radio" name="money3" value="PayPal" /> PayPal<br />
	<input type="radio" name="money4" value="карта" /> Кредитная карта<br />
	<br>
	
	<label> Хотите получать рассылку о конференции? </label>
	<br>
	<input type="radio" name="sms1" value="Да" checked="checked" /> Да <br />
	<input type="radio" name="sms2" value="Нет" /> Нет<br />
	<br><br>

	
	
	
	<button type="submit">Отправить</button>
	<br>
</form>