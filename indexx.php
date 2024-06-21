<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTTP Request Tester</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        label { display: block; margin: 10px 0 5px; }
        textarea { width: 100%; height: 100px; }
        select, input[type="text"], input[type="submit"] { width: 100%; padding: 10px; margin-bottom: 10px; }
        .response { border: 1px solid #ddd; padding: 10px; background: #f9f9f9; }
    </style>
</head>
<body>
    <h1>HTTP Request Tester</h1>
    <form method="POST">
        <label for="method">HTTP Method:</label>
        <select name="method" id="method">
            <option value="GET">GET</option>
            <option value="POST">POST</option>
        </select>

        <label for="url">URL:</label>
        <input type="text" name="url" id="url" required>

        <label for="payload">JSON Payload (for POST method):</label>
        <textarea name="payload" id="payload"></textarea>

        <input type="submit" value="Send Request">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $method = $_POST["method"];
        $url = $_POST["url"];
        $payload = $_POST["payload"];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        if ($method == "POST") {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        echo "<div class='response'>";
        echo "<h2>Response:</h2>";
        echo "<pre>HTTP Status Code: $httpCode</pre>";
        echo "<pre>" . htmlspecialchars($response) . "</pre>";
        echo "</div>";
    }
    ?>
</body>
</html>
