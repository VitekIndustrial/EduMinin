<?php
// about.php — Страница «О компании»
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>О нас — Учебный центр</title>
  <link rel="icon" type="image/png" href="assets/icons/favicon.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-kuh6GZlN8YYNV3CFyraYszEEiQxhT1VgezjuV3zw+FfLMKktlK6KaO5y+6ZT+0IY68PfQWda+E3bfUhBru7W2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- фиксированное верхнее меню -->
  <header class="site-header">
        <nav class="main-nav">
            <button class="menu-toggle" aria-label="Открыть меню">
                <img src="assets/icons/menu.png" alt="Меню" class="menu-icon">
            </button>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Главная</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="reviews.php">Отзывы</a></li>
                <li><a href="signup.php">Запись</a></li>
                <li><a href="about.php">О нас</a></li>
            </ul>
            <ul class="auth-links">
                <li><a href="register.php">Зарегистрироваться</a></li>
                <li><a href="login.php">Войти</a></li>
            </ul>
        </nav>
    </header>

  <!-- Карточка «О компании» -->
  <section class="about-section">
  <!-- Вступление -->
  <<div class="about-intro">
    <h2 class="about-title">О компании «Название компании»</h2>
    <p class="about-text">
      «Название компании» — молодой образовательный центр в Нижнем Новгороде. 
      Мы только начинаем свой путь, но уже собрали команду настоящих профессионалов,
      готовых поделиться знаниями и навыками в сфере IT.
    </p>
  </div>

  <!-- Курсы -->
  <div class="about-courses">
    <h3 class="section-subtitle">Наши курсы</h3>
    <div class="courses-grid">
      <div class="course-card">
        <img src="assets/icons/java.png" alt="" class="course-icon">
        <h4>Java-разработка</h4>
        <p>От основ синтаксиса до корпоративных приложений и микросервисов.</p>
      </div>
      <div class="course-card">
        <img src="assets/icons/security.png" alt="" class="course-icon">
        <h4>Кибербезопасность</h4>
        <p>Защита приложений и сетей от современных угроз.</p>
      </div>
      <div class="course-card">
        <img src="assets/icons/datascience.png" alt="" class="course-icon">
        <h4>Data Science & ML</h4>
        <p>Анализ данных, визуализация и алгоритмы машинного обучения.</p>
      </div>
      <div class="course-card">
        <img src="assets/icons/frontend.png" alt="" class="course-icon">
        <h4>Веб-разработка</h4>
        <p>JavaScript, React, оптимизация и best practices.</p>
      </div>
    </div>
  </div>

  <!-- Направления -->
  <div class="about-directions">
    <h3 class="section-subtitle">Ключевые направления</h3>
    <div class="directions-grid">
      <div class="direction-item">
        <span>Мобильная разработка</span>
      </div>
      <div class="direction-item">
        <span>Облачные технологии</span>
      </div>
      <div class="direction-item">
        <span>UI/UX дизайн</span>
      </div>
      <div class="direction-item">
        <span>Тестирование ПО</span>
      </div>
      <div class="direction-item">
        <span>Business Intelligence</span>
      </div>
    </div>
  </div>
</section>

    <!-- Команда -->
  <section class="team-section">
    <h3 class="section-subtitle">Наша команда</h3>
    <div class="team">
      <!-- Кузин Виктор -->
      <div class="team-member">
        <img src="https://sun9-83.userapi.com/s/v1/ig2/Nq-nCOfedb95tOsq0C-9uVdpugSkyTO9Mzox78V74gZj3IsgxZoKVnyymBxkknhHq4_Pt4J7sH0Zt1jr2RMDKZXy.jpg?quality=95&as=32x43,48x64,72x96,108x144,160x213,240x319,360x479,480x639,540x719,640x852,720x958,1080x1438,1280x1704,1440x1917,1923x2560&from=bu&cs=1923x0" alt="Кузин Виктор" class="team-avatar">
        <div class="team-info">
          <h4>Кузин Виктор</h4>
          <p class="team-role">Фронтенд-разработчик</p>
          <p class="team-desc">Отвечал за дизайн интерфейса, верстку и анимации.</p>
          <a href="https://vk.com/thewardo_m" target="_blank" class="team-link">
            <i class="fab fa-vk"></i> VK профиль
          </a>
        </div>
      </div>
      <!-- Горбунов Дмитрий -->
      <div class="team-member">
        <img src="https://sun9-37.userapi.com/s/v1/ig2/dh4cohO7-uDQ-svk3h8gkmVwxXOY7doW5w5WLUvRIA70_FVQojLiXURJFPGvQNfULliGeb28HGYHYDhLC7YaaThC.jpg?quality=95&as=32x42,48x64,72x96,108x143,160x212,240x318,360x478,480x637,540x716,640x849,716x950&from=bu&cs=716x0" alt="Горбунов Дмитрий" class="team-avatar">
        <div class="team-info">
          <h4>Горбунов Дмитрий</h4>
          <p class="team-role">Бэкенд-разработчик</p>
          <p class="team-desc">Отвечал за архитектуру сервера, API и базу данных.</p>
          <a href="https://vk.com/sater151" target="_blank" class="team-link">
            <i class="fab fa-vk"></i> VK профиль
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Подвал -->
  <footer class="site-footer">
    <div class="footer-top">
      <div class="footer-logo-desc">
        <img src="assets/images/footer-logo.png" alt="Логотип" class="footer-logo">
        <p>Краткое описание</p>
      </div>
      <div class="footer-links">
        <a href="catalog.php">Каталог курсов</a>
        <a href="schedule.php">Расписание</a>
        <a href="signup.php">Запись</a>
        <a href="about.php">О нас</a>
        <a href="reviews.php">Отзывы</a>
      </div>
      <div class="footer-centers">
        <h4>Учебные центры</h4>
        <p>ул. Ульянова, 1</p>
        <p>ул. Ульянова, 10а</p>
        <p>ул. Челюскинцев, 9</p>
      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      <div class="footer-copy">© 2025 Все права защищены</div>
      <div class="footer-policy">
        <a href="docs/Соглашение на обработку персональных данных.pdf">Соглашение на обработку персональных данных</a>
        <a href="docs/Политика конфиденциальности.pdf">Политика конфиденциальности</a>
        <a href="docs/Сведения об образовательной организации.pdf">Сведения об образовательной организации</a>
        <a href="docs/Информация об оплате.pdf">Информация об оплате</a>
      </div>
      <div class="footer-social">
        <a href="https://vk.com" target="_blank"><i class="fab fa-vk"></i></a>
        <a href="https://t.me" target="_blank"><i class="fab fa-telegram"></i></a>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
