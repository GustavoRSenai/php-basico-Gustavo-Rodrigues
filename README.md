# PHP Básico

O repositório contém arquivos com estrutura referentes ao PHP Básico e como integrar O banco de dados e a programação SQL dentro de arquivos PHP.

Alguns arquivos possuem comandos do PHP como:
* "<?php": Define o inicio da programação em php.
* echo: Utilizado para mostrar textos na página web.
* $"nome": O $ é utlizado para definir variáveis.
* if...else: É uma condicional que define oq a programação deve caso algo seja afirmativo ou negativo.
* $_POST: Define o método em que o site ira buscar os dados na página web($_POST geralmente é usado com formulários em html).
* $_GET: Define que o site irá receber os dados por meio de adições no URL do site.
> Existem diversos outros comandos que podem ser vistos nos arquivos acima. 


Aqui temos uma programação usando algumas dos comandos acima
```PHP
<?php

 
       // Verifica se o formulário foi enviado 
       if ($_SERVER['REQUEST_METHOD'] == 'POST') { $diretorio_destino = 'uploads/';

            // Verifica se a pasta existe, caso não, cria a pastal 
            if (!is_dir($diretorio_destino)) { 
                mkdir($diretorio_destino, 0777, true);
            }
            $nome_arquivo = basename($_FILES['imagem']['name']); 
            $caminho_completo = $diretorio_destino . $nome_arquivo;


        // Move o arquivo enviado para o diretório de destino
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_completo)) {
            echo "<p>Upload realizado com sucesso!</p>";
            echo "<img src='$caminho_completo' alt='Imagem enviada' style='max-width: 300px;'>";
        } else {
            echo "<p>Erro ao fazer upload do arquivo.</p>";
        }
    }
    ?>

```
