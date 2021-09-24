
<div>
    <a href="{{ route('admin.create') }}">Ajouter un voyage</a> 
</div>

@foreach ($tripList as $trip)
    <div>
        <p>
            {{ $trip->id }} -- 
            {{ $trip->destination }} -- 
            {{ $trip->description }} -- 
            {{ $trip->date }} -- 
            {{ $trip->cost }} -- 
            {{ $trip->rating }} -- 
            <a href="{{ route('admin.show', $trip->id) }}">VOIR</a> -- 
            <a href="{{ route('admin.edit', $trip->id) }}">MODIFIER</a> -- 
            <a href="{{ route('admin.delete', $trip->id) }}">SUPPRIMER</a> 
        </p>
    </div>
@endforeach
