  @extends('layouts.backend.backend')
 @section('content')
      
          <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                
                        
                        <div class="wrapper">                   
                            <div class="row row-wider">
                             
                                <div class="col-md-9">
                                    
                             
                                    
                                     {!! Form::open(['route' => ['history.update', json_encode(1)], 'method' => 'put']) !!}     
                                    
                                    <div class="form-group-one-unit margin-bottom-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Title English</label>
                                                    <input type="text" name="title_en" class="form-control" value="{{$data->title_en}}"/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Title Bangla</label>
                                                    <input type="text" name="title_bn" class="form-control" value="{{$data->title_bn}}"/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom">
                                                    <label>History English</label>
                                                    <textarea  name="history_en" class="form-control" rows="5">{{$data->description_en}}</textarea>
                                                </div>                        
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom">
                                                    <label>History Bangla</label>
                                                    <textarea  name="history_bn" class="form-control" rows="5">{{$data->description_bn}}</textarea>
                                                </div>                        
                                            </div>                                            
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">                                            
                                            <button class="btn btn-danger pull-right">Save</button>
                                        </div>
                                    </div>
                                     {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                            
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
@stop