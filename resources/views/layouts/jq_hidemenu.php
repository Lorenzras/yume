<script type="application/javascript" defer>
        window.onload = function() {
            $(document).click(function (event) {
                console.log('clicked DOM');
                var clickover = $(event.target);
                var $navbar = $(".navbar-collapse");
                var _opened = $navbar.hasClass("in");
                if (_opened === true && !clickover.hasClass("navbar-toggle")) {
                    $navbar.collapse('hide');
                }
            });

            $(window).scroll(function() {
                console.log('logging');
                var $navbar = $(".navbar-collapse");
                var _opened = $navbar.hasClass("in");
                if (_opened === true) {
                    $navbar.collapse('hide');
                }
            });


        };
    </script>