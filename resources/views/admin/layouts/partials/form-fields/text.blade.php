<div class="mb-5 {{ $errors->has($name) ? 'is-invalid' : '' }}">
    <label class="form-label" for="{{ $name }}">{{ __( $label) }}</label>
    <input type="text" class="form-control" id="{{ $name }}" name="{{ $name }}"
           placeholder="{{ $placeholder ? __($placeholder) : __('' . $label) }}" spellcheck="false"
           data-ms-editor="true" {{ $required == 'true' ? 'required' : '' }}
           value="{{ $value == null ? old($name) : $value }}" {{ $disabled == true ? 'disabled' : '' }}>
    @if ($errors->has($name))
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
            <strong id="{{ $name }}_error">{{ $errors->first($name) }}</strong>
        </div>
    @endif
</div>
