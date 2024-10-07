<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
</head>
<body>
    <h1>PROFILES</h1>

    
        <div> <b>ID:</b> {{ $profile->id }}</div>
        <div> <b>name:</b> {{ $profile->name}}</div>
        <div> <b>email:</b> {{ $profile->email }}</div>
        <div> <b>birthdate:</b> {{ $profile->birthdate }}</div>
        <div> <b>home_address:</b> {{ $profile->home_address }}</div>
        <div> <b>contact_number:</b> {{ $profile->contact_number }}</div>
        <br>
        <hr>
    

</body>
</html>
