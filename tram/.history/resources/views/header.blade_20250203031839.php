@section('header')

<span class="header1_socials_drop_box">
    <table class="header1_socials_drop_box_table">

        <tr><td><a href="">Twitter</a></td></tr>
    </table>
</span>

<div class="header1">
    <span class="header1_socials">
        <a href="#"><img src="{{ asset('images/facebook_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/twitter_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/linkedin_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/instagram_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/youtube_header.png') }}" class="header_socials_youtube" alt=""></a>
    </span>

        <span class="header1_socials_drop">
            <input type="checkbox" id="header1_check" style="display:none">
            <label for="header1_check">
                <img src="{{ asset('images/social_drop.png') }}" class="header_socials_drop1" alt="">
            </label>

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
            <a href="" class="a_general"><text class="livetv_text">Live Radio</text></a>
            <img src="{{ asset('images/red_dot.png') }}" class="livetv_dot"  alt="">
        </span>
    </span>
</div>

<div class="header2">
    <span class="header2_links"></span>
</div>

@endsection
