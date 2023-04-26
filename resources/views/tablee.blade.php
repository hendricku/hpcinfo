
<table>
    <tr>
        <th>ID</th>
        <th>blog Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
    </tr>
    @foreach ($blogs as $blog):
        <tr>
            <td>{{ $blog['id'] }}</td>
            <td>{{ $blog['blog_name'] }}</td>
            <td>{{ $blog['unit_price'] }}</td>
            <td>{{ $blog['quantity'] }}</td>
        </tr>
    @endforeach
</table>
