<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .body {
            width: 100vw;
            height: 100vh;
            background-color: #F7F9F4;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .actionContainer {
            background-color: #E3F0E4;
            width: 40vw;
            border: #1A1A1A solid 3px;
            border-radius: 10px;
            padding: 1% 2%;
        }

        .actionContainerTitle {
            font-family: "Arial";
            font-weight: bold;
            color: #E8A33D;
            font-size: 50px;
        }

        .authInputField {
            width: 95%;
            height: 50px;
            margin-bottom: 5%;
            background-color: #D9D9D9;
            border: #1A1A1A solid 2px;
            border-radius: 7px;
            padding-left: 5px;
            font-family: "Arial";
            font-weight: bold;
            font-size: 30px;
            color: #1A1A1A;
        }

        .authSubmitButton {
            width: 30%;
            justify-content: center;
            background-color: #F7F9F4;
            border: #1A1A1A solid 2px;
            border-radius: 7px;
            height: 50px;
            font-family: "Arial";
            font-weight: bold;
            font-size: 30px;
            color: #1A1A1A;
            margin-right: 5px
        }

        .authBottom {
            margin-bottom: 3%;
            display: flex
        }

        .authErrorText {
            color: red;
            margin-bottom: 0%;
        }

    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<div class="body">
    <div>
        {{ $slot }}
    </div>
</div>
