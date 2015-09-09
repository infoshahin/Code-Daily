  @extends('layouts.backend.backend')
 @section('content')
      
          <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                
                        
                        <div class="wrapper">                   
                            <div class="row row-wider">
                             
                                <div class="col-md-9">
                                    
                             
                                    
                                    {!! Form::open(['route' => ['executive.update', $editdata->id], 'class' => 'form-inline', 'method' => 'put',  'files'=> 'true']) !!}   
                                   
                                    <div class="form-group-one-unit margin-bottom-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Name English</label> 
                                                    <input type="text" name="title_en" class="form-control" value="{{$editdata->name_en}}" />
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Name Bangla</label>
                                                    <input type="text" name="title_bn" class="form-control"  value="{{$editdata->name_bn}}" />
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Designation English</label>
                                                    <input type="text" name="d_en" class="form-control" value="{{$editdata->designation_en}}"/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Designation English</label>
                                                    <input type="text" name="d_bn" class="form-control" value="{{$editdata->designation_bn}}"/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                        <div class="row">

                                            <div class="col-md-12">
                                             <label>Details English</label>
                                                <div class="form-group form-group-custom">
                                                   
                                                    <textarea  name="details_en" class="form-control" rows="5" cols="15">{{$editdata->details_en}}</textarea>
                                                </div>                        
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                              <label>Details Bangla</label>
                                                <div class="form-group form-group-custom">
                                                  
                                                    <textarea  name="details_bn" class="form-control" rows="5" cols="15">{{$editdata->details_bn}}</textarea>
                                                </div>                        
                                            </div>                                            
                                        </div>
                                         <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Profile <span>Picture</span></label>
                                         {!! HTML::image('images/executive'.$editdata->image, 'a picture', array('width' => '200px','height' => '200px')) !!}
                                        <br/>         
                                        <br>                                                      
                                            <input type="file" class="file btn-primary" name="file_3"/>
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