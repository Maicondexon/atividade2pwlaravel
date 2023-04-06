<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="POST" action="{{ route('calculate') }}">
        @csrf
        <input type="number" name="number1" placeholder="Enter number 1"><br><br>
        <input type="number" name="number2" placeholder="Enter number 2"><br><br>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>

    @if(isset($result))
        <h2>Result: {{ $result }}</h2>
    @endif
</body>
</html>