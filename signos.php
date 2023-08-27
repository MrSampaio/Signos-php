<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descrição Signo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Inter&display=swap');
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Inter', sans-serif;
}
body{
    min-width: 100vw;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
main{
    width: 60vw;
    min-height: 73vh;
    border: solid black 1px;
    border-radius: 5px;
}
main h1{
    font-size: 25pt;
    padding: 15px;
    text-align: center;
}
h1, h2, .signo{
    font-weight: 900;
    font-family: 'Fjalla One', sans-serif;
}
h2{
    font-size: 20pt;
    margin-bottom: 15px;
}
.about, .desc{
    padding: 30px;
}

.aboutContainer, .descContainer{
    position: relative;
    text-align: justify;
}

    </style>
</head>

<?php

$nascimento = $_POST['nascimento'];
$nascimentoFormatado = new DateTime($nascimento); // converte o valor do input html em objeto para ser manipulado

// puxa a data atual
$dataAtual = new DateTime(); 

// func diff traz a diferença entre dois DateTimes
$idade = $nascimentoFormatado->diff($dataAtual);

// formatando retorno de DateTime para mês
$mesNascimento = $nascimentoFormatado->format('m');

// formatando retorno de DateTime para dia
$diaNascimento = $nascimentoFormatado->format('d'); 


$signo = '';
$caracteristicas = '';
$sobre = '';

$corFundo = '';
$corSobre = '';
$corBox = '';
$corSigno = '';

if(($mesNascimento == '01' && $diaNascimento >= '20' && $diaNascimento <= '31') || ($mesNascimento == '02' && $diaNascimento >= '01' && $diaNascimento <= '18')){
    $signo = 'Aquário';

    $corFundo = 'linear-gradient(-150deg, #dcffff, #29ffff8a)';
    $corSobre = '#7bffff';
    $corBox = '#c8ffff';
    $corSigno = '#00e7eb';

    $sobre = 'Um aquariano ou uma aquariana pode se identificar com características como o desejo de inovar e a independência. Sabe aquela galera diferentona? 
    São eles. Aquário signo costuma ser bastante idealista e seus nativos prezam por experiências que trazem liberdade. Podem ter posturas consideradas radicais
    e é bem comum o aquariano ser o "do contra" da turma.';

    $caracteristicas = 'A busca por inovação e independência podem ser características fortes em pessoas com o sol no signo de Aquário. Com criatividade sempre 
    em alta, costumam ser bastante inventivas e direcionadas a solução de problemas. Quem tem um acúmulo de planetas no signo de Aquário pode ter um perfil 
    questionador e radical, e em algumas situações pode discordar da maioria pelo simples fato de querer ser sempre diferente. As relações de amizade tendem 
    a ser bem importantes para aquariano e para aquariana, esse sentimento nasce, principalmente, pelo forte senso de coletividade presente em Aquário signo. 
    Consciência de que a felicidade de um só é possível com a felicidade de todos é bem característico nesse signo. Em casos com pouca maturidade, essa relação
    aquariana com a coletividade pode se manifestar em posturas extremistas ou em personalidades rebeldes sem causa.';


} else if(($mesNascimento == '02' && $diaNascimento >= '19' && $diaNascimento <= '29') || ($mesNascimento == '03' && $diaNascimento >= '01' && $diaNascimento <= '20')){
    $signo = 'Peixes';

    $corFundo = 'linear-gradient(-150deg, #a3ffe5, #04eaa9c3)';
    $corSobre = '#04eaa7';
    $corBox = '#a3ffe5';
    $corSigno = '#00c88f';

    $sobre = 'Quem nasce com o sol no signo de Peixes pode se identificar com virtudes como a sensibilidade e a intuição. Piscianos e piscianas típicos costumam ser 
    bastante solidários e muitas vezes têm uma forte conexão com a espiritualidade. Por serem bastante sonhadores, se iludir com certa facilidade também é uma 
    característica de Peixes.';

    $caracteristicas = 'A empatia e a humildade podem ser fortes características de Peixes. Sempre conectados com sua intuição, piscianos e piscianas 
    costumam captar as coisas no ar, muitas vezes são pessoas bem discretas e observadoras que conseguem perceber o mundo através da observação de si. 
    Quem tem um acúmulo de planetas no signo de Peixes tende a dar muita importância aos seus sonhos e ao que ainda não é real, mas pode ser.
    Costumam ser pessoas compreensivas e compassivas. Por guardar em si emoções que em vários momentos são opostas, conseguem enxergar os desafios 
    do outro com bastante facilidade. As relações afetivas são bem importantes para esses nativos, mas o romantismo excessivo do signo de Peixes 
    também pode sinalizar uma inclinação para amores platônicos e facilidade para viver desilusões amorosas.';

} else if(($mesNascimento == '03' && $diaNascimento >= '21' && $diaNascimento <= '31') || ($mesNascimento == '04' && $diaNascimento >= '01' && $diaNascimento <= '19')){
    $signo = 'Áries';

    $corFundo = 'linear-gradient(150deg, #ff4d4d, #fca8a8)';
    $corBox = '#fca8a8';
    $corSobre = '#ff4d4d';
    $corSigno = '#ff4d4d';

    $sobre = 'Quem tem Sol no signo de Áries pode se identificar com características como a impulsividade e a coragem. Sabe aquela galera que não tem medo de nada? 
    Provavelmente tem Áries forte no Mapa. Eles também amam motivar quem está ao seu redor e são guerreiros por natureza (típica característica de Áries, não?)';

    $caracteristicas = 'Dinâmicos e sinceros, quem tem sol em Áries costuma ter um forte contato com a sua individualidade, que pode parecer 
    egoísmo em alguns momentos. Arianas e arianos tendem a ser alegres e muito extrovertidos, mas também podem ser bastante competitivos e soar um pouco 
    autoritários.Podem preferir trabalhar sozinhos, mas costumam ter um ótimo espírito de liderança. Quem tem o signo de Áries em posição marcante no Mapa 
    Astral de nascimento, geralmente, não se cansa com facilidade; sua disposição e resistência físicas podem ser invejadas por todos os outros signos. 
    Áries é direto para alcançar suas metas e, em casos de pouca maturidade, arianas e arianos podem gostar de criar rivalidades e ser um tanto quanto mandões. 
    Marte como regente reforça o perfil guerreiro do signo e também sinaliza possíveis explosões emocionais.';

} else if(($mesNascimento == '04' && $diaNascimento >= '20' && $diaNascimento <= '30') || ($mesNascimento == '05' && $diaNascimento >= '01' && $diaNascimento <= '20')){
    $signo = 'Touro';

    $corFundo = 'linear-gradient(-150deg, #ceb091, #975d23d0)';
    $corBox = '#ceb091';
    $corSobre = '#975d23d0';
    $corSigno = $corSobre;

    $sobre = 'Quem nasce com o sol no signo Touro pode se identificar com virtudes como a paciência, o bom gosto e a sensualidade. Afeto e valorização do prazer e 
    conforto stambém podem ser características de Touro, mas sabe aquela galera meio teimosa? Pode ser que tenham o signo de Touro forte no Mapa também...';

    $caracteristicas = 'Calmo e persistente, se você tem sol no signo de Touro, provavelmente não costuma se irritar com facilidade. Em geral, 
    suas posses e bens materiais são importantes para você. E, dependendo do restante do seu Mapa Astral, você pode usar isso ao seu favor, desenvolvendo 
    uma tendência natural para acumular bens materiais, além de um ótimo senso de organização financeira. Mas atenção! Essa mesma característica pode despertar 
    possessividade e materialismos excessivos. A combinação do elemento terra com a natureza fixa do signo de Touro indica possíveis dificuldades com mudanças. 
    Taurinos, taurinas, quem tem ascendente, lua ou um acúmulo de planetas no signo Touro pode demonstrar certa lentidão para agir. Isso faz parte do senso de 
    segurança da personalidade de touro, que costuma ser estratégico em cada passo. A terra fixa também pode indicar uma teimosia excessiva, difícil de controlar.
    O planeta Vênus como regente relaciona o signo ao amor cuidadoso e afetuoso. Taurinos e taurinas amam de forma prática e gentil, e é na convivência que isso se
    expressa da melhor maneira.';

} else if(($mesNascimento == '05' && $diaNascimento >= '21' && $diaNascimento <= '31') || ($mesNascimento == '06' && $diaNascimento >= '01' && $diaNascimento <= '20')){
    $signo = 'Gêmeos';

    $corFundo = 'linear-gradient(-150deg, #ffffd3, #ecec53)';
    $corBox = '#ffffd3';
    $corSigno = '#ffff0e';
    $corSobre = '#ecec53';

    $sobre = 'Quem nasce com o sol no signo de Gêmeos geralmente se identifica com características como a curiosidade, a inteligência e o desejo de liberdade. 
    Sabe aquela galera que ama ler, aprender coisas novas, puxar conversa e fazer novas amizades? Provavelmente tem gêmeos signo forte no mapa.';

    $caracteristicas = 'Curioso e bem humorado, quem tem sol no signo de Gêmeos costuma fazer amigos sem grandes dificuldades, 
    tem uma verdadeira vocação para manter um círculo social diverso, com todas as tribos possíveis. Dois em um? Geminianos e geminianas 
    podem ter uma personalidade versátil, que se adapta a diversas formas de pensamento e podem transitar tranquilamente por dois lados 
    de uma questão. Mas atenção! Com imaturidade essa facilidade de mediação pode se transformar em falsidade. A combinação do elemento ar 
    com a natureza mutável do signo indica uma facilidade de adaptação no signo de Gêmeos, além de uma inquietude por novos desafios, aprendizados 
    e experiências. Se você tem este signo forte no Mapa Astral, ou seja, ascendente, lua ou um acúmulo de planetas em Gêmeos signo, provavelmente, 
    odeia uma rotina massante ou exaustiva. O planeta Mercúrio como regente relaciona Gêmeos à criatividade e à comunicação.';

} else if(($mesNascimento == '06' && $diaNascimento >= '21' && $diaNascimento <= '30') || ($mesNascimento == '07' && $diaNascimento >= '01' && $diaNascimento <= '22')){
    $signo = 'Câncer';

    $corFundo = 'linear-gradient(170deg, #939393, #d5d5d5)';
    $corBox = '#d5d5d5';
    $corSigno = '#666666';
    $corSobre = '#939393';
    
    $sobre = 'Quem nasce com o sol no signo de Câncer pode se identificar com características como a sensibilidade e o carinho. Um canceriano ou canceriana 
    típicos costumam ter uma ótima intuição, além de um forte vínculo com seus familiares. A busca constante por segurança também é uma característica do signo 
    de câncer.';

    $caracteristicas = 'Emotivos e sensíveis, quem tem sol no signo de Câncer costuma ter uma forte conexão com as lembranças do passado, que podem 
    contribuir para posturas muito sentimentais ou até melancólicas. Cancerianas e cancerianos podem ser muito apegados, mas costumam ter um cuidado 
    ímpar com todas as pessoas que amam. Tendem a buscar segurança e proteção, e isso pode se demonstrar com comportamentos no dia a dia que não oferecem 
    grandes riscos. Quem tem o signo de Câncer forte no Mapa Astral de nascimento se identifica com um forte instinto para ação guiado pelos sentimentos. 
    Câncer consegue traçar estratégias sinuosas para alcançar seus objetivos e, em casos com pouca maturidade, podem usar de manipulação. A Lua como regente 
    reforça o perfil maternal/ paternal do signo e também sinaliza para possíveis oscilações emocionais.';

} else if(($mesNascimento == '07' && $diaNascimento >= '23' && $diaNascimento <= '31') || ($mesNascimento == '08' && $diaNascimento >= '01' && $diaNascimento <= '22')){
    $signo = 'Leão';

    $corFundo = 'linear-gradient(150deg, #fddfa3, #eca20c)';
    $corSobre = '#eca20c';
    $corSigno = $corSobre;
    $corBox = '#fddfa3';

    $sobre = 'Quem nasce com o sol no signo Leão pode se identificar com características como a criatividade e a coragem. Sabe aquela galera com a autoestima
    lá em cima? Provavelmente tem Leão signo forte no mapa. A generosidade e o otimismo também podem ser bem presentes.';

    $caracteristicas = 'Vaidade e bom humor podem ser marca registrada na personalidade de quem tem o sol no signo de Leão. Carismáticos e naturalmente 
    destacáveis, leoninas e leoninos típicos tendem a ser bem extrovertidos. Sua generosidade também se destaca em seu modo de amar, a felicidade da outra pessoa 
    na relação também é motivo de sua própria alegria. A nobreza de caráter é bem presente em quem tem um acúmulo de planetas no signo leão, que são pessoas incapazes 
    de ter comportamentos mesquinhos. O sol como regente de Leão, destaca a tendência natural do signo ser o centro das atenções. Nativos do signo de Leão tem energia 
    de sobra e costuma ser a alma da festa, daqueles que dançam a noite inteira sem maiores esforços. Por outro lado, o Leão signo pode sinalizar certo autoritarismo 
    e prepotência. Leoninas e leoninos precisam tomar cuidado para que o ego ferido não desencadeia comportamentos arrogantes e um tanto quanto explosivos.';

} else if(($mesNascimento == '08' && $diaNascimento >= '23' && $diaNascimento <= '31') || ($mesNascimento == '09' && $diaNascimento >= '01' && $diaNascimento <= '22')){
    $signo = 'Virgem';

    $corFundo = 'linear-gradient(150deg, #c3e1ff, #92c8fe)';
    $corSobre = '#92c8fe';
    $corBox = '#c3e1ff';
    $corSigno = '#4ba5ff';

    $sobre = 'Quem nasce com o Sol no signo Virgem pode se identificar com características como a objetividade e a organização. Virginianas e virginianos típicos 
    costumam buscar constantemente a perfeição e identificar facilmente detalhes que passam despercebidos por todos os outros, essa é uma das características de 
    Virgem mais admiradas.';

    $caracteristicas = 'A busca pela perfeição pode ser bem presente na personalidade de quem tem o sol no signo de Virgem. Naturalmente adeptos da praticidade, 
    virginianas e virginianos podem melhorar sua auto-estima se sentindo mais úteis e produtivos. O nível elevado de autocrítica, porém, pode levá-los a subestimar 
    seus próprios talentos com certa facilidade. Virgem também é o signo mais leal com quem ama de verdade, familiares, amigos e nos relacionamentos amorosos. 
    O amor de Virgem signo é baseado na verdade e na maturidade, quem tem muitos planetas neste signo pode demonstrar seus sentimentos de forma mais prática. 
    Os cuidados com a saúde e com a higiene pessoal podem ser também características fortes que mostram a consciência da importância em se cuidar para viver bem, 
    porém, em casos menos maduros, tendem a se manifestar como mania de limpeza ou de organização.';

} else if(($mesNascimento == '09' && $diaNascimento >= '23' && $diaNascimento <= '30') || ($mesNascimento == '10' && $diaNascimento >= '01' && $diaNascimento <= '22')){
    $signo = 'Libra';

    $corFundo = 'linear-gradient(150deg, #acdbff, #eabfea)';
    $corSobre = '#eabfea';
    $corBox = '#acdbff';
    $corSigno = '#eb8deb';

    $sobre = 'Quem nasce com o sol no signo Libra, em geral, se identifica com características como a cortesia, a delicadeza e a busca constante pelo equilíbrio. 
    Librianas e librianos típicos adoram viver relacionamentos e tendem a ter um pouco de dificuldade para tomar decisões.';

    $caracteristicas = 'A empatia e a diplomacia podem ser bem presentes na personalidade de quem tem o sol no signo Libra. Naturalmente direcionados para as 
    relações com outras pessoas, librianas e librianos podem ter um grande talento para solucionar conflitos, porém, a preocupação em racionalizar os dois 
    lados de uma questão pode gerar situações de dúvida e indecisão. Libra é regido por Vênus, e isso dá ao signo um apreço natural a tudo que pode ser considerado 
    belo. Quem tem um acúmulo de planetas em Libra pode ter uma forte conexão com as artes, ou até ter facilidade para viver uma carreira artística. 
    Em casos com pouca maturidade, essa aproximação com a beleza pode se manifestar como uma vaidade desmedida. O companheirismo pode ser uma característica marcante, 
    como também o senso de justiça e a busca em viver todas as relações com respeito mútuo.';

} else if(($mesNascimento == '10' && $diaNascimento >= '23' && $diaNascimento <= '31') || ($mesNascimento == '11' && $diaNascimento >= '01' && $diaNascimento <= '21')){
    $signo = 'Escorpião';
    
    $corFundo = 'linear-gradient(150deg, #fab3c1, #ff466b)';
    $corSobre = '#ff466b';
    $corBox = '#fab3c1';
    $corSigno = $corSobre;

    $sobre = 'Quem nasce com o sol no signo Escorpião pode se identificar com características como a intensidade e o poder de transformação. Escorpianas e escorpianos
    típicos costumam ser bastante passionais e muito generosos. O espírito de detetive e o sexto sentido afiado também são bem marcantes em quem tem escorpião forte 
    no mapa também.';

    $caracteristicas = 'Uma forte intuição é uma das marcas registradas de quem tem Sol no signo Escorpião, geralmente orientados pelas suas emoções, escorpianos
    e escorpianas conseguem enxergar nas entrelinhas e identificar o que não foi dito. Bastante conectados com seus sentimentos, podem desenvolver comportamentos 
    possessivos e obsessivos. A força e capacidade de se reinventar, mesmo diante de situações muito desafiadoras, são características de quem tem o signo de 
    Escorpião em posição marcante no Mapa Astral, como também o autocontrole e a internalização das emoções. Marca registrada do signo, a intensidade escorpiana 
    nasce principalmente da consciência da finitude das coisas, o que se manifesta também em uma imensa generosidade com as pessoas que ama. A memória de escorpião 
    é muito boa, quem tem o signo forte no Mapa Astral não costuma esquecer o que lhe fazem, de bom ou de mal, e deixam bem claras suas lembranças.';

} else if(($mesNascimento == '11' && $diaNascimento >= '22' && $diaNascimento <= '30') || ($mesNascimento == '12' && $diaNascimento >= '01' && $diaNascimento <= '21')){
    $signo = 'Sagitário';

    $corFundo = 'linear-gradient(100deg, #dc73f6, #f6d2ff)';
    $corSobre = '#dc73f6';
    $corBox = '#f6d2ff';
    $corSigno = $corSobre;

    $sobre = 'Quem nasce com o sol no signo de Sagitário pode se identificar com características como o otimismo e o desejo de liberdade. Sagitarianas e sagitarianos 
    típicos costumam ser viajantes e, geralmente, enxergam o mundo inteiro como sua casa. A jovialidade também é uma característica marcante de Sagitário.';

    $caracteristicas = 'Vaidosos e bem humorados, quem tem sol no signo de Sagitário costuma enxergar com facilidade o lado positivo de cada situação. 
    Cidadãos do mundo, sagitarianas e sagitarianos geralmente são pessoas extrovertidas, espontâneas e comunicativas que não gostam nenhum pouco de solidão.
    O idealismo sempre presente, também faz do signo de Sagitário o incentivador ideal, capaz de contagiar qualquer equipe sem muitos esforços. Tentar prender
    uma pessoa com um acúmulo de planetas no signo de Sagitário não é uma boa ideia. De alma livre e coração aventureiro, viajar, pelo mundo ou pela mente alimenta 
    as personalidades sagitarianas, que sempre buscam por experiências que trazem mais conhecimento. Porém, é preciso ter cuidado com os comportamentos vaidosos, 
    sagitarianos e sagitarianas podem se considerar autoridades em assuntos que não dominam e passar uma imagem de “donos da verdade”.';
    

} else if(($mesNascimento == '12' && $diaNascimento >= '22' && $diaNascimento <= '31') || ($mesNascimento == '01' && $diaNascimento >= '01' && $diaNascimento <= '19')){
    $signo = 'Capricórnio';

    $corFundo = 'linear-gradient(-100deg, #131313a6, #2e2e2eb5)';
    $corSobre = '#131313a6';
    $corBox = '#2e2e2eb5';
    $corText = '#fff';
    $corSigno = '#000';

    $sobre = 'Quem tem Sol em Capricórnio pode se identificar com virtudes como persistência e responsabilidade. Capricórnio signo costuma ter metas bem definidas e 
    noção dos seus limites. A relação próxima com o trabalho também pode ser uma característica de capricórnio bem marcante.';

    $caracteristicas = 'Praticidade e maturidade são típicas características de Capricórnio. Independentes, costumam fazer seu próprio caminho e não confiar muito em 
    rotas traçadas por outras pessoas. Quem tem um acúmulo de planetas em Capricórnio signo pode ter um perfil workaholic, mas a carreira profissional é apenas um 
    dos aspectos que chamam a atenção dos capricornianos. A paciência tende a ser bem comum para os nativos desse signo que, desde muito cedo, aprendem que tudo na 
    vida demanda tempo e dedicação. O sucesso é fruto de persistência, aprendizado e disciplina. Consciência de que regras existem e devem ser cumpridas também é 
    típico do signo de Capricórnio. Mas atenção! O excesso de foco material pode contribuir para o desenvolvimento de posturas avarentas ou excessivamente ambiciosas. 
    Uma dose extra de pessimismo também pode existir.';
}

?>

<body style="background: <?php echo $corFundo?>;color: <?php echo $corText;?>">

<main style="background-color: <?php echo $corBox ?>">
    <h1>Você possui <?php echo $idade->y?> anos e seu signo é <span class="signo" style="color: <?php echo $corSigno ?>"><?php echo $signo;?></span>!</h1>

    <article class="aboutContainer">
        <div style="background-color: <?php echo $corSobre ?>" class="about">
            <h2>Sobre <?php echo $signo;?></h2>
            <p><?php echo $sobre;?></p>
        </div>
    </article>

    <article class="descContainer">
        <div style="background-color: <?php echo $corBox ?>" class="desc">
            <h2>Características do signo de <?php echo $signo;?></h2>
            <p> <?php echo $caracteristicas;?></p>
        </div>
    </article>
</main>

    
</body>
</html>


