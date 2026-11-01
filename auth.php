<?php $pageTitle = 'Вход — Меридиан Чая'; ?>
<?php include 'header.php'; ?>

<input type="radio" name="auth" id="auth-login" class="hide-input" checked>
<input type="radio" name="auth" id="auth-reg" class="hide-input">
<input type="radio" name="auth" id="auth-prof" class="hide-input">

<div class="auth-wrapper">
<div class="main-content">

<div class="auth-card">
<h2 class="auth-title">Добро пожаловать</h2>
<div class="auth-tabs">
<label for="auth-login" class="tab-login">Вход</label>
<label for="auth-reg" class="tab-reg">Регистрация</label>
</div>
<form class="auth-form form-login" onsubmit="return false;">
<div class="form-group"><label>Email</label><input type="email" required></div>
<div class="form-group"><label>Пароль</label><input type="password" required></div>
<label for="auth-prof" class="form-btn" style="cursor:pointer;">Войти</label>
<p class="form-link">Забыли пароль? <a href="#">Восстановить</a></p>
</form>
<form class="auth-form form-reg" onsubmit="return false;">
<div class="form-group"><label>Имя</label><input type="text" required></div>
<div class="form-group"><label>Email</label><input type="email" required></div>
<div class="form-group"><label>Пароль</label><input type="password" required></div>
<label for="auth-prof" class="form-btn" style="cursor:pointer;">Создать аккаунт</label>
<p class="form-link">Регистрируясь, вы соглашаетесь с <a href="#">условиями</a></p>
</form>
</div>

<div class="profile-view">
<div class="profile-avatar">👤</div>
<h3 class="profile-name">Иван Чайный</h3>
<p>ivan.chai@mail.ru</p>
<div class="profile-stats">
<div><span>📦</span><strong>3</strong><small>Заказов</small></div>
<div><span>❤️</span><strong>5</strong><small>Избранное</small></div>
<div><span>💎</span><strong>450 ₽</strong><small>Бонусы</small></div>
</div>
<label for="auth-login" class="btn-logout">Выйти из аккаунта</label>
</div>

</div>
</div>

<?php include 'footer.php'; ?>