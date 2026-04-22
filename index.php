<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 8px;
        }
        .radio-group, .checkbox-group {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .radio-group label, .checkbox-group label {
            font-weight: normal;
            display: flex;
            align-items: center;
        }
        textarea {
            resize: vertical;
            min-height: 80px;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container" >
        <h2>Registration Form</h2>
        <form action="formhandler.php" method="">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="1" required>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male" required> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label>Courses:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="course" value="math"> Mathematics</label>
                    <label><input type="checkbox" name="course" value="physics"> Physics</label>
                    <label><input type="checkbox" name="course" value="chemistry"> Chemistry</label>
                    <label><input type="checkbox" name="course" value="chemistry"> Sports</label>
                </div>
            </div>
            <div class="form-group">
                <label for="country">Select Country:</label>
                <select id="country" name="country" required>
                    <option value="">--Select Country--</option>
                    <option value="usa">United States</option>
                    <option value="canada">Canada</option>
                    <option value="uk">United Kingdom</option>
                    <option value="india">India</option>
                    <option value="australia">Australia</option>
                     <option value="uk">United Kingdom</option>
                    <option value="india">India</option>
                    <option value="australia">Australia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment"></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>


<?php
echo"..";

?>