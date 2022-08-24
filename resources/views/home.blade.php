<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    @include('partials.header');
    <main>
        <!-- MAIN CONTENT -->
        <section>
            <div class="content-container">

                @foreach($products as $card)
                <div class="card">
                    <img src="{{$card['thumb']}}" alt="">
                    <div class="card-name">{{$card['series']}}</div>
                </div>
                @endforeach
                <div class="button-cont">
                    <button>LOAD MORE</button>
                </div>
            </div>
        </section>
        <!-- MERCH SECTION -->
        <section class="merch-section">
            <div class="merchs-container flex-evenly">
                <div class="merch-card">
                    <div class="merch-img">
                        <img src="{{asset('/img/buy-comics-digital-comics.png')}}" alt="">
                    </div>
                    <a href="#"><h5>DIGITAL COMICS</h5></a> 
                </div>
                <div class="merch-card">
                    <div class="merch-img">
                        <img src="{{asset('/img/buy-comics-merchandise.png')}}" alt="">
                    </div>
                    <a href="#"><h5>DC MERCHANDISE</h5></a> 
                </div>
                <div class="merch-card">
                    <div class="merch-img">
                        <img src="{{asset('/img/buy-comics-subscriptions.png')}}" alt="">
                    </div>
                    <a href="#"><h5>SUBSCRIPTION</h5></a> 
                </div>
                <div class="merch-card">
                    <div class="merch-img resize">
                        <img src="{{asset('/img/buy-comics-shop-locator.png')}}" alt="">
                    </div>
                    <a href="#"><h5>COMIC SHOP LOCATOR</h5></a> 
                </div>
                <div class="merch-card">
                    <div class="merch-img">
                        <img src="{{asset('/img/buy-dc-power-visa.svg')}}" alt="">
                    </div>
                    <a href="#"><h5>DC POWER VISA</h5></a> 
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>