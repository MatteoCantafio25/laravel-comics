<main>
        <div class="position-button">
            <a role="button" href="#">CURRENT SERIES</a>
        </div>
            <div class="content-container">
                @foreach ($series as $serie )    
                <div class="series-card">
                    <img src="{{$serie['thumb']}}" alt="{{$serie['series']}}">
                    <h3>{{$serie['series']}}</h3>
                </div>
                @endforeach
            </div>
        <div class="button-container">
            <a role="button" href="#">LOAD MORE</a>
        </div>
    </main>