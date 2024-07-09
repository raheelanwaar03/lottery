@extends('layouts.app')

@section('content')
    <section id="cart" class="py-5">
        <div class="container shadow-lg">
            <div class="row">
                <div class="col-md-6">
                    {{-- making a beautifull design to show coin details --}}
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="text-center card-title">Pay {{ $coin->price }} PKR for {{ $coin->qty }} Coins by
                                using below details</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/img/cred.webp') }}" height="150px" width="150px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="background-color: #070b1a;">
                        <div class="card-body text-white">
                            <h4 class="mb-4 text-center">Pay Wallet Name</h4>
                            <div class="text-center">
                                <img src="https://www.investopedia.com/thmb/hJrIBjjMBGfx0oa_bHAgZ9AWyn0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/qr-code-bc94057f452f4806af70fd34540f72ad.png"
                                    alt="" class="img-fluid" width="200">
                            </div>
                            <div
                                class="border mt-4 rounded-pill px-4 py-2 d-flex justify-content-between align-items-center pe-auto">
                                <p style="margin-top:10px;" id="text-to-copy">432 123 786</p><span id="copy-button"><i
                                        class="bi bi-clipboard"></i></span>
                            </div>
                            <form action="{{ route('User.Purchased.Coins', $coin->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-5">
                                    <label for="tid" class="mb-2">Transaction ID <span>*</span></label>
                                    <input type="text" name="tid" id="tid"
                                        class="form-control form-control-lg border-0">
                                </div>
                                <div class="form-group">
                                    <label for="image" class="mb-2">Payment ScreenShot<span>*</span></label
                                        class="form-control form-control-lg border-0">
                                    <input type="file" name="image" id="image"
                                        class="form-control form-control-lg border-0">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" class="btn bg-gradient-theme btn-lg w-100"
                                        value="Submit Transaction">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyButton = document.getElementById('copy-button');
            const textToCopy = document.getElementById('text-to-copy');

            copyButton.addEventListener('click', function() {
                const text = textToCopy.textContent;

                navigator.clipboard.writeText(text).then(function() {
                    console.log('Till ID copied to clipboard');
                    alert('Till ID copied to clipboard');
                }).catch(function(error) {
                    console.error('Error copying text: ', error);
                });
            });
        });
    </script>
@endsection
