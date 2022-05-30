<!DOCTYPE html>
<html>

<head>
    <title>Vocations</title>
</head>

<body>
    <p>Your Login Password is <strong> {{ $data1['generate_password'] }} </strong></p>
    <h1>Details</h1>
    <p>Name : <strong> {{ $data1['name'] }} </strong></p>
    <p>Email: <strong> {{ $data1['email'] }} </strong></p>
    <p>Role : <strong> {{ $data1['role'] }} </strong></p>
    <p>Age : <strong> {{ $data1['age'] }} </strong></p>
    <p>Contact : <strong> {{ $data1['contact'] }} </strong></p>
    <p>Team : <strong> {{ $data1['team'] }} </strong></p>
    <p>Status : <strong> {{ $data1['status'] }} </strong></p>
    <p>Destination : <strong> {{ $data1['destination'] }} </strong></p>
    <p>Customer ID : <strong> {{ $data1['customer_id'] }} </strong></p>
    <p>Thank you</p>
</body>

</html>
