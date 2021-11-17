<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\CaracteristicaModel;
use App\Models\EmpreendimentoArquivoModel;
use App\Models\EmpreendimentoCaracteristicaModel;
use App\Models\EmpreendimentoImagemModel;
use App\Models\EmpreendimentoModel;
use App\Models\EmpreendimentoStatusModel;
use CodeIgniter\Database\Seeder;
use Exception;

class EmpreendimentoSeeder extends Seeder
{
    public function run()
    {
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ' .
            'Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, ' .
            'vitae tincidunt risus rutrum.';
        $tipos = explode(',', 'Lançamento,Entregue,Construção');
        $data = [
            'linha_id' => 1,
            'tipo' => $tipos[1],
            'imagem' => 'emp-1.png',
            'video' => 'https://www.youtube.com/embed/ec5ZpPkv2IU',
            'slug' => 'max-derby-boulevard',
            'titulo' => 'MAX DERBY BOULEVARD',
            'palavras_chave' => 'quartos:3 suites,banheiros: 2',
            'descricao' => 'Endereço 000 - Cidade / Estado',
            'conteudo' => $lorem,
            'especificacoes_tecnicas' => '22 andares<br />
7 unidades por andar<br />
Depósitos individuais<br />
Unidades com 25 e 41m²<br />
Vagas de Garagem Rotativas<br />
Suítes / 1 e 2 quartos<br />
1 Banheiro',
            'endereco' => 'Nome da rua, 000, Bairro, Cidade - UF',
            'google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2150.4141573503734!2d-35.081045930337666!3d-8.70324126124086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aa82f4d9138139%3A0xd24d5d011252feb0!2sPraia%20dos%20Carneiros!5e0!3m2!1spt-BR!2sbr!4v1622231977603!5m2!1spt-BR!2sbr',
            'style',
            'javascript',
            'situacao' => 1
        ];
        $y = 0;
        for ($i = 0; $i < 30; $i++) {
            $y++;
            if ($y > 6) {
                $y = 1;
            }

            $data['tipo'] = $tipos[($y-1)] ?? $tipos[($y - 4)];
            $data['imagem'] = 'emp-' . ($y) . '.png';
            $data['titulo'] = 'MAX DERBY BOULEVARD ' . ($i + 1);
            $data['slug'] = 'max-derby-boulevard-' . ($i + 1);
            $this->insert($data);
        }
    }

    private function insert(array $data)
    {
        try {
            $model = new EmpreendimentoModel();
            $id = $model->insert($data);
            $this->insertCaracteristica($id);
            $this->insertArquivos($id);
            $this->insertImagens($id);
            $this->insertStatus($id);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }

    private function insertCaracteristica(int $empreendimentoId)
    {
        try {
            $model = new EmpreendimentoCaracteristicaModel();
            $caracteristicas = new CaracteristicaModel();
            foreach ($caracteristicas->findAll() as $c) {
                $model->insert(['empreendimento_id' => $empreendimentoId, 'caracteristica_id' => $c->id]);
            }
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }

    private function insertStatus(int $empreendimentoId)
    {
        try {
            $model = new EmpreendimentoStatusModel();
            $model->insert([
                'empreendimento_id' => $empreendimentoId,
                'terraplenagem' => 90,
                'fundacao' => 70,
                'revestimento' => 40,
                'alvenaria' => 12,
                'infraestrutura' => 20,
                'acabamento' => 30,
                'total' => 12
            ]);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }

    private function insertArquivos(int $empreendimentoId)
    {
        try {
            $model = new EmpreendimentoArquivoModel();
            foreach (['E-BOOK DO EMPREENDIMENTO', 'PDF COM IMAGENS', 'IMAGENS 3D', 'TABELA DE VALORES'] as $c) {
                $model->insert([
                    'empreendimento_id' => $empreendimentoId,
                    'tabela_valores' => ($c === 'TABELA DE VALORES') ? '1' : '0',
                    'arquivo' => 'teste.pdf',
                    'titulo' => $c
                ]);
            }
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }

    private function insertImagens(int $empreendimentoId)
    {
        try {
            $model = new EmpreendimentoImagemModel();
            $data = [
                'Banner' => [
                    [
                        'imagem' => 'maxdrb-1.jpg',
                        'titulo' => 'maxdrb-1'
                    ],
                    [
                        'imagem' => 'maxdrb-2.jpg',
                        'titulo' => 'maxdrb-2'
                    ],
                    [
                        'imagem' => 'maxdrb-3.jpg',
                        'titulo' => 'maxdrb-3'
                    ],
                    [
                        'imagem' => 'maxdrb-4.jpg',
                        'titulo' => 'maxdrb-4'
                    ],
                ],
                'Fachada' => [
                    [
                        'imagem' => '1.png',
                        'titulo' => 'Fachada 1'
                    ],
                    [
                        'imagem' => '2.png',
                        'titulo' => 'Fachada 2'
                    ],
                    [
                        'imagem' => '3.png',
                        'titulo' => 'Fachada 3'
                    ]
                ],
                'Área de Lazer' => [
                    [
                        'imagem' => '4.png',
                        'titulo' => 'Lazer 4'
                    ],
                    [
                        'imagem' => '5.png',
                        'titulo' => 'Lazer 5'
                    ],
                    [
                        'imagem' => '6.png',
                        'titulo' => 'Lazer 6'
                    ],
                    [
                        'imagem' => '7.png',
                        'titulo' => 'Lazer 7'
                    ],
                    [
                        'imagem' => '8.png',
                        'titulo' => 'Lazer 8'
                    ]
                ],
                'Decorado' => [
                    [
                        'imagem' => '9.png',
                        'titulo' => 'Decorado 9'
                    ],
                    [
                        'imagem' => '10.png',
                        'titulo' => 'Decorado 10'
                    ],
                ],
                'Especificação' => [
                    [
                        'imagem' => 'slide-1.png',
                        'titulo' => 'TERREO'
                    ],
                    [
                        'imagem' => 'slide-1.png',
                        'titulo' => 'VARANDA'
                    ],
                    [
                        'imagem' => 'slide-1.png',
                        'titulo' => 'OUTRO NOME'
                    ]
                ],
                'Obra' => [
                    [
                        'imagem' => '4.png',
                        'titulo' => 'Obra 4'
                    ],
                    [
                        'imagem' => '5.png',
                        'titulo' => 'Obra 5'
                    ],
                    [
                        'imagem' => '6.png',
                        'titulo' => 'Obra 6'
                    ]
                ]
            ];
            foreach ($data as $tipo => $c) {
                foreach ($c as $i) {
                    $i['tipo'] = $tipo;
                    $i['empreendimento_id'] = $empreendimentoId;
                    $model->insert($i);
                }
            }
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }
}
