 <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12 footer-info">
                    <a href="index.php" class="footer-logo js-global-link">
                        <img src="glamour/golove.png" alt=" Logo">
                    </a>
                    <p>At its core, Glamour is where the global market meets African expression — creating a new kind of digital economy driven by you.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter js-global-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="facebook js-global-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="instagram js-global-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="linkedin js-global-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about-section">About us</a></li>
                        <li><a href="index.php#features-section">Features</a></li>
                    </ul>
                </div>

                

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                Copyright <strong><span>Glamour</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>


     <!-- jQuery 3.7.1 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap 5.3.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- AOS 2.3.1 JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/10.12.2/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.12.2/firebase-auth-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.12.2/firebase-firestore-compat.js"></script>
    
    <script>
        // Prevent the "install app" prompt on mobile browsers
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set AOS animations based on screen size before initializing
            const aboutTextCol = document.getElementById('about-text-col');
            const aboutImageCol = document.getElementById('about-image-col');
            if (aboutTextCol && aboutImageCol) {
                if (window.innerWidth >= 992) {
                    aboutTextCol.setAttribute('data-aos', 'fade-right');
                    aboutImageCol.setAttribute('data-aos', 'fade-left');
                }
            }

            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
            });

            // Animated Text for Floating Cards
            const card1Texts = ["Get Rewarded", "Track Your Progress", "Live Healthier"];
            const card2Texts = ["Play Games", "Challenge Friends", "Win Rewards"];
            let card1Index = 0;
            let card2Index = 0;
            
            const card1Elements = document.querySelectorAll('[data-text-group="1"]');
            const card2Elements = document.querySelectorAll('[data-text-group="2"]');

            const cycleAnimation = (elements, texts, index) => {
                // 1. Update text content
                elements.forEach(el => {
                    el.textContent = texts[index];
                });

                // 2. Animate In
                elements.forEach(el => {
                    el.classList.remove('animate-out');
                    el.classList.add('animate-in');
                });

                // 3. Schedule Animate Out
                setTimeout(() => {
                    elements.forEach(el => {
                        el.classList.remove('animate-in');
                        el.classList.add('animate-out');
                    });
                }, 3500); // Card stays visible for 3.5 seconds
            };

            // Initial animation trigger after a short delay
            setTimeout(() => {
                cycleAnimation(card1Elements, card1Texts, card1Index);
                setTimeout(() => {
                    cycleAnimation(card2Elements, card2Texts, card2Index);
                }, 500); // Stagger the second card
            }, 500);


            // Set interval for subsequent animations
            setInterval(() => {
                card1Index = (card1Index + 1) % card1Texts.length;
                cycleAnimation(card1Elements, card1Texts, card1Index);
                
                // Stagger the second card's animation slightly
                setTimeout(() => {
                    card2Index = (card2Index + 1) % card2Texts.length;
                    cycleAnimation(card2Elements, card2Texts, card2Index);
                }, 500);

            }, 4000); // Total cycle time is 4 seconds

            // Navbar background on mobile toggle
            const navbarEl = document.querySelector('.navbar-custom');
            const collapseEl = document.querySelector('.navbar-collapse');

            if (navbarEl && collapseEl) {
                collapseEl.addEventListener('show.bs.collapse', function () {
                    navbarEl.classList.add('toggled');
                });

                collapseEl.addEventListener('hide.bs.collapse', function () {
                    navbarEl.classList.remove('toggled');
                });
            }

            // Navbar glassmorphism on scroll
            const navbarScrollEl = document.querySelector('.navbar-custom');
            if(navbarScrollEl) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                        navbarScrollEl.classList.add('scrolled');
                    } else {
                        navbarScrollEl.classList.remove('scrolled');
                    }
                });
            }

            // Features Section Sticky Scroll Logic
            if (window.innerWidth >= 992) {
                const featureItems = document.querySelectorAll('.feature-item');
                const featureImages = document.querySelectorAll('.feature-image');

                const observerOptions = {
                    root: null,
                    rootMargin: '-50% 0px -50% 0px',
                    threshold: 0
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const imageId = entry.target.dataset.image;
                            
                            featureImages.forEach(img => {
                                img.classList.remove('active');
                            });

                            const activeImage = document.querySelector(`.feature-image[data-image-id="${imageId}"]`);
                            if (activeImage) {
                                activeImage.classList.add('active');
                            }
                        }
                    });
                }, observerOptions);

                featureItems.forEach(item => {
                    observer.observe(item);
                });
            }
            
            // Parallax Scroll for Package Cards
            const packageBgs = document.querySelectorAll('.package-bg');
            const handleParallaxScroll = () => {
                packageBgs.forEach(el => {
                    const parentCard = el.parentElement;
                    const rect = parentCard.getBoundingClientRect();
                    const speed = -0.2; // Adjust for more/less effect
                    
                    // Only run animation if card is in view
                    if (rect.bottom >= 0 && rect.top <= window.innerHeight) {
                       const y = (rect.top - window.innerHeight / 2) * speed;
                       el.style.transform = `translateY(${y}px)`;
                    }
                });
            };

            window.addEventListener('scroll', () => {
                requestAnimationFrame(handleParallaxScroll);
            });
            
            // Initial position
            handleParallaxScroll();
        });
    </script>


</body></html>
