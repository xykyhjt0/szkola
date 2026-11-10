<?php
require_once 'config.php';

ob_start();
echo generateHeader('O szkole', 'images/o-szkole-hero.jpg');
?>

<style>
    .about-hero {
        background: linear-gradient(rgba(0,0,128,1), rgba(0,0,128,1)), url('images/o-szkole-hero.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0 100px;
        text-align: center;
    }
    
    .about-content {
        max-width: 900px;
        margin: 0 auto;
    }
    
    .about-section {
        margin-bottom: 60px;
    }
    
    .about-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 40px;
        box-shadow: var(--shadow-md);
        margin-bottom: 30px;
    }
    
    .mission-vision {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .mission-card, .vision-card {
        padding: 30px;
        border-radius: var(--radius-lg);
        color: white;
        position: relative;
        overflow: hidden;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .mission-card {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    }
    
    .vision-card {
        background: linear-gradient(135deg, var(--secondary-color), #ff8a00);
    }
    
    .mission-card h3, .vision-card h3 {
        font-size: 1.8rem;
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
    }
    
    .mission-card p, .vision-card p {
        font-size: 1.1rem;
        line-height: 1.6;
        opacity: 0.9;
        position: relative;
        z-index: 2;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .value-card {
        text-align: center;
        padding: 30px;
        background: white;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .value-icon {
        width: 70px;
        height: 70px;
        background: var(--light-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: var(--primary-color);
        margin: 0 auto 20px;
    }
    
    .history-timeline {
        position: relative;
        max-width: 800px;
        margin: 50px auto;
        padding-left: 30px;
    }
    
    .history-timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
    }
    
    .history-item {
        margin-bottom: 40px;
        position: relative;
        padding-left: 30px;
    }
    
    .history-item::before {
        content: '';
        position: absolute;
        left: -36px;
        top: 5px;
        width: 15px;
        height: 15px;
        background: var(--primary-color);
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 0 0 3px var(--primary-color);
    }
    
    .history-year {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .team-card {
        text-align: center;
        background: white;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
    }
    
    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .team-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    
    .team-info {
        padding: 25px;
    }
    
    .team-name {
        font-size: 1.2rem;
        margin-bottom: 5px;
        color: var(--dark-color);
    }
    
    .team-position {
        color: var(--secondary-color);
        font-weight: 600;
        margin-bottom: 10px;
        font-size: 0.9rem;
    }
    
    .facilities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .facility-card {
        background: white;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
    }
    
    .facility-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .facility-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .facility-info {
        padding: 25px;
    }
    
    .numbers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .number-card {
        text-align: center;
        padding: 30px;
        background: white;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
    }
    
    .number-value {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 10px;
        line-height: 1;
    }
    
    .number-label {
        color: var(--gray-color);
        font-size: 1.1rem;
    }
</style>

<!-- Hero sekcja -->
<section class="about-hero">
    <div class="container">
        <h1 style="font-size: 3.5rem; margin-bottom: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">O szkole</h1>
        <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto; opacity: 0.9;">
            Poznaj naszą historię, misję, wartości i zespół, który tworzy wyjątkową atmosferę Szkoły na Starówce.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-content">
            <!-- Wprowadzenie -->
            <div class="about-section animate-fade-in">
                <div class="about-card">
                    <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--primary-color);">Szkoła na Starówce</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray-color); margin-bottom: 20px;">
                        Jesteśmy nowoczesną szkołą techniczną zlokalizowaną w samym sercu Warszawy, na historycznej Starówce. 
                        Jako część Zakładu Doskonalenia Zawodowego oferujemy wyjątkowe połączenie tradycji z nowoczesnością 
                        w kształceniu zawodowym.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray-color);">
                        Nasza szkoła to nie tylko miejsce nauki, ale także centrum rozwoju pasji i talentów. 
                        Stawiamy na praktyczne umiejętności, nowoczesne technologie i indywidualne podejście do każdego ucznia, 
                        przygotowując specjalistów gotowych na wyzwania współczesnego rynku pracy.
                    </p>
                </div>
            </div>
            
            <!-- Misja i Wizja -->
            <div class="about-section animate-fade-in" style="animation-delay: 0.1s;">
                <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color); text-align: center;">Nasza misja i wizja</h2>
                <div class="mission-vision">
                    <div class="mission-card">
                        <h3><i class="fas fa-bullseye"></i> Misja</h3>
                        <p>
                            Kształcimy kompetentnych specjalistów w nowoczesnych zawodach technicznych, łącząc solidną podstawę teoretyczną 
                            z praktycznymi umiejętnościami. Dbamy o wszechstronny rozwój uczniów, wspierając ich talenty i pasje 
                            w przyjaznej, innowacyjnej atmosferze.
                        </p>
                    </div>
                    <div class="vision-card">
                        <h3><i class="fas fa-eye"></i> Wizja</h3>
                        <p>
                            Być wiodącą szkołą techniczną w Warszawie, która dzięki doskonałej kadrze, nowoczesnemu wyposażeniu 
                            i partnerskim relacjom z pracodawcami kształci najlepszych specjalistów gotowych na wyzwania 
                            dynamicznie zmieniającego się rynku pracy.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Wartości -->
            <div class="about-section animate-fade-in" style="animation-delay: 0.2s;">
                <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color); text-align: center;">Nasze wartości</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 style="margin-bottom: 15px; color: var(--dark-color);">Jakość nauczania</h3>
                        <p style="color: var(--gray-color);">Stawiamy na najwyższe standardy edukacji, nowoczesne metody nauczania i ciągły rozwój kadry pedagogicznej.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 style="margin-bottom: 15px; color: var(--dark-color);">Wsparcie uczniów</h3>
                        <p style="color: var(--gray-color);">Indywidualne podejście, asystenci międzykulturowi i kompleksowe wsparcie w rozwoju edukacyjnym i osobistym.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 style="margin-bottom: 15px; color: var(--dark-color);">Społeczność</h3>
                        <p style="color: var(--gray-color);">Budujemy przyjazną atmosferę opartą na szacunku, zaufaniu i współpracy w ramach programu "Przyjazna Szkoła".</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 style="margin-bottom: 15px; color: var(--dark-color);">Innowacyjność</h3>
                        <p style="color: var(--gray-color);">Wprowadzamy nowoczesne technologie, współpracujemy z firmami IT i realizujemy projekty międzynarodowe.</p>
                    </div>
                </div>
            </div>
            
            <!-- Historia -->
            <div class="about-section animate-fade-in" style="animation-delay: 0.3s;">
                <div class="about-card">
                    <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--primary-color);">Nasza historia</h2>
                    <div class="history-timeline">
                        <div class="history-item">
                            <div class="history-year">2006</div>
                            <p>Powstanie Niepublicznego Technikum Fryzjerskiego ZDZ. Pierwszym dyrektorem została Pani Elżbieta Macińska-Jandrowicz. Rozpoczęto kształcenie w zawodzie <strong>technik usług fryzjerskich</strong>.</p>
                        </div>
                        <div class="history-item">
                            <div class="history-year">2011</div>
                            <p>Rozszerzenie oferty edukacyjnej o nowe zawody: <strong>asystent operatora dźwięku, kucharz, kelner, technik organizacji usług gastronomicznych</strong>. Zmiana nazwy na <strong>Niepubliczne Technikum Usługowe ZDZ</strong>.</p>
                        </div>
                        <div class="history-item">
                            <div class="history-year">2012</div>
                            <p>Uaktualnienie oferty o zawody: <strong>technik realizacji nagrań i nagłośnień</strong> oraz <strong>technik żywienia i usług gastronomicznych</strong>. Dyrektorem szkoły został Pan Krzysztof Zaborski.</p>
                        </div>
                        <div class="history-item">
                            <div class="history-year">2018</div>
                            <p>Wprowadzenie zawodu <strong>technik informatyk</strong> w odpowiedzi na rosnące zapotrzebowanie rynku. Dyrektorem szkoły zostaje Pani Justyna Cholewa.</p>
                        </div>
                        <div class="history-item">
                            <div class="history-year">2021</div>
                            <p>Wprowadzenie nowoczesnego kierunku <strong>technik programista</strong>, przygotowującego specjalistów dla branży IT.</p>
                        </div>
                        <div class="history-item">
                            <div class="history-year">2025</div>
                            <p>Technikum kształci w 6 zawodach: technik usług fryzjerskich, technik żywienia i usług gastronomicznych, technik realizacji nagrań, technik realizacji nagłośnień, technik informatyk, technik programista.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Zespół -->
<div class="about-section animate-fade-in" style="animation-delay: 0.4s;">
    <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color); text-align: center;">Nasza kadra</h2>

    <div class="team-grid">
        <div class="team-card">
            <!-- Здесь можно добавить фото: <img src="images/team/zmyslowski.jpg" alt="Adam Zmysłowski" class="team-image"> -->
            <div class="team-info">
                <h3 class="team-name">Adam Zmysłowski</h3>
                <div class="team-position">Nauczyciel historii, WOS-u, przedsiębiorczości, wychowawca, doradca zawodowy</div>
                <p style="color: var(--gray-color); font-size: 0.9rem;">Egzaminator OKE w Warszawie. Przygotowuje uczniów do olimpiad, z sukcesami na szczeblu wojewódzkim i ogólnopolskim. Pasjonat genealogii i kolekcjoner starych monet.</p>
            </div>
        </div>
        <div class="team-card">
            <div class="team-info">
                <h3 class="team-name">Jakub Komsta</h3>
                <div class="team-position">Nauczyciel wychowania fizycznego, wychowawca</div>
                <p style="color: var(--gray-color); font-size: 0.9rem;">Instruktor narciarstwa, nurkowania, piłki nożnej i siatkówki. Pasjonat sportów ekstremalnych – nurkowania, narciarstwa, motocykli, windsurfingu i żeglarstwa.</p>
            </div>
        </div>
        <div class="team-card">
            <div class="team-info">
                <h3 class="team-name">Aleksandra Szczudło – Smiechowska</h3>
                <div class="team-position">Nauczycielka języka polskiego, wychowawczyni</div>
                <p style="color: var(--gray-color); font-size: 0.9rem;">Absolwentka polonistyki UW, nauczycielka dyplomowana z doświadczeniem w pracy z uczniami w różnym wieku. Trenerka Odysei Umysłu. Miłośniczka podróży, różowego koloru i kryminałów.</p>
            </div>
        </div>
        <div class="team-card">
            <div class="team-info">
                <h3 class="team-name">Anna Cichacka</h3>
                <div class="team-position">Psycholożka szkolna</div>
                <p style="color: var(--gray-color); font-size: 0.9rem;">Pomaga uczniom w rozmowach o trudnościach, emocjach, stresie i samoakceptacji. Tworzy w szkole przestrzeń bez ocen i presji. W wolnym czasie ogląda filmy, spaceruje po Warszawie i dokształca się w kierunku psychoterapii.</p>
            </div>
        </div>
        <div class="team-card">
            <div class="team-info">
                <h3 class="team-name">Justyna Ławrynowicz</h3>
                <div class="team-position">Nauczycielka przedmiotów gastronomicznych</div>
                <p style="color: var(--gray-color); font-size: 0.9rem;">Szef kuchni z praktyką m.in. w restauracji Gordona Ramsaya w Londynie. Wymagająca i sprawiedliwa nauczycielka. Zainteresowania: psychologia, dietetyka, tworzenie nowych receptur.</p>
            </div>
        </div>
        <div class="team-card">
            <div class="team-info">
                <h3 class="team-name">Katarzyna Liszewska</h3>
                <div class="team-position">Psycholog, nauczyciel „podstaw psychologii”</div>
                <p style="color: var(--gray-color); font-size: 0.9rem;">Doświadczenie z pracy psychologa policyjnego i w służbie zdrowia. Na lekcjach pokazuje praktyczną stronę psychologii. W wolnym czasie tworzy biżuterię i czyta skandynawskie kryminały.</p>
            </div>
        </div>
        <div class="team-card">
            <div class="team-info">
                <h3 class="team-name">Jacek Hernik</h3>
                <div class="team-position">Nauczyciel wychowania fizycznego</div>
                <p style="color: var(--gray-color); font-size: 0.9rem;">Fizykoterapeuta z zamiłowania. Pasjonat turystyki pieszej i jazdy na rowerze. Na lekcjach stawia na bezpieczeństwo, zaangażowanie i dobrą atmosferę, a nie na rekordy sportowe.</p>
            </div>
        </div>
    </div>
</div>
            
            <!-- Baza dydaktyczna -->
<div class="about-section animate-fade-in" style="animation-delay: 0.5s;">
    <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color); text-align: center;">Baza dydaktyczna</h2>

    <div class="facilities-grid">

        <!-- 1 -->
        <div class="facility-card">
            <img src="images/pracownia-komputerowa.jpg" alt="Pracownia komputerowa" class="facility-image">
            <div class="facility-info">
                <h3>Pracownie komputerowe</h3>
                <p>5 nowoczesnych pracowni wyposażonych w komputery z najnowszym oprogramowaniem i stanowiska do programowania.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="facility-card">
            <img src="images/studio-nagran.jpg" alt="Studio nagrań" class="facility-image">
            <div class="facility-info">
                <h3>Studio nagrań</h3>
                <p>Profesjonalne studio z aparaturą do nagrań i realizacji dźwięku.</p>
            </div>
        </div>

        <!-- 3 -->
        <div class="facility-card">
            <img src="images/pracownia-gastronomiczna.jpg" alt="Pracownia gastronomiczna" class="facility-image">
            <div class="facility-info">
                <h3>Pracownia gastronomiczna</h3>
                <p>Nowocześnie wyposażona kuchnia do praktycznej nauki zawodu technika żywienia.</p>
            </div>
        </div>

        <!-- 4 -->
        <div class="facility-card">
            <img src="images/pracownia-naglosnien.jpg" alt="Pracownia nagłośnień" class="facility-image">
            <div class="facility-info">
                <h3>Pracownia nagłośnień</h3>
                <p>Wyposażona w profesjonalny sprzęt sceniczny i systemy nagłośnieniowe do nauki realizacji dźwięku.</p>
            </div>
        </div>

        <!-- 5 -->
        <div class="facility-card">
            <img src="images/montaz-dzwieku.jpg" alt="Pracownia montażu dźwięku" class="facility-image">
            <div class="facility-info">
                <h3>Pracownia montażu dźwięku</h3>
                <p>Stanowiska do edycji i postprodukcji audio z profesjonalnym oprogramowaniem.</p>
            </div>
        </div>

        <!-- 6 -->
        <div class="facility-card">
            <img src="images/pracownia-fryzjerska.jpg" alt="Pracownia fryzjerska" class="facility-image">
            <div class="facility-info">
                <h3>Pracownia fryzjerska</h3>
                <p>Nowoczesne stanowiska do nauki stylizacji włosów i technik fryzjerskich.</p>
            </div>
        </div>

        <!-- 7 -->
        <div class="facility-card">
            <img src="images/sala-terapii.jpg" alt="Sala terapii zajęciowej" class="facility-image">
            <div class="facility-info">
                <h3>Sala terapii zajęciowej</h3>
                <p>Przestrzeń wspierająca rozwój kompetencji społecznych i terapię zajęciową.</p>
            </div>
        </div>

        <!-- 8 -->
        <div class="facility-card">
            <img src="images/silownia.jpg" alt="Siłownia" class="facility-image">
            <div class="facility-info">
                <h3>Siłownia</h3>
                <p>Nowoczesna siłownia umożliwiająca rozwój sprawności fizycznej i aktywny styl życia.</p>
            </div>
        </div>

    </div>
</div>

            
            <!-- Programy specjalne -->
            <div class="about-section animate-fade-in" style="animation-delay: 0.7s;">
                <div class="about-card">
                    <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--primary-color);">Programy i inicjatywy</h2>
                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon" style="background: #e8f5e8;">
                                <i class="fas fa-globe-europe" style="color: #2e7d32;"></i>
                            </div>
                            <h3 style="margin-bottom: 15px; color: var(--dark-color);">ERASMUS+</h3>
                            <p style="color: var(--gray-color);">Praktyki zagraniczne w Grecji i innych krajach UE, rozwój kompetencji zawodowych i językowych.</p>
                        </div>
                        <div class="value-card">
                            <div class="value-icon" style="background: #e3f2fd;">
                                <i class="fas fa-handshake" style="color: #1565c0;"></i>
                            </div>
                            <h3 style="margin-bottom: 15px; color: var(--dark-color);">Przyjazna Szkoła</h3>
                            <p style="color: var(--gray-color);">Program integracji uczniów z Ukrainy i innych krajów, asystenci międzykulturowi, wsparcie adaptacyjne.</p>
                        </div>
                        <div class="value-card">
                            <div class="value-icon" style="background: #f3e5f5;">
                                <i class="fas fa-industry" style="color: #7b1fa2;"></i>
                            </div>
                            <h3 style="margin-bottom: 15px; color: var(--dark-color);">Współpraca z firmami</h3>
                            <p style="color: var(--gray-color);">Partnerskie relacje z firmami jak Sii Polska, praktyki, wizyty studyjne, mentoring zawodowy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color));">
    <div class="container">
        <div style="text-align: center; color: white; padding: 60px 0;">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Dołącz do naszej społeczności</h2>
            <p style="font-size: 1.2rem; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto; opacity: 0.9;">
                Zostań częścią wyjątkowej szkoły technicznej, gdzie tradycja spotyka się z nowoczesnością, a rozwój zawodowy idzie w parze z rozwojem osobistym.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="rekrutacja.php" class="btn btn-secondary">
                    <i class="fas fa-pen"></i> Zapisz się do szkoły
                </a>
                <a href="kontakt.php" class="btn btn-outline" style="border-color: white; color: white;">
                    <i class="fas fa-map-marker-alt"></i> Odwiedź nas na Starówce
                </a>
                <a href="https://www.facebook.com/SzkolaNaStarowce" class="btn btn-outline" style="border-color: white; color: white;">
                    <i class="fab fa-facebook-f"></i> Śledź nas na Facebooku
                </a>
            </div>
        </div>
    </div>
</section>

<?php
echo generateFooter();
?>