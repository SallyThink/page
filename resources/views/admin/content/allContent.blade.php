@extends('admin.layouts.layout')

@section('container')

    <div class="container">

        <div class="row">
            <div class="col s12 m12 l12">
                <a class="waves-effect waves-light btn" href="{{ route('admin.new', ['content']) }}">Create Page</a>
                @if($all->get(0))
                    <table class="bordered">
                        <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="name">Content Name</th>
                            <th data-field="content">Content</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($all as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td><a href={{ route('admin.edit', ['name' => 'content', 'id' => $item->id]) }}>{{ $item->content_name }}</a> </td>
                                <td>{{ $item->content }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>

@endsection