@section('news_section1')

<div class="news_section1">
    <span class="news_section1_span1">
        <span class="news_section1_span1_box1">
            <span class="news_section1_span1_box1_search">
                <input type="text" class="news_section1_span1_box1_search_input" placeholder="Search Article">
                <img src="{{ asset('images/search.png') }}" alt="calender" class="news_section1_span1_box1_search_icon">
            </span>

            <span class="news_section1_span1_box1_categories">
                <span class="news_section1_span1_box1_categories_header">

                </span>

                <span class="news_section1_span1_box1_categories_main">

                </span>

                <span class="news_section1_span1_box1_categories_main">

                </span>

                <span class="news_section1_span1_box1_categories_main">

                </span>
            </span>
        </span>

        <span class="news_section1_span1_box2">
            <span class="news_section1_span1_box2_categories_header">

            </span>

            @for($i = 1; $i < 10; $i++)
                <span class="news_section1_span1_box2_categories_main">

                </span>
            @endfor

        </span>
    </span>

    <span class="news_section1_span2">
        <span class="news_section1_span2_box"></span>

        <span class="news_section1_span2_box"></span>

        <span class="news_section1_span2_box"></span>

        <span class="news_section1_span2_box"></span>
    </span>
</div>

@endsection
