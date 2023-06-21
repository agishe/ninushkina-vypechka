<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/1d6ad22d2e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />
    <link rel="icon" href="/img/icons/favicon.svg" type="image/x-icon" />
    <title>Нинушкина выпечка</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="css/styles.css?<?php echo time();?>" />
  </head>

  <body class="d-flex flex-column min-vh-100">
    <!--=============================== HEADER START =============================-->
    <header>
      <div class="container">
        <div class="row header_contacts d-flex justify-content-center">
          <div class="col-lg-2 my-2">
            <a class="number" href="tel:+79263975840">
              <i
                class="fa-solid fa-phone fa-beat fa-lg"
                style="color: #6d2e46"></i
              >+79263975840</a
            >
          </div>
          <div class="col-lg-2 my-2">
            <a href="https://t.me/Nina_U_K"
              ><i
                class="fa-brands fa-telegram fa-beat fa-xl telegram me-3"
                style="color: #259cd8"></i
            ></a>
            <a aria-label="Chat on WhatsApp" href="https://wa.me/+79263975840"
              ><i
                class="fa-brands fa-whatsapp fa-beat fa-xl me-3"
                style="color: #4dc85b"></i
            ></a>
            <a href="https://vk.me/nina_u_k"
              ><i
                class="fa-brands fa-vk fa-beat fa-xl"
                style="color: #259cd8"></i
            ></a>
          </div> 
          <div class="col-lg-2 my-1">
            <button
              type="button"
              class="btn btnCallback"
              data-bs-toggle="modal"
              data-bs-target="#callbackModal">
              Заказать звонок
            </button>
          </div>
          <div class="col-lg-3 my-2">
            <a aria-label="Adress" class="location" href="/contacts"
              ><i class="fa-regular fa-compass" style="color: #6d2e46;"></i> Москва, Молжаниновский р-н</a
            >
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand py-0" href="/">
            <img
              class="navbar-brand py-0"
              src="/img/logo/logo.png"
              style="width: 200px; margin: auto"
              alt="Нинушкина выпечка" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav me-auto mb-2 mx-5 mb-lg-0 nav justify-content-center">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Каталог
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="/cakes">Торты</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="/3d-cakes">3D-торты</a>
                  </li>
                  <!-- <li>
                      <a class="dropdown-item" href="/cupcakes">Капкейки</a>
                    </li> -->
                  <li>
                    <a class="dropdown-item" href="/gingerbreads">Пряники</a>
                  </li>
                  <!-- <li>
                      <a class="dropdown-item" href="/desserts">Десерты</a>
                    </li> -->
                  <li>
                    <a class="dropdown-item" href="/baked_goods">Выпечка</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="/meat-cakes">Антиторты</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/payment-and-delivery"
                  >Оплата и доставка</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Информация
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="/sales">Акции</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="/biscuits-and-fillers">Бисквиты и начинки</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/booklet">Памятка</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contacts">Контакты</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--=============================== HEADER END =============================-->

    <?php echo $content; ?>

    <!--=============================== BUTTON UP START =============================-->
    <div id="btnUp" hidden>
      <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path
          d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM135.1 217.4c-4.5 4.2-7.1 10.1-7.1 16.3c0 12.3 10 22.3 22.3 22.3H208v96c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V256h57.7c12.3 0 22.3-10 22.3-22.3c0-6.2-2.6-12.1-7.1-16.3L269.8 117.5c-3.8-3.5-8.7-5.5-13.8-5.5s-10.1 2-13.8 5.5L135.1 217.4z" />
      </svg>
    </div>
    <script src="/js/buttonUp.js"></script>
    <!--=============================== BUTTON UP END =============================-->

    <!--=============================== FOOTER START =============================-->
    <footer class="mt-auto py-3">
      <span class="d-flex justify-content-center text-center">
        Нинушкина Выпечка<br />
        &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        <br />
      </span>
      <div class="d-flex justify-content-center">
        <a class="madeBy" href="https://github.com/agishe">
          Создано - Agishe</a>
      </div>
    </footer>
    <!--=============================== FOOTER END =============================-->

        <!--=============================== MODAL START =============================-->
    <div
      class="modal fade"
      id="callbackModal"
      tabindex="-1"
      aria-labelledby="callbackModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-3" id="callbackModalLabel">
              Заказать звонок
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Закрыть"></button>
          </div>
          <form
            id="form-contact"
            method="POST"
            class="contact-form"
            autocomplete="off"
            enctype="multipart/form-data">
            <div class="modal-body">
              <div class="preloader"></div>
              <p class="contact-form__message"></p>

              <!-- Поле с именем -->
              <div
                class="contact-form__input-wrapper contact-form__input-wrapper_name">
                <input
                  name="name"
                  type="text"
                  class="contact-form__input contact-form__input_name"
                  placeholder="Введите ваше имя" />
              </div>

              <!-- Поле с телефоном -->
              <div
                class="contact-form__input-wrapper contact-form__input-wrapper_phone">
                <input
                  name="phone"
                  type="tel"
                  class="contact-form__input contact-form__input_phone"
                  placeholder="Введите ваш телефон" />
              </div>

              <!-- Поле с темой в письме -->
              <input
                name="theme"
                type="hidden"
                class="contact-form__input contact-form__input_theme"
                value="Заявка с сайта ninushkina-vypechka.ru" />
            </div>

            <div class="modal-footer">
              <button
                type="submit"
                class="btn btn-primary contact-form__button">
                Отправить
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/telegramform.js"></script>

    <!-- Маска ввода номера телефона -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
      $(function () {
        $('input[type="tel"]').mask("+7(000)000-00-00");
      });
    </script>
    <!--=============================== MODAL END =============================-->

    <!-- Bootstrap script start -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
    <!-- Bootstrap script end -->

    <!-- Yandex.Metrika counter START -->
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();
      for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
      k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(93829545, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            trackHash:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/93829545" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter END -->

    <!-- Google tag (gtag.js) START -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LLCB42RWEW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-LLCB42RWEW');
    </script>
    <!-- Google tag (gtag.js) END -->
  </body>
</html>
