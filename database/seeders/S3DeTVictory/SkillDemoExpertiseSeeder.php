<?php
declare(strict_types=1);

namespace Database\Seeders\S3DeTVictory;

use App\Enums\S3DeTVictory\SkillOriginEnum;
use App\Enums\S3DeTVictory\SkillTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillDemoExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('s3detv_skills')->upsert([
            [
                'name' => 'Animais',
                'description' => 'Você sabe cuidar, adestrar, cavalgar e lidar com animais e outras criaturas'
                    . ' irracionais. Pode substituir Medicina (apenas para animais). Com bons resultados nos testes,'
                    . ' você consegue até se comunicar com animais.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Arte',
                'description' => 'Você sabe fazer performances artísticas como cantar, dançar, tocar música, cozinhar,'
                    . ' fazer cosplay (e se disfarçar), desenhar, avaliar objetos de arte e outras.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Esporte',
                'description' => 'Você conhece os muitos tipos de esportes e suas regras, além de ser capacitado'
                    . ' em atividades físicas como correr, escalar, nadar, fazer acrobacias, equilibrar-se, saltar e'
                    . ' outras.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Influência',
                'description' => 'Você sabe convencer outros a acreditar em algo ou fazer o que você quer.'
                    . ' Envolve coisas como diplomacia, liderança, intimidação, sedução, blefe, hipnose, lábia,'
                    . ' barganha, obter informações e outros.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Luta',
                'description' => 'Você sabe atacar e se defender em combate, seja corpo a corpo ou à distância ou...'
                    . ' Ah, você já anotou na ficha. Deixa pra lá.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Manha',
                'description' => 'Você sabe fazer coisas malandras ou ilegais, como construir (e sabotar)'
                    . ' armadilhas, arrombar portas e fechaduras, bater carteiras, criar (e decifrar) mensagens'
                    . ' criptografadas, se disfarçar, falsificar objetos, ser furtivo, intimidar, rastrear pistas e'
                    . ' pegadas…',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Máquinas',
                'description' => 'Você sabe operar, construir e consertar máquinas, veículos e aparelhos de'
                    . ' todo tipo. Também sabe lidar com computadores, hackear sistemas, vasculhar a internet,'
                    . ' jogar games ou agir em simulações e realidades virtuais. Pode substituir Medicina (apenas'
                    . ' para construtos).',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Medicina',
                'description' => 'Você sabe realizar primeiros socorros, diagnósticos, tratar doenças e venenos,'
                    . ' realizar cirurgias e todo tipo de conhecimento de saúde. Pode despertar um personagem'
                    . ' inconsciente ou estabilizar um personagem quase morto.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Mística',
                'description' => 'Você sabe sobre forças sobrenaturais e artes místicas. Quando atacar ou se'
                    . ' defender com poderes mágicos ou sobrenaturais, use esta perícia. Também é usada para'
                    . ' reconhecer, contra-atacar e teorizar sobre conhecimentos ocultos, magia e criaturas mágicas.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Percepção',
                'description' => 'Você sabe usar seus sentidos para perceber melhor o mundo ao redor.'
                    . ' Usada para ouvir ruídos muito baixos, notar coisas e personagens distantes, escondidos ou'
                    . ' sob disfarce, ler lábios, rastrear pistas, evitar ser surpreendido e até mesmo como um “sexto'
                    . ' sentido” para tentar notar se alguém está mentindo ou agindo de forma suspeita.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Saber',
                'description' => 'Você sabe tudo sobre tudo, qualquer conhecimento teórico em ciências, idiomas e'
                    . ' até assuntos sobrenaturais, ou como e onde pesquisá-los. Note que é uma perícia ampla,'
                    . ' engloba todos os campos, própria para aqueles cientistas exagerados ou super nerds que'
                    . ' sabem de tudo!',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Sustento',
                'description' => 'Você sabe subsistir e se orientar em condições adversas. Pode encontrar e'
                    . ' produzir alimento, construir abrigos, rastrear pistas, reconhecer criaturas selvagens,'
                    . ' construir e sabotar armadilhas, ser furtivo, nadar, prever o clima, entre outros.',
                'type' => SkillTypeEnum::Pericia,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ]
        ], ['name', 'type', 'origin'], ['description', 'cost', 'image_url', 'image_path']);
    }
}
