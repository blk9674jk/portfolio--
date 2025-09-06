document.addEventListener('DOMContentLoaded', function() {

    // ===============================================
    // 1. ヘッダー関連の処理 (スクロール位置で表示/非表示)
    // ===============================================
    const header = document.getElementById('main-header');
    if (header) {
        const hideThreshold = 0.9;

        window.addEventListener('scroll', () => {
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPosition = window.scrollY;

            if (scrollableHeight > 0 && scrollPosition > scrollableHeight * hideThreshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // ===============================================
    // 2. ナビゲーション関連の処理
    // ===============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#' || href.length <= 1 || this.id === 'back-to-top') return;
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - 130;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ===============================================
    // 3. ヒーロースライダー
    // ===============================================
    if (document.querySelector('.hero-slider')) {
        class HeroSlider {
            constructor() {
                this.slides = document.querySelectorAll('.hero-slide');
                if (this.slides.length <= 1) return;
                this.currentSlide = 0;
                this.totalSlides = this.slides.length;
                this.autoPlayDelay = 8000;
                this.init();
            }
            init() {
                setInterval(() => this.nextSlide(), this.autoPlayDelay);
            }
            nextSlide() {
                this.slides[this.currentSlide].classList.remove('active');
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                this.slides[this.currentSlide].classList.add('active');
            }
        }
        new HeroSlider();
    }

    // ===============================================
    // 4. フォームのバリデーション処理
    // ===============================================
    const forms = document.querySelectorAll('form[novalidate]');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            let isValid = true;
            form.querySelectorAll('[required]').forEach(field => {
                const formRow = field.closest('.form-row, .privacy-policy-agreement');
                const errorMessage = formRow.querySelector('.error-message');
                let fieldValid = true;
                if (field.type === 'checkbox') {
                    if (!field.checked) {
                        fieldValid = false;
                        errorMessage.textContent = '同意いただく必要があります。';
                    }
                } else if (field.value.trim() === '') {
                    fieldValid = false;
                    errorMessage.textContent = 'この項目は必須です。';
                }
                if (!fieldValid) {
                    isValid = false;
                    formRow.classList.add('is-error');
                } else {
                    errorMessage.textContent = '';
                    formRow.classList.remove('is-error');
                }
            });
            if (!isValid) {
                e.preventDefault();
                const firstErrorField = form.querySelector('.is-error');
                if (firstErrorField) {
                    firstErrorField.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    const fieldToFocus = firstErrorField.querySelector('[required]');
                    if (fieldToFocus) {
                        fieldToFocus.focus();
                    }
                }
            }
        });
        form.querySelectorAll('[required]').forEach(field => {
            field.addEventListener('input', () => {
                const formRow = field.closest('.form-row, .privacy-policy-agreement');
                if (formRow && formRow.classList.contains('is-error')) {
                    const errorMessage = formRow.querySelector('.error-message');
                    errorMessage.textContent = '';
                    formRow.classList.remove('is-error');
                }
            });
        });
    });

    // ===============================================
    // 5. 電話番号・郵便番号の入力制限
    // ===============================================
    const telInputs = document.querySelectorAll('input[type="tel"]');
    telInputs.forEach(input => {
        input.addEventListener('input', () => {
            input.value = input.value.replace(/[^0-9]/g, '');
        });
    });

    // ===============================================
    // 6. モーダルウィンドウの制御
    // ===============================================
    const privacyModal = document.getElementById('privacy-modal');
    if (privacyModal) {
        const openTriggers = document.querySelectorAll('.js-open-modal');
        openTriggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                privacyModal.classList.add('is-open');
                document.body.classList.add('modal-open');
            });
        });

        const closeBtn = privacyModal.querySelector('.modal-close-bottom-btn');
        if(closeBtn) {
            closeBtn.addEventListener('click', () => {
                privacyModal.classList.remove('is-open');
                document.body.classList.remove('modal-open');
            });
        }

        const overlay = privacyModal.querySelector('.modal-overlay');
        if (overlay) {
            overlay.addEventListener('click', () => {
                privacyModal.classList.remove('is-open');
                document.body.classList.remove('modal-open');
            });
        }
    }

    const galleryItems = document.querySelectorAll('.gallery-item');
    const galleryModal = document.getElementById('gallery-modal');
    if (galleryItems.length > 0 && galleryModal) {
        const modalImage = document.getElementById('modal-image');
        const modalTags = document.getElementById('modal-tags');
        const modalTitle = document.getElementById('modal-title');
        const modalText = document.getElementById('modal-text');
        const prevButton = galleryModal.querySelector('.gallery-modal__nav--prev');
        const nextButton = galleryModal.querySelector('.gallery-modal__nav--next');
        const closeButtons = [galleryModal.querySelector('.gallery-modal__close'), galleryModal.querySelector('.gallery-modal__overlay')];
        let currentIndex = 0;

        function updateModalContent(index) {
            const item = galleryItems[index];
            const image = item.querySelector('.gallery-item__image img');
            const tags = item.querySelector('.gallery-item__tags');
            const title = item.querySelector('.gallery-item__title');
            const text = item.querySelector('.gallery-item__text');
            modalImage.src = image.src;
            modalImage.alt = image.alt;
            modalTags.innerHTML = tags ? tags.innerHTML : '';
            modalTitle.textContent = title ? title.textContent : '';
            modalText.textContent = text ? text.textContent : '';
        }

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                currentIndex = index;
                updateModalContent(currentIndex);
                galleryModal.classList.add('is-open');
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            });
        });
        
        closeButtons.forEach(button => {
            if(button) {
                button.addEventListener('click', () => {
                    galleryModal.classList.remove('is-open');
                });
            }
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            updateModalContent(currentIndex);
        });
        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            updateModalContent(currentIndex);
        });
    }

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (privacyModal && privacyModal.classList.contains('is-open')) {
                privacyModal.classList.remove('is-open');
                document.body.classList.remove('modal-open');
            }
            if (galleryModal && galleryModal.classList.contains('is-open')) {
                galleryModal.classList.remove('is-open');
            }
        }
    });

    // ===============================================
    // 7. その他アニメーション関連
    // ===============================================
    document.querySelectorAll('.news-card').forEach(card => {
        card.addEventListener('click', (e) => {
            e.preventDefault();
        });
    });

    const leafWrappers = document.querySelectorAll('.leaf-wrapper');
    if (leafWrappers.length > 0) {
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            leafWrappers.forEach(wrapper => {
                const speed = parseFloat(wrapper.dataset.speed) || 1;
                const moveY = -(scrollY * speed / 10);
                wrapper.style.transform = `translateY(${moveY}px)`;
            });
        });
    }

    const conceptWrapper = document.querySelector('.concept-text-wrapper');
    if (conceptWrapper) {
        const markerObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const targets = entry.target.querySelectorAll('.text-accent');
                    targets.forEach((target, index) => {
                        setTimeout(() => {
                            target.classList.add('is-visible');
                        }, index * 200);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        markerObserver.observe(conceptWrapper);
    }

    const scrollTargets = document.querySelectorAll('[data-scroll], .animate-on-scroll, .voice-section');
    if (scrollTargets.length > 0) {
        const scrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
        scrollTargets.forEach(target => {
            scrollObserver.observe(target);
        });
    }

    const guideSection = document.querySelector('.guide-section');
    if (guideSection) {
        const leafContainer = guideSection.querySelector('.leaf-path-bg');
        const cards = guideSection.querySelectorAll('.guide-card');
        const photos = guideSection.querySelectorAll('.guide-photo');
        const startAnimation = () => {
            const numberOfLeaves = 40;
            const leafImages = [
                'img/leaf/leaf2_s.webp','img/leaf/leaf3_s.webp','img/leaf/leaf5_s.webp',
                'img/leaf/leaf6_s.webp','img/leaf/leaf7_s.webp','img/leaf/leaf8_s.webp'
            ];
            for (let i = 0; i < numberOfLeaves; i++) {
                const leaf = document.createElement('img');
                leaf.src = leafImages[Math.floor(Math.random() * leafImages.length)];
                const yPos = (i / (numberOfLeaves - 1)) * 120 - 10;
                const xPos = 50 + Math.sin(yPos / 15) * 25;
                leaf.style.top = `${yPos + (Math.random() - 0.5) * 4}%`;
                leaf.style.left = `${xPos + (Math.random() - 0.5) * 4}%`;
                leaf.style.width = `${Math.random() * 30 + 40}px`;
                leaf.style.transform = `rotate(${Math.random() * 360}deg)`;
                leaf.style.transitionDelay = `${i * 0.05}s`;
                leafContainer.appendChild(leaf);
                setTimeout(() => {
                    leaf.style.opacity = Math.random() * 0.15 + 0.1;
                }, 100);
            }
            if (cards.length > 0) {
                setTimeout(() => { 
                    cards[0].classList.add('is-visible'); 
                    if (photos[0]) photos[0].classList.add('is-visible');
                }, 800);
                setTimeout(() => { 
                    cards[1].classList.add('is-visible'); 
                    if (photos[1]) photos[1].classList.add('is-visible');
                }, 1400);
                setTimeout(() => { 
                    cards[2].classList.add('is-visible'); 
                    if (photos[2]) photos[2].classList.add('is-visible');
                }, 1800);
            }
        };
        const guideObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startAnimation();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        guideObserver.observe(guideSection);
    }

    // ===============================================
    // 8. トップへ戻るボタンの制御
    // ===============================================
    const toTopButton = document.getElementById('back-to-top');
    if (toTopButton) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                toTopButton.classList.add('is-visible');
            } else {
                toTopButton.classList.remove('is-visible');
            }
        });
        toTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ===============================================
    // 9. クリック可能なテーブル行の制御（追記）
    // ===============================================
    document.querySelectorAll('.clickable-row').forEach(row => {
        row.addEventListener('click', () => {
            const href = row.dataset.href;
            if (href) {
                const target = document.querySelector(href);
                if (target) {
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - 130;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                } else {
                    window.location.href = href;
                }
            }
        });
    });

    // ===============================================
    // 10. Q&Aパスアニメーション
    // ===============================================
    const pathQaContainer = document.querySelector('.path-qa-container');
    if (pathQaContainer) {
        const path = document.getElementById('qa-path');
        
        const pathObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const pathLength = path.getTotalLength();
                    path.style.strokeDasharray = pathLength;
                    path.style.strokeDashoffset = pathLength;
                    pathQaContainer.classList.add('is-animating');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        pathObserver.observe(pathQaContainer);
    }

    // ===============================================
    // 12. アクセスページ印刷機能
    // ===============================================
    const printButton = document.getElementById('js-print-map');
    if (printButton) {
        printButton.addEventListener('click', () => {
            const mainContent = document.querySelector('.sub-page-main');
            if (mainContent) {
                mainContent.classList.add('printable-area');
                window.print();
            }
        });

        window.addEventListener('afterprint', () => {
            const mainContent = document.querySelector('.sub-page-main');
            if (mainContent) {
                mainContent.classList.remove('printable-area');
            }
        });
    }

    // ===============================================
    // 13. 見学予約フォーム：日付入力の制御
    // ===============================================
    const tourDateInput = document.getElementById('tour-date');
    if (tourDateInput) {
        const today = new Date();
        let businessDaysToAdd = 3;
        let currentDate = new Date(today);

        while (businessDaysToAdd > 0) {
            currentDate.setDate(currentDate.getDate() + 1);
            const dayOfWeek = currentDate.getDay();
            if (dayOfWeek !== 0 && dayOfWeek !== 6) {
                businessDaysToAdd--;
            }
        }

        const year = currentDate.getFullYear();
        const month = String(currentDate.getMonth() + 1).padStart(2, '0');
        const day = String(currentDate.getDate()).padStart(2, '0');
        const minDate = `${year}-${month}-${day}`;
        
        tourDateInput.setAttribute('min', minDate);
    }

    // ===============================================
    // 14. タイプライターアニメーションのトリガー
    // ===============================================
    const quoteBox = document.querySelector('.quote-box-inner');
    if (quoteBox) {
        const typewriterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-animating');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.8
        });
        typewriterObserver.observe(quoteBox);
    }

    // ===============================================
    // 15. リハビリページ：動画モーダル機能
    // ===============================================
    const videoTriggers = document.querySelectorAll('.js-video-trigger');
    const videoModal = document.getElementById('video-modal');

    if (videoTriggers.length > 0 && videoModal) {
        const modalVideoPlayer = document.getElementById('modal-video-player');
        const modalCloseBtns = videoModal.querySelectorAll('.js-modal-close');

        const openModal = (videoSrc) => {
            document.body.classList.add('modal-open');
            videoModal.classList.add('is-open');
            modalVideoPlayer.src = videoSrc;
            modalVideoPlayer.play();
        };

        const closeModal = () => {
            document.body.classList.remove('modal-open');
            videoModal.classList.remove('is-open');
            modalVideoPlayer.pause();
            modalVideoPlayer.src = '';
        };

        videoTriggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                const imageElement = trigger.querySelector('img');
                if (imageElement && imageElement.dataset.videoSrc) {
                    openModal(imageElement.dataset.videoSrc);
                }
            });
        });

        modalCloseBtns.forEach(btn => {
            btn.addEventListener('click', closeModal);
        });

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && videoModal.classList.contains('is-open')) {
                closeModal();
            }
        });
    }

    // ===============================================
    // 16. リハビリプラン作成の流れ アニメーション
    // ===============================================
    const processContainer = document.querySelector('.process-steps-container');
    if (processContainer) {
        const processObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });
        
        processObserver.observe(processContainer);
    }

    // ===============================================
    // 17. タイムライン スクロール連動アニメーション
    // ===============================================
    const timelineContainer = document.querySelector('.timeline-container');
    const timelineItems = document.querySelectorAll('.timeline-item');

    if (timelineContainer) {
        const lineObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-drawing');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        lineObserver.observe(timelineContainer);
    }

    if (timelineItems.length > 0) {
        const itemObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        timelineItems.forEach(item => {
            itemObserver.observe(item);
        });
    }

    // ===============================================
    // 18. スマホ用ナビゲーション と 追従フッターの制御
    // ===============================================
    const hamburger = document.getElementById('hamburger-menu');
    const mobileNav = document.getElementById('mobile-nav');
    const spDdToggle = document.querySelectorAll('.sp-dd-toggle');
    const stickyNav = document.querySelector('.sticky-subnav'); 

    if (hamburger && mobileNav) {
        hamburger.addEventListener('click', () => {
            const isOpening = !mobileNav.classList.contains('is-open');
            hamburger.classList.toggle('is-active');
            mobileNav.classList.toggle('is-open');
            document.body.classList.toggle('modal-open');

            if (stickyNav) {
                if (isOpening) {
                    stickyNav.classList.remove('is-hidden');
                } else {
                    if (window.scrollY <= 100) {
                        stickyNav.classList.add('is-hidden');
                    }
                }
            }
        });
    }

    if (spDdToggle.length > 0) {
        spDdToggle.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                const parent = toggle.parentElement;
                const dropdown = parent.querySelector('.sp-dropdown');
                parent.classList.toggle('is-open');

                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                } else {
                    dropdown.style.display = 'block';
                }
            });
        });
    }

    if (stickyNav) {
        stickyNav.classList.add('is-hidden');

        window.addEventListener('scroll', () => {
            if (mobileNav && mobileNav.classList.contains('is-open')) {
                return;
            }

            const scrollThreshold = 100; 
            if (window.scrollY > scrollThreshold) {
                stickyNav.classList.remove('is-hidden');
            } else {
                stickyNav.classList.add('is-hidden');
            }
        });
    }
});