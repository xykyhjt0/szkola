<?php
require_once 'config.php';

ob_start();
echo generateHeader('', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
?>

<style>
    .stats-section {
        background: linear-gradient(135deg, var(--light-blue), #ffffff);
        padding: 60px 0;
        margin-top: -50px;
        border-radius: var(--radius-lg);
        position: relative;
        z-index: 2;
    }
    
    .stat-card {
        text-align: center;
        padding: 30px;
        background: white;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }
    
    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 10px;
        line-height: 1;
    }
    
    .stat-label {
        font-size: 1.1rem;
        color: var(--gray-color);
        font-weight: 500;
    }
    
    .news-card {
        position: relative;
        overflow: hidden;
        border-radius: var(--radius-lg);
        height: 400px;
        background: white;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
    }
    
    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .news-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .news-content {
        padding: 25px;
        position: relative;
    }
    
    .news-category {
        position: absolute;
        top: -15px;
        left: 25px;
        background: var(--secondary-color);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .news-date {
        color: var(--gray-color);
        font-size: 0.9rem;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .program-highlight {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .program-highlight::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
        opacity: 0.1;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .feature-item {
        text-align: center;
        padding: 30px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: var(--radius-lg);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: var(--transition);
    }
    
    .feature-item:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.15);
    }
    
    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: var(--secondary-color);
    }
    
    .cta-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .cta-content {
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }
    
    /* SEKCJA TECHNIKUM I LICEUM */
    .schools-comparison {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-bottom: 60px;
    }
    
    .school-column {
        background: white;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
    }
    
    .school-column:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .school-header {
        padding: 30px;
        text-align: center;
        color: white;
    }
    
    .technikum-header {
        background: linear-gradient(135deg, var(--primary-color), #1565c0);
    }
    
    .liceum-header {
        background: linear-gradient(135deg, #673ab7, #9c27b0);
    }
    
    .school-icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    
    .school-title {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    
    .school-description {
        font-size: 1.1rem;
        opacity: 0.9;
    }
    
    .school-content {
        padding: 30px;
    }
    
    .directions-list {
        list-style: none;
        padding: 0;
    }
    
    .direction-item {
        padding: 15px;
        margin-bottom: 10px;
        background: var(--light-blue);
        border-radius: var(--radius-sm);
        display: flex;
        align-items: center;
        gap: 15px;
        transition: var(--transition);
    }
    
    .direction-item:hover {
        transform: translateX(5px);
        background: linear-gradient(90deg, var(--light-blue), #ffffff);
    }
    
    .direction-icon {
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
    }
    
    .liceum .direction-icon {
        background: #673ab7;
    }
    
    .direction-info {
        flex: 1;
    }
    
    .direction-name {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 5px;
    }
    
    .direction-spec {
        font-size: 0.9rem;
        color: var(--gray-color);
    }
    
    .school-stats {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-top: 25px;
        padding-top: 25px;
        border-top: 2px solid #f0f0f0;
    }
    
    .stat-item {
        text-align: center;
        padding: 15px;
        background: #f8f9fa;
        border-radius: var(--radius-sm);
    }
    
    .stat-value {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 5px;
    }
    
    .liceum .stat-value {
        color: #673ab7;
    }
    
    .stat-label-small {
        font-size: 0.9rem;
        color: var(--gray-color);
    }
    
    .school-action {
        text-align: center;
        margin-top: 30px;
    }
    
    .btn-technikum {
        background: linear-gradient(135deg, var(--primary-color), #1565c0);
        color: white;
        border: none;
    }
    
    .btn-liceum {
        background: linear-gradient(135deg, #673ab7, #9c27b0);
        color: white;
        border: none;
    }
    
    /* dla telefonu */
@media (max-width: 768px) {

    html {
        font-size: 15px;
    }

    body {
        line-height: 1.55;
    }

    .container {
        padding: 0 14px;
    }

    /* Заголовки */
    h1, h2 {
        font-size: 1.8rem !important;
        line-height: 1.25;
        text-align: center;
    }

    h3 {
        font-size: 1.2rem !important;
    }

    p {
        font-size: 1rem !important;
        text-align: center;
    }

    /* Кнопки */
    .btn {
        width: 100%;
        padding: 14px 18px !important;
        font-size: 1rem !important;
        border-radius: 14px;
    }

    /* Сетки */
    .grid,
    .grid.grid-2,
    .grid.grid-3,
    .grid.grid-4,
    .schools-comparison {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }

    /* Карточки */
    .card,
    .stat-card,
    .news-card,
    .feature-item,
    .school-column {
        border-radius: 18px;
    }

    .stat-card {
        padding: 18px;
    }

    .stat-number {
        font-size: 2.2rem;
    }

    /* Новости */
    .news-card {
        height: auto;
    }

    .news-image {
        height: 180px;
    }

    .news-content {
        padding: 18px;
    }

    .news-category {
        font-size: 0.75rem;
        padding: 4px 12px;
    }

    /* TECHNIKUM / LICEUM */
    .school-header {
        padding: 20px;
        text-align: center;
    }

    .school-icon {
        font-size: 2.4rem;
    }

    .school-title {
        font-size: 1.5rem;
    }

    .school-content {
        padding: 20px;
    }

    .directions-list {
        margin-top: 20px;
    }

    .direction-item {
        flex-direction: column;
        text-align: center;
        padding: 14px;
        gap: 10px;
    }

    .direction-icon {
        width: 54px;
        height: 54px;
        font-size: 1.4rem;
    }

    .direction-name {
        font-size: 1rem;
    }

    .direction-spec {
        font-size: 0.9rem;
    }

    /* Статы школ */
    .school-stats {
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-top: 20px;
    }

    .stat-item {
        padding: 14px;
    }

    .stat-value {
        font-size: 1.4rem;
    }

    /* CTA */
    .cta-section {
        padding: 50px 0;
    }

    .cta-content h2 {
        font-size: 1.9rem !important;
    }

    .cta-content p {
        font-size: 1rem !important;
    }

    /* Изображения */
    img {
        border-radius: 16px;
    }
}

/* Очень маленькие экраны */
@media (max-width: 420px) {
    h2 {
        font-size: 1.6rem !important;
    }

    .stat-number {
        font-size: 2rem;
    }

    .school-stats {
        grid-template-columns: 1fr;
    }
}

/* Сенсорные устройства */
@media (hover: none) {
    .btn,
    .direction-item,
    .stat-card,
    .news-card {
        transform: none !important;
    }
}

/* Без горизонтального скролла */
html, body {
    max-width: 100%;
    overflow-x: hidden;
}
</style>



<!-- O szkole -->
<section class="section">
    <div class="container">
        <div class="grid grid-2">
            <div class="animate-fade-in">
                <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--dark-color);">Szkoła na Starówce</h2>
                <p style="color: var(--gray-color); margin-bottom: 20px; font-size: 1.1rem;">
                    Jesteśmy nowoczesną szkołą techniczną zlokalizowaną w samym sercu Warszawy. 
                    Oferujemy kształcenie w zawodach przyszłości, które gwarantują doskonałe 
                    perspektywy na rynku pracy.
                </p>
                <p style="color: var(--gray-color); margin-bottom: 30px;">
                    Nasza szkoła to miejsce, gdzie teoria łączy się z praktyką. Dysponujemy 
                    nowocześnie wyposażonymi pracowniami, w których uczniowie zdobywają 
                    praktyczne umiejętności pod okiem doświadczonych nauczycieli.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="o-szkole.php" class="btn btn-primary">
                        Dowiedz się więcej <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="kontakt.php" class="btn btn-outline">
                        <i class="fas fa-map-marker-alt"></i> Odwiedź nas
                    </a>
                </div>
            </div>
            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <img src="zdzimg/logo-szkoly.png" alt="Nasza szkoła" style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
            </div>
        </div>
    </div>
</section>

<!-- TECHNIKUM vs LICEUM - PODZIAŁ NA 2 KOLUMNY -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <div class="section-title animate-fade-in">
            <h2>Nasza oferta edukacyjna</h2>
            <p>Wybierz ścieżkę edukacji zgodną z Twoimi zainteresowaniami</p>
        </div>
        
        <div class="schools-comparison">
            <!-- LEWA KOLUMNA - TECHNIKUM -->
            <div class="school-column animate-fade-in">
                <div class="school-header technikum-header">
                    <div class="school-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="school-title">Technikum</h3>
                    <p class="school-description">5-letnie kształcenie zawodowe</p>
                </div>
                
                <div class="school-content">
                    <p style="color: var(--gray-color); margin-bottom: 25px; text-align: center;">
                        Nowoczesne kierunki techniczne przygotowujące do zawodów przyszłości
                    </p>
                    
                    <h4 style="color: var(--primary-color); margin-bottom: 15px; text-align: center;">Kierunki kształcenia:</h4>
                    
                    <ul class="directions-list">
                        <?php 
                        global $technikum_kierunki;
                        $top_technikum = array_slice($technikum_kierunki, 0, 4);
                        $i = 0;
                        foreach($top_technikum as $nazwa => $info): 
                        ?>
                            <li class="direction-item">
                                <div class="direction-icon">
                                    <i class="<?php echo $info['icon']; ?>"></i>
                                </div>
                                <div class="direction-info">
                                    <div class="direction-name"><?php echo $nazwa; ?></div>
                                    <?php if(!empty($info['specjalizacja'])): ?>
                                        <div class="direction-spec">Specjalizacja: <?php echo $info['specjalizacja']; ?></div>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php 
                            $i++;
                        endforeach; 
                        ?>
                    </ul>
                    
                    <div class="school-stats">
                        <div class="stat-item">
                            <div class="stat-value">5 lat</div>
                            <div class="stat-label-small">Czas nauki</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">6</div>
                            <div class="stat-label-small">Kierunków</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">2</div>
                            <div class="stat-label-small">Języki obce</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">100%</div>
                            <div class="stat-label-small">Praktyki</div>
                        </div>
                    </div>
                    
                    <div class="school-action">
                        <a href="technikum.php" class="btn btn-technikum" style="padding: 12px 30px;">
                            <i class="fas fa-graduation-cap"></i> Poznaj technikum
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- PRAWA KOLUMNA - LICEUM -->
            <div class="school-column animate-fade-in" style="animation-delay: 0.1s;">
                <div class="school-header liceum-header">
                    <div class="school-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="school-title">Liceum Ogólnokształcące</h3>
                    <p class="school-description">4-letnie przygotowanie do matury</p>
                </div>
                
                <div class="school-content liceum">
                    <p style="color: var(--gray-color); margin-bottom: 25px; text-align: center;">
                        Profilowane klasy przygotowujące do studiów wyższych
                    </p>
                    
                    <h4 style="color: #673ab7; margin-bottom: 15px; text-align: center;">Profile klas:</h4>
                    
                    <ul class="directions-list">
                        <?php 
                        global $liceum_profile;
                        $top_liceum = array_slice($liceum_profile, 0, 4);
                        $i = 0;
                        foreach($top_liceum as $profile_name => $profile_data): 
                            $icons = ['fa-calculator', 'fa-dna', 'fa-book-open', 'fa-language'];
                        ?>
                            <li class="direction-item">
                                <div class="direction-icon">
                                    <i class="fas <?php echo $icons[$i] ?? 'fa-graduation-cap'; ?>"></i>
                                </div>
                                <div class="direction-info">
                                    <div class="direction-name"><?php echo $profile_name; ?></div>
                                    <div class="direction-spec"><?php echo $profile_data['specjalizacja']; ?></div>
                                </div>
                            </li>
                        <?php 
                            $i++;
                        endforeach; 
                        ?>
                    </ul>
                    
                    <div class="school-stats">
                        <div class="stat-item">
                            <div class="stat-value">4 lata</div>
                            <div class="stat-label-small">Czas nauki</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">3</div>
                            <div class="stat-label-small">Profile</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">3</div>
                            <div class="stat-label-small">Języki obce</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">98%</div>
                            <div class="stat-label-small">Zdawalność matury</div>
                        </div>
                    </div>
                    
                    <div class="school-action">
                        <a href="liceum.php" class="btn btn-liceum" style="padding: 12px 30px;">
                            <i class="fas fa-book-open"></i> Poznaj liceum
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <div style="display: inline-flex; flex-direction: column; gap: 20px; align-items: center;">
                <a href="rekrutacja.php" class="btn btn-primary" style="padding: 15px 40px; font-size: 1.1rem;">
                    <i class="fas fa-file-signature"></i> Rozpocznij rekrutację
                </a>
                <p style="color: var(--gray-color); font-size: 0.9rem;">
                    Rekrutacja na rok szkolny 2026/2027 trwa do 30 czerwca 2026
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Aktualności -->
<section class="section">
    <div class="container">
        <div class="section-title animate-fade-in">
            <h2>Aktualności</h2>
            <p>Najnowsze wydarzenia i informacje ze szkoły</p>
        </div>
        
        <div class="grid grid-3" style="gap: 30px;">
            <?php 
            $wydarzenia = include 'wydarzenia.php'; // Подключаем файл
            $i = 0;

            foreach ($wydarzenia['newsSections'] as $section) {
                foreach ($section['news'] as $news) { 
                    // Только "wyroznione"
                    if (isset($news['type']) && $news['type'] === 'highlight') {

                        $delay = $i * 0.1;

                        $image = $news['image'] ?? 'zdzimg/default.jpg';
                        $category = $news['category'] ?? '';
                        $date = $news['date'] ?? '';
                        $title = $news['title'] ?? '';
                        $content = $news['excerpt'] ?? '';
                        $link = $news['link'] ?? '#';
                        $link_text = $news['link_text'] ?? 'Czytaj więcej';
            ?>
                        <div class="news-card animate-fade-in" style="animation-delay: <?php echo $delay; ?>s; background: #fff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); overflow: hidden; display: flex; flex-direction: column;">
                            <div style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="news-content" style="padding: 20px; flex: 1; display: flex; flex-direction: column;">
                                <span class="news-category" style="font-weight: 600; color: var(--primary-color); margin-bottom: 5px;"><?php echo $category; ?></span>
                                <?php if($date): ?>
                                    <div class="news-date" style="font-size: 0.85rem; color: var(--gray-color); margin-bottom: 10px;">
                                        <i class="far fa-calendar"></i> <?php echo $date; ?>
                                    </div>
                                <?php endif; ?>
                                <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--dark-color); line-height: 1.4;"><?php echo $title; ?></h3>
                                <p style="color: var(--gray-color); margin-bottom: 15px; flex: 1; overflow: hidden;"><?php echo $content; ?></p>
                                <a href="<?php echo $link; ?>" class="btn btn-outline" style="width: 100%; text-align: center; padding: 10px 0; border-radius: 5px;">
                                    <?php echo $link_text; ?> <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
            <?php 
                        $i++;
                    }
                }
            } 
            ?>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <a href="aktualnosci.php" class="btn btn-primary" style="padding: 12px 25px;">
                Zobacz wszystkie aktualności <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content animate-fade-in">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--dark-color);">Gotowy na start kariery?</h2>
            <p style="font-size: 1.2rem; color: var(--gray-color); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Dołącz do naszej społeczności i zdobądź zawód przyszłości w nowoczesnej szkole w centrum Warszawy.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="rekrutacja.php" class="btn btn-primary" style="padding: 15px 40px; font-size: 1.1rem;">
                    Zapisz się online <i class="fas fa-arrow-right"></i>
                </a>
                <a href="kontakt.php" class="btn btn-secondary" style="padding: 15px 40px; font-size: 1.1rem;">
                    Umów wizytę <i class="fas fa-calendar"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
echo generateFooter();
?>