# Estrutura MVC com PHP puro
Esta é uma estrutura de MVC com a linguagem PHP simples. É preciso realizar algumas modificações básicas para instalação da plataforma.

## 1. A plataforma depende de um banco de dados MySQL
A plataforma depende de um banco de dados e atualmente está configurado a estrutura MySQL da Oracle.
A conexão é realizada no arquivo que esta no diretório /core/Controller.php

### 1.1. Conexão com o Banco de dados
A linha linha de conhexão é:
$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

Para isso é preciso criar um banco de dados, mesmo sem tabela alguma.
Após isso, terá que ser configurado a variável global que está localizado no arquivo config.php, que está no diretório raiz (/).

## 2.0. Configurando o banco de dados e apontando o ambiente
Existem dois ambientes para o banco: o de desenvolvimento e também o de produção.

Para realizar as configurações isso basta apontar o nome do banco, o endereço ou IP:Port do banco, nome do usuário do banco e também a senha do banco de dados.

if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'nomeDoBancoDeDados';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
} else {
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

Ainda neste arquivo, também é possível realizar as seguintes configurações de URL raiz, geralmente usado no frontend. Basta alterar o nome do domínio na linha:

define("BASE_URL", "http://localhost/meuDominio");

## 3.0 Configuração do .htaccess

Esta etapa é para finalizar a configuração da nossa estrutura junto ao desenvolvimento de nosso sistema. Basta configurar a linha:

RewriteRule ^(.*)$ /nomeDoDominio/index.php/$1 [L]

O nome do domínio deverá ser substituído pelo domínio do usuário.

Não deixe de marcar sua estrela! :)


