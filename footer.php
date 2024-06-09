<button id="scrollToTopBtn" class="btn alignright"><i class="fas fa-chevron-up"></i></button>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        var btn = $('#scrollToTopBtn');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 400) {
                btn.fadeIn();
            } else {
                btn.fadeOut();
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '400');
        });
    });
</script>
<p class="aligncenter">Copyright Cyril Duport®</p>
