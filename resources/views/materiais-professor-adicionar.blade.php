<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Novo Arquivo - SIFE</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <style>
        body {
            background: #f4f7f9;
            font-family: Arial, sans-serif;
        }

        .container-upload {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .upload-card {
            background: white;
            width: 100%;
            max-width: 600px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .upload-icon {
            width: 70px;
            height: 70px;
            background: #fff5f5;
            color: #d32f2f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin: auto;
            margin-bottom: 20px;
        }

        .btn-sife {
            background: #d32f2f;
            border: none;
        }

        .btn-sife:hover {
            background: #b71c1c;
        }
    </style>
</head>

<body>

<div class="container-upload">

    <div class="upload-card">

        <div class="text-center mb-4">

            <div class="upload-icon">
                <i class="fas fa-file-upload"></i>
            </div>

            <h3 class="fw-bold">
                Adicionar Novo Arquivo
            </h3>

            <p class="text-muted">
                Envie um material para disponibilizar aos alunos.
            </p>

        </div>


        @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('materiais-professor-store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <div class="mb-3">

                <label class="form-label fw-bold">
                    Título do Material
                </label>

                <input
                    type="text"
                    name="titulo"
                    class="form-control form-control-lg"
                    placeholder="Ex: Lista de Exercícios"
                    required
                >

            </div>


            <div class="mb-4">

                <label class="form-label fw-bold">
                    Selecione o Arquivo
                </label>

                <input
                    type="file"
                    name="arquivo"
                    class="form-control form-control-lg"
                    required
                >

                <small class="text-muted">
                    Tamanho máximo: 10 MB
                </small>

            </div>


            <button
                type="submit"
                class="btn btn-danger btn-sife w-100 py-3 fw-bold"
            >

                <i class="fas fa-cloud-upload-alt me-2"></i>

                ENVIAR ARQUIVO

            </button>


            <a
                href="{{ route('materiais-professor') }}"
                class="btn btn-outline-secondary w-100 py-3 mt-3 fw-bold"
            >

                CANCELAR

            </a>

        </form>

    </div>

</div>

</body>
</html>