<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <main>
            @yield('content')

            @foreach ($gigs as $gig)

                <tr>
                    <th>{{$gig->id}}</th>
                    <th>{{$gig->name}}</th>
                    <th>{{$gig->band_name}}</th>
                    <th>{{$gig->genre}}</th>
                </tr>

            <a href="{{'/gigs/edit' . $gig->id}}">Edit</a>

            @endforeach
        </main>
    </div>

    
    
</body>
</html>