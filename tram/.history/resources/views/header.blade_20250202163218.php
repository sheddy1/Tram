@section('header')

<div class="header1">
    <div class="header1_socials">
        <a href="#"><img src="{{ asset('images/facebook_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/twitter_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/linkedin_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/instagram_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/youtube_header.png') }}" class="header_socials_youtube" alt=""></a>
    </div>

    <span class="header1_logo">
        <a href="#"><img src="{{ asset('images/tream_logo_header.png') }}" class="header1_logo_img"  alt=""></a>
        <text class="header1_logo_text">The Right Answers Media</text>
    </span>

    <span class="live">
        <span class="live_tv"></span>

        <span class="live_radio"></span>
    </span>
</div>

@endsection
