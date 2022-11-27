<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
            <h3>Book List</h3>
        </div>

        <!-- BOOK LIST -->

        <div class="fluid-container d-flex flex-row">
            @foreach ($books as $book)
                <div class="card">
                    <img src={{ $book->image }} class="card-img-top" alt={{ $book->title }}>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">by {{ $book->author }}</p>
                        <a href="/books/<?= $book->id ?>" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <x-footer />

</body>

</html>
