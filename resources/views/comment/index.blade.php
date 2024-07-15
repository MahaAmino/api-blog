{{-- @extends('layout.app')
@section("title", "posts")
@section('content')
<div class="cont">
    <button class="btn btn-dark a"><a href="{{ route('post.create') }}" >Add New Post</a></button>
    <table class="table table-success table-striped" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $posts as $post )
                <tr>
                    <td>
                        {{$post->id}}
                    </td>
                    <td>
                        <img src="/assets/imgs/{{ $post->image }}" class="rounded mx-auto d-block" alt="" width="90" height="100">
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        {{$post->description}}
                    </td>
                    <td >
                        @auth
                            <button type="button" class="btn btn-danger"><a href="{{route('post.show' , $post->id )}}"> SHOW </a></button>
                            @if (auth()->user()->can('update', $post))
                            <button type="button" class="btn btn-success"><a href="/edit/{{$post->id}}"> EDIT </a></button>
                            @endif
                            @can('delete',$post)
                            <form action="{{ route('post.destroy' , $post->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="DELETE" type="button" class="btn btn-warning">
                            </form>
                            @endcan
                        @endauth

                    </td>
                </tr>

            @empty
                <p></p>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
 --}}
