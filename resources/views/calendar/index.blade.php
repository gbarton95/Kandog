<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Calendar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> 
                    <div id='calendario'></div>                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendario = document.getElementById('calendario');
      var calendar = new FullCalendar.Calendar(calendario, 
      {
        locale: 'es',
        initialView: 'dayGridMonth', //más opciones en Fullcalendar views
        events: @json($events)
      });
      calendar.render();
    });
    
    calendar.setOption('locale', 'en');

</script>