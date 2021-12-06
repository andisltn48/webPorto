<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <meta charset="utf-8">
    {{-- <meta name="description" content="">
    <meta name="author" content=""> --}}
    <script src="https://kit.fontawesome.com/767ff093f8.js" crossorigin="anonymous"></script>
    {{-- <link rel="icon" type="image/png/x-icon" href="{{ asset('img/logo-itk-text.png') }}"> --}}
    <title>Portofolio-Andi @isset($title)
            - {{ $title }}
        @endisset</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        {{ $slot }}
    </div>
    <script>
        AOS.init();
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });

        var $btntop = document.getElementById("btn-top");
        var $nav = $(".navbar");

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                $btntop.style.display = "block";
            } else {
                $btntop.style.display = "none";
            }
        }

        $(function() {
            $("#about-btn").on('click', function() {
                $('.second-content').addClass('add-margin');
            });

            $("#project-btn").on('click', function() {
                $('.second-content').removeClass('add-margin');
                $('.third-content').addClass('add-margin');
                // alert('harusnya bisa')
            });

            $("#btn-top").on('click', function() {
                $("HTML, BODY").animate({
                    scrollTop: 0
                }, 500);
            });
        });

        // $('a[href^="#"]').on('click', function(event) {
        //     var target = $(this.getAttribute('href'));
        //     if (target.length) {
        //         event.preventDefault();
        //         $('html, body').animate({
        //             scrollTop: target.offset().top
        //         }, 500);
        //     }
        // });

        $(function() {
            //your code
            var About = $('#About').offset().top + $('#About').height() - 499;
            var Projects = $('#Projects').offset().top + $('#Projects').height() - 1150;
            var Contacts = $('#Contacts').offset().top + $('#Contacts').height() - 690;
            console.log(About);
            console.log(Projects);
            console.log(Contacts);
            $(window).on('scroll', function() {
                // echo $('line-contacts').toggleClass();
                stop = Math.round($(window).scrollTop());
                console.log(stop);
                if (stop > About) {
                    $('.line-projects').removeClass('past-main');
                    $('.line-contactme').removeClass('past-main');
                    $('.line-about').addClass('past-main');
                }
                if (stop > Projects) {
                    $('.second-content').removeClass('add-margin');
                    $('.line-contactme').removeClass('past-main');
                    $('.line-about').removeClass('past-main');
                    $('.line-projects').addClass('past-main');
                }
                if (stop > Contacts) {
                    $('.third-content').removeClass('add-margin');
                    $('.line-projects').removeClass('past-main');
                    $('.line-about').removeClass('past-main');
                    $('.line-contactme').addClass('past-main');
                    // alert('Harusnya muncul bro');
                }
                if (stop < (About-50)) {
                    $('.second-content').removeClass('add-margin');
                    $('.line-projects').removeClass('past-main');
                    $('.line-about').removeClass('past-main');
                    $('.line-contactme').removeClass('past-main');
                }

                if (stop<720) {
                    $('.second-content').removeClass('add-margin');
                }

                if (stop<(Projects+100)) {
                    $('.third-content').removeClass('add-margin');
                }

            });
        });
    </script>
</body>

</html>
