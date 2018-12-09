@extends('admin.master')

@section('page-head')

Student Entry

@endsection


@section('mainContent')

 <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

    
<!-- 
									{{ Session::get('msg')}}
 -->

                                 {!!  Form::open(['url' => '/student/save', 'method' => 'post', 'name' => 'entryForm', 'role' => 'form']) !!}

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lastname" class="form-control">
                                           
                                        </div>
                                        

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input name="firstname" class="form-control">
                                           
                                        </div>


                                         <div class="form-group">
                                            <label>Teacher Name</label>
                                            <select name="teachername" class="form-control">

                                                <option name="none" value="none">None</option>
                                    @foreach($user as $val)

                                    <option name="{{ $val->id }}"  value="{{ $val->name }}">{{$val->name}}
                                    </option>


                                    @endforeach

                                            </select>
                                           
                                        </div>



                                        <!--  <div class="form-group">
                                            <label> Class Teacher</label>
                                            <input name="firstname" class="form-control">
                                           
                                        </div>
                                        
 -->

											<div class="form-group">
                                           
                                            <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                           
                                        </div>
                                        


                                {!! Form::close() !!}
                                </div>





                            </div>
                        </div>
@endsection