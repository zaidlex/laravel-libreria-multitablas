<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Styles (No funciona, se necesita poner el css directo en éste archivo-->
    <!-- <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css" > -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        h2 {
            text-align: center;
        }
        tbody td {
            text-align: center;
            letter-spacing: 1px;
            height: 30px;
        }

        tbody tr:nth-child(odd) {
            background-color: #23d3eb;
        }

        tbody tr:nth-child(even) {
            background-color: #63a4ee;
        }

        table {
            background-color: #4bff33;
            width: 100%;
        }
        thead {
            padding: 20px;
            font-style: italic;
            caption-side: bottom;
            color: rgb(12, 12, 12);
            text-align: right;
            letter-spacing: 5px;
            font-size: 20px:
            height: 50px;
        }
    </style>
    
</head>

    <h2> Lista libros </h2>
    
    <table class="table table-striped table-hover">
        <thead class="thead" >
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->Nombre }}</td>
                    <td>{{ $libro->categoria->Nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</html>