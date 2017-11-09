<?php
/**
*
* application [Brazilian Portuguese [pt_br]]
*
* @package language
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.6] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'APPLICATION_SUBJECT'			=> 'Formulario %s',
	'APPLICATION_MESSAGE'			=> 'O usuario, <strong>%1$s</strong>, fez uma candidatura com as seguintes informacoes utilizando o formulario.<br /><br />[b]Nome verdadeiro[/b]: %2$s<br />[b]Candidatando para[/b]: %3$s<br />[b]Razao pela qual esta se candidatando:[/b] %4$s',
	'APPLICATION_SEND'				=> 'O seu pedido foi enviado para os administradores deste forum. eles decidirao sobre sua aplicacao nos proximos dias.',
	'APPLICATION_PAGETITLE'			=> 'Formulario de candidatura',
	'APPLICATION_WELCOME_MESSAGE'	=> 'Bem-vindo ao formulário de candidatura. Temos posições da equipe aberta que você pode, se você sentir que você é a pessoa certa, deseja solicitar. Por favor, preencha o formulário abaixo para ser considerado para a posição escolhida. Boa sorte!<br><br><strong><em>Items marcados com asteriscos precisam ser preenchidos!</em></strong><br><br> No campo acrescente um link de um trabalho seu, caso não tenha postado nada no thetoonz e sua experiência na area',
	'APPLICATION_REALNAME'			=> 'Nome verdadeiro',
	'APPLICATION_EMAIL'				=> 'Endereco de E-mail',
	'APPLICATION_POSITION'			=> 'Posicao desejada',
	'APPLICATION_WHY'				=> 'Porque deveriamos escolhe-lo (a) para essa posicao?',
	'APP_NOT_COMPLETELY_FILLED'		=> 'Voce precisa preencher todos os campos no formulario.',
	'APP_COMPLETE_NAME_WHY'			=> 'Você deve fornecer um nome e por que você quer ser considerado.'
	'ADD_ATTACHMENT_EXPLAIN'		=> 'Anexe um arquivo para que nos ajude na decisao do seu formulario.',
	'ADD_ATTACHMENT_REQ'			=> '<strong>E necessario anexar um arquivo para que voce seja considerado (a) para a posicao desejada</strong>.',
	'APPLICATION_REQUIRES_ATTACHMENT'	=> 'Por favor, anexe um arquivo para a posicao desejada.',
));
