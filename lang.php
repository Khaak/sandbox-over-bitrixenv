<?php
global $mess;
$mess=array();
$mess["ConfigureCommand"]["Description"]="Первоначальная настройка";
$mess["ConfigureCommand"]["Help"]="
Первоначальная настройка позволяет указать настройки окружения по умолчанию, такие как пользователя и группу проекта, кодировку, базовый домен, пути к директориям с шаблонами и конфигурационными файлами веб-сервера, параметры подключения к базе данных.
При первом запуске это единственное доступное действие.
";
$mess["ProjectAddCommand"]["Description"]="Добавление проекта";
$mess["ProjectAddCommand"]["Help"]="
Команда добавляет директории проекта, создает базу данных и добавляет установочные файлы CMS 1С-Bitrix. Параметры подключения к базе данных уже будут внесены в конфигурационные файлы CMS.
Команда не изменяет конфигурацию веб-сервера, для добавления виртуального хоста необходимо воспользоваться командой 'sandbox:virtualhost_add'.
";
$mess["ProjectRemoveCommand"]["Description"]="Удаление проекта";
$mess["ProjectRemoveCommand"]["Help"]="
Команда удаляет файлы проекта, базу данных и пользователя базы данных. 
Файлы песочниц не удаляются, для удаления песочниц необходимо воспользоваться командой 'sandbox:sandbox_remove'.
Команда не изменяет конфигурацию веб-сервера, для удаления виртуального хоста необходимо воспользоваться командой 'sandbox:virtualhost_remove'.
";
$mess["SandboxAddCommand"]["Description"]="Добавление песочницы";
$mess["SandboxAddCommand"]["Help"]="
Команда добавляет директорию песочницы для указанного пользователя и создает символические ссылки на ядро и директорию хранения файлов проекта.
Команда не изменяет конфигурацию веб-сервера, для добавления виртуального хоста необходимо воспользоваться командой 'sandbox:virtualhost_add'.
";
$mess["SandboxRemoveCommand"]["Description"]="Удаление песочницы";
$mess["SandboxRemoveCommand"]["Help"]="
Команда удаляет директорию песочницы не затрагивая файлы проекта и базу данных.
Команда не изменяет конфигурацию веб-сервера, для удаления виртуального хоста необходимо воспользоваться командой 'sandbox:virtualhost_remove'.
";
$mess["UserAddCommand"]["Description"]="Добавление пользователя";
$mess["UserAddCommand"]["Help"]="
Команда добавляет на сервер пользователя с указанным паролем.
";
$mess["UserRemoveCommand"]["Description"]="Удаление пользователя";
$mess["UserRemoveCommand"]["Help"]="
Команда удаляет пользователя и его домашнюю директорию. Команда вернет ошибку при попытке удалить пользователя, у которого есть песочницы.
";
$mess["VirtualhostAddCommand"]["Description"]="Добавление виртуального хоста";
$mess["VirtualhostAddCommand"]["Help"]="
Команда добавляет виртуальный хост в конфигурацию веб-сервера. При добавлении хоста для проекта будет запрошена кодировка страниц, при добавлении хоста для песочницы вместо кодировки будет запрошено имя пользователя, к которому привязана песочница. Кодировка при этом будет определена по кодировке проекта.
Команда вернет ошибку при попытке создать хост для несуществующего проекта либо песочницы.
В процессе работы будет перезапущен веб-сервер, незавершенные подключения будут сброшены.
";

$mess["VirtualhostRemoveCommand"]["Description"]="Удаление виртуального хоста";
$mess["VirtualhostRemoveCommand"]["Help"]="
Команда удаляет конфигурационные файлы виртуального хоста.
В процессе работы будет перезапущен веб-сервер, незавершенные подключения будут сброшены.
В отличие от остальных команда работает не с проектами или песочницами, а с полным доменом, например sandbox.project.basedomain.tld
";