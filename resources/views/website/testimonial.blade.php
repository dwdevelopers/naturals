@if($testimonials->count())
<div class="section testimony" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div id="owl-testimony" class="owl-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="testimonial-1">
                                <div class="media">
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="img-circle">
                                </div>
                                <div class="body">
                                    <p>{{ $testimonial->message }}</p>
                                    <div class="title">{{ $testimonial->name }}</div>
                                    <div class="subtitle">{{ $testimonial->designation }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
