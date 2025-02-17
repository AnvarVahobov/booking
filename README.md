Задание:
Разработка системы управления бронированием ресурсов

Описание
Создайте API для системы управления бронированием ресурсов. Допустим, у
нас есть различные ресурсы (например, комнаты, автомобили и т.д.), которые
можно бронировать на определённое время. Приложение должно
предоставлять RESTful API для выполнения следующих операций:
1. Создание ресурса
- Эндпоинт: POST /api/resources
- Параметры запроса: name (string, обязательный), type (string, обязательный),
  description (string, необязательный)
2. Получение списка всех ресурсов
- Эндпоинт: GET /api/resources
3. Создание бронирования
- Эндпоинт: POST /api/bookings
- Параметры запроса: resource_id (integer, обязательный), user_id (integer,
  обязательный), start_time (datetime, обязательный), end_time (datetime,
  обязательный)
4. Получение всех бронирований для ресурса
- Эндпоинт: GET /api/resources/{id}/bookings
5. Отмена бронирования
- Эндпоинт: DELETE /api/bookings/{id}

Установка

1. Клонирование репозитория

git clone git@github.com:AnvarVahobov/booking.git
cd booking

2. Установка зависимостей

composer install

3. Настройка переменных окружения

Отредактируйте .env, указав доступы к базе данных и другие параметры 

так же .env.testing для тестов
4. Генерация ключа приложения

php artisan key:generate

5. Настройка базы данных

Создайте базу данных и выполните миграции:

php artisan migrate --seed

6. Запуск сервера

php artisan serve

API Документация

Документация API доступна в Swagger.

Генерация Swagger

php artisan l5-swagger:generate

Открыть: http://localhost/api/documentation

Тестирование

Запуск тестов:

php artisan test



