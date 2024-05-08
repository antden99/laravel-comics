@extends ('layout.app')

@section('content')
    <main class="bg-dark">
        <div class="container bg-dark">
            <div class="row p-4">
                <div class="col-auto">
                    <div class="card mb-3" style="max-width: 18rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="Comic Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                            <p class="card-text">{{ $comic['series'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $comic['type'] }}</strong></h5>
                            <p class="card-text">{{ $comic['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
