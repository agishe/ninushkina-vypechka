<h1 align="center">«Разработка web-ресурса с использованием технологий HTML, CSS, JavaScript»<br>
на примере web-ресурса: https://ninushkina-vypechka.ru</h1>
<h2 align="center">Web-ресурс реализован Кадыровой М.М.</h2>

Веб-ресурс предназначен для предоставления информации потенциальным клиентам о кондитере, о кондитерских изделиях, а также оплате и доставке.


В проект веб ресурса входят:
- файл главной страницы в формате php,
- шаблон с общим HTML-кодом (далее “лейаут”) в формате php в корне проекта,
- маршрутизатор в формате php в корне проекта,
- 10 страниц в формате html в папке pages,
- файл дополнительной конфигурации веб-сервера Apache (.htaccess) в корне проекта,
- папка img с изображениями,
- папка css с стилями веб-сайта,
- папка js с кодом на JavaScript.
- папка php c кодом для отправки данных в бота в телеграме

Страницы веб проекта адаптивны и могут открываться на разных устройствах с разным разрешением экрана.

<br />

<h2 align="center">Описание этапов разработки, описание функционала с приложением листингов исходного программного кода основной функции, структурных модулей, пример кода-разметки</h2>

<br />

Этап разработки начинался с создания шаблона с общим HTML-кодом (далее “лейаут”) и с использованием фреймворка Bootstrap ver 5.3 (далее “фреймворк”).

<br />

```ruby
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
```
Листинг 1.

<br />

Веб ресурс создавался с использованием системы сеток фреймворка “Container”, а также дополнительных готовых компонентов фреймворка. 
В лейауте подключаются стили, метатеги, шапка и подвал сайта, а также вставка контента сайта с помощью PHP-кода.

<br />

```ruby
<?php echo $content; ?>
```
Листинг 2.

<br />

Также в лейауте находится ссылка на скрипт с кодом кнопки прокрутки страницы вверх, реализованная с помощь JavaScript. Кнопка отображается на всех страницах веб ресурса.
```ruby
btnUp.onclick = function () {window.scrollTo(scrollX, 0);};
window.addEventListener("scroll", function () {
  btnUp.hidden = scrollY < document.documentElement.clientHeight;
});
```
Листинг 3.

<br />

Создается маршрутизатор в котором прописываются пути к контенту сайта и лейауту.

<br />

```ruby
<?php
  $url = explode("/", $_SERVER['REQUEST_URI']);
  if ($url[1] == "contacts") {
    $content = file_get_contents("pages/contacts.html");
  } else if ($url[1] == "sales") {
    $content =  file_get_contents("pages/sales.html");
  } else if ($url[1] == "payment-and-delivery") {
    $content = file_get_contents("pages/payment-and-delivery.html");
  } else if ($url[1] == "cakes") {
    $content = file_get_contents("pages/cakes.html");
  } else if ($url[1] == "3d-cakes") {
    $content = file_get_contents("pages/3d-cakes.html");
  } else if ($url[1] == "baked_goods") {
    $content = file_get_contents("pages/baked_goods.html");
  } else if ($url[1] == "gingerbreads") {
    $content = file_get_contents("pages/gingerbreads.html");
  } else {
    $content = file_get_contents("pages/index.html");
  } 
  if (!empty($content))
    require_once("template.php");
```
Листинг 4.

<br />

Создается файл дополнительной конфигурации веб-сервера Apache.

<br />

```ruby
RewriteEngine on

RewriteCond %{SERVER_PORT} !^443$
RewriteRule .* https://%{SERVER_NAME}%{REQUEST_URI} [R=301,L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ router.php [L,QSA]
```
Листинг 5.

<br />

При переходе по адресу https://ninushkina-vypechka.ru пользователь попадает на главную страницу сайта, на которой в шапке указаны номер, социальные сети для связи и адрес, также расположены логотип и меню для перехода на другие страницы веб ресурса.

<br />

```ruby
<header>
  <div class="container">
    <div class="row header_contacts d-flex justify-content-center">
      <div class="col-lg-2 my-2">
        <a class="number" href="tel:+79263975840">
          <i class="fa-solid fa-phone fa-beat fa-lg"
            style="color: #6d2e46"></i>+79263975840</a>
      </div>
      <div class="col-lg-2 my-1">
        <button type="button" class="btn btnModal" data-bs-toggle="modal"
          data-bs-target="callbackModal">Заказать звонок</button>
      </div>
      <div class="col-lg-2 my-2"><a href="https://t.me/Nina_U_K"><i
        class="fa-brands fa-telegram fa-beat fa-xl telegram me-3"
          style="color: #259cd8"></i></a>
        <a aria-label="Chat on WhatsApp" href="https://wa.me/+79263975840">
          <i class="fa-brands fa-whatsapp fa-beat fa-xl me-3"
            style="color: #4dc85b"></i></a>
        <a href="https://vk.me/nina_u_k">
          <i class="fa-brands fa-vk fa-beat fa-xl" style="color: #259cd8">
          </i></a>
      </div>
      <div class="col-lg-3 my-2">
        <a aria-label="Adress" class="location" href="/contacts">
          Москва, Молжаниновский р-н</a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand py-0" href="/">
        <img class="navbar-brand py-0" src="/img/logo/logo.png" 
          style="width: 200px; margin: auto" alt="Нинушкина выпечка" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mx-5 mb-lg-0 nav 
          justify-content-center">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/cakes">Торты</a></li>
              <li><a class="dropdown-item" href="/3d-cakes">
                3D-торты</a></li>
              <li><a class="dropdown-item" href="/gingerbreads">
                Пряники</a></li>
              <li><a class="dropdown-item" href="/baked_goods">
                Выпечка</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="/sales">
            Акции</a></li>
          <li class="nav-item">
            <a class="nav-link" href="/order-and-delivery">
              Оплата и доставка</a></li>
          <li class="nav-item">
            <a class="nav-link" href="/contacts">Контакты</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
```
Листинг 6.

<br />

На главной странице расположены блоки с изображениями тортов, информацией о кондитере и новостей сайта.
В подвале веб ресурса реализована автоматическая смена отображаемого года с помощью JavaScript.

<br />

```ruby
<script>
  document.write(new Date().getFullYear());
</script>
```
Листинг 7.

<br />

При нажатии на кнопку «Каталог», появляется выпадающий список страниц с кондитерскими изделиями. На страницах каталога представлена информация о тортах и других изделиях в виде информационных карточек, реализованная с помощью фреймворка и свойств стилей CSS.

<br />

```ruby
.card-image {
  height: 400px;
  object-fit: cover;
  width: 100%;
}
.cakes-font {
  color: #6d2e46;
}
@media (min-width: 768px) and (max-width: 991px) {
  .card-image {
    height: 100%;
    width: 100%;
    object-fit: cover;
  }
```
Листинг 8.

<br />

На веб-сайте добавлена страница «Акции», которая в дальнейшем будет пополняться актуальным контентом. 
На странице «Оплата и доставка» представлена информация о доставке, способе оплаты и примерной стоимости кондитерских изделий.
На последней странице «Контакты» представлена актуальная контактная информация кондитера. Также добавлена интерактивная карта местоположения кондитера.

<br />

```ruby
<div id="map" class="px-1">
  <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa0add9f82026559903ba9014b5175c51075df7c6170c8830f8df4b9e911ce47f&amp;source=constructor" frameborder="0"></iframe>
</div>
```
Листинг 9.

<br />

Планируется дальнейшее поддержание работы веб ресурса и реализация различных улучшений и других функций.
