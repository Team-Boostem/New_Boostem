{{-- push title --}}
@push('title')
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
@endpush

{{-- push styles --}}
@push('styles')
    <style>

    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle' //circle
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });
            $('#upload_image').on('change', function() {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $image_crop.croppie('bind', {
                        url: event.target.result
                    })
                }
                reader.readAsDataURL(this.files[0]);
                $('#uploadimage').show();
            });
            $('.crop_image').click(function(event) {
                $image_crop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function(response) {
                    $.ajax({
                        url: "{{ route('img.save') }}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "image": response
                        },
                        // success:function(data)
                        // {
                        //    $('#uploaded_image').html(data)
                        // }
                        success: function(response) {
                            console.log(response);
                            if (response.status == 200) {
                                $('#uploaded_image').html(response)

                            } else {
                                $('#uploaded_image').html(response)
                            }
                        }
                    });
                })
            });
        });
    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box">
        <div class="container" style="margin-top:20px;padding:20px;">
            <div class="card">
                <div class="card-header">
                    Crop And Upload Image using PHP and JQuery Ajax - Croppie Image Cropper
                </div>
                <div class="card-body">
                    <h5 class="card-title">Select Image</h5>
                    <input type="file" name="upload_image" id="upload_image" />
                </div>
            </div>

            <div class="card text-center" id="uploadimage" style='display:none'>
                <div class="card-header">
                    Upload & Crop Image
                </div>
                <div class="card-body">
                    <div id="image_demo" style="width:350px; margin-top:30px"></div>
                    <div id="uploaded_image" style="width:350px; margin-top:30px;"></div>
                </div>
                <div class="card-footer text-muted">
                    <button class="crop_image">Crop & Upload Image</button>
                </div>
            </div>
        </div>
        </body>

        </html>


    </div>
@endsection
