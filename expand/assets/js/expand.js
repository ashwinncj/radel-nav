$(document).ready(function () {
    $.fn.radelmenu = function () {
        $this = $(this);
        var itemsCount = 0;
        var menuHeight = 0;
        var transitionDelay = 0.2;
        //When menu is closed
        $this.find('.menu-items ul li').each(function () {
            $this.find('.radel-menu-btn img').attr('src', 'assets/img/icons8-menu-500.png');
            $this.find('.radel-menu-close-control').css('width', '0');
            $this.find('.radel-menu-close-control').css('height', '0');
            itemsCount++;
            transitionDelay = transitionDelay - 0.02;
            $(this).css('transition-delay', transitionDelay + 's');
            menuHeight = menuHeight + 45;
        });
        menuHeight = menuHeight + 5;
        //When menu is opened
        transitionDelay = 0.05;
        $this.find('.menu-items').css('transition-delay', '0s');
        $this.find('.activated').css('transition-delay', '0.2s');
        //Activating the marker
        $this.find('.menu-items').toggleClass('activated');
        $this.find('.activated ul li').each(function () {
            $this.find('.radel-menu-btn img').attr('src', 'assets/img/icons8-delete-100.png');
            $this.find('.radel-menu-close-control').css('width', '100vw');
            $this.find('.radel-menu-close-control').css('height', '100vh');
            transitionDelay = transitionDelay + 0.02;
            $(this).css('transition-delay', transitionDelay + 's');
        });

        $this.find('.menu-items').css('height', '0px');
        $this.find('.menu-items li').css('left', '-200px');
        $this.find('.activated li').css('left', '40px');
        $this.find('.activated').css('height', menuHeight + 'px');
    };
    $('.radel-menu-btn').click(function () {
        $('.radelmenu').radelmenu();
    });
    $('.radel-menu-close-control').click(function () {
        $('.radelmenu').radelmenu();
    });
});