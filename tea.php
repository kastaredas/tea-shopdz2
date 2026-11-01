<?php $pageTitle = 'Каталог чая — Меридиан Чая'; ?>
<?php include 'header.php'; ?>

<input type="radio" name="filter" id="f-all" class="hide-input" checked>
<input type="radio" name="filter" id="f-jp" class="hide-input">
<input type="radio" name="filter" id="f-cn" class="hide-input">
<input type="radio" name="filter" id="f-wd" class="hide-input">

<section class="page-hero">
<h1>Коллекция</h1>
<p>Чай по регионам</p>
<div class="filter-controls">
<label for="f-all" class="filter-label lbl-all">Все</label>
<label for="f-jp" class="filter-label lbl-jp">Япония</label>
<label for="f-cn" class="filter-label lbl-cn">Китай</label>
<label for="f-wd" class="filter-label lbl-wd">Мир</label>
</div>
</section>

<div class="products-grid">

<a href="product.php#sencha" class="product jp">
<div class="product-card">
<div class="product-img"><img src="comp/img/sencha.png" alt="Сенча"></div>
<div class="product-info">
<p class="product-tag">Япония · Сенча</p>
<h3 class="product-name">Сенча «Сакурадзима»</h3>
<p class="product-desc">Свежий травяной вкус с нотами шпината.</p>
<div class="product-footer">
<span class="product-price">1 800 ₽</span>
<span class="btn-buy">Купить</span>
</div>
</div>
</div>
</a>

<a href="product.php#longjing" class="product cn">
<div class="product-card">
<div class="product-img"><img src="comp/img/longjing.png" alt="Лунцзин"></div>
<div class="product-info">
<p class="product-tag">Китай · Лунцзин</p>
<h3 class="product-name">Лунцзин «Колодец Дракона»</h3>
<p class="product-desc">Орехово-карамельный профиль, весенний сбор.</p>
<div class="product-footer">
<span class="product-price">3 400 ₽</span>
<span class="btn-buy">Купить</span>
</div>
</div>
</div>
</a>

<a href="product.php#matcha" class="product jp">
<div class="product-card">
<div class="product-img"><img src="comp/img/matcha.png" alt="Матча"></div>
<div class="product-info">
<p class="product-tag">Япония · Матча</p>
<h3 class="product-name">Матча «Церемониальная»</h3>
<p class="product-desc">Каменный помол, яркий изумрудный цвет.</p>
<div class="product-footer">
<span class="product-price">2 900 ₽</span>
<span class="btn-buy">Купить</span>
</div>
</div>
</div>
</a>

<a href="product.php#oolong" class="product wd">
<div class="product-card">
<div class="product-img"><img src="comp/img/oolong.png" alt="Улун"></div>
<div class="product-info">
<p class="product-tag">Непал · Улун</p>
<h3 class="product-name">Канченджанга Oolong</h3>
<p class="product-desc">Высокогорный улун с цветочным ароматом.</p>
<div class="product-footer">
<span class="product-price">2 600 ₽</span>
<span class="btn-buy">Купить</span>
</div>
</div>
</div>
</a>

</div>

<?php include 'footer.php'; ?>