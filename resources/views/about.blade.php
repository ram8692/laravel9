<x-header name="userd"/>
<h2>
    {{URL::current()}}
    about page {{$names}}
    @if($names == "rambabu")
    <h2>hii</h2>
    @else
    <h2>bye</h2>
    @endif

    @for($i = 0;$i<10;$i++)
    {{$i}}
    @endfor
</h2>
{{URL::current()}}
<br>
{{URL::full()}}
<br>
{{URL::to('/home')}}
<br>
{{URL::to('/about')}}
<br>
{{URL::previous()}}
<script>
    var userdata = @json($usersdata);
    console.log(userdata);
</script>
