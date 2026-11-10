<?php
require_once 'config.php';

ob_start();
echo generateHeader('Technikum', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
?>

<style>
    .programs-hero {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 100px 0;
        text-align: center;
    }
    
    .kierunek-detail {
        background: white;
        border-radius: var(--radius-lg);
        overflow: hidden;
        margin-bottom: 40px;
        box-shadow: var(--shadow-md);
        display: none;
    }
    
    .kierunek-detail.active {
        display: block;
        animation: fadeIn 0.5s ease-out;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .kierunek-header {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 40px;
        display: flex;
        align-items: center;
        gap: 30px;
        flex-wrap: wrap;
    }
    
    .kierunek-icon {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        flex-shrink: 0;
    }
    
    .kierunek-info {
        flex: 1;
        min-width: 300px;
    }
    
    .kierunek-title {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    
    .kierunek-badge {
        display: inline-block;
        padding: 5px 15px;
        background: var(--secondary-color);
        color: white;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .kierunek-meta {
        display: flex;
        gap: 20px;
        margin-top: 15px;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
        opacity: 0.9;
    }
    
    .kierunek-body {
        padding: 40px;
    }
    
    .kierunek-section {
        margin-bottom: 30px;
    }
    
    .kierunek-section h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
        color: var(--primary-color);
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .kierunek-section h3 i {
        color: var(--secondary-color);
    }
    
    .przedmioty-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 15px;
    }
    
    .przedmiot-item {
        background: var(--light-blue);
        padding: 15px;
        border-radius: var(--radius-md);
        text-align: center;
        font-weight: 500;
        transition: var(--transition);
    }
    
    .przedmiot-item:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }
    
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    
    .benefit-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 20px;
        background: white;
        border-radius: var(--radius-md);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .benefit-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }
    
    .benefit-icon {
        width: 50px;
        height: 50px;
        background: var(--light-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 20px;
        flex-shrink: 0;
    }
    
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .comparison-table th,
    .comparison-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }
    
    .comparison-table th {
        background: var(--light-blue);
        color: var(--primary-color);
        font-weight: 600;
    }
    
    .comparison-table tr:hover {
        background: #f9f9f9;
    }
    
    .nav-kierunki {
        position: sticky;
        top: 120px;
        background: white;
        padding: 20px;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
        margin-bottom: 30px;
    }
    
    .nav-kierunki h3 {
        margin-bottom: 15px;
        color: var(--primary-color);
    }
    
    .nav-list {
        list-style: none;
        padding: 0;
    }
    
    .nav-item {
        margin-bottom: 10px;
    }
    
    .nav-link {
        display: block;
        padding: 10px 15px;
        color: var(--dark-color);
        text-decoration: none;
        border-radius: var(--radius-sm);
        transition: var(--transition);
        cursor: pointer;
    }
    
    .nav-link:hover,
    .nav-link.active {
        background: var(--light-blue);
        color: var(--primary-color);
        padding-left: 20px;
    }
    
    .nav-link.active {
        background: var(--primary-color);
        color: white;
    }
    
    .no-kierunek-selected {
        text-align: center;
        padding: 80px 40px;
        background: white;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
    }
    
    .no-kierunek-selected i {
        font-size: 4rem;
        color: var(--light-blue);
        margin-bottom: 20px;
    }
    
    .no-kierunek-selected h3 {
        color: var(--primary-color);
        margin-bottom: 15px;
    }
    
    .no-kierunek-selected p {
        color: var(--gray-color);
        max-width: 500px;
        margin: 0 auto 30px;
        line-height: 1.6;
    }
    
    .kierunek-back-btn {
        display: none;
        margin-bottom: 20px;
        padding: 15px;
        background: var(--light-blue);
        border-radius: var(--radius-md);
        border: none;
        color: var(--primary-color);
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        width: 100%;
        text-align: center;
    }
    
    .kierunek-back-btn:hover {
        background: var(--primary-color);
        color: white;
    }
    
    html, body {
    width: 100%;
    max-width: 100%;
    overflow-x: hidden !important;
}

@media (max-width: 768px) {
    * {
        max-width: 100vw !important;
        box-sizing: border-box !important;
    }

    *:not(svg):not(path) {
        transform: none !important;
    }

    .grid,
    .grid.grid-2 {
        display: block !important;
        width: 100% !important;
    }

    .kierunek-info,
    .benefit-item,
    .przedmiot-item {
        min-width: 0 !important;
        width: 100% !important;
    }

    .nav-kierunki {
        position: relative !important;
        top: auto !important;
    }

    .kierunek-back-btn {
        position: fixed;
        left: 12px !important;
        right: 12px !important;
        width: auto !important;
    }

    .comparison-table {
        display: block;
        overflow-x: auto;
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }

    .comparison-table table {
        min-width: 640px;
    }

    [style*="margin-right"],
    [style*="padding-right"] {
        margin-right: 0 !important;
        padding-right: 0 !important;
    }
}
</style>

<section class="programs-hero">
    <div class="container">
        <h1 style="font-size: 3rem; margin-bottom: 20px;">Kierunki:</h1>
        <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto; opacity: 0.9;">
            5-letnie technikum zakończone maturą i egzaminem zawodowym. Kształcimy specjalistów w zawodach przyszłości.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid grid-2">
            <div class="nav-kierunki">
                <h3>Wybierz kierunek:</h3>
                <ul class="nav-list">
                    <?php 
                    global $technikum_kierunki;
                    $first = true;
                    foreach($technikum_kierunki as $nazwa => $info): 
                        $anchor = strtolower(str_replace(' ', '-', $nazwa));
                    ?>
                        <li class="nav-item">
                            <a href="#<?php echo $anchor; ?>" 
                               class="nav-link <?php echo $first ? 'active' : ''; ?>" 
                               data-kierunek="<?php echo $anchor; ?>"
                               onclick="showKierunek('<?php echo $anchor; ?>', event)">
                                <i class="<?php echo $info['icon']; ?>"></i> <?php echo $nazwa; ?>
                            </a>
                        </li>
                    <?php 
                        $first = false;
                    endforeach; 
                    ?>
                </ul>
                
                <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
                    <a href="rekrutacja.php" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-pen"></i> Zapisz się online
                    </a>
                </div>
            </div>
            
            <div id="kierunek-content">
                <div id="no-kierunek" class="no-kierunek-selected" style="display: none;">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Wybierz kierunek z listy</h3>
                    <p>Kliknij na dowolny kierunek po lewej stronie, aby zobaczyć szczegółowe informacje o programie nauczania, przedmiotach zawodowych i perspektywach po ukończeniu szkoły.</p>
                    <div class="benefits-grid" style="max-width: 600px; margin: 0 auto;">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Szczegółowe informacje</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Przeglądaj szczegółowy program każdego kierunku</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Perspektywy zawodowe</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Dowiedz się o możliwościach po ukończeniu</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button id="back-to-list" class="kierunek-back-btn" onclick="showKierunekList()">
                    <i class="fas fa-arrow-left"></i> Powrót do listy kierunków
                </button>
                
                <?php 
                $i = 0;
                $first = true;
                foreach($technikum_kierunki as $nazwa => $info): 
                    $anchor = strtolower(str_replace(' ', '-', $nazwa));
                    $delay = $i * 0.1;
                ?>
                    <div id="kierunek-<?php echo $anchor; ?>" 
                         class="kierunek-detail <?php echo $first ? 'active' : ''; ?>" 
                         data-kierunek="<?php echo $anchor; ?>">
                        <div class="kierunek-header">
                            <div class="kierunek-icon">
                                <i class="<?php echo $info['icon']; ?>"></i>
                            </div>
                            <div class="kierunek-info">
                                <h2 class="kierunek-title"><?php echo $nazwa; ?></h2>
                                <?php if($info['specjalizacja']): ?>
                                    <span class="kierunek-badge"><?php echo $info['specjalizacja']; ?></span>
                                <?php endif; ?>
                                <p style="opacity: 0.9; font-size: 1.1rem;"><?php echo $info['opis']; ?></p>
                                <div class="kierunek-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Czas trwania: <?php echo $info['czas']; ?></span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-graduation-cap"></i>
                                        <span>Poziom: średni</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-certificate"></i>
                                        <span>Tytuł: technik</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="kierunek-body">
                            <div class="kierunek-section">
                                <h3><i class="fas fa-book"></i> Czego się uczysz</h3>
                                <p style="margin-bottom: 20px; line-height: 1.6;">
                                    <?php echo isset($info['czego_sie_uczysz']) ? $info['czego_sie_uczysz'] : 'Na tym kierunku zdobędziesz kompleksową wiedzę teoretyczną i praktyczną, przygotowującą do pracy w zawodzie. Program nauczania obejmuje zarówno przedmioty ogólnokształcące, jak i specjalistyczne przedmioty zawodowe.'; ?>
                                </p>
                            </div>
                            
                            <div class="kierunek-section">
                                <h3><i class="fas fa-graduation-cap"></i> Przedmioty zawodowe</h3>
                                <div class="przedmioty-grid">
                                    <?php 
                                    if(isset($info['przedmioty'])) {
                                        foreach($info['przedmioty'] as $przedmiot): 
                                    ?>
                                        <div class="przedmiot-item"><?php echo $przedmiot; ?></div>
                                    <?php 
                                        endforeach;
                                    } else {
                                        $default_przedmioty = ['Przedmiot 1', 'Przedmiot 2', 'Przedmiot 3', 'Przedmiot 4'];
                                        foreach($default_przedmioty as $przedmiot): 
                                    ?>
                                        <div class="przedmiot-item"><?php echo $przedmiot; ?></div>
                                    <?php endforeach; } ?>
                                </div>
                            </div>
                            
                            <div class="kierunek-section">
                                <h3><i class="fas fa-briefcase"></i> Możliwości po ukończeniu szkoły</h3>
                                <div class="benefits-grid">
                                    <div class="benefit-item">
                                        <div class="benefit-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div>
                                            <h4 style="margin-bottom: 5px;">Praca w firmach</h4>
                                            <p style="color: var(--gray-color); font-size: 0.9rem;">Możliwość pracy w dużych przedsiębiorstwach</p>
                                        </div>
                                    </div>
                                    <div class="benefit-item">
                                        <div class="benefit-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <div>
                                            <h4 style="margin-bottom: 5px;">Własna działalność</h4>
                                            <p style="color: var(--gray-color); font-size: 0.9rem;">Możliwość założenia własnej firmy</p>
                                        </div>
                                    </div>
                                    <div class="benefit-item">
                                        <div class="benefit-icon">
                                            <i class="fas fa-university"></i>
                                        </div>
                                        <div>
                                            <h4 style="margin-bottom: 5px;">Studia wyższe</h4>
                                            <p style="color: var(--gray-color); font-size: 0.9rem;">Kontynuacja nauki na studiach</p>
                                        </div>
                                    </div>
                                </div>
                                <?php if(isset($info['mozliwosci'])): ?>
                                    <div style="margin-top: 20px;">
                                        <p style="line-height: 1.6;"><?php echo $info['mozliwosci']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="kierunek-section">
                                <h3><i class="fas fa-chart-line"></i> Informacje dodatkowe</h3>
                                <table class="comparison-table">
                                    <tr>
                                        <th>Kwalifikacje</th>
                                        <td>Dwie kwalifikacje zawodowe</td>
                                    </tr>
                                    <tr>
                                        <th>Praktyki zawodowe</th>
                                        <td>4 tygodnie w klasie 3 i 4</td>
                                    </tr>
                                    <tr>
                                        <th>Języki obce</th>
                                        <td>Angielski (kontynuacja) + drugi język do wyboru</td>
                                    </tr>
                                    <tr>
                                        <th>Dodatkowe zajęcia</th>
                                        <td>Koła zainteresowań, kursy certyfikowane</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div style="text-align: center; margin-top: 40px; padding-top: 30px; border-top: 1px solid #eee;">
                                <a href="rekrutacja.php?kierunek=<?php echo urlencode($nazwa); ?>" class="btn btn-primary" style="margin-right: 15px;">
                                    <i class="fas fa-pen"></i> Zapisz się na ten kierunek
                                </a>
                                <a href="kontakt.php" class="btn btn-outline">
                                    <i class="fas fa-question-circle"></i> Masz pytania?
                                </a>
                            </div>
                        </div>
                    </div>
                <?php 
                    $i++;
                    $first = false;
                endforeach; 
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="text-align: center; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); color: white; padding: 60px; border-radius: var(--radius-lg);">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Nie możesz się zdecydować?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto; opacity: 0.9;">
                Skontaktuj się z naszym doradcą zawodowym, który pomoże Ci wybrać idealny kierunek.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="kontakt.php" class="btn btn-secondary" style="background: white; color: var(--primary-color);">
                    <i class="fas fa-calendar"></i> Umów konsultację
                </a>
                <a href="tel:+48786982711" class="btn btn-outline" style="border-color: white; color: white;">
                    <i class="fas fa-phone"></i> Zadzwoń: 786 982 711
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    function showKierunek(kierunekId, event = null) {
        if (event) event.preventDefault();
        
        document.querySelectorAll('.kierunek-detail').forEach(kierunek => {
            kierunek.classList.remove('active');
        });
        
        document.getElementById('no-kierunek').style.display = 'none';
        
        const selectedKierunek = document.getElementById('kierunek-' + kierunekId);
        if (selectedKierunek) {
            selectedKierunek.classList.add('active');
        }
        
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('data-kierunek') === kierunekId) {
                link.classList.add('active');
            }
        });
        
        if (window.innerWidth <= 768) {
            document.getElementById('back-to-list').style.display = 'block';
            document.querySelector('.comparison-section').style.display = 'none';
        }
        
        window.scrollTo({
            top: document.querySelector('.section').offsetTop - 100,
            behavior: 'smooth'
        });
        
        history.pushState(null, '', '#' + kierunekId);
    }
    
    function showKierunekList() {
        document.querySelectorAll('.kierunek-detail').forEach(kierunek => {
            kierunek.classList.remove('active');
        });
        
        document.getElementById('no-kierunek').style.display = 'block';
        
        document.getElementById('back-to-list').style.display = 'none';
        
        document.querySelector('.comparison-section').style.display = 'block';
        
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
        });
        
        window.scrollTo({
            top: document.querySelector('.nav-kierunki').offsetTop - 100,
            behavior: 'smooth'
        });
        
        history.pushState(null, '', window.location.pathname);
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const hash = window.location.hash.substring(1);
        if (hash) {
            const kierunekElements = document.querySelectorAll('[data-kierunek]');
            let found = false;
            
            kierunekElements.forEach(element => {
                if (element.getAttribute('data-kierunek') === hash) {
                    if (element.classList.contains('kierunek-detail')) {
                        showKierunek(hash);
                        found = true;
                    }
                }
            });
            
            if (!found) {
                showKierunekList();
            }
        } else {
            if (window.innerWidth > 768) {
                const firstKierunek = document.querySelector('.nav-link').getAttribute('data-kierunek');
                showKierunek(firstKierunek);
            } else {
                showKierunekList();
            }
        }
        
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                if (!document.querySelector('.kierunek-detail.active')) {
                    const firstKierunek = document.querySelector('.nav-link').getAttribute('data-kierunek');
                    showKierunek(firstKierunek);
                }
                document.getElementById('back-to-list').style.display = 'none';
                document.querySelector('.comparison-section').style.display = 'block';
            }
        });
    });
    
    window.addEventListener('popstate', function() {
        const hash = window.location.hash.substring(1);
        if (hash) {
            showKierunek(hash);
        } else {
            showKierunekList();
        }
    });
</script>

<?php
echo generateFooter();
?>