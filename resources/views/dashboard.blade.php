<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 container-fluid"> <!--Contenedor blanco-->
                    <div class="row justify-center">

                        <div class="col-12 col-lg-6">
                            <span class="display-2">{{ __('Welcome') }}, {{ $username }}</span><br>
                            <span style="font-style: italic;">{{ __($curiosidadPerro) }}</span>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3" style="position: relative;">
                            <img class="mt-lg-0" src="{{ asset('images/calendarioDashboard.png') }}"
                                alt="calendario de hoy" style="width: 180px; margin: auto; margin-top:20px;">
                            <p
                                style="text-align: center; min-width: 150px; font-size: 35px; transform: translateY(-150%);">
                                {{ $fechaHoy }}</p>
                        </div>
                        <!--API DEL TIEMPO-->
                        @if ($hoy)
                            <div
                                class="col-10 col-sm-6 col-md-6 col-lg-3 col-xl-3 d-flex flex-col m-3 m-lg-0 cajaTiempo">
                                <div class="d-flex justify-center mt-6 mb-3">
                                    <img class="col-6" src="{{ $hoy['icono'] }}" alt="icono de hoy"
                                        style="max-width: 100px; max-height:80px;">
                                    <div class="col-6">
                                        <p>Zaragoza</p>
                                        <p>{{ $hoy['temp'] }} ºC</p>
                                        <p>{{ $hoy['viento'] }} km/h</p>
                                    </div>
                                </div>
                                <!--Avisos si los hubiera de calor>30ºC, aire>50km/h o lluvias mañana-->
                                @if ($maxTemp)
                                    <div class="alert alert-danger col-12 d-flex p-0 justify-center align-middle">
                                        <img src="{{ asset('images/alertIconSm.png') }}"
                                            style="height: 25px; margin-right:2px; margin-top: 2px;">
                                        <p>{{ __('Today we are reaching') }} {{ $maxTemp }}ºC </p>
                                    </div>
                                @endif
                                @if ($windy)
                                    <div class="alert alert-warning col-12 d-flex p-0 justify-center align-middle">
                                        <img src="{{ asset('images/alertIconSm.png') }}"
                                            style="height: 25px; margin-right:2px; margin-top: 2px;">
                                        <p>{{ __($windy) }} </p>
                                    </div>
                                @endif
                                @if ($lluviaTomorrow)
                                    <div class="alert alert-primary col-12 d-flex p-1 justify-center">
                                        <img src="{{ asset('images/alertIconSm.png') }}"
                                            style="height: 25px; margin-right:2px; margin-top: 2px;">
                                        <p>{{ __('Warning') }}: {{ __($lluviaTomorrow) }} </p>
                                    </div>
                                @endif
                                <!--Fin avisos-->
                            </div>
                        @else
                            <div
                                class="col-12 col-sm-10  col-md-8 col-lg-3 col-xl-2 d-flex flex-col m-3 m-sm-0 cajaTiempo">
                                <span class="text-left">{{ __('Today') }}:</span>
                                <div class="d-flex">
                                    <img class="col-6" src="{{ asset('images/noWicon.webp') }}" alt="icono de hoy"
                                        style="max-width: 80px;">
                                    <div class="col-6 ml-4">
                                        <span>{{ __($no) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!--FIN API TIEMPO-->

                    </div>
                </div>
                <div class="p-6 container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="{{asset("images/CPZaragoza.jpg")}}" alt="mapaZaragoza">
                            </div>
                            <div class="col-12 col-md-6">
                                @if (count($sesionesHoy) > 0)
                                <h2 class="display-5">{{ __('Sessions for today') }}</h2>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">{{ __('Time') }}</th>
                                            <th scope="col">{{ __('Dog') }}</th>
                                            <th scope="col">{{ __('Location') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sesionesHoy as $index => $sesion)
                                            <tr>
                                                @if ($index === 0)
                                                    <td rowspan="{{ count($sesionesHoy) }}" class="textoRotado">{{__('Today')}}</td>
                                                @endif
                                                <td>{{ substr($sesion->inicio, 11, 5) }}</td>
                                                <td>{{ $sesion->perro->nombre }}</td>
                                                <td>{{ $sesion->ubicacion }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="offset-2">
                                    <h2 class="display-6">{{ __('Nothing for today...') }}</h2>
                                    <h2>{{__('Try promoting yourself on your socials!')}}</h2>
                                    <img src="{{asset('images/cute-dog.gif')}}" alt="nothing to see here">
                                    <br><br>
                                    @if(!empty($sesionesProximas) && count($sesionesProximas) > 0) <p>{{__('Your next session is on ')}}{{$sesionesProximas[0]->inicio}}</p> @endif
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
