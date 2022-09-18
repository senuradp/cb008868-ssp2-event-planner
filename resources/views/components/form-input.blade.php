<div class="mb-3">
    <div class="mb-3">
        <label for="{{ $id }}">{{ $label }}</label>
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}" value="{{ old($name, $value) }}"
        aria-describedby="{{ $name }}Help" placeholder="{{ $placeholder }}">
        <div id="{{ $name }}Help" class="form-text">{{ $help }}</div>

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
</div>

