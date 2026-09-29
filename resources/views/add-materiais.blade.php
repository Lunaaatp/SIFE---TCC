<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFE - Novo Material</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: #F8FAFC; color: #0F172A; display: flex; flex-direction: column; min-height: 100vh; }

        /* Topbar Header */
        .topbar {
            background: white; border-bottom: 1px solid #E2E8F0; padding: 16px 40px;
            display: flex; justify-content: space-between; align-items: center;
        }
        .brand { display: flex; align-items: center; gap: 10px; font-weight: 800; font-size: 18px; color: #D92B34; }
        .breadcrumb { font-size: 13px; color: #64748B; font-weight: 500; }
        .breadcrumb span { color: #0F172A; font-weight: 600; }

        /* Main Container */
        .container { max-width: 1200px; width: 100%; margin: 0 auto; padding: 32px 20px; flex: 1; }
        .page-title { font-size: 24px; font-weight: 800; margin-bottom: 4px; }
        .page-subtitle { font-size: 14px; color: #64748B; margin-bottom: 24px; }

        /* Grid Layout */
        .grid-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        @media (max-width: 900px) { .grid-layout { grid-template-columns: 1fr; } }

        /* Form Cards */
        .card { background: white; border-radius: 16px; border: 1px solid #E2E8F0; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02); }
        .card-title { font-size: 14px; font-weight: 700; text-transform: uppercase; color: #64748B; letter-spacing: 0.5px; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; }
        .step-number { background: #FEF2F2; color: #D92B34; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 800; }

        /* Form Elements */
        .form-group { margin-bottom: 20px; }
        .label { display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px; }
        .input, .textarea, .select {
            width: 100%; padding: 12px; border: 1px solid #CBD5E1; border-radius: 10px; font-size: 14px;
            outline: none; transition: all 0.2s; background: #FFF;
        }
        .input:focus, .textarea:focus, .select:focus { border-color: #D92B34; box-shadow: 0 0 0 3px rgba(217, 43, 52, 0.1); }

        /* Categories (Chips) */
        .chips-container { display: flex; gap: 8px; flex-wrap: wrap; }
        .chip {
            padding: 8px 16px; border-radius: 20px; border: 1px solid #CBD5E1; font-size: 13px; font-weight: 600;
            color: #475569; cursor: pointer; transition: all 0.2s; user-select: none;
        }
        .chip.active { background-color: #D92B34; color: white; border-color: #D92B34; }

        /* Checkbox List */
        .checkbox-group { display: flex; flex-direction: column; gap: 10px; max-height: 150px; overflow-y: auto; }
        .checkbox-label { display: flex; align-items: center; gap: 10px; font-size: 13px; color: #334155; cursor: pointer; }
        .checkbox-label input { accent-color: #D92B34; width: 16px; height: 16px; }

        /* Dropzone Upload */
        .upload-box {
            border: 2px dashed #CBD5E1; border-radius: 12px; padding: 32px 16px; text-align: center;
            background: #F8FAFC; cursor: pointer; transition: all 0.2s;
        }
        .upload-box:hover { border-color: #D92B34; background: #FEF2F2; }
        .upload-title { font-size: 14px; font-weight: 700; color: #1E293B; margin-top: 8px; }
        .upload-desc { font-size: 12px; color: #64748B; margin-top: 4px; }

        /* Footer Sticky Bar */
        .footer-bar {
            position: sticky; bottom: 0; background: white; border-top: 1px solid #E2E8F0; padding: 16px 40px;
            display: flex; justify-content: space-between; align-items: center; box-shadow: 0 -4px 10px rgba(0,0,0,0.03);
        }
        .btn { padding: 12px 24px; border-radius: 10px; font-size: 14px; font-weight: 700; cursor: pointer; border: none; transition: all 0.2s; }
        .btn-outline { background: transparent; border: 1px solid #CBD5E1; color: #475569; }
        .btn-outline:hover { background: #F1F5F9; }
        .btn-submit { background: #D92B34; color: white; }
        .btn-submit:hover { background: #B91C1C; }
    </style>
</head>
<body>

    <header class="topbar">
        <div class="brand">
            <div style="background:#D92B34; color:white; width:28px; height:28px; border-radius:6px; display:flex; align-items:center; justify-content:center;">S</div>
            SIFE
        </div>
        <div class="breadcrumb">Repositório > <span>Novo Material</span></div>
    </header>

    <main class="container">
        <h1 class="page-title">Publicar Material de Aula</h1>
        <p class="page-subtitle">Preencha os dados e escolha para quais turmas o conteúdo estará visível.</p>

        <form id="newMaterialForm">
            <div class="grid-layout">
                
                <!-- Painel 1: Conteúdo -->
                <div class="card">
                    <div class="card-title"><span class="step-number">1</span> Informações do Conteúdo</div>
                    
                    <div class="form-group">
                        <label class="label">Título do Material *</label>
                        <input type="text" class="input" placeholder="Ex: Guia de Estudo - Prova Regimental Módulo 1" required>
                    </div>

                    <div class="form-group">
                        <label class="label">Categoria de Arquivo</label>
                        <div class="chips-container">
                            <div class="chip active" onclick="selectChip(this)">Apostila</div>
                            <div class="chip" onclick="selectChip(this)">Exercício</div>
                            <div class="chip" onclick="selectChip(this)">Apresentação</div>
                            <div class="chip" onclick="selectChip(this)">Outros</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label">Descrição ou Orientações</label>
                        <textarea class="textarea" rows="4" placeholder="Escreva mensagens ou recomendações para os alunos..."></textarea>
                    </div>

                    <div class="form-group">
                        <label class="label">Data de Liberação (Opcional)</label>
                        <input type="date" class="input">
                    </div>
                </div>

                <!-- Painel 2: Turmas e Upload -->
                <div class="card">
                    <div class="card-title"><span class="step-number">2</span> Destinatários & Arquivo</div>
                    
                    <div class="form-group">
                        <label class="label">Selecione as Turmas Destino *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" checked> Desenvolvimento de Sistemas - DSI01
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox"> Desenvolvimento de Sistemas - DSI02
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox"> Redes de Computadores - RDC01
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label">Upload do Arquivo *</label>
                        <div class="upload-box" onclick="document.getElementById('fileHidden').click()">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="#94A3B8"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/></svg>
                            <div class="upload-title" id="fileTitle">Clique ou arraste seu arquivo aqui</div>
                            <div class="upload-desc">Formatos: PDF, ZIP, DOCX, MP4 (Tamanho máx.: 100MB)</div>
                            <input type="file" id="fileHidden" style="display: none;" onchange="updateFileName(this)">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label">Opções Extras</label>
                        <label class="checkbox-label" style="margin-bottom: 8px;">
                            <input type="checkbox" checked> Enviar notificação para o e-mail dos alunos
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" checked> Permitir download offline do arquivo
                        </label>
                    </div>
                </div>

            </div>
        </form>
    </main>

    <footer class="footer-bar">
        <button type="button" class="btn btn-outline" onclick="window.history.back()">Descartar</button>
        <div style="display: flex; gap: 12px;">
            <button type="button" class="btn btn-outline">Salvar Rascunho</button>
            <button type="submit" form="newMaterialForm" class="btn btn-submit">PUBLICAR CONTEÚDO</button>
        </div>
    </footer>

    <script>
        function selectChip(element) {
            document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
            element.classList.add('active');
        }

        function updateFileName(input) {
            if (input.files.length > 0) {
                document.getElementById('fileTitle').innerText = "📄 " + input.files[0].name;
            }
        }
    </script>

    <!-- VLibras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
</body>
</html>