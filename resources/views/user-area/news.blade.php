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
            <div class="col-md-6">
                <div class="block block-rounded block-opt-refresh-icon8">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                        data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Create News</h3>
                    </div>

                        <div class="block-content ">
                     
@include('layouts.partials.errors')

                                <form class="form-horizontal push-5-t" action="{{  secure_url('user-area/news') }}" method="post">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label >Title</label>
                                            <input class="form-control" type="text"
                                                   name="title" placeholder="Enter Title">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label> Body</label>
                                            <textarea class="form-control" name="body"></textarea>
                                        </div>
                                    </div>

                                   

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit"><i
                                                        class="fa fa-arrow-right push-5-r"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                </div>
            </div>


            <div class="col-md-6">

                <!-- News -->
                <div class="block">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                        data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Delete News</h3>
                    </div>
                    <div class="block-content">
                                           <table class="table-responsive table table-bordered table-striped  js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                           <th class="text-center" style="width: 10%;"> s/n</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Title</th>            
                                        <th class="text-center" style="width: 10%;">Action</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                   
                        @if($news)  
                        @foreach($news as $key => $p)
                        <tr>
                        <td class="text-center">{{$key +1}}</td>
                        <td class="text-center"> {{ $p->created_at }}</td>
                        <td class="text-center"> {{ $p->title }}</td>
                        <td class="text-center">   
                            <form class="form-horizontal push-5-t" action="{{ url('user-area/news/'.$p->id) }}" method="POST">
                        <input type="hidden" name="_method" value="delete" />    
                        {{csrf_field()}}      
                        <button type="submit" onclick="javascript:return confirm('Are you sure to delete this news')" class="label label-danger"> <i class="fa fa-trash-o"></i></button> 
                        </form>   
                        </td>
                        </tr>
                        @endforeach
                        @endif
                            



                                </tbody>
                            </table>
                    </div>
                </div>
                <!-- END News -->

            </div>
        </div>
        <!-- END Dashboard Charts -->


    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->


@endsection
            
            
            
            