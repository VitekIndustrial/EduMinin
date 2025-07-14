<?php
// index.php — Главная страница учебного центра
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебный центр — Главная</title>
    <link rel="icon" type="image/png" href="assets/icons/favicon.png">
    <!-- стили -->
    <link rel="stylesheet" href="css/style.css">
    <!-- иконки Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-kuh6GZlN8YYNV3CFyraYszEEiQxhT1VgezjuV3zw+FfLMKktlK6KaO5y+6ZT+0IY68PfQWda+E3bfUhBru7W2g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Верхнее фиксированное меню -->
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

    <!-- Шапка сайта с фоновым изображением -->
    <section class="hero" id="hero">
        <img src="assets/images/hero-bg.jpg" alt="Фон" class="hero-image">
        <div class="hero-content">
            <img src="assets/images/logo.png" alt="Логотип" class="hero-logo">
            <nav class="hero-nav">
                <a href="catalog.php" class="hero-button">Каталог курсов</a>
                <a href="schedule.php" class="hero-button">Расписание</a>
                <a href="centers.php" class="hero-button">Учебные центры</a>
            </nav>
        </div>
    </section>

    <!-- Блок «Преимущества» -->
    <section class="advantages" id="advantages">
        <h2>Наши преимущества</h2>
        <div class="advantages-container">
            <div class="advantage-block">
                <img src="assets/icons/free-schedule.png" alt="Свободный график" class="advantage-icon">
                <h3>Свободный график без дедлайнов</h3>
                <p>Обучение легко совмещать с работой и личной жизнью</p>
            </div>
            <div class="advantage-block">
                <img src="assets/icons/unlimited-access.png" alt="Бессрочный доступ" class="advantage-icon">
                <h3>Бессрочный доступ к курсам и их обновлениям</h3>
                <p>Можно вернуться к занятиям и освежить знания в любой момент</p>
            </div>
            <div class="advantage-block">
                <img src="assets/icons/online-lectures.png" alt="Онлайн-лекции" class="advantage-icon">
                <h3>Доступ к онлайн-лекциям и практическим заданиям</h3>
                <p>Дистанционное обучение с профессионалами</p>
            </div>
        </div>
    </section>

    <!-- Блок «Новости» с горизонтальным скроллом -->
    <section class="news" id="news">
        <h2>Последние новости</h2>
        <div class="news-container">
            <?php
            // В реальности данные можно подгружать из БД
            $news = [
                ['img'=>'assets/images/news1.jpg','title'=>'Новость 1','text'=>'Краткое описание новости 1…'],
                ['img'=>'assets/images/news2.jpg','title'=>'Новость 2','text'=>'Краткое описание новости 2…'],
                ['img'=>'assets/images/news3.jpg','title'=>'Новость 3','text'=>'Краткое описание новости 3…'],
            ];
            foreach ($news as $item): ?>
                <div class="news-item"
                     style="background-image:url('<?= $item['img']?>')">
                    <div class="news-text">
                        <h3><?= $item['title']?></h3>
                        <p><?= $item['text']?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Блок «Направления» -->
    <section class="directions" id="catalog">
        <h2>Наши направления</h2>
        <div class="directions-container">
            <div class="direction-block">
                <img src="assets/icons/1c.png" alt="1С обучение" class="direction-icon">
                <h3>1С обучение</h3>
            </div>
            <div class="direction-block">
                <img src="assets/icons/python.png" alt="Python" class="direction-icon">
                <h3>Python</h3>
            </div>
            <div class="direction-block">
                <img src="assets/icons/cpp_csharp.png" alt="C++/C#" class="direction-icon">
                <h3>C++/C#</h3>
            </div>
        </div>
    </section>

    <!-- Подвал сайта -->
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
            <div class="footer-centers" id="centers">
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

    <!-- скрипты -->
    <script src="js/main.js"></script>
</body>
</html>
