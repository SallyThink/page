@extends('admin.layouts.layout')

@section('container')

    <div class="container">

        <div class="row">
            <div class="col s12 m12 l12">
                <a class="waves-effect waves-light btn" href="{{ route('admin.new', ['page']) }}">Create Page</a>
            @if($all->get(0))
                <table class="bordered">
                    <thead>
                    <tr>
                        <th data-field="id">#</th>
                        <th data-field="name">Page Name</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($all as $page)
                        <tr>
                            <td> {{ $page->id }} </td>
                            <td><a href={{ route('admin.edit', ['name' => 'page', 'id' => $page->id]) }}>{{ $page->page_name }}</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>
</div>

@endsection