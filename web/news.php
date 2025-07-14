<?php
// news.php — Страница «Новости»

// Массив новостей (в реальности берётся из БД)
$news = [
    [
        'id'      => 'news1',
        'img'     => 'assets/images/news1.jpg',
        'title'   => 'Запуск нового потока Python',
        'excerpt' => 'Открыт набор на новый поток интенсивного курса по программированию на Python. Программа ориентирована на начинающих и охватывает как базовые, так и прикладные темы — от синтаксиса до практических проектов.',
        'text'    => "Полностью обновлённый курс по Python стартует уже в этом месяце.
Он идеально подойдёт тем, кто делает первые шаги в программировании, а также тем, кто хочет систематизировать знания.
Программа курса включает:

изучение синтаксиса и базовых конструкций языка Python;

знакомство с основными библиотеками для анализа данных (Pandas, NumPy, Matplotlib);

основы разработки веб-приложений с использованием Flask и FastAPI;

практические проекты под руководством опытных наставников.

По завершении курса слушатели получат портфолио из 3–4 проектов, сертификат и рекомендации по дальнейшему развитию в сфере IT. Присоединяйтесь, пока открыта регистрация!",
        'date'    => '2025-07-10'
    ],
    [
        'id'      => 'news2',
        'img'     => 'assets/images/news2.jpg',
        'title'   => 'Вебинар по кибербезопасности',
        'excerpt' => 'Бесплатный вебинар от наших экспертов по актуальным вопросам кибербезопасности: современные угрозы, защита данных и практические рекомендации. Подходит для всех, кто работает с веб-приложениями или интересуется ИБ.',
        'text'    => "Приглашаем вас принять участие в онлайн-вебинаре, посвящённом кибербезопасности и защите информации в цифровую эпоху.
Эксперты расскажут:

о самых распространённых киберугрозах 2025 года;

о способах защиты веб-приложений и сетевой инфраструктуры;

о мерах обеспечения безопасности пользовательских данных и соблюдении требований GDPR/152-ФЗ;

как организовать защиту малому бизнесу при ограниченном бюджете.

Участники смогут задать вопросы в прямом эфире, а также получат доступ к видео-записи, презентациям и дополнительным материалам после завершения мероприятия. Регистрация уже открыта — количество мест ограничено!",
        'date'    => '2025-07-05'
    ],
    [
        'id'      => 'news3',
        'img'     => 'assets/images/news3.jpg',
        'title'   => 'Новая группа по 1С:Профессионал',
        'excerpt' => 'Начинается обучение новой группы по направлению «1С:Профессионал». Курс охватывает ключевые навыки: администрирование, настройку и разработку в 1С. Подойдёт как новичкам, так и практикующим специалистам.',
        'text'    => "Открыт набор на программу профессиональной подготовки по направлению «1С:Профессионал».
Курс разработан для начинающих специалистов, бухгалтеров, системных администраторов и разработчиков, желающих освоить возможности платформы 1С:Предприятие.

В программе:

основы платформы 1С:Предприятие и работа в режиме конфигуратора;

настройка справочников, документов, отчётов и форм;

администрирование, резервное копирование, управление доступом;

создание собственных конфигураций и бизнес-процессов.

После завершения курса всем участникам предоставляется доступ к карьерным консультациям, а также возможность пройти собеседование с партнёрами центра. Программа завершается итоговой аттестацией и выдачей именного сертификата.

",
        'date'    => '2025-06-28'
    ],
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Новости — Учебный центр</title>
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
      <button class="menu-toggle" aria-label="Меню">
        <img src="assets/icons/menu.png" alt="Меню" class="menu-icon">
      </button>
      <ul class="nav-links">
        <li><a href="index.php">Главная</a></li>
        <li><a href="news.php" class="active">Новости</a></li>
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

  <!-- Список новостей -->
  <section class="news-section" style="margin:100px auto 60px; max-width:1200px; padding:0 20px;">
    <h2 style="text-align:center; color:var(--primary-2); margin-bottom:40px;">Новости</h2>
    <div class="news-list">
      <?php foreach ($news as $item): ?>
        <div class="news-item" data-id="<?= $item['id'] ?>"
             style="
               display:flex;
               align-items:flex-start;
               gap:20px;
               background:#fff;
               border-radius:var(--border-radius);
               box-shadow:0 2px 5px rgba(0,0,0,0.1);
               padding:20px;
               margin-bottom:20px;
               cursor:pointer;
               position:relative;
             ">
          <img src="<?= $item['img'] ?>"
               alt="<?= htmlspecialchars($item['title'], ENT_QUOTES) ?>"
               style="
                 width:150px;
                 height:auto;
                 border-radius:var(--border-radius);
                 flex-shrink:0;
               ">
          <div style="flex:1;">
            <h3 style="margin:0 0 10px; color:var(--primary-3);">
              <?= htmlspecialchars($item['title'], ENT_QUOTES) ?>
            </h3>
            <p style="margin:0 0 10px; color:#555;">
              <?= htmlspecialchars($item['excerpt'], ENT_QUOTES) ?>
            </p>
            <span style="font-size:13px; color:var(--primary-3);">
              <?= date("d.m.Y", strtotime($item['date'])) ?>
            </span>
          </div>
          <!-- Спрятанный полный контент -->
          <div class="news-full-content" style="display:none;">
            <img src="<?= $item['img'] ?>"
                 alt="<?= htmlspecialchars($item['title'], ENT_QUOTES) ?>"
                 style="
                   width:100%;
                   height:auto;
                   border-radius:var(--border-radius);
                   margin-bottom:15px;
                 ">
            <h3 style="margin-bottom:15px; color:var(--primary-3);">
              <?= htmlspecialchars($item['title'], ENT_QUOTES) ?>
            </h3>
            <p style="margin-bottom:15px; color:#555; line-height:1.6;">
              <?= nl2br(htmlspecialchars($item['text'], ENT_QUOTES)) ?>
            </p>
            <span style="font-size:13px; color:var(--primary-3);">
              <?= date("d.m.Y", strtotime($item['date'])) ?>
            </span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Оверлей и контейнер модального окна -->
  <div id="news-overlay"
       style="
         display:none;
         position:fixed;
         top:0; left:0;
         width:100%; height:100%;
         background:rgba(0,0,0,0.5);
         z-index:2000;
       "></div>
  <div id="news-modal"
       style="
         display:none;
         position:fixed;
         top:50%; left:50%;
         transform:translate(-50%,-50%);
         background:#fff;
         border-radius:var(--border-radius);
         max-width:90%;
         max-height:90%;
         overflow:auto;
         padding:20px;
         z-index:2001;
       "></div>

  <!-- Подвал -->
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
      const items   = document.querySelectorAll('.news-item');
      const overlay = document.getElementById('news-overlay');
      const modal   = document.getElementById('news-modal');

      items.forEach(item => {
        item.addEventListener('click', () => {
          const full = item.querySelector('.news-full-content').innerHTML;
          modal.innerHTML = full;
          overlay.style.display = 'block';
          modal.style.display   = 'block';
          document.body.style.overflow = 'hidden';
        });
      });

      function closeModal() {
        overlay.style.display = 'none';
        modal.style.display   = 'none';
        modal.innerHTML       = '';
        document.body.style.overflow = '';
      }

      overlay.addEventListener('click', closeModal);
    });
  </script>
</body>
</html>
