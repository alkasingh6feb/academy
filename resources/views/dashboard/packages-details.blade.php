@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('wa/style.css') }}">
@endsection


@section('content')
  <!-- card-tab section  -->
  <section class="card_package">
    <div class="container-fulid">
        <div class="cource_heading">Available Courses</div>
        <div class="">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn filter-button" data-filter="all">All</button>
                        <button class="btn filter-button" data-filter="class9">class 9</button>
                        <button class="btn filter-button" data-filter="class10">Class 10</button>
                        <button class="btn filter-button" data-filter="class11">11+</button>
                    </div>
                </div>
{{-- 
                <div class="row mt-4">
                    <div class="col-md-3 filter_box filter class9">
                        <div class="single-district card1">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png')}}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg1">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter_box filter class9">
                        <div class="single-district card2">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png')}}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg2">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter_box filter class10">
                        <div class="single-district card3">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png') }}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg3">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter_box filter class10">
                        <div class="single-district card4">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png') }}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg4">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter_box filter class11">
                        <div class="single-district card5">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png') }}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg5">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter_box filter class11">
                        <div class="single-district card8">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png') }}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg6">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 filter_box filter class11">
                        <div class="single-district card6">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png')}}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg7">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter_box filter class11">
                        <div class="single-district card7">
                            <div class="card_img mb-3">
                                <img src="{{ asset('wa/packages/assets/img/card-cover.png')}}">
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>Joahna Paul</p>
                                    <p>GCSC final Math Booster</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                    <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div>
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div><span class="online">online</span><span class="dot"></span></div>
                                    
                                </div>
                            </div>
                            <div class="view_detail_block pb-3">
                                <a href="#" class="view_detail">
                                    View details
                                </a>
                                <a href="viewdetail.html" class="price_card price_bg8">
                                    £ 150*
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                 <div class="row mt-4">
                    @php $i=1 @endphp
                    @foreach($batches as $batch)
                     <div style="cursor:pointer;" onClick="(function(){
                        window.location.href = '/student-details/{{ $batch->id }}';
                    })();return false;" class="col-md-3 filter_box filter {{ $batch->classmaster->name == 'Year 1' ? 'class9' : ($batch->classmaster->name == 'Year 2' ? 'class10' : 'class11') }}">
                            <div class="single-district card{{ $i }}">
                            <div class="card_img mb-3">
                                @if($batch->subject->name == 'English')
                                  <img style="width:100%;" src="{{ asset('frontend/assets/English/English.jpg') }}" alt="">
                                @endif
                                @if($batch->subject->name == 'Maths')
                                    <img  style="width:100%;" src="{{ asset('frontend/assets/Maths/Math.jpg') }}" alt="">
                                @endif
                                @if($batch->subject->name == 'Physics')
                                    <img  style="width:100%;" src="{{ asset('frontend/assets/Physics/Physics.jpg') }}" alt="">
                                @endif
                                @if($batch->subject->name == 'Chemistry')
                                    <img style="width:100%;" src="{{ asset('frontend/assets/card-cover.png') }}" alt="">
                                @endif
                                {{-- <img src="{{ asset('wa/assets/img/card-cover.png') }}"> --}}
                            </div>
                            <div class="card_block_info pl-3 pr-3">
                                <div class="card_info">
                                    <p>{{ $batch->classSettings->name }}</p>
                                    <p>{{ $batch->subject->name }}</p>
                                </div>
                                <div class="card_details">
                                    <div class="seat_block pr-3">
                                        <p>No Of Seats</p>
                                        <p>{{ $batch->no_of_seats }}</p>
                                    </div>
                                    {{-- <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div> --}}
                                </div>
                                <div class="class_section">
                                    <div class="class_type">class type</div>
                                    <div>
                                        <span class="online">
                                        {{ $batch->status == 1 ? 'Online' : 'Offline' }}
                                        </span>
                                        {{-- for color  --}}
                                        <span class="dot{{ $batch->status == 1 ? '' : '-prime' }}"></span></div>   
                                    </div>
                                </div>
                            <div class="view_detail_block pb-3">
                                <a href="{{ url('/student-details', $batch->id)}}" class="view_detail">
                                    View details
                                </a>
                                {{-- @php $i = 1 @endphp --}}
                                <a href="{{ url('/student-details', $batch->id)}}" class="price_card price_bg{{ $i }}">
                                    &pound; {{ $batch->batch_price_per_session }} 
                                </a>
                                {{-- @php i++ @endphp --}}
                            </div>
                        </div>
                        {{-- <a> --}}
                        
                    </div>
                    @php $i++ @endphp
                    @endforeach
                
                </div>               
            

            </div>
        </div>
    </div>
    </div>
</section>

@endsection


@section('js')
<script>
    document.FIX_HEADER_TOP = 35;
  </script>
  <script src="{{ asset('wa/packagescoustom.js') }}"></script>
@endsection
