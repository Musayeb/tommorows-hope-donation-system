



    <footer class="pb-3 pt-4" >
        <div class="container" style="padding-top: 10px">
            <div class="row">
                <div class="col-lg-4 col-md-4 mb-3">
                    <h4 class="mb-2 footer-heading">TOMORROWS'HOPE</h4>
                    <hr style="color:white;background-color:rgba(255,255,255,0.2);">
                    <a href="https://tomorrowshope.tv/en/">
                        <img src="{{url('public/assets/images/logo.png')}}" alt="" style="height:100px">
                    </a>
                    <ul class="mt-5 media media-1 ml-0 pl-0" style="padding:0 !important">
                        <li class="background: #55acee"><a href="https://www.facebook.com/tomorrowshopetv" class="fa fa-facebook"></a></li>
                        <li><a href="https://twitter.com/tomorrowshopetv" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.youtube.com/channel/UC7OF-yH23iO77pLqJRljedw" class="fa fa-youtube"></a></li>
                        <li><a href="https://www.instagram.com/tomorrowshope.tv/" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4 class="mb-2 footer-heading">CONTACT ADDRESS</h4>
                    <hr style="color:white;background-color:rgba(255,255,255,0.2);">
                    <ul class="mt-1  ml-0 pl-0 custome">
                        <li>Tomorrow’s Hope</li>
                        <li>6 Station Parade</li>
                        <li>South Harrow</li>
                        <li>Harrow</li>
                        <li>HA2 8HB</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4 class="mb-1 footer-heading">NEWSLETTER</h4>
                    <hr style="color:white;background-color:rgba(255,255,255,0.2);">
                    <input type="text" name="" id="" class=" mt-3 p-3 footer-input"  placeholder="Enter Email"><br>
                    <button class=" mt-4 footer-submit" type="submit" >Subscription</button>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="mt-4 mb-5 media media-2 ml-0 pl-0" style="padding:0 !important;">
                        <li class="background: #55acee"><a href="https://www.facebook.com/tomorrowshopetv" class="fa fa-facebook"></a></li>
                        <li><a href="https://twitter.com/tomorrowshopetv" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.youtube.com/channel/UC7OF-yH23iO77pLqJRljedw" class="fa fa-youtube"></a></li>
                        <li><a href="https://www.instagram.com/tomorrowshope.tv/" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class=" text-white footer-end " >
        <div class="container">
            <div class="bottom-footer">
                <p class="m-0 p-0 pb-2 text-white">© 2021 Copyright . All Rights reserved.</p>
                <a href="http://sarey.co/;" target="_blank">Powered By Sarey Solutions</a>
            </div>
        </div>
    </div>
  


  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        setInterval(() => {
            $(".myAlert").fadeOut('slow');
        }, 5000);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map"></script>

    
    <script>
    
        $(".toggole-btn").click(function(){
            $(".toggole--ul").toggleClass("add");
        });

        $('.top-btn').click(function(){
            $(".navbar-top-mobile").toggleClass("add");
        });
    </script>

    @yield('jquery')

    
</body>
</html>