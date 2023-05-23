@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row pt-3">
       <h5> Enter a new Task</h5>
    </div>
    <div class="row">
        <form action="{{ route('todo.store') }}" method="post" enctype="multipart/form">
            @csrf
            <div class="row pt-3 pb-2">
                <div class="col-8">
                    <input type="text" class="form-control" name="title" id="" placeholder="Enter task">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary mb-3"> Submit </button>
                </div>
            </div>
        </form>
<hr>
        <div class="pt-4">
            <h4>Todo list</h4>
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $key=> $task)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $task ->title }}</td>
                        {{-- <td>{{ $task ->done }}</td> --}}
                        <td>
                            @if ($task->done == 0)
                                <span class="badge bg-warning text-dark">Not completed</span>
                            @else
                                <span class="badge bg-success text-dark">Completed</span>
                            @endif
                        </td>
                        <td>
                            <a  href="{{ route('todo.delete',$task->id) }}" class="text-danger " > delete
                                <i class="fa-solid fa-trash"></i>
                            </a>
                            @if ($task->done == 0)
                                <a href="{{ route('todo.done',$task->id) }}" class="text-success" > done
                                    <i class="fa-light fa-square-check"></i>
                                </a>
                            @else
                            @endif

                        </td>
                    </tr>
                    @endforeach


                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
