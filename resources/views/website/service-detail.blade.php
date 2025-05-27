@extends('website.layouts.app')

@section('title', 'Service Detail')

@section('content')
<div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
    <div class="overlay"></div>
    <h3>Our Projects</h3>
</div>
<section class="service-details ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-sec">
                    <h2>{{$project_activity->project->name ?? ''}}</h2>
                    <p class="description">
                        {!!$project_activity->description!!}
                    </p>
                    {{-- <div class="subsec">
                        <h3 class="subtitle">Activities Envisaged</h3>
                        <ul>
                            <li><strong>Farm Tours:</strong>Guided visits to farms, offering firsthand experience of agricultural landscapes and rural life.</li>
                            <li><strong>Agricultural Demonstrations:</strong>Showcasing farming techniques like floriculture, harvesting, beekeeping, and dairying to educate and engage visitors</li>
                            <li><strong>Village Life Experiences:</strong>Encouraging participation in traditional village activities to provide cultural immersion.</li>
                            <li><strong>Recreational Activities:</strong>Organizing rural games, festivals, and nature-based entertainment suitable for all age groups.</li>
                            <li><strong>Eco-Friendly Tourism:</strong>Promoting sustainable tourism by encouraging interest in nature and conservation practices.</li>
                            <li><strong>Agro-Tourism Training:</strong>Providing farmers with the necessary skills and knowledge to engage in agro-tourism.</li>
                            <li><strong>Marketing Support:</strong>Assisting farmers with branding, promotion, and sales strategies to enhance agro-tourism opportunities.</li>
                            <li><strong>Exhibitions & Trade Shows:</strong>Arranging visits for farmers to industry events to explore new trends and opportunities.</li>
                            <li><strong>Diverse Tourism Promotion:</strong>Supporting various tourism sectors, including eco-tourism, adventure, pilgrimage, heritage, education, and medical tourism.</li>
                            <li><strong>All-India Tour Packages:</strong>Organizing customized travel packages, including the Bharat Darshan Program, to explore India’s cultural, spiritual, and historical landmarks.</li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
