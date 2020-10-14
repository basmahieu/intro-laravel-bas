@extends ('layout/layout')

@section('main-title', 'YUMI RAMEN')
@section('title', 'YUMI RAMEN')

@section('image')
<img class="kanji mx-auto d-block  " src="img/japan-kanji.png" alt="Kanji">
@endsection

@section('content')
<div class="container">
    <h2 id="menu">Menu</h2>
    <div class="card-deck">

        <div class="card">

            <img class="img-fluid" src="img/ramen1.png" alt="ramen-food">
            <div class="card-body">
                <h5 class="card-title">Shoyu Ramen</h5>
                <p class="card-text">Chicken broth, half chicken thigh, soy sprouts, mushroom, spring onions</p>
            </div>
        </div>
        <div class="card">
            <img class="img-fluid" src="img/ramen2.png" alt="ramen-food">
            <div class="card-body">
                <h5 class="card-title">Shio Ramen</h5>
                <p class="card-text">Pork broth, 3 pork belly slices, burnt garlic oil, soy sprouts, mushroom, spring onions</p>
            </div>
        </div>
        <div class="card">
            <img class="img-fluid" src="img/ramen3.png" alt="ramen-food">
            <div class="card-body">
                <h5 class="card-title">Miso Ramen</h5>
                <p class="card-text">Pork broth, 3 pork belly slices, soy sprouts, mushroom, spring onions</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection