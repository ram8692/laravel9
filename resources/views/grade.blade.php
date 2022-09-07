<!-- <form action="getdata" method="POST">
    @csrf
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form> -->
<?php 
print_r($collection);
?>
<table>
    <tr>
        <td>userId</td>
        <td>id</td>
        <td>title</td>
        <td>completed</td>
    </tr>
     @foreach($collection as $data)
    <tr>
        <td>{{$data->userId}}</td>
        <td>{{$data->id}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->completed}}</td>
    </tr>
    @endforeach 
</table>