<?php 
add_action('wp_ajax_nopriv_crianca', 'crianca');
add_action('wp_ajax_crianca', 'crianca');

function crianca() {
    global $wpdb;
    $content = $_POST;
    
    $response['status'] = false;
    $response['content'] = 'Houve algum erro, verifique todos os campos e tente novamente.';
    $content['cpf'] = preg_replace("/[^0-9]/", "", $content['cpf']);
    $content['date_created'] = date("Y-m-d H:i:s");

    $verifyFields = false; 
    if ($content['name'] == '') { $response['content'] = 'O nome digitado não é válido.'; }
    else if ($content['email'] == '') { $response['content'] = 'O e-mail digitado não é válido.'; }
    else if ($content['phone'] == '') { $response['content'] = 'O telefone digitado não é válido.'; }
    else if ($content['message'] == '') { $response['content'] = 'A mensagem digitada não é válida.'; }
    else if (strlen($content['name']) <= 3) { $response['content'] = 'O nome é muito pequeno.'; }
    else if (strlen($content['email']) <= 7) { $response['content'] = 'O e-mail é muito pequeno.'; }
    else if (strlen($content['phone']) <= 9) { $response['content'] = 'O telefone é muito pequeno.'; }
    else if (strlen($content['message']) <= 30) { $response['content'] = 'A mensagem está muito pequena.'; }
    else { $verifyFields = true; }

    /* VERIFICAR ARQUIVO ANEXADO */
    $typeAccepts = array('jpg','png','jpeg', 'JPG','PNG','JPEG');
    $fileTitle = $_FILES['photo']['name'];
    $extFile = pathinfo($fileTitle, PATHINFO_EXTENSION);
    if(!in_array($extFile, $typeAccepts) && !empty($_FILES['photo']) && $_FILES['photo']['tmp_name'] != '') { $verifyFields = false; $response['content'] = 'Insira a foto com a sua mãe para continuar.'; }

    if ($verifyFields) {
        $insertCustomer = $wpdb->insert(
            'form_crianca',
            array(
                'name' => $content['name'],
                'crianca' => $content['crianca'],
                'email' => $content['email'],
                'phone' => $content['phone'],
                'address' => $content['address'],
                'store' => $content['store'],
                'message' => $content['message'],
                'date_created' => $content['date_created'],
                'status_id' => 1
            )
        );
        if ($insertCustomer) {
            $idCustomer = $wpdb->insert_id;
            if (!empty($_FILES['photo']) && $_FILES['photo']['tmp_name']) {

                $slugTitle = sanitize_title($content['name']);
                $pathUpload = (!empty($_FILES['photo'])) ? get_home_path() . '/maes/' . $idCustomer .  '-' . $slugTitle . '.' . $extFile : '';
                $urlUpload = (!empty($_FILES['photo']) || $_FILES['photo']['tmp_name'] == '') ? 'https://www.redeconomia.com.br/maes/' . $idCustomer .  '-' . $slugTitle . '.' . $extFile : '';

                move_uploaded_file($_FILES['photo']['tmp_name'], $pathUpload);
                $wpdb->update(
                    'form_crianca',
                    array( 'photo' => $urlUpload ),
                    array( 'id' => $idCustomer )
                );
            }
            $response['status'] = true;
            $response['content'] = 'Obrigado! Seu cadastro foi efetuado com sucesso.';
        }
    }
    echo json_encode($response);
    exit;
}
?>