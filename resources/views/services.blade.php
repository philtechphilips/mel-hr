@extends('layouts.app')


@section('content')
    <section class="md:px-24 flex md:flex-row flex-col gap-14 px-5 bg-[#F8F8F8] md:py-24 pb-0 py-16 items-center">
        <div class="md:w-[50%] md:sticky md:top-0">
            <div class="flex items-center gap-1 md:justify-start justify-center">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <h6 class="text-[#141D38] font-bold text-base font-[Mada]">Our services</h6>
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
            </div>
            <h1
                class="text-[#141D38] z-[1000] md:text-5xl mt-6 text-4xl font-extrabold md:leading-[70px] leading-[50px] md:text-left text-center">
                Comprehensive <span class="text-secondary">HR Solutions</span> Tailored to Your Needs
            </h1>
            <p class="text-[#7B808E] md:text-xl text-lg mb-28 font-[Mada] leading-8 mt-6 md:text-left text-center">
                At MEL HR Services, we are committed to providing comprehensive human resource solutions that cater to the
                unique needs of your organization. Our expert team combines deep industry knowledge with innovative
                technology to streamline your HR processes, ensuring you have the right tools and strategies to foster an
                agile and motivated workforce. Our services cover every aspect of human capital management, from strategic
                consulting to hands-on operational support, allowing you to focus on your core business activities while we
                handle the complexities of HR.
            </p>
        </div>

        <div class="w-[50%] hidden md:flex flex-col gap-16 h-[400px] py-16 overflow-y-scroll scrollbar-hide">
            <div class="bg-primary rounded-2xl h-[338px] p-6 text-white">
                <h4 class="font-bold text-3xl">Human Resource Consulting</h4>
                <ul class="px-4 pt-3 list-disc font-[Mada] flex flex-col gap-2">
                    <li>Monthly Payroll Computation</li>
                    <li>Quarterly Performance Review and Management</li>
                    <li>Compensation Survey and Job Grading</li>
                    <li>Interface with Third Parties</li>
                    <li>Employee Engagement Activities</li>
                    <li>Learning and Development, Onboarding and Offboarding</li>
                    <li>Development and Review of HR Policies and Strategies</li>
                </ul>
            </div>

            <div class="bg-primary rounded-2xl h-[338px] p-6 text-white">
                <h4 class="font-bold text-3xl">Payroll Service</h4>
                <ul class="px-4 pt-3 list-disc font-[Mada] flex flex-col gap-2">
                    <li>Payroll Simulation</li>
                    <li>Monthly Salary Remittances</li>
                    <li>Statutory Remittances</li>
                    <li>Pay slip Generation</li>
                    <li>Company-Based Benefits</li>
                    <li>Monthly Payroll Report</li>
                </ul>
            </div>

            <div class="bg-primary rounded-2xl h-[338px] p-6 text-white">
                <h4 class="font-bold text-3xl">Recruitment and Personnel Outsourcing</h4>
                <ul class="px-4 pt-3 list-disc font-[Mada] flex flex-col gap-2">
                    <li>Job Analysis and Job Description Creation</li>
                    <li>Screening and Selection</li>
                    <li>Interview</li>
                    <li>Onboarding/Offboarding</li>
                </ul>
            </div>
        </div>

        <div class="md:w-[50%] md:hidden flex flex-col gap-8 -mt-40 py-16">
            <div class="bg-primary rounded-2xl pb-10 md:h-[338px] p-6 text-white">
                <h4 class="font-bold text-3xl">Human Resource Consulting</h4>
                <ul class="px-4 pt-3 list-disc font-[Mada] flex flex-col gap-2">
                    <li>Monthly Payroll Computation</li>
                    <li>Quarterly Performance Review and Management</li>
                    <li>Compensation Survey and Job Grading</li>
                    <li>Interface with Third Parties</li>
                    <li>Employee Engagement Activities</li>
                    <li>Learning and Development, Onboarding and Offboarding</li>
                    <li>Development and Review of HR Policies and Strategies</li>
                </ul>
            </div>

            <div class="bg-primary rounded-2xl h-[338px] p-6 text-white">
                <h4 class="font-bold text-3xl">Payroll Service</h4>
                <ul class="px-4 pt-3 list-disc font-[Mada] flex flex-col gap-2">
                    <li>Payroll Simulation</li>
                    <li>Monthly Salary Remittances</li>
                    <li>Statutory Remittances</li>
                    <li>Pay slip Generation</li>
                    <li>Company-Based Benefits</li>
                    <li>Monthly Payroll Report</li>
                </ul>
            </div>

            <div class="bg-primary rounded-2xl h-[338px] p-6 text-white">
                <h4 class="font-bold text-3xl">Recruitment and Personnel Outsourcing</h4>
                <ul class="px-4 pt-3 list-disc font-[Mada] flex flex-col gap-2">
                    <li>Job Analysis and Job Description Creation</li>
                    <li>Screening and Selection</li>
                    <li>Interview</li>
                    <li>Onboarding/Offboarding</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-light md:px-24 px-5 py-24">
        <div class="md:w-[1081px]">
            <div class="flex items-center gap-1 md:justify-start justify-center">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <h6 class="text-[#141D38] font-bold text-base font-[Mada]">How it work</h6>
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
            </div>
            <h1
                class="text-[#141D38] z-[1000] md:text-[40px] mt-6 text-4xl font-extrabold md:leading-[55px] leading-[40px] md:text-left text-center">
                How MEL HR Services partners with you to <span class="text-secondary">streamline your HR processes</span>
                and enhance your workforce management.
            </h1>
        </div>

        <div class="flex md:flex-row flex-col gap-14 px-3 md:gap-0 mt-24 items-center w-[100%]">
            <div class="md:w-[20%] relative">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-5 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <h2 class="text-[#F0F1FA] text-2xl">01</h2>
                    </div>
                </div>
                <div class="border border-[#CECFD5] rounded-3xl bg-white pt-16 px-4 md:h-[280px] h-[240px]">
                    <h6 class="text-[#141D38] text-lg font-[Mada] font-semibold pb-2">Initial consultation</h6>
                    <p class="text-[#7B808E] font-[Mada]">We start with an initial consultation to understand your
                        business needs and HR challenges.</p>
                </div>
            </div>

            <div class="2xl:w-14 md:w-8 hidden md:block">
                <img src="{{ asset('images/line.svg') }}" alt="">
            </div>

            <div class="md:w-[20%] relative">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-5 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <h2 class="text-[#F0F1FA] text-2xl">02</h2>
                    </div>
                </div>
                <div class="border border-[#CECFD5] rounded-3xl bg-white pt-16 px-4 md:h-[280px] h-[240px]">
                    <h6 class="text-[#141D38] text-lg font-[Mada] font-semibold pb-2">Tailored solutions</h6>
                    <p class="text-[#7B808E] font-[Mada]">
                        Based on our understanding of your unique requirements, we develop customized HR solutions.
                    </p>
                </div>
            </div>

            <div class="2xl:w-14 md:w-8 hidden md:block">
                <img src="{{ asset('images/line.svg') }}" alt="">
            </div>

            <div class="md:w-[20%] relative">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-5 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <h2 class="text-[#F0F1FA] text-2xl">03</h2>
                    </div>
                </div>
                <div class="border border-[#CECFD5] rounded-3xl bg-white pt-16 px-4 md:h-[280px] h-[240px]">
                    <h6 class="text-[#141D38] text-lg font-[Mada] font-semibold pb-2">Implementation</h6>
                    <p class="text-[#7B808E] font-[Mada]">
                        Our team of experts seamlessly integrates our solutions into your business operations.
                    </p>
                </div>
            </div>

            <div class="2xl:w-14 md:w-8 hidden md:block">
                <img src="{{ asset('images/line.svg') }}" alt="">
            </div>

            <div class="md:w-[20%] relative">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-5 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <h2 class="text-[#F0F1FA] text-2xl">04</h2>
                    </div>
                </div>
                <div class="border border-[#CECFD5] rounded-3xl bg-white pt-16 px-4 md:h-[280px] h-[240px]">
                    <h6 class="text-[#141D38] text-lg font-[Mada] font-semibold pb-2">Continuous support</h6>
                    <p class="text-[#7B808E] font-[Mada]">
                        We provide ongoing support to ensure our solutions continue to meet your needs.
                    </p>
                </div>
            </div>

            <div class="2xl:w-14 md:w-8 hidden md:block">
                <img src="{{ asset('images/line.svg') }}" alt="">
            </div>

            <div class="md:w-[20%] relative">
                <div
                    class="w-[88px] h-[88px] z-[20] bg-slate-300 p-4 rounded-full flex items-center justify-center absolute top-0 left-5 bg-opacity-60 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[56px] h-[56px] bg-primary p-4 rounded-full flex items-center justify-center">
                        <h2 class="text-[#F0F1FA] text-2xl">05</h2>
                    </div>
                </div>
                <div class="border border-[#CECFD5] rounded-3xl bg-white pt-16 px-4 md:h-[280px] h-[240px]">
                    <h6 class="text-[#141D38] text-lg font-[Mada] font-semibold pb-2">Improvement</h6>
                    <p class="text-[#7B808E] font-[Mada]">
                        We value your feedback and continuously refine our services to better serve you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.chose-us')
@endsection
