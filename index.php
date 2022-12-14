<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kugoo</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </div>
      <div class="mobile-logo-wrapper">
        <div class="mobile-logo">
          <svg class="icon" width="116px" height="43px">
            <use href="./img/sprite.svg#logo"></use>
          </svg>
        </div>
      </div>
      <div class="free-block"></div>
      <div class="container nav-top-content">
        <div class="navbar-top-wrapper">
          <div class="top-menu-wrapper">
            <ul class="navbar-top-list">
              <li class="navbar-top-item">
                <a href="#" class="navbar-top-link">Сервис</a>
              </li>
              <li class="navbar-top-item">
                <a href="#" class="navbar-top-link">Сотрудничество</a>
              </li>
              <li class="navbar-top-item">
                <a href="#" class="navbar-top-link" data-toggle="modal"  data-target="#feedback-modal">Заказать звонок</a>
              </li>
            </ul>
            <ul class="nav-top-social">
              <li class="nav-top-social-item">
                <a href="#" class="nav-social-link">
                  <svg class="icon" width="12px" height="12px">
                    <use href="./img/sprite.svg#whatsapp"></use>
                  </svg>
                </a>
              </li>
              <li class="nav-top-social-item">
                <a href="#" class="nav-social-link">
                  <svg class="icon" width="12px" height="12px">
                    <use href="./img/sprite.svg#telegram"></use>
                  </svg>
                </a>
              </li>
              <li class="nav-top-social-item">
                <a href="#" class="nav-social-link">
                  <svg class="icon" width="12px" height="12px">
                    <use href="./img/sprite.svg#viber"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <a href="tel:+78005055461" class="nav-phone">+7 (800) 505-54-61</a>
        </div>
      </div>
      <div class="top-border"></div>
      <div class="container nav-bottom">
        <div class="navbar-bottom-wrapper">
          <div class="logo">
            <svg class="icon" width="116px" height="43px">
              <use href="./img/sprite.svg#logo"></use>
            </svg>
          </div>
          <button class="btn nav-btn">
            <div class="nav-btn-toggle">
              <div class="nav-btn-burger"></div>
              <div class="nav-btn-burger"></div>
              <div class="nav-btn-burger"></div>
            </div>
            Каталог
          </button>
          <form class="search-form" action="#" method="get">
            <input
              class="search-input"
              name="s"
              placeholder="Искать самокат KUGO"
              type="search"
            />
            <button class="search-btn" type="submit">
              <svg class="search-icon" width="16px" height="16px">
                <use href="./img/sprite.svg#search"></use>
              </svg>
            </button>
          </form>
          <div class="menu-icons">
            <a href="#" class="menu-icon-link">
              <svg class="search-icon" width="20px" height="20px">
                <use href="./img/sprite.svg#compare"></use>
              </svg>
            </a>
            <a href="#" class="menu-icon-link">
              <svg class="search-icon" width="20px" height="20px">
                <use href="./img/sprite.svg#like"></use>
              </svg>
            </a>
            <a href="#" class="menu-icon-link">
              <svg class="search-icon" width="20px" height="20px">
                <use href="./img/sprite.svg#cart"></use>
              </svg>
              <span class="cart-btn">Корзина</span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <div class="wide-container header-image">
      <header class="header">
        <div class="container">
          <div class="location-info">
            <svg class="icon" width="15px" height="15px">
              <use href="./img/sprite.svg#location"></use>
            </svg>
            <address>Восточно-Кругликовская улица, 86</address>
            <span class="time-info">Вт - Сб 10:00 - 20:00</span>
          </div>
          <h1>
            Запишитесь на бесплатный <br />
            тест-драйв электросамокатов
          </h1>
          <p class="header-offer">в Москве без ограничения по времени</p>
          <div class="header-features">
            <div class="header-features-block">
              <div class="header-features-icon-block">
                <div class="header-features-bg"></div>
                <svg class="header-features-icon" width="16px" height="16px">
                  <use href="./img/sprite.svg#scooter"></use>
                </svg>
              </div>
              <p class="header-features-text">
                Поймете, какая <br />
                модель вам подходит
              </p>
            </div>
            <div class="header-features-block">
              <div class="header-features-icon-block">
                <div class="header-features-bg"></div>
                <svg class="header-features-icon" width="16px" height="16px">
                  <use href="./img/sprite.svg#energy"></use>
                </svg>
              </div>
              <p class="header-features-text">
                Проверите лучшие самокаты в деле
              </p>
            </div>
          </div>
          <button class="btn header-btn"  data-toggle="modal"  data-target="#feedback-modal">Записаться</button>
        </div>
      </header>
    </div>
    <section class="section model-description model-info-block">
      <div class="wide-container">
        <div class="model-description-content">
          <div class="model-description-wrapper">
            <h2 class="model-description-title">
              Определите максимально подходящую вам модель <br />
              не теоретически, а на практике
            </h2>
            <p class="model-description-text">Тест-драйв поможет:</p>
            <ul class="description-list">
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Понять подходит ли вам конкретная модель;
              </li>
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Испытать самокат в «реальной жизни»;
              </li>
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Оценить удобство хранения и эксплуатации;
              </li>
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Узнать реальные характеристики и возможности модели.
              </li>
            </ul>
          </div>
          <div class="model-description-img-wrapper">
            <img src="img/product-img.jpg" alt="#" class="model-info-img" />
          </div>
        </div>
      </div>
    </section>
    <section class="section model-description model-info-second-block">
      <div class="wide-container">
        <div class="model-description-second-content">
          <div class="model-description-second-img-wrapper">
            <img
              src="img/scooter-test-1.jpg"
              alt="#"
              class="model-info-img scooter-test-img"
            />
          </div>
          <div class="model-description-wrapper left-align-description">
            <h2 class="model-description-title">
              Научим правильной <br />
              и безопасной езде в городе <br />
              вас или вашего ребенка
            </h2>
            <p class="model-description-text">
              На обучении специалист расскажет:
            </p>
            <ul class="description-list">
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Как подготовить самокат к поездке;
              </li>
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Как «завести» самокат;
              </li>
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Как вести себя во время поездки и обезопасить себя и окружающих;
              </li>
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Как складывать и раскладывать электросамокат;
              </li>
              <li class="description-list-item">
                <svg class="icon" width="22px" height="22px">
                  <use href="./img/sprite.svg#checkbox"></use>
                </svg>
                Как ухаживать за своим девайсом.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="shop-list-section">
      <div class="container">
        <h2 class="shop-list-title">
          Сейчас для тест-драйва и обучения <br />
          доступны следующие модели
        </h2>
        <div class="shop-list-wrapper">
          <div class="shop-item">
            <div class="item-img-wrapper">
              <div class="label sale-label">хит</div>
              <div class="label compare-label">
                <svg class="icon" width="20px" height="20px">
                  <use href="./img/sprite.svg#compare-btn"></use>
                </svg>
              </div>
              <img src="img/item-img.jpg" alt="#" class="item-img" />
            </div>
            <div class="item-info-wrapper">
              <h3 class="item-title">Kugoo Kirin M4</h3>
              <div class="features-list-wrapper">
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#speedometer"></use>
                    </svg>
                    60 км/ч
                  </div>
                </div>
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#power"></use>
                    </svg>
                    1,2 л.с.
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#timer"></use>
                    </svg>
                    5 часов
                  </div>
                </div>
              </div>
              <div class="price-block-wrapper">
                <div class="price-block">
                  <div class="sale-price">39 900 ₽</div>
                  <div class="main-price">29 900 ₽</div>
                </div>
                <div class="item-buttons">
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/add-to-cart.svg"></use>
                    </svg>
                  </button>
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/sprite.svg#add-to-favourite"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <button class="btn item-btn"  data-toggle="modal"  data-target="#feedback-modal">Записаться на тест-драйв</button>
            </div>
          </div>
          <div class="shop-item">
            <div class="item-img-wrapper">
              <div class="label sale-label">хит</div>
              <div class="label compare-label">
                <svg class="icon" width="20px" height="20px">
                  <use href="./img/sprite.svg#compare-btn"></use>
                </svg>
              </div>
              <img src="img/item-img.jpg" alt="#" class="item-img" />
            </div>
            <div class="item-info-wrapper">
              <h3 class="item-title">Kugoo Kirin M4</h3>
              <div class="features-list-wrapper">
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#speedometer"></use>
                    </svg>
                    60 км/ч
                  </div>
                </div>
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#power"></use>
                    </svg>
                    1,2 л.с.
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#timer"></use>
                    </svg>
                    5 часов
                  </div>
                </div>
              </div>
              <div class="price-block-wrapper">
                <div class="price-block">
                  <div class="sale-price">39 900 ₽</div>
                  <div class="main-price">29 900 ₽</div>
                </div>
                <div class="item-buttons">
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/add-to-cart.svg"></use>
                    </svg>
                  </button>
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/sprite.svg#add-to-favourite"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <button class="btn item-btn"  data-toggle="modal"  data-target="#feedback-modal">Записаться на тест-драйв</button>
            </div>
          </div>
          <div class="shop-item">
            <div class="item-img-wrapper">
              <div class="label sale-label">хит</div>
              <div class="label compare-label">
                <svg class="icon" width="20px" height="20px">
                  <use href="./img/sprite.svg#compare-btn"></use>
                </svg>
              </div>
              <img src="img/item-img.jpg" alt="#" class="item-img" />
            </div>
            <div class="item-info-wrapper">
              <h3 class="item-title">Kugoo Kirin M4</h3>
              <div class="features-list-wrapper">
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#speedometer"></use>
                    </svg>
                    60 км/ч
                  </div>
                </div>
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#power"></use>
                    </svg>
                    1,2 л.с.
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#timer"></use>
                    </svg>
                    5 часов
                  </div>
                </div>
              </div>
              <div class="price-block-wrapper">
                <div class="price-block">
                  <div class="sale-price">39 900 ₽</div>
                  <div class="main-price">29 900 ₽</div>
                </div>
                <div class="item-buttons">
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/add-to-cart.svg"></use>
                    </svg>
                  </button>
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/sprite.svg#add-to-favourite"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <button class="btn item-btn"  data-toggle="modal"  data-target="#feedback-modal">Записаться на тест-драйв</button>
            </div>
          </div>
          <div class="shop-item">
            <div class="item-img-wrapper">
              <div class="label sale-label">хит</div>
              <div class="label compare-label">
                <svg class="icon" width="20px" height="20px">
                  <use href="./img/sprite.svg#compare-btn"></use>
                </svg>
              </div>
              <img src="img/item-img.jpg" alt="#" class="item-img" />
            </div>
            <div class="item-info-wrapper">
              <h3 class="item-title">Kugoo Kirin M4</h3>
              <div class="features-list-wrapper">
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#speedometer"></use>
                    </svg>
                    60 км/ч
                  </div>
                </div>
                <div class="feaures-list">
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#power"></use>
                    </svg>
                    1,2 л.с.
                  </div>
                  <div class="feaures-item">
                    <svg class="features-icon" width="18px" height="18px">
                      <use href="./img/sprite.svg#timer"></use>
                    </svg>
                    5 часов
                  </div>
                </div>
              </div>
              <div class="price-block-wrapper">
                <div class="price-block">
                  <div class="sale-price">39 900 ₽</div>
                  <div class="main-price">29 900 ₽</div>
                </div>
                <div class="item-buttons">
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/add-to-cart.svg"></use>
                    </svg>
                  </button>
                  <button class="btn item-action-btn">
                    <svg class="icon" width="20px" height="20px">
                      <use href="./img/sprite.svg#add-to-favourite"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <button class="btn item-btn"  data-toggle="modal"  data-target="#feedback-modal">Записаться на тест-драйв</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cta-section">
      <div class="wide-container cta">
        <div class="container cta-container">
          <div class="cta-content-wrapper">
            <h2 class="cta-title">
              Нет нужной модели, которую <br />
              хотите протестировать?
            </h2>
            <form action="handler.php" method="POST" class="cta-form">
              <p class="cta-text">
                Оставьте заявку, и менеджер подберет нужный самокат
              </p>
              <input
                type="text"
                class="cta-input"
                placeholder="+7 (___) __ - __ - __"
                name="userphone"
              />
              <button class="btn cta-btn" type="submit">
                Оставить заявку на тест-драйв
              </button>
              <div class="checkbox-wrapper">
                <input id="checkbox-input" type="checkbox" class="checkbox" />
                <label for="checkbox-input" class="cta-policy">
                  Нажимая на кнопку, вы соглашаетесь на обработку <br />
                  персональных данных и политикой конфиденциальности
                </label>
              </div>
            </form>
          </div>
          <div class="cta-img-wrapper">
            <img src="img/person-img-1.png" alt="#" class="cta-img" />
          </div>
        </div>
      </div>
    </section>
    <section class="sub-section">
      <div class="container sub-section-wrapper">
        <h2 class="sub-section-title">
          Оставьте свою почту и станьте первым, <br />
          кто получит скидку на новые самокаты
        </h2>
        <form action="handler.php" method="POST" class="sub-form">
          <input
            type="text"
            class="sub-input"
            placeholder="Введите Ваш email"
            name="usermail"
          />
          <button class="btn sub-btn">Подписаться</button>
        </form>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-menu">
          <div class="footer-menu-block">
            <h3 class="footer-menu-title">Каталог товаров</h3>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Электросамокаты</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Электроскутеры</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Электровелосипеды</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Электровелосипеды</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-block footer-menu-second-block">
            <h3 class="footer-menu-title">Покупателям</h3>
            <ul class="footer-menu-list menu-2-columns">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Сервисный центр</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Доставка и оплата</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Рассрочка</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Тест-драйв</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Блог</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Сотрудничество</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Контакты</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Акции</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-block footer-menu-third-block">
            <h3 class="footer-menu-title">Контакты</h3>
            <ul class="footer-menu-list menu-2-columns">
              <li class="footer-menu-item footer-menu-text">Call-центр</li>
              <li class="footer-menu-item">
                <a href="tel:+78005055461" class="footer-menu-phone">
                  +7 (800) 505-54-61
                </a>
              </li>
              <li class="footer-menu-item footer-menu-info">
                Пн-Вс 10:00 - 20:00
              </li>
              <li class="footer-menu-item footer-menu-text">Сервисный центр</li>
              <li class="footer-menu-item">
                <a href="tel:+74993507692" class="footer-menu-phone">
                  +7 (499) 350-76-92
                </a>
              </li>
              <li class="footer-menu-item footer-menu-info">
                Пн-Вс 10:00 - 20:00
              </li>
            </ul>
          </div>
          <div class="footer-menu-block">
            <a href="#" class="footer-cta-link" data-toggle="modal"  data-target="#feedback-modal"> Заказать звонок </a>
          </div>
        </div>
        <hr class="footer-hr" />
        <div class="footer-logos">
          <div class="footer-logo_apps">
            <div class="footer-logo">
              <svg class="icon" width="116px" height="43px">
                <use href="./img/sprite.svg#logo"></use>
              </svg>
            </div>
            <div class="footer-aps">
              <img src="img/gplay.png" alt="#" />
              <img src="img/appstore.png" alt="#" />
            </div>
          </div>
          <div class="footer-networks">
            <div class="net-wrapper">
              <div class="net-icon-wrapper">
                <svg class="net-icon" width="20px" height="20px">
                  <use href="./img/sprite.svg#vk-logo"></use>
                </svg>
              </div>
              <div class="net-text-wrapper">
                <p class="network-name">Вконтакте</p>
                <p class="network-count">3300</p>
              </div>
            </div>
            <div class="net-wrapper">
              <div class="net-icon-wrapper">
                <svg class="net-icon" width="20px" height="16px">
                  <use href="./img/sprite.svg#yt-logo"></use>
                </svg>
              </div>
              <div class="net-text-wrapper">
                <p class="network-name">YouTube</p>
                <p class="network-count">3606</p>
              </div>
            </div>
            <div class="net-wrapper">
              <div class="net-icon-wrapper">
                <svg class="net-icon" width="20px" height="20px">
                  <use href="img/sprite.svg#tg-logo"></use>
                </svg>
              </div>
              <div class="net-text-wrapper">
                <p class="network-name">Telegram</p>
                <p class="network-count">432</p>
              </div>
            </div>
          </div>
        </div>
        <hr class="footer-hr" />
        <div class="footer-bottom">
          <div class="footer-bottom-links">
            <a href="#" class="footer-bottom-link"> Реквизиты </a>
            <a href="#" class="footer-bottom-link">
              Политика конфиденциальности
            </a>
          </div>
          <div class="footer-bottom-payment_social">
            <div class="footer-bottom-payment">
              <img src="img/pay/gpay.png" alt="#" class="payment-img" />
              <img src="img/pay/apple.png" alt="#" class="payment-img" />
              <img src="img/pay/visa.png" alt="#" class="payment-img" />
              <img src="img/pay/master.png" alt="#" class="payment-img" />
              <img src="img/pay/maestro.png" alt="#" class="payment-img" />
              <img src="img/pay/webmoney.png" alt="#" class="payment-img" />
              <img src="img/pay/qiwi.png" alt="#" class="payment-img" />
            </div>
            <div class="footer-bottom-social">
              <p class="social-text">Online чат:</p>
              <ul class="nav-top-social">
                <li class="nav-top-social-item">
                  <a href="#" class="nav-social-link">
                    <svg class="icon" width="16px" height="16px">
                      <use href="./img/sprite.svg#whatsapp"></use>
                    </svg>
                  </a>
                </li>
                <li class="nav-top-social-item">
                  <a href="#" class="nav-social-link">
                    <svg class="icon" width="16px" height="16px">
                      <use href="./img/sprite.svg#telegram"></use>
                    </svg>
                  </a>
                </li>
                <li class="nav-top-social-item">
                  <a href="#" class="nav-social-link">
                    <svg class="icon" width="16px" height="16px">
                      <use href="./img/sprite.svg#viber"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--  -->
    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
      
      <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal"><svg class="modal-close-icon" width="20px" height="20px">
          <use href="./img/sprite.svg#modal-close"></use>
        </svg></a>
        
        <!-- modal-form-section -->
        <div class="modal-form-section">
          <h2 class="modal-title">
          Запишитесь <br> на тест-драйв электросамоката
          </h2>
          <p class="modal-form-offer">
          и подберите модель для себя
          </p>
          <p class="modal-form-text">
          Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.
          </p>
          <form action="handler.php" method="POST" class="modal-form">
            <label class="modal-label" for="modal-input">
            Как с вами удобнее связаться?
            </label>
            <input name="userphone" id="modal-input" type="text">
            <button class="btn modal-form-btn">
            Оформить предзаказ
            </button>
            <div class="checkbox-wrapper">
                <input id="checkbox-modal-input" type="checkbox" class="checkbox" />
                <label for="checkbox-modal-input" class="cta-policy">
                  Нажимая на кнопку, вы соглашаетесь <br> на обработку
                  персональных данных <br> и политикой конфиденциальности
                </label>
              </div>
          </form>
        </div>
        <!-- / modal-form-section -->
          <img class="modal-img" src="./img/scooter-test.jpg" alt="#">
      </div>
    </div>
    <!--  -->
    <script src="js/main.js"></script>
  </body>
</html>
