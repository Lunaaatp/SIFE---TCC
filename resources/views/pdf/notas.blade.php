<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <style>

        body{
            font-family: Arial;
            padding: 30px;
        }

        h1{
            color: #d32f2f;
            margin-bottom: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table th{
            background: #d32f2f;
            color: white;
            padding: 12px;
        }

        table td{
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

    </style>

</head>

<body>

    <h1>
        Boletim Escolar
    </h1>

    <table>

        <tr>
            <th>Disciplina</th>
            <th>Média Final</th>
        </tr>

        @foreach($notas as $nota)

        <tr>

            <td>
                {{ $nota->disciplina }}
            </td>

            <td>
                {{ $nota->media_final }}
            </td>

        </tr>

        @endforeach

    </table>

</body>
</html>