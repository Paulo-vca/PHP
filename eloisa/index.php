<?php
// inicia a sessao para guardar os nomes
session_start();

/**
 * Quando a pagina carregar
 * Iniciaremos um array vazio na sessão
 * somente caso ele não exista na sessão
 * por exemplo na primeira vez que a página carrega
 */
$_SESSION['nomes'] = $_SESSION['nomes']?: array();

/**
 * Aqui salvaremos os nomes enviados do
 * formulário somente se a ação for para add (+)
 */
if (isset($_POST['acao']) && $_POST['acao'] == 'Adicionar') {
    $_SESSION['nomes'] = $_POST['nomes'];
}

/**
 * Esta função percorre todos os nomes
 * salvos na sessão e imprime um campo de texto
 * com o nome já preenchido
 */
function print_campos () {
    foreach ($_SESSION['nomes'] as $nome) {
        
        echo '<input type="text" name="nomes[]" value="'.$nome.'" /><br />';
        
    }
}

/**
 * Gera a lista concatenada de nomes
 * somente se a ação for "Enviar" (show)
 */
// if (isset($_POST['acao']) && $_POST['acao'] == 'Enviar') {
//     $lista_concatenada = sprintf('%s', implode('<br />', $_SESSION['nomes']));
//     echo $lista_concatenada;
// }
?>

<form action="index.php" method="POST">
   
    <input type="text" name="nomes[]" />
    <input type="submit" value="Adicionar" name="acao">

    <div class="box2">
        
        <ol>
            <?php print_campos () ?>
        </ol>
        
        
    </div>
</form>