{{-- push title --}}
@push('title')
<title>User Profile</title>
<link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/loader.css')}}" rel="stylesheet"
    type="text/css" />
<script src="{{ asset('public/cork/html/layouts/collapsible-menu/loader.js')}}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('public/cork/html/src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/plugins.css')}}" rel="stylesheet"
    type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/html/src/plugins/src/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/html/src/plugins/css/light/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/html/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css')}}">

@endpush

{{-- push styles --}}
@push('styles')
<style>

</style>
@endpush

{{-- push scripts --}}
@push('scripts')
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('public/cork/html/src/plugins/src/global/vendors.min.js')}}"></script>
<script src="{{ asset('public/cork/html/src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('public/cork/html/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('public/cork/html/src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
<script src="{{ asset('public/cork/html/layouts/collapsible-menu/app.js')}}"></script>


<script src="../src/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('public/cork/html/src/plugins/src/table/datatable/datatables.js')}}"></script>
<script src="{{ asset('public/cork/html/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js')}}">
</script>
<script src="{{ asset('public/cork/html/src/plugins/src/table/datatable/button-ext/jszip.min.js')}}"></script>
<script src="{{ asset('public/cork/html/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
<script src="{{ asset('public/cork/html/src/plugins/src/table/datatable/button-ext/buttons.print.min.js')}}"></script>
<script src="{{ asset('public/cork/html/src/plugins/src/table/datatable/custom_miscellaneous.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
<div class="main-box">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
            
                                            <th data-priority="0">S No.</th>
                                            <th data-priority="1">Name</th>
                                            <th data-priority="2">Email</th>
                                            @foreach ($que as $question)
                                            <th>{{ $question['title'] }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                             $i=1;
                                                            ?>
                                        @foreach ($participantes as $participante )
                                        <tr>
                                            <th>{{ $i++ }}
                                            <th>{{ $participante->basic_answers['name'] }}</th>
                                            <th>{{ $participante->basic_answers['email'] }}</th>
                                            @foreach ($participante->answers as $key => $value)
                                            <th>{{ $value }}</th>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                </div>

            </div>
        </div>
    </div>
    
</div>
@endsection