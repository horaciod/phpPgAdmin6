<?php

    /**
     * Russian UTF-8 language file for phpPgAdmin.
     * based on translation of Alexander Khodorivsky [askh@ukr.net]
     *
     * @maintainer Alexey Baturin [alexey.baturin.nsk@gmail.com]
     *
     * $Id: russian.php,v 1.12 2007/04/24 11:42:07 soranzo Exp $
     */

// Language and character set
    $lang['applang']    = 'Русский (UTF-8)';
    $lang['applocale']  = 'ru-RU.UTF-8';
    $lang['applangdir'] = 'ltr';

// Welcome
    $lang['strintro']         = 'Добро пожаловать в phpPgAdmin.';
    $lang['strppahome']       = 'phpPgAdmin - домашняя страница';
    $lang['strpgsqlhome']     = 'PostgreSQL - домашняя страница';
    $lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
    $lang['strlocaldocs']     = 'PostgreSQL - документация (локально)';
    $lang['strreportbug']     = 'Отчет об ошибках';
    $lang['strviewfaq']       = 'Просмотр онлайн FAQ';
    $lang['strviewfaq_url']   = 'http://phppgadmin.sourceforge.net/doku.php?id=faq';

// Basic strings
    $lang['strlogin']                  = 'Вход';
    $lang['strloginfailed']            = 'Ошибка входа';
    $lang['strlogindisallowed']        = 'Вход невозможен по соображениям безопасности';
    $lang['strserver']                 = 'Сервер';
    $lang['strservers']                = 'Серверы';
    $lang['strgroupservers']           = 'Серверы в группе "%s"';
    $lang['strallservers']             = 'Все серверы';
    $lang['strintroduction']           = 'Введение';
    $lang['strhost']                   = 'Хост';
    $lang['strport']                   = 'Порт';
    $lang['strlogout']                 = 'Выход';
    $lang['strowner']                  = 'Владелец';
    $lang['straction']                 = 'Действие';
    $lang['stractions']                = 'Действия';
    $lang['strname']                   = 'Имя';
    $lang['strdefinition']             = 'Определение';
    $lang['strproperties']             = 'Свойства';
    $lang['strbrowse']                 = 'Просмотреть';
    $lang['strenable']                 = 'Включить';
    $lang['strdisable']                = 'Выключить';
    $lang['strdrop']                   = 'Удалить';
    $lang['strdropped']                = 'Удалено';
    $lang['strnull']                   = 'Null';
    $lang['strnotnull']                = 'Not Null';
    $lang['strprev']                   = '< Пред';
    $lang['strnext']                   = 'След. >';
    $lang['strfirst']                  = '<< Перв.';
    $lang['strlast']                   = 'Посл. >>';
    $lang['strfailed']                 = 'Прервано';
    $lang['strcreate']                 = 'Создать';
    $lang['strcreated']                = 'Создано';
    $lang['strcomment']                = 'Комментарий';
    $lang['strlength']                 = 'Длина';
    $lang['strdefault']                = 'По умолчанию';
    $lang['stralter']                  = 'Изменить';
    $lang['strok']                     = 'OK';
    $lang['strcancel']                 = 'Отменить';
    $lang['strkill']                   = 'Убить';
    $lang['strac']                     = 'Включить автодополнение';
    $lang['strsave']                   = 'Сохранить';
    $lang['strreset']                  = 'Сбросить';
    $lang['strinsert']                 = 'Вставить';
    $lang['strselect']                 = 'Выбрать';
    $lang['strdelete']                 = 'Удалить';
    $lang['strupdate']                 = 'Обновить';
    $lang['strreferences']             = 'Ссылки';
    $lang['stryes']                    = 'Да';
    $lang['strno']                     = 'Нет';
    $lang['strtrue']                   = 'Истина';
    $lang['strfalse']                  = 'Ложь';
    $lang['stredit']                   = 'Редактировать';
    $lang['strcolumn']                 = 'Атрибут';
    $lang['strcolumns']                = 'Атрибуты';
    $lang['strrows']                   = 'запис(ь/и/ей)';
    $lang['strrowsaff']                = 'запис(ь/и/ей) обработано.';
    $lang['strobjects']                = 'объект(а/ов)';
    $lang['strback']                   = 'Назад';
    $lang['strqueryresults']           = 'Результаты запроса';
    $lang['strshow']                   = 'Показать';
    $lang['strempty']                  = 'Очистить';
    $lang['strlanguage']               = 'Язык';
    $lang['strencoding']               = 'Кодировка';
    $lang['strvalue']                  = 'Значение';
    $lang['strunique']                 = 'Уникальный';
    $lang['strprimary']                = 'Первичный';
    $lang['strexport']                 = 'Экспорт';
    $lang['strimport']                 = 'Импорт';
    $lang['strallowednulls']           = 'Разрешенные NULL-символы';
    $lang['strbackslashn']             = '\N';
    $lang['stremptystring']            = 'Пустая строка/поле';
    $lang['strsql']                    = 'SQL';
    $lang['stradmin']                  = 'Управление';
    $lang['strvacuum']                 = 'Перестроить';
    $lang['stranalyze']                = 'Анализировать';
    $lang['strclusterindex']           = 'Кластеризовать';
    $lang['strclustered']              = 'Кластеризован?';
    $lang['strreindex']                = 'Перестроить индекс';
    $lang['strexecute']                = 'Выполнить';
    $lang['stradd']                    = 'Добавить';
    $lang['strevent']                  = 'Событие';
    $lang['strwhere']                  = 'Где';
    $lang['strinstead']                = 'Делать вместо';
    $lang['strwhen']                   = 'Когда';
    $lang['strformat']                 = 'Формат';
    $lang['strdata']                   = 'Данные';
    $lang['strconfirm']                = 'Подтвердить';
    $lang['strexpression']             = 'Выражение';
    $lang['strellipsis']               = '...';
    $lang['strseparator']              = ': ';
    $lang['strexpand']                 = 'Расширить';
    $lang['strcollapse']               = 'Свернуть';
    $lang['strfind']                   = 'Найти';
    $lang['stroptions']                = 'Опции';
    $lang['strrefresh']                = 'Обновить';
    $lang['strdownload']               = 'Загрузить';
    $lang['strdownloadgzipped']        = 'Загрузить архив gzip';
    $lang['strinfo']                   = 'Сведения';
    $lang['stroids']                   = 'OIDs';
    $lang['stradvanced']               = 'Дополнительно';
    $lang['strvariables']              = 'Переменные';
    $lang['strprocess']                = 'Процесс';
    $lang['strprocesses']              = 'Процессы';
    $lang['strsetting']                = 'Опции';
    $lang['streditsql']                = 'Редактировать SQL';
    $lang['strruntime']                = 'Время выполнения: %s мсек';
    $lang['strpaginate']               = 'Нумеровать страницы с результатами';
    $lang['struploadscript']           = 'или загрузить SQL-скрипт:';
    $lang['strstarttime']              = 'Время начала';
    $lang['strfile']                   = 'Файл';
    $lang['strfileimported']           = 'Файл импортирован.';
    $lang['strtrycred']                = 'Использовать эти данные аутентификации для всех серверов';
    $lang['strconfdropcred']           =
        'В целях безопасности отключение уничтожит общую аутентификационную информацию. Вы действительно хотите отключится?';
    $lang['stractionsonmultiplelines'] = 'Действия над несколькими строками.';
    $lang['strselectall']              = 'Выбрать все';
    $lang['strunselectall']            = 'Отменить выбор всех';
    $lang['strlocale']                 = 'Локаль';
    $lang['strcollation']              = 'Порядок сортировки строк (LC_COLLATE)';
    $lang['strctype']                  = 'Классификация символов (LC_CTYPE)';
    $lang['strdefaultvalues']          = 'Значения по умолчанию';
    $lang['strnewvalues']              = 'Новые значения';
    $lang['strstart']                  = 'Запустить автоматическое обновление';
    $lang['strstop']                   = 'Остановить автоматическое обновление';
    $lang['strgotoppage']              = 'вверх';
    $lang['strtheme']                  = 'Тема';
    $lang['strcluster']                = 'Кластер';

// Admin
    $lang['stradminondatabase'] = 'Следующие административные задачи применяются ко всей базе данных %s.';
    $lang['stradminontable']    = 'Следующие административные задачи применяются к таблице %s.';

// User-supplied SQL history
    $lang['strhistory']            = 'История';
    $lang['strnohistory']          = 'Нет истории.';
    $lang['strclearhistory']       = 'Очистить историю';
    $lang['strdelhistory']         = 'Удалить из истории';
    $lang['strconfdelhistory']     = 'Вы действительно хотите удалить этот запрос из истории?';
    $lang['strconfclearhistory']   = 'Вы действительно хотите очистить историю?';
    $lang['strnodatabaseselected'] = 'Пожалуйста, выберете базу данных.';

// Database sizes
    $lang['strnoaccess'] = 'Нет доступа';
    $lang['strsize']     = 'Размер';
    $lang['strbytes']    = 'байт';
    $lang['strkb']       = 'кБ';
    $lang['strmb']       = 'МБ';
    $lang['strgb']       = 'ГБ';
    $lang['strtb']       = 'ТБ';

// Error handling
    $lang['strnoframes']                      =
        'Это приложение лучше всего работает в браузере, который поддерживает фреймы, но оно может работать и без использования фреймов если перейти по ссылке ниже.';
    $lang['strnoframeslink']                  = 'Использовать без фреймов';
    $lang['strbadconfig']                     = 'Ваш config.inc.php является устаревшим. Вам необходимо обновить его из config.inc.php-dist.';
    $lang['strnotloaded']                     =
        'Ваша инсталяция PHP не поддерживает PostgreSQL. Вам необходимо пересобрать PHP, используя параметр --with-pgsql для configure.';
    $lang['strpostgresqlversionnotsupported'] = 'Версия PostgreSQL не поддерживается. Пожалуйста, обновитесь до версии %s или более поздней.';
    $lang['strbadschema']                     = 'Обнаружена неверная схема.';
    $lang['strbadencoding']                   = 'Ошибка при установке кодировки клиента (client encoding).';
    $lang['strsqlerror']                      = 'Ошибка SQL:';
    $lang['strinstatement']                   = 'В операторе:';
    $lang['strinvalidparam']                  = 'Неверный параметр скрипта.';
    $lang['strnodata']                        = 'Данных не найдено.';
    $lang['strnoobjects']                     = 'Объектов не найдено.';
    $lang['strrownotunique']                  = 'Нет уникального идентификатора для этой записи.';
    $lang['strnouploads']                     = 'Загрузка файла невозможна.';
    $lang['strimporterror']                   = 'Ошибка импорта.';
    $lang['strimporterror-fileformat']        = 'Ошибка импорта: Невозможно автоматически определить формат файла.';
    $lang['strimporterrorline']               = 'Ошибка канала при импорте %s.';
    $lang['strimporterrorline-badcolumnnum']  = 'Ошибка импорта в строке %s: Строка не обладает необходимым числом атрибутов.';
    $lang['strimporterror-uploadedfile']      = 'Ошибка импорта: Файл не может быть загружен на сервер';
    $lang['strcannotdumponwindows']           = 'Экспорт таблиц и схем со сложными именами в Windows не поддерживается.';
    $lang['strinvalidserverparam']            =
        'Попытка соединения с некорректным значением параметра "сервер", возможно кто-то пытается взломать вашу систему.';
    $lang['strnoserversupplied']              = 'Значение параметра "сервер" не представлено!';
    $lang['strbadpgdumppath']                 =
        'Ошибка экспорта: Невозможно выполнить pg_dump (указанный в conf/config.inc.php путь: %s). Пожалуйста, исправте этот путь в конфигурации и заново войдите в систему.';
    $lang['strbadpgdumpallpath']              =
        'Ошибка экспорта: Невозможно выполнить pg_dumpall (указанный в conf/config.inc.php путь: %s). Пожалуйста, исправте этот путь в конфигурации и заново войдите в систему.';
    $lang['strconnectionfail']                = 'Ошибка подключения к серверу.';

// Tables
    $lang['strtable']                     = 'Таблица';
    $lang['strtables']                    = 'Таблицы';
    $lang['strshowalltables']             = 'Показать все таблицы';
    $lang['strnotables']                  = 'Таблиц не найдено.';
    $lang['strnotable']                   = 'Таблица не обнаружена.';
    $lang['strcreatetable']               = 'Создать таблицу';
    $lang['strcreatetablelike']           = 'Создать таблицу наподобие';
    $lang['strcreatetablelikeparent']     = 'Исходная таблица';
    $lang['strcreatelikewithdefaults']    = 'включить значения по умолчанию';
    $lang['strcreatelikewithconstraints'] = 'включить ограничения';
    $lang['strcreatelikewithindexes']     = 'включить индексы';
    $lang['strtablename']                 = 'Имя таблицы';
    $lang['strtableneedsname']            = 'Вам необходимо определить имя таблицы.';
    $lang['strtablelikeneedslike']        = 'Вам необходимо определить исходную таблицу.';
    $lang['strtableneedsfield']           = 'Вам необходимо определить по крайней мере одно поле.';
    $lang['strtableneedscols']            = 'Вам необходимо указать допустимое число атрибутов.';
    $lang['strtablecreated']              = 'Таблица создана.';
    $lang['strtablecreatedbad']           = 'Создание таблицы прервано.';
    $lang['strconfdroptable']             = 'Вы уверены, что хотите удалить таблицу "%s"?';
    $lang['strtabledropped']              = 'Таблица удалена.';
    $lang['strtabledroppedbad']           = 'Удаление таблицы прервано.';
    $lang['strconfemptytable']            = 'Вы уверены, что хотите очистить таблицу "%s"?';
    $lang['strtableemptied']              = 'Таблица очищена.';
    $lang['strtableemptiedbad']           = 'Очистка таблицы прервана.';
    $lang['strinsertrow']                 = 'Добавить запись';
    $lang['strrowinserted']               = 'Запись добавлена.';
    $lang['strrowinsertedbad']            = 'Добавление записи прервано.';
    $lang['strnofkref']                   = 'Нет соответствующего значения внешнего ключа %s.';
    $lang['strrowduplicate']              = 'Вставка строки прервана, попытка сделать дублирующую вставку.';
    $lang['streditrow']                   = 'Редактировать запись';
    $lang['strrowupdated']                = 'Запись обновлена.';
    $lang['strrowupdatedbad']             = 'Обновление записи прервано.';
    $lang['strdeleterow']                 = 'Удалить запись';
    $lang['strconfdeleterow']             = 'Вы уверены, что хотите удалить запись?';
    $lang['strrowdeleted']                = 'Запись удалена.';
    $lang['strrowdeletedbad']             = 'Удаление записи прервано.';
    $lang['strinsertandrepeat']           = 'Вставить и повторить';
    $lang['strnumcols']                   = 'Количество атрибутов';
    $lang['strcolneedsname']              = 'Вам необходимо определить имя столбца';
    $lang['strselectallfields']           = 'Выбрать все поля';
    $lang['strselectneedscol']            = 'Вам необходимо указать по крайней мере один атрибут';
    $lang['strselectunary']               = 'Унарный оператор не может иметь величину.';
    $lang['strcolumnaltered']             = 'Атрибут изменен.';
    $lang['strcolumnalteredbad']          = 'Изменение атрибута прервано.';
    $lang['strconfdropcolumn']            = 'Вы уверены, что хотите удалить атрибут "%s" таблицы "%s"?';
    $lang['strcolumndropped']             = 'Атрибут удален.';
    $lang['strcolumndroppedbad']          = 'Удаление атрибута прервано.';
    $lang['straddcolumn']                 = 'Добавить атрибут';
    $lang['strcolumnadded']               = 'Атрибут добавлен.';
    $lang['strcolumnaddedbad']            = 'Добавление атрибута прервано.';
    $lang['strcascade']                   = 'Каскадом';
    $lang['strtablealtered']              = 'Таблица изменена.';
    $lang['strtablealteredbad']           = 'Изменение таблицы прервано.';
    $lang['strdataonly']                  = 'Только данные';
    $lang['strstructureonly']             = 'Только структуру';
    $lang['strstructureanddata']          = 'Структуру и данные';
    $lang['strtabbed']                    = 'Через табуляцию';
    $lang['strauto']                      = 'Авто';
    $lang['strconfvacuumtable']           = 'Вы действительно хотите перестроить "%s"?';
    $lang['strconfanalyzetable']          = 'Вы действительно хотите произвести анализ "%s"?';
    $lang['strconfreindextable']          = 'Вы действительно хотите перестроить индекс "%s"?';
    $lang['strconfclustertable']          = 'Вы действительно хотите кластеризовать "%s"?';
    $lang['strestimatedrowcount']         = 'Предполагаемое число строк';
    $lang['strspecifytabletoanalyze']     = 'Вам необходимо указать как минимум одну таблицу для анализа.';
    $lang['strspecifytabletoempty']       = 'Вам необходимо указать как минимум одну таблицу для очистки.';
    $lang['strspecifytabletodrop']        = 'Вам необходимо указать как минимум одну таблицу для удаления.';
    $lang['strspecifytabletovacuum']      = 'Вам необходимо указать как минимум одну таблицу для перестроения.';
    $lang['strspecifytabletoreindex']     = 'Вам необходимо указать как минимум одну таблицу для перестроения индекса.';
    $lang['strspecifytabletocluster']     = 'Вам необходимо указать как минимум одну таблицу для кластеризации.';
    $lang['strnofieldsforinsert']         = 'Вы не можете вставить строку в таблицу без столбцов.';

// Columns
    $lang['strcolprop']         = 'Свойства столбца';
    $lang['strnotableprovided'] = 'Значение параметра "таблица" не представлено!';

// Users
    $lang['struser']               = 'Пользователь';
    $lang['strusers']              = 'Пользователи';
    $lang['strusername']           = 'Имя пользователя';
    $lang['strpassword']           = 'Пароль';
    $lang['strsuper']              = 'Суперпользователь?';
    $lang['strcreatedb']           = 'Создать базу данных?';
    $lang['strexpires']            = 'Срок действия';
    $lang['strsessiondefaults']    = 'Опции сеанса по умолчанию';
    $lang['strnousers']            = 'Нет таких пользователей.';
    $lang['struserupdated']        = 'Пользователь обновлен.';
    $lang['struserupdatedbad']     = 'Обновление пользователя прервано.';
    $lang['strshowallusers']       = 'Показать всех пользователей';
    $lang['strcreateuser']         = 'Создать пользователя';
    $lang['struserneedsname']      = 'Вы должны ввести имя пользователя.';
    $lang['strusercreated']        = 'Пользователь создан.';
    $lang['strusercreatedbad']     = 'Создание пользователя прервано.';
    $lang['strconfdropuser']       = 'Вы уверены, что хотите удалить пользователя "%s"?';
    $lang['struserdropped']        = 'Пользователь удален.';
    $lang['struserdroppedbad']     = 'Удаление пользователя прервано.';
    $lang['straccount']            = 'Аккаунт';
    $lang['strchangepassword']     = 'Изменить пароль';
    $lang['strpasswordchanged']    = 'Пароль изменен.';
    $lang['strpasswordchangedbad'] = 'Изменение пароля прервано.';
    $lang['strpasswordshort']      = 'Пароль слишком короткий.';
    $lang['strpasswordconfirm']    = 'Пароль не соответствует подтверждению.';

// Groups
    $lang['strgroup']            = 'Группа';
    $lang['strgroups']           = 'Группы';
    $lang['strshowallgroups']    = 'Показать все группы';
    $lang['strnogroup']          = 'Группа не обнаружена.';
    $lang['strnogroups']         = 'Ни одной группы не найдено.';
    $lang['strcreategroup']      = 'Создать группу';
    $lang['strgroupneedsname']   = 'Вам необходимо указать название группы.';
    $lang['strgroupcreated']     = 'Группа создана.';
    $lang['strgroupcreatedbad']  = 'Создание группы прервано.';
    $lang['strconfdropgroup']    = 'Вы уверены, что хотите удалить группу "%s"?';
    $lang['strgroupdropped']     = 'Группа удалена.';
    $lang['strgroupdroppedbad']  = 'Удаление группы прервано.';
    $lang['strmembers']          = 'Участников';
    $lang['strmemberof']         = 'Добавить в роли';
    $lang['stradminmembers']     = 'Admin-участников';
    $lang['straddmember']        = 'Добавить участника';
    $lang['strmemberadded']      = 'Участник добавлен.';
    $lang['strmemberaddedbad']   = 'Добавление участника прервано.';
    $lang['strdropmember']       = 'Удалить участника';
    $lang['strconfdropmember']   = 'Вы уверены, что хотите удалить участника "%s" из группы "%s"?';
    $lang['strmemberdropped']    = 'Участник удален.';
    $lang['strmemberdroppedbad'] = 'Удаление участника прервано.';

// Roles
    $lang['strrole']           = 'Роль';
    $lang['strroles']          = 'Роли';
    $lang['strshowallroles']   = 'Показать все роли';
    $lang['strnoroles']        = 'Роли не найдены.';
    $lang['strinheritsprivs']  = 'Наследовать привилегии?';
    $lang['strcreaterole']     = 'Создать роль';
    $lang['strcancreaterole']  = 'Может создавать роли?';
    $lang['strrolecreated']    = 'Роль создана.';
    $lang['strrolecreatedbad'] = 'Создание роли прервано.';
    $lang['strrolealtered']    = 'Роль изменена.';
    $lang['strrolealteredbad'] = 'Изменение роли прервано.';
    $lang['strcanlogin']       = 'Может логиниться?';
    $lang['strconnlimit']      = 'Лимит соединений';
    $lang['strdroprole']       = 'Удалить роль';
    $lang['strconfdroprole']   = 'Вы действительно хотите удалить роль "%s"?';
    $lang['strroledropped']    = 'Роль удалена.';
    $lang['strroledroppedbad'] = 'Удаление роли прервано.';
    $lang['strnolimit']        = 'Без ограничений';
    $lang['strnever']          = 'Никогда';
    $lang['strroleneedsname']  = 'Вам необходимо определить имя роли.';

// Privileges
    $lang['strprivilege']    = 'Привилегия';
    $lang['strprivileges']   = 'Привилегии';
    $lang['strnoprivileges'] = 'Объект не имеет привилегий.';
    $lang['strgrant']        = 'Усилить';
    $lang['strrevoke']       = 'Ослабить';
    $lang['strgranted']      = 'Привилегии изменены.';
    $lang['strgrantfailed']  = 'Изменение привилегий прервано.';
    $lang['strgrantbad']     = 'Вам необходимо указать хотя бы одного пользователя или группу и хотя бы одну привилегию.';
    $lang['strgrantor']      = 'Донор';
    $lang['strasterisk']     = '*';

// Databases
    $lang['strdatabase']              = 'База данных';
    $lang['strdatabases']             = 'Базы данных';
    $lang['strshowalldatabases']      = 'Показать все базы данных';
    $lang['strnodatabases']           = 'Ни одной базы данных не найдено.';
    $lang['strcreatedatabase']        = 'Создать базу данных';
    $lang['strdatabasename']          = 'Имя базы данных';
    $lang['strdatabaseneedsname']     = 'Вам необходимо присвоить имя Вашей базе данных.';
    $lang['strdatabasecreated']       = 'База данных создана.';
    $lang['strdatabasecreatedbad']    = 'Создание базы данных прервано.';
    $lang['strconfdropdatabase']      = 'Вы уверены, что хотите уничтожить базу данных "%s"?';
    $lang['strdatabasedropped']       = 'База данных уничтожена.';
    $lang['strdatabasedroppedbad']    = 'Уничтожение базы данных прервано.';
    $lang['strentersql']              = 'Введите SQL-запрос ниже:';
    $lang['strsqlexecuted']           = 'SQL-запрос выполнен.';
    $lang['strvacuumgood']            = 'Операция перестроения завершена.';
    $lang['strvacuumbad']             = 'Операция перестроения прервана.';
    $lang['stranalyzegood']           = 'Операция анализа завершена.';
    $lang['stranalyzebad']            = 'Операция анализа прервана.';
    $lang['strreindexgood']           = 'Переиндексация завершена.';
    $lang['strreindexbad']            = 'Переиндексация прервана.';
    $lang['strfull']                  = 'Полностью';
    $lang['strfreeze']                = 'Заморозить';
    $lang['strforce']                 = 'Принудительно';
    $lang['strsignalsent']            = 'Сигнал отправлен.';
    $lang['strsignalsentbad']         = 'Отправка сигнала прервана.';
    $lang['strallobjects']            = 'Все объекты';
    $lang['strdatabasealtered']       = 'База данных изменена.';
    $lang['strdatabasealteredbad']    = 'Изменение базы данных прервано.';
    $lang['strspecifydatabasetodrop'] = 'Вам необходимо указать как минимум одну базу данных для удаления.';
    $lang['strtemplatedb']            = 'Шаблон';
    $lang['strconfanalyzedatabase']   = 'Вы действительно хотите анализировать все таблицы в базе данных "%s"?';
    $lang['strconfvacuumdatabase']    = 'Вы действительно хотите перестроить все таблицы в базе данных "%s"?';
    $lang['strconfreindexdatabase']   = 'Вы действительно хотите перестроить индекс всех таблиц в базе данных "%s"?';
    $lang['strconfclusterdatabase']   = 'Вы действительно хотите кластеризовать все таблицы в базе данных "%s"?';

// Views
    $lang['strview']              = 'Представление';
    $lang['strviews']             = 'Представления';
    $lang['strshowallviews']      = 'Показать все представления';
    $lang['strnoview']            = 'Представление не найдено.';
    $lang['strnoviews']           = 'Ни одного представления не найдено.';
    $lang['strcreateview']        = 'Создать представление';
    $lang['strviewname']          = 'Имя представления';
    $lang['strviewneedsname']     = 'Вам необходимо указать имя представления.';
    $lang['strviewneedsdef']      = 'Вам необходимо определить атрибуты представления.';
    $lang['strviewneedsfields']   = 'Вам необходимо определить атрибуты для выборки в ваше представление.';
    $lang['strviewcreated']       = 'Представление создано.';
    $lang['strviewcreatedbad']    = 'Создание представления прервано.';
    $lang['strconfdropview']      = 'Вы уверены, что хотите уничтожить представление "%s"?';
    $lang['strviewdropped']       = 'Представление уничтожено.';
    $lang['strviewdroppedbad']    = 'Уничтожение представления прервано.';
    $lang['strviewupdated']       = 'Представление обновлено.';
    $lang['strviewupdatedbad']    = 'Обновление представления прервано.';
    $lang['strviewlink']          = 'Связанные ключи';
    $lang['strviewconditions']    = 'Дополнительные условия';
    $lang['strcreateviewwiz']     = 'Создать представление помощником';
    $lang['strrenamedupfields']   = 'Переименовывать поля-дубликаты';
    $lang['strdropdupfields']     = 'Удалять поля-дубликаты';
    $lang['strerrordupfields']    = 'Ошибка при появлении полей-дубликатов';
    $lang['strviewaltered']       = 'Представление изменено.';
    $lang['strviewalteredbad']    = 'Изменение представления прервано.';
    $lang['strspecifyviewtodrop'] = 'Вам необходимо определить как минимум одно представление для удаления.';

// Sequences
    $lang['strsequence']              = 'Последовательность';
    $lang['strsequences']             = 'Последовательности';
    $lang['strshowallsequences']      = 'Показать все последовательности';
    $lang['strnosequence']            = 'Последовательность не обнаружена.';
    $lang['strnosequences']           = 'Ни одной последовательности не найдено.';
    $lang['strcreatesequence']        = 'Создать последовательность';
    $lang['strlastvalue']             = 'Последнее значение';
    $lang['strincrementby']           = 'Увеличение на';
    $lang['strstartvalue']            = 'Начальное значение';
    $lang['strmaxvalue']              = 'Макс. величина';
    $lang['strminvalue']              = 'Мин. величина';
    $lang['strcachevalue']            = 'Размер кэша';
    $lang['strlogcount']              = 'Log Count';
    $lang['strcancycle']              = 'Может зацикливаться?';
    $lang['striscalled']              = 'Увеличит последнее значение после получения следующего значения (is_called)?';
    $lang['strsequenceneedsname']     = 'Вам необходимо указать имя последовательности.';
    $lang['strsequencecreated']       = 'Последовательность создана.';
    $lang['strsequencecreatedbad']    = 'Создание последовательности прервано.';
    $lang['strconfdropsequence']      = 'Вы уверены, что хотите уничтожить последовательность "%s"?';
    $lang['strsequencedropped']       = 'Последовательность уничтожена.';
    $lang['strsequencedroppedbad']    = 'Уничтожение последовательности прервано.';
    $lang['strsequencereset']         = 'Последовательность сброшена.';
    $lang['strsequenceresetbad']      = 'Сброс последовательности прерван.';
    $lang['strsequencealtered']       = 'Последовательность изменена.';
    $lang['strsequencealteredbad']    = 'Изменение последовательности прервано.';
    $lang['strsetval']                = 'Установить значение';
    $lang['strsequencesetval']        = 'Значение последовательности установлено.';
    $lang['strsequencesetvalbad']     = 'Изменение значения последовательности прервано.';
    $lang['strnextval']               = 'Инкрементировать значение';
    $lang['strsequencenextval']       = 'Значение последовательности инкрементировано.';
    $lang['strsequencenextvalbad']    = 'Инкрементирование значения последовательности прервано.';
    $lang['strspecifysequencetodrop'] = 'Вам необходимо указать как минимун одну последовательность для удаления.';

// Indexes
    $lang['strindex']              = 'Индекс';
    $lang['strindexes']            = 'Индексы';
    $lang['strindexname']          = 'Имя индекса';
    $lang['strshowallindexes']     = 'Показать все индексы';
    $lang['strnoindex']            = 'Индекс не обнаружен.';
    $lang['strnoindexes']          = 'Ни одного индекса не найдено.';
    $lang['strcreateindex']        = 'Создать индекс';
    $lang['strtabname']            = 'Имя таблицы';
    $lang['strcolumnname']         = 'Имя атрибута';
    $lang['strindexneedsname']     = 'Вам необходимо указать имя индекса';
    $lang['strindexneedscols']     = 'Вам необходимо указать допустимое количество атрибутов.';
    $lang['strindexcreated']       = 'Индекс создан.';
    $lang['strindexcreatedbad']    = 'Создание индекса прервано.';
    $lang['strconfdropindex']      = 'Вы уверены, что хотите уничтожить индекс "%s"?';
    $lang['strindexdropped']       = 'Индекс уничтожен.';
    $lang['strindexdroppedbad']    = 'Уничтожение индекса прервано.';
    $lang['strkeyname']            = 'Имя ключа';
    $lang['struniquekey']          = 'Уникальный ключ';
    $lang['strprimarykey']         = 'Первичный ключ';
    $lang['strindextype']          = 'Вид индекса';
    $lang['strtablecolumnlist']    = 'Атрибутов в таблице';
    $lang['strindexcolumnlist']    = 'Атрибутов в индексе';
    $lang['strclusteredgood']      = 'Кластеризация завершена.';
    $lang['strclusteredbad']       = 'Кластеризация прервана.';
    $lang['strconcurrently']       = 'Без блокировки записи (CONCURRENTLY)';
    $lang['strnoclusteravailable'] = 'Таблица не кластеризуема по индексу.';

// Rules
    $lang['strrules']          = 'Правила';
    $lang['strrule']           = 'Правило';
    $lang['strshowallrules']   = 'Показать все правила';
    $lang['strnorule']         = 'Правило не найдено.';
    $lang['strnorules']        = 'Ни одного правила не найдено.';
    $lang['strcreaterule']     = 'Создать правило';
    $lang['strrulename']       = 'Имя правила';
    $lang['strruleneedsname']  = 'Вам необходимо указать имя правила.';
    $lang['strrulecreated']    = 'Правило создано.';
    $lang['strrulecreatedbad'] = 'Создание правила прервано.';
    $lang['strconfdroprule']   = 'Вы уверены, что хотите уничтожить правило "%s" on "%s"?';
    $lang['strruledropped']    = 'Правило уничтожено.';
    $lang['strruledroppedbad'] = 'Уничтожение правила прервано.';

// Constraints
    $lang['strconstraint']           = 'Ограничение';
    $lang['strconstraints']          = 'Ограничения';
    $lang['strshowallconstraints']   = 'Показать все ограничения';
    $lang['strnoconstraints']        = 'Ни одного ограничения не найдено.';
    $lang['strcreateconstraint']     = 'Создать ограничение';
    $lang['strconstraintcreated']    = 'Ограничение создано.';
    $lang['strconstraintcreatedbad'] = 'Создание ограничения прервано.';
    $lang['strconfdropconstraint']   = 'Вы уверены, что хотите уничтожить ограничение "%s" on "%s"?';
    $lang['strconstraintdropped']    = 'Ограничение уничтожено.';
    $lang['strconstraintdroppedbad'] = 'Уничтожение ограничения прервано.';
    $lang['straddcheck']             = 'Добавить проверку';
    $lang['strcheckneedsdefinition'] = 'Ограничение проверки нуждается в определении.';
    $lang['strcheckadded']           = 'Ограничение проверки добавлено.';
    $lang['strcheckaddedbad']        = 'Добавление ограничения проверки прервано.';
    $lang['straddpk']                = 'Добавить первичный ключ';
    $lang['strpkneedscols']          = 'Первичный ключ должен включать хотя бы один атрибут.';
    $lang['strpkadded']              = 'Первичный ключ добавлен.';
    $lang['strpkaddedbad']           = 'Добавление первичного ключа прервано.';
    $lang['stradduniq']              = 'Добавить уникальный ключ';
    $lang['struniqneedscols']        = 'Уникальный ключ должен включать хотя бы один атрибут.';
    $lang['struniqadded']            = 'Уникальный ключ добавлен.';
    $lang['struniqaddedbad']         = 'Добавление уникального ключа прервано.';
    $lang['straddfk']                = 'Добавить внешний ключ';
    $lang['strfkneedscols']          = 'Внешний ключ должен включать хотя бы один атрибут.';
    $lang['strfkneedstarget']        = 'Внешнему ключу необходимо указать целевую таблицу.';
    $lang['strfkadded']              = 'Внешний ключ добавлен.';
    $lang['strfkaddedbad']           = 'Добавление внешнего ключа прервано.';
    $lang['strfktarget']             = 'Целевая таблица';
    $lang['strfkcolumnlist']         = 'Атрибуты в ключе';
    $lang['strondelete']             = 'при удалении';
    $lang['stronupdate']             = 'при обновлении';

// Functions
    $lang['strfunction']               = 'Функция';
    $lang['strfunctions']              = 'Функции';
    $lang['strshowallfunctions']       = 'Показать все функции';
    $lang['strnofunction']             = 'Функция не обнаружена.';
    $lang['strnofunctions']            = 'Ни одной функции не найдено.';
    $lang['strcreateplfunction']       = 'Создать SQL/PL функцию';
    $lang['strcreateinternalfunction'] = 'Создать внутреннюю функцию';
    $lang['strcreatecfunction']        = 'Создать функцию на языке C';
    $lang['strfunctionname']           = 'Имя функции';
    $lang['strreturns']                = 'Возвращаемое значение';
    $lang['strproglanguage']           = 'Язык';
    $lang['strfunctionneedsname']      = 'Вам необходимо указать имя функции.';
    $lang['strfunctionneedsdef']       = 'Вам необходимо определить функцию.';
    $lang['strfunctioncreated']        = 'Функция создана.';
    $lang['strfunctioncreatedbad']     = 'Создание функции прервано.';
    $lang['strconfdropfunction']       = 'Вы уверены, что хотите уничтожить функцию "%s"?';
    $lang['strfunctiondropped']        = 'Функция уничтожена.';
    $lang['strfunctiondroppedbad']     = 'Уничтожение функции прервано.';
    $lang['strfunctionupdated']        = 'Функция обновлена.';
    $lang['strfunctionupdatedbad']     = 'Обновление функции прервано.';
    $lang['strobjectfile']             = 'Объектный файл';
    $lang['strlinksymbol']             = 'Символ линковки (имя функции в C)';
    $lang['strarguments']              = 'Аргументы';
    $lang['strargmode']                = 'Режим';
    $lang['strargtype']                = 'Тип';
    $lang['strargadd']                 = 'Добавить еще аргумент';
    $lang['strargremove']              = 'Удалить этот аргумент';
    $lang['strargnoargs']              = 'Эта функция не будет принимать аргументов.';
    $lang['strargenableargs']          = 'Включить передачу аргументов этой функции.';
    $lang['strargnorowabove']          = 'Необходима строка выше этой строки.';
    $lang['strargnorowbelow']          = 'Необходима строка ниже этой строки.';
    $lang['strargraise']               = 'Переместить вверх.';
    $lang['strarglower']               = 'Переместить вниз.';
    $lang['strargremoveconfirm']       = 'Вы действительно хотите удалить этот аргумент? Отменить удаление невозможно.';
    $lang['strfunctioncosting']        = 'Стоимости функции';
    $lang['strresultrows']             = 'Строк в результате';
    $lang['strexecutioncost']          = 'Стоимость исполнения';
    $lang['strspecifyfunctiontodrop']  = 'Вам необходимо указать как минимум одну функцию для удаления.';

// Triggers
    $lang['strtrigger']            = 'Триггер';
    $lang['strtriggers']           = 'Триггеры';
    $lang['strshowalltriggers']    = 'Показать все триггеры';
    $lang['strnotrigger']          = 'Триггер не обнаружен.';
    $lang['strnotriggers']         = 'Ни одного триггера не найдено.';
    $lang['strcreatetrigger']      = 'Создать триггер';
    $lang['strtriggerneedsname']   = 'Вам необходимо указать имя триггера.';
    $lang['strtriggerneedsfunc']   = 'Вам необходимо определить функцию триггера.';
    $lang['strtriggercreated']     = 'Триггер создан.';
    $lang['strtriggercreatedbad']  = 'Создание триггера прервано.';
    $lang['strconfdroptrigger']    = 'Вы уверены, что хотите уничтожить триггер "%s" на "%s"?';
    $lang['strconfenabletrigger']  = 'Вы действительно хотите включить триггер "%s" на "%s"?';
    $lang['strconfdisabletrigger'] = 'Вы действительно хотите выключить триггер "%s" на "%s"?';
    $lang['strtriggerdropped']     = 'Триггер уничтожен.';
    $lang['strtriggerdroppedbad']  = 'Уничтожение триггера прервано.';
    $lang['strtriggerenabled']     = 'Триггер включен.';
    $lang['strtriggerenabledbad']  = 'Включение триггера прервано.';
    $lang['strtriggerdisabled']    = 'Триггер выключен.';
    $lang['strtriggerdisabledbad'] = 'Выключение триггера прервано.';
    $lang['strtriggeraltered']     = 'Триггер изменен.';
    $lang['strtriggeralteredbad']  = 'Изменение триггера прервано.';
    $lang['strforeach']            = 'Для каждого';

// Types
    $lang['strtype']           = 'Тип данных';
    $lang['strtypes']          = 'Типы данных';
    $lang['strshowalltypes']   = 'Показать все типы данных';
    $lang['strnotype']         = 'Тип данных не обнаружен.';
    $lang['strnotypes']        = 'Ни одного типа данных не найдено.';
    $lang['strcreatetype']     = 'Создать тип данных';
    $lang['strcreatecomptype'] = 'Создать композитный тип';
    $lang['strcreateenumtype'] = 'Создать перечислимый тип';
    $lang['strtypeneedsfield'] = 'Вам необходимо указать как минимум одно поле.';
    $lang['strtypeneedsvalue'] = 'Вам необходимо указать как минимум одно значение.';
    $lang['strtypeneedscols']  = 'Вам необходимо указать корректное число полей.';
    $lang['strtypeneedsvals']  = 'Вам необходимо указать корректное число значений.';
    $lang['strinputfn']        = 'Функция ввода';
    $lang['stroutputfn']       = 'Функция вывода';
    $lang['strpassbyval']      = 'Передать по значению?';
    $lang['stralignment']      = 'Выравнивание';
    $lang['strelement']        = 'Элемент';
    $lang['strdelimiter']      = 'Разделитель';
    $lang['strstorage']        = 'Хранилище';
    $lang['strfield']          = 'Поле';
    $lang['strnumfields']      = 'Кол-во полей';
    $lang['strnumvalues']      = 'Кол-во значений';
    $lang['strtypeneedsname']  = 'Вам необходимо указать имя типа данных.';
    $lang['strtypeneedslen']   = 'Вам необходимо указать размер для типа данных.';
    $lang['strtypecreated']    = 'Тип данных создан.';
    $lang['strtypecreatedbad'] = 'Создание типа данных прервано.';
    $lang['strconfdroptype']   = 'Вы уверены, что хотите уничтожить тип данных "%s"?';
    $lang['strtypedropped']    = 'Тип данных уничтожен.';
    $lang['strtypedroppedbad'] = 'Уничтожение типа данных прервано.';
    $lang['strflavor']         = 'Тип';
    $lang['strbasetype']       = 'Базовый';
    $lang['strcompositetype']  = 'Композитный';
    $lang['strpseudotype']     = 'Псевдо';
    $lang['strenum']           = 'Перечислимый';
    $lang['strenumvalues']     = 'Перечислимые значения';

// Schemas
    $lang['strschema']              = 'Схема';
    $lang['strschemas']             = 'Схемы';
    $lang['strshowallschemas']      = 'Показать все схемы';
    $lang['strnoschema']            = 'Схема не обнаружена.';
    $lang['strnoschemas']           = 'Ни одной схемы не найдено.';
    $lang['strcreateschema']        = 'Создать схему';
    $lang['strschemaname']          = 'Имя схемы';
    $lang['strschemaneedsname']     = 'Вам необходимо указать имя схемы.';
    $lang['strschemacreated']       = 'Схема создана.';
    $lang['strschemacreatedbad']    = 'Создание схемы прервано.';
    $lang['strconfdropschema']      = 'Вы уверены, что хотите уничтожить схему "%s"?';
    $lang['strschemadropped']       = 'Схема уничтожена.';
    $lang['strschemadroppedbad']    = 'Уничтожение схемы прервано.';
    $lang['strschemaaltered']       = 'Схема обновлена.';
    $lang['strschemaalteredbad']    = 'Обновление схемы прервано.';
    $lang['strsearchpath']          = 'Пути поиска в схемах';
    $lang['strspecifyschematodrop'] = 'Вам необходимо указать как минимум одну схему для удаления.';

// Reports

// Domains
    $lang['strdomain']           = 'Домен';
    $lang['strdomains']          = 'Домены';
    $lang['strshowalldomains']   = 'Показать все домены';
    $lang['strnodomains']        = 'Ни одного домена не найдено.';
    $lang['strcreatedomain']     = 'Создать домен';
    $lang['strdomaindropped']    = 'Домен удален.';
    $lang['strdomaindroppedbad'] = 'Удаление домена прервано.';
    $lang['strconfdropdomain']   = 'Вы уверены, что хотите удалить домен "%s"?';
    $lang['strdomainneedsname']  = 'Вам необходимо указать имя домена.';
    $lang['strdomaincreated']    = 'Домен создан.';
    $lang['strdomaincreatedbad'] = 'Создание домена прервано.';
    $lang['strdomainaltered']    = 'Домен изменен.';
    $lang['strdomainalteredbad'] = 'Изменение домена прервано.';

// Operators
    $lang['stroperator']           = 'Оператор';
    $lang['stroperators']          = 'Операторы';
    $lang['strshowalloperators']   = 'Показать все операторы';
    $lang['strnooperator']         = 'Оператор не обнаружен.';
    $lang['strnooperators']        = 'Операторы не обнаружены.';
    $lang['strcreateoperator']     = 'Создать оператор';
    $lang['strleftarg']            = 'Тип левого аргумента';
    $lang['strrightarg']           = 'Тип правого аргумента';
    $lang['strcommutator']         = 'Преобразование';
    $lang['strnegator']            = 'Отрицание';
    $lang['strrestrict']           = 'Ослабление';
    $lang['strjoin']               = 'Объединение';
    $lang['strhashes']             = 'Хеширование';
    $lang['strmerges']             = 'Слияние';
    $lang['strleftsort']           = 'Сотировка по левому';
    $lang['strrightsort']          = 'Сотировка по правому';
    $lang['strlessthan']           = 'Меньше';
    $lang['strgreaterthan']        = 'Больше';
    $lang['stroperatorneedsname']  = 'Вам необходимо указать название оператора.';
    $lang['stroperatorcreated']    = 'Оператор создан';
    $lang['stroperatorcreatedbad'] = 'Создание оператора прервано.';
    $lang['strconfdropoperator']   = 'Вы уверены, что хотите уничтожить оператор "%s"?';
    $lang['stroperatordropped']    = 'Оператор удален.';
    $lang['stroperatordroppedbad'] = 'Удаление оператора прервано.';

// Casts
    $lang['strcasts']        = 'Образцы';
    $lang['strnocasts']      = 'Образцов не найдено.';
    $lang['strsourcetype']   = 'Тип источника';
    $lang['strtargettype']   = 'Тип приемника';
    $lang['strimplicit']     = 'Неявный';
    $lang['strinassignment'] = 'В назначении';
    $lang['strbinarycompat'] = '(двоично совместимый)';

// Conversions
    $lang['strconversions']    = 'Преобразование';
    $lang['strnoconversions']  = 'Преобразований не найдено.';
    $lang['strsourceencoding'] = 'Кодировка источника';
    $lang['strtargetencoding'] = 'Кодировка приемника';

// Languages
    $lang['strlanguages']   = 'Языки';
    $lang['strnolanguages'] = 'Языков не найдено.';
    $lang['strtrusted']     = 'Проверено';

// Info
    $lang['strnoinfo']          = 'Нет доступной информации.';
    $lang['strreferringtables'] = 'Ссылающиеся таблицы';
    $lang['strparenttables']    = 'Родительские таблицы';
    $lang['strchildtables']     = 'Дочерние таблицы';

// Aggregates
    $lang['straggregate']           = 'Агрегатное выражение';
    $lang['straggregates']          = 'Агрегатные выражения';
    $lang['strnoaggregates']        = 'Агрегатных выражений не найдено.';
    $lang['stralltypes']            = '(Все типы)';
    $lang['strcreateaggregate']     = 'Создать агрегатное выражение';
    $lang['straggrbasetype']        = 'Входной тип данных';
    $lang['straggrsfunc']           = 'Функция смены состояний';
    $lang['straggrstype']           = 'Тип переменной состояния';
    $lang['straggrffunc']           = 'Финальная функция';
    $lang['straggrinitcond']        = 'Начальное условие';
    $lang['straggrsortop']          = 'Оператор сортировки';
    $lang['strconfdropaggregate']   = 'Вы действительно хотите удалить агрегатное выражение "%s"?';
    $lang['straggregatedropped']    = 'Агрегатное выражение удалено.';
    $lang['straggregatedroppedbad'] = 'Удаление агрегатного выражения прервано.';
    $lang['straggraltered']         = 'Агрегатное выражение изменено.';
    $lang['straggralteredbad']      = 'Изменение агрегатного выражения прервано.';
    $lang['straggrneedsname']       = 'Вам необходимо определить имя агрегатного выражения.';
    $lang['straggrneedsbasetype']   = 'Вам необходимо указать входной тип данных для агрегатного выражения.';
    $lang['straggrneedssfunc']      = 'Вам необходимо укакзать имя функции смены состояний для агрегатного выражения.';
    $lang['straggrneedsstype']      = 'Вам необходимо указать тип переменной состояния для агрегатного выражения.';
    $lang['straggrcreated']         = 'Агрегатное выражение создано.';
    $lang['straggrcreatedbad']      = 'Создание агрегатного выражения прервано.';
    $lang['straggrshowall']         = 'Показать все агрегатные выражения';

// Operator Classes
    $lang['stropclasses']    = 'Классы операторов';
    $lang['strnoopclasses']  = 'Классов операторов не найдено.';
    $lang['straccessmethod'] = 'Метод доступа';

// Stats and performance
    $lang['strrowperf']    = 'Представление записи';
    $lang['strioperf']     = 'Представление ввода/вывода';
    $lang['stridxrowperf'] = 'Представление индекса записи';
    $lang['stridxioperf']  = 'Представление индекса ввода/вывода';
    $lang['strpercent']    = '%';
    $lang['strsequential'] = 'Последовательный';
    $lang['strscan']       = 'Сканировать';
    $lang['strread']       = 'Читать';
    $lang['strfetch']      = 'Извлечь';
    $lang['strheap']       = 'Мусор';
    $lang['strtoast']      = 'TOAST';
    $lang['strtoastindex'] = 'TOAST индекс';
    $lang['strcache']      = 'Кеш';
    $lang['strdisk']       = 'Диск';
    $lang['strrows2']      = 'Записи';

// Tablespaces
    $lang['strtablespace']           = 'Табличное пространство';
    $lang['strtablespaces']          = 'Табличные пространства';
    $lang['strshowalltablespaces']   = 'Показать все табличные пространства';
    $lang['strnotablespaces']        = 'Табличные пространства не найдены.';
    $lang['strcreatetablespace']     = 'Создать табличное пространство';
    $lang['strlocation']             = 'Расположение';
    $lang['strtablespaceneedsname']  = 'Вам необходимо определить имя табличного пространства.';
    $lang['strtablespaceneedsloc']   = 'Вам необходимо определить директорию, в которой табличное пространство буде создано.';
    $lang['strtablespacecreated']    = 'Табличное пространство создано.';
    $lang['strtablespacecreatedbad'] = 'Создание табличного пространства прервано.';
    $lang['strconfdroptablespace']   = 'Вы действительно хотите удалить табличное пространство "%s"?';
    $lang['strtablespacedropped']    = 'Табличное пространство удалено.';
    $lang['strtablespacedroppedbad'] = 'Удаление табличного пространства прервано.';
    $lang['strtablespacealtered']    = 'Табличное пространство изменено.';
    $lang['strtablespacealteredbad'] = 'Изменение табличного пространства прервано.';

// Miscellaneous
    $lang['strtopbar']          = '%s выполняется на %s:%s -- Вы зарегистрированы как "%s"';
    $lang['strtimefmt']         = ' j-m-Y  g:i';
    $lang['strhelp']            = 'Помощь';
    $lang['strhelpicon']        = '?';
    $lang['strhelppagebrowser'] = 'Просмотр страниц помощи';
    $lang['strselecthelppage']  = 'Выберете страницу помощи';
    $lang['strinvalidhelppage'] = 'Неправильная страница помощи.';
    $lang['strlogintitle']      = 'Вошли на %s';
    $lang['strlogoutmsg']       = 'Вышли из %s';
    $lang['strloading']         = 'Загрузка...';
    $lang['strerrorloading']    = 'Ошибка при загрузке';
    $lang['strclicktoreload']   = 'Щелкните для перезагрузки';

// Autovacuum
    $lang['strautovacuum']             = 'Автоматическое перестроение';
    $lang['strturnedon']               = 'Включено';
    $lang['strturnedoff']              = 'Выключено';
    $lang['strenabled']                = 'Включено';
    $lang['strnovacuumconf']           = 'Конфигурация автоматического перестроения не найдена.';
    $lang['strvacuumbasethreshold']    = 'Базовый порог перестроения';
    $lang['strvacuumscalefactor']      = 'Масштабный множитель перестроения';
    $lang['stranalybasethreshold']     = 'Базовый порог анализа';
    $lang['stranalyzescalefactor']     = 'Масштабный множитель анализа';
    $lang['strvacuumcostdelay']        = 'Задержка при превышении стоимости перестроения';
    $lang['strvacuumcostlimit']        = 'Ограничение стоимости перестроения';
    $lang['strvacuumpertable']         = 'Установки автоматического перестроения по таблицам';
    $lang['straddvacuumtable']         = 'Добавить установки автоматического перестроения для таблицы';
    $lang['streditvacuumtable']        = 'Редактировать установки автоматического перестроения для таблицы %s';
    $lang['strdelvacuumtable']         = 'Удалить установки автоматического перестроения для таблицы %s?';
    $lang['strvacuumtablereset']       = 'Сброс установок автоматического перестроения для таблицы %s к значениям по умолчанию';
    $lang['strdelvacuumtablefail']     = 'Ошибка при удалении установок автоматического перестроения для таблицы %s';
    $lang['strsetvacuumtablesaved']    = 'Установки автоматического перестроения для таблицы %s сохранены.';
    $lang['strsetvacuumtablefail']     = 'Ошибка при сохранении установок автоматического перестроения %s.';
    $lang['strspecifydelvacuumtable']  = 'Вам необходимо указать таблицу, для которой вы хотите удалить установки автоматического перестроения.';
    $lang['strspecifyeditvacuumtable'] =
        'Вам необходимо указать таблицу, для которой вы хотите редактировать установки автоматического перестроения.';
    $lang['strnotdefaultinred']        = 'Значения, отличные от значений по умолчанию, отмечены красным цветом.';

// Table-level Locks
    $lang['strlocks']              = 'Блокировки';
    $lang['strtransaction']        = 'ID транзакции';
    $lang['strvirtualtransaction'] = 'ID виртуальной транзакции';
    $lang['strprocessid']          = 'ID процесса';
    $lang['strmode']               = 'Режим блокировки';
    $lang['strislockheld']         = 'Блокировка удерживается?';

// Prepared transactions
    $lang['strpreparedxacts'] = 'Подготовленные транзакции';
    $lang['strxactid']        = 'ID транзакции';
    $lang['strgid']           = 'Глобальный ID';

// Fulltext search
    $lang['strfulltext']                = 'Полнотекстовый поиск (FTS)';
    $lang['strftsconfig']               = 'Конфигурация FTS';
    $lang['strftsconfigs']              = 'Конфигурации';
    $lang['strftscreateconfig']         = 'Создать конфигурацию FTS';
    $lang['strftscreatedict']           = 'Создать словарь';
    $lang['strftscreatedicttemplate']   = 'Создать шаблон словаря';
    $lang['strftscreateparser']         = 'Создать парсер';
    $lang['strftsnoconfigs']            = 'Конфигурации FTS не найдены.';
    $lang['strftsconfigdropped']        = 'Конфигурация FTS удалена.';
    $lang['strftsconfigdroppedbad']     = 'Удаление конфигурации FTS прервано.';
    $lang['strconfdropftsconfig']       = 'Вы действительно хотите удалить конфигурацию FTS "%s"?';
    $lang['strconfdropftsdict']         = 'Вы действительно хотите удалить словарь FTS "%s"?';
    $lang['strconfdropftsmapping']      = 'Вы действительно хотите удалить правило "%s" конфигурации FTS "%s"?';
    $lang['strftstemplate']             = 'Шаблон';
    $lang['strftsparser']               = 'Парсер';
    $lang['strftsconfigneedsname']      = 'Вам необходимо определить имя конфигурации FTS.';
    $lang['strftsconfigcreated']        = 'Конфигурация FTS создана.';
    $lang['strftsconfigcreatedbad']     = 'Создание конфигурации FTS прервано.';
    $lang['strftsmapping']              = 'Правила';
    $lang['strftsdicts']                = 'Словари';
    $lang['strftsdict']                 = 'Словарь';
    $lang['strftsemptymap']             = 'Конфигурация правил FTS пуста.';
    $lang['strftsconfigaltered']        = 'Конфигурация FTS изменена.';
    $lang['strftsconfigalteredbad']     = 'Изменение конфигурации FTS прервано.';
    $lang['strftsconfigmap']            = 'Конфигурация правил FTS';
    $lang['strftsparsers']              = 'Парсеры FTS';
    $lang['strftsnoparsers']            = 'Нет доступных парсеров FTS.';
    $lang['strftsnodicts']              = 'Нет доступных словарей FTS.';
    $lang['strftsdictcreated']          = 'Словарь FTS создан.';
    $lang['strftsdictcreatedbad']       = 'Создание словаря FTS прервано.';
    $lang['strftslexize']               = 'Функция преобразования токена в лексему (lexize)';
    $lang['strftsinit']                 = 'Функция инициализации';
    $lang['strftsoptionsvalues']        = 'Опции и значения';
    $lang['strftsdictneedsname']        = 'Вам необходимо определить имя словаря FTS.';
    $lang['strftsdictdropped']          = 'Словарь FTS удален.';
    $lang['strftsdictdroppedbad']       = 'Удаление словаря FTS прервано.';
    $lang['strftsdictaltered']          = 'Словарь FTS изменен.';
    $lang['strftsdictalteredbad']       = 'Изменение словаря FTS прервано.';
    $lang['strftsaddmapping']           = 'Добавить новое правило';
    $lang['strftsspecifymappingtodrop'] = 'Вам необходимо указать как минимум одно правило для удаления.';
    $lang['strftsspecifyconfigtoalter'] = 'Вам необходимо указать конфигурацию FTS для изменения';
    $lang['strftsmappingdropped']       = 'Правило FTS удалено.';
    $lang['strftsmappingdroppedbad']    = 'Удаление правила FTS прервано.';
    $lang['strftsnodictionaries']       = 'Словари не найдены.';
    $lang['strftsmappingaltered']       = 'Правило FTS изменено.';
    $lang['strftsmappingalteredbad']    = 'Изменение правила FTS прервано.';
    $lang['strftsmappingadded']         = 'Правило FTS добавлено.';
    $lang['strftsmappingaddedbad']      = 'Добавление правила FTS прервано.';
    $lang['strftstabconfigs']           = 'Конфигурации';
    $lang['strftstabdicts']             = 'Словари';
    $lang['strftstabparsers']           = 'Парсеры';
    $lang['strftscantparsercopy']       = 'При создании конфигурации поиска нельзя указывать одновременно парсер и шаблон.';