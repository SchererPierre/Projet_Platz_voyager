<div id="wrapper-navbar">
    <div class="navbar object">

        <div id="wrapper-bouton-icon">

            <div href="{{ route('categories.index',['id'=> 6]) }}" id="bouton-ai">
                <img src="{{asset ('img/icon-ai.svg')}}" alt="illustrator" title="Illustrator" height="28" width="28">
            </div>

            <div href="{{ route('categories.index',['id'=> 5]) }}" id="bouton-psd">
                <img src="{{asset ('img/icon-psd.svg')}}" alt="photoshop" title="Photoshop" height="28" width="28">
            </div>

            <div href="{{ route('categories.index',['id'=> 4]) }}" id="bouton-theme">
                <img src="{{asset ('img/icon-themes.svg')}}" alt="theme" title="Theme" height="28" width="28">
            </div>
            
            <div href="{{ route('categories.index',['id'=> 3]) }}" id="bouton-font">
                <img src="{{asset ('img/icon-font.svg')}}" alt="font" title="Font" height="28" width="28">
            </div>

            <div href="{{ route('categories.index',['id'=> 2]) }}" id="bouton-photo">
                <img src="{{asset ('img/icon-photo.svg')}}" alt="photo" title="Photo" height="28" width="28">
            </div>

            <div href="{{ route('categories.index',['id'=> 1]) }}" id="bouton-premium">
                <img src="{{asset ('img/icon-premium.svg')}}" alt="premium" title="Premium" height="28" width="28">
            </div>
            
        </div>
    </div>
</div>