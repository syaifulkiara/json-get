<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTTP Request Tester</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0; 
            padding: 0; 
            background: #f0f2f5; 
        }
        .container { 
            width: 60%; 
            margin: 50px auto; 
            padding: 20px; 
            background: #fff; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); 
            border-radius: 8px;
        }
        h1 { 
            text-align: center; 
            color: #333; 
            margin-bottom: 20px;
        }
        form { 
            margin-bottom: 20px; 
        }
        label { 
            display: block; 
            margin: 10px 0 5px; 
            font-weight: bold; 
        }
        textarea, select, input[type="text"], input[type="submit"] { 
            width: 100%; 
            padding: 12px; 
            margin-bottom: 10px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
            box-sizing: border-box; 
            font-size: 14px;
        }
        input[type="submit"] { 
            background: #007BFF; 
            color: white; 
            cursor: pointer; 
            border: none; 
            transition: background 0.3s; 
            font-size: 16px;
        }
        input[type="submit"]:hover { 
            background: #0056b3; 
        }
        .response { 
            border: 1px solid #ddd; 
            padding: 20px; 
            background: #f9f9f9; 
            border-radius: 4px; 
            margin-top: 20px;
        }
        .response h2 { 
            margin-top: 0; 
            font-size: 18px;
        }
        pre { 
            white-space: pre-wrap; 
            word-wrap: break-word; 
            background: #e8e8e8; 
            padding: 10px; 
            border-radius: 4px;
        }
        .examples {
            margin-top: 20px;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }
       footer {
            text-align: center;
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            color: #666;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="http://localhost/json-get/" style="text-decoration: none;"><h1>HTTP Request Tester</h1></a>
        <form method="POST">
            <label for="method">HTTP Method:</label>
            <select name="method" id="method">
                <option value="GET" <?php echo isset($_POST['method']) && $_POST['method'] == 'GET' ? 'selected' : ''; ?>>GET</option>
                <option value="POST" <?php echo isset($_POST['method']) && $_POST['method'] == 'POST' ? 'selected' : ''; ?>>POST</option>
                <option value="PUT" <?php echo isset($_POST['method']) && $_POST['method'] == 'PUT' ? 'selected' : ''; ?>>PUT</option>
                <option value="DELETE" <?php echo isset($_POST['method']) && $_POST['method'] == 'DELETE' ? 'selected' : ''; ?>>DELETE</option>
            </select>

            <label for="url">URL:</label>
            <input type="text" name="url" id="url" placeholder="Enter request URL" value="<?php echo isset($_POST['url']) ? htmlspecialchars($_POST['url']) : ''; ?>" required>

            <label for="payload">JSON Payload (for POST/PUT method):</label>
            <textarea name="payload" id="payload" placeholder="Enter JSON payload for POST/PUT requests"><?php echo isset($_POST['payload']) ? htmlspecialchars($_POST['payload']) : ''; ?></textarea>

            <input type="submit" value="Send Request">
        </form>
        <div class="examples">
            <p><strong>Contoh URL GET:</strong> https://jsonplaceholder.typicode.com/posts/1</p>
            <p><strong>Contoh URL POST:</strong> https://jsonplaceholder.typicode.com/posts</p>
            <p><strong>Contoh JSON Payload untuk POST:</strong></p>
            <pre>{
    "title": "foo",
    "body": "bar",
    "userId": 1
}</pre>
        </div>

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
            } elseif ($method == "PUT") {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            } elseif ($method == "DELETE") {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            }
            // tambahkan logika untuk metode lainnya seperti PATCH, dll.

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
        <footer>
        &copy; SyaifulKiara
        </footer>
    </div>
</body>
</html>
