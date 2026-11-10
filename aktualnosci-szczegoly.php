<?php
require_once 'config.php';

// Pobierz ID z parametru URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Pobierz aktualność
$aktualnosc = getAktualnoscById($id);
if (!$aktualnosc) {
    header('Location: aktualnosci.php');
    exit();
}

ob_start();
echo generateHeader($aktualnosc['title'], $aktualnosc['image']);
?>

<style>
    .article-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?php echo $aktualnosc['image']; ?>');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0 100px;
        position: relative;
    }
    
    .article-content {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: var(--radius-lg);
        padding: 50px;
        box-shadow: var(--shadow-lg);
        position: relative;
        margin-top: -50px;
        margin-bottom: 50px;
    }
    
    .article-meta {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }
    
    .article-category {
        background: var(--secondary-color);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
    }
    
    .article-date {
        color: var(--gray-color);
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .article-title {
        font-size: 2.5rem;
        margin-bottom: 30px;
        color: var(--dark-color);
        line-height: 1.3;
    }
    
    .article-body {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #444;
    }
    
    .article-body p {
        margin-bottom: 20px;
    }
    
    .article-body img {
        max-width: 100%;
        height: auto;
        border-radius: var(--radius-md);
        margin: 30px 0;
        box-shadow: var(--shadow-md);
    }
    
    .share-buttons {
        display: flex;
        gap: 15px;
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid #eee;
    }
    
    .share-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: var(--transition);
    }
    
    .share-facebook { background: #3b5998; }
    .share-twitter { background: #1da1f2; }
    .share-linkedin { background: #0077b5; }
    
    .share-btn:hover {
        transform: translateY(-3px);
    }
    
    .related-articles {
        background: #f8f9fa;
        padding: 60px 0;
    }
    
    .related-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .related-card {
        background: white;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
    }
    
    .related-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .related-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .related-content {
        padding: 25px;
    }
    
    .related-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: var(--dark-color);
    }
    
    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 30px;
        transition: var(--transition);
    }
    
    .back-button:hover {
        gap: 15px;
    }
    
    
    
    
    
    
    
    
    
    
    @media (max-width: 768px) {
    .article-hero {
        padding: 100px 0 60px !important;
        background-attachment: scroll !important;
    }
    
    .article-hero h1 {
        font-size: 2rem !important;
        line-height: 1.2;
        margin-top: 15px !important;
    }
    
    .article-content {
        padding: 25px 20px !important;
        margin-top: -30px !important;
        margin-bottom: 30px !important;
        border-radius: 15px !important;
    }
    
    .article-title {
        font-size: 1.8rem !important;
        margin-bottom: 20px !important;
    }
    
    .article-meta {
        flex-direction: column;
        gap: 10px !important;
        margin-bottom: 20px !important;
    }
    
    .article-body {
        font-size: 1rem !important;
        line-height: 1.6;
    }
    
    .article-body h3 {
        font-size: 1.3rem;
        margin: 25px 0 15px;
    }
    
    .article-body img {
        margin: 20px 0 !important;
        border-radius: 10px !important;
    }
    
    .article-body p {
        margin-bottom: 15px !important;
    }
    
    .article-body ul {
        padding-left: 20px;
        margin-bottom: 20px;
    }
    
    .article-body ul li {
        margin-bottom: 8px;
    }
    
    .article-body p[style*="font-style: italic"] {
        padding: 15px !important;
        font-size: 0.95rem;
        margin: 20px 0;
    }
    
    .back-button {
        font-size: 0.9rem;
        margin-bottom: 20px !important;
    }
    
    .share-buttons {
        flex-wrap: wrap;
        gap: 10px !important;
        margin-top: 30px !important;
        padding-top: 20px !important;
    }
    
    .share-buttons span {
        width: 100%;
        margin-bottom: 10px;
    }
    
    .related-articles {
        padding: 40px 0 !important;
    }
    
    .related-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        margin-top: 30px !important;
    }
    
    .related-card {
        margin-bottom: 0;
    }
    
    .related-image {
        height: 180px !important;
    }
    
    .related-content {
        padding: 20px !important;
    }
    
    .related-title {
        font-size: 1.1rem !important;
    }
    
    .container {
        padding-left: 15px;
        padding-right: 15px;
    }
    
    .section {
        padding: 30px 0 !important;
    }
    
    .section-title h2 {
        font-size: 1.8rem;
    }
    
    .btn {
        padding: 12px 20px;
        font-size: 0.95rem;
    }
    
    .btn-primary, .btn-outline {
        width: 100% !important;
        text-align: center;
        margin: 5px 0;
    }
}

@media (max-width: 480px) {
    .article-hero {
        padding: 80px 0 40px !important;
    }
    
    .article-hero h1 {
        font-size: 1.7rem !important;
    }
    
    .article-content {
        padding: 20px 15px !important;
        margin-top: -20px !important;
    }
    
    .article-title {
        font-size: 1.5rem !important;
    }
    
    .article-category {
        font-size: 0.8rem;
        padding: 4px 12px;
    }
    
    .article-date {
        font-size: 0.85rem;
    }
    
    .related-image {
        height: 160px !important;
    }
}

/* Additional mobile optimizations */
@media (max-width: 768px) {
    .animate-fade-in {
        animation: none !important; /* Disable animations on mobile for better performance */
    }
    
    * {
        -webkit-tap-highlight-color: transparent; /* Remove tap highlight on mobile */
    }
    
    .share-btn {
        width: 45px !important;
        height: 45px !important;
        font-size: 1.1rem;
    }
    
    .article-body img {
        width: 100% !important;
        height: auto !important;
    }
}

/* Fix for iOS Safari */
@supports (-webkit-touch-callout: none) {
    .article-hero {
        background-attachment: scroll;
    }
}

/* Prevent horizontal scrolling */
html, body {
    max-width: 100%;
    overflow-x: hidden;
}

/* Improve touch targets */
.btn, .share-btn, .back-button {
    min-height: 44px;
    min-width: 44px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.back-button i {
    font-size: 1.1rem;
}
</style>

<!-- Hero sekcja artykułu -->
<section class="article-hero">
    <div class="container">
        <div class="animate-fade-in">
            <a href="aktualnosci.php" class="back-button">
                <i class="fas fa-arrow-left"></i> Powrót do aktualności
            </a>
            <span class="article-category"><?php echo $aktualnosc['category']; ?></span>
            <h1 style="font-size: 3rem; margin-top: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);"><?php echo $aktualnosc['title']; ?></h1>
            <div class="article-date" style="margin-top: 20px;">
                <i class="far fa-calendar"></i> Opublikowano: <?php echo $aktualnosc['date']; ?>
            </div>
        </div>
    </div>
</section>

<!-- Treść artykułu -->
<section class="section">
    <div class="container">
        <div class="article-content animate-fade-in">
            <div class="article-body">
                <p><?php echo $aktualnosc['full_content']; ?></p>
                
                <h3>Wizyta w firmie Sii Polska</h3>
                <p>W dniu 27.11.2025 r. mieliśmy okazję odwiedzić firmę Sii Polska i był to jeden z tych dni, które na długo zostają w pamięci. 🚀</p>
                
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Wizyta w Sii Polska">
                
                <p>Gdy tylko weszliśmy do biura, poczuliśmy atmosferę miejsca, w którym naprawdę dzieją się rzeczy związane z IT, programowanie, testowanie, projekty dla klientów z całego świata. To było jak wejście do świata, do którego dopiero zaczynamy się przygotowywać.</p>
                
                <h3>Co nas najbardziej zaskoczyło?</h3>
                <p>Dowiedzieliśmy się, że firma świętuje 20-lecie, a jej historia w Polsce zaczęła się… zupełnie niepozornie, od Erasmus! Założyciel przyjechał do Polski na studia i tak rozpoczęła się cała ta niesamowita droga. Dla nas to ważna lekcja: warto korzystać z szans, które daje edukacja i świat. 🌍✨</p>
                
                <p>Eksperci z Sii powiedzieli nam też coś, co zapamiętamy na długo: angielski to absolutna podstawa. Dokumentacja, projekty, komunikacja – bez niego nie ruszymy dalej.</p>
                
                <h3>Poznaliśmy też, czym zajmuje się firma:</h3>
                <ul style="margin-bottom: 20px; padding-left: 20px;">
                    <li>Programowaniem w różnych technologiach</li>
                    <li>Testowaniem oprogramowania</li>
                    <li>Tworzeniem usług dla klientów na całym świecie</li>
                </ul>
                
                <p>Duże wrażenie zrobiła na nas informacja o rekrutacji: tylko około 6% ofert to stanowiska junior. To pokazuje, że musimy pracować nad swoimi umiejętnościami już teraz — algorytmy, logika, matematykę oraz udział w kołach naukowych, projektach i stażach.</p>
                
                <h3>Spotkanie ze stażystami</h3>
                <p>Najbardziej poruszające było spotkanie ze stażystami. Ci młodzi ludzie jeszcze niedawno byli w miejscu, w którym my jesteśmy teraz. Opowiedzieli nam swoją historię, realną drogę od szkoły, przez projekty, aż do stażu i pracy. To dało nam mnóstwo motywacji i pokazało, że naprawdę możemy wejść do świata IT, jeśli będziemy wytrwali. 🔥</p>
                
                <p>Wracamy z tej wizyty z głowami pełnymi pomysłów i z przekonaniem, że jesteśmy na dobrej drodze.</p>
                
                <p style="font-style: italic; padding: 20px; background: var(--light-blue); border-radius: var(--radius-md); border-left: 4px solid var(--primary-color);">
                    Dziękujemy Sii Polska za ciepłe przyjęcie, cierpliwość i inspirację. Dzięki Wam lepiej rozumiemy, o co chodzi w IT i jak krok po kroku budować swoją przyszłość. 💙🤝
                </p>
            </div>
            
            <!-- Przyciski udostępniania -->
            <div class="share-buttons">
                <span style="color: var(--gray-color); margin-right: 15px;">Udostępnij:</span>
                <a href="#" class="share-btn share-facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="share-btn share-twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="share-btn share-linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Powiązane artykuły -->
<section class="related-articles">
    <div class="container">
        <div class="section-title">
            <h2>Powiązane artykuły</h2>
            <p>Inne aktualności, które mogą Cię zainteresować</p>
        </div>
        
        <div class="related-grid">
            <?php 
            global $aktualnosci;
            $related = array_filter($aktualnosci, function($item) use ($id) {
                return $item['id'] != $id;
            });
            
            $related = array_slice($related, 0, 3);
            
            foreach($related as $item): 
            ?>
                <div class="related-card animate-fade-in">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" class="related-image">
                    <div class="related-content">
                        <span class="article-category" style="display: inline-block; margin-bottom: 10px;"><?php echo $item['category']; ?></span>
                        <h3 class="related-title"><?php echo $item['title']; ?></h3>
                        <p style="color: var(--gray-color); margin-bottom: 20px; font-size: 0.9rem;"><?php echo substr($item['content'], 0, 100); ?>...</p>
                        <a href="aktualnosci-szczegoly.php?id=<?php echo $item['id']; ?>" class="btn btn-outline" style="width: 100%;">
                            Czytaj więcej <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <a href="aktualnosci.php" class="btn btn-primary">
                Zobacz wszystkie aktualności <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php
echo generateFooter();
?>