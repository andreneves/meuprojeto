<!DOCTYPE html>
<html>
<head>
<title>Produto</title>
</head>
<body>

<h1>Listagem de produtos</h1>

<table>
    <tr>
      <th>id</th>
      <th>nome</th>
      <th>quantidade</th>
      <th>valor</th>
    </tr>
    @foreach ($produtos as $value)

      <tr>
        <td>{{ $value->id         }}</td>
        <td>{{ $value->nome       }}</td>
        <td>{{ $value->quantidade }}</td>
        <td>{{ $value->valor      }}</td>
      </tr>

    @endforeach

  </table>

</body>
</html>
