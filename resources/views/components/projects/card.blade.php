@props(['project'])
<x-ui.card class="col-span-2 ">
    <div class="flex items-start justify-between pb-4">
        <div class="flex flex-col gap-[16px]">
            <div>
                <span class="bg-[#C0F7B4] text-[#1D8338] rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide ">
                    {{ $project->status->label() }}
                </span>
            </div>
            <h1 class="text-[28px] text-white leading-9">
                {{ $project->title }}
            </h1>
            <div class="text-[#8C8C9A] text-[14px] leading-6">
                Publicado {{ $project->created_at->diffForHumans() }}
            </div>
        </div>
        <div>
            <livewire:proposals.create :$project />
            <livewire:projects.timer :$project />

        </div>
    </div>

    <div class="py-4 description">
        {!! $project->description !!}
    </div>

    <div class="py-4 space-y-4">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Tecnologias</div>
        <div class="flex gap-[8px] items-center pb-2">
            @foreach ($project->tech_stack as $tech)
            <x-ui.tech :icon="$tech" :text="$tech" />
            @endforeach
        </div>
    </div>

    <div class="pt-4 space-y-4">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Publicado Por</div>
        <div class="flex gap-[8px] items-center">
            <div>
                <x-ui.avatar src="{{ $project->author->avatar }}" />
            </div>

            <div>
                <div class="text-white text-[14px] font-bold tracking-wide">
                    {{ $project->author->name }}
                </div>
                <div class="flex items-center space-x-[4px]">
                    @foreach (range(1, $project->author->stars) as $star)
                    <x-ui.icons.star class="h-[14px]" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-ui.card>