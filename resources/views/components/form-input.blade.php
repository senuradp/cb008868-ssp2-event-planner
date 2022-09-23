<div class="mb-3 row">
    <div class="mb-3 {{ $type == 'file' ? 'col-8' : '' }}">
        <label for="{{ $id }}">{{ $label }}</label>

        <input type="{{ $type }}" class="form-control
            @error($name) is-invalid @enderror"
            id="{{ $id }}" name="{{ $name }}" value="{{ old($name, $value) }}"
            aria-describedby="{{ $name }}Help" placeholder="{{ $placeholder }}" />

        <div id="{{ $name }}Help" class="form-text">{{ $help }}</div>

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    @if ($type == 'file')
        <div class="col-4">
            {{-- id taken from line var output in file reader script--}}
            <img src="" id="{{ $id }}-img" class="w-100">
        </div>
    @endif

</div>

@if ($type == 'file')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('{{ $id }}');
            input.addEventListener('change', function() {

                // check the type of file that was selected, (we only want images)
                var fileType = input.files[0].type;
                if (fileType !== 'image/jpeg' && fileType !== 'image/png') {
                    alert('Only JPEG and PNG files are allowed');
                    input.value = '';
                }

                // show the selected image
                // pass the url to the attr src of an img tag and then it will show the image that is the ttyppicsal functionaltt
                // using the file reader we can create the file instance from the uploaded file into the browser itself and then we
                //  can use the file reader to read the file and then we can use the result of the file reader to show the image using an img or iframe tag
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('{{ $id }}-img');
                    output.src = reader.result;
                };
                reader.readAsDataURL(input.files[0]);

            });
        });
    </script>
@endif
