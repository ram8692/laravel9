<form action="/editform" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" placeholder="Name" value="{{$data['name']}}">
    <input type="text" name="gender" placeholder="gender" value="{{$data['gender']}}">
    <input type="submit">
</form>