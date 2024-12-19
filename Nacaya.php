<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Interface</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Expense Tracker</h1>
    </header>

    <div class="container">

        <div class="section">
            <center><h2>Login</h2></center>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <center><button class="button">Login</button></center>
        </div>

        <div class="section">
            <center><h2>Create Account</h2></center>
            <div class="form-group">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name">
            </div>
            <div class="form-group">
                <label for="middle-name">Middle Name:</label>
                <input type="text" id="middle-name" name="middle-name">
            </div>
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name">
            </div>
            <div class="form-group">
                <label for="create-username">Username:</label>
                <input type="text" id="create-username" name="create-username">
            </div>
            <div class="form-group">
                <label for="create-password">Password:</label>
                <input type="password" id="create-password" name="create-password">
            </div>
            <center><button class="button">Create Account</button></center>
        </div>


        <div class="section">
            <h2>Overview</h2>
            <div class="overview">
                <div class="overview-card">
                    <h3>Total Income</h3>
                    <p>P0.00</p>
                </div>
                <div class="overview-card">
                    <h3>Total Expenses</h3>
                    <p>P0.00</p>
                </div>
                <div class="overview-card">
                    <h3>Budget Status</h3>
                    <p>On Track</p>
                </div>
                <div class="overview-card">
                    <h3>Spending trends</h3>
                    <p>No Data</p>
                </div>
            </div>
        </div>


        <div class="navigation">
            <a href="#">Dashboard</a>
            <a href="#">Add Expenses</a>
            <a href="#">Reports</a>
            <a href="#">Settings</a>
        </div>
    </div>
    <footer></footer>
</body>
</html>
