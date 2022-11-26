<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                <div class="space-y-6 border rounded-xl p-5">
                    @foreach ($statuses as $status)
                        <div class="flex">
                            <div class="flex shrink-0 mr-3">
                                <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150" alt="{{ $status->user->name }}">
                            </div>
                            <div>
                                <div class="font-semibold">
                                    {{ $status->user->name  }}
                                </div>
                                <div class="leading-relaxed">
                                    {{ $status->body  }}
                                </div>
                                <div class="text-sm text-gray-600">
                                    {{ $status->created_at->diffForHumans()  }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-span-5">
                <div class="border p-5 rounded-xl">
                    <h1 class="font-semibold mb-5">Recenly follow</h1>
                    <div class="flex">
                        <div class="flex shrink-0 mr-3">
                            <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150" alt="{{ $status->user->name }}">
                        </div>
                        <div>
                            <div class="font-semibold">
                                {{ $status->user->name  }}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $status->created_at->diffForHumans()  }}
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>
