<div class="container">
    <div class="row m-2">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-5">
                    <img class="rounded-start img-fluid h-100 object-fit-cover p-2 rounded"
                         src="{{Vite::asset('resources/images/postaire.png')}}" title="{{env('APP_NAME') }}"
                         alt="Card image">
                </div>
                <div class="col-md-7">
                    <div class="card-body  mt-2 ">
                        <img class="card-img-top img-fluid mt-2 mb-2"
                             src="{{Vite::asset('resources/images/logo.png')}}" title="{{env('APP_NAME') }}"
                             alt="Logo image">
                    </div>
                    <div class="card-body  mt-2 ">
                        <h5 class="card-title m-2">{{$projectSlogan}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text mt-2">{{$projectDescription}}</p>
                    </div>
                    <div class="card-body">
                        <div id="countdown">
                            <ul>
                                <li><span id="days"></span>{{__('Days')}}</li>
                                <li><span id="hours"></span>{{__('Hours')}}</li>
                                <li><span id="minutes"></span>{{__('Minutes')}}</li>
                                <li><span id="seconds"></span>{{__('Seconds')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="card-text float-end mb-2">
                            <small class="text-muted">{{__('Last update')}} : {{$lastUpdate}}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var destinationDate = "{{$projectLashDate}}";
    </script>
    @vite(['resources/css/waiting.css', 'resources/js/waiting.js'])
</div>
