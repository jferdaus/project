@extends('admin.master')


@section('page-head')
Student Edit

@endsection



@section('mainContent')


 <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

									


                                 {!!  Form::open(['url' => '/student/edit/', 'method' => 'post', 'name'=>'editForm', 'role' => 'form']) !!}

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lastname" value= "{{ $stuEdit->lastname }}" class="form-control">
                                           
                                        </div>
                                        

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input name="firstname"  value= "{{ $stuEdit->firstname }}" class="form-control">
                                           
                                        </div>



                                        <div class="form-group">
                                            <label>Teacher Name</label>
                                            <select name="teachername" class="form-control">

                                             <option name="none" value="none">None</option>
                                              @foreach($user as $val)

                                    <option name="{{ $val->id }}">{{$val->name}}</option>


                                    @endforeach


                                            </select>
                                           
                                        </div>

                                        

                                        <div class="form-group">
                                           
                                            <input type="hidden" name="id" value="{{ $stuEdit->id }}"  class="form-control">
                                           
                                        </div>


											<div class="form-group">
                                           
                                            <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                           
                                        </div>
                                        


                                {!! Form::close() !!}
                                </div>

                                <script type="text/javascript">
                                    
document.forms['editForm'].elements['teachername'].value = '{{ $stuEdit->teachername }}' ;


                                </script>
                            </div>
                        </div>
@endsection