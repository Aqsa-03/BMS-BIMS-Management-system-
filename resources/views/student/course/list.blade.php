@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
            crossorigin="anonymous">
            <title>Display</title>
        </head>
        <body>
            <div class="container mt-5">

                <center> <h1><u>Course List</u></h1> </center>
                
                <table class="table table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Credit Hours</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $courses as $course)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{  $course->course->name}}</td>
                            <td>{{  $course->course->code}}</td>
                            <td>{{  $course->course->credit_hours}}</td>
                            <td>{{ $course->course->description ?? 'None'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
        </div>
        </body>
        </html>
@endsection