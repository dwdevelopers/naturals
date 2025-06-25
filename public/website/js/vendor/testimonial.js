    $(document).ready(function() {
        const testimonialCount = $('#owl-testimony .item').length;
        $('#owl-testimony').owlCarousel({
            items: 1,
            loop: testimonialCount > 1, // ✅ Prevent error if only one
            autoplay: testimonialCount > 1,
            nav: false, // ❌ Hide arrows
            dots: testimonialCount > 1,
            margin: 10
        });
    });
