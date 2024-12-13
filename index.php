<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking - Quick Fit Algorithm </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .container {
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
            background: #fff;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        .form-section {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<header>
        <h1>Hotel Room Booking System (Quick Fit Algorithm)</h1>
    </header>

    <div class="container">
        <h2>Book or Release Rooms</h2>
        <form method="POST">
            <div class="form-section">
                <label for="size">Enter Room Type (2-person, 4-person, 6-person, 8-person, 10-person, 20-person):</label>
                <input type="number" id="size" name="size" required>
            </div>
            <button type="submit" name="action" value="book">Book Room</button>
            <button type="submit" name="action" value="release">Release Room</button>
        </form>

        <!-- php code started -->
        <?php 
        
        ?>


    <h2>Current Room Status</h2>
        <table>
            <thead>
                <tr>
                    <th>Room Type</th>
                    <th>Available Rooms</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td> person</td>
                        <td> rooms</td>
                    </tr>

            </tbody>
        </table>

        <h2>Allocated Rooms</h2>
        <table>
            <thead>
                <tr>
                    <th>Room Type</th>
                    <th>People Allocated</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>person</td>
                        <td>people</td>
                    </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>