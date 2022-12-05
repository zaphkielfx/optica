<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TABLA DE CATEGORÍAS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header>
        <img src="https://i.imgur.com/ybUpnJN.png" alt="" width="220px">

    </header>
    <main>
        <h5 class="mt-4 mb-4 text-center"><strong>Reporte de Categorías General</strong></h5>
        <table class="table text-center table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description}}</td>
                        <td>
                            {{ $category->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <p class="mt-3 text-uppercase"><strong>Asesoría Optica D&R</strong></p>
    </footer>
</body>

</html>
