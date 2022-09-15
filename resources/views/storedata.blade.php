<h1>store data </h1>
@if(session('mess'))
<h3>Data Saved for{{session('mess')}}</h3>    
@endif
<form action="storeformdata" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="gender" placeholder="gender">
    <input type="submit">
</form>