<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your files') }}
        </h2>
    </x-slot>

    <div class="py-5 pb-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <!--Botones-imagenes de subida y coleccion-->
                <div class="container-fluid">
                    <div class="row text-center">
                        <div class="col-12 col-md-6">
                            <img src="{{ app()->getLocale() == 'es' ? asset('images/subirArchivo.png') : asset('images/uploadFile.png') }}" alt="{{ __('Upload file') }}"
                                data-bs-toggle="modal" data-bs-target="#nuevoArchivo" class="btn img-fluid"
                                style="width: 300px; max-width: 100%;">
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <img src="{{ app()->getLocale() == 'es' ? asset('images/crearColeccion.png') : asset('images/createCollection.png') }}" alt="{{ __('Create collection') }}"
                                data-bs-toggle="modal" data-bs-target="#nuevaColeccion" class="btn img-fluid"
                                style="width: 350px; max-width: 100%;">
                        </div>
                    </div>
                </div>
                <!--fin botones-->

                <!--modal para subir archivos-->
                <div class="modal fade" id="nuevoArchivo" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <legend>{{ __('Upload file') }}</legend>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <div class="mb-3">
                                            <label for="file" class="form-label">{{ __('Select File') }}:</label>
                                            <input type="file" name="file" id="file"
                                                class="form-control-file">
                                        </div>
                                        <div class="mb-3">
                                            <label for="filename" class="form-label">{{ __('File name') }}:</label>
                                            <input type="text" name="filename" id="filename" placeholder="{{__('optional')}}"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="asignarColeccion"
                                                class="form-label">{{ __('Add your file to a collection') }}</label>
                                            <select name="asignarColeccion" id="asignarColeccion" class="form-select">
                                                <option value="">-----------</option>
                                                @foreach ($colecciones as $coleccion)
                                                    <option value="{{$coleccion->id}}">{{ __($coleccion->nombre) }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">{{ __('Back') }}</button>
                                            <button type="submit" id="saveBtn"
                                                class="btn btn-primary">{{ __('Save') }}</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modal para crear colecciones-->
                <div class="modal fade" id="nuevaColeccion" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ __('Create collection') }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('file.storeCollection') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nombre">{{ __('Enter collection name') }}:</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control-file">
                                        <label for="descripcion">{{ __('Brief description') }}:</label>
                                        <input type="text" name="descripcion" id="descripcion"
                                            class="form-control-file">
                                        <input hidden type="file" name="imagenCabecera" id="imagenCabecera"
                                            class="form-control-file">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">{{ __('Back') }}</button>
                                        <button type="submit" id="saveBtn"
                                            class="btn btn-primary">{{ __('Save') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 py-3">
                            <div class="card">
                                <div class="card-header personal-card-header">{{ __('My files') }}</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach ($files as $file)
                                            <li class="list-group-item d-flex justify-between">
                                                <a style="max-width: 50%"
                                                    href="{{ route('file.download', $file) }}">
                                                       {{ $file->filename }}                                               
                                                </a>
                                                <div class="d-flex gap-1">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#editFile{{ $file->id }}"
                                                            class="btn btn-warning ml-auto btn-sm h-80 asleep">{{ __('Edit') }}
                                                        </button>
                                                    <div class="modal fade" id="editFile{{$file->id}}" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header d-flex justify-content-center">
                                                                    <h5 class="modal-title fw-bold fs-3" style="text-align: left; margin-right: auto;">{{__('Edit file')}}</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                <form action="{{ route('file.edit', $file->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <fieldset>
                                                                        <div class="mb-3">
                                                                            <label for="filename" class="form-label">{{ __('File name') }}:</label>
                                                                            <input type="text" name="filename" id="filename" placeholder="{{$file->filename}}"
                                                                                class="form-control" value="{{$file->filename}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="asignarColeccion"
                                                                                class="form-label">{{ __('Add your file to a collection') }}</label>
                                                                                <select name="asignarColeccion" id="asignarColeccion" class="form-select">
                                                                                <option value="">-----------</option>
                                                                                @foreach ($colecciones as $coleccion)
                                                                                    <option value="{{$coleccion->id}}">{{ __($coleccion->nombre) }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">{{ __('Back') }}</button>
                                                                            <button type="submit" id="saveBtn"
                                                                                class="btn btn-primary">{{ __('Save') }}</button>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('file.destroy', $file->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#deleteFile{{ $file->id }}"
                                                            class="btn btn-danger ml-auto btn-sm h-80 asleep">{{ __('Delete') }}
                                                        </button>
                                                            <x-modal-borrar id="deleteFile{{ $file->id }}"
                                                                title="{{__('Delete file')}}" prefix='fil' confirmText="{{__('Delete')}}">
                                                                <span style="color: red">{{strtoupper(__("Warning"))}}</span>: {{__("You are going to delete")}}  <b>{{$file->filename}}</b><br>
                                                                {{__("Are you sure?")}}
                                                            </x-modal-borrar>
                                                    </form>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 d-md-none text-center">
                            <img src="{{ asset('images/crearColeccion.png') }}" alt="{{ __('Create collection') }}"
                                data-bs-toggle="modal" data-bs-target="#nuevaColeccion" class="btn img-fluid"
                                style="width: 350px; max-width: 100%;">
                        </div>

                        <div class="col-12 col-md-6 py-3">
                            <div class="card">
                                <div class="card-header personal-card-header">{{ __('Collections') }}</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach ($colecciones as $coleccion)
                                            <li>
                                                <a href="{{ route('collection.show', $coleccion->id) }}">
                                                    <div class="card mb-3" style="max-width: 540px;">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="{{ $coleccion->imagenCabecera }}"
                                                                    class="img-fluid rounded-start"
                                                                    alt="imagen_coleccion">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h2 class="card-title fs-4">
                                                                        {{ $coleccion->nombre }}</h2>
                                                                    <p class="card-text">{{ $coleccion->descripcion }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
