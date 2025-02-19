@section('numbering')

    <div class="numbering">
        <span class="numbering_box">
            <img src="{{ asset('images/left.png') }}" alt="play button" class="numbering_box_button">
        </span>

        @for($i = 0; $i < 3; $i++)
            <span class="numbering_box">
                {{ $i }}
            </span>
        @endfor

        <span class="numbering_box">
            <img src="{{ asset('images/left.png') }}" alt="play button" class="numbering_box_button_right">
        </span>
    </div>

@endsection
