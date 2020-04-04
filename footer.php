<hr>
<footer class="footer">

<div class="fot">
<div class="container">
    <div class="row">
            <div class="ql">
               <a href="index.php" style="color: white"> Home </a> &nbsp; &nbsp; &nbsp; &nbsp;
               <a href="index.php" style="color: white"> Browse </a> &nbsp; &nbsp; &nbsp; &nbsp;
               <a href="index.php" style="color: white"> Signup </a>&nbsp; &nbsp; &nbsp; &nbsp;
               <a href="index.php" style="color: white"> Login </a>&nbsp; &nbsp; &nbsp; &nbsp;
            </div>

            </div>
            </div>
            </div>  
        </div>
</footer>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/slider-bg.js"></script>

    <script>
        window.onload=function(){
        $('.slider').slick({
        autoplay:true,
        autoplaySpeed:1500,
        centerMode:true,
        slidesToShow:5,
        slidesToScroll:1,
        prevArrow: false,
        nextArrow: false,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
            }
        },
        {
            breakpoint: 760,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            }
        },
        
        ]
        });
        };
    </script>

  
</html>