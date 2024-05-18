<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit ') }}{{ $perro->nombre }}
        </h2>
    </x-slot>

    <div class="py-12 pb-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form id="editarPerro" action="{{ route('perro.update', $perro) }}" method="POST" class="row g-4 p-4">
                    @csrf
                    @method('PUT')
                    <div class="col-md-3">
                        <label for="nombre" class="form-label">{{ __('Dog\'s name') }}*</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $perro->nombre }}" required>
                    </div>
                    <div class="col-md-5">
                        <label for="raza" class="form-label">{{ __('Breed') }}</label>
                        <input type="text" class="form-control" id="raza" name="raza" value="{{ $perro->raza }}">
                    </div>
                    <div class="col-md-2">
                        <label for="sexo" class="form-label">{{ __('Sex') }}</label>
                        <select id="sexo" class="form-select" name="sexo">
                            <option value="none" {{ $perro->sexo == 'none' ? 'selected' : '' }}>------</option>
                            <option value="Macho" {{ $perro->sexo == 'Macho' ? 'selected' : '' }}>Macho</option>
                            <option value="Hembra" {{ $perro->sexo == 'Hembra' ? 'selected' : '' }}>Hembra</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="edad" class="form-label">{{ __('Age') }}</label>
                        <input type="text" class="form-control" id="edad" name="edad" value="{{ $perro->edad }}">
                    </div>
                    <div class="col-md-3">
                        <label for="peso" class="form-label">{{ __('Weight') }}</label>
                        <input type="number" min="0" class="form-control" id="peso" name="peso" value="{{ number_format($perro->peso) }}">
                    </div>
                    <div class="col-md-3">
                        <label for="PPP" class="form-label">{{ __('Potentially Dangerous Dog') }}</label>
                        <select id="PPP" name="PPP" class="form-select">
                            <option value="0">No</option>
                            <option value="1">Sí</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="codigo_postal" class="form-label">{{ __('Postal Code') }}</label>
                        <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value="{{ $perro->codigo_postal }}">
                    </div>
                    <div class="col-md-3">
                        <label for="calle" class="form-label">{{ __('Location') }}</label>
                        <input type="text" class="form-control" id="calle" name="calle" value="{{ $perro->calle }}">
                    </div>
                    <div class="col-md-3">
                        <label for="tutor_nombre" class="form-label">{{ __('Owner\'s name') }}*</label>
                        <input type="text" class="form-control" id="tutor_nombre" name="tutor_nombre" value="{{ $perro->tutor_nombre }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="tutor_apellidos" class="form-label">{{ __('Surname') }}</label>
                        <input type="text" class="form-control" id="tutor_apellidos" name="tutor_apellidos" value="{{ $perro->tutor_apellidos }}">
                    </div>
                    <div class="col-md-3">
                        <label for="telefono" class="form-label">{{ __('Phone number') }}*</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $perro->telefono }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $perro->email }}">
                    </div>
                    <div class="col-8 input-group">
                        <span class="input-group-text">{{ __('Notes') }}</span>
                        <textarea id="anotaciones" name="anotaciones" class="form-control" aria-label="With textarea">{{ $perro->anotaciones }}</textarea>
                        </div>
                    
                    <div class="pull-right">
                        <a class="btn mt-3 btn-secondary" href="{{ route('perro.index') }}"
                            enctype="multipart/form-data">{{ __('Back') }}</a>
                        <input type="submit" class="btn mt-3 btn-primary" value="{{ __('Save') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
