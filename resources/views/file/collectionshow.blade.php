<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Collection') }} {{ $colec->nombre }}
        </h2>
    </x-slot>

    <div class="py-5 pb-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mt-3 display-6">{{ __('Your files in this collection') }}:</h2>
                        </div>
                        @foreach ($files as $file)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <a href="{{ route('file.download', $file) }}">
                                        @if (Str::startsWith($file->type, 'image/'))
                                            <img src="{{ asset('storage/uploads/' . $file->path) }}"
                                                class="card-image-top" alt="thumbnail">
                                        @elseif(Str::startsWith($file->type, 'video/'))
                                            <img src="{{ asset('images/videoPreview.webp') }}" class="card-image-top"
                                                alt="thumbnail">
                                        @else
                                            <img src="{{ asset('images/unknownPreview.png') }}" class="card-image-top"
                                                alt="thumbnail">
                                        @endif
                                        </a>
                                        <h3 class="card-title">{{ $file->filename }}</h3>
                                        {{-- <p class="card-text">{{ $file->description}}</p> --}}
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#editFile{{$file->id}}"><img class="btn-icon2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('Edit')}}" src="{{ asset('images/Edit.webp') }}"></button>
                                            <!--Modal editar-->
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
                                            
                                            <button type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('Delete')}}" data-bs-target="#deleteFile{{ $file->id }}"><img class="btn-icon" src="{{ asset('images/trash.webp') }}"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <x-modal-borrar id="editFile{{ $file->id }}"
        title="{{ __('Edit file') }}" prefix='fil'
        confirmText="{{ __('Save') }}">
        <form action="{{ route('file.edit', $file->id) }}" method="post">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label for="file"
                        class="form-label">{{ __('Select File') }}:</label>
                    <input type="file" name="file" id="file"
                        class="form-control-file">
                </div>
                <div class="mb-3">
                    <label for="filenamee"
                        class="form-label">{{ __('File name') }}:</label>
                    <input type="text" name="filenamee" id="filenamee"
                        placeholder="{{ __('optional') }}"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="asignarColeccion"
                        class="form-label">{{ __('Add your file to a collection') }}</label>
                    <select name="asignarColeccion" id="asignarColeccion"
                        class="form-select">
                        <option value="">-----------</option>
                        @foreach ($colecciones as $coleccion)
                            <option value="{{ $coleccion->id }}">
                                {{ __($coleccion->nombre) }}</option>
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
    </x-modal-borrar> --}}

</x-app-layout>