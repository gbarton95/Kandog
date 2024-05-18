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
                {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#nuevoArchivo"
                    class="btn btn-primary my-3">{{ __('Upload file') }}</button> --}}
                <div class="container-fluid">
                    <div class="row text-center">
                        <div class="col-12 col-md-6">
                            <img src="{{ asset('images/subirArchivo.png') }}" alt="{{ __('Upload file') }}"
                                data-bs-toggle="modal" data-bs-target="#nuevoArchivo" class="btn img-fluid"
                                style="width: 300px; max-width: 100%;">
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <img src="{{ asset('images/crearColeccion.png') }}" alt="{{ __('Create collection') }}"
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
                                <h5 class="modal-title">{{ __('Upload file') }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="file">{{ __('Select File') }}:</label>
                                        <input type="file" name="file" id="file" class="form-control-file">
                                        <input type="text" name="filename" id="filename" class="form-control-file"
                                            placeholder="{{ __('File name') }}">
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

                <div class="modal fade" id="nuevaColeccion" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ __('Create collection') }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="file">{{ __('Select File') }}:</label>
                                        <input type="file" name="file" id="file" class="form-control-file">
                                        <input type="text" name="filename" id="filename" class="form-control-file"
                                            placeholder="{{ __('File name') }}">
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
                                            <li class="list-group-item"><a
                                                    href="{{ route('file.download', $file) }}">{{ $file->filename }}</a>
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
                                            <li class="list-group-item">
                                                <a href="">
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
