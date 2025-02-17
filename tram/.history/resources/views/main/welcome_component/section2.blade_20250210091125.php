@section('section2')

<div class="section2">
    <span class="videos">


        <swiper-container class="mySwiper" loop="true" space-between="0" navigation="true">
            <swiper-slide>
                <span class="videos_cover">
                    <img src="{{ asset('images/images/cover.png') }}" alt="" class="videos_cover_image">
                </span>

                <img src="{{ asset('images/images/news1.png') }}" alt="search" class="swipper_slide1">
            </swiper-slide>
            <swiper-slide>Slide 2</swiper-slide>
            <swiper-slide>Slide 3</swiper-slide>
            <swiper-slide>Slide 4</swiper-slide>
            <swiper-slide>Slide 5</swiper-slide>
            <swiper-slide>Slide 6</swiper-slide>
            <swiper-slide>Slide 7</swiper-slide>
            <swiper-slide>Slide 8</swiper-slide>
            <swiper-slide>Slide 9</swiper-slide>
          </swiper-container>
    </span>

    <span class="articles">
        <span class="article1"></span>

        <span class="article2"></span>
    </span>


</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script>

</script>

@endsection
