@extends ('layout.app')


@section('content')
    <main>
        <section class="jumbo">
        </section>

        <section class="current_series bg-dark">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    @foreach ($arrayList as $array )
                    <div class="col">
                        <div class="card border-0">
                            <img class="card-img-top" src="{{$array['thumb']}}" alt="image describing the following array {{$array['title']}}">
                            <div class="card-body">
                                {{$array['title']}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>

        <section class="digital_comics text-white ">
            <div class="container">
                <ul class="list-unstyled d-flex justify-content-between p-5 ">
                    <li>
                        <img src="{{ Vite::asset('resources/img/cell.png') }}" alt=""> DIGITAL COMICS
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/sweater.png') }}" alt="">DC MERCHANDISE
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/sub.png') }}" alt=""> SUBSCRIPTION
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/position.png') }}" alt="">COMIC SHOP LOCATOR
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/buy.svg') }}" alt="">PC POWER VISA
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection