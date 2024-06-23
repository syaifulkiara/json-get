<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation: Task Test</title>
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
        .menu {
            position: fixed;
            top: 0;
            width: 400px;
            height: 100%;
            background: #333;
            color: #fff;
            padding: 20px;
            overflow-y: auto;
        }
        .menu a {
            color: #fff;
            text-decoration: none;
            font-size: 12px;
            display: block;
            padding: 10px 0;
        }
        .menu a:hover {
            background: #444;
        }
        .content {
            margin-left: 220px;
            width: calc(100% - 220px);
        }
    </style>
</head>
<body>
    <div class="menu">
        <h2>Menu</h2>
        <a href="#post-cylce">One Cycle Tasks</a>
        <a href="#post-regular-tasks">Post a Task</a>
        <a href="#post-regular-tasks">- Post Regular Tasks</a>
        <a href="#mes-release-confirm-before">- MES Releases AGV Task (Confirm Release Before Starting the Task)</a>
        <a href="#mes-release-confirm-after">- MES Releases AGV Task (Confirm Release After Task Completion)</a>
        <a href="#delayed-tasks">- Release Delayed Tasks (Delay/Second)</a>
        <a href="#open-charging-loop">- Open the Charging Loop (AGV ID Needs to be Specified)</a>
        <a href="#close-charging-loop">- Close the Charging Loop (AGV ID Needs to be Specified)</a>
        <a href="#mes-confirm-before">- MES Confirms Release (Before Task Starts)</a>
        <a href="#mes-confirm-after">- MES Confirms Release (After Task Completion)</a>
        <a href="#cancel-task">Cancel Task</a>
        <a href="#cancel-before-start">- Cancel the Task (Valid Before the Task Starts Execution)</a>
        <a href="#cancel-during-execution">- Cancel the Task (Forceful Cancellation During Execution)</a>
        <a href="#task-query">Task Query</a>
        <a href="#query-progress">- Query Task Execution Progress</a>
        <a href="#agv-control">AGV Control Commands</a>
        <a href="#start-agv">- Start AGV</a>
        <a href="#alarm-info">Alarm Information/Processing</a>
        <a href="#reset-agv-alarm">- Reset AGV Alarm</a>
        <a href="#set-agv-voice">Set AGV Voice</a>
    </div>
    <div class="content">
        <div class="container">
           <a href="http://localhost/json-get/payload2.php" id="post-cylce" style="text-decoration: none;"><h1>API Documentation: Task Test</h1></a>
         <div class="examples">
            <h2>Endpoints</h2>
            <h4>0.1. One Cycle Tasks</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{ 
    "taskId":"20210914170909071_023",
    "agvId":1,
    "taskList":
    [
        {
        "unitId":"20210914170909071_023_1",
        "taskType":3,
        "station":1,
        "agvAngle":180,
        "actionCode":4,
        "actionSource":251
        },
        {
        "unitId":"20210914170909071_023_2",
        "taskType":3,
        "station":3,
        "agvAngle":180,
        "actionCode":4,
        "actionSource":251
        },
        {
        "unitId":"20210914170909071_023_3",
        "taskType":3,
        "station":4,
        "agvAngle":180,
        "actionCode":4,
        "actionSource":251
        },
        {
        "unitId":"20210914170909071_023_4",
        "taskType":3,
        "station":5,
        "agvAngle":180,
        "actionCode":3,
        "actionSource":251
        },
        {
        "unitId":"20210914170909071_023_5",
        "taskType":3,
        "station":6,
        "agvAngle":180,
        "actionCode":4,
        "actionSource":251
        },
        {
        "unitId":"20210914170909071_023_6",
        "taskType":3,
        "station":1,
        "agvAngle":180,
        "actionCode":3,
        "actionSource":251
        }
    ]
}</code></pre>

            <h3 id="post-regular-tasks">1. Post a Task</h3>

            <h4 id="post-regular-tasks">1.1. Post Regular Tasks</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "agvId": 0,
    "taskList": [
        {
            "unitId": "20210914170909071_023_1",
            "taskType": 1,
            "moveFlag": 0,
            "station": 1,
            "agvAngle": 180
        }
    ]
}</code></pre>

            <h4 id="mes-release-confirm-before">1.2. MES Releases the AGV Task (Confirm Release Before Starting the Task)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "agvId": 0,
    "taskList": [
        {
            "unitId": "20210914170909071_023_1",
            "taskType": 1,
            "startConfirm": 1,
            "moveFlag": 0,
            "station": 1,
            "agvAngle": 180
        }
    ]
}</code></pre>

            <h4 id="mes-release-confirm-after">1.3. MES Releases AGV Task (Confirm Release After Task Completion)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "agvId": 0,
    "taskList": [
        {
            "unitId": "20210914170909071_023_1",
            "taskType": 1,
            "endConfirm": 1,
            "moveFlag": 0,
            "station": 4,
            "agvAngle": 180
        }
    ]
}</code></pre>

            <h4 id="delayed-tasks">1.4. Release Delayed Tasks (Delay/Second)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170912071_023",
    "agvId": 0,
    "taskList": [
        {
            "unitId": "20210914170912071_023_1",
            "taskType": 2,
            "station": 1,
            "delay": 10
        }
    ]
}</code></pre>

            <h4 id="open-charging-loop">1.5. Open the Charging Loop (AGV ID Needs to be Specified)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "agvId": 1,
    "taskList": [
        {
            "unitId": "20210914170909071_023_1",
            "taskType": 4
        }
    ]
}</code></pre>

            <h4 id="close-charging-loop">1.6. Close the Charging Loop (AGV ID Needs to be Specified)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "agvId": 1,
    "taskList": [
        {
            "unitId": "20210914170909071_023_1",
            "taskType": 5
        }
    ]
}</code></pre>

            <h4 id="mes-confirm-before">1.7. MES Confirms Release (Before Task Starts)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "agvId": 0,
    "taskList": [
        {
            "unitId": "20210914170909071_023_1",
            "taskType": 1,
            "startConfirm": 1,
            "moveFlag": 0,
            "station": 1,
            "agvAngle": 180
        }
    ]
}</code></pre>

            <h4 id="mes-confirm-after">1.8. MES Confirms Release (After Task Completion)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/task</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "agvId": 0,
    "taskList": [
        {
            "unitId": "20210914170909071_023_1",
            "taskType": 1,
            "endConfirm": 1,
            "moveFlag": 0,
            "station": 4,
            "agvAngle": 180
        }
    ]
}</code></pre>

            <h3 id="cancel-task">2. Cancel Task</h3>

            <h4 id="cancel-before-start">2.1. Cancel the Task (Valid Before the Task Starts Execution)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/cancelTask</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "unitId": "20210914170909071_023_1"
}</code></pre>

            <h4 id="cancel-during-execution">2.2. Cancel the Task (Forceful Cancellation During Execution)</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/cancelTask</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "unitId": "20210914170909071_023_1",
    "forceCancel": true
}</code></pre>

            <h3 id="task-query">3. Task Query</h3>

            <h4 id="query-progress">3.1. Query Task Execution Progress</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/taskQuery</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "taskId": "20210914170909071_023",
    "unitId": "20210914170909071_023_1"
}</code></pre>

            <h3 id="agv-control">4. AGV Control Commands</h3>

            <h4 id="start-agv">4.1. Start AGV</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/rawTask</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "mDeviceNo": 1,
    "mCurrentCommand": 8
}</code></pre>

            <h3 id="alarm-info">5. Alarm Information/Processing</h3>

            <h4 id="reset-agv-alarm">5.1. Reset AGV Alarm</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/rawTask</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "mDeviceNo": 1,
    "mCurrentCommand": 10
}</code></pre>

            <h3 id="set-agv-voice">6. Set AGV Voice</h3>

            <h4 id="set-agv-voice">6.1. Set AGV Voice</h4>
            <p><strong>URL:</strong> <code>http://127.0.0.1:5566/RCS/REST/setMusic</code></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Headers:</strong> None</p>
            <p><strong>Body:</strong></p>
            <pre><code>{
    "agvId": 1,
    "musicId": 1
}</code></pre>
        </div>
    <footer>
        &copy; SyaifulKiara
        </footer>
    </div>
</body>
</html>
