@once

<style>
    .red {
        color: red;
    }
</style>

@endonce

<h1>{{$akun['name']}}</h1>
<ul>
    @foreach($akun['hobbies'] as $hobby)
    <li class="red">{{$hobby}}</li>
    @endforeach
</ul>