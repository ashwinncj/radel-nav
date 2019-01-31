<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RADEL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/nav/css/reset.css">  
        <link rel="stylesheet" href="assets/nav/css/style.css">
        <script src="assets/nav/js/modernizr.js"></script>
        <script src="assets/nav/js/main.js"></script>
        <style>
            .radelmenu{
                width: 48px;
                position: fixed;
                top: 20px;
                left: 20px;
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
            }
            .menu-items li{
                transition: all 0.2s;
                left: -100px;
                height: 40px;
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
                cursor: pointer;   
                font-size: 20px;
                background-color: aquamarine;
                text-align: center;
                width: 48px;
                height: 48px;
                padding: 12px;
                border-radius: 50%;
                z-index: 5;
            }
            .menu-link-img{
                position: absolute;
                left: -24px;
                top: 10px;
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
            <span class="radel-menu-btn glyphicon glyphicon-menu-hamburger"></span>
            <div class="radel-menu-close-control"></div>
            <div class="menu-items">
                <ul>
                    <li><a href="#"><span class="menu-link-img glyphicon glyphicon-home"></span><span class="menu-title">Home</span></a></li>
                    <li><a href="#"><span class="menu-link-img glyphicon glyphicon-leaf"></span><span class="menu-title">About</span></a></li>
                    <li><a href="#"><span class="menu-link-img glyphicon glyphicon-paperclip"></span><span class="menu-title">Resources</span></a></li>
                    <li><a href="#"><span class="menu-link-img glyphicon glyphicon-save"></span><span class="menu-title">Downloads</span></a></li>
                    <li><a href="#"><span class="menu-link-img glyphicon glyphicon-earphone"></span><span class="menu-title">Contact</span></a></li>
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
                $this.find('.radel-menu-close-control').css('width', '100vw');
                $this.find('.radel-menu-close-control').css('height', '100vh');
                transitionDelay = transitionDelay + 0.02;
                $(this).css('transition-delay', transitionDelay + 's');
            });

            $this.find('.menu-items').css('height', '0px');
            $this.find('.menu-items li').css('left', '-100px');
            $this.find('.activated li').css('left', '40px');
            $this.find('.activated').css('height', menuHeight + 'px');
        };
        $('#main-nav .radel-menu-btn').click(function () {
            $('#main-nav').radelmenu();
        });
        $('#main-nav .radel-menu-close-control').click(function () {
            $('#main-nav').radelmenu();
        });
    </script>
</html>
