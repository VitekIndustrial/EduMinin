<?php
// catalog.php — Страница «Каталог курсов» с AJAX-загрузкой
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <div id="courses-container">
      <!-- сюда AJAX-скрипт вставит блоки курсов -->
      <p style="text-align:center; color:#777;">Загрузка курсов...</p>
    </div>
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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const container = document.getElementById('courses-container');

      fetch('http://localhost:8080/courses')
        .then(response => {
          if (!response.ok) throw new Error('Network response was not ok');
          return response.json();
        })
        .then(json => {
          container.innerHTML = '';  // очистить «Загрузка…»
          const courses = json.data || [];
          if (courses.length === 0) {
            container.innerHTML = '<p style="text-align:center; color:#777;">Курсы не найдены.</p>';
            return;
          }
          courses.forEach(course => {
            const block = document.createElement('div');
            block.setAttribute('style', `
              display: flex;
              align-items: center;
              gap: 20px;
              background: #fff;
              border-radius: var(--border-radius);
              box-shadow: 0 2px 5px rgba(0,0,0,0.1);
              padding: 20px;
              margin-bottom: 20px;
            `);
            block.innerHTML = `
              <img src="${course.image}"
                   alt="${course.title}"
                   style="
                     width: 150px;
                     height: auto;
                     border-radius: var(--border-radius);
                     flex-shrink: 0;
                   ">
              <div style="flex:1;">
                <h3 style="margin:0 0 10px; color:var(--primary-3);">
                  ${course.title}
                </h3>
                <p style="margin:0 0 10px; color:#555;">
                  ${course.description}
                </p>
                <div style="margin-bottom:15px; font-size:14px; color:var(--primary-3);">
                  <span style="margin-right:20px;">
                    <strong>${course.academic_hour}</strong> ак. ч.
                  </span>
                  <span>
                    <strong>${course.price}</strong> руб.
                  </span>
                </div>
                <a href="signup.php?course=${encodeURIComponent(course.id)}"
                   style="
                     display: table;
                     margin-left: auto;
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
            `;
            container.appendChild(block);
          });
        })
        .catch(error => {
          console.error(error);
          container.innerHTML = '<p style="text-align:center; color:red;">Не удалось загрузить курсы. Попробуйте позже.</p>';
        });
    });
  </script>
</body>
</html>
