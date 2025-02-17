@section('header')

<div class="header1">
    <span class="header1_socials">
        <a href="#"><img src="{{ asset('images/facebook_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/twitter_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/linkedin_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/instagram_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/youtube_header.png') }}" class="header_socials_youtube" alt=""></a>
    </span>

    <span class="header1_logo">
        <a href="#"><img src="{{ asset('images/tream_logo_header.png') }}" class="header1_logo_img"  alt=""></a>
        <text class="header1_logo_text">The Right Answers Media</text>
    </span>

    <span class="live">
        <span class="live_tv">
            <a href="" class="a_general"><text class="livetv_text">Live TV</text></a>
            <img src="{{ asset('images/red_dot.png') }}" class="livetv_dot"  alt="">
        </span>

        <span class="live_radio">
            <a href=""><text class="livetv_text">Live TV</text></a>
            <img src="{{ asset('images/red_dot.png') }}" class="livetv_dot"  alt="">
        </span>
    </span>
</div>

@endsection
