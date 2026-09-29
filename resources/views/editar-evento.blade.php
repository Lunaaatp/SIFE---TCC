<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIFE - Editar Evento</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        :root {
            --primary-red: #d32f2f;
            --primary-red-soft: #fff5f5;
            --bg-light: #f8f9fa;
            --text-dark: #2d3436;
            --text-muted: #718096;
            --border-color: #edf2f7;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--bg-light);
            color: var(--text-dark);
        }

        /* =========================
           CONTAINER
        ========================== */

        .page-container {
            width: 100%;
            max-width: 1050px;
            margin: 0 auto;
            padding: 45px 30px;
        }

        /* =========================
           CABEÇALHO
        ========================== */

        .top-bar {
            margin-bottom: 28px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #718096;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            transition: 0.2s;
        }

        .back-btn:hover {
            color: var(--primary-red);
        }

        .page-title {
            margin: 22px 0 5px;
            font-size: 1.8rem;
            font-weight: 800;
            color: #1f2937;
        }

        .page-subtitle {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* =========================
           CARD
        ========================== */

        .form-card {
            background: #fff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            box-shadow: var(--card-shadow);
            padding: 32px;
        }

        .form-header {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-bottom: 25px;
            margin-bottom: 28px;
            border-bottom: 1px solid var(--border-color);
        }

        .form-header-icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
        }

        .form-header h2 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 800;
        }

        .form-header p {
            margin: 4px 0 0;
            color: #a0aec0;
            font-size: 0.8rem;
        }

        /* =========================
           SEÇÕES
        ========================== */

        .section-title {
            font-size: 0.9rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f1f5f9;
        }

        .field-group {
            margin-bottom: 22px;
        }

        /* =========================
           FORMULÁRIO
        ========================== */

        .form-label {
            font-size: 0.82rem;
            font-weight: 700;
            color: #4a5568;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            min-height: 48px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 0.88rem;
            color: #2d3748;
            box-shadow: none;
            transition: 0.2s;
        }

        textarea.form-control {
            min-height: 130px;
            resize: vertical;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(211, 47, 47, 0.08);
        }

        .form-control::placeholder {
            color: #b5bec9;
        }

        .input-group-text {
            background: #fff;
            border-color: #e2e8f0;
            color: #a0aec0;
        }

        /* =========================
           BOTÕES
        ========================== */

        .form-actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 12px;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--border-color);
        }

        .btn-cancel {
            min-height: 46px;
            padding: 0 22px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            background: #fff;
            color: #718096;
            font-size: 0.85rem;
            font-weight: 700;
            transition: 0.2s;
        }

        .btn-cancel:hover {
            background: #f8fafc;
            color: #4a5568;
        }

        .btn-save {
            min-height: 46px;
            padding: 0 24px;
            border-radius: 10px;
            border: none;
            background: var(--primary-red);
            color: #fff;
            font-size: 0.85rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 9px;
            transition: 0.2s;
        }

        .btn-save:hover {
            background: #b71c1c;
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(211, 47, 47, 0.2);
        }

        /* =========================
           RESPONSIVO
        ========================== */

        @media (max-width: 600px) {

            .page-container {
                padding: 25px 15px;
            }

            .page-title {
                font-size: 1.4rem;
            }

            .page-subtitle {
                font-size: 0.8rem;
            }

            .form-card {
                padding: 20px;
                border-radius: 15px;
            }

            .form-header {
                padding-bottom: 20px;
                margin-bottom: 22px;
            }

            .form-header-icon {
                width: 42px;
                height: 42px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn-save,
            .btn-cancel {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <main class="page-container">

        <!-- CABEÇALHO -->

        <div class="top-bar">

            <a href="{{ route('index') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Voltar para eventos
            </a>

            <h1 class="page-title">
                Editar Evento
            </h1>

            <p class="page-subtitle">
                Altere as informações do evento cadastrado
            </p>

        </div>

        <!-- FORMULÁRIO -->

        <div class="form-card">

            <div class="form-header">

                <div class="form-header-icon">
                    <i class="fas fa-pen"></i>
                </div>

                <div>
                    <h2>
                        Informações do evento
                    </h2>

                    <p>
                        Atualize os dados abaixo conforme necessário.
                    </p>
                </div>

            </div>

            <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- DADOS PRINCIPAIS -->

                <div class="section-title">
                    Dados principais
                </div>

                <div class="row">

                    <div class="col-12 field-group">

                        <label class="form-label">
                            Título do evento
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="Reunião Pedagógica"
                            placeholder="Digite o título do evento"
                        >

                    </div>

                    <div class="col-md-6 field-group">

                        <label class="form-label">
                            Categoria
                        </label>

                        <select class="form-select">

                            <option>
                                Selecione uma categoria
                            </option>

                            <option selected>
                                Reunião
                            </option>

                            <option>
                                Acadêmico
                            </option>

                            <option>
                                Feriado
                            </option>

                            <option>
                                Cultura & Lazer
                            </option>

                             <option>
                                Outros
                            </option>
    
                        </select>

                    </div>

                    <div class="col-md-6 field-group">

                        <label class="form-label">
                            Público
                        </label>

                        <select class="form-select">

                            <option>
                                Selecione o público
                            </option>

                            <option selected>
                                Professores
                            </option>

                            <option>
                                Alunos
                            </option>

                            <option>
                                Coordenação
                            </option>

                            <option>
                                Todos
                            </option>

                        </select>

                    </div>

                </div>

                <!-- DATA E HORÁRIO -->

                <div class="section-title mt-2">
                    Data e horário
                </div>

                <div class="row">

                    <div class="col-md-4 field-group">

                        <label class="form-label">
                            Data
                        </label>

                        <input
                            type="date"
                            class="form-control"
                            value="2026-09-25"
                        >

                    </div>

                    <div class="col-md-4 field-group">

                        <label class="form-label">
                            Horário de início
                        </label>

                        <input
                            type="time"
                            class="form-control"
                            value="08:00"
                        >

                    </div>

                    <div class="col-md-4 field-group">

                        <label class="form-label">
                            Horário de término
                        </label>

                        <input
                            type="time"
                            class="form-control"
                            value="10:00"
                        >

                    </div>

                </div>

                <!-- LOCAL -->

                <div class="section-title mt-2">
                    Localização
                </div>

                <div class="row">

                    <div class="col-12 field-group">

                        <label class="form-label">
                            Local
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="fas fa-location-dot"></i>
                            </span>

                            <input
                                type="text"
                                class="form-control"
                                value="Sala de Reuniões"
                                placeholder="Digite o local do evento"
                            >

                        </div>

                    </div>

                </div>

                <!-- DESCRIÇÃO -->

                <div class="section-title mt-2">
                    Descrição
                </div>

                <div class="row">

                    <div class="col-12 field-group">

                        <label class="form-label">
                            Descrição do evento
                        </label>

                        <textarea
                            class="form-control"
                            placeholder="Digite uma descrição para o evento"
                        >Reunião para alinhamento das atividades pedagógicas e planejamento das próximas ações.</textarea>

                    </div>

                </div>

                <!-- BOTÕES -->

                <div class="form-actions">

                    <button
                        type="button"
                        class="btn-cancel"
                        onclick="window.location.href='{{ route('index') }}'"
                    >
                        Cancelar
                    <button
                        type="submit"
                        class="btn-save"
                    >

                </div>

            </form>

        </div>

    </main>

</body>
</html>