@props([
    'icon',
    'text'
])
<div class="uppercase font-bold text-white flex items-center space-x-2 px-[8px] py-[4px] rounded-full bg-[#181826] border border-[#1E1E2C]">
    <x-dynamic-component component="ui.icons.{{ $icon }}" class="w-5 h-5"/>
    <span class="text-[12px] tracking-wider text-[#C3C3D1]">{{ $text }}</span>
</div>
