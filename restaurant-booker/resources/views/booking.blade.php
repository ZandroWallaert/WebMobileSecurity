<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Booker</title>
</head>
<body>
<h1>Restaurant Booker</h1>
@isset($lastName)
    <h2>Thank you for your booking, {{$lastName}} {{$firstName}}</h2>
    <p>Here are your booking details:</p>
    <ul>
        <li>Date: {{$date}}</li>
        <li>Time: {{$time}}</li>
        <li>Number of persons: {{$numberOfPersons}}</li>
        <li>Remarks: {{$remarks}}</li>
    </ul>
    <p>To add another booking, use the form below.</p>
    <hr>
@endisset
<h2>Add your booking now</h2>
<form method="post" action="add-booking">
    @csrf
    Lastname:<input type="text" name="lastname" required>
    <br>
    Firstname:<input type="text" name="firstname" required>
    <br>
    Number of persons:<select name="numberOfPersons" required>
        @for ($i = 1; $i < 9; $i++)
            <option value={{$i}}>{{$i}}</option>
        @endfor
    </select>
    <br>
    Date:<input type="date" name="date" required>
    <br>
    Time:<select name="time" required>
        <option value="18:00">18:00</option>
        <option value="18:30">18:30</option>
        <option value="19:00">19:00</option>
        <option value="19:30">19:30</option>
    </select>
    <br>
    Remarks (if any):<label>
        <textarea name="message" rows="4" cols="30"></textarea>
    </label>
    <br>
    <input type="submit" value="Book now">
</form>
<hr>
</body>
</html>
