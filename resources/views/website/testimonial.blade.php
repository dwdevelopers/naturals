<div class="section testimony" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div id="owl-testimony">
                    @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media">
                                <!-- Use dynamic image if available, else fallback to default -->
                                <img src="{{ asset('storage/' . $testimonial->image ?? 'website/images/b3.jpg') }}" alt="{{ $testimonial->name }}" class="img-circle">
                            </div>
                            <div class="body">
                                <!-- Use dynamic testimonial message -->
                                <p>{{ $testimonial->message }}</p>
                                <div class="title">{{ $testimonial->name }}</div>
                                <div class="subtitle">{{ $testimonial->designation }} </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{-- <div class="item">
                        <div class="testimonial-1">
                            <div class="media">
                                <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-circle">
                </div>
                <div class="body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor.</p>
                    <div class="title">Dedo</div>
                    <div class="subtitle">Designer @ Buka Kreasi & co.</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-1">
                <div class="media">
                    <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-circle">
                </div>
                <div class="body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor.</p>
                    <div class="title">Maggy</div>
                    <div class="subtitle">Designer @ Buka Kreasi & co.</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-1">
                <div class="media">
                    <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-circle">
                </div>
                <div class="body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor.</p>
                    <div class="company">Gaspol ltd</div>
                    <div class="title">Robert Lav</div>
                    <div class="subtitle">Designer @ Buka Kreasi & co.</div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
</div>
</div>
</div>
