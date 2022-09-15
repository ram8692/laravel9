<h1>List Members</h1>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>gender</td>
        <td>created</td>
    </tr>
    @foreach($data as $member)
    <tr>
        <td>{{$member->id}}</td>
        <td>{{$member->name}}</td>
        <td>{{$member->gender}}</td>
        <td>{{$member->created}}</td>
    </tr>
    @endforeach 
</table>