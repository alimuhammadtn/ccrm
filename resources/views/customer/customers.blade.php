@extends('theme.default')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables 
                            <span class="pull-right">
                                <a href="/customer/create" class=" btn btn-primary  btn-xs">    
                                    Add New
                                </a>
                            </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>                                       
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($customers as $customer) 
                                    <tr class="even gradeA">
                                        <td class="center">{{$customer->name}}</td>                                       
                                        <td class="center">{{$customer->address}}</td>
                                        <td class="center"> {{$customer->phone}}</td>                                       
                                        <td class="center">

                                            <a href="/customer/{{$customer->id}}/edit" class="btn btn-xs btn-warning">Edit</a>

                                            {!!Form::open(['action'=>["customersController@destroy",$customer->id],'method'=>'POST'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            <button class="btn btn-xs btn-danger">Delete</button>
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>                                  
                                 @endforeach   
                                </tbody>
                            </table>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
@endsection           