<?php
// catalog.php — Страница «Каталог курсов»

// Список курсов
$courses = [
    [
        'id'    => '1С обучение',
        'img'   => 'assets/icons/1c.png',
        'title' => '1С: Профессионал',
        'desc'  => 'Полный курс по работе и администрированию 1С:Предприятие.',
        'hours' => 72,
        'price' => 15000
    ],
    [
        'id'    => 'python',
        'img'   => 'assets/icons/python.png',
        'title' => 'Python для начинающих',
        'desc'  => 'Основы языка Python: синтаксис, структуры данных, первые проекты.',
        'hours' => 60,
        'price' => 14000
    ],
    [
        'id'    => 'cpp_csharp',
        'img'   => 'assets/icons/cpp_csharp.png',
        'title' => 'C++/C# в разработке',
        'desc'  => 'C++ для системного программирования и C# для приложений на .NET.',
        'hours' => 80,
        'price' => 18000
    ]
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог курсов — Учебный центр</title>
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
      <button class="menu-toggle" aria-label="Открыть/закрыть меню">
        <img src="assets/icons/menu.png" alt="Меню" class="menu-icon">
      </button>
      <ul class="nav-links">
        <li><a href="index.php">Главная</a></li>
        <li><a href="news.php">Новости</a></li>
        <li><a href="reviews.php">Отзывы</a></li>
        <li><a href="signup.php">Запись</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="about.php">О нас</a></li>
      </ul>
      <ul class="auth-links">
        <li><a href="register.php">Зарегистрироваться</a></li>
        <li><a href="login.php">Войти</a></li>
      </ul>
    </nav>
  </header>

  <!-- Каталог курсов -->
  <section class="catalog-section" style="margin:100px auto 60px; max-width:1200px; padding:0 20px;">
    <h2 style="text-align:center; color:var(--primary-2); margin-bottom:40px;">Каталог курсов</h2>

    <?php foreach ($courses as $course): ?>
      <div class="course-block"
           style="display:flex; align-items:center; gap:20px; background:#fff;
                  border-radius:var(--border-radius); box-shadow:0 2px 5px rgba(0,0,0,0.1);
                  padding:20px; margin-bottom:20px;">
        <!-- Обложка курса -->
        <img src="<?= $course['img'] ?>"
             alt="<?= htmlspecialchars($course['title'], ENT_QUOTES) ?>"
             style="width:150px; height:auto; border-radius:var(--border-radius); flex-shrink:0;">

        <!-- Информация о курсе -->
        <div style="flex:1;">
          <h3 style="margin:0 0 10px; color:var(--primary-3);">
            <?= htmlspecialchars($course['title'], ENT_QUOTES) ?>
          </h3>
          <p style="margin:0 0 15px; color:#555;">
            <?= htmlspecialchars($course['desc'], ENT_QUOTES) ?>
          </p>
          <div style="margin-bottom:15px; font-size:14px; color:var(--primary-3);">
            <span style="margin-right:20px;">
              <strong><?= $course['hours'] ?></strong> ак. ч.
            </span>
            <span>
              <strong><?= number_format($course['price'], 0, ',', ' ') ?></strong> руб.
            </span>
          </div>
          <a href="signup.php?course=<?= urlencode($course['id']) ?>"
             style="
               display: table;      /* превращаем в блочный table-box */
               margin-left: auto;   /* «толкаем» вправо */
               padding: 10px 20px;
               background: var(--secondaryB-1);
               color: #fff;
               text-decoration: none;
               border-radius: var(--border-radius);
               font-weight: 600;
               transition: background 0.3s;
             ">
            Записаться
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- подвал -->
  <footer class="site-footer">
    <div class="footer-top">
      <div class="footer-logo-desc">
        <img src="assets/images/footer-logo.png" alt="Логотип" class="footer-logo">
        <p>Краткое описание вашего центра обучения.</p>
      </div>
      <div class="footer-links">
        <a href="catalog.php">Каталог курсов</a>
        <a href="schedule.php">Расписание</a>
        <a href="signup.php">Запись</a>
        <a href="about.php">О нас</a>
        <a href="reviews.php">Отзывы</a>
        <a href="contacts.php">Контакты</a>
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
        <a href="agreement.php">Соглашение на обработку персональных данных</a>
        <a href="privacy.php">Политика конфиденциальности</a>
        <a href="edu-info.php">Сведения об образовательной организации</a>
        <a href="payment-info.php">Информация об оплате</a>
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
