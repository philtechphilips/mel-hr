@extends('layouts.app')


@section('content')
    <section class="md:px-24 px-5 bg-[#F8F8F8] py-24">
        <div class="flex items-center gap-1 md:justify-start justify-center" data-aos="fade-right" data-aos-duration="1000">
            <div class="w-2 h-2 rounded-full bg-secondary"></div>
            <h6 class="text-[#141D38] font-bold text-base font-[Mada]">Contact us</h6>
            <div class="w-2 h-2 rounded-full bg-secondary"></div>
        </div>
        <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"
            class="text-[#141D38] md:w-[760px] z-[1000] md:text-5xl mt-6 text-4xl font-extrabold md:leading-[70px] leading-[50px] md:text-left text-center">
            <span class="text-secondary">Get in</span> touch
        </h1>
        <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200"
            class="text-[#7B808E] md:w-[991px] md:text-xl text-lg mb-28 font-[Mada] leading-8 mt-6 md:text-left text-center">
            We'd love to hear from you! Whether you have questions about our services, need assistance with a specific HR
            challenge, or want to schedule a consultation, our team is here to help.
        </p>

        <div class="flex md:flex-row flex-col gap-16">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"
                class="md:w-[33%] bg-primary px-6 pt-16 pb-14 relative rounded-3xl flex md:flex-row flex-col gap-6">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-10 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/location_on.svg') }}" alt="">
                    </div>
                </div>

                <div class="flex flex-col">
                    <h6 class="text-white font-[Mada] text-lg font-semibold mb-2">Visit us</h6>
                    <p class="text-[#F8F8F8] ">Suite 207, AHCN Towers, CIPM Avenue</p>
                    <p class="text-[#F8F8F8] ">Alausa</p>
                    <p class="text-[#F8F8F8] ">CBD, Ikeja, Lagos.</p>
                </div>
            </div>

            <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200"
                class="md:w-[33%] bg-primary px-6 pt-16 pb-14 relative rounded-3xl flex md:flex-row flex-col gap-6">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-10 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/mail.svg') }}" alt="">
                    </div>
                </div>

                <div class="flex flex-col">
                    <h6 class="text-white font-[Mada] text-lg font-semibold mb-2">Send us an Email</h6>
                    <p class="text-[#F8F8F8] underline">hrs@mel-ng.com</p>
                    <p class="text-[#F8F8F8] underline">contact@mel-ng.com</p>
                </div>
            </div>

            <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300"
                class="md:w-[33%] bg-primary px-6 pt-16 pb-14 relative rounded-3xl flex md:flex-row flex-col gap-6">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-10 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/call.svg') }}" alt="">
                    </div>
                </div>

                <div class="flex flex-col">
                    <h6 class="text-white font-[Mada] text-lg font-semibold mb-2">Call us</h6>
                    <p class="text-[#F8F8F8] ">+234 913 413 9145</p>
                    <p class="text-[#F8F8F8] ">+234 811 900 3518</p>
                </div>
            </div>
        </div>
    </section>
@endsection
