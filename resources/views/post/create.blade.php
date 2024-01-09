@extends('layout.admin')
@section('post')
    <div>
        <form class="create_form" method="post" action="{{route('post.store')}}">
            @csrf
            <div class="input_block">
                <input class="input" name="id" type="text" id="id">
                <label class="label" for="id">ID</label>
            </div>
            <div class="input_block">
                <input class="input" name="author_id" type="text" id="author_id">
                <label class="label" for="author_id">Author ID</label>
            </div>
            <div class="input_block">
                <input class="input" name="title" type="text" id="title">
                <label class="label" for="title">Title</label>
            </div>
            <textarea name="content" id="content">content</textarea>
            <button class="btn rich_green" type="submit">Create</button>
        </form>
    </div>
@endsection
