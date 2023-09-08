<?php
declare(strict_types=1);

namespace Database\Seeders\S3DeTVictory;

use App\Enums\S3DeTVictory\SkillOriginEnum;
use App\Enums\S3DeTVictory\SkillTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillDemoAdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('s3detv_skills')->upsert([
            [
                'name' => 'Aceleração',
                'description' => 'Você se move muito rápido. Pode gastar 1PM para realizar um movimento extra em seu'
                    . ' turno. Você também pode gastar 1PM antes de rolar os dados para receber um Ganho na iniciativa,'
                    . ' ou em testes de Habilidade para correr, fugir ou perseguir um oponente.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => '+Ação',
                'description' => 'Você tem mais Pontos de Ação, além daqueles oferecidos por seu Poder.'
                    . ' Cada vez que compra esta vantagem você recebe +2PA. Então, se tem P3 (3PA) e paga 1'
                    . ' ponto por +Ação, agora tem 5PA.'
                    . ' Você pode comprar esta vantagem várias vezes, para novos aumentos de +2PA.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Acumulador',
                'description' => 'Você junta tranqueiras em casa. Mentira. Quanto mais seus ataques acertam, mais forte'
                    . ' você bate ou argumenta.'
                    . ' Sempre que você acerta um ataque (ou seja, quando causa dano), pode gastar 2PM para'
                    . ' ganhar Poder +1 no ataque seguinte. Se acertar de novo, pode gastar 2PM de novo para P+2.'
                    . ' E assim por diante, até um máximo de P+5 (sempre 2PM por ataque).'
                    . ' Os ataques podem ser contra o mesmo alvo ou alvos diferentes. Se você erra um ataque, ou'
                    . ' por algum motivo deixa de atacar (fazendo qualquer coisa que não causa dano), os bônus'
                    . ' acabam.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Ágil',
                'description' => 'Você tem grande agilidade e coordenação motora. Recebe +2 em testes de Habilidade'
                    . ' envolvendo agilidade, coordenação ou equilíbrio, incluindo testes de Iniciativa.'
                    . ' Você também pode gastar 2PM antes de fazer um desses testes para conseguir acerto crítico'
                    . ' com 5 ou 6.'
                    . ' Você não pode ser Ágil e também Lento.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Ajudante',
                'description' => 'Você tem algo ou alguém com quem pode contar, seja em combate ou outras situações.'
                    . ' O ajudante pode ser uma pessoa — aprendiz, mercenário, clérigo, enfermeiro, mecânico... Ou'
                    . ' algum animal — bicho de estimação, de caça, montaria. Ou um monstro, alien, robô, veículo,'
                    . ' objeto encantado... Qualquer coisa que combine com as habilidades que ele oferece. Assim,'
                    . ' um ajudante Lutador pode ser uma espada mágica inteligente que surge em suas mãos, uma'
                    . ' fadinha apaixonada que torce por sua vitória, ou algum justiceiro misterioso que presta'
                    . ' ajuda e vai embora dizendo “meu trabalho aqui acabou”.'
                    . ' Uma vez por rodada, você pode gastar 3PM para invocar o ajudante. O tipo de ajuda depende'
                    . ' da sua função:'
                    . ' • Curandeiro. Cura 2D PV em você ou outro personagem Perto, ou permite repetir um teste'
                    . ' de Resistência contra algum efeito negativo (paralisia, veneno, doença, tristeza...) após ter'
                    . ' falhado.'
                    . ' • Especialista. Escolha uma perícia. Ganho em um teste com esta perícia, exceto para'
                    . ' defender ou atacar.'
                    . ' • Familiar. Este ajudante sobrenatural gasta 1PM para ser invocado (em vez de 3) e diminui'
                    . ' à metade o custo em PM para usar outra vantagem na rodada.'
                    . ' • Lutador. Ganho em um teste de ataque, ou em testes de defesa por uma rodada.'
                    . ' • Montaria. Concede um movimento extra, ou um Ganho em um teste de iniciativa ou para'
                    . ' correr ou perseguir um oponente. Custa 1PM.'
                    . ' Você pode comprar esta vantagem mais vezes para ter outros ajudantes diferentes (ou um'
                    . ' mesmo ajudante com diferentes funções). Contudo, em ambos os casos, você pode receber'
                    . ' apenas uma ajuda por rodada.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Alcance',
                'description' => 'Seus ataques acertam mais longe.'
                    . ' 1pt Você pode atingir inimigos que estejam Longe sem penalidades, e Muito Longe com uma'
                    . ' Perda.'
                    . ' 2pt Você também pode atingir Muito Longe sem penalidades.'
                    . ' O Alcance também afeta suas outras vantagens. Você pode usar sua Cura em aliados'
                    . ' distantes, ou Magia em alvos afastados. Sem Alcance, a menos que uma vantagem diga o'
                    . ' contrário, você só pode usá-la contra alvos que estejam Perto.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1-2pt
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Anulação',
                'description' => 'Você consegue impedir o alvo de usar um de seus poderes.'
                    . ' Quando alguém usa uma vantagem em sua presença (Longe ou menos), você pode tentar'
                    . ' anular essa vantagem. Gaste 3PM. O alvo faz um teste de R (12) para tentar evitar. Se falhar,'
                    . ' não pode mais usar essa vantagem até o fim da cena, ou até ser derrotado.'
                    . ' Você também pode anular uma vantagem se souber, com antecedência, que o alvo a tem.'
                    . ' Você pode já ter visto ele usar, ou descobrir por ser Telepata, ou já saber disso porque ele é'
                    . ' Famoso ou Infame, ou com um teste de perícia (Saber, Manha, Percepção, 12). Neste caso'
                    . ' além de gastar PM, você precisa usar uma ação.'
                    . ' A cada turno após o primeiro, o alvo pode fazer um teste de R (12) para cancelar o efeito'
                    . ' Apenas uma vantagem pode ser anulada por vez. Se você quiser anular outra vantagem, a'
                    . ' primeira será liberada.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Arena',
                'description' => 'Você se dá melhor em um certo tipo de terreno. Quando está nesse lugar, pode gastar'
                    . ' 5PM para ter Ganho em todos os testes até o fim da cena.'
                    . ' A Arena é escolhida pelo jogador, mas sempre com aprovação do mestre. Algumas sugestões são:'
                    . ' • Água (praia, barcos, chuva, superfície da água, embaixo d\'água)'
                    . ' • Céu (em testes contra oponentes, só vale se ele também está voando)'
                    . ' • Cidades (ruas, telhados, topo de prédio, aposentos, corredores, escadas)'
                    . ' • Ermos (desertos, florestas, montanhas, pântanos, geleiras…)'
                    . ' • Subterrâneo (cavernas, arcas, esgotos)'
                    . ' • Uma categoria de lugares específicos (bares, hospitais, bibliotecas, shoppings…)'
                    . ' • Um único lugar no mundo (provavelmente sua base de operações) e vizinhanças.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Artefato',
                'description' => 'Você possui um item especial, único. Apenas você pode utilizá-lo. Pode ser uma espada'
                    . ' mágica, uma arma de raios experimental ou mesmo um robô gigante, à sua escolha.'
                    . ' Diferente de algum equipamento comum, que não afeta as regras, seu artefato oferece'
                    . ' benefícios de jogo. Cada ponto ao comprar esta vantagem vale 10XP para adquirir itens'
                    . ' especiais descritos em “Recompensas”.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt ou mais
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Ataque Especial',
                'description' => 'Ao fazer um ataque, você pode gastar energia para ativar alguma arma ou técnica'
                    . ' superior. Cada efeito tem seu custo em PM:'
                    . ' • Área. Todos os personagens Perto do alvo também recebem o ataque. 3PM.'
                    . ' • Choque. Reforçando o ataque com sua resolução, você ataca usando Resistência em vez de'
                    . ' Poder. Qualquer bônus ou penalidade que afetaria seu Poder passa a afetar a Resistência.'
                    . ' 2PM.'
                    . ' • Distante. Você pode atingir um passo de distância além. Este ataque é cumulativo com'
                    . ' Alcance (pode atingir até Fora de Alcance!), mas você ainda tem Perda para atacar além de'
                    . ' seu alcance normal. 1PM.'
                    . ' • Espiritual. O alvo perde PM em vez de PV com este ataque. 1PM.'
                    . ' • Investida. Quando ataca um alvo Longe ou mais distante, você também se move até o alvo'
                    . ' com a mesma ação. Você não usa um movimento, mas precisa ser capaz de alcançar esse alvo'
                    . ' com um movimento. 1PM.'
                    . ' • Múltiplo. Você atinge mais alvos que estejam ao alcance. 1PM por alvo extra, até um'
                    . ' máximo igual à Habilidade. Cada alvo faz um teste de defesa separado, mas você usa o'
                    . ' mesmo teste de ataque para todos. Vale apenas para vários alvos: para atacar o mesmo alvo'
                    . ' várias vezes, use Potente para representar o dano dos ataques extras.'
                    . ' • Penetrante. O alvo tem Perda de defesa. 3PM.'
                    . ' • Perigoso. O ataque causa um acerto crítico com 5 ou 6. 1PM.'
                    . ' • Poderoso. Quando consegue um crítico no ataque, você pode gastar 2PM para somar o'
                    . ' Poder mais uma vez.'
                    . ' • Potente. Aumenta o Poder do ataque em P+2. Você pode escolher este benefício mais vezes'
                    . ' (por exemplo, 3pt por um Ataque Especial que gasta 3PM e ataca com P+6). 1PM para cada'
                    . ' P+2.'
                    . ' • Preciso. Calculando bem, você ataca usando Habilidade em vez de Poder. Qualquer bônus'
                    . ' ou penalidade que afetaria seu Poder passa a afetar sua Habilidade. 2PM.'
                    . ' • Titânico. Você supera seus limites e seu potencial! Você tem um crítico automático no'
                    . ' ataque. 5PM.'
                    . ' Você pode comprar esta vantagem mais vezes para ter vários efeitos. Você pode escolher, no'
                    . ' momento do ataque, quais efeitos quer usar ou não. Um Ataque Penetrante e Perigoso, por'
                    . ' exemplo, custa 3PM para ser usado.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Base',
                'description' => 'Você tem uma base de operações, quartel-general, esconderijo, estação orbital,'
                    . ' apartamento, quarto na casa dos pais, ou outro porto seguro onde pode descansar. Ou para onde'
                    . ' pode fugir.'
                    . ' Através de teleporte (ou outro meio que você invente), você pode alcançar sua base em'
                    . ' qualquer situação fora de combate. A critério do mestre, situações de risco ou perigo (como'
                    . ' estar preso em uma armadilha) impedem você de alcançar a base. Você pode levar consigo'
                    . ' um número máximo de aliados igual à sua Habilidade. Note que esta é uma viagem de mão'
                    . ' única — você pode alcançar sua base de qualquer lugar, mas não pode voltar para onde'
                    . ' estava! Para isso, terá que recorrer a outros meios.'
                    . ' Sua base é considerada lugar ideal para descansar e recuperar recursos. Além disso, todos os'
                    . ' seus testes realizados ali têm Ganho.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Carismático',
                'description' => 'Você tem facilidade para fazer com que gostem de você. Recebe +2 em Poder para testes'
                    . ' sociais ou que envolvam interações com outras pessoas.'
                    . ' Você também pode gastar 2PM antes de fazer um desses testes para conseguir acerto crítico'
                    . ' com 5 ou 6.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Confusão',
                'description' => 'Você é capaz de deixar os oponentes tontos.'
                    . ' Faça um ataque e gaste 2PM. Se vencer a defesa do alvo, além de sofrer dano, ele fica'
                    . ' confuso. Nesse estado ele não consegue escolher os alvos de suas perícias ou vantagens,'
                    . ' incluindo ele próprio: os alvos são escolhidos ao acaso pelo mestre.'
                    . ' A confusão dura até o fim da cena, ou até o alvo sofrer dano. A cada turno, o alvo pode fazer'
                    . ' um teste de R (12) para cancelar o efeito.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Cópia',
                'description' => 'Você pode criar cópias exatas de si mesmo, gastando 2PM por cópia e um movimento.'
                    . ' Sempre que você recebe um ataque bem-sucedido, não sofre nenhum dano, mas uma cópia'
                    . ' desaparece. Cópias restantes duram até o fim da cena.'
                    . ' As cópias fazem o que você quiser, mas não realizam ações próprias. Elas podem ajudar em'
                    . ' certas tarefas a critério do mestre (por exemplo, distraindo adversários), gerando Ganho'
                    . ' para testes.'
                    . ' Um atacante com um Sentido adequado pode fazer um teste de Percepção (12) para ignorar'
                    . ' suas cópias e atacar você normalmente.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Cura',
                'description' => 'Você pode curar a si mesmo, ou a alguém que possa tocar.'
                    . ' Você gasta 2PM para curar 1D PV, até um limite de dados igual à Habilidade. Por exemplo,'
                    . ' se tiver H2 você pode curar até 2D PV em um personagem, gastando 4PM.'
                    . ' Você também pode gastar 2PM para que um personagem repita um teste de Resistência'
                    . ' contra algum efeito negativo (paralisia, veneno, doença, chateação...) após ter falhado.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Defesa Especial',
                'description' => 'Ao receber um ataque, você pode gastar energia para ativar alguma técnica de defesa'
                    . ' , como um escudo, campo de força, bloqueio de artes marciais ou cara feia. Cada efeito tem seu'
                    . ' custo em PM:'
                    . ' • Blindada. A defesa consegue acerto crítico com 5 ou 6. 1PM.'
                    . ' • Bloqueio. Você defende usando Poder em vez de Resistência. Qualquer bônus ou'
                    . ' penalidade que afetaria sua Resistência passa a afetar Poder. 2PM.'
                    . ' • Esquiva. Você defende usando Habilidade em vez de Resistência. Qualquer bônus ou'
                    . ' penalidade que afetaria sua Resistência passa a afetar Habilidade. 2PM.'
                    . ' • Proteção. Você ajuda um aliado a se defender. Se um personagem Perto de você é atacado,'
                    . ' você pode ativar a vantagem e usar sua defesa em vez da dele, com quaisquer manobras ou'
                    . ' recursos que quiser. Se mesmo assim o ataque causa dano, é o aliado que o recebe. 1PM por'
                    . ' aliado.'
                    . ' • Provocação. Você atrai sobre si um ataque contra um aliado, recebendo-o em seu lugar. Se'
                    . ' um personagem Perto de você é atacado, você pode ativar a vantagem e receber esse ataque'
                    . ' no lugar dele. Você usa sua defesa normalmente, com quaisquer manobras ou recursos que'
                    . ' quiser. Se mesmo assim o ataque causa dano, é você que o recebe. 1PM.'
                    . ' • Reflexão. Você devolve o golpe para o oponente. Caso sua defesa seja maior que o ataque do'
                    . ' adversário, ele sofre dano igual à diferença. 1PM.'
                    . ' • Robusta. Quando consegue um crítico na defesa, pode gastar 2PM para somar Resistência'
                    . ' mais uma vez.'
                    . '  Tenaz. +2 na defesa. Você pode escolher este benefício mais vezes (por exemplo, 4pt por'
                    . ' uma Defesa Especial que gasta 4PM e defende com +8). 1PM para cada +2.'
                    . ' • Titânica. Você supera seus limites e seu potencial! Você tem um crítico automático na'
                    . ' defesa, e ela será considerada perfeita com qualquer resultado. 5PM.'
                    . ' Você pode comprar esta vantagem mais vezes para ter vários efeitos. Você pode escolher, no'
                    . ' momento da defesa, quais efeitos quer usar ou não. Uma Defesa Blindada e Tenaz ×2, por'
                    . ' exemplo, custa 3PM para ser usada.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Desgaste',
                'description' => 'Mesmo depois do ataque, seu alvo sofre mais dano. Seja por veneno, ácido, queimadura,'
                    . ' radiação, fadiga, dor de barriga, rancor ou o que você inventar.'
                    . ' Faça um ataque e gaste 2PM. Se vencer a defesa do alvo e causar dano, ele vai sofrer o'
                    . ' mesmo dano outra vez na próxima rodada.'
                    . ' O dano extra pode ser evitado se o alvo gasta sua próxima ação para fazer isso — apagando as'
                    . ' chamas na roupa, entoando um mantra, tomando um antiácido ou coisa parecida.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Devoto',
                'description' => 'Você serve a uma causa ou crença. O objeto de sua devoção fica à sua escolha. Uma'
                    . ' entidade espiritual superior, uma filosofia ancestral, os ensinamentos de seu antigo mestre,'
                    . ' uma promessa solene, uma jornada de vingança. Seja qual for, esse grande objetivo guia seus'
                    . ' atos e sua vida.'
                    . ' Ao fazer um teste quando está seguindo ou defendendo sua devoção, você pode gastar 3PM'
                    . ' para ter Ganho. Por exemplo, quando um devoto da justiça defende um injustiçado, ou'
                    . ' quando um devoto da ecologia protege uma área de preservação ambiental.'
                    . ' “Ahn, quero ser Devoto a vencer sempre!” Acha MESMO que não pensamos nisso? Você'
                    . ' pode recorrer à devoção até duas vezes por cena. Não mais de duas.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Elo Mental',
                'description' => 'Você tem uma ligação especial com outro personagem, que pode ser um jogador ou NPC.'
                    . ' Ele também deve ter esta vantagem.'
                    . ' Vocês compartilham os seguintes poderes:'
                    . ' • Enquanto conseguem ver um ao outro, vocês percebem seus pensamentos e se comunicam'
                    . ' sem nenhum sinal aparente.'
                    . ' • Em situações de perigo, você pode gastar PM de seu aliado para seu próprio uso, e'
                    . ' vice-versa.'
                    . ' • Quando você tem Ganho em certo teste, antes de rolar, pode escolher passar esse Ganho'
                    . ' para o aliado. Ele deve usar o Ganho no mesmo tipo de teste, na primeira oportunidade.'
                    . ' Quando não podem ver um ao outro, vocês sentem apenas emoções gerais, mas sempre'
                    . ' sabem em que distância e direção o outro está.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Estender',
                'description' => 'Você pode estender o efeito de suas vantagens a seus companheiros. Ao usar uma'
                    . ' vantagem pessoal (que afeta apenas você), pode gastar 1PM para que ela também funcione com um'
                    . ' aliado Perto. Por exemplo, pode usar Teleporte e levar consigo outros dois personagens'
                    . ' gastando mais 2PM.'
                    . ' Vantagens que atacam ou prejudicam outros alvos não podem ser afetadas por Estender.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Famoso',
                'description' => 'Você é conhecido ao redor do mundo. Quando faz um teste em situações sociais'
                    . ' envolvendo NPCs que o reconhecem (normalmente 1-4 em 1D), pode gastar 3PM para receber Ganho.'
                    . ' Você não pode ser Famoso e também Infame',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Foco',
                'description' => 'Você pode se concentrar para melhorar seu desempenho — seja acumulando energia ki nas'
                    . ' mãos, caprichando na pontaria, reunindo força de vontade ou pensando melhor para'
                    . ' resolver um enigma.'
                    . ' Gaste 2PM e use um turno inteiro se concentrando. Você é considerado indefeso durante'
                    . ' esse tempo e, se sofrer dano, perde a concentração e os PM gastos. No turno seguinte, seu'
                    . ' próximo teste é um crítico automático (atributo dobrado). Você ainda pode rolar mais'
                    . ' críticos normalmente.'
                    . ' Exemplo: um personagem com P2 gasta um turno preparando um argumento infalível e, no'
                    . ' turno seguinte, faz seu teste de Influência. Para esse teste, ele contará com P4.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Forte',
                'description' => 'Você é muito forte. Recebe +2 em testes de Poder para empreender esforço físico, como'
                    . ' levantar peso, derrubar uma porta ou socar vilão.'
                    . ' Você também pode gastar 2PM antes de fazer um desses testes para conseguir acerto crítico'
                    . ' com 5 ou 6.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Gênio',
                'description' => 'Você tem inteligência acima da média. Recebe +2 em testes de Habilidade para resolver'
                    . ' problemas que envolvem conhecimento, inteligência e capacidade de raciocínio.'
                    . ' Você também pode gastar 2PM antes de fazer um desses testes para conseguir acerto crítico'
                    . ' com 5 ou 6.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1,
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Golpe Final',
                'description' => 'Você tem um golpe poderoso que pode finalizar um alvo já enfraquecido.'
                    . ' Gaste 5PM e faça um ataque contra um alvo que esteja perto da derrota. Esse ataque é'
                    . ' elevado uma escala acima.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1,
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Grimório',
                'description' => 'Você tem um grimório de magias, pergaminho monástico, caderno de receitas, manual de'
                    . ' instruções, revistinha de cifras, livro didático, aplicativo de celular ou outra fonte de'
                    . ' conhecimentos contendo segredos de capacidades únicas.'
                    . ' Esta vantagem permite já começar com uma ou mais técnicas (veja em Recompensas). Cada'
                    . ' ponto de Grimório vale 10 XP para adquirir truques ou técnicas comuns (mas não lendárias).'
                    . ' O mestre deve autorizar as técnicas escolhidas.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt ou mais
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Ilusão',
                'description' => 'Você consegue criar ilusões. Uma ilusão é uma imagem tridimensional. Não tem massa ou'
                    . ' substância, não pode ser tocada, nem sofrer ou causar dano (qualquer toque ou ataque'
                    . ' apenas a atravessa). Mas engana os outros sentidos como se fosse real.'
                    . ' Em situações normais, não se pode perceber que algo é uma ilusão. Caso se tente interagir'
                    . ' com ela (talvez tocando-a), ou caso seja algo muito estranho e fora de lugar, um personagem'
                    . ' pode fazer um teste de Percepção. A meta padrão para esse teste é 9 + quantidade de PM'
                    . ' gastos na ilusão, mas o mestre pode mudá-la caso a ilusão seja muito convincente (ou muito'
                    . ' absurda). A vantagem Sentido também ajuda a evitar ser enganado por uma ilusão.'
                    . ' O custo para criar uma ilusão depende de seu tamanho.'
                    . ' 1PM. Algo do tamanho de um livro ou menor.'
                    . ' 4PM. Do tamanho de uma pessoa ou menor.'
                    . ' 6PM. Tamanho de um caminhão.'
                    . ' 10PM. Tamanho de um prédio.'
                    . ' Defina com o mestre custos para ilusões ainda maiores ou de tamanhos intermediários. Uma'
                    . ' ilusão pode ser criada em qualquer ponto que você consiga ver. Criar uma ilusão gasta uma'
                    . ' ação. Depois de criadas, ilusões ficam imóveis. Mover uma ilusão por uma rodada inteira'
                    . ' exige que o personagem gaste um movimento em seu turno (a ilusão só se move depois que'
                    . ' você gastar seu movimento).'
                    . ' Você pode ter mais de uma ilusão ativa por vez (mas mover cada uma usará um movimento).'
                    . ' Uma ilusão se mantém por quanto tempo você quiser, mas você não pode recuperar os PM'
                    . ' usados para criá-la até dissipá-la. A ilusão também desaparece caso você esteja derrotado.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Imitar',
                'description' => 'Você consegue imitar uma das vantagens de seu alvo.'
                    . ' Quando alguém usa uma vantagem em sua presença (Longe ou menos), você pode tentar'
                    . ' imitar essa vantagem. Faça um teste de Percepção (9): se tiver sucesso, você pode gastar'
                    . ' 3PM para adquirir a mesma vantagem até o fim da cena.'
                    . ' Você também pode imitar uma vantagem se souber, com antecedência, que o alvo a tem.'
                    . ' Você pode já ter visto ele usar, ou descobrir por ser Telepata, ou já saber disso porque ele é'
                    . ' Famoso ou Infame, ou com um teste de perícia (Saber, Manha, Percepção, 12). Neste caso,'
                    . ' além de gastar PM, você precisa usar uma ação.'
                    . ' Apenas uma vantagem pode ser imitada por vez. Se conseguir imitar outra vantagem, a'
                    . ' primeira será liberada.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Imortal',
                'description' => 'Você pode ser derrotado, e até tirado de cena por algum tempo, mas não morto. Você é'
                    . ' como o herói espancado, decapitado, feito em mil pedacinhos e jogado no mar — para então'
                    . ' ressurgir cambaleando em alguma praia mais tarde. Como? É um mistério!'
                    . ' Em testes de morte, você nunca tem um resultado pior que inconsciente.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Improviso',
                'description' => 'Na hora do aperto, você consegue usar capacidades que não deveria ter! Você lembra de'
                    . ' alguma lição esquecida, baixa aplicativos da nuvem, recebe iluminação dos deuses, ou é um'
                    . ' impostor tão bom que engana até a si mesmo.'
                    . ' Você pode gastar 5PM para aprender, na hora, uma perícia que não tenha. Você pode usar'
                    . ' essa perícia até o fim da cena.'
                    . ' Você pode improvisar apenas uma perícia por vez. Se improvisar uma nova, vai esquecer a'
                    . ' anterior',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Imune',
                'description' => 'Você é imune a algo que normalmente afeta outras criaturas.'
                    . ' • Abiótico. Você não tem necessidades biológicas básicas, como comer, beber, respirar ou'
                    . ' dormir (mas ainda precisa de descanso para recuperar recursos).'
                    . ' • Anfíbio. Você respira e se move normalmente debaixo d\'água, sem ser afetado por terreno'
                    . ' difícil, nem sofrer pressão submarina.'
                    . ' • Doenças. Você é imune a doenças naturais ou mágicas.'
                    . ' • Resiliente. Você não se cansa por realizar esforço intenso por muito tempo. Além disso,'
                    . ' qualquer lugar de descanso é considerado ideal.'
                    . ' • Sem Mente. Você é imune a magias e efeitos que afetam a mente, como telepatia e outros'
                    . ' efeitos mentais que só funcionam em criaturas vivas.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Incorpóreo',
                'description' => 'Você pode se tornar intangível. Imaterial, como um fantasma.'
                    . ' Ao gastar uma ação e 5PM, você pode atravessar portas e outras barreiras físicas, e também'
                    . ' será imune a qualquer dano — exceto Magia ou ataques de outros seres Incorpóreos. Da'
                    . ' mesma forma, você também não pode interagir fisicamente com objetos materiais e nem'
                    . ' causar dano, exceto com Magia.'
                    . ' Este efeito dura até o fim da cena, ou até você decidir encerrá-lo, ou ser derrotado.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Inimigo',
                'description' => 'Você é treinado em enfrentar certo tipo de criatura, conhecendo seus poderes e'
                    . ' fraquezas. Escolha um arquétipo, como Humano, Elfo, Sauroide ou qualquer outro. Em todos os'
                    . ' testes contra criaturas do tipo escolhido, você consegue acerto crítico com 5 ou 6.'
                    . ' Note que o oponente deve ter o arquétipo correspondente, em regras. Um personagem élfico,'
                    . ' mas que não tenha Elfo na ficha, não ativa a vantagem.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Inofensivo',
                'description' => 'Você não parece perigoso, por alguma razão. Talvez pareça pequeno, fraco ou covarde.'
                    . ' Talvez seja um bichinho fofo, um vovô barrigudo, uma menininha de trancinhas… você escolhe o'
                    . ' motivo.'
                    . ' Em combate, por surpreender seu oponente, você ganha uma ação extra antes do primeiro'
                    . ' turno. Sua aparência inofensiva não funciona com alguém que viu você lutar antes, nem'
                    . ' funciona duas vezes com a mesma pessoa. Mesmo contra estes, no entanto, você tem Ganho'
                    . ' ao rolar iniciativa.'
                    . ' Você também pode gastar 3PM para Ganho em testes para tentar enganar alguém ou passar'
                    . ' despercebido.'
                    . ' Você não pode ser Inofensivo e também Monstruoso.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Instrutor',
                'description' => 'Você sabe ensinar ou inspirar outra pessoa a ser bem-sucedida em algo. Você passa o'
                    . ' conhecimento telepaticamente, entoa uma canção sublime, ameaça fazer comer sua'
                    . ' gororoba, promete algo irresistível, sopra umas dicas ou algo assim.'
                    . ' Usando uma ação e gastando 2PM, você permite a um aliado fazer um teste como se ele'
                    . ' tivesse uma perícia que você tem. Caso o aliado já tenha a perícia, você pode permitir que ele'
                    . ' use uma vantagem que você possua e a afete, como Maestria ou Mentor. Outros custos de'
                    . ' uso da vantagem (como PM) devem ser pagos pelo aliado.'
                    . ' O teste deve ser feito até o próximo turno do aliado; não é possível “guardar” usos para'
                    . ' depois.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Inventário',
                'description' => 'Você carrega itens consumíveis consigo para usar em momentos de necessidade. Quantos'
                    . ' 0pt Sem inventário. Mesmo sem esta vantagem você ainda pode carregar dois itens comuns.'
                    . ' 1pt Pequeno. 3 itens comuns e 1 incomum.'
                    . ' 2pt Grande. 5 itens comuns e 2 incomuns.'
                    . ' 3pt Supremo. 5 itens comuns, 4 incomuns e 1 raro.'
                    . ' Você pode trocar três itens de um nível inferior por um superior, e vice-versa. Por exemplo,'
                    . ' três itens comuns por um incomum. Não é preciso decidir quais itens o Inventário carrega;'
                    . ' você escolhe no momento do uso, reduzindo o total disponível.'
                    . ' O Inventário é recarregado no início de cada aventura, e outras vezes ao longo da sessão, a'
                    . ' critério do mestre. Mais detalhes sobre Inventário e itens consumíveis em “Recompensas”.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1-3pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Invisível',
                'description' => 'Você pode usar uma ação e gastar 3PM para ficar invisível. Quando está assim, você'
                    . ' tem Ganho em testes para se esconder, e todos os ataques contra você estão em Perda.'
                    . ' Um inimigo com Sentido pode fazer um teste resistido de Percepção contra o seu teste para'
                    . ' se esconder, para tentar encontrá-lo mesmo estando invisível e anular a Perda durante uma'
                    . ' rodada.'
                    . ' Você pode desfazer sua invisibilidade quando quiser, sem gastar sua ação ou movimento. Ela'
                    . ' também se desfaz quando você faz um ataque (ou qualquer atitude hostil) ou sofre dano.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Irresistível',
                'description' => 'Seus poderes são mais difíceis de resistir.'
                    . ' Quando um alvo faz um teste para evitar ser afetado por uma de suas vantagens (como'
                    . ' Anulação, Confusão, Ilusão, Paralisia ou Punição, por exemplo), você pode gastar 2PM ou'
                    . ' mais. Para cada 2PM gastos, a meta do teste para resistir aumenta um passo (+3).'
                    . ' Você deve anunciar o uso desta vantagem (e quanto vai gastar) antes que o alvo faça seu'
                    . ' teste.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Maestria',
                'description' => 'Escolha uma perícia que você tem. Em testes dessa perícia, você pode gastar 1PM para'
                    . ' ter um acerto crítico com 5 ou 6.'
                    . ' Você pode comprar esta vantagem mais vezes para outras perícias.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Magia',
                'description' => 'Você faz mágica. Pode manipular energias místicas e controlar os elementos para criar'
                    . ' efeitos sobrenaturais. Mágica!'
                    . ' Gastando 1PM, você soma +1 em qualquer teste. Com 3PM, por exemplo, você soma +3 em'
                    . ' seu ataque disparando uma bola de fogo. Ou conjura um escudo de ar que aumenta sua'
                    . ' defesa.'
                    . ' Você também pode gastar PM e usar uma ação para conceder esse bônus a um aliado que'
                    . ' possa alcançar. Por exemplo, imbuindo a espada de um aliado com uma aura mágica que a'
                    . ' torna mais afiada.'
                    . ' Note que, como outras vantagens, Magia pode ter efeitos físicos ou mentais/sociais. Uma'
                    . ' mágica pode ser uma marreta gigante esmagadora, ou um encanto que influencia pessoas.'
                    . ' Também pode melhorar testes não combativos, digamos, gastando 3PM para criar uma'
                    . ' corda de escalar e ajudar em um teste de Esportes (que agora recebe +3).'
                    . ' O bônus máximo que você pode gerar é igual à sua Habilidade. Quando ataca ou defende'
                    . ' com Magia, você pode usar a perícia Mística em vez de Luta (gastando 1PM por uso). Você'
                    . ' também pode fazer testes de Mística sem gastar PM para efeitos mágicos menores, como'
                    . ' iluminar uma sala, limpar uma mesa ou aquecer comida (mas nada que dê bônus).',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => '+Mana',
                'description' => 'Você tem mais Pontos de Mana, além daqueles oferecidos por sua Habilidade.'
                    . ' Cada vez que compra esta vantagem você recebe +10PM. Então, se tem H4 (20PM) e paga 1'
                    . ' ponto por +Mana, agora tem 30PM.'
                    . ' Você pode comprar esta vantagem várias vezes, para novos aumentos de +10PM.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => '+Membros',
                'description' => 'Você tem um ou mais membros extras, como um segundo par de braços, cauda preênsil,'
                    . ' tentáculos, cabelos de serpente, mandíbula voadora, drone com garra... Enfim, qualquer'
                    . ' apêndice que consiga fazer coisas.'
                    . ' Você pode gastar 5PM para fazer uma segunda ação em seu turno. Essa ação pode ser de'
                    . ' combate ou não: o membro extra pode folhear um livro para consulta, segurar uma lupa para'
                    . ' rastrear, fazer malabares para distrair — ou seja, ajudar de formas que não necessariamente'
                    . ' envolvem agarrar ou socar. Em alguns casos, a ação extra pode conceder um Ganho à sua'
                    . ' outra ação, como se estivesse prestando auxílio a si mesmo.'
                    . ' Você compra esta vantagem apenas uma vez para qualquer quantidade de membros: o efeito'
                    . ' é o mesmo. Você também não pode fazer mais de uma ação extra por rodada.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Mentor',
                'description' => 'Escolha uma perícia que você tem. Você aprendeu essa perícia com um mestre, que'
                    . ' ensinou diversos truques e técnicas. Mesmo que não tenha mais contato com ele, as lições'
                    . ' continuam presentes nas suas lembranças.'
                    . ' Uma vez por combate ou cena, você pode lembrar de um ensinamento e ter Ganho em um'
                    . ' teste da perícia escolhida. Além disso, técnicas que tenham a perícia do Mentor como'
                    . ' pré-requisito gastam 2PM a menos (no mínimo 1PM).'
                    . ' Você pode comprar esta vantagem mais vezes para outras perícias.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Obstinado',
                'description' => 'Você pode alimentar poderes especiais com sua própria energia vital, mesmo sofrendo'
                    . ' dano. Você pode gastar PV em vez de PM para ativar suas vantagens.'
                    . ' 2PV valem 1PM. Você ainda pode gastar PM normalmente, e recuperar PV e PM de formas'
                    . ' normais.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Paralisia',
                'description' => 'Você tem um meio para impedir o alvo de agir. Congelando, prendendo com uma rede,'
                    . ' atingindo seus pontos de pressão, fazendo uma pergunta sem resposta, dizendo algo tão'
                    . ' vergonhoso que ele trava… você escolhe.'
                    . ' Faça um ataque e gaste 2PM. Se vencer a defesa do alvo, em vez de sofrer dano, ele fica'
                    . ' imobilizado. Um alvo paralisado fica indefeso.'
                    . ' A Paralisia dura até o fim da cena, ou até o alvo sofrer dano. A cada turno, o alvo pode fazer'
                    . ' um teste de R (6 + Poder do atacante) para cancelar o efeito.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Patrono',
                'description' => 'Você serve a uma pessoa, organização ou instituição com mais recursos que você.'
                    . ' Quando faz um teste de compra para algo que ajude na missão para o patrono, você recebe'
                    . ' um Ganho. Além disso, antes de uma missão para o patrono, você pode fazer um teste de'
                    . ' compra imediatamente, sem precisar de um dia inteiro.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Punição',
                'description' => 'Você pode impor um efeito negativo a um alvo. Fazer com que receba uma Maldição, ou'
                    . ' torná-lo Monstruoso, ou Lento, ou outra coisa divertida (para você).'
                    . ' Ao comprar esta vantagem, escolha também uma desvantagem de mesmo valor.'
                    . ' Faça um ataque e gaste 2PM. Se vencer a defesa do alvo, em vez de sofrer dano, ele sofre os'
                    . ' efeitos da desvantagem escolhida.'
                    . ' A Punição dura até o fim da cena, ou até o alvo sofrer dano. A cada turno, o alvo pode fazer'
                    . ' um teste de R (6 + Poder do atacante) para cancelar o efeito.'
                    . ' Você pode comprar Punição mais vezes para outras desvantagens, mas só pode impor uma'
                    . ' por vez em cada adversário.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1-2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Regeneração',
                'description' => 'Você é muito, muito chato de derrotar. No início do seu turno, você recupera 5PV.'
                    . ' Além disso, quando faz um teste de morte, você nunca tem um resultado pior que'
                    . ' Inconsciente. Neste caso, você desperta no final da cena e volta a regenerar.'
                    . ' Ah sim, cuidado com oponentes que tenham Anulação. Hehe!',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Resoluto',
                'description' => 'Sua determinação é inabalável. Você recebe +2 em testes de Resistência envolvendo'
                    . ' força de vontade, como perceber fraudes, resistir a encantos e ilusões (isso inclui testes de'
                    . ' morte). Você também pode gastar 2PM antes de fazer um desses testes para conseguir acerto'
                    . ' crítico com 5 ou 6.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Riqueza',
                'description' => 'Burguês safado! Você tem recursos financeiros de escala superior. Quando faz testes'
                    . ' de compra, pode gastar 3PM para receber benefícios de acordo com a escala da sua riqueza.'
                    . ' Uma riqueza Sugoi custa 2pt, Kiodai 4pt, e Kami — a riqueza de um deus! — 8pt. Você tem'
                    . ' Ganho e um crítico automático no teste para cada nível de escala.'
                    . ' Os PM gastos nesta vantagem não podem ser recuperados até o fim da cena.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 2, // 2, 4 ou 8pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Sentido',
                'description' => 'Você tem um sentido melhor, ou diferente. Pode fazer testes de Percepção em situações'
                    . ' impossíveis para outros, como ver no escuro ou perceber coisas invisíveis.'
                    . ' • Aguçado. Escolha entre audição, faro, tato ou visão. Em testes de Percepção usando esse'
                    . ' sentido, você sempre tem Ganho.'
                    . ' • Infravisão. Você percebe seres de sangue quente e também enxerga no escuro, exceto perto'
                    . ' de calor intenso (chamas, grandes motores, disparos de armas...).'
                    . ' • Radar. Você percebe tudo em volta, mesmo de costas ou no escuro. Você também pode'
                    . ' ouvir” rádio, tevê, celular, wi-fi e outros.'
                    . ' • Raio X. Você pode ver através de portas e paredes, exceto quando feitos de materiais muito'
                    . ' densos (como metal) ou mágicos.'
                    . ' Detectar algo exige um teste de Percepção: quanto melhor o resultado, mais você sabe sobre'
                    . ' a direção, proximidade e localização daquilo que quer encontrar.'
                    . ' Sempre que uma regra fala sobre algo que você consiga “ver” (como Telepata e Teleporte),'
                    . ' isso também vale para algo que possa perceber com um Sentido.'
                    . ' Você pode inventar um sentido especial único, como poder detectar um tipo de material,'
                    . ' criatura, energia ou objeto específico. Por exemplo, poderia ter Sentido de Ki, de Animais, de'
                    . ' Intenções Assassinas, de Ouro ou algo assim. No entanto, você não pode inventar um sentido'
                    . ' melhor que qualquer outro na lista.'
                    . ' Cada vez que comprar esta vantagem, pode escolher algo diferente (exceto coisas proibidas'
                    . ' pelo mestre).',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Telepata',
                'description' => 'Você pode ler ou sentir os pensamentos de outras pessoas. Pode usar um movimento e'
                    . ' gastar 1PM para:'
                    . ' • Ter Ganho em um teste de perícia social relacionado a um personagem.'
                    . ' • Fazer um teste de Habilidade (9) para descobrir algo sobre um personagem (como um valor'
                    . ' de atributo, uma vantagem ou desvantagem).'
                    . ' • Prever os movimentos de um adversário em combate; Ganho em defesa contra ele até a'
                    . ' próxima rodada.'
                    . ' Você só pode usar telepatia em criaturas vivas e que consiga ver.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Teleporte',
                'description' => 'Você pode usar um movimento e gastar PM para se deslocar até qualquer lugar que possa'
                    . ' ver.'
                    . ' Cada movimento que você substitui por Teleporte custa 1PM. Por exemplo, ir de Perto para'
                    . ' Muito Longe requer dois movimentos; um teleporte para essa distância custa 2PM. Teleporte'
                    . ' não é afetado por terreno difícil; basta ser capaz de enxergar o ponto que deseja alcançar.'
                    . ' Você também pode gastar 3PM para ter Ganho de defesa contra um ataque.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Torcida',
                'description' => 'Você está acostumado a agir na presença de muita gente aplaudindo e motivando. Quando'
                    . ' uma torcida está presente, você tem um Ganho por rodada, em qualquer teste que quiser.'
                    . ' Na falta de uma torcida, um aliado pode substituí-la usando uma ação para motivá-lo. Você'
                    . ' recebe o benefício em seu próximo turno.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Transformação',
                'description' => 'Você pode mudar de forma e poderes. Não seria um jogo de anime/tokusatsu sem isso,'
                    . ' certo?'
                    . ' Faça outro personagem, com o mesmo número de pontos. Ele pode ser diferente em tudo —'
                    . ' pode até ter outra personalidade, memórias e perícias —, exceto que também deve ter esta'
                    . ' vantagem, no mesmo valor.'
                    . ' 1pt Se a nova forma tem desvantagens diferentes, todas as formas sofrem os efeitos de todas'
                    . ' as desvantagens combinadas.'
                    . ' 2pt Cada forma sofre apenas os efeitos de suas próprias desvantagens.'
                    . ' Mudar de forma leva uma rodada inteira. Você é considerado indefeso durante esse tempo.'
                    . ' Você ainda consegue se transformar mesmo se sofrer dano — isto é, se não morrer antes!'
                    . ' Mudar de forma não recupera recursos. Se você mudar para uma forma com atributos mais'
                    . ' baixos (e sem vantagens que os aumentem), qualquer recurso em excesso é perdido. Do'
                    . ' mesmo modo, se mudar para uma forma com atributos mais altos, os recursos não'
                    . ' aumentam proporcionalmente (mas agora você pode descansar ou curar para que cheguem'
                    . ' ao novo total).',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1-2pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => '+Vida',
                'description' => 'Você tem mais Pontos de Vida, além daqueles oferecidos por sua Resistência.'
                    . ' Cada vez que compra esta vantagem você recebe +10PV. Então, se tem R2 (10PV) e paga 1'
                    . ' ponto por +Vida, agora tem 20PV.'
                    . ' Você pode comprar esta vantagem várias vezes, para novos aumentos de +10PV',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt cada
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Vigoroso',
                'description' => 'Você é robusto como um cavalo. Recebe +2 em testes de Resistência envolvendo saúde'
                    . ' física, como resistir a fadiga, doenças e venenos. Isso inclui testes de morte.'
                    . ' Você também pode gastar 2PM antes de fazer um desses testes para conseguir acerto crítico'
                    . ' com 5 ou 6.',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::Demo,
                'image_url' => '',
                'image_path' => '',
            ],
            [
                'name' => 'Voo',
                'description' => 'Você pode voar! Ao usar um movimento para ficar Longe ou mais distante pelo ar,'
                    . ' apenas personagens que também possam voar poderão usar movimentos para alcançá-lo. Além'
                    . ' disso, você ignora certas restrições causadas por terrenos difíceis.'
                    . ' Em combate, levantar voo quando você está no chão usa um movimento e gasta 2PM. Você'
                    . ' não precisa gastar mais PM para manter-se no ar, mas gasta se quiser levantar voo'
                    . ' novamente após pousar (ou cair) por qualquer motivo. Voar por muito tempo está sujeito às'
                    . ' regras de cansaço (veja em +Regras).',
                'type' => SkillTypeEnum::Vantagem,
                'cost' => 1, // 1pt
                'origin' => SkillOriginEnum::PlayTest,
                'image_url' => '',
                'image_path' => '',
            ]
        ], ['name', 'type', 'origin'], ['description', 'cost', 'image_url', 'image_path']);
    }
}
