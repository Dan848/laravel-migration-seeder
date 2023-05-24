@extends("layouts.app")

@section("page_title")
    Home
@endsection

@section("main_content")
<div class="container">
    <div class="row">
        @foreach ($trains as $train)
        <div class="col-12 col-md-4 g-5">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$train["agency"]}}</li>
                  <li class="list-group-item">{{$train["departure_station"]}}</li>
                  <li class="list-group-item">{{$train["arrival_station"]}}</li>
                  <li class="list-group-item">{{$train["departure_time"]}}</li>
                  <li class="list-group-item">{{$train["arrival_time"]}}</li>
                  <li class="list-group-item">{{$train["train_code"]}}</li>
                  <li class="list-group-item">{{$train["number_of_carriages"]}}</li>
                  <li class="list-group-item">{{$train["in_time"]}}</li>
                  <li class="list-group-item">{{$train["deleted"]}}</li>
                </ul>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
