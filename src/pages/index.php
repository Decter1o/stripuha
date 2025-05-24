<!DOCTYPE html>
<?php
require_once 'translations.php';

$lang = isset($_GET['lang']) && array_key_exists($_GET['lang'], $texts) ? $_GET['lang'] : 'kz';
$t = $texts[$lang];

$breadcrumbs = []; // Assuming breadcrumbs are not used on the index page, or need to be defined here

$news = [
    ['date' => 'date1', 'title' => 'news1', 'img' => 'news1.webp', 'desc' => ''],
    ['date' => 'date2', 'title' => 'news2', 'img' => 'news2.webp', 'desc' => ''],
    ['date' => 'date3', 'title' => 'news3', 'img' => 'news3.webp', 'desc' => ''],
    ['date' => 'date4', 'title' => 'news4', 'img' => 'news4.webp', 'desc' => ''],
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" x-data="mainPage()" x-init="init()" :class="{'high-contrast': highContrast, 'font-large': fontLarge}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        function mainPage() {
            return {
                lang: 'kz',
                highContrast: false,
                fontLarge: false,
                translations: {
                    kz: {
                        title: 'Ұлттық жоғары білім беру дамыту орталығы',
                        bannerTitle: 'ҰЛТТЫҚ ЖОҒАРЫ БІЛІМ БЕРУ ДАМЫТУ ОРТАЛЫҒЫ',
                        bannerSubtitle: 'РМК "Ұлттық жоғары білім беру дамыту орталығы" ҚР ҒЖБМ',
                        egov: 'EGOV',
                        info: 'АҚПАРАТ',
                        news: 'ЖАҢАЛЫҚТАР',
                        allNews: 'Барлық жаңалықтар',
                        exhibition: 'КӨРМЕДЕ: "УЧУСЬ ЗАМКА" жобасы',
                        exhibitionDesc: 'Бұл жерде көрмеден алынған фотосурет пен қысқаша сипаттама болады.',
                        more: 'Толығырақ',
                        visually: 'Көру қабілеті төмендерге арналған нұсқа',
                        fontInc: 'Үлкейту',
                        fontDec: 'Кішірейту',
                        date1: '21 НАУ 2025',
                        news1: 'Қазақстан Санкт-Петербургтегі "ВЕЧЕ ВЫСШЕЕ 2025" Ассамблеясына қатысты.',
                        date2: '21 НАУ 2025',
                        news2: 'Астанада ENIC және NCK-мен бірге Болон процесі бойынша семинарлар өтті.',
                        date3: '21 НАУ 2025',
                        news3: 'Астанада ENIC және NCK-мен бірге Болон процесі бойынша семинарлар өтті.',
                        date4: '21 НАУ 2025',
                        news4: 'Халықаралық "МЫСЛЫШКИ" олимпиадасының кезекті жеңімпаздары.'
                    },
                    ru: {
                        title: 'Национальный центр развития высшего образования',
                        bannerTitle: 'НАЦИОНАЛЬНЫЙ ЦЕНТР РАЗВИТИЯ ВЫСШЕГО ОБРАЗОВАНИЯ',
                        bannerSubtitle: 'РГП на ПХВ “Национальный центр развития высшего образования” МНВО РК',
                        egov: 'EGOV',
                        info: 'ИНФОРМАЦИЯ',
                        news: 'НОВОСТИ',
                        allNews: 'ВСЕ НОВОСТИ',
                        exhibition: 'На ВЫСТАВКЕ: проект “УЧУСЬ ЗАМКА”',
                        exhibitionDesc: 'Здесь будет фото с выставки и краткое описание.',
                        more: 'Подробнее',
                        visually: 'Версия для слабовидящих',
                        fontInc: 'Увеличить',
                        fontDec: 'Уменьшить',
                        date1: '21 МАР 2025',
                        news1: 'Казахстан принял участие в Ассамблее “ВЕЧЕ ВЫСШЕЕ 2025” в Санкт-Петербурге.',
                        date2: '21 МАР 2025',
                        news2: 'В Астане прошли семинары по Болонскому процессу совместно с ENIC и NCK.',
                        date3: '21 МАР 2025',
                        news3: 'В Астане прошли семинары по Болонскому процессу совместно с ENIC и NCK.',
                        date4: '21 МАР 2025',
                        news4: 'Очередные победители международной олимпиады “МЫСЛЫШКИ”.'
                    },
                    en: {
                        title: 'National Center for Higher Education Development',
                        bannerTitle: 'NATIONAL CENTER FOR HIGHER EDUCATION DEVELOPMENT',
                        bannerSubtitle: 'RSE on REM “National Center for Higher Education Development” MSHE RK',
                        egov: 'EGOV',
                        info: 'INFORMATION',
                        news: 'NEWS',
                        allNews: 'ALL NEWS',
                        exhibition: 'AT THE EXHIBITION: “UCHUS ZAMKA” project',
                        exhibitionDesc: 'Here will be a photo from the exhibition and a short description.',
                        more: 'Read more',
                        visually: 'Version for visually impaired',
                        fontInc: 'Increase',
                        fontDec: 'Decrease',
                        date1: '21 MAR 2025',
                        news1: 'Kazakhstan participated in the “VECHE VYSSHEE 2025” Assembly in St. Petersburg.',
                        date2: '21 MAR 2025',
                        news2: 'Seminars on the Bologna Process were held in Astana together with ENIC and NCK.',
                        date3: '21 MAR 2025',
                        news3: 'Seminars on the Bologna Process were held in Astana together with ENIC and NCK.',
                        date4: '21 MAR 2025',
                        news4: 'Winners of the international “MYSLYSHKI” olympiad.'
                    }
                },
                t(key) { return this.translations[this.lang][key] || key },
                setLang(l) { this.lang = l },
                toggleContrast() { this.highContrast = !this.highContrast },
                fontInc() { this.fontLarge = true },
                fontDec() { this.fontLarge = false },
                init() {
                    this.lang = 'kz';
                }
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .high-contrast { background: #fff !important; color: #000 !important; }
        .font-large { font-size: 18px !important; }
        .btn { transition: filter 0.2s; }
        .btn:hover { filter: brightness(0.9); }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'header.php'; ?>
<body class="bg-gray-50 font-['Roboto']">
    <?php include 'header.php'; ?>
    <!-- Языковой переключатель и доступность -->
    <div class="flex justify-end items-center gap-2 p-4">
        <button class="px-2 py-1 rounded text-sm font-bold" :class="{'underline': lang==='kz'}" @click="setLang('kz')">KZ</button>
        <button class="px-2 py-1 rounded text-sm font-bold" :class="{'underline': lang==='ru'}" @click="setLang('ru')">RU</button>
        <button class="px-2 py-1 rounded text-sm font-bold" :class="{'underline': lang==='en'}" @click="setLang('en')">EN</button>
        <button class="ml-4 btn border border-blue-700 text-blue-700 px-3 py-1 rounded" @click="toggleContrast()" x-text="t('visually')"><?php echo $t['visually']; ?></button>
        <button class="ml-2 btn border border-blue-700 text-blue-700 px-2 py-1 rounded" @click="fontInc()" x-text="t('fontInc')"><?php echo $t['fontInc']; ?></button>
        <button class="btn border border-blue-700 text-blue-700 px-2 py-1 rounded" @click="fontDec()" x-text="t('fontDec')"><?php echo $t['fontDec']; ?></button>
    </div>
    <!-- Баннер -->
    <section class="w-full bg-blue-900 min-h-[400px] flex flex-col md:flex-row items-center justify-between px-6 md:px-16 py-10 md:py-0">
        <div class="flex-1 flex flex-col justify-center items-start gap-6">
            <h1 class="text-white text-2xl md:text-4xl font-bold"><?php echo $t['bannerTitle']; ?></h1>
            <p class="text-white text-base md:text-lg"><?php echo $t['bannerSubtitle']; ?></p>
            <div class="flex gap-4 mt-4">
                <a href="#" class="btn bg-blue-500 text-white px-6 py-2 rounded font-bold shadow hover:shadow-lg"><?php echo $t['egov']; ?></a>
                <a href="#" class="btn bg-orange-500 text-white px-6 py-2 rounded font-bold shadow hover:shadow-lg"><?php echo $t['info']; ?></a>
            </div>
        </div>
        <div class="flex-1 flex justify-center items-center mt-8 md:mt-0">
            <!-- SVG-заглушка иллюстрации -->
            <svg width="320" height="220" viewBox="0 0 320 220" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Иллюстрация персонажей на карте Казахстана">
                <rect x="10" y="60" width="300" height="120" rx="40" fill="#FDE68A"/>
                <ellipse cx="80" cy="140" rx="30" ry="40" fill="#3B82F6"/>
                <ellipse cx="240" cy="140" rx="30" ry="40" fill="#F97316"/>
                <circle cx="80" cy="120" r="18" fill="#fff"/>
                <circle cx="240" cy="120" r="18" fill="#fff"/>
                <rect x="70" y="160" width="20" height="30" rx="8" fill="#fff"/>
                <rect x="230" y="160" width="20" height="30" rx="8" fill="#fff"/>
                <!-- Иконки чата -->
                <circle cx="160" cy="100" r="16" fill="#FACC15"/>
                <rect x="150" y="90" width="20" height="10" rx="3" fill="#fff"/>
            </svg>
        </div>
    </section>
    <!-- Основной контент -->
    <main class="max-w-7xl mx-auto px-4 md:px-8 py-10 flex flex-col lg:flex-row gap-8">
        <!-- Новости -->
        <section class="flex-1">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-blue-900 text-xl md:text-2xl font-bold"><?php echo $t['news']; ?></h2>
                <a href="#" class="btn bg-blue-500 text-white px-4 py-2 rounded font-bold hover:shadow-lg"><?php echo $t['allNews']; ?></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                    $news = [
                        ['date' => 'date1', 'title' => 'news1', 'img' => 'news1.webp', 'desc' => ''],
                        ['date' => 'date2', 'title' => 'news2', 'img' => 'news2.webp', 'desc' => ''],
                        ['date' => 'date3', 'title' => 'news3', 'img' => 'news3.webp', 'desc' => ''],
                        ['date' => 'date4', 'title' => 'news4', 'img' => 'news4.webp', 'desc' => ''],
                    ];
                ?>
                <?php foreach($news as $item): ?>
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    <picture>
                        <source srcset="/images/<?php echo $item['img']; ?>" type="image/webp">
                        <img src="/images/<?php echo str_replace('.webp', '.jpg', $item['img']); ?>" alt="Новость" class="w-full h-36 object-cover" loading="lazy">
                    </picture>
                    <div class="p-4 flex-1 flex flex-col">
                        <span class="text-xs text-gray-500 mb-2" x-text="t('<?php echo $item['date']; ?>')"><?php echo $t[$item['date']]; ?></span>
                        <h3 class="text-blue-900 font-bold text-base mb-2" x-text="t('<?php echo $item['title']; ?>')"><?php echo $t[$item['title']]; ?></h3>
                        <p class="text-black text-sm"><?php echo $item['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- Правая секция -->
        <aside class="w-full lg:w-80 flex-shrink-0">
            <div class="bg-white rounded-lg shadow p-6 flex flex-col gap-4">
                <h3 class="text-blue-900 text-lg md:text-xl font-bold"><?php echo $t['exhibition']; ?></h3>
                <picture>
                    <source srcset="/images/exhibition.webp" type="image/webp">
                    <img src="/images/exhibition.jpg" alt="Фото с выставки" class="w-full h-40 object-cover rounded" loading="lazy">
                </picture>
                <p class="text-black text-sm"><?php echo $t['exhibitionDesc']; ?></p>
                <a href="#" class="btn bg-blue-500 text-white px-4 py-2 rounded font-bold hover:shadow-lg self-start"><?php echo $t['more']; ?></a>
            </div>
        </aside>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>