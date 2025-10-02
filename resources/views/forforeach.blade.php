<html>

<body>
    <ul>
        @for($i = 0; $i < $limit; $i++)
            <li>{{$i}}</li>
            @endfor
    </ul>
    <ul>
        @foreach($hobbies ?? [] as $hobby)
        <li>{{$hobby}}</li>
        @endforeach
    </ul>
</body>

</html>