<div class="border-b mb-5">
    <x-container>
        <div class="flex">
            <a href="{{ route('profile', $user->username) }}" class="px-5 py-2  text-center border-r">
                <div class="text-2xl mb-2">{{ $user->statuses->count() }}</div>
                <div class="uppercase text-xs">Status</div>
            </a>
            <a href="{{ route('profile.following', [$user->username, 'following']) }}"
                class="px-5 py-2  text-center border-r">
                <div class="text-2xl mb-2">{{ $user->follows->count() }} </div>
                <div class="uppercase text-xs">Following</div>
            </a>
            <a href="{{ route('profile.following', [$user->username, 'follower']) }}"
                class="px-5 py-2  text-center border-r">
                <div class="text-2xl mb-2">{{ $user->followers->count() }}</div>
                <div class="uppercase text-xs">Follower</div>
            </a>
        </div>
    </x-container>
</div>
