<h1><?php echo $heading; ?></h1>
@if(count($listings) == 0) 
    <p>Apologies: No lisytings</p>
@endif

@foreach ($listings as $listing)
    <div class="listing-div">
        <h2>{{ $listing['title']}}</h2>
        <p>{{ $listing['description']}}</p>
    </div>
@endforeach