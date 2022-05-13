@extends('mylayout.main')

@section('content')

					<div class="container-fluid">
						<h4 class="page-title">Dashboard</h4>


					</div>
                    <div class="card">
									<div class="card-header">
                                    
									</div>
									<div class="card-body">
										<div class="card-sub">									
											
										</div>
										<form action="{{route('task.store')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input name= "title" type="text" class="text form-control">
                                                <label for="">Description</label>
                                                <textarea class = "form-control"name="description" id="" cols="30" rows="5"></textarea>
                                                <label for="">Due Date</label>
                                                <input class="form-control" type="date" name="due_date" id="">
                                                <label for="">Assign To</label>
                                                <select class="form-control" name="assigned" id="" >
                                                    @foreach($users as $user)
                                                    <option value="{{$user->id}}" class="form-control">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button  class = 'btn btn-primary'type="submit">Submit</button>
                                            
                                        </form>
									</div>
								</div>
					
@endsection