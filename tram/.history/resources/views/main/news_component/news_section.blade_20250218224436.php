@section('news_section')

    <div class="news_section">
        <span class="newssection_main">
            <span class="section5_span1_span">
                <span class="section5_span1_span1">
                    <img src="{{ asset('images/images/article2_person.png') }}" alt="search" class="article1_person">
                    <text class="article1_info_txt">David Nonso</text>
                    <text class="article1_info_txt1">Nov. 3, 2024</text>
                </span>

                <text class="section5_span1_span_text">
                    Nigerian Army in a Dilemma as New threats Arise from Bandits
                </text>

                <button class="section5_span1_span_button">
                    Politics
                </button>
            </span>

            <img src="{{ asset('images/images/cover.png') }}" alt="calender" class="newssection_main_cover_image">
            <img src="{{ asset('images/images/article5.png') }}" alt="calender" class="newssection_main_image">
        </span>

        <span class="newssection_extra">
            <span class="newssection_extra_box"></span>

            <span class="newssection_extra_box"></span>

            <span class="newssection_extra_box"></span>
        </span>
    </div>

@endsection
