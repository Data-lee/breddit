<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Breddit</title>

    <!-- Fonts -->


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-size: 14px;
        }

        .container {
            width: 100%;
        }

        #all-subbreddits {
            height: 600px;
            overflow: scroll;
        }

        #posts {
            height: 300px;
            overflow: scroll;
        }
    </style>
    
</head>
<body>
    <div id="nav"></div>
    <div id="content"></div>
    <div id="modal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog"></div>
    <div data-user-id="{{ $userId }}"></div>
    <!-- JavaScripts -->
    <script src="{{ asset('js/bundle.js') }}"></script>

</body>
</html>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
