<!DOCTYPE html>
<html>
<head>
    <title>Crear libro</title>
       <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-200 p-6">

<div class="max-w-lg mx-auto bg-white p-6 rounded-xl shadow">

    <h1 class="text-2xl font-bold mb-4 text-center">Crear libro</h1>

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf

        <label class="block mb-2">Título</label>
        <input type="text" name="titulo" class="w-full border p-2 rounded mb-3">

        <label class="block mb-2">Autor</label>
        <input type="text" name="autor" class="w-full border p-2 rounded mb-3">

        <label class="block mb-2">Descripción</label>
        <textarea name="descripcion" class="w-full border p-2 rounded mb-3"></textarea>

        <label class="block mb-2">Fecha de publicación</label>
        <input type="date" name="fecha_publicacion" class="w-full border p-2 rounded mb-3">

        <label class="block mb-2">Precio</label>
        <input type="number" step="0.01" name="precio" class="w-full border p-2 rounded mb-3">

        <button class="bg-purple-500 text-white px-4 py-2 rounded-xl">Guardar</button>
    </form>

</div>

</body>
</html>
