# Проект "Крестики-нолики" (Tic-Tac-Toe)

## Описание проекта

Проект включает разработку игры "Крестики-нолики" (Tic-Tac-Toe) с использованием реляционной базы данных для сохранения результатов игр. Игра реализована на языке PHP с использованием базы данных SQLite. Пользователям предоставляется возможность просматривать историю игр и воспроизводить ранее сыгранные партии.

### Правила игры

- Начинают ходить всегда крестики, кем играет человек определяется случайным образом.
- Информация о датах и исходах всех партий, а также о всех ходах, сделанных во время игры, должна сохраняться в базе данных.
- Для каждой партии в базе должна храниться следующая информация:
  - Размер поля
  - Дата игры
  - Имя игрока
  - Какой фигурой играл человек
  - Какая фигура выиграла в партии
  - Запись ходов в формате:
    `номер хода | координата X | координата O`
- В программе должны быть реализованы три режима:
  - Новая игра.
  - Вывод списка всех сохраненных партий.
  - Повтор любой сохраненной партии (то есть повтор всех ходов из этой партии).

## Требования

Минимальная версия PHP: 8._
Минимальная версия Composer: 2._

## Окружение и требования для запуска

1. **PHP**:

   - Версия: 7.4 или выше.
   - Настройки в `php.ini`:
     - Включите SQLite (`extension=sqlite3`).
     - Убедитесь, что настройки отображения ошибок (`display_errors`) включены в режиме разработки.

2. **SQLite**:

   - Версия: 3.x.
   - Проверьте наличие прав записи в каталоге, где находятся файлы баз данных.

3. **Composer**:
   - Composer должен быть установлен глобально.
   - Используйте команду `composer` для управления зависимостями.
   - Для установки Composer следуйте [официальной документации](https://getcomposer.org/doc/00-intro.md).

---

## Установка и запуск проекта

1. **Склонируйте репозиторий**:

   ```bash
   git clone https://github.com/KirillZharkov/tic-tac-toe.git
   ```

2. **Перейдите в каталог проекта**:

   ```bash
   cd C:\...\tic-tac-toe
   ```

3. **Установите зависимости через Composer**:

   ```bash
   composer install
   ```

4. **Запуск игры: Выполните команду для запуска игры**:

   ```bash
   php bin/tic-tac-toe.php
   ```

   - Или если ваш пакет опубликован на Packagist, установите его глобально:

   ```bash
   composer global require KirillZharkov/tic-tac-toe
   ```

   - И затем выполните команду:

   ```bash
   tic-tac-toe
   ```

## Примечания

- Проверьте права на запись в каталог с базой данных SQLite.

- Дополнительную информацию можно найти в документации PHP, SQLite и Composer:

- [SQLite Documentation](https://www.sqlite.org/docs.html)
- [PHP Documentation](https://www.php.net/docs.php)
- [Composer Documentation](https://getcomposer.org/doc/)

## Ссылки на пакеты

- [Packagist пакет Minesweeper](https://packagist.org/packages/kirillzharkov/tic-tac-toe)
