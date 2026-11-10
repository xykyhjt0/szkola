<?php
// rekrutacja.php - Strona rekrutacji
require_once 'config.php';

// Harmonogram rekrutacji
$harmonogram = [
    ['data' => '01.03.2026', 'opis' => 'Rozpoczęcie rekrutacji online'],
    ['data' => '15.05.2026', 'opis' => 'Termin składania dokumentów'],
    ['data' => '20.06.2026', 'opis' => 'Ogłoszenie listy przyjętych'],
    ['data' => '30.06.2026', 'opis' => 'Potwierdzenie woli podjęcia nauki'],
    ['data' => '01.09.2026', 'opis' => 'Rozpoczęcie roku szkolnego'],
];

// Wymagane dokumenty

$dokumenty_technikum = [
    'Podanie o przyjęcie do szkoły',
    'Świadectwo ukończenia szkoły podstawowej',
    'Zaświadczenie o wynikach egzaminu ósmoklasisty',
    'Zaświadczenie od lekarza medycyny pracy',
    '2 zdjęcia legitymacyjne',
    'List motywacyjny po podaniu',
];

$dokumenty_liceum = [
    'Podanie o przyjęcie do szkoły',
    'Świadectwo ukończenia szkoły podstawowej',
    'Zaświadczenie o wynikach egzaminu ósmoklasisty',
    '2 zdjęcia legitymacyjne',
    'List motywacyjny po podaniu',
];


ob_start();
echo generateHeader('Rekrutacja 2026/2027', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');

// Style specyficzne dla strony rekrutacji
?>
<style>
    .recruitment-hero {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .recruitment-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }
    
    .recruitment-hero p {
        font-size: 1.3rem;
        max-width: 800px;
        margin: 0 auto 40px;
        opacity: 0.9;
    }
    
    .timeline {
        position: relative;
        max-width: 800px;
        margin: 50px auto;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 3px;
        height: 100%;
        background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
    }
    
    .timeline-item {
        margin-bottom: 50px;
        position: relative;
        width: 50%;
        padding-right: 30px;
    }
    
    .timeline-item:nth-child(even) {
        margin-left: 50%;
        padding-left: 30px;
        padding-right: 0;
    }
    
    .timeline-date {
        background: var(--primary-color);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 10px;
        box-shadow: var(--shadow-sm);
    }
    
    .timeline-content {
        background: white;
        padding: 25px;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
        position: relative;
    }
    
    .timeline-item:nth-child(odd) .timeline-content::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 20px;
        width: 20px;
        height: 20px;
        background: white;
        transform: rotate(45deg);
        box-shadow: 2px -2px 5px rgba(0,0,0,0.1);
    }
    
    .timeline-item:nth-child(even) .timeline-content::after {
        content: '';
        position: absolute;
        left: -10px;
        top: 20px;
        width: 20px;
        height: 20px;
        background: white;
        transform: rotate(45deg);
        box-shadow: -2px 2px 5px rgba(0,0,0,0.1);
    }
    
    .documents-list {
        list-style: none;
        padding: 0;
    }
    
    .documents-list li {
        padding: 15px 20px;
        margin-bottom: 10px;
        background: white;
        border-radius: var(--radius-md);
        box-shadow: var(--shadow-sm);
        display: flex;
        align-items: center;
        gap: 15px;
        transition: var(--transition);
    }
    
    .documents-list li:hover {
        transform: translateX(10px);
        box-shadow: var(--shadow-md);
    }
    
    .documents-list i {
        color: var(--primary-color);
        font-size: 1.2rem;
        width: 30px;
    }
    
    .form-section {
        background: #f8f9fa;
        padding: 80px 0;
    }
    
    .form-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        padding: 50px;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
    }
    
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--dark-color);
    }
    
    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: var(--radius-sm);
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        transition: var(--transition);
    }
    
    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(13, 71, 161, 0.1);
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    /* Style dla kierunków */
    .direction-option {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px;
        border: 1px solid #e0e0e0;
        border-radius: var(--radius-sm);
        margin-bottom: 5px;
        transition: var(--transition);
    }
    
    .direction-option:hover {
        background: var(--light-blue);
        border-color: var(--primary-color);
    }
    
    .direction-icon {
        width: 30px;
        height: 30px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 0.9rem;
    }
    
    .liceum .direction-icon {
        background: #673ab7;
    }
    
    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
        
        .timeline::before {
            left: 30px;
        }
        
        .timeline-item {
            width: 100%;
            padding-left: 60px;
            padding-right: 0;
        }
        
        .timeline-item:nth-child(even) {
            margin-left: 0;
            padding-left: 60px;
        }
        
        .timeline-item .timeline-content::after {
            left: -10px !important;
            right: auto !important;
        }
    }
</style>

<!-- Hero sekcja rekrutacji -->
<section class="recruitment-hero">
    <div class="container">
        <h1 class="animate-fade-in">Rekrutacja 2026/2027</h1>
        <p class="animate-fade-in" style="animation-delay: 0.2s;">Wybierz ścieżkę edukacji przyszłości w nowoczesnej szkole w sercu Warszawy</p>
        <div class="animate-fade-in" style="animation-delay: 0.4s;">
            <a href="#form" class="btn btn-secondary" style="margin-right: 15px; padding: 15px 40px;">
                Zapisz się online <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#harmonogram" class="btn btn-outline" style="background: rgba(255,255,255,0.1); color: white; border-color: white; padding: 15px 40px;">
                Harmonogram <i class="fas fa-calendar-alt"></i>
            </a>
        </div>
    </div>
</section>


<!-- Harmonogram rekrutacji -->
<section class="section" id="harmonogram">
    <div class="container">
        <div class="section-title animate-fade-in">
            <h2>Harmonogram rekrutacji</h2>
            <p>Terminy, które musisz znać przed rozpoczęciem rekrutacji</p>
        </div>
        
        <div class="timeline">
            <?php 
            $i = 0;
            foreach($harmonogram as $item): 
                $delay = $i * 0.1;
            ?>
                <div class="timeline-item animate-fade-in" style="animation-delay: <?php echo $delay; ?>s;">
                    <span class="timeline-date"><?php echo $item['data']; ?></span>
                    <div class="timeline-content">
                        <h3 style="margin-bottom: 10px; color: var(--dark-color);"><?php echo $item['opis']; ?></h3>
                        <p style="color: var(--gray-color); margin: 0;">Sprawdź szczegóły na stronie lub w sekretariacie szkoły.</p>
                    </div>
                </div>
            <?php 
                $i++;
            endforeach; 
            ?>
        </div>
    </div>
</section>

<!-- Wymagane dokumenty -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <div class="section-title animate-fade-in">
            <h2>Wymagane dokumenty</h2>
            <p>Lista dokumentów potrzebnych do rekrutacji</p>
        </div>
        
        <div class="grid grid-2">
            <div class="animate-fade-in">
                <h3 style="margin-bottom: 20px; color: var(--dark-color);">Dla technikum</h3>
                <ul class="documents-list">
                    <?php 
                    $j = 0;
                    foreach($dokumenty_technikum as $dokument):
                        $delay = $j * 0.05;
                    ?>
                        <li style="animation-delay: <?php echo $delay; ?>s;">
                            <i class="fas fa-file-alt"></i>
                            <span><?php echo $dokument; ?></span>
                        </li>
                    <?php 
                        $j++;
                    endforeach; 
                    ?>
                </ul>
            </div>
            
            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <h3 style="margin-bottom: 20px; color: var(--dark-color);">Dla liceum</h3>
                <ul class="documents-list">
                    <?php foreach($dokumenty_liceum as $dokument): ?>
                    <li>
                        <i class="fas fa-file-alt"></i>
                        <span><?php echo $dokument; ?></span>
                        
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Formularz rekrutacyjny -->
<section class="form-section" id="form">
    <div class="container">
        <div class="section-title animate-fade-in">
            <h2>Formularz rekrutacyjny</h2>
            <p>Wypełnij formularz, a skontaktujemy się z Tobą w ciągu 24h</p>
        </div>
        
        <div class="form-container animate-fade-in" style="animation-delay: 0.2s;">
            <form id="recruitmentForm" method="POST" action="send_recruitment.php">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Imię *</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nazwisko *</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Email *</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Telefon *</label>
                        <input type="tel" name="phone" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Wybierz szkołę *</label>
                    <select name="school" class="form-control" required onchange="updateDirections()" id="schoolSelect">
                        <option value="">-- Wybierz szkołę --</option>
                        <option value="technikum">Technikum (5-letnie)</option>
                        <option value="liceum">Liceum Ogólnokształcące (4-letnie)</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Wybierz kierunek/profil *</label>
                    <select name="direction" class="form-control" required id="directionSelect">
                        <option value="">-- Najpierw wybierz szkołę --</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Klasa *</label>
                    <select name="class" class="form-control" required>
                        <option value="">-- Wybierz klasę --</option>
                        <option value="1">Klasa 1</option>
                        <option value="2">Klasa 2</option>
                        <option value="3">Klasa 3</option>
                        <option value="4">Klasa 4</option>
                        <option value="5">Klasa 5 (tylko technikum)</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Rok szkolny *</label>
                    <select name="year" class="form-control" required>
                        <option value="2026/2027">2026/2027</option>
                        <option value="2027/2028">2027/2028</option>
                        <option value="2028/2029">2028/2029</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Wiadomość (opcjonalnie)</label>
                    <textarea name="message" class="form-control" rows="4" placeholder="Masz pytania dotyczące rekrutacji, kierunków, terminów? Napisz do nas..."></textarea>
                </div>
                
                <div class="form-group">
                    <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                        <input type="checkbox" required style="margin-top: 3px;">
                        <span style="font-size: 0.9rem; color: var(--gray-color);">
                            Wyrażam zgodę na przetwarzanie moich danych osobowych w celu przeprowadzenia rekrutacji zgodnie z RODO.
                        </span>
                    </label>
                </div>
                
                <div style="text-align: center; margin-top: 40px;">
                    <button type="submit" class="btn btn-primary" style="padding: 15px 50px; font-size: 1.1rem;">
                        <i class="fas fa-paper-plane"></i> Wyślij zgłoszenie rekrutacyjne
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section">
    <div class="container">
        <div class="section-title animate-fade-in">
            <h2>Najczęściej zadawane pytania</h2>
            <p>Znajdź odpowiedzi na swoje pytania dotyczące rekrutacji</p>
        </div>

        <div class="grid grid-2">

            <!-- 1 -->
            <div class="card animate-fade-in">
                <div class="card-body">
                    <h3>Kiedy rozpoczyna się rekrutacja?</h3>
                    <p>Rekrutacja do klasy I rozpoczyna się w lutym każdego roku. Do klas wyższych uczniów przyjmujemy przez cały rok – w miarę dostępności miejsc.</p>
                </div>
            </div>

            <!-- 2 -->
            <div class="card animate-fade-in" style="animation-delay:0.1s;">
                <div class="card-body">
                    <h3>Jak wygląda proces rekrutacji?</h3>
                    <p>Kandydat składa wymagane dokumenty w sekretariacie szkoły, następnie odbywa rozmowę kwalifikacyjną. Po pozytywnej decyzji dyrektora szkoły rodzice lub opiekunowie prawni podpisują umowę i dopełniają formalności.</p>
                </div>
            </div>

            <!-- 3 -->
            <div class="card animate-fade-in" style="animation-delay:0.2s;">
                <div class="card-body">
                    <h3>Czy obowiązują progi punktowe?</h3>
                    <p>Nie. O przyjęciu decyduje rozmowa kwalifikacyjna, predyspozycje kandydata oraz ocena zachowania.</p>
                </div>
            </div>

            <!-- 4 -->
            <div class="card animate-fade-in" style="animation-delay:0.3s;">
                <div class="card-body">
                    <h3>Czy szkoła jest płatna?</h3>
                    <p>Tak. Obowiązuje opłata wpisowa oraz czesne, którego wysokość zależy od wybranego kierunku.</p>
                </div>
            </div>

            <!-- 5 -->
            <div class="card animate-fade-in" style="animation-delay:0.4s;">
                <div class="card-body">
                    <h3>Czy można zmienić klasę w trakcie roku szkolnego?</h3>
                    <p>Tak, istnieje taka możliwość – po analizie sytuacji i dostępności miejsc.</p>
                </div>
            </div>

            <!-- 6 -->
            <div class="card animate-fade-in" style="animation-delay:0.5s;">
                <div class="card-body">
                    <h3>Jak wygląda plan lekcji?</h3>
                    <p>Zajęcia odbywają się od poniedziałku do piątku. Rozpoczynają się zazwyczaj po godzinie 8:15 (sporadycznie o 7:30), a kończą najpóźniej między 16:00 a 17:40.</p>
                </div>
            </div>

            <!-- 7 -->
            <div class="card animate-fade-in" style="animation-delay:0.6s;">
                <div class="card-body">
                    <h3>Ile godzin obejmują praktyki zawodowe?</h3>
                    <p>Łączny wymiar praktyk zawodowych wynosi 280 godzin. Szkoła współpracuje z pracodawcami i organizuje miejsca praktyk dla uczniów.</p>
                </div>
            </div>

            <!-- 8 -->
            <div class="card animate-fade-in" style="animation-delay:0.7s;">
                <div class="card-body">
                    <h3>Czy uczniowie mają dostęp do nowoczesnych pracowni?</h3>
                    <p>Tak. Dysponujemy specjalistycznymi pracowniami: gastronomiczną, fryzjerską, komputerową, studiem nagrań, pracownią montażu dźwięku oraz pracownią nagłośnień.</p>
                </div>
            </div>

            <!-- 9 -->
            <div class="card animate-fade-in" style="animation-delay:0.8s;">
                <div class="card-body">
                    <h3>Czy uczniowie biorą udział w projektach międzynarodowych?</h3>
                    <p>Tak. Uczniowie mogą uczestniczyć w projektach realizowanych w ramach programu Erasmus+, obejmujących zagraniczne praktyki i wymiany edukacyjne.</p>
                </div>
            </div>

            <!-- 10 -->
            <div class="card animate-fade-in" style="animation-delay:0.9s;">
                <div class="card-body">
                    <h3>Czym różni się matura w technikum od matury w liceum?</h3>
                    <p>Egzamin maturalny jest taki sam w obu typach szkół. Uczeń technikum oprócz matury zdobywa również kwalifikacje zawodowe.</p>
                </div>
            </div>

            <!-- 11 -->
            <div class="card animate-fade-in" style="animation-delay:1.0s;">
                <div class="card-body">
                    <h3>Jak wygląda zdawalność matur i egzaminów zawodowych?</h3>
                    <p>Zdawalność utrzymuje się na dobrym poziomie i jest systematycznie analizowana. Organizowane są konsultacje, zajęcia dodatkowe i powtórzeniowe przygotowujące do egzaminów.</p>
                </div>
            </div>

            <!-- 12 -->
            <div class="card animate-fade-in" style="animation-delay:1.1s;">
                <div class="card-body">
                    <h3>Czy szkoła zapewnia wsparcie pedagoga lub doradcy zawodowego?</h3>
                    <p>Tak. Uczniowie mogą korzystać ze wsparcia pedagoga oraz doradcy zawodowego. Współpracujemy również z poradniami psychologiczno-pedagogicznymi.</p>
                </div>
            </div>

            <!-- 13 -->
            <div class="card animate-fade-in" style="animation-delay:1.2s;">
                <div class="card-body">
                    <h3>Czy przyjmowani są uczniowie ze specjalnymi potrzebami edukacyjnymi?</h3>
                    <p>Każdego ucznia traktujemy indywidualnie. Jeśli szkoła jest w stanie zapewnić odpowiednie warunki i wsparcie, z otwartością przyjmujemy go do naszej społeczności, dbając o bezpieczne i przyjazne środowisko nauki.</p>
                </div>
            </div>

            <!-- 14 -->
            <div class="card animate-fade-in" style="animation-delay:1.3s;">
                <div class="card-body">
                    <h3>Jak wygląda kontakt szkoły z rodzicami?</h3>
                    <p>Utrzymujemy stały kontakt poprzez zebrania, dni otwarte, dziennik elektroniczny oraz indywidualne konsultacje z nauczycielami i specjalistami.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content animate-fade-in">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--dark-color);">Masz pytania?</h2>
            <p style="font-size: 1.2rem; color: var(--gray-color); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Skontaktuj się z nami telefonicznie lub odwiedź sekretariat szkoły.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+48786982711" class="btn btn-primary" style="padding: 15px 40px; font-size: 1.1rem;">
                    <i class="fas fa-phone"></i> Zadzwoń: 786 982 711
                </a>
                <a href="kontakt.php" class="btn btn-secondary" style="padding: 15px 40px; font-size: 1.1rem;">
                    <i class="fas fa-map-marker-alt"></i> Odwiedź nas
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Funkcja do aktualizacji kierunków w zależności od wybranej szkoły
    function updateDirections() {
        const schoolSelect = document.getElementById('schoolSelect');
        const directionSelect = document.getElementById('directionSelect');
        const selectedSchool = schoolSelect.value;
        
        // Wyczyszczenie opcji
        directionSelect.innerHTML = '<option value="">-- Wybierz kierunek/profil --</option>';
        
        if (selectedSchool === 'technikum') {
            // Kierunki technikum
            directionSelect.innerHTML += `
                <optgroup label="Technikum (5-letnie)">
                    <option value="technik_fryzjer">Technik usług fryzjerskich – kosmetyka</option>
                    <option value="technik_zywienia">Technik żywienia i usług gastronomicznych – dietetyka</option>
                    <option value="technik_nagrań">Technik realizacji nagrań</option>
                    <option value="technik_nagłośnień">Technik realizacji nagłośnień</option>
                    <option value="technik_informatyk">Technik informatyk </option>
                    <option value="technik_programista">Technik programista </option>
                </optgroup>
            `;
        } else if (selectedSchool === 'liceum') {
            // Profile liceum
            directionSelect.innerHTML += `
                <optgroup label="Liceum Ogólnokształcące (4-letnie)">
                    <option value="mat_fiz">Klasa matematyczno-fizyczna</option>
                    <option value="bio_chem">Klasa biologiczno-chemiczna</option>
                    <option value="humanistyczna">Klasa humanistyczna</option>
                    <option value="lingwistyczna">Klasa lingwistyczna</option>
                    <option value="politechniczna">Klasa politechniczna</option>
                    <option value="artystyczna">Klasa artystyczna</option>
                </optgroup>
            `;
        }
    }
    

    
    // Inicjalizacja przy ładowaniu strony
    document.addEventListener('DOMContentLoaded', function() {
        // Można dodać inne inicjalizacje
    });
</script>

<?php
echo generateFooter();
?>