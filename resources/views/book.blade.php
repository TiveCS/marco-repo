<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book</title>

    <style>
        body,
        html,
        * {
            margin: 0;

        }
    </style>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="fluid-container bg-warning px-5 py-5 text-white text-center">
        <h1>Giant Book Supplier</h1>
    </div>

    <x-navbar />

    <main class="container">
        <div class="fluid-container bg-secondary text-white p-4">
            <h3>Book Details</h3>
        </div>

        <img src={{ $book->image }} alt={{ $book->title }} class="col-sm-12">

        <h1>{{ $book->title }}</h1>

        <p>Author: {{ $book->author }}</p>

        <p>Year: {{ $book->year }}</p>

        <p>Category:
            @foreach ($book->categories as $category)
                {{ $category->name }},
            @endforeach
        </p>

        <p>Publisher: {{ $book->publisher->name }}</p>
    </main>

    <x-footer />

</body>

</html>
