<div class="form-group">
    <label for="{{ $fieldName }}">
        {{ $labelName }}
        @if ((bool)$required == true)
            <span class="text-danger" title="This field is required"> **</span>
        @endif
    </label>
    <textarea 
        class="form-control @error($fieldName) is-invalid @enderror"     
        name="{{ $fieldName }}" 
        id="{{ $fieldName }}" 
        aria-describedby="{{ $fieldName }}"
        rows="{{ (int)$rows }}"
        @if ((bool)$required == true)
            required
        @endif
        >{{ $fieldValue }}</textarea>
        @error($fieldName)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>
