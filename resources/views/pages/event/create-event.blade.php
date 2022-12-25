{{-- push title --}}
@push('title')
    <title>Event create | Boostem</title>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('public/cork/html/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('public/cork/html/src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/cork/html/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/html/src/plugins/src/tagify/tagify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/html/src/assets/css/light/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/html/src/plugins/css/light/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/html/src/plugins/css/light/tagify/custom-tagify.css') }}">
    <link href="{{ asset('public/cork/html/src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet"
        type="text/css" />
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="{{ asset('public/cork/html/src/assets/css/light/apps/blog-create.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--  END CUSTOM STYLE FILE  -->
@endpush

{{-- push styles --}}
@push('styles')
    <style>

    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('public/cork/html/src/plugins/src/editors/quill/quill.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}">
    </script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/tagify/tagify.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/assets/js/apps/blog-create.js') }}"></script>
    <script src="{{ asset('public/cork/html/layouts/vertical-light-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    {{-- adding custom input type text////////////////////////////////////////////////// --}}
    <script>
        const newInput = document.querySelector('#add_input');
        const inputContainer = document.querySelector('#input_container');
        var i = document.getElementById("hidden").value;
        newInput.addEventListener('click', () => {
            inputContainer.insertAdjacentHTML('beforeend',
                `<tr>
                                    <div class="col-xxl-12 mb-4 mt-4">
                                        <input type="text" class="form-control" id="post-meta-title" required
                                            placeholder="give a placeholder text"
                                            name="custom_input[` + i + `][title]">
                                        <div class="col-xxl-12 mb-4 mt-4">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="custom_input[` + i + `][required]" id="flexRadioDefault1"
                                                    value="required" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    required
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="custom_input[` + i + `][required]" id="flexRadioDefault2"
                                                    value="not-required">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    not-required
                                                </label>
                                            </div>
                                            <input type="hidden" name="custom_input[` + i + `][type]" value="text">
                                            <button type="button" class="btn btn-danger remove-tr">remove input</button>

                                        </div>
                                    </div>
                                </tr>`);
            document.getElementById("hidden").value = i++;
        });
        // remove input
        inputContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-tr')) {
                e.target.parentElement.parentElement.parentElement.remove();
            }
        });
    </script>

    {{-- adding custom input type textarea////////////////////////////////////////////////// --}}
    <script>
        const newTextarea = document.querySelector('#add_textarea');
        var i = document.getElementById("hidden").value;
        newTextarea.addEventListener('click', () => {
            inputContainer.insertAdjacentHTML('beforeend', `<tr>
                                    <div class="col-xxl-12 mb-4 mt-4">
                                        <input type="text" class="form-control" id="post-meta-title" required
                                            placeholder="give a placeholder textarea"
                                            name="custom_input[` + i + `][title]" >
                                        <div class="col-xxl-12 mb-4 mt-4">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="custom_input[` + i + `][required]" id="flexRadioDefault1"
                                                    value="required" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    required
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="custom_input[` + i + `][required]" id="flexRadioDefault2"
                                                    value="not-required">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    not-required
                                                </label>
                                            </div>
                                            <input type="hidden" name="custom_input[` + i + `][type]" value="textarea">
                                            <button type="button" class="btn btn-danger remove-tr">remove input</button>

                                        </div>
                                    </div>
                                </tr>`);
            document.getElementById("hidden").value = i++;
        });
        inputContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-tr')) {
                e.target.parentElement.parentElement.parentElement.remove();
            }
        });
    </script>
    {{-- adding custom input type textarea////////////////////////////////////////////////// --}}
    <script>
        const newRadio = document.querySelector('#add_radio');
        var i = document.getElementById("hidden").value;
        newRadio.addEventListener('click', () => {
            inputContainer.insertAdjacentHTML('beforeend', `<tr>
                                    <div class="col-xxl-12 mb-4 mt-4">
                                        <input type="text" class="form-control" id="post-meta-title" required
                                            placeholder="give a radio question"
                                            name="custom_input[` + i + `][title]" >
                                        <div class="col-xxl-12 mb-4 mt-4">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="custom_input[` + i + `][required]" id="flexRadioDefault1"
                                                    value="required" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    required
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="custom_input[` + i + `][required]" id="flexRadioDefault2"
                                                    value="not-required">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    not-required
                                                </label>
                                            </div>
                                            <input type="hidden" name="custom_input[` + i +
                `][type]" value="radio">
                                            <button type="button" class="btn btn-danger remove-tr">remove radio question</button>
                                            <button type="button" id="add_radio_option" class="btn btn-edit add_option">add option</button>
                                            <div>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="option" name="custom_input[` + i + `][options][0]">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>`);
            document.getElementById("hidden").value = i++;
        });
        inputContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-option')) {
                e.target.parentElement.parentElement.remove();
            }
        });
        inputContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-tr')) {
                e.target.parentElement.parentElement.parentElement.remove();
            }
        });
        inputContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('add_option')) {
                var o = e.target.nextElementSibling.childElementCount;
                var l = i - 1;
                e.target.nextElementSibling.insertAdjacentHTML('beforeend',
                    `<div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="option" name="custom_input[` + l + `][options][` + o + `]">
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger remove-option">remove option</button>
                                                    </div>
                                                </div>`);
            }
        });
    </script>

    {{-- adding custom input type dropdown////////////////////////////////////////////////// --}}
    {{-- <script>
        const newDropdown = document.querySelector('#add_dropdown');
        const dropdownContainer = document.querySelector('#dropdown_container');
        const customCountDropdown = document.querySelector('input[name="hidden_dropdown"]');
        var j = document.getElementById("hidden_dropdown").value;
        // onclickon the button, create a new input and append it to the container
        newDropdown.addEventListener('click', () => {
            dropdownContainer.innerHTML +=
                `<tr>
                                    <div>
                                        <input type="text" name="custom_dropdown[` + j + `][title]"
                                            placeholder="give a placeholder">
                                        <div class="col-xxl-12 col-md-12 mb-4">
                                            <label for="tags">Tags</label>
                                            <input class="hii tags-custom_` + j + `" name="custom_dropdown[` + j + `][options]" value="">
                                        </div>
                                    </div>
                                </tr>`;
            // var inputCustom = document.querySelector('.tags-custom');
            new Tagify(document.querySelector('.tags-custom_' + j));
            document.getElementById("hidden_dropdown").value = j++;
        });
        //remove input
        dropdownContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-tr')) {
                e.target.parentElement.parentElement.parentElement.remove();
            }
        });
    </script> --}}
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="middle-content container-xxl p-0">
                <div class="row mb-4 layout-spacing layout-top-spacing">
                    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="post-title" placeholder="Event Title"
                                        name="title">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Description</label>
                                    <input type="hidden" name="description">
                                    <div id="blog-description"></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area blog-create-section mt-4">

                            <h5 class="mb-4">SEO Settings</h5>

                            <div class="row mb-4">
                                <div class="col-xxl-12 mb-4">
                                    <input type="text" class="form-control" id="post-meta-title" placeholder="Meta Title"
                                        name="meta_title">
                                </div>
                                <div class="col-xxl-12">
                                    <label for="post-meta-description">Meta Description</label>
                                    <textarea class="form-control" id="post-meta-description" cols="10" rows="5" name="meta_description"></textarea>
                                </div>
                            </div>

                        </div>
                        {{-- creating input questions///////////////////////////////////////////// --}}
                        <div class="widget-content widget-content-area blog-create-section mt-4">

                            <h5 class="mb-4">creating input questions</h5>

                            <button type="button" class="btn btn-primary" id="add_input">add input</button>
                            <button type="button" class="btn btn-primary" id="add_textarea">add textarea</button>
                            <button type="button" class="btn btn-primary" id="add_radio">add single choice</button>
                            <input type="hidden" id="hidden" name="hidden" value="0">
                            <div class="row mb-4" id="input_container">

                            </div>
                        </div>
                        {{-- end creating input questions///////////////////////////////////////////// --}}
                    </div>
                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row">
                                <div class="col-xxl-12 mb-4">
                                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                                        <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked
                                            name="type">
                                        <label class="switch-label" for="showPublicly">Public</label>
                                    </div>
                                </div>
                                {{-- <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input class="switch-input" type="checkbox" role="switch" id="enableComment"
                                        checked>
                                    <label class="switch-label" for="enableComment">Enable Comments</label>
                                </div>
                            </div> --}}
                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="post-title" placeholder="Unique Slug"
                                            name="slug">
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <label for="tags">Tags</label>
                                    <input id="tags" class="blog-tags" name="tags" value="">
                                </div>

                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <label for="category">Category</label>
                                    <input name="category" placeholder="Choose...">
                                </div>


                                <div class="col-xxl-12 col-md-12 mb-4">

                                    <label for="product-images">Featured Image</label>
                                    {{-- <div class="multiple-file-upload">
                                    <input type="file" class="filepond file-upload-multiple" name="filepond"
                                        id="product-images">
                                </div> --}}
                                    <input type="file" placeholder="uplode image" name="image">

                                </div>

                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button type="submit" class="btn btn-success w-100">Create Event</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
