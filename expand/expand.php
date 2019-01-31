<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RADEL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <style>
            .radelmenu{
                font-family: 'Montserrat', sans-serif;
                width: 48px;
                position: fixed;
                top: 20px;
                left: 20px;
                font-size: 14px;
            }
            .menu-items{
                transition: all 0.3s;
                background-color: yellow;
                height: 0;
                border-radius: 0 0 50px 50px;
                z-index: 4;
                position: relative;
                top: -25px;
                padding-top: 25px;
            }
            .menu-items ul{
                width: 150px;
                overflow: hidden;
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .menu-items li{
                transition: all 0.2s;
                left: -200px;
                height: 25px;
                padding: 10px;
                position: relative;
                cursor: pointer;
                color: black;
            }
            .menu-items li a{
                color: black;
            }
            .menu-items li a:hover{
                transition: all 0s;
                color: mediumturquoise;
                left: 50px;
            }
            .radel-menu-btn{
                position: relative;
                cursor: pointer;   
                font-size: 20px;
                background-color: aquamarine;
                text-align: center;
                width: 25px;
                height: 25px;
                padding: 12px;
                border-radius: 50%;
                z-index: 5;
            }
            .nav-img{
                width: 25px;
            }
            .menu-link-img{
                position: absolute;
                left: -28px;
                top: 5px;
            }
            .menu-title{
                position: relative;
                left: 5px;
                transition: all 0.2s;
            }
            .menu-title:hover{
                position: relative;
                left: 10px;
            }
            .menu-link-img:hover ~ .menu-title{
                position: relative;
                left: 10px;
            }
            .radel-menu-close-control{
                width: 0;
                height: 0;
                z-index: 2;
                position: fixed;
                top: 0;
                left: 0;
            }            
            .radelmenu a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div id="main-nav" class="radelmenu">
            <div class="radel-menu-btn"><img class="nav-img" src="assets/img/icons8-menu-500.png"></div>
            <div class="radel-menu-close-control"></div>
            <div class="menu-items">
                <ul>
                    <li><a href="#"><span class="menu-link-img"><img class="nav-img" src="assets/img/icons8-start-menu-100.png"></span><span class="menu-title">Home</span></a></li>
                    <li><a href="#"><span class="menu-link-img"><img class="nav-img" src="assets/img/icons8-company-filled-100.png"></span><span class="menu-title">About</span></a></li>
                    <li><a href="#"><span class="menu-link-img"><img class="nav-img" src="assets/img/icons8-e-learning-100.png"></span><span class="menu-title">Resources</span></a></li>
                    <li><a href="#"><span class="menu-link-img"><img class="nav-img" src="assets/img/icons8-download-from-cloud-100.png"></span><span class="menu-title">Downloads</span></a></li>
                    <li><a href="#"><span class="menu-link-img"><img class="nav-img" src="assets/img/icons8-phone-100.png"></span><span class="menu-title">Contact</span></a></li>
                </ul>
            </div>
        </div>
    </body>
    <script>
        $.fn.radelmenu = function () {
            $this = $(this);
            var itemsCount = 0;
            var menuHeight = 0;
            var transitionDelay = 0.2;
            //When menu is closed
            $this.find('.menu-items ul li').each(function () {
                $this.find('.radel-menu-btn img').attr('src','assets/img/icons8-menu-500.png');
                $this.find('.radel-menu-close-control').css('width', '0');
                $this.find('.radel-menu-close-control').css('height', '0');
                itemsCount++;
                transitionDelay = transitionDelay - 0.02;
                $(this).css('transition-delay', transitionDelay + 's');
                menuHeight = menuHeight + 40;
            });
            menuHeight = menuHeight + 30;
            //When menu is opened
            transitionDelay = 0.05;
            $this.find('.menu-items').css('transition-delay', '0s');
            $this.find('.activated').css('transition-delay', '0.2s');
            //Activating the marker
            $this.find('.menu-items').toggleClass('activated');
            $this.find('.activated ul li').each(function () {
                $this.find('.radel-menu-btn img').attr('src','assets/img/icons8-delete-100.png');
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
    </script>
</html>
