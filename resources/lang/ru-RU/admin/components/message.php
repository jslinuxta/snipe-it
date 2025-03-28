<?php

return array(

    'does_not_exist' => 'Компонент не существует.',

    'create' => array(
        'error'   => 'Не удалось создать компонент, попробуйте еще раз.',
        'success' => 'Компонент успешно создан.'
    ),

    'update' => array(
        'error'   => 'Не удалось обновить компонент, попробуйте еще раз',
        'success' => 'Компонент успешно обновлен.'
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены, что хотите удалить этот компонент?',
        'error'   => 'Возникла проблема при удалении компонента, пожалуйста попробуйте еще раз.',
        'success' => 'Компонент успешно удален.',
        'error_qty'   => 'Some components of this type are still checked out. Please check them in and try again.',
    ),

     'checkout' => array(
        'error'   		=> 'Не удалось отвязать компонент, пожалуйста попробуйте еще раз',
        'success' 		=> 'Связь с компонентом успешно удалена.',
        'user_does_not_exist' => 'Неверный пользователь. Попробуйте еще раз.',
        'unavailable'      => 'Недостаточно компонентов: :remaining - осталось, :requested - запрошено',
    ),

    'checkin' => array(
        'error'   		=> 'Не удалось привязать компонент, пожалуйста попробуйте еще раз',
        'success' 		=> 'Компонент успешно привязан.',
        'user_does_not_exist' => 'Неверный пользователь. Пожалуйста, попробуйте еще раз.'
    )


);
