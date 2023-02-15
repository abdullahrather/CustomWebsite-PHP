<script>
            $(document).ready(function () {
//                            $('#base p a').attr('href', 'http://www.google.com');

                $('.dropdown').hover(function () {
                    $(this).children('.dropdown-toggle').css('border-bottom', '4px solid #019bd6');
                });
                $('.dropdown').mouseleave(function () {
                    $(this).children('.dropdown-toggle').css('border-bottom', '4px solid transparent');
                });

                $("#latest_twits").load("/twiter/latest_twist", function () {

                });
            })

        </script>
        <script>
            $(document).ready(function () {
                $('.dropdown').hover(function () {
                    $(this).children('.dropdown-toggle').css('border-bottom', '4px solid #019bd6');
                });
                $('.dropdown').mouseleave(function () {
                    $(this).children('.dropdown-toggle').css('border-bottom', '4px solid transparent');
                });
                $('.banner-wrapper a').click(function () {
                    $('html, body').animate({
                        scrollTop: $('#feature').offset().top
                    }, 750);
                });

                $('.q1').click(function () {
                    if ($(this).next('.panel').css('display') == 'none') {
                        $(this).next('.panel').slideDown("slow");
                        $(this).children('span.fa').removeClass('fa-chevron-circle-down');
                        $(this).children('span.fa').addClass('fa-chevron-circle-left');
                    } else {
                        $(this).next('.panel').slideUp("slow");
                        $(this).children('span.fa').removeClass('fa-chevron-circle-left');
                        $(this).children('span.fa').addClass('fa-chevron-circle-down');
                    }
                    ;
                });


            })
            $(window).scroll(function() {    
                var scroll = $(window).scrollTop();    
                if (scroll > 50) {
                    $(".sticky_header").addClass("stick");
                }
                    else{$(".sticky_header").removeClass("stick");}
            });
            
            $(function() {
                setTimeout(function() {
                    $(".alert.alert-success").fadeOut(1000);
                    $(".alert.alert-danger").fadeOut(1000);
                }, 5000);
            });
        </script>