@extends('Layouts/base')

@section('content')

<section class="top_place section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>Top Places to visit</h2>
                    <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                </div>
            </div>
        </div>
        <div class="row">

        @foreach ($voyages as $oneTrip)
            <div class="col-lg-6 col-md-6">
                <div class="single_place">
                    <img src="{{asset('img/single_place_1.png')}}" alt="">
                    <div class="hover_Text d-flex align-items-end justify-content-between">
                        <div class="hover_text_iner">
                            <a href="#" class="place_btn">travel</a>
                            <h3>{{$oneTrip->organizer}}</h3>
                            <p>{{$oneTrip->location}}</p>
                            <div class="place_review">
                                @for ($i = 0; $i < $oneTrip->note; $i++)
                                <a href="#"><i class="fas fa-star"></i></a>
                                @endfor
                                <span>{{$oneTrip->views}}</span>
                            </div>
                        </div>
                        <div class="details_icon text-right">
                            <i class="ti-share"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
    
@endsection