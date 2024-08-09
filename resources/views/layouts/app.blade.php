<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mel-HR | Exper HR solutin</title>

    <link rel="shortcut icon" href="{{asset("images/mel-hr.svg")}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="font-[Mulish] overflow-x-hidden bg-white">
    @include('includes.navbar')
    @yield('content')
    @include('includes.chose-us')
    @include('includes.faqs')
    @include('includes.footer')

    <script>
        const accordions = document.getElementsByClassName("accordion");
    
        for (let i = 0; i < accordions.length; i++) {
            // Toggle the accordion on click
            accordions[i].addEventListener("click", function() {
                this.classList.toggle("active");
    
                const icon = this.querySelector('i');
    
                if (this.classList.contains('active')) {
                    icon.classList.remove('ri-add-line');
                    icon.classList.add('ri-subtract-line');
                    icon.style.color = 'white';
                } else {
                    icon.classList.remove('ri-subtract-line');
                    icon.classList.add('ri-add-line');
                    icon.style.color = '#141d38';
                }
            });
    
            // Remove the active class on mouse leave
            accordions[i].addEventListener("mouseleave", function() {
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
    
                    const icon = this.querySelector('i');
                    icon.classList.remove('ri-subtract-line');
                    icon.classList.add('ri-add-line');
                    icon.style.color = '#141d38';
                }
            });
        }
    </script>
    
    
    
    @yield("script")
</body>

</html>
