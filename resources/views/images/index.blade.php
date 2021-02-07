<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Album example for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
            integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUIyJ"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">filename</th>
                    <th scope="col">created at</th>
                    <th scope="col">updated at</th>
                </tr>
            </thead>
            <tbody>
                @if($images->count() > 0) @foreach ($images as $image)
                <tr>
                    <th scope="row">{{$image->id}}</th>
                    <td>{{$image->filename}}</td>
                    <td>{{$image->created_at}}</td>
                    <td>{{$image->updated_at}}</td>
                </tr>
                @endforeach @else
                <tr>
                    <th scope="row">Table is empty</th>
                </tr>
                @endif
            </tbody>
        </table>
        <span class="row">{{$images->links()}}</span>
        <style>
            svg {
                width: 50px;
            }
            .row {
                display: flex;
                align-items: center;
            }
        </style>
    </body>
</html>
