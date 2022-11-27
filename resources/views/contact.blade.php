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
            <h3>Contact</h3>
        </div>

        <h3>
            Store address
        </h3>
        <p>
            Address: 1234 Main Street, Anytown, USA
        </p>

    </main>

    <x-footer />

</body>

</html>
