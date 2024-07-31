<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-mb-6 mx-auto d-grid gap-2">
                <form action="{{  url('book_information')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="form-lable">Book Title</label>
        <input type="text" name="book_title" calss="form-control">
        @error('book_title')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Author</label>
        <input type="text" name="author" calss="form-control">
        @error('author')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Description:</label>
    <textarea id="description" name="description"  rows="5" style="width: 100%"></textarea>
        @error('description')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">ISBN:</label>
        <input type="text" name="ISBN" calss="form-control">
        @error('ISBN')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Publish year</label>
    <input type="date" id="publish_year" name="publish_year" value="{{ old('deadline')}}">
        @error('publish_year')
                <div>{{ $message }}</div> 
            @enderror
    <div class="form-group mb-3">
        <button class="btn btn-primary">Save changes</button>
    </div>
    </form>
    @if (session('success'))
        <div>{{ session('success')}}</div>
    @endif
                </div>
            </div>
        </div>
    </div>
