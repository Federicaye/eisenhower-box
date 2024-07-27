@extends('layouts.admin')
@section('content')
<div class="container">

    <h2>Add a goal</h2>
    <form action="{{route('admin.goals.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="write a name" name="name">
        </div>

        <div class="mb-3">
            <label for="motivation" class="form-label">Motivation</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivation"></textarea>
        </div>

        <div class="row">

            <div class="mb-3 col-6">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline">
            </div>

            <div class="mb-3 col-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-danger">Save</button>
                <button type="reset" class="btn btn-secondary">Reset</button>

            </div>
    </form>
</div>
</div>
@endsection