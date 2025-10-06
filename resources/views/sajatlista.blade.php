@extends('pastellayout')
@section('content')
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
@endsection

@section('cim')
Bevásló Lista
@endsection
