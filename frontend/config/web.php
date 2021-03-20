$config = [
/*.....*/
'language' => 'ru-RU',
/*.....*/
'components' => [
/*.....*/
'request' => [
'baseUrl' => '',
'cookieValidationKey' => '.....',
],
'urlManager' => [
// включаем поддержку SEF URL
'enablePrettyUrl' => true,
// не добавлять в URL index.php
'showScriptName' => false,
// правила преобразования адресов
'rules' => [],
],
/*.....*/
],
'params' => $params,
];