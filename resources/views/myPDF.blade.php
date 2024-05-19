<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <div style="position: relative; height: 50px; display: flex; align-items: center;">
            <span>{{$nombreperro}}, {{$razaperro}}</span><br>
            <span>Perro de {{$propietario}}</span><br>
            <span>Contacto: {{$telefono}} {{$email}}</span>
            <img style="width: 50px; position: absolute; top: 0; right: 0;" src="{{ public_path('images/Logo_negro.png') }}" alt="Logo">
    </div>
    <h1 style="text-align:center;">{{ $title }}</h1>
    <p style="margin-left: 10px;">{{ $body }}</p><br><br>
    <p style="text-align: right;">{{$date}}</p>
    <p style="text-align: right;">{{ $adiestrador }}</p>
</body>
</html>