@section('news_section')

    <div class="news_section">
        <span class="newssection_main">
            <span class="newssection_main_span">
                <span class="newssection_main_span_info">
                    <span class="newssection_main_span_info1">
                        <img src="{{ asset('images/images/article1_person.png') }}" class="header_socials_drop1" alt="">

                        <text class="newssection_main_span_info1_txt">
                            Mary Okechukwu
                        </text>
                    </span>

                    <span class="newssection_main_span_info2">
                        <text class="newssection_main_span_info1_txt">
                            Nov. 3, 2024
                        </text>
                    </span>
                </span>

                <button class="newssection_main_span_button">Article</button>

                <text class="newssection_main_span_text">
                    Nigerian Army in a Dilemma as New threats Arise from Bandits
                </text>
            </span>
            <img src="{{ asset('images/images/cover.png') }}" alt="calender" class="newssection_main_cover_image">
            <img src="{{ asset('images/images/article5.png') }}" alt="calender" class="newssection_main_image">
        </span>

        <span class="newssection_extra">
            <span class="newssection_extra_box">
                <span class="newssection_extra_box1">
                    <span class="newssection_extra_box1_header"></span>

                    <span class="newssection_extra_box1_main"></span>

                    <span class="newssection_extra_box1_header"></span>
                </span>

                <span class="newssection_extra_box2"></span>
            </span>

            <span class="newssection_extra_box"></span>

            <span class="newssection_extra_box"></span>
        </span>
    </div>

@endsection
