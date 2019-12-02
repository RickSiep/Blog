@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')

    <h2 class="text-center p-5">Persoonlijk actie plan</h2>

    <div class="text-center">
    <h3 class="p-2">B1-K1 Levert een bijdrage aan het ontwikkeltraject</h3>
        <ul>
            <li>
                B1-K1-W1 Stelt de opdracht vast
            </li>

            <li>
                B1-K1-W2 Levert een bijdrage aan het projectplan
            </li>

            <li>
                B1-K1-W3 Levert een bijdrage aan het ontwerp
            </li>

            <li>
                B1-K1-W4 Bereidt de realisatie voor
            </li>
        </ul>

        <h3 class="p-2">B1-K2 Realiseert en test (onderdelen van) een product</h3>
        <ul>
            <li>
                B1-K2-W1 Realiseert (onderdelen van) een product
            </li>
            <li>
                B1-K2-W2 Test het ontwikkelde product
            </li>
        </ul>

        <h3 class="p-2">B1-K3 Levert een product op</h3>
        <ul>
            <li>
                B1-K3-W1 Optimaliseert het product
            </li>
            <li>
                B1-K3-W2 Levert het product op
            </li>
            <li>
                B1-K3-W3 Evalueert het opgeleverde product
            </li>
        </ul>

        <h3 class="p-2">P1-K1 Onderhoudt en beheert de applicatie</h3>
        <ul>
            <li>
                P1-K1-W1 Onderhoudt een applicatie
            </li>
            <li>
                P1-K1-W2 Beheert gegevens
            </li>
        </ul>

        <h3 class="p-2">B-H Beroepshouding - persoonlijke competenties</h3>
        <ul>
            <li>
                B-H1 Ik gedraag mij klantgericht, kritisch, creatief en flexibel.
            </li>
            <li>
                B-H2 Ik werk goed samen én communiceer met mensen op alle niveaus.
            </li>
            <li>
                B-H3 Ik toon doorzettingsvermogen en kan onder tijdsdruk werken.
            </li>
            <li>
                B-H4 Ik denk niet in problemen maar in oplossingen.
            </li>
            <li>
                B-H5 Ik neem initiatief en organiseer over mijn eigen aandeel in het werk.
            </li>
            <li>
                B-H6 Ik ben in staat om voortdurend bij te leren.
            </li>
        </ul>
    </div>

@endsection
