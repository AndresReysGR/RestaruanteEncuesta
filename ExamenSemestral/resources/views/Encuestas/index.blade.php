<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinions de Tako Kampe</title>
</head>
<body>
    <h1>Opinions de Tako Kampe</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>pregunta1</th>
                <th>pregunta2</th>
                <th>pregunta3</th>
                <th>pregunta4</th>
                <th>pregunta5</th>
                <th>pregunta6</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encuestas as $encuesta)
                <tr>
                    <td>{{$encuesta->id_pregunta1}}</td>
                    <td>{{$encuesta->id_pregunta2}}</td>
                    <td>{{$encuesta->id_pregunta3}}</td>
                    <td>{{$encuesta->id_pregunta4}}</td>
                    <td>{{$encuesta->id_pregunta5}}</td>
                    <td>{{$encuesta->id_pregunta6}}</td>
                    <td>
                        <form method="POST" action="{{ route('encuestas.destroy', $encuesta->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>