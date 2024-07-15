{{--
@extends('layout.app')
@section("title", "add post")
@section('content')

<div class="left" >
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Tags</th>
            <th>Category</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <td>
            <input type="text" id="tit" name="title">
        </td>
        <td>
            <textarea name="description" id="des" cols="70" rows="3"></textarea>
        </td>
        <td>
            <select data-mdb-select-init multiple name="tag[]">
                @foreach ($tag as $t)
                    <option value={{ $t->id }}>{{ $t->name }}</option>
                @endforeach
            </select>
        </td>
        <td>
            <select data-mdb-select-init name="category">
                @foreach ($category as $c)
                <option value={{ $c->id }}><img
                    src="/assets/imgs/{{ $c->image }}"
                    alt=""
                    style="width: 25px; height: 25px"
                    class="rounded-circle"
                    />{{ $c->title }}</option>
            @endforeach
            </select>
        </td>
        <td>
            <input type="file" id="img" name="image">
        </td>
        </tbody>
</table>
        <div>
            <button type="submit"  class="btn btn-warning" style="color: rgb(59, 122, 122); font-weight: bolder " >Send </button>
        </div>
    </form>
</div>

@endsection
 --}}
