<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #004d98, #c8102e);
            color: #fff;
        }

        button {
            background-color: #a50044;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #F1C40F;
        }
    </style>

</head>

<body class="antialiased">
    <button id="button">Mis jugadores favoritos del FC Barcelona</button>
    <script>
        $(document).ready(function () {
            $('#button').click(function () {

                $.ajax({
                    url: 'http://127.0.0.1:8000/dameJugadores',
                    type: 'get',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert(response.datos);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

</body>

</html>
