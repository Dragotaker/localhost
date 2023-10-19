
<!DOCTYPE html>
<html>
<head>
    <title>Random Activity</title>
</head>
<body>
    <h1>Random Activity Generator</h1>

    <button id="generateActivity">Generate Random Activity</button>

    <h2>Generated Activity:</h2>
    <p id="activity"></p>

    <script>
        document.getElementById('generateActivity').addEventListener('click', function() {
            fetch('api.php')
                .then(response => response.json())
                .then(data => {
                    const activity = data.activity;
                    document.getElementById('activity').textContent = activity;
                })
                .catch(error => {
                    console.error('Произошла ошибка:', error);
                });
        });
    </script>
</body>
</html>