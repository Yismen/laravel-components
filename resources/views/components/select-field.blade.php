<div class="form-group">
    <label for="{{ $fieldName }}">
        {{ $labelName }}
        @if ((bool)$required == true)
            <span class="text-danger" title="This field is required"> **</span>
        @endif
    </label>
    <select 
        class="form-control @error($fieldName) is-invalid @enderror" 
        name="{{ $fieldName }}" 
        id="{{ $fieldName }}" 
        aria-describedby="{{ $fieldName }}"
        @if ((bool)$required == true)
            required
        @endif
        @if ((bool)$multiple)
            multiple
        @endif
    >
        <option value=""></option>
        @foreach ($dataArray as $key => $value)
            <option value="{{ $key }}"
                @if ( $fieldValue == $key)
                    selected
                @endif
            >{{ $value }}</option>
        @endforeach
    </select>
    @error($fieldName)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
