<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    th {
      background-color: black;
      color: white;
      padding: 5px 30px;
    }

    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>name</th>
      <th>age</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>
        {{$item->name}}
      </td>
      <td>
        {{$item->age}}
      </td>
    </tr>
    @endforeach
  </table>
</body>

</html>