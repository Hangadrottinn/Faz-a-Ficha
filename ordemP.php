<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Session\Login;
use \App\Entity\Ficha;

//OBRIGA O USUARIO A ESTAR LOGADO
Login::requireLogin();

if(isset($_POST['acao']) && $_POST['acao'] == "enviar"){
    $modelo = 1;

    $nomeArma = serialize($_POST['nomeArma']);
    $descricaoArma = serialize($_POST['descricaoArma']);
    $ataqueArma = serialize($_POST['ataqueArma']);
    $alcanceArma = serialize($_POST['alcanceArma']);
    $danoArma = serialize($_POST['danoArma']);
    $criticoArma = serialize($_POST['criticoArma']);
    $recargaArma = serialize($_POST['recargaArma']);
    $especialArma = serialize($_POST['especialArma']);

    $ritual = serialize($_POST['ritual']);
    $elemento = serialize($_POST['elemento']);
    $duracao = serialize($_POST['duracao']);
    $alvo = serialize($_POST['alvo']);
    $alcance = serialize($_POST['alcance']);
    $peHR = serialize($_POST['peHR']);
    $circulo = serialize($_POST['circulo']);
    $pagina = serialize($_POST['pagina']);
    $descricaoHR = serialize($_POST['descricaoHR']);

    $nomeItem = serialize($_POST['nomeItem']);
    $descItem = serialize($_POST['descItem']);
    $pesoItem = serialize($_POST['pesoItem']);

    
    

    $obFicha = new Ficha;
    $obFicha->modelo = $modelo;
    $obFicha->personagem = $_POST['nome'];
    $obFicha->login = $_POST['jogador'];
    $obFicha->passado = $_POST['origem'];
    $obFicha->nivel = $_POST['nex'];
    $obFicha->classe = $_POST['classe'];
    $obFicha->trilha = $_POST['trilha'];
    $obFicha->forca = $_POST['forca'];
    $obFicha->destreza = $_POST['agilidade'];
    $obFicha->constituicao = $_POST['vigor'];
    $obFicha->inteligencia = $_POST['intelecto'];
    $obFicha->carisma = $_POST['presenca'];
    $obFicha->vida_atual = $_POST['vidaAtual'];
    $obFicha->vida = $_POST['vida_maxima'];
    $obFicha->san_atual = $_POST['sanidadeAtual'];
    $obFicha->san = $_POST['sanidadeMaxima'];
    $obFicha->pe_atual = $_POST['peAtual'];
    $obFicha->pe = $_POST['peMaximo'];
    $obFicha->defesa = $_POST['passiva'];
    $obFicha->bloqueio = $_POST['bloqueio'];
    $obFicha->esquiva = $_POST['esquiva'];
    $obFicha->acrobacia = $_POST['acrobacia'];
    $obFicha->adestramento = $_POST['adestramento'];
    $obFicha->artes_desc = $_POST['artes_nome'];
    $obFicha->artes = $_POST['artes'];
    $obFicha->atletismo = $_POST['atletismo'];
    $obFicha->historia = $_POST['atualidades'];
    $obFicha->ciencias_nome = $_POST['ciencias_nome'];
    $obFicha->ciencias = $_POST['ciencias'];
    $obFicha->crime = $_POST['crime'];
    $obFicha->diplomacia = $_POST['diplomacia'];
    $obFicha->enganacao = $_POST['enganacao'];
    $obFicha->fortitude = $_POST['fortitude'];
    $obFicha->furtividade = $_POST['furtividade'];
    $obFicha->iniciativa = $_POST['iniciativa'];
    $obFicha->intimidacao = $_POST['intimidacao'];
    $obFicha->intuicao = $_POST['intuicao'];
    $obFicha->investigacao = $_POST['investigacao'];
    $obFicha->luta = $_POST['luta'];
    $obFicha->medicina = $_POST['medicina'];
    $obFicha->arcanismo = $_POST['ocultismo'];
    $obFicha->percepcao = $_POST['percepcao'];
    $obFicha->pilotagem = $_POST['pilotagem'];
    $obFicha->pontaria = $_POST['pontaria'];
    $obFicha->profissao_nome = $_POST['profissao_nome'];
    $obFicha->profissao = $_POST['profissao'];
    $obFicha->reflexos = $_POST['reflexos'];
    $obFicha->religiao = $_POST['religiao'];
    $obFicha->sobrevivencia = $_POST['sobrevivencia'];
    $obFicha->tatica = $_POST['tatica'];
    $obFicha->tecnologia = $_POST['tecnologia'];
    $obFicha->vontade = $_POST['vontade'];
    $obFicha->salvaguarda_con = $_POST['fisica'];
    $obFicha->salvaguarda_des = $_POST['balistica'];
    $obFicha->res_insanidade = $_POST['resInsanidade'];
    $obFicha->salvaguarda_car = $_POST['resSangue'];
    $obFicha->salvaguarda_for = $_POST['resMorte'];
    $obFicha->salvaguarda_int = $_POST['resEnergia'];
    $obFicha->salvaguarda_sab = $_POST['resConhecimento'];
    $obFicha->item_nome = $nomeItem;    
    $obFicha->item_desc = $descItem;
    $obFicha->item_peso = $pesoItem;
    $obFicha->anotacoes_p = $_POST['historiaP'];
    $obFicha->arma = $nomeArma;
    $obFicha->tipo = $descricaoArma;
    $obFicha->ataques = $ataqueArma;
    $obFicha->alcance = $alcanceArma;
    $obFicha->dano = $danoArma;
    $obFicha->critico = $criticoArma;
    $obFicha->recarga = $recargaArma;
    $obFicha->especial = $especialArma;
    $obFicha->cd_magia = $_POST['dtRitual'];
    $obFicha->magias = $ritual;
    $obFicha->elemento = $elemento;
    $obFicha->duracao = $duracao;
    $obFicha->alvo = $alvo;
    $obFicha->alcance_rit = $alcance;
    $obFicha->custo = $peHR;
    $obFicha->nivel_magia = $circulo;
    $obFicha->pagina = $pagina;
    $obFicha->desc_magia = $descricaoHR;

    
    
    $obFicha->cadastrar();

    echo '<script>
            alert("Ficha Criada com Sucesso");
            location.href="perfil.php"
            </script>';
    exit;

}


include __DIR__.'/includes/header.php';


include __DIR__.'/includes/formOP.php';



 
 
?>