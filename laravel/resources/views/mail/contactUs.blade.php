<!doctype html>
<html>

<body>
<h1>Contact Us</h1>

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
        <td>Message:</td>
        <td>{{ $data["message"] }}</td>
    </tr>
    <tr>
        <td>Phone or skype:</td>
        <td>
            @isset($data["phone_or_skype"])
                {{$data["phone_or_skype"]}}
            @endisset
        </td>
    </tr>
    <tr>
        <td>Get NDA:</td>
        <td>
            {{$data["get_NDA"] ? "Yes" : "No"}}
        </td>
    </tr>

    </tbody>
</table>

</body>
</html>
