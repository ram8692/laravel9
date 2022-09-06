<x-header name="userd"/>
<h2>
    {{URL::current()}}
    about page {{$names}}
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
