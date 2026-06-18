<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books on Redis!</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 p-8">

    <main class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <nav class="flex justify-between items-center border-b pb-4 mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Books on Redis!</h1>
            <a href="{{ route('books.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 dynamic-btn">
                Add a new book
            </a>
        </nav>

        <div class="space-y-4">
            @if(count($books) === 0)
            <p class="text-gray-500 text-center py-4">No books found in Redis. Try adding one!</p>
            @else
            @foreach($books as $book)
            <div class="border p-4 rounded-lg bg-gray-50 shadow-sm card">
                <h2 class="text-xl font-semibold text-blue-900">{{ $book['title'] ?? 'Unknown Title' }}</h2>
                <p class="text-sm text-gray-600 italic">By {{ $book['author'] ?? 'Unknown Author' }}</p>
                <p class="mt-2 text-gray-700">{{ $book['blurb'] ?? 'No description available.' }}</p>
                <div class="mt-3 inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded font-semibold">
                    Rating: {{ $book['rating'] ?? 'N/A' }} / 5
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </main>

</body>

</html>