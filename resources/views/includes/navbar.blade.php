<header
    class="hidden sticky bg-white z-[100000] top-0 md:px-24 px-5 w-full md:flex items-center justify-between py-5 max-h-20">
    <div>
        <img src="{{ asset('images/mel-hr.svg') }}" alt="">
    </div>

    <ul class="flex items-center gap-8">
        <li class="text-[#141D38] hover:text-primary text-sm font-semibold">
            <a href="/">Home</a>
        </li>

        <li class="text-[#141D38] hover:text-primary text-sm font-semibold">
            <a href="/about-us">About us</a>
        </li>
        <li class="text-[#141D38] hover:text-primary text-sm font-semibold">
            <a href="/services">Services</a>
        </li>
        <li class="text-[#141D38] hover:text-primary text-sm font-semibold">
            <a href="/">Contact</a>
        </li>
    </ul>

    <a href="/contact" class="bg-primary text-white px-8 py-3 rounded-full text-lg font-medium">Consult us today</a>
</header>
<header class="md:px-24 sticky bg-white z-[10000] top-0 px-5 w-full flex md:hidden items-center justify-between py-5">
    <div>
        <img src="{{ asset('images/mel-hr.svg') }}" alt="">
    </div>

    <i class="ri-menu-fill text-3xl menuButton"></i>
</header>

<nav id="menu"
    class="w-full  z-[999999] p-5 md:hidden bg-white h-screen fixed top-0 left-0 translate-x-[500px] duration-[300ms] ease-in transform">
    <div class="flex items-center justify-between mb-20">
        <a href="/">
            <img src="{{ asset('images/mel-hr.svg') }}" alt="" class="w-24">
        </a>

        <div class="w-10 h-10 menuButton flex items-center justify-center">
            <i class="ri-close-line text-3xl"></i>
        </div>
    </div>

    <ul class="flex flex-col gap-12 items-center list">
        <li>
            <a href="/" class=" font-medium text-xl text-[#434343] leading-6 py-2"> Home</a>
        </li>

        <li>
            <a href="/about-us" class=" font-medium text-xl text-[#434343] leading-6 py-2">About us</a>
        </li>

        <li>
            <a href="/services" class=" font-medium text-xl text-[#434343] leading-6 py-2">Services</a>
        </li>

        <li>
            <a href="/contact" class=" font-medium text-xl text-[#434343] leading-6 py-2">Contacts</a>

        </li>

        <li class="flex gap-2 items-center rounded-lg px-6 py-3">
            <a href="/contact" class="bg-primary  z-[1000000] text-white px-8 py-3 rounded-full text-lg font-medium">Consult
                us today
            </a>
        </li>
    </ul>

</nav>
