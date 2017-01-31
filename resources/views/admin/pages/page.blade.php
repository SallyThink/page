@extends('admin.layouts.layout')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                @if(isset($form))
                    {{ Form::open(['route' => ['admin.update', 'page', $form->id], 'method'=> 'put', 'files' => true]) }}
                @else
                    {{ Form::open(['route' => ['admin.new', 'page'], 'files' => true]) }}
                @endif
                <div class="input-field">
                    {{ Form::text('page_name', isset($form->page_name) ? $form->page_name : '') }}
                    {{ Form::label('page_name', 'Page Name') }}
                </div>
                <div class="input-field">
                    {{ Form::select('background', ['','color' => 'Color', 'image' => 'Image']) }}
                    {{ Form::label('background', 'background') }}
                </div>
                <div class="input-field hidden">
                    {{ Form::text('background_color', isset($form->background_color) ? $form->background_color : '') }}
                    {{ Form::label('background_color', 'Background Color') }}
                </div>
                <div class="file-field input-field hidden">
                    <div class="btn">
                        <span>Image</span>
                        {{ Form::file('background_image', isset($form->background_image) ? $form->background_image : '') }}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                    <div id="imagePreview">
                        <img src="#" alt="image" />
                    </div>
                </div>

                <div class="switch">
                    <label for="published">Published</label>
                    <br>
                    <label>
                        Off
                        <input type="checkbox" name="published" {{ isset($form->published) && $form->published == true ? 'checked' : '' }} >
                        <span class="lever"></span>
                        On
                    </label>
                </div>

                <br>
                {{ Form::token() }}
                <button class="btn waves-effect waves-light">{{ isset($form) ? 'Update' : 'Create' }}</button>


                <button class="btn waves-effect waves-light" formaction={{ route('admin.delete', ['page', isset($form->id) ? $form->id : '']) }}>Delete</button>

                {!! Form::close() !!}
                </div>



            </div>
        </div>
    </div>

    <script>
        jQuery('select').material_select();

        Global.Css.editCheckbox();
        Global.Farbtastic.init();
        Global.Form.imageInput();
        Global.Form.colorOrImage();
    </script>

@endsection