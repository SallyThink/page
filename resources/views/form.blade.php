<form method = "post" action = "/form">
    @foreach($cont[$j]->form as $v)
        <div class="form-group">
            <input class="form-control" type = "{{ $v['type'] }}" name = "{{ $v['name'] }}"
                   placeholder = "{{ $v['placeholder'] }}" value = "{{ $v['value'] or '' }}"

                   @if(isset($v['background_color']))
                   style = "background-color:{{ $v['background_color'] }}"
                   @elseif(isset($v['border']))
                   style = "border:{{ $v['border'] }}"
                    @endif


autofocus="2"

            >
        </div>
    @endforeach
    <input type = 'hidden' name = '_content_id' value = {{ $cont[$j]->id }}>
    {{ csrf_field() }}
</form>