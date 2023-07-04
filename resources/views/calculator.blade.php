<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="UTF-8">
        <title>Kalkulačka</title>
    </head>
    <body>
        <h1>Kalkulačka</h1>
        <form method="post" action="/calculator">
            @csrf
            <h6>Operacie</h6>
            <select name="operacia">
                @foreach($operacie as $operacia => $druh)
                    <option value="{{$operacia}}">{{$druh}}</option>
                @endforeach
            </select>
            <br>
            <input class="form-control" type="number" placeholder="Prve cislo" name="cislo1" value="{{$cislo1 ?? 0}}">
            <br>
            <input class="form-control" type="number" placeholder="Druhe cislo" name="cislo2" value="{{$cislo2 ?? 0}}">
            <button type="submit">Spočítej výsledek</button>
        </form>

        @if(isset($vysledok))
            <p>Vysledok je {{$vysledok}}</p>
        @endif
    </body>
</html>
