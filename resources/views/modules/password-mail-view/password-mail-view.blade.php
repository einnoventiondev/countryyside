<!DOCTYPE html>
<html>

<head>
    <title>Vocations</title>
</head>

<body>
    <p>Your Login Password is <strong> {{ $generate_password['generate_password'] }} </strong></p>
    <h1>Details</h1>
    <p>Name : <strong> {{ $generate_password['name'] }} </strong></p>
    <p>Email: <strong> {{ $generate_password['email'] }} </strong></p>
    <p>Role : <strong> {{ $generate_password['role'] }} </strong></p>
    <p>Age : <strong> {{ $generate_password['age'] }} </strong></p>
    <p>Contact : <strong> {{ $generate_password['contact'] }} </strong></p>
    <p>Team : <strong> {{ $generate_password['team'] }} </strong></p>
    <p>Status : <strong> {{ $generate_password['status'] }} </strong></p>
    <p>Destination : <strong> {{ $generate_password['destination'] }} </strong></p>
    <p>Customer ID : <strong> {{ $generate_password['customer_id'] }} </strong></p>
    <p>Thank you</p>
</body>

</html>
