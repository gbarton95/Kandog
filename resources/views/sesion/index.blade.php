<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sessions') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                @if (count($sesionesPendientes) == 0)
                    <p class="py-5 text-center">{{ __('You don\'t have any sessions yet') }}</p>
                @endif

                <!-- Pestañas -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="activesession-tab" data-bs-toggle="tab"
                            data-bs-target="#activesession" role="tab" aria-controls="activesession"
                            aria-selected="true">{{ __('Next sessions') }}</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="lastsession-tab" data-bs-toggle="tab" data-bs-target="#lastsession"
                            role="tab" aria-controls="lastsession"
                            aria-selected="false">{{ __('Last sessions') }}</a>
                    </li>
                </ul>

                <!-- Contenido de las Pestañas -->
                <div class="tab-content">
                    @if (!$sesionesPendientes)
                        <div class="col-12 col-md-3">{{ __('You don\'t have any sessions yet') }}</div>
                    @else
                        <!--SESIONES PENDIENTES-->
                        <div class="tab-pane fade show active" id="activesession" role="tabpanel"
                            aria-labelledby="activesession-tab">
                            <div class="pt-4">
                                <table id="tablaVerSesiones" class="table table-striped table-bordered align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">{{ __('Dog\'s name') }}</th>
                                            <th scope="col">{{ __('Owner') }}</th>
                                            <th scope="col">{{ __('Location') }}</th>
                                            <th scope="col">{{ __('Date') }}</th>
                                            <th scope="col">{{ __('Duration') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sesionesPendientes as $sesion)
                                            <tr>
                                                <td>{{ $sesion->perro->nombre }}</td>
                                                <td>{{ $sesion->perro->tutor_nombre }}
                                                    {{ $sesion->perro->tutor_apellidos }}</td>
                                                <td>{{ $sesion->ubicacion }}</td>
                                                <td>{{ $sesion->inicio }}</td>
                                                <td>{{ $sesion->duracion }} {{ __('minutes') }}</td>
                                                <td class="text-center">
                                                    <div class="mb-1">
                                                        <a href="{{ route('sesion.edit', $sesion->id) }}"
                                                            class="btn btn-warning btn-sm w-100 asleep">{{ __('Edit') }}</a>
                                                    </div>
                                                    <form id="deleteForm{{ $sesion->id }}"
                                                        action="{{ route('sesion.destroy', $sesion->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModalS{{ $sesion->id }}"
                                                            class="btn btn-danger btn-sm w-100 h-80 asleep">{{ __('Delete') }}</button>
                                                        <x-modal-borrar id="deleteModalS{{ $sesion->id }}" prefix="ses"
                                                            title="{{ __('Delete session') }}"
                                                            confirmText="{{ __('Delete') }}">
                                                            {{ __('You are going to delete a session with') }}
                                                            {{ $sesion->perro->nombre }}<br>
                                                            {{ $sesion->inicio }}, {{ $sesion->ubicacion }}.<br>
                                                            {{ __('Are you sure?') }}
                                                        </x-modal-borrar>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-center justify-content-md-end">
                                    {{ $sesionesPendientes->links() }}</div>
                            </div>
                        </div>

                        <!--SESIONES PASADAS ('DONE')-->
                        <div class="tab-pane fade" id="lastsession" role="tabpanel" aria-labelledby="lastsession-tab">
                            <div class="pt-4">
                                <table id="tablaVerSesiones" class="table table-striped table-bordered align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">{{ __('Dog\'s name') }}</th>
                                            <th scope="col">{{ __('Owner') }}</th>
                                            <th scope="col">{{ __('Location') }}</th>
                                            <th scope="col">{{ __('Date') }}</th>
                                            <th scope="col">{{ __('Duration') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sesionesPasadas as $sesion)
                                            <tr class="">
                                                <td>{{ $sesion->perro->nombre }}</td>
                                                <td>{{ $sesion->perro->tutor_nombre }}
                                                    {{ $sesion->perro->tutor_apellidos }}</td>
                                                <td>{{ $sesion->ubicacion }}</td>
                                                <td>{{ $sesion->inicio }}</td>
                                                <td>{{ $sesion->duracion }} {{ __('minutes') }}</td>
                                                <td class="text-center">
                                                    <div class="mb-1">
                                                        <a href="{{ route('sesion.edit', $sesion->id) }}"
                                                            class="btn btn-warning btn-sm w-100 asleep">{{ __('Edit') }}</a>
                                                    </div>
                                                    <form id="deleteForm{{ $sesion->id }}"
                                                        action="{{ route('sesion.destroy', $sesion->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModalS{{ $sesion->id }}"
                                                            class="btn btn-danger btn-sm w-100 h-80 asleep">{{ __('Delete') }}</button>
                                                        <x-modal-borrar id="deleteModalS{{ $sesion->id }}"
                                                            title="{{ __('Delete session') }}"
                                                            confirmText="{{ __('Delete') }}"
                                                            prefix="ses">
                                                            {{ __('You are going to delete a session with') }}
                                                            {{ $sesion->perro->nombre }}<br>
                                                            {{ $sesion->inicio }}, {{ $sesion->ubicacion }}.<br>
                                                            {{ __('Are you sure?') }}
                                                        </x-modal-borrar>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-center justify-content-md-end">{{ $sesionesPasadas->links() }}</div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
