@section('section2')

<div class="section2">
    <span class="videos">


        <swiper-container class="mySwiper" loop="true" space-between="0" >
            <swiper-slide>
                @for($i = 0; $i < 6; $i++)
                <img src="{{ asset('images/images/news1.png') }}" alt="search" class="sw5ipper_slide1">
                @endfor

            </swiper-slide>

          </swiper-container>
    </span>

    <span class="articles">
        <span class="article1" >
            <button class="article1_button">Culture</button>
            <text class="article_text">The History of the Fulani People</text>
            <img src="{{ asset('images/images/article1.png') }}" alt="" class="article1_image">
            <span class="article1_info">
                <img src="{{ asset('images/images/article1_person.png') }}" alt="search" class="article1_person">
                <text class="article1_info_txt">Mary Okechukwu</text>
                <text class="article1_info_txt1">Nov. 3, 2024</text>
            </span>
        </span>

        <span class="article2">
            <button class="article1_button">Culture</button>
            <text class="article_text">The History of the Fulani People</text>
            <img src="{{ asset('images/images/article1.png') }}" alt="" class="article1_image">
            <span class="article1_info">
                <img src="{{ asset('images/images/article1_person.png') }}" alt="search" class="article1_person">
                <text class="article1_info_txt">Mary Okechukwu</text>
                <text class="article1_info_txt1">Nov. 3, 2024</text>
            </span>
        </span>
    </span>


</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script>

</script>

@endsection
