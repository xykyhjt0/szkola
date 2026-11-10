<?php
require_once 'config.php';

ob_start();
echo generateHeader('Dla ucznia i rodzica', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
?>

<style>
    .student-parent-hero {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 100px 0;
        text-align: center;
    }
    
    .main-nav {
        background: white;
        padding: 20px;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
        margin-bottom: 30px;
        position: sticky;
        top: 120px;
        z-index: 100;
    }
    
    .nav-tabs {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    .nav-tab {
        padding: 12px 24px;
        background: white;
        border: 2px solid #e0e0e0;
        border-radius: var(--radius-md);
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        color: var(--dark-color);
        cursor: pointer;
        transition: var(--transition);
        text-decoration: none;
        text-align: center;
        flex: 1;
        min-width: 150px;
    }
    
    .nav-tab:hover, .nav-tab.active {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }
    
    .tab-content {
        display: none;
        animation: fadeIn 0.5s ease-out;
    }
    
    .tab-content.active {
        display: block;
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .info-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
        border-top: 4px solid var(--primary-color);
    }
    
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .info-card h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
        color: var(--dark-color);
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .info-card h3 i {
        color: var(--primary-color);
    }
    
    .document-list {
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }
    
    .document-list li {
        padding: 12px 0;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .document-list li:last-child {
        border-bottom: none;
    }
    
    .document-icon {
        width: 40px;
        height: 40px;
        background: var(--light-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        flex-shrink: 0;
    }
    
    .download-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: var(--primary-color);
        color: white;
        border-radius: var(--radius-sm);
        text-decoration: none;
        font-size: 0.9rem;
        transition: var(--transition);
        margin-top: 10px;
    }
    
    .download-btn:hover {
        background: #0b3d91;
        transform: translateY(-2px);
    }
    
    .calendar-container {
        background: white;
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: var(--shadow-md);
        margin-top: 30px;
    }
    
    .timetable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .timetable th,
    .timetable td {
        padding: 15px;
        text-align: center;
        border: 1px solid #eee;
    }
    
    .timetable th {
        background: var(--primary-color);
        color: white;
        font-weight: 600;
    }
    
    .lesson-time {
        font-weight: 600;
        color: var(--primary-color);
    }
    
    .grades-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .grades-table th,
    .grades-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }
    
    .grades-table th {
        background: var(--light-blue);
        color: var(--primary-color);
        font-weight: 600;
    }
    
    .grade-excellent { color: #2ecc71; font-weight: 600; }
    .grade-good { color: #3498db; }
    .grade-average { color: #f39c12; }
    .grade-poor { color: #e74c3c; }
    
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }
    
    .contact-person {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        padding: 25px;
        background: white;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        border: 2px solid transparent;
        transition: var(--transition);
    }
    
    .contact-person:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }
    
    .contact-avatar {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 28px;
        flex-shrink: 0;
    }
    
    .payment-info {
        background: linear-gradient(135deg, #f8f9fa, white);
        border-radius: var(--radius-lg);
        padding: 30px;
        margin-top: 30px;
        border: 2px solid #e0e0e0;
    }
    
    .meeting-schedule {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .meeting-schedule th,
    .meeting-schedule td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }
    
    .meeting-schedule th {
        background: var(--light-blue);
        color: var(--primary-color);
        font-weight: 600;
    }
    
    .insurance-info {
        background: linear-gradient(135deg, #e3f2fd, white);
        padding: 30px;
        border-radius: var(--radius-lg);
        margin-top: 30px;
        border: 2px solid #bbdefb;
    }
    
    .faq-item {
        margin-bottom: 15px;
        padding: 20px;
        background: white;
        border-radius: var(--radius-md);
        box-shadow: var(--shadow-sm);
        cursor: pointer;
        transition: var(--transition);
    }
    
    .faq-item:hover {
        box-shadow: var(--shadow-md);
    }
    
    .faq-question {
        font-weight: 600;
        color: var(--dark-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .faq-answer {
        color: var(--gray-color);
        line-height: 1.6;
        margin-top: 15px;
        display: none;
    }
    
    .faq-item.active .faq-answer {
        display: block;
    }
    
    .section-header {
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #eee;
    }
    
    .section-header h2 {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--primary-color);
        margin-bottom: 10px;
    }
    
    .quick-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 40px;
    }
    
    .quick-link {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 20px;
        background: white;
        border-radius: var(--radius-lg);
        text-decoration: none;
        color: var(--dark-color);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .quick-link:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        color: var(--primary-color);
    }
    
    .quick-link i {
        font-size: 1.5rem;
        color: var(--primary-color);
    }
    
    .exam-info {
        background: linear-gradient(135deg, #fff3e0, white);
        padding: 30px;
        border-radius: var(--radius-lg);
        margin-top: 30px;
        border: 2px solid #ffcc80;
    }
    
    .practice-info {
        background: linear-gradient(135deg, #e8f5e9, white);
        padding: 30px;
        border-radius: var(--radius-lg);
        margin-top: 30px;
        border: 2px solid #c8e6c9;
    }
    
    .e-diary-section {
        background: linear-gradient(135deg, #f3e5f5, white);
        padding: 30px;
        border-radius: var(--radius-lg);
        margin-top: 30px;
        border: 2px solid #e1bee7;
    }
    
    .support-section {
        background: linear-gradient(135deg, #e3f2fd, white);
        padding: 30px;
        border-radius: var(--radius-lg);
        margin-top: 30px;
        border: 2px solid #bbdefb;
    }
    
html, body {
    max-width: 100%;
    overflow-x: hidden;
}

/* Контейнер для таблиц */
.calendar-container,
.info-card {
    overflow-x: hidden;
}

/* Обёртка таблиц */
.timetable,
.meeting-schedule,
.grades-table {
    width: 100%;
    max-width: 100%;
}

/* МОБИЛЬНЫЙ РЕЖИМ */
@media (max-width: 768px) {

    /* 🔹 Горизонтальный скролл вместо вылезания */
    .timetable,
    .meeting-schedule,
    .grades-table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
        font-size: 0.85rem;
    }

    /* Минимальная ширина таблицы */
    .timetable table,
    .meeting-schedule table {
        min-width: 700px;
    }

    /* Ячейки компактнее */
    .timetable th,
    .timetable td,
    .meeting-schedule th,
    .meeting-schedule td {
        padding: 8px 10px;
    }

    /* Время уроков компактнее */
    .lesson-time {
        font-size: 0.85rem;
        white-space: nowrap;
    }

    /* Заголовки секций по центру */
    .section-header h2,
    .section-header p {
        text-align: center;
    }

    /* Карточки */
    .info-card {
        padding: 20px;
    }

    /* Кнопки */
    .download-btn {
        width: 100%;
        justify-content: center;
        font-size: 0.9rem;
    }
}

/* СУПЕР-МАЛЕНЬКИЕ ЭКРАНЫ */
@media (max-width: 420px) {

    .timetable,
    .meeting-schedule {
        font-size: 0.8rem;
    }

    .timetable th,
    .timetable td {
        padding: 6px 8px;
    }
}
</style>

<section class="student-parent-hero">
    <div class="container">
        <h1 style="font-size: 3rem; margin-bottom: 20px;">Uczniowie i rodzice</h1>
        <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto; opacity: 0.9;">
            Wszystkie informacje, dokumenty i narzędzia potrzebne w trakcie nauki w naszej szkole.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="main-nav">
            <div class="nav-tabs">
                <a href="#plan-lekcji" class="nav-tab active" data-tab="plan-lekcji">
                    <i class="fas fa-calendar-alt"></i> Plan lekcji
                </a>
                <a href="#kalendarz" class="nav-tab" data-tab="kalendarz">
                    <i class="fas fa-calendar"></i> Kalendarz szkolny
                </a>
                <a href="#e-dziennik" class="nav-tab" data-tab="e-dziennik">
                    <i class="fas fa-book"></i> E-dziennik
                </a>
                <a href="#dokumenty" class="nav-tab" data-tab="dokumenty">
                    <i class="fas fa-file-alt"></i> Dokumenty
                </a>
                <a href="#praktyki" class="nav-tab" data-tab="praktyki">
                    <i class="fas fa-briefcase"></i> Praktyki zawodowe
                </a>
                <a href="#egzaminy" class="nav-tab" data-tab="egzaminy">
                    <i class="fas fa-graduation-cap"></i> Egzaminy
                </a>
                <a href="#wsparcie" class="nav-tab" data-tab="wsparcie">
                    <i class="fas fa-hands-helping"></i> Wsparcie
                </a>
                <a href="#rodzice" class="nav-tab" data-tab="rodzice">
                    <i class="fas fa-users"></i> Dla rodziców
                </a>
            </div>
        </div>
        
        <div id="plan-lekcji" class="tab-content active">
            <div class="section-header">
                <h2><i class="fas fa-calendar-alt"></i> Plan lekcji</h2>
                <p>Aktualny plan zajęć dla wszystkich klas</p>
            </div>
            
            <div class="info-card">
                <h3><i class="fas fa-calendar-alt"></i> Plan zajęć - Technikum klasa 1A</h3>
                <p style="color: var(--gray-color); margin-bottom: 20px;">
                    Aktualny plan lekcji obowiązujący od 02.09.2024 do 31.01.2025
                </p>
                
                <table class="timetable">
                    <thead>
                        <tr>
                            <th>Godzina</th>
                            <th>Poniedziałek</th>
                            <th>Wtorek</th>
                            <th>Środa</th>
                            <th>Czwartek</th>
                            <th>Piątek</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lesson-time">8:00 - 8:45</td>
                            <td>Matematyka</td>
                            <td>Język polski</td>
                            <td>Historia</td>
                            <td>Wychowanie fizyczne</td>
                            <td>Język angielski</td>
                        </tr>
                        <tr>
                            <td class="lesson-time">8:55 - 9:40</td>
                            <td>Język polski</td>
                            <td>Matematyka</td>
                            <td>Geografia</td>
                            <td>Przedmiot zawodowy</td>
                            <td>Matematyka</td>
                        </tr>
                        <tr>
                            <td class="lesson-time">9:50 - 10:35</td>
                            <td>Język angielski</td>
                            <td>Przedmiot zawodowy</td>
                            <td>Język polski</td>
                            <td>Informatyka</td>
                            <td>Przedmiot zawodowy</td>
                        </tr>
                        <tr>
                            <td class="lesson-time">10:45 - 11:30</td>
                            <td>Przedmiot zawodowy</td>
                            <td>Wychowanie fizyczne</td>
                            <td>Matematyka</td>
                            <td>Język angielski</td>
                            <td>Historia</td>
                        </tr>
                        <tr>
                            <td class="lesson-time">11:40 - 12:25</td>
                            <td>Informatyka</td>
                            <td>Religia/Etyka</td>
                            <td>Przedmiot zawodowy</td>
                            <td>Matematyka</td>
                            <td>Godzina wychowawcza</td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="margin-top: 30px; display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i> Pobierz plan (PDF)
                    </a>
                </div>
            </div>
            
            <div class="info-grid">
                <div class="info-card">
                    <h3><i class="fas fa-clock"></i> Godziny dzwonków</h3>
                    <p style="color: var(--gray-color);">
                        1. 7:30 - 8:10<br>
                        2. 8:15 - 9:00<br>
                        3. 9:05 - 9:50<br>
                        4. 10:00 - 10:45<br>
                        5. 10:50 - 11:35<br>
                        6. 11:40 - 12:25<br>
                        7. 12:45 - 13:30<br>
                        8. 13:35 - 14:20<br>
                        9. 14:25 - 15:10<br>
                        10. 15:15 - 16:00
                    </p>
                </div>

            </div>
        </div>
        
        <div id="kalendarz" class="tab-content">
            <div class="section-header">
                <h2><i class="fas fa-calendar"></i> Kalendarz szkolny</h2>
                <p>Wszystkie ważne daty i wydarzenia w roku szkolnym</p>
            </div>
            
            <div class="calendar-container">
                <div class="info-card">
                    <h3><i class="fas fa-calendar-alt"></i> Kalendarz roku szkolnego 2024/2025</h3>
                    
                    <table class="meeting-schedule">
                        <thead>
                            <tr>
                                <th>Okres</th>
                                <th>Data</th>
                                <th>Wydarzenie</th>
                                <th>Uwagi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rozpoczęcie roku</td>
                                <td>02.09.2024</td>
                                <td>Rozpoczęcie zajęć dydaktycznych</td>
                                <td>Msza św. o 8:00, apele klasowe</td>
                            </tr>
                            <tr>
                                <td>I semestr</td>
                                <td>02.09.2024 - 17.01.2025</td>
                                <td>Zajęcia dydaktyczne</td>
                                <td>Klasyfikacja 20.01.2025</td>
                            </tr>
                            <tr>
                                <td>Ferie zimowe</td>
                                <td>13-26.01.2025</td>
                                <td>Przerwa świąteczna</td>
                                <td>Woj. mazowieckie</td>
                            </tr>
                            <tr>
                                <td>Wiosenna przerwa</td>
                                <td>10-15.04.2025</td>
                                <td>Przerwa świąteczna</td>
                                <td>Wielkanoc</td>
                            </tr>
                            <tr>
                                <td>Egzaminy maturalne</td>
                                <td>05-23.05.2025</td>
                                <td>Sesja egzaminacyjna</td>
                                <td>Dodatkowe terminy w czerwcu</td>
                            </tr>
                            <tr>
                                <td>Zakończenie roku</td>
                                <td>20.06.2025</td>
                                <td>Zakończenie zajęć dydaktycznych</td>
                                <td>Wydanie świadectw</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="info-card" style="margin-top: 30px;">
                    <h3><i class="fas fa-bell"></i> Nadchodzące wydarzenia</h3>
                    
                    <table class="meeting-schedule">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Wydarzenie</th>
                                <th>Godzina</th>
                                <th>Miejsce</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15.12.2024</td>
                                <td>Dzień Otwarty Szkoły</td>
                                <td>10:00-16:00</td>
                                <td>Cała szkoła</td>
                            </tr>
                            <tr>
                                <td>20.12.2024</td>
                                <td>Wigilia szkolna</td>
                                <td>10:00-12:00</td>
                                <td>Aula szkolna</td>
                            </tr>
                            <tr>
                                <td>23-31.12.2024</td>
                                <td>Zimowa przerwa świąteczna</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>15.01.2025</td>
                                <td>Zebrania z rodzicami</td>
                                <td>17:00-19:00</td>
                                <td>Sale lekcyjne</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div id="e-dziennik" class="tab-content">
            <div class="section-header">
                <h2><i class="fas fa-book"></i> E-dziennik</h2>
                <p>Dostęp do ocen, frekwencji i komunikacji z nauczycielami</p>
            </div>
            
            <div class="e-diary-section">
                <h3 style="color: var(--primary-color); margin-bottom: 20px;">System e-dziennika</h3>
                
                <div class="info-grid">
                    <div class="info-card">
                        <h3><i class="fas fa-sign-in-alt"></i> Logowanie</h3>
                        <p style="color: var(--gray-color); margin-bottom: 15px;">
                            Dostęp do e-dziennika jest możliwy przez całą dobę z dowolnego urządzenia z dostępem do internetu.
                        </p>
                        <a href="https://portal.librus.pl/" class="download-btn" style="width: 100%; text-align: center;">
                            <i class="fas fa-external-link-alt"></i> Przejdź do e-dziennika
                        </a>
                    </div>
                    
                    <div class="info-card">
                        <h3><i class="fas fa-chart-bar"></i> Funkcje</h3>
                        <ul style="color: var(--gray-color); padding-left: 20px;">
                            <li>Przeglądanie ocen</li>
                            <li>Sprawdzanie frekwencji</li>
                            <li>Plan lekcji</li>
                            <li>Wiadomości od nauczycieli</li>
                            <li>Zadania domowe</li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
        
        <div id="dokumenty" class="tab-content">
            <div class="section-header">
                <h2><i class="fas fa-file-alt"></i> Dokumenty szkolne</h2>
                <p>Wszystkie potrzebne formularze i regulaminy</p>
            </div>
            
            <div class="info-grid">
                <div class="info-card">
                    <h3><i class="fas fa-file-contract"></i> Regulaminy</h3>
                    <ul class="document-list">
                        <li>
                            <div class="document-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 5px;">STATUT NIEPUBLICZNE TECHNIKUM USŁUGOWE ZDZ</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Podstawowy dokument regulujący działalność szkoły</p>
                                <a href="zdzfile/STATUT-NTU.pdf" class="download-btn">
                                    <i class="fas fa-download"></i> Pobierz PDF
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="document-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 5px;">Regulamin oceniania</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Zasady i kryteria oceniania osiągnięć uczniów</p>
                                <a href="#" class="download-btn">
                                    <i class="fas fa-download"></i> Pobierz PDF
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="document-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 5px;">Procedury bezpieczeństwa</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Zasady bezpieczeństwa w szkole i podczas zajęć</p>
                                <a href="#" class="download-btn">
                                    <i class="fas fa-download"></i> Pobierz PDF
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h3><i class="fas fa-print"></i> Druki do pobrania</h3>
                    <ul class="document-list">
                        <li>
                            <div class="document-icon">
                                <i class="fas fa-file-medical"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 5px;">Zwolnienie z zajęć</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Wniosek o usprawiedliwienie nieobecności</p>
                                <a href="#" class="download-btn">
                                    <i class="fas fa-download"></i> Pobierz DOC
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="document-icon">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 5px;">Podanie o indywidualny tok</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Wniosek o indywidualny tok nauki</p>
                                <a href="#" class="download-btn">
                                    <i class="fas fa-download"></i> Pobierz DOC
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="document-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 5px;">Wniosek o stypendium</h4>
                                <p style="color: var(--gray-color); font-size: 0.9rem;">Formularz ubiegania się o stypendium</p>
                                <a href="#" class="download-btn">
                                    <i class="fas fa-download"></i> Pobierz DOC
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="praktyki" class="tab-content">
            <div class="section-header">
                <h2><i class="fas fa-briefcase"></i> Praktyki zawodowe</h2>
                <p>Informacje o praktykach zawodowych dla uczniów technikum</p>
            </div>
            
            <div class="practice-info">
                <h3 style="color: var(--dark-color); margin-bottom: 20px;">Harmonogram praktyk</h3>
                
                <table class="meeting-schedule">
                    <thead>
                        <tr>
                            <th>Klasa</th>
                            <th>Okres praktyk</th>
                            <th>Liczba godzin</th>
                            <th>Termin zgłoszeń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>II Technikum</td>
                            <td>czerwiec 2025</td>
                            <td>80 godzin</td>
                            <td>do 31.03.2025</td>
                        </tr>
                        <tr>
                            <td>III Technikum</td>
                            <td>wrzesień 2025</td>
                            <td>160 godzin</td>
                            <td>do 30.06.2025</td>
                        </tr>
                        <tr>
                            <td>IV Technikum</td>
                            <td>luty-marzec 2025</td>
                            <td>160 godzin</td>
                            <td>do 15.01.2025</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="info-grid" style="margin-top: 30px;">
                    <div class="info-card">
                        <h3><i class="fas fa-building"></i> Firmy partnerskie</h3>
                        <p style="color: var(--gray-color);">
                            Nasi uczniowie odbywają praktyki w renomowanych firmach partnerskich, m.in.:
                        </p>
                        <ul style="color: var(--gray-color); padding-left: 20px; margin-top: 10px;">
                            <li>Sii Polska</li>
                            <li>Accenture</li>
                            <li>Restauracje sieciowe</li>
                            <li>Salony fryzjerskie</li>
                            <li>Studia nagrań</li>
                        </ul>
                    </div>
                    
                    <div class="info-card">
                        <h3><i class="fas fa-file-signature"></i> Dokumentacja</h3>
                        <ul class="document-list">
                            <li>
                                <div class="document-icon">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                                <div>
                                    <h4 style="margin: 0 0 5px;">Umowa o praktyki</h4>
                                    <a href="#" class="download-btn">
                                        <i class="fas fa-download"></i> Pobierz
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="document-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <div>
                                    <h4 style="margin: 0 0 5px;">Dziennik praktyk</h4>
                                    <a href="#" class="download-btn">
                                        <i class="fas fa-download"></i> Pobierz
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="egzaminy" class="tab-content">
            <div class="section-header">
                <h2><i class="fas fa-graduation-cap"></i> Egzaminy</h2>
                <p>Egzamin zawodowy i egzamin maturalny</p>
            </div>
            
            <div class="exam-info">
                <h3 style="color: var(--dark-color); margin-bottom: 20px;">Egzamin zawodowy</h3>
                
                <table class="meeting-schedule">
                    <thead>
                        <tr>
                            <th>Sesja</th>
                            <th>Termin pisemny</th>
                            <th>Termin praktyczny</th>
                            <th>Zapisy do</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Zimowa 2025</td>
                            <td>13-15.01.2025</td>
                            <td>16-31.01.2025</td>
                            <td>15.11.2024</td>
                        </tr>
                        <tr>
                            <td>Letnia 2025</td>
                            <td>16-18.06.2025</td>
                            <td>19-30.06.2025</td>
                            <td>15.04.2025</td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="margin-top: 30px;">
                    <h3 style="color: var(--dark-color); margin-bottom: 20px;">Egzamin maturalny 2025</h3>
                    
                    <table class="meeting-schedule">
                        <thead>
                            <tr>
                                <th>Część</th>
                                <th>Data</th>
                                <th>Godzina</th>
                                <th>Przedmiot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pisemna</td>
                                <td>05.05.2025</td>
                                <td>9:00</td>
                                <td>Język polski - pp</td>
                            </tr>
                            <tr>
                                <td>Pisemna</td>
                                <td>06.05.2025</td>
                                <td>9:00</td>
                                <td>Matematyka - pp</td>
                            </tr>
                            <tr>
                                <td>Pisemna</td>
                                <td>07.05.2025</td>
                                <td>9:00</td>
                                <td>Język angielski - pp</td>
                            </tr>
                            <tr>
                                <td>Ustna</td>
                                <td>08-20.05.2025</td>
                                <td>wg harmonogramu</td>
                                <td>Języki obce</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
            </div>
        </div>
        
        <div id="wsparcie" class="tab-content">
            <div class="section-header">
                <h2><i class="fas fa-hands-helping"></i> Wsparcie</h2>
                <p>Pedagog, doradca zawodowy, psycholog - pomoc dla uczniów</p>
            </div>
            
            <div class="support-section">
                <div class="contact-grid">
                    <div class="contact-person">
                        <div class="contact-avatar">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 5px;">Maria Wiśniewska</h4>
                            <div style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">Pedagog szkolny</div>
                            <div style="color: var(--gray-color); font-size: 0.9rem;">
                                <p><i class="fas fa-calendar"></i> Poniedziałek - Piątek 8:00-15:00</p>
                                <p><i class="fas fa-phone"></i> (22) 831 74 30 w. 103</p>
                                <p><i class="fas fa-envelope"></i> pedagog@szkola-starowka.pl</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-person">
                        <div class="contact-avatar">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 5px;">Jan Kowalski</h4>
                            <div style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">Doradca zawodowy</div>
                            <div style="color: var(--gray-color); font-size: 0.9rem;">
                                <p><i class="fas fa-calendar"></i> Wtorek, Czwartek 10:00-14:00</p>
                                <p><i class="fas fa-phone"></i> (22) 831 74 30 w. 104</p>
                                <p><i class="fas fa-envelope"></i> doradca@szkola-starowka.pl</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-person">
                        <div class="contact-avatar">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 5px;">Anna Nowak</h4>
                            <div style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">Psycholog</div>
                            <div style="color: var(--gray-color); font-size: 0.9rem;">
                                <p><i class="fas fa-calendar"></i> Środa, Piątek 9:00-13:00</p>
                                <p><i class="fas fa-phone"></i> (22) 831 74 30 w. 105</p>
                                <p><i class="fas fa-envelope"></i> psycholog@szkola-starowka.pl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="rodzice" class="tab-content">
            <div class="section-header">
                <h2><i class="fas fa-users"></i> Dla rodziców</h2>
                <p>Informacje i narzędzia dla rodziców uczniów</p>
            </div>
            
            <div class="payment-info">
                <h3 style="color: var(--dark-color); margin-bottom: 20px;">Opłaty szkolne 2024/2025</h3>
                
                <table class="meeting-schedule">
                    <thead>
                        <tr>
                            <th>Rodzaj opłaty</th>
                            <th>Kwota</th>
                            <th>Termin płatności</th>
                            <th>Numer konta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Wpisowe (jednorazowo)</td>
                            <td>200 zł</td>
                            <td>Do 15.09.2024</td>
                            <td>12 3456 7890 1234 5678 9012 3456</td>
                        </tr>
                        <tr>
                            <td>Ubezpieczenie NNW</td>
                            <td>50 zł</td>
                            <td>Do 30.09.2024</td>
                            <td>12 3456 7890 1234 5678 9012 3456</td>
                        </tr>
                        <tr>
                            <td>Rada rodziców</td>
                            <td>30 zł</td>
                            <td>Do 30.09.2024</td>
                            <td>98 7654 3210 9876 5432 1098 7654</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="insurance-info" style="margin-top: 30px;">
                <h3 style="color: #1565c0; margin-bottom: 20px;">Ubezpieczenie NNW</h3>
                <p style="color: var(--gray-color); margin-bottom: 20px;">
                    Wszyscy uczniowie są objęci grupowym ubezpieczeniem NNW (Następstw Nieszczęśliwych Wypadków). 
                    Składka wynosi 50 zł na rok szkolny.
                </p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <div>
                        <strong>Suma ubezpieczenia:</strong> 15 000 zł
                    </div>
                    <div>
                        <strong>Numer polisy:</strong> NWW/2024/123456
                    </div>
                    <div>
                        <strong>Ubezpieczyciel:</strong> PZU SA
                    </div>
                </div>
            </div>
            
        </div>
        
        <div style="margin-top: 50px;">
            <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color);">Przydatne linki</h2>
            <div class="quick-links">
                <a href="https://portal.librus.pl/" class="quick-link">
                    <i class="fas fa-book"></i>
                    <div>
                        <h4 style="margin: 0;">E-dziennik</h4>
                        <p style="color: var(--gray-color); margin: 5px 0 0; font-size: 0.9rem;">Dostęp do ocen i frekwencji</p>
                    </div>
                </a>
                <a href="mailto:szkoly@zdz.edu.pl" class="quick-link">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4 style="margin: 0;">Szkolna poczta</h4>
                        <p style="color: var(--gray-color); margin: 5px 0 0; font-size: 0.9rem;">Komunikacja ze szkolą</p>
                    </div>
                </a>
            </div>
        </div>
        
        <div style="margin-top: 50px;">
            <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color);">Często zadawane pytania</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Jak sprawdzić oceny dziecka?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Oceny są dostępne w dzienniku elektronicznym. Rodzice otrzymują login i hasło na początku roku szkolnego. 
                    W przypadku problemów z dostępem prosimy o kontakt z wychowawcą klasy.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Jak zgłosić nieobecność dziecka?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Nieobecność można zgłosić telefonicznie do sekretariatu (22 831 74 30) lub przez dziennik elektroniczny. 
                    Po powrocie do szkoły dziecko powinno dostarczyć pisemne usprawiedliwienie.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Gdzie kupić podręczniki?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Lista podręczników jest dostępna w dzienniku elektronicznym i na tablicy ogłoszeń. 
                    Podręczniki można kupić w dowolnej księgarni lub online. Część podręczników zapewnia szkoła.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Jak działa stołówka szkolna?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Stołówka oferuje obiady od poniedziałku do piątku. Abonament można wykupić w sekretariacie szkoły. 
                    Istnieje możliwość wykupienia pojedynczych obiadów. Jadłospis dostępny jest na stronie szkoły.
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.nav-tab').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            
            this.classList.add('active');
            
            const targetId = this.getAttribute('href').substring(1);
            document.getElementById(targetId).classList.add('active');
            
            window.scrollTo({
                top: document.querySelector('.main-nav').offsetTop - 100,
                behavior: 'smooth'
            });
        });
    });
    
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const item = this.parentElement;
            item.classList.toggle('active');
            
            const icon = this.querySelector('i');
            if (item.classList.contains('active')) {
                icon.style.transform = 'rotate(180deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });
</script>

<?php
echo generateFooter();
?>