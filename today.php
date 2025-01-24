<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todays me</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* 優しい背景色 */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
            background-color: #e3f2fd; /* 優しい青色 */
            padding: 10px 0;
        }
        nav .navbar-brand {
            font-weight: bold;
            color: #007bff;
        }
        nav .navbar-brand:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .jumbotron {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        legend {
            color: #6c757d; /* 柔らかい文字色 */
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #a5d8ff; /* 優しい青色 */
            color: #ffffff;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #74c0fc;
        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="select.php">Todays me data</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">ログイン</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="logout.php">ログアウト</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div class="container mt-5">
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend class="mb-4">Todays me</legend>
                    <label for="sleep">今日の睡眠時間：</label>
                    <input type="text" id="sleep" name="sleep" placeholder="例: 7">
                    <label for="mood">今日の気分：</label>
                    <input type="text" id="mood" name="mood" placeholder="最悪→0,最高→10でどのくらい？">
                    <label for="text">今日の食事：</label>
                    <textarea id="text" name="text" rows="4" cols="40" placeholder="今日食べた食事を記載してください"></textarea>
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
    </div>
    <!-- Main[End] -->

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
