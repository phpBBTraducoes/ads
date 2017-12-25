<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.4] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Manage ads
	'AD_SETTINGS'				=> 'Configurações de Anúncio',
	'ACTIVE_ADS'				=> 'Anúncios ativos',
	'EXPIRED_ADS'				=> 'Anúncios expirados',
	'STATUS'					=> 'Status',
	'AD_NAME'					=> 'Nome',
	'AD_NAME_EXPLAIN'			=> 'O nome é usado apenas para ajudá-lo a identificar este anúncio.',
	'AD_ENABLED'				=> 'Ativado',
	'AD_ENABLED_EXPLAIN'		=> 'Se desativado, este anúncio não será exibido.',
	'AD_NOTE'					=> 'Notas',
	'AD_NOTE_EXPLAIN'			=> 'Insira as notas para esta propaganda. Essas notas não são exibidas em qualquer lugar exceto no ACP e são opcionais.',
	'AD_CODE'					=> 'Código',
	'AD_CODE_EXPLAIN'			=> 'Insira o código do anúncio aqui. Todo o código deve usar a marcação HTML, os BBCodes não são suportados.',
	'ANALYSE_AD_CODE'			=> 'Analise o código do anúncio',
	'EVERYTHING_OK'				=> 'O código aparece OK.',
	'AD_BANNER'					=> 'Banner do anúncio',
	'BANNER'					=> 'Enviar um banner',
	'BANNER_EXPLAIN'			=> 'Você pode fazer o upload de uma imagem em formato JPG, GIF ou PNG. A imagem será armazenada no diretório <samp>images</samp> do phpBB e uma tag HTML IMG para a imagem será inserida automaticamente no campo do código do anúncio.',
	'BANNER_UPLOAD'				=> 'Upload banner',
	'AD_PLACEMENT'				=> 'Posicionamento do anúncio',
	'AD_LOCATIONS'				=> 'Localizações',
	'AD_LOCATIONS_EXPLAIN'		=> 'Selecione os locais onde você deseja que este anúncio seja exibido. Passe o mouse sobre um local para uma breve descrição dele. Se vários anúncios usam a mesma localização, um anúncio será selecionado aleatoriamente para exibir nesse local de cada vez. Use CTRL + CLICK (ou CMD + CLICK no Mac) para selecionar/desmarcar mais de um local.',
	'AD_PRIORITY'				=> 'Prioridade',
	'AD_PRIORITY_EXPLAIN'		=> 'Defina um número entre 1 e 10. Os anúncios com número maior serão exibidos com mais freqüência quando houver vários anúncios usando o mesmo local.',
	'AD_OPTIONS'				=> 'Opções de anúncio',
	'AD_OWNER'					=> 'Proprietário',
	'AD_OWNER_EXPLAIN'			=> 'A atribuição de um proprietário de anúncio dará permissão a um dos membros do conselho para visualizar a exibição deste anúncio e clique em estatísticas em seu Painel de controle de usuário. Deixe este campo em branco para não atribuir um proprietário de anúncio.',
	'AD_VIEWS'					=> 'Visualizações',
	'AD_VIEWS_LIMIT'			=> 'Visualizações Limite',
	'AD_VIEWS_LIMIT_EXPLAIN'	=> 'Defina o número máximo de vezes que o anúncio será exibido, após o qual o anúncio não será mais exibido. Defina 0 para visualizações ilimitadas.',
	'AD_CLICKS'					=> 'Cliques',
	'AD_CLICKS_LIMIT'			=> 'Cliques Limite',
	'AD_CLICKS_LIMIT_EXPLAIN'	=> 'Defina o número máximo de vezes em que o anúncio será clicado, após o qual o anúncio não será mais exibido. Defina 0 para visualizações ilimitadas.',
	'AD_END_DATE'				=> 'Data final',
	'AD_END_DATE_EXPLAIN'		=> 'Defina a data em que o anúncio expirará e se tornará desativado. Deixe este campo em branco se você não quiser que o anúncio expire. Use o formato <samp>AAAA-MM-DD</samp>.',

	'AD_PREVIEW'				=> 'Prever este anúncio',
	'AD_ENABLE_TITLE'			=> array( // Plural rule doesn't apply here! Just translate the values.
		0 => 'Clique para ativar',
		1 => 'Clique para desativar',
	),
	'AD_EXPIRED_EXPLAIN'		=> 'Este anúncio expirou e foi desativado.',
	'ACP_ADS_EMPTY'				=> 'Nenhum anúncio para exibir. Adicione um usando o botão abaixo.',
	'ACP_ADS_ADD'				=> 'Adicionar novo anúncio',
	'ACP_ADS_EDIT'				=> 'Editar anúncio',

	'AD_NAME_REQUIRED'			=> 'O nome é obrigatório.',
	'AD_NAME_TOO_LONG'			=> 'O comprimento do nome é limitado a %d caracteres.',
	'AD_CODE_ILLEGAL_CHARS'		=> 'O código do anúncio contém os seguintes caracteres não suportados: %s',
	'AD_END_DATE_INVALID'		=> 'A data de término é inválida ou já expirou.',
	'AD_PRIORITY_INVALID'		=> 'A prioridade é inválida. Defina um número entre 1 e 10.',
	'AD_VIEWS_LIMIT_INVALID'	=> 'O limite de visualizações é inválido. Defina um número não negativo.',
	'AD_CLICKS_LIMIT_INVALID'	=> 'O limite de cliques é inválido. Defina um número não negativo.',
	'AD_OWNER_INVALID'			=> 'O proprietário do anúncio é inválido. Por favor selecione um usuário usando o link Procurar um membro.',
	'NO_FILE_SELECTED'			=> 'Nenhum arquivo selecionado.',
	'CANNOT_CREATE_DIRECTORY'	=> 'O diretório <samp>phpbb_ads</samp> não pôde ser criado. Certifique-se de que o diretório <samp>/images</samp> seja gravável.',
	'FILE_MOVE_UNSUCCESSFUL'	=> 'Não é possível mover o arquivo para <samp>images/phpbb_ads</samp>.',
	'ACP_AD_DOES_NOT_EXIST'		=> 'O anúncio não existe.',
	'ACP_AD_ADD_SUCCESS'		=> 'Anúncio adicionado com sucesso.',
	'ACP_AD_EDIT_SUCCESS'		=> 'Anúncio editado com sucesso.',
	'ACP_AD_DELETE_SUCCESS'		=> 'Anúncio deletado com sucesso.',
	'ACP_AD_DELETE_ERRORED'		=> 'Ocorreu um erro ao deletar o anúncio.',
	'ACP_AD_ENABLE_SUCCESS'		=> 'Anúncio ativado com sucesso.',
	'ACP_AD_ENABLE_ERRORED'		=> 'Ocorreu um erro ao ativar o anúncio.',
	'ACP_AD_DISABLE_SUCCESS'	=> 'Anúncio desativado com sucesso.',
	'ACP_AD_DISABLE_ERRORED'	=> 'Ocorreu um erro ao desativar o anúncio.',

	// Analyser tests
	'UNSECURE_CONNECTION'	=> '<strong>Conteúdo misto</strong><br /> Seu quadro é executado em uma conexão HTTPS segura, no entanto, o código do anúncio está tentando carregar o conteúdo de uma conexão HTTP insegura. Isso pode fazer com que os navegadores gerem um aviso de "Conteúdo Misto" para que os usuários saibam que a página contém recursos inseguros.',
	'SCRIPT_WITHOUT_ASYNC'	=> '<strong>JavaScript não assíncrono</strong><br /> Este código de anúncio carrega o código JavaScript de uma maneira não-assíncrona. Isso significa que bloqueará qualquer outro Javascript de carregar até que ele tenha completado o carregamento, o que pode afetar o desempenho da carga da página. O uso do atributo <samp>async</samp> pode acelerar a carga da página.',
	'ALERT_USAGE'			=> '<strong>Uso do <samp>alert()</samp></strong><br /> Seu código usa a função <samp>()</samp> de alerta <samp> que não é uma boa prática e pode distrair os usuários. Alguns navegadores também podem bloquear a carga da página e exibir avisos adicionais para o usuário.',
	'LOCATION_CHANGE'		=> '<strong>Redirecionamento</strong><br /> Seu código aparece, ele pode redirecionar o usuário para outra página ou site. Os redirecionamentos às vezes podem enviar usuários para destinos não intencionais, muitas vezes maliciosos. Verifique a integridade do destino de redirecionamento do seu código de anúncio.',

	// Template locations
	'AD_ABOVE_HEADER'				=> 'Acima do cabeçalho',
	'AD_ABOVE_HEADER_DESC'			=> 'Exibe em todas as páginas antes do cabeçalho da página.',
	'AD_BELOW_HEADER'				=> 'Abaixo do cabeçalho',
	'AD_BELOW_HEADER_DESC'			=> 'Exibe em todas as páginas após o cabeçalho da página (e antes da barra de navegação).',
	'AD_BEFORE_POSTS'				=> 'Antes dos posts',
	'AD_BEFORE_POSTS_DESC'			=> 'Exibe na página do tópico antes do primeiro post.',
	'AD_AFTER_POSTS'				=> 'Depois dos posts',
	'AD_AFTER_POSTS_DESC'			=> 'Exibe na página do tópico após o último post.',
	'AD_BELOW_FOOTER'				=> 'Abaixo do rodapé',
	'AD_BELOW_FOOTER_DESC'			=> 'Exibe em todas as páginas após o rodapé da página.',
	'AD_ABOVE_FOOTER'				=> 'Acima do rodapé',
	'AD_ABOVE_FOOTER_DESC'			=> 'Exibe em todas as páginas antes do rodapé da página.',
	'AD_AFTER_FIRST_POST'			=> 'Depois do primeiro post',
	'AD_AFTER_FIRST_POST_DESC'		=> 'Exibe na página do tópico após o primeiro post.',
	'AD_AFTER_NOT_FIRST_POST'		=> 'Depois de cada post, exceto primeiro',
	'AD_AFTER_NOT_FIRST_POST_DESC'	=> 'Exibe na página do tópico após cada post, exceto o primeiro post.',
	'AD_BEFORE_PROFILE'				=> 'Antes do perfil do usuário',
	'AD_BEFORE_PROFILE_DESC'		=> 'Exibe antes do conteúdo da página de perfil do membro.',
	'AD_AFTER_PROFILE'				=> 'Depois do perfil do usuário',
	'AD_AFTER_PROFILE_DESC'			=> 'Exibe após o conteúdo da página de perfil do membro.',
	'AD_AFTER_HEADER_NAVBAR'		=> 'Depois da barra de navegação do cabeçalho',
	'AD_AFTER_HEADER_NAVBAR_DESC'	=> 'Exibe em todas as páginas após a barra de navegação do cabeçalho.',
	'AD_AFTER_FOOTER_NAVBAR'		=> 'Depois da barra de navegação do rodapé',
	'AD_AFTER_FOOTER_NAVBAR_DESC'	=> 'Exibe em todas as páginas após a barra de navegação do rodapé.',
	'AD_POP_UP'						=> 'Pop-up',
	'AD_POP_UP_DESC'				=> 'Exibe uma vez por dia quando o usuário visita este forum como caixa de sobreposição. O usuário precisa fechar esta caixa para continuar com o conteúdo. Por favor, esteja ciente de que esse tipo de anúncio é muito instigante para o usuário!',
	'AD_SLIDE_UP'					=> 'Slide up',
	'AD_SLIDE_UP_DESC'				=> 'Exibe em todas as páginas depois que o usuário rolar para baixo o conteúdo principal. Deslizar para cima da parte inferior.',

	// Settings
	'ADBLOCKER_LEGEND'				=> 'Bloqueadores de anúncios',
	'ADBLOCKER_MESSAGE'				=> 'Mensagem ao detectar o bloqueador de anúncios',
	'ADBLOCKER_MESSAGE_EXPLAIN'		=> 'Exibe uma mensagem educada aos visitantes que usam bloqueadores de anúncios, avisando-os de considerar a desativação do bloqueio de anúncios neste fórum.',
	'CLICKS_VIEWS_LEGEND'			=> 'Estatísticas e rastreamento',
	'ENABLE_VIEWS'					=> 'Contador de visualizações',
	'ENABLE_VIEWS_EXPLAIN'			=> 'Isso permitirá a contagem de quantas vezes cada anúncio foi exibido. Observe que ele adiciona carga extra ao servidor, portanto, se você não precisar desse recurso, desative-o.',
	'ENABLE_CLICKS'					=> 'Contador de cliques',
	'ENABLE_CLICKS_EXPLAIN'			=> 'Isso permitirá a contagem de quantas vezes cada anúncio foi clicado. Observe que ele adiciona carga extra ao servidor, portanto, se você não precisar desse recurso, desative-o.',
	'HIDE_GROUPS'					=> 'Ocultar anúncios para grupos',
	'HIDE_GROUPS_EXPLAIN'			=> 'Os membros dos grupos selecionados não verão nenhum anúncio. Use CTRL + CLICK (ou CMD + CLICK no Mac) para selecionar/desmarcar mais de um grupo.',

	'ACP_AD_SETTINGS_SAVED'	=> 'Configurações do Gerenciador de Anúncios salvas.',
));
