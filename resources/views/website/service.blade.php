@extends('website.layouts.app')

@section('title', 'Service')

@section('content')
<!--===================================== SERVICE START =====================================-->
<div class="banner-sec" style="background-image: url('{{ asset('website/images/marketing-banner.png') }}');">
    <div class="overlay"></div>
    <h3>Our Projects</h3>
</div>
<section class="agri-dhan-vikas service" style="margin-top: -50px;">
    <div class="container">
        <!-- <h2 class="section-title">Agri Dhan Vikas</h2> -->
        <p class="pro_description">We promote sustainable agriculture, financial empowerment, and rural development by supporting
            farmers, advancing eco-friendly practices, and providing financial assistance. Our initiatives equip
            communities with the resources and opportunities needed for long-term growth, fostering a
            self-reliant and prosperous agricultural ecosystem. </p>
        <!-- <div class="cards-grid" style="    padding-top: 120px;">
        
            @foreach ($projects as $project)
            <div class="card" style="background-image: url('{{ asset('storage/' . $project->image) }}');">
                  <div class="projectImg"></div>
                <div class="card-content">
                    <h3>{{ $project->name }}</h3>
                    <p>{{ $project->description }}</p>
            <a href="{{ route('website.service.detail', $project->slug) }}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>

                </div>
            </div>
            @endforeach

        
        </div> -->
        <div class="cards-grid" style="    padding-top: 120px;">
            <!-- @foreach ($projects as $project)
            <div class="card" style="background-image: url('{{ asset('storage/' . $project->image) }}');">
                <div class="projectImg"></div>
                <div class="card-content">
                    <h3>{{ $project->name }}</h3>
                    <p>{{ $project->description }}</p>
                    <a href="{{ route('website.service.detail', $project->slug) }}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>

                </div>
            </div>
            @endforeach -->
            <!-- CARD 1 -->
            <div class="card" style="background-image: url('/website/images/icons-01.jpg');">
                <a href="{{route('website.fmcgrange')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>FMCG Range</h3>
                        <p>Natural and organic farm-fresh
                            FMCG products including rice
                            powder, spices, masalas, pulses,
                            chips, and jams</p>
                        <a href="{{route('website.fmcgrange')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>
            <!-- CARD 2 -->
            <div class="card" style="background-image: url('/website/images/icons-02.jpg');">
                <a href="{{route('website.kejon')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>Organic Manure -
                            Kejon</h3>
                        <p>KEJON organic manure enhances soil health sustainably,
                            promoting eco-friendly farming
                            practices.</p>
                        <a href="{{route('website.kejon')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>
            <!-- CARD 3 -->
            <div class="card" style="background-image: url('/website/images/icons-03.jpg');">
                <a href="{{route('website.karshakamithra')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>Karshaka Mithra
                        </h3>
                        <p>Karshaka Mithra for farmer
                            support through collection centres, group farming, training,
                            and fair pricing.</p>
                        <a href="{{route('website.karshakamithra')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>

            <!-- CARD 4 -->
            <div class="card" style="background-image: url('/website/images/icons-04.jpg');">
                <a href="{{route('website.sakthiyojana')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>Sakthiroopa Yojana
                        </h3>
                        <p>Sakthiroopa Yojana empowers
                            women by facilitating mini and
                            micro business units, alongside
                            training, branding, marketing,
                            and loan support.</p>
                        <a href="{{route('website.sakthiyojana')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>
            <!-- CARD 5 -->
            <div class="card" style="background-image: url('/website/images/icons-05.jpg');">
                <a href="{{route('website.ecotourism')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>Tourism</h3>
                        <p>Eco Tourism with organic farm
                            stays, cultural and nature-based
                            experiences, rural adventures,
                            trekking, and educational tours.</p>
                        <a href="{{route('website.ecotourism')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>
            <!-- CARD 6 -->
            <div class="card" style="background-image: url('/website/images/icons-06.jpg');">
                <a href="{{route('website.agrivikas')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>Agri Dhan Vikas
                        </h3>
                        <p>Agri Dhan Vikas provides tailored financial services including
                            quick gold loans, merchant
                            loans and group loans.</p>
                        <a href="{{route('website.agrivikas')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>
            <!-- CARD 7 -->
            <div class="card" style="background-image: url('/website/images/icons-07.jpg');">
                <a href="{{route('website.natural')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>Natural Marginal
                            Supermarket</h3>
                        <p>The Agro Tourism Project integrates traditional farming with sustainable tourism, empowering
                            farmers and boosting rural economies.</p>
                        <a href="{{route('website.natural')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>
            <!-- CARD 8 -->
            <div class="card" style="background-image: url('/website/images/icons-08.jpg');">
                <a href="{{route('website.marketing')}}">
                    <div class="projectImg"></div>
                    <div class="card-content">
                        <h3>Marketing &
                            Agri Training Support
                        </h3>
                        <p>Marketing & Agri Training Support delivers modern farming
                            techniques, subsidized equipment, sales assistance, insurance, and expert mentorship.</p>
                        <a href="{{route('website.marketing')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </a>
            </div>
            <div class="card" style="background-image: url('/website/images/icons-09.png');">
                <a href="{{route('website.rdfd')}}">
                <div class="projectImg"></div>
                <div class="card-content">
                    <h3>Recurring Contribution &
                        Fixed Contribution (RC & FC)
                    </h3>
                    <p>Recurring Contribution & Fixed Contribution (RC
                        & FC) schemes to provide secure and growth
                        oriented financial solutions for our members</p>
                    <a href="{{route('website.rdfd')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>



<!--===================================== SERVICE END =====================================-->
@endsection