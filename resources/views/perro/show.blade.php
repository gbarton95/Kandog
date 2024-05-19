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
                              @if($perro->PPP==1)
                                <img src="{{asset('images/PPP.png')}}" alt="avatarPerro"
                                class="img-fluid" style="width: 20%; position: absolute;">
                              @endif
                              <img src="{{asset('images/genericDogIcon.webp')}}" alt="avatarPerro"
                                class="rounded-circle img-fluid m-auto" style="width: 150px;">
                              <h5 class="my-1 display-4">{{$perro->nombre}}</h5>
                              <p class="text-muted fs-3">{{$perro->raza}}</p>
                              <p class="text-muted mb-4">
                                @if($perro->sexo!="none")
                                {{$perro->sexo}},
                                @endif
                                {{$perro->edad}}{{ $perro->peso ? ', '.$perro->peso.'kg' : '' }}
                              </p>
                              <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('perro.edit', $perro->id) }}"
                                    class="btn btn-warning text-center my-auto mx-2 col-4">{{ __('Edit') }}</a>
                                <a href="{{ route('sesion.create2', $perro->id) }}"
                                    class="btn btn-success my-auto text-center mx-2 col-4">{{ __('Session +') }}</a>
                              </div>
                            </div>
                          </div>
                          <a class="btn btn-light mb-3"
                                href="{{ route('perro.index') }}" enctype="multipart/form-data">{{ __('Back to your dogs') }}</a>
                        </div>

                        <div class="col-lg-8">
                          <div class="card mb-4">
                            <div class="card-body"><!--Ficha propi-->
                              <div class="row">
                                <div class="col-sm-4">
                                  <p class="mb-0">{{__('Owner')}}</p>
                                </div>
                                <div class="col-sm-8">
                                  <p class="text-muted mb-0">{{$perro->tutor_nombre}} {{$perro->tutor_apellidos}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-4">
                                  <p class="mb-0">{{__('Email')}}</p>
                                </div>
                                <div class="col-sm-8">
                                  <p class="text-muted mb-0">{{$perro->email}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-4">
                                  <p class="mb-0">{{__('Phone number')}}</p>
                                </div>
                                <div class="col-sm-8">
                                  <p class="text-muted mb-0">{{$perro->telefono}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-4">
                                  <p class="mb-0">{{__('Address')}}</p>
                                </div>
                                <div class="col-sm-8">
                                  <p class="text-muted mb-0">{{$perro->codigo_postal}}{{ $perro->calle ? '- ' . $perro->calle : '' }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6"><!--ficha1 sesiones-->
                              <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                  </p>
                                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                  <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6"><!--ficha2 recursos-->
                              <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                  <p class="mb-4"><span class="text-primary font-italic me-1">{{__('REPORTS')}}</span> Informes
                                  </p>
                                  <form action="{{ route('informe.create') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nombrePDF" class="form-label">{{ __('Name of your report') }}</label>
                                        <input type="text" class="form-control" id="nombrePDF" name="nombrePDF" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cuerpo" class="form-label">{{ __('Make report') }}</label>
                                        <textarea class="form-control" id="cuerpo" name="cuerpo" rows="4" required></textarea>
                                    </div>
                                    <input hidden type="text" id="perroPDF" name="perroPDF" value="{{ $perro->id }}">
                                    <div class="mb-3 text-center">
                                        <button type="submit" class="btn btn-primary">{{ __('Generate PDF') }}</button>
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