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
                <span class="section6_span_info">
                    <span class="section6_span_info_header">
                        <button class="section6_span_info_header_button">Nigeria</button>

                            <a href="" class="a_general">
                                <text class="section6_span_info_header_txt">Read Article</text>
                            </a>
                    </span>

                    <span class="section6_span_info_txt">
                        <text class="section6_span_info_txt_txt">
                            Poverty Would be Gone Says Tinubu
                        </text>
                    </span>

                    <span class="section6_span_info_footer">
                        <img src="{{ asset('images/images/article9_person.png') }}" alt="search" class="section6_span_info_footer_image">
                        <text class="section6_span_info_footer_txt">Nelson Igwele</text>
                        <text class="section6_span_info_footer_txt1">Dec. 23, 2024</text>
                    </span>
                </span>

                <span class="section6_span_image">
                    <img src="{{ asset('images/images/cover.png') }}" alt="calender" class="section5_span1_cover">
                    <img src="{{ asset('images/images/article8.png') }}" alt="calender" class="section5_span1_image">
                </span>
            </span>

            <span class="newssection_extra_box"></span>

            <span class="newssection_extra_box"></span>
        </span>
    </div>

@endsection
