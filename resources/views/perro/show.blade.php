<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile of ') }}{{ $perro->nombre }}
        </h2>
    </x-slot>

    <div class="py-12 pb-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100"> <!--contenedor general-->

                <section style="background-color: #eeeeee;">
                    <div class="container py-3">
                        <div class="row">
                            <div class="col-lg-4 text-center"><!--Ficha perro-->
                                <div class="card mb-4">
                                    <div class="card-body text-center" style="position: relative">
                                        @if ($perro->PPP == 1)
                                            <img src="{{ asset('images/PPP.png') }}" alt="avatarPerro" class="img-fluid"
                                                style="width: 20%; position: absolute;">
                                        @endif
                                        <img src="{{ asset('images/genericDogIcon.webp') }}" alt="avatarPerro"
                                            class="rounded-circle img-fluid m-auto" style="width: 150px;">
                                        <h5 class="my-1 display-4">{{ $perro->nombre }}</h5>
                                        <p class="text-muted fs-3">{{ $perro->raza }}</p>
                                        <p class="text-muted mb-4">
                                            @if ($perro->sexo != 'none')
                                                {{ $perro->sexo }},
                                            @endif
                                            {{ $perro->edad }}{{ $perro->peso ? ', ' . $perro->peso . 'kg' : '' }}
                                        </p>
                                        <div class="d-flex justify-content-center mb-2">
                                            <a href="{{ route('perro.edit', $perro->id) }}"
                                                class="btn btn-warning text-center my-auto mx-2 col-4">{{ __('Edit') }}</a>
                                            <a href="{{ route('sesion.create2', $perro->id) }}"
                                                class="btn btn-success my-auto text-center mx-2 col-4">{{ __('Session +') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-light mb-3" href="{{ route('perro.index') }}"
                                    enctype="multipart/form-data">{{ __('Back to your dogs') }}</a>
                            </div>

                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body"><!--Ficha propi-->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="mb-0">{{ __('Owner') }}</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">{{ $perro->tutor_nombre }}
                                                    {{ $perro->tutor_apellidos }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="mb-0">{{ __('Email') }}</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">{{ $perro->email }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="mb-0">{{ __('Phone number') }}</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">{{ $perro->telefono }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="mb-0">{{ __('Address') }}</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">
                                                    {{ $perro->codigo_postal }}{{ $perro->calle ? '- ' . $perro->calle : '' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><!--ficha1 sesiones-->
                                        <div class="card mb-4 mb-md-0">
                                            <div class="card-body" style="min-height: 383px;">
                                                <p class="mb-4"><span
                                                        class="text-primary font-italic me-1">{{ __('SESSIONS') }}</span>
                                                    {{ __('for') }} {{ $perro->nombre }}
                                                </p>
                                                <ul class="list-group">
                                                    @php
                                                        $index = 1;
                                                    @endphp

                                                    <li class="mb-3">{{ __('Sessions') }}: {{ $totalSesiones }}</li>
                                                    @foreach ($sesiones as $sesion)
                                                        <li class="list-group-item">
                                                            {{$index}}. {{ $sesion->asunto }} ({{ substr($sesion->inicio, 0, 10)  }})
                                                        </li>
                                                        @php
                                                            $index++;
                                                        @endphp
                                                    @endforeach
                                                </ul>
                                                <div class="accordion my-3" id="accordionNotes">
                                                  <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        {{__('Notes')}}
                                                      </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                      <div class="accordion-body">
                                                        @if(!empty($perro->anotaciones) || $perro->anotaciones != "")
                                                        {{$perro->anotaciones}}
                                                        @else
                                                        {{__('There\'s no observations for this dog')}}
                                                        @endif
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"><!--ficha2 recursos-->
                                        <div class="card mb-4 mb-md-0">
                                            <div class="card-body">
                                                <p class="mb-4"><span
                                                        class="text-primary font-italic me-1">{{ __('REPORT') }}</span>
                                                    {{ __('Generate today\'s report') }}
                                                </p>
                                                <form action="{{ route('informe.create') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nombrePDF"
                                                            class="form-label">{{ __('Name your report') }}</label>
                                                        <input type="text" class="form-control" id="nombrePDF"
                                                            name="nombrePDF" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="cuerpo"
                                                            class="form-label">{{ __('Make your report') }}</label>
                                                        <textarea class="form-control" id="cuerpo" name="cuerpo" rows="4" required></textarea>
                                                    </div>
                                                    <input hidden type="text" id="perroPDF" name="perroPDF"
                                                        value="{{ $perro->id }}">
                                                    <div class="mb-3 text-center">
                                                        <button type="submit"
                                                            class="btn btn-primary">{{ __('Generate PDF') }}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>

</x-app-layout>
