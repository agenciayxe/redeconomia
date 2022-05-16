<?php

function mailRoletaNotification($dadosPessoa, $idPessoa, $infoPremios) {
    
    $name = get_bloginfo('name');
    $emailTest = 'fabiofreitassilvacontato@gmail.com';
    $response = false;
    
    $horario = strftime("%d/%m/%Y %H:%M:%S", strtotime($dadosPessoa['date_created']));
    $listLojas = array(
        'post_type' => 'lojas',
        'p' => $dadosPessoa['loja']
    );
    $wpLojas = new WP_Query($listLojas);

    if ($wpLojas->have_posts()) {
        while ($wpLojas->have_posts()) {
            $wpLojas->the_post();
            $categoryLojas = get_the_terms(get_the_ID(), 'lojas');
            $infoLoja = $categoryLojas[0]->name . ' - ' . get_the_title();
        }
    }

    if ($infoPremios->is_premio == 1 || $dadosPessoa['email'] == $emailTest) {
        $contentBook = '';
        $contentBook .= '
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
            <meta charset="UTF-8">
            <title>' . $name . '</title>
            </head>
            <body>
                <div style="font-size: 18px; font-family: \'Arial\', \'trebuchet MS\'; margin: 15px auto; width: 600px; " width="600">
                    <div align="center">
                        <img src="' . get_bloginfo('template_url') . '/img/logo.png" width="150" height="40" style="width: 150px; height: 40;" alt="' . $name . '">
                        <h2 style=" text-transform: uppercase;">ABRIL DA ECONOMIA</h2>
                        <p>Parabéns!!! Você ganhou um prêmio na roleta da redeconomia!</p>
                        <p>Você recebeu um prêmio através da roleta da redeconomia na campanha <strong>Abril da Economia</strong>. Veja os dados abaixo e retire o prêmio na loja informada, se já fez a retirada é só desconsiderar este e-mail de notificação de acordo com a data e hora abaixo.</p>
                    </div>
                    <div>
                        <h3>Informações</h3>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #da030b; color: #efefef; width: 120px !important; text-align: right">Nome</td>
                                <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' . $dadosPessoa['nome'] . '</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #da030b; color: #efefef; width: 120px !important; text-align: right">E-mail</td>
                                <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' . $dadosPessoa['email'] . '</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #da030b; color: #efefef; width: 120px !important; text-align: right">CPF</td>
                                <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' . $dadosPessoa['cpf'] . '</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #da030b; color: #efefef; width: 120px !important; text-align: right">Telefone</td>
                                <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' . $dadosPessoa['telefone'] . '</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #da030b; color: #efefef; width: 120px !important; text-align: right">Data e Hora</td>
                                <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' . $horario . '</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #da030b; color: #efefef; width: 120px !important; text-align: right">Prêmio Recebido</td>
                                <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' . $infoPremios->nome . '</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </body>
        </html>
        ';
        $destinatario = array( $dadosPessoa['email'], 'roletapremiadaredeconomia@gmail.com' );
        $assunto = 'Prêmio - Redeconomia (Roleta)';
        $headers = array(
            'Content-Type: text/html; charset=UTF-8'
        );
        define('WP_USE_THEMES', false);
        require(ABSPATH . 'wp-load.php');

        $sendMail = wp_mail($destinatario, $assunto, $contentBook, $headers);
        if ($sendMail) { $response = true; }
    }
    return $response;
}
