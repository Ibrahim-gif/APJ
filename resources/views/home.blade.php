@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                      <title>Results</title>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
                      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->




                    <div class="container">
                      <h2>Results</h2>

                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>SUBJECT</th>
                            <th>INTERNALS-1</th>
                            <th>INTERNALS-2</th>
                            <th>INTERNALS-3</th>
                            <th>SEMESTER FINALS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                        @foreach ($students as $user)
                        <tr>
                        <td>{{ $user->Subject }}</td>
                        <td>{{ $user->Internals1}}</td>
                        <td>{{ $user->Internals2 }}</td>
                        <td>{{ $user->Internals3}}</td>
                        <td>{{ $user->Finals}}</td>
                        </tr>
                        @endforeach
                          </tr>

                          <div class="col-md-offset-11">
                          <button type="submit" class="button" >
                            <a href="logout">Log Out</a>
                          </button>
                          </div>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
