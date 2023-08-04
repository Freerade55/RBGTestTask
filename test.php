<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");






?>

<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
	"EMAIL_TO" => "dalarow@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
		),
		"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
    "AJAX_MODE" => "Y"
	),
	false
);?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>