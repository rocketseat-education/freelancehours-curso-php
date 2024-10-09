<x-ui.card>
    <div class="flex items-center justify-between pb-4">
        <div class="flex flex-col ">
            <h2 class="text-[20px] text-white leading-9">
                Propostas
            </h2>
            <div class="text-[#8C8C9A] text-[12px]">
                Publicado {{ $this->lastProposalTime }}
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <x-ui.icons.people-group class="w-[18px] h-[18px]" />
            <span>{{ $proposals->total() }}</span>
        </div>
    </div>

    <div class="py-4">
        <div class="flex flex-col gap-7">

            @foreach ($proposals as $proposal)
            <x-proposals.item :$proposal :position="$loop->index" />
            @endforeach
        </div>

        @if ($proposals->hasMorePages())
        <div class="mt-6">
            <button class="bg-[#181826] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                    hover:bg-[#373751] transition duration-300 ease-in-out w-full" wire:click="loadMore">
                Carregar Mais
            </button>
        </div>
        @endif
    </div>

</x-ui.card>