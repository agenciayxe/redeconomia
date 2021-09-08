<?php 
add_action('wp_ajax_nopriv_roleta', 'roletaSave');
add_action('wp_ajax_roleta', 'roletaSave');

function roletaSave() {
    global $wpdb;
    $content = $_POST;
	date_default_timezone_set("America/Sao_Paulo");

    $arrayReturn = array( 'response' => 'Houve um erro, verifique seus dados', 'status' => false, 'spin' => 3, 'title' => 'Não foi dessa vez', 'message' => 'Infelizmente você não foi sorteado!' );

    $content['cpf'] = preg_replace("/[^0-9]/", "", $content['cpf']);
    $content['date_created'] = date("Y-m-d H:i:s");

    $wpdb->get_results( "SELECT *  FROM roleta_cadastros WHERE email='{$content['email']}'" );
	$emailQuantity = $wpdb->num_rows;

    $wpdb->get_results("SELECT * FROM roleta_cadastros WHERE cpf='{$content['cpf']}'" );
	$cpfQuantity = $wpdb->num_rows;

    if ($content['nome'] == '') { $arrayReturn['response'] = 'O nome digitado não é válido.'; }
    else if ($content['email'] == '') { $arrayReturn['response'] = 'O e-mail digitado não é válido.'; }
    else if ($content['telefone'] == '') { $arrayReturn['response'] = 'O telefone digitado não é válido.'; }
    else if (strlen($content['nome']) <= 3) { $arrayReturn['response'] = 'O nome é muito pequeno.'; }
    else if (strlen($content['email']) <= 7) { $arrayReturn['response'] = 'O e-mail é muito pequeno.'; }
    else if (strlen($content['telefone']) <= 9) { $arrayReturn['response'] = 'O telefone é muito pequeno.'; }
    else if (validaCPF($content['cpf']) == false) { $arrayReturn['response'] = 'O CPF informado não é válido.'; }
    else if ($content['loja'] == '') { $arrayReturn['response'] = 'Você precisa selecionar a loja mais próxima.'; }
    else if ($content['aceito'] == false) { $arrayReturn['response'] = 'Você precisa aceitar os termos pra continuar.'; }
    else if ($emailQuantity > 0) { $arrayReturn['response'] = 'Seu e-mail já participou do sorteio.'; }
    else if ($cpfQuantity > 0) { $arrayReturn['response'] = 'Este CPF já participou do sorteio.'; }
    else {

        // armazena os números
        $arrayMerge = array();

        // Lista de todos os premios
        $listPremios = $wpdb->get_results( "SELECT *  FROM roleta_premios" );
        
        // Lista de cadastros
        $wpdb->get_results( "SELECT * FROM roleta_cadastros" );

        // Número total de cadastros
        $quantityCadastros = $wpdb->num_rows;

        // Lista de prêmios
        $infoPremios = array();

        // Análise de todos os prêmios
        foreach ($listPremios as $singlePremios) {

            // A ID do prêmio
            $idSingle = $singlePremios->id;
            
            // As informações dos prêmios
            $infoPremios[$idSingle] = $singlePremios;

            // Média dos prêmios\
            $mediaFinal = ($quantityCadastros / $singlePremios->media) - 1;
            // Verifica se a média é aceita
            $verificaOpcao = ($mediaFinal > $singlePremios->drawn) ? true: false;

            // Verifica se a quantidade e a média são válidas
            if ($singlePremios->drawn < $singlePremios->quantity && $verificaOpcao) {
                // Adicioona a ID no array de sorteio
                $arrayMerge[] = (int) $idSingle;
            }
        }
        
        // Adiciona mais vezes o não foi dessa vez
        for ($h = 0; $h <= 20; $h++) { $arrayMerge[] = 11; }

        // Efetua o sorteio
        $sorteio = array_rand($arrayMerge);
        $idPremio = $arrayMerge[$sorteio];

        // Faz uma varredura dos premios
        $adicionaPremio = ($infoPremios[$idPremio]->drawn + 1);
        $wpdb->update( 
            'roleta_premios', 
            array( 'drawn' => $adicionaPremio ), 
            array( 'id' => $idPremio ), 
            array( '%d' ), 
            array( '%d' )
        ); 

        $insertCustomer = $wpdb->insert(
            'roleta_cadastros',
            array(
                'nome' => $content['nome'],
                'email' => $content['email'],
                'telefone' => $content['telefone'],
                'cpf' => $content['cpf'],
                'loja' => $content['loja'],
                'aceito' => $content['aceito'],
                'premio_id' => $idPremio,
                'data_hora' => $content['date_created'],
            )
        );
        if ($insertCustomer) {
            // $idCustomer = $wpdb->insert_id;
            // mailContact($idCustomer);
            $arrayReturn['message'] = $infoPremios[$idPremio]->message;
            $arrayReturn['title'] = $infoPremios[$idPremio]->title;
            $arrayReturn['status'] = true;
            $arrayReturn['spin'] = $idPremio;
            $arrayReturn['response'] = 'Obrigado! Seu cadastro foi efetuado com sucesso. ';
        }
        else {
            $arrayReturn['response'] = 'Houve um erro ao salvar seu cadastro no sistema';
        }
    }

    echo json_encode($arrayReturn);
    wp_die();
}
?>