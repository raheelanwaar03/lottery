@extends('layouts.app')
@section('content')
    <section id="product-container" class="bg-theme-dark pb-5">
        <form action="{{ route('User.Purchase.Lottery', $lottery->id) }}" method="POST">
            @csrf
            <div class="mobile-bottom-checkout bg-theme-dark d-block d-md-none">
                <div class="qty-box px-3 mt-3">
                    <p class="btn btn-minus mt-3 btn-dark py-2 text-white" onclick="changeQty(-1)">-</p>
                    <input type="text" name="ticket_qty" id="qtyInput" class="form-control py-2 bg-dark text-white w-100"
                        value="1" readonly>
                    <p class="btn btn-plus btn-dark mt-3 py-2 text-white" onclick="changeQty(1)">+</p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn bg-gradient-theme mt-4 py-3 fw-bold w-100">
                        <div class="d-flex justify-content-center">
                            <h3 class="mb-0">Enter Now</h3>
                        </div>
                    </button>
                </div>
                <script>
                    function changeQty(change) {
                        var qtyInput = document.getElementById('qtyInput');
                        var currentQty = parseInt(qtyInput.value);
                        var newQty = currentQty + change;
                        if (newQty > 0) {
                            qtyInput.value = newQty;
                        }
                    }
                </script>
            </div>
        </form>
        <div class="d-block d-md-none">
            <div class="">
                <img src="{{ asset('lottery/' . $lottery->picture) }}" alt="Product Image" width="100%" class="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-md-1 order-2 mt-4">
                    <div class="d-none d-md-block">
                        <img src="{{ asset('lottery/' . $lottery->picture) }}" alt="Product Image" width="100%"
                            class="rounded">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="accordion" class="mt-5">
                                <div class="d-flex flex-column gap-5">
                                    <div class="card border-dark">
                                        <div class="card-header accordion-header bg-theme-dark text-white py-3"
                                            data-bs-toggle="collapse" href="#collapseOne">
                                            <h4 class="fw-bold">About the Price</h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body text-white bg-theme-dark pb-5">
                                                <h6>Unlock a world of possibilities with our thrilling {{ $lottery->price }}
                                                    Coins cash raffle
                                                    bonanza!</h6>
                                                <p>Imagine the windfall you could experience – whether you're dreaming of a
                                                    spontaneous getaway, that latest tech gadget, or perhaps boosting your
                                                    savings for a larger goal in the future. This isn't just another raffle;
                                                    it's your chance to make those dreams come a little closer to reality.
                                                </p>
                                                <p>Every ticket you secure increases your odds, drawing you nearer to that
                                                    delightful {{ $lottery->price }} Coins prize. Are you a first-time
                                                    participant? Or perhaps a
                                                    seasoned raffle enthusiast? No matter your experience, this is the
                                                    perfect opportunity to dive into the excitement.</p>
                                                <p>As the anticipation builds, picture the moment you could be named the
                                                    lucky winner. Will you splurge on a treat? Or save and invest? The
                                                    choice is yours!</p>
                                                <p>Don't let this chance slip through your fingers. Dive in, dream big, and
                                                    stand a chance to be our next {{ $lottery->price }} Coins sensation.
                                                    #Epic500PoundWin</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-dark">
                                        <div class="card-header accordion-header bg-theme-dark text-white py-3"
                                            data-bs-toggle="collapse" href="#collapseTwo">
                                            <h4 class="fw-bold">Price detail & specificaton</h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body text-white bg-theme-dark pb-5">
                                                <ul>
                                                    <li>{{ $lottery->price }} Coins</li>
                                                    <li>Tax-Free Cash</li>
                                                    <li>Direct Bank Transfer</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-dark">
                                        <div class="card-header accordion-header bg-theme-dark text-white py-3"
                                            data-bs-toggle="collapse" href="#collapseThree">
                                            <h4 class="fw-bold">Raffle Terms</h4>
                                        </div>
                                        <div id="collapseThree" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body text-white bg-theme-dark pb-5">
                                                <ul>
                                                    <li>The draw will be carried out by Random.org, our third party random
                                                        number generator.</li>
                                                    <li>The draw will take place regardless of whether all the tickets sell
                                                        out.</li>
                                                    <li>The draw will take place as soon as all tickets are sold OR the
                                                        raffle expires.</li>
                                                    <li>The raffle will expire at <div id="countdown{{ $lottery->id }}">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 order-md-2 order-1 mt-4">
                    <div class="card bg-theme-dark border border-dark text-white">
                        <div class="card-body">
                            <div class="text-center">
                                <h3>{{ $lottery->title }}</h3>
                                <div class="badge bg-dark mt-3 mb-4 fs-3">
                                    {{ $lottery->price }} Coins.
                                </div>
                            </div>
                            <div class="icon-group d-flex justify-content-around align-items-center">
                                <div class="icon-item text-center">
                                    <i class="bi bi-calendar-week fs-3"></i>
                                    <p class="mb-0 fs-7">Draw date: {{ $lottery->time }}</p>
                                </div>
                                <div class="icon-item text-center">
                                    <i class="bi bi-ticket-perforated fs-3"></i>
                                    <p class="mb-0 fs-7">1000 total tickets</p>
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="">
                                    <div class="d-flex justify-content-between mb-2 align-items-center fs-7">
                                        <span>1</span>
                                        <span>0 tickets sold</span>
                                        <span>500</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress bg-gradient-theme" style="width: 50%; height: 6px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="terms text-center">
                                <p class="fs-7">See terms for <a href="#"
                                        class="text-gradient-theme text-decoration-none">free postal entry</span></p>
                            </div>
                            <div class="d-none d-md-block">
                                <form action="{{ route('User.Purchase.Lottery', $lottery->id) }}" method="POST">
                                    @csrf
                                    <div class="checkout-ticket">
                                        <div class="form-group">
                                            <select name="ticket_qty" id="ticket_qty"
                                                class="form-select bg-theme-secondary text-white">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        {{-- hide on mobile screen --}}
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning mt-4 py-3 fw-bold w-100">Enter
                                                Now</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="review">
                            {{-- <div class="text-center mt-4">
                                    <img src="{{ asset('assets/img/trust.svg') }}" alt="Trust">
                                </div> --}}
                            <div class="text-white text-start mt-4">
                                <p>Instant draw Thursday 13th Jun at 10PM via Random.org, an independent true random
                                    software.</p>
                                <p>This competition will close early if all tickets sell out and the draw will take
                                    place on that same day!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        function startCountdown(days) {
            const countdownElement = document.getElementById('countdown{{ $lottery->id }}');
            const endDate = new Date().getTime() + days * 24 * 60 * 60 * 1000;

            function updateCountdown() {
                const now = new Date().getTime();
                const distance = endDate - now;
                if (distance < 0) {
                    clearInterval(interval);
                    countdownElement.innerHTML = "Countdown Ended";
                    return;
                }
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
            const interval = setInterval(updateCountdown, 1000);
            updateCountdown(); // initial call to display the countdown immediately
        }
        // Example: Start countdown for 2 days
        startCountdown({{ $lottery->time }});
    </script>
@endsection
