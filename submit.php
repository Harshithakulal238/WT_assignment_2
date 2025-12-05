<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
    <style>
        body {
            font-family: Poppins, Arial, sans-serif;
            background: linear-gradient(120deg, #a1c4fd, #c2e9fb);
            text-align: center;
            padding: 40px;
        }

        .box {
            background: white;
            padding: 30px;
            width: 400px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        h2 { margin-bottom: 20px; }

        p {
            text-align: left;
            font-size: 16px;
            margin: 8px 0;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Registration Details</h2>

    <p><strong>Name:</strong> <?php echo $_POST['fullname']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
    <p><strong>DOB:</strong> <?php echo $_POST['dob']; ?></p>
    <p><strong>Gender:</strong> <?php echo $_POST['gender']; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($_POST['address']); ?></p>
</div>

</body>
</html>
