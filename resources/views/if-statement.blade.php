<html>

<body>
    <p>
        @if(count($hobbies)==1)
        i have one hobby!
        @elseif (count($hobbies)>1)
        i have many hobbies!
        @else
        i don't have anything
        @endif
    </p>
</body>

</html>