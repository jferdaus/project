@extends('admin.master')


@section('page-head')
Activity Edit

@endsection



@section('mainContent')


 <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

									


                                 {!!  Form::open(['url' => '/activity/edit/', 'method' => 'post', 'name'=>'editForm', 'role' => 'form']) !!}

                                        <div class="form-group">
                                            <label>Code</label>
                                            <input name="code" value= "{{ $actEdit->code }}" class="form-control">
                                           
                                        </div>
                                        

                                        <div class="form-group">
                                            <label>Activity Name</label>
                                            <input name="name"  value= "{{ $actEdit->name }}" class="form-control">
                                           
                                        </div>



                                        <div class="form-group">
                                            <label>Responsible Person </label>
                                            <select name="responsible_person" class="form-control">

                                             <option name="none" value="none">None</option>
                                              @foreach($user as $val)

                                    <option name="{{ $val->id }}">{{$val->name}}</option>


                                    @endforeach


                                            </select>
                                           
                                        </div>

                                        

                                        <div class="form-group">
                                           
                                            <input type="hidden" name="id" value="{{ $actEdit->id }}"  class="form-control">
                                           
                                        </div>


											<div class="form-group">
                                           
                                            <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                           
                                        </div>
                                        


                                {!! Form::close() !!}
                                </div>

                                <script type="text/javascript">
                                    
document.forms['editForm'].elements['responsible_person'].value = '{{ $actEdit->responsible_person }}' ;


                                </script>
                            </div>
                        </div>
@endsection