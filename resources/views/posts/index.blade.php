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

                            <img src="{{ asset('storage/' . $post->image) }}" alt="" />

                            <dl>
                                <dt>{{ $post->title }}</dt>
                                <dd>{{ $post->resume }}</dd>
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="{{ asset('storage/' . $post->category->image) }}" alt="" width="28" height="28"/></div>
                            <div id="part-info">{{ $post->category->name }}</div>
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