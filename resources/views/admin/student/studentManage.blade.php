@extends('admin.master')

@section('page-head')

Student Manage

@endsection


@section('mainContent')

<div class="panel-body">



 {{ Session::get('msg')}}


    {{ Session::get('edit')}}

     {{ Session::get('del')}}

<a target="_blank" style="float:right;" class="btn btn-primary" href="{{ url('/student/add')}}">ADD</a>

<br><br>
     
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Teacher Name</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                	<?php $i = 0 ; ?>

                                	@foreach($stuManage as $manage)
                                    <tr class="odd gradeX">
                                        <td> {{ ++$i }}</td>
                                        <td>{{ $manage->lastname }}</td>
                                        <td>{{ $manage->firstname}}</td>

                                        <td>{{ $manage->teachername}}</td>
                                      
                                        <td class="center" > <a   style="color:white;" class="btn btn-success" href="{{ url('/student/edit/'.$manage->id) }}"  target="_blank" > EDIT </a>  <a    style="color:white;"  class ="btn btn-danger"  href="{{ url('/student/delete/'.$manage->id)}}"> DELETE </a></td>
                                    </tr>

                                    @endforeach

                                </tbody>

                            </table>
                        </div>

@endsection