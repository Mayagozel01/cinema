
    <div class="header__contact">
        <!-- Hero Image -->
        <div class="w-full h-[380px] md:h-[280px] sm:h-[200px]">
            <img src="/images/hero-bg.png" alt="Cinema Hero Image"
                class="w-full h-full object-cover mb-6">
        </div>
        
        <!-- Desktop Header Contact -->
        <div class="hidden lg:flex header__contact w-full justify-between px-[50px] py-[23px] bg-[#123D4B]">
            <div class="header__contact-information flex gap-[70px]">
                <div class="logo h-[45px] w-[162px]">
                    <img src="/images/logo_1.png" alt="logo" class="object-cover">
                </div>
                <div class="header__contact-info flex gap-[125px] items-center">
                    <div class="header__contact-address">
                        <p class="cinema_regular text-white">Казахстан</p>
                        <p class="cinema_reg-sm text-[#A0AEB7]">улица Тестовая 1</p>
                    </div>
                    <div class="header__contact-number">
                        <div class="flex gap-2 items-center">
                            <p class="cinema_regular text-white">+7 (775) 000 00 01</p>
                            <div class="arrow-down">
                                <img src="/images/arrow-down.png" alt="arrow-down" class="object-cover w-full h-full">
                            </div>
                        </div>
                        <p class="cinema_reg-sm text-[#A0AEB7]">Касса</p>
                    </div>
                </div>
            </div>
            <div class="header__contact-social">
                <div class="header__contact-social-icons flex gap-[30px] items-center">
                    <a href="#" class="social-icon"><img src="/images/Facebook.svg" alt="facebook" class="object-cover"></a>
                    <a href="#" class="social-icon"><img src="/images/Instagram.svg" alt="instagram" class="object-cover"></a>
                    <a href="#" class="social-icon"><img src="/images/YouTube.svg" alt="youtube" class="object-cover"></a>
                    <a href="#" class="social-icon"><img src="/images/Vkontakte.svg" alt="vkontakte" class="object-cover"></a>
                    <a href="#" class="red-button">Мне пришёл билет</a>
                </div>
            </div>
        </div>

        <!-- Mobile/Tablet Header Contact -->
        <div class="lg:hidden w-full px-[20px] py-[16px] bg-[#123D4B]">
            <div class="flex justify-between items-center mb-4">
                <div class="logo h-[35px] w-[120px]">
                    <img src="/images/logo_1.png" alt="logo" class="object-cover">
                </div>
                <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="flex flex-col gap-3 text-sm">
                <div class="header__contact-address">
                    <p class="cinema_regular text-white">Казахстан</p>
                    <p class="cinema_reg-sm text-[#A0AEB7]">улица Тестовая 1</p>
                </div>
                <div class="header__contact-number">
                    <div class="flex gap-2 items-center">
                        <p class="cinema_regular text-white">+7 (775) 000 00 01</p>
                        <div class="arrow-down">
                            <img src="/images/arrow-down.png" alt="arrow-down" class="object-cover w-full h-full">
                        </div>
                    </div>
                    <p class="cinema_reg-sm text-[#A0AEB7]">Касса</p>
                </div>
                <div class="flex gap-4">
                    <a href="#" class="social-icon"><img src="/images/Facebook.svg" alt="facebook" class="object-cover w-full h-full"></a>
                    <a href="#" class="social-icon"><img src="/images/Instagram.svg" alt="instagram" class="object-cover w-full h-full"></a>
                    <a href="#" class="social-icon"><img src="/images/YouTube.svg" alt="youtube" class="object-cover w-full h-full"></a>
                    <a href="#" class="social-icon"><img src="/images/Vkontakte.svg" alt="vkontakte" class="object-cover w-full h-full"></a>
                </div>
            </div>
        </div>

        <!-- Desktop Main Header -->
        <header class="hidden lg:flex main-header gap-[32px] items-center px-[50px] py-[16px]">
            <nav>
                <ul class="flex gap-[32px] text-[14px] items-center">
                    <li class="h-full"><a class="inline-block h-full nav-link py-[16px] text-center" href="#">Афиша</a></li>
                    <li class="h-full"><a class="inline-block h-full nav-link py-[16px] text-center" href="#">Сеансы</a></li>
                    <li class="h-full"><a class="inline-block h-full nav-link py-[16px] text-center" href="#">Кинотеатр</a></li>
                    <li class="h-full"><a class="inline-block h-full nav-link py-[16px] text-center" href="#">Контакты</a></li>
                </ul>
            </nav>
            <a href="#" class="red-button">Войти</a>
            <a href="#" class="red-button">Написать отзыв</a>
        </header>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="p-6">
            <div class="flex justify-between items-center mb-8">
                <div class="logo h-[35px] w-[120px]">
                    <img src="/images/logo_1.png" alt="logo" class="object-cover">
                </div>
                <button class="text-white text-4xl leading-none" id="closeMenu" aria-label="Close menu">&times;</button>
            </div>
            <nav>
                <ul class="flex flex-col">
                    <li><a class="mobile-menu-link" href="#">Афиша</a></li>
                    <li><a class="mobile-menu-link" href="#">Сеансы</a></li>
                    <li><a class="mobile-menu-link" href="#">Кинотеатр</a></li>
                    <li><a class="mobile-menu-link" href="#">Контакты</a></li>
                </ul>
            </nav>
            <div class="flex flex-col gap-4 mt-8">
                <a href="#" class="red-button text-center">Войти</a>
                <a href="#" class="red-button text-center">Написать отзыв</a>
                <a href="#" class="red-button text-center">Мне пришёл билет</a>
            </div>
        </div>
    </div>