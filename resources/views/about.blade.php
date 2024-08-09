@extends('layouts.app')


@section('content')
    <section class="md:px-24 px-5 bg-[#F8F8F8] py-24">
        <div class="flex items-center gap-1 md:justify-start justify-center">
            <div class="w-2 h-2 rounded-full bg-secondary"></div>
            <h6 class="text-[#141D38] font-bold text-base font-[Mada]">About us</h6>
            <div class="w-2 h-2 rounded-full bg-secondary"></div>
        </div>
        <h1
            class="text-[#141D38] md:w-[760px] z-[1000] md:text-6xl mt-6 text-4xl font-bold md:leading-[70px] leading-[50px] md:text-left text-center">
            Welcome to <span class="text-secondary">MEL HR
                Services</span></h1>
        <p class="text-[#7B808E] md:w-[991px] md:text-xl text-lg mb-12 font-[Mada] leading-8 mt-6 md:text-left text-center">
            MEL HR
            MEL HR Services is a leading human resources company based in Nigeria, dedicated to providing comprehensive and
            strategic HR solutions to businesses of all sizes. Our mission is to empower companies with the tools and
            expertise needed to manage their workforce effectively, ensuring compliance with labor laws and fostering a
            productive, motivated, and agile workforce.
        </p>

        <div class="flex md:flex-row flex-col gap-16">
            <div class="md:w-[50%] bg-primary p-6 pb-8 rounded-3xl flex md:flex-row flex-col gap-6">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-white p-4 rounded-full flex items-center justify-center bg-opacity-20">
                    <div class="w-[56px] h-[56px] bg-white p-4 rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/mingcute_target-fill.svg') }}" alt="">
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <h6 class="text-white font-[Mada] text-lg font-semibold">Mission</h6>
                    <p class="text-[#F8F8F8] ">Our mission is to empower businesses by providing comprehensive HR solutions that streamline operations and enhance workforce productivity. We aim to help businesses thrive by offering top-tier HR expertise, enabling them to focus on their core operations and achieve exceptional growth.</p>
                </div>
            </div>
            <div class="md:w-[50%] bg-primary p-6 pb-8 rounded-3xl flex md:flex-row flex-col gap-6">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-white p-4 rounded-full flex items-center justify-center bg-opacity-20">
                    <div class="w-[56px] h-[56px] bg-white p-4 rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/weui_eyes-on-filled.svg') }}" alt="">
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <h6 class="text-white font-[Mada] text-lg font-semibold">Vision</h6>
                    <p class="text-[#F8F8F8] ">
                        To be the leading HR service provider in Nigeria, recognized for our innovative solutions, exceptional service delivery, and commitment to client success. We aspire to set the benchmark in the HR industry by continuously evolving our practices, fostering strong client relationships, and consistently delivering value that exceeds expectations.
                    </p>
                </div>
            </div>
        </div>

    </section>

    @include('includes.chose-us')
@endsection
