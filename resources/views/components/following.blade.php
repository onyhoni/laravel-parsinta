@foreach ($users as $user)
    <x-card>
        <div class="flex items-center">
            <div class="flex shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{ $user->name }}">
            </div>
            <div>
                <div class="font-semibold">
                    {{ $user->name }}
                </div>
                <div class="text-sm text-gray-600">
                    {{ $user->pivot->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
    </x-card>
@endforeach
