<section class="sign-page">
	<form class="flex-container" action="../php-validate/validate/auth.php" method="post">
		<div>
			<h2><label>Вход</label></h2></div>
		<div class="form-item">
			<input name="login" id="login" class="text-field" type="text" placeholder="Логин">
		</div>
		<div class="form-item">
			<input name="pass" id="pass" class="text-field" type="password" placeholder="Пароль">
		</div>
		<?php if ($_GET['error'] == 1)
{
    echo '<div class="red">Такой пользователь не найден</div>';
} ?>
			<div class="form-item butt-container">
				<input class="step-butt butt" type="submit" value="Войти">
			</div>
	</form>
</section>