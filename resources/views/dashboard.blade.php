@extends('mylayout.main')

@section('content')

					<div class="container-fluid">
						<h4 class="page-title">Dashboard</h4>


					</div>
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
										<table class="table mt-3">
											<thead>
												<tr>
													
													<th scope="col">Title</th>
													<th scope="col">Description</th>
													<th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Actions</th>
												</tr>
											</thead>
											<tbody>
											@foreach($tasks as $task)
												<tr>
                                                    
													<td>{{$task->title}}</td>
													<td>{{$task->description}}</td>
													<td>{{$task->completion_status}}</td>
													<td>{{$task->due_date}}</td>
                                                    <td>

													<!-- View A task Action -->
                                                    <a href="{{route('task.edit', ['id' => $task->id])}}" class="btn btn-primary ">View/Edit</a>
													@if($task->created_by == Auth::user()->id)

													<!-- Delete a task form which is sent upon clicking the Delete Link -->
															
									<form id="delete-form" action="{{route('task.destroy')}}" method="POST" style="display: none;">
										{{ csrf_field() }}
										<input type="hidden" name="task_id" class="btn btn-danger delete-user" value="{{$task->id}}">
									</form>
									<a class="btn btn-danger" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="fa fa-power-off"></i> Delete</a>
                                                       @endif
                                                    </td>
                                                    
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
					
@endsection