  @extends('layouts.backend.backend')
 @section('content')
      
          <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                
                        
                        <div class="wrapper">                   
                            <div class="row row-wider">
                             
                                <div class="col-md-9">
                                    
                             
                                    
                                       
                                    {!! Form::open(['url' => '/executive',  'role' => 'form', 'files'=> 'true']) !!}
                                    <div class="form-group-one-unit margin-bottom-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Name English</label> 
                                                    <input type="text" name="title_en" class="form-control" required/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Name Bangla</label>
                                                    <input type="text" name="title_bn" class="form-control"/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Designation English</label>
                                                    <input type="text" name="d_en" class="form-control"/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Designation English</label>
                                                    <input type="text" name="d_bn" class="form-control"/>
                                                </div>                        
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom">
                                                    <label>Details English</label>
                                                    <textarea  name="details_en" class="form-control" rows="5"></textarea>
                                                </div>                        
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom">
                                                    <label>Details Bangla</label>
                                                    <textarea  name="details_bn" class="form-control" rows="5"></textarea>
                                                </div>                        
                                            </div>                                            
                                        </div>
                                         <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Profile <span>Picture</span></label>
                                        <br/>                                                               
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