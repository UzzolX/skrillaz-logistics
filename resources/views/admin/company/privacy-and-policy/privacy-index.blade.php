@extends('admin.index')
@section('content')
<style>
    .create {
        display: block;
        margin-bottom: 20px;

    }

    .create a button {
        padding: 10px 20px;
        font-size: 16px;
        border: 0px;
        background: #36ccba !important;
        text-align: center;
    }

</style>
<div class="col-xl-12">
    <div class="create">
        <a href="{{route('privacy.create')}}" enctype="multipart/form-data">
            <button type="button" class="btn btn-info btn-sm">Add Privacy & Policy</button>

        </a>
    </div>

    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif

    <table class="table" style="text-align: center;">
        <thead>
            <tr>
                <th class="line" scope="col">Title</th>
                <th class="line" scope="col">Content</th>
                <th class="line" scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-success">

            {{-- @foreach ($privacy as $row) --}}
            <tr>
                {{-- <td>{{str_limit($row->title,30)}}</td> --}}
                {{-- <td>{{str_limit($row->content,30)}}</td> --}}
                <td>
                    {{-- {{route('privacy.edit',[$row->id])}} --}}
                    <a class=" btn-bg-dark" href="#"> <button type="button" class="btn btn-info btn-sm">Edit</button>
                    </a>
                    {{-- {{route('privacy.delete',[$row->id])}} --}}
                    <a href="#">
                        <button type="button" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
    {{-- {{$privacy->links()}} --}}
</div>

@endsection
