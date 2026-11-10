<?php
require_once 'config.php';

ob_start();
echo generateHeader('Kontakt', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
?>

<style>
    .contact-hero {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 100px 0;
        text-align: center;
    }
    
    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        margin-top: 50px;
    }
    
    @media (max-width: 992px) {
        .contact-container {
            grid-template-columns: 1fr;
        }
    }
    
    .contact-info {
        background: white;
        border-radius: var(--radius-lg);
        padding: 40px;
        box-shadow: var(--shadow-lg);
    }
    
    .contact-form {
        background: white;
        border-radius: var(--radius-lg);
        padding: 40px;
        box-shadow: var(--shadow-lg);
    }
    
    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #eee;
    }
    
    .info-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    
    .info-icon {
        width: 60px;
        height: 60px;
        background: var(--light-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 24px;
        flex-shrink: 0;
    }
    
    .info-content h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--dark-color);
    }
    
    .info-content p {
        color: var(--gray-color);
        line-height: 1.6;
    }
    
    .info-content a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }
    
    .info-content a:hover {
        text-decoration: underline;
    }
    
    .map-container {
        margin-top: 40px;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        height: 300px;
        background: #f8f9fa;
        position: relative;
    }
    
    .map-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
    }
    
    .map-placeholder i {
        font-size: 4rem;
        margin-bottom: 20px;
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
    
    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    @media (max-width: 576px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
    
    .department-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .department-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: var(--shadow-md);
        border-top: 4px solid var(--primary-color);
        transition: var(--transition);
    }
    
    .department-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .department-icon {
        font-size: 2rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }
    
    .opening-hours {
        background: #f8f9fa;
        padding: 30px;
        border-radius: var(--radius-lg);
        margin-top: 40px;
    }
    
    .hours-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .hours-table td {
        padding: 12px 0;
        border-bottom: 1px solid #eee;
    }
    
    .hours-table tr:last-child td {
        border-bottom: none;
    }
    
    .day {
        font-weight: 600;
        color: var(--dark-color);
    }
    
    .hours {
        text-align: right;
        color: var(--gray-color);
    }
    
    .emergency-contact {
        background: linear-gradient(135deg, #ff6b6b, #ee5a52);
        color: white;
        padding: 30px;
        border-radius: var(--radius-lg);
        margin-top: 40px;
        text-align: center;
    }
    
    .emergency-contact h3 {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .social-links {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin-top: 40px;
    }
    
    .social-link {
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        text-decoration: none;
        transition: var(--transition);
    }
    
    .social-link:hover {
        transform: translateY(-5px);
        background: #0b3d91;
    }
    
    .social-link.facebook {
        background: #3b5998;
    }
    
    .social-link.youtube {
        background: #ff0000;
    }
    
    .social-link.instagram {
        background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
    }
    
    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: var(--radius-md);
        margin-bottom: 20px;
        display: none;
    }
    
    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: var(--radius-md);
        margin-bottom: 20px;
        display: none;
    }
</style>

<!-- Hero sekcja -->
<section class="contact-hero">
    <div class="container">
        <h1 style="font-size: 3rem; margin-bottom: 20px;">Kontakt</h1>
        <p style="font-size: 1.3rem; max-width: 800px; margin: 0 auto; opacity: 0.9;">
            Skontaktuj się z nami - odpowiemy na wszystkie Twoje pytania i wątpliwości.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-container">
            <!-- Informacje kontaktowe -->
            <div class="contact-info animate-fade-in">
                <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color);">Dane kontaktowe</h2>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Adres szkoły</h3>
                        <p>
                            <?php echo $school_info['full_name']; ?><br>
                            <?php echo $school_info['address']; ?>
                        </p>
                        <a href="https://www.google.com/maps/dir//Podwale+13,+00-252+Warszawa" target="_blank">
                            <i class="fas fa-directions"></i> Jak dojechać?
                        </a>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h3>Telefony</h3>
                        <p>
                            <?php foreach($school_info['phone'] as $phone): ?>
                                <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone); ?>"><?php echo $phone; ?></a><br>
                            <?php endforeach; ?>
                        </p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p>
                            <a href="mailto:<?php echo $school_info['email']; ?>"><?php echo $school_info['email']; ?></a><br>
                            <small style="color: var(--gray-color);">Odpowiadamy w ciągu 24 godzin</small>
                        </p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h3>Godziny pracy sekretariatu</h3>
                        <p>
                            Poniedziałek - Piątek: 7:30 - 15:30<br>
                            Sobota: nieczynne<br>
                            Niedziela: nieczynne
                        </p>
                    </div>
                </div>
                
                <!-- Mapa -->
                <div class="map-container">
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3>Mapa dojazdu</h3>
                        <p>ul. Podwale 13, 00-252 Warszawa</p>
                        <a href="https://www.google.com/maps/dir//Podwale+13,+00-252+Warszawa" target="_blank" class="btn btn-primary" style="margin-top: 20px;">
                            <i class="fas fa-external-link-alt"></i> Otwórz w Google Maps
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formularz kontaktowy -->
            <div class="contact-form animate-fade-in" style="animation-delay: 0.2s;">
                <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color);">Wyślij wiadomość</h2>
                
                <div id="successMessage" class="success-message">
                    <i class="fas fa-check-circle"></i> Wiadomość została wysłana! Odpowiemy w ciągu 24 godzin.
                </div>
                
                <div id="errorMessage" class="error-message">
                    <i class="fas fa-exclamation-circle"></i> Wystąpił błąd. Spróbuj ponownie lub skontaktuj się telefonicznie.
                </div>
                
                <form id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Imię *</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nazwisko *</label>
                            <input type="text" class="form-control" id="surname" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telefon</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Temat *</label>
                        <select class="form-control" id="subject" required>
                            <option value="">-- Wybierz temat --</option>
                            <option value="rekrutacja">Rekrutacja</option>
                            <option value="technikum">Technikum</option>
                            <option value="policealne">Szkoły policealne</option>
                            <option value="oplaty">Opłaty i finanse</option>
                            <option value="wsparcie">Wsparcie dla uczniów</option>
                            <option value="inne">Inne pytania</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Wiadomość *</label>
                        <textarea class="form-control" id="message" required placeholder="Opisz szczegółowo swoją sprawę..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                            <input type="checkbox" required style="margin-top: 3px;">
                            <span style="font-size: 0.9rem; color: var(--gray-color);">
                                Wyrażam zgodę na przetwarzanie moich danych osobowych w celu udzielenia odpowiedzi na zapytanie.
                            </span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 1.1rem;">
                        <i class="fas fa-paper-plane"></i> Wyślij wiadomość
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Działy i osoby kontaktowe -->
        <div style="margin-top: 80px;">
            <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color); text-align: center;">Działy i osoby kontaktowe</h2>
            
            <div class="department-grid">
                <div class="department-card animate-fade-in">
                    <div class="department-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; color: var(--dark-color);">Dyrekcja</h3>
                    <p style="color: var(--gray-color); margin-bottom: 15px;">Justyna Cholewa - Dyrektor szkoły</p>
                    <div style="font-size: 0.9rem;">
                        <p><i class="fas fa-envelope"></i> szkoły@zdz.edu.pl</p>
                        <p><i class="fas fa-phone"></i> +48 786 982 711</p>
                        <p><i class="fas fa-calendar"></i> Bez dyżurów</p>
                    </div>
                </div>
                
                <div class="department-card animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="department-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; color: var(--dark-color);">Sekretariat</h3>
                    <p style="color: var(--gray-color); margin-bottom: 15px;">Iryna Ruzova - Sekretarz szkoły</p>
                    <div style="font-size: 0.9rem;">
                        <p><i class="fas fa-envelope"></i> szkoły@zdz.edu.pl</p>
                        <p><i class="fas fa-phone"></i> +48 786 982 711</p>
                        <p><i class="fas fa-clock"></i> Pon-Pt: 7:30-15:30</p>
                    </div>
                </div>
                
                <div class="department-card animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="department-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; color: var(--dark-color);">Koordynator pracy szkoły</h3>
                    <p style="color: var(--gray-color); margin-bottom: 15px;">Agata Abramowicz</p>
                    <div style="font-size: 0.9rem;">
                        <p><i class="fas fa-envelope"></i> agata.abramwicz@zdz.edu.pl</p>
                        <p><i class="fas fa-phone"></i> +48 22 831 00 81 w. 134</p>
                        <p><i class="fas fa-calendar"></i> Pon-Pt: 7:30-15:30</p>
                    </div>
                </div>
                
                <div class="department-card animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="department-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; color: var(--dark-color);">Pedagog szkolny</h3>
                    <p style="color: var(--gray-color); margin-bottom: 15px;">Teresa Jastrzębska</p>
                    <div style="font-size: 0.9rem;">
                        <p><i class="fas fa-envelope"></i> szkoły@zdz.edu.pl</p>
                        <p><i class="fas fa-phone"></i> +48 786 982 711</p>
                        <p><i class="fas fa-calendar"></i> Pon-Pt: 9:30-15:00</p>
                    </div>
                </div>
                <div class="department-card animate-fade-in" style="animation-delay: 0.3s; ">
                    <div class="department-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; color: var(--dark-color);">Psycholog szkolny</h3>
                    <p style="color: var(--gray-color); margin-bottom: 15px;">Anna Cichacka</p>
                    <div style="font-size: 0.9rem;">
                        <p><i class="fas fa-envelope"></i> psycholog@zdz.edu.pl</p>
                        <p><i class="fas fa-phone"></i> +48 786 982 711</p>
                        <p><i class="fas fa-calendar"></i></p>
                        <p>Pon: 9:00-16:00</p>
                        <p>Wt: 9:00-17:00</p>
                        <p>Pt: 9:00-16:00</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Kontakt awaryjny -->
        <div class="emergency-contact animate-fade-in" style="animation-delay: 0.5s;">
            <h3><i class="fas fa-exclamation-triangle"></i> Kontakt w pilnych sprawach</h3>
            <p style="margin-bottom: 20px; font-size: 1.1rem;">
                W nagłych sytuacjach (wypadek, zagrożenie bezpieczeństwa) prosimy o kontakt:
            </p>
            <div style="font-size: 1.5rem; margin-bottom: 20px;">
                <a href="tel:+48786982711" style="color: white; text-decoration: none; font-weight: 700;">
                    <i class="fas fa-phone"></i> 786 982 711
                </a>
            </div>
            <p style="font-size: 0.9rem; opacity: 0.9;">
                Telefon czynny całodobowo. Tylko w nagłych przypadkach.
            </p>
        </div>
        
        <!-- Media społecznościowe -->
        <div style="margin-top: 60px; text-align: center;">
            <h2 style="font-size: 2rem; margin-bottom: 30px; color: var(--dark-color);">Obserwuj nas</h2>
            <p style="color: var(--gray-color); max-width: 600px; margin: 0 auto 30px;">
                Bądź na bieżąco z najnowszymi wydarzeniami, aktualnościami i życiem szkoły.
            </p>
            
            <div class="social-links">
                <a href="https://www.facebook.com/SzkolaNaStarowce" class="social-link facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCtvrn3uKhRskxbZjAldRYHA" class="social-link youtube" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.instagram.com/szkola_na_starowce?igsh=MXBiaW42dHltNGJrNA==" class="social-link instagram" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Obsługa formularza kontaktowego
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Tutaj w rzeczywistej aplikacji byłoby wysłanie danych do serwera
        // Na potrzeby demonstracji pokazujemy komunikat sukcesu
        
        document.getElementById('successMessage').style.display = 'block';
        document.getElementById('errorMessage').style.display = 'none';
        
        // Reset formularza po 3 sekundach
        setTimeout(() => {
            this.reset();
            document.getElementById('successMessage').style.display = 'none';
            
            // Przewiń do góry formularza
            this.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 3000);
    });
    
    // Walidacja formularza w czasie rzeczywistym
    const formControls = document.querySelectorAll('.form-control');
    formControls.forEach(control => {
        control.addEventListener('blur', function() {
            if (this.value.trim() === '' && this.hasAttribute('required')) {
                this.style.borderColor = '#e74c3c';
            } else {
                this.style.borderColor = '#e0e0e0';
            }
        });
        
        control.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.style.borderColor = '#2ecc71';
            }
        });
    });
</script>

<?php
echo generateFooter();
?>