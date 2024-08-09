@extends('layouts.app')


@section('content')
    <section class="md:px-24 px-5 h-[700px] flex flex-col justify-center relative w-full bg-opacity-10"
        style="background: url('{{ asset('images/mel-hr-hero-bg.webp') }}')">
        <div class="z-[1000000] md:w-[744px] flex flex-col items-center md:items-start">
            <div class="flex items-center gap-1 md:justify-start justify-center">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <h6 class="text-white font-bold text-base font-[Mada]">MEL HR Service</h6>
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
            </div>
            <h1
                class="text-white z-[1000000] md:text-6xl text-4xl font-bold md:leading-[70px] leading-[50px] md:text-left text-center">
                Expert <span class="text-secondary">HR
                    Solutions</span> for a thriving workplace</h1>
            <p class="text-white md:text-xl text-lg mb-12 font-[Mada] leading-8 mt-6 md:text-left text-center">MEL HR
                Services provides comprehensive HR
                solutions,
                including recruitment, payroll, and employee management. We simplify human capital management to create a
                motivated and agile workforce.</p>

            <a href="/contact" class="bg-primary  z-[1000000] text-white px-8 py-3 rounded-full text-lg font-medium">Consult
                us today</a>
        </div>
        <div class="w-full h-full bg-black opacity-70 z-0 absolute top-0 left-0"></div>
    </section>

    <section class="md:px-24 px-5 py-24 flex md:flex-row flex-col gap-16 items-center justify-center w-full">
        <div class="md:w-[510px]">
            <img class="rounded-3xl hidden md:flex" src="{{ asset('images/image 5.webp') }}" alt="">
        </div>
        <div class="md:w-[630px] flex flex-col items-center md:items-start gap-6">
            <div class="flex items-center gap-1">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <h6 class="text-primary font-bold text-base font-[Mada]">About MEL HR Services</h6>
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
            </div>

            <h2 class="font-extrabold md:text-[40px] text-3xl hidden md:block leading-[50px] text-center md:text-left">
                Empowering organizations by <span class="text-secondary">simplifying</span>
                <br><span class="text-secondary">human capital</span> management
            </h2>

            <h2 class="font-extrabold md:text-[40px] md:hidden text-3xl leading-[40px] text-center md:text-left">
                Empowering organizations by <span class="text-secondary">simplifying</span>
                <span class="text-secondary">human capital</span> management
            </h2>

            <p class="text-[#7B808E] font-[Mada] md:text-xl text-lg leading-8 text-center md:text-left">MEL HR Service is a
                Human resource company domiciled in Nigeria rendering labor law advisory, outsourcing
                services, recruitment, payroll service, employee management and other strategic functions of Human
                resources. We offer our expertise and leverage technology by simplifying human capital management which
                enriches you with an agile and motivated workforce.
            </p>

            <a href="/contact" class="bg-primary w-fit text-white px-8 py-3 rounded-full text-lg font-medium">More about
                us</a>
        </div>
    </section>
@endsection
