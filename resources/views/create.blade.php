<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 p-8">

    <main class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h1 class="text-xl font-bold text-gray-800">Add a New Book</h1>
            <a href="{{ route('books.index') }}" class="text-sm text-gray-500 hover:underline">Back to List</a>
        </div>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Book Title</label>
                <input type="text" name="title" value="{{ old('title') }}" required
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm p-2 bg-gray-50 border">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" value="{{ old('author') }}" required
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm p-2 bg-gray-50 border">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Blurb / Description</label>
                <textarea name="blurb" rows="3" required
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm p-2 bg-gray-50 border">{{ old('blurb') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Rating (1-5)</label>
                <input type="number" name="rating" min="1" max="5" value="{{ old('rating', 5) }}" required
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm p-2 bg-gray-50 border">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white p-2 rounded font-semibold hover:bg-blue-700 transition">
                Save Book to Redis
            </button>
        </form>
    </main>

</body>

</html>