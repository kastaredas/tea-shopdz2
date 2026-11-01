<?php $pageTitle = 'Корзина — Меридиан Чая'; ?>
<?php include 'header.php'; ?>

<div class="content-wrapper">

<input type="radio" name="cart-view" id="s-cart" class="hide-input" checked>
<input type="radio" name="cart-view" id="s-checkout" class="hide-input">
<input type="radio" name="cart-view" id="s-success" class="hide-input">
<input type="checkbox" id="remove-item" class="hide-input">

<div id="add-sencha" class="hide-input"></div>
<div id="add-longjing" class="hide-input"></div>
<div id="add-matcha" class="hide-input"></div>
<div id="add-oolong" class="hide-input"></div>

<div class="success-banner">✅ Чай добавлен в корзину! <a href="cart.php" style="color:var(--tea-green);font-weight:600;">Открыть →</a></div>

<div class="main-content">

<div class="view-cart view">
<h1 class="page-title">Ваша корзина</h1>
<div class="cart-layout">
<div class="cart-items">
<div class="cart-item active">
<div class="cart-img"><img src="comp/img/tea-sencha.jpg" alt="Сенча"></div>
<div class="cart-info">
<span class="cart-name">Сенча «Сакурадзима»</span>
<span class="cart-meta">Япония · 50 г</span>
<div class="cart-bottom">
<div class="cart-qty"><label>Кол-во:</label><input type="number" value="1" min="1"></div>
<span class="cart-price">1 800 ₽</span>
<label for="remove-item" class="remove-label">✕ Удалить</label>
</div>
</div>
</div>
</div>
<aside class="summary">
<h3>Итого</h3>
<div class="s-row"><span>Товары</span><span>1 800 ₽</span></div>
<div class="promo-section">
<label class="promo-label">Промокод</label>
<div class="promo-input-group">
<input type="text" placeholder="Введите код для скидки">
<button class="btn-apply">Применить</button>
</div>
</div>
<div class="s-row"><span>Скидка</span><span>0 ₽</span></div>
<div class="s-row"><span>Доставка</span><span>Бесплатно</span></div>
<div class="s-total"><span>Итого</span><span>1 800 ₽</span></div>
<label for="s-checkout" class="btn" style="display:block;text-align:center;cursor:pointer;margin-top:1.5rem;">Оформить заказ →</label>
</aside>
</div>
</div>

<div class="view-checkout view">
<h1 class="page-title">Оформление</h1>
<div class="checkout-form">
<div class="form-group"><label>Имя и фамилия</label><input type="text" required></div>
<div class="form-group"><label>Телефон</label><input type="tel" required></div>
<div class="form-group"><label>Адрес доставки</label><input type="text" required></div>
<div class="form-group"><label>Способ оплаты</label>
<select>
<option>Картой онлайн</option>
<option>СБП</option>
<option>При получении</option>
</select>
</div>
<div class="buy-actions">
<label for="s-cart" class="btn btn-back" style="cursor:pointer;">← Назад</label>
<label for="s-success" class="btn" style="cursor:pointer;">Подтвердить 🍵</label>
</div>
</div>
</div>

<div class="view-success view">
<div class="success-box">
<div class="success-icon"></div>
<h2>Заказ оформлен!</h2>
<p class="order-num">Номер: #MC-2026-8841</p>
<p>Мы отправили чек на почту. Менеджер свяжется с вами в течение 15 минут.</p>
<div class="buy-actions">
<a href="tea.php" class="btn">Продолжить покупки</a>
<a href="index.php" class="btn btn-back">На главную</a>
</div>
</div>
</div>

</div>
</div>

<?php include 'footer.php'; ?>