<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>


            <?php foreach ($bevasarlolista as $x) { ?>
              <li> <?php echo $x; ?></li>
            <?php } ?>


            @foreach ($bevasarlolista as $listelem)
                <li>{{ $listelem }}</li>
            @endforeach
        </ul>


    </div>
</body>
</html>
