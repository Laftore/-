<?php
Class Order extends Db{
    use SendEmailOrder;
    use DeliveryAPI;
    // Валидация пришедших из корзины данных и выделение необходимых данных
    public function getData($sessionCartData) {
        return $data;
    }
    // Добавление заказа в бд и вывод статуса о выполненение/ошибке записи
    public function record() {}
    // Записывает статус выполнения заказа в бд
    public function edit(){}
}

trait SendEmailOrder{
    // Отправка письма с заказом
    public function sendTo($target, $content){}
    // Шаблон письма с данными о заказе
    public function envelopeOrder($data){
        return $target;
    }
    public function envelopeOrderSuccess($data){
        return $target;
    }
}
Class Db extends Connection{
    public function record(){}
    public function edit(){}
    public function delete(){}
}
Class Connection {
    // проверка подключения к базе данных
    public function checkConnection(){}
}

trait DeliveryAPI{
    // Получение статусов доставок у транспортной компании
    // Вызывается планировщиком задач
    public function checkDelivery(){}
}
