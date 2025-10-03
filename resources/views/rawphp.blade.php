<html>

<body>
    @php
    class Person{
    public string $name;
    public string $alamat;
    }

    $person = new Person();
    $person->name = "Rayhan";
    $person->alamat = "Campang";
    @endphp

    <p>{{$person->name}}</p>
    <p>{{$person->alamat}}</p>
</body>

</html>