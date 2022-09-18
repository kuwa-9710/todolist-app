<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'TodoList App' }}</title>

    @vite('resources/css/app.css')
</head>

<body class=" bg-blue-50">
    <div class="mb-20">
        {{ $slot }}
        <p class="mt-20 text-center">©️2022 tomoya kuwashima.</p>
    </div>
    <script>
        function deleteTask() {
            if (confirm('Do you delete this task?')) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>
