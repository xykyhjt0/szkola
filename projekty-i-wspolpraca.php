<?php
require_once 'config.php';

ob_start();
echo generateHeader('Projekty i współpraca', 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
?>

<style>
    .projects-hero {
        background: linear-gradient(135deg, #2c3e50, #4a6572);
        color: white;
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .projects-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
        opacity: 0.1;
    }
    
    .projects-hero-content {
        position: relative;
        z-index: 2;
    }
    
    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .project-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }
    
    .project-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #3498db, #2ecc71);
    }
    
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .project-icon {
        font-size: 2.5rem;
        color: #3498db;
        margin-bottom: 20px;
    }
    
    .project-badge {
        display: inline-block;
        padding: 5px 12px;
        background: #e3f2fd;
        color: #3498db;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    /* Partnerzy sekcja */
    .partners-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        padding: 80px 0;
    }
    
    .partners-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-top: 40px;
    }
    
    .partner-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 250px;
    }
    
    .partner-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .partner-logo {
        width: 120px;
        height: 120px;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border-radius: 50%;
        padding: 20px;
        box-shadow: var(--shadow-sm);
        border: 2px solid #f0f0f0;
    }
    
    .partner-logo img {
        max-width: 100%;
        max-height: 80px;
        filter: grayscale(100%);
        transition: var(--transition);
    }
    
    .partner-card:hover .partner-logo img {
        filter: grayscale(0%);
    }
    
    .partner-name {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 10px;
    }
    
    .partner-type {
        color: var(--gray-color);
        font-size: 0.9rem;
        margin-bottom: 15px;
    }
    
    .partner-description {
        color: var(--gray-color);
        font-size: 0.9rem;
        line-height: 1.5;
    }
    
    /* EU Projects sekcja */
    .eu-projects-section {
        padding: 80px 0;
    }
    
    .eu-project-card {
        background: linear-gradient(135deg, #f8f9fa, white);
        border-radius: var(--radius-lg);
        padding: 40px;
        margin-bottom: 30px;
        border: 2px solid #e0e0e0;
        position: relative;
    }
    
    .eu-project-card::before {
        content: '★';
        position: absolute;
        top: -15px;
        left: 30px;
        background: #004494;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }
    
    .eu-flag {
        color: #004494;
        font-size: 2rem;
        margin-bottom: 20px;
    }
    
    .project-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        margin-top: 30px;
        padding-top: 30px;
        border-top: 1px solid #eee;
    }
    
    .stat-item {
        text-align: center;
        padding: 20px;
        background: white;
        border-radius: var(--radius-md);
        box-shadow: var(--shadow-sm);
    }
    
    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: #3498db;
        margin-bottom: 5px;
    }
    
    .stat-label {
        color: var(--gray-color);
        font-size: 0.9rem;
    }
    
    /* Timeline */
    .timeline {
        position: relative;
        max-width: 800px;
        margin: 40px auto;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 100%;
        background: #3498db;
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 40px;
        width: 100%;
    }
    
    .timeline-item:nth-child(odd) {
        padding-right: calc(50% + 30px);
        text-align: right;
    }
    
    .timeline-item:nth-child(even) {
        padding-left: calc(50% + 30px);
    }
    
    .timeline-dot {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 20px;
        background: #3498db;
        border-radius: 50%;
        border: 4px solid white;
        box-shadow: 0 0 0 3px #3498db;
    }
    
    .timeline-content {
        background: white;
        padding: 25px;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
    }
    
    /* Awards sekcja */
    .awards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin-top: 40px;
    }
    
    .award-card {
        text-align: center;
        padding: 25px;
        background: white;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .award-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }
    
    .award-icon {
        font-size: 2.5rem;
        color: #FFD700;
        margin-bottom: 15px;
    }
    
    /* Responsywność */
    @media (max-width: 768px) {
        .projects-hero {
            padding: 60px 0;
        }
        
        .projects-hero h1 {
            font-size: 2rem;
        }
        
        .timeline::before {
            left: 30px;
        }
        
        .timeline-item:nth-child(odd),
        .timeline-item:nth-child(even) {
            padding: 0 0 0 60px;
            text-align: left;
        }
        
        .timeline-dot {
            left: 30px;
        }
        
        .partners-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .partner-card {
            padding: 20px;
            min-height: 200px;
        }
        
        .partner-logo {
            width: 80px;
            height: 80px;
            padding: 15px;
        }
        
        .project-stats {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .eu-project-card {
            padding: 25px 20px;
        }
    }
    
    @media (max-width: 480px) {
        .projects-grid {
            grid-template-columns: 1fr;
        }
        
        .partners-grid {
            grid-template-columns: 1fr;
        }
        
        .project-stats {
            grid-template-columns: 1fr;
        }
        
        .awards-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- Hero sekcja -->
<section class="projects-hero">
    <div class="projects-hero-content">
        <div class="container">
            <h1 style="font-size: 3rem; margin-bottom: 20px;">Projekty i współpraca</h1>
            <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto; opacity: 0.9;">
                Innowacyjne projekty, międzynarodowe partnerstwa i rozwój poprzez współpracę
            </p>
        </div>
    </div>
</section>

<!-- Projekty UE sekcja -->
<section class="section eu-projects-section">
    <div class="container">
        <div class="section-title">
            <h2>Projekty Unii Europejskiej</h2>
            <p>Realizujemy innowacyjne projekty finansowane ze środków UE</p>
        </div>
        
        <div class="eu-project-card animate-fade-in">
            <div class="eu-flag">
                <i class="fas fa-flag-eu"></i>
            </div>
            <h3 style="color: #004494; margin-bottom: 15px;">"Skills for Future" - Erasmus+</h3>
            <p style="color: var(--gray-color); margin-bottom: 20px; line-height: 1.6;">
                W ramach projektu "Skills for Future" nasi uczniowie uczestniczą w międzynarodowych 
                praktykach zawodowych, rozwijając kluczowe kompetencje przyszłości. Projekt obejmuje 
                współpracę z 5 krajami UE i 15 instytucjami partnerskimi.
            </p>
            
            <div class="project-stats">
                <div class="stat-item">
                    <div class="stat-number">2024-2027</div>
                    <div class="stat-label">Okres realizacji</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">€250,000</div>
                    <div class="stat-label">Budżet projektu</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Uczestników</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Krajów partnerskich</div>
                </div>
            </div>
        </div>
        
        <div class="eu-project-card animate-fade-in" style="animation-delay: 0.1s;">
            <div class="eu-flag">
                <i class="fas fa-leaf"></i>
            </div>
            <h3 style="color: #27ae60; margin-bottom: 15px;">"Eco-Tech Schools"</h3>
            <p style="color: var(--gray-color); margin-bottom: 20px; line-height: 1.6;">
                Projekt promujący ekologiczne technologie w edukacji zawodowej. 
                W ramach inicjatywy modernizujemy pracownie zawodowe, wprowadzając 
                rozwiązania energooszczędne i ekologiczne.
            </p>
            
            <div class="project-stats">
                <div class="stat-item">
                    <div class="stat-number">2023-2025</div>
                    <div class="stat-label">Okres realizacji</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">€180,000</div>
                    <div class="stat-label">Budżet projektu</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Nowych pracowni</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnerzy sekcja -->
<section class="partners-section">
    <div class="container">
        <div class="section-title">
            <h2>Nasi partnerzy</h2>
            <p>Współpracujemy z liderami branży i instytucjami edukacyjnymi</p>
        </div>
        
        <div class="partners-grid">
            <!-- Partner 1 - Sii -->
            <div class="partner-card animate-fade-in">
                <div class="partner-logo">
                    <i class="fas fa-laptop-code" style="font-size: 2.5rem; color: #3498db;"></i>
                </div>
                <div class="partner-name">Sii Polska</div>
                <div class="partner-type">Partner technologiczny</div>
                <div class="partner-description">
                    Współpraca w zakresie praktyk zawodowych, mentoringu i najnowszych technologii IT.
                </div>
            </div>
            
            <!-- Partner 2 - Accenture -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.1s;">
                <div class="partner-logo">
                    <i class="fas fa-chart-line" style="font-size: 2.5rem; color: #A100FF;"></i>
                </div>
                <div class="partner-name">Accenture</div>
                <div class="partner-type">Partner biznesowy</div>
                <div class="partner-description">
                    Programy stażowe, warsztaty z digitalizacji i transformacji cyfrowej.
                </div>
            </div>
            
            <!-- Partner 3 - PZU -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.2s;">
                <div class="partner-logo">
                    <i class="fas fa-shield-alt" style="font-size: 2.5rem; color: #004494;"></i>
                </div>
                <div class="partner-name">PZU SA</div>
                <div class="partner-type">Partner ubezpieczeniowy</div>
                <div class="partner-description">
                    Program stypendialny, praktyki zawodowe, ubezpieczenia dla uczniów.
                </div>
            </div>
            
            <!-- Partner 4 - Politechnika Warszawska -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.3s;">
                <div class="partner-logo">
                    <i class="fas fa-university" style="font-size: 2.5rem; color: #D50000;"></i>
                </div>
                <div class="partner-name">Politechnika Warszawska</div>
                <div class="partner-type">Partner akademicki</div>
                <div class="partner-description">
                    Wspólne projekty badawcze, wykłady gościnne, współpraca naukowa.
                </div>
            </div>
            
            <!-- Partner 5 - Hotel Marriott -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.4s;">
                <div class="partner-logo">
                    <i class="fas fa-hotel" style="font-size: 2.5rem; color: #C2185B;"></i>
                </div>
                <div class="partner-name">Hotel Marriott</div>
                <div class="partner-type">Partner branży hotelarskiej</div>
                <div class="partner-description">
                    Praktyki zawodowe dla techników żywienia i techników usług fryzjerskich.
                </div>
            </div>
            
            <!-- Partner 6 - Sony Music -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.5s;">
                <div class="partner-logo">
                    <i class="fas fa-music" style="font-size: 2.5rem; color: #000000;"></i>
                </div>
                <div class="partner-name">Sony Music Poland</div>
                <div class="partner-type">Partner branży muzycznej</div>
                <div class="partner-description">
                    Praktyki w studiach nagraniowych dla techników realizacji nagrań i nagłośnień.
                </div>
            </div>
        </div>
        
        <!-- Dodatkowi partnerzy - grid 2 -->
        <div class="partners-grid" style="margin-top: 40px;">
            <!-- Partner 7 - Microsoft -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.6s;">
                <div class="partner-logo">
                    <i class="fab fa-microsoft" style="font-size: 2.5rem; color: #00A4EF;"></i>
                </div>
                <div class="partner-name">Microsoft</div>
                <div class="partner-type">Partner technologiczny</div>
                <div class="partner-description">
                    Program Microsoft Imagine Academy, certyfikacje, szkolenia.
                </div>
            </div>
            
            <!-- Partner 8 - Cisco -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.7s;">
                <div class="partner-logo">
                    <i class="fas fa-network-wired" style="font-size: 2.5rem; color: #1BA0D7;"></i>
                </div>
                <div class="partner-name">Cisco Networking Academy</div>
                <div class="partner-type">Partner edukacyjny</div>
                <div class="partner-description">
                    Akademia sieciowa Cisco, certyfikacje CCNA, szkolenia z sieci komputerowych.
                </div>
            </div>
            
            <!-- Partner 9 - Nestlé -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.8s;">
                <div class="partner-logo">
                    <i class="fas fa-utensils" style="font-size: 2.5rem; color: #E2001A;"></i>
                </div>
                <div class="partner-name">Nestlé Polska</div>
                <div class="partner-type">Partner branży spożywczej</div>
                <div class="partner-description">
                    Praktyki w centrum badawczo-rozwojowym, programy żywieniowe.
                </div>
            </div>
            
            <!-- Partner 10 - Narodowe Centrum Kultury -->
            <div class="partner-card animate-fade-in" style="animation-delay: 0.9s;">
                <div class="partner-logo">
                    <i class="fas fa-landmark" style="font-size: 2.5rem; color: #8B4513;"></i>
                </div>
                <div class="partner-name">Narodowe Centrum Kultury</div>
                <div class="partner-type">Partner kulturalny</div>
                <div class="partner-description">
                    Projekty kulturalne, warsztaty artystyczne, współpraca z instytucjami kultury.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline współpracy -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Historia współpracy</h2>
            <p>Kluczowe momenty w rozwoju naszych partnerstw</p>
        </div>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4 style="color: var(--primary-color); margin-bottom: 10px;">2024</h4>
                    <p style="color: var(--gray-color);">
                        Rozpoczęcie projektu Erasmus+ "Skills for Future" z budżetem €250,000.
                        Nawiązanie współpracy z 5 nowymi partnerami międzynarodowymi.
                    </p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4 style="color: var(--primary-color); margin-bottom: 10px;">2023</h4>
                    <p style="color: var(--gray-color);">
                        Podpisanie umowy partnerskiej z Politechniką Warszawską.
                        Rozpoczęcie projektu "Eco-Tech Schools" finansowanego z funduszy UE.
                    </p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4 style="color: var(--primary-color); margin-bottom: 10px;">2022</h4>
                    <p style="color: var(--gray-color);">
                        Nawiązanie współpracy z firmą Sii Polska. 
                        Uruchomienie pierwszej klasy patronackiej pod patronatem Microsoft.
                    </p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4 style="color: var(--primary-color); margin-bottom: 10px;">2021</h4>
                    <p style="color: var(--gray-color);">
                        Rozpoczęcie programu stażowego z Accenture.
                        Uzyskanie statusu Cisco Networking Academy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nagrody i wyróżnienia -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <div class="section-title">
            <h2>Nagrody i wyróżnienia</h2>
            <p>Osiągnięcia naszych projektów i współpracy</p>
        </div>
        
        <div class="awards-grid">
            <div class="award-card animate-fade-in">
                <div class="award-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h4 style="margin-bottom: 10px;">European Quality Label</h4>
                <p style="color: var(--gray-color); font-size: 0.9rem;">
                    Certyfikat jakości projektów Erasmus+ 2023
                </p>
            </div>
            
            <div class="award-card animate-fade-in" style="animation-delay: 0.1s;">
                <div class="award-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <h4 style="margin-bottom: 10px;">Innowacyjna Szkoła</h4>
                <p style="color: var(--gray-color); font-size: 0.9rem;">
                    Nagroda Ministra Edukacji i Nauki 2022
                </p>
            </div>
            
            <div class="award-card animate-fade-in" style="animation-delay: 0.2s;">
                <div class="award-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4 style="margin-bottom: 10px;">Best Practice Partner</h4>
                <p style="color: var(--gray-color); font-size: 0.9rem;">
                    Wyróżnienie od Cisco Networking Academy 2023
                </p>
            </div>
            
            <div class="award-card animate-fade-in" style="animation-delay: 0.3s;">
                <div class="award-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h4 style="margin-bottom: 10px;">European School Award</h4>
                <p style="color: var(--gray-color); font-size: 0.9rem;">
                    Za projekty międzynarodowe 2024
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA sekcja -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Chcesz zostać naszym partnerem?</h2>
            <p>Zapraszamy do współpracy firmy i instytucje</p>
        </div>
        
        <div style="text-align: center; max-width: 600px; margin: 0 auto;">
            <p style="color: var(--gray-color); margin-bottom: 30px; line-height: 1.6;">
                Oferujemy różne formy współpracy: patronaty klas, programy stażowe, 
                wspólne projekty badawcze i rozwojowe. Skontaktuj się z nami, aby omówić możliwości współpracy.
            </p>
            
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="kontakt.php" class="btn btn-primary">
                    <i class="fas fa-handshake"></i> Zaproponuj współpracę
                </a>
                <a href="aktualnosci.php" class="btn btn-secondary">
                    <i class="fas fa-newspaper"></i> Aktualne projekty
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Animacja dla timeline
    document.addEventListener('DOMContentLoaded', function() {
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });
        
        timelineItems.forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(item);
        });
    });
</script>

<?php
echo generateFooter();
?>