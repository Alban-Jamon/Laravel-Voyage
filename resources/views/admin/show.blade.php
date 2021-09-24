@extends('Layouts/base')

@section('content')

<section class="event_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="event_slider owl-carousel" >
                    <div class="single_event_slider">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-md-6">
                                <div class="event_slider_content">
                                    <h5>Upcoming Event</h5>
                                    <h2>{{$voyage->location}}</h2>
                                    <p>{{$voyage->description}}</p>
                                    <p>date: <span>{{$voyage->travelDate}}</span> </p>
                                    <p>Cost: <span>Start from {{$voyage->price}}€</span> </p>
                                    <p>Organizer: <span> {{$voyage->organizer}}</span> </p>
                                    <div class="place_review">
                                        @for ($i = 0; $i < $voyage->note; $i++)
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        @endfor
                                        <span>{{$voyage->views}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- tour details content css start-->
    <section class="tour_details_content section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content_iner">
                        <p>{{$voyage->description}}</p>
                        <div class="tour_details_content_btn">
                            <a href="#" class="btn_1">Book Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour details content css end-->
    
    
@endsection