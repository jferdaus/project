@extends('admin.customMaster')


@section('page-head')

Activity 

@endsection


@section('mainContent')

<div class="panel-body">



 {{ Session::get('msg')}}


    {{ Session::get('edit')}}

     {{ Session::get('del')}}


     
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                         <th>SL.</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Responsible Person</th>

                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Actual Start</th>
                                        <th>Actual End</th>

                                        <th>Progress</th>
                                        
                                       <!--  <th>Action</th> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                	<?php $i = 0 ; ?>

                                	@foreach($actManage as $manage)
                                    <tr class="odd gradeX">
                                        <td> {{ ++$i }}</td>
                                        <td>{{ $manage->code }}</td>
                                        <td>{{ $manage->name}}</td>
                                        <td>{{ $manage->responsible_person}}</td>
                                      

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                         <td></td>
                                         
                                       <!-- 
                                        <td class="center" > <a   style="color:white;" class="btn btn-success" href="{{ url('/activity/edit/'.$manage->id) }}"  target="_blank" > EDIT </a>  <a    style="color:white;"  class ="btn btn-danger"  href="{{ url('/activity/delete/'.$manage->id)}}"> DELETE </a></td> -->
                                    </tr>

                                    @endforeach
                                </tbody>

                            </table>
                        </div>

@endsection