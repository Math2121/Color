<?php
$conn = new PDO("mysql:host=localhost;dbname=color","root","");
$insert = $conn->prepare("INSERT INTO contato (nome,email,assunto,mensagem) VALUES (:NOME,:EMAIL,:ASSUNTO,:MENSAGEM) ");

    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $mail = isset($_POST['email']) ? $_POST['email'] : "";
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : "";
    $assunto = isset($_POST['assunto']) ? $_POST['assunto'] : "";
    $insert->bindParam(":NOME",$nome);
    $insert->bindParam(":EMAIL",$mail);
    $insert->bindParam(":ASSUNTO",$assunto);
    $insert->bindParam(":MENSAGEM",$mensagem);
    $insert->execute();
    

    //montando o email
            $to = 'sac@agenciacolor.com.br';
            $fromNAme= "SITE AGÊNCIA COLOR ";

            $headers = "MIME-Version: 1.1\n"; // Certifique-se de utilizar o MIME 1.1, pois é o mais atual. A versão 1.0 não é recomendado.
            $headers .= "Content-type: text/html; charset=utf-8\n";
            $headers .= 'From: '.$fromNAme.' <'.$to.'>' . "\n"; // Remetente precisa ser uma caixa postal do mesmo dominio da hospedagem
            $headers .= "Return-Path: $nome <$mail>\n";
            $headers .= "Reply-To: $nome <$mail>\n";
            // $headers .= 'Cc: Contato <'.$to.'>' . "\n"; // Com cópia para
            // $headers .= 'Bcc: Teste Suporte <'.$to.'>' . "\n"; // Cópia oculta para
            $subject = $nome." - Contatos - SITE AGÊNCIA COLOR - ".$assunto; //subject
            $message = '<html>
                                <body style="background:#fff; text-align:center; " >
                                        <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#25201c">
                                        <table width="600" align="center" style="background:#fff; text-align:center; ">
                                            <thead>
                                                <tr>
                                                    <td colspan="2">Formulário Contato</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="4" color="#25201c"><strong>'.$assunto.'</strong><hr></font></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Nome:</b></td>
                                                    <td>
                                                        '.$nome.'<br><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>E-mail:</b></td>
                                                    <td>
                                                        '.$mail.'<br><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Assunto:</b></td>
                                                    <td>
                                                        '.$assunto.'<br><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Mensagem:</b></td>
                                                    <td>
                                                        '.$mensagem.'<br><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="25" colspan="2"></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2">
                                                        Obrigado!<br>
                                                        Att. Equipe Color .
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="25" colspan="2"></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </font>
                                </body>
                            </html>';
       
            if (mail($to,$subject, $message, $headers)) {
                header("Location:index.php");
            }else{
                echo "Erro!";
            }
            die();
?>