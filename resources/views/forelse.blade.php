<html>

<body>
    <ul>
        @forelse($hobbies as $hobby)
        <li>{{$hobby}}</li>
        @empty
        <li>Tidak ada hobi</li>
        @endforelse
    </ul>
</body>

</html>