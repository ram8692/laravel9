<h1>List Members</h1>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>gender</td>
        <td>created</td>
        <td>action</td>
    </tr>
    @foreach($data as $member)
    <tr>
        <td>{{$member->id}}</td>
        <td>{{$member->name}}</td>
        <td>{{$member->gender}}</td>
        <td>{{$member->created}}</td>
        <td><a href="delete/{{$member->id}}">delete</a><a href="edit/{{$member->id}}">edit</a></td>
    </tr>
    @endforeach 
</table>