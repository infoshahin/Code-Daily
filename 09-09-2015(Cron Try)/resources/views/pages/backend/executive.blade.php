  @extends('layouts.backend.backend')
 @section('content')
      
            <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                     
                           <!-- page title -->
                        <div class="page-title">                           
                       <a href="{{URL::to('admin-executive-body/create')}}"><button class="btn btn-primary btn-clean">Add New</button></a>
                        </div>                        
                        <!-- ./page title -->

                        <!-- datatables plugin -->
                        <div class="wrapper wrapper-white">
                            <div class="page-subtitle">
                                <h3>DataTables</h3>                               
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Position</th>                                            
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>                               
                                    <tbody>
                                    @foreach($data as $value)
                                        <tr>
                                            <td>
                                            {!! HTML::image('images/executive'.$value->image, 'a picture', array('width' => '100px','height' => '50px')) !!}
                                           </td>
                                            <td>{{$value->name_en}}</td>
                                            <td>{{$value->designation_en}}</td>
                                            <td>{{$value->details_en}}</td>  
                                             <td><a href="{{URL::to('/executive/edit/'. json_encode($value->id))}}" class="btn btn-info btn-xs form-control"> Edit </a> {!! Form::open(['route' => ['executive.destroy', $value->id], 'method' => 'delete']) !!}  {!! Form::submit('Delete', ['class' => 'btn btn-info btn-xs']) !!} {!! Form::close() !!}</td>                                           
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>                        
                        <!-- ./datatables plugin -->
                    
                        
                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2015 <strong>Aqvatarius</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                        
                    </div>
                    <!-- ./page content container -->                                       
                </div>
                <!-- ./page content -->  
@stop