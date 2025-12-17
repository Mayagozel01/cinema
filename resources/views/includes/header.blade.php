<div>
    <div class="w-100  max-h-96">
         <img src="{{ asset('images/hero-bg.png') }}" alt="Cinema Hero Image"
            class="w-full h-full object-cover mb-6">
    </div>

</div>
<div class="header__contact w-full flex justify-between px-[50px] py-[23px] bg-[#123D4B]">
<div class="header__contact-information">
    <div class="logo h-[45px] w-[162px]">
        <img src="{{ asset('images/logo_1.png') }}" alt="logo" class="object-cover">
    </div>
    <div class="header__contact-address"></div>
    <div class="header__contact-number"></div>
</div>
<div class="header__contact-social">

</div>

</div>

                <header class="main-header">
                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('movies') }}">Movies</a></li>
                            <li><a href="{{ route('showtimes') }}">Showtimes</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </header>