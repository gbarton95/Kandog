<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit session') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <form id="changeSesion" name="editSesion" action="{{ route('sesion.store') }}" method="POST" class="row g-4 p-4">
                    @csrf
                    <div class="col-md-6 p-2">
                        <div class="card text-dark bg-light mb-3 w-100 h-100">
                            <div class="card-header fw-bold uppercase text-lg">{{$perro->nombre}} - {{$perro->tutor_nombre}} {{$perro->tutor_apellidos}}</div>
                            <div class="card-body">
                              <p class="card-text">{{__('Breed')}}: {{$perro->raza}}.</p>
                              <p class="card-text">{{__('Age')}}: {{$perro->edad}}.</p>
                              <p class="card-text">{{__('Notes')}}: {{$perro->anotaciones}}.</p>
                              <p class="card-text">{{__('Sessions')}}: {{$sesionesTotales}}</p>
                            </div>
                          </div>                        
                    </div>
                
                    <div class="col-md-6">
                        <p class="mb-2">{{__('This dog lives in')}} {{$perro->calle}}.<br> {{__('Are you going there?')}}</p>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" id="sameLocation" name="locationOption" value="same" {{ $sesion->ubicacion == $perro->calle ? 'checked' : '' }}>
                            <label class="form-check-label" for="sameLocation">{{__('Yes, same location')}}</label>
                        </div>
                        <div class="form-check mb-1">
                            <input type="radio" class="form-check-input" id="differentLocation" name="locationOption" value="different">
                            <label class="form-check-label" for="differentLocation" {{ $sesion->ubicacion != $perro->calle ? 'checked' : '' }}>{{__('No, I\'m going to a different location')}}</label>
                        </div>
                        <div class="form-group mb-2" id="otherLocationInput" name="otherLocationInput" style="display: none;">
                            <input type="text" class="form-control" id="otherLocation" name="otherLocation" placeholder="{{__('Where?')}}" {{ $sesion->ubicacion != $perro->calle ? 'value="{{$sesion->ubicacion}}"' : '' }}>
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">{{__('Subject')}}</label>
                            <input type="text" class="form-control" id="asunto" name="asunto" placeholder="{{__('Name your session')}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="inicio" class="form-label">Fecha y hora</label>
                            <input type="datetime-local" class="form-control" id="inicio" name="inicio" required>
                        </div>
                        <div class="mb-3">
                            <label for="duracion" class="form-label">{{__('Duration')}}</label>
                            <input type="number" class="form-control" id="duracion" name="duracion" value="45" required>
                        </div>
                    </div>
                    <input type="hidden" name="perro_id" value="{{ $perro->id }}">
                    <!-- Botones -->
                    <div class="col-md-12">
                        <div class="">
                            <a class="btn btn-secondary" href="{{ route('sesion.store') }}" enctype="multipart/form-data">{{ __('Back') }}</a>
                            <input type="submit" class="btn btn-primary" value="{{ __('Add session') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Script para el toggle de la ubicación-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sameLocationRadio = document.getElementById('sameLocation');
            var differentLocationRadio = document.getElementById('differentLocation');
            var otherLocationInput = document.getElementById('otherLocationInput');
    
            function toggleOtherLocationInput() {
                otherLocationInput.style.display = differentLocationRadio.checked ? 'block' : 'none';
            }
    
            toggleOtherLocationInput();
    
            sameLocationRadio.addEventListener('change', toggleOtherLocationInput);
            differentLocationRadio.addEventListener('change', toggleOtherLocationInput);
        });
    </script>
</x-app-layout>