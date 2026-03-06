    <x-cmplytnm>
        <header>
            <div class="container dettcontainer">
                <div class="row">
                    <div class="row">
                        <h2 class="display-4 text-center mb-4 titlevisit">Tutte le Visite Guidate</h2>
                    </div>
                    @foreach ($visits as $visit)
                    <div class="col-12 col-md-4 d-flex wrapcard">
                        <x-cmpcardnsvisits 
                        :id="$visit['id']"
                        :visitname="$visit['visitname']"
                        :img="$visit['img']"
                        :address="$visit['address']"
                        :authorname="$visit['authorname']"
                        />
                    </div>
                    @endforeach  
                </div>
            </div>
        </header>
    </x-cmplytnm>