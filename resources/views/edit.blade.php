@extends('mylayout.main')

@section('content')

					<div class="container-fluid">
						<h4 class="page-title">Task Assigned To {{$task->assignedTo->name}}</h4>


					</div>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="card">
                        <div class="card-header">
                        <div class="row">
                                    <div class="col-md-3"> <button class="btn btn-primary">Add Task</button></div>
                                    <div class="col-md-9"></div>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub">									
                                
                            </div>
                            <form action="{{route('task.update', ['id' => $task->id])}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input name= "title" type="text" class="text form-control" value= "{{$task->title}}">
                                    <label for="">Description</label>
                                    <textarea class = "form-control"name="description" id="" cols="30" rows="5">{{$task->description}}</textarea>
                                    <label for="">Due Date</label>
                                    <input class="form-control" type="date" name="due_date" id="" value="{{$task->due_date}}">

                                    @if($task->created_by == Auth::user()->id)
                                    <label for="">Assign To</label>
                                    <select class="form-control" name="assigned" id="" >
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}" class="form-control"></option>
                                        @endforeach
                                    </select>
                                    @endif

                                    <label for="">Assigned To</label>
                                    <input disabled name= "title" type="text" class="text form-control" value= "{{$task->assignedTo->name}}">

                                    <label for="">Update Status</label>
                                    <select class="form-control" name="status" id="" >
                                        <option value="incomplete" class="form-control">In Progress</option>
                                        <option value="complete" class="form-control">Completed</option>
                                    </select>
                                </div>
                                <button  class = 'btn btn-primary'type="submit">Submit</button>
                                
                            </form>


                            <h2>Add Comment</h2>
                            <form action="{{route('add_comment')}}" method="post">
                                <div class="form-group">
                                    <label for="">Comment</label>
                                    <textarea class= "form-control" name="comment" id="" cols="30" rows="5"></textarea>
                                    <input type="hidden" name="task_id" value="{{$task->id}}">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                        </div>
                        <div class="col-md-6">
                        <div class="card">
                        <div class="card-header">
                        <div class="row">
                                    
                                    <div class="col-md-9"></div>
                                </div>
                        </div>
                        <div class="card-body">
                            <h5>Comments</h5>
                            
                    </div>


                        </div>
                    </div>
                    
@endsection