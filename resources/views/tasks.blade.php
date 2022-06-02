@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                  <div class="panel-category category">
                        <h4>Task List</h4>
                        <div>
                <!-- <span class="burger_menu">Categories</span> -->
            <button type="button" class="shadow-none">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </button>
          </div>
                  </div>
            <div class="heading-addTask">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" placeholder="Add your task..." value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>  Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default heading-addTask">
                    <div class="panel-heading TaskSumit">
                        <h4>Current Tasks</h4>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead class="task-table">
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody class="penal-delete">
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>&nbsp;&nbsp;Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection