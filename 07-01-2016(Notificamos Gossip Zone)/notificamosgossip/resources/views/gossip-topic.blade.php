@extends('layout')
@section('title', 'Gossip Topic')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 mb " >
                <div class="form-section ">
                    {!! Form::open(['class' => 'cmxform mt', 'files'=> 'true', 'id' => 'marchant-form']) !!}
<!--                    <form class="cmxform mt" id="marchant-form" action="" method="post">-->
                        <div class="form-group">
<!--                            <label for="companyname" class="re-form-text">Title:</label>-->
<!--                            <input class="form-control" name="company_name" type="text" id="companyname" placeholder="Product title" >-->
                            {!!Form::label('title','Title',array('class' => 're-form-text'))!!}
                            {!!Form::text('title', null,array('class' => 'form-control','id' => 'title', 'placeholder' => 'Title'))!!}

                        </div>
                        <div class="form-group">
<!--                            <label for="text" class="re-form-text">Description:</label>-->
<!--                            <textarea class="form-control" rows="4" ></textarea>-->
                            {!!Form::label('description','Description',array('class' => 're-form-text'))!!}
                            {!!Form::textarea('description', null,array('class' => 'form-control', 'rows' => 4  ))!!}
                        </div>
                        <div class="form-group">
<!--                            <label for="companyname" class="re-form-text">Product Image:</label><br>-->
                            {!!Form::label('image','Product Image',array('class' => 're-form-text'))!!}
                            <label class="custom-upload"><input type="file" name="upload_file"/>Upload</label>
                        </div>
                        <div class="form-group re-btn mt" >
                            <button type="submit" class="btn btn-primary  btn-lg form-bt pull-right re-btn-text"> SAVE</button>
                        </div>
<!--                    </form>-->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@stop