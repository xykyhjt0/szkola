<?php
// config.php - Konfiguracja strony szkoły "Szkoła na Starówce"

// Ustawienia strony
define('SITE_NAME', 'Szkoła na Starówce');
define('SITE_URL', 'http://localhost/szkola-starowka');
define('SITE_EMAIL', 'szkoly@zdz.edu.pl');

// Dane kontaktowe szkoły
$school_info = [
    'name' => 'Szkoła na Starówce',
    'full_name' => 'Niepubliczne Technikum Usługowe i Liceum Ogólnokształcące',
    'address' => 'ul. Podwale 13, 00-252 Warszawa',
    'phone' => ['+48 786 982 711', '+48 22 831 74 30', '+48 22 831 00 81 w. 118'],
    'email' => 'szkoly@zdz.edu.pl',
    'director' => 'mgr Anna Kowalska'
];

// Menu główne - ZMIANA: dodane Oferta z podmenu
$main_menu = [
    'Strona główna' => '/',
    'Oferta' => [
        'Technikum' => 'technikum.php',
        'Liceum' => 'liceum.php',
    ],
    'Aktualności' => 'aktualnosci.php',
    'O szkole' => 'o-szkole.php',
    'Uczniowie i rodzice' => 'uczniowie-i-rodzice.php',
    'Rekrutacja' => 'rekrutacja.php',
    'Projekty i współpraca' => 'projekty-i-wspolpraca.php',
    'Kontakt' => 'kontakt.php'
];

// Technikum - kierunki
$technikum_kierunki = [
    'Technik usług fryzjerskich – kosmetyka' => [
        'opis' => 'Kształcenie w zakresie usług fryzjerskich i kosmetycznych z elementami barberingu i stylizacji.',
        'specjalizacja' => '',
        'icon' => 'fas fa-cut',
        'czas' => '5 lat',
        'przedmioty' => ['Technologia fryzjerstwa', 'Stylizacja', 'Kosmetyka', 'Wizaż']
    ],
    'Technik żywienia i usług gastronomicznych – dietetyka' => [
        'opis' => 'Nowoczesne techniki żywienia z elementami dietetyki i cateringu dietetycznego.',
        'specjalizacja' => '',
        'icon' => 'fas fa-utensils',
        'czas' => '5 lat',
        'przedmioty' => ['Technologia gastronomiczna', 'Dietetyka', 'Zasady żywienia', 'BHP w gastronomii']
    ],
    'Technik realizacji nagrań' => [
        'opis' => 'Profesjonalne studio nagraniowe, montaż dźwięku i produkcja muzyczna.',
        'specjalizacja' => '',
        'icon' => 'fas fa-microphone',
        'czas' => '5 lat',
        'przedmioty' => ['Reżyseria dźwięku', 'Montaż audio', 'Akcja teatralna', 'Realizacja nagrań']
    ],
    'Technik realizacji nagłośnień' => [
        'opis' => 'Technika nagłaśniania, oświetlenia scenicznego i realizacji widowisk.',
        'specjalizacja' => '',
        'icon' => 'fas fa-volume-up',
        'czas' => '5 lat',
        'przedmioty' => ['Nagłośnienie', 'Oświetlenie', 'Akcja teatralna', 'Realizacja widowisk']
    ],
    'Technik informatyk' => [
        'opis' => 'Nowoczesne technologie IT, programowanie, sieci komputerowe i cyberbezpieczeństwo.',
        'specjalizacja' => '',
        'icon' => 'fas fa-laptop-code',
        'czas' => '5 lat',
        'przedmioty' => ['Programowanie', 'Sieci komputerowe', 'Bazy danych', 'Grafika komputerowa']
    ],
    'Technik programista' => [
        'opis' => 'Tworzenie aplikacji webowych, mobilnych, systemów informatycznych i gier.',
        'specjalizacja' => '',
        'icon' => 'fas fa-code',
        'czas' => '5 lat',
        'przedmioty' => ['Programowanie', 'Algorytmy', 'Bazy danych', 'Projektowanie aplikacji']
    ]
];

// Liceum - profile

$liceum_profile = [
    'Klasa pedagogiczno-psychologiczna' => [
        'opis' => 'Profil dla uczniów zainteresowanych psychologią, pedagogiką, rozwojem człowieka oraz naukami społecznymi.',
        'specjalizacja' => 'przygotowanie do studiów pedagogicznych i psychologicznych',
        'icon' => 'fas fa-brain',
        'czas' => '4 lata',
        'rozszerzenia' => [
            'Język polski' => 'rozszerzony',
            'Biologia' => 'rozszerzony',
            'WOS' => 'rozszerzony',
            'Język angielski' => 'rozszerzony'
        ],
        'kierunki_studiow' => [
            'Psychologia',
            'Pedagogika',
            'Pedagogika specjalna',
            'Socjologia',
            'Resocjalizacja',
            'Praca socjalna'
        ]
    ],
        
    'Klasa społeczno-turystyczna' => [
        'opis' => 'Profil dla uczniów zainteresowanych geografią, turystyką, społeczeństwem oraz organizacją podróży i wydarzeń.',
        'specjalizacja' => 'przygotowanie do studiów społecznych i turystycznych',
        'icon' => 'fas fa-globe-europe',
        'czas' => '4 lata',
        'rozszerzenia' => [
            'Geografia' => 'rozszerzony',
            'WOS' => 'rozszerzony',
            'Język angielski' => 'rozszerzony',
            'Język obcy drugi' => 'rozszerzony'
        ],
        'kierunki_studiow' => [
            'Turystyka i rekreacja',
            'Geografia',
            'Gospodarka przestrzenna',
            'Stosunki międzynarodowe',
            'Zarządzanie',
            'Logistyka'
        ]
    ],
  
    'Klasa artystyczna' => [
        'opis' => 'Profil dla uczniów uzdolnionych artystycznie, zainteresowanych sztuką, kulturą i projektowaniem.',
        'specjalizacja' => 'sztuka, projektowanie i kultura',
        'icon' => 'fas fa-palette',
        'czas' => '4 lata',
        'rozszerzenia' => [
            'Język polski' => 'rozszerzony',
            'Historia sztuki' => 'rozszerzony',
            'Język angielski' => 'rozszerzony',
            'Plastyka / zajęcia artystyczne' => 'rozszerzony'
        ],
        'kierunki_studiow' => [
            'Grafika',
            'Architektura wnętrz',
            'Projektowanie graficzne',
            'Malarstwo',
            'Kulturoznawstwo',
            'Filmoznawstwo'
        ]
    ]
];


// Aktualności
$aktualnosci = [
    [
        'id' => 1,
        'title' => '✨ Nasza wizyta w Sii Polska ✨',
        'date' => '27.11.2025',
        'content' => 'W dniu 27.11.2025 r. mieliśmy okazję odwiedzić firmę Sii Polska i był to jeden z tych dni, które na długo zostają w pamięci.',
        'category' => 'Wydarzenia',
        'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'full_content' => 'Pełna treść artykułu o wizycie w Sii Polska...'
    ]
];

// Funkcja generująca nagłówek
function generateHeader($title = '', $hero_image = '', $page_class = '') {
    global $main_menu, $school_info;
    
    if (empty($title)) {
        $title = SITE_NAME;
    } else {
        $title = $title . ' | ' . SITE_NAME;
    }
    
    if (empty($hero_image)) {
        $hero_image = 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80';
    }
    
    $current_page = basename($_SERVER['PHP_SELF']);
    
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($title); ?></title>
        <meta name="description" content="Szkoła na Starówce - nowoczesna szkoła techniczna w centrum Warszawy">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            :root {
                --primary-color: #0d47a1;
                --secondary-color: #ff6b00;
                --accent-color: #00acc1;
                --light-color: #f8f9fa;
                --dark-color: #212529;
                --gray-color: #6c757d;
                --light-blue: #e3f2fd;
                --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
                --shadow-md: 0 4px 12px rgba(0,0,0,0.12);
                --shadow-lg: 0 8px 24px rgba(0,0,0,0.15);
                --radius-sm: 8px;
                --radius-md: 12px;
                --radius-lg: 16px;
                --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Poppins', sans-serif;
                line-height: 1.7;
                color: var(--dark-color);
                background-color: #ffffff;
                overflow-x: hidden;
            }
            
            h1, h2, h3, h4, h5 {
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                line-height: 1.3;
            }
            
            .container {
                width: 100%;
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 20px;
            }
            
            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                padding: 12px 28px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 600;
                font-size: 16px;
                text-decoration: none;
                border-radius: var(--radius-md);
                transition: var(--transition);
                cursor: pointer;
                border: none;
                position: relative;
                overflow: hidden;
                z-index: 1;
            }
            
            .btn-primary {
                background: linear-gradient(135deg, var(--primary-color), #1565c0);
                color: white;
                box-shadow: 0 4px 12px rgba(13, 71, 161, 0.25);
            }
            
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(13, 71, 161, 0.35);
            }
            
            .btn-secondary {
                background: linear-gradient(135deg, var(--secondary-color), #ff8a00);
                color: white;
                box-shadow: 0 4px 12px rgba(255, 107, 0, 0.25);
            }
            
            .btn-secondary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(255, 107, 0, 0.35);
            }
            
            .btn-outline {
                background: transparent;
                color: var(--primary-color);
                border: 2px solid var(--primary-color);
            }
            
            .btn-outline:hover {
                background: var(--primary-color);
                color: white;
            }
            
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            
            .animate-fade-in {
                animation: fadeIn 0.8s ease-out;
            }
            
            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                    max-height: 0;
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                    max-height: 500px;
                }
            }
            
            @keyframes slideUp {
                from {
                    opacity: 1;
                    transform: translateY(0);
                    max-height: 500px;
                }
                to {
                    opacity: 0;
                    transform: translateY(-10px);
                    max-height: 0;
                }
            }
            
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            
            @keyframes pageFadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .fa-spin {
                animation: spin 1s linear infinite;
            }
            
            body > *:not(header):not(footer) {
                animation: pageFadeIn 0.6s ease-out;
            }
            
            .section {
                padding: 80px 0;
                position: relative;
            }
            
            .section-title {
                text-align: center;
                margin-bottom: 50px;
                position: relative;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
                color: var(--dark-color);
                margin-bottom: 15px;
                display: inline-block;
            }
            
            .section-title p {
                font-size: 1.1rem;
                color: var(--gray-color);
                max-width: 700px;
                margin: 0 auto;
            }
            
            .section-title::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 80px;
                height: 4px;
                background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                border-radius: 2px;
            }
            
            .card {
                background: white;
                border-radius: var(--radius-lg);
                overflow: hidden;
                box-shadow: var(--shadow-md);
                transition: var(--transition);
                height: 100%;
            }
            
            .card:hover {
                transform: translateY(-10px);
                box-shadow: var(--shadow-lg);
            }
            
            .grid {
                display: grid;
                gap: 30px;
            }
            
            .grid-2 {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            
            .grid-3 {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            
            .grid-4 {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            /* Menu styles */
            .dropdown {
                position: relative;
            }
            
            .dropdown-content {
                position: absolute;
                top: 100%;
                left: 0;
                background: white;
                box-shadow: var(--shadow-lg);
                border-radius: var(--radius-md);
                padding: 10px 0;
                min-width: 200px;
                display: none;
                z-index: 1000;
                overflow: hidden;
                animation: slideDown 0.3s ease-out forwards;
            }
            
            .dropdown-content.show {
                display: block;
                animation: slideDown 0.3s ease-out forwards;
            }
            
            .dropdown-content.hide {
                animation: slideUp 0.3s ease-out forwards;
                pointer-events: none;
            }
            
            /* Strzałka dla dropdown */
            .dropdown-toggle {
                position: relative;
                padding-right: 30px !important;
            }
            
            .dropdown-toggle::after {
                content: '';
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                width: 0;
                height: 0;
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
                border-top: 5px solid currentColor;
                transition: transform 0.3s ease;
            }
            
            .dropdown-toggle.active::after {
                transform: translateY(-50%) rotate(180deg);
            }
            
            /* Hover efekty */
            .menu-item {
                padding: 12px 18px;
                text-decoration: none;
                color: var(--dark-color);
                font-weight: 500;
                border-radius: var(--radius-sm);
                transition: var(--transition);
                position: relative;
                white-space: nowrap;
                display: flex;
                align-items: center;
                gap: 8px;
            }
            
            .menu-item:hover {
                background: var(--light-blue);
                color: var(--primary-color);
            }
            
            .menu-item.active {
                color: var(--primary-color);
            }
            
            .active-indicator {
                position: absolute;
                bottom: 5px;
                left: 50%;
                transform: translateX(-50%);
                width: 20px;
                height: 3px;
                background: var(--secondary-color);
                border-radius: 2px;
            }
            
            /* Płynne przejścia dla dropdown items */
            .dropdown-item {
                display: flex;
                align-items: center;
                padding: 12px 20px;
                text-decoration: none;
                color: var(--dark-color);
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                position: relative;
                overflow: hidden;
            }
            
            .dropdown-item::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                width: 3px;
                background: var(--secondary-color);
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .dropdown-item:hover::before {
                transform: translateX(0);
            }
            
            .dropdown-item:hover {
                background: linear-gradient(90deg, rgba(13, 71, 161, 0.05), transparent);
                padding-left: 25px;
                transform: translateX(5px);
            }
            
            .dropdown-item.active {
                background: var(--light-blue);
                color: var(--primary-color);
                font-weight: 600;
            }
            
            .dropdown-item.active::before {
                transform: translateX(0);
            }
            
            /* Mobile menu improvements */
            .mobile-menu {
                background: white;
                box-shadow: var(--shadow-md);
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                display: none !important;
                padding: 20px;
                transform: translateX(-100%);
                transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1);
                overflow-y: auto;
            }
            
            .mobile-menu.open {
                transform: translateX(0);
                display: block !important;
            }
            
            .mobile-menu-overlay {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 9998;
                opacity: 0;
                display: none !important;
                visibility: hidden;
                transition: all 0.3s ease;
            }
            
            .mobile-menu-overlay.active {
                opacity: 1;
                visibility: visible;
                display: block !important;
            }
            .mobile-menu-toggle {
                display: none !important;
            }
            /* Close button */
            .mobile-menu-close {
                position: absolute;
                top: 20px;
                right: 20px;
                background: none;
                border: none;
                font-size: 24px;
                color: var(--primary-color);
                cursor: pointer;
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: var(--transition);
            }
            
            .mobile-menu-close:hover {
                background: var(--light-blue);
            }
            
            /* Mobile dropdown */
            .mobile-dropdown .dropdown-content {
                position: static;
                box-shadow: none;
                padding: 0;
                padding-left: 20px;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease-out;
                animation: none !important;
            }
            
            .mobile-dropdown.active .dropdown-content {
                max-height: 500px;
            }
            
            .mobile-menu-item {
                display: block;
                padding: 15px 0;
                text-decoration: none;
                color: var(--dark-color);
                border-bottom: 1px solid #eee;
                font-weight: 500;
                transition: var(--transition);
            }
            
            .mobile-menu-item:hover {
                color: var(--primary-color);
            }
            
            /* Responsywność */
            @media (max-width: 1200px) {
                .container {
                    max-width: 1140px;
                }
            }
            
            @media (max-width: 992px) {
                .container {
                    max-width: 960px;
                }
                .mobile-menu-toggle {
                    display: block !important;
                }
                .section {
                    padding: 60px 0;
                }
                
                .section-title h2 {
                    font-size: 2rem;
                }
                
                .dropdown-content {
                    position: static;
                    box-shadow: none;
                    display: none;
                    padding-left: 20px;
                }
                .desktop-menu {
                    display: none !important;
                }
                .dropdown.active .dropdown-content {
                    display: block;
                }
            }
            
            @media (max-width: 768px) {
                .container {
                    max-width: 720px;
                }
                
                .grid-3, .grid-4 {
                    grid-template-columns: 1fr;
                }
                
                .section {
                    padding: 40px 0;
                }
                
                .section-title h2 {
                    font-size: 1.8rem;
                }
            }
            
            @media (max-width: 576px) {
                .container {
                    padding: 0 15px;
                }
                
                .btn {
                    padding: 10px 20px;
                    font-size: 14px;
                }
            }
            @media (max-width: 992px) {

    /* ❌ полностью отключаем desktop dropdown */
    .desktop-menu .dropdown-content {
        display: none !important;
    }

    /* ✅ mobile menu — всегда в пределах экрана */
    .mobile-menu {
        width: 100vw;
        max-width: 100vw;
        overflow-x: hidden;
    }

    .mobile-menu .container {
        width: 100%;
        max-width: 100%;
        padding-left: 20px;
        padding-right: 20px;
    }

    /* ✅ mobile dropdown — нормальная логика */
    .mobile-dropdown .dropdown-content {
        position: relative;
        display: block;
        max-height: 0;
        overflow: hidden;
        padding-left: 16px;
        transition: max-height 0.35s ease;
        box-shadow: none;
        background: transparent;
    }

    .mobile-dropdown.active .dropdown-content {
        max-height: 500px;
    }

    /* ❌ никакие transform не вылазят */
    .mobile-menu * {
        transform: none !important;
        max-width: 100%;
    }

    /* стрелка Oferta */
    .mobile-dropdown-toggle i {
        transition: transform 0.3s ease;
    }

    .mobile-dropdown.active .mobile-dropdown-toggle i {
        transform: rotate(180deg);
    }
}
        </style>
    </head>
    <body class="<?php echo $page_class; ?>">
        <!-- Top Bar -->
        <div class="top-bar" style="background: var(--dark-color); color: white; padding: 10px 0; font-size: 0.9rem;">
            <div class="container">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 30px; flex-wrap: wrap;">
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <i class="fas fa-phone" style="color: var(--secondary-color);"></i>
                            <?php foreach($school_info['phone'] as $phone): ?>
                                <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone); ?>" style="color: white; text-decoration: none; margin-right: 15px;"><?php echo $phone; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <i class="fas fa-envelope" style="color: var(--secondary-color);"></i>
                            <a href="mailto:<?php echo $school_info['email']; ?>" style="color: white; text-decoration: none;"><?php echo $school_info['email']; ?></a>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <a href="https://www.facebook.com/SzkolaNaStarowce" style="color: white; font-size: 18px;"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCtvrn3uKhRskxbZjAldRYHA" style="color: white; font-size: 18px;"><i class="fab fa-youtube"></i></a>
                        <div style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-calendar-alt" style="color: var(--secondary-color);"></i>
                            <span><?php echo date('d.m.Y'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Główny nagłówek -->
        <header class="main-header" style="background: white; box-shadow: var(--shadow-sm); position: sticky; top: 0; z-index: 1000;">
            <div class="container">
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0;">
                    <!-- Logo -->
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <a href="/" style="display: flex; align-items: center; text-decoration: none;">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-right: 15px;">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h1 style="font-size: 1.8rem; color: var(--primary-color); margin: 0; line-height: 1.2;">Szkoła na Starówce</h1>
                                <p style="font-size: 0.9rem; color: var(--gray-color); margin: 0;"><?php echo $school_info['full_name']; ?></p>
                            </div>
                        </a>

                    </div>
                    
                    <!-- Menu desktop -->
                    <nav class="desktop-menu" style="display: flex; align-items: center; gap: 5px;">
                        <?php 
                        $menu_display = [
                            'Strona główna' => '/',
                            'Oferta' => [
                                'Technikum' => 'technikum.php',
                                'Liceum' => 'liceum.php',
                            ],
                            'Rekrutacja' => 'rekrutacja.php',
                            'Kontakt' => 'kontakt.php'
                        ];
                        
                        foreach($menu_display as $label => $url_or_array):
                            if(is_array($url_or_array)):
                                $is_active = false;
                                foreach($url_or_array as $sub_label => $sub_url) {
                                    if($current_page == $sub_url) {
                                        $is_active = true;
                                        break;
                                    }
                                }
                        ?>
                                <div class="dropdown" data-dropdown>
                                    <a href="javascript:void(0)" class="menu-item dropdown-toggle <?php echo $is_active ? 'active' : ''; ?>" data-dropdown-toggle>
                                        <?php echo $label; ?>
                                        <?php if($is_active): ?>
                                            <span class="active-indicator"></span>
                                        <?php endif; ?>
                                    </a>
                                    <div class="dropdown-content">
                                        <?php foreach($url_or_array as $sub_label => $sub_url): ?>
                                            <a href="<?php echo $sub_url; ?>" class="dropdown-item <?php echo ($current_page == $sub_url) ? 'active' : ''; ?>">
                                                <i class="fas fa-arrow-right" style="margin-right: 8px; font-size: 0.8rem;"></i>
                                                <?php echo $sub_label; ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php else: 
                                $active = ($current_page == $url_or_array) ? 'active' : '';
                            ?>
                                <a href="<?php echo $url_or_array; ?>" class="menu-item <?php echo $active; ?>">
                                    <?php echo $label; ?>
                                    <?php if($active): ?>
                                        <span class="active-indicator"></span>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        
                        <!-- Przycisk więcej z dropdown -->
                        <div class="dropdown" data-dropdown>
                            <button class="btn btn-outline dropdown-toggle" data-dropdown-toggle style="padding: 10px 20px; display: flex; align-items: center; gap: 8px;">
                                Więcej 
                            </button>
                            <div class="dropdown-content" style="right: 0; left: auto;">
                                <?php 
                                $more_items = [
                                    'Aktualności' => 'aktualnosci.php',
                                    'O szkole' => 'o-szkole.php',
                                    'Uczniowie i rodzice' => 'uczniowie-i-rodzice.php',
                                    'Projekty i współpraca' => 'projekty-i-wspolpraca.php'
                                ];
                                
                                foreach($more_items as $label => $url):
                                    $active = ($current_page == $url) ? 'active' : '';
                                ?>
                                    <a href="<?php echo $url; ?>" class="dropdown-item <?php echo $active; ?>">
                                        <i class="fas fa-arrow-right" style="margin-right: 8px; font-size: 0.8rem;"></i>
                                        <?php echo $label; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </nav>
                    
                    <!-- Menu mobile toggle -->
                    <button class="mobile-menu-toggle" style="display: none; background: none; border: none; font-size: 24px; color: var(--primary-color); cursor: pointer;">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </header>
        
        <!-- Overlay dla mobile menu -->
        <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
        
        <!-- Menu mobile -->
        <div class="mobile-menu" id="mobileMenu">
            <button class="mobile-menu-close" id="mobileMenuClose">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="container" style="padding-top: 60px;">
                <?php 
                function renderMobileMenu($menu_items) {
                    foreach($menu_items as $label => $url_or_array):
                        if(is_array($url_or_array)):
                ?>
                            <div class="mobile-dropdown">
                                <a href="javascript:void(0)" class="mobile-menu-item mobile-dropdown-toggle" style="display: block; padding: 15px 0; text-decoration: none; color: var(--dark-color); border-bottom: 1px solid #eee; font-weight: 500; display: flex; justify-content: space-between; align-items: center; position: relative;">
                                    <span><?php echo $label; ?></span>
                                    <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                                </a>
                                <div class="dropdown-content">
                                    <?php foreach($url_or_array as $sub_label => $sub_url): ?>
                                        <a href="<?php echo $sub_url; ?>" class="mobile-menu-item" style="display: block; padding: 12px 0; text-decoration: none; color: var(--dark-color); font-size: 0.9rem; border-bottom: 1px solid #f5f5f5;">
                                            <i class="fas fa-angle-right" style="margin-right: 10px; color: var(--secondary-color);"></i>
                                            <?php echo $sub_label; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo $url_or_array; ?>" class="mobile-menu-item" style="display: block; padding: 15px 0; text-decoration: none; color: var(--dark-color); border-bottom: 1px solid #eee; font-weight: 500;">
                                <?php echo $label; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; 
                }
                renderMobileMenu($main_menu);
                ?>
                
                <!-- Informacje kontaktowe w mobile menu -->
                <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
                    <div style="margin-bottom: 15px;">
                        <i class="fas fa-phone" style="color: var(--secondary-color); margin-right: 10px;"></i>
                        <a href="tel:+48786982711" style="color: var(--primary-color); text-decoration: none;">+48 786 982 711</a>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <i class="fas fa-envelope" style="color: var(--secondary-color); margin-right: 10px;"></i>
                        <a href="mailto:szkoly@zdz.edu.pl" style="color: var(--primary-color); text-decoration: none;">szkoly@zdz.edu.pl</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hero section dla stron głównych -->
        <?php if(in_array($current_page, ['index.php', 'technikum.php', 'liceum.php'])): ?>
        <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?php echo $hero_image; ?>'); background-size: cover; background-position: center; color: white; padding: 120px 0; text-align: center; position: relative; overflow: hidden;">
            <div class="container">
                <div class="animate-fade-in">
                    <?php if($current_page == 'index.php'): ?>
                        <h1 style="font-size: 3.5rem; margin-bottom: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Szkoła na Starówce</h1>
                        <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto 40px; opacity: 0.9;">Nowoczesne kształcenie w zawodach przyszłości w sercu Warszawy</p>
                        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                            <a href="technikum.php" class="btn btn-secondary">Technikum</a>
                            <a href="liceum.php" class="btn btn-secondary">Liceum Ogólnokształcące</a>
                            <a href="rekrutacja.php" class="btn btn-primary">Zapisz się online</a>
                        </div>
                    
                    <?php elseif($current_page == 'technikum.php'): ?>
                        <h1 style="font-size: 3.5rem; margin-bottom: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Technikum</h1>
                        <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto 40px; opacity: 0.9;">Nowoczesne kierunki techniczne z przyszłością</p>
                        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                            <a href="rekrutacja.php" class="btn btn-primary">Zapisz się online</a>
                            <a href="#kierunki" class="btn btn-secondary">Zobacz kierunki</a>
                        </div>
                    <?php elseif($current_page == 'liceum.php'): ?>
                        <h1 style="font-size: 3.5rem; margin-bottom: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Liceum Ogólnokształcące</h1>
                        <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto 40px; opacity: 0.9;">Profesjonalne przygotowanie do matury i studiów</p>
                        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                            <a href="rekrutacja.php" class="btn btn-primary">Zapisz się online</a>
                            <a href="#profile" class="btn btn-secondary">Zobacz profile</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <main>
    <?php
    return ob_get_clean();
}

// Funkcja generująca stopkę
function generateFooter() {
    global $school_info;
    
    ob_start();
    ?>
        </main>
        
        <!-- Stopka -->
        <footer style="background: var(--dark-color); color: white; padding: 60px 0 30px;">
            <div class="container">
                <div class="grid grid-4" style="margin-bottom: 40px;">
                    <!-- Kolumna 1: O szkole -->
                    <div>
                        <h3 style="color: white; margin-bottom: 20px; font-size: 1.3rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-school"></i> O szkole
                        </h3>
                        <p style="color: #bbb; line-height: 1.6; margin-bottom: 20px;">
                            <?php echo $school_info['full_name']; ?><br>
                            Szkoła na Starówce
                        </p>
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <a href="https://www.facebook.com/SzkolaNaStarowce" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: var(--transition);">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCtvrn3uKhRskxbZjAldRYHA" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: var(--transition);">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Kolumna 2: Kontakt -->
                    <div>
                        <h3 style="color: white; margin-bottom: 20px; font-size: 1.3rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-map-marker-alt"></i> Kontakt
                        </h3>
                        <div style="color: #bbb; line-height: 1.8;">
                            <p style="margin-bottom: 15px;">
                                <strong>Adres:</strong><br>
                                <?php echo $school_info['address']; ?>
                            </p>
                            <p style="margin-bottom: 15px;">
                                <strong>Telefon:</strong><br>
                                <?php foreach($school_info['phone'] as $phone): ?>
                                    <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone); ?>" style="color: #bbb; text-decoration: none; display: block;"><?php echo $phone; ?></a>
                                <?php endforeach; ?>
                            </p>
                            <p>
                                <strong>Email:</strong><br>
                                <a href="mailto:<?php echo $school_info['email']; ?>" style="color: #bbb; text-decoration: none;"><?php echo $school_info['email']; ?></a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Kolumna 3: Szybkie linki -->
                    <div>
                        <h3 style="color: white; margin-bottom: 20px; font-size: 1.3rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-link"></i> Szybkie linki
                        </h3>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 10px;"><a href="/" style="color: #bbb; text-decoration: none; transition: var(--transition); display: flex; align-items: center; gap: 8px;"><i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> Strona główna</a></li>
                            <li style="margin-bottom: 10px;"><a href="technikum.php" style="color: #bbb; text-decoration: none; transition: var(--transition); display: flex; align-items: center; gap: 8px;"><i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> Technikum</a></li>
                            <li style="margin-bottom: 10px;"><a href="liceum.php" style="color: #bbb; text-decoration: none; transition: var(--transition); display: flex; align-items: center; gap: 8px;"><i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> Liceum</a></li>
                            <li style="margin-bottom: 10px;"><a href="https://portal.librus.pl/" style="color: #bbb; text-decoration: none; transition: var(--transition); display: flex; align-items: center; gap: 8px;"><i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> E-dziennik</a></li>
                        </ul>
                    </div>

                    
                </div>
                
                <!-- Copyright -->
                <div style="border-top: 1px solid #444; padding-top: 30px; text-align: center; color: #888; font-size: 0.9rem;">
                    <p>&copy; <?php echo date('Y'); ?> Szkoła na Starówce. Wszelkie prawa zastrzeżone.</p>
                    <p style="margin-top: 10px;">
                        <a href="https://www.google.com/maps/dir//Podwale+13,+00-252+Warszawa" target="_blank" style="color: var(--secondary-color); text-decoration: none; display: inline-flex; align-items: center; gap: 5px;">
                            <i class="fas fa-map-marker-alt"></i> Jak dojechać?
                        </a>
                    </p>
                </div>
            </div>
        </footer>
        
        <!-- Scripts -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Dropdown menu z animacjami
                document.querySelectorAll('[data-dropdown]').forEach(dropdown => {
                    const toggle = dropdown.querySelector('[data-dropdown-toggle]');
                    const content = dropdown.querySelector('.dropdown-content');
                    
                    if (toggle && content) {
                        let timeout;
                        
                        toggle.addEventListener('click', function(e) {
                            e.stopPropagation();
                            
                            // Zamknij wszystkie inne dropdowny
                            document.querySelectorAll('.dropdown-content.show').forEach(otherContent => {
                                if (otherContent !== content) {
                                    otherContent.classList.remove('show');
                                    otherContent.classList.add('hide');
                                    setTimeout(() => {
                                        otherContent.classList.remove('hide');
                                        otherContent.style.display = 'none';
                                    }, 300);
                                }
                            });
                            
                            // Zamknij wszystkie inne toggle aktywne
                            document.querySelectorAll('.dropdown-toggle.active').forEach(otherToggle => {
                                if (otherToggle !== toggle) {
                                    otherToggle.classList.remove('active');
                                }
                            });
                            
                            // Przełącz aktualny dropdown
                            if (content.classList.contains('show')) {
                                content.classList.remove('show');
                                content.classList.add('hide');
                                toggle.classList.remove('active');
                                
                                setTimeout(() => {
                                    content.classList.remove('hide');
                                    content.style.display = 'none';
                                }, 300);
                            } else {
                                content.style.display = 'block';
                                void content.offsetWidth; // Trigger reflow dla animacji
                                content.classList.remove('hide');
                                content.classList.add('show');
                                toggle.classList.add('active');
                            }
                        });
                        
                        // Zamknij po kliknięciu poza dropdown
                        document.addEventListener('click', function(e) {
                            if (!dropdown.contains(e.target)) {
                                if (content.classList.contains('show')) {
                                    content.classList.remove('show');
                                    content.classList.add('hide');
                                    toggle.classList.remove('active');
                                    
                                    setTimeout(() => {
                                        content.classList.remove('hide');
                                        content.style.display = 'none';
                                    }, 300);
                                }
                            }
                        });
                        
                        // Zapobiegaj domyślnemu zachowaniu dla linków
                        toggle.addEventListener('mousedown', function(e) {
                            if (e.target.tagName === 'A' && e.target.getAttribute('href') === '#') {
                                e.preventDefault();
                            }
                        });
                    }
                });
                
                // Mobile menu
                const mobileToggle = document.querySelector('.mobile-menu-toggle');
                const mobileMenu = document.getElementById('mobileMenu');
                const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
                const mobileMenuClose = document.getElementById('mobileMenuClose');
                
                if (mobileToggle && mobileMenu) {
                    // Otwórz mobile menu
                    mobileToggle.addEventListener('click', function() {
                        mobileMenu.classList.add('open');
                        mobileMenuOverlay.classList.add('active');
                        document.body.style.overflow = 'hidden';
                    });
                    
                    // Zamknij mobile menu
                    function closeMobileMenu() {
                        mobileMenu.classList.remove('open');
                        mobileMenuOverlay.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                    
                    mobileMenuClose.addEventListener('click', closeMobileMenu);
                    mobileMenuOverlay.addEventListener('click', closeMobileMenu);
                    
                    // Mobile dropdowns
                    document.querySelectorAll('.mobile-dropdown').forEach(dropdown => {
                        const toggle = dropdown.querySelector('.mobile-dropdown-toggle');
                        const icon = toggle.querySelector('i');
                        
                        toggle.addEventListener('click', function() {
                            dropdown.classList.toggle('active');
                            
                            // Animacja ikony
                            if (dropdown.classList.contains('active')) {
                                icon.style.transform = 'rotate(180deg)';
                            } else {
                                icon.style.transform = 'rotate(0deg)';
                            }
                        });
                    });
                    
                    // Pokaż przycisk mobile na małych ekranach
                    if (window.innerWidth <= 992) {
                        mobileToggle.style.display = 'block';
                        document.querySelector('.desktop-menu').style.display = 'none';
                    }
                }
                
                // Smooth scroll dla anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        const href = this.getAttribute('href');
                        if (href !== '#') {
                            e.preventDefault();
                            const target = document.querySelector(href);
                            if (target) {
                                // Zamknij mobile menu jeśli jest otwarte
                                if (mobileMenu && mobileMenu.classList.contains('open')) {
                                    closeMobileMenu();
                                }
                                
                                window.scrollTo({
                                    top: target.offsetTop - 80,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    });
                });
                
                // Newsletter form
                const newsletterForm = document.getElementById('newsletterForm');
                if (newsletterForm) {
                    newsletterForm.addEventListener('submit', function(e) {
                        e.preventDefault();
                        const email = this.querySelector('input[type="email"]').value;
                        
                        // Animacja przycisku
                        const submitBtn = this.querySelector('button[type="submit"]');
                        const originalText = submitBtn.innerHTML;
                        
                        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Wysyłanie...';
                        submitBtn.disabled = true;
                        
                        setTimeout(() => {
                            alert('Dziękujemy za zapisanie się do newslettera! Na adres ' + email + ' wysłaliśmy potwierdzenie.');
                            this.reset();
                            submitBtn.innerHTML = originalText;
                            submitBtn.disabled = false;
                        }, 1500);
                    });
                }
                
                // Responsywność
                window.addEventListener('resize', function() {
                    if (window.innerWidth <= 992) {
                        if (mobileToggle) mobileToggle.style.display = 'block';
                        if (document.querySelector('.desktop-menu')) document.querySelector('.desktop-menu').style.display = 'none';
                    } else {
                        if (mobileToggle) mobileToggle.style.display = 'none';
                        if (document.querySelector('.desktop-menu')) document.querySelector('.desktop-menu').style.display = 'flex';
                        
                        // Zamknij mobile menu na desktop
                        if (mobileMenu && mobileMenu.classList.contains('open')) {
                            closeMobileMenu();
                        }
                        
                        // Resetuj mobile dropdowns
                        document.querySelectorAll('.mobile-dropdown').forEach(dropdown => {
                            dropdown.classList.remove('active');
                            const icon = dropdown.querySelector('.mobile-dropdown-toggle i');
                            if (icon) icon.style.transform = 'rotate(0deg)';
                        });
                        
                        // Zamknij wszystkie dropdowny desktop
                        document.querySelectorAll('.dropdown-content.show').forEach(content => {
                            content.classList.remove('show');
                            content.style.display = 'none';
                        });
                        document.querySelectorAll('.dropdown-toggle.active').forEach(toggle => {
                            toggle.classList.remove('active');
                        });
                    }
                });
                
                // Dodaj klasę active do aktualnej strony w menu
                document.querySelectorAll('.menu-item, .dropdown-item, .mobile-menu-item').forEach(item => {
                    if (item.getAttribute('href') === window.location.pathname.split('/').pop()) {
                        item.classList.add('active');
                    }
                });
                
                // Dodaj efekty hover dla dropdown items
                const dropdownItems = document.querySelectorAll('.dropdown-item');
                
                dropdownItems.forEach(item => {
                    item.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateX(5px)';
                        this.style.transition = 'transform 0.2s ease';
                    });
                    
                    item.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateX(0)';
                    });
                });
            });
        </script>
    </body>
    </html>
    <?php
    return ob_get_clean();
}

// Funkcje pomocnicze
function getAktualnoscById($id) {
    global $aktualnosci;
    foreach($aktualnosci as $aktualnosc) {
        if($aktualnosc['id'] == $id) {
            return $aktualnosc;
        }
    }
    return null;
}
?>