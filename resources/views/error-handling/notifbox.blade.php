<!DOCTYPE html>
<html>
<head>
    <title>Error Handling with Pop-up Notification</title>
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: #f8f8f8;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .popup p {
            margin: 10px 0;
            padding: 0;
            color: #333;
            font-size: 16px;
            line-height: 1.4;
        }
        .popup button {
            background-color: #FF0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
        }
        .popup button:hover {
            background-color: #FF3333;
        }
        .popup img {
            margin-bottom: 10px;
            width: 50px;
            height: 50px;
        }
        .show {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Error Handling with Pop-up Notification</h1>

    <!-- Button to trigger the error handling pop-up -->
    <button onclick="showErrorPopup()">Trigger Error</button>

    <!-- Error handling pop-up -->
    <div id="errorPopup" class="popup">
        <img src="assets/img/warning.png">
        <p>Oops! An error occurred.</p>
        <p>Please try again later.</p>
        <button onclick="hideErrorPopup()">Close</button>
    </div>

    <script>
        function showErrorPopup() {
            var popup = document.getElementById("errorPopup");
            popup.classList.add("show");
        }

        function hideErrorPopup() {
            var popup = document.getElementById("errorPopup");
            popup.classList.remove("show");
        }
    </script>
</body>
</html>
