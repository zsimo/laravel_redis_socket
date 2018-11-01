<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.js"></script>
    </head>
    <body>


        <div id="container"></div>


        <script>

            var socket = io("http://brunelleschi:3001");

            socket.on("connected", function () {
                write("connected");
            });
            
            socket.on("test-channel:event_name", function (data) {
                write(data);
            });


            function write (data) {
                var el = document.createElement("div");
                el.innerText = data;
                document.getElementById("container").appendChild(el);
            }

        </script>

    </body>
</html>
