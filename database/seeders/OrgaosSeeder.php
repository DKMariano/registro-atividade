<?php

namespace Database\Seeders;

use App\Models\Orgao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrgaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orgaos = [
            ['sigla' => 'SEGOV', 'nome' => 'Secretaria de Governo'],
            ['sigla' => 'GABVP', 'nome' => 'Gabinete do Vice-Prefeito'],
            ['sigla' => 'CGM', 'nome' => 'Controladoria Geral do Município de Salvador'],
            ['sigla' => 'PGMS', 'nome' => 'Procuradoria Geral do Município do Salvador'],
            ['sigla' => 'CASA CIVIL', 'nome' => 'Casa Civil'],
            ['sigla' => 'SECOM', 'nome' => 'Secretaria Municipal de Comunicação'],
            ['sigla' => 'SEMGE', 'nome' => 'Secretaria Municipal de Gestão'],
            ['sigla' => 'SEMIT', 'nome' => 'Secretaria Municipal de Inovação e Tecnologia'],
            ['sigla' => 'SEFAZ', 'nome' => 'Secretaria Municipal da Fazenda'],
            ['sigla' => 'SEDUR', 'nome' => 'Secretaria Municipal de Desenvolvimento e Urbanismo'],
            ['sigla' => 'SECIS', 'nome' => 'Secretaria Municipal de Sustentabilidade e Resiliência'],
            ['sigla' => 'SECULT', 'nome' => 'Secretaria Municipal de Cultura e Turismo'],
            ['sigla' => 'SEMDEC', 'nome' => 'Secretaria Municipal de Desenvolvimento Econômico, Emprego e Renda'],
            ['sigla' => 'SMED', 'nome' => 'Secretaria Municipal da Educação'],
            ['sigla' => 'SMS', 'nome' => 'Secretaria Municipal da Saúde'],
            ['sigla' => 'SEMPRE', 'nome' => 'Secretaria Municipal de Promoção Social, Combate à Pobreza, Esportes e Lazer'],
            ['sigla' => 'SEMUR', 'nome' => 'Secretaria Municipal da Reparação'],
            ['sigla' => 'SPMJ', 'nome' => 'Secretaria Municipal de Políticas para Mulheres, Infância e Juventude'],
            ['sigla' => 'SEINFRA', 'nome' => 'Secretaria Municipal de Infraestrutura e Obras Públicas'],
            ['sigla' => 'SEMAN', 'nome' => 'Secretaria Municipal de Manutenção da Cidade'],
            ['sigla' => 'SEMOP', 'nome' => 'Secretaria Municipal de Ordem Pública'],
            ['sigla' => 'SEMOB', 'nome' => 'Secretaria Municipal de Mobilidade'],
        ];
        Orgao::insert($orgaos);
    }
}
