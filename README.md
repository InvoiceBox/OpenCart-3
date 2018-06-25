# Описание платежного модуля ИнвойсБокс для OpenCart 3.0+

Платёжный модуль для интеграции платёжной системы «ИнвойсБокс» и CMS OpenCart версии 3.х. Реализована поддержка платёжного API. Протестировано на системе OpenCart 3.0.2.0.

## Установка модуля

1. Распакуйте архив в корень сайта;
2. В административной панели OpenCart пройдите в раздел <strong>"Модули / Расширения" -> "Модули / Расширения" -> В фильтре выберите "Оплата"</strong>;
3. Найдите модуль <strong>«InvoiceBox»</strong> и активируйте его в разделе <strong>Действие</strong>.


## Настройка модуля
1. В административной панели OpenCart пройдите в раздел <strong>"Модули / Расширения" -> "Модули / Расширения" -> В фильтре выберите "Оплата"</strong>;
2. Нажмите на активную кнопку редактирования;
3. В открывшемся окне редактирования настроек заполните поля:
    - "Идентификатор магазина"
    - "Региональный код магазина"
    - "Ключ безопасности магазина"
4. Настройте статусы заказов, выбирая для каждого статус из списка возможных;
5. Укажите порядок сортировки модуля и выберите статус для модуля: Включено.

### Специфические настройки 

Тестовый режим - включите его для проведения тестовых платежей, при включении этого режима, вы пройдете все шаги в платежном терминале ИнвойсБокс,
но деньги с вашей карты списаны не будут.

	
Статус заказа после оплаты - После успешной оплаты заказа, заказу будет установлен выбранный статус.
	
Статус заказа после подтверждения - При нажатии на кнопку "Подтвердить" на последнем этапе оформления заказа, заказу будет установлен выбранный статус.
   
Статус заказа после неудачной оплаты - Если Invoicebox вернет покупателя после неудачного платежа, заказу будет установлен выбранный статус.
  
Название - Название метода оплаты на странице оформления заказа.
    
Инструкция по оплате - Инструкция по оплате выводится при подтверждении заказа. Если поле не заполнено - инструкция по оплате выводиться не будет.

### Настройка панели ИнвойсБокс:

1. Для настройки панели управления ИнвойсБокс пройдите по url - https://login.invoicebox.ru/ ;
1. Авторизуйтесь и пройдите в раздел "Мои магазины". "Начало работы" -> "Настройки" -> "Мои магазины";
1. Пройдите по вкладку "Уведомления по протоколу" -> выберите "Тип уведомления" "Оплата/HTTP/Post (HTTP POST запрос с данными оплаты в переменных)"
1. В поле "URL уведомления" укажите:

    `<домен_сайта>/index.php?route=extension/payment/invoicebox/callback`

1. Сохраните изменения.