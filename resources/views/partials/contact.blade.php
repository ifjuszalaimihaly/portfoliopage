<section id="contact">
    <h1>Kapcsolat</h1>
    <div class="row">
        <div class="col">
            <form method="post" action="{{route('contact')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Név</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Név">
                </div>
                <div class="form-group">
                    <label for="subject">Tárgy</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Tárgy">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="message">Üzenet</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Üzenet"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">
                    Üzenet küldése
                </button>
            </form>
        </div>
    </div>
</section>