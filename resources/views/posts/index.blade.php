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
                                <dt>{{ $post->title }}</dt>
                                <dd>{{ $post->resume }}</dd>
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">{{ $post->title }}</div>
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