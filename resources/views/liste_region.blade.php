<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($liste->count()>0)
    <table>
        <tr>
            <th>ID</th>
            <th>Label</th>
            <th>Action</th>
        </tr>

            <tbody>
                @foreach($liste as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->label}}</td>
                    <td>
                        <a href="/region_delete/{{$r->id}}" class="btn btn-outline-danger">Supp</a>
                        <a href="/form_update_region/{{$r->id}}" class="btn btn-outline-danger">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>  
    </table>
    @endif
</body>
</html>