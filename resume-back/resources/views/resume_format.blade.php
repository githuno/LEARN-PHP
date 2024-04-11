<!DOCTYPE html>
<html>
<head>
    <title>Resume Format</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Resume</h1>
    <table>
        <tr>
            <th>Name</th>
            <td>{{ $resume->name }}</td>
        </tr>
        <tr>
            <th>Kana</th>
            <td>{{ $resume->kana }}</td>
        </tr>
        <tr>
            <th>Birth Date</th>
            <td>{{ $resume->birthDate }}</td>
        </tr>
        <tr>
            <th>Postal Code</th>
            <td>{{ $resume->postalCode }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $resume->address }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $resume->gender }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $resume->phone }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $resume->email }}</td>
        </tr>
        <tr>
            <th>Motivation</th>
            <td>{{ $resume->motivation }}</td>
        </tr>
        <tr>
            <th>Experiences</th>
            <td>
                @foreach ($resume->experiences as $experience)
                    <p>{{ $experience->date }}: {{ $experience->description }}</p>
                @endforeach
            </td>
        </tr>
    </table>
</body>
</html>
