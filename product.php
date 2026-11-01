<?php $pageTitle = 'Карточка товара — Меридиан Чая'; ?>
<?php include 'header.php'; ?>

<div id="sencha" class="hide-input"></div>
<div id="longjing" class="hide-input"></div>
<div id="matcha" class="hide-input"></div>
<div id="oolong" class="hide-input"></div>

<div class="product-wrapper">

<div class="default-msg">
<h2>Выберите чай из каталога</h2>
<p>Нажмите на карточку товара, чтобы узнать детали, параметры заваривания и оформить покупку.</p>
<a href="tea.php" class="btn btn-back" style="display:inline-block;width:auto;margin-top:1.5rem;">← Вернуться в каталог</a>
</div>

<div class="view-product view-sencha">
<a href="tea.php" class="btn btn-back" style="display:inline-block;width:auto;margin-bottom:1.5rem;">← Вернуться в каталог</a>
<div class="product-layout">
<div class="product-hero"><img src="comp/img/tea-sencha.jpg" alt="Сенча"></div>
<div class="product-info">
<p class="product-tag">Япония · Сенча</p>
<h1>Сенча «Сакурадзима»</h1>
<p class="product-price">1 800 ₽ / 50 г</p>
<p class="product-desc">Классический японский зелёный чай с ярким травяным ароматом, нотами шпината и сладким послевкусием.</p>
<ul class="specs">
<li><span>Тип листа</span><span>Цельный, средний</span></li>
<li><span>Урожай</span><span>Итибанча</span></li>
<li><span>Обработка</span><span>Пропаривание</span></li>
<li><span>Вкус</span><span>Умами, травяной</span></li>
</ul>
<div class="buy-actions">
<a href="cart.php#add-sencha" class="btn">Добавить в корзину</a>
<a href="tea.php" class="btn btn-back">Назад</a>
</div>
<div class="brewing">
<h3>Как заваривать</h3>
<div class="brew-steps">
<div class="brew-step"><strong>70°C</strong><span>Температура</span></div>
<div class="brew-step"><strong>3 г</strong><span>На 150 мл</span></div>
<div class="brew-step"><strong>45 сек</strong><span>Первый пролив</span></div>
</div>
</div>
</div>
</div>
</div>

<div class="view-product view-longjing">
<a href="tea.php" class="btn btn-back" style="display:inline-block;width:auto;margin-bottom:1.5rem;">← Вернуться в каталог</a>
<div class="product-layout">
<div class="product-hero"><img src="comp/img/tea-longjing.jpg" alt="Лунцзин"></div>
<div class="product-info">
<p class="product-tag">Китай · Лунцзин</p>
<h1>Лунцзин «Колодец Дракона»</h1>
<p class="product-price">3 400 ₽ / 30 г</p>
<p class="product-desc">Элитный зелёный чай из Ханчжоу. Плоский лист, орехово-карамельный профиль.</p>
<ul class="specs">
<li><span>Тип листа</span><span>Плоский</span></li>
<li><span>Урожай</span><span>Цинмин</span></li>
<li><span>Обработка</span><span>Обжарка в воке</span></li>
<li><span>Вкус</span><span>Ореховый, глубокий</span></li>
</ul>
<div class="buy-actions">
<a href="cart.php#add-longjing" class="btn">Добавить в корзину</a>
<a href="tea.php" class="btn btn-back">Назад</a>
</div>
<div class="brewing">
<h3>Как заваривать</h3>
<div class="brew-steps">
<div class="brew-step"><strong>80°C</strong><span>Температура</span></div>
<div class="brew-step"><strong>4 г</strong><span>На 120 мл</span></div>
<div class="brew-step"><strong>30 сек</strong><span>Проливы (до 5)</span></div>
</div>
</div>
</div>
</div>
</div>

<div class="view-product view-matcha">
<a href="tea.php" class="btn btn-back" style="display:inline-block;width:auto;margin-bottom:1.5rem;">← Вернуться в каталог</a>
<div class="product-layout">
<div class="product-hero"><img src="comp/img/tea-matcha.jpg" alt="Матча"></div>
<div class="product-info">
<p class="product-tag">Япония · Матча</p>
<h1>Матча «Церемониальная Удзи»</h1>
<p class="product-price">2 900 ₽ / 30 г</p>
<p class="product-desc">Каменный помол тенча. Яркий изумрудный цвет, насыщенный умами.</p>
<ul class="specs">
<li><span>Тип листа</span><span>Порошок</span></li>
<li><span>Урожай</span><span>Тэнмацу</span></li>
<li><span>Обработка</span><span>Каменный помол</span></li>
<li><span>Вкус</span><span>Умами, кремовый</span></li>
</ul>
<div class="buy-actions">
<a href="cart.php#add-matcha" class="btn">Добавить в корзину</a>
<a href="tea.php" class="btn btn-back">Назад</a>
</div>
<div class="brewing">
<h3>Как заваривать</h3>
<div class="brew-steps">
<div class="brew-step"><strong>80°C</strong><span>Температура</span></div>
<div class="brew-step"><strong>2 г</strong><span>На 70 мл</span></div>
<div class="brew-step"><strong>Взбивать</strong><span>До пены (тясэн)</span></div>
</div>
</div>
</div>
</div>
</div>

</div>

<?php include 'footer.php'; ?>