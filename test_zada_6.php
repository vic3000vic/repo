//Шаг 1 Глобальный массив textStorage
<?php
// Глобальное хранилище текстов
$textStorage = [];

// Step 2 функция add
function add(string $title, string $text, array &$storage): void
{
    $storage[] =
    [
        'title' => $title,
        'text' => $text
    ];
}

// Step 3 Вызов add дважды и вывод массива
add("Первый заголовок", "Первый текст", $textStorage);
add("Второй заголовок", "Второй текст", $textStorage);

echo '<br>';
echo '<br>';

echo "Массив после добавления двух текстов:\n";
echo '<br>';
print_r($textStorage);

// Step 4 функция remove
function remove(int $index, array &$storage): bool
{
    if (isset($storage[$index]))
    {
        unset($storage[$index]);
        // Переиндексация массива для корректного отображения
        $storage = array_values($storage);
        return true;
    }
    return false;
}

// Step 5 вызов remove
$result1 = remove(0, $textStorage);
echo '<br>';
echo "Удаление индекса 0: " . ($result1 ? "успешно" : "не найдено") . "\n";
echo '<br>';
$result2 = remove(5, $textStorage);
echo "Удаление индекса 5: " . ($result2 ? "успешно" : "не найдено") . "\n";
echo '<br>';

// Step 6 проверка содержимого массива
echo "Массив после удаления:\n";
echo '<br>';
print_r($textStorage);
echo '<br>';
//----------------------

// Step 7 функция edit
function edit(int $index, string $newTitle, string $newText, array &$storage): bool
{
    if (isset($storage[$index]))
    {
        $storage[$index]['title'] = $newTitle;
        $storage[$index]['text'] = $newText;
        return true;
    }
    return false;
}

// Step 8 вызов edit для первого оставшегося теста
$editResult = edit(0, "Обновлённый заголовок", $textStorage[0]['text'], $textStorage);
//echo PHP_EOL;
echo '<br>';

echo "Результат редактирования: " . ($editResult ? "успешно" : "не найдено") . "\n";
echo '<br>';

// Step 9 проверка обновления
echo "Массив после редактирования:\n";
echo '<br>';
print_r($textStorage);
echo '<br>';

echo "Массив после редактирования:\n";


// Step 10 попытка редактировать несуществующий индекс
$editFail = edit(10, "Заголовок", "Текст", $textStorage);
echo "Попытка редактирования несуществующего текста: " . ($editFail ? "успешно" : "не найдено") . "\n";
echo '<br>';


echo "BEGIN GITHUB\n";

$repoPath = '/путь/к/локальному/репозиторию'; // локальный путь, НЕ URL chdir($repoPath); // Добавляем файлы
exec('git add . 2>&1', $output1, $code1);
// Делаем коммит
exec('git commit -m "Auto commit from PHP script" 2>&1', $output2, $code2);
// Отправляем на GitHub
exec('git push origin main 2>&1', $output3, $code3);
// Печать вывода
echo "<pre>"; echo "ADD:\n" . implode("\n", $output1) . "\n\n";

echo "COMMIT:\n" . implode("\n", $output2) . "\n\n";
echo "PUSH:\n" . implode("\n", $output3) . "\n\n";
echo "</pre>";

echo "test_zada_6.php for gitlab\n";

//
/*
//Step 11 Git
git add "test_zada_6.php"
//git commit -m "Реализованы функции add, remove, edit для текстового хранилища"
//git push

//ssss
*/