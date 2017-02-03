@extends('admin.layouts.layout')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">

                @include('admin.layouts.errors')

                @if(isset($form))
                    {{ Form::open(['route' => ['admin.update', 'generalSettings', $form->id], 'method'=> 'put', 'files' => true]) }}
                @else
                    {{ Form::open(['route' => ['admin.new', 'generalSettings'], 'files' => true]) }}
                @endif
                <div class="input-field">
                    {{ Form::text('headTitle', isset($form->headTitle) ? $form->headTitle : '') }}
                    {{ Form::label('headTitle', 'Head Title') }}
                </div>
                <div class="input-field">
                    {{ Form::select('plugin', ['pagepilling', 'scrollmagic']) }}
                    {{ Form::label('plugin', 'Plugin') }}
                </div>

                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header">
                            Plugin Settings
                        </div>
                        <div class="collapsible-body">
                            <div class="input-field">
                                {{ Form::select('direction', ['horizontal', 'vertical', 'random'],isset($form->direction) ? $form->directions : '') }}
                                {{ Form::label('direction', 'Direction') }}
                            </div>
                            <div class="input-field">
                                {{ Form::select('navigation', ['Yes', 'No'],isset($form->navigation) ? $form->navigation : '') }}
                                {{ Form::label('navigation', 'Navigation') }}
                            </div>
                            <div class="input-field">
                                {{ Form::select('navigationPosition', ['horizontal', 'vertical', 'random'],isset($form->navigationPosition) ? $form->navigationPosition : '') }}
                                {{ Form::label('navigationPosition', 'Navigation Position') }}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            Menu Buttons
                        </div>
                        <div class="collapsible-body">
                            <div class="input-field">
                                {{ Form::text('color', isset($form->color) ? $form->color : '') }}
                                {{ Form::label('color', 'Color') }}
                            </div>
                            <div class="input-field">
                                {{ Form::text('hover_color', isset($form->hover_color) ? $form->hover_color : '') }}
                                {{ Form::label('hover_color', 'Hover color') }}
                            </div>
                            <div class="input-field">
                                {{ Form::text('border', isset($form->border) ? $form->border : '') }}
                                {{ Form::label('border', 'Border') }}
                            </div>
                            <div class="input-field">
                                {{ Form::text('border_radius', isset($form->border_radius) ? $form->border_radius : '') }}
                                {{ Form::label('border_radius', 'Border radius') }}
                            </div>
                            <div class="input-field">
                                {{ Form::text('background_color', isset($form->background_color) ? $form->background_color : '') }}
                                {{ Form::label('background_color', 'Background color') }}
                            </div>
                            <div class="input-field">
                                {{ Form::text('hover_background_color', isset($form->hover_background_color) ? $form->hover_background_color : '') }}
                                {{ Form::label('hover_background_color', 'Hover background color') }}
                            </div>
                            <div class="input-field">
                                {{ Form::text('active_background_color', isset($form->active_background_color) ? $form->active_background_color : '') }}
                                {{ Form::label('active_background_color', 'Active background color') }}
                            </div>
                        </div>
                    </li>
                </ul>

                <br>
                {{ Form::token() }}
                <button class="btn waves-effect waves-teal" type="submit">Save</button>


                {!! Form::close() !!}
            </div>



        </div>
    </div>

    <script>
        jQuery('select').material_select();
    </script>

@endsection