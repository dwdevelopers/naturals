@extends('website.layouts.app')

@section('title', 'Careers')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/tourism-banner.jpg') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500"></h3>
    </div>
</div>

<section class="career-page">
    <div class="top-sec">
    <div class="container">
        <div class="career-grid">
            <div class="single-grid">
                <div class="icon-wrapper">
                    <img src="{{ asset('website/images/profile.svg')}}" alt="icon">
                </div>
                <h3>Branch Manager</h3>
                <p>Experience – 2 Yrs / Fresher</p>
                <p>Job Location – Thrissur</p>
                <p>Qualification – MBA / Any Degree</p>
                <a href="#careerForm" class="btn btn-apply">Apply Now</a>
            </div>
            <div class="single-grid">
                <div class="icon-wrapper">
                    <img src="{{ asset('website/images/profile.svg')}}" alt="icon">
                </div>
                <h3>Branch Manager</h3>
                <p>Experience – 2 Yrs / Fresher</p>
                <p>Job Location – Thrissur</p>
                <p>Qualification – MBA / Any Degree</p>
                <a href="#careerForm" class="btn btn-apply">Apply Now</a>
            </div>
            <div class="single-grid">
                <div class="icon-wrapper">
                    <img src="{{ asset('website/images/profile.svg')}}" alt="icon">
                </div>
                <h3>Branch Manager</h3>
                <p>Experience – 2 Yrs / Fresher</p>
                <p>Job Location – Thrissur</p>
                <p>Qualification – MBA / Any Degree</p>
                <a href="#careerForm" class="btn btn-apply">Apply Now</a>
            </div>
            <div class="single-grid">
                <div class="icon-wrapper">
                    <img src="{{ asset('website/images/profile.svg')}}" alt="icon">
                </div>
                <h3>Branch Manager</h3>
                <p>Experience – 2 Yrs / Fresher</p>
                <p>Job Location – Thrissur</p>
                <p>Qualification – MBA / Any Degree</p>
                <a href="#careerForm" class="btn btn-apply">Apply Now</a>
            </div>

        </div>

        </div>
    </div>

    <div class="career_form">
        <div class="container">
            <div class="w-60">
            <h2>Apply Now</h2>
            <div class="content" id="careerForm">
                <form action="{{ route('website.contact.submit') }}" method="POST" class="contact-form">

                    @csrf
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Full Name* </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="" required>

                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder=" " required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="name">Phone*</label>
                            <input type="tel" class="form-control" name="phone" placeholder="" value="{{ old('phone') }}" />
                            @error('phone')
                            <div class="text-danger">{{ $phone }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Post Applying for*</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="name">Experiences*</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="name">Upload File*</label>
                            <input type="file" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>


                        <div class="form-group">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <div class="margin-bottom-50"></div>
            </div>
            </div>
</div>
        </div>
</section>

<script>
    document.querySelectorAll('a[href^="#careerForm"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 200; // adjust this based on your header height
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>


@endsection