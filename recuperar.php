<?php
// Verificando se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se a ação é para recuperar senha
    if ($_POST["action"] == "recover_password") {
        // Recupera o e-mail fornecido no formulário
        $email = $_POST["email"];
        
        // Consulta SQL para verificar se o e-mail existe na base de dados
        $sql = "SELECT LOGIN_PESSOA, SENHA FROM pessoas WHERE  LOGIN_PESSOA ='$email'";
        $result = $con->query($sql);
        
        // Verifica se o e-mail foi encontrado
        if ($result->num_rows > 0) {
            // E-mail encontrado, enviar a senha para o e-mail cadastrado
            $row = $result->fetch_assoc();
            $username = $row["LOGIN_PESSOA"];
            $password = $row["SENHA"];
            
            // Envio de e-mail
            $to = $email;
            $subject = "Recuperação de senha";
            $message = "Olá $username, sua senha é: $password";
            $headers = "From: seu_email@seu_dominio.com";
            
            // Envia o e-mail
            if (mail($to, $subject, $message, $headers)) {
                echo "A senha foi enviada para o e-mail cadastrado.";
            } else {
                echo "Houve um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
            }
        } else {
            // E-mail não encontrado na base de dados
            echo "O e-mail fornecido não está cadastrado.";
        }
    }
}

// Fechando a conexão com o banco de dados
$con->close();
?>