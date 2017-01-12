@extends('admin.layouts.layout')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                @if(isset($form))
                    {{ Form::open(['route' => ['admin.updateContent', $form->id], 'method'=> 'put']) }}
                @else
                    {{ Form::open(['route' => 'admin.newContent']) }}
                @endif
                <div class="input-field">
                    {{ Form::text('content_name', isset($form->content_name) ? $form->content_name : '') }}
                    {{ Form::label('content_name', 'Content Name') }}
                </div>
                <div class="input-field">
                    {{ Form::select('mains_id', $selectPage) }}
                    {{ Form::label('mains_id', 'Select Page') }}
                </div>
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header">Content text</div>
                        <div class="collapsible-body">
                            <div class="input-field">
                                {{ Form::textarea('content', isset($form->content) ? $form->content : '', ['class' => 'materialize-textarea']) }}
                                {{ Form::label('content', 'Content') }}
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="collapsible-header">Background</div>
                        <div class="collapsible-body">
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
                        </div>
                    </li>
                </ul>


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
                <button class="btn waves-effect waves-teal" type="submit">{{ isset($form) ? 'Update' : 'Create' }}</button>


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