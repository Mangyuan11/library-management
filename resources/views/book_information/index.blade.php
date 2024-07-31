<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-primary">
                    <thead>
                        <tr>
                            <th>Book tile</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>ISBN</th>
                            <th>Publish year</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book_information as $book_information)
                        <tr>
                            <td>{{$book_information->book_title}}</td>
                            <td>{{$book_information->author}}</td>
                            <td>{{$book_information->description}}</td>
                            <td>{{$book_information->ISBN}}</td>
                            <td>{{$book_information->publish_year}}</td>
                            <td>
                                <a href="{{ url('book_infromation', $book_information->id)}}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                                <form action="{{ url('book_information', $book_information->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('delete na ba ?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>