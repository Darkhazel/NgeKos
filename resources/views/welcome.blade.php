<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ngekos | Solusi mudah cari kos murah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{asset('js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/functions.js')}}"></script>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
                <!--
            Color
            #3A7CDF
            #3adfcb 
    
        -->
        <style>
            @font-face {
                font-family: 'Arial Rounded MT';
                src: url('myfont.woff') format('woff'), /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
                url("{{asset('css/webfont.css')}}") format('truetype'); /* Chrome 4+, Firefox 3.5, Opera 10+, Safari 3—5 */
            } 
            html {
                background-size:100% 100%;
                background-attachment:fixed;
                background-repeat:no-repeat;
                background: linear-gradient(180deg, #3A7CDF 0%, #3adfcb 45.34%);
                background-blend-mode: multiply;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                
                margin: 0;
                
               
            }
            body{
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-family: 'Arial Rounded MT';
                font-style: normal;
                font-weight: 400;
                font-size: 90px;
                line-height: 104px;

                color: #FFFFFF;

                text-shadow: 10px 10px 4px rgba(0, 0, 0, 0.25);
            }
            .subtitle {
                font-family: 'Nunito';
                font-style: normal;
                color:white;
                font-size: 50px;
            }

            .links > a {
                
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Nunito';
                font-style: normal;
                line-height: 24px;
                color:white;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .auth{
                background: rgba(72, 173, 245, 0.74);
                box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 50px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="background-image:url({{asset('pic/perumahan.png')}});background-size:100% 100% ">
            @if (Route::has('login'))
                <div class="top-right links">
                        <a class ="item" href="{{url('support/privacy')}}">Kebijakan Privasi</a>
                        <a class ="item" href="{{url('support/help')}}">Pusat Bantuan</a>
                    @auth
                        <a class ="item auth" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class ="item auth" href="{{ route('login') }}">Login</a>

                        
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-sm">
                Solusi Mudah<br/>Cari Kost Murah
                </div>
                <div class="subtitle m-b-md">
                
                </div>
                @if (Route::has('login'))
                <div class="flex-center links" style="float:center">
                    @auth
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="background: rgba(4, 161, 250, 0.64);margin:0px auto;border-radius: 50px;">Daftarkan Dirimu Sekarang</a>
                        @endif
                    @endauth
                
                </div>
                @endif
            </div>
        </div>
        <div class="flex-center position-ref full-height" >
            <div class="content" style="text-align:center;">
                <div class="subtitle">
                   Rekomendasi Kos sekitar kampus
                </div>
                <div class="row "style ="background:rgba(0,0,0,0.1);filter:blur(25px)">&nbsp;</div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false">
                

            <div class="product product-style-2 equal-elem ">
               <div class="product-thumnail">
                  <a href="" title="nama">
                     <figure><img src="{{ asset('pic/perumahan.png') }}" width="120" height="120" alt="perumahan"></figure>
                  </a>
                  <div class="group-flash">
                     <span class="flash-item sale-label">sale</span>
                  </div>
                  <div class="wrap-btn">
                     <a href="" class="function-link">quick view</a>
                  </div>
               </div>
               <div class="product-info">
                  <a href="" class="product-name"><span>Kos Jebol | ⭐⭐⭐⭐⭐</span></a>
                  <div class="wrap-price"><ins><p class="product-price">1.000.000/bulan</p></ins> <del><p class="product-price">1.200.000/bulan</p></del></div>
               </div>
            </div>

            <div class="product product-style-2 equal-elem ">
               <div class="product-thumnail">
                  <a href="" title="nama">
                     <figure><img src="{{ asset('pic/perumahan.png') }}" width="120" height="120" alt="perumahan"></figure>
                  </a>
                  <div class="group-flash">
                     <span class="flash-item sale-label">sale</span>
                  </div>
                  <div class="wrap-btn">
                     <a href="" class="function-link">quick view</a>
                  </div>
               </div>
               <div class="product-info">
                  <a href="" class="product-name"><span>Kos Jebol | ⭐⭐⭐⭐⭐</span></a>
                  <div class="wrap-price"><ins><p class="product-price">1.000.000/bulan</p></ins> <del><p class="product-price">1.200.000/bulan</p></del></div>
               </div>
            </div>

            <div class="product product-style-2 equal-elem ">
               <div class="product-thumnail">
                  <a href="" title="nama">
                     <figure><img src="{{ asset('pic/perumahan.png') }}" width="120" height="120" alt="perumahan"></figure>
                  </a>
                  <div class="group-flash">
                     <span class="flash-item sale-label">sale</span>
                  </div>
                  <div class="wrap-btn">
                     <a href="" class="function-link">quick view</a>
                  </div>
               </div>
               <div class="product-info">
                  <a href="" class="product-name"><span>Kos Jebol | ⭐⭐⭐⭐⭐</span></a>
                  <div class="wrap-price"><ins><p class="product-price">1.000.000/bulan</p></ins> <del><p class="product-price">1.200.000/bulan</p></del></div>
               </div>
            </div>

            <div class="product product-style-2 equal-elem ">
               <div class="product-thumnail">
                  <a href="" title="nama">
                     <figure><img src="{{ asset('pic/perumahan.png') }}" width="120" height="120" alt="perumahan"></figure>
                  </a>
                  <div class="group-flash">
                     <span class="flash-item sale-label">sale</span>
                  </div>
                  <div class="wrap-btn">
                     <a href="" class="function-link">quick view</a>
                  </div>
               </div>
               <div class="product-info">
                  <a href="" class="product-name"><span>Kos Jebol | ⭐⭐⭐⭐⭐</span></a>
                  <div class="wrap-price"><ins><p class="product-price">1.000.000/bulan</p></ins> <del><p class="product-price">1.200.000/bulan</p></del></div>
               </div>
            </div>

            <div class="product product-style-2 equal-elem ">
               <div class="product-thumnail">
                  <a href="" title="nama">
                     <figure><img src="{{ asset('pic/perumahan.png') }}" width="120" height="120" alt="perumahan"></figure>
                  </a>
                  <div class="group-flash">
                     <span class="flash-item sale-label">sale</span>
                  </div>
                  <div class="wrap-btn">
                     <a href="" class="function-link">quick view</a>
                  </div>
               </div>
               <div class="product-info">
                  <a href="" class="product-name"><span>Kos Jebol | ⭐⭐⭐⭐⭐</span></a>
                  <div class="wrap-price"><ins><p class="product-price">1.000.000/bulan</p></ins> <del><p class="product-price">1.200.000/bulan</p></del></div>
               </div>
            </div>

         </div>

      </div>
      
            </div>
            <div class="footer" style="background-color:#181818;">
                &nbsp;


    </div>  
      
    </body>
</html>
