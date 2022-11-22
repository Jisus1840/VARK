<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body
    style="background-color:whitesmoke; font-family:sans-serif; border: solid;border-width:1px; border-radius:5px; border-color:darkblue">
    <div style="padding:20px">
        <table style=" width: 100%">
            <thead>
                <tr>
                    <th colspan="5">
                        <h1 style="font-weight: bold; font-family:sans-serif;color:black;">Resultado Test Personalidad</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h3 colspan="2" style="font-weight:bold; line-height:18px; margin-top:20px">Nombre:</h3>
                    </td>
                    <td>
                        <h3 colspan="2" style="color:darkblue; line-height:18px">{{ $nombre }}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 colspan="2" style="font-weight:bold; line-height:18px">Respuesta del formulario: </h3>
                    </td>
                    <td>
                        <h3 colspan="2" style="color:darkblue; line-height:18px">{{ $resultado }}</h3>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</body>

</html>
