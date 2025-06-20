@extends('website.layouts.app')

@section('title', 'Service')

@section('content')
<!--===================================== SERVICE START =====================================-->
<div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
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
        <div class="cards-grid" style="    padding-top: 120px;">
            <!-- CARD 1 -->
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

            {{--
            <!-- CARD 2 -->
            <div class="card" style="background-image: url('/website/images/img-02.jpg');">
                <div class="card-content">
                    <h3>Gold Loan, Merchant loan and Group Loan</h3>
                    <p>We offer secure and hassle-free loan services, exclusively for our registered members.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 3 -->
            <div class="card" style="background-image: url('/website/images/img-03.jpg');">
                <div class="card-content">
                    <h3>Agro Tourism Project – Bridging Tradition with Sustainable Growth</h3>
                    <p>The Agro Tourism Project integrates traditional farming with sustainable tourism, empowering
                        farmers and boosting rural economies.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 4 -->
            <div class="card" style="background-image: url('/website/images/img-04.jpg');">
                <div class="card-content">
                    <h3>Karshaka Mithra – Empowering Farmers, Enriching Communities</h3>
                    <p>Karshaka Mithra ensures a seamless farm-to-market supply chain, directly collecting organic
                        produce from farmers and delivering it to consumers at fair prices.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 5 -->
            <div class="card" style="background-image: url('/website/images/img-05.jpg');">
                <div class="card-content">
                    <h3>Sakthiroopa Yojana - for Sustainable Growth</h3>
                    <p>The society empowers women through financial support, skill development, and direct market
                        access, enabling them to build successful ventures in food production, agriculture, and
                        eco-friendly products.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 6 -->
            <div class="card" style="background-image: url('/website/images/img-06.jpg');">
                <div class="card-content">
                    <h3>FMCG Range - Pure, Natural, and Sustainable</h3>
                    <p>Our range, which includes a wide variety of fast-moving consumer goods, reflects our
                        commitment to sustainability, community empowerment, and the promotion of natural
                        and organic products.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div> --}}
        </div>
    </div>
</section>



<!--===================================== SERVICE END =====================================-->
@endsection
