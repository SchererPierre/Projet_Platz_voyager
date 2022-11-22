@extends('template.index')

@section('title')
    
    Free Grid Wordpress Theme

@endsection

@section('content')
    
<div class="container object">

    <div id="main-container-image">

            <section class="work">

                @foreach ($posts as $post)

                    <figure class="white">
                        <a href="{{ route('posts.show', ['post' => $post->id ]) }}">
                            <img src="img/psd-4.jpg" alt="" />
                            <dl>
                                <dt>Wordpress theme</dt>
                                <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">Wordpress theme</div>
                        </div>
                    </figure>
                    
                @endforeach

            </section>

        </div>

    </div>

    <div id="wrapper-oldnew">
    	<div class="oldnew">
        	<div class="wrapper-oldnew-prev">
            	<div id="oldnew-prev"></div>
        	</div>
        </div>
	</div>

@endsection