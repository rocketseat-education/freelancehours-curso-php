<div class="flex items-center justify-between mt-4 text-[14px]" wire:poll.1s>
    <div class="text-[#8C8C9A]  leading-6">Encerra em:</div>
    <div class="font-bold flex items-center space-x-1">
        <span class="text-white ">{{ $days }}</span><span>:</span>
        <span class="text-white ">{{ $hours }}</span><span>:</span>
        <span class="text-white ">{{ $minutes }}</span><span>:</span>
        <span class="text-white ">{{ $seconds }}</span>
    </div>
</div>