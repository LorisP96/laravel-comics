@extends('layouts.app')

@section('main')

        <section class="jumbo">
            <div class="series-cont"></div>
        </section>

    <main>
        <div class="bar" ></div>
        <section class="info-comic-container">
            <div class="desc-comic">
                <div class="gallery">
                    <img src="{{$current_comic['thumb']}}" alt="{{$current_comic['title'] . 'poster'}}">
                    <div>VIEW GALLERY</div>
                </div>
                <h1>{{$current_comic['title']}}</h1>
                <div class="price">
                    <div>
                        <div>U.S Price: <span>{{$current_comic['price']}}</span></div> 
                        <div>AVAILABLE</div>
                    </div>
                    <span>Check Availability</span>
                </div>
                <p>{{$current_comic['description']}}</p>
            </div>
            <div class="adv">
                <h4>ADVERTISEMENT</h4>
                <img src="{{asset('/img/adv.jpg')}}" alt="">
            </div>
        </section>
        <section class="spec-comic">
            <div class="flex-between">
                <div class="talent">
                    <h3>TALENT</h3>
                    <div class="flex-between">
                        <div class="by">
                            Art by:
                        </div>
                        <div class="comic-by">
                            @foreach($current_comic['artists'] as $artist)
                                {{$artist}},
                            @endforeach
                        </div>
                    </div>
                    <div class="flex-between">
                        <div class="by">
                            Written by:
                        </div>
                        <div class="comic-by">
                            @foreach($current_comic['writers'] as $writers)
                                <a href="#">{{$writers}},</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs">
                    <h3>SPECS</h3>
                    <div class="flex-between">
                        <div class="by">
                            Series:
                        </div>
                        <div class="comic-by">
                            {{$current_comic['series']}}
                        </div>
                    </div>
                    <div class="flex-between">
                        <div class="by">
                            US Price:
                        </div>
                        <div class="comic-by">
                            {{$current_comic['price']}}
                        </div>
                    </div>
                    <div class="flex-between">
                        <div class="by">
                            On Sale Date:
                        </div>
                        <div class="comic-by">
                            {{$current_comic['sale_date']}}
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </main>
@endsection