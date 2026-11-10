<?php
require_once 'config.php';
$wydarzenia = require 'wydarzenia.php';
$newsSections = $wydarzenia['newsSections'];

ob_start();
echo generateHeader('Aktualności', 'https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
?>
<style>
    .news-page-hero {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .news-page-hero::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,50 Q250,0 500,50 T1000,50 L1000,100 L0,100 Z" fill="white" opacity="0.05"/></svg>');
        background-size: cover;
    }
    
    .news-filters {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-bottom: 40px;
        flex-wrap: wrap;
        padding: 20px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
    }
    
    .filter-btn {
        padding: 10px 20px;
        background: white;
        border: 2px solid #e0e0e0;
        border-radius: var(--radius-md);
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        color: var(--dark-color);
        cursor: pointer;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }
    
    .filter-btn::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: var(--transition);
    }
    
    .filter-btn:hover::after {
        left: 100%;
    }
    
    .filter-btn:hover, .filter-btn.active {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }
    
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .news-card {
        background: white;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: var(--transition);
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .news-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        opacity: 0;
        transition: var(--transition);
    }
    
    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .news-card:hover::before {
        opacity: 1;
    }
    
    .news-card-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: var(--transition);
    }
    
    .news-card:hover .news-card-image {
        transform: scale(1.05);
    }
    
    .news-card-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .news-card-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .news-card-category {
        background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    .news-card-date {
        font-size: 0.9rem;
        color: var(--gray-color);
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .news-card-title {
        font-size: 1.3rem;
        margin-bottom: 15px;
        color: var(--dark-color);
        line-height: 1.4;
        flex-grow: 1;
        position: relative;
        padding-bottom: 10px;
    }
    
    .news-card-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background: var(--primary-color);
        opacity: 0.3;
    }
    
    .news-card-excerpt {
        color: var(--gray-color);
        margin-bottom: 20px;
        line-height: 1.6;
        flex-grow: 1;
    }
    
    .highlight-card {
        grid-column: 1 / -1;
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border: 2px solid var(--primary-color);
        position: relative;
    }
    
    .highlight-card::after {
        content: '★ Wyróżnione';
        position: absolute;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        z-index: 1;
        box-shadow: var(--shadow-sm);
    }
    
    .section-header {
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid #eee;
        position: relative;
    }
    
    .section-header::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100px;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), transparent);
    }
    
    .section-header h2 {
        display: flex;
        align-items: center;
        gap: 15px;
        color: var(--primary-color);
        margin-bottom: 10px;
    }
    
    .section-header h2 i {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .section-header p {
        color: var(--gray-color);
        font-size: 1.1rem;
        max-width: 800px;
    }
    
    .news-actions {
        display: flex;
        gap: 15px;
        margin-top: auto;
    }
    
    .btn {
        flex: 1;
        text-align: center;
        transition: var(--transition);
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }
    
    @media (max-width: 768px) {
        .news-grid {
            grid-template-columns: 1fr;
        }
        
        .highlight-card {
            grid-template-columns: 1fr;
        }
        
        .news-card-image {
            height: 200px;
        }
        
        .news-filters {
            padding: 15px;
        }
        
        .filter-btn {
            flex: 1;
            min-width: calc(50% - 10px);
            text-align: center;
        }
    }
    
    @media (max-width: 480px) {
        .filter-btn {
            min-width: 100%;
        }
        
        .news-actions {
            flex-direction: column;
        }
    }
</style>

<section class="news-page-hero">
    <div class="container" style="position: relative; z-index: 1;">
        <h1 style="font-size: 3rem; margin-bottom: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Aktualności</h1>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto; opacity: 0.9; text-shadow: 0 1px 3px rgba(0,0,0,0.2);">
            Wiadomości z życia szkoły, relacje z wydarzeń, sukcesy uczniów
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="news-filters">
            <button class="filter-btn active" data-filter="all">Wszystkie</button>
            <button class="filter-btn" data-filter="wiadomosci">Wiadomości</button>
            <button class="filter-btn" data-filter="wydarzenia">Wydarzenia</button>
            <button class="filter-btn" data-filter="sukcesy">Sukcesy</button>
            <button class="filter-btn" data-filter="erasmus">Erasmus+</button>
            <button class="filter-btn" data-filter="rekrutacja">Rekrutacja</button>
        </div>
        
        <div class="news-content">
            <?php foreach ($newsSections as $sectionIndex => $section): ?>
                <div class="section-header" data-section="<?php echo implode(',', $section['filters']); ?>">
                    <h2><i class="fas <?php echo $section['icon']; ?>"></i> <?php echo $section['title']; ?></h2>
                    <p><?php echo $section['desc']; ?></p>
                </div>
                
                <div class="news-grid">
                    <?php foreach ($section['news'] as $newsIndex => $news): 
                        $delay = ($sectionIndex * 0.3) + ($newsIndex * 0.1);
                        $cardClass = 'news-card animate-fade-in';
                        $cardClass .= isset($news['type']) && $news['type'] === 'highlight' ? ' highlight-card' : '';
                    ?>
                        <div class="<?php echo $cardClass; ?>" 
                             style="animation-delay: <?php echo $delay; ?>s;"
                             data-category="<?php echo strtolower(str_replace(' ', '', $news['category'])); ?>">
                            
                            <?php if (isset($news['image'])): ?>
                                <div style="position: relative; overflow: hidden;">
                                    <img src="<?php echo $news['image']; ?>" 
                                         alt="<?php echo htmlspecialchars($news['title']); ?>" 
                                         class="news-card-image">
                                </div>
                            <?php endif; ?>
                            
                            <div class="news-card-content">
                                <div class="news-card-meta">
                                    <span class="news-card-category"><?php echo $news['category']; ?></span>
                                    <span class="news-card-date">
                                        <i class="far fa-calendar"></i> <?php echo $news['date']; ?>
                                    </span>
                                </div>
                                
                                <h2 class="news-card-title"><?php echo $news['title']; ?></h2>
                                
                                <p class="news-card-excerpt">
                                    <?php echo $news['excerpt']; ?>
                                </p>
                                
                                <div class="news-actions">
                                    <a href="<?php echo $news['link']; ?>" 
                                       class="btn <?php echo isset($news['type']) && $news['type'] === 'highlight' ? 'btn-primary' : 'btn-outline'; ?>">
                                        <?php echo $news['link_text']; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const allNewsCards = document.querySelectorAll('.news-card');
        const allSections = document.querySelectorAll('.section-header, .news-grid');
        
        filterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                
                allSections.forEach(section => {
                    section.style.opacity = '0.3';
                    section.style.transform = 'translateY(20px)';
                    section.style.transition = 'all 0.3s ease';
                });
                
                setTimeout(() => {
                    allNewsCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category') === filter) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                    
                    allSections.forEach(section => {
                        const sectionFilters = section.getAttribute('data-section');
                        if (sectionFilters) {
                            const filters = sectionFilters.split(',');
                            const hasVisibleCards = Array.from(section.nextElementSibling?.children || [])
                                .some(child => child.style.display !== 'none');
                            
                            section.style.display = hasVisibleCards ? 'block' : 'none';
                        }
                    });
                    
                    allSections.forEach(section => {
                        setTimeout(() => {
                            section.style.opacity = '1';
                            section.style.transform = 'translateY(0)';
                        }, 10);
                    });
                }, 300);
            });
        });
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.animate-fade-in').forEach(el => {
            observer.observe(el);
        });
    });
</script>

<?php
echo generateFooter();
?>