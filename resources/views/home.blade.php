<x-header />
<div>
    <div id="main-content">
        <form class="post-form" method="post" action="/create" enctype="multipart/form-data">
            <h2>Add Form Record</h2>
            <br>
            <br>
            @if ($message = Session::get('success'))
                <h3 class="success-message">{{ $message }}</h3>
            @endif
            @csrf
            {{-- select card type  --}}
            <div class="form-group">
                <label>Card Type <span class="text-danger">*</span></label>
                <select name="card_type" value="{{ old('card_type') }}">
                    <option value="" selected disabled>Select Card Type</option>
                    <option value="simple">Simple</option>
                    <option value="minimal">Minimal lllation Card</option>
                    <option value="detailed">Detailed lllation Card</option>
                    <option value="map">Map Card</option>
                    <option value="customization">Total Customization Card</option>
                </select>
                @if ($errors->has('card_type'))
                    <span class="text-danger error">{{ $errors->first('card_type') }}</span>
                @endif
            </div>

            {{-- upload fornt img  --}}
            <div class="form-group">
                <label>Upload Fornt Img</label>
                <input type="file" name="front_img" value="{{ old('front_img') }}" />
                @if ($errors->has('front_img'))
                    <span class="text-danger error">{{ $errors->first('front_img') }}</span>
                @endif
            </div>

            {{-- upload back img  --}}
            <div class="form-group">
                <label>Upload Back Img</label>
                <input type="file" name="back_img" value="{{ old('back_img') }}" />
                @if ($errors->has('back_img'))
                    <span class="text-danger error">{{ $errors->first('back_img') }}</span>
                @endif
            </div>

            {{-- message  --}}
            <div class="form-group">
                <label>massage</label>
                <input type="text" name="massage" value="{{ old('massage') }}" />
            </div>

            {{-- song name  --}}
            <div class="form-group">
                <label>Song Name <span class="text-danger">*</span></label>
                <input type="text" name="song_name" value="{{ old('song_name') }}" />
                @if ($errors->has('song_name'))
                    <span class="text-danger error">{{ $errors->first('song_name') }}</span>
                @endif
            </div>

            {{-- name  --}}
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="text-danger error">{{ $errors->first('name') }}</span>
                @endif
            </div>

            {{-- date  --}}
            <div class="form-group">
                <label>Date <span class="text-danger">*</span></label>
                <input type="date" name="user_date" value="{{ old('user_date') }}" />
                @if ($errors->has('user_date'))
                    <span class="text-danger error">{{ $errors->first('user_date') }}</span>
                @endif
            </div>

            {{-- address  --}}
            <div class="form-group">
                <label>Address <span class="text-danger">*</span></label>
                <input type="text" name="address" value="{{ old('address') }}" />
                @if ($errors->has('address'))
                    <span class="text-danger error">{{ $errors->first('address') }}</span>
                @endif
            </div>

            {{-- font list  --}}
            <div class="form-group">
                <label>Font List <span class="text-danger">*</span></label>
                <select name="font_style" value="{{ old('font_style') }}">
                    <option value="" selected disabled>Select Font Style</option>
                    <option value="manus">manus Font</option>
                    <option value="lovera">lovera Font</option>
                    <option value="alice">alice Font</option>
                    <option value="bakerie-bold">bakerie bold Font</option>
                    <option value="celandine">celandine Font</option>
                </select>
                @if ($errors->has('font_style'))
                    <span class="text-danger error">{{ $errors->first('font_style') }}</span>
                @endif
            </div>

            {{-- color list  --}}
            <div class="form-group">
                <label>Color List<span class="text-danger">*</span></label>
                <select name="color" value="{{ old('color') }}">
                    <option value="" selected disabled>Select Color</option>
                    <option value="white">White</option>
                    <option value="black">black</option>
                    <option value="red">red</option>
                    <option value="nevi-blue">nevi blue</option>
                    <option value="pink">pink</option>
                </select>
                @if ($errors->has('color'))
                    <span class="text-danger error">{{ $errors->first('color') }}</span>
                @endif
            </div>

            {{-- payment_status  --}}
            <div class="form-group">
                <label>Payment Status <span class="text-danger">*</span></label>
                <select name="payment_status" value="{{ old('payment_status') }}">
                    <option value="true">True</option>
                    <option value="false" selected>False</option>
                </select>
                @if ($errors->has('payment_status'))
                    <span class="text-danger error">{{ $errors->first('payment_status') }}</span>
                @endif
            </div>

            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</div>
<x-footer />
