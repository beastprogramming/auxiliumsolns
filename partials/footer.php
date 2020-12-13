
    <footer class="scroll-reveal">
        <div class="container footer-container">
        <div class="text-right"><p>© 2017 <?php echo SITE_NAME;?>. All Rights Reserved.  Designed And Developed By <a href="http://avneeshwebstudio.in">Avneeshwebstudio</a> </p></div>
        
    </footer>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.eislideshow.js" type="text/javascript"></script>
<script src="js/jquery.easing-1.3.js" type="text/javascript"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/jquery.matchHeight-min.js"></script>
<script>
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 3000
    })
})
</script>
<script>
	$('.product-card').matchHeight();
	$('.product-card figcaption').matchHeight();
	//$('.product-card__img').matchHeight();
	$('address.panel').matchHeight();
	$('.nav__menu-img').matchHeight();
	$('address.panel').matchHeight();
	
	
</script>
<?php
    $pagetitle = strtolower(trim(substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], "/")+1)));
    if($pagetitle=="details.php")
    {
        ?>
        <script type="text/javascript">
            $(function() {
                $(document).on('click', '.details-page-header-nav ul li a', function(event) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: $($.attr(this, 'href')).offset().top
                    }, 500);
                });
            });
        </script>
        <script>
            $(function() {
                $('.details-page-header-gallery-thumb').on('click', function() {
                    $('.details-page-header-gallery-thumb').removeClass('active');
                    $(this).addClass('active');
                    var image = $(this).find('img').attr('src');
                    $('.details-page-header-gallery-image img').attr('src', image);
                });
            });
        </script>
        <?php
    }
    
    else if($pagetitle=="index.php")
    {
        ?>
        <script type="text/javascript">
        $(function() {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 3000,
                titlesFactor: 0
            });
        });
        </script>
        <script>
        $('#myCarousel').carousel({
            interval: 4000
        });

        // handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length - 1);
            id = parseInt(id);
            $('#myCarousel').carousel(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $(this).addClass('selected');
        });

        // when the carousel slides, auto update
        $('#myCarousel').on('slid', function(e) {
            var id = $('.item.active').data('slide-number');
            id = parseInt(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-' + id + ']').addClass('selected');
        });
        </script>
        <?php
        
    }
    
    else if($pagetitle=="listing.php")
    {
        ?>
        <script type="text/javascript">
        $(function() {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 3000,
                titlesFactor: 0
            });
        });
        </script>
        <script>
        $(function() {
            $('.listing-page-carousel').carousel({
                interval: 10000
            })

            $('.carousel .item').each(function() {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                if (next.next().length > 0) {
                    next.next().children(':first-child').clone().appendTo($(this));
                } else {
                    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                }
            });
        });
        </script>
        <?php
    }
    
    else
    {
        ?>
        <script type="text/javascript">
        $(function() {
            $(document).on('click', '.details-page-header-nav ul li a', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $($.attr(this, 'href')).offset().top
                }, 500);
            });
        });
        </script>
        <script>
        $(function() {
            $('.details-page-header-gallery-thumb').on('click', function() {
                // debugger
                $('.details-page-header-gallery-thumb').removeClass('active');
                $(this).addClass('active');
                var image = $(this).find('img').attr('src');
                var image = image.replace('/thumb', '');
                $('.details-page-header-gallery-image img').attr('src', image);
            });
        });
        </script>
        <?php
    }
    
    ?>
	<script>
		function send_enquiry()
		{
			$.ajax({
            
                url: "send_enquiry.php",
                type: "POST",
                data: $("#contact-form").serialize(),
                dataType: 'json',
                success:function(response){
                    // response code 1: error 0: success
                    if(response.code == 1)
                    {
                        $('#form-messages').show();
                        $('#form-messages').css({'color':'#ed5565'}); 
                        $("#form-messages").html(response.msg);
                    }
                    else
                    {   
                        $('#form-messages').show();
                        $('#form-messages').css({'color':'#89c161'});                   
                        $("#form-messages").html(response.msg);

                        $("#contact-form1").trigger('reset');     


                    }
                }
        });
		}
	</script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
	<script type="text/javascript">
		// JavaScript
		window.sr = ScrollReveal();
		// sr.reveal('.foo');
		// sr.reveal('.scroll-reveal');
		sr.reveal('.scroll-reveal', {
			duration: 1000
		});

	</script>
</body>

</html>