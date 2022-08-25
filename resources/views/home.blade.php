@extends('layouts.app')

@section('main')
        <section class="jumbo">
            <div class="series-cont">
                <h4>CURRENT SERIES</h4>
            </div>  
        </section>

    <main>
    <!-- MAIN CONTENT -->
    <section>
        <div class="content-container">

            @foreach($comics as $card)
            <a href="{{ route('comic', ['id' => $card['id']]) }}" class="card">
                <img src="{{$card['thumb']}}" alt="">
                <div class="card-name">{{$card['series']}}</div>
            </a>
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
@endsection