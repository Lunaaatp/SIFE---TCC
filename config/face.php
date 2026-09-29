<?php

return [
    // Similaridade mínima (cosseno, 0 a 1) para aceitar o rosto como "da pessoa X".
    // Ajuste testando com os seus alunos: mais alto = mais rígido.
    'threshold' => (float) env('FACE_MATCH_THRESHOLD', 0.65),

    // Diferença mínima entre o 1º e o 2º colocado, para evitar confundir dois alunos parecidos.
    'margin' => (float) env('FACE_MATCH_MARGIN', 0.05),

    // Quantas amostras (embeddings) guardar por aluno.
    'max_amostras' => (int) env('FACE_MAX_AMOSTRAS', 5),
];
