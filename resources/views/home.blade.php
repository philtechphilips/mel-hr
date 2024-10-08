@extends('layouts.app')


@section('content')
    <section class="md:px-24 px-5 h-[700px] flex flex-col justify-center relative w-full bg-opacity-10"
        style="background: url('{{ asset('images/mel-hr-hero-bg.webp') }}')">
        <div class="z-[1000] md:w-[744px] flex flex-col items-center md:items-start">
            <div class="flex items-center gap-1 md:justify-start justify-center animate__animated  animate__bounceInLeft">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <h6 class="text-white font-bold text-base font-[Mada]">MEL HR Service</h6>
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
            </div>
            <h1
                class="text-white z-[1000] md:text-6xl text-4xl font-bold md:leading-[70px] leading-[50px] md:text-left text-center animate__animated  animate__bounceInLeft">
                Expert <span class="text-secondary">HR
                    Solutions</span> for a thriving workplace</h1>
            <p
                class="text-white md:text-xl text-lg mb-12 font-[Mada] leading-8 mt-6 md:text-left text-center animate__animated  animate__bounceInLeft">
                MEL HR
                Services provides comprehensive HR
                solutions,
                including recruitment, payroll, and employee management. We simplify human capital management to create a
                motivated and agile workforce.</p>

            <a href="/contact"
                class="bg-primary flex items-center gap-2 hover:gap-4 hover:bg-btn h z-[1000000] text-white px-8 py-3 rounded-full text-lg font-medium animate__animated animate__bounceInLeft transition-all duration-300 ease-in-out">
                <p>Consult us today</p>
                <img src="{{ asset('images/arrow.svg') }}" class="mt-1" alt="">
            </a>

        </div>
        <div class="w-full h-full bg-black opacity-70 z-0 absolute top-0 left-0"></div>
    </section>

    <section class="md:px-24 px-5 py-24 flex md:flex-row flex-col gap-16 items-center w-full">
        <div class="md:w-[40%]">
            <img class="rounded-3xl hidden md:flex w-full" data-aos="fade-right" data-aos-duration="1000"
                src="{{ asset('images/image 5.webp') }}" alt="">
        </div>
        <div class="md:w-[60%] flex flex-col items-center md:items-start gap-6">
            <div class="flex items-center gap-1" data-aos="fade-left" data-aos-duration="1000">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <h6 class="text-primary font-bold text-base font-[Mada]">About MEL HR Services</h6>
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
            </div>

            <h2 class="font-extrabold md:text-[40px] text-3xl hidden md:block leading-[50px] text-center md:text-left"
                data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                Empowering organizations by <span class="text-secondary">simplifying</span>
                <br><span class="text-secondary">human capital</span> management
            </h2>

            <h2 class="font-extrabold md:text-[40px] md:hidden text-3xl leading-[40px] text-center md:text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                Empowering organizations by <span class="text-secondary">simplifying</span>
                <span class="text-secondary">human capital</span> management
            </h2>

            <p class="text-[#7B808E] font-[Mada] md:text-xl text-lg leading-8 text-center md:text-left" data-aos="fade-left"
                data-aos-duration="1000">MEL HR Service is a
                Human resource company domiciled in Nigeria rendering labor law advisory, outsourcing
                services, recruitment, payroll service, employee management and other strategic functions of Human
                resources. We offer our expertise and leverage technology by simplifying human capital management which
                enriches you with an agile and motivated workforce.
            </p>

            <a href="/about-us" class="bg-primary w-fit text-white px-8 py-3 rounded-full text-lg font-medium"
                data-aos="fade-left" data-aos-duration="1000">More about
                us
            </a>
        </div>
    </section>

    <section class="">
        <div class="w-full h-[525px] md:px-24 px-5 py-24 relative z-0 "
            style="background:
            url('{{ asset('images/image 4.webp') }}'); background-size: cover;">
            <div class="relative z-10 flex items-center gap-1 md:justify-start justify-center" data-aos="fade-right"
                data-aos-duration="1000">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <h6 class="text-white font-bold text-base font-[Mada]">MEL HR Service</h6>
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
            </div>
            <div class="relative z-10 md:w-[645px] mt-2">
                <h2 class="font-extrabold md:text-[40px] text-white text-3xl hidden md:block leading-[50px] text-center md:text-left"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    Transform your workforce with our
                    <span class="text-secondary">key solution</span>
                </h2>
            </div>

            <div class="relative z-10 w-full flex md:flex-row flex-col justify-between md:items-end items-center mt-6">
                <p class="font-[Mada] md:text-xl text-lg text-white text-center md:text-left md:w-[645px]"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="150">Explore our range
                    of professional HR services designed to optimize your workforce and enhance business efficiency.</p>
                <a href="/services"
                    class="bg-primary mt-6 md:mt-0  z-[1000000] text-white px-8 py-3 rounded-full text-lg font-medium"
                    data-aos="fade-left" data-aos-duration="1000">
                    Explore our services
                </a>
            </div>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-70 z-0"></div>
        </div>

        <div class="md:px-24 px-5 py-24 bg-light">
            <div class="flex flex-col md:flex-row md:gap-10 gap-16 md:-mt-40 -mt-52 z-[1000]">
                <div class="relative z-10" data-aos="fade-up" data-aos-duration="500">
                    <div
                        class="w-[88px] h-[88px] z-[20] bg-white p-4 rounded-full flex items-center justify-center absolute top-0 left-10 bg-opacity-20 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/icon.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="bg-primary h-[391px] rounded-2xl z-10 pt-20 px-6 pb-10">
                        <h6 class="text-white md:text-xl text-xl font-bold">Human Resource Consulting</h6>
                        <p class="text-white font-[Mada] mt-8">Optimize your workforce with our comprehensive HR consulting
                            services. From monthly payroll computation and performance reviews to employee engagement and
                            policy development, we provide expert solutions tailored to your business needs.</p>
                        <div class="mt-7">
                            <a href="" class="flex items-center gap-2 text-lg font-medium text-white">
                                <p class="font-[Mada]">Learn more</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative z-10" data-aos="fade-up" data-aos-duration="500">
                    <div
                        class="w-[88px] h-[88px] z-[20] bg-white p-4 rounded-full flex items-center justify-center absolute top-0 left-10 bg-opacity-20 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/icon (1).svg') }}" alt="">
                        </div>
                    </div>
                    <div class="bg-primary h-[391px] rounded-2xl z-10 pt-20 px-6 pb-10">
                        <h6 class="text-white md:text-xl text-xl font-bold">Payroll service</h6>
                        <p class="text-white font-[Mada] mt-10">O
                            Ensure accurate and timely payroll management with our specialized services. We handle
                            everything from salary remittances and statutory contributions to pay slip generation and
                            benefit administration, keeping your employees satisfied and compliant.
                        </p>
                        <div class="mt-7">
                            <a href="" class="flex items-center gap-2 text-lg font-medium text-white">
                                <p class="font-[Mada]">Learn more</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative z-10" data-aos="fade-up" data-aos-duration="500">
                    <div
                        class="w-[88px] h-[88px] z-[20] bg-white p-4 rounded-full flex items-center justify-center absolute top-0 left-10 bg-opacity-20 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/f7_arrow-2-circlepath.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="bg-primary h-[391px] rounded-2xl z-10 pt-20 px-6 pb-10">
                        <h6 class="text-white md:text-xl text-xl font-bold">Recruitment & personnel outsourcing</h6>
                        <p class="text-white font-[Mada] md:mt-2 2xl:mt-7 mt-6">
                            Attract and retain top talent with our recruitment and personnel outsourcing solutions. We
                            manage the entire hiring process—from job analysis and candidate screening to interviews and
                            onboarding—so you can focus on your core business.
                        </p>
                        <div class="mt-7">
                            <a href="" class="flex items-center gap-2 text-lg font-medium text-white">
                                <p class="font-[Mada]">Learn more</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.chose-us')
@endsection
