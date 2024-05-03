<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Hotels PHP</title>
</head>

<body>
    <header>

        <div class="container my-3">
            <h1 class="text-center">Hotels</h1>
            <form action="index.php" method="GET">
                <div class="d-flex justify-content-center mb-3">
                    <h5 class="me-2">Filtra: parcheggio</h5>
                    <select name="parking" class="me-2">
                        <option value="all">con parcheggio e senza </option>
                        <option value="0">senza parcheggio</option>
                        <option value="1">con parcheggio</option>
                    </select>
                    <h5 class="me-2">voto</h5>
                    <select name="vote" class="me-2">
                        <option value="all">Tutti</option>
                        <option value="1">1 stella</option>
                        <option value="2">2 stelle</option>
                        <option value="3">3 stelle</option>
                        <option value="4">4 stelle</option>
                        <option value="5">5 stelle</option>
                    </select>
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>
    </header>


</body>

</html>