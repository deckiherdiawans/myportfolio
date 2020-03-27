@extends('main')

@section('title', 'Decki\'s Portfolio - Students')

@section('section')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Student Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                        <p class="card-text">{{$student->email}}</p>
                        <p class="card-text">{{$student->majors}}</p>
                        <a href="/myportfolio/students/{{$student->id}}/edit" class="btn btn-success">Update</a>
                        <form method="post" action="/myportfolio/students/{{$student->id}}" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                        <a href="/myportfolio/students" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection