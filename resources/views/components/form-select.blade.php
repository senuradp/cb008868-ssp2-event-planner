<div class="mb-3">
    <div class="mb-3">
        <label for="{{ $id }}">{{ $label }}</label>
        <select class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
            aria-describedby="{{ $name }}Help">
            <option value="">{{ $placeholder }}</option>
                @foreach ($options as $option_key => $option_value)
                    <option value="{{ $option_key }}" {{ $option_key == $value ? 'selected' : '' }}>
                        {{ $option_value }}
                    </option>
                @endforeach
        </select>
        <div id="{{ $name }}Help" class="form-text">{{ $help }}</div>

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
</div>

