@extends('layouts.layout_user')

@section('content')


        <!-- Main Container -->
<main id="main-container">
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    News
                </h1>
            </div>

        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-narrow">
       

        <!-- Dashboard Charts -->
        <div class="row">
            <div class="col-md-12">
                <div class="block block-rounded block-opt-refresh-icon8">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                        data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">{{ $news->title }}</h3>
                    </div>

                    <div class="block-content " style="padding: 30px 20px">
                                 
                          {{ $news->body }}
                          
                          <br /><br />
                          
                          <a href="{{ url('user-area')}}" class="btn btn-danger">Back to news</a>

                        </div>
                </div>
            </div>


        </div>
        <!-- END Dashboard Charts -->


    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->


@endsection
            
            
            
            