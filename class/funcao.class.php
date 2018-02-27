<?php

class Site {



	function imoveis(){

		$arquivo = file_get_contents('imov.json');
        $json = json_decode($arquivo);
        foreach($json->Imoveis as $key => $registro):
            echo "<a href='#imovel-".$registro->codigo."'>";
            echo '<div class="imovel item">
                    <div class="imovel-imagem">
                        <img src="'.$registro->imagem.'" alt="">
                    </div>
                    <div class="imovel-descricao">
                        <h3 class="text-center">'.$registro->tp_bem.'</h3>
                        <p>'.$registro->bairro.' - '.$registro->cidade.'/'.$registro->uf.'</p>
                        <p><span class="text-left">'.$registro->valor.'</span> <span class="text-right">'.$registro->codigo.'</span> </p>
                    </div>
                </div>';
            echo "</a>";

        echo '<div id="imovel-'.$registro->codigo.'" class="modalDialog">';
        echo '    <div> <a href="#close" title="Close" class="close">X</a>';
        echo '          <h1 class="text-center">'.$registro->tp_bem.' para '.$registro->finalidade.'</h1>';
        echo '          <div class="img-imovel"> <img src="'.$registro->imagem.'"></div> ';
        echo '        <p>Tipo de imóvel: '.$registro->tp_bem.'</p>';
        echo '        <p>Endereço: '.$registro->endereco.'</p>';
        echo '        <p>Bairro: '.$registro->bairro.'</p>';
        echo '        <p>Cidade/UF: '.$registro->cidade.'/'.$registro->uf.'</p>';
        echo '        <p>Àrea útil: '.$registro->area_util.'</p>';
        echo '        <p>Àrea total: '.$registro->area_total.'</p>';
        echo '        <p>Valor: '.$registro->valor.'</p>';
        echo '        <p>Benfeitorias:</p>';
        echo '        <p>Quarto: '.$registro->benfeitoria->quartos.'</p>';
        echo '        <p>Sala: '.$registro->benfeitoria->salas.'</p>';
        echo '        <p>Cozinha: '.$registro->benfeitoria->cozinhas.'</p>';
        echo '        <p>Garagem: '.$registro->benfeitoria->garagens.'</p>';
        echo '    </div>';
        echo '</div>';

        endforeach;
        
	}

//     <a href="#openModal">Open Modal</a>

// <div id="openModal" class="modalDialog">
//     <div> <a href="#close" title="Close" class="close">X</a>

//           <h2>Modal Box</h2>

//         <p>This is a sample modal box that can be created using the powers of CSS3.</p>
//         <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
//     </div>
// </div>



    function box(){

        echo '<div class="item">
                <div class="box">
                    <div class="box-head">
                        <h2>Titulo</h2>
                    </div>
                    <div class="box-body">
                        <p class="text-just">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>';
        echo '<div class="item">
                <div class="box">
                    <div class="box-head">
                        <h2>Titulo</h2>
                    </div>
                    <div class="box-body">
                        <p class="text-just">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>';    
        
    }

}
?>
