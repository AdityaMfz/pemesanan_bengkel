<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('My Profile') }}
</h2>

<div class="py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="created_at" class="form-label">{{ __('Registered At') }}</label>
                        <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $user->created_at->format('d M Y, H:i') }}" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
