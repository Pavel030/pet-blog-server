@extends('layout.admin')
@section('post')
    <div class="p_main">
        <div class="p_nav">
            <div class="search_block">
                <input class="search_input" name="search" type="text" id="search">
                <button class="go">Go</button>
            </div>
            <div class="p_sort_categories">
                <span class="p_sort_category_announce">Sorting</span>
                <a class="p_sort_category" href="post.list">id</a>
                <a class="p_sort_category" href="post.list">title</a>
                <a class="p_sort_category" href="post.list">created time</a>
                <a class="p_sort_category" href="post.list">updated time</a>
                <a class="p_sort_category" href="post.list">likes</a>
                <a class="p_sort_category" href="post.list">dislikes</a>
            </div>
            <div class="p_list">
                @foreach($posts as $post)
                    <div class="p_list_container">
                        <a href="{{ route('post.edit', $post->id) }}" class="p_title">{{ $post->title }}</a>
                        <span class="p_created_time">{{ $post->created_at }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="handling_area">
            @if(isset($selected_post->id))
                <form action="{{ route('post.update', $selected_post) }}" method="post" class="detailed_form_container" name="p_update_form">
                    @csrf
                    @method('PATCH')
                    <input name="title" class="detailed_input" value="{{ $selected_post->title }}"></input>
                    <textarea name="content" class="detailed_textarea">{{ $selected_post->content }}</textarea>
                    <button class="btn_2" type="submit">Apply</button>
                </form>
            @else
                <p>Select a post to view details</p>
            @endif
        </div>
    </div>

@endsection
