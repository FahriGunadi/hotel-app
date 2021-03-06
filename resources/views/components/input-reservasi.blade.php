@props(['label', 'name', 'type'=>'text', 'value'=>'', 'keterangan'=> '', 'onkeydown'=>'', 'hidden'=>''])
<div class="form-group row">
    <Label class="col-4 col-form-label text-right">{{ $label }}</Label>
    <div class="col">
        <input id="{{ $name }}" {{ $hidden }} value="{{ old($name,$value) }}" type="{{ $type }}" class="form-control{{ $errors->has($name) ? ' is-invalid' : ''}}" name="{{ $name }}" onkeydown="{{ $onkeydown }}">
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @if ($keterangan)
            <div class="text-muted">
                <small>{{ $keterangan }}</small>
            </div>
        @endif
    </div>
</div>
