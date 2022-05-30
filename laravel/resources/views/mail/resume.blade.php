<!doctype html>
<html>

<body>
<h1>Resume</h1>

<table>
    <thead>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Name:</td>
        <td>{{ $data["name"] }}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{ $data["email"] }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{$data["phone"] ?? null}}</td>
    </tr>
    <tr>
        <td>Message:</td>
        <td>{{ $data["message"] ?? null}}</td>
    </tr>

    </tbody>
</table>

</body>
</html>
