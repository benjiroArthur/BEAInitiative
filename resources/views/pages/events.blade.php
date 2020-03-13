@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h3 class="text-center">ONGOING EVENTS</h3><hr>

        @if(count($onGoingEvents) > 0)
            <ul class="list-unstyled col-sm-12 col-md-12 col-lg-12">
            @foreach($onGoingEvents as $onGoingEvent)
                @php
                //handling images
                $image = explode(',',$onGoingEvent->image);
                $imageCount = count($image);

                $startDate = $onGoingEvent->start_date;
                $startDate = strtotime($startDate);
                $startDay = date('d',$startDate);
                $StartMonth = date('M',$startDate);
                $StartYear = date('Y',$startDate);
                $startTime = date('g:ia',$startDate);

                $endDate = $onGoingEvent->end_date;
                $endDate = strtotime($endDate);
                $endDay = date('d',$endDate);
                $endMonth = date('M',$endDate);
                $endYear = date('Y',$endDate);
                $endTime = date('g:ia',$endDate);
                //dd($startDate);
                @endphp
           <li class="d-inline-block" style="width: 300px">

                   <div class="col-sm-12 col-lg-12 event-block">

                       <div class="date">{{$startDay}} <span style="font-size: small">{{$StartMonth}} </span><span style="font-size: small">{{$StartYear}}&nbsp;&nbsp; to &nbsp;&nbsp; </span> {{$endDay}} <span style="font-size: small">{{$endMonth}} </span><span style="font-size: small">{{$StartYear}}</span></div>
                       <div class="organizer">Organized By: <a href="javascript:void(0)">{{$onGoingEvent->organiser}}</a></div>

                       <div class="col-sm-12 col-md-12 col-lg-12">

                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                               <ol class="carousel-indicators">
                                   @for($imageIndex = 0; $imageIndex < $imageCount; $imageIndex++ )
                                       @if($imageIndex == 0)
                                           <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="0" class="active"></li>
                                       @else
                                           <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="{{$imageIndex}}"></li>
                                       @endif
                                   @endfor
                               </ol>
                               <div class="carousel-inner" style="border: 2px solid blue; border-radius: 10px;">
                                   @for($i = 0; $i < $imageCount; $i++)
                                       @if($i == 0)
                                           <div class="carousel-item active">
                                               <img class="d-block w-100" src="{{asset('images/events/'.$image[0])}}" alt="First slide">
                                           </div>
                                       @else
                                           <div class="carousel-item">
                                               <img class="d-block w-100" src="{{asset('images/events/'.$image[$i])}}" alt="Second slide">
                                           </div>
                                       @endif
                                   @endfor

                               </div>
                               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Previous</span>
                               </a>
                               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>
                               </a>
                           </div>
                       </div>

                       <div class="col-sm-12 col-lg-12"><h4>{{$onGoingEvent->description}}</h4></div>
                       <ul class="post-meta d-inline-block">
                           <li><span class="fa fa-clock"></span>{{$startTime}} to {{$endTime}}</li>
                           <li><span class="fa fa-map-marker-alt"></span>{{$onGoingEvent->location}}</li>
                       </ul>
                   </div>

           </li>
            @endforeach
            </ul>
            <br>
            {{--<div style="display:-webkit-flex;align-items:center;">{{$onGoingEvent->appends($_GET)->links()}}</div>--}}
        @else
            <h3 class="text-center">NO ONGOING EVENTS AVAILABLE</h3><hr>
        @endif
    </div>

</div>
    <hr>



<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h3 class="text-center">UPCOMING EVENTS</h3><hr>

        @if(count($upComingEvents) > 0)
            <ul class="list-unstyled col-sm-12 col-md-12 col-lg-12">
                @foreach($upComingEvents as $upComingEvent)
                    @php
                        //handling images
                        $image = explode(',',$upComingEvent->image);
                        $imageCount = count($image);

                        $startDate = $upComingEvent->start_date;
                        $startDate = strtotime($startDate);
                        $startDay = date('d',$startDate);
                        $StartMonth = date('M',$startDate);
                        $StartYear = date('Y',$startDate);
                        $startTime = date('g:ia',$startDate);

                        $endDate = $upComingEvent->end_date;
                        $endDate = strtotime($endDate);
                        $endDay = date('d',$endDate);
                        $endMonth = date('M',$endDate);
                        $endYear = date('Y',$endDate);
                        $endTime = date('g:ia',$endDate);
                        //dd($startDate);
                    @endphp
                    <li class="d-inline-block" style="width: 300px">

                        <div class="col-sm-12 col-lg-12 event-block">

                            <div class="date">{{$startDay}} <span style="font-size: small">{{$StartMonth}} </span><span style="font-size: small">{{$StartYear}}&nbsp;&nbsp; to &nbsp;&nbsp; </span> {{$endDay}} <span style="font-size: small">{{$endMonth}} </span><span style="font-size: small">{{$StartYear}}</span></div>
                            <div class="organizer">Organized By: <a href="javascript:void(0)">{{$upComingEvent->organiser}}</a></div>

                            <div class="col-sm-12 col-md-12 col-lg-12">

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @for($imageIndex = 0; $imageIndex < $imageCount; $imageIndex++ )
                                            @if($imageIndex == 0)
                                                <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="0" class="active"></li>
                                            @else
                                                <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="{{$imageIndex}}"></li>
                                            @endif
                                        @endfor
                                    </ol>
                                    <div class="carousel-inner" style="border: 2px solid blue; border-radius: 10px;">
                                        @for($i = 0; $i < $imageCount; $i++)
                                            @if($i == 0)
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('images/events/'.$image[0])}}" alt="First slide">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('images/events/'.$image[$i])}}" alt="Second slide">
                                                </div>
                                            @endif
                                        @endfor

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-12"><h4>{{$upComingEvent->description}}</h4></div>
                            <ul class="post-meta d-inline-block">
                                <li><span class="fa fa-clock"></span>{{$startTime}} to {{$endTime}}</li>
                                <li><span class="fa fa-map-marker-alt"></span>{{$upComingEvent->location}}</li>
                            </ul>
                        </div>

                    </li>
                @endforeach
            </ul>
            <br>
            {{--<div style="display:-webkit-flex;align-items:center;">{{$upComingEvents->appends($_GET)->links()}}</div>--}}
        @else
            <h3 class="text-center">NO UPCOMING EVENTS AVAILABLE</h3><hr>
        @endif
    </div>

</div>

    <hr>


<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h3 class="text-center">PAST EVENTS</h3><hr>

        @if(count($pastEvents) > 0)
            <ul class="list-unstyled col-sm-12 col-md-12 col-lg-12">
                @foreach($pastEvents as $pastEvent)
                    @php
                        //handling images
                        $image = explode(',',$pastEvent->image);
                        $imageCount = count($image);

                        $startDate = $pastEvent->start_date;
                        $startDate = strtotime($startDate);
                        $startDay = date('d',$startDate);
                        $StartMonth = date('M',$startDate);
                        $StartYear = date('Y',$startDate);
                        $startTime = date('g:ia',$startDate);

                        $endDate = $pastEvent->end_date;
                        $endDate = strtotime($endDate);
                        $endDay = date('d',$endDate);
                        $endMonth = date('M',$endDate);
                        $endYear = date('Y',$endDate);
                        $endTime = date('g:ia',$endDate);
                        //dd($startDate);
                    @endphp
                    <li class="d-inline-block" style="width: 300px">

                        <div class="col-sm-12 col-lg-12 event-block">

                            <div class="date">{{$startDay}} <span style="font-size: small">{{$StartMonth}} </span><span style="font-size: small">{{$StartYear}}&nbsp;&nbsp; to &nbsp;&nbsp; </span> {{$endDay}} <span style="font-size: small">{{$endMonth}} </span><span style="font-size: small">{{$StartYear}}</span></div>
                            <div class="organizer">Organized By: <a href="javascript:void(0)">{{$pastEvent->organiser}}</a></div>

                            <div class="col-sm-12 col-md-12 col-lg-12">

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @for($imageIndex = 0; $imageIndex < $imageCount; $imageIndex++ )
                                            @if($imageIndex == 0)
                                                <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="0" class="active"></li>
                                            @else
                                                <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="{{$imageIndex}}"></li>
                                            @endif
                                        @endfor
                                    </ol>
                                    <div class="carousel-inner" style="border: 2px solid blue; border-radius: 10px;">
                                        @for($i = 0; $i < $imageCount; $i++)
                                            @if($i == 0)
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('images/events/'.$image[0])}}" alt="First slide">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('images/events/'.$image[$i])}}" alt="Second slide">
                                                </div>
                                            @endif
                                        @endfor

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-12"><h4>{{$pastEvent->description}}</h4></div>
                            <ul class="post-meta d-inline-block">
                                <li><span class="fa fa-clock"></span>{{$startTime}} to {{$endTime}}</li>
                                <li><span class="fa fa-map-marker-alt"></span>{{$pastEvent->location}}</li>
                            </ul>
                        </div>

                    </li>
                @endforeach
            </ul>
            <br>
            {{--<div style="display:-webkit-flex;align-items:center;">{{$pastEvent->appends($_GET)->links()}}</div>--}}
        @else
            <h3 class="text-center">NO PAST EVENTS AVAILABLE</h3><hr>
        @endif
    </div>

</div>
@endsection