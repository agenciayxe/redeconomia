<?php
/*
Template Name: Nova Roleta (Notificação)
*/

    $listPremios = $wpdb->get_results( "SELECT *  FROM roleta_premios WHERE is_premio=1" );
    $h = 1;
    $numberCountPremios = ($wpdb->num_rows) ? $wpdb->num_rows: 0;
    $emailTest = 'fabiofreitassilvacontato@gmail.com';
    foreach ($listPremios as $singlePremios) {
        $infoPremios = $singlePremios;
        $listCadastros = $wpdb->get_results( sprintf("SELECT *  FROM roleta_cadastros WHERE notification=0 AND premio_id=%s", $singlePremios->id) );
        // $listCadastros = $wpdb->get_results( sprintf("SELECT *  FROM roleta_cadastros WHERE email='%s'", $emailTest) );
        foreach ($listCadastros as $singleCadastros) {
            $idCustomer = $singleCadastros->id;
            $content = array(
                'nome' => $singleCadastros->nome,
                'email' => $singleCadastros->email,
                'telefone' => $singleCadastros->telefone,
                'cpf' => $singleCadastros->cpf,
                'loja' => $singleCadastros->loja,
                'aceito' => $singleCadastros->aceito,
                'date_created' => $singleCadastros->data_hora,
            );
            ?><pre><?php var_dump($content); ?></pre><?php
            ?><pre><?php var_dump($idCustomer); ?></pre><?php
            ?><pre><?php var_dump($infoPremios); ?></pre><?php
            echo mailRoletaNotification($content, $idCustomer, $infoPremios);
            $wpdb->update( 
                'roleta_cadastros', 
                array( 'notification' => 1 ), 
                array( 'id' => $idCustomer ), 
                array( '%d' ), 
                array( '%d' )
            ); 
            
            echo '<br><br>';
            
            if ($h >= 10) {
                break 2;
            }
            $h++;
        }
    }
    
    
?>