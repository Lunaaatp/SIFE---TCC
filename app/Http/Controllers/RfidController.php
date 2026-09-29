<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class RfidController extends Controller
{
    // =====================================================
    // ATIVAR MODO CADASTRO
    // =====================================================

    public function ativarCadastro()
    {
        Cache::put(
            'rfid_modo',
            'cadastro',
            now()->addMinutes(5)
        );

        Cache::forget('rfid_ultimo_uid');

        return response()->json([
            'success' => true,
            'modo' => 'cadastro',
            'message' => 'Modo cadastro RFID ativado. Aproxime o cartão.'
        ]);
    }

    // =====================================================
    // CONSULTAR STATUS
    // =====================================================

    public function status()
    {
        return response()->json([
            'success' => true,

            'modo' => Cache::get(
                'rfid_modo',
                'normal'
            ),

            'uid' => Cache::get(
                'rfid_ultimo_uid'
            )
        ]);
    }

    // =====================================================
    // CAPTURAR RFID
    // =====================================================

    public function capturar(Request $request)
    {
        try {

            $uid = strtoupper(
                preg_replace(
                    '/\s+/',
                    ' ',
                    trim(
                        $request->input('uid', '')
                    )
                )
            );

            if (!$uid) {

                return response()->json([
                    'success' => false,
                    'message' => 'UID não informado.'
                ], 422);
            }

            // Só aceita cartão no modo cadastro
            if (
                Cache::get('rfid_modo', 'normal')
                !== 'cadastro'
            ) {

                return response()->json([
                    'success' => false,
                    'message' =>
                        'ESP32 não está em modo cadastro.'
                ], 409);
            }

            // Salva temporariamente o UID
            Cache::put(
                'rfid_ultimo_uid',
                $uid,
                now()->addMinutes(5)
            );

            // Volta para o modo normal
            Cache::put(
                'rfid_modo',
                'normal',
                now()->addMinutes(5)
            );

            Log::info(
                'RFID CAPTURADO PARA CADASTRO',
                [
                    'uid' => $uid
                ]
            );

            return response()->json([
                'success' => true,
                'uid' => $uid,
                'message' =>
                    'Cartão capturado com sucesso.'
            ]);

        } catch (\Exception $e) {

            Log::error(
                'ERRO AO CAPTURAR RFID',
                [
                    'erro' => $e->getMessage()
                ]
            );

            return response()->json([
                'success' => false,
                'message' =>
                    'Erro ao capturar cartão.',
                'erro' => $e->getMessage()
            ], 500);
        }
    }

    // =====================================================
    // CANCELAR CADASTRO
    // =====================================================

    public function cancelarCadastro()
    {
        Cache::put(
            'rfid_modo',
            'normal',
            now()->addMinutes(5)
        );

        Cache::forget(
            'rfid_ultimo_uid'
        );

        return response()->json([
            'success' => true,
            'modo' => 'normal'
        ]);
    }
}

