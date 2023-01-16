<div style="text-align: center">
    <img src="{{ $message->embed(public_path() . '/images/Landing.png') }}" alt="Landing Worldwide"
         style=" margin: 48px 0; width:520px;">

    <div>
        <h1 style="font-weight:900; font-size:25px; color:rgba(1, 4, 20, 1)">{{ __('texts.confirmation_email') }}</h1>
        <p style="margin-top:16px; color:rgba(1, 4, 20, 1)">{{ __('texts.click_to_verify_email') }}</p>

        <a href="{{ $url }}">
            <button class="button" style ='margin-top: 24px; width: 320px; cursor:pointer; background-color: #0FBA68; padding: 12px 0; border-radius: 8px; color: white; font-weight: 700;'>
                {{ strtoupper( __('texts.verify_email')) }}
            </button>
        </a>
    </div>
</div>
