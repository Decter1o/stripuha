<?php
$locale = isset($_SESSION['locale']) ? $_SESSION['locale'] : 'kz';
$texts = [
    'kz' => [
        'about' => 'Орталық туралы',
        'structure' => 'Құрылым',
        'leadership' => 'Басшылық',
        'team' => 'Команда',
        'procurement' => 'Сатып алулар',
        'policy' => 'Құпиялылық саясаты',
        'contacts' => 'Байланыс',
        'ministry' => 'Қазақстан Республикасы Ғылым және жоғары білім министрлігі',
        'copyright' => '© 2025 РГП на ПХВ «Ұлттық жоғары білім беру дамыту орталығы» ҒЖБМ РК',
        'visually' => 'Версия для слабовидящих',
    ],
    'ru' => [
        'about' => 'О Центре',
        'structure' => 'Структура',
        'leadership' => 'Руководство',
        'team' => 'Команда',
        'procurement' => 'Закупки',
        'policy' => 'Политика конфиденциальности',
        'contacts' => 'Контакты',
        'ministry' => 'Министерство образования и науки Республики Казахстан',
        'copyright' => '© 2025 РГП на ПХВ «Национальный центр развития высшего образования» МНВО РК',
        'visually' => 'Версия для слабовидящих',
    ],
    'en' => [
        'about' => 'About Center',
        'structure' => 'Structure',
        'leadership' => 'Leadership',
        'team' => 'Team',
        'procurement' => 'Procurement',
        'policy' => 'Privacy Policy',
        'contacts' => 'Contacts',
        'ministry' => 'Ministry of Science and Higher Education of the Republic of Kazakhstan',
        'copyright' => '© 2025 RSE on REM “National Center for Higher Education Development” MSHE RK',
        'visually' => 'Version for visually impaired',
    ],
];
$t = $texts[$locale] ?? $texts['kz'];
?>
<footer x-data="{ highContrast: false }" x-bind:class="{'high-contrast': highContrast}" class="footer-root">
    <div class="footer-container">
        <div class="footer-grid">
            <div class="footer-col">
                <span><?php echo $t['about']; ?></span>
                <a href="#"><?php echo $t['structure']; ?></a>
                <a href="#"><?php echo $t['leadership']; ?></a>
                <a href="#"><?php echo $t['team']; ?></a>
            </div>
            <div class="footer-col">
                <span><?php echo $t['procurement']; ?></span>
                <a href="#"><?php echo $t['procurement']; ?></a>
            </div>
            <div class="footer-col">
                <span><?php echo $t['policy']; ?></span>
                <a href="#"><?php echo $t['policy']; ?></a>
            </div>
            <div class="footer-col">
                <span><?php echo $t['contacts']; ?></span>
                <span class="mb-2"><?php echo $t['ministry']; ?></span>
                <div class="footer-social">
                    <a href="#" aria-label="Instagram">
                        <svg fill="#3B82F6" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><title>Instagram</title><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.242 1.308 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.242 1.246-3.608 1.308-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.242-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608.974-.974 2.242-1.246 3.608-1.308C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.775.13 4.602.402 3.635 1.37 2.668 2.338 2.396 3.511 2.338 4.788.013 8.332 0 8.741 0 12c0 3.259.013 3.668.072 4.948.058 1.277.33 2.45 1.298 3.418.968.968 2.141 1.24 3.418 1.298C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.277-.058 2.45-.33 3.418-1.298.968-.968 1.24-2.141 1.298-3.418.059-1.28.072-1.689.072-4.948 0-3.259-.013-3.668-.072-4.948-.058-1.277-.33-2.45-1.298-3.418-.968-.968-2.141-1.24-3.418-1.298C15.668.013 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/></svg>
                    </a>
                    <a href="#" aria-label="Facebook">
                        <svg fill="#3B82F6" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><title>Facebook</title><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span><?php echo $t['copyright']; ?></span>
            <button x-on:click="highContrast = !highContrast" class="footer-visually-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20" class="text-white"><title>Eye</title><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm7.5 0s-3-7.5-10.5-7.5S2.5 12 2.5 12s3 7.5 10.5 7.5S22.5 12 22.5 12z" /></svg>
                <span><?php echo $t['visually']; ?></span>
            </button>
        </div>
    </div>
</footer>