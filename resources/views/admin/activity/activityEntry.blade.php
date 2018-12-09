@extends('admin.master')

@section('page-head')

Activity Entry

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

    


                                 {!!  Form::open(['url' => '/activity/save', 'method' => 'post', 'name' => 'entryForm', 'role' => 'form']) !!}

                                        <div class="form-group">
                                            <label>Code</label>
                                            <input name="code" class="form-control">
                                           
                                        </div>
                                        

                                        <div class="form-group">
                                            <label>Activity Name</label>
                                            <input name="name" class="form-control">
                                           
                                        </div>


                                         <div class="form-group">
                                            <label>Responsible Person</label>
                                            <select name="responsible_person" class="form-control">

                                                <option name="none" value="none">None</option>
                                    @foreach($user as $val)

                                    <option name="{{ $val->id }}"  value="{{ $val->name }}">{{$val->name}}
                                    </option>


                                    @endforeach

                                            </select>
                                           
                                        </div>




											<div class="form-group">
                                           
                                            <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                           
                                        </div>
                                        


                                {!! Form::close() !!}
                                </div>





                            </div>
                        </div>
@endsection