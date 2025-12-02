

<!DOCTYPE html>
<html>
<head>
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-200 p-6">

<div class="max-w-5xl mx-auto bg-white p-6 rounded-xl shadow">

    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">Listado de libros</h1>
        <a href="{{ route('libros.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded">Crear libro</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-purple-200">
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Título</th>
                <th class="p-2 border">Autor</th>
                <th class="p-2 border">Fecha</th>
                <th class="p-2 border">Precio</th>
                <th class="p-2 border">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td class="p-2 border">{{ $libro->id }}</td>
                <td class="p-2 border">{{ $libro->titulo }}</td>
                <td class="p-2 border">{{ $libro->autor }}</td>
                <td class="p-2 border">{{ $libro->fecha_publicacion }}</td>
                <td class="p-2 border">${{ $libro->precio }}</td>
                <td class="p-2 border">
                    
                    <a href="{{ route('libros.edit', $libro) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Editar</a>

                    <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('¿Eliminar libro?')" class="bg-red-500 text-white px-3 py-1 rounded">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

</body>
</html>
