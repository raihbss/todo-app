<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <style>
        *{
            text-align: center;
            align-items: center;
            margin: auto;
        }
        footer{
            text-align: right;
            font-size: 10px;
            margin: 10px;
            border-bottom: solid 1px #ccc;
            color: #ccc;
        }
        th{
            background-color: #999;
            color: #fff;
            padding: 5px 10px;
        }
        td{
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }
    </style>
    
</head>
<body>

    <header>
        ヘッダー
    </header>
    <nav>
        <a href="/todos">Home</a>
        <a href="/todos/add">New Task</a>
    </nav>

    <h1>Todos</h1>
    {{-- VIEW OUTPUT --}}

    <main>
        {{-- error --}}
        @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
    </main>

    <footer>
        copyrigh 2022 iwasaki
    </footer>

    
</body>
</html>