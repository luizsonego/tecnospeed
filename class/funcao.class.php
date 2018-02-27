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
        echo '        <div class="desc-imovel">';
        echo '        <p>Tipo de imóvel: '.$registro->tp_bem.'</p>';
        echo '        <p>Endereço: '.$registro->endereco.'</p>';
        echo '        <p>Bairro: '.$registro->bairro.'</p>';
        echo '        <p>Cidade/UF: '.$registro->cidade.'/'.$registro->uf.'</p>';
        echo '        <p>Àrea útil: '.$registro->area_util.'</p>';
        echo '        <p>Àrea total: '.$registro->area_total.'</p>';
        echo '        <p>Valor R$: '.$registro->valor.'</p>';

        echo '      <ul>Benfeitorias:
                        <li>Quarto: '.$registro->benfeitoria->quartos.'</li>
                        <li>Sala: '.$registro->benfeitoria->salas.'</li>
                        <li>Cozinha: '.$registro->benfeitoria->cozinhas.'</li>
                        <li>Garagem: '.$registro->benfeitoria->garagens.'</li>
                    </ul>';
        
        echo '    </div>';
        echo '    </div>';
        echo '</div>';

        endforeach;
        
	}

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
