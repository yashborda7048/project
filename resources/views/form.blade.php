<x-header />
<div class="container">
    <div class="row">
        <div class="col-md-8" id="main-content">
            <form class="row g-3" method="post" action="/create" enctype="multipart/form-data">
                <h2>{{ $type }} Card Form</h2>
                <br>
                <br>
                @if ($message = Session::get('success'))
                    <h3 class="success-message">{{ $message }}</h3>
                @endif
                @csrf
                <input type="hidden" name="card_type" value="{{ $type }}" />

                {{-- upload fornt img  --}}
                <div class="col-12">
                    <label for="front_img" class="form-label">Upload Fornt Img</label>
                    <input type="file" name="front_img" class="form-control" id="front_img" value="{{ old('front_img') }}">
                    @if ($errors->has('front_img'))
                        <span class="text-danger error">{{ $errors->first('front_img') }}</span>
                    @endif
                </div>

                {{-- upload fornt img  --}}
                <div class="col-12">
                    <label for="back_img" class="form-label">Upload Back Img</label>
                    <input type="file" name="back_img" class="form-control" id="back_img" value="{{ old('back_img') }}">
                    @if ($errors->has('back_img'))
                        <span class="text-danger error">{{ $errors->first('back_img') }}</span>
                    @endif
                </div>

                {{-- message  --}}
                <div class="col-12">
                    <label for="massage" class="form-label">massage</label>
                    <input type="text"  name="massage" class="form-control" id="massage" value="{{ old('massage') }}">
                </div>

                {{-- song name  --}}
                <div class="col-12">
                    <label for="song_name" class="form-label">Song Name</label>
                    <input type="text"  name="song_name" class="form-control" id="song_name" value="{{ old('song_name') }}">
                    @if ($errors->has('song_name'))
                        <span class="text-danger error">{{ $errors->first('song_name') }}</span>
                    @endif
                </div>

                {{-- name  --}}
                <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text"  name="name" class="form-control" id="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger error">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                {{-- date  --}}
                <div class="col-12">
                    <label for="user_date" class="form-label">Date</label>
                    <input type="date" name="user_date" class="form-control" id="user_date" value="{{ old('user_date') }}">
                    @if ($errors->has('user_date'))
                        <span class="text-danger error">{{ $errors->first('user_date') }}</span>
                    @endif
                </div>

                {{-- address  --}}
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text"  name="address" class="form-control" id="address" value="{{ old('address') }}">
                    @if ($errors->has('address'))
                        <span class="text-danger error">{{ $errors->first('address') }}</span>
                    @endif
                </div>

                {{-- font list  --}}
                <div class="col-12">
                    <label class="d-block mb-2">Font List</label>
                    <input type="radio" class="btn-check" name="font_style" id="manus" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="manus">Manus Font</label>

                    <input type="radio" class="btn-check" name="font_style" id="lovera" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="lovera">Lovera Font</label>

                    <input type="radio" class="btn-check" name="font_style" id="alice" autocomplete="off">
                    <label class="btn btn-outline-success" for="alice">Alice Font</label>

                    <input type="radio" class="btn-check" name="font_style" id="bakerie-bold" autocomplete="off">
                    <label class="btn btn-outline-danger" for="bakerie-bold">Bakerie Bold Font</label>

                    <input type="radio" class="btn-check" name="font_style" id="celandine" autocomplete="off">
                    <label class="btn btn-outline-warning" for="celandine">Celandine Font</label>
                </div>

                {{-- color list  --}}
                <div class="col-12">
                    <label class="d-block mb-2">Color List</label>
                    <input type="radio" class="btn-check" name="color" id="white" autocomplete="off"
                        checked>
                    <label class="btn btn-outline-secondary" for="white">White</label>

                    <input type="radio" class="btn-check" name="color" id="black" autocomplete="off">
                    <label class="btn btn-outline-dark" for="black">Black</label>

                    <input type="radio" class="btn-check" name="color" id="red" autocomplete="off">
                    <label class="btn btn-outline-danger" for="red">Red</label>

                    <input type="radio" class="btn-check" name="color" id="nevi-blue" autocomplete="off">
                    <label class="btn btn-outline-primary" for="nevi-blue">Nevi Blue</label>

                    <input type="radio" class="btn-check" name="color" id="pink" autocomplete="off">
                    <label class="btn btn-outline-warning" for="pink">Pink</label>
                </div>

                {{-- payment_status  --}}
                <input type="hidden" name="payment_status" value="true" />
                
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Buy</button>
                </div>
            </form>
        </div>
    </div>
</div>
<x-footer />
