@if(session('user'))
<h3>Data Saved for{{session('user')}}</h3>    
@endif

<form action="storecontroller" method="post">
@csrf
<input type="text" name="user">
<input type="password" name="password">
<input type="submit" value="Login">
 
</form>
