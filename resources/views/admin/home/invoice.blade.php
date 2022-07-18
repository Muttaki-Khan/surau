<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Details Information</h2>
    <h4>Test Name: {{$test}}</h4>
    <h4>Name: {{$donation->name}}</h4>
	<h4>Email: {{$donation->email}}</h4>
	<h4>Mobile: {{$donation->mobile}}</h4>
	<h4>Address: {{$donation->address}}</h4>
	<h4>Status: {{$donation->status}}</h4>
	<h4>Account Name: {{$donation->account_name}}</h4>
	<h4>Account Number: {{$donation->account_number}}</h4>
	<h4>Bank Name: {{$donation->bank_name}}</h4>
	<p><h4>Message: {{$donation->message}}</h4><br></p>


</body>
</html>
