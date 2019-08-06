@extends('theme.default')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Customers</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
 <!-- /.row -->
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add new Customer
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <!-- <form role="form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" >                                            
                                        </div> 
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>-->
                                    {!!Form::open(['action'=>['customersController@update',$customer->id],'method'=>'POST'])!!}
                                        {!! csrf_field() !!}
                                        {{Form::hidden('_method','PUT')}}
                                        {{Form::cmtext('name',$customer->name,['placeholder'=>'Enter the name'])}}
                                        {{Form::cmtext('phone',$customer->phone,['placeholder'=>'Enter the phone'])}}
                                        {{Form::cmtextarea('address',$customer->address,['placeholder'=>'Enter the address'])}}
                                        {{Form::cmsubmit('Submit')}}
                                    {!!Form::close()!!}
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
@endsection           