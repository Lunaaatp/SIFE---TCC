<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <style>

        body{
            font-family: Arial;
            padding: 30px;
            background: #f5f5f5;
        }

        .title{
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .subtitle{
            color: gray;
            margin-bottom: 30px;
        }

        .card{
            width: 22%;
            display: inline-block;
            background: white;
            padding: 20px;
            margin-right: 1%;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .small{
            font-size: 12px;
            color: gray;
        }

        .big{
            font-size: 28px;
            font-weight: bold;
            margin-top: 10px;
        }

        .section{
            background: white;
            padding: 20px;
            margin-top: 30px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th{
            background: #d32f2f;
            color: white;
            padding: 10px;
        }

        table td{
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

    </style>

</head>

<body>

    <div class="title">
        Dashboard Acadêmico
    </div>

    <div class="subtitle">
        Relatório Geral do Professor
    </div>

    <div>

        <div class="card">
            <div class="small">Média Frequência</div>
            <div class="big">94.2%</div>
        </div>

        <div class="card">
            <div class="small">Novas Matrículas</div>
            <div class="big">12</div>
        </div>

        <div class="card">
            <div class="small">Evasão</div>
            <div class="big">0.5%</div>
        </div>

        <div class="card">
            <div class="small">Avisos</div>
            <div class="big">342</div>
        </div>

    </div>

    <div class="section">

        <h3>Próximos Eventos</h3>

        <table>

            <tr>
                <th>Evento</th>
                <th>Data</th>
                <th>Horário</th>
            </tr>

            <tr>
                <td>Conselho de Classe</td>
                <td>15/05/2026</td>
                <td>14:00</td>
            </tr>

            <tr>
                <td>Reunião de Pais</td>
                <td>22/05/2026</td>
                <td>19:00</td>
            </tr>

        </table>

    </div>

</body>
</html>