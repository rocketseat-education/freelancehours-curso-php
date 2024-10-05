@props(['position'])


<div
    @class([
        "flex items-center justify-center rounded-full w-[40px] h-[40px]",
        "bg-[#FEF3C7] text-[#F59E0B]" => $position == 0,
        "bg-[#F1F5F9] text-[#94A3B8]" => $position == 1,
        "bg-[#FFEDD5] text-[#B45309]" => $position == 2,
        "bg-[#C0F7B4]" => $position == 3,
        "bg-[#FECDD3]" => $position == 4,
        "bg-[#F1F5F9]" => $position > 4,

    ])>
    @if($position < 3)
        <x-ui.icons.trophy class="w-[24px] h-[24px]"/>
    @elseif($position == 3)
        <x-ui.icons.arrow-up class="w-[24px] h-[24px]"/>
    @elseif($position == 4)
        <x-ui.icons.arrow-down class="w-[24px] h-[24px]"/>
    @else
        <x-ui.icons.minus class="w-[24px] h-[24px]"/>
    @endif
</div>
